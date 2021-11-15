<?php
include_once 'sidebar.php';
?>
<br><br>

<div id="login-container" class="ui raised very padded text container segment ">
    <a class="item" href="classes.php">
        <i class="arrow alternate circle left icon"></i>
        Back
    </a>
    <div class="ui header">Create Class</div>
    <form class="ui form" action="../../includes/process_create_class.php" method="post">
        <div class="field">
            <label>Subject Name</label>
            <input type="text" name="subject_name" placeholder="Subject Name" required>
        </div>
        <div class="field">
            <label>Subject Code</label>
            <input type="text" name="subject_code" placeholder="Subject Code">
        </div>
        <div class="field">
            <label>Batch/Class Name</label>
            <input type="text" name="batch" placeholder="Batch Name">
        </div>
        <div class="field">
            <label>Section</label>
            <input type="text" name="section" placeholder="Section">
        </div>
        <div class="field">
            <label>Room Number</label>
            <input type="text" name="room_number" placeholder="Room Number">
        </div>
        <button class="ui button" type="submit">Create Classroom</button>
    </form>
</div>

</body>

<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>