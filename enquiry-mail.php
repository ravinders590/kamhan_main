<?php
if(isset($_REQUEST['submit_form']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$query=$_REQUEST['query'];
	$to = 'm.ratneshwar@gmail.com';
	$subject = 'Enquiry Form';
	$message = "Name :- $name \n\n  Email :- $email  \n\n Contact No. :- $mobile \n\n Message :- $query ";
	$headers = "From: $email" . "\r\n" .
	"Reply-To: $email" . "\r\n" .
	'X-Mailer: PHP/' . phpversion();	
	@mail($to, $subject, $message, $headers);
	header("Location: contact_us.php?send=succ");
}	
?>