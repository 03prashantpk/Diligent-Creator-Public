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

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 shadow-lg min-height-400" style="background: linear-gradient(rgba(0, 0, 0, .0), rgba(0, 0, 0, .0) ), url('./assets/dashboard/bgpremium.jpg');background-size:cover; ">
                        <div class="card-two px-0 pt-0 pb-2" style="padding:2% 5% !important;">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="container">
                                    <div class="container card-two text-center">
                                        <h3 class=" font-weight-900 text-warning">Support Form</h3>
                                        <p class="text-success">We're here for you feel free to user our support system. We'll try to resolve the issue withing 24-48hrs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body px-0 pt-3 pb-4 shadow-sm">
                                <div class="container">
                                    <!-- Form Starts here -->
                                    <form action="" method="POST">
                                        <div class="card-two">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Username</label>
                                                        <input class="form-control" type="text" id="user_name" name="username" value="<?php echo @$username ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                                        <input class="form-control" type="email" id="user_email" value="<?php echo $email ?>" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">First name</label>
                                                        <input class="form-control" type="text" id="user_fname" value="<?php echo $fname ?>" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Last name</label>
                                                        <input class="form-control" type="text" id="user_lname" value="<?php echo $lname ?>" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Problem Type</label>
                                                        <select style="cursor : pointer;" id="support_type" class="form-select">
                                                            <option value="">Choose one</option>
                                                            <option value="Report Bug">Report Bug</option>
                                                            <option value="Request Features">Request Features</option>
                                                            <option value="Report Profile">Report Profile</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Problem Description</label>
                                                        <textarea style="width: 100%; background-color: #F7FBFC99;" class="form-control" type="text" id="support_description" rows='10' placeholder="Describe your problems here in less than 201 words." required></textarea>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span id="support_response">Response will appear here..</span>
                                                        <a class="btn btn-dark btn-sm w-15 mb-3" onclick="support_form()" style="float: right;" id="support_send_btn" type="button"> Submit </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Form ends here-->
                                </div>
                               
                            </div>
                            <p class="text-center pt-2 text-warning">Currently Unavailable</p>
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