<?php

	include_once './models/reservation.php';
	include_once './models/passenger.php';

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

	$id = $_POST['loadID'];
	
//	execute request SQL for the reservation
	
	$sql = "SELECT id, destination, insurance, price, nbpassenger FROM reservation WHERE id = $id";
	$result = $conn->query($sql);

// take information via the id
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
				$ins = true;
			}
			else
			{
				$ins = false;
			}
			
			$res = new reservation($ins);
			$res->set_destination($dest);
			$res->set_number_passenger($nbp);
			$res->set_id($idres);
		}
	}

//	execute request SQL for the passengers

	
	$sql = "SELECT id, firstname, lastname, age FROM passenger WHERE idres = $id";
	$result = $conn->query($sql);
	
//end
	$conn->close();

// take information		
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$idpas = $row["id"];
			$first = $row["firstname"];
			$last = $row["lastname"];
			$age = $row["age"];
			
			$passenger = new passenger($first, $last, $age);
			$res->add_passenger($passenger);
		}
	}
	
	$res->save_passengers();
	
	// save reservation on reservation database
	$_SESSION['res_db'] = serialize($res);
	
	include './controllers/show_res.php';
?>