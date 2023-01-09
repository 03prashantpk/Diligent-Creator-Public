<?php
include('includeAll.php');
$started_on = $_POST['started_on'];
$job_name = $_POST['job_name'];
$job_location = $_POST['job_location'];
$job_description = $_POST['job_description'];
$ended_on = $_POST['ended_on'];
$job_type = $_POST['job_type'];
$username = $_SESSION['username'];
$date = date("Y-M-d");


if (preg_match('/[#$%^&*+=\\[\]\';\/{}|":<>?~\\\\]/', $job_description)) {
    echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed on Description!";
} else {
    if (preg_match('/[#$%^&*()+=\\[\]\';,\/{}|":<>?~\\\\]/', $job_name)) {
        echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed on Job Name!";
    } else {
        $sql_query = "SELECT * FROM dev_profile WHERE username='$username'";
        $personaldata = mysqli_query($conn, $sql_query);

        while ($row = mysqli_fetch_assoc($personaldata)) {
            $user_id = $row['id'];
        }

        $insert_data = "INSERT INTO add_experience (user_id, username, started_on, job_name, job_location, job_description, added_on,ended_on,type) VALUES ('$user_id','$username', '$started_on', '$job_name', '$job_location', '$job_description', '$date','$ended_on', '$job_type' )";
        if (mysqli_query($conn, $insert_data)) {
            echo "success";
        } else {
            echo mysqli_error($conn);
        }
    }
}
