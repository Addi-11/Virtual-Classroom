<?php
include_once 'sidebar.php';
?>
<br>
<div id="login-container" class="ui raised very padded text container segment ">
    <a class="item" href="classes.php">
    <i class="arrow alternate circle left"></i>
    Back
    </a>
    <div class="ui header">Join Class</div>
    <form class="ui form" action="../../includes/process_join_class.php" method="post">
        <div class="field">
            <label>Enter Class Room Code</label>
            <input type="text" name="classroom_code" placeholder="Class Room Code" required>
        </div>
        <button class="ui button" type="submit">Join Classroom</button>
    </form>
</div>

</body>

<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>