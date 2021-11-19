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

<div id class="ui raised very padded text container segment ">
    <?php
    // if the session on include error msg
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once 'error.php';
    ?>
    <form class="ui form" action="../includes/process_register.php" method="post">
        <div class="field">
            <label>Profession</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="profession" required>
                <div class="default text">Select Profession</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="student">Student</div>
                    <div class="item" data-value="teacher">Teacher</div>
                </div>
            </div>
        </div>
        <div class="field">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="field">
            <label>Mail ID</label>
            <input type="email" name="mail-id" placeholder="Mail ID" required>
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="field">
            <label>Phone Number</label>
            <input type="text" name="phone-number" placeholder="Phone number">
        </div>
        <div class="field">
            <label>Gender</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="gender" required>
                <div class="default text">Select Gender</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="male">Male</div>
                    <div class="item" data-value="female">Female</div>
                </div>
            </div>
        </div>
        <div class="field">
            <label>Vaccination Status</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="vaccination-status" required>
                <div class="default text">COVID-19 Vaccination Status</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="full-vaccine">Fully Vaccinated</div>
                    <div class="item" data-value="partial-vaccine">Partially Vaccinated</div>
                    <div class="item" data-value="not-vaccine">Not Vaccinated</div>
                </div>
            </div>
        </div>
        <button class="ui button" type="submit" name="register-button">Register</button>
        <div class="field">
            <div class="ui header"></div>
            <label style="text-align:right">
                <a href="login.php">Already Registered?</a>
            </label>
        </div>
    </form>
</div>


</body>

<script src="../js/register.js" type="text/javascript"></script>

</html>