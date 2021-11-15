<?php

session_start();
require_once('config.php');

$classroom_code=$_POST['classroom_code'];
echo "joined class ".$classroom_code;
// $table_name = 'classrooms';

// $query = "INSERT INTO " . $table_name . " (classroom_code,	teacher_name, subject_name,	subject_code,	batch,	section,	room_number) VALUES ('$classroom_code','$teacher_name','$subject_name','$subject_code','$batch','$section','$room_number')";

// $result = mysqli_query($conn, $query1);

// if(!$result){
// 	echo ("Can't join the classroom !!");
// }else{
//     header('location: ../views/student/classes.php');
// }
