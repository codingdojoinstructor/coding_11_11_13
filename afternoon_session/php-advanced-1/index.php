<?php

$users = array( 
   array('first_name' => 'Michael', 'last_name' => ' Choi '),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel')
);

$headings = array('User #'
				,'First Name'
				,'Last Name'
				,'Full Name'
				,'Full name in uppercase'
				,'Length of name'
				);

$count = 1;
echo '<table border="1" style="border-collapse:collapse">';
foreach ($users as $value)
{
	$first_name = trim($value['first_name']);
	$last_name = trim($value['last_name']);
	$full_name = $first_name.' '.$last_name;
	if($count == 1)
	{
		echo '<thead>';
		foreach ($headings as $header)
		{
			echo '<th>'.$header.'</th>';
		}
	 	echo '</thead>';
	}
	echo '<tr '.($count%5 == 0 ? 'style="background:black; color:white;"' : '').'>';
	echo '<td>'.$count.'</td>';
	echo '<td>'.$first_name.'</td>';
	echo '<td>'.$last_name.'</td>';
	echo '<td>'.$full_name.'</td>';
	echo '<td>'.strtoupper($full_name).'</td>';
	echo '<td>'.strlen($full_name).'</td>';
	echo '</tr>';
	$count++;
}
echo '</table>';

?>