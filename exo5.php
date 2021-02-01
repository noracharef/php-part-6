<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 6 exercice 5</title>
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
            <li><a href="exo8.php">Ex 10</a></li>
        </ul>

        <h1>PHP Partie 6 : Les formulaires</h1>
        <h2>Exercice 5<h2>
                <p>Créer un formulaire sur la page index.php avec :<br>
                    Une liste déroulante pour la civilité (Mr ou Mme)<br>
                    Un champ texte pour le nom<br>
                    Un champ texte pour le prénom<br>
                <p>

                <p>Ce formulaire doit rediriger vers la page index.php.<br>
                    Vous avez le choix de la méthode.<br></p>

                <form method="POST" action="exo5.php">

                    <div><label for="selectTitle">Votre Civilité:</label>

                        <select name="title" id="title">
                            <option value="">--Civilité--</option>
                            <option value="Mme">Mme</option>
                            <option value="Mr">Mr</option>
                        </select>

                    </div>
                    <div>
                        <label for="lastname">Nom :</label>
                        <input type="text" id="lastname" name="lastname">
                    </div>
                    <div>
                        <label for="firstname">Prénom:</label>
                        <input type="text" id="firstname" name="firstname">
                    </div>
                    <div class="button">
                        <button type="submit" name>Envoyer</button>
                    </div>
                </form>

                <?php

                echo "<br>Bonjour ! ".  $_POST["title"] . " ".  $_POST["firstname"] . " " . $_POST["lastname"] . " comment allez-vous ? "

                ?>

</body>

</html>