<?php
session_start();
// function fibonacci ($n)
// {
//   if ($n == 1 || $n == 2)
//   {
//     return 1;
//   }
//   else
//   {
//     return fibonacci( $n - 1) + fibonacci( $n - 2 );
//   }
// }

$valid = true;

foreach($_POST as $name => $value)
{
	if(empty($value))
	{
		$_SESSION['error'][$name] = $name.' field cannot be blank';
		$valid = false;
	}
}

if($valid)
{
	$series = $_POST['series'];
	$n1 = $_POST['number'];
	$n2 = $_POST['another_number'];
	$_SESSION['result'] = array($n1, $n2);

	for($i = 0; $i < $series-2; $i++)
	{
			$new = $n1 + $n2;
			$_SESSION['result'][] = $new;
			$n1 = $n2;
			$n2 = $new;
	}
}

header('Location: index.php');
exit;
