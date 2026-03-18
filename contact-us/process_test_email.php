<?php
session_start();
require_once "db.php";



if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $user_email = $_POST['user_email'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    

    
    $message = "

";

 $message .= $_POST['message'];
 
 $message .= "        ";

$to_email = $email;
$subject = $subject;
$body = $message;
$from = $user_email;
$fromName = $name; 



// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: support@nockworldlogistics.com' . "\r\n"; 
$headers .= 'Bcc: support@nockworldlogistics.com' . "\r\n"; 

 
if (mail($to_email, $subject, $body, $headers)) {
    echo '<script type="text/javascript"> alert("Email successfully sent to ...")</script>';
} else {
    echo '<script type="text/javascript"> alert("Email sending failed ...")</script>';
}
}
?>



