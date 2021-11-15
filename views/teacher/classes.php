<?php
include_once 'sidebar.php';
?>
<div class="left-container">
    <div class="ui basic segment">
        <form action="create_class.php">
            <button class="ui right floated button">
                <i class="plus icon"></i>
                Create Classroom
            </button>
        </form>
    </div><br>
    <div class="ui basic segment">
        <div class="ui cards">
            <?php
            include_once '../../includes/process_target_class.php';
            ?>
        </div>
    </div>
</div>

</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>