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

//	execute request SQL
	
	$sql = "SELECT id, destination, insurance, price, nbpassenger FROM reservation";
	$result = $conn->query($sql);
	
	//end
	$conn->close();
//

// take information
	if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$idres = $row["id"];
				$dest = $row["destination"];
				$price = $row["price"];
				$nbp = $row["nbpassenger"];
				
				if ($row["insurance"] == 1)
				{
					$ins = "Oui";
				}
				else
				{
					$ins = "Non";
				}
			}
		}
//

//	execute request SQL

	
	$sql = "SELECT id, firstname, lastname, age FROM passenger WHERE idres = $idres";
	$result = $conn->query($sql);
	
	//end
	$conn->close();
//

// take information		
	if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$idpas = (string) $row["id"];
				$first = (string) $row["firstname"];
				$last = (string) $row["lastname"];
				$age = (string) $row["age"];
			}
		}
//
?>