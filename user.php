<?php
include("main-function.php");

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

    //echo $fname . " " . $lname;
    //echo "<br>" . $user_id;

    $social_media = "SELECT * FROM dev_social_links  WHERE username='$username' AND status='1'";
    $fatch_social_media = mysqli_query($conn, $social_media);


    if ($year_of_experience  == 0) {
        $experience_tab = "hidden";
    }

    if ($project_completed  == 0) {
        $project_completed_tab = "hidden";
    }

    if ($happy_customers  == 0) {
        $happy_customers_tab = "hidden";
    }

    if ($award  == 0) {
        $award_tab = "hidden";
    }
    if ($year_of_experience  == 0 && $project_completed  == 0 && $happy_customers  == 0 && $award  == 0) {
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
        $hire_me_color = "success";
        $hire_ads = '<section>
    
        <div class="container">
            <div class="spacer" data-height="30"></div>
            <div class="mt-5 text-center">
            <!--<span id="touch_me_message"></span> <br>-->
                <img id="images_on_hover" src="' . $hire_image . '" onmouseover="touch_me()" onmouseout="released()"  width="300px" alt="available">
                <div class="spacer" data-height="5"></div>
                <h4 class="mb-0">I am <span class="text-warning">available</span>. Want to get your work done? <a href="#contact">Click here</a> to contact me! 👋</h4>
            </div>
            <div class="spacer" data-height="30"></div>
        </div>
    
    </section>';
    } else {
        $hire_status = '<span style="color: red; font-size: 13px;"><s>Hire Me</s></span>';
        $hire_me = "Talk to Me";
        $hire_me_color = "warning";
    }

    $fatch_experience_data_for_profile_page = "SELECT * from add_experience where type=1 AND username = '$username'";
    $result_data_experice_profile_page = mysqli_query($conn, $fatch_experience_data_for_profile_page);

    $fatch_experience_data_for_profile_page_job = "SELECT * from add_experience where type=0 AND username = '$username'";
    $result_data_experice_profile_page_job = mysqli_query($conn, $fatch_experience_data_for_profile_page_job);

    $top_skill = "SELECT * from add_skills where username = '$username' ORDER BY id ASC LIMIT 10";
    $blink_top_skill = mysqli_query($conn, $top_skill);


    $sql_query_for_hobby_Interest = "SELECT * FROM dev_hobbies  WHERE username='$username'";
    $fatch_hobby_interest_data = mysqli_query($conn, $sql_query_for_hobby_Interest);

    $sql_query_portfolio = "SELECT * FROM dev_projects  WHERE username='$username'";
    $fatch_protfolio_data = mysqli_query($conn, $sql_query_portfolio);

    $sql_query_portfolio_all = "SELECT * FROM dev_projects  WHERE username='$username'";
    $fatch_protfolio_data_all = mysqli_query($conn, $sql_query_portfolio_all);

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

