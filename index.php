<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet06 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-9 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet06 Exercice05</h1>
            <h2 class="col-12 text-info text-center">Créez un formulaire avec les champs "civilité", 
            "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. 
            À l'envoi du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. 
            Vérifiez la saisie. Empêchez l'affichage de balises html.</h2>
        </div>
        <div class="offset-1 row justify-content-center bg-secondary rounded m-4">
            <form method="post" enctype="multipart/form-data">
                <p class="col-9 text-center text-light p-2 m-3">CIVILITÉ :<p>                
                <p class="col-9 text-center text-light p-2 m-3"><select  name="civility" class="col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">
                    <option value="Monsieur" label="Monsieur">
                    <option value="Madame" label="Madame">
                    <option value="Autre" label="Autre">
                </select></p></p></p>
                <p class="col-9 text-center text-light p-2 m-3">NOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="lastName" id="lastName"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3">PRÉNOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="firstName" id="firstName"/></p></p>
                <p class="col-9 text-center text-light border border-light rounded p-2 m-3">Formulaire d'envoi de fichier :</p>
                <input class="btn btn-outline-warning rounded text-warning p-2 m-3" type="file" name="monFichier"/>
                <p class="text-center text-light p-2 m-3"><p>
                <p class="col-9 text-center text-light p-2 m-3"><button type="submit" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">AFFICHER LES DONNÉES ET ENVOYER LE FICHIER !</button></p>
                <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
                    <?php 
                       var_dump($_FILES);
                    ?>

                    <?php
                        if (isset($_FILES['monFichier']) AND $_FILES['monFichier']['error'] == 0)
                        {
                        echo "<script language='JavaScript'>alert('fichier envoyé !')</script>";
                        }else{
                        echo "<script language='JavaScript'>alert('fichier non envoyé !')</script>";
                        }
                    ?>
                    </div>
            </form>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center id=div2">
       
            <?php 
                // var_dump($_POST);
                if(isset($_POST['civility'])) {
                $result = $_POST['civility'];

                 if(empty($result)) {
                 echo "<script language='JavaScript'>alert('Input CIVILITÉ requis !')</script>";
                    } elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result)) {
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                    } else {
                    echo 'CIVILITÉ : '. $_POST['civility'];
                    }
                }

                if(isset($_POST['lastName'])) {
                $result = $_POST['lastName'];

                 if(empty($result)) {
                 echo "<script language='JavaScript'>alert('Input NOM requis !')</script>";
                    } elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result)) {
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                    } else {
                    echo '  '. 'NOM : '. $_POST['lastName'];
                    }
                }

                if(isset($_POST['firstName'])) {
                $result2 = $_POST['firstName'];

                 if(empty($result2))
                    echo "<script language='JavaScript'>alert('Input PRÉNOM requis !')</script>";
                 elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result2))
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                else
                    echo '  '. 'PRÉNOM : '. $_POST['firstName'];
                    
                }
            ?>
        </div>
    </div>
</body>
</html>