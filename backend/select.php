<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once 'config/conection.php';

$dataJson = $_POST['tabela'];


$query = "SELECT * FROM `$dataJson`";
$stmt = $conn->prepare($query);

try {
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

} catch (PDOException $e) {
    echo json_encode('error');
}

?>