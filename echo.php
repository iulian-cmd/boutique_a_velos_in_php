
<?php
function displayArticle() {
echo
       '<div class="content_php card bg-light mb-3" style="max-width: 25rem;">
           <ul class="list-group" style="max-width: 25rem">
           <li class="list-group-item list-group-item-info"><strong>Nom Article:  </strong>'."<?php echo $this->nomArticle; ?>".'</li>
           <li class="list-group-item list-group-item-warning"><strong>Couleur:  </strong>'."<?php echo $this->descriptionArticle; ?>".'<strong>Poids: </strong><?php echo $this->prixArticle; ?></li>
           <li class="list-group-item list-group-item-info"><strong>Description: </strong><?php echo $this->prixArticle; ?></li>
           <li class="list-group-item list-group-item-info"><strong>Quantite disponible: </strong><?php echo $this->imageArticle; ?> pieces</li>
           <li class="list-group-item list-group-item"><img src = <?php echo $this->imageArticle; ?> alt = image de <?php echo $this->nomArticle;?> width = "150"></li>
           <li class="list-group-item list-group-item-warning"><strong>Cet article coûte: </strong><?php echo $this->poidsArticle; ?> €</li>
           <li class="list-group-item list-group-item-warning"><strong>Cet article coûte: </strong><?php echo $this->quantiteDisponible; ?> €</li>
           <li class="list-group-item list-group-item-warning"><strong>Cet article coûte: </strong><?php echo $this->envente; ?> €</li>
           </ul>
       </div>';

}
?>
