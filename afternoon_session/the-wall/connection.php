<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_DATABASE', 'wally');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if(mysqli_connect_errno())
{
	echo "error connecting to database:<br>";
	echo mysqli_connect_errno();
}

?>