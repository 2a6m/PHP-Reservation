<?php

	include './models/reservation.php';
	include './models/passenger.php';

// Connection to DB
	// information to connect to the db
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservation-app";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

	// controle the data
	$res = unserialize($_SESSION['res']);
	$destination = $res->get_destination();
	$price = intval($res->get_price());
	$nbpas = intval($res->lenght_passengers());
	if ($res->get_insurance())
	{
		$insurance = 1;
	}
	else
	{
		$insurance = 0;
	}
	
	
	// update or create a new data
	if(isset($_SESSION['res_db']))
	{
		$res_db = unserialize($_SESSION['res_db']);
		$id = intval($res_db->get_id());
		if ($res_db->get_id() != null)
		{
			$sql = "UPDATE reservation SET destination='$destination', insurance='$insurance', nbpassenger='$nbpas', price='$price' WHERE id=$id";
			
			if ($conn->query($sql) === TRUE) {
				echo "Record updated successfully";
			} 
			else {
				echo "Error updating record: " . $conn->error;
			}
			
			// sql to delete a record
			$sql = "DELETE FROM passenger WHERE idres=$id";

			if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}
			
			// add data to db passenger
			foreach($res->get_passengers() as $pas)
			{
				$firstname = $pas->get_firstname();
				$lastname = $pas->get_lastname();
				$age = $pas->get_age();
				
				$sql = "INSERT INTO passenger (firstname, lastname, age, idres)
				VALUES ('".$firstname."','".$lastname."','".$age."','".$id."')";
				
				if ($conn->query($sql) == TRUE)
				{
				}
				else
				{
					echo "Error: ".$sql."<br>".$conn->error;
				}
			}
		}
	}
	else
	{
	// execute request SQL
		// add data to db reservation
		
		$sql = "INSERT INTO reservation (destination, insurance, price, nbpassenger)
		VALUES ('".$destination."','".$insurance."','".$price."','".$nbpas."')";
		
		if ($conn->query($sql) == TRUE)
		{
			$res_id = $conn->insert_id;
		}
		else
		{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		
		// add data to db passenger
		foreach($res->get_passengers() as $pas)
		{
			$firstname = $pas->get_firstname();
			$lastname = $pas->get_lastname();
			$age = $pas->get_age();
			
			$sql = "INSERT INTO passenger (firstname, lastname, age, idres)
			VALUES ('".$firstname."','".$lastname."','".$age."','".$res_id."')";
			
			if ($conn->query($sql) == TRUE)
			{
			}
			else
			{
				echo "Error: ".$sql."<br>".$conn->error;
			}
		}
	}
	
	// clear data of session
	$_SESSION = array();
	
	//end
	$conn->close();
	
	$msg = "<p class=valid>Reservation saved</p>";
	include './views/home.php';
?>