<?php
include_once '../../includes/config.php';
// get all students for given class
$student_query = mysqli_query($conn, "select * from users where id in (select user_id from class_student where classroom_code='$class_code')");
$student_result = mysqli_fetch_all($student_query, MYSQLI_ASSOC);

// get all teachers for given class
$teacher_query = mysqli_query($conn, "select name from users where id in (select user_id from classrooms where classroom_code='$class_code')");
$teacher_result = mysqli_fetch_all($teacher_query, MYSQLI_ASSOC);
$image_url="../../images/".$_SESSION['profession'].".png";

if(isset($_SESSION['image_extension'])){
    $image_url="../../images/users/".$_SESSION['id'] . ".".$_SESSION['image_extension'];
}

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
                            <img class="ui avatar image" src="<?=$image_url?>">
                            &ensp;
                            <span style="font-size:18px">
                                <?= $teacher['name'] ?>
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
                    <?php foreach ($student_result as $student) {
                        $color = "";
                        // vaccine status color setting
                        if ($student['vaccine_stat'] == 'not-vaccine') {
                            $color = "red";
                        } else if ($student['vaccine_stat'] == 'full-vaccine') {
                            $color = "green";
                        } else if ($student['vaccine_stat'] == 'partial-vaccine') {
                            $color = "yellow";
                        }
                    ?>
                        <div class="item">
                            <img class="ui avatar image" src="<?=$image_url?>">
                            &ensp;
                            <span style="font-size:18px">
                                <?= $student['name'] ?>
                            </span>
                            <div class="ui right floated <?=$color?> tiny header">
                                <?=$student['vaccine_stat']?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>