<?php
include 'connexion.php';

if (isset($_GET['aeroportPart'])) {
    try {
        $aeroportPart = $_GET['aeroportPart'];
        $sql = "SELECT NuméroV, Jour, HeureDépart, AéroportArrivée 
                FROM VOL 
                WHERE AéroportPart = :aeroportPart";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':aeroportPart' => $aeroportPart]);

        $vols = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($vols);
    } catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
} else {
    echo json_encode(["error" => "Aéroport de départ non spécifié"]);
}
?>