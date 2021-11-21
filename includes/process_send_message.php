<?php
include_once 'config.php';
session_start();
$group_id = $_GET['group_id'];
if (isset($_POST['post_message'])) {
    $user_id = $_SESSION['id'];
    $message = $_POST['group_message'];
    date_default_timezone_set('Asia/Kolkata');
    $date_time = date('Y-m-d H:i:s');
    $query = "Insert into group_chats (user_id,group_id,date_time,message) Values ('$user_id','$group_id','$date_time','$message')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $query = "Update groups set latest_msg_time='$date_time' where group_id='$group_id'";
        $res = mysqli_query($conn, $query);
        // header("Refresh:0");
        // exit;
    }
}
header('location: ../views/'.$_SESSION['profession'].'/chat_groups.php?group_id='.$group_id);
?>