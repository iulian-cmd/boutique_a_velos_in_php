<?php

declare(strict_types=1);

class Article
{
    private int $idArticle;
    public string $nomArticle;
    public string $descriptionArticle;
    public int $prixArticle;
    public string $imageArticle;
    public int $poidsArticle;
    public int $quantiteDisponible;
    public bool $envente;

    public function displayArticle()
    {
        echo
       '<div class="content_php card bg-light mb-3" shadow-sm p-3 mb-5 bg-white rounded style="max-width: 25rem;">
           <ul class="list-group" style="max-width: 25rem">
           <li class="list-group-item list-group-item-info"><strong>Nom Article:  </strong>'."$this->nomArticle".'</li>
           <li class="list-group-item list-group-item-warning"><strong>Description:  </strong>'."$this->descriptionArticle".'</li>
           <li class="list-group-item list-group-item-info"><strong>Prix: </strong>'."$this->prixArticle".'</li>
           <li class="list-group-item list-group-item"><img src="'.$this->imageArticle.'"width = "150"></li>
           <li class="list-group-item list-group-item-info"><strong>Poids: </strong>'."$this->poidsArticle".' kgs</li>
           <li class="list-group-item list-group-item-warning"><strong>Stock: </strong>'."$this->quantiteDisponible".' pieces</li>
           <li class="list-group-item list-group-item-info"><strong>Disponible: </strong>'."$this->envente".'</li>
           </ul>
       </div>';
       
    }
}       


$veloVTT = new Article; 
$veloVTT->nomArticle = "Velo VTT";
$veloVTT->descriptionArticle = "Ce VTT est conçu pour se dépasser dans la pratique du VTT Cross Country (XC). Un VTT XC rapide pour progresser sur vos parcours XC favoris. Profitez de ses nombreux atouts (NX Eagle, tubeless, fourche RockShox...) pour affoler les chronos.";
$veloVTT->prixArticle = 780;
$veloVTT->imageArticle = "../_images/velo_001b.png";
$veloVTT->poidsArticle = 14;
$veloVTT->quantiteDisponible = 10;
$veloVTT->envente = TRUE;
$veloVTT->displayArticle();

$veloEnfant = new Article; 
$veloEnfant->nomArticle = "Velo Enfant";
$veloEnfant->descriptionArticle = "Nous avons conçu ce vélo tout terrain pour les enfants de 9 à 12 ans (135 à 150 cm) souhaitant pratiquer régulièrement le VTT. Pour affronter facilement les obstacles des terrains accidentés, nous avons équipé ce VTT 24 pouces d'une fourche suspendue. Grâce à ses 18 vitesses vous pouvez aborder des sentiers vallonnés.";
$veloEnfant->prixArticle = 350;
$veloEnfant->imageArticle = "../_images/velo_002b.png";
$veloEnfant->poidsArticle = 12;
$veloEnfant->quantiteDisponible = 20;
$veloEnfant->envente = TRUE;
$veloEnfant->displayArticle();

$veloVTC = new Article; 
$veloVTC->nomArticle = "Velo VTC";
$veloVTC->descriptionArticle = "Notre équipe de concepteurs passionnés a développé ce vélo tout chemin pour vos sorties régulières jusqu'à 50 km. Aérez-vous avec le Riverside 500. Légèreté optimisée pour une meilleure maniabilité. Partez confortablement installé grâce à ses grips, sa selle ergonomique ainsi que sa fourche télescopique.";
$veloVTC->prixArticle = 485;
$veloVTC->imageArticle = "../_images/velo_003b.png";
$veloVTC->poidsArticle = 15;
$veloVTC->quantiteDisponible = 15;
$veloVTC->envente = TRUE;
$veloVTC->displayArticle();
?>

}