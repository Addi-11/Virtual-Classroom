<?php
include_once '../../includes/config.php';
$profession=$_SESSION['profession'];
$query=mysqli_query($conn,"Select classwork_title, file_id from files where classroom_code='$class_code' order by create_date desc");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

if($profession=="student"){
    $url = "submit_classwork.php";
}else if($profession=="teacher"){
    $url = "view_asgn_classwork.php";
}

foreach($result as $classworks){ ?>
    <div class="ui padded segment">
        <form action="<?=$url?>?file_id=<?=$classworks['file_id']?>" method='post'>
            <span><?=$classworks['classwork_title']?></span>
            <button class="ui button" style="position:absolute; top:12px; right:10px;">
                <i class="eye icon"></i>
                View Assignment
            </button>
        </form>
    </div>
    
<?php }?>

