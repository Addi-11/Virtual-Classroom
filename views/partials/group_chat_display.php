<?php
$group_id = $_GET['group_id'];

// if (isset($_POST['post_message'])) {
//     $user_id = $_SESSION['id'];
//     $message = $_POST['group_message'];
//     date_default_timezone_set('Asia/Kolkata');
//     $date_time = date('Y-m-d H:i:s');
//     $query = "Insert into group_chats (user_id,group_id,date_time,message) Values ('$user_id','$group_id','$date_time','$message')";
//     $result = mysqli_query($conn, $query);
//     if ($result) {
//         $query = "Update groups set latest_msg_time='$date_time' where group_id='$group_id'";
//         $res = mysqli_query($conn, $query);
//         header('location: chat_groups?group_id='.$group_id);
//         // header("Refresh:0");
//         // exit;
//     }
// }
$query = mysqli_query($conn, "Select group_name from groups where group_id='$group_id'");
$group_name = mysqli_fetch_array($query, MYSQLI_ASSOC);
$query = mysqli_query($conn, "Select group_chats.*, users.* from group_chats , users where (group_chats.group_id='$group_id' and users.id=group_chats.user_id )order by group_chats.date_time");
$group_chats = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="ui segment">
    <div class="ui top attached menu">
        <div class="ui huge header">
            <img class="ui avatar image" src="../../images/group.jpg">
            <?= $group_name['group_name'] ?>
            <?= $group_id ?>
            
        </div>
        <br>
    </div>


    <div class="ui comments">
        <?php foreach ($group_chats as $val) {
            $image_url = "../../images/student.png";

            if ($val['image_extension'] != NULL || $val['image_extension'] != '') {
                $image_url = "../../images/users/" . $val['id'] . "." . $val['image_extension'];
            }
            if ($val['user_id'] == $_SESSION['id']) { ?>
                <!-- if its my message make it shift to right -->
                <div style="margin-left:80%;">
                    <div class="comment">
                        <a class="avatar">
                            <img src="<?= $image_url ?>">
                        </a>
                        <div class="content">
                            <a class="author"><?= $val['name'] ?></a>
                            <!-- <div class="metadata">
                                    <span class="date">
                                        <?php
                                        // $interval = date_create($val['date_time']);
                                        // echo $interval->format("%hh %im %ss");
                                        // echo $val['date_time'];
                                        ?>
                                    </span>
                                </div> -->
                            <div class="text"><?= $val['message'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <!-- shift message to left  -->
                <div class="comment">
                    <a class="avatar">
                        <img src="<?=$image_url?>">
                    </a>
                    <div class="content">
                        <a class="author"><?= $val['name'] ?></a>
                        <div class="metadata">
                            <span class="date">
                                <?php
                                // $interval = date_create($val['date_time']);
                                // echo $interval->format("%hh %im %ss");
                                // echo $val['date_time'];
                                ?>
                            </span>
                        </div>
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