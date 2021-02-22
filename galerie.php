<?php
	$bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");

	// printf('<pre>$_FILES: %s</pre>', print_r($_FILES, true));
	// printf('<pre>$_FILES["image"]: %s</pre>', print_r($_FILES["image"], true));


	$tableau=$_FILES["image"];
	$path = 'C:\xampp\htdocs\site\image\galerie\\'.$tableau["name"];
	move_uploaded_file($tableau["tmp_name"] , $path);

	$ins = $bdd->prepare('INSERT INTO t_images (path, description)
									VALUES (?, ?)');
	$ins->execute(array($_FILES["image"]["name"], $_POST["description"]));
			
	$sql =  'SELECT description , path FROM images';
		
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Image Upload</title>
		<?php include "inc/head.php"; ?>
	</head>

	<body id="body_publier_img">

		<div id="fixed-div"><?php include "inc/nav.php"; ?></div>
		
		<h1 id="publier_img">Publier une image dans la galerie</h1>

		<div id="content">
			<form method="POST" action="galerie.php" enctype="multipart/form-data" id="form_galerie">
				<input type="hidden" name="size" value="1000000">
				<div><br>
					<input type="file" name="image" class="input_publier"><br><br>
				</div>
				<div>
					<textarea 
						id="text" 
						cols="45" 
						rows="10" 
						name="description" 
						placeholder="Ajoutez une description à cette image..."></textarea>
				</div>
				<div>
					<button type="submit" name="upload" class="envoyer_article">Publier</button><br>
				</div>
			</form>
		</div>
		<img src="image/admin/back.png" id="goback_galerie" onclick="goBack()" alt="page précédente">
		<script>
			function goBack() {
			window.history.go(-1);
			}
		</script>
		<?php include "inc/js.php"; ?>
	</body>
</html>