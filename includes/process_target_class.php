<?php 
// session_start();
require_once('config.php');
 
$user_id=$_SESSION["id"];
$table_name='classrooms';

// echo $_SESSION["profession"];
if($_SESSION["profession"]=="teacher"){
    $table_name="classrooms";
}else if($_SESSION["profession"] == "Student"){
    $table_name="class_student";
}

// extract all class_codes for given user id
$query=mysqli_query($conn, "select distinct classroom_code from ".$table_name." where user_id='$user_id'");

$classroom_codes = mysqli_fetch_all($query, MYSQLI_ASSOC);

// for all classcodes get all info from classrooms table
foreach ($classroom_codes as $code) {
    $class_code = implode(" ", $code);
    $query = mysqli_query($conn, "select * from classrooms where classroom_code='$class_code'");
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $_SESSION["result"]=$result;
?>

<!-- Card HTML starts -->
    <a class="card" href="class_stream.php">
        <div class="content">
            <div class="header"><?= $result["subject_name"]; ?></div>
            <div class="meta"><?= $result["subject_code"]; ?></div>
            <!-- <div class="ui divider"></div> -->
            <div class="description">
                <div class="ui sub header"><?= $result["batch"]; ?></div>
                <div class="ui sub header"><?= $result["section"]; ?></div>
                <div class="ui sub header"><?= $result["room_number"]; ?></div>
            </div>
        </div>
    </a>

<?php } ?>
