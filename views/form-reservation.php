<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Reservation: step1</title>
</head>

<body>

<h1 class="row">Réservation</h1>

    <div class="row">

        
            <h3>Prix des places:</h3>
			<table class="table1">
				<tr>
					<th>Age</th>
					<th>Prix</th>
				</tr>
				<tr>
					<td>Moins de 12 ans</td>
					<td>10€</td>
				</tr>
				<tr>
					<td>Plus de 12 ans</td>
					<td>15€</td>
				</tr>
			</table>
            Assurance annullation = 20 € peu importe le nombre de voyageurs.
        </div>
    </div>
	
	<br></br>
	
	<!-- form to reservate -->
	<form method="post" action="index.php">
		
		<div class="form">
		<table class="table2">
			<tr>
				<tr>
					<td><label for="destination">Destination</label></td>
					<td><select name="destination">
						<option value="Barcelona">Barcelona</option>
						<option value="New-York">New-York</option>
						<option value="Pragues">Pragues</option>
						<option value="London">London</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="places">Nombre de places</label></td>
					<td><input type="number" id="places" name="places"></td>
				</tr>
				<tr>
					<td><label>Assurance annulation</label></td>
					<td><input type="checkbox" id="insurancce" name="insurance"></td>
				</tr>
		</table>
		</div>
	
		<br></br>
		
		<div>
			<button type="submit" class="btn btn-primary" name="page" value="ctrl_res">Suivant</button>
			<button type="submit" class="btn btn-primary" name="">Annuler</button>
		</div>
	
	</form>
</body>
</html>