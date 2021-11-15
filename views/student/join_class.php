<?php
    include_once 'sidebar.php';
?>

<br>
<div id="login-container" class="ui raised very padded text container segment ">
    <?php
    if ($_SESSION["error"] == "Invalid Classroom Code.") {
        include '../error.php';
        $_SESSION["error"]="0"; // reset variable 
    }
    ?>
    <a class="item" href="classes.php">
        <i class="arrow alternate circle left icon"></i>
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