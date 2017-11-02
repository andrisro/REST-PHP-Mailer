<?php
//(C)opyright 2017 by Andris Roling
//GIT https://github.com/andrisro/REST-PHP-Mailer

//Version: 1.1

//Predefined Variables
$to = "yourfirstname.yourlastname@example.com";

// Empty variables, will be filled by script
$from = ""; 
$subject = ""; 
$message = ""; 

/*
	Check Variables, Would Prefer POST-Method, because it is more secure if you communicate with HTTPS

	You can call the Script by POST and GET Method by default.
*/
if(isset($_POST["from"]) && isset($_POST["subject"]) && $_POST["message"]) {
	//Set Variables
	$from = urldecode($_POST["from"]);
	$subject = urldecode($_POST["subject"]);
	$message = urldecode($_POST["message"]);

} else if(isset($_GET["from"]) && isset($_GET["subject"]) && $_GET["message"]) {
	//Set Variables
	$from = urldecode($_GET["from"]);
	$subject = urldecode($_GET["subject"]);
	$message = urldecode($_GET["message"]);
} else {
	die(json_encode("wrong_params"));
}

//Execute Mail
$headers = "From: ".addslashes($from)."\r\n";

if (mail($to, $subject, $message, $headers)) {
	echo(json_encode("mail_send"));
} else {
	echo(json_encode("sending_failed"));
}


 ?>