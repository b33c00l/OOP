<pre>
<?php
$start = microtime(true);

require 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

//Application modules

$db = new Database();
$user = new User($db);
$game = new Game($db);

//Application

require 'App/index.php';

// print_r($user->removeUser(1));

// print_r($user->getUserByUsername('Paulius'));

// print_r($user->AddUser('Paulius', 'slaptas'));

// print_r($db->select("SELECT * FROM users WHERE username = :username", ["username" => "Mersas"]));

// echo $db->insert("INSERT INTO users (username, password) VALUES (:username,:password)",[
// 	"username" => "Petras",
// 	"password" => password_hash("labas", PASSWORD_DEFAULT)
// ]
// );




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

echo "<div style=' padding: 10px; color:white; background-color: red; position: absolute; right: 0; top: 0'>";
echo "It took: ". round((microtime(true) - $start)*1000, 2). "ms";
echo " & " . round(memory_get_peak_usage()/(1024*1024),2). "MB";
echo "</div>";