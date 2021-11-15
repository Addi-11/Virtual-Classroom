<?php
include_once 'sidebar.php';
?>
<div class="left-container">
    <div class="ui top attached tabular menu">
        <a class="item" href="class_stream.php">
            Stream
        </a>
        <a class="active item" href="classwork.php">
            Classwork
        </a>
        <a class="item" href="class_people.php">
            People
        </a>
        <a class="item" href="class_marks.php">
            Marks
        </a>
    </div>
    <div class="ui bottom attached segment">
        <div class="ui grid">
            <div class="sixteen wide column">
                <form action="create_classwork.php">
                    <button class="ui button">
                        <i class="plus icon"></i>
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>


</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>