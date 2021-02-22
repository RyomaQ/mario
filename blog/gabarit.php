<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Blog</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
		<link rel="stylesheet" type="text/css" href="../css/style2.css">
		<link rel="stylesheet" type="text/css" href="../css/ionicons.min.css">
	</head>
	<body id="body_blog">

		<div id="global">
			<!-- icon -->

			<i id="navicon-burger" class="ion-navicon-round icone"></i> 
			<nav id="nav">
				<ul id="menu">
					<li><a href="../index.php">Accueil</a></li>
					<li><a href="../index_description.php">Biographie</a></li>
					<li><a href="../index_images.php">Images</a></li>
					<li><a href="index_blog.php">Blog</a></li>
					<li><a href="../index_contact.php">Contact</a></li>
				</ul>
				<!-- quitter le menu burger -->
				<p class="fermeMenu">X</p>
			</nav>
			<br> <br> <br> <br>

			<header>
				<a href="index.php" class="titreBlog"><h1 class="titreBlog">Mon Blog</h1></a>
			</header>
			
			<div id="contenuBlog">
				<img src="../image/blog/mario-luigi-kart.png" id="mario-luigi-kart" alt="mario-luigi-kart">
				<?= $contenu ?> 
			</div>

			<footer id="piedBlog"></footer>

		</div>

		<?php include "../inc/footer.php"; ?>

		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/TweenMax.min.js"></script>
		<script src="../js/monscript6.js"></script>

	</body>
</html>