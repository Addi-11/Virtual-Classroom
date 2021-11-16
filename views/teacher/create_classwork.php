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
    <form class="ui form" method="post" action="../../includes/process_create_classwork.php?class_code=<?php echo $class_code; ?>">
        <div class="fields">
            <div class="twelve wide field">
                <label>Title</label>
                <input type="text" name="classwork_title" placeholder="Classwork Title">
            </div>
            <div class=" four wide field">
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
            <div class="twelve wide field">
                <textarea name="classwork_inst" placeholder="Instructions(optional)"></textarea>
            </div>
            <div class="three wide field">
                <label>Topic</label>
                <input type="text" name="classwork_topic" placeholder="Topic">
            </div>
            <div class="one wide field">
                <label>Points</label>
                <input type="text" name="classwork_marks" placeholder="Points">
            </div>
        </div>
        <a class="item">
            <i class="upload icon"></i>
        </a>
        <a class="item">
            <i class="linkify icon"></i>
            <input type="file" id="file_name" name="file_name" style="display:none;">
        </a>
        <a class="item">
            <i class="plus icon"></i>
        </a>

        <br><br>
        <button class="ui button" type="submit">Create Assignment</button>
    </form>
</div>


</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>
<script src="../../js/create_classwork.js" type="text/javascript"></script>

</html>