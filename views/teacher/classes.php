<?php
include_once 'sidebar.php';
?>
<div class="left-container">
    <div class="ui grid">
        <div class="sixteeen wide column">
            <form action="create_class.php">
                <button class="ui right floated button">
                    Create Classroom
                </button>
            </form>
        </div>
        <div class="sixteen wide column">

        </div>
    </div>
    <div class="ui cards">
        <?php

        include_once '../../includes/process_target_class.php';

        ?>
            

    </div>
</div>

</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>