<?php
	session_start();
	require_once('connection.php');
	require("country.php");

	//define the Process class
	class Process
	{
		public function __construct()
		{
			//create a country object so that we can use it to query the database:
			$country = new Country();

			//run the query and store the results in session:
			$_SESSION['country_data'] = $country->get_country_information($_POST['country_name']);
			
			//now that we've got our info in session, return to index.php
			header('location: index.php');
		}
	}

	//create a process object (this will run the constructor function)
	$process = new Process();
?>
