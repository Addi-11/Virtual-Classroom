<?php
require_once('config.php');

$login_id = $_POST['login-id'];
$login_pass = $_POST['login-password'];


$table_name = 'users';

$query = mysqli_query($conn, "select * from ".$table_name." where email='$login_id' and password='$login_pass'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (($result > 0)) {
    $profession = $result['profession'];
    if ($profession == "teacher") {
        session_start();
        $_SESSION["id"] = $result['email'];
        $_SESSION["type"] = $profession;
        header('location: ../views/teacher/home.php');
    } 
    else if ($profession == "Student") {
        session_start();
        $_SESSION["id"] = $result['email'];
        $_SESSION["type"] = $profession;
        header('location:  ../views/student/home.php');
    }
} else {
    header('location: ../views/login.php');
}

?>