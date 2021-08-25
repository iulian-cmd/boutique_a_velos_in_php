<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class=class="content_php card bg-light mb-3" style="max-width: 23rem;">
       
    <?php

    try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost:3307;dbname=boutique_a_velos;charset=utf8', 'myself001', 'guraluimamata');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

    // On récupère tout le contenu de la table commande
    $reponse = $bdd->query('SELECT * FROM article');
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
{
?>
<div class="content_php card bg-light mb-3" style="max-width: 25rem;">
    <ul class="list-group" style="max-width: 25rem">    
    <li class="list-group-item list-group-item-info"><strong>Nom Article:  </strong><?php echo $donnees['nomArticle']; ?></li>
    <li class="list-group-item list-group-item-warning"><strong>Couleur:  </strong><?php echo $donnees['couleurArticle']; ?> * <strong>Poids: </strong><?php echo $donnees['poidsArticle']; ?></li>
    <li class="list-group-item list-group-item-info"><strong>Description: </strong><?php echo $donnees['descriptionArticle']; ?></li>
    <li class="list-group-item list-group-item-warning"><strong>Cet article coûte: </strong><?php echo $donnees['prixArticle']; ?> €</li>
    <li class="list-group-item list-group-item-info"><strong>Quantite disponible: </strong><?php echo $donnees['quantiteDisponible']; ?> pieces</li>
    <li class="list-group-item list-group-item"><img src = <?php echo $donnees['imageArticle']; ?> alt = image de <?php echo $donnees['nomArticle']?> width = "150"></li>
    <li class="list-group-item list-group-item-info"><form action="index.php?page=ajoutpanier" method="POST">
        <input type="number" size=10 name="quantite" min="1" value="1" />
        <input type="hidden" name="idArticle" value="<?php echo $donnees['idArticle'] ?>"/>
        <!-- <input type="hidden" name="nomArticle" value="' . $produit['nom'] . '"/>
      
        <input type="hidden" name="prixArticle" value="' . $produit['prix'] . '"/> -->
        <input type="submit" value="Ajouter au panier"/>
        </form></li>
    </ul>
</div>

<?php
}

 $reponse->closeCursor(); // Termine le traitement de la requête
?>
</div>
</body>

</html>