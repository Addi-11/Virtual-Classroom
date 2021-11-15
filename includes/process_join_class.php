<?php

session_start();
require_once('config.php');

$classroom_code=$_POST['classroom_code'];
$user_id=$_SESSION["id"];

$table_name = 'class_student';

// check if input code matches exsisiting classroom code
$flag=mysqli_query($conn,"Select * from classrooms where classroom_code='$classroom_code'");
$flagcheck=mysqli_fetch_array($flag, MYSQLI_ASSOC);

if($flagcheck<1){
    // show msg not classroom   
    $_SESSION['error']="Invalid Classroom Code.";
    header('location: ../views/student/join_class.php');
} else{
    $query = "INSERT INTO " . $table_name ." VALUES('$classroom_code','$user_id')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        echo ("Can't join the classroom !!");
    }else{
        header('location: ../views/student/classes.php');
    }
}

?>
