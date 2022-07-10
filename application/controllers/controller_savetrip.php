<?php

class Controller_Savetrip extends Controller
{
	function action_index()
	{
		session_start();

		$d = new dao();

		$sel_region = $_POST['region'];
		$sel_courier = $_POST['courier'];
		$sel_date = $_POST['date'];
		$sel_date_arrival = $_POST['date_arrival'];

		$sel_date = strtotime($sel_date);
		$sel_date_arrival = strtotime($sel_date_arrival);
		$sel_date_back = $sel_date_arrival + ($sel_date_arrival-$sel_date);

		$sel_date = date( 'Y-m-d H:i:s', $sel_date);
		$sel_date_arrival = date( 'Y-m-d H:i:s', $sel_date_arrival);
		$sel_date_back = date( 'Y-m-d H:i:s', $sel_date_back);

		$data["sel_region"] = $sel_region;
		$data["sel_courier"] = $sel_courier;
		$data["sel_date"] = $sel_date;
		$data["sel_date_arrival"] = $sel_date_arrival;

		$data["sel_arrivial"] = $d->select("ot_schedule","ot_schedule_courier=$sel_courier and ot_schedule_date<='$sel_date' and ot_schedule_date_back>='$sel_date'");

                if ($data["sel_arrivial"]==null) {
			$sendok = $d->insert("ot_schedule","ot_schedule_courier, ot_schedule_region, ot_schedule_date, ot_schedule_date_arr, ot_schedule_date_back","'$sel_courier', '$sel_region', '$sel_date', '$sel_date_arrival','$sel_date_back'") or die('error from here');
		}

		$this->view->generate('savetrip_view.php','template_view.php',$data);
	}

}
?>