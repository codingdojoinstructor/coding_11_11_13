<?php

class Car
{
	public $price, $speed, $fuel, $mileage;
	public $tax = .12;

	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		if($price > 10000)
		{
			$this->tax = .15;
		}

		$this->Display_all();
	}

	public function Display_all()
	{
		echo 'Price: '.$this->price.'<br>';
		echo 'Speed: '.$this->speed.'<br>';
		echo 'Fuel: '.$this->fuel.'<br>';
		echo 'Mileage: '.$this->mileage.'mpg<br>';
		echo 'Tax: '.$this->tax.'<br>';
	}
}

?>