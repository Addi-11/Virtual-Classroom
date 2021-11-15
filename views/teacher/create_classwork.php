<?php
include_once 'sidebar.php';
?>

<div class="left-container">

    <div class="ui grid">
        <div class="sixteen wide column">
            <a class="item" href="classwork.php">
                <i class="arrow alternate circle left icon"></i>
                Back
            </a>
        </div>
        <div class="eleven wide column">
            <form class="ui form">
                <div class="field">
                    <label>Title</label>
                    <input type="text" name="assignment-name" placeholder="Classwork Title">
                </div>
                <div class="field">
                    <textarea placeholder="Instructions(optional)"></textarea>
                </div>
                <a class="item">
                    <i class="upload icon"></i>
                </a>
                <a class="item">
                    <i class="linkify icon"></i>
                </a>
                <a class="item">
                    <i class="plus icon"></i>
                </a>
                <br><br>
                <button class="ui button" type="submit">Create Assignment</button>
            </form>
        </div>
        <div class="five wide column">
            <form class="ui form">
                <div class="field">
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
                <div class="fields">
                    <div class="twelve wide field">
                        <label>Topic</label>
                        <input type="text" name="assignment-name" placeholder="Topic">
                    </div>
                    <div class="four wide field">
                        <label>Points</label>
                        <input type="text" name="assignment-name" placeholder="Points">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>


</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>
<script src="../../js/create_classwork.js" type="text/javascript"></script>

</html>