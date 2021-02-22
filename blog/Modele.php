<?php 

function getArticles() {
	$bdd = getBdd();
	$articles = $bdd->query("SELECT art_id as id, art_date as _date, art_titre as titre, art_contenu as contenu FROM t_articles ORDER BY art_id DESC;");
	return $articles;
}

function getBdd() {
	$bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $bdd;
}

function getArticle($id) {
	$bdd = getBdd();
	$article = $bdd->prepare("SELECT art_id as id, art_date as _date, art_titre as titre, art_contenu as contenu FROM t_articles WHERE art_id = ?;");
	$article->execute(array($id));
	if($article->rowCount() == 1) {
		return $article->fetch();
	}
	else {
		throw new Exception("Aucun article ne correspond à l'identifiant '$id'");
	}
}

function publierArticle($titre, $contenu) {
	$bdd = getBdd();
	$requete = $bdd->prepare("INSERT INTO t_articles(art_date, art_titre, art_contenu)
							VALUES(NOW(), ?, ?);");
	$requete->execute(array($titre,$contenu));
}

function publier($titre, $contenu) {
	publierArticle ($titre, $contenu);
	require "Vue/vuePublier.php";
}
