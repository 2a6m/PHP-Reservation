<?php

include 'models/reservation.php';
include 'models/passenger.php';

class App
{
	public function start()
	{
		if (isset($_POST['new']))
		{
            $this->new_res();
		}
		elseif (isset($_POST['step_1']))
		{
			$this->step1();
		}
		elseif (isset($_POST['step_2']))
		{
			$this->step2();
		}
		else
		{
			$this->home();
		}
	}
	
	public function home()
	{
		include 'views/home.php';
	}
	
	public function new_res()
	{
		include 'views/form1.php';
	}
	
	public function step1()
	{
		// show variable ine POST
		var_dump($_POST);
		var_dump($_SESSION);
		
		// init reservation
		$res = new reservation();
		
		// all received values are checked
		if (isset($_POST['places']))
		{
			if ($_POST['places']<=0)
			{
				// send error (to implement)
			}
			else
			{
				if (is_numeric($_POST['places']))
				{
					$nb_pass = (int)$_POST['places'];
				}		
			}
		}
		else
		{
			// send error (miss nb_passenger)
		}
		
		if (isset($_POST['insurance']))
		{
			// ?? what return isset($_POST['insurance']) ??
			// $insurance = isset($_POST['insurance']);
			$insurance = true;
		}
		
		// give the informations to the reservation
		$res->set_number_passenger($nb_pass);
		$res->set_insurance($insurance);
		
		// save reservation in session_cache_expire
		$_SESSION['res'] = serialize($res);
		
		// pass at the next step
		include 'views/form_pers.php';
		
		return;
	}
	
	public function step2()
	{
		// show variable ine POST
		var_dump($_POST);
		var_dump($_SESSION);
		
		// extract information
		$res = unserialize($_SESSION['res']);
		
		// create passenger
		$passenger = new passenger($_POST['firstname'],$_POST['lastname'], $_POST['age']);
		
		$res->passengers[] = $passenger;
		
		// save
		$_SESSION['res'] = serialize($res);
		
		// if nbr passenger encoded < nbr passenger, encode a other one
		if ($res->get_number_passenger() > $res->lenght_passengers_encoded())
		{
			include 'views/form_pers.php';
		}		
	}
}
?>