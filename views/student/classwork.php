<?php
include_once 'sidebar.php';
$class_code = $_GET["class_code"];
?>

<div class="left-container">
    <div class="ui top attached tabular menu">
        <a class="item" href="class_stream.php?class_code=<?php echo $class_code; ?>">
            Stream
        </a>
        <a class="active item" href="classwork.php?class_code=<?php echo $class_code; ?>">
            Classwork
        </a>
        <a class="item" href="class_people.php?class_code=<?php echo $class_code; ?>">
            People
        </a>
    </div>  
    <div class="ui bottom attached segment">
        <div class="ui clearing segment">
            <form>
                <button class="ui right floated button">
                    Submit
                </button>
            </form>
        </div>
    </div>

</div>


</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>