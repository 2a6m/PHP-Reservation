<h1 class="row">Recapitulatif</h1>

<!-- Show all the passengers !-->
<div class="row">
	<label>Passengers:</label>
	<table>
	<tr>
		<th>Name</th>
		<th>Age</th>
	</tr>
	<?php
	$p = $res->get_passengers();
	for($i=0;$i<count($p);$i++)
	{
		$n = (string) $p[$i]->get_name();
		$a = (string) $p[$i]->get_age();
		echo "<tr>
		<td>$n</td>
		<td>$a</td>
		</tr>";
	}
	?></table>
</div>

<!-- Buttons !-->
<form method="post" action="index.php">
	<div>
		<button type="submit" class="btn btn-primary" name="step_3">Suivant</button>
		<button type="submit" class="btn btn-primary" name="">Annuler</button>
		<!--
		To modify passengers
		<button type="submit" class="btn btn-primary" name="step_1">Retour</button>
		!-->
	</div>
</form>