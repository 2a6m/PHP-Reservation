<?php
	
	if(isset($_POST['destination'])||isset($_POST['places']))
	{
		$msg = "<p class=error>There is an error, could you restart</p>";
	}

	include './views/form-reservation.php';
	
?>