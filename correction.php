<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo4</title>
    </head>
    <body>
            <?php
//if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
                ?>
            <form method="post" action="correction.php">
                <select name="civilite">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastName" placeholder="Votre nom">
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Votre prénom">
                <input type="submit" name="valider" value="Valider"/>

                <p> Formulaire d'envoi de fichier
                    <input type="file" name="monfichier" value="choisir un fichier">
                    <input type="submit" name="valider" value="Envoyer le fichier">
                </p>
            </form>
            <?php
        //     }
        //     $verifName = "/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/";
        //     var_dump($_FILES);
        //     if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
        //     if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
        //         if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
        //        echo 'Bonjour '. ' ' . $_POST['civilite']. ' ' . $_POST['firstName']. ' ' . $_POST['lastName']. ' '. 'Fichier envoyé :'. ' ';
        //         }else{
        //            echo ' Veuillez vérifier votre saisie !';
        //         }
        //    }
        
        ?> 
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(empty($_POST['lastName']) || empty($_POST['firstName'])){

    
?>
    <form id="form" action="correction.php" method="post" enctype="multipart/form-data">
        <label for="gender">Votre civilité ? </label>
        <select name="gender">
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</otpion>
            <option value="Autre">Autre</option>
        </select>
        <label for="lastName"> Nom : </label>
        <input type="text" name="lastName">
        <label for="firstName"> Prénom : </label>
        <input type="text" name="firstName">
        <label for="file">Votre fichier</label>
        <input type="file" name="file">
        <input type="submit" value="Envoyer le fichier">
    </form>
    <?php 
    }else{
       if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender'])) {
            echo strip_tags('Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' ! Le nom du fichier envoyé est :'. ' ' . $_FILES['file']['name']);
        }
    }
    ?>
</body>
</html>

