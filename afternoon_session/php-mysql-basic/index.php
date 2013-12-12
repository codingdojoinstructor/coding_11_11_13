<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_SESSION['message']))
		{
			echo '<p style="color:red; border:1px solid black;">'.$_SESSION['message'].'</p>';
		}
	?>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="validate">
		<input type="text" name="email">
		<input type="submit" value="Validate!">
	</form>
</body>
</html>
<?php
$_SESSION = array();
?>