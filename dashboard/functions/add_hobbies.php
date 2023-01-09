<?php
include("includeAll.php");
$userName = $_SESSION['username'];
$USER_ID = $_SESSION['USER_ID'];

$hobbie_no = $_POST['hobbie1'];

/// Hobbie 1
if ($hobbie_no == "hobbie1") {
    //echo "Hobbies 1 is working...";
    $type = $_POST['hobbie1'];
    $hobby_name = $_POST['hobbie_1'];
    $hobby_type = $_POST['hobbie_1_type']; // hobbies or interest
    $hobby_desc = $_POST['hobbie_1_desc'];

    if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_1'])) {
        echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby name";
    } else {
        if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_1_desc'])) {
            echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby description";
        } else {
            $check_type = mysqli_query($conn, "SELECT * From dev_hobbies WHERE username='$userName' AND type='$type'");

            if (mysqli_num_rows($check_type)) {
                $hobby1 = "UPDATE dev_hobbies SET hobby_name='$hobby_name', hobby_desc='$hobby_desc', hobby_type='$hobby_type' WHERE  username='$userName' AND type='$type'";
                if (mysqli_query($conn, $hobby1)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>";
                }
            } else {
                $hobby1 = "INSERT INTO dev_hobbies (user_id,username,type,hobby_name,hobby_desc,hobby_type) VALUES ('$USER_ID','$userName', '$type','$hobby_name', '$hobby_desc', '$hobby_type' )";
                if (mysqli_query($conn, $hobby1)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>!";
                } else {
                    echo "Something went wrong. Please try again.";
                }
            }
        }
    }
}


/// Hobbie 2
if ($hobbie_no == "hobbie2") {
    //echo "Hobbies 2 is working...";
    $type = $_POST['hobbie1'];
    $hobby_name = $_POST['hobbie_2'];
    $hobby_type = $_POST['hobbie_2_type']; // hobbies or interest
    $hobby_desc = $_POST['hobbie_2_desc'];

    if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_2'])) {
        echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby name";
    } else {
        if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_2_desc'])) {
            echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby description";
        } else {
            $check_type = mysqli_query($conn, "SELECT * From dev_hobbies WHERE username='$userName' AND type='$type'");

            if (mysqli_num_rows($check_type)) {
                $hobby2 = "UPDATE dev_hobbies SET hobby_name='$hobby_name', hobby_desc='$hobby_desc', hobby_type='$hobby_type' WHERE  username='$userName' AND type='$type'";
                if (mysqli_query($conn, $hobby2)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>";
                }
            } else {
                $hobby2 = "INSERT INTO dev_hobbies (user_id,username,type,hobby_name,hobby_desc,hobby_type) VALUES ('$USER_ID','$userName', '$type','$hobby_name', '$hobby_desc', '$hobby_type' )";
                if (mysqli_query($conn, $hobby2)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>!";
                } else {
                    echo "Something went wrong. Please try again.";
                }
            }
        }
    }
}


/// Hobbie 3
if ($hobbie_no == "hobbie3") {
    //echo "Hobbies 3 is working...";
    $type = $_POST['hobbie1'];
    $hobby_name = $_POST['hobbie_3'];
    $hobby_type = $_POST['hobbie_3_type']; // hobbies or interest
    $hobby_desc = $_POST['hobbie_3_desc'];

    if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_3'])) {
        echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby name";
    } else {
        if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_3_desc'])) {
            echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby description";
        } else {
            $check_type = mysqli_query($conn, "SELECT * From dev_hobbies WHERE username='$userName' AND type='$type'");

            if (mysqli_num_rows($check_type)) {
                $hobby3 = "UPDATE dev_hobbies SET hobby_name='$hobby_name', hobby_desc='$hobby_desc', hobby_type='$hobby_type' WHERE  username='$userName' AND type='$type'";
                if (mysqli_query($conn, $hobby3)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>";
                }
            } else {
                $hobby3 = "INSERT INTO dev_hobbies (user_id,username,type,hobby_name,hobby_desc,hobby_type) VALUES ('$USER_ID','$userName', '$type','$hobby_name', '$hobby_desc', '$hobby_type' )";
                if (mysqli_query($conn, $hobby3)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>!";
                } else {
                    echo "Something went wrong. Please try again.";
                }
            }
        }
    }
}


/// hobbie 4
if ($hobbie_no == "hobbie4") {
    //echo "Hobbies 4 is working...";
    $type = $_POST['hobbie1'];
    $hobby_name = $_POST['hobbie_4'];
    $hobby_type = $_POST['hobbie_4_type']; // hobbies or interest
    $hobby_desc = $_POST['hobbie_4_desc'];

    if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_4'])) {
        echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby name";
    } else {
        if (preg_match('/[#$%^&*()+=\\[\]\';\/{}|":<>?~\\\\]/', $_POST['hobbie_4_desc'])) {
            echo "/\/{}[]-;:*^$&#| etc are not allowed in hobby description";
        } else {
            $check_type = mysqli_query($conn, "SELECT * From dev_hobbies WHERE username='$userName' AND type='$type'");

            if (mysqli_num_rows($check_type)) {
                $hobby4 = "UPDATE dev_hobbies SET hobby_name='$hobby_name', hobby_desc='$hobby_desc', hobby_type='$hobby_type' WHERE  username='$userName' AND type='$type'";
                if (mysqli_query($conn, $hobby4)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>";
                }
            } else {
                $hobby4 = "INSERT INTO dev_hobbies (user_id,username,type,hobby_name,hobby_desc,hobby_type) VALUES ('$USER_ID','$userName', '$type','$hobby_name', '$hobby_desc', '$hobby_type' )";
                if (mysqli_query($conn, $hobby4)) {
                    echo "<span style='color: green;''> Updated Successfully </sapn>!";
                } else {
                    echo "Something went wrong. Please try again.";
                }
            }
        }
    }
}
