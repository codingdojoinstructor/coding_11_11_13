<?php
session_start();
require_once('conn.php');
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
	echo '<h3>Email addresses Entered:</h3>';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_assoc($result))
	{
		echo '<p>'.$row['email'].' '.$row['created_at'].'</p>';
	}
?>	
</body>
</html>
