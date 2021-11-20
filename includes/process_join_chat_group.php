<?php
include_once 'config.php';
session_start();

$url = '../views/' . $_SESSION['profession'] . '/chat_groups.php';
$user_id = $_SESSION['id'];

// empty input
if(isset($_POST['group_id'])==false  || $_POST['group_id']==NULL || $_POST['group_id']==''){
    $_SESSION['error']="Enter code";
    header('location: ' . $url);
}else{
    $group_id= $_POST['group_id'];

    // if group exsists
    $query=mysqli_query($conn,"Select * from groups where group_id = '$group_id'");
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
    if($result>0){
        
        // Already joined group
        $query=mysqli_query($conn,"Select * from group_users where (group_id='$group_id' and user_id='$user_id')");
        $result1=mysqli_fetch_all($query,MYSQLI_ASSOC);

        if(sizeof($result1)>0){
            $_SESSION['error']="You have already joined the group.";
            //url when user enters a code of already joined group.
            header('location: ' . $url);
        }
        // newly joined group
        else{
            $query1="Insert into group_users (group_id, user_id) Values ('$group_id','$user_id')";
            if($res=mysqli_query($conn,$query1)){
                //url after successfully adding user to group
                header('location: ' . $url);
            }else{
                $_SESSION['error']="Something went wrong.";
                //url after user could't be added due to some reason.
                header('location: ' . $url);

            }
        }
        // Invalid code
    }else{
        $_SESSION['error']="Invalid code.";
        header('location: ' . $url);
    }
}
