<h1 class="row">Confirmation</h1>

<!-- Show the flight and the passengers + the price !-->
<div class="row">
	<label>Flight:</label>
	<table>
		<tr>
			<th>Destination</th>
			<th>Number of passengers</th>
			<th>Insurance</th>
		</tr>
		<tr><?php
		$dest = $res->get_destination();
		$nbr = $res->get_number_passenger();
		if ($res->get_insurance())
		{
			$ins = 'Yes';
		}
		else
		{
			$ins = 'No';
		}
		
		echo"<td>$dest</td>
			 <td>$nbr</td>
			 <td>$ins</td>"
		?></tr>
	</table>
	
	<br></br>
	
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
	
	<br></br>
	
	<label>Price:</label>
	<?php
	$price = $res->get_price();
	echo"<br>$price</br>"
	?>
</div>

<br></br>

<div>
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="">Annuler</button>
	</form>
</div>