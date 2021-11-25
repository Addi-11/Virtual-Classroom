<?php
$submission_file_id=$_POST['file_id'];
$marks=$_POST['marks'];
$query="Update student_submission set marks='$marks' where submission_file_id='$submission_file_id'";
if(mysqli_query($conn,$query)){
    // echo "success";
    // $_SESSION['error']="Success";
}else{
    // echo "marks not updated";
    // $_SESSION['error']="Unable to enter marks.";
}
?>