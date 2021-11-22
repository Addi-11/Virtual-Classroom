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
$extension = pathinfo($uploaded_file_name, PATHINFO_EXTENSION);
$targetfolder=$targetfolder.".".$extension;
$table_name='files';

$url_classwork = '../views/teacher/classwork.php?class_code='.$classroom_code;
$url_create_classwork = '../views/teacher/create_classwork.php?class_code='.$classroom_code;

// checking for empty uploads
if($classwork_title==NULL){
    // echo '<script>alert("Empty classwork not allowed.")</script>';
    $_SESSION['error'] = "Classwork empty!!";
    header('location: '.$url_create_classwork);
}else{
    // if file is uploaded - move to folder
    if(move_uploaded_file($_FILES['file_name']['tmp_name'], $targetfolder))
    {
        // echo "The file ". basename( $_FILES['file_name']['name']). " is uploaded";
        $query="Insert into ". $table_name."(classroom_code, uploaded_file_name,uploaded_file_size,file_id,classwork_title,classwork_inst,classwork_marks,classwork_topic,due_date,create_date,file_extension) values ('$classroom_code', '$uploaded_file_name','$uploaded_file_size','$file_id','$classwork_title','$classwork_inst','$classwork_marks','$classwork_topic','$due_date','$create_date','$extension')";
        if(mysqli_query($conn,$query)){
            echo "File uploaded successfully";
            header('location: '.$url_classwork);
        }else{
            echo "Failed to upload file";
            header('location: '.$url_create_classwork);
        }
    }
    // if no file is uploaded
    else {
        $query="Insert into ".$table_name."(classroom_code,file_id,classwork_title,classwork_inst,classwork_marks,classwork_topic,due_date,create_date) values ('$classroom_code','$file_id','$classwork_title','$classwork_inst','$classwork_marks','$classwork_topic','$due_date','$create_date')";
        if(mysqli_query($conn, $query)){
            
            // echo "File uploaded successfully";
            header('location: '.$url_classwork);
        }else{
            // echo "Failed to upload file";
            header('location: '.$url_create_classwork);
        }
    }
}