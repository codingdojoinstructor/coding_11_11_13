<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New User</title>
</head>
<body>
	<?php if(isset($errors)) { echo $errors; }?>
	<form action="<?php echo base_url('process/register'); ?>" method="post">
		<input type="text" name="first_name" placeholder="First Name">
		<input type="text" name="last_name" placeholder="Last Name">
		<input type="text" name="email" placeholder="Email">
		<input type="submit" value="Submit">
	</form>
</body>
</html>