<?php

class Controller_Ajax extends Controller
{
	function action_index()
	{

	}

	function action_findreg()
	{
		session_start();
		$d = new dao();

		$sel_region = $_POST['sel_region'];
		$sel_date = $_POST['date_kom'];

		$regions = $d->select("ot_regions","`ot_regions_id`=".$sel_region) or die('error from here');
                $dd = $regions[0]['ot_regions_duration_day'];		
		$new_date = new DateTime($sel_date);
		$new_date->add(new DateInterval('P'.$dd.'D'));
		$fomattedDate = $new_date->format('d.m.Y');

		$_SESSION['date_region']=$fomattedDate;

	}

	function action_findtrips()
	{
		session_start();
		$d = new dao();

		$sel_dates = $_POST['sel_dates'];
                $dates=explode(' - ',$sel_dates);
                $_SESSION['date1']=$dates[0];
                $_SESSION['date2']=$dates[1];
	}

	
}
?>