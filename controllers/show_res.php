<?php
	
	include_once './models/reservation.php';
	
	if(isset($_POST['destination'])||isset($_POST['places']))
	{
		$msg = "<p class=error>ERROR, there is an incorrect value.</p>";
	}
	
	if(isset($_SESSION['res']))
	{
		$res = unserialize($_SESSION['res']);
		
		$ins = $res->get_insurance();
		$dest = $res->get_destination();
		$nbp = $res->get_number_passenger();
	}
	
	include './views/form-reservation.php';
	
?>