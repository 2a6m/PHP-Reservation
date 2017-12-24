<?php

	include './models/reservation.php';
	include './models/passenger.php';

	// show variable in POST
	var_dump($_POST);
	var_dump($_SESSION);
		
	// extract information
	$res = unserialize($_SESSION['res']);
	
	
	// create table flight
	$dest = $res->get_destination();
	$nbr = $res->get_number_passenger();
	if ($res->get_insurance())
	{
		$ins = 'Yes';
	}
	else
	{
		$ins = 'No';
	}
	
	$flight = "<td>$dest</td>
			   <td>$nbr</td>
			   <td>$ins</td>";
	
	//create table passengers
	$p = $res->get_passengers();
	$pas = "";
	for($i=0;$i<count($p);$i++)
	{
		$ln = (string) $p[$i]->get_lastname();
		$fn = (string) $p[$i]->get_firstname();
		$a = (string) $p[$i]->get_age();
		$pas = $pas."<tr>
						<td>$ln</td>
						<td>$fn</td>
						<td>$a</td>
					 </tr>";
	}
	
	// create price
	$p = $res->get_price();
	$price = "<br>$p</br>";
	
	
	include "./views/confirmation.php";

?>