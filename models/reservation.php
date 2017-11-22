<?php

Class Reservation
{
	private $nbr_passenger;
	private $cancellation_insurance = false;
	public $passengers = array();
	
	public function __construct($insurance = null)
	{
		if ($insurance != null && $insurance == true)
		{
			$this->cancellation_insurance = $insurance;
		}
	}
	
	public function set_number_passenger($nbr)
	{
		$this->nbr_passenger = $nbr;
	}
	
	public function set_insurance($bool)
	{
		$this->cancellation_insurance = $bool;
	}
	
	public function lenght_passengers_encoded()
	{
		return count($this->passengers)
	}
}
?>