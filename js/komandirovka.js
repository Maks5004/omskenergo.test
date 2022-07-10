$(document).ready(function() { 
	Date.prototype.toDateInputValue = (function() {
		var local = new Date(this);
		local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
		return local.toJSON().slice(0,10);
	});

	$('#date_komandirovka').val(new Date().toDateInputValue());

	$('#date_komandirovka').change(function() {
		var valueSelected = $('#sel_region').val();

		if (valueSelected !== null) {
			var dateSelected = $('#date_komandirovka').val();
			$.ajax({
				type: "POST",
				data: "sel_region=" + valueSelected +"&date_kom="+dateSelected,
				url: "/ajax/findreg",
				success: function(data)
				{
					$.post("/timeregion", function(data) {
						$('#date_arrival').val(data);
					});
				}
			})
		}
	});


	$('#sel_region').change(function() {
		var optionSelected = $("option:selected", this);
		var valueSelected = this.value;
		var dateSelected = $('#date_komandirovka').val();
		$.ajax({
			type: "POST",
			data: "sel_region=" + valueSelected +"&date_kom="+dateSelected,
			url: "/ajax/findreg",
			success: function(data)
			{
				$.post("/timeregion", function(data) {
					$('#date_arrival').val(data);
				});
			}
		})

	});

});
