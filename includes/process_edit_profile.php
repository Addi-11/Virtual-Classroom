<?php
include_once 'config.php';
session_start();
$user_id=$_SESSION['id'];
$user_name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$gender=$_POST['gender'];
$vaccine_stat=$_POST['vaccine_stat'];
$url = '../views/'.$_SESSION['profession'].'/view_profile.php';

$query="Update users set name='$user_name' , phone_number='$phone_number', gender='$gender' , vaccine_stat='$vaccine_stat' where id='$user_id'";
if(mysqli_query($conn,$query)){
    echo "in if";
    $_SESSION['error']="Information saved.";
    header('location:' .$url);
}else{
    echo "in else";
    $_SESSION['error']="Information not updated.";
    header('location: '.$url);
}
?>