<?php
	session_start();
	require("connection.php");
	require("country.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP Intermediate 2</title>
</head>
<body>
	<form id="country_list" action="process.php" method="POST">
		<?php
			$country_object = new Country();
			$country_list = $country_object->get_country_names();
		?>
		<select name="country_name">

		<?php
		//loop over $country_list, using every individual result ($country_item) to make an option tag.
		foreach($country_list as $country_item)
		{	?>
			<option><?= $country_item['Name'] ?></option>
			<!-- above line is equivalent to this (remove the // to test it out): -->
			<!-- <option><?php //echo $country_item['Name']; ?></option> -->
		<?php
		} 	?>
		</select>
		<input type="submit" value="Submit!" />
	</form>
	<!-- Here is where we'll display a country's data -->
	<div id="country_data_display">
	<?php
		if (isset($_SESSION['country_data']))
		{	?>
			<h1>Country Information</h1>
			<hr>
			<p>Country: <?= $_SESSION['country_data']['Name'] ?></p>
			<p>Continent: <?= $_SESSION['country_data']['Continent'] ?></p>
			<p>Region: <?= $_SESSION['country_data']['Region'] ?></p>
			<p>Population: <?= $_SESSION['country_data']['Population'] ?></p>
			<p>Life Expectancy: <?= $_SESSION['country_data']['LifeExpectancy'] ?></p>
			<p>Government: <?= $_SESSION['country_data']['GovernmentForm'] ?></p>
	<?php		
		}
		unset($_SESSION['country_data']);
	?>
	</div>
</body>
</html>