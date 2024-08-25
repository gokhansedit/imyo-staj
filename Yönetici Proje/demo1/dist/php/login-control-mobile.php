<?php
ob_start();
include("settings.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
	date_default_timezone_set('Europe/Istanbul');

   

// POST verilerini kontrol etme
if (!isset($_POST['mail'], $_POST['password'])) {
    http_response_code(400);
    exit("Kullanıcı adı veya şifre boş girildi.");
}

// Kullanıcıyı veritabanından kontrol etme
if ($stmt = $con->prepare("SELECT id,password,role,name FROM user WHERE mail = ?")) {
    $stmt->bind_param('s', $_POST['mail']);
    $stmt->execute();
    $stmt->store_result();
    
    // Eğer kullanıcı bulunduysa
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $password,$role,$name);
        $stmt->fetch();
        
        // Girilen şifrenin doğruluğunu kontrol etme
        if (password_verify($_POST['password'], $password)) {
            



function loginActivity($userId, $action, $details = []) {
    $ipAddress = getIP(); // Kullanıcının gerçek IP adresini al
    $logFile = 'system.log'; // Log dosyasının yolu (_DIR_ geçerli dosyanın dizinini verir)

    // Log mesajını oluştur
    $logMessage = sprintf(
        "[%s] User ID: %s, IP Address: %s, Action: %s, Details: %s\n",
        date("Y-m-d H:i:s"),
        $userId,
        $ipAddress,
        $action,
        json_encode($details)
    );

    // Log dosyasına yaz
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}
$userId = $user_id; // Örneğin, oturumdan veya veritabanından aldığınız kullanıcı ID'si
$pageVisited = basename($_SERVER['PHP_SELF']); // Şu anki sayfanın adını al

$action = 'Mobile Login';
$details = [
'page' => $pageVisited
];

loginActivity($userId, $action, $details);
            // Giriş başarılı ise kullanıcı bilgilerini JSON olarak döndürme
            ini_set('session.gc_maxlifetime', 360000); // 1 saat
ini_set('session.cookie_lifetime', 360000); // Tarayıcı kapanana kadar
            session_start();
            session_regenerate_id(true); 
            $user = array(
                'Success' => 'Success',
                'user_id' => urlencode(kodla($user_id)),
                'name' => $name
            );
            echo json_encode($user);
        } else {
            http_response_code(401);
            echo "Şifre yanlış.";
        }
    } else {
        http_response_code(404);
        echo "Kullanıcı kaydı bulunamadı.";
    }
} else {
    http_response_code(500);
    echo "SQL hatası";
}
ob_end_flush();
?>
