<?php $page_code = "portfolio"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include("includes/head.php");  ?>
<script src="functions/backend.js"></script>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar ---->
    <?php include("includes/sidebar.php");  ?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include("includes/navbar.php");  ?>
        <!-- End Navbar -->
        <?php include("includes/top-bar.php");  ?>


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Update / Add New </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Project Name</label>
                                                <input class="form-control" type="text" id="project_name" value="" placeholder="WebApp, Website Name, Art Work etc.." required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Project Category</label>
                                                <select id="project_category" class="form-select">
                                                    <option value="">Select Category</option>
                                                    <option value="design">Design</option>
                                                    <option value="development">Development</option>
                                                    <option value="writing">Writing</option>
                                                    <option value="art">Art</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Project Link/Url</label>
                                                <input class="form-control" type="text" id="project_url" value="" placeholder="https://enally-projects.ml/URSHOW/" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Operation</label>
                                                <br>
                                                <a class="btn btn-dark btn-sm w-50 mb-3" type="button" onclick="add_portfolio()" id="portfolio_btn"><i class="fas fa-save"></i> <span style="padding-left: 5px;">Save</span> </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span id="response_portfolio"></span>
                                        </div>
                                    </div>
                                </div>
                                <br>
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
                            <h6>Your Work's </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Project Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Project Category</label>
                                                <p style="text-transform: capitalize; padding-left: 6px;" class="text-warning"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Project Link/Url</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Operation</label> </form>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result_data_portfolio)) {
                                    ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h6 style="padding-left: 10px;"><?php echo $row['project_name']; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <p style="text-transform: capitalize; padding-left: 6px;" class="text-warning"><?php echo $row['project_category']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <p style="padding-left: 6px;"><i><a target="blank" href="<?php echo $row['project_url']; ?>"><?php echo $row['project_url']; ?> <i class="fas fa-external-link-alt text-info"></i></a></i></p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <form action="" method="POST">
                                                        <input type="text" hidden name="portfolio_id" value="<?php echo $row['id'] ?>">
                                                        <i class="far fa-trash-alt me-2"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_portfolio">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span id="response_portfolio"></span>
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
            <?php include("includes/footer.php");  ?>

        </div>
    </main>

    <!-- Settings --->
    <?php include("includes/settings.php");  ?>

</body>

</html>