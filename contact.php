<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="send_email.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject" required><br>

		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
