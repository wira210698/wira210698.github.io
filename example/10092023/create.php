<?php
include('db.php');
$database = new database; 
try {
    $query = "INSERT INTO tb_comments (nama, ucapan, kehadiran, create_at_timestamp) VALUES (:nama, :ucapan, :kehadiran, :create_at_timestamp)";
    $stmt = $database->koneksi->prepare($query);

    $nama = $_POST["nama"];
    $ucapan = $_POST["ucapan"];
    $kehadiran = $_POST["kehadiran"];
    $create_at_timestamp = date('Y-m-d H:i:s');
    // Bind parameters
    $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);
    $stmt->bindParam(':ucapan', $ucapan, PDO::PARAM_STR);
    $stmt->bindParam(':kehadiran', $kehadiran, PDO::PARAM_STR);
    $stmt->bindParam(':create_at_timestamp', $create_at_timestamp, PDO::PARAM_STR);

    // Execute the statement
    $stmt->execute();

    $response = [
        "statusCode" => 200,
        "message" => "Data inserted successfully"
    ];
    echo json_encode($response);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
    
