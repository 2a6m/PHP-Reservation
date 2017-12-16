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
	
	$sql = "SELECT id, destination, insurance FROM reservation";
	$result = $conn->query($sql);
	
	//end
	$conn->close();

	?>

<!-- Show DB with html -->

<h1 class="row">Liste de Reservation</h1>

<div class="row">
	<table>
	<tr>
		<th>ID</th>
		<th>Destination</th>
		<th>Insurance</th>
	</tr>
	<?php
	
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$id = (string) $row["id"];
				$dest = (string) $row["destination"];
				if ($row["insurance"] == 1)
				{
					$ins = "Oui";
				}
				else
				{
					$ins = "Non";
				}
				echo "<tr>
				      <td>$id</td>
				      <td>$dest</td>
				      <td>$ins</td>
			          </tr>";
			}
		}

	?>
	</table>
</div class="row">