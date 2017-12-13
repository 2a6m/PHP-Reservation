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
		elseif (isset($_POST['step_3']))
		{
			$this->step3();
		}
		elseif (isset($_POST['modify_passenger']))
		{
			$res = unserialize($_SESSION['res']);
			include 'views/form-passenger.php';
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
		include 'views/form-reservation.php';
	}
	
	public function step1()
	{
		// show variable in POST
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
		
		if (isset($_POST['destination']))
		{
			$dest = $_POST['destination'];
			$res->set_destination($dest);
		}
		
		if (isset($_POST['insurance']))
		{
			$insurance = true;
			$res->set_insurance($insurance);
		}
		
		
		// give the informations to the reservation
		$res->set_number_passenger($nb_pass);
		
		
		// save reservation in session_cache_expire
		$_SESSION['res'] = serialize($res);
		
		// pass at the next step
		include 'views/form-passenger.php';
		
		return;
	}
	
	public function step2()
	{
		// show variable in POST
		var_dump($_POST);
		var_dump($_SESSION);
		
		// extract information
		$res = unserialize($_SESSION['res']);
		
		// create passenger
		$passenger = new passenger($_POST['firstname'],$_POST['lastname'], $_POST['age']);
		
		$res->add_passenger($passenger);
		
		// save
		
		
		// if nbr passenger encoded < nbr passenger, encode a other one
		if ($res->get_number_passenger() > $res->lenght_passengers_update())
		{
			$_SESSION['res'] = serialize($res);
			include 'views/form-passenger.php';
		}
		else
		{
			$res->save_passengers();
			$_SESSION['res'] = serialize($res);
			include 'views/recapitulatif.php';
		}
	}
	
	public function step3()
	{
		// show variable in POST
		var_dump($_POST);
		var_dump($_SESSION);
		
		// extract information
		$res = unserialize($_SESSION['res']);
		
		include 'views/confirmation.php';
	}
}
?>