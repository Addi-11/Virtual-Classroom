<?php 
if(session_status() === PHP_SESSION_ACTIVE and isset($_SESSION["error"])){   
    // success message 
    if($_SESSION["error"]=="Success") {?>
        <div class="ui positive message">
            <i class="close icon"></i>
            <div class="header">
                Success!!
            </div>
        </div>
<!-- error messages -->
<?php } else if($_SESSION['error']!='0'){?>

        <div class="ui negative message">
            <!-- <i class="close icon"></i> -->
            <div class="header">
                <?php
                    echo $_SESSION["error"]; 
                ?>
            </div>
        </div>
<?php }$_SESSION["error"] = '0';} ?>