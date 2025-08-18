<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Conditions PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 5 - Conditions PHP</h1>

    <?php
    $number = 9;

    if ($number % 2 == 0) {
        echo "Ce nombre est pair";
    } else
        echo "Ce nombre est impair";
    ?>

</body>

</html>