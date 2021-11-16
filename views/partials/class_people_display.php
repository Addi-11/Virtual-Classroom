<?php
include_once '../../includes/config.php';
// get all students for given class
$student_query = mysqli_query($conn, "select name from users where id in (select user_id from class_student where classroom_code='$class_code')");
$student_result = mysqli_fetch_all($student_query, MYSQLI_ASSOC);

// get all teachers for given class
$teacher_query = mysqli_query($conn, "select name from users where id in (select user_id from classrooms where classroom_code='$class_code')");
$teacher_result = mysqli_fetch_all($teacher_query, MYSQLI_ASSOC);
?>

<div class="ui bottom attached segment">
    <br>
    <div class="ui grid">
        <div class="ui sixteen column grid">
            <div class="ui container">
                <div class="ui header">
                    <span style="font-size:25px">Teachers</span>
                    <div class="ui right floated tiny header">
                        <i class="user plus icon"></i>
                    </div>
                </div>
                <div class="ui middle aligned list">
                    <?php foreach ($teacher_result as $teacher) { ?>
                        <div class="item">
                            <img class="ui avatar image" src="../../images/teacher.png">
                            &ensp;
                            <span style="font-size:18px">
                                <?= implode(" ", $teacher) ?>
                            </span>
                        </div>
                    <?php } ?>
                </div>

                <div class="ui divider"></div>

                <div class="ui header">
                    <span style="font-size:25px">Students</span>
                    <div class="ui right floated tiny header">
                        <i class="user plus icon"></i>
                    </div>
                </div>
                <div class="ui middle aligned list">
                    <?php foreach ($student_result as $student) { ?>
                        <div class="item">
                            <img class="ui avatar image" src="../../images/student.jpg">
                            &ensp;
                            <span style="font-size:18px">
                                <?= implode(" ", $student) ?>
                            </span>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>