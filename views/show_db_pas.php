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

	$idres = (string) $_POST['Show_pas'];
	
	$sql = "SELECT id, firstname, lastname, age FROM passenger WHERE idres = $idres";
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
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Age</th>
		<th></th>
	</tr>
	<?php
	
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$id = (string) $row["id"];
				$first = (string) $row["firstname"];
				$last = (string) $row["lastname"];
				$age = (string) $row["age"];
				
				echo "<tr>
				      <td>$id</td>
				      <td>$first</td>
				      <td>$last</td>
					  <td>$age</td>
					  <td><form method="."post"." action="."index.php"."><button type="."submit"." class="."btn btn-primary"." name="."Load_res".">Modify Reservation</button></form></td>
			          </tr>";
			}
		}

	?>
	</table>

</div class="row">

<div class="form">
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="show-res">Return</button>
	</form>
</div>