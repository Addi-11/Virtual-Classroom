<?php if($_SESSION["error"]=="Success") {?>
    <div class="ui positive message">
        <i class="close icon"></i>
        <div class="header">
            Success!!
        </div>
    </div>
<?php } else{?>

    <div class="ui negative message">
        <!-- <i class="close icon"></i> -->
        <div class="header">
            <?php
                echo $_SESSION["error"]; 
            ?>
        </div>
    </div>
<?php } ?>