<?php

// Si la session panier n'existe pas, alors on initie un objet panier à partir de la classe Panier.
    if(!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = new Panier;
        }
        // var_dump($_SESSION['panier']);

    // Si l'idArticle reçu par le formulaire existe, alors on ajoute l'idArticle et la quantité de l'article du formulaire dans la session panier.
    if(isset($_POST['idArticle'])){
            $_SESSION['panier']->addPanier($_POST['idArticle'],$_POST['quantite']);
        }
        var_dump($_SESSION['panier']);

    $bdd = new PDO('mysql:host=localhost:3307;dbname=boutique_a_velos;charset=utf8', 'myself001', 'guraluimamata');
      $reponse = $bdd->query('SELECT * FROM article WHERE idArticle = $idArticle'  );
      $donnees = $reponse->fetch();
        echo 'idArticle';
    

 




?>