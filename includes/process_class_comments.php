<?php   
session_start();
require_once('config.php');

$table_name ='class_comments';

$comment = $_POST['comment'];
date_default_timezone_set('Asia/Kolkata');
$date_time = date('Y-m-d H:i:s');
$user_id = $_SESSION['id'];
$classroom_code = $_GET["class_code"];
 
$query = "INSERT INTO ".$table_name." VALUES ('$classroom_code','$comment','$user_id','$date_time')";
$result = mysqli_query($conn, $query);

$profession = $_SESSION["profession"];
$url = '../views/'.$profession. '/class_stream.php?class_code='.$classroom_code;


if (!$result) {
    echo ("Can't Comment !!");
    header('location: '.$url);
} else {
    header('location: '.$url);
}

?>