<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices fonctions php</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div>Exo 1 : Objectif :
        Créer une fonction qui affiche un message de bienvenue.</div>

    <!-- Un return il faut faire un echo court dans le html puis appeler la fonction, sinon si il n'y en a pas et qu'il y a un écho dans la fonction, il faut laisser le echo dans la fonction et juste appeler la fonction directement dans l'html -->
    <?php

    // Fonction dire Bonjour
    function direBonjour()
    {
        return 'Bonjour et bienvenue !';
    }
    ?>
    <p><?= direBonjour() ?></p>
    <hr>


    <div>Exo 2 : Objectif :
        Afficher un message de salutation personnalisé.</div>
    <?php

    // Fonction qui salue
    function saluer($prenom)
    {
        return "Bonjour, $prenom";
    }
    ?>
    <p><?= saluer('Daniel') ?></p>
    <p><?= saluer('Joel') ?></p>
    <hr>


    <div>Exo 3 : Objectif :
        Retourner le carré d’un nombre donné.</div>
    <?php
    // Fonction qui retourne le carre du nombre
    function carre($nombre)
    {
        return $nombre * $nombre;
    }
    ?>
    <p>Le carré du nombre 5 est de <?= carre(5) ?></p>
    <hr>


    <div>Exo 4 : Objectif :
        Déterminer si un nombre est pair ou impair.</div>

    <?php

    // Fonction pour le nombre pair
    function estPair($nombre)
    {
        // On fais le modulo afin de savoir si c'est pair ou impair ($nombre % 2 == 0)
        if ($nombre % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }
    ?>
    <!-- Ternaire pour dire que si le nombre avec le modulo qui retourne 0 est pair, sinon il est impair -->
    <p>Le nombre 10 est <?= estPair(10) ? 'Pair' : 'Impair' ?></p>
    <hr>


    <div>Exo 5 : Objectif :
        Additionner deux nombres et retourner le résultat.</div>
    <?php

    // Fonction somme (On peut le faire en echo, comme en return)
    function somme($a, $b)
    {
        echo "La somme de $a + $b = " . ($a + $b);
    }
    ?>
    <p><?= somme(3, 4) ?></p>
    <hr>

    <div>Exo 6 : Objectif :
        Comparer deux nombres et retourner le plus grand.</div>
    <?php

    // Fonction maximum (On peut le faire en echo, comme en return)
    function maximum($a, $b)
    {
        if ($a > $b) {
            echo "Le nombre le plus grand entre $a et $b, est $a";
        } else {
            echo "Le nombre le plus grand entre $a et $b, est $b";
        }
    }
    ?>
    <p><?= maximum(4, 6) ?></p>
    <hr>

    <div>Exo 6bis Objectif :
        Comparer deux nombres et retourner le plus grand.</div>
    <?php

    // Fonction maximumMulti (On peut le faire en echo, comme en return)
    // On peut aussi faire maximumMulti($a, $b, $c, $d) et echo "Le plus grand nombre entre $a, $b, $c, $d est " . (max($a, $b, $c, $d));
    function maximumMulti(...$allNumbers)
    {
        echo "Le plus grand nombre est " . (max(...$allNumbers));
    }
    ?>
    <p><?= maximumMulti(10, 4, 6, 8, 45, 25, 39) ?></p>
    <hr>


    <div>Exo 7 Objectif :
        Trouver la longueur d’un texte.</div>
    <?php


    function longueur($string)
    {
        echo "Le nombre de lettres dans le mot est de " . strlen($string);
    }
    ?>
    <p><?= longueur("Anticonstitutionnellement") ?></p>
    <hr>

    <!-- Pour les exercices 6bis et 7, ne pas utiliser de fonction avec une fonction native de php telles qu'utilisées car on utilise deux fonctions alors qu'on pourrait juste utiliser la fonction native de php -->


</body>

</html>