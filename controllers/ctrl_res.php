<h1>ctrl_res</h1>

<?php

		include './models/reservation.php';
		include './models/passenger.php';

		// show variable in POST
		var_dump($_POST);
		var_dump($_SESSION);
		
		// init reservation
		$res = new reservation();
		
		// all received values are checked
		if (isset($_POST['places']) && $_POST['places']>=0)
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