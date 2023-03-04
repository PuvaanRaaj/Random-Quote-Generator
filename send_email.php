<?php
// Replace these values with your own Mailtrap credentials
$smtp_username = 'YOUR_SMTP_USERNAME';
$smtp_password = 'YOUR_SMTP_PASSWORD';
$smtp_server = 'smtp.mailtrap.io';
$smtp_port = 2525;

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create message headers
$headers = array(
	'From' => $email,
	'To' => 'YOUR_EMAIL_ADDRESS',
	'Subject' => $subject,
	'Reply-To' => $email,
	'MIME-Version' => '1.0',
	'Content-Type' => 'text/html; charset=utf-8'
);

// Create message body
$body = "
	<p><strong>Name:</strong> $name</p>
	<p><strong>Email:</strong> $email</p>
	<p><strong>Message:</strong></p>
	<p>$message</p>
";

// Send email using Mailtrap SMTP
$transport = new Swift_SmtpTransport($smtp_server, $smtp_port, 'tls');
$transport->setUsername($smtp_username);
$transport->setPassword($smtp_password);

$mailer = new Swift_Mailer($transport);
$message = new Swift_Message();
$message->setHeaders($headers);
$message->setBody($body);

$result = $mailer->send($message);

if ($result) {
	// Email sent successfully
	echo "Thank you for contacting us! We will get back to you shortly.";
} else {
	// Email failed to send
	echo "Sorry, there was an error sending your message. Please try again later.";
}
?>
