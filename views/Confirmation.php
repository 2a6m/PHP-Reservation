<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Confirmation</title>
</head>

<body>

<h1 class="row">Confirmation</h1>

<!-- Show the flight and the passengers + the price !-->
<div class="row">
	<label>Vol:</label>
	<table class="table1">
		<tr>
			<th>Destination</th>
			<th>Nombre de passagers</th>
			<th>Assurance</th>
		</tr>
		<tr><?php echo $flight;?></tr>
	</table>
	
	<br></br>
	
	<label>Passagers:</label>
	<table class="table1">
	<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Age</th>
	</tr>
	<?php echo $pas;?>
	</table>
	
	<br></br>
	
	<label>Prix:</label>
	<?php echo $price;?>
</div>

<br></br>

<!-- Form !-->
<div>
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="">Annuler</button>
		<button type="submit" class="btn btn-primary" name="page" value="ctrl_savedb">Confirmer</button>
	</form>
</div>

</body>
</html>