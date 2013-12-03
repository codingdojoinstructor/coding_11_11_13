<?php
// REVIEW

//number
$number1 = 6;
$number2 = '24';
$result = $number1 + $number2;
// echo $result;

// string
$string1 = 'my string with single quotes and a $number1';
$string2 = "my string with double quotes and a $number1";

// echo '<p>'.$string1.'</p>';
// echo "<p>$string2</p>"; 
// echo '<p>'.$string2.'</p><br>'; // contatenate strings with a period

// // array

$simple_array = array('basketball', 'soccer', 'football', 'golf');

// echo '<p>';
// echo $simple_array[2].'<br>'; // prints football;
// echo $simple_array[0].'<br>'; // prints basketball;
// echo '<p>';

$simple_array[] = 'water polo';

// echo $simple_array[4].'<br>'; // prints water polo;

// associative array
$assoc_array = array('great_sport' => 'basketball',
					 'terrible_sport' => 'soccer', 
					 'super_sport' => 'football',
					 'honorable_sport' => 'golf'
					 );
// echo '<p>';
// echo $assoc_array['great_sport'].'<br>'; // prints basketball;
// echo $assoc_array['terrible_sport'].'<br>'; // prints soccer;
// echo '</p>';

// go through array with for loop:
// $array_length = count($simple_array);

// echo '<p>';
// for($i = 0; $i < $array_length; $i++)
// {
// 	echo "sport: ".$simple_array[$i].'<br>';
// }
// echo '</p>';

// // go through array with foreach loop:
// echo '<p>';
// foreach ($simple_array as $sport) {
// 	echo "sport: ".$sport.'<br>';
// }
// echo '</p>';

// go through array with foreach loop and access array key index:
// echo '<p>';
// foreach ($assoc_array as $key => $sport) {
// 	echo "key: ".$key." sport: ".$sport.'<br>';
// }
// echo '</p>';
// // boolean

// what values are considered false?
$boolean3 = false;
$boolean1 = 0;
$boolean2 = '';
$boolean4 = null;

// if(empty($boolean1) && isset($boolean1))
// {
// 	echo "I'm empty and set".'<br>';
// }

// if($boolean1 || $boolean2 || $boolean3 || $boolean4)
// {
// 	echo "<p>at least one of these is true</p>";
// }
// else
// {
// 	echo "<p>nope... All false</p>";
// }

// function

// funciton can only be used for non-self-closing elements
function b($text, $el)
{
	$b = '<'.$el.'>'.$text.'</'.$el.'></br>';

	return $b;
}

$p = b('some stupid text', 'p');
// echo $p;

function make_a_list($text_array, $el)
{
	$b = '<'.$el.'>';
	$b .= '<ul>';
	
	foreach($text_array as $text)
	{
		$b .= '<li>'.$text.'</li>';
	}
	
	$b .= '</ul>';
	$b .='</'.$el.'>';

	return $b;
}

echo make_a_list($simple_array, 'div');
echo make_a_list($assoc_array, 'p');
// function print_something($something)
// {
// 	echo $something.'</br>';
// }

// print_something('something');
// print_something('something else');
// print_something('Coding Dojo is awesome!');
// print_something('So is Bruce');





?>