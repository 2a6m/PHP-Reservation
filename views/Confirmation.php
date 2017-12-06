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
		//$dest = $res->get_destination();
		$nbr = $res->get_number_passenger();
		if ($res->get_insurance())
		{
			$ins = 'Yes';
		}
		else
		{
			$ins = 'No';
		}
		
		echo"<td>Ibiza</td>
			 <td>$nbr</td>
			 <td>$ins</td>"
		?></tr>
	</table>
	
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
	
	<label>Price:</label>
	<?php
	$price = $res->get_price();
	echo"<br>$price</br>"
	?>
</div>