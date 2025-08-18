<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Boucles PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 3 - Boucles PHP</h1>


    <?php
    echo '2000 à 2025 :', '<br>';
    for ($i = 2000; $i <= 2025; $i++) {
        echo $i, " ";
    }

    echo '<br>', '<br>';

    echo '100 à 0 :', '<br>';
    for ($i = 100; $i >= 0; $i--) {
        echo $i, " ";
    }

    echo '<br>', '<br>';

    echo '1 à 99 en impair :', '<br>';
    for ($i = 1; $i <= 99; $i++) {
        echo $i, " ";
        $i++;
    }
    ?>


</body>

</html>