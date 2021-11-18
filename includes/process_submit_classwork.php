<?php
include_once 'config.php';
session_start();
$user_id=$_SESSION['id'];
$classroom_code=$_GET['class_code'];
$classwork_id=$_POST['classwork_id'];
$submission_file_name = $_FILES['file_name']['name']; 
$submission_file_size = $_FILES['file_name']['size'];
$submission_file_id = uniqid(); //unique
$submission_file_extension = pathinfo($submission_file_name, PATHINFO_EXTENSION);
date_default_timezone_set('Asia/Kolkata');
$submission_date= date('Y-m-d H:i:s');


$targetfolder = "../uploads/";
$targetfolder = $targetfolder . $submission_file_id;
$targetfolder=$targetfolder.".".$submission_file_extension;
echo $targetfolder;

$table_name='student_submission';
$url= '../views/student/submit_classwork.php?file_id='.$classwork_id;


if(move_uploaded_file($_FILES['file_name']['tmp_name'], $targetfolder))
{
    // echo "The file ". basename( $_FILES['file_name']['name']). " is uploaded";
    $query="Insert into ". $table_name."(classroom_code,classwork_id,user_id,submission_file_id,submission_date,submission_file_name,submission_file_extension) values ('$classroom_code','$classwork_id','$user_id','$submission_file_id','$submission_date','$submission_file_name','$submission_file_extension')";
    if(mysqli_query($conn,$query)){
        $_SESSION['error']="Success";
        echo "File uploaded successfully";
        header('location: '.$url);
    }else{
        echo "Failed to upload file";
        header('location: '.$url);
    }
}else{
    $_SESSION['error']="Empty submission";
    header('location: '.$url);
}