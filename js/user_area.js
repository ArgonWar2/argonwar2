$(function() {

	$('.change').each(function() {
		$(this).click(function(){
		
			$(this).parent().hide();
			$(this).parent().next().show('slow');
			$(this).parent().next().css('display', 'block'); // rendering hack

		});
	});
	
	$('.cancel').each(function() {
		$(this).click(function(){
		
			$(this).parent().hide();
			$(this).parent().prev().show();
			$(this).parent().prev().css('width', '100%');

		});
	});

});

/*
$(this).parent().next().show('slow', function() {
	alert('Animation complete.');
});
*/
