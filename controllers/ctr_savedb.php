<?php

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
    echo "Connected successfully";
	
	// execute request SQL
		// add data to db reservation
	$res = unserialize($_SESSION['res'])
	
	$destination = 
	$insurance = $res->get_insurance();
	$price = 
	
	$sql = "INSERT INTO reservation (destination, insurance, price)
    VALUES ('".$destination."','".$insurance."','".$price."')";
	
	// show result
	
	//end
	$result->close();
	$mysqli->close();
?>