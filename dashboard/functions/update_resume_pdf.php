<?php
//error_reporting(0);
include('includeAll.php');
$username = $_SESSION['username'];

$sql_query_fatch_user_data = "SELECT * FROM dev_profile WHERE username='$username'";
$fatch_userinfo = mysqli_query($conn, $sql_query_fatch_user_data);

while ($row = mysqli_fetch_assoc($fatch_userinfo)) {
    $user_id = $row['id'];
}

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is

$file = new SplFileInfo($fileName);
$extension  = $file->getExtension();

$time = date("Y-m-d");

$fileName = round(microtime(true) * 1000);
$fileName = $fileName . "enally-in-Developer-resume-file." . $extension;

$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    //echo "ERROR: Please browse for a file before clicking the upload button.";
    echo 'Some error occurs, Please try again!';
    exit();
} else {
    if ($extension == 'pdf') {
        if (move_uploaded_file($fileTmpLoc, "../user_resume/$fileName")) {
            //echo "$fileName <br> <br>upload is complete";
            $message = '<span style="color:green;">Uploaded Successfully!</span>';

            $conn = createConnection($db);
            $query = "UPDATE dev_profile SET user_resume  = '$fileName' WHERE username = '$username'";
            $query_two = "INSERT INTO user_uploads (user_id, username, type, link, added_on) VALUES ('$user_id', '$username', 'resume', '$fileName', '$time')";

            if (mysqli_query($conn, $query_two)) {
            } else {
                echo "Uploaded but, fail to update on User Upload.<br>";
            }

            if (mysqli_query($conn, $query)) {
                echo $message;
            } else {
                echo 'Something Went Wrong! Please try again.';
            }
        } else {
            //echo "move_uploaded_file function failed";
            echo 'Error Occurs, Please try again!';
        }
    } else {
        echo '<strong>Failed!</strong> Only PDF format are allowed.</span>';
    }
}
