<?php
    $bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");

    if(isset($_POST['art_titre'], $_POST['art_contenu'])) {
        if(!empty($_POST['art_titre']) AND !empty($_POST['art_contenu'])) {

            $art_titre = htmlspecialchars($_POST['art_titre']);  
            $art_contenu = htmlspecialchars($_POST['art_contenu']); 

            $ins = $bdd->prepare('INSERT INTO t_articles (art_titre, art_contenu, art_date)
                                    VALUES (?, ?, NOW())');
            $ins->execute(array($art_titre, $art_contenu));

            $message = 'Votre article a bien été posté';

        } else {
            $message = 'Veuillez remplir tous les champs';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Rédaction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
</head>
<body id="body_publier">

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

    <form id="wysiwyg" action="" method="POST">
        <input type="text" name="art_titre" placeholder="Titre" id="input_titre"/>
        <br><br>input_titre
        <input type="file" name="image" class="input_publier"/>
        <br><br>
		<textarea name="art_contenu" placeholder="Contenu de l'article"></textarea><br><br><br>
		<input type="submit" value="Envoyer l'article" class="envoyer_article"/>
	</form>
	<br>

    <?php if(isset($message)) { echo $message; } ?>
    <img src="../image/admin/back.png" id="goback" onclick="goBack()">
    <script>
        function goBack() {
        window.history.go(-1);
        }
    </script>
    
<script src="../ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('art_contenu');</script>

</body>
</html>