?>
    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $fname . " " . $lname . " - @" . $username; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="../dashboard/profile_images/<?php echo  $profile_image ?>">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="../user-frontend/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="../user-frontend/css/all.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="../user-frontend/css/simple-line-icons.css" type="text/css" media="all">
        <link rel="stylesheet" href="../user-frontend/css/slick.css" type="text/css" media="all">
        <link rel="stylesheet" href="../user-frontend/css/animate.css" type="text/css" media="all">
        <link rel="stylesheet" href="../user-frontend/css/magnific-popup.css" type="text/css" media="all">
        <link rel="stylesheet" href="../user-frontend/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://jthemes.net/themes/wp/bolby/bolby5/wp-content/themes/bolby/css/simple-line-icons.css?ver=5.9.2">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Jquery ---->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include from the CDN -->
        <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.0/css/all.css" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">

        <!-- google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@800&display=swap" rel="stylesheet">
        <!-- custom---------->
        <script src="../functions/front-backend.js?v=2.0"></script>
        <link rel="stylesheet" href="../functions/front-end.css?v=2.0">

        <!-- Meta tags -->
        <meta name="description" content="<?php echo $fname ; echo " " . $about; ?>">
        <meta name="keywords" content="diligentcreator.ml, enally, Prashant Kumar, enally.in">
        <meta name="author" content="Prashant Kumar - Enally.in">
        <meta name="copyright" content="Enally.in">
        <meta property="og:image" content="<?php echo $meta_image_url; ?>">
        <meta property="og:image" content="<?php echo $meta_image_url; ?>">
        <meta name="twitter:image" content="<?php echo $meta_image_url; ?>">

    </head>

    <body onload="default_hidden()">


        <input hidden type="text" id="userID" value="<?php echo  $user_id; ?>">
        <input hidden type="text" id="userName" value="<?php echo $username; ?>">
        <!-- Preloader -->
        <div id="preloader">
            <div class="outer">
                <!-- Google Chrome -->
                <div class="infinityChrome">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <!-- Safari and others -->
                <div class="infinity">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <span></span>
                    </div>
                </div>
                <!-- Stuff -->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                            <feBlend in="SourceGraphic" in2="goo" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>

        <!-- desktop header -->
        <header class="desktop-header-3 fixed-top">

            <div class="container">

                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand page_name" href="#"><span class="page_name"> <?php echo $fname . " " . $lname; ?></span></a> <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto scrollspy">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
                            <li class="nav-item"><a href="#works" class="nav-link">Works</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a class="nav-link text-danger" href="#bottom" onclick="login_page()" style="cursor: pointer;">Login</a></li>
                        </ul>
                    </div>
                </nav>

            </div>

        </header>

        <!-- main layout -->
        <main class="content-3">

            <!-- section home -->
            <section id="home" class="home d-flex align-items-center">
                <div class="container">

                    <!-- intro -->
                    <div class="intro">
                        <!-- avatar image -->
                        <img class="profile_image" src="../dashboard/profile_images/<?php echo  $profile_image ?>" alt="<?php echo $fname; ?>" class="mb-4" />

                        <!-- info -->
                        <h1 class="mb-2 mt-0"><?php echo $fname . " " . $lname; ?><span style="color: #FF4C60 !important; font-size:22x !important;"> <?php echo $age; ?></span></h1>
                        <span style="color: #FF4C60 !important;"><span class="text-rotating" style="color: #FF4C60 !important;"><?php while ($row = mysqli_fetch_assoc($blink_top_skill)) {
                                                                                                        echo $row['skill_name'] . ",";
                                                                                                    } ?><?php echo $master_skill;  ?>⭐</span></span>

                        <!-- social icons -->
                        <ul class="social-icons light list-inline mb-0 mt-4">
                            <?php
                            while ($row = mysqli_fetch_assoc($fatch_social_media)) {
                            ?>
                                <li class="list-inline-item"><a target="_blank" href="<?php echo $row['link']; ?>"><i class="fab fa-<?php echo $row['type']; ?>"></i></a></li>
                            <?php
                            }
                            ?>
                            <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                        </ul>

                        <!-- buttons -->
                        <div class="mt-4">
                            <a href="#contact" class="btn btn-default"><?php echo $hire_me; ?></a>
                        </div>
                    </div>

                    <!-- scroll down mouse wheel -->
                    <div class="scroll-down">
                        <a href="#about" class="mouse-wrapper">
                            <span>Scroll Down</span>
                            <span class="mouse">
                                <span class="wheel"></span>
                            </span>
                        </a>
                    </div>

                    <!-- parallax layers -->
                    <div class="parallax" data-relative-input="true">

                        <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z" fill="#FFD15C" fill-rule="evenodd" />
                        </svg>

                        <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd" />
                        </svg>

                        <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                            <path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z" fill="#44D7B6" fill-rule="evenodd" />
                        </svg>

                        <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                            <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd" />
                        </svg>

                        <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
                            <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd" />
                        </svg>

                        <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#FF4C60" fill-rule="evenodd">
                                <path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
                                <path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
                            </g>
                        </svg>

                        <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none" fill-rule="evenodd" />
                        </svg>

                        <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
                            <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd" />
                        </svg>

                        <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z" fill="#6C6CE5" fill-rule="evenodd" />
                        </svg>

                        <svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#44D7B6" fill-rule="evenodd">
                                <path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
                                <path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
                            </g>
                        </svg>

                        <svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z" fill="#FFD15C" fill-rule="evenodd" />
                        </svg>

                    </div>
                </div>

            </section>

            <!-- section about -->
            <section id="about">

                <div class="container">

                    <!-- section title -->
                    <h2 class="section-title wow fadeInUp">About Me</h2>

                    <div class="spacer" data-height="60"></div>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="text-center text-md-left">
                                <!-- avatar image -->
                                <img class="profile_image" src="../dashboard/profile_images/<?php echo  $profile_image ?>" alt="<?php echo $fname; ?>" alt="" />
                            </div>
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        </div>

                        <div class="col-md-9 triangle-left-md triangle-top-sm">
                            <div class="rounded bg-white shadow-dark padding-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- about text -->
                                        <p><?php echo $about; ?></p>
                                        <div class="mt-3">
                                            <a href="../dashboard/user_resume/<?php echo $resume_url ?>" download class="btn btn-default">Download CV</a>
                                        </div>
                                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                                    </div>
                                    <div class="col-md-6 keep-scrolling" style="height: 225px; ">
                                        <span class="text-right" style="float: right;"><?php echo  @$skill_scroll_info; ?></span>
                                        <br>
                                        <?php

                                        while ($row = mysqli_fetch_assoc($result_data_profile_page)) {
                                            $level = $row['skill_level'];
                                            $skill_level = (int)$level;
                                            $skill_level = $skill_level * 10;
                                        ?>
                                            <!-- skill item -->
                                            <div class="skill-item">
                                                <div class="skill-info clearfix">
                                                    <h4 class="float-left mb-3 mt-0"><?php echo $row['skill_name'] ?></h4>
                                                    <span class="float-right"><?php echo $skill_level; ?>%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php echo $skill_level; ?>" data-color="<?php if ($skill_level > 70) {
                                                                                                                                                                                                                    echo '#44D7B6';
                                                                                                                                                                                                                } else if ($skill_level > 40) {
                                                                                                                                                                                                                    echo '#FFD15C';
                                                                                                                                                                                                                } else if ($skill_level > 10) {
                                                                                                                                                                                                                    echo '#6C6CE5';
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo '#FF4C60';
                                                                                                                                                                                                                } ?>">
                                                    </div>
                                                </div>
                                                <div class="spacer" data-height="20"></div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row end -->

                    <div class="spacer" data-height="70" <?php echo @$hide_stats; ?>></div>

                    <div class="row" <?php echo @$hide_stats; ?>>

                        <div class="col-md-3 col-sm-6" <?php echo @$project_completed_tab; ?>>
                            <!-- fact item -->
                            <div class="fact-item">
                                <span class="icon icon-fire"></span>
                                <div class="details">
                                    <h3 class="mb-0 mt-0 number"><em class="count"><?php echo $project_completed; ?></em></h3>
                                    <p class="mb-0">Projects completed</p>
                                </div>
                            </div>
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        </div>

                        <div class="col-md-3 col-sm-6" <?php echo @$experience_tab; ?>>
                            <!-- fact item -->
                            <div class="fact-item">
                                <span class="icon icon-calendar"></span>
                                <div class="details">
                                    <h3 class="mb-0 mt-0 number"><em class="count"><?php echo $year_of_experience; ?></em> years</h3>
                                    <p class="mb-0">Experience</p>
                                </div>
                            </div>
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        </div>

                        <div class="col-md-3 col-sm-6" <?php echo @$happy_customers_tab; ?>>
                            <!-- fact item -->
                            <div class="fact-item">
                                <span class="icon icon-people"></span>
                                <div class="details">
                                    <h3 class="mb-0 mt-0 number"><em class="count"><?php echo $happy_customers; ?></em></h3>
                                    <p class="mb-0">Satisfied clients</p>
                                </div>
                            </div>
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        </div>

                        <div class="col-md-3 col-sm-6" <?php echo @$award_tab; ?>>
                            <!-- fact item -->
                            <div class="fact-item">
                                <span class="icon icon-badge"></span>
                                <div class="details">
                                    <h3 class="mb-0 mt-0 number"><em class="count"><?php echo $award; ?></em></h3>
                                    <p class="mb-0">Nominees winner</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

            <!-- section services -->
            <?php echo @$hire_ads; ?>

            <!-- section experience -->
            <section id="experience">

                <div class="container">

                    <!-- section title -->
                    <h2 class="section-title wow fadeInUp">Experience </h2>

                    <div class="spacer" data-height="60"></div>

                    <div class="row">

                        <div class="col-md-6">
                            <!-- timeline wrapper -->
                            <div class="timeline edu bg-white rounded shadow-dark padding-30 keep-scrolling" style="height: 540px; overflow:scroll; overflow-x:hidden" id="scroller" onmouseover="scroll_down(),scroll_up_two();" onmouseout="stop_scroll(),stop_scroll_two();">
                                <h5 class="text-center" style="color:#FF4C60;">Academic <span class='text-right' style="float: right; font-size:small;"><?php echo @$exp_scroll_info2; ?></span> </h5>
                                <div id="restore_experience1">
                                    <div id="restore1">
                                    <?php if(mysqli_fetch_assoc($result_data_experice_profile_page) == ""){
                                            echo "<h4 style='text-align: center !important;'>No Data Added</h4>";
                                        }  
                                    ?>
                                        <!-- timeline item -->

                                        <?php
                                        while ($row = mysqli_fetch_assoc($result_data_experice_profile_page)) {
                                            $start_date = $row['started_on'];
                                            $end_date = $row['ended_on'];
                                        ?>
                                            <div class="timeline-container wow fadeInUp">
                                                <div class="content">
                                                    <span class="time"><?php echo substr($start_date, 0, -6);  ?> - <?php echo  substr($end_date, 0, -6); ?></span>
                                                    <h3 class="title"><?php echo  $row['job_name']; ?> <span style="color:#FF4C60; font-size:small;"><?php echo $row['job_location']; ?></h3>
                                                    <p><?php echo  $row['job_description']; ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- main line -->
                                <span class="line" hidden></span>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- responsive spacer -->
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            <!-- timeline wrapper -->
                            <div class="timeline exp bg-white rounded shadow-dark padding-30 keep-scrolling" style="height: 540px; overflow:scroll; overflow-x:hidden" id="scroller2" onmouseover="scroll_up(),scroll_down_two();" onmouseout="stop_scroll(),stop_scroll_two();">
                                <h5 class="text-center" style="color:#FF4C60;">Work <span class=' text-right' style="float: right;"><?php echo @$exp_scroll_info; ?></span> </h5>
                                <div id="restore_experience2">
                                    <div id="restore2">
                                    <?php if(mysqli_fetch_assoc($result_data_experice_profile_page_job) == ""){
                                            echo "<h4 style='text-align: center !important;'>No Data Added</h4>";
                                        }  
                                    ?>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result_data_experice_profile_page_job)) {
                                            $start_date = $row['started_on'];
                                            $end_date = $row['ended_on'];
                                        ?>
                                            <!-- timeline item -->
                                            <div class="timeline-container wow fadeInUp">
                                                <div class="content">
                                                    <span class="time"><?php echo substr($start_date, 0, -6);  ?></span>
                                                    <h3 class="title"><?php echo $row['job_name']; ?> <span style="color:#FF4C60; font-size:small;"><?php echo $row['job_location']; ?></span></h3>
                                                    <p><?php echo $row['job_description']; ?></p>
                                                </div>
                                            </div>

                                        <?php } ?>

                                    </div>
                                </div>

                                <!-- main line -->
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <!-- section works -->
            <section id="works">

                <div class="container">

                    <!-- section title -->
                    <h2 class="section-title wow fadeInUp">Recent works</h2>

                    <div class="spacer" data-height="60"></div>

                    <!-- portfolio filter (desktop) -->
                    <ul class="portfolio-filter list-inline wow fadeInUp">
                        <li class="current list-inline-item" data-filter="*">Everything</li>
                        <li class="list-inline-item" data-filter=".writing">Writing</li>
                        <li class="list-inline-item" data-filter=".art">Art</li>
                        <li class="list-inline-item" data-filter=".design">Design</li>
                        <li class="list-inline-item" data-filter=".development">Development</li>
                        <li class="list-inline-item" data-filter=".other">Other</li>

                    </ul>

                    <!-- portfolio filter (mobile) -->
                    <div class="pf-filter-wrapper">
                        <select class="portfolio-filter-mobile">
                            <option value="*">Everything</option>
                            <option value=".writing">Writing</option>
                            <option value=".art">Art</option>
                            <option value=".design">Design</option>
                            <option value=".development">Development</option>
                            <option value=".other">Other</option>
                        </select>
                    </div>

                    <!-- portolio wrapper -->
                    <div class="keep-scrolling portfolio_outter">
                        <div class="row portfolio-wrapper" style='text-align: center !important' id="first_6">
                        <?php if(mysqli_fetch_assoc($fatch_protfolio_data) == ""){
                                echo "<h4 style='text-align: center !important;'>No Project Added</h4>";
                                }  
                            ?>
                            <?php
                            while ($row = mysqli_fetch_assoc($fatch_protfolio_data)) {
                            ?>
                                <!-- portfolio item -->
                                <div class="col-md-4 col-sm-6 grid-item <?php echo $row['project_category']; ?>">
                                    <a href="<?php echo $row['project_url']; ?>" target="_blank">
                                        <div class="portfolio-item rounded shadow-dark">
                                            <div class="details">
                                                <span class="term text-capitalize"><?php echo $row['project_category']; ?></span>
                                                <h4 class="title"><?php echo $row['project_name']; ?></h4>
                                                <span class="more-button"><i class="icon-link"></i></span>
                                            </div>
                                            <div class="thumb">
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
                                                            ?>" alt="Portfolio-title" />
                                                <div class="mask"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </section>

            <!-- backup code on dashboard -->

            <!-- section testimonials -->

            <?php
            
            if(mysqli_fetch_assoc($fatch_hobby_interest_data) != ""){
                ?>
                <section id="testimonials">
                    <div class="container">
                        <!-- section title -->
                        <h2 class="section-title wow fadeInUp">Hobbies & Interests</h2>
                        <div class="spacer" data-height="60"></div>
                        <!-- testimonials wrapper -->
                        <div class="testimonials-wrapper">
                            <?php
                            while ($row = mysqli_fetch_assoc($fatch_hobby_interest_data)) {
                            ?>
                                <!-- testimonial item -->
                                <div class="testimonial-item text-center mx-auto">
                                    <div class="thumb mb-3 mx-auto">
                                        <img src="<?php echo @$hobby_image; ?>" alt="hobby_img" />
                                    </div>
                                    <h4 class="mt-3 mb-0 text-capitalize"><?php echo @$row['hobby_name'] ?></h4>
                                    <span class="subtitle text-capitalize"><?php echo @$row['hobby_type'] ?></span>
                                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                                        <p class="mb-0"><?php echo @$row['hobby_desc'] ?></p>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </section>
                <?php
            }
            else{
                
            }

            ?>


            <!-- section contact -->
            <section id="contact">

                <div class="container">

                    <!-- section title -->
                    <h2 class="section-title wow fadeInUp">Get In Touch</h2>

                    <div class="spacer" data-height="60"></div>

                    <div class="row">

                        <div class="col-md-4">
                            <!-- contact info -->
                            <div class="contact-info">
                                <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                                <p class="wow fadeInUp">Don't like forms? Send me an <a href="mailto:name@example.com">email</a>. 👋</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <!-- Contact Form -->
                            <form id="contact-form" class="contact-form mt-6" method="post" action="#">

                                <div class="messages"></div>

                                <div class="row">
                                    <div class="column col-md-6">
                                        <!-- Name input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputName" placeholder="Your name" required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="InputEmail" placeholder="Email address" required="required" data-error="Email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="column col-md-12">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputSubject" placeholder="Subject" required="required" data-error="Subject is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="column col-md-12">
                                        <!-- Message textarea -->
                                        <div class="form-group">
                                            <textarea id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <span id="message_response" class="text-justify"></span><br><br>
                                </div>
                                <div class="column col-md-12">
                                    <div class="text-right">
                                        <button type="submit" id="submit" value="Submit" class="btn btn-default" onclick="send_message()">Send Message</button>
                                    </div>
                                </div>


                                <!-- Send Button -->

                            </form>
                            <!-- Contact Form end -->
                        </div>

                    </div>

                </div>

            </section>

            <div class="spacer" data-height="96"></div>

            <footer class="footer" id="bottom">
                <div class="container">
                    <?php
                        //echo $IsAdmin . $Is_Premium;
                        if($IsAdmin == 1 && $Is_Premium == 1){

                            ?>
                                <span style=" font-size: 14px; cursor:pointer;" onclick="location.href='../dashboard/'"><strong>Admin & Premium Account</strong> </span> <br>
                                <span class="copyright"> <a href="#">Report</a> | <a href="#">Support</a> | <a href="#">Contact</a> | <a href="#">Dashboard</a></span> <br>
                            <?php
                        }

                        else if ($Is_Premium == 1){

                            ?>
                            <span style=" font-size: 14px;  cursor:pointer;" onclick="location.href='../dashboard/'"><strong>Premium Account</strong> </span> <br>
                            <span class="copyright"> <a href="#">Report</a> | <a href="#">Support</a> | <a href="#">Contact</a> | <a href="#">Dashboard</a></span> <br>
                            <?php

                        }

                        else {
                            ?>
                            <span style=" font-size:small; cursor:pointer;" onclick="location.href='../dashboard/'"><strong><?php echo @$membership; ?></strong> </span> <br>
                            <span class="copyright">© <?php echo date("Y"); ?> Enally.in - Developer by Prashant Kumar</span> <br>
                            <span class="copyright"> <a href="#">Report</a> | <a href="#">Support</a> | <a href="#">Contact</a> | <a href="#">Dashboard</a></span> <br>
                            <span class="copyright"> Terms & Conditions </span>

                            <?php
                        }
                        
                    ?>
                    
                </div>
            </footer>

        </main>

        <!-- Go to top button -->
        <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

        <!-- SCRIPTS -->
        <script src="../user-frontend/js/jquery-1.12.3.min.js"></script>
        <script src="../user-frontend/js/jquery.easing.min.js"></script>
        <script src="../user-frontend/js/jquery.waypoints.min.js"></script>
        <script src="../user-frontend/js/jquery.counterup.min.js"></script>
        <script src="../user-frontend/js/popper.min.js"></script>
        <script src="../user-frontend/js/bootstrap.min.js"></script>
        <script src="../user-frontend/js/isotope.pkgd.min.js"></script>
        <script src="../user-frontend/js/infinite-scroll.min.js"></script>
        <script src="../user-frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="../user-frontend/js/slick.min.js"></script>
        <script src="../user-frontend/js/contact.js"></script>
        <script src="../user-frontend/js/validator.js"></script>
        <script src="../user-frontend/js/wow.min.js"></script>
        <script src="../user-frontend/js/morphext.min.js"></script>
        <script src="../user-frontend/js/parallax.min.js"></script>
        <script src="../user-frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="../user-frontend/js/custom.js"></script>

    </body>

    </html>
<?php
} else {
?>
    <script>
        window.location.href = "../404.php"
    </script>
<?php
}
