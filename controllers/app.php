<?php

class App
{
	public function start()
	{
		if (isset($_POST['new']))
		{
            $this->new_res();
		}
		else
		{
			$this->home();
		}
	}
	
	public function home()
	{
		include 'views/home.php';
	}
	
	public function new_res()
	{
		include 'views/form1.php';
	}
}
?>