<?php
require_once('conn.php');

$sql = 'SELECT languages.language, countries.name, languages.percentage
FROM countries
LEFT JOIN languages ON countries.id = languages.country_id
WHERE languages.percentage > 89
ORDER BY languages.language';

$result = mysqli_query($con, $sql);

$prev_lang = '';
while($row = mysqli_fetch_assoc($result))
{
	if($row['language'] != $prev_lang)
	{
		echo '<h3>Language: '.$row['language'].'</h3>';	
	}
	echo '<p>Country Name: '.$row['name'].', Percentage: '.$row['percentage'].'</p>';
	$prev_lang = $row['language'];
}
?>