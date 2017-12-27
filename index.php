
<?php
	session_start();
	
	if(!empty($_POST['page']) && is_file('./controllers/'.$_POST['page'].'.php'))
	{
		include './controllers/'.$_POST['page'].'.php';	
	}

	else
	{
	
		include 'views/home.php';
	}
?>