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
	$urunAd = $_POST['urun-ad'];
	$urunAdet = $_POST['urun-adet'];
	$urunFiyat = $_POST['urun-fiyat'];
	$image =  $_FILES['image']['name'];

    $veri_cek = "SELECT * FROM  urun WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();

  
      if(empty($image))
      {
        $image_name = $kayit->image;
      }
      else {
        $image = substr(uniqid(rand(), true), 10, 16);
				$image_name = $image.".jpg";
      }
        $stmt = $con->prepare("UPDATE urun SET urun_no = ?,urun_ad = ?,urun_adet = ?,urun_fiyat = ?,image = ? WHERE id = ?");
            $stmt->bind_param('sssssi',$urunNo,$urunAd,$urunAdet,$urunFiyat,$image_name,$id);
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
if(!empty($image))
			{
				include("class.upload.php");
			$handle = new \Verot\Upload\Upload($_FILES['image']);
			if ($handle->uploaded) {
			$handle->file_new_name_body = $image;
			$handle->image_resize         = true;
			$handle->image_convert = 'jpg';
			$handle->image_x              = 350;
			$handle->image_ratio_y        = true;
			$handle->process('../assets/product-image/');
			if ($handle->processed) {
		
			} else {
				echo ' -- İmage error : ' . $handle->error;
			}
			} 
			}



}
else {
  echo "post yok";
}
?>