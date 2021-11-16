<?php
include_once '../../includes/config.php';
// get all students for given class
$student_query = mysqli_query($conn, "select name from users where id in (select user_id from class_student where classroom_code='$class_code')");
$student_result = mysqli_fetch_all($student_query, MYSQLI_ASSOC);

// get all teachers for given class
// select name from users where id in (select user_id from classrooms where classroom_code=session_classcode);
$teacher_query = mysqli_query($conn,"select name from users where id in (select user_id from classrooms where classroom_code='$class_code')");
$teacher_result=mysqli_fetch_array($teacher_query,MYSQLI_ASSOC);

foreach($student_result as $s){
    echo implode(" ",$s).'<br>';
}
echo '<br>';
foreach ($teacher_result as $s) {
    echo $s . '<br>';
}
?>

<div class="ui bottom attached segment">
    <div class="ui container">

        <div class="ui header">
            <span style="font-size:30px">Teachers</span>
            <div class="ui right floated tiny header">
                <i class="user plus icon"></i>
            </div>
        </div>
        <div class="ui divider"></div>

        <div class="ui header">
            <span style="font-size:30px">Student</span>
            <span class="ui right floated tiny header">
                <i class="user plus icon"></i>
            </span>
        </div>
    </div>
</div>