$(document).ready(function(){
	var filter = document.getElementById('filter').value;
	$(filter).keyup(function(){

		$('form').submit(function(){
			var filter = $(this).serialize();

			$.ajax({
				url: '../_pages/_actions/listResults.php',
				type: 'POST',
				dataType: 'html',
				data: filter,
				sucess: function(data){
					$('.list-tBody').empty().html(data);
				}
			});
		
			return false;
		
		});

		console.log(filter);
		$('form').trigger('submit');
	});

});