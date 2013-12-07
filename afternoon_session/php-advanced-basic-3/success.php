<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success!</title>
</head>
<body>
<?php
	if(isset($_SESSION['message']))
	{
		echo '<p style="color:green; border:1px solid black;">'.$_SESSION['message'].'</p>';	
	}
?>	
</body>
</html>
