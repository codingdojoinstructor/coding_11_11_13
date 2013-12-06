<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Tester</title>
</head>
<body>
	<p style="color:<?=(isset($_SESSION['error']) ? 'red' : 'green') ?>"><?php 
			if(isset($_SESSION['message']))
			{
				echo $_SESSION['message'];
			} 
		?>
	</p>
	<form action="process.php" method="post">
		<input type="text" name="music" placeholder="music">
		<input type="submit" value="Send it">
	</form>
</body>
</html>
<?php
unset($_SESSION['message'], $_SESSION['error']);
?>