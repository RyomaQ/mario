<?php 
$pdo = new PDO('mysql:host=localhost;dbname=admin', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
    // echo '<pre>'; //La balise <pre> a pour particularité de restituer le texte dans le code source de la même manière qu’il a été tapé
    //     print_r($_POST);
    // echo '</pre>';

    $affichage = "";

    if(isset($_POST['envoyer'])) // si la personne a cliqué sur "Envoyer le message"
    {
        //longueur du prénom, du nom, du message et vérification du format de l'email
        //+ loin : vérifier que le prénom, le nom ne contiennent pas d'entier
        //+loin : tel => format numérique...

        //iconv_strlen() : compter le nb de caractères dans une chaine
        //trim() : supprimer les espaces en début et en fin de chaine
        if(iconv_strlen(trim($_POST['prenom'])) > 3 && iconv_strlen(trim($_POST['prenom'])) <= 20)
        { //verifie le prenom
            $prenom = $_POST['prenom'];
            if(iconv_strlen(trim($_POST['nom'])) > 3 && iconv_strlen(trim($_POST['nom'])) <= 20)
            { //verifie le nom
                $nom = $_POST['nom'];
                if(iconv_strlen(trim($_POST['message'])) > 5 && iconv_strlen(trim($_POST['message'])) <= 500)
                { //verifie le message
                    $message = $_POST['message'];
                    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) 
                    {//verifie le email
                        $email = $_POST['email'];
                        
                        $to      = 'ryoma1@hotmail.fr';
                        $subject = 'Demande d\'information';
                        $headers = 'From: ' . $_POST['email'] . "\r\n" .
                        'Reply-To: ' . $_POST['email'] . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {

                            $enregistrement = $pdo->prepare("INSERT INTO t_mail (nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)");
                            // on fourni les valeurs des marqueurs nominatifs
                            $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
                            $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
                            $enregistrement->bindParam(':email', $email, PDO::PARAM_STR);
                            $enregistrement->bindParam(':message', $message, PDO::PARAM_STR);
                            $enregistrement->execute();
                            
                        }

                        if(mail($to, $subject,$_POST['message'], $headers))
                        {
                            $affichage = '<div class="alert alert-success">Votre email a bien été envoyé. Nous vous recontacterons prochainement</div>';
                        }else{
                            $affichage='<div class="alert alert-danger">Problème lors de l\'envoi de l\'email. Merci de réessayer plus tard...</div>';
                        } //erreur envoie email 
        
                    }else{
                    $affichage = '<div class="alert alert-danger">Le format de l\'email est incorrect</div>'; 
                }
                }else{
                    $affichage = '<div class="alert alert-danger">Le message doit avoir entre 5 et 500 caractères</div>'; 
                }
            }else{
                $affichage = '<div class="alert alert-danger">Le nom doit avoir entre 3 et 30 caractères</div>'; 
            }
        }else{
            $affichage = '<div class="alert alert-danger">Le prénom doit avoir entre 3 et 30 caractères</div>'; 
        }
    }
    ?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "inc/head.php"; ?>
        <title>Document</title>
    </head>
    <body>

       <div id="contact">
            <?php include "inc/nav.php"; ?>

            <img id="mario-luigi" src="image/contact/mario-luigi.png" alt="mario-luigi">

            <div id="formulaire">
              
                <p id="phrase1">Contactez-nous !</p>
			
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <?php echo $affichage; ?>
                    <br>

                    <div class="form-group">

                        <label for="prenom"></label>
                        <input type="text" class="indications" id="prenom" placeholder="Indiquez votre prénom" 
                        name="prenom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>"required pattern="^[A-Za-z '-]+$">
                    </div>
                    <br>

                    <div class="form-group">

                        <label for="nom"></label>
                        <input type="text" class="indications" id="nom" placeholder="Indiquez votre nom" name="nom" 
                            value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"required pattern="^[A-Za-z '-]+$">
                    </div>
                    <br>

                    <div class="form-group">

                        <label for="email"></label>
                        <input type="email" class="indications" id="email" placeholder="Indiquez votre email" name="email"
                        value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                    </div>
                    <br>

                    <div class="form-group">

                        <label for="message"></label>
                        <textarea class="indications" rows="10" id="message" placeholder="Indiquez votre message" name="message"
                        value="<?php if(isset($_POST['message'])) { echo $_POST['message']; } ?>"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" id="valide" value="Envoyer le message" name="envoyer">
                </form>
            </div>
        </div>

       <?php include "inc/footer.php"; ?>
       
       <?php include "inc/js.php"; ?>

    </body>
</html> 