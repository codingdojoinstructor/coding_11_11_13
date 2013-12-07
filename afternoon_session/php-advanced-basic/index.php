<?php
session_start();
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Birthstones.. WHY??</title>
</head>
<body>
	<form action="process.php" method="post">
		<select name="month">
			<?php foreach ($months as $month)
			{
			?>
			<option value="<?=$month ?>"><?=$month ?></option>
			<?php	
			}
			?>
		</select>
		<input type="submit" value="Get Info">
	</form>
	<div>
		<?php
		if(isset($_SESSION['info']))
		{
			$info = $_SESSION['info'];
			echo '<h2>'.$info['month'].'</h2>';
			echo '<p>Quarter: '.$info['quarter'].'</p>';
			echo '<p>Season: '.$info['season'].'</p>';
			echo '<p>Birthstone??:'.$info['birthstone'].'</p>';
		}
		?>
	</div>
</body>
</html>
<?php
$_SESSION = array();
?>