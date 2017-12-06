<?php

Class Reservation
{
	private $nbr_passenger;
	private $cancellation_insurance = false;
	private $passengers = array();
	private $price;
	
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
	
	public function get_insurance()
	{
		return $this->cancellation_insurance;
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
	
	public function calculate_price()
	{
		$p = 0;
		if ($this->cancellation_insurance == true)
		{
			$p += 20;
		}
		foreach ($this->passengers as &$pas)
		{
			if ($pas->get_age() > 12)
			{
				$p += 15;
			}
			else
			{
				$p += 10;
			}
		}
		return $p;
	}
	
	public function get_price()
	{
		$this->price = $this->calculate_price();
		return $this->price;
	}
}
?>