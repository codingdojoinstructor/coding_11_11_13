<?php
include_once('libraries/Barracks.php');

$barracks = new Barracks('Barracks1', 200, 200, 'Michael Choi');
$barracks2 = new Barracks('Barracks2', 300, 300, 'Jason Statham');
$barracks3 = new Barracks('Barracks3', 500, 500, 'Chuck Norris');
$barracks->buildSoldier('Fighter1');
$barracks->buildSoldier('Fighter2');
$barracks->buildSoldier('Fighter3');
$barracks->buildSoldier('Fighter4');
echo 'Current Soldiers Remaining: '.$barracks->getSoldierCount().'<br>';
$barracks->badDamage();
echo 'Bad Damage.... Health is now: '.$barracks->getHealth().'<br>';
// $building->name = 'Base1';
// $building->getDamaged();
// $building->getDamaged();
// $building->health = 50;

// $building1 = new Base('Base2', 20, 300);
// $building1->name = 'Base2';
// $building1->getDamaged();
// echo 'My health is: '.$building1->getHealth();
// $building1->name = "Basically";

// $building2 = new Base('Base3', 20, 500);
// $building2->getDamaged();
// $building2->name = "Basically Awesome";
// $building3 = new Base('Base4', 20, 700);

// var_dump($building);
// var_dump($building1);
// var_dump($building2);
// var_dump($building3);

?>