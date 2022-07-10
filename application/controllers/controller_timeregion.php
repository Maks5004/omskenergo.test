<?php

class Controller_Timeregion extends Controller
{
	function action_index()
	{
		session_start();

                $data["date_region"] = $_SESSION['date_region'];		

		$this->view->generate('timeregion_view.php','temp_view.php', $data);
	}
	
}
?>