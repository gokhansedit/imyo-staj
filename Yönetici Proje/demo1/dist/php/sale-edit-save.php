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
  $urunNo = $_POST['urun-no'];
	$satisAdet = $_POST['satis-adet'];
	$satisFiyat = $_POST['satis-fiyat'];
	$satisBirim = $_POST['satis-birim'];
	$satisfFirma = $_POST['firma'];
  $sorgu = $con->prepare('SELECT * FROM urun where urun_no = ?');
  $sorgu->bind_param('s', $urunNo);
  if($sorgu->execute()) {		
      $sorgu_result = $sorgu->get_result();	
      if($sorgu_result->num_rows == 0) {
       echo 3;
        exit;
      }
  }
    $veri_cek = "SELECT * FROM  satis WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();
        $stmt = $con->prepare("UPDATE satis SET urun_no = ?,adet = ?,fiyat = ?,para_birim = ?,firma=?  WHERE id = ?");
            $stmt->bind_param('siissi',$urunNo,$satisAdet,$satisFiyat,$satisBirim,$satisfFirma,$id);
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