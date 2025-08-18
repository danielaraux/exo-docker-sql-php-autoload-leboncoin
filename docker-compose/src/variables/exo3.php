<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button><a href="../index.php">Retour</a></button>


    <h1>Exercice 3</h1>


    <?php

    $string = "Hello World";
    $int = 85;
    $float = 3.14;
    $boolean = true;
    echo $string, " ", gettype($string), "<br>";
    echo $int, " ", gettype($int), "<br>";
    echo $float, " ", gettype($float), "<br>";
    echo $boolean, " ", gettype($boolean), "<br>";

    // Le var dump n'est pas fait pour afficher des données, c'est uniquement fait pour débugger
    // On pourrait utiliser print à la place.
    var_dump($string);
    var_dump($int);
    var_dump($float);
    var_dump($boolean);

    ?>

</body>

</html>