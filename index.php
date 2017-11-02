<pre>
<?php

require 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

// spl_autoload_register(function ($class_name){
// 	include "Classes/".$class_name .'.php';
// });

// require "Classes/TransportInterface.php";
// require "Classes/Car.php";
// require "Classes/ElectricCar.php";


// $petro_automobilis = new Car(4, 4, 1500, 1900);
// $jono_automobilis = new ElectricCar(3, 1, 300, 550);

// //by default
// echo $petro_automobilis->doorCount;
// //changing parameter
// $petro_automobilis->doorCount = 8;

// //new value
// echo $petro_automobilis->doorCount;


// $petro_automobilis->go();
// $petro_automobilis->stop();
// $petro_automobilis->getWeight();


// var_dump($petro_automobilis);

// $petro_automobilis = null;

// echo $petro_automobilis->getWheels();

// echo $petro_automobilis;

// $petro_automobilis->go();
// $jono_automobilis->go();