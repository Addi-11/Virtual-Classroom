<?php
$table_name='student_submission';
$classwork_id=$file_id;

// get all students who submitted for given classroom
$query=mysqli_query($conn, "select users.name, student_submission.submission_file_id, student_submission.submission_file_extension, student_submission.submission_date from users, student_submission where (users.id=student_submission.user_id and classwork_id='$classwork_id')");
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);

foreach($result as $student){
    echo $student['name'];
}
?>


<!-- // <div class="ui middle aligned list">
//     <?php //foreach ($student_submission as $student) { ?>
//         <div class="item">
//             <img class="ui avatar image" src="../../images/student.jpg">
//             &ensp;
//             <span style="font-size:18px">
                
//             </span>
//         </div>
//     <?php //} ?>
// </div> -->
