<?php
include("db.php");

(session_start());



$errors = array();

if(!empty($_POST['username'])){
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
}
else{
    array_push($errors);
}
$email = '';
if(!empty($_POST['email'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
}
else{
    array_push($errors);

}
$password_1 = '';
if(!empty($_POST['password_1'])){
    $password_1= filter_var($_POST['password_1'], FILTER_SANITIZE_STRING);
}
else{
    array_push($errors);
}
$password_2 = '';
if(!empty($_POST['password_2'])){
    if($password_1 == $_POST['password_2']){
        $password_2 = filter_var($_POST['password_2'], FILTER_SANITIZE_STRING);
    }
    else{
        array_push($errors);
    }
}
else{
    array_push($errors);
}
$listname = '';
if(!empty($_POST['listname'])){
    $listname = filter_var($_POST['listname'], FILTER_SANITIZE_STRING);
}
else{
    array_push($errors);
}


//controleer op bestaande data
$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1";

$db = new PDO("mysql:host=localhost;dbname=BruidenDb", "student", "student");
$user = $db->exec($user_check_query);

if($user)
{
    if($user['username'] === $username)
    {
        array_push($errors);
    }
    if($user['email'] === $email)
    {
        array_push($errors);
    }
}

//REGISTER kijken of er errors aanwezig zijn
if(count($errors) == 0 )
{
    $stmt = $db->prepare("INSERT INTO users (display_name, email, password, listname) VALUES (:username, :email, :password, :listname)");

    $password = md5($password_1);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->bindParam(':listname', $listname, PDO::PARAM_STR);

    $stmt->execute();

    header("Location: LijstBruidspaar.php");
    die();
}

else  {

    header("Location: AanmakenAccount.php");
    die();
}
