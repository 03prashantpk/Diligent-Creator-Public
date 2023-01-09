<?php 

include('includeAll.php');


$message_id = $_POST['message_id'];
@$email_exist = $_SESSION['username'];

$query = "UPDATE dev_messages SET hide_status=1, read_status=1 WHERE id='$message_id' AND username='$email_exist' ";

if (mysqli_query($conn, $query)) {
    echo "<span style='color: green;'>Archived Successfully!</span>";
} else {
    echo mysqli_error($conn);
}