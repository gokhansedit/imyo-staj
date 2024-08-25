<?php 
include('settings.php');


// Oturum kontrolü
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
  
  $get_id = coz($_GET['id']);
  $id = htmlspecialchars($get_id);
    $veri_cek = "SELECT * FROM  satis WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();
        $stmt = $con->prepare("DELETE FROM satis WHERE id = ?");
            $stmt->bind_param('i', $id);
            if ($stmt->execute()) {
                echo 1;
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