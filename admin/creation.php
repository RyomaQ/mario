<?php

//$bdd = new PDO("mysql:host=localhost;charset=utf8", "root", "");

//$bdd->query("CREATE DATABASE admin;");

$bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");

// $bdd->query("CREATE TABLE t_users(
//     user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
//     user_pseudo VARCHAR(20),
//     user_mail VARCHAR(50),
//     user_pass VARCHAR(30)
//     );");

//$bdd->query("INSERT INTO t_users(user_pseudo, user_mail, user_pass) 
//            VALUES('rkeno', 'ryoma1@hotmail.fr', '8643');");

$requete = $bdd->prepare("INSERT INTO t_users(user_pseudo, user_mail, user_pass) VALUES(?,?,?);");
$requete->execute(array("Max", "monmail@gmail.com", "123456"));