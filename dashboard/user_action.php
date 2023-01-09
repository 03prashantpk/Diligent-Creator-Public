
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include "includes/head.php";?>


<?php

//error_reporting(0);
// Extra security--> If user is not Admin redirect on index page
if ($IsAdmin != 1) {
    ?>
    <script>
        window.location.href='./';
    </script>
    <?php
}

$page_code = "users_profile";

$userIdDetails = $_POST['usersId'];

if ($userIdDetails == "") {
    ?>
    <script>
        window.location.href='./';
    </script>
    <?php
}

$fatch_user_all_data = "SELECT * FROM dev_profile WHERE id='$userIdDetails'";

$data = mysqli_query($conn, $fatch_user_all_data);

while ($row = mysqli_fetch_assoc($data)) {
    $User_username = $row["username"];
    $User_user_id = $row["id"];
    $User_email = $row['email'];
    $User_fname = $row['fname'];
    $User_lname = $row['lname'];
    $User_dob = $row['dob'];
    $User_phone = $row['phone'];
    $User_language = $row['language'];
    $User_master_skill = $row['master_skill'];
    $User_year_of_experience = $row['year_of_experience'];
    $User_project_completed = $row['project_completed'];
    $User_happy_customers = $row['happy_customers'];
    $User_award = $row['award'];
    $User_address = $row['address'];
    $User_about = $row['about'];
    $User_theme = $row['theme'];
    $User_message_notification = $row['message_notification'];
    $User_visit_notification = $row['visit_notification'];
    $User_profile_image = $row['profile_image'];
    $User_public = $row['public'];
    $User_joined_on = $row['joined_on'];
    $User_hire_mode = $row['hire_mode'];
    $User_country = $row['country'];
    $User_city = $row['city'];
    $User_pcode = $row['pcode'];
    $User_education = $row['education'];
    $User_currentstatus = $row['currentstatus'];
    $User_pdf_name = $row['user_resume'];
    $User_theme = $row['theme'];
    $User_IsAdmin = $row['admin_mode']; // admin role
    $User_IsTeam = $row['team_mode']; // team role
    $User_Is_Premium = $row['premium']; // premium mode
    $User_Block_status = $row['block']; // block
}

?>

<script src="functions/backend.js"></script>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar ---->
    <?php include "includes/sidebar.php";?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include "includes/navbar.php";?>
        <!-- End Navbar -->
        <?php include "includes/top-bar.php";?>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-bold">Overview</h5>
                                <button class="btn btn-primary btn-sm ms-auto" onclick="location.href='settings'"><i class="fas fa-cog"></i> Settings</button>
                            </div>
                        </div>
                        <div class="card-body">
                        <p class="text-center text-sm">Your Public Url <a class="text-warning font-weight-bold" href="../user/<?php echo $User_username ?>" target="blank">https://domain.com/user/<?php echo $User_username ?></a> </p>

                            <p class="text-uppercase text-sm text-warning">Your Information</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <p> <?php echo $User_username; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                        <p> <?php echo $User_email; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Name</label>
                                        <p> <?php echo $User_fname . " " . $User_lname; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Date of birth</label>
                                        <p> <?php echo $User_dob; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm text-warning">Contact Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <p> <?php echo $User_email; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <p> <?php echo $User_address; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Phone</label>
                                        <p> <?php echo $User_phone; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <p> <?php echo $User_country; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <p> <?php echo $User_city; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <p> <?php echo $User_pcode; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> 


            <div class="row" id="email_notifications">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Admin Actions Settings</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">User Type -
                                                        <?php if ($User_IsAdmin == 0) {
                                                                echo "<span style='color:red;'>Normal</span>";
                                                                $bg_color1 = "bg-warning";
                                                            } else {
                                                                echo "<span style='color:green;'>Admin</span>";
                                                                $bg_color1 = "bg-success";
                                                            }?></label>
                                                            <select name="" id="user_mode_action" class="form-select <?php echo $bg_color1;  ?>">
                                                        <?php
                                                            if ($User_IsAdmin == 0) {
                                                                ?>
                                                            <option class="bg-warning" value="0">Normal User</option>
                                                            <option class="bg-success" value="1">Admin</option>

                                                        <?php
                                                            } else {
                                                                ?>
                                                            <option class="bg-success" value="1">Admin</option>
                                                            <option class="bg-warning" value="0">Normal User</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Block Status -
                                                        <?php if ($User_Block_status == 1) {
                                                            echo "<span style='color:red;'>Blocked</span>";
                                                            $bg_color2 = "bg-warning";
                                                        } else {
                                                            echo "<span style='color:green;'>OK</span>";
                                                            $bg_color2 = "bg-success";
                                                        }?></label>
                                                    <select name="skill" id="block_status_action" class="form-select <?php echo $bg_color2;  ?>">
                                                        <?php
                                                            if ($User_Block_status == 0) {

                                                                ?>
                                                            <option class="bg-warning" value="0">All OK</option>
                                                            <option class="bg-success" value="1">Block User</option>
                                                        <?php
                                                                    } else {
                                                                        ?>
                                                            <option class="bg-success" value="1">Block User</option>
                                                            <option class="bg-warning" value="0">All OK</option>
                                                        <?php
                                                                }

                                                                ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Member Type -
                                                        <?php if ($User_Is_Premium == 0) {
                                                            echo "<span style='color:red;'>Free User</span>";
                                                            $bg_color3 = "bg-warning";
                                                        } else {
                                                            echo "<span style='color:green;'>Premium User</span>";
                                                            $bg_color3 = "bg-success";
                                                        }?></label>
                                                    <select name="skill" id="user_action_type" class="form-select <?php echo $bg_color3;  ?>">
                                                        <?php
                                                            if ($User_Is_Premium == 0) {

                                                                ?>
                                                            <option class="bg-warning" value="0">Free User</option>
                                                            <option class="bg-success" value="1">Premium User</option>
                                                        <?php
                                                                    } else {
                                                                        ?>
                                                            <option class="bg-success" value="1">Premium User</option>
                                                            <option class="bg-warning" value="0">Free User</option>
                                                        <?php
                                                                }

                                                                ?>
                                                    </select>
                                                    <input type="text" hidden value="<?php echo $User_user_id; ?>" id="User_action_id">
                                                    <input type="text" hidden value="<?php echo $User_username; ?>" id="User_username">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="user_action_button" onclick="user_action_settings()" type="button"><i class="fas fa-bell"></i> Save</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span id="response_user_action"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer and right config pannel-->

        </div><?php include "includes/footer.php";?>
    </main>

    <!-- Settings --->
    <?php include "includes/settings.php";?>
</body>

</html>