<div id class="ui raised very padded text container segment ">
    <?php include_once '../error.php'?>
    <a class="item" href="time_table.php">
        <i class="arrow alternate circle left icon"></i>
        Back
    </a>
    <div class="ui header">Add Task to Time Table</div>
    <form class="ui form" action="../../includes/process_create_time_table.php" method="post">
        <div class="field">
            <label>Event Name</label>
            <input type="text" name="task_name" placeholder="Task/Class Name" required>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Start Time</label>
                <input id="appt-time" type="time" name="start_time">
            </div>
            <div class="field">
                <label>End Time</label>
                <input id="appt-time" type="time" name="end_time">
            </div>
        </div>
        <div class="field">
            <label>Week Day</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="week_day" required>
                <div class="default text">Select Day</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="0">Monday</div>
                    <div class="item" data-value="1">Tuesday</div>
                    <div class="item" data-value="2">Wednesday</div>
                    <div class="item" data-value="3">Thursday</div>
                    <div class="item" data-value="4">Friday</div>
                    <div class="item" data-value="5">Saturday</div>
                    <div class="item" data-value="6">Sunday</div>
                </div>
            </div>
        </div>
        <button class="ui button" type="submit" name="create_time_table">Create</button>
    </form>
</div>



<script src="../../js/register.js" type="text/javascript"></script>