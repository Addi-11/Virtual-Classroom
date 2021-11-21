 <?php
    //  get all comments for given class-chat ordered by date
    $query = mysqli_query($conn, "select class_comments.comment, users.id, users.name, users.image_extension, class_comments.date_time from class_comments, users where ( class_comments.classroom_code='" . $class_code . "' and users.id = class_comments.user_id) order by class_comments.date_time;");
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    date_default_timezone_set('Asia/Kolkata');
    $current_date = date('Y-m-d H:i:s');

    // echo $current_date;
    ?>

 <div class="ui comments">
     <?php foreach ($result as $val) { ?>
         <div class="comment">
             <a class="avatar">
                 <?php
                    $image_url = "../../images/teacher.png";

                    if ($val['image_extension'] != '' || $val['image_extension'] != NULL) {
                        $image_url = "../../images/users/" . $val['id'] . "." . $val['image_extension'];
                    }
                    ?>
                 <img class="ui avatar image" src="<?= $image_url ?>" style="max-width: 35px; max-height: 35px;">
             </a>
             <div class="content">
                 <a class="author"><?= $val['name'] ?></a>
                 <div class="metadata">
                     <span class="date">
                         <?php
                            $interval = date_diff(date_create($current_date), date_create($val['date_time']));
                            echo $interval->format("%hh %im %ss");
                            ?>
                     </span>
                     ago
                 </div>
                 <div class="text"><?= $val['comment'] ?></div>
             </div>
         </div>
     <?php } ?>
 </div>