<?php
class Country
{

	function __construct()
	{
		$this->connection = new Database();
	}

	function get_country_names()
	{
		$names_query = "SELECT Name FROM country ORDER BY Name ASC";
		// echo $names_query;
		// die;
		return $this->connection->fetchAll($names_query);
	}

	function get_country_information($name)
	{
		$information_query = "SELECT * FROM country WHERE Name = '{$name}'";
		// echo $information_query;
		// die;
		return $this->connection->fetchRecord($information_query);
	}
	
}

?>
