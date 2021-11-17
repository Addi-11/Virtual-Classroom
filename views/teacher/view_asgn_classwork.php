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

if($result['due_date']== '0000-00-00 00:00:00'){
    $result['due_date']='None';
}

?>

<div class="left-container">
    <div class="ui grid">
        <div class="sixteen wide column">
            <a class="item" href="classwork.php?class_code=<?=$class_code?>">
                <i class="arrow alternate circle left icon"></i>
                Back
            </a>
        </div>
        <div class="ui eleven wide column">
            <h1 class="ui huge header">
                <i class="book icon"></i>
                <div class="content">
                    <?= implode(" ", $classroom_name) ?> : <?= $result['classwork_title'] ?>
                </div>
            </h1>
            <div class="content">
                <div class="ui right aligned tiny grey header">
                    Due Date : <?= $result['due_date'] ?>
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
            </div>
        </div>
    </div>
</div>