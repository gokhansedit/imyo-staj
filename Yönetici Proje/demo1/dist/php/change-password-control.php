<?php 
include("settings.php");
if (isset($_GET['id'],$_POST['password'])) {
  
  $get_id = coz($_GET['id']);
  $id = htmlspecialchars($get_id);
  $password = $_POST['password'];
    $veri_cek = "SELECT * FROM  user WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      
      if ($result->num_rows > 0) {
        $kayit = $result->fetch_object();
      }
      else {
        echo json_encode(['status' => 0, 'message' => 'Geçersiz kullanıcı']);
        exit;
      }
      $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $con->prepare("UPDATE user SET password = ? WHERE id = ?");
            $stmt->bind_param('si',$password,$id);
            if ($stmt->execute()) {
              echo json_encode(['status' => 1, 'message' => 'Şifre başarıyla yenilendi.']);

            } else {
               
                echo json_encode(['status' => 0, 'message' => 'Hata : ' . $stmt->error]);
            }
          

      

    } else {
      echo json_encode(['status' => 0, 'message' => 'Hata : ' . $stmt->error]);
    }

    $stmt->close();


$con->close();


}
else {
  echo "post yok";
}
?>