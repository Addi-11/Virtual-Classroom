<!-- Download files uploaded by the student (student submissions) -->
<?php
include_once 'config.php';
$download_file_id=$_POST['file_id'];
$query=mysqli_query($conn, "Select * from student_submission where submission_file_id='$download_file_id'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
$filepath = '../../uploads/' . $download_file_id;
$filepath = $filepath . "." . $result['submission_file_extension'];

$name = $download_file_id . "." . $result['submission_file_extension'];



// $url = "../views/".$sub_url."?file_id=$download_file_id";
// echo $url;

if (file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $result['submission_file_name'] . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('uploads/' .$name ));
    readfile('uploads/' . $name);
}
?>