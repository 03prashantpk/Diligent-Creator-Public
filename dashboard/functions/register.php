<?php
include('connection.inc.php');
include('MainFunctions.php');
include("confidentials.php");
include("../smtp/PHPMailerAutoload.php");
//include("../assets/profile_picture/profile1.jpg");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$submit_password = sha1($password . $salt);
$public = 0;

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

$project_number = rand(1, 7);

if ($project_number == 1) {
    $purl = "../assets/profile_picture/profile1.png";
} else if ($project_number == 2) {
    $purl = "../assets/profile_picture/profile2.png";
} else if ($project_number == 3) {
    $purl = "../assets/profile_picture/profile3.png";
} else if ($project_number == 4) {
    $purl = "../assets/profile_picture/profile4.png";
} else if ($project_number == 5) {
    $purl = "../assets/profile_picture/profile5.png";
} else if ($project_number == 6) {
    $purl = "../assets/profile_picture/profile6.png";
} else if ($project_number == 7) {
    $purl = "../assets/profile_picture/profile7.png";
}

$date = date("Y-M-d");


if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
} else {
    if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $username)) {
        echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed!";
    } else {
        $check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE username='$username'");
        if (mysqli_num_rows($check_username)) {
            echo "Username not available!";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE email='$email'");
                if (mysqli_num_rows($check_username)) {
                    echo "Email is already registered!";
                } else {
                    $query = "INSERT INTO dev_profile (username, email, password, public, profile_image, joined_on) VALUES ('$username', '$email', '$submit_password', '$public', '$purl', '$date')";

                    if (mysqli_query($conn, $query)) {
                        echo "success";
                    } else {
                        echo mysqli_error($conn);
                    }
                }
            } else {
                echo "Please enter a correct email address.";
            }
        }
    }
}
