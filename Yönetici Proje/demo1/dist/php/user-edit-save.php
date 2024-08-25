<?php 
include('settings.php');


// Oturum kontrolü
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  
  $id = htmlspecialchars(coz($_POST['id']));
  $mail = isset($_POST['user_email']) ? $_POST['user_email'] : '';
	$name =  isset($_POST['name']) ? $_POST['name'] : '';
	$password =  isset($_POST['user_password']) ? $_POST['user_password'] : NULL;
	$user_role =  isset($_POST['role']) ? $_POST['role'] : '';
	$image =  $_FILES['image']['name'];

    $veri_cek = "SELECT * FROM  user WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();

      if($password == NULL) {
        $password = $kayit->password;
      }
      else {
        $password = password_hash($password, PASSWORD_DEFAULT);
      }
      if(empty($image))
      {
        $image_name = $kayit->image;
      }
      else {
        $image = substr(uniqid(rand(), true), 10, 16);
				$image_name = $image.".jpg";
      }
        $stmt = $con->prepare("UPDATE user SET name = ?,mail = ?,password = ?,image = ?,role = ? WHERE id = ?");
            $stmt->bind_param('sssssi', $name,$mail,$password,$image_name,$user_role,$id);
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
			$handle->process('../assets/user-image/');
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