<?php

// nouvelle instance pour classe Catalogue
$catalogue = new Catalogue;

// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost:3307;dbname=boutique_a_velos;charset=utf8', '*******', '********');
      $reponse = $bdd->query('SELECT * FROM article'  );
      while ($donnees = $reponse->fetch()){
      $catalogue->ListeArticles[]=new Article($donnees['idArticle'],$donnees['nomArticle'],$donnees['descriptionArticle'],$donnees['prixArticle'],$donnees['imageArticle'],$donnees['poidsArticle'],$donnees['quantiteDisponible'],$donnees['enVente']);
 }

// var_dump($catalogue);
// call method displayCat
$catalogue->displayCat();
?>
