<h1>Заполнение формы поездки</h1>
<?php extract($data);
?>


<form class="business_trip_form" id="trip_form" action="/savetrip" method="post" name="trip_form">
	<div class="screen__row region">
		<p>Регион отправления:</p>
		<p>
		<select name="region" class="field form_region" placeholder="" id="sel_region" required>
		<option value="" disabled selected>Выберите регион</option>
<?php 
for ($i=0; $i<count($regions); $i++) {
	echo ("<option value=\"".$regions[$i]["ot_regions_id"]."\">".$regions[$i]["ot_regions_name"]."</option>");
}
 

?>
		</select></p>
		<p>ФИО сотрудника:</p>
		<p>
		<select name="courier" class="field form_courier" placeholder="" required>
		<option value="" disabled selected>Выберите сотрудника</option>
<?php 
for ($i=0; $i<count($couriers); $i++) {
	echo ("<option value=\"".$couriers[$i]["ot_couriers_id"]."\">".$couriers[$i]["ot_couriers_fio"]."</option>");
}
 

?>
		</select></p>
		<p>Дата поездки:</p>
		<input class="field form_date" type="date" name="date" id="date_komandirovka">
		<p>Дата прибытия в регион:</p>
		<p>
		<input name="date_arrival" class="field date_arrival" type="text" id="date_arrival" value="##.##.####" readonly>
		</p>
	</div>
	<button type="submit" name="submit" class="field form_submit" id="form_submit">Записать</button>
</form>
