<?php

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
//

// execute request SQL
	// add data to db reservation
	$res = unserialize($_SESSION['res']);
	
	$destination = $res->get_destination();
	$price = $res->get_price();
	if ($res->get_insurance())
	{
		$insurance = 1;
	}
	else
	{
		$insurance = 0;
	}
	$nbpas = $res->lenght_passengers();
	
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
//
	
	//end
	$conn->close();
?>