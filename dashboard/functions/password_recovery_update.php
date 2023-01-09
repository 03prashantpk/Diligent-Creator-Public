<?php
include 'MainFunctions.php';
include 'confidentials.php';
$new_password = $_POST['newpass'];
$hashed_email = $_POST['email'];

$hashed_new_password = sha1($new_password . $salt);

$uppercase = preg_match('@[A-Z]@', $new_password);
$lowercase = preg_match('@[a-z]@', $new_password);
$number = preg_match('@[0-9]@', $new_password);
$specialChars = preg_match('@[^\w]@', $new_password);

if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($new_password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
} else {
    $update_password = "UPDATE dev_profile SET password='$hashed_new_password' WHERE sha1(email)='$hashed_email'";
    
    if(mysqli_query($conn, $update_password)){
        echo "<span style='color: green;'>Password Reset Success!</span>";
    }

}
