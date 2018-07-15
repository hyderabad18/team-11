<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="email" name="mail" placeholder="Enter email to refer">
	<input type="name" name="name" placeholder="enter the name">
	<?php
$to      = $_POST['mail'];
$name=$_POST['name'];
$subject = 'Referal to register into Youth4jobs;
$message = 'Hello' .$name. 'your friend has refered you to register at www.youth4jobs.com'';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
</body>
</html>