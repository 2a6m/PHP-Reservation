<h1 class="row">Réservation</h1>

    <div class="row">

        
            <h3>Prix des places:</h3>
			<table>
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
			<label for="destination">Destination</label>
			<select name="destination">
				<option value="Barcelona">Barcelona</option>
				<option value="New-York">New-York</option>
				<option value="Pragues">Pragues</option>
				<option value="London">London</option>
			</select>
		</div>
		
		<div class="form">
			<label for="places">Nombre de places</label>
			<input type="number" id="places" name="places">
		</div>
		
		<div class="form-check">
			<label><input type="checkbox" id="insurancce" name="insurance">Assurance annulation</label>
		</div>
	
		<br></br>
		
		<div>
			<button type="submit" class="btn btn-primary" name="step_1">Suivant</button>
			<button type="submit" class="btn btn-primary" name="">Annuler</button>
		</div>
	
	</form>