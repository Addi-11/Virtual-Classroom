<?php
include_once 'sidebar.php';
$result = $_SESSION["result"];
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