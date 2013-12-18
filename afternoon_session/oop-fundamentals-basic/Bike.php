<?php

class Bike
{
	public $drive_miles = 10;
	public $rev_miles = 5;
	public $price;
	public $max_speed;
	public $miles = 0;

	public function __construct($price, $max_speed)
	{
		$this->price = $price;
		$this->max_speed = $max_speed;
	}

	public function displayInfo()
	{
		echo 'Price: $'.$this->price.'<br>'; 
		echo 'Max Speed: '.$this->max_speed.'mph<br>';
		echo 'Miles: '.$this->miles.'<br>';
	}

	public function drive()
	{
		$this->miles += $this->drive_miles;
		echo 'Driving'.'<br>';
	}

	public function reverse()
	{
		if(($this->miles - $this->rev_miles) > 0)
		{
			$this->miles -= $this->rev_miles;
			echo 'Reversing'.'<br>';	
		}
		else
		{
			echo 'End of the road<br>';
		}		
	}
}

?>