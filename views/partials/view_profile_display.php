<?php
include_once '../../includes/config.php';
$user_id = $_SESSION['id'];
$query = mysqli_query($conn, "Select * from users where id='$user_id'");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
$image_url = "../../images/".$_SESSION['profession'].".png";
if (isset($_SESSION['image_extension']) && $_SESSION['image_extension'] != '') {
    $image_url = "../../images/users/" . $_SESSION['id'] . "." . $_SESSION['image_extension'];
}
?>
<div id class="ui raised very padded text container segment ">
    <img class="ui small centered circular image" src="<?=$image_url?>">

    <form class="ui form" action="edit_profile.php" method="post">

        <label>Full Name</label>
        <div class="disabled field">
            <input type="text" name="name" value="<?= $result['name'] ?>">
        </div>
        <label>Mail ID</label>
        <div class="disabled field">
            <input type="email" name="mail-id" value="<?= $result['email'] ?>">
        </div>
        <label>Phone Number</label>
        <div class="disabled field">
            <input type="text" name="phone-number" value="<?= $result['phone_number'] ?>">
        </div>
        <label>Gender</label>
        <div class="disabled field">
            <div class="ui dropdown selection">
                <input type="hidden" name="gender">
                <div class="default text"><?= $result['gender'] ?></div>
                <i class="dropdown icon"></i>
            </div>
        </div>
        <label>Vaccination Status</label>
        <div class="disabled field">
            <div class="ui dropdown selection">
                <input type="hidden" name="vaccination-status" required>
                <div class="default text"><?= $result['vaccine_stat'] ?></div>
                <i class="dropdown icon"></i>
            </div>
        </div>
        <button class="ui button" type="submit" name="edit_profile_button">Edit</button>
    </form>
</div>