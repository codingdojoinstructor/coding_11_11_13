<?php 
if($logged_in)
{
	echo "You're logged in!";
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User</title>
</head>
<body>
	<?php 
			echo '<p>'.$user->first_name.'</p>';
			echo '<p>'.$user->last_name.'</p>';
			echo '<p>'.$user->email.'</p>';
	?>
</body>
</html>