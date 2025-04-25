<?php
include 'connexion.php';

try {
    $sql = "SELECT NomA FROM AEROPORT";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $aeroports = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($aeroports);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>