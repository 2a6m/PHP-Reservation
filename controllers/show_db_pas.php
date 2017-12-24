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

	$idres = (string) $_POST['VolID'];
	
	$sql = "SELECT id, firstname, lastname, age FROM passenger WHERE idres = $idres";
	$result = $conn->query($sql);
	
	//end
	$conn->close();
//

// display

	
	if($result->num_rows > 0)
	{
		$display = "";
		while($row = $result->fetch_assoc())
		{
			$id = (string) $row["id"];
			$first = (string) $row["firstname"];
			$last = (string) $row["lastname"];
			$age = (string) $row["age"];
			
			$display .=	"<tr>
						<td>$id</td>
						<td>$first</td>
						<td>$last</td>
						<td>$age</td>
						</tr>";
		}
	}
	
	include "./views/show_db_pas.php";

?>