<?php

class Passenger
{
	public $firstname;
	public $lastname;
	public $age;
	
	public function __construct ($firstname,$lastname, $age)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->age = $age;
	}
}

?>