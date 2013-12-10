<?php
session_start();

$errors = array();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fibbionochchipie</title>
	<style>
		.inp-error{
			border-color: red; 
		}
	</style>
</head>
<body>
	<form action="process.php" method="post">
		<?php 
			if(isset($_SESSION['error']['number']))
			{
				echo '<p>'.$_SESSION['error']['number'].'</p>';
				$errors['number'] = true;
			}
		?>
		<input <?=(isset($errors['number']) ? 'class="inp-error"' : '') ?> type="text" name="number" placeholder="number1">
		<?php 
			if(isset($_SESSION['error']['another_number']))
			{
				echo '<p>'.$_SESSION['error']['another_number'].'</p>';
				$errors['another_number'] = true;
			}
		?>
		<input <?=(isset($errors['another_number']) ? 'class="inp-error"' : '') ?> type="text" name="another_number" placeholder="number2">
		<?php 
			if(isset($_SESSION['error']['series']))
			{
				echo '<p>'.$_SESSION['error']['series'].'</p>';
				$errors['series'] = true;
			}
		?>
		<input <?=(isset($errors['series']) ? 'class="inp-error"' : '') ?> type="text" name="series" placeholder="series">
		<input type="submit" value="Run Fivnosighowe">
	</form>
	<?php
		if(isset($_SESSION['result']))
		{
			echo '<h2>Result</h2>';
			foreach($_SESSION['result'] as $key => $result)
			{
				if($key == 0)
				{
					echo $result;
				}
				else
				{
					echo ', '.$result;
				}
			}
		}
		
	?>
</body>
</html>
<?php
unset($_SESSION['result'], $_SESSION['error']);
?>