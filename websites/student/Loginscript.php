<?php


include("db.php");


if (isset($_POST['loginmail']) && isset($_POST['loginpass'])) {
    $email= $_POST['loginmail'];
    $password = $_POST['loginpass'];
}

$stmt = $conn->prepare("SELECT * FROM users WHERE email='$email' AND password = md5('$password') ");

$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

$stmt->execute();
$result = $stmt->fetch();

//Variabelen aanmaken voor resultaten uit de databse.
if (is_null($result)) {
    header("Location: ../InloggenBruidspaar.php"); //Terug naar inlogpagina wanneer het failed/account bestaat niet.
    die();
}
else {
    $db_username = $result['email'];
    $db_password = $result['password'];
    $db_id = $result['id'];
    $db_display_name = $result['display_name'];
    $db_listname = $result['listname'];
}

//Variabelen aan de sessie binden.
if (md5($password) == $db_password) {
    session_start();
    $_SESSION['id'] = $db_id;
    $_SESSION['username'] = $db_username;
    $_SESSION['displayname'] = $db_display_name;
    $_SESSION['listname'] = $db_listname;
    header("Location: LijstBruidspaar.php");
} else  {
    header("Location: ../InloggenBruidspaar.php"); //Terug naar inlogpagina wanneer het aanmaken van de sessie niet lukt.
}
?>