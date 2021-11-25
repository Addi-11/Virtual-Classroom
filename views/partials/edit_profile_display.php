<?php
include_once '../../includes/config.php';
$user_id = $_SESSION['id'];
$query = mysqli_query($conn, "Select * from users where id='$user_id'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
$image_url = "../../images/" . $_SESSION['profession'] . ".png";
if (isset($_SESSION['image_extension'])) {
    $image_url = "../../images/users/" . $_SESSION['id'] . "." . $_SESSION['image_extension'];
}
?>
<div id class="ui raised very padded text container segment ">

    <form action="../../includes/process_upload_profile_pic.php" method="post" enctype="multipart/form-data">
        <img class="ui small centered circular image" src="<?= $image_url ?>"><br>
        <input id="file-input" name="image_file" type="file" />
        <button type="submit">Upload</button>
    </form>
    <div class="ui divider"></div>
    <br>
    <form class="ui form" action="../../includes/process_edit_profile.php" method="post">
        <div class="field">
            <label>Full Name</label>
            <input type="text" name="name" value="<?= $result['name'] ?>" placeholder="Name" required>
        </div>

        <label>Mail ID</label>
        <div class="disabled field">
            <input type="email" name="email" value="<?= $result['email'] ?>" placeholder="Mail ID" required>
        </div>
        <div class="field">
            <label>Phone Number</label>
            <input type="text" name="phone_number" value="<?= $result['phone_number'] ?>" placeholder="Phone number">
        </div>
        <div class="field">
            <label>Gender</label>
            <div class="ui dropdown selection">
                <input type="hidden" name="gender" value="<?= $result['gender'] ?>">
                <div class="default text"><?= $result['gender'] ?></div>
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
                <input type="hidden" name="vaccine_stat" value="<?= $result['vaccine_stat'] ?>">
                <div class="default text">"<?= $result['vaccine_stat'] ?>"</div>
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


<script src="../../js/register.js" type="text/javascript"></script>