<?php

$bdd = new PDO("mysql:host=localhost;charset=utf8", "root", "");
$bdd->query("CREATE DATABASE admin;");

$bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");
$bdd->query("CREATE TABLE t_articles(
	art_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
	art_date DATETIME,
	art_titre VARCHAR(50),
	art_contenu VARCHAR(1000)
	);");

$bdd->query("INSERT INTO t_articles(art_date, art_titre, art_contenu) VALUES(NOW(), 'Premier article', 'Bonjour, et bienvenue sur ce blog');");
$bdd->query("INSERT INTO t_articles(art_date, art_titre, art_contenu) VALUES(NOW(), 'Deuxième article', 'Texte du deuxième article');");