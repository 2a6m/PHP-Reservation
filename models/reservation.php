<?php

Class Reservation
{
	private $nbr_passenger;
	private $cancellation_insurance = false;
	private $passengers = array();
	
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
	
	public function get_number_passenger()
	{
		return $this->nbr_passenger;
	}
	
	public function set_insurance($bool)
	{
		$this->cancellation_insurance = $bool;
	}
	
	public function lenght_passengers_encoded()
	{
		return count($this->passengers);
	}
	
	public function add_passenger($passenger)
	{
		$this->passengers[] = $passenger;
	}
	
	public function get_passengers()
	{
		return $this->passengers;
	}
}
?>