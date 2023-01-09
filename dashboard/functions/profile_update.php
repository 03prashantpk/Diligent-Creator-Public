<?php
include('includeAll.php');


// Input values as variables using POST
@$id = $_POST['id'];
@$email_exist = $_SESSION['email'];


$username = $_SESSION['username'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$language = $_POST['language'];
$master_skill = $_POST['master_skill'];
$year_of_experience = $_POST['year_of_experience'];
$project_completed = $_POST['project_completed'];
$happy_customers = $_POST['happy_customers'];
$award = $_POST['award'];
$address = $_POST['address'];
$about = $_POST['about'];
$theme = $_POST['theme'];
$country = $_POST['country'];
$city = $_POST['city'];
$pcode = $_POST['pcode'];
$education = $_POST['education'];
$currentstatus = $_POST['currentstatus'];


$about_count = str_word_count($about);

function validate_phone_number($phone)
{
    // Allow +, - and . in phone number
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);

    // Remove "-" from number
    $phone_to_check = str_replace("-", "", $filtered_phone_number);
    //echo $phone_to_check;

    if (strlen($phone_to_check) <= 10) {
        return false;
    } else {
        return true;
    }
}


if ($about_count  > 18) {
    echo "About must be less than 18 Words";
} else {

    if ($email == $email_exist) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //echo $name . $email . $fname . $lname . $dob . $phone . $language . $master_skill . $year_of_experience . $project_completed . $happy_customers . $award . $address . $about;
            if ($year_of_experience < 90) {
                if (validate_phone_number($phone) == true) {
                    if ($project_completed  < 1000) {
                        if ($happy_customers  < 1000) {
                            if ($award  < 500) {
                                // main Sql Command here
                                // Inserting data

                                $check_username = mysqli_query($conn, "SELECT * From dev_profile WHERE username='$username'");

                                if (mysqli_num_rows($check_username)) {
                                    //echo "Username already Exist";
                                    $query = "UPDATE  dev_profile  SET 
                                            username ='$username', email ='$email', fname ='$fname',
                                            lname = '$lname', dob = '$dob', phone ='$phone', language = '$language',  master_skill ='$master_skill',
                                            year_of_experience = '$year_of_experience', project_completed = '$project_completed',  happy_customers = '$happy_customers',
                                            award ='$award',  address ='$address', about  = '$about', theme = '$theme' , country = '$country', city='$city', pcode='$pcode', education='$education', currentstatus='$currentstatus'
                                        WHERE username='$username'
                                    ";

                                    if (mysqli_query($conn, $query)) {
                                        echo "success";
                                    } else {
                                        echo mysqli_error($conn);
                                    }
                                } else {
                                    $query = "INSERT INTO  dev_profile 
                                    (
                                        username, email, fname, lname, dob, phone, language, master_skill,
                                        year_of_experience, project_completed, happy_customers, award, address, about 
                                    )
                                    
                                    VALUES
                                    (
                                        '$username', '$email', '$fname', '$lname', '$dob',
                                        '$phone_no', '$language', '$master_skill', '$year_of_experience',
                                        '$project_completed', '$happy_customers', '$award', '$address', '$about'

                                    )
                                    ";

                                    // if (mysqli_query($conn, $query)) {
                                    //     echo "<span style='font-size: 13px;color: green;'>Data Inserted Successfully</span>";
                                    // } else {
                                    //     echo mysqli_error($conn);
                                    // }
                                }
                                // inserting data ends

                            } else {
                                echo "Please Confirm 'Award Winning'!";
                            }
                        } else {
                            echo "Please Confirm 'Happy Customer'!";
                        }
                    } else {
                        echo "Please Confirm 'Projects Completed'!";
                    }
                } else {
                    echo "Invalid phone number. Formate like: +91-444-444-5555";
                }
            } else {
                echo "Please Enter a valid Year of Experience!";
            }
        } else {
            echo ("$email is not a valid email address");
        }
    } else {
        echo "You cannot use different Email!";
    }
}
