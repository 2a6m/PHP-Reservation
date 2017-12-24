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

// display
	
	if($result->num_rows > 0)
	{
		$display = "";
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
			$display .=	"<tr>
						<td>$id</td>
						<td>$dest</td>
						<td>$ins</td>
						<td>$nbp</td>
						<td>$price</td>
						<td><form method=post action=index.php>
								<input type=hidden name=VolID value=$id></input>
								<button type=submit class=btn btn-primary name=page value=show_db_pas>Show Passengers</button>
							</form></td>
						<td><form method=post action=index.php>
								<input type=hidden name=loadID value=$id></input>
								<button type=submit class=btn btn-primary name=page value=ctrl_load>Modify Reservation</button>
							</form></td>
						<td><form method=post action=index.php>
								<input type=hidden name=delID value=$id></input>
								<button type=submit class=btn btn-primary name=page value=del_res>Delete Reservation</button>
							</form></td>
						</tr>";
		}
	}


	include "./views/show_db_res.php";

?>