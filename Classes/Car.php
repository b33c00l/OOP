<?php

class Car implements TransportInterface {

	private $wheelCount;
	private $doorCount;
	public $weight;
	public $engineVolume;

	function __construct(int $wheelCount, int $doorCount, int $weight, int $engineVolume){
		$this->wheelCount = $wheelCount;
		$this->doorCount = $doorCount;
		$this->weight = $weight;
		$this->engineVolume = $engineVolume;
		echo "New car was created. <br>";
	}

	public function go(){

		echo "This car is going...<br>";
	}

	public function stop(){

		echo "This car has stoppped...<br>";
	}

	public function break(){

		echo "This car is broken...<br>";
	}

	public function getWeight(){

		echo "Weight is ". $this->weight;
	}

	public function getWheels(){

		return $this->wheelCount;
	}

	//getter
	function __get($parameter){

		return $this->$parameter;
	}

	//setter
	function __set($parameter, $value){
		
		// echo "Someone is changing the $parameter to $value <br>";
		// if ($parameter == "doorCount" && $value > 5) {
		// 	echo "This car has too many doors <br>";
		// 	$this->doorCount = $value;
		// }
		$this->parameter = $value;
	}

	function __toString(){
		return "This is the car! <br>";
	}

	function __destruct(){
		echo "The car was destroyed! <br>";
	}


}


