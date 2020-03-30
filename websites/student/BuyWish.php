<?php
include("db.php");

(session_start());

if (!empty($_POST)) {
    if (isset($_POST['wish-buy-button'])) {
        // Post variablen uitlezen.
        // SQL query maken voor het bewerken van de database.
        $stmt = $conn->prepare("UPDATE wishes SET is_bought = 1 WHERE list_id = (:list_id)");
        $stmt->bindParam(':list_id', $_POST['wish-id'], PDO::PARAM_INT);
        $stmt->execute();
        // Als dit gelukt is, redirect terug.
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}