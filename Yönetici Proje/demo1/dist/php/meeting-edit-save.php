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
	$baslik 		    = $_POST['baslik'];
	$date 			    = $_POST['date'];
	$link 			    = $_POST['link'];
	$katilimcilar 	=   isset($_POST['katilimcilar']) ? $_POST['katilimcilar'] : '';
  if(!empty($katilimcilar)) { 
    $katilimcilar = implode(',', array_map('intval', $katilimcilar)); 
  }
    $veri_cek = "SELECT * FROM  gelir WHERE id = ?";
    $stmt  =  $con->prepare($veri_cek);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
      $result = $stmt->get_result();
      $kayit = $result->fetch_object();
     
        $stmt = $con->prepare("UPDATE toplanti SET baslik = ?,katilimcilar = ?,tarih = ?,link = ? WHERE id = ?");
        $stmt->bind_param('ssssi',$baslik,$katilimcilar,$date,$link,$id);
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