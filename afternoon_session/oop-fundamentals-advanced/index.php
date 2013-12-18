<?php
include_once('HTML_Helper.php');

$html_helper = new HTML_Helper();
$table_array = array(
					array('first_name' => 'James', 'last_name' => 'Farris', 'nickname' => 'Jimbo'),
					array('first_name' => 'Randall', 'last_name' => 'Frisk', 'nickname' => 'Sensei'),
					array('first_name' => 'Robin', 'last_name' => 'Spears', 'nickname' => 'The Girl Wonder'),
					array('first_name' => 'Vin', 'last_name' => 'Halbwachs', 'nickname' => 'iLose'),
				);

$states = array('CA', 'NV', 'GA', 'DE', 'NY', 'FL');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Helper Example</title>
</head>
<body>
	<?php echo $html_helper->print_table($table_array); ?>
	<form action="process.php" method="post">
		<?php echo $html_helper->print_select($states, 'state'); ?>
		<input type="submit" value="Post me">
	</form>
</body>
</html>