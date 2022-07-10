<?php

class Controller_Komandirovka extends Controller
{
	
	function action_index()
	{
		session_start();

		$d = new dao();
		$regions = $d->select("ot_regions") or die('error from here');
                $data["regions"] = $regions;		

		$couriers = $d->select("ot_couriers") or die('error from here');
                $data["couriers"] = $couriers;		


		$this->view->generate('komandirovka_view.php', 'template_view.php',$data);
	}
}

?>