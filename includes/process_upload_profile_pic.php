<?php
include_once 'config.php';
session_start();
$user_id=$_SESSION['id'];
$image_name = $_FILES['image_file']['name']; 
$image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));


$targetfolder = "../images/users/";
$targetfolder = $targetfolder . $user_id;
$targetfolder=$targetfolder.".".$image_extension;
echo $targetfolder;

$url= '../views/'.$_SESSION['profession'].'/view_profile.php';
// .jpg , .jpeg , .jfif , .pjpeg , .pjp
if($image_extension == "jpg" || $image_extension == "png" || $image_extension == "jpeg"
|| $image_extension == "gif"  || $image_extension == "jfif" || $image_extension == "pjp"){

    if(move_uploaded_file($_FILES['image_file']['tmp_name'], $targetfolder))
    {
        // echo "The file ". basename( $_FILES['file_name']['name']). " is uploaded";
        $query="Update users set image_extension='$image_extension' where id='$user_id'";
        if(mysqli_query($conn,$query)){
            $_SESSION['image_extension']=$image_extension;
            $_SESSION['error']="Success";
            echo "Image uploaded successfully";
            header('location: '.$url);
        }else{
            echo "Failed to upload file";
            header('location: '.$url);
        }
    }else{
        $_SESSION['error']="Empty submission";
        header('location: '.$url);
    }
}else{
    echo "File type not supported.";
    $_SESSION['error']="File type not supported.";
    header('location: '.$url);
}
?>