<?php
include_once 'config.php';
session_start();
$url = '../views/'.$_SESSION['profession'].'/chat_groups.php';
if(isset($_POST['group_name'])==false  || $_POST['group_name']==NULL || $_POST['group_name']==''){
    $_SESSION['error']="Enter group name";

    //if group name not added and just create group button pressed.
    header('location: '.$url);
}else{
    $group_id=uniqid();
    $user_id=$_SESSION['id'];
    $group_name=$_POST['group_name'];
    date_default_timezone_set('Asia/Kolkata');
    $date_time = date('Y-m-d H:i:s');
    $query="Insert into groups (group_id,group_name,latest_msg_time) values ('$group_id','$group_name','$date_time')";
    if($result = mysqli_query($conn, $query)){
        $query="Insert into group_users(user_id, group_id) Values ('$user_id','$group_id')";
        if($res=mysqli_query($conn,$query)){

            //url after group created
            header('location: '.$url);
        }else{
            //url if group not created due to some error.
            $_SESSION['error']="Group not created.";
            header('location: ' . $url);
        }
    }
    else{
        //url if group not created due to some error.
        $_SESSION['error']="Group not created.";
        header('location: ' . $url);
    }
}
?>