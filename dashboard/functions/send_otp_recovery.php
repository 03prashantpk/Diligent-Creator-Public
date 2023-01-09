<?php
include('connection.inc.php');
include('MainFunctions.php');
include("confidentials.php");
include("../smtp/PHPMailerAutoload.php");
$mail = new PHPMailer;
$email = $_POST['reset_email'];
$otp = rand(1009, 9999);
session_start();
$_SESSION['EMAIL_OTP']=$otp;

$_SESSION['EMAIL_to_reset']=$email;


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        define('SMTP_EMAIL', $email_add);
        define('SMTP_PASSWORD', $email_password);

        // $mail->IsMail();
        // $mail->IsSendmail();

        $mail->isSMTP();
        // $mail->Host = 'smtpout.secureserver.net';       // Set mailer to use SMTP 
        // $mail->Host = 'smtp.gmail.com';      
        $mail->Host = $smtp_address;                   // Specify main and backup SMTP servers 
        $mail->SMTPAuth = true;                         // Enable SMTP authentication 
        $mail->Username = SMTP_EMAIL;                   // SMTP username 
        $mail->Password = SMTP_PASSWORD;                // SMTP password 
        $mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted 
        $mail->Port = $smtp_port;   //587                           // TCP port to connect to 
        //$mail->SMTPDebug = 1;

        // Sender info 
        $mail->setFrom($email_add, 'Resume - Enally');
        $mail->addReplyTo($email_add, 'Resume - Enally');
        // $mail->SetFrom('donotreply@mydomain.com', 'Admin');

        // Add a recipient 
        $mail->addAddress($email);

        // CC or BBC handler
        //$mail->addCC('cc@example.com'); 
        //$mail->addBCC('bcc@example.com'); 

        // Set email format to HTML 
        $mail->isHTML(true);

        // Email Priority
        $mail->Priority = 'High';

        // Mail subject 
        $mail->Subject =  'Resume OTP - Enally.in';

        //$bodyContent = 'Hello';

        // Mail body content 
        $bodyContent = 'Your OTP is: ' . $otp;
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "success";
        }
    // Send email 

} else {
    echo "Please enter a valid email";
}

//echo "success";