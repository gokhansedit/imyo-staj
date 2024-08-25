<?php
include("php/settings.php");

if (isset($_POST['table_name'])) {
    $table_name = $_POST['table_name'];
    // SQL sorgusu
    $sql = "SELECT * FROM $table_name";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        // Her bir satırı işleme
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo json_encode([]);
        exit;
    }

    $conn->close();

    // JSON olarak verileri döndürme
    echo json_encode($data);
} else {
    echo json_encode([]);
}
?>
