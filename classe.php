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
        foreach ($this->ListeArticles as $key => $value){
            //commandes a executer
            echo ($this->ListeArticles[$key]->idArticle .'</br>');
            echo ($this->ListeArticles[$key]->nomArticle .'</br>');
            echo ($this->ListeArticles[$key]->descriptionArticle .'</br>');
            echo ($this->ListeArticles[$key]->prixArticle .'</br>');
            echo ($this->ListeArticles[$key]->imageArticle .'</br>');
            echo ($this->ListeArticles[$key]->poidsArticle .'</br>');
            echo ($this->ListeArticles[$key]->quantiteDisponible .'</br>');
            echo ($this->ListeArticles[$key]->enVente .'</br>');
        }
        // var_dump($this->ListeArticles);
    }
}   
?>

<?php
class Client {

    // definir les variables (et leur type) de la classe Client
    public int $idClient;
    public string $nomClient;
    public string $adresseClient;
    public int $codePostal;
    public string $ville;

// constructor Client
    public function __construct(int $idClient, string $nomClient, string $adresseClient, int $codePostal, string $ville) 
    {
        $this->idClient=$idClient;
        $this->nomClient=$nomClient;
        $this->adresseClient=$adresseClient;
        $this->codePostal=$codePostal;
        $this->ville=$ville;
    }

//creer la méthode qui affiche le client
        public function displayClient() {
             //commandes a executer
        echo
       '<div class="content_php card bg-light mb-3" style="max-width: 25rem;">
           <ul class="list-group" style="max-width: 25rem">
           <li class="list-group-item list-group-item-info"><strong>idClient:  </strong>'."$this->idClient".'</li>
           <li class="list-group-item list-group-item-warning"><strong>Nom Client:  </strong>'."$this->nomClient".'</li>
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
        foreach ($this->ListeClients as $key => $value){
            //commandes a executer
            echo ($this->ListeClients[$key]->idClient .'</br>');
            echo ($this->ListeClients[$key]->nomClient .'</br>');
            echo ($this->ListeClients[$key]->adresseClient .'</br>');
            echo ($this->ListeClients[$key]->codePostal .'</br>');
            echo ($this->ListeClients[$key]->ville .'</br>');
        }
//var_dump($this->ListeClients);
    }
}   

?>