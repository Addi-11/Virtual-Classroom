<!DOCTYPE html>

<head>
    <title>Classroom</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="../stylesheets/sidebar.css">

</head>

<body>
    <div class="ui top attached demo menu">

        <a class="item">
            <div class="ui header">
                <img src="../../images/octocat.png">
                Octocat
            </div>
        </a>
        <div class="item">
            <div class="ui search">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Search ...">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
        </div>
        <div class="right menu">

            <div class="item">
                <img class="ui mini circular image" src="../../images/teacher.png">
                <div class="content">
                    <div class="ui sub header">Johny Deep</div>
                    Teacher
                </div>
            </div>
        </div>
    </div>


    <div class="ui bottom attached segment pushable">
        <div class="ui inverted labeled icon left inline vertical sidebar fixed menu">
            <a class="item" href="home.php">
                <i class="home icon"></i> Dashboard
            </a>
            <a class="item" href="classes.php">
                <i class="block layout icon"></i> My Classes
            </a>
            <a class="item" href="time_table.php">
                <i class="table icon"></i> My Timetable
            </a>
            <a class="item" href="announcements.php">
                <i class="bullhorn icon"></i> Post Announcement
            </a>
            <a class="item">
                <i class="users icon"></i> Staff Room
            </a>
            <div class="bottom-aligned">
                <a class="item" href="../logout.php">
                    <i class="sign-out alternate icon"></i> Logout
                </a>
            </div>
        </div>
    