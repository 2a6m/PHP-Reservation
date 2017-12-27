<?php
	
	include_once './models/reservation.php';
	
	// if there is an error
	if(isset($_POST['destination'])||isset($_POST['places']))
	{
		$msg = "<p class=error>ERROR, there is an incorrect value.</p>";
	}
	
	// if the reservation already exist
	if(isset($_SESSION['res_db']))
	{
		$res_db = unserialize($_SESSION['res_db']);
		
		$ins = $res_db->get_insurance();
		$dest = $res_db->get_destination();
		$nbp = $res_db->get_number_passenger();
	}
	
	
	include './views/form-reservation.php';
	
?>