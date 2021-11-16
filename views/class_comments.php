 <?php
    //  get all comments fro given class-chat ordered by date
    $query = mysqli_query($conn, "select  class_comments.comment,  users.name from class_comments, users where ( class_comments.classroom_code='abcd3' and users.id = class_comments.user_id) order by class_comments.date_time;");
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

 <div class="ui comments">
    <?php foreach ($result as $val) { ?>
        <div class="comment">
            <a class="avatar">
                <img src="../../images/teacher.png">
            </a>
            <div class="content">
                <a class="author"><?=$val['name']?></a>
                <div class="metadata">
                    <!-- <span class="date">time</span> -->
                </div>
                <div class="text"><?=$val['comment']?></div>
            </div>
        </div>
    <?php } ?>
 </div>