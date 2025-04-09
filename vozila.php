<?php

require __DIR__ . '/vendor/autoload.php';  

use Vehicle\Vehicles\Bike;
use Vehicle\Vehicles\Car;


$car = new Car();
$car->svira();
$car->start();
$car->stop();
$car->broj_kotaca("4");
$car->boja_vozila("crvena");

echo '<br>';

$bike = new Bike();
$bike->zvoni();
$bike->start();
$bike->stop();
$bike->broj_kotaca(2);
$bike->boja_vozila("crna");

