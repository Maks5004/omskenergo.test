<?php

class Controller_Raspisanie extends Controller
{
	
	function action_index()
	{
		$this->view->generate('raspisanie_view.php', 'template_view.php');
	}
}

?>