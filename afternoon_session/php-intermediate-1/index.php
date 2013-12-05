<?php

// number of items in the array ==> number of rows
// the actual value of each item ==> number of stars displayed in each row
// the index of each item ==> to access each value, but it is also the number of rows

function draw_stars($x)
{
	$rows = count($x);

	for($i = 0; $i < $rows; $i++)
	{
		for($j = 0; $j < $x[$i]; $j++)
		{
			echo '*';
		}
		echo '<br>';	
	}
}

echo 'draw stars one'.'<br>';
draw_stars(array(4, 6, 1, 3, 5, 7, 25));
echo 'draw stars two'.'<br>';
draw_stars(array(4, 22, 1, 34, 5, 4, 25));

function draw_stars_and_chars($x)
{
	$rows = count($x);

	for($i = 0; $i < $rows; $i++)
	{
		if(is_numeric($x[$i]))
		{
			$char = '*';
			$count = $x[$i];
		}
		else
		{
			$char = $x[$i][0];
			$char = strtolower($char);
			$count = strlen($x[$i]);
		}

		for($j = 0; $j < $count; $j++)
		{
			echo $char;
		}
		echo '<br>';	
	}
}
echo 'draw stars and chars'.'<br>';
draw_stars_and_chars(array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith"));



?>