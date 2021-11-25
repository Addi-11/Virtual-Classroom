<?php
    include_once 'sidebar.php';
    include_once '../../includes/config.php';
    $file_id = $_GET['file_id'];
    echo $file_id;

    // get all info from files
    $query = mysqli_query($conn, "Select * from files where file_id='$file_id'");
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    // get classroomname from classcoe
    $class_code = $result['classroom_code'];
    $query = mysqli_query($conn, "Select subject_name from classrooms where classroom_code='$class_code'");
    $classroom_name = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if ($result['due_date'] == '0000-00-00 00:00:00') {
        $result['due_date'] = 'None';
    }
    if (isset($_POST['download_button'])) {
        include_once '../../includes/download_teacher.php';
    }
?>

<div class="left-container">
    <div class="ui grid">
        <div class="sixteen wide column">
            <a class="item" href="classwork.php?class_code=<?= $class_code ?>">
                <i class="arrow alternate circle left icon"></i>
                Back
            </a>
        </div>
        <div class="ui eleven wide column">
            <h1 class="ui huge header">
                <i class="book icon"></i>
                <div class="content">
                    <?= implode(" ", $classroom_name) ?> - <?= $result['classwork_title'] ?>
                </div>
            </h1>
            <div class="content">
                <div class="ui right aligned tiny grey header">
                    Due Date : <?= $result['due_date'] ?>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="content">
                <div class="ui medium header">
                    Topic : <?= $result['classwork_topic'] ?>
                </div>
                <div class="ui segment">
                    <div class="ui small header">
                        Instructions
                    </div>
                    <p><?= $result['classwork_inst'] ?></p>
                </div>
                <!-- Download option for classwork files -->
                <?php if ($result['uploaded_file_name'] != '' and $result['uploaded_file_name'] != NULL) { ?>
                    <form method="post">
                        <input type="submit" name="download_button" value="Download Files" />
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="ui three wide column">
            <?php
            if ($_SESSION['error'] == "Empty submission") {
                include_once '../error.php';
                $_SESSION['error'] = '0'; //reset
            } else if ($_SESSION['error'] == "Success") {
                include_once '../error.php';
                $_SESSION['error'] = '0'; //reset
            }
            ?>
            <div class="ui card">
                <div class="content">
                    <span class="right floated">
                        <div class="ui tiny green header">Assigned</div>
                    </span>
                    <div class="header">Your Work</div>
                </div>
                <div class="extra content">
                    <form method="post" action="../../includes/process_submit_classwork.php?class_code=<?php echo $class_code; ?>" enctype="multipart/form-data">
                        <input type="hidden" name="classwork_id" value="<?= $file_id ?>">
                        <input type="file" name="file_name">
                        <br><br>
                        <button class="fluid ui button">Turn in</button>
                    </form>
                </div>
            </div>
            <div class="ui card">
                <div class="content">
                    <div class="ui tiny header">
                        <i class="user outline icon"></i>
                        Add Private Comments
                    </div>
                    <form action="" method="post">
                        <div class="ui fluid icon input">

                            <img class="ui avatar image" src="../../images/student.png">
                            <input type="text" name="comment" placeholder="Add Private a comment.">
                            <button class="ui icon button">
                                <i class="paper plane outline icon"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>