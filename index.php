<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle('blue');
$rockrider = new Bicycle('yellow');


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . " km/h." . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . " km/h." . '<br>';
echo $bike->brake();


$delorean = new Car('white', 4, 'uranium');

var_dump($delorean-> getNbSeats());
var_dump($delorean-> getColor());

echo $delorean->start();
echo $delorean->forward();
echo '<br> Vitesse de la voiture : ' . $delorean->getCurrentSpeed() . " km/h." . '<br>';
echo $delorean->brake();
echo '<br> Vitesse de la voiture : ' . $delorean->getCurrentSpeed() . " km/h." . '<br>';
echo $delorean->brake();
