$(document).ready( function(){

	$('input[name=versioningtype]').change( function(){
		var latestVersion = $('#latestVersion').text();
		latestVersion = latestVersion.split('.'); // latestVersion is now an array
		var h = parseInt(latestVersion[0]);
		var m = parseInt(latestVersion[1]);
		var l = parseInt(latestVersion[2]);
		switch($(this).val()){
			case 'high':
				++h;
				m = 0;
				l = 0;
				break;
			case 'medium':
				++m;
				l = 0;
				break;
			case 'low':
				++l;
		}
		$('#nextVersion').html(h+'.'+m+'.'+l);
	});
	
	$('a[name=yes]').click( function(){
		$('#continue').css('display','block');
	});
}); // doc ready