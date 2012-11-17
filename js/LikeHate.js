$(document).ready(function(){

   if (getCookie('PHPSESSID') === null) {
	//	alert('user is not logged');
	//	alert('display rules for articles');
		$('.buttons .heart').removeClass('articleVoted');
		$('.buttons .skull').removeClass('articleVoted');
	//	alert('display rules for comments');
		$('button.comment-like, button.comment-dislike').attr('title','Per votare devi effettuare il login.');
		$('button.comment-like').addClass('comment-like-inactive');
		$('button.comment-dislike').addClass('comment-dislike-inactive');
   } else {
	//	alert('user is logged');
		
		$('.comment-like').each( function() {
			var commentid = $(this).parent().attr('id').substring(8);			
		//	alert('commentid ='+commentid);
			if (localStorage.getItem('comment-like'+commentid) == 1) {
				$(this).css('opacity', '1');
				$(this).attr('title','Hai già votato questo commento.');	
			}
		});

		$('.comment-dislike').each( function() {
			var commentid = $(this).parent().attr('id').substring(8);			
		//	alert('commentid ='+commentid);
			if (localStorage.getItem('comment-dislike'+commentid) == 1) {
				$(this).css('opacity', '1');
				$(this).attr('title','Hai già votato questo commento.');
			}
		});
		
		//	if (localStorage.getItem('comment-like'))
		//}
		//if (localStorage.getItem('comment-like'+commentid) != 1 && localStorage.getItem('comment-dislike'+commentid) != 1) {
		//	alert('display rules for comments');
		//	$(this).addClass('articleVoted');
		//	$(this).attr('title','Ti è piaciuto.');
		//}
   }


	$('.heart').each(function(){
	
		var postID = $(this).parent().attr('name');
	
		$(this).click(function(){

			if (getCookie('PHPSESSID') !== null) {
				// User is logged.
				if (localStorage.getItem('like'+postID) != 1 && localStorage.getItem('hate'+postID) != 1) {
					// User hasn't voted yet. Let's add the vote!
					localStorage.setItem('like'+postID,1); // 1 means voted, 0 not
					// update db...
					$.ajax({
						type: "POST",
						url: ROOT+"function/addVoteToArticle.php",
						data: "postid="+postID+"&type=likes",
					});
					// visive changes...
					var numberOfLikes = parseInt($(this).html())+1;
					$(this).html(numberOfLikes);
					$(this).addClass('articleVoted');
					$(this).attr('title','Ti è piaciuto.');
				} else {
					// User has already voted.
					// Show "you've already voted" tooltip
					$(this)
					.removeData('qtip')
					.qtip({
					 content: {
						text: 'Hai già votato per questo articolo!'
					 },
					 position: {
						at: 'bottom right',
						my: 'top left',
						viewport: $(window), // Keep the tooltip on-screen at all times
						effect: true
					 },
					 show: {
						event: 'click',
						solo: true // Only show one tooltip at a time
					 },
					 hide: 'unfocus',
					 style: {
						classes: 'ui-tooltip qtip ui-helper-reset ui-tooltip-default ui-tooltip-shadow ui-tooltip-dark ui-tooltip-pos-tc ui-tooltip-focus ui-tooltip-rounded'
					 }
					})
				}
			}else{
				// User is not logged.
				// Show registration tooltip.
				$(this)
				.removeData('qtip')
				.qtip({
				 content: {
					text: 'Per votare devi registrarti. <a href="/registrazione">Registrati ora</a>'
				 },
				 position: {
					at: 'bottom right',
					my: 'top left',
					viewport: $(window), // Keep the tooltip on-screen at all times
					effect: true
				 },
				 show: {
					event: 'click',
					solo: true // Only show one tooltip at a time
				 },
				 hide: 'unfocus',
				 style: {
					classes: 'ui-tooltip qtip ui-helper-reset ui-tooltip-default ui-tooltip-shadow ui-tooltip-dark ui-tooltip-pos-tc ui-tooltip-focus ui-tooltip-rounded'
				 }
				})
			}
		});
		
		if (localStorage.getItem('like'+postID) == 1) {
			$(this).addClass('articleVoted');
			$(this).attr('title','Ti è piaciuto.');
		}
		
	});
	
	$('.skull').each(function(){
	
		var postID = $(this).parent().attr('name');
	
		$(this).click(function(){

			if (getCookie('PHPSESSID') !== null) {
				if (localStorage.getItem('like'+postID) != 1 && localStorage.getItem('hate'+postID) != 1) {
					localStorage.setItem('hate'+postID,1); // 1 means voted, 0 not
					// aggiorno il db...
					$.ajax({
						type: "POST",
						url: ROOT+"function/addVoteToArticle.php",
						data: "postid="+postID+"&type=hates",
					});
					// cambiamenti visivi...
					var numberOfLikes = parseInt($(this).html())+1;
					$(this).html(numberOfLikes);
					$(this).addClass('articleVoted');
					$(this).attr('title','Non ti è piaciuto.');
				} else {
					// User has already voted.
					// Show "you've already voted" tooltip
					$(this)
					.removeData('qtip')
					.qtip({
					 content: {
						text: 'Hai già votato per questo articolo!'
					 },
					 position: {
						at: 'bottom right',
						my: 'top left',
						viewport: $(window), // Keep the tooltip on-screen at all times
						effect: true
					 },
					 show: {
						event: 'click',
						solo: true // Only show one tooltip at a time
					 },
					 hide: 'unfocus',
					 style: {
						classes: 'ui-tooltip qtip ui-helper-reset ui-tooltip-default ui-tooltip-shadow ui-tooltip-dark ui-tooltip-pos-tc ui-tooltip-focus ui-tooltip-rounded'
					 }
					})
				}
				
				
			}else{
				// Show registration tooltip.
				$(this)
				.removeData('qtip')
				.qtip({
				 content: {
					text: 'Per votare devi registrarti. <a href="/registrazione">Registrati ora</a>'
				 },
				 position: {
					at: 'bottom right',
					my: 'top left',
					viewport: $(window), // Keep the tooltip on-screen at all times
					effect: true
				 },
				 show: {
					event: 'click',
					solo: true // Only show one tooltip at a time
				 },
				 hide: 'unfocus',
				 style: {
					classes: 'ui-tooltip qtip ui-helper-reset ui-tooltip-default ui-tooltip-shadow ui-tooltip-dark ui-tooltip-pos-tc ui-tooltip-focus ui-tooltip-rounded'
				 }
				})
			}	
		});
			
		if (localStorage.getItem('hate'+postID) == 1) {
			$(this).addClass('articleVoted');
			$(this).attr('title','Non ti è piaciuto.');
		}
		
	});
	
	$('body').on('click','.article-comment button', function() {
	//	alert('clicked')
		var commentid = $(this).parent().attr('id').substring(8);
	//	alert('commentid ='+commentid);
		if (getCookie('PHPSESSID') !== null) {
		//	alert('user is logged');
			if ($(this).hasClass('comment-like')) {
			//	alert('like')
				var type = 'like'
				var newValue = parseInt($('#comment-'+commentid+' .comment-karma').text()) +1;
			}
			else if ($(this).hasClass('comment-dislike')) {
			//	alert('dislike')
				var type = 'dislike'
				var newValue = parseInt($('#comment-'+commentid+' .comment-karma').text()) -1;				
			}
			if (localStorage.getItem('comment-like'+commentid) != 1 && localStorage.getItem('comment-dislike'+commentid) != 1) {
			//	alert('User hasnt voted for this comment yet. Lets add the vote!');
				localStorage.setItem('comment-'+type+commentid,1); // 1 means voted, 0 not
			//	alert('send request');
				$.ajax({
					type: "POST",
					url: ROOT+"function/addVoteToComment.php",
					data: "commentid="+commentid+"&type="+type,
					success: function() {
					//	alert('display rules');
						$('#comment-'+commentid+' .comment-karma').text(newValue);			
						if (newValue == 0)
							$('#comment-'+commentid+' .comment-karma').css('color','white');
						else if (newValue > 0) {
							$('#comment-'+commentid+' .comment-karma').css('color','#0f0'); //green
							$('#comment-'+commentid+' .thumb_mini').removeClass('down').addClass('up');
						} else {
							$('#comment-'+commentid+' .comment-karma').css('color','#f55'); //red
							$('#comment-'+commentid+' .thumb_mini').removeClass('up').addClass('down');
						}
					//	alert('show elements');
						$('#comment-'+commentid+' .comment-karma').css('visibility','visible');
						$('#comment-'+commentid+' .thumb_mini').css('visibility','visible');
					//	alert('light the pressed button');
						$('#comment-'+commentid+' .comment-'+type).css('opacity','1');
					}
				});	
			} else {
			//	alert('User has already voted for this comment');
			}
		} else {
			//alert('user is not logged');
			var foo = 0;
		}
	});

	$('*[title]').qtip({
	  style: {
		 classes: 'ui-tooltip-dark ui-tooltip-shadow ui-tooltip-rounded'
	  }
	});
	
}); //document.ready()