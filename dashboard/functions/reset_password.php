<?php
include('includeAll.php');

$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

$hashed_new_password = sha1($confirm_password . $salt);
$old_password_hash = sha1($old_password . $salt);

$uppercase = preg_match('@[A-Z]@', $confirm_password);
$lowercase = preg_match('@[a-z]@', $confirm_password);
$number    = preg_match('@[0-9]@', $confirm_password);
$specialChars = preg_match('@[^\w]@', $confirm_password);

if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($confirm_password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
} else {
    $get_password_info = mysqli_query($conn, "select * from dev_profile where username='$username'");
    $row = mysqli_fetch_assoc($get_password_info);
    $current_pass = $row['password'];

    if ($current_pass == $old_password_hash) {
        $query = "UPDATE dev_profile SET  password = '$hashed_new_password' WHERE username = '$username'";
        if(mysqli_query($conn, $query)){
            echo "<span style='color: green;'>Password Reset Successfully!</span>";
        }
        else{
            echo 'Something Went Wrong! Please try again.';
        }
    }
    else {
        echo "Old password do not match!";
    }
}
