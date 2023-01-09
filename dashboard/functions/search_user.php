<?php
include('connection.inc.php');
include('MainFunctions.php');
include("confidentials.php");

$username_to_search =  $_POST["find_username"];
if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $username_to_search)) {
    echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed!";
}
else {
    $check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE username='$username_to_search' AND public='1'");
    if (mysqli_num_rows($check_username)) {
        //echo "available!";
        while ($row = mysqli_fetch_assoc($check_username)){
            $Searched_user_id = $row["id"];
            $Searched_username = $row["username"];
            $Searched_name = $row['fname'] . " " . $row["lname"];
            $Searched_profile_picture = $row['profile_image'];
            $Searched_master_skill = $row['master_skill'];
        }
        ?>
    <div class="col-md-1">
        <div class="form-group">
            <img src="profile_images/<?php echo $Searched_profile_picture; ?>" width="50" height="50" style="border-radius: 50%;" alt="">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <h6 style=""><?php echo $Searched_name; ?></h6>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <h6 style=" color: green;"><a style="color: green; text-decoration: underline;" target="_blank" href="../u/<?php echo $Searched_username; ?>"><?php echo $Searched_username; ?></a> </h6>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <h6 style=""><?php echo $Searched_master_skill; ?></h6>
        </div>
    </div>
    
    <div class="col-md-2">
        <div class="form-group">
            <form action="" method="POST">
                <input type="text" hidden name="send_request_user_id" value="<?php echo $Searched_user_id;  ?>">
                <input type="text" hidden name="send_request_user_name" value="<?php echo $Searched_username;  ?>">
                <i class="fas fa-paper-plane"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Send Request" name="send_friend_request">
            </form>
        </div>
    </div>


    <?php
    }
    else{
        echo '<p id="hide_response_message" style="text-align: center; font-weight: 600; color: #FB6340; background-color:#F2F6F9;">User account maybe hidden or does not exist.</p>';
    }
}
