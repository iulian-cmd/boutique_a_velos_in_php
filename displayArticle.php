<?php

echo 'Nom Article: ';
echo htmlspecialchars($_POST['nom']);
echo '<br>';
echo 'Prix Article: € ';
echo htmlspecialchars((int)$_POST['prix']);
echo '<br>';
echo 'Description: ';
echo htmlspecialchars($_POST['description']);
echo '<br>';


// Je teste si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['photo']) and $_FILES['photo']['error'] == 0) {

        // Je teste si le fichier n'est pas trop gros
        if ($_FILES['photo']['size'] <= 1000000) {

                // Je teste si l'extension est autorisée

                $infosfichier = pathinfo($_FILES['photo']['nom']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');


                if (in_array($extension_upload, $extensions_autorisees)) {

                        // Je peux valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . basename($_FILES['photo']['nom']));
                        echo "L'envoi a bien été effectué !";
                }
        }
} ?>
<br>
<img src="uploads/<?php echo $_FILES['photo']['nom'] ?>" width=200 height=200>