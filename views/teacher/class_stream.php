<?php
include_once 'sidebar.php';
$class_code = $_GET["class_code"];
include_once '../../includes/config.php';
$query = mysqli_query($conn, "select * from classrooms where classroom_code='$class_code'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<div class="left-container">
    <div class="ui top attached tabular menu">
        <a class="active item" href="class_stream.php?class_code=<?php echo $class_code; ?>">
            Stream
        </a>
        <a class="item" href="classwork.php?class_code=<?php echo $class_code; ?>">
            Classwork
        </a>
        <a class="item" href="class_people.php?class_code=<?php echo $class_code; ?>">
            People
        </a>
        <a class="item" href="class_marks.php?class_code=<?php echo $class_code; ?>">
            Marks
        </a>
    </div>
    <?php
    include_once '../partials/class_stream_display.php';
    ?>
</div>