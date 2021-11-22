<?php
include_once 'sidebar.php';
$file_id = $_GET['file_id'];
include_once '../../includes/config.php';

// get all info from files
$query = mysqli_query($conn, "Select * from files where file_id='$file_id'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

// get classroomname from classcoe
$class_code = $result['classroom_code'];
$query = mysqli_query($conn, "Select subject_name from classrooms where classroom_code='$class_code'");
$classroom_name = mysqli_fetch_array($query, MYSQLI_ASSOC);

if ($result['due_date'] == '0000-00-00 00:00:00') {
    $result['due_date'] = 'None';
}
if (isset($_POST['download_button'])) {
    include_once '../../includes/download_teacher.php';
}
if (isset($_POST['download_student_button'])) {
    include_once '../../includes/download_student.php';
}
if (isset($_POST['submit_marks'])) {
    include_once '../../includes/process_grading.php';
}
?>

<div class="left-container">
    <div class="ui grid">
        <div class="sixteen wide column">
            <a class="item" href="classwork.php?class_code=<?= $class_code ?>">
                <i class="arrow alternate circle left icon"></i>
                Back
            </a>
        </div>
        <div class="ui eight wide column">
            <h1 class="ui huge header">
                <i class="book icon"></i>
                <div class="content">
                    <?= implode(" ", $classroom_name) ?> : <?= $result['classwork_title'] ?>
                </div>
            </h1>
            <div class="content">
                <div class="ui right aligned tiny grey header">
                    Due Date : <?= date_format(date_create($result['due_date']), "Y/m/d") ?>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="content">
                <div class="ui medium header">
                    Classwork Topic : <?= $result['classwork_topic'] ?>
                </div>
                <div class="ui segment">
                    <div class="ui small header">
                        Instructions
                    </div>
                    <p><?= $result['classwork_inst'] ?></p>
                </div>
                <!-- Download option for classwork files -->
                <?php if ($result['uploaded_file_name'] != '' and $result['uploaded_file_name'] != NULL) { ?>
                    <form method="post">
                        <input type="submit" name="download_button" value="Download Files" />
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="eight wide column">
            <div class="ui segment">
                <div class="sixteen wide column">
                    <div class="ui large header">
                        <i class="folder open icon"></i>
                        Student Submissions
                    </div>
                </div>
                <div class="ui divider"></div>
                <br>
                <?php include_once 'grading.php' ?>
            </div>
        </div>
    </div>
</div>