<?php
include_once '../../includes/config.php';
$days = [0 => 'Monday', 1 => 'Tuesday', 2 => 'Wednesday', 3 => 'Thursday', 4 => 'Friday', 5 => 'Saturday', 6 => 'Sunday'];
$user_id = $_SESSION['id'];
?>

<form action="create_time_table.php" method="post">
    <button class="ui button">Create</button>
</form>

<div class="ui piled segments">
    <?php foreach (array_keys($days) as $day) {
        $query = mysqli_query($conn, "Select day,task, DATE_FORMAT(start_time, '%H:%i') AS start_time, DATE_FORMAT(end_time, '%H:%i') AS end_time from time_table where (user_id ='$user_id' and day='$day') order by start_time ");
        $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
        if ($day % 2 == 0) {
            $style = "ui teal segment";
        } else {
            $style = "ui secondary teal segment";
        }
    ?>
    <div class="<?= $style ?>">
        <div class="ui horizontal list">
            <div class="item">
                <div class="ui justified teal sub header"><?= $days[$day] ?></div>
            </div>
            <?php
            foreach ($results as $result) { ?>
            <div class="item">
                <div class="ui justified content">
                    <?= $result['task'] ?>
                    <div class="sub header">
                        <?= $result['start_time'] ?> -
                        <?= $result['end_time'] ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>