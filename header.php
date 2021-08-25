<?php session_start(); 
if (isset($_GET['destroy'])){
    session_destroy(); 
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
  // modification des titres avec PHP
  // en fonction de quelle page s'affiche le titre est ajoute comme balise html
  // et s'affiche lui aussi dans l'onglet de la page.

  if (isset($_GET['page'])) {
    if ($_GET['page']  == 'accueil') {
      echo '<title>Accueil</title>';
    }
    if ($_GET['page']  == 'catalogue') {
      echo '<title>Catalogue</title>';
    }
    if ($_GET['page']  == 'contact') {
      echo '<title>Contact</title>';
    }
    if ($_GET['page']  == 'article') {
      echo '<title>Article</title>';
    }
    if ($_GET['page']  == 'addArticle') {
      echo '<title>Ajouter un article</title>';
    }
    if ($_GET['page']  == 'ajoutpanier') {
      echo '<title>Panier</title>';
    }
    if ($_GET['page']  == 'displayArticle') {
      echo '<title>Montrer un article</title>';
    } else {
      echo '<title>Boutique a velos</title>';
    }
  }
  ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <?php 
    include("navbar.php"); 
    include("entete.php");
    require ("classe.php");
    ?>
</head>

<body>

    <!-- appel de la page php qui contient la fonction afficeArticle() et ajoutpanier($id, $quantite)-->
    <?php require('functions.php'); ?>

    <div class="titre_page">
        <div> <img src="_images/cycliste.svg" width=50 height=50 alt="logo" />. . . . Boutique a Velos
        </div>
</div>
    <div class="entete">
<?php 
  // echo 'Vider panier';

?>

</div>

</body>











</html>