<?php $titre ="Mon Blog - " . $article["titre"]; ?>

<?php ob_start(); ?>

<article>
	<header>
		<h1 class="titreArticle"><?= $article["titre"] ?></h1>
		<br>
		<time><?= $article["_date"] ?></time>
		<br><br>
	</header>
	<p><?= $article["contenu"] ?></p>
	<br><br>
</article>
<hr />

<?php $contenu = ob_get_clean(); ?>

<?php require "gabarit.php"; ?>
