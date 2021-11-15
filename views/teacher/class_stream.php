<?php
include_once 'sidebar.php';
$result = $_SESSION["result"];
?>

<div class="left-container">
    <div class="ui top attached tabular menu">
        <a class="active item" href="class_stream.php">
            Stream
        </a>
        <a class="item" href="classwork.php">
            Classwork
        </a>
        <a class="item" href="class_people.php">
            People
        </a>
        <a class="item" href="class_marks.php">
            Marks
        </a>
    </div>
    <div class="ui bottom attached segment">
        <div class="ui block header">
            <!-- <div class="ui large header">Subject Name</div>
            <div class="ui medium header">Subject Code</div> -->
            <h1 class="ui header">
                <?= $result["subject_name"] ?>
                <div class="sub header"><?= $result["subject_code"] ?></div>
            </h1>
            <div class="sub header"><?= $result["batch"] ?></div>
            <div class="sub header"><?= $result["section"] ?></div>
            <div class="sub header"><?= $result["room_number"] ?></div>
        </div>

        <div class="ui grid">
            <div class="three wide column ">
                <div class="ui cards">
                    <div class="card">
                        <div class="content">
                            <div class="ui tiny header">Class Code :</div>
                            <div class="ui huge header ">
                                <?= $result["classroom_code"] ?>
                                <span class="right floated">
                                    <i class="copy icon"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thirteen wide column">
                <div class="ui fluid icon input">
                    <input type="text" placeholder="Announce something to your class...">
                    <i class="bullhorn icon"></i>
                </div>
            </div>
        </div>

    </div>

</div>



</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>