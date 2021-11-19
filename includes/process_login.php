<?php
require_once('config.php');

$login_id = $_POST['login-id'];
// $login_pass = password_verify($_POST['login-password'], password_hash($_POST['password'], PASSWORD_DEFAULT));
echo $login_pass;
$table_name = 'users';

$query = mysqli_query($conn, "select * from ".$table_name." where email='$login_id'");

$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (($result > 0 && password_verify($_POST['login-password'],$result['password']))) {
    $profession = $result['profession'];
    if ($profession == "teacher") {
        session_start();
        $_SESSION["error"]='0';
        $_SESSION["id"] = $result['id'];
        $_SESSION["name"]=$result['name'];
        $_SESSION["type"] = $profession;
        $_SESSION["profession"]=$profession;
        header('location: ../views/teacher/home.php');
    } 
    else if (strtolower($profession) == "student") {
        session_start();
        $_SESSION["error"]='0';
        $_SESSION["id"] = $result['id'];
        $_SESSION["name"]=$result['name'];
        $_SESSION["type"] = $profession;
        $_SESSION["profession"]=$profession;
        header('location:  ../views/student/home.php');
    }
} else {
    header('location: ../views/login.php');
}

?>