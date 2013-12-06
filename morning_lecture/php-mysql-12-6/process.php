<?php
session_start();
require_once('conn.php');

if(!empty($_POST['music']))
{
	$music = $_POST['music'];

	$sql = 'SELECT * FROM musics WHERE name = "'.$music.'"';
	$query = mysqli_query($con, $sql);
	$num_rows = mysqli_num_rows($query);
	if($num_rows > 0)
	{
		$_SESSION['message'] = 'found '.$music.' in our music database!'; 
	}
	else
	{
		$_SESSION['message'] = "Sorry we don't jam to that";
		$_SESSION['error'] = true;
	}
}
else
{
	$_SESSION['message'] = "Sorry we don't listen to nothing";
	$_SESSION['error'] = true;
}

header('location: index.php');
exit;


// $sql = 'SELECT * FROM musics';

// $query = mysqli_query($con, $sql);

// $row = mysqli_fetch_assoc($query);

// echo $row['name'];

// while($row = mysqli_fetch_assoc($query))
// {
// 	foreach($row as $field => $value)
// 	{
// 		echo $field.': '.$value.'<br>';
// 	}
// }

?>