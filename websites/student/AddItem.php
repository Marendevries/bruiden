<?php
include("db.php");
session_start();
if(!empty($_POST['AddItem'])){
    $AddItem = filter_var($_POST['AddItem'], FILTER_SANITIZE_STRING);
}
else{
    echo "u heeft geen item ingevuld";
}

// insert into wishes

$highest_priority = 0;

{
    $stmt = $conn->prepare("SELECT MAX(is_bought) FROM wishes where listname = :listname");
    $stmt->bindParam(':listname' , $listName );
    $highest_priority  = $stmt->execute() || 0;
}

$stmt = $conn->prepare("INSERT INTO wishes (description, listname,is_bought, priority) VALUES (:description, :listname, :is_bought, :priority)");
$stmt->bindParam(':description' , $description   );
$stmt->bindParam(':listname' , $listName );
$stmt->bindParam(':priority' , $priority );
$stmt->bindParam(':is_bought', $is_bought, PDO::PARAM_BOOL);
$description = $AddItem;
$priority = $highest_priority + 1;
$listName = $_SESSION['listname'];
$is_bought = false;
$stmt->execute();

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

