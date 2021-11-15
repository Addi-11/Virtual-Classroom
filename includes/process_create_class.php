<?php

session_start();
require_once('config.php');

$classroom_code= uniqid();
$teacher_name=$_SESSION['name'];
$subject_name=$_POST['subject_name'];
$subject_code=$_POST['subject_code'];
$batch=$_POST['batch'];
$section=$_POST['section'];
$room_number=$_POST['room_number'];

$table_name = 'classrooms';
$user_id=$_SESSION["id"];
$query1 = "INSERT INTO " . $table_name . " (classroom_code,user_id,	teacher_name, subject_name,	subject_code,	batch,	section,	room_number) VALUES ('$classroom_code','$user_id','$teacher_name','$subject_name','$subject_code','$batch','$section','$room_number')";

$result1 = mysqli_query($conn, $query1);

if(!$result1){
	echo ("Can't create the classroom !!");
}else{
    header('location: ../views/teacher/classes.php');
}
?>