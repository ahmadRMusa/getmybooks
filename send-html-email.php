<?php
$to = 'rajesh.cme123@gmail.com';
$subject = 'Marriage Proposal';
$from = 'getmybooks.co@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$user_email."\r\n".
    'Reply-To: '.$user_email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
<?php

/*
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Sendmail = 'C:\wamp\sendmail\sendmail.exe';
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
//$mail->Port = 465;
//$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
 $mail->Port = 587;
$mail->SMTPSecure = 'tls';


$mail->Username = "getmybooks.co@gmail.com";
$mail->Password = "getmybooks25";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "getmybooks.co@gmail.com";
$mail->FromName = "getmybooks";

$mail->addAddress("rajesh.cme123@gmail.com","rajesh");
$mail->addAddress("seendripu.rajesh@gmail.com","seendripu");

//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");

$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = "Hi,<br /><br />This system is working perfectly.";

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
?>*/