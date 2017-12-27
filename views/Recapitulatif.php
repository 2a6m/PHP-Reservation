<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Recapitulatif</title>
</head>

<body>

<h1 class="row">Recapitulatif</h1>

<!-- Show all the passengers !-->
<div class="row">
	<label>Passagers:</label>
	<table class="table1">
	<tr>
		<th>Nom</th>
		<th>Prenom</th>
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
		<button type="submit" class="btn btn-primary" name="page" value="ctrl_recap">Suivant</button>
		<button type="submit" class="btn btn-primary" name="">Annuler</button>
		<button type="submit" class="btn btn-primary" name="page" value="show_pas">Modifier</button>
	</div>
</form>

</body>
</html>