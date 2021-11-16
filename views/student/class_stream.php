<?php
    include_once 'sidebar.php';
    $class_code = $_GET["class_code"];
    include_once '../../includes/config.php';
    $query = mysqli_query($conn, "select * from classrooms where classroom_code='$class_code'");
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<div class="left-container">
    <div class="ui top attached tabular menu">
        <a class="active item" href="class_stream.php">
            Stream
        </a>
        <a class="item" href="classwork.php">
            Classwork
        </a>
        <a class="item" href="class_people.php">
            People
        </a>
    </div>
    <?php
    include_once '../partials/class_stream_display.php';
    ?>
</div>