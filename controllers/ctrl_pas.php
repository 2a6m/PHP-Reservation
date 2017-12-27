<?php
	
		include './models/reservation.php';
		include './models/passenger.php';
		
		// check if no error in value return
		if(strlen($_POST['firstname'])>0 && strlen($_POST['lastname'])>0 && $_POST['age']>0)
		{
			// extract information of the reservation
			$res = unserialize($_SESSION['res']);
		
			// create passenger and add it to the reservation
			$passenger = new passenger($_POST['firstname'],$_POST['lastname'], $_POST['age']);
			$res->add_passenger($passenger);
		
			// save	
			// if nbr passenger encoded < nbr passenger, encode a other one
			if ($res->get_number_passenger() > $res->lenght_passengers_update())
			{
				$_SESSION['res'] = serialize($res);
				include './controllers/show_pas.php';
			}
			else
			{
				$res->save_passengers();
				$_SESSION['res'] = serialize($res);
				include './controllers/show_recap.php';
			}
		}
		// return to the controller to show the page again
		else
		{		
			$_POST['error'] = True;
			include './controllers/show_pas.php';
		}
?>