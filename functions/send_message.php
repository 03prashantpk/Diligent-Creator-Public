<?php
include('../dashboard/functions/MainFunctions.php');

$userName = $_POST['userName'];
$user_id = $_POST['userID'];

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date("Y-M-d");

$message_length = str_word_count($message);
$max_subject =  str_word_count($subject);
$max_name = str_word_count($name);

if ($max_name > 4) {
    echo "You name must be less than 4 words. You can user First, Middle and Last name";
} else {
    if ($max_subject > 10) {
        echo "You can only write 10 word on Subject";
    } else {

        if ($message_length > 200) {
            echo "You can only Write 200 words message!";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $name)) {
                    echo "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/ - are not allowed on Name, Please write Plane Text!";
                } else {
                    if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $subject)) {
                        echo "/[\'^£$%&*()}{@#~?><>,|=_+¬]/ - are not allowed on Subject, Please write Plane Text!";
                    } else {
                        if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>~\\\\]/', $message)) {
                            echo "/[\'^£$%&*()}{@#~?><>,|=_+¬]/ - are not allowed on Message, Please write Plane Text!";
                        } else {
                            $query = "INSERT INTO dev_messages (user_id, username, sender_name, sender_email, sender_subject,sender_message, received_date) VALUES ('$user_id', '$userName', '$name', '$email', '$subject', '$message', '$date')";
                            if (mysqli_query($conn, $query)) {
                                echo "<span style='color: green;'>Message has been send successfully!</span>";
                            } else {
                                echo mysqli_error($conn);
                            }
                        }
                    }
                }
            } else {
                echo "Please enter a correct email address.";
            }
        }
    }
}
