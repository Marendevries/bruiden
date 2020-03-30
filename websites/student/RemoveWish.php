<?php
include("db.php");

(session_start());

if (!empty($_POST)) {
    if (isset($_POST['wish-remove-button'])) {
        // Post variablen uitlezen.
        // SQL query maken voor het bewerken van de database.
        $stmt = $conn->prepare("DELETE FROM wishes WHERE list_id = (:list_id); AND listname = (:listName);");
        $stmt->bindParam(':list_id', $_POST['wish-id'], PDO::PARAM_INT);
        $stmt->bindParam(':listName', $_SESSION['listname'], PDO::PARAM_STR);
        $stmt->execute();
        // Als dit gelukt is, redirect terug.
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
