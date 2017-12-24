<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Confirmation</title>
</head>

<body>

<h1 class="row">Confirmation</h1>

<!-- Show the flight and the passengers + the price !-->
<div class="row">
	<label>Flight:</label>
	<table class="table2">
		<tr>
			<th>Destination</th>
			<th>Number of passengers</th>
			<th>Insurance</th>
		</tr>
		<tr><?php echo $flight;?></tr>
	</table>
	
	<br></br>
	
	<label>Passengers:</label>
	<table class="table1">
	<tr>
		<th>Lastname</th>
		<th>Firstname</th>
		<th>Age</th>
	</tr>
	<?php echo $pas;?>
	</table>
	
	<br></br>
	
	<label>Price:</label>
	<?php echo $price;?>
</div>

<br></br>

<div>
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="">Annuler</button>
		<button type="submit" class="btn btn-primary" name="page" value="ctrl_savedb">Confirmer</button>
	</form>
</div>

</body>
</html>