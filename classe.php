<?php
class Article
{
// definir les variables (et leur type) de la classe Article
      public int $idArticle;
      public string $nomArticle;
      public string $descriptionArticle;
      public int $prixArticle;
      public string $imageArticle;
      public int $poidsArticle;
      public int $quantiteDisponible;
      public bool $enVente;

// constructor Article
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

// creer une méthode displayArticle qui affiche les valeurs de la classe Article 
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
?>
<?php

class Catalogue {

    // creer un tableau pour l'utiliser avec la méthode displayCat
    public array $ListeArticles;
       
    // creer la méthode qui affiche le catalogue
    public function displayCat() {
        $i = 0;
        $arrayLength = count($this->ListeArticles);
        while($i < $arrayLength) {
            //commandes a executer
            echo ($this->ListeArticles[$i]->idArticle .'</br>');
            echo ($this->ListeArticles[$i]->nomArticle .'</br>');
            echo ($this->ListeArticles[$i]->descriptionArticle .'</br>');
            echo ($this->ListeArticles[$i]->prixArticle .'</br>');
            echo ($this->ListeArticles[$i]->imageArticle .'</br>');
            echo ($this->ListeArticles[$i]->poidsArticle .'</br>');
            echo ($this->ListeArticles[$i]->quantiteDisponible .'</br>');
            echo ($this->ListeArticles[$i]->enVente .'</br>');

            // On lui donne la variable article ET on lui donne aussi le nom de l'article
            echo '<a href="index.php?page=article&id='.$this->ListeArticles[$i]->idArticle.'"> <img src='.$this->ListeArticles[$i]->imageArticle .' width="150" /> </a> <br>';
            echo '<form action="index.php?page=ajoutpanier" method="POST" enctype="multipart/form-data">';
            echo '<input type="number" min=0 value="1" name="quantite"/>';
            echo '<input type="hidden" name="idArticle" value="'.$this->ListeArticles[$i]->idArticle.'"/>';
            echo '<input type="submit" value="Ajouter l\'article au panier"/>';
            echo '</form>';
            $i++;
        }
       
    }
}   
?>

<?php
class Client {

    // definir les variables (et leur type) de la classe Client
    public int $idClient;
    public string $nomClient;
    public string $imageClient;
    public string $adresseClient;
    public int $codePostal;
    public string $ville;

// constructor Client
    public function __construct(int $idClient, string $nomClient, string $imageClient, string $adresseClient, int $codePostal, string $ville) 
    {
        $this->idClient=$idClient;
        $this->nomClient=$nomClient;
        $this->imageClient=$imageClient;
        $this->adresseClient=$adresseClient;
        $this->codePostal=$codePostal;
        $this->ville=$ville;
    }
    
    // var_dump($this->Client);

//creer la méthode qui affiche le client
        public function displayClient() {
             //commandes a executer
        echo
       '<div class="content_php card bg-light mb-3" style="max-width: 25rem;">
           <ul class="list-group" style="max-width: 25rem">
           <li class="list-group-item list-group-item-info"><strong>idClient:  </strong>'."$this->idClient".'</li>
           <li class="list-group-item list-group-item-warning"><strong>Nom Client:  </strong>'."$this->nomClient".'</li>
           <li class="list-group-item list-group-item-warning"><strong>Image Client:  </strong>'."$this->imageClient".'</li>
           <li class="list-group-item list-group-item-info"><strong>Adresse Client: </strong>'."$this->adresseClient".'</li>'           
           .'<li class="list-group-item list-group-item-info"><strong>Poids: </strong>'."$this->codePostal".'</li>
           <li class="list-group-item list-group-item-info"><strong>Poids: </strong>'."$this->ville".' kgs</li>
          </ul>
       </div>';
    }
}
?>

<?php
class ListeClients{
// creer un tableau pour l'utiliser avec la méthode displayClient
    public array $ListeClients;
       
// creer la méthode qui affiche les clients
    public function displayListeClients() {
        foreach ($this->ListeClients as $element){
            //commandes a executer
            echo
            '<div class="content_php card bg-light mb-3" style="max-width: 25rem;">
                <ul class="list-group" style="max-width: 25rem">
                <li class="list-group-item list-group-item-info"><strong>idClient:  </strong>'.$element->idClient.'</li>
                <li class="list-group-item list-group-item-warning"><strong>Nom Client:  </strong>'.$element->nomClient.'</li>
                <li class="list-group-item list-group-item-info"><strong>Image Client:  </strong><img src="'.$element->imageClient.'"width=120"/>.</li>
                <li class="list-group-item list-group-item-warning"><strong>Adresse Client:  </strong>'.$element->adresseClient.'</li>
                <li class="list-group-item list-group-item-info"><strong>Code Postal: </strong>'.$element->codePostal.'</li>           
                <li class="list-group-item list-group-item-warning"><strong>Ville: </strong>'.$element->ville.'</li>
               </ul>
            </div>';   
        }
        // var_dump($this);
// var_dump($this->ListeClients);
    }
}   
?>
<?php
class Panier{
    public array $panierListe;

    public function addPanier($idArticle, $quantite) {
        $this->panierListe[]=['idArticle'=>$idArticle,'quantite'=>$quantite];
    }

    public function updatePanier($idArticle,$quantite){
        var_dump($this->panier);
             foreach($this->panier as $key=> $value){
                if($idArticle  ==  $this->panier[$key]['idArticle']){
                $this->panier[$key]['quantite'] += $quantite;
                if($this->panier[$key]['quantite'] == -1) $this->panier[$key]['quantite'] = 0;
            }
        }
    }  
        
    public function deletePanier($idArticle){
        var_dump($this->panier);
            foreach($this->panier as $key=> $value){
                if($idArticle  ==  $this->panier[$key]['idArticle']){
                unset($this->panier[$key]);
                }
            }
        }
    }
?>