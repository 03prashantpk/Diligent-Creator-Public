<?php $page_code = "settings"; ?>
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
                                <form action="" method="POST">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Skill</label>
                                                    <input class="form-control" type="text" id="skill" value="Web Developer" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Skill Level</label>
                                                    <select id="skill_level" class="form-select">
                                                        <option value="">Select Level</option>
                                                        <?php
                                                        for ($i = 0; $i <= 10; $i++) {
                                                            echo '<option value="' . $i . '">Level ' . $i . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Operation</label>
                                                    <br>
                                                    <a class="btn btn-dark btn-sm w-50 mb-3" type="button" onclick="add_skill()" id="add_skill_btn"><i class="fas fa-save"></i> <span style="padding-left: 5px;">Save</span> </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span id="response"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form ends here-->
                                <br>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Your Skills </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Skill Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Skill Level</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="example-text-input" class="form-control-label">Operation</label>
                                        </div>
                                        <hr>
                                    </div>
                                    <?php

                                    while ($row = mysqli_fetch_assoc($result_data)) {
                                        $level = $row['skill_level'];
                                        $skill_level = (int)$level;
                                        $skill_level = $skill_level * 10;
                                    ?>
                                        <div id="show_Skills">
                                            <div id="skill_list">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5 style="color: #344767;"><?php echo $row['skill_name'] ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="progress" style="height: 18px;">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $skill_level; ?>%;" aria-valuenow="<?php echo $skill_level; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $skill_level; ?>%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <form action="" method="POST">
                                                            <input type="text" hidden name="skill_id" value="<?php echo $row['id'] ?>">
                                                            <i class="far fa-trash-alt me-2"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_skill">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    <?php
                                    }
                                    ?>
                                    <span id="delete_skill_response"></span>
                                </div>

                                <!-- Button trigger modal -->
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