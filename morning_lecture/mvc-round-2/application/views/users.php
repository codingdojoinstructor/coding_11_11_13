<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
</head>
<body>
	<?php 
		foreach($users as $user) 
		{
			echo '<p>'.$user->first_name.'</p>';
			echo '<p>'.$user->last_name.'</p>';
			echo '<p>'.$user->email.'</p>';
		}
	?>
</body>
</html>