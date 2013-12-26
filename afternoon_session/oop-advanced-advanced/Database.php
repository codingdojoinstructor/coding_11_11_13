<?php
require_once('connection.php');

class Database
{
	public $connection;

	public function __construct()
	{
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

		if(mysqli_connect_errno())
		{
			echo "error connecting to database:<br>";
			echo mysqli_connect_errno();
		}
	}
}


?>