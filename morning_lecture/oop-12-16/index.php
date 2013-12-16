<?php

class Base
{
	public $health = 100;
	public $name;
	public $x_coord;
	public $y_coord;
	public $building;

	public function __construct($nameParam, $x_coord, $y_coord)
	{
		$this->x_coord = $x_coord;
		$this->y_coord = $y_coord;
		$this->name = $nameParam;
		$this->display();
	}

	public function display()
	{
		$this->building = '<div style="position:absolute; left: '
						  .$this->x_coord.'; top: '.$this->y_coord.';">
						  <img style="display:block" width="100" src="http://www.theuen.com/images/buildings/bunker.jpg">
						  <p>'.$this->name.'</p>
						  </div>';
		echo $this->building;	
	}

	public function getHealth()
	{
		return $this->health;
	}

	public function getDamaged()
	{
		$this->health -= 10;
		echo 'Mayday '.$this->name.' lost some health. New health is: '.$this->getHealth().'<br>';

	}
}

$building = new Base('Base1', 20, 100);
// $building->name = 'Base1';
// $building->getDamaged();
// $building->getDamaged();
// $building->health = 50;

$building1 = new Base('Base2', 20, 300);
// $building1->name = 'Base2';
// $building1->getDamaged();
// echo 'My health is: '.$building1->getHealth();
// $building1->name = "Basically";

$building2 = new Base('Base3', 20, 500);
// $building2->getDamaged();
// $building2->name = "Basically Awesome";
$building3 = new Base('Base4', 20, 700);

// var_dump($building);
// var_dump($building1);
// var_dump($building2);
// var_dump($building3);

?>