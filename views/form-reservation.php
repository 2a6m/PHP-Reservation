<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Reservation: step1</title>
</head>

<body>

<h1 class="row">Reservation</h1>

<?php
	if (isset($msg))
	{
		echo "$msg";
	}
?>

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
						<option value="Barcelona" <?php if ($dest == 'Barcelona') echo 'selected="selected"';?>>Barcelona</option>
						<option value="New-York" <?php if ($dest == 'New-York') echo 'selected="selected"';?>>New-York</option>
						<option value="Pragues" <?php if ($dest == 'Pragues') echo 'selected="selected"';?>>Pragues</option>
						<option value="London" <?php if ($dest == 'London') echo 'selected="selected"';?>>London</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="places">Nombre de places</label></td>
					<td><input type="number" id="places" name="places"
					<?php
						if(isset($nbp)){echo"value=$nbp";}
					?>></td>
				</tr>
				<tr>
					<td><label>Assurance annulation</label></td>
					<td><input type="checkbox" id="insurancce" name="insurance"
					<?php
						if(isset($ins) && $ins){echo"checked=checked";}
					?>></td>
				</tr>
		</table>
		</div>
	
		<br></br>
		
	<!-- navigate !-->	
		<div>
			<button type="submit" class="btn btn-primary" name="page" value="ctrl_res">Suivant</button>
			<button type="submit" class="btn btn-primary" name="">Annuler</button>
		</div>
	
	</form>
</body>
</html>