<?php
	
	if(isset($_POST['destination'])||isset($_POST['places']))
	{
		$msg = "<p class=error>ERROR, there is an incorrect value.</p>";
	}

	include './views/form-reservation.php';
	
?>