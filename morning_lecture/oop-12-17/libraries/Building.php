<?php

class Building
{
	protected $health = 100;
	protected $name;
	protected $x_coord;
	protected $y_coord;
	protected $building;

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
						  <p>'.$this->health.'</p>
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

?>