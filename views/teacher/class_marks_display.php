<?php
include_once '../../includes/config.php';

// classworks for given class
$query = mysqli_query($conn, "Select classwork_title,file_id,classwork_marks from files where classroom_code='$class_code'");
$columns = mysqli_fetch_all($query, MYSQLI_ASSOC);

// all students for given classroom
$student_query = mysqli_query($conn, "select name,id from users where id in (select user_id from class_student where classroom_code='$class_code')");
$students = mysqli_fetch_all($student_query, MYSQLI_ASSOC);

?>

<table class="ui striped table">
    <thead>
        <tr>
            <th>Student Name</th>
            <?php 
            $total_marks=0;
            foreach ($columns as $column) { 
                $total_marks=$total_marks+$column['classwork_marks'];
            ?>
                <th>
                    <?= $column['classwork_title'] ?>
                </th>
                
            <?php } ?>
            <th>Percentage %</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) { 
            $student_total_marks=0;
        ?>

            <tr>
                <td><?= $student['name'] ?></td>
                <?php foreach($columns as $column){
                    $student_id = $student['id'];
                    $classwork_id = $column['file_id'];
                    $query = mysqli_query($conn, "select marks from student_submission where user_id='$student_id' and classwork_id='$classwork_id'");
                    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
                    
                ?>
                <td><?php 
                    if($result==null) echo '0';
                    else {
                        $student_total_marks=$student_total_marks+$result['marks'];
                        echo $result['marks'];
                    }
                ?></td>
                <?php }?>
                <td>
                    <?php 
                        $percent=($student_total_marks*100)/max($total_marks, 1);
                        $percent=number_format($percent, 2);
                        echo $percent." %";
                    ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>