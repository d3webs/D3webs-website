




<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("Exception.php");
require("PHPMailer.php");
require("SMTP.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = "st728137@gmail.com";
$mail->Password = "koydum123";

$mail->From = "st728137@gmail.com";
$mail->FromName = "Dynamic Design Dreamer";
$mail->AddAddress("st728137@gmail.com", "Rachel Recipient");
$mail->AddReplyTo("Your Reply-to Address", "Sender's Name");

$mail->isHTML(true);

$mail->Subject = "Hi!";
$mail->Body = "Hi! How are you?";
$mail->WordWrap = 50;

if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
exit;
} else {
echo 'Message has been sent.';
}
/*if “email” variable is filled out, send email

  if (isset($_REQUEST['email']))  {

  

  //Email information

  $admin_email = 'st728137@gmail.com';

  $email = $_REQUEST['email'];

  $subject = $_REQUEST['subject'];

  $comment = $_REQUEST['comment'];

  

  //send email

  mail($admin_email, '$subject', $comment, “From:” . $email);

  

  //Email response

  echo 'Thank you for contacting us!';

  }

  

  //if “email” variable is not filled out, display the form

  else  {
	  
	  'Try again';
  }

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gfg.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'st728137@gmail.com';				
	$mail->Password = 'koydum123';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('from@gfg.com', 'Name');		
	$mail->addAddress('receiver1@gfg.com');
	$mail->addAddress('receiver2@gfg.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



/*con=mysqli_connect('localhost','root');
if($con){
	//echo"Connection established";
}
else{
	echo" connection not established";
}
mysqli_select_db($con,'d3webs');

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

$query="insert into d3contact(Name,Email,Phone,Message)values('$name','$email','$number','$message')";

mysqli_query($con,$query);*/



?>