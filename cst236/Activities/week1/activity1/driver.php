<?php
require_once 'RaceCar.php';

$car = new RaceCar();

$car->startCar();
$car->driveCar(10);

$car->stopCar();
$car->startCar();
$car->inflateTires(35);
$car->startCar();
$car->driveCar(60);
$car->checkTires();
echo "you need to inflate your tires again before you car will start in the future!";