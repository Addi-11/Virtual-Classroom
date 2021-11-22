<?php
include_once '../../includes/config.php';
date_default_timezone_set('Asia/Kolkata');
$user_id = $_SESSION['id'];
$curr_day = date('l');
$days = ["Monday" => 0, "Tuesday" => 1, "Wednesday" => 2, "Thursday" => 3, "Friday" => 4, "Saturday" => 5, "Sunday" => 6];
$query = mysqli_query($conn, "Select task, DATE_FORMAT(start_time, '%H:%i') AS start_time, DATE_FORMAT(end_time, '%H:%i') AS end_time from time_table where (user_id ='$user_id' and day='$days[$curr_day]') order by start_time ");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

<div class="left-container">
    <div class="ui grid">
        <div class="twelve wide column">
            <div class="ui raised padded teal piled segment">
                <div class="ui huge teal header" style="font-family: 'Montserrat', sans-serif;">
                    <p id="quotes"></p>
                    <div class="ui right floated sub header">
                        <i><span id="author"></span></i>
                    </div>
                    <br>
                </div>
            </div>
            <div class="ui segment">
                <div class="ui teal large header">
                    Today's Schedule
                </div>
                <div class="ui divider"></div>
                <?php if (!empty($results)) { ?>
                    <div class="ui piled placeholder segment">
                        <div class="ui grid">
                            <?php foreach ($results as $result) { ?>
                                <div class="three wide column">
                                    &ensp;
                                    <i class="circle outline icon"></i>
                                    <?= $result['start_time'] ?> - <?= $result['end_time'] ?>
                                </div>
                                <div class="thirteen wide column">
                                    <?= $result['task'] ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="ui placeholder segment">
                        <div class="ui icon header">
                            <i class="smile outline icon"></i>
                            Yay !!! No schedule Today....
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="four wide column">
            <div class="" id="calendar"></div>
        </div>
    </div>
</div>

<script src="../../js/quotes.js" type="module"></script>
<script src="../../js/calender.js" type="text/javascript"></script>
<script src=" ../../js/sidebar.js" type="text/javascript"></script>
</body>

</html>