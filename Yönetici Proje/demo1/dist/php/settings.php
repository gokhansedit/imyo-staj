<?php
    session_start();
	date_default_timezone_set('Europe/Istanbul');
	
    // Change this to your connection info.
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'gokce_2013';
    $DATABASE_NAME = 'staj';
    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Veritabanına bağlanılamadı: ' . mysqli_connect_error());
    }
    mysqli_set_charset($con, "utf8mb4");
	if(isset($_SESSION['login']))
	{
		$encrypted_userId = coz($_SESSION["user_id"]);
	$stmt = $con->prepare("SELECT * FROM user where id = ?");
	$stmt->bind_param("i", $encrypted_userId);
	if ($stmt->execute() ) {
		$login_result = $stmt->get_result();
		$login = $login_result->fetch_object();
	}
	}
	$home_page = "http://localhost/demo1/dist/graph-1.php";
    $menu =  '
		<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
			<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-element-11 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">Grafikler</span>
												<span class="menu-arrow"></span>
											</span>
                <div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="graph-1" href="graph-1.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Grafik 1</span>
													</a>
													<!--end:Menu link-->
												</div>
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" id="graph-2"  href="graph-2.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Grafik 2</span>
													</a>
													<!--end:Menu link-->
												</div>
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" id="graph-3"  href="graph-3.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Grafik 3</span>
													</a>
													<!--end:Menu link-->
												</div>
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" id="ai"  href="ai.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Ai Sorgu</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
											
												<!--end:Menu item-->
												</div>
										</div>
									
										
										

										<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
			<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-duotone fa-user-tie fa-lg" style="font-size:16px"></i>
												</span>
												<span class="menu-title">Admin İşlemleri</span>
												<span class="menu-arrow"></span>
											</span>
                <div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="users" href="users.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Kullanıcılar</span>
													</a>
													<!--end:Menu link-->
												</div>
											<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="products" href="products.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Ürünler</span>
													</a>
													<!--end:Menu link-->
												</div>
												
											<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="income" href="income.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Gelir</span>
													</a>
													<!--end:Menu link-->
												</div>
													<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="sales" href="sales.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Satışlar</span>
													</a>
													<!--end:Menu link-->
												</div>

												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="calisan" href="calisan.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Çalışanlar</span>
													</a>
													<!--end:Menu link-->
												</div>
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="orders" href="orders.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Siparişler</span>
													</a>
													<!--end:Menu link-->
												</div>
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link " id="meeting" href="meeting.php">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Toplantı</span>
													</a>
													<!--end:Menu link-->
												</div>
												
												<!--end:Menu item-->
												<!--begin:Menu item-->
											
												<!--end:Menu item-->
												</div>

											
										</div>
												<script>
											var element = document.getElementById("'.pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME).'");
											element.classList.add("active");
											</script>
									                                  
';
require __DIR__ . '/log_activity.php';
	function getIP() {
		if (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
			return trim($ipList[0]);
		} elseif (isset($_SERVER['HTTP_X_FORWARDED']) && !empty($_SERVER['HTTP_X_FORWARDED'])) {
			return $_SERVER['HTTP_X_FORWARDED'];
		} elseif (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && !empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
			return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
		} elseif (isset($_SERVER['HTTP_FORWARDED_FOR']) && !empty($_SERVER['HTTP_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_FORWARDED']) && !empty($_SERVER['HTTP_FORWARDED'])) {
			return $_SERVER['HTTP_FORWARDED'];
		} elseif (isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR'])) {
			return $_SERVER['REMOTE_ADDR'];
		}
		return 'UNKNOWN';
	}
	
	$colors_library = [
		"#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e",
		"#f1c40f", "#e67e22", "#e74c3c", "#ecf0f1", "#95a5a6",
		"#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50",
		"#f39c12", "#d35400", "#c0392b", "#bdc3c7", "#7f8c8d"
	];

	if(isset($_SESSION['login']))
	{
		function loginActivity($userId, $action, $details = []) {
		$ipAddress = getIP(); // Kullanıcının gerçek IP adresini al
		$logFile = __DIR__ . '/system.log'; // Log dosyasının yolu (__DIR__ geçerli dosyanın dizinini verir)
	
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
		$userId = $_SESSION['user_id']; // Örneğin, oturumdan veya veritabanından aldığınız kullanıcı ID'si
		$pageVisited = basename($_SERVER['PHP_SELF']); // Şu anki sayfanın adını al

			$action = 'Page Visit';
			$details = [
    		'page' => $pageVisited
];

loginActivity($userId, $action, $details);
}
define("encryption_method", "AES-128-CBC");
define("key", "rapor");

function kodla($data) {
	$key = "takipsan_rapor"; // 16 karakter uzunluğunda bir anahtar
    $ivLength = openssl_cipher_iv_length('aes-256-cbc');
    $iv = openssl_random_pseudo_bytes($ivLength);
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    $encrypted = base64_encode($iv . $encrypted);
    // URL uyumlu hale getirme
    return strtr($encrypted, '+/=', '-_,');
}

function coz($data) {
	$key = "takipsan_rapor"; // Aynı anahtar
	$data = strtr($data, '-_,', '+/=');
    $data = base64_decode($data);
    $ivLength = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($data, 0, $ivLength);
    $encrypted = substr($data, $ivLength);
    return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
}

function generateUniqueOrderNumber($con) {
    do {
        // 8 basamaklı rastgele sayı üret
        $orderNumber = mt_rand(10000000, 99999999);

        // Veritabanında bu sipariş numarasının olup olmadığını kontrol et
        $stmt = $con->prepare("SELECT COUNT(*) FROM siparisler WHERE siparis_no = ?");
		$stmt->bind_param("s", $orderNumber);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
    } while ($count > 0);

    return $orderNumber;
}
function generateDistinctColors($count) {
    $colors = [];
    $step = 360 / $count;

    for ($i = 0; $i < $count; $i++) {
        $hue = ($i * $step) % 360;
        $colors[] = "hsl($hue, 100%, 50%)";
    }

    return $colors;
}
$numberOfColors = 15;
$colorPalette = generateDistinctColors($numberOfColors);