<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Reservations</title>
</head>

<body>

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
	?>

<!-- Show DB with html -->

<h1 class="row">Liste de Reservation</h1>

<div class="row">
	<table class="table1">
	<tr>
		<th>ID</th>
		<th>Destination</th>
		<th>Insurance</th>
		<th>Number Passengers</th>
		<th>Price</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$id = (string) $row["id"];
				$dest = (string) $row["destination"];
				$price = (string) $row["price"];
				$nbp = (string) $row["nbpassenger"];
				
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
					  <td>$nbp</td>
					  <td>$price</td>
					  <td><form method="."post"." action="."index.php"."><button type="."submit"." class="."btn btn-primary"." name="."Show_pas"." value="."$id".">Show Passengers</button></form></td>
					  <td><form method="."post"." action="."index.php"."><button type="."submit"." class="."btn btn-primary"." name="."Load_res"." value="."$id".">Modify Reservation</button></form></td>
			          </tr>";
			}
		}

	?>
	</table>
</div class="row">

<div class="form">
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="">Return</button>
	</form>
</div>

</body>
</html>