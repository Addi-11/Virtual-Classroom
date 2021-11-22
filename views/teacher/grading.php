<?php
$table_name = 'student_submission';
$classwork_id = $file_id;

// get all students who submitted for given classroom
$query = mysqli_query($conn, "select users.id,users.name, users.image_extension,student_submission.submission_file_id, student_submission.submission_file_extension, student_submission.submission_date from users, student_submission where (users.id=student_submission.user_id and classwork_id='$classwork_id')");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
$msg = "";
foreach ($result as $student) {
    $image_url = "../../images/student.png";

    if ($student['image_extension'] != '' || $student['image_extension'] != NULL) {
        $image_url = "../../images/users/" . $student['id'] . "." . $student['image_extension'];
    }
?>
    <div class="ui grid">
        <div class="row">
            <div class="eight wide column">
                <form method="post">
                    <div class="ui grid">
                        <div class="ten wide column">
                            <div class="item">
                                <img class="ui avatar image" src="<?=$image_url?>">
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
            <div class="six wide column">
                <form method="post">
                    <input type="hidden" name='file_id' value="<?= $student['submission_file_id'] ?>">
                    <div class="ui mini input">
                        <input type="text" name='marks' placeholder="Enter Marks">
                    </div>
                    <input type="submit" name="submit_marks" value="Score" />
                </form>
            </div>
            <!-- displaying success msg on giving marks -->
            <div class="two wide column">
                <?php
                    // if ($_SESSION['error'] == 'Success') {
                    //     $msg = "success";
                    // } else if ($_SESSION['error'] != '0') {
                    //     $msg = "Failed";
                    // }
                    // $_SESSION['error'] = '0';
                    // echo $msg; $msg='';
                ?>
            </div>
        </div>
    </div>
    <div class="ui divider"></div>
<?php } ?>