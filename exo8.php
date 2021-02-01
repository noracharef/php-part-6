<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 6 exercice 8</title>
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
        <h2>Exercice 8<h2>
                <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.
                <p>



                    <?php

                    if (isset($_POST["submit"])) {
                        $x = $_FILES['file']['type'];
    
                        if (strchr($x,"pdf")) {
                
                            echo "Vous venez d'envoyer un pdf";
                        } else {
                            
                            echo "Ceci n'est pas un pdf, veuillez éssayer à nouveau";
                        }
                    } else {
                    ?>


                <form method="POST" action="exo8.php" enctype="multipart/form-data">

                    <div><label for="selectTitle">Votre Civilité:</label>

                        <select name="title" id="title">
                            <option>--Civilité--</option>
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
                    <div>
                        <label for="file">Votre fichier pdf:</label>
                        <input type="file" id="file" name="file">
                    </div>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit">Envoyer</button>
                    </div>
                </form>
            <?php }

            ?>
</body>

</html>