$(document).ready(function(){
	$('a[href^=#]:not([href=#])').click(function(e){
  		$('html, body').animate({ 
                 scrollTop: $($(this).attr("href"))
                 .offset().top }, 1000);
   		 e.preventDefault();

 	});
});