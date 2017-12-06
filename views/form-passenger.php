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
			<label for="lastname">Nom</label>
			<input type="string" id="lastname" name="lastname" 
			<?php
			if($bool){echo"value=$ln";}
			?>>
		</div>
		
		<div class="form">
			<label for="firstname">Prénom</label>
			<input type="string" id="firstname" name="firstname" 
			<?php
			if($bool){echo"value=$fn";}
			?>>
		
		<div class="form">
			<label for="age">Age</label>
			<input type="number" id="age" name="age" 
			<?php
			if($bool){echo"value=$a";}
			?>>
		</div>
		
		<br></br>
		
		<div>
			<button type="submit" class="btn btn-primary" name="step_2">Suivant</button>
			<button type="submit" class="btn btn-primary" name="">Annuler</button>
		</div>
	
	</form>