<?php

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
		// init reservation
		$res = new reservation();
		
		// all received values are checked
		if isset($_POST['places'])
		{
			if (empty($_POST['places']) || isset($_POST['places']!<=0))
			{
				// send error (to implement)
			}
			else
			{
				$nb_pass = isset($_POST['places']);
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
		$res->set_nb_passenger();
		$res->set_insurance();
		
		// pass at the next step
		return;
	}
}
?>