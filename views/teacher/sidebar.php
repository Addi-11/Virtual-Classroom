<!DOCTYPE html>

<head>
    <title>Classroom</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

    <link rel="stylesheet" href="../../stylesheets/sidebar.css">

</head>

<body>
    <?php
    if(session_status() === PHP_SESSION_NONE) session_start();
    // to avoid unauthorized access - check for profession
    if($_SESSION["profession"]=="student"){
        $_SESSION["error"]="Unauthorized Access";
        header('location: ../login.php');
    }
    $image_url="../../images/teacher.png";
    if(isset($_SESSION['image_extension']) && $_SESSION['image_extension'] != ''){
        $image_url="../../images/users/".$_SESSION['id'] . ".".$_SESSION['image_extension'];
    }
    ?>
    <div class="ui top borderless attached demo menu">

        <div class="ui header item" style="margin-left:180px;">
            <img class="ui circular image" src="<?=$image_url?>">
            Welcome Back <?= $_SESSION['name']; ?>
        </div>

        <div class="right menu">
            <div class="item">
                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Search ...">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
            <a class="item">
                <div class="ui header">
                    <img src="../../images/octocat.png">
                    Octocat
                </div>
            </a>
        </div>
    </div>


    <!-- <div class="ui bottom attached segment pushable"> -->
    <div class="ui left fixed vertical inverted labeled icon menu flex-container">
        <a class="item" href="home.php">
            <i class="home icon"></i> Home
        </a>
        <a class="item" href="classes.php">
            <i class="block layout icon"></i> My Classes
        </a>
        <a class="item" href="time_table.php">
            <i class="table icon"></i> My Timetable
        </a>
        <!-- <a class="item" href="announcements.php">
            <i class="bullhorn icon"></i> Post Announcement
        </a> -->
        <a class="item" href="chat_groups.php">
            <i class="users icon"></i> Staff Rooms
        </a>
        <a class="item" href="view_profile.php">
            <i class="user circle icon"></i> My Profile
        </a>
        <div class="bottom-aligned">
            <a class="item" href="../logout.php">
                <i class="sign-out alternate icon"></i> Logout
            </a>
        </div>
    </div>