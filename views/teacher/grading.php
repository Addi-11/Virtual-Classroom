<?php
$table_name = 'student_submission';
$classwork_id = $file_id;

// get all students who submitted for given classroom
$query = mysqli_query($conn, "select users.name, student_submission.submission_file_id, student_submission.submission_file_extension, student_submission.submission_date from users, student_submission where (users.id=student_submission.user_id and classwork_id='$classwork_id')");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


foreach ($result as $student) {
    include '../error.php';
    echo $student['name']; ?>
    <form method="post">
        <input type="hidden" name='file_id' value="<?= $student['submission_file_id'] ?>">
        <input type="submit" name="download_student_button" value="Download Files" />
    </form>
    <form method="post">
        <input type="hidden" name='file_id' value="<?= $student['submission_file_id'] ?>">
        <input type="text" name='marks'>
        <input type="submit" name="submit_marks" value="Score" />
    </form>
<?php 
    // if($_SESSION['error']=='Success') {echo "success".'<br>';}
    // else if($_SESSION['error']!='0'){echo "Failed to update score."."<br>";}
    // $_SESSION['error']='0';
 } ?>


<!-- // <div class="ui middle aligned list">
//     <?php //foreach ($student_submission as $student) { 
        ?>
//         <div class="item">
//             <img class="ui avatar image" src="../../images/student.jpg">
//             &ensp;
//             <span style="font-size:18px">
                
//             </span>
//         </div>
//     <?php //} 
        ?>
// </div> -->