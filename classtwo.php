<?php
//declare(strict_types=1);

class Article
{
    // define variables
      public int $idArticle;
      public string $nomArticle;
      public string $descriptionArticle;
      public int $prixArticle;
      public string $imageArticle;
      public int $poidsArticle;
      public int $quantiteDisponible;
      public bool $enVente;

  // constructor
      public function __construct(int $idArticle, string $nomArticle, string $descriptionArticle, int $prixArticle, string $imageArticle, int $poidsArticle, int $quantiteDisponible, bool $enVente) {
            $this->idArticle=$idArticle;
            $this->nomArticle=$nomArticle;
            $this->descriptionArticle=$descriptionArticle;
            $this->prixArticle=$prixArticle;
            $this->imageArticle=$imageArticle;
            $this->poidsArticle=$poidsArticle;
            $this->quantiteDisponible=$quantiteDisponible;
            $this->enVente=$enVente;
    }

    public function displayArticle()
    {
        echo
       '<div class="content_php card bg-light mb-3" style="max-width: 25rem;">
           <ul class="list-group" style="max-width: 25rem">
           <li class="list-group-item list-group-item-info"><strong>Nom Article:  </strong>'."$this->nomArticle".'</li>
           <li class="list-group-item list-group-item-warning"><strong>Description:  </strong>'."$this->descriptionArticle".'</li>
           <li class="list-group-item list-group-item-info"><strong>Prix: </strong>'."$this->prixArticle".'</li>
           <li class="list-group-item list-group-item"><img src="'.$this->imageArticle.'"width = "150"></li>
           <li class="list-group-item list-group-item-info"><strong>Poids: </strong>'."$this->poidsArticle".' kgs</li>
           <li class="list-group-item list-group-item-warning"><strong>Stock: </strong>'."$this->quantiteDisponible".' pieces</li>
           <li class="list-group-item list-group-item-info"><strong>Disponible: </strong>'."$this->enVente".'</li>
           </ul>
       </div>';
       
    }
}       

$veloVTT = new Article(1, 'Velo VTT', 'Ce VTT est con??u pour se d??passer dans la pratique du VTT Cross Country (XC). Un VTT XC rapide pour progresser sur vos parcours XC favoris. Profitez de ses nombreux atouts (NX Eagle, tubeless, fourche RockShox...) pour affoler les chronos.', 780, '../_images/velo_001b.png', 14, 10, TRUE);
/* $veloVTT->idArticle = "";
$veloVTT->nomArticle = "Velo VTT";
$veloVTT->descriptionArticle = "Ce VTT est con??u pour se d??passer dans la pratique du VTT Cross Country (XC). Un VTT XC rapide pour progresser sur vos parcours XC favoris. Profitez de ses nombreux atouts (NX Eagle, tubeless, fourche RockShox...) pour affoler les chronos.";
$veloVTT->prixArticle = 780;
$veloVTT->imageArticle = "../_images/velo_001b.png";
$veloVTT->poidsArticle = 14;
$veloVTT->quantiteDisponible = 10;
$veloVTT->envente = TRUE;
$veloVTT->displayArticle(); */

$veloEnfant = new Article(2, 'Velo Enfant', 'Nous avons con??u ce v??lo tout terrain pour les enfants de 9 ?? 12 ans (135 ?? 150 cm) souhaitant pratiquer r??guli??rement le VTT. Pour affronter facilement les obstacles des terrains accident??s, nous avons ??quip?? ce VTT 24 pouces d'."'".'une fourche suspendue. Gr??ce ?? ses 18 vitesses vous pouvez aborder des sentiers vallonn??s.', 350, '../_images/velo_002b.png', 12, 20, TRUE); 

$veloVTC = new Article(3, 'Velo VTC', 'Notre ??quipe de concepteurs passionn??s a d??velopp?? ce v??lo tout chemin pour vos sorties r??guli??res jusqu'."'".'?? 50 km. A??rez-vous avec le Riverside 500. L??g??ret?? optimis??e pour une meilleure maniabilit??. Partez confortablement install?? gr??ce ?? ses grips, sa selle ergonomique ainsi que sa fourche t??lescopique.', 485, '../_images/velo_003b.png', 15, 15, TRUE); 
?>



<?php

class Catalogue {
    public array $Liste_articles;
       
    public function displayCat() {
        foreach ($this->Liste_articles as $key => $value){
            echo ($this->Liste_articles[$key]->idArticle .'</br>');
            echo ($this->Liste_articles[$key]->nomArticle .'</br>');
            echo ($this->Liste_articles[$key]->descriptionArticle .'</br>');
            echo ($this->Liste_articles[$key]->prixArticle .'</br>');
            echo ($this->Liste_articles[$key]->imageArticle .'</br>');
            echo ($this->Liste_articles[$key]->poidsArticle .'</br>');
            echo ($this->Liste_articles[$key]->quantiteDisponible .'</br>');
            echo ($this->Liste_articles[$key]->enVente .'</br>');

           
            //commandes
        }
        var_dump($this->Liste_articles);}
       
    }
    


// create new instance for class Catalogue
$catalogue = new Catalogue;

// On se connecte ?? MySQL
$bdd = new PDO('mysql:host=localhost:3307;dbname=boutique_a_velos;charset=utf8', '******', '*********');
      $reponse = $bdd->query('SELECT * FROM article'  );
      while ($donnees = $reponse->fetch()){
      $catalogue->Liste_articles[]=new Article($donnees['idArticle'],$donnees['nomArticle'],$donnees['descriptionArticle'],$donnees['prixArticle'],$donnees['imageArticle'],$donnees['poidsArticle'],$donnees['quantiteDisponible'],$donnees['enVente']);
 }

?>

<?php
// call method displayCat
$catalogue->displayCat();
?>
