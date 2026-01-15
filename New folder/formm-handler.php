<?php
$name= $_post['name'];
$visitor_email= $_post['email'];
$subject= $_post['subject'];
$message= $_post['message'];

$email_from = 'hennuco@gmail.com'

$email_subject = 'New Form Submission'

$email_body =  "User name : $name. \n".

"User Email : $visitor_email.\n".
"Subject : $subject.\n".
"User Message : $visitor_email.\n";


$to = 'hennuco@gmail.com';
$headers = "From : $email_from \r\n";

$headers = "Reply-Tp : $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location : contact.html");

?>