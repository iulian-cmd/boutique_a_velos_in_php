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

<div class="card" style="width: 18rem;">
    <div class="card-header">
        Ajouter un article au catalogue
    </div>

    <body>

        <!-- enctype="multipart/form-data c'est pour dire qu'on envoieplusieurs types de fichiers -->
        <form action="displayArticle.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Pour le nom</label>
                <input type="text" name="nom" required class="form-control" placeholder="Ajouter le nom de l'article" />
            </div>
            <div class="form-group">
                <label for="prix">Pour le prix</label>
                <input type="number" name="prix" min="0" required class="form-control"
                    placeholder="Ajouter le prix de l'article" />
            </div>
            <div class="form-group">
                <label for="photo">Pour la photo</label>
                <input type="file" name="photo" required class="form-control"
                    placeholder="Ajouter l'image de l'article" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="8" cols="40" required class="form-control"
                    placeholder="Entrez la description du produit"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoi">
            </div>

        </form>
</div>
</body>

</html>