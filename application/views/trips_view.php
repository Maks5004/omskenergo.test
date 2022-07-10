<?php 
extract($data);
//echo($sel_date1."<br>");
//echo($sel_date2."<br>");

if (isset($sel_error)) {
	echo("<p> $sel_error </p>");
} else {
?>
<table class="table_trips">
	<tr>
		<td class="table_zag">Курьер</td>
		<td class="table_zag">Регион</td>
		<td class="table_zag">Дата отъезда</td>
		<td class="table_zag">Дата прибытия</td>
		<td class="table_zag">Дата возвращения</td>
	</tr>
<?	for ($i=0; $i<count($main_tab); $i++) {?>
	<tr>
<?
           echo("<td>".$main_tab[$i]['courier']."</td>");
           echo("<td>".$main_tab[$i]['region']."</td>");
           echo("<td>".$main_tab[$i]['date_out']."</td>");
           echo("<td>".$main_tab[$i]['date_arr']."</td>");
           echo("<td>".$main_tab[$i]['date_back']."</td>");
?>
	</tr>
<?	}
?>
</table>
<?}

?>