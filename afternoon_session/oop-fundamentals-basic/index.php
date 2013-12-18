<?php

include_once('Bike.php');

echo 'First Bike<br>';
$bike1 = new Bike(250, 400);
$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();
echo '<br>Second Bike<br>';
$bike2 = new Bike(100, 40);
$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();
echo '<br>Third Bike<br>';
$bike3 = new Bike(300, 500);
$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();

?>