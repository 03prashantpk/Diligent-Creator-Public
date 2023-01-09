<?php
include("includeAll.php");

$type = $_POST['type'];

$userName = $_SESSION['username'];
$USER_ID = $_SESSION['USER_ID'];

if ($type == "facebook") {
    $facebook_username = $_POST['facebookusername'];
    $facebook_username = "https://facebook.com/" . $facebook_username;
    $status = $_POST['facebook_status'];

    if (preg_match('/[#$%^&*()+=\-\[\]\';,\/{}|":<>?~\\\\]/', $_POST['facebookusername'])) {
        echo "/\/{}[]-;:*^$&#| etc are not allowed in username";
    } else {
        $check_type = mysqli_query($conn, "SELECT * From dev_social_links  WHERE username='$userName' AND type='$type'");

        if (mysqli_num_rows($check_type)) {
            $updateig = "UPDATE dev_social_links SET status='$status', link='$facebook_username' WHERE  username='$userName' AND type='$type'";
            if (mysqli_query($conn, $updateig)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>";
            }
        } else {
            $add_facebook = "INSERT INTO dev_social_links (user_id,username,type,link,status) VALUES ('$USER_ID','$userName', '$type','$facebook_username', '$status' )";
            if (mysqli_query($conn, $add_facebook)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>!";
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}


if ($type == "instagram") {
    $instagram_username = $_POST['instagramusername'];
    $instagram_username = "https://instagram.com/" . $instagram_username;
    $status = $_POST['instagram_status'];

    if (preg_match('/[#$%^&*()+=\-\[\]\';,\/{}|":<>?~\\\\]/', $_POST['instagramusername'])) {
        echo "/\/{}[]-;:*^$&#|~ etc are not allowed in username";
    } else {
        $check_type = mysqli_query($conn, "SELECT * From dev_social_links  WHERE username='$userName' AND type='$type'");

        if (mysqli_num_rows($check_type)) {
            $updatefb = "UPDATE dev_social_links SET status='$status', link='$instagram_username' WHERE  username='$userName' AND type='$type'";
            if (mysqli_query($conn, $updatefb)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>";
            }
        } else {
            $add_instagram = "INSERT INTO dev_social_links (user_id,username,type,link,status) VALUES ('$USER_ID','$userName', '$type','$instagram_username', '$status' )";
            if (mysqli_query($conn, $add_instagram)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>!";
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}


if ($type == "github") {
    $github_username = $_POST['githubusername'];
    $github_username = "https://github.com/" . $github_username;
    $status = $_POST['github_status'];

    if (preg_match('/[#$%^&*()+=\-\[\]\';,\/{}|":<>?~\\\\]/', $_POST['githubusername'])) {
        echo "/\/{}[]-;:*^$&#|~ etc are not allowed in username";
    } else {
        $check_type = mysqli_query($conn, "SELECT * From dev_social_links  WHERE username='$userName' AND type='$type'");

        if (mysqli_num_rows($check_type)) {
            $updategit = "UPDATE dev_social_links SET status='$status', link='$github_username' WHERE  username='$userName' AND type='$type'";
            if (mysqli_query($conn, $updategit)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>";
            }
        } else {
            $add_github = "INSERT INTO dev_social_links (user_id,username,type,link,status) VALUES ('$USER_ID','$userName', '$type','$github_username', '$status' )";
            if (mysqli_query($conn, $add_github)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>!";
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}


if ($type == "linkedin") {
    $linkedin_username = $_POST['linkedinusername'];
    $linkedin_username = "https://linkedin.com/in/" . $linkedin_username;
    $status = $_POST['linkedin_status'];

    if (preg_match('/[#$%^&*()+=\-\[\]\';,\/{}|":<>?~\\\\]/', $_POST['linkedinusername'])) {
        echo "/\/{}[]-;:*^$&#|`~ etc are not allowed in username";
    } else {
        $check_type = mysqli_query($conn, "SELECT * From dev_social_links  WHERE username='$userName' AND type='$type'");

        if (mysqli_num_rows($check_type)) {
            $updategit = "UPDATE dev_social_links SET status='$status', link='$linkedin_username' WHERE  username='$userName' AND type='$type'";
            if (mysqli_query($conn, $updategit)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>";
            }
        } else {
            $add_linkedin = "INSERT INTO dev_social_links (user_id,username,type,link,status) VALUES ('$USER_ID','$userName', '$type','$linkedin_username', '$status' )";
            if (mysqli_query($conn, $add_linkedin)) {
                echo "<span style='color: green;''> Updated Successfully </sapn>!";
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}
