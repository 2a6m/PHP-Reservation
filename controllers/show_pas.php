<?php
	
	include_once 'models/reservation.php';
	include_once 'models/passenger.php';
	
	$res = unserialize($_SESSION['res']);
	
	$bool = $res->lenght_passengers() == $res->get_number_passenger();
	if ($bool)
	{
		$idx = $res->lenght_passengers_update();
		$pas = $res->get_passengers()[$idx];
		$ln = $pas->get_lastname();
		$fn = $pas->get_firstname();
		$a = $pas->get_age();
	}
	
	// if there is an error display the correct value
	if (isset($_POST['error']) && $_POST['error'] == True)
	{
		$msg = "<p class=error>ERROR, there is an incorrect value.</p>";
		if(strlen($_POST['lastname'])>0)
		{
			$ln = $_POST['lastname'];
		}
		if(strlen($_POST['firstname'])>0)
		{
			$fn = $_POST['firstname'];
		}
		if($_POST['age']>0)
		{
			$a = $_POST['age'];
		}
	}

	include './views/form-passenger.php';
	
?>