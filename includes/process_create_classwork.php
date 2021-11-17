<?php   
require_once('config.php');

$classroom_code  = $_GET['class_code'];
$uploaded_file_name = $_FILES['file_name']['name']; 
$uploaded_file_size = $_FILES['file_name']['size'];
$file_id = uniqid(); //unique
$classwork_title = $_POST['classwork_title'];
$classwork_inst = $_POST['classwork_inst'];
$classwork_marks = $_POST['classwork_marks'];
$classwork_topic = $_POST['classwork_topic'];
$due_date = $_POST['classwork_due_date'];

date_default_timezone_set('Asia/Kolkata');
$create_date= date('Y-m-d H:i:s');

$targetfolder = "../uploads/";
$targetfolder = $targetfolder . $file_id;




if(move_uploaded_file($_FILES['file_name']['tmp_name'], $targetfolder))
{
    // echo "The file ". basename( $_FILES['file_name']['name']). " is uploaded";
    $query="Insert into files(classroom_code, uploaded_file_name,uploaded_file_size,file_id,classwork_title,classwork_inst,classwork_marks,classwork_topic,due_date,create_date) values ('$classroom_code', '$uploaded_file_name','$uploaded_file_size','$file_id','$classwork_title','$classwork_inst','$classwork_marks','$classwork_topic','$due_date','$create_date')";
    if(mysqli_query($conn,$query)){
        echo "File uploaded successfully";

    }else{
        echo "Failed to upload file";
    }
}
else {
    echo "Problem uploading file";
}
