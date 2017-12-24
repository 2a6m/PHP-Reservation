<?php

		include_once './models/reservation.php';
		include_once './models/passenger.php';

		// show variable in POST
		var_dump($_POST);
		var_dump($_SESSION);
		
		
		// all received values are checked
		if (isset($_POST['places']) && $_POST['places']>0
			&& isset($_POST['destination']) && in_array($_POST['destination'],array ('Barcelona', 'New-York', 'Pragues', 'London')))
		{
		// init reservation
		$res = new reservation();
		
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
			include './controllers/show_pas.php';
		}
		else
		{
			include './controllers/show_res.php';
		}
		
		return;
		
?>