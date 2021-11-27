<?php include_once '../../includes/config.php';
?>
<div class="ui grid">
    <!-- All groups displayed in this div -->
    <div class="four wide column">
        <div style="height:80vh; overflow-y:scroll;">
            <div class="ui search">
                <div class="ui fluid icon input">
                    <input class="prompt" type="text" placeholder="Search ...">
                    <i class="search icon"></i>
                </div>
            </div>
            <br>
            <div class="ui buttons">
                <button class="ui button" name="create_group" onclick="CreateGroupForm()">Create Group</button>
                <div class="or"></div>
                <button class="ui teal button" name="join_group" onclick="JoinGroupForm()">Join Group</button>

            </div>
            <br>
            <br>

            <?php include_once '../error.php'; ?>
            <div id="create_group_form" style="display:none">
                <form action="../../includes/process_create_chat_groups.php" method="post">
                    <div class="ui fluid action input">
                        <input type="text" placeholder="Create Group" name="group_name">
                        <button class="ui button">Create</button>
                    </div>
                </form>
            </div>
            <div id="join_group_form" style="display:none">
                <form action="../../includes/process_join_chat_group.php" method="post">
                    <div class="ui fluid action input">
                        <input type="text" placeholder="Join Group" name="group_id">
                        <button class="ui button">Join</button>
                    </div>
                </form>
            </div>
            <div class="ui divider"></div>
            <?php
            // obtain all the chat groups for given user
            $user_id = $_SESSION['id'];
            $query = mysqli_query($conn, "Select * from groups where group_id in (Select group_id from group_users where user_id='$user_id') order by latest_msg_time desc");
            $groups = mysqli_fetch_all($query, MYSQLI_ASSOC);
            ?>
            <div class="ui middle aligned list">
                <?php foreach ($groups as $group) {
                ?>
                    <a href="chat_groups.php?group_id=<?= $group['group_id'] ?>">
                        <div class="item">
                            <img class="ui avatar image" src="../../images/house.png">
                            &ensp;
                            <span style="font-size:18px">
                                <?= $group['group_name'] ?>
                            </span>
                        </div>
                    </a>
                    <div class="ui divider"></div>
                    <br>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <!--All chats for fixed group  -->

    <div class="twelve wide column">
        <?php
        // when click on a particular group
        if (isset($_GET['group_id'])) {
            include_once '../partials/group_chat_display.php';
        } else {
        ?>
            <div class="ui placeholder segment">
                <br><br>
                <img class="ui centered big image" src="../../images/lets-chat.png">
                <br>
                <div class="ui divider"></div>
                <div class="ui grid">
                    <div class="four wide column">
                        <img class="ui centered small image" src="../../images/books.png">
                    </div>
                    <div class="twelve wide column">
                        <div style="margin-top: 10%;" class="ui header">
                            Let's connect and make learning a fun enjoyable process!!
                        </div>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
</div>

<script src="../../js/group.js"></script>