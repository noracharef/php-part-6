<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 6 exercice 9</title>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <nav>
        <ul>
            <li><a href="exo1.php">Ex 1</a></li>
            <li><a href="exo2.php">Ex 2</a></li>
            <li><a href="exo3.php">Ex 3</a></li>
            <li><a href="exo4.php">Ex 4</a></li>
            <li><a href="exo5.php">Ex 5</a></li>
            <li><a href="exo6.php">Ex 6</a></li>
            <li><a href="exo7.php">Ex 7</a></li>
            <li><a href="exo8.php">Ex 8</a></li>
            <li><a href="exo9.php">Ex 9</a></li>
        </ul>

        <h1>PHP Partie 6 : Les formulaires</h1>
        <h2>Exercice 9<h2>
                <p>Créer un formulaire de création de profil sur la page index.php avec :<br>
                    • Une des bouton radio pour civilité (Mr ou Mme)<br>
                    • Un champ texte pour le nom<br>
                    • Un champ texte pour le prénom<br>
                    • Un champ date pour la date de naissance<br>
                    • Un champ d'envoi de fichier pour l'image de profil.<br>
                    A la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil dans un dossier image que vous auriez créer en amont. Afficher le profil de l'utilisateur dans une page profile.php
                <p>

                <form  method="POST" action="exo9.php" enctype="multipart/form-data" novalidate>
                    <div>
                        <input type="radio" id="titleMrs" name="titleMrs" value="Mme">
                        <label for="titleMrs">Mme</label>

                        <input type="radio" id="titleMr" name="contact" value="Mr">
                        <label for="titleMr">Mr</label>
                    </div>
                    <div>
                        <label for="lastname">Nom :</label>
                        <input type="text" id="lastname" name="lastname">
                    </div>
                    <div>
                        <label for="age">age:</label>
                        <input type="number" id="age" name="age">
                    </div>
                    <div>
                        <label for="ProfilPicture">Votre image de profil:</label>
                        <input type="file" id="profilPicture" name="profilPicture" accept="image/png, image/jpeg">
                    </div>
                    <div class="button">
                        <button type="submit" name="submit">Envoyer </button>
                    </div>
                </form>

                <?php

                ?>
</body>

</html>