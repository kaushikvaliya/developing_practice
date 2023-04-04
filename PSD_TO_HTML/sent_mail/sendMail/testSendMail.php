<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
// if (isset($_POST['sendmail'])) {
    $bodyContent = "<h1>Hello!,</h1>";
    $bodyContent .= '<p>'.$_REQUEST['user_name'].' Trying to connect with you for '.$_REQUEST['designation'].' inquiry</p>';
    $bodyContent .= '<p>Name : '.$_REQUEST['user_name'].'</p>';
    $bodyContent .= '<p>Email : '.$_REQUEST['email'].'</p>';
    $bodyContent .= '<p>Contact Number : '.$_REQUEST['mobile_number'].'</p>';
    $bodyContent .= '<p>Message : '.$_REQUEST['message'].'</p>';
    $bodyContent .= '<p>Company Name : '.$_REQUEST['company_name'].'</p>';
    $bodyContent .= '<p>Address : '.$_REQUEST['address'].'</p>';
    
    
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'your@gmail.com';                     //SMTP username
    $mail->Password   = 'akhssjdbhdb';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('your@gmail.com', 'Name');
    $mail->addAddress("your@gmail.com");   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Body    = $bodyContent;
    $mail->Subject = 'Email from  name ';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }


   

?>


