<?php $page_code = "settings"; ?>
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
        <?php include("includes/top-bar.php");  ?>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Academic  & Work</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="POST">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Start Date</label>
                                                    <input class="form-control" type="date" id="started_on" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">End Date</label>
                                                    <input class="form-control" type="date" id="ended_on" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Academic or Work</label>
                                                    <select name="" id="job_type" class="form-control">
                                                        <option value="">Choose One</option>
                                                        <option value="1">Academic </option>
                                                        <option value="0">Work</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Working As</label>
                                                    <input class="form-control" type="text" id="job_name" placeholder="HR,Director,Student etc" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Location</label>
                                                    <input class="form-control" type="text" id="job_location" value="" placeholder="Company or University Name" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Description</label>
                                                    <input class="form-control" type="text" id="job_description" value="" placeholder="I was/am.... " required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <span id="response"></span>
                                                <a class="btn btn-dark btn-sm w-10 mb-3" style="float: right;" onclick="add_experience()" id="add_experiences" type="submit"> Update </a>
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

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Experience & Education</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Start Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">End Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Working As</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Location</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Description</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="example-text-input" class="form-control-label">Operation</label>
                                                    </div>
                                                    <hr>

                                                </div>
                                    <?php

                                    while ($row = mysqli_fetch_assoc($result_data_experice)) {
                                        $started_date = $row['started_on'];

                                    ?>
                                        <div id="show_experience">
                                            <div id="skill_experience">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h6><?php echo  $started_date ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h6><?php echo  $row['ended_on']; ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h6 style="color: #FB8164;"><?php echo $row['job_name']; ?></h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h6><?php echo $row['job_location']; ?></h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <h6><?php echo $row['job_description']; ?></h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <form action="" method="POST">
                                                            <input type="text" hidden name="experience_id" value="<?php echo $row['id'] ?>">
                                                            <i class="far fa-trash-alt me-2"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_experience">
                                                        </form>
                                                    </div>

                                                </div>
                                                <hr class="horizontal dark my-sm-4">
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer and right config pannel-->
        <?php include("includes/footer.php");  ?>

        </div>
    </main>

    <!-- Settings --->
    <?php include("includes/settings.php");  ?>

</body>

</html>