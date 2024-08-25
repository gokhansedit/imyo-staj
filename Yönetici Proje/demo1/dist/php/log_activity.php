<?php
function getUserIP() {
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

function logActivity($userId, $action, $oldData = null, $newData = null, $deletedData = null) {
    $ipAddress = getUserIP(); // Kullanıcının gerçek IP adresini al
    $logFile = __DIR__ . '/system.log'; // Log dosyasının yolu (__DIR__ geçerli dosyanın dizinini verir)

    // Detayları oluştur
    $details = [];
    if ($action == 'Added') {
        $details = ['new_data' => $newData];
    } elseif ($action == 'Edited') {
        $details = ['old_data' => $oldData, 'new_data' => $newData];
    } elseif ($action == 'Deleted') {
        $details = ['deleted_data' => $deletedData];
    }

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


?>
