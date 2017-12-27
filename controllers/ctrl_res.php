<?php

		include_once './models/reservation.php';
		include_once './models/passenger.php';
		
		// create or load a reservation 
		if (isset($_SESSION['res']))
		{
			$res = unserialize($_SESSION['res']);
		}
		else
		{
				// init reservation
				$res = new reservation();
		}
		
		// check if no error in the value return
		if (isset($_POST['places']) && $_POST['places']>0
			&& isset($_POST['destination']) && in_array($_POST['destination'],array ('Barcelona', 'New-York', 'Pragues', 'London')))
		{
			if ($_POST['places']<=0)
				{
					// error is treated on the upper if
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
		
		
			// save
			$res->set_number_passenger($nb_pass);
			$_SESSION['res'] = serialize($res);
			
				include './controllers/show_pas.php';
		}
		else
		{
			include './controllers/show_res.php';
		}
	return;
		
?>