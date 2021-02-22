<!DOCTYPE html>
<html lang="fr">
  <head>
      <title>Page de connexion</title>
      <?php include "inc/head.php"; ?>
  </head>
  <body id="body_galerie">

    <?php include "inc/nav.php"; ?>

    <section class="home">
      <div class="slider">
          <div class="slide active" style="background-image: url('image/slideshow/1.jpg')"></div>
          <div class="slide" style="background-image: url('image/slideshow/2.jpg')"></div>
          <div class="slide" style="background-image: url('image/slideshow/3.jpg')">
              <div class="container">
                  <div class="caption">
                  </div>
              </div>
          </div>
      </div>
      
      <!-- controls  -->
      <div class="controls">
        <div class="prev"><</div>
        <div class="next">></div>
      </div>

      <!-- indicators -->
      <div class="indicator"></div>

    </section>

      <?php include "inc/js.php"; ?>
      
  </body>
</html>

<br><br><br><br><br>

<?php
  $sql =  'SELECT description , path FROM t_images';
  $bdd = new PDO("mysql:host=localhost;dbname=admin;charset=utf8", "root", "");
?>

<div id="ensemble">
  <?php
    foreach  ($bdd->query($sql) as $row) {
  ?>
  <div id="image_box">
    <?php
      $image_name=$row['path'];
      print "<img src='image/galerie/$image_name' id=image_test_man>";
    ?>
    
    <div id="description_images"> 
      <?php
      print $row['description'] . "\t";
      }
      ?>

    </div>
  </div>
</div>

<p>D'autre image à venir..</p>

<br><br>
<?php include "inc/footer.php"; ?>