<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "inc/head.php";?>
        <title>Mario</title>
    </head>
    <body>
      
        <div id="accueil-1"> 
            
            <?php include "inc/nav.php"; ?>
            <a href="connexion.php" id="connexion_button">Connexion</a>
            <!-- mes images -->           
            <div class="mario-div">   
                <img id="mario-head" src="image/accueil/mario-head.png" alt="mario-head">
            </div>
            
            <img id="mario-font" src="image/accueil/mario-font.png" alt="mario-font"/>

            <div class="bulle-div">
                <img id="bulle" src="image/accueil/bulle.png" alt="talking-bubble">
            </div>
        </div> 

        <?php include "inc/footer.php"; ?> 
        
        <?php include "inc/js.php"; ?>

    </body>
</html> 