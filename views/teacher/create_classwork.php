<?php
include_once 'sidebar.php';
$class_code = $_GET["class_code"];
?>

<div class="left-container">
    <div class="sixteen wide column">
        <a class="item" href="classwork.php?class_code=<?php echo $class_code; ?>">
            <i class="arrow alternate circle left icon"></i>
            Back
        </a>
    </div>
    <?php include_once '../error.php' ?>
    <form class="ui form" method="post" action="../../includes/process_create_classwork.php?class_code=<?php echo $class_code; ?>" enctype="multipart/form-data">
        <div class="fields">
            <div class="ten wide field">
                <label>Title</label>
                <input type="text" name="classwork_title" placeholder="Classwork Title">
            </div>
            <div class="three wide field">
                <label>Topic</label>
                <input type="text" name="classwork_topic" placeholder="Topic">
            </div>
            <div class=" two wide field">
                <label>For</label>
                <div class="ui dropdown selection">
                    <input type="hidden" name="gender" required>
                    <div class="default text">Classwork For</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item" data-value="all-students">All Students</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fields">
            <div class="ten wide field">
                <textarea name="classwork_inst" placeholder="Instructions(optional)"></textarea>
            </div>
            <div class="three wide field">
                <label>Due Date</label>
                <input type="date" name="classwork_due_date" placeholder="YYYY-MM-DD">
            </div>
            <div class="one wide field">
                <label>Points</label>
                <input type="text" name="classwork_marks" placeholder="Points">
            </div>
        </div>
        <!-- <a class="item">
            <i class="upload icon"></i>
        </a> -->

        <!-- <a class="item">
            <i class="linkify icon"></i>
        </a>
        <a class="item">
            <i class="plus icon"></i>
        </a> -->
        <div class="fields">
            <div class="ten wide field">
                <div class="image-upload">
                    <i classs="upload icon"></i>
                    <input id="file-input" stylde="color:red;" name="file_name" type="file" />
                </div>
            </div>
        </div>

        <br><br>
        <button class="ui button" type="submit">Create Assignment</button>
    </form>
</div>


</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>
<script src="../../js/create_classwork.js" type="text/javascript"></script>

</html>