<?php
require_once('config.php');

$login_id = $_POST['login-id'];
$table_name = 'users';

$query = mysqli_query($conn, "select * from ".$table_name." where email='$login_id'");

$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

session_start();
if (($result > 0 && password_verify($_POST['login-password'],$result['password']))) {
    $profession = $result['profession'];
    $_SESSION['image_extension']=$result['image_extension'];
    if ($profession == "teacher") {
        $_SESSION["error"]='0';
        $_SESSION["id"] = $result['id'];
        $_SESSION["name"]=$result['name'];
        $_SESSION["type"] = $profession;
        $_SESSION["profession"]=$profession;
        header('location: ../views/teacher/home.php');
    } 
    else if (strtolower($profession) == "student") {
        $_SESSION["error"]='0';
        $_SESSION["id"] = $result['id'];
        $_SESSION["name"]=$result['name'];
        $_SESSION["type"] = $profession;
        $_SESSION["profession"]=$profession;
        header('location:  ../views/student/home.php');
    }
} else {
    $_SESSION["error"] = "Login and Id and Password don't match";
    header('location: ../views/login.php');
}
?>