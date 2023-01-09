<?php $page_code = "uploads"; ?>
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

            <div class="row" id="settings">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Upload Resume PDF</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Select a Resume PDF</label>
                                                    <input type="file" id="file1" class="filename" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="profile_upload_btn" onclick="upload_resume_File()" type="button"><i class="fas fa-upload"></i> Upload</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="top-bottom-padding">
                                                        <progress style="width: 100%;" hidden id="progressBar" value="0" max="100" class="progress progress-bar-striped progress-bar-animated bg-success"></progress>
                                                        <span id="loaded_n_total"></span>
                                                        <span id="status"></span>
                                                        <span id="response_image"></span>
                                                    </div>
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


            <!--- Data exist tab -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Your Resume PDF </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">File Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <p style="text-transform: capitalize; padding-left: 6px;" class="text-warning"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Upload Date</label>
                                                <p style="text-transform: capitalize; padding-left: 6px;" class="text-warning"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Download</label>
                                                <p style="text-transform: capitalize; padding-left: 6px;" class="text-warning"></p>
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
                                    while ($row = mysqli_fetch_assoc($result_resume_pdf)) {
                                    ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h6 style="padding-left: 10px;"><?php echo substr($row['link'], -35); ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h6 style="padding-left: 10px; color: green;"><?php if($row['link'] == $pdf_name) {echo "Live";} ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h6 style="padding-left: 10px;"><?php echo $row['added_on']; ?></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <a href="./user_resume/<?php echo $row['link']; ?>"><i class="fas fa-download"></i> Download</a>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <form action="" method="POST">
                                                        <input type="text" hidden name="pdf_id" value="<?php echo $row['id'] ?>">
                                                        <input type="text" name="pdf_name" value="<?php echo $row['link'] ?>" hidden>
                                                        <i class="far fa-trash-alt me-2"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_pdf">
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


            <!--- Data exist tab -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Your Previous and Current Images </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                        <?php
                                            while ($row = mysqli_fetch_assoc($result_profile_image_R)) {
                                        ?>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <div class="card_image" style="width: 100%;">
                                                        <img src="./profile_images/<?php echo $row['link'] ?>" class="image_" alt="Avatar" style="width:100% height: 171px;">
                                                        <div class="container_image">
                                                            <form action="" method="POST" class="text-center">
                                                                <input type="text" hidden name="profile_image_id" value="<?php echo $row['id'] ?>">
                                                                <input type="text" name="profile_image_name" value="<?php echo $row['link'] ?>" hidden>
                                                                <i class="far fa-trash-alt me-2"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_profile_image">
                                                                <?php if($row['link'] == $profile_image) {echo "<span style='color: green;'>Live</span>";} ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <span>
                                            <img src="" class="user_profile_image_list shadow" alt="user_profile_pic">
                                        </span> -->


                                        <?php } ?>
                                    </div>
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