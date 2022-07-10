<?php

class Controller_Trips extends Controller
{
	function action_index()
	{
		session_start();

		$d = new dao();

		$sel_date1 = $_SESSION['date1'];
		$sel_date2 = $_SESSION['date2'];

		$sel_date1 = strtotime($sel_date1);
		$sel_date2 = strtotime($sel_date2);

		$sel_date1 = date( 'Y-m-d H:i:s', $sel_date1);
		$sel_date2 = date( 'Y-m-d H:i:s', $sel_date2);

		$data["sel_date1"] = $sel_date1;
		$data["sel_date2"] = $sel_date2;

		$sel_arrivial = $d->select("ot_schedule","ot_schedule_date>='$sel_date1' and ot_schedule_date<='$sel_date2'","ORDER BY `ot_schedule_date`");

                if ($sel_arrivial==null) {
			$data["sel_error"]="В данный период командировок нет.";
		}
		
		for ($i=0; $i<count($sel_arrivial); $i++){
			$courier = $d->select("ot_couriers","ot_couriers_id=".$sel_arrivial[$i]['ot_schedule_courier']);
			$main_tab[$i]['courier'] = $courier[0]['ot_couriers_fio'];
			$region = $d->select("ot_regions","ot_regions_id=".$sel_arrivial[$i]['ot_schedule_region']);
			$main_tab[$i]['region'] = $region[0]['ot_regions_name'];

			$new_date = new DateTime($sel_arrivial[$i]['ot_schedule_date']);
			$fomattedDate = $new_date->format('d.m.Y');

			$main_tab[$i]['date_out'] = $fomattedDate;

			$new_date = new DateTime($sel_arrivial[$i]['ot_schedule_date_arr']);
			$fomattedDate = $new_date->format('d.m.Y');

			$main_tab[$i]['date_arr'] = $fomattedDate;

			$new_date = new DateTime($sel_arrivial[$i]['ot_schedule_date_back']);
			$fomattedDate = $new_date->format('d.m.Y');

			$main_tab[$i]['date_back'] = $fomattedDate;
		}

		$data["main_tab"]=$main_tab;

		$this->view->generate('trips_view.php','temp_view.php',$data);
	}

}
?>