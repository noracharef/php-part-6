<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 6 exercice 6</title>
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
        <h2>Exercice 6<h2>
        <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, affichez-les à la place du formulaire. Sinon affichez le formulaire.
        Utiliser qu'une seule page.</p>
<!--Ici le !empty signifie que si le champ est autre que vide alors-->
 
<?php
               $var_form = "
                <form method='POST' action='exo6.php'>

                    <div><label for='selectTitle'>Votre Civilité:</label>

                        <select name='title' id='title'>
                        <option value=''>--Civilité--</option>
                        <option value='Mme'>Mme</option>
                        <option value='Mr'>Mr</option>
                        </select>

                    </div>
                <div>
                    <label for='lastname'>Nom :</label>
                    <input type='text' id='lastname' name='lastname'>
                </div>
                <div>
                    <label for='firstname'>Prénom:</label>
                    <input type='text' id='firstname' name='firstname'>
                </div>
                <div class='button'>
                <button type='submit' name='submit'>Envoyer</button>
                </div>
            </form>
" ; 

    if (isset($_POST["submit"]) && (!empty($_POST['title'])) && (!empty($_POST['lastname'])) && (!empty($_POST['firstname']))){
         echo "<br>Bonjour ! " .  $_POST["title"] . " " .  $_POST["firstname"] . " " . $_POST["lastname"] . "bienvenue !";   
       
    }
    else {
         echo $var_form; 
    }
        
    ?> 
    
</body>

</html>