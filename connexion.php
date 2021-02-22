<!DOCTYPE html>
<html id="html-co" lang="fr">
    <head>
        <title>Page de connexion</title>
        <?php include "inc/head.php"; ?>
    </head>
    <body>
        
        <div id="div_connexion">
        <?php include "inc/nav.php"; ?>
            <form action="admin.php?action=connexion" method="post" id="form_connexion">
                <input type="text" name="login" placeholder="Pseudo" class="input_co"/> <br>
                <input type="password" name="pass" placeholder="Mot de passe" class="input_co"/> <br><br>
                <input type="submit" name="Valider" class="input_co"/>
            </form>
            <img src="image/admin/key.png" id="mario-key" alt="mario-key">
        </div>

        <?php include "inc/footer.php"; ?>

        <?php include "inc/js.php"; ?>

    </body>
</html>