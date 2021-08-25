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

<div id="affiche_panier">
    <div>
    <?php

    // definir la variable panier qui a deux variable id et quantite
    // elles sont recuperees du formulaire avec le $_POST

    if(isset($_POST['idArticle']))
    {
    $_SESSION['panier'][] = 
    [
        'id' => $_POST['idArticle'], 
        'quantite' => $_POST['quantite']
    ];
    }

    elseif(isset($_POST['effacer']) and isset($_SESSION['panier']))
    {
        viderPanier($_SESSION['panier']);
        echo "Votre panier est vide";
    }



    // on verifie si le panier existe et on cherche avec le foreach les 
    // elements du panier

    if(isset($_SESSION['panier'])) {
    foreach($_SESSION['panier'] as $panier){
        ajoutpanier($panier['id'], $panier['quantite']); 
        echo '<br />'; 
        echo '<br />'; 
    }
    totalPanier($_SESSION['panier']);
}
?> </div>
<div id="petit_menu_panier">
    <?php 
    echo '<form action="index.php?destroy" method="POST"><input type="submit" name="effacer" value="Effacer panier"></form>'
    ;?>
</div>

    </div>
   
</body>

</html>