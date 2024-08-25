<?php 
include('settings.php');


// Oturum kontrolü
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  
  $get_id = coz($_POST['id']);
  $id = htmlspecialchars($get_id);
  $gelirAd = $_POST['gelirAd'];
	$gelirTutar = $_POST['gelirTutar'];
	$gelirTur = $_POST['gelirTur'];
	$gelirFirma = $_POST['firma'];

    $veri_cek = "SELECT * FROM  gelir WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();
        $stmt = $con->prepare("UPDATE gelir SET gelirAd = ?,gelirTutar = ?,gelirTur = ?,gelirFirma = ? WHERE id = ?");
            $stmt->bind_param('ssssi',$gelirAd,$gelirTutar,$gelirTur,$gelirFirma,$id);
            if ($stmt->execute()) {
                echo "Başarıyla Kaydedildi";

            } else {
                echo "Hata : " . $stmt->error;
            }
          

      

    } else {
        echo "Hata : " . $stmt->error;
    }

    $stmt->close();


$con->close();


}
else {
  echo "post yok";
}
?>