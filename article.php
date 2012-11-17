<hr>

<article>
	<header>
		<h2><a href="<?=ROOT.'news/'.$article->URL?>"><?=$article->title?></a></h2>
		<time><?=secondsToHumanReadableTerm(time() - $article->creationTime)?> fa - <?=$article->creationDate?></time>
	</header>
	<section>
		<?=$article->content?>
	</section>
	<footer>
		<p>Autore: <b><?=$article->author?></b></p>
		<p>Categoria: <a><?=$article->category?></a></p>	
		<div class="buttons" name=<?=$article->id?>>
			<a class="comment" title="Commenta"><?=$article->comments?></a>
			<a class="heart" title="Ti piace"><?=$article->likes?></a>
			<a class="skull" title="Non ti piace"><?=$article->hates?></a>
		</div>
	</footer>
	
	<div id="comments-article-id<?=$article->id?>"></div>
	<a class="scrollTop gray-link" href="#header">Torna su</a>
	
</article>
