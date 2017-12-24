<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Reservation: step2</title>
</head>

<body>

<h1 class='row'>Encoder passager</h1>

	<!-- form to encode data passenger -->
	<form method="post" action="index.php">
		
		<?php
			$bool = $res->lenght_passengers() == $res->get_number_passenger();
			if ($bool)
			{
				$idx = $res->lenght_passengers_update();
				$pas = $res->get_passengers()[$idx];
				$ln = $pas->get_lastname();
				$fn = $pas->get_firstname();
				$a = $pas->get_age();
			}
		?>
	
		<div class="form">
		<table class="table2">
			<tr>
				<td><label for="lastname">Nom</label></td>
				<td><input type="string" id="lastname" name="lastname" 
				<?php
				if($bool){echo"value=$ln";}
				?>></td>
			</tr>
			<tr>
				<td><label for="firstname">Prénom</label></td>
				<td><input type="string" id="firstname" name="firstname" 
				<?php
				if($bool){echo"value=$fn";}
				?>></td>
			</tr>
			<tr>
				<td><label for="age">Age</label></td>
				<td><input type="number" id="age" name="age" 
				<?php
				if($bool){echo"value=$a";}
				?>></td>
			</tr>
		</table>
		</div>
		
		<br></br>
		
		<div>
			<button type="submit" class="btn btn-primary" name="page" value="ctrl_pas">Suivant</button>
			<button type="submit" class="btn btn-primary" name="">Annuler</button>
		</div>
	
	</form>
	
</body>
</html>