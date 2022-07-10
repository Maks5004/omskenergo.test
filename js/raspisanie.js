$(document).ready(function() { 

	$('#date_komandirovka').daterangepicker({
		opens: 'left',
    		locale: {
      			format: 'DD.MM.YYYY'
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