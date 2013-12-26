<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation</title>
</head>
<body>
	<h1>Register</h1>
	<?php
	if(isset($_SESSION['error']))
	{
		foreach($_SESSION['error'] as $name => $message)
		{
			?>
			<p><?=$message ?></p>
			<?php
		}
	}
	elseif(isset($_SESSION['success_message']))
	{
		?>
		<p><?=$_SESSION['success_message'] ?></p>
		<?php
	}
	?>
	<form action="process_forms.php" method="post">
		<input type="hidden" name="action" value="register">
		<input type="text" name="first_name" placeholder="Enter First Name">
		<input type="text" name="last_name" placeholder="Enter Last Name">
		<input type="text" name="email" placeholder="Enter Email">
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="confirm_password" placeholder="Confirm Password">
		<input type="submit" value="Register">
	</form>
	<p>Already a member? <a href="login.php">Login</a></p>
</body>
</html>
<?php
$_SESSION = array();
?>