<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gold Rush</title>
</head>
<body>
	<p>Your Gold: <?=(isset($_SESSION['gold_total']) ? $_SESSION['gold_total'] : 0 ) ?></p>
	<h3>Farm</h3>
	<form action="process.php" method="post">
		<input type="hidden" name="low" value="10">
		<input type="hidden" name="high" value="20">
		<input type="hidden" name="action" value="farm">
		<input type="submit" value="Find Gold">
	</form>
	<h3>Cave</h3>
	<form action="process.php" method="post">
		<input type="hidden" name="low" value="5">
		<input type="hidden" name="high" value="10">
		<input type="hidden" name="action" value="cave">
		<input type="submit" value="Find Gold">
	</form>
	<h3>House</h3>
	<form action="process.php" method="post">
		<input type="hidden" name="low" value="2">
		<input type="hidden" name="high" value="5">
		<input type="hidden" name="action" value="house">
		<input type="submit" value="Find Gold">
	</form>
	<h3>Casino</h3>
	<form action="process.php" method="post">
		<input type="hidden" name="low" value="-50">
		<input type="hidden" name="high" value="50">
		<input type="hidden" name="action" value="casino">
		<input type="submit" value="Find Gold">
	</form>
	<p>Activities:</p>
	<div>
		<?php
			if(isset($_SESSION['activities']))
			{
				foreach($_SESSION['activities'] as $activity)
				{
					echo '<p style="color:'.$activity['status'].'">'.$activity['message'].'</p>';
				}
			}
		?>
	</div>
</body>
</html>
<?php
unset($_SESSION['lost']);
?>