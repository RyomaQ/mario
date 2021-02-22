<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "inc/head.php"; ?>
        <title>Page d'administration</title>
    </head>
    <body id="admin_body">
        <?php include "inc/nav.php"; ?>
        <?php
            if(isset($_GET["action"])) {
                if($_GET["action"] == "ajouter") {
                    $bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");
                    $requete = $bdd->prepare("INSERT INTO t_users(user_pseudo, user_pass)
                                        VALUES(?,?);");
                    $requete->execute(array($_POST["newLogin"], $_POST["newPass"])); ?>

                    <h2 class="bienvenue">Espace administrateur</h2>

                    <div class="div_ajout">
                    <p class="add_user">Ajouter un utilisateur</p>
                    <form action="admin.php" method="post" class="form_uti">
                        <label for="newLogin" class="nouveaux_champs">Nouveau Login</label> 
                        <input type="text" name="newLogin"/> <br><br>
                        <label for="newPass" class="nouveaux_champs">Nouveau Pass</label>
                        <input type="text" name="newPass"/><br><br>
                        <input type="submit" class="valider_admin" value="Valider"/><br><br>
                    </form>
                    </div>
                    <?php
                }
                else if($_GET["action"] == "connexion") {

                    if(isset($_POST["login"]) && isset($_POST["pass"])) {

                        $bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");
                        $requete = $bdd->prepare("SELECT user_pseudo, user_pass FROM t_users WHERE user_pseudo= ?;");
                        $requete->execute(array($_POST["login"]));
                        $resultat = $requete->fetch();
                        
                        // var_dump($resultat);
                        // echo "<pre>";
                        // print_r($resultat);
                        // echo "</pre>";
                
                        if($resultat != false) {
                            if($resultat["user_pseudo"] === $_POST["login"] && $resultat["user_pass"] === $_POST["pass"]) {
                                ?>
                                <h2 class="bienvenue">Espace administrateur</h2>
                                
                                <div class="div_ajout">

                                    <p class="add_user">Ajouter un utilisateur</p>

                                    <form action="admin.php?action=ajouter" method="post" class="form_uti">
                                        <label for="newLogin" class="nouveaux_champs">Nouveau Login</label>
                                        <input type="text" name="newLogin"/> <br><br>
                                        <label for="newPass" class="nouveaux_champs">Nouveau Pass</label>
                                        <input type="text" name="newPass"/> <br><br>
                                        <input type="submit" class="valider_admin" value="Valider"/><br><br>
                                    </form>

                                </div>

                                <br><br>
                                <div class="lien_admin">
                                <br>
                                <a href="admin.php?action=liste" class="lien_admin">Lien vers la liste des utilisateurs</a>
                                <br>
                                <br>
                                <a href="blog/vuePublier.php" class="lien_admin">Publier un article</a>
                                <br>
                                <br>
                                <a href="galerie.php" class="lien_admin">Ajouter des images</a>
                                </div>
                                <br>
                                <br>

                                <img src="image/admin/back.png" id="goback" onclick="goBack()" alt="page précédente">
                                <script>
                                function goBack() {
                                window.history.go(-1);
                                }
                                </script>

                                <?php
                            }
                            else {
                                ?>
                                <p>Accès refusé</p>
                                <?php
                            }
                        }
                        else {
                            ?>
                            <p>Accès refusé : pseudo inconnu</p>
                            <?php
                        }
                    }
                    else {
                        ?>
                        <p>Accès refusé : formulaire absent</p>
                        <?php
                    }
                }
                else if ($_GET["action"] == "liste") {
                    $bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");
                    $users = $bdd->query("SELECT user_id, user_pseudo, user_pass FROM t_users;");
                    ?>
                    <table class="td_uti">
                        <thead id=thead_uti><br><br><br><br>
                            <th>ID</th>
                            <th>LOGIN</th>
                            <th>PASS</th>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user) : ?>

                            <tr>
                                <td><?= $user["user_id"]; ?></td>
                                <td><?= $user["user_pseudo"]; ?></td>
                                <td ><?= $user["user_pass"]; ?></td>
                            </tr>

                            <?php endforeach; ?>
                            <img src="image/admin/back.png" id="goback" onclick="goBack()" alt="page-précédente">
                                <script>
                                    function goBack() {
                                    window.history.go(-1);
                                    }
                                </script>
                        </tbody>
                    </table>
                    <?php    
                }
                else {
                    ?>
                    <p>Accès refusé : paramètre action incorrect</p> 
                    <?php
                }
            }
            else {
                ?>
                <p>Accès refusé : paramètre action absent</p>
                <?php
            }
            ?>
    
        <?php include "inc/js.php"; ?>



    </body>
</html>