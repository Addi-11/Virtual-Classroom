<?php
include_once 'config.php';
session_start();
$user_id=$_SESSION['id'];
$day=$_POST['week_day'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
echo $start_time." ".$end_time;
$task = $_POST['task_name'];

$url = '../views/'.$_SESSION['profession'].'/time_table.php';
$error_url = '../views/'.$_SESSION['profession'].'/create_time_table.php';
if($start_time<$end_time){
    $query=mysqli_query($conn,"Insert into time_table (user_id,day,start_time,end_time, task) Values ('$user_id','$day','$start_time','$end_time','$task')");
    if($query){
        header('location: '.$url);
    }else{
        $_SESSION['error']="Something went wrong.";
        header('location: '.$error_url);
    }
}else{
    $_SESSION["error"]="End time should be greater than start time.";
    echo "abc";
    header('location: '.$error_url);
}
