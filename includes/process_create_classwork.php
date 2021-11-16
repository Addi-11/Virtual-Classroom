<?php   
require_once('config.php');

$classroom_code  = $_GET['class_code'];
// $uploaded_file_name = $_FILE['file_name']['name']; 
// $uploaded_file_size = ;
// $file_id = ; //unique
$classwork_title = $_POST['classwork_title'];
$classwork_inst = $_POST['classwork_inst'];
$classwork_marks = $_POST['classwork_marks'];
$classwork_topic = $_POST['classwork_topic'];

echo $classroom_title.'<br>';
echo $classroom_inst . '<br>';
echo $classroom_marks . '<br>';
echo $classroom_topic . '<br>';

// $table_name='users';

// $query1 = "INSERT INTO ".$table_name." (name, profession, email, phone_number, gender, vaccine_stat, password) VALUES ('$full_name','$profession','$email','$phone_number','$gender','$vaccine_stat','$password')";

// $result1 = mysqli_query($conn, $query1);

// echo $profession;

// if (!$result1) {
//     echo ("Can't Register,The user email already exist !!");
// } else {
//  {
//         header('location: ../views/teacher/home.php');
   
// }
