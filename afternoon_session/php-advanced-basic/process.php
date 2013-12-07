<?php
session_start();
// echo "POST";
// var_dump($_POST);
// echo "SESSION";
// var_dump($_SESSION);

$season_info = array('January' => array('quarter' => '1st', 'season' => 'Winter', 'birthstone' => 'jan-b'),
					 'February' => array('quarter' => '1st', 'season' => 'Winter', 'birthstone' => 'feb-b'),
					 'March' => array('quarter' => '1st', 'season' => 'Spring', 'birthstone' => 'mar-b'),
					 'April' => array('quarter' => '2nd', 'season' => 'Spring', 'birthstone' => 'apr-b'),
					 'May' => array('quarter' => '2nd', 'season' => 'Spring', 'birthstone' => 'may-b'),
					 'June' => array('quarter' => '2nd', 'season' => 'Summer', 'birthstone' => 'jun-b'),
					 'July' => array('quarter' => '3rd', 'season' => 'Summer', 'birthstone' => 'jul-b'),
					 'August' => array('quarter' => '3rd', 'season' => 'Summer', 'birthstone' => 'aug-b'),
					 'September' => array('quarter' => '3rd', 'season' => 'Fall', 'birthstone' => 'sep-b'),
					 'October' => array('quarter' => '4th', 'season' => 'Fall', 'birthstone' => 'oct-b'),
					 'November' => array('quarter' => '4th', 'season' => 'Fall', 'birthstone' => 'nov-b'),
					 'December' => array('quarter' => '4th', 'season' => 'Winter', 'birthstone' => 'dec-b')
					);

$_SESSION['info'] = $season_info[$_POST['month']];
$_SESSION['info']['month'] = $_POST['month'];

// echo 'something';
header('Location: index.php');
exit;

?>