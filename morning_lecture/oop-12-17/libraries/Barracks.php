<?php
include_once('Building.php');

class Barracks extends Building
{
	protected $health = 200;
	private $soldierCount;
	private $commander;

	public function __construct($nameParam, $x_coord, $y_coord, $commander)
	{
		$this->commander = $commander;
		parent::__construct($nameParam, $x_coord, $y_coord);
	}

	public function display()
	{
		$this->building = '<div style="position:absolute; left: '
						  .$this->x_coord.'; top: '.$this->y_coord.';">'
						  .$this->commander.' is now in command of '.$this->name.'<br>
						  <img style="display:block" width="100" src="http://static4.wikia.nocookie.net/__cb20080629230917/starcraft/images/7/78/Barracks_SC2_Game1.jpg">
						  <p>'.$this->name.'</p>
						  <p>'.$this->health.'</p>
						  </div>';
		echo $this->building;	
	}

	public function buildSoldier($soldier_name)
	{
		if(!empty($this->soldierCount))
		{
			$this->soldierCount++;	
		}
		else
		{
			$this->soldierCount = 1;
		}
		
		echo 'built new soldier '.$soldier_name.'<br>';
		echo 'you have '.$this->soldierCount.' soldiers<br>';
	}

	public function getSoldierCount()
	{
		return $this->soldierCount;
	}

	public function badDamage()
	{
		$this->health -= 20;
	}
}


?>