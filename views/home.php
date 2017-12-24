<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>Home</title>
</head>

<h1 class="row">Home</h1>

<?php
	if (isset($msg))
	{
		echo "$msg";
	}
?>

<body>
<div class="row">
        <div class="col-md-6">
            <form method="post" action="index.php" class="container">
			<table class="table2">
                <tr>
					<td><button id="new-reservation" type="submit" class="btn" name="page" value="show_res">Nouvelle réservation</button></td>
				</tr>
				<tr>
					<td><button id="show-reservation" type="submit" class="btn" name="page" value="show_db_res">Montrer réservations</button></td>
				</tr>
			</table>
            </form>
        </div>
</div>
</body>
</html>