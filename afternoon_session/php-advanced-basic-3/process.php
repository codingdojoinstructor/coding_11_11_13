<?php
session_start();
$location = 'index';
if(isset($_POST['action']) && $_POST['action'] == 'validate')
{
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['message'] = "The email address you entered ".$_POST['email']." is a VALID email address! Thank you";
		$location = 'success';
	}
	else
	{
		$_SESSION['message'] = "The email address you entered ".$_POST['email']." is a NOT a valid email address!";
	}
}
	header('Location: '.$location.'.php');
?>