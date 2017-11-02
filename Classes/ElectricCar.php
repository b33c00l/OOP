<?php

class ElectricCar extends Car{

public $maxRange;
public $effSpeed;
public $chargeTime;

public function charge(){
	echo "Charging... <br>";
}

//polymorphism
public function go(){

		echo "This car is almost flying...<br>";
	}

}