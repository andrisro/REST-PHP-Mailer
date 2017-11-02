<?php
//(C)opyright 2017 by Andris Roling
//GIT https://github.com/andrisro/REST-PHP-Mailer

//Version: 1.0

//Predefined Variables
$to = "yourfirstname.yourlastname@example.de";

// Empty variables, will be filled by script
$from = ""; 
$subject = ""; 
$message = ""; 


//Script


//Check GET Params for Mail
if(checkParams()) {
	//Set Variables
	$from = urldecode($_GET["from"]);
	$subject = urldecode($_GET["subject"]);
	$message = urldecode($_GET["message"]);
	

	//Execute Mail
	$headers = "From: ".addslashes($from)."\r\n";

	if (mail($to, $subject, $message, $headers)) {
		echo(json_encode("mail_send"));
	} else {
		echo(json_encode("sending_failed"));
	}

}
 
	 
function checkParams() {
	if(isset($_GET["from"]) && isset($_GET["subject"]) && isset($_GET["message"])) {		
		return true;
	} else {
		die(json_encode("wrong_params"));
	}
}
	
 ?>