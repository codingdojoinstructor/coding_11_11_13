<?php
function grade_test($students)
{
	for($i = 0; $i < $students; $i++)
	{
		$score = rand(50, 100);
		switch (true) {
			case ($score >= 70 && $score < 80):
				$grade = 'C';
			break;
			case ($score >= 80 && $score < 90):
			
				$grade = 'B';
			break;
			case ($score >= 90 && $score <= 100):
			
				$grade = 'A';
			break;
			default:
				$grade = 'D';
				break;
		}
		echo '<h1>Your Score: '.$score.'/100</h1>';
		echo '<h2>Your grade is '.$grade.'</h2>';
	}
}

grade_test(2);

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

function get_options($options)
{
	
	// using foreach loop:
	// foreach($options as $option)
	// {
	// 	echo '<option value="'.$option.'">'.$option.'</option>';
	// }

	// using for loop:
	$count = count($options);

	for($i = 0; $i < $count; $i++)
	{
		echo '<option value="'.$options[$i].'">'.$options[$i].'</option>';
	}
}

?>
<select>
	<?php
		get_options($states);
	?>
</select>

<select>
	<?php
		array_push($states, 'NJ', 'NY', 'DE');
		get_options($states);
	?>
</select>
<?php

	function flip_coin($flips)
	{
		$head_count = 0;
		$tail_count = 0;
		$result = '';

		for($i = 0; $i < $flips; $i++)
		{	

			$coin = array('head', 'tail');
			$flip = rand(0,1);
			if($flip)
			{
				$tail_count++;
			}
			else
			{
				$head_count++;
			}
			echo '<p>Attempt #'.($i + 1)
					 .': Throwing a coin... It\'s a '.$coin[$flip].'!'
					 .'... Got '.$head_count.' head(s) so far and '
					 .$tail_count.' tail(s) so far</p>';
		}
	}

	flip_coin(50000);

	function get_max_and_min($number_array)
	{
		$values['max'] = $number_array[0];
		$values['min'] = $number_array[0];

		foreach ($number_array as $value) {
			if($value > $values['max'])
			{
				$values['max'] = $value;	
			}

			if($value < $values['min'])
			{
				$values['min'] = $value;
			}
		}

		return $values;
	}

	$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
	$output = get_max_and_min($sample);
	var_dump($output);

	$sample2 = array(44,5,6666, 77, 8, 5, 77, 3, 3, 5, 3, 42, 23, 2, 3.1);
	$output2 = get_max_and_min($sample2);
	$output2['min'];
	$output2['max'];
	var_dump($output2);
?>









