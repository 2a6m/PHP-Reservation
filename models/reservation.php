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
	
	
}
?>