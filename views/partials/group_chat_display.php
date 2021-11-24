<?php
$group_id = $_GET['group_id'];
$query = mysqli_query($conn, "Select group_name from groups where group_id='$group_id'");
$group_name = mysqli_fetch_array($query, MYSQLI_ASSOC);
$query = mysqli_query($conn, "Select group_chats.*, users.* from group_chats , users where (group_chats.group_id='$group_id' and users.id=group_chats.user_id )order by group_chats.date_time");
$group_chats = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="ui segment">
    <div class="ui top attached secondary menu">
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
                    <i class="copy icon"></i>
                </div>
            </div>
        </div>
        <br>
    </div>


    <div class="ui comments">
        <?php foreach ($group_chats as $val) {
            $image_url = "../../images/student.png";

            if ($val['image_extension'] != NULL || $val['image_extension'] != '') {
                $image_url = "../../images/users/" . $val['id'] . "." . $val['image_extension'];
            }
            if ($val['user_id'] == $_SESSION['id']) {
        ?>
                <!-- if its my message make it shift to right -->
                <div>
                    <div class="comment">
                        <a class="avatar">
                            <img src="<?= $image_url ?>" style="max-width: 35px; max-height: 35px;">
                        </a>
                        <div class=" content">
                            <a class="author"><?= $val['name'] ?></a>
                            <div class="text"><?= $val['message'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <!-- shift message to left  -->
                <div class="comment">
                    <a class="avatar">
                        <img src="<?= $image_url ?>" style="max-width: 35px; max-height: 35px;">
                    </a>
                    <div class=" content">
                        <a class="author"><?= $val['name'] ?></a>
                        <div class="text"><?= $val['message'] ?></div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
    <form action="../../includes/process_send_message.php?group_id=<?php echo $group_id; ?>" method="post">
        <div class="ui fluid icon input">
            <input type="text" name="group_message" placeholder="Type Message">
            <button class="ui right labeled icon button" name="post_message">
                <i class="paper plane outline icon"></i>
                Send
            </button>
        </div>
    </form>
</div>