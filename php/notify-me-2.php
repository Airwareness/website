<?php

header('content-type: application/json');

	$o = new stdClass();
	$o->status = 'success';
	echo json_encode($o);

	$email_to = "info@airwareness.in"; // Replace by your email address
	$email = $_POST["email"];
	$text = "Congratulations ! A new Airwareness visitor wants to be added to the newsletter: $email";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
	$headers .= "From:<$email>\n";

	mail($email_to, "Message", $text, $headers);

?>
