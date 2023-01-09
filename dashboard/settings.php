<?php $page_code = "settings"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include("includes/head.php");  ?>

<body class="g-sidenav-show bg-gray-100" onload="default_hidden()">

    <!-- Sidebar ---->
    <?php include("includes/sidebar.php");  ?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include("includes/navbar.php");  ?>
        <!-- End Navbar -->
        <?php include("includes/top-bar.php");  ?>

        <div class="container-fluid py-4">
            <div class="row" id="profile">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Personal Information</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="POST">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Username</label>
                                                    <input class="form-control" type="text" id="username" name="username" value="<?php echo @$username ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Email address</label>
                                                    <input class="form-control" type="email" id="email" value="<?php echo $email ?>" required disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">First name</label>
                                                    <input class="form-control" type="text" id="fname" value="<?php echo $fname ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Last name</label>
                                                    <input class="form-control" type="text" id="lname" value="<?php echo $lname ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">DOB</label>
                                                    <input class="form-control datetimepicker" type="date" id="dob" value="<?php echo $dob ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Phone Number</label>
                                                    <input class="form-control" type="text" id="phone" value="<?php echo $phone ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Language</label>
                                                    <input class="form-control" type="text" id="language" value="<?php echo $language ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Master Skill</label>
                                                    <!-- <input class="form-control" type="text"  value="<?php echo $master_skill ?>" required> -->
                                                    <select id="master_skill" class="form-select">
                                                        <option value="<?php echo $master_skill ?>"><?php echo $master_skill ?></option>
                                                        <option value="Cloud Computing Engineer">Cloud Computing Engineer</option>
                                                        <option value="Computer Network Specialist ">Computer Network Specialist </option>
                                                        <option value="Computer Support Specialist ">Computer Support Specialist </option>
                                                        <option value="Database Administrator ">Database Administrator </option>
                                                        <option value="Information Technology Analyst ">Information Technology Analyst </option>
                                                        <option value="Information Technology Leader">Information Technology Leader</option>
                                                        <option value="Information Security Specialist ">Information Security Specialist </option>
                                                        <option value="Software/Application Developer">Software/Application Developer</option>
                                                        <option value="Web Developer ">Web Developer </option>
                                                        <option value="Full-Stack Developer"> Full-Stack Developer </option>
                                                        <option value="Frontend Developer"> Frontend Developer </option>
                                                        <option value="Backend Developer">Backend Developer</option>
                                                        <option value="Marketing manager">Marketing manager</option>
                                                        <option value="Business associate">Business associate</option>
                                                        <option value="Writer">Writer</option>
                                                        <option value="Content Writer">Content Writer</option>
                                                        <option value="VFX Artist">VFX Artist</option>
                                                        <option value="UI Designer">UI Designer</option>
                                                        <option value="UX Designer">UX Designer</option>
                                                        <option value="Graphic Designer">Graphic Designer</option>
                                                        <option value="Photographer">Photographer</option>
                                                        <option value="Photoshop Expert">Photoshop Expert</option>
                                                        <option value="Journalist">Journalist</option>
                                                        <option value="CSE Student">CSE Student</option>
                                                        <option value="MEC Student">MEC Student</option>
                                                        <option value="MBA Student">MBA Student</option>
                                                        <option value="ECE Student">ECE Student</option>
                                                        <option value="Bio-Tech Student">Bio-Tech Student</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Country</label>
                                                    <input class="form-control datetimepicker" type="text" id="country" value="<?php echo $country ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">City</label>
                                                    <input class="form-control" type="text" id="city" value="<?php echo $city ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Postal Code</label>
                                                    <input class="form-control" type="text" id="pcode" value="<?php echo $pcode ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Education</label>
                                                    <input class="form-control" type="text" id="education" placeholder="Btech - Computer Science Engineering" value="<?php echo $education ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Year of Experience</label>
                                                    <input class="form-control" type="text" id="year_of_experience" placeholder="Leave 0 to hide" value="<?php echo $year_of_experience ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Projects Completed</label>
                                                    <input class="form-control" type="text" id="project_completed" placeholder="Leave 0 to hide" value="<?php echo $project_completed ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Happy Customer</label>
                                                    <input class="form-control" type="text" id="happy_customers" placeholder="Leave 0 to hide" value="<?php echo $happy_customers ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Awards Won</label>
                                                    <input class="form-control" type="text" id="award" placeholder="Leave 0 to hide" value="<?php echo $award ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Address</label>
                                                    <input class="form-control" type="text" id="address" value="<?php echo $address ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Current Status</label>
                                                    <input class="form-control" type="text" id="currentstatus" value="<?php echo $currentstatus ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Choose Theme</label>
                                                    <select name="skill" id="theme" class="form-select">
                                                            <option value="0">Light</option>
                                                            <option value="1">Dark</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">About me</label>
                                                    <input class="form-control" type="text" id="about" value="<?php echo $about ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span id="response"></span>
                                                <a class="btn btn-dark btn-sm w-15 mb-3" onclick="enable_edit()" style="float: right;" id="enable_edit" type="button"> <i class="fas fa-edit"></i> Enable Edit </a>
                                                <a class="btn btn-dark btn-sm w-15 mb-3" onclick="update_profile()" style="float: right;" id="update_profile" type="button"> Update </a>
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


            <div class="row" id="hobbies_interests">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Hobbies & Interests<a class="btn bg-gradient-dark mb-0" style="float: right;" href="#">Show Example</a></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <!-- Hobbies and interest 1 --->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest Name</label>
                                                <input type="text" class="form-control" id="hobbie_1" value="<?php echo @$hobbie_1_name; ?>" placeholder="Going to gym.">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest</label>
                                                <select class="form-select" id="hobbie_1_type">
                                                    <?php
                                                    if (@$hobbie_1_type == "interest") {
                                                    ?>

                                                        <option value="interest">Interest</option>
                                                        <option value="hobbies">Hobbies</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="hobbies">Hobbies</option>
                                                        <option value="interest">Interest</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">How would you describe it</label>
                                                <input type="text" class="form-control" value="<?php echo @$hobbie_1_desc; ?>" id="hobbie_1_desc" placeholder="I really enjoy going to the gym because…">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Action</label>
                                                <br>
                                                <a type="button" class="btn btn-dark btn-sm" id="hobbie_1_btn" onclick="hobbie1()"> Save </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="hobbie1_response"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hobbies and interest 2 --->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest Name</label>
                                                <input type="text" class="form-control" id="hobbie_2" value="<?php echo @$hobbie_2_name; ?>" placeholder="Playing outdoor Sport etc...">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest</label>
                                                <select class="form-select" id="hobbie_2_type">
                                                    <?php
                                                    if (@$hobbie_2_type == "interest") {
                                                    ?>

                                                        <option value="interest">Interest</option>
                                                        <option value="hobbies">Hobbies</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="hobbies">Hobbies</option>
                                                        <option value="interest">Interest</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">How would you describe it</label>
                                                <input type="text" class="form-control" value="<?php echo @$hobbie_2_desc; ?>" id="hobbie_2_desc" placeholder="I enjoy being physically active, and spend a lot of time playing sports and team games.">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Action</label>
                                                <br>
                                                <a type="button" id="hobbie_2_btn" onclick="hobbie2()" class="btn btn-dark btn-sm"> Save </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="hobbie2_response"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hobbies and interest 3 --->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest Name</label>
                                                <input type="text" id="hobbie_3" value="<?php echo @$hobbie_3_name; ?>" class="form-control" placeholder="I like fishing">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest</label>
                                                <select class="form-select" id="hobbie_3_type">
                                                    <?php
                                                    if (@$hobbie_3_type == "interest") {
                                                    ?>

                                                        <option value="interest">Interest</option>
                                                        <option value="hobbies">Hobbies</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="hobbies">Hobbies</option>
                                                        <option value="interest">Interest</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">How would you describe it</label>
                                                <input type="text" id="hobbie_3_desc" value="<?php echo @$hobbie_3_desc; ?>" class="form-control" placeholder="I like to go fishing at the weekend.">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Action</label>
                                                <br>
                                                <a type="button" id="hobbie_3_btn" onclick="hobbie3()" class="btn btn-dark btn-sm"> Save </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="hobbie3_response"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hobbies and interest 4 --->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest Name</label>
                                                <input type="text" id="hobbie_4" class="form-control" value="<?php echo @$hobbie_4_name; ?>" placeholder="My hobbies are all creative…">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Hobbies or Interest</label>
                                                <select class="form-select" id="hobbie_4_type">
                                                    <?php
                                                    if ($hobbie_4_type == "interest") {
                                                    ?>

                                                        <option value="interest">Interest</option>
                                                        <option value="hobbies">Hobbies</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="hobbies">Hobbies</option>
                                                        <option value="interest">Interest</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">How would you describe it</label>
                                                <input type="text" id="hobbie_4_desc" class="form-control" value="<?php echo @$hobbie_4_desc; ?>" placeholder="Because my job is technical, it’s good to spend time doing something completely different.">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Action</label>
                                                <br>
                                                <a type="button" id="hobbie_4_btn" onclick="hobbie4()" class="btn btn-dark btn-sm"> Save </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="hobbie4_response"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" id="skills">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Your Skills <a class="btn bg-gradient-dark mb-0" style="float: right;" href="skill_update"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add/Show More</a></h6>
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

                                    while ($row = mysqli_fetch_assoc($result_data_profile_page)) {
                                        $level = $row['skill_level'];
                                        $skill_level = (int)$level;
                                        $skill_level = $skill_level * 10;
                                    ?>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5 style="color: #FB8164;"><?php echo $row['skill_name'] ?></h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="progress" style="height: 18px;">
                                                        <div class="progress-bar progress progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo $skill_level; ?>%;" aria-valuenow="<?php echo $skill_level; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $skill_level; ?>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <form action="" method="POST">
                                                    <input type="text" hidden name="skill_id" value="<?php echo $row['id'] ?>">
                                                    <i class="far fa-trash-alt me-2"></i> <input class="btn btn-link text-danger text-gradient mb-0" style="padding-left: 0;" type="submit" value="Delete" name="delete_skill">
                                                </form>
                                            </div>
                                            <hr class="horizontal dark my-sm-4" style="padding: 0px;">
                                        </div>

                                    <?php
                                    }
                                    ?>
                                    <span id="delete_skill_response"></span>
                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" id="Experiences">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Academic & Work <a class="btn bg-gradient-dark mb-0" style="float: right;" href="experience.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add/Show More</a></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">
                                    <?php

                                    while ($row = mysqli_fetch_assoc($result_data_experice_profile_page)) {
                                        $started_date = $row['started_on'];

                                    ?>
                                        <div id="show_experience">
                                            <div id="skill_experience">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Started On</label>
                                                            <h6><?php echo  $started_date ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">JOB</label>
                                                            <h6 style="color: #FB8164;"><?php echo $row['job_name']; ?></h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Location</label>
                                                            <h6><?php echo $row['job_location']; ?></h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Description</label>
                                                            <h6><?php echo $row['job_description']; ?></h6>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="example-text-input" class="form-control-label">Operation</label>
                                                        <br>
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

            <div class="row" id="messages">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>All Messages <span class="message_notification_span"><?php echo $notification_message_on_off ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container card-two-message">
                                <table>
                                    <tr>
                                        <th>Message</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($show_visitor_messages_profile_page)) {
                                    ?>
                                        <tr>
                                            <td class="tdmessages"><span style="font-size: small;" class="text-warning"><?php echo $row['sender_subject'];  ?></span><br><?php echo  substr($row['sender_message'], 0, 200);  ?>....</td>
                                            <td class="name"><?php echo $row['sender_name'];  ?></td>
                                            <td class="emails"><?php echo $row['sender_email'];  ?></td>
                                            <td><?php echo $row['received_date'];  ?></td>
                                            <td class="action">
                                                <form action="read" method="post">
                                                    <input type="text" hidden name="Messageid" value="<?php echo $row['id'] ?>">
                                                    <input type="submit" class="btn btn-warning btn-sm mb-0 w-100" style="background-color: <?php if ($row['read_status'] == 0) {
                                                                                                                                                echo "#FB6340";
                                                                                                                                            } ?><?php if ($row['read_status'] == 1) {
                                                                                                                                                                                                        echo "#ccc";
                                                                                                                                                                                                    } ?>!important;" name="submit" value="Open">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="settings">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Profile Image</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Select a Profile Picture</label>
                                                    <input type="file" id="file1" class="filename" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="profile_upload_btn" onclick="uploadFile()" type="button"><i class="fas fa-upload"></i> Upload</a>
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


            <div class="row" id="reset_password">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Reset Password</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Old Password</label>
                                                    <input class="form-control" type="password" id="old_password" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">New Password</label>
                                                    <input class="form-control" type="password" id="new_password" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Confirm Password</label>
                                                    <input class="form-control" type="password" id="confirm_password" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Show/hide</label>
                                                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                                                        <span id="password_icon"><i class="fas fa-eye"></i></span> <input class="form-check-input mt-1 ms-auto" type="checkbox" onclick="show_password()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group padding-top">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="reset_password_btn" onclick="reset_password_btn()" type="button"><i class="fas fa-key"></i> Save</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span id="response_password"></span>
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

            <div class="row" id="social_media">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Social Media Controls</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <div class="card-two">

                                    <!-- Facebook -->
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <br>
                                                <p style="font-size: 29px;" class="text-warning"> <i class="fab fa-facebook-square"></i> </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-right: 0px !important; ">
                                            <div class="form-group" style="padding-right: 0px !important; ">
                                                <label for="example-text-input" class="form-control-label">Domain</label>
                                                <p style="font-size: 16px;"> https://facebook.com/ </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0px !important;">
                                            <div class="form-group" style="padding-left: 0px !important;">
                                                <label for="example-text-input" class="form-control-label">Username</label>
                                                <input class="form-control" type="text" id="facebookusername" value="<?php echo @$facebook_link ?>" placeholder="Prashant96120Pk" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <select id="facebook_status" class="form-select">
                                                    <?php
                                                    if ($facebook_status == 1) {
                                                    ?>
                                                        <option value="1">Show</option>
                                                        <option value="0">Hidden</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="0">Hidden</option>
                                                        <option value="1">Show</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group padding-top">
                                                <br>
                                                <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="facebook_btn" onclick="facebook()" type="button"><i class="fas fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="facebook_response"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- instagram --->
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <br>
                                                <p style="font-size: 29px;" class="text-warning"> <i class="fab fa-instagram-square"></i> </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-right: 0px !important; ">
                                            <div class="form-group" style="padding-right: 0px !important; ">
                                                <label for="example-text-input" class="form-control-label">Domain</label>
                                                <p style="font-size: 16px;"> https://instagram.com/ </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0px !important;">
                                            <div class="form-group" style="padding-left: 0px !important;">
                                                <label for="example-text-input" class="form-control-label">Username</label>
                                                <input class="form-control" type="text" id="instagramusername" value="<?php echo @$instagram_link ?>" placeholder="prashantpkumar" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <select id="instagram_status" class="form-select">
                                                    <?php
                                                    if ($instagram_status == 1) {
                                                    ?>
                                                        <option value="1">Show</option>
                                                        <option value="0">Hidden</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="0">Hidden</option>
                                                        <option value="1">Show</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group padding-top">
                                                <br>
                                                <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="facebook_btn" onclick="instagram()" type="button"><i class="fas fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="instagram_response"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Github -->
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <br>
                                                <p style="font-size: 29px;" class="text-warning"> <i class="fab fa-github-square"></i> </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-right: 0px !important; ">
                                            <div class="form-group" style="padding-right: 0px !important; ">
                                                <label for="example-text-input" class="form-control-label">Domain</label>
                                                <p style="font-size: 16px;"> https://github.com/ </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0px !important;">
                                            <div class="form-group" style="padding-left: 0px !important;">
                                                <label for="example-text-input" class="form-control-label">Username</label>
                                                <input class="form-control" type="text" id="githubusername" value="<?php echo @$github_link ?>" placeholder="03prashantpk" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <select id="github_status" class="form-select">
                                                    <?php
                                                    if ($github_status == 1) {
                                                    ?>
                                                        <option value="1">Show</option>
                                                        <option value="0">Hidden</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="0">Hidden</option>
                                                        <option value="1">Show</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group padding-top">
                                                <br>
                                                <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="facebook_btn" onclick="github()" type="button"><i class="fas fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="github_response"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Linkedin -->
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <br>
                                                <p style="font-size: 29px;" class="text-warning"> <i class="fab fa-linkedin"></i> </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-right: 0px !important; ">
                                            <div class="form-group" style="padding-right: 0px !important; ">
                                                <label for="example-text-input" class="form-control-label">Domain</label>
                                                <p style="font-size: 16px;"> https://www.linkedin.com/in/ </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-left: 0px !important;">
                                            <div class="form-group" style="padding-left: 0px !important;">
                                                <label for="example-text-input" class="form-control-label">Username</label>
                                                <input class="form-control" type="text" id="linkedinusername" value="<?php echo @$linkedin_link ?>" placeholder="03prashantpk" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <select id="linkedin_status" class="form-select">
                                                    <?php
                                                    if ($linkedin_status == 1) {
                                                    ?>
                                                        <option value="1">Show</option>
                                                        <option value="0">Hidden</option>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="0">Hidden</option>
                                                        <option value="1">Show</option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group padding-top">
                                                <br>
                                                <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="linkedin_btn" onclick="linkedin()" type="button"><i class="fas fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span id="linkedin_response"></span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- Form ends here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" id="email_notifications">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Email Settings </h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Get email notification on receving new messages -
                                                        <?php if ($message_notification == 0) {
                                                            echo "<span style='color:red;'>Off</span>";
                                                        } else {
                                                            echo "<span style='color:green;'>On</span>";
                                                        } ?></label>
                                                    <select name="skill" id="message_notify" class="form-select">
                                                        <?php

                                                        if ($message_notification == 0) {
                                                        ?>
                                                            <option value="0">New Message Notification Off</option>
                                                            <option value="1">New Message Notification On</option>

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <option value="1">New Message Notification On</option>
                                                            <option value="0">New Message Notification Off</option>
                                                        <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Get email notification on new profile visit -
                                                        <?php if ($visit_notification == 0) {
                                                            echo "<span style='color:red;'>Off</span>";
                                                        } else {
                                                            echo "<span style='color:green;'>On</span>";
                                                        } ?></label>
                                                    <select name="skill" id="visit_notify" class="form-select">
                                                        <?php
                                                        if ($visit_notification == 0) {

                                                        ?>
                                                            <option value="0">Profile Visit Notification Off</option>
                                                            <option value="1">Profile Visit Notification On</option>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <option value="1">Profile Visit Notification On</option>
                                                            <option value="0">Profile Visit Notification Off</option>
                                                        <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="notification_settings_btn" onclick="save_notification_settings()" type="button"><i class="fas fa-bell"></i> Save</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span id="response_email_settings"></span>
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

            <div class="row" id="mode_status_setting">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Visibility Settings</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container">
                                <!-- Form Starts here -->
                                <form action="" method="post">
                                    <div class="card-two">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Profile Status Public/Hidden
                                                        <?php if ($public == 0) {
                                                            echo "<span style='color:red;'>Hidden</span>";
                                                        } else {
                                                            echo "<span style='color:green;'>Public</span>";
                                                        } ?>
                                                    </label>
                                                    <select id="profile_status" class="form-select">
                                                        <?php

                                                        if ($public == 0) {
                                                        ?>
                                                            <option value="0">Profile Status Hidden</option>
                                                            <option value="1">Profile Status Public - Recommended</option>

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <option value="1">Profile Status Public - Recommended</option>
                                                            <option value="0">Profile Status Hidden</option>
                                                        <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Set Hiring Mode On/Off
                                                        <?php if ($hire_mode == 0) {
                                                            echo "<span style='color:red;'>Off</span>";
                                                        } else {
                                                            echo "<span style='color:green;'>On</span>";
                                                        } ?>
                                                    </label>
                                                    <select id="hiring_mode" class="form-select">
                                                        <?php

                                                        if ($hire_mode == 0) {
                                                        ?>
                                                            <option value="0">Hire Me - Off</option>
                                                            <option value="1">Hire Me - On</option>

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <option value="1">Hire Me - On</option>
                                                            <option value="0">Hire Me - Off</option>
                                                        <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <br>
                                                    <a class="btn btn-primary btn-sm mb-0 w-100" style="padding: 10px;" id="visibility_settings_btn" onclick="visibility_settings()" type="button"><i class="fas fa-bell"></i> Save</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span id="response_visibility_settings"></span>
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
            <?php include("includes/footer.php");  ?>

        </div>
    </main>

    <!-- Settings --->
    <?php include("includes/settings.php");  ?>

</body>

</html>