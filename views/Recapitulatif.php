<h1 class="row">Recapitulatif</h1>

<!-- Show all the passengers !-->
<div class="row">
	<label>Passengers:</label>
	<table>
	<tr>
		<th>Lastname</th>
		<th>Firstname</th>
		<th>Age</th>
	</tr>
	<?php
	$p = $res->get_passengers();
	for($i=0;$i<count($p);$i++)
	{
		$ln = (string) $p[$i]->get_lastname();
		$fn = (string) $p[$i]->get_firstname();
		$a = (string) $p[$i]->get_age();
		echo "<tr>
		<td>$ln</td>
		<td>$fn</td>
		<td>$a</td>
		</tr>";
	}
	?></table>
</div>

<br></br>

<!-- Buttons !-->
<form method="post" action="index.php">
	<div>
		<button type="submit" class="btn btn-primary" name="step_3">Suivant</button>
		<button type="submit" class="btn btn-primary" name="">Annuler</button>
		<!-- Attention le name n'est pas bon,il faut trouver autres chose !-->
		<button type="submit" class="btn btn-primary" name="modify_passenger">Modifier</button>
	</div>
</form>