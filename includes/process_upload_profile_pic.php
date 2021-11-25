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
$sql=mysqli_query($conn,"Select * from users where id='$user_id'");
$res=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$img_path="../images/users/".$user_id.".".$res['image_extension'];

$url= '../views/'.$_SESSION['profession'].'/view_profile.php';
// .jpg , .jpeg , .jfif , .pjpeg , .pjp
if($image_extension == "jpg" || $image_extension == "png" || $image_extension == "jpeg"
|| $image_extension == "gif"  || $image_extension == "jfif" || $image_extension == "pjp"){
unlink($img_path);
    if(move_uploaded_file($_FILES['image_file']['tmp_name'], $targetfolder))
    {
        // echo "The file ". basename( $_FILES['file_name']['name']). " is uploaded";
        
        echo $img_path;
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
