$(document).ready(function(){

	var numberOfPosts = 0; // solo per controllare se il post è uno solo (pagina dell'articolo singolo) o tanti (pagina news)

	$('.comment').each(function(){
		
		numberOfPosts++;
		var postID = $(this).parent().attr('name');
		
		$(this).click(function(){
			if (numberOfPosts > 1) { // per evitare che i post vengano ricaricati anche sull'articolo singolo, dove invece sono visualizzati di default
				if ( $('#comments-article-id'+postID).is(":visible") ) { // Checks for display:[none|block], ignores visible:[true|false]
					// i commenti sono già visibili, quindi li nascondo
					$(this).removeClass('commentOpen');
					$('#comments-article-id'+postID).hide('slow');		
				} else {
				//	alert('loading comments via AJAX');
					$.ajax({
						type: "POST",
						dataType: "html",				
						url: ROOT+"function/loadArticleComments.php",
						context: $(this),						
						data: "postid="+postID,
						success: function( data ) {
							$('#comments-article-id'+postID).html(data).show('slow');
							// illumino il pulsante
							$(this).addClass('commentOpen');
							if (getCookie('PHPSESSID') === null) {
							//	alert('user is not logged');
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
						   }
							$('*[title]').qtip({
							  style: {
								 classes: 'ui-tooltip-dark ui-tooltip-shadow ui-tooltip-rounded'
							  }
							});						   
						}
					});
				}
			}
		});
	});
});