<?php
include "main-function.php";

    $username = $_REQUEST['username'];

if ($username == "") {
    ?>
    <script>    
        window.location.href = "../"
    </script>
<?php
}

$check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE username='$username' AND public='1'");

if (mysqli_num_rows($check_username)) {

    $sql_query = "SELECT * FROM dev_profile WHERE username='$username'";
    $personaldata = mysqli_query($conn, $sql_query);

    while ($row = mysqli_fetch_assoc($personaldata)) {
        $user_id = $row["id"];
        $email = $row['email'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $dob = $row['dob'];
        $phone = $row['phone'];
        $language = $row['language'];
        $master_skill = $row['master_skill'];
        $year_of_experience = $row['year_of_experience'];
        $project_completed = $row['project_completed'];
        $happy_customers = $row['happy_customers'];
        $award = $row['award'];
        $address = $row['address'];
        $about = $row['about'];
        $theme = $row['theme'];
        $message_notification = $row['message_notification'];
        $visit_notification = $row['visit_notification'];
        $profile_image = $row['profile_image'];
        $public = $row['public'];
        $joined_on = $row['joined_on'];
        $hire_mode = $row['hire_mode'];
        $country = $row['country'];
        $city = $row['city'];
        $pcode = $row['pcode'];
        $education = $row['education'];
        $currentstatus = $row['currentstatus'];
        $member_type = $row['premium'];
        $resume_url = $row['user_resume'];
        $IsAdmin = $row['admin_mode']; // admin role
        $IsTeam = $row['team_mode']; // team role
        $Is_Premium = $row['premium']; // premium mode

    }

    // Redirect to saved theme on dashboard
    // 0 for light theme and 1 for dark theme
    if($theme == 1){
        ?>
        <script>
            window.location.href="u/<?php echo $user_id; ?>";
        </script>
        <?php
    }

    $social_media = "SELECT * FROM dev_social_links  WHERE username='$username' AND status='1'";
    $fatch_social_media = mysqli_query($conn, $social_media);

    if ($year_of_experience == 0) {
        $experience_tab = "hidden";
    }

    if ($project_completed == 0) {
        $project_completed_tab = "hidden";
    }

    if ($happy_customers == 0) {
        $happy_customers_tab = "hidden";
    }

    if ($award == 0) {
        $award_tab = "hidden";
    }
    if ($year_of_experience == 0 && $project_completed == 0 && $happy_customers == 0 && $award == 0) {
        $hide_stats = "hideen";
    }

    if ($member_type == 1) {
        $membership = "";
        $member_type_tag = "";
    } else {
        $membership = "<span style='color:#FF4C60;'> Get Premium Membership </span> <span style='color:#F1B429;'>at 10% Off </span>";
        $member_type_tag = "";
    }

    // for Profile page overview page
    $fatch_skill_data_for_profile_page = "SELECT * from add_skills where user_id='$user_id' AND username = '$username'";
    $result_data_profile_page = mysqli_query($conn, $fatch_skill_data_for_profile_page);

    $total_skills_count = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `add_skills` WHERE username='$username'");
    $row_skills = mysqli_fetch_array($total_skills_count);
    $skill_count = $row_skills['count'];
    $skill_count;

    $experience_count = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `add_experience` WHERE username='$username' AND type=0");
    $row_exp = mysqli_fetch_array($experience_count);
    $exper_count = $row_exp['count'];
    $exper_count;

    $experience_count2 = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `add_experience` WHERE username='$username' AND type=1");
    $row_exp2 = mysqli_fetch_array($experience_count2);
    $exper_count2 = $row_exp2['count'];
    $exper_count2;

    if ($exper_count2 >= 3) {
        @$exp_scroll_info2 = "<span class='font-secondary text-sm'> Scroll <i class='fas fa-sort-amount-down'></i></span>";
    }
    if ($exper_count >= 3) {
        @$exp_scroll_info = "<span class='font-secondary text-sm'> Scroll <i class='fas fa-sort-amount-down'></i></span>";
    }
    if ($skill_count >= 4) {
        @$skill_scroll_info = "<span class='font-secondary text-sm'> Scroll <i class='fas fa-sort-amount-down'></i></span>";
    }

    $dateOfBirth = $dob;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

    $hire_img = rand(1, 7);

    if ($hire_img == 1) {
        $hire_image = "../dashboard/assets/avatar/avatar1.png";
    } else if ($hire_img == 2) {
        $hire_image = "../dashboard/assets/avatar/avatar2.png";
    } else if ($hire_img == 3) {
        $hire_image = "../dashboard/assets/avatar/avatar3.png";
    } else if ($hire_img == 4) {
        $hire_image = "../dashboard/assets/avatar/avatar4.png";
    } else if ($hire_img == 5) {
        $hire_image = "../dashboard/assets/avatar/avatar5.png";
    } else if ($hire_img == 6) {
        $hire_image = "../dashboard/assets/avatar/avatar6.png";
    } else if ($hire_img == 7) {
        $hire_image = "../dashboard/assets/avatar/avatar7.png";
    }

    $hobby_img = rand(1, 7);

    if ($hobby_img == 1) {
        $hobby_image = "../dashboard/assets/hobbies/hobby1.webp";
    } else if ($hobby_img == 2) {
        $hobby_image = "../dashboard/assets/hobbies/hobby2.webp";
    } else if ($hobby_img == 3) {
        $hobby_image = "../dashboard/assets/hobbies/hobby3.webp";
    } else if ($hobby_img == 4) {
        $hobby_image = "../dashboard/assets/hobbies/hobby4.webp";
    } else if ($hobby_img == 5) {
        $hobby_image = "../dashboard/assets/hobbies/hobby5.webp";
    } else if ($hobby_img == 6) {
        $hobby_image = "../dashboard/assets/hobbies/hobby6.webp";
    } else if ($hobby_img == 7) {
        $hobby_image = "../dashboard/assets/hobbies/hobby7.webp";
    }

    if ($hire_mode == 1) {
        $hire_status = '<span style="color: green; font-size: 13px;">Hire Me</span>';
        $hire_me = "Hire Me";
        $hire_available = "Available";
        $hire_me_color = "success";
    } else {
        $hire_status = '<span style="color: red; font-size: 13px;"><s>Hire Me</s></span>';
        $hire_me = "Talk to Me";
        $hire_me_color = "warning";
        $hire_available = "Talk";
    }

    $fatch_experience_data_for_profile_page = "SELECT * from add_experience where type=1 AND username = '$username'";
    $result_data_experice_profile_page = mysqli_query($conn, $fatch_experience_data_for_profile_page);

    $fatch_experience_data_for_profile_page_job = "SELECT * from add_experience where type=0 AND username = '$username'";
    $result_data_experice_profile_page_job = mysqli_query($conn, $fatch_experience_data_for_profile_page_job);

    $top_skill = "SELECT * from add_skills where username = '$username' ORDER BY id ASC LIMIT 3";
    $blink_top_skill = mysqli_query($conn, $top_skill);

    $sql_query_for_hobby_Interest = "SELECT * FROM dev_hobbies  WHERE username='$username'";
    $fatch_hobby_interest_data = mysqli_query($conn, $sql_query_for_hobby_Interest);

    $sql_query_portfolio = "SELECT * FROM dev_projects  WHERE username='$username'";
    $fatch_protfolio_data = mysqli_query($conn, $sql_query_portfolio);

    $sql_query_portfolio_all = "SELECT * FROM dev_projects  WHERE username='$username'";
    $fatch_protfolio_data_all = mysqli_query($conn, $sql_query_portfolio_all);

    $sql_query = "SELECT * FROM dev_profile WHERE public='1' ORDER BY RAND() LIMIT 3";
    $user = mysqli_query($conn, $sql_query);

    // Profile Pictures background
    $profile_background = rand(1, 8);
    if ($profile_background == 1) {
        $profile_bg = "https://64.media.tumblr.com/96dc66e3ca9ed55759bf56a5cb03d4a5/tumblr_oh9azniJVw1uqrdeoo1_1280.gif";
    } else if ($profile_background == 2) {
        $profile_bg = "https://c.tenor.com/qJ5evVs-_uUAAAAC/coding.gif";
    } else if ($profile_background == 3) {
        $profile_bg = "https://i.pinimg.com/originals/1f/aa/84/1faa84018e4ed6f5621e685dce8b6adb.gif";
    } else if ($profile_background == 4) {
        $profile_bg = "https://i.gifer.com/Am67.gif";
    } else if ($profile_background == 5) {
        $profile_bg = "https://64.media.tumblr.com/2df67fe7bdbba84c88cdbbdf84fd2743/tumblr_nqgvxz92HC1s85u2fo1_500.gifv";
    } else if ($profile_background == 6) {
        $profile_bg = "https://i.pinimg.com/originals/8b/35/fe/8b35fef55fba1a201c9c7a11d3ec3d64.gif";
    } else if ($profile_background == 7) {
        $profile_bg = "https://i.pinimg.com/originals/87/81/0a/87810a0cf7c9f3d787b2a4059ab601ed.gif";
    } else if ($profile_background == 8) {
        $profile_bg = "https://i.pinimg.com/originals/51/b6/90/51b6902f4030e1a9bb444b62af458a87.gif";
    }

    //// current date
    $current_date = date("Y-M-d");

    // add friend
    if (isset($_POST['send_req'])) {
        $user_id_to_send_req = $_POST['user_id_to_send_req'];
        //$user_name_to_send_req = $_POST['user_name_to_send_req'];
        $send_request_query = "INSERT INTO add_friends (user_id,username,request_sent,added_on) VALUES ('$user_id', '$username','$user_id_to_send_req','$current_date')";
        $request_sent = mysqli_query($conn, $send_request_query);
        // (username, email, password, public, profile_image, joined_on) VALUES ('$username', '$email', '$submit_password', '$public', '$purl', '$date')"

        if ($request_sent) {
            ?>
            <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                    location.reload();
                    alert('Request Sent Successfully! Login on Dashboard for more');
                }
            </script>

        <?php
    } else {
            ?>
            <script>
                alert("failed!");
            </script>

        <?php
    }
    }

    $meta_image = rand(1, 5);

    if ($meta_image == 1) {
        $meta_image_url = "https://enally.in/files-manager/assets/resume1.webp";
    } else if ($meta_image == 2) {
        $meta_image_url = "https://enally.in/files-manager/assets/resume2.webp";
    } else if ($meta_image == 3) {
        $meta_image_url = "https://enally.in/files-manager/assets/resume3.webp";
    } else if ($meta_image == 4) {
        $meta_image_url = "https://enally.in/files-manager/assets/resume4.webp";
    } else if ($meta_image == 5) {
        $meta_image_url = "https://enally.in/files-manager/assets/resume5.webp";
    }

    $total_friend = "SELECT * FROM dev_profile WHERE username IN (SELECT request_sent_username FROM request_sent WHERE user_id='$user_id' AND status='1') AND public=1";
    $total_friend_data = mysqli_query($conn, $total_friend);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $fname . " " . $lname . " - @" . $username; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="../dashboard/profile_images/<?php echo $profile_image ?>">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <script src="../front-functions.js?v=1"></script>
        <link rel="stylesheet" href="../theme_two/backend.css?v=2.0">

        <!-- Meta tags -->
        <meta name="description" content="<?php echo $fname . " " . $lname . " - @" . $username; echo " " . $about; ?>">
        <meta name="keywords" content="diligentcreator.ml, enally, Prashant Kumar, enally.in">
        <meta name="author" content="Prashant Kumar - Enally.in">
        <meta name="copyright" content="Enally.in">
        <meta property="og:image" content="<?php echo $meta_image_url; ?>">
        <meta property="og:image" content="<?php echo $meta_image_url; ?>">
        <meta name="twitter:image" content="<?php echo $meta_image_url; ?>">
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-W3G0CYKMVW"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W3G0CYKMVW');
        </script>
    </head>

    <body onload="hide_default()" oncontextmenu="return false">
        <input hidden type="text" id="userID" value="<?php echo $user_id; ?>">
        <input hidden type="text" id="userName" value="<?php echo $username; ?>">

        <div id="loader" class="center"></div>
        <!-- Home Page -->
        <div id="home">
            <div id="home_css"></div>
            <section>
                <div class="left"></div>
                <div class="right"></div>
                <div class="container">

                    <div class="image" style="background-image: url('../dashboard/profile_images/<?php echo $profile_image ?>'); background-position: center;">
                        <!-- <img src="./images/download.jfif" alt=""> -->
                    </div>

                    <div class="text">
                        <h1 class="name"><?php echo $fname . " " . $lname; ?> <?php if ($IsAdmin == 1 || $Is_Premium == 1) {?> <abbr title="<?php if ($IsAdmin == 1 && $Is_Premium == 1) {echo "Admin & Premium Account";} else if ($Is_Premium == 1) {echo "Premium Account";}?>"><i style="font-size: 28px; color: green;" class="fa-solid fa-circle-check"></i></abbr> <?php }?>  </h1>
                        <h1 class="profession"><?php echo $master_skill; ?></h1>
                        <p><?php echo $about; ?></p>
                        <a href="javascript:void(0)" onclick="aboutPage()">More about me
                            <span><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </section>
            <div class="nav">
                <ul>
                    <li class="active"><i onclick="hide_default()" class="fa fa-home"></i><span >home</span></li>
                    <li><a href="javascript:void(0)" onclick="aboutPage()"><i class="fa-solid fa-user" ></i></a><span>about</span></li>
                    <li><a href="javascript:void(0)" onclick="worksPage()"><i  class="fa-solid fa-briefcase"></i><span>portfolio</span></a></li>
                    <li><a href="javascript:void(0)" onclick="contactPage()"><i  class="fa-solid fa-envelope"></i><span>contact</span></a></li>
                    <li><a href="javascript:void(0)" onclick="teamPage()"><i  class="fas fa-users"></i><span>team</span></a></li>
                    <li><a href="javascript:void(0)" onclick="dashboard()"><i  class="fa-solid fa-gear"></i><span>Dashboard</span></a></li>
                </ul>
            </div>

        </div>


        <!-- About Page Start -->
        <div id="aboutpage">
            <div id="about_css"></div>
            <div class="nav">
                <ul>
                    <li><a href="javascript:void(0)"><i class="fa fa-home" onclick="hide_default()"></i><span>home</span></a></li>
                    <li class="active"><a href="javascript:void(0)"><i onclick="aboutPage()" class="fa-solid fa-user"></i></a><span>about</span></li>
                    <li><a href="javascript:void(0)"><i onclick="worksPage()" class="fa-solid fa-briefcase"></i><span>portfolio</span></a></li>
                    <li><a href="javascript:void(0)"><i onclick="contactPage()" class="fa-solid fa-envelope"></i><span>contact</span></a></li>
                    <li><a href="javascript:void(0)"><i onclick="teamPage()" class="fas fa-users"></i><span>team</span></a></li>
                    <li><a href="javascript:void(0)"><i onclick="dashboard()" class="fa-solid fa-gear"></i><span>Dashboard</span></a></li>
                </ul>
            </div>
            <section>
                <div class="title">
                    <h1>About <span>Me</span></h1>
                    <span class="bg-title">Resume</span>
                </div>

                <div class="container">
                    <div class="left">
                        <h1>personal infos</h1>
                        <div class="image" style="background-image: url(../dashboard/profile_images/<?php echo $profile_image ?>);"></div>
                        <div class="list-container">
                            <ul style="width: 300px;">
                                <li><span>First Name: </span><?php echo $fname; ?></li>
                                <li><span>Age: </span><?php echo $age; ?></li>
                                <li><span>Freelance: </span><?php echo $hire_available; ?></li>
                                <li><span>Phone: </span><?php echo substr($phone, 0, 5); ?> ***</li>
                                <li><span>Instagram: </span><?php // $fname;?></li>
                            </ul>
                            <ul>
                                <li><span>Last Name: </span><?php echo $lname; ?></li>
                                <li><span>Nationality: </span><?php echo $country; ?></li>
                                <li><span>Address: </span><?php echo $address; ?></li>
                                <li><span>Email: </span><?php echo $email; ?></li>
                                <li><span>Language: </span><?php echo $language; ?></li>
                            </ul>
                        </div>
                        <a href="../dashboard/user_resume/<?php echo $resume_url ?>" download>Download CV
                            <span><i class="fa-solid fa-download"></i></span>
                        </a>
                    </div>

                    <div class="right">
                        <div class="right-up">
                            <div>
                                <h1>+<?php echo $year_of_experience; ?></h1>
                                <h3>Years of, <br>Experience</h3>
                            </div>
                            <div>
                                <h1>+<?php echo $project_completed; ?></h1>
                                <h3>Completed<br>Projects</h3>
                            </div>
                        </div>
                        <div class="right-down">
                            <div>
                                <h1>+<?php echo $happy_customers; ?></h1>
                                <h3>Happy<br>Customers</h3>
                            </div>
                            <div>
                                <h1>+<?php echo $award; ?></h1>
                                <h3>Awards<br>Won</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="skills" style="height: auto; padding-bottom: 70px;">
                <h1 class="heading">my skills</h1>
                <div class="centered-content">
                    <div class="inline" style="max-width: 80%;">
                    <?php
                        while ($row = mysqli_fetch_assoc($result_data_profile_page)) {
                                $level = $row['skill_level'];
                                $skill_level = (int) $level;
                                $skill_level = $skill_level * 10;
                                $rand_number = rand(0, 3);
                    ?>

                                <div class="card-skill">
                                    <div class="percent">
                                        <svg>
                                    <circle cx="110" cy="110" r="70"></circle>
                                    <circle cx="110" cy="110" r="70" style="--percent: <?php echo $skill_level - 2; ?>"></circle>
                                </svg>
                                <div class="number">
                                    <h3><?php echo $skill_level; ?><span>%</span></h3>
                                </div>
                            </div>
                            <h2 class="skill-title"> <span><?php echo $row['skill_name'] ?></span></h2>
                        </div>
                    <?php }?>
                    </div>
                </div>

            </section>

            <section>
                <h1 class="heading-2">Experience & Education</h1>
                <div class="container">
                    <div class="left">
                        <div class="list-container">
                            <div class="uvp-list">
                                <ul>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($result_data_experice_profile_page)) {
                                                $start_date = $row['started_on'];
                                                $end_date = $row['ended_on'];
                                    ?>
                                        <li>
                                            <div class="listing-pad">
                                                <span class="about-date"><?php echo substr($start_date, 0, -6); ?> - <?php echo substr($end_date, 0, -6); ?></span>
                                                <h2 class="about-head"><?php echo $row['job_name']; ?> <span class="job-location"><?php echo $row['job_location']; ?></span></h2>
                                                <p class="about-para"><?php echo $row['job_description']; ?></p>
                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <div class="list-container padding-" style="padding-top:27px;">
                            <div class="uvp-list">
                                <ul>    
                                    <?php
                                        while ($row = mysqli_fetch_assoc($result_data_experice_profile_page_job)) {
                                                $start_date = $row['started_on'];
                                                $end_date = $row['ended_on'];
                                    ?>
                                        <li>
                                            <div class="listing-pad">
                                                <span class="about-date"><?php echo substr($start_date, 0, -6); ?></span>
                                                <h2 class="about-head"><?php echo $row['job_name']; ?> <span class="job-location"><?php echo $row['job_location']; ?></span></h2>
                                                <p class="about-para"><?php echo $row['job_description']; ?></p>
                                            </div>
                                        </li>
                                    <?php }?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script src="./about.js"></script>
        </div>


        <!-- Works section starts here -->
        <div id="worksPage">
            <div id="works_css"></div>
            <div class="nav">
                <ul>
                    <li><a href="javascript:void(0)" onclick="hide_default()"><i onclick="hide_default()" class="fa fa-home"></i><span>home</span></a></li>
                    <li><a href="javascript:void(0)" onclick="aboutPage()"><i onclick="aboutPage()" class="fa-solid fa-user"></i><span>about</span></a></li>
                    <li class="active" onclick="worksPage()"><a href="javascript:void(0)"><i onclick="worksPage()" class="fa-solid fa-briefcase"></i><span>portfolio</span></a></li>
                    <li><a href="javascript:void(0)" onclick="contactPage()"><i onclick="contactPage()" class="fa-solid fa-envelope"></i><span>contact</span></a></li>
                    <li><a href="javascript:void(0)" onclick="teamPage()"><i onclick="teamPage()" class="fas fa-users"></i><span>team</span></a></li>
                    <li><a href="javascript:void(0)"><i onclick="dashboard()" class="fa-solid fa-gear"></i><span>Dashboard</span></a></li>
                </ul>
            </div>
            <section>
                <div class="title">
                    <h1>My<span>Portfolio</span></h1>
                    <span class="bg-title">Works</span>
                </div>

                <div class="categories">
                    <ul>
                        <li id="cat1" onclick="catEverything()">Everything</li>
                        <li id="cat2" onclick="catWriting()">Writing</li>
                        <li id="cat3" onclick="catArt()">Art</li>
                        <li id="cat4" onclick="catDesign()">Design</li>
                        <li id="cat5" onclick="catDevelopment()">Development</li>
                        <li id="cat6" onclick="catOther()">Other</li>
                    </ul>
                </div>
                <div class="img-container">
                    <div class="images">
                            <?php
                            while ($row = mysqli_fetch_assoc($fatch_protfolio_data)) {
                                    ?>
                                                                <div class="image" id="<?php echo $row['project_category']; ?>" data-aos="fade-right">
                                                                    <img src="<?php
                            if ($row['project_category'] == "writing") {
                                        $image = rand(1, 2);
                                        if ($image == 1) {
                                            echo "../dashboard/assets/portfolio/writing1.webp";
                                        } else {
                                            echo "../dashboard/assets/portfolio/writing2.webp";
                                        }
                                    } else if ($row['project_category'] == "design") {
                                        $image = rand(1, 2);
                                        if ($image == 1) {
                                            echo "../dashboard/assets/portfolio/design.webp";
                                        } else {
                                            echo "../dashboard/assets/portfolio/design2.webp";
                                        }
                                    } else if ($row['project_category'] == "art") {
                                        $image = rand(1, 2);
                                        if ($image == 1) {
                                            echo "../dashboard/assets/portfolio/art.webp";
                                        } else if ($image = 2) {
                                            echo "../dashboard/assets/portfolio/art2.webp";
                                        }
                                    } else if ($row['project_category'] == "development") {
                                        $image_dev = rand(1, 2);
                                        if ($image_dev == 1) {
                                            echo "../dashboard/assets/portfolio/development1.webp";
                                        } else {
                                            echo "../dashboard/assets/portfolio/development2.webp";
                                        }
                                    } else if ($row['project_category'] == "other") {
                                        $image_other = rand(1, 2);
                                        if ($image_other == 1) {
                                            echo "../dashboard/assets/portfolio/other2.webp";
                                        } else {
                                            echo "../dashboard/assets/portfolio/other.webp";
                                        }
                                    }
                                    ?>" alt="">
                                <div class="overlay" onclick="window.open('<?php echo $row['project_url'] ?>','_blank');"><?php echo $row['project_name']; ?>
                                </div>
                            </div>

                        <?php }?>
                    </div>
                </div>
            </section>
        </div>

        <!-- Contact Section section starts -->

        <div id="contactPage">
            <div id="contactPage_css"></div>

            <div class="nav">
                <ul>
                    <li><a href="javascript:void(0)" onclick="hide_default()"><i onclick="hide_default()" class="fa fa-home"></i><span>home</span></a></li>
                    <li><a href="javascript:void(0)" onclick="aboutPage()"><i onclick="aboutPage()" class="fa-solid fa-user"></i></a><span>about</span></li>
                    <li><a href="javascript:void(0)" onclick="worksPage()"><i onclick="worksPage()" class="fa-solid fa-briefcase"></i><span>portfolio</span></a></li>
                    <li class="active"><a href="javascript:void(0)" onclick="contactPage()"><i onclick="contactPage()" class="fa-solid fa-envelope"></i><span>contact</span></a></li>
                    <li><a href="javascript:void(0)" onclick="teamPage()"><i onclick="teamPage()" class="fas fa-users"></i><span>team</span></a></li>
                    <li><a href="javascript:void(0)"><i onclick="dashboard()" class="fa-solid fa-gear"></i><span>Dashboard</span></a></li>
                </ul>
            </div>
            <section>
                <div class="title">
                    <h1>Get in <span>Touch</span></h1>
                    <span class="bg-title">Contact</span>
                </div>

                <div class="container">
                    <div class="left">
                        <h4>DON'T BE SHY !</h4>

                        <p>Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                        <div class="box">
                            <div class="box-left"><i class="fa-solid fa-map"></i></div>
                            <div class="box-right">
                                <h6>Address</h6>
                                <p><?php echo $address . " ," . $city . " ," . $pcode ?></p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-left"><i class="fa-solid fa-envelope-open"></i></div>
                            <div class="box-right">
                                <h6>Email</h6>
                                <p><?php echo $email; ?></p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-left"><i class="fa-solid fa-square-phone"></i></div>
                            <div class="box-right">
                                <h6>Phone</h6>
                                <p><?php echo substr($phone, 0, 5); ?> *********</p>
                            </div>
                        </div>
                        <div class="btns">
                            <?php
                                while ($row = mysqli_fetch_assoc($fatch_social_media)) {
                            ?>
                                <a href="<?php echo $row['link']; ?>" target="_blank" class="btn"><i class="fab fa-<?php echo $row['type']; ?>"></i></a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="right">
                        <div class="form-top">
                            <input type="text" name="" id="InputName" placeholder=" YOUR NAME">
                            <input type="email" name="" id="InputEmail" placeholder="YOUR EMAIL">
                        </div>
                        <input class="subject-field" type="text" name="" id="InputSubject" placeholder=" YOUR SUBJECT">
                        <textarea name="" id="InputMessage" cols="30" rows="8" placeholder=" YOUR MESSAGE"></textarea>
                        <div>
                            <span id="message_response" style="text-align: right;"></span>
                        </div>
                        <a class="send-btn" type="submit" id="submit" onclick="send_message()">Send Message
                            <span><i class="fa-solid fa-paper-plane"></i></span>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <!-- Team members Sections -->

        <div id="teamPage">
            <div id="teamPage_css"></div>

            <div class="nav">
                <ul>
                    <li><a href="javascript:void(0)" onclick="hide_default()"><i onclick="hide_default()" class="fa fa-home"></i><span>home</span></a></li>
                    <li><a href="javascript:void(0)" onclick="aboutPage()"><i onclick="aboutPage()" class="fa-solid fa-user"></i></a><span>about</span></li>
                    <li><a href="javascript:void(0)" onclick="worksPage()"><i onclick="worksPage()" class="fa-solid fa-briefcase"></i><span>portfolio</span></a></li>
                    <li><a href="javascript:void(0)" onclick="contactPage()"><i onclick="contactPage()" class="fa-solid fa-envelope"></i><span>contact</span></a></li>
                    <li class="active"><a href="javascript:void(0)" onclick="teamPage()"><i onclick="teamPage()" class="fas fa-users"></i><span>team</span></a></li>
                    <li><a href="javascript:void(0)"><i onclick="dashboard()" class="fa-solid fa-gear"></i><span>Dashboard</span></a></li>
                </ul>
            </div>
            <section>
                <div class="title" >
                    <h1>MY <span>TEAM</span></h1>
                    <span class="bg-title">MEMBERS</span>
                </div>
                <div class="card-container">

                    <?php
                    while ($row = mysqli_fetch_assoc($total_friend_data)) {
                            $data = $row["lname"];
                    ?>
                        <div class="card" style="height: 100%;">
                            <div class="image" style="background-image: url(<?php echo $profile_bg; ?>);">
                                <img src="../dashboard/profile_images/<?php echo $row['profile_image']; ?>" alt="">
                            </div>
                            <div class="card-data">
                                <h3><?php echo $row['fname'] . " " . $row["lname"]; ?></h3>
                                <h5 style="color: #FFB40089;"><?php echo $row['master_skill']; ?></h5>
                                <h6 style="color: green; font-size: 13px; font-weight: 600;">Team Members</h6>
                                <a href="<?php echo $row['username'] ?>" target="_blank">Profile  <span><i class="fa-solid fa-id-card-clip"></i></span></a>
                            </div>
                        </div>
                    <?php }

                    if ($data == "") {
                        echo '<p class="add-friends">You have added no friends yet. Add friends <a href="../dashboard/">Login</a> </p>';
                    }

                    ?>



                </div>

                <div style="height: 220px;"></div>

                <div class="title" >
                    <h1>PEOPLE <span>also viewed</span></h1>
                    <span class="bg-title">NEW</span>
                </div>

                <div class="card-container">

                    <?php
                        while ($row = mysqli_fetch_assoc($user)) {
                    ?>
                        <div class="card" style="height: 100%;">
                            <div class="image" style="background-image: url(<?php echo $profile_bg; ?>);">
                                <img src="../dashboard/profile_images/<?php echo $row['profile_image']; ?>" alt="">
                            </div>
                            <div class="card-data">
                                <h3><?php echo $row['fname'] . " " . $row["lname"]; ?></h3>
                                <h5 style="color: #FFB40089;"><?php echo $row['master_skill']; ?></h5>
                                <h6 style="color: #FFB400; font-size: 13px; font-weight: 600;">@<?php echo $row['username']; ?></h6>
                                <!-- <form action="" method="post">
                                    <input type="hidden" name="" value="<?php echo $row['id']; ?>">
                                    <button class="send_request" name="" type="submit">Add as team <i class="fas fa-user-friends"></i></button>
                                </form>  -->
                                <a href="../dashboard/" target="_blank">Add Team  <span><i class="fas fa-user-friends"></i></span></a>
                                <a href="<?php echo $row['username'] ?>" target="_blank">Profile  <span><i class="fa-solid fa-id-card-clip"></i></span></a>
                            </div>
                        </div>
                    <?php }?>

                </div>


                    <div class="find-friends" hidden>
                        <div class="title">
                            <h1>Team <span style="text-transform: lowercase; color:#FFF;">o</span><span><span style="text-transform: lowercase;">r</span> Friend</span></h1>
                            <span class="bg-title">Find</span>
                        </div>
                        <input type="text" id="usernmae" placeholder="Search Username">
                        <button id="search_user" onclick="search_user()"><i class="fa-solid fa-magnifying-glass"></i> Find</button>
                        <p id="search_response" class="responses"></p>
                    </div>
                    <p class="add-friends">Add friends from Dashboard <a href="../dashboard/">Login</a> </p>

            </section>
        </div>


        <!-- Ads / Dashboard Sections -->

        <div id="AdsORDashboard">
            <div id="AdsORDashboard_css"></div>

            <div class="nav">
                <ul>
                    <li><a href="javascript:void(0)" onclick="hide_default()"><i onclick="hide_default()" class="fa fa-home"></i><span>home</span></a></li>
                    <li><a href="javascript:void(0)" onclick="aboutPage()"><i onclick="aboutPage()" class="fa-solid fa-user"></i></a><span>about</span></li>
                    <li><a href="javascript:void(0)" onclick="worksPage()"><i onclick="worksPage()" class="fa-solid fa-briefcase"></i><span>portfolio</span></a></li>
                    <li><a href="javascript:void(0)" onclick="contactPage()"><i onclick="contactPage()" class="fa-solid fa-envelope"></i><span>contact</span></a></li>
                    <li ><a href="javascript:void(0)" onclick="teamPage()"><i onclick="teamPage()" class="fas fa-users"></i><span>team</span></a></li>
                    <li class="active"><a href="javascript:void(0)"><i onclick="dashboard()" class="fa-solid fa-gear"></i><span>Dashboard</span></a></li>
                </ul>
            </div>
            <section>



                <?php
                if ($member_type == 1) {
                ?>
                    <br><br><br>
                    <span style="display: flex; Justify-content: center; padding: 100px; padding-bottom: 10px; text-align:center;">
                    <br><br>
                        <img src="https://www.drupal.org/files/project-images/icon-256x256.gif" alt="login_gif" width="200">

                    </span>
                    <span style=" display: flex; Justify-content: center;"><button id="search_user" onclick="window.open('../dashboard/', '_blank');"> Login to Dashboard <i class="fas fa-sign-in"></i></button></span>
                    <?php
                    } else {
                            ?>
                    <div class="card-container">
                    <div class="find-friends">
                        <div class="title">
                            <h1>Create your<span><span ></span> Own profile</span></h1>
                            <span class="bg-title">NEW? </span>
                        </div>

                        <div class="ads">
                            <h2 > <a style="color: #FF4C60; text-decoration:none;"  href="#">Remove Credit</a></h2>
                            <h3 class="create-new">Create your own resume now. <br> We provide Powerful Dashboard to keep your profile Updated, <br>
                                Where you can update everything without writing a single line of code.</h3>
                                <br>
                                <hr style="color: #ffffff15;">
                                <br>
                                <span style=" font-size:small; cursor:pointer;" onclick="location.href='../dashboard/'"><strong><?php echo @$membership; ?></strong> </span> <br>
                                <span class="copyright"> <a href="#">Report</a> | <a href="#">Support</a> | <a href="#">Contact</a> | <a href="../dashboard">Dashboard</a></span> <br>
                                <span class="copyright">© <?php echo date("Y"); ?> Diligent Creator</span> <br>
                                <span class="copyright term"> Terms & Conditions </span>
                        </div>
                    </div>
                </div>
                <?php

    }
    ?>

            </section>
        </div>

    </body>

    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loader").style.visibility = "visible";
            } else {
                document.querySelector( "#loader").style.display = "none";
                document.querySelector("body").style.visibility = "visible";
            }
        };
    </script>
    <script>
        if (window . history . replaceState) {
            window . history . replaceState(null, null, window . location . href);
            //location . reload();
        }

    </script>

    </html>

<?php
} else {
    ?>
    <script>
        window.location.href = "../404.php"
    </script>
<?php
}
