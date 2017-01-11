<?php
	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
		$message = $_POST['message'];

		$from = 'gVLQ Contact Form';
		$to = 'vlaicu.gabriel11@yahoo.com';
		$subject = 'Message from gVLQ';

		$body ="From:  E-Mail: $email\n Message:\n $message";

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
// If there are no errors, send the email
if (!$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
