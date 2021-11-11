<div id class="ui raised very padded text container segment ">
    <form class="ui form">
        <div class="field">
            <label>Profession</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="gender">
                <div class="default text">Select Profession</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="student">Student</div>
                    <div class="item" data-value="teacher">Teacher</div>
                </div>
            </div>
        </div>
        <div class="field">
            <label>Mail ID</label>
            <input type="text" name="mail-id" placeholder="Mail ID">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="Password" placeholder="Password">
        </div>
        <div class="field">
            <label>Phone Number</label>
            <input type="text" name="phone-number" placeholder="Phone number">
        </div>
        <div class="field">
            <label>Gender</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="gender">
                <div class="default text">Select Gender</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="male">Male</div>
                    <div class="item" data-value="female">Female</div>
                </div>
            </div>
        </div>
        <button class="ui button" type="submit">Register</button>
    </form>
</div>


<script src="js/register.js" type="text/javascript"></script>