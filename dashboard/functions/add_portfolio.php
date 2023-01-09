<?php
include("includeAll.php");

$project_name = $_POST['project_name'];
$project_category = $_POST['project_category'];
$project_url = $_POST['project_url'];

$userName = $_SESSION['username'];
$USER_ID = $_SESSION['USER_ID'];
$date = date("Y-M-d");

if (filter_var($project_url, FILTER_VALIDATE_URL)) {
    $check_url_in_database = mysqli_query($conn,"SELECT * FROM dev_projects WHERE username='$username' AND project_url='$project_url'");

    if (mysqli_num_rows($check_url_in_database)) {
        echo "This url already exist on your Portfolio!";
    } else {
        if (preg_match('/[#$%^&*()$+=\\[\]\';,\/{}|":<>?~\\\\]/', $project_name)) {
            echo "/[\'^£$%&*()}{@#~?><>,|=_+¬]/ - are not allowed on Project Name (Try without special Char)!";
        } else {
            $insert_data = "INSERT INTO dev_projects (user_id, username, project_name, project_category, project_url, added_on) VALUES ('$USER_ID','$userName', '$project_name', '$project_category', '$project_url', '$date' )";
            if (mysqli_query($conn, $insert_data)) {
                echo "<span style='color: green;'>Portfolio Updated Successfully!</span>";
            } else {
                echo mysqli_error($conn) . "Please Contact admin or report this <a href='support'>here</a>";
            }
        }
    }
} else {
    echo "Please enter a valid URL";
}
