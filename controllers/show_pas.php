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
	
	
	/* add elem to could manipulate modification */
	include './views/form-passenger.php';
	
?>