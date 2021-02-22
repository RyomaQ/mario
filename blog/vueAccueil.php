<?php $titre = "Mon Blog"; ?>

<?php ob_start(); ?> <!-- Mémoire tampon -->

<?php 

	foreach($articles as $article) : ?>
		<article id="article_container">
			<header>
				<a href="<?= "article.php?id=" . $article['id'] ?>">
					<h1 class="titreArticle"><?= $article["titre"] ?></h1>
				</a>
				<br>
				<time><?= $article["_date"] ?></time>
				<br><br>
			</header>
			<p><?= $article["contenu"] ?></p>
			<br><br>
		</article>
		<hr />
<?php endforeach; ?>

<?php $contenu = ob_get_clean(); ?>

<?php require "gabarit.php"; ?>
