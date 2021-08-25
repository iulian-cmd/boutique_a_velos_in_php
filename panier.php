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
