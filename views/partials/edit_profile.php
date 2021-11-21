<div id class="ui raised very padded text container segment ">

    <form action="../../includes/process_edit_profile.php" method="post" enctype="multipart/form-data">

        <img class="ui small centered circular image" src="../../images/teacher.png">

        <input id="file-input" name="image_file" type="file" />


        <button type="submit">B</button>
    </form>
    <form class="ui form" action="" method="post">
        <div class="field">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Ram" required>
        </div>
        <div class="field">
            <label>Mail ID</label>
            <input type="email" name="mail-id" placeholder="Mail ID" required>
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="field">
            <label>Phone Number</label>
            <input type="text" name="phone-number" placeholder="Phone number">
        </div>
        <div class="field">
            <label>Gender</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="gender" required>
                <div class="default text">Select Gender</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="male">Male</div>
                    <div class="item" data-value="female">Female</div>
                </div>
            </div>
        </div>
        <div class="field">
            <label>Vaccination Status</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="vaccination-status" required>
                <div class="default text">COVID-19 Vaccination Status</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="full-vaccine">Fully Vaccinated</div>
                    <div class="item" data-value="partial-vaccine">Partially Vaccinated</div>
                    <div class="item" data-value="not-vaccine">Not Vaccinated</div>
                </div>
            </div>
        </div>
        <button class="ui button" type="submit" name="edit_profile_button">Save</button>
    </form>
</div>