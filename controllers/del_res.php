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

	$id = (string) $_POST['delID'];
	
	// delete the passengers of the reservation
	$sql = "DELETE FROM passenger WHERE idres = $id";
	$result = $conn->query($sql);
	
	// delete the reservation
	$sql = "DELETE FROM reservation WHERE id = $id";
	$result = $conn->query($sql);
	
	//end
	$conn->close();
//

$msg = "<p class=valid>Reservation $id well deleted</p>";

include './views/home.php';

?>