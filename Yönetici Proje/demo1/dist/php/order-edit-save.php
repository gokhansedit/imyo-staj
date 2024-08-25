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
	$urunNo 				= $_POST['urun-no'];
	$musteri 				= $_POST['musteri'];
	$adet 					= $_POST['adet'];
	$siparisTarih		= $_POST['siparis_tarih'];
	$teslimatTarih 	= $_POST['teslimat_tarih'];
	$durum					= $_POST['durum'];

    $urun_sorgu = $con->prepare('SELECT * FROM urun where urun_no = ? ');
    $urun_sorgu->bind_param('s', $urunNo);
    if( $urun_sorgu->execute() ){ 
      $urun_result = $urun_sorgu->get_result();
      $urun = $urun_result->fetch_object();
      if($urun_result->num_rows == 0){
        echo 3;
        exit;
      }
    }
     

    $veri_cek = "SELECT * FROM  siparisler WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();
        $stmt = $con->prepare("UPDATE siparisler SET urun_no = ?,musteri = ?,adet = ?,siparis_tarih = ?,teslimat_tarih = ?,ucret = ?,durum = ? WHERE id = ?");
            $stmt->bind_param('ssissiii',$urunNo,$musteri,$adet,$siparisTarih,$teslimatTarih,$ucret,$durum,$id);

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