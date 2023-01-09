<?php
include('includeAll.php');

$message_notification_setting = $_POST['message_notify'];
$visit_notification_setting = $_POST['visit_notify'];

if($message_notification_setting == 1){
    $message = "<span style='color: green !important;'>New Message Notification has been activated! <br></span>";
}
else{
    $message = "New Message Notification has been deactivated! <br>";
}


if($visit_notification_setting == 1){
    $message2 = "<span style='color: green !important;'> Profile Visit Notification has been activated!</span>";
}
else{
    $message2 = " Profile Visit Notification has been deactivated!";
}


$conn = createConnection($db);
$query = "UPDATE dev_profile SET  message_notification = '$message_notification_setting', visit_notification = '$visit_notification_setting' WHERE username = '$username'";

if(mysqli_query($conn, $query)){
    echo $message . $message2;
}
else{
    echo 'Something Went Wrong! Please try again.';
}