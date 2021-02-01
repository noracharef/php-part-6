<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 6 exercice 4</title>
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
        <h2>Exercice 4<h2>
                <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
                </p>

                <form method="post" action="userex2.php">
                    <div>
                        <label for="lastname">Nom :</label>
                        <input type="text" required id="lastname" name="lastname">
                    </div>
                    <div>
                        <label for="firstname">Prénom:</label>
                        <input type="text" required id="firstname" name="firstname">
                    </div>
                    <div class="button">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>

</body>