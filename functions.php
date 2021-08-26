<?php

function afficheArticle($article)
{
    $catalogue = [
        [
            "id" => 1,
            'nom' => "Vélo VTT Rouge",
            'prix' => 780,
            'photo' => "_images/velo_001b.png",
            'alt' => "Vélo VTT rouge",
            'description' => "Ce VTT est conçu pour se dépasser dans la pratique du VTT Cross Country (XC). Un VTT XC rapide pour progresser sur vos parcours XC favoris. Profitez de ses nombreux atouts (NX Eagle, tubeless, fourche RockShox...) pour affoler les chronos."
        ],
        [
            "id" => 2,
            'nom' => "Vélo Enfant",
            'prix' => 350,
            'photo' => "_images/velo_002b.png",
            'alt' => "Vélo enfant",
            'description' => "Nous avons conçu ce vélo tout terrain pour les enfants de 9 à 12 ans (135 à 150 cm) souhaitant pratiquer régulièrement le VTT. Pour affronter facilement les obstacles des terrains accidentés, nous avons équipé ce VTT 24 pouces d'une fourche suspendue. Grâce à ses 18 vitesses vous pouvez aborder des sentiers vallonnés."
        ],
        [
            "id" => 3,
            'nom' => "Vélo VTC Bleu",
            'prix' => 485,
            'photo' => "_images/velo_003b.png",
            'alt' => "Vélo VTC bleu",
            'description' => "Notre équipe de concepteurs passionnés a développé ce vélo tout chemin pour vos sorties régulières jusqu'à 50 km.
        Aérez-vous avec le Riverside 500. Légèreté optimisée pour une meilleure maniabilité. Partez confortablement installé grâce à ses grips, sa selle ergonomique ainsi que sa fourche télescopique."
        ]
    ];
    foreach ($catalogue as $produit) {
        if ($article == $produit['id']) {
            echo '<ul class="list-group" style="max-width: 23rem">';
            echo '<li class="list-group-item list-group-item-info">'.'Prix: € ' . $produit['prix'] . '</li>';
            echo '<li class="list-group-item list-group-item-warning">'.'Nom:  ' . $produit['nom'] . '</li>';
            echo '<li class="list-group-item list-group-item-info">'. '<a href="index.php?page=article&article=' . $produit['id'] . '"> <img src="' . $produit['photo'] . '"alt="' . $produit['alt'] . '"/></a>' . '</li>';
            echo '<li class="list-group-item list-group-item-warning">'.'Description: ' . $produit['description'] . '</li>';
            echo '</ul>';
        }
    }
}
?>
<?php

function ajoutpanier($article, $quantite) {

    $catalogue = [
        [
            "id" => 1,
            'nom' => "Vélo VTT Rouge",
            'prix' => 780,
            'photo' => "_images/velo_001b.png",
            'alt' => "Vélo VTT rouge",
            'description' => "Ce VTT est conçu pour se dépasser dans la pratique du VTT Cross Country (XC). Un VTT XC rapide pour progresser sur vos parcours XC favoris. Profitez de ses nombreux atouts (NX Eagle, tubeless, fourche RockShox...) pour affoler les chronos."
        ],
        [
            "id" => 2,
            'nom' => "Vélo Enfant",
            'prix' => 350,
            'photo' => "_images/velo_002b.png",
            'alt' => "Vélo enfant",
            'description' => "Nous avons conçu ce vélo tout terrain pour les enfants de 9 à 12 ans (135 à 150 cm) souhaitant pratiquer régulièrement le VTT. Pour affronter facilement les obstacles des terrains accidentés, nous avons équipé ce VTT 24 pouces d'une fourche suspendue. Grâce à ses 18 vitesses vous pouvez aborder des sentiers vallonnés."
        ],
        [
            "id" => 3,
            'nom' => "Vélo VTC Bleu",
            'prix' => 485,
            'photo' => "_images/velo_003b.png",
            'alt' => "Vélo VTC bleu",
            'description' => "Notre équipe de concepteurs passionnés a développé ce vélo tout chemin pour vos sorties régulières jusqu'à 50 km.
        Aérez-vous avec le Riverside 500. Légèreté optimisée pour une meilleure maniabilité. Partez confortablement installé grâce à ses grips, sa selle ergonomique ainsi que sa fourche télescopique."
        ]
    ];
    foreach ($catalogue as $produit) {

        if ($article == $produit['id']){
            echo '<ul class="list-group">';
            echo '<li class="list-group-item list-group-item-info"><img src="' . $produit['photo'] . '"alt="' . $produit['alt'] . '"/></li>';
            echo '<li class="list-group-item list-group-item-warning">'."Article : ".$produit["nom"].'</li>';
            echo '<li class="list-group-item list-group-item-info">'."Quantité et prix : ".$quantite." x ".$produit["prix"], " € ".'</li>';
            $total = $produit["prix"] * $quantite." € ";
            echo '<li class="list-group-item list-group-item-light">'."Total: ".$total.'</li>';
            echo '</ul>';
        }
    }

}

// cette fonction fait la somme de tout les diferrents articles ajoutes
function totalPanier($panier)
{
    $catalogue = [
        [
            "id" => 1,
            'nom' => "Vélo VTT Rouge",
            'prix' => 780,
            'photo' => "_images/velo_001b.png",
            'alt' => "Vélo VTT rouge",
            'description' => "Ce VTT est conçu pour se dépasser dans la pratique du VTT Cross Country (XC). Un VTT XC rapide pour progresser sur vos parcours XC favoris. Profitez de ses nombreux atouts (NX Eagle, tubeless, fourche RockShox...) pour affoler les chronos."
        ],
        [
            "id" => 2,
            'nom' => "Vélo Enfant",
            'prix' => 350,
            'photo' => "_images/velo_002b.png",
            'alt' => "Vélo enfant",
            'description' => "Nous avons conçu ce vélo tout terrain pour les enfants de 9 à 12 ans (135 à 150 cm) souhaitant pratiquer régulièrement le VTT. Pour affronter facilement les obstacles des terrains accidentés, nous avons équipé ce VTT 24 pouces d'une fourche suspendue. Grâce à ses 18 vitesses vous pouvez aborder des sentiers vallonnés."
        ],
        [
            "id" => 3,
            'nom' => "Vélo VTC Bleu",
            'prix' => 485,
            'photo' => "_images/velo_003b.png",
            'alt' => "Vélo VTC bleu",
            'description' => "Notre équipe de concepteurs passionnés a développé ce vélo tout chemin pour vos sorties régulières jusqu'à 50 km.
        Aérez-vous avec le Riverside 500. Légèreté optimisée pour une meilleure maniabilité. Partez confortablement installé grâce à ses grips, sa selle ergonomique ainsi que sa fourche télescopique."
        ]
    ];

    $total = 0;
        // extraire valeur panier
        foreach($panier as $elementpanier) {
        $id = $elementpanier['id'];
        $quantite = $elementpanier['quantite'];

        // prix element / on cree une boucle qui itere le total chaque fois
        foreach($catalogue as $produit) {
            if ($id == $produit['id']){
                $total += $quantite * $produit["prix"];
            }
        }
    }
    echo '<div class="alert alert-light" role="alert">'."Total du panier ".$total." €".'</div>';
  
}

// cette fonction vide le panier:

function viderPanier($panier){
    unset($_SESSION['panier']);    
}


?>


<?php 

// j'ai créé une fonction pour se connecter a la BDD
function pdoConnectMysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost:3307';
    $DATABASE_USER = 'myself001';
    $DATABASE_PASS = 'guraluimamata';
    $DATABASE_NAME = 'boutique_a_velos';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

?>