<?php 
include("settings.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'], $_GET['calisan_id'])) {
    $get_id = coz($_GET['id']);
    $get_calisan_id = coz($_GET['calisan_id']);
    
    // Parametreli ifadeler kullanılarak SQL enjeksiyonuna karşı koruma sağlanır
    $veri_cek = "SELECT * FROM toplanti WHERE id = ?";
    $stmt = $con->prepare($veri_cek);
    $stmt->bind_param('i', $get_id);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $kayit = $result->fetch_object();
        
        if ($kayit) {
            // Mevcut kaydı kontrol et
            $kontrol_sorgu = "SELECT * FROM toplanti_katilim WHERE toplanti_id = ? AND calisan_id = ?";
            $kontrol_stmt = $con->prepare($kontrol_sorgu);
            $kontrol_stmt->bind_param('ii', $get_id, $get_calisan_id);
            
            $kontrol_stmt->execute();
            $kontrol_result = $kontrol_stmt->get_result();
            
            if ($kontrol_result->num_rows == 0) {
                // Kayıt mevcut değilse ekleme işlemi yap
                $stmt = $con->prepare("INSERT INTO toplanti_katilim (toplanti_id, calisan_id) VALUES (?, ?)");
                $stmt->bind_param('ii', $get_id, $get_calisan_id);
                
                if ($stmt->execute()) {
                    header('Location: ' . $kayit->link);
                    exit;
                } else {
                    error_log("Hata: " . $stmt->error);
                    echo "Bir hata oluştu, lütfen daha sonra tekrar deneyiniz.";
                }
            } else {
                // Kayıt mevcutsa, ekleme işlemi yapılmaz
                echo "Bu toplantıya bu çalışan zaten kayıtlı.";
                header('Location: ' . $kayit->link);
            }
            $kontrol_stmt->close();
        } else {
            echo "Toplantı bulunamadı.";
        }
    } else {
        error_log("Hata: " . $stmt->error);
        echo "Bir hata oluştu, lütfen daha sonra tekrar deneyiniz.";
    }

    $stmt->close();
    $con->close();
} else {
    echo "Geçersiz istek.";
}
?>
