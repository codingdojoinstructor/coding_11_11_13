<?php
session_start();
require_once('Process.php');
$process = new Process();

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	$process->register($_POST);
}
else if(isset($_POST['action']) && $_POST['action'] == 'login')
{
	$process->login($_POST);
}
else if(isset($_GET['logout']))
{
	$process->logout();
}

header('Location: index.php');

?>