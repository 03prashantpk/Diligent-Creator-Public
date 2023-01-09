<?php
/*
include("functions/includeAll.php");

$username = $_REQUEST['username'];

if ($username == "") {
?>
    <script>
        window.location.href = "../"
    </script>
<?php
}

$check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE username='$username'");

if (mysqli_num_rows($check_username)) {

    $sql_query = "SELECT * FROM dev_profile WHERE username='$username'";
    $personaldata = mysqli_query($conn, $sql_query);

    while ($row = mysqli_fetch_assoc($personaldata)) {
        $user_id = $row['id'];
        $email = $row['email'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $dob = $row['dob'];
        $phone = $row['phone'];
        $language = $row['language'];
        $master_skill = $row['master_skill'];
        $year_of_experience = $row['year_of_experience'];
        $project_completed = $row['project_completed'];
        $happy_customers = $row['happy_customers'];
        $award = $row['award'];
        $address = $row['address'];
        $about = $row['about'];
        $theme = $row['theme'];
        $message_notification = $row['message_notification'];
        $visit_notification = $row['visit_notification'];
        $profile_image = $row['profile_image'];
    }

    echo $fname . " " . $lname;
    echo "<br>" . $user_id;
} else {
    echo "Username does't Exist";
} */
