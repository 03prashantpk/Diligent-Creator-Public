<?php
include('includeAll.php');

$user_mode_action = $_POST['user_mode_action'];
$block_status_action = $_POST['block_status_action'];
$user_action_type = $_POST['user_action_type'];
$User_action_id = $_POST['User_action_id'];
$User_username = $_POST['User_username'];

if($user_mode_action == 0){
    $message = "<span style='color: red !important;'>Account type: <b>Normal User </b></span><br>";
}
else{
    $message = "<span style='color: green !important;'>Account Type: <b>Admin Mode</b></span> <br>";
}


if($block_status_action == 0){
    $message2 = "<span style='color: green !important;'>Account Block Status: <b>OK</b></span><br>";
    $profile_status = 1;
}
else{
    $message2 = "<span style='color: red !important;'>Account Block Status: <b>Blocked!</b></span><br>";
    $profile_status = 0;
}

if($user_action_type == 0){
    $message3 = "<span style='color: red !important;'>Member Type: <b>Free User</b></span><br>";
}
else{
    $message3 = "<span style='color: green !important;'>Member Type: <b>Premium user!</b></span><br>";
}

$conn = createConnection($db);$query = "UPDATE dev_profile SET  public = '$profile_status', admin_mode = '$user_mode_action', premium='$user_action_type', block='$block_status_action'  WHERE username = '$User_username' AND id='$User_action_id'";

if(mysqli_query($conn, $query)){
    echo $message . $message2 . $message3;
}
else{
    echo 'Something Went Wrong! Please try again.';
}