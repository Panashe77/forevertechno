<?php  
if( isset($_POST['submit']) ) {
//getting user data
$name = $_POST['firstName'];
$password = $_POST['lastName'];
$email = $_POST['email'];

 
//Recipient email, Replace with your email Address
$mailFrom = ['hove@hotmail.com'];
 
//email subject
$subject = ['Email sent to '] $name;
 
//email message body
//$htmlContent = <h2> Email response sent </h2>
<p> <b>Client Name: </b> ".name . " " . $name . "</p>


 
//header for sender info
$headers = "To: " .$name . "<". $nmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailFrom, $subject, $htmlContent, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>