<?php
include('connection.inc.php');
include('MainFunctions.php');
include("confidentials.php");

include("../smtp/PHPMailerAutoload.php");
$mail = new PHPMailer;

$reset_email = $_POST['reset_email'];
//echo $reset_email;

if (filter_var($reset_email, FILTER_VALIDATE_EMAIL)) {
    $check_user = mysqli_query($conn, "SELECT * From dev_profile WHERE email='$reset_email'");

    if (mysqli_num_rows($check_user)) {
        while ($row=mysqli_fetch_assoc($check_user)) {
            $email = sha1($row['email']);
            $password = sha1($row['password']);
        }

        $reset_link = "<a style='color: green; text-decoration: none;' href='http://localhost/Developer-Dashboard/dashboard/reset_pass.php?key=".$email."&reset=".$password."'>Click here to reset your password</a>";
        
        define('SMTP_EMAIL', $email_add);
        define('SMTP_PASSWORD', $email_password);

        $mail->isSMTP();  
        $mail->Host = $smtp_address;                   // Specify main and backup SMTP servers 
        $mail->SMTPAuth = true;                         // Enable SMTP authentication 
        $mail->Username = SMTP_EMAIL;                   // SMTP username 
        $mail->Password = SMTP_PASSWORD;                // SMTP password 
        $mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted 
        $mail->Port = $smtp_port;                      // TCP port to connect to 
        $mail->SMTPDebug = 1;

        // Sender info 
        $mail->setFrom($email_add, 'Reset Password - Diligent Creator');
        $mail->addReplyTo($email_add, 'Reset Password  - Diligent Creator');

        // Add a recipient 
        $mail->addAddress($reset_email);

        // Set email format to HTML 
        $mail->isHTML(true);

        // Email Priority
        $mail->Priority = 'High';

        // Mail subject 
        $mail->Subject =  'Your Reset Password Link - Diligent Creator';

        //$bodyContent = 'Hello';

        // Mail body content 
        $bodyContent = 'Sorry this happened to you but this should not take more than 60s! <br><span style="color: green; font-weight: 600; font-size: 22px;">' . $reset_link . "</span> <br><br> If you have not requested Password Recovery. You can ignore this email. <br> <br> <strong>Do not share/forward this email.</strong>";
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "<span style='color: green'>Password Reset link has been sent!</span>";
        }
    
    }

    else{
        echo "Email not registered!";
    }

}
else {
    echo "Please enter a valid Email.";
}
