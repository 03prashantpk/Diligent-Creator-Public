<?php
include('includeAll.php');

$profile_status = $_POST['profile_status'];
$hiring_mode = $_POST['hiring_mode'];

if($profile_status == 1){
    $message = "<span style='color: green !important;'>Profile Status is Set to Public! <br></span>";
}
else{
    $message = "Profile Status is Set to Hidden! <br>";
}


if($hiring_mode == 1){
    $message2 = "<span style='color: green !important;'>Congratulation! Hiring Mode is On</span>";
}
else{
    $message2 = "Hiring Mode is Off. This means you are not available for work.";
}


$conn = createConnection($db);
$query = "UPDATE dev_profile SET  public = '$profile_status', hire_mode = '$hiring_mode' WHERE username = '$username'";

if(mysqli_query($conn, $query)){
    echo $message . $message2;
}
else{
    echo 'Something Went Wrong! Please try again.';
}