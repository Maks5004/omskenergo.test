$(document).ready(function() { 

	$('#date_komandirovka').daterangepicker({
		"opens": "center",
    		"locale": {
      			"format": 'DD.MM.YYYY',
			"separator": " - ",
			"applyLabel": "Сохранить",
			"cancelLabel": "Назад",
			"daysOfWeek": [
				"Вс",
				"Пн",
				"Вт",
				"Ср",
				"Чт",
				"Пт",
				"Сб"
			],
			"monthNames": [
				"Январь",
				"Февраль",
				"Март",
				"Апрель",
				"Май",
				"Июнь",
				"Июль",
				"Август",
				"Сентябрь",
				"Октябрь",
				"Ноябрь",
				"Декабрь"
			],
			"firstDay": 1
	    	} 
	});
	
	$('#form_submit').click(function() {
		var dateSelected = $('#date_komandirovka').val();
		$.ajax({
			type: "POST",
			data: "sel_dates=" + dateSelected,
			url: "/ajax/findtrips",
			success: function(data)
			{
				$('#print_div').load("/trips");
			}
		})

	});

});