<?php
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class="collapse-bg"></span>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=accueil">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=catalogue">Catalogue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="index.php?page=addArticle">Ajouter un article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=ajoutpanier">Panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="index.php?page=contact" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
    </div>
    <div>'.'<?php include("entete.php"); ?>'.'</div>
  </nav>
    
<script>  $(".navbar-toggler").click(function () {
        if ($(".navbar-toggler").hasClass("collapsed")) {
          $(".collapse-bg").css({
            display: "none"
          });
        } else {
          $(".collapse-bg").css({
            display: "block"
          });
        }
      });

      $(".collapse-bg").click(function () {
        $(".navbar-toggler").removeClass("collapsed");
        $(".navbar-collapse").removeClass("show");
        $(".collapse-bg").css({
          display: "none"
        });
      });
 </script>';
 ?>