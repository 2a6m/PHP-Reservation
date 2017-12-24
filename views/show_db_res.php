<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Reservations</title>
</head>

<body>

<!-- Show DB with html -->

<h1 class="row">Liste de Reservation</h1>

<div class="row">
	<table class="table1">
	<tr>
		<th>ID</th>
		<th>Destination</th>
		<th>Insurance</th>
		<th>Number Passengers</th>
		<th>Price</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php echo $display;?>
	</table>
</div class="row">

<div class="form">
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="">Return</button>
	</form>
</div>

</body>
</html>