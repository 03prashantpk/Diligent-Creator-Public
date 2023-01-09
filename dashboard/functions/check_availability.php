<?php
include('connection.inc.php');
include('MainFunctions.php');
include("confidentials.php");

$username = $_POST['username'];

if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $username)) {
    echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed!";
}
else {
    $check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE username='$username'");
    if (mysqli_num_rows($check_username)) {
        echo "Username not available!";
    }
    else{
        echo "success";
    }
}
