<?php   
session_start();
require_once('config.php');

$profession = $_POST['profession'];
$full_name = $_POST['name'];
$email = $_POST['mail-id'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone_number = $_POST['phone-number'];
$gender = $_POST['gender'];
$vaccine_stat = $_POST['vaccination-status'];

$table_name='users';

$query1 = "INSERT INTO ".$table_name." (name, profession, email, phone_number, gender, vaccine_stat, password) VALUES ('$full_name','$profession','$email','$phone_number','$gender','$vaccine_stat','$password')";

$result1 = mysqli_query($conn, $query1);

echo $profession;

if (!$result1) {
    $_SESSION['error'] = "Can't Register. The user email already exist !!";
    header('location: ../views/register.php');
} else {
    $_SESSION['id'] = mysqli_insert_id($conn);
    $_SESSION['name'] = $full_name;
    $_SESSION['error']='0';
    $_SESSION['profession']=$profession;
    
    echo "Information successfully added to DB";
    if ($profession == "teacher") {
        header('location: ../views/teacher/home.php');
    } else if ($profession == "student") {
        header('location: ../views/student/home.php');
    } else {
        echo "Select Profession!!";
    }
}


?>
