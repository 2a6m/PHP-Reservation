<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Reservations Passengers</title>
</head>

<body>

<!-- Show DB with html -->

<h1 class="row">Liste de Reservation</h1>

<div class="row">
	<table  class="table1">
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Age</th>
	</tr>
	<?php echo $display;?>
	</table>

</div class="row">

<div class="form">
	<form method="post" action="index.php">
		<button type="submit" class="btn btn-primary" name="show-res">Return</button>
	</form>
</div>

</body>
</html>