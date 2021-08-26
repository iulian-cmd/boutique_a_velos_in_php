<?php

// nouvelle instance pour classe Client
$client = new ListeClients;

// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost:3307;dbname=boutique_a_velos;charset=utf8', 'myself001', 'guraluimamata');
    $reponse = $bdd->query('SELECT * FROM clients'  );
    while ($donnees = $reponse->fetch()){
        $client->ListeClients[]=new Client($donnees['idClient'],$donnees['nomClient'],$donnees['imageClient'],$donnees['adresseClient'],$donnees['codePostal'],$donnees['ville']);
}
// var_dump($client);
// call method displayListeClients
$client->displayListeClients();
?>
