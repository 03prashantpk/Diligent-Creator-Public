<?php
include('includeAll.php');

$skill = $_POST['skill'];
$skill_level = $_POST['skill_level'];
$username = $_SESSION['username'];
$date = date("Y-M-d");

if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $skill)) {
    echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed on Skill!";
} else {
    $sql_query = "SELECT * FROM dev_profile WHERE username='$username'";
    $personaldata = mysqli_query($conn, $sql_query);

    while ($row = mysqli_fetch_assoc($personaldata)) {
        $user_id = $row['id'];
    }

    $insert_data = "INSERT INTO add_skills (user_id, username, skill_name, skill_level, added_on) VALUES ('$user_id','$username', '$skill', '$skill_level', '$date' )";
    if (mysqli_query($conn, $insert_data)) {
        echo "success";
    } else {
        echo mysqli_error($conn);
    }
}

