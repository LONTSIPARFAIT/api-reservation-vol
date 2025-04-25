<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

try {
    $host = "localhost";
    $dbname = "ReservationVol";
    $user = "root";
    $password = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(["error" => "Échec de la connexion : " . $e->getMessage()]));
}
?>