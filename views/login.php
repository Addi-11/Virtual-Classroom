<!-- <!DOCTYPE html>

<head>
    <title>Classroom</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body> -->

<?php
include_once 'partials/header.php';
?>

<div id="login-container" class="ui raised very padded text container segment ">
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

<!-- <script src="../js/login.js" type="text/javascript"></script> -->

</html>