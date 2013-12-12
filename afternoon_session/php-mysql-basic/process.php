<?php
session_start();
require_once('conn.php');

$location = 'index';
if(isset($_POST['action']) && $_POST['action'] == 'validate')
{
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$sql = "INSERT INTO users (email, created_at, updated_at) VALUES('".$_POST['email']."', NOW(), NOW())";
		mysqli_query($con, $sql);
		$id = mysqli_insert_id($con);

		if($id)
		{
			$_SESSION['message'] = "The email address you entered ".$_POST['email']." is a VALID email address! Thank you";
			$location = 'success';	
		} else {
			$_SESSION['message'] = "The email address you entered ".$_POST['email']." could not be added to the database";
		}
	}
	else
	{
		$_SESSION['message'] = "The email address you entered ".$_POST['email']." is a NOT a valid email address!";
	}
}
	header('Location: '.$location.'.php');
?>