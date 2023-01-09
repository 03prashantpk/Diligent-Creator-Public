<?php $page_code = "teams";?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include "includes/head.php";?>
<script src="functions/backend.js"></script>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar ---->
    <?php include "includes/sidebar.php";?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include "includes/navbar.php";?>
        <!-- End Navbar -->
        <?php include "includes/top-bar.php";?>

        <!-- 
            SEND REQUEST CODE START's HERE
        -->
        <?php

        // Search and Send Request
        if(isset($_POST['send_friend_request'])){
            $send_request_user_id = $_POST['send_request_user_id'];
            $send_request_user_name = $_POST['send_request_user_name'];

            if($send_request_user_name == $username){
                $request_already_exist_message = "You cannot sent request to own-self";
                ?>
                <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                    //location.reload();
                }
                </script>

                <?php
            }
            else{
                $check_if_request_exist = mysqli_query($conn,"SELECT * FROM request_sent WHERE username = '$username' AND request_sent_username = '$send_request_user_name'");

            if (mysqli_num_rows($check_if_request_exist)) {
                ?>
                <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                    //location.reload();
                }
                </script>

            <?php
            $request_already_exist_message = 'You have Already Sent request to this user or you are already added. Wait for the response. <span onclick="hide_response_message()"><i class="fas fa-times-circle"></i></span> ';
            }
                else{
                    $save_sent_friend_request = "INSERT INTO request_sent (user_id,username,request_sent_id,request_sent_username,status,added_on) VALUES ('$user_id', '$username', '$send_request_user_id', '$send_request_user_name', '0', '$current_date')";
                    $save_sent_friend_request_query = mysqli_query($conn,$save_sent_friend_request);

                    $save_sent_friend_request_received = "INSERT INTO request_received (user_id,username,request_received_id,request_received_username,status,added_on) VALUES ('$send_request_user_id', '$send_request_user_name', '$user_id', '$username', '0', '$current_date')";
                    $save_sent_friend_request_received_query = mysqli_query($conn,$save_sent_friend_request_received);

                    if($save_sent_friend_request_query && $save_sent_friend_request_received_query){
                        $request_already_exist_message = "Request Sent Successfully!";
                        ?>
                            <script>
                            if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                    //location.reload();
                                }
                            </script>

                        <?php
                    }
                    else{
                        $request_already_exist_message = "Something Went Wrong!";
                        ?>
                            <script>
                            if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                    //location.reload();
                                }
                            </script>

                        <?php
                    }

                }
                
            }
        }

        // Fatch New Request
        $new_request = "SELECT * FROM request_received WHERE user_id='$user_id' AND status = '0'";
        $new_request_data = mysqli_query($conn,$new_request);

        $request_sent = "SELECT * FROM request_sent  WHERE user_id='$user_id' AND status = '0'";
        $request_sent_data = mysqli_query($conn,$request_sent);

        $count_new_request = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `request_received` WHERE user_id='$user_id' AND status=0");
        $total_request = mysqli_fetch_array($count_new_request );
        $pending_new_request = $total_request['count'];

        $count_request_sent = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `request_sent` WHERE user_id='$user_id' AND status=0");
        $total_request_sent = mysqli_fetch_array($count_request_sent );
        $pending_new_request_data = $total_request_sent['count'];

        // Delete friend request
        if(isset($_POST['delete_request'])){
            $request_id_to_delete = $_POST['request_id_to_delete'];
            $request_username_to_delete = $_POST['request_username_to_delete'];

            $request_delete_query = "DELETE FROM request_received WHERE user_id='$user_id' AND request_received_username='$request_username_to_delete'";
            $request_delete_query_run = mysqli_query($conn, $request_delete_query);

            $request_delete_query_2 = "DELETE FROM request_sent WHERE request_sent_id='$user_id' AND username='$request_username_to_delete'";
            $request_delete_query_run_2 = mysqli_query($conn, $request_delete_query_2);

            if($request_delete_query_run && $request_delete_query_run_2){
                ?>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                        location.reload();
                    }
                </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Something Went wrong!");
                    </script>
                <?php
            }

        }

        if(isset($_POST['accept_request'])){
            $request_id_to_delete = $_POST['request_id_to_delete'];
            $request_username_to_delete = $_POST['request_username_to_delete'];

            $request_delete_query = "UPDATE request_received SET status='1' WHERE user_id='$user_id' AND request_received_username='$request_username_to_delete'";
            $request_delete_query_run = mysqli_query($conn, $request_delete_query);

            $request_delete_query_2 = "UPDATE request_sent SET status='1' WHERE request_sent_id='$user_id' AND username='$request_username_to_delete'";
            $request_delete_query_run_2 = mysqli_query($conn, $request_delete_query_2);

            if($request_delete_query_run && $request_delete_query_run_2){
                ?>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                        location.reload();
                    }
                </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Something Went wrong here!");
                    </script>
                <?php
            }

        }

        // Friend Added
        $total_friend= "SELECT * FROM request_sent WHERE user_id='$user_id' AND status='1'";
        $total_friend_data = mysqli_query($conn,$total_friend);

        if(isset($_POST['remove_friend'])){
            $remove_friend_id = $_POST['remove_friend_id'];
            $remove_friend_username = $_POST['remove_friend_username'];

            $request_delete_query = "DELETE FROM request_received WHERE user_id='$user_id' AND request_received_username='$remove_friend_username'";
            $request_delete_query_run = mysqli_query($conn, $request_delete_query);

            $request_delete_query_2 = "DELETE FROM request_sent WHERE user_id='$user_id' AND request_sent_username='$remove_friend_username'";
            $request_delete_query_run_2 = mysqli_query($conn, $request_delete_query_2);

            if($request_delete_query_run && $request_delete_query_run_2){
                ?>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                        location.reload();
                    }
                </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Something Went wrong here!");
                    </script>
                <?php
            }


        }

        if(isset($_POST['delete_f_request'])){
            $remove_friend_id = $_POST['remove_friend_id'];
            $remove_friend_username = $_POST['remove_friend_username'];

            $request_delete_query = "DELETE FROM request_received WHERE request_received_id='$user_id' AND username='$remove_friend_username'";
            $request_delete_query_run = mysqli_query($conn, $request_delete_query);

            $request_delete_query_2 = "DELETE FROM request_sent WHERE user_id='$user_id' AND request_sent_username='$remove_friend_username'";
            $request_delete_query_run_2 = mysqli_query($conn, $request_delete_query_2);

            if($request_delete_query_run && $request_delete_query_run_2){
                ?>
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                        location.reload();
                    }
                </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Something Went wrong here!");
                    </script>
                <?php
            }


        }
        

        ?>

        <!-- 
            SEND REQUEST CODE END's HERE
        -->

        <div class="container-fluid py-4">
            <div class="row" id="">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Search Profile via Username</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Enter Username</label>
                                                    <input class="form-control" type="text" name="" id="find_username">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="profile_upload_btn" onclick="search_users_profile()" type="button"><i class="fas fa-search"></i> Search</a>
                                                </div>
                                            </div>


                                            <div class="row" id="search_result">
                                                <!--- code here ----> 
                                        </div>
                                        <br><br><br><br>
                                        <p id="hide_response_message" style="text-align: center; font-weight: 600; color: #FB6340; background-color:#F2F6F9;"><?php echo @$request_already_exist_message; ?></p>
                                        <br><br><br><br>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--- Data exist tab -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>New Request - <span class="text-warning"><?php echo $pending_new_request; ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                    <div class="col-md-1">
                                            <div class="form-group" style="text-align: center; border-right: #34476720 solid 1px;">
                                                <label for="example-text-input" class="form-control-label">#ID </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Username </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label">View Profile</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label" style="text-align: center;">Requested On </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label" style="text-align: center;">Accept </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3" style="text-align: center;">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Delete </label></form>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <?php 
                                        while ($row = mysqli_fetch_assoc($new_request_data)) {
                                        //$new_request_user_id = $row["id"];
                                    ?>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group" style="text-align: center; border-right: #34476720 solid 1px;">
                                                    <h6 style=" color: black;">#399<?php echo $row["id"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h6 style=" color: #344767;">@<?php echo $row["request_received_username"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group" style="text-align: center;">
                                                    <h6 style=" color: green;"><a style="background-color:#FB6340; border-radius: 4px; padding: 2px 8px; color: #fff; box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28); -webkit-box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28); -moz-box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28);" target="_blank" href="../u/<?php echo $row["request_received_username"]; ?>">Click here <i class="fas fa-external-link-alt"></i></a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group" style="text-align: center;">
                                                    <label for="example-text-input" class="form-control-label" style="text-align: center;"><?php echo $row["added_on"]; ?></label>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="text-align: center;">
                                                <div class="form-group" style="text-align: center;">
                                                <form action="" method="POST">
                                                        <input type="text" hidden name="request_id_to_delete" value="<?php echo $row["id"]; ?>">
                                                        <input type="text" name="request_username_to_delete" value="<?php echo $row["request_received_username"]; ?>" hidden>
                                                        <i class="fas fa-check-circle text-success"></i> <input class="btn btn-link text-success text-gradient mb-0" style="padding-left: 0;" type="submit" value="Accept" name="accept_request">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group" style="text-align: center;">
                                                    <form action="" method="POST">
                                                        <input type="text" hidden name="request_id_to_delete" value="<?php echo $row["id"]; ?>">
                                                        <input type="text" name="request_username_to_delete" value="<?php echo $row["request_received_username"]; ?>" hidden>
                                                        <i class="fas fa-times-circle"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_request">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
            <!--- Data exist tab -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Request Sent - <span class="text-warning"><?php echo $pending_new_request_data; ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                    <div class="col-md-1">
                                            <div class="form-group" style="text-align: center; border-right: #34476720 solid 1px;">
                                                <label for="example-text-input" class="form-control-label">#ID </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Username </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label">View Profile</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label" style="text-align: center;">Sent On </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3" style="text-align: center;">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Delete </label></form>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <?php 
                                        while ($row = mysqli_fetch_assoc($request_sent_data)) {
                                        //$new_request_user_id = $row["id"];
                                    ?>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group" style="text-align: center; border-right: #34476720 solid 1px;">
                                                    <h6 style=" color: black;">#399<?php echo $row["id"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h6 style=" color: #344767;">@<?php echo $row["request_sent_username"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group" style="text-align: center;">
                                                    <h6 style=" color: green;"><a style="background-color:#FB6340; border-radius: 4px; padding: 2px 8px; color: #fff; box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28); -webkit-box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28); -moz-box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28);" target="_blank" href="../u/<?php echo $row["request_sent_username"]; ?>">Click here <i class="fas fa-external-link-alt"></i></a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="text-align: center;">
                                                <div class="form-group" style="text-align: center;">
                                                <h6 style=" color: #344767;"><?php echo $row["added_on"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group" style="text-align: center;">
                                                <form action="" method="POST">
                                                        <input type="text" hidden  name="remove_friend_id" value="<?php echo $row["id"]; ?>">
                                                        <input type="text" hidden name="remove_friend_username" value="<?php echo $row["request_sent_username"]; ?>" >
                                                        <i class="fas fa-times-circle"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_f_request">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--- Data exist tab -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>All Friends - <span class="text-warning"><?php echo $pending_new_request_data; ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                    <div class="col-md-1">
                                            <div class="form-group" style="text-align: center; border-right: #34476720 solid 1px;">
                                                <label for="example-text-input" class="form-control-label">#ID </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Username </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label">View Profile</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="text-align: center;">
                                                <label for="example-text-input" class="form-control-label" style="text-align: center;">Added On</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3" style="text-align: center;">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Delete </label></form>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <?php 
                                        while ($row = mysqli_fetch_assoc($total_friend_data)) {
                                        //$new_request_user_id = $row["id"];
                                    ?>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group" style="text-align: center; border-right: #34476720 solid 1px;">
                                                    <h6 style=" color: black;">#319<?php echo $row["id"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h6 style=" color: #344767;">@<?php echo $row["request_sent_username"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group" style="text-align: center;">
                                                    <h6 style=" color: green;"><a style="background-color:#FB6340; border-radius: 4px; padding: 2px 8px; color: #fff; box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28); -webkit-box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28); -moz-box-shadow: 19px 8px 32px -6px rgba(0,0,0,0.28);" target="_blank" href="../u/<?php echo $row["request_sent_username"]; ?>">Click here <i class="fas fa-external-link-alt"></i></a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="text-align: center;">
                                                <div class="form-group" style="text-align: center;">
                                                <h6 style=" color: #344767;"><?php echo $row["added_on"]; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group" style="text-align: center;">
                                                <form action="" method="POST">
                                                        <input type="text"  name="remove_friend_id" value="<?php echo $row["id"]; ?>" hidden>
                                                        <input type="text" hidden name="remove_friend_username" value="<?php echo $row["request_sent_username"]; ?>" >
                                                        <i class="fas fa-times-circle"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Remove" name="remove_friend">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer and right config pannel-->
            <?php include "includes/footer.php";?>

        </div>
    </main>

    <!-- Settings --->
    <?php include "includes/settings.php";?>

</body>
</html>