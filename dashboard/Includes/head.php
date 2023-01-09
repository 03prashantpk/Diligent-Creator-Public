<?php
include('./functions/includeAll.php');
//session_start();

if (!isset($_SESSION['USER_LOGIN'])) {
?>
    <script>
        window.location.href = 'login';
    </script>
    <?php
}

if (isset($_SESSION['USER_LOGIN'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
}

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
    $pdf_name = $row['user_resume'];
    $theme = $row['theme'];
    $IsAdmin = $row['admin_mode']; // admin role
    $IsTeam = $row['team_mode']; // team role
    $Is_Premium = $row['premium']; // premium mode
}


$all_users_data = "SELECT * FROM dev_profile";
$fatch_user_data = mysqli_query($conn, $all_users_data);


//age----
$dateOfBirth = $dob;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
$age = $diff->format('%y');

//hire mode---
if ($hire_mode == 1) {
    $hire_status = '<span style="color: green; font-size: 13px;">Hire Me</span>';
    $hire_me = "Hire Me";
    $hire_me_color = "success";
} else {
    $hire_status = '<span style="color: red; font-size: 13px;"><s>Hire Me</s></span>';
    $hire_me = "Talk to Me";
    $hire_me_color = "warning";
}

// message status
if ($message_notification == 0) {
    $notification_message_on_off = "Your Notification is Off";
} else {
    $notification_message_on_off = "Your Notification is On";
}

// Profile Pictures background
$profile_background = rand(1, 8);
if ($profile_background == 1) {
    $profile_bg = "https://steamuserimages-a.akamaihd.net/ugc/859484412646752506/97328E1940467BD74F344D3061C1AB3A9E2B6369/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false";
} else if ($profile_background == 2) {
    $profile_bg = "https://i.gifer.com/origin/3a/3a6fe9162f2314ca6df627ae5d903384.gif";
} else if ($profile_background == 3) {
    $profile_bg = "https://i.pinimg.com/originals/1f/aa/84/1faa84018e4ed6f5621e685dce8b6adb.gif";
} else if ($profile_background == 4) {
    $profile_bg = "https://i.gifer.com/Am67.gif";
} else if ($profile_background == 5) {
    $profile_bg = "https://64.media.tumblr.com/2df67fe7bdbba84c88cdbbdf84fd2743/tumblr_nqgvxz92HC1s85u2fo1_500.gifv";
} else if ($profile_background == 6) {
    $profile_bg = "https://c.tenor.com/Hrgi6ataa2QAAAAC/spring.gif";
} else if ($profile_background == 7) {
    $profile_bg = "https://i.pinimg.com/originals/87/81/0a/87810a0cf7c9f3d787b2a4059ab601ed.gif";
} else if ($profile_background == 8) {
    $profile_bg = "https://i.pinimg.com/originals/51/b6/90/51b6902f4030e1a9bb444b62af458a87.gif";
}
// Total skills
$total_skills_count = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `add_skills` WHERE username='$username'");
$row_skills = mysqli_fetch_array($total_skills_count);
$skill_count = $row_skills['count'];
$skill_count;

$total_users = mysqli_query($conn, "SELECT COUNT(*) AS `count_total_user` FROM `dev_profile`");
$row_total = mysqli_fetch_array($total_users);
$total_user_counts = $row_total['count_total_user'];

// for Profile page overview page
$fatch_skill_data_for_profile_page = "SELECT * from add_skills where user_id='$user_id' AND username = '$username' LIMIT 3";
$result_data_profile_page = mysqli_query($conn, $fatch_skill_data_for_profile_page);


// For Skill_update.php
$fatch_skill_data = "SELECT * from add_skills where user_id='$user_id' AND username = '$username'";
$result_data = mysqli_query($conn, $fatch_skill_data);

// fatch resume file
$fatch_resume_file= "SELECT * from user_uploads  where user_id='$user_id' AND type = 'resume' ORDER BY id DESC";
$result_resume_pdf = mysqli_query($conn, $fatch_resume_file);

// user profile pictures
$fatch_user_profile_picture_data= "SELECT * from user_uploads  where user_id='$user_id' AND type = 'profile_picture' ORDER BY id DESC";
$result_profile_image_R = mysqli_query($conn, $fatch_user_profile_picture_data);

// for Profile page overview page
$fatch_experience_data_for_profile_page = "SELECT * from add_experience where user_id='$user_id' AND username = '$username' LIMIT 3";
$result_data_experice_profile_page = mysqli_query($conn, $fatch_experience_data_for_profile_page);

// For Skill_update.phpfatch_portfolio_data
$fatch_experience_data = "SELECT * from add_experience where user_id='$user_id' AND username = '$username'";
$result_data_experice = mysqli_query($conn, $fatch_experience_data);

$fatch_portfolio_data = "SELECT * from dev_projects  where user_id='$user_id' AND username = '$username'";
$result_data_portfolio = mysqli_query($conn, $fatch_portfolio_data);

$visitor_messages = "SELECT * from dev_messages where user_id='$user_id' AND hide_status = 0 ORDER BY id DESC";
$show_visitor_messages = mysqli_query($conn, $visitor_messages);

$visitor_messages_profile_page = "SELECT * from dev_messages where user_id='$user_id' AND read_status = 0 LIMIT 10";
$show_visitor_messages_profile_page = mysqli_query($conn, $visitor_messages_profile_page);

// deleted skills
if (isset($_POST['delete_skill'])) {
    $skill_id = $_POST['skill_id'];
    $sql_delete_skill = "DELETE FROM add_skills WHERE id = '$skill_id' AND username='$username'";
    $query_delete = mysqli_query($conn, $sql_delete_skill);

    if ($query_delete) {
    ?>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
                location.reload();
                $("#delete_skill_response").html("Skill Deleted Successfuly!");
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
// deleted pdf
if (isset($_POST['delete_pdf'])) {
    $pdf_id = $_POST['pdf_id'];
    $pdf_name= $_POST['pdf_name'];
    $sql_delete_pdf = "DELETE FROM user_uploads WHERE id = '$pdf_id' AND username='$username'";
    $query_delete_pdf = mysqli_query($conn, $sql_delete_pdf);

    if ($query_delete_pdf) {
        unlink("user_resume/$pdf_name");
    ?>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
                location.reload();
                //$("#delete_skill_response").html("Skill Deleted Successfuly!");
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


// deleted profile image
if (isset($_POST['delete_profile_image'])) {
    $profile_image_id = $_POST['profile_image_id'];
    $pinmage_name_name= $_POST['profile_image_name'];
    $sql_delete_Pimage = "DELETE FROM user_uploads WHERE id = '$profile_image_id' AND username='$username'";
    $query_delete_image = mysqli_query($conn, $sql_delete_Pimage);

    if ($query_delete_image) {
        unlink("profile_images/$pinmage_name_name");
    ?>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
                location.reload();
                //$("#delete_skill_response").html("Skill Deleted Successfuly!");
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

// delete expericence
if (isset($_POST['delete_experience'])) {
    $experience_id = $_POST['experience_id'];
    $sql_delete_experience = "DELETE FROM add_experience WHERE id = '$experience_id' AND username='$username '";
    $query_delete_experience = mysqli_query($conn, $sql_delete_experience);

    if ($query_delete_experience) {
    ?>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
                location.reload();
                $("#experience_skill_response").html("Skill Deleted Successfuly!");
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

// deleted skills
if (isset($_POST['delete_portfolio'])) {
    $skill_id = $_POST['portfolio_id'];
    $sql_delete_skill = "DELETE FROM dev_projects WHERE id = '$skill_id' AND username='$username '";
    $query_delete = mysqli_query($conn, $sql_delete_skill);

    if ($query_delete) {
    ?>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
                location.reload();
                $("#delete_skill_response").html("Skill Deleted Successfuly!");
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

// hobbie 1
$sql_query_h1 = "SELECT * FROM dev_hobbies  WHERE username='$username' AND type='hobbie1'";
$hobbie_1_data = mysqli_query($conn, $sql_query_h1);

while ($row = mysqli_fetch_assoc($hobbie_1_data)) {
    $hobbie_1_name = $row['hobby_name'];
    $hobbie_1_type = $row['hobby_type'];
    $hobbie_1_desc = $row['hobby_desc'];

}

//hobbie 2
$sql_query_h2 = "SELECT * FROM dev_hobbies  WHERE username='$username' AND type='hobbie2'";
$hobbie_2_data = mysqli_query($conn, $sql_query_h2);

while ($row = mysqli_fetch_assoc($hobbie_2_data)) {
    $hobbie_2_name = $row['hobby_name'];
    $hobbie_2_type = $row['hobby_type'];
    $hobbie_2_desc = $row['hobby_desc'];

}

//hobbie 3
$sql_query_h3 = "SELECT * FROM dev_hobbies  WHERE username='$username' AND type='hobbie3'";
$hobbie_3_data = mysqli_query($conn, $sql_query_h3);

while ($row = mysqli_fetch_assoc($hobbie_3_data)) {
    $hobbie_3_name = $row['hobby_name'];
    $hobbie_3_type = $row['hobby_type'];
    $hobbie_3_desc = $row['hobby_desc'];

}

//hobbie 4
$sql_query_h4 = "SELECT * FROM dev_hobbies  WHERE username='$username' AND type='hobbie4'";
$hobbie_4_data = mysqli_query($conn, $sql_query_h4);

while ($row = mysqli_fetch_assoc($hobbie_4_data)) {
    $hobbie_4_name = $row['hobby_name'];
    $hobbie_4_type = $row['hobby_type'];
    $hobbie_4_desc = $row['hobby_desc'];

}

// facebook - data
$facebook_1 = "SELECT * FROM dev_social_links  WHERE username='$username' AND type='facebook'";
$facebook_data = mysqli_query($conn, $facebook_1);

while ($row = mysqli_fetch_assoc($facebook_data)) {
    $facebook_link = $row['link'];
    $facebook_status = $row['status'];

}

// instagram - data
$instagram_1 = "SELECT * FROM dev_social_links   WHERE username='$username' AND type='instagram'";
$instagram_data = mysqli_query($conn, $instagram_1);

while ($row = mysqli_fetch_assoc($instagram_data)) {
    $instagram_link = $row['link'];
    $instagram_status = $row['status'];
    $instagram_link = explode("/", $instagram_link)[3];

}

// github - data
$github_1 = "SELECT * FROM dev_social_links   WHERE username='$username' AND type='github'";
$github_data = mysqli_query($conn, $github_1);

while ($row = mysqli_fetch_assoc($github_data)) {
    $github_link = $row['link'];
    $github_status = $row['status'];
    $github_link = explode("/", $github_link)[3];

}

// linkedin - data
$linkedin_1 = "SELECT * FROM dev_social_links   WHERE username='$username' AND type='linkedin'";
$linkedin_data = mysqli_query($conn, $linkedin_1);

while ($row = mysqli_fetch_assoc($linkedin_data)) {
    $linkedin_link = $row['link'];
    $linkedin_status = $row['status'];
    $linkedin_link = explode("/", $linkedin_link)[4];

}

// Current date 
$current_date = date("Y-M-d");

?>

<head>
    <!-- Meta Data-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://enally.in/files-manager/assets/Fevicon.png">
    <link rel="icon" href="https://enally.in/files-manager/assets/Fevicon.png" type="image/x-icon">
    <title><?php echo $fname; ?> - Dashboard </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.0/css/all.css" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!--Nucleo CSS-->
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.0" rel="stylesheet" />

    <!-- Iconify-->
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

    <!-- Jquery ---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include from the CDN -->
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    </script>

    <!-- Backend Function Js and CSS--->
    <script src="./functions/backend.js?v=2.0.0"></script>
    <?php include('backend-css.php')  ?>
    <?php echo $profile_additional_css;  ?>
</head>

<body oncontextmenu="return false">