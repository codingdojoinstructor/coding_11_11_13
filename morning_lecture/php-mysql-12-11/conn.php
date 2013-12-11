<?php

// if you want to test this our on your local machine
// 1. import the fun.sql file using mysql workbench
// 2. change the credentials below to match your yours (should be the same if you're using MAMP!); 
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', 'Slalom#6');
define('DB_DATABASE', 'world');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if(mysqli_connect_errno())
{
	echo mysqli_connect_errno(). '<br>';
	echo 'Error connecting to the database';
}

?>