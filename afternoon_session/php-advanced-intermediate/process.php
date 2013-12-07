<?php
session_start();

if(isset($_POST['action']))
{
	$low = $_POST['low'];
	$high = $_POST['high'];
	if($_POST['action'] == 'farm')
	{
		$loc = 'Farm';
	}

	if($_POST['action'] == 'cave')
	{
		$loc = 'Cave';
	}

	if($_POST['action'] == 'house')
	{
		$loc = 'House';
	}

	if($_POST['action'] == 'casino')
	{
		$loc = 'Casino';
	}
	$gold_earned = rand($low, $high);
	$time = date('F jS Y i:s a');

	if(!isset($_SESSION['gold_total']))
	{
		$_SESSION['gold_total'] = 0;
	}

	$_SESSION['gold_total'] += $gold_earned;
	
	if(!isset($_SESSION['activities']))
	{
		$_SESSION['activities'] = array();
	}

	if($gold_earned > 0)
	{
		$message = 'You entered a '.$loc.' and earned '.$gold_earned.' golds. '.'('.$time.')';
		$status = 'green';
	}
	else
	{
		$message = 'You entered a '.$loc.' and lost '.$gold_earned.' golds... Ouch '.'('.$time.')';
		$status = 'red';
	}
	$gold_run = array('message' => $message,'status' => $status);
	array_unshift($_SESSION['activities'], $gold_run);
	// $_SESSION['activities']['message']['status'] = $status;
	
}
header('Location: index.php');
?>