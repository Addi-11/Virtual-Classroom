<?php include_once '../../includes/config.php'?>
<div class="ui grid">
    <!-- All groups displayed in this div -->
    <div class="four wide column">
        <div class="ui segment">
            <div class="ui search">
                <div class="ui fluid icon input">
                    <input class="prompt" type="text" placeholder="Search ...">
                    <i class="search icon"></i>
                </div>
            </div>
            <br>
            <div class="ui buttons">
                <button class="ui button">Create Group</button>
                <div class="or"></div>
                <button class="ui olive button">Join Group</button>
            </div>
            <div class="ui divider"></div>
            <?php
                $user_id=$_SESSION['id'];
                $query=mysqli_query($conn,"Select group_name from groups where group_id in (Select group_id from group_users where user_id='$user_id')");
                $group_names=mysqli_fetch_all($query,MYSQLI_ASSOC);
            ?>
            <div class="ui middle aligned list">
                <?php foreach ($group_names as $group_name) { 
                ?>
                    <div class="item">
                        <img class="ui avatar image" src="../../images/student.jpg">
                        &ensp;
                        <span style="font-size:18px">
                            <?=implode(" ", $group_name) ?>
                        </span>
                    </div>
                <?php } 
                ?>
            </div>
        </div>
    </div>
    <!--All chats for fixed group  -->
    <div class="twelve wide column">
        <div class="ui segment">
            <div class="ui top attached menu">
                <img class="ui avatar image" src="../../images/student.jpg">
                Group Name
            </div>
        </div>
    </div>
</div>