<?php
include_once 'sidebar.php';
?>
<div class="left-container">
    <div class="ui top attached tabular menu">
        <a class="item" href="class_stream.php">
            Stream
        </a>
        <a class="item" href="classwork.php">
            Classwork
        </a>
        <a class="active item" href="class_people.php">
            People
        </a>
    </div>
    <?php include_once '../partials/class_people_display.php';?>

</div>


</body>
<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>