$(document).ready(function(){

	$('#filter').keyup(function(){

		$('form').submit(function(){
			var filter = $(this).serialize();

			$.ajax({
				url: '../_pages/_actions/listResults.php',
				type: 'POST',
				dataType: 'html',
				data: filter,
				sucess: function(data){
					$('#searchResult').empty().html(data);
				}
			});
		
			return false;
		
		});

		$('form').trigger('submit');

	});

});