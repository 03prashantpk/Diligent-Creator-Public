<?php $page_code = "dashboard"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include("includes/head.php");  ?>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar ---->
    <?php include("includes/sidebar.php");  ?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include("includes/navbar.php");  ?>
        <!-- End Navbar -->
        <?php include("includes/top-bar.php");  ?>
        <style>
            .theme-links a{
                background-color: #FA623F;
                padding: 5px 10px;
                border-radius: 8px;
                color: #fff;
                transition-duration: 1.9ms;
                cursor: pointer;
            }
            .theme-links a:hover{
                background-color: #344767;
                transition-duration: 0.6s;
                transition-delay: 1ms;
            }
            .theme-links{
                padding-bottom: 20px;
            }
            p{
                padding-left: 5px;
            }
        </style>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-bold">Overview</h5>
                                <button class="btn btn-primary btn-sm ms-auto" onclick="location.href='settings'"><i class="fas fa-cog"></i> Settings</button>
                            </div>
                        </div>
                        <div class="card-body">
                        <p class="text-center text-sm">Your Public Url Demo <a class="text-warning font-weight-bold" href="../u/<?php echo $username ?>" target="blank">https://diligentcreator.ml/u/<?php echo $username ?></a> </p>
                        <div class="text-center theme-links">
                            <a target="_blank" href="../user/<?php echo $username ?>">Light Theme</a>
                            <a target="_blank" href="../u/<?php echo $username ?>">Dark Theme</a>
                            <a target="_blank" href="themes">More Themes</a>
                        </div>

                            <p class="text-uppercase text-sm text-warning">Your Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <p> <?php echo $username; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                        <p> <?php echo $email; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Name</label>
                                        <p> <?php echo $fname . " " . $lname; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Date of birth</label>
                                        <p> <?php echo $dob; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm text-warning">Contact Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <p> <?php echo $email; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <p> <?php echo $address; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Phone</label>
                                        <p> <?php echo $phone; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <p> <?php echo $country; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <p> <?php echo $city; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <p> <?php echo $pcode; ?> </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm text-warning">About me</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Master Skill</label>
                                        <p> <?php echo $master_skill; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Total Skills</label>
                                        <p> <?php echo $skill_count; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Total Projects</label>
                                        <p> <?php echo $project_completed; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">About me</label>
                                        <p> <?php echo $about; ?> </p>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="form-group">
                                        <p style="padding: 0;" class="text-sm"> See more on <a href="settings" class="text-warning font-weight-bold">Settings</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile card-three shadow-lg" id="capture">
                        <img src="<?php echo $profile_bg; ?>" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2 card-three">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0 ">
                                    <a href="javascript:;">
                                        <img src="profile_images/<?php echo $profile_image; ?>" class="rounded-circle img-fluid border border-2 border-white" width="120" height="120" >
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3" style="<?php if ($dark == '0'){echo "background-color: #E9F7F7 !important; background: url('') !important;";}  ?>">
                            <div class="d-flex justify-content-between">
                                <a href="javascript:;" class="btn btn-sm btn-<?php echo $hire_me_color;?> mb-0 d-none d-lg-block"><?php echo $hire_me; ?></a>
                                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block" onclick="location.href='settings'">Message</a>
                            </div>
                        </div>
                        <div class="card-three border-bott pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder text-warning"><?php echo $year_of_experience; ?> yrs</span>
                                            <span class="text-sm opacity-8">Experience</span>
                                        </div>
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-lg font-weight-bolder text-warning"><?php echo $happy_customers; ?></span>
                                            <span class="text-sm opacity-8">Happy Client</span>
                                        </div>
                                        <div class="d-grid text-center">
                                            <span class="text-lg font-weight-bolder text-warning"><?php echo $project_completed; ?></span>
                                            <span class="text-sm opacity-8">Projects </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <h5>
                                    <?php echo $fname . " " . $lname;  ?><span class="font-weight-light">, <?php echo $age; ?></span>
                                </h5>
                                <div class="h6 font-weight-300">
                                    <i class="fas fa-map-marker-alt"></i> <?php echo $country . ", " . $city;  ?>
                                </div>
                                <div class="h6 mt-4">
                                    <i class="fas fa-briefcase"></i> <?php echo $currentstatus; ?>
                                </div>
                                <div>
                                    <i class="fas fa-user-graduate"></i> <?php echo $education; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("includes/footer.php");  ?>
        </div>
    </main>

    <!-- Settings --->
    <?php include("includes/settings.php");  ?>

</body>

</html>