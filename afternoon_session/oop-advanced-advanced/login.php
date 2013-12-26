<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<?php
	if(isset($_SESSION['error']))
	{
		?>
		<p><?= $_SESSION['error']['message'] ?></p>
		<?php
	}

	?>
	<form action="process_forms.php" method="post">
		<input type="hidden" name="action" value="login">
		<input type="text" name="email" placeholder="Enter Email">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="Login">
	</form>
	<p>Not a member? <a href="index.php">Register</a></p>
</body>
</html>