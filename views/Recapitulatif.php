<h1 class="row">Recapitulatif</h1>

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