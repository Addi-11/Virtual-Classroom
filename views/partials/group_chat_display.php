<?php
$group_id = $_GET['group_id'];
$query = mysqli_query($conn, "Select group_name from groups where group_id='$group_id'");
$group_name = mysqli_fetch_array($query, MYSQLI_ASSOC);
$query = mysqli_query($conn, "Select group_chats.*, users.* from group_chats , users where (group_chats.group_id='$group_id' and users.id=group_chats.user_id )order by group_chats.date_time");
$group_chats = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>


<head>
    <link rel="stylesheet" href="../../stylesheets/group_chat_display.css">
    <meta charset="UTF-8">
</head>

<div class="ui segment secondary menu">
    <div class="item">
        <div class="ui huge header">
            <img class="ui avatar image" src="../../images/house.png">
            <?= $group_name['group_name'] ?>
        </div>
    </div>
    <div class="right menu">
        <div class="item">
            <div class="ui tiny header">
                <?= $group_id ?>
                <button class="ui small basic icon button">
                    <i class="teal copy icon"></i>
                </button>
            </div>
        </div>
    </div>
    <br>
</div>


<div id="groupChat" class="ui segment">

    <div class="ui comments">
        <?php foreach ($group_chats as $val) {
            $image_url = "../../images/student.png";

            if ($val['image_extension'] != NULL || $val['image_extension'] != '') {
                $image_url = "../../images/users/" . $val['id'] . "." . $val['image_extension'];
            }
            if ($val['user_id'] == $_SESSION['id']) {
        ?>
                <!-- if its my message make it shift to right -->

                <div class="comment" id="mymessagecontainer">
                    <a class="avatar">
                        <img class src="<?= $image_url ?>" style="border-radius: 100%;">
                    </a>
                    <div class="content" id="author-msg">
                        <span class="author"><?= $val['name'] ?></span>
                        <div class="text"><?= $val['message'] ?></div>
                    </div>
                </div>

            <?php } else { ?>
                <!-- shift message to left  -->
                <div class="comment" id="othermessagecontainer">
                    <a class="avatar">
                        <img src="<?= $image_url ?>" style="border-radius: 100%;">
                    </a>
                    <div class=" content" id="other-msg">
                        <span class="author"><?= $val['name'] ?></span>
                        <div class="text"><?= $val['message'] ?></div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>

<form class="sendMessage" action="../../includes/process_send_message.php?group_id=<?php echo $group_id; ?>" method="post">
    <div class="ui fluid labelled input icon">
        <input type="text" name="group_message" placeholder="Type Message">
        <button class="ui right labeled icon button" name="post_message">
            <i class="paper plane outline icon"></i>
            Send
        </button>
    </div>
</form>