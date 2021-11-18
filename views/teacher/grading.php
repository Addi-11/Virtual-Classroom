<?php
$table_name = 'student_submission';
$classwork_id = $file_id;

// get all students who submitted for given classroom
$query = mysqli_query($conn, "select users.name, student_submission.submission_file_id, student_submission.submission_file_extension, student_submission.submission_date from users, student_submission where (users.id=student_submission.user_id and classwork_id='$classwork_id')");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


foreach ($result as $student) {
?>
    <div class="ui grid">
        <div class="eight wide column">
            <form method="post">
                <div class="ui grid">
                    <div class="ten wide column">
                        <div class="item">
                            <img class="ui avatar image" src="../../images/student.jpg">
                        <span style="text-transform:uppercase;"><?= $student['name'] ?></span>
                        </div>
                    </div>
                    <div class="six wide column">
                        <input type="hidden" name='file_id' value="<?= $student['submission_file_id'] ?>">
                        <input type="submit" name="download_student_button" value="Download" />
                    </div>
                </div>
            </form>
        </div>
        <div class="eight wide column">
            <form method="post">
                <input type="hidden" name='file_id' value="<?= $student['submission_file_id'] ?>">
                <div class="ui mini input">
                    <input type="text" name='marks' placeholder="Enter Marks">
                </div>
                <input type="submit" name="submit_marks" value="Score" />
            </form>
        </div>
    </div>
    <div class="ui divider"></div>
<?php
    // if($_SESSION['error']=='Success') {echo "success";}
    // else if($_SESSION['error']!='0'){echo "Failed to update score.";}
    // $_SESSION['error']='0';
} ?>