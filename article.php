<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="content_php card bg-light mb-3" style="max-width: 18rem;">

        <!-- l.appel de la fonction afficheArticle() qui se trouve dans la page functions.php -->

        <?php
        afficheArticle($_GET['article']);
        ?>

        <!-- navigation pour revenir dans la page de catalogue -->
        <a href="index.php?page=catalogue">
            <button class="button">Retour au Catalogue</button></a>

    </div>



</body>

</html>