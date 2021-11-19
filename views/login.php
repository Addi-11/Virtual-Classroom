<?php
include_once 'partials/header.php';
?>

<div id="login-container" class="ui raised very padded text container segment ">
    <?php
        // if the session on include error msg
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        include_once 'error.php';
    ?>
    <form class="ui form" action="../includes/process_login.php" method="post">

        <div class="field">
            <label>Login ID</label>
            <input type="text" name="login-id" placeholder="Login-ID">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="login-password" placeholder="Password">
        </div>
        <button class="ui button" type="submit">Login</button>
        <div class="field">
            <div class="ui header"></div>
            <label style="text-align:right">
                <a href="register.php">Not Registered?</a>
            </label>
        </div>
    </form>
</div>

</body>

</html>