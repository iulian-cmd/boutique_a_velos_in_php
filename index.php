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

    <?php include("header.php"); ?>

    <?php
       if (isset($_GET["page"])) {

        if ($_GET["page"] == "catalogue") {
            include("catalogue.php");
        }

        if ($_GET["page"] == "article") {
            include("article.php");
        }

        if ($_GET["page"] == "contact") {
            include("contact.php");
        }

        if ($_GET["page"] == "accueil") {
            include("accueil.php");
        }

        if ($_GET["page"] == "addArticle") {
            include("addArticle.php");
        }

        if ($_GET["page"] == "displayArticle") {
            include("displayArticle.php");
        }
        if ($_GET["page"] == "ajoutpanier") {
            include("panier.php");
        }
        if ($_GET["page"] == "classe") {
            include("classe.php");
        }
        if ($_GET["page"] == "clients") {
            include("clients.php");
        }
    } else {
        include("accueil.php");
    }
    ?>
    <?php include "footer.php"; ?>
</body>
</html>