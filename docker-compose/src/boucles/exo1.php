<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Boucles PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 1 - Boucles PHP</h1>

    <?php
    $firstLoop = 1;
    echo 'Première boucle : ';
    while ($firstLoop <= 20) {
        echo $firstLoop, " ";
        $firstLoop += 1;
    }

    $secondLoop = 10;
    echo '<br>', 'Seconde boucle : ';
    while ($secondLoop >= 0) {
        echo $secondLoop, " ";
        $secondLoop -= 1;
    }
    ?>

</body>

</html>