<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Conditions PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 1 - Conditions PHP</h1>

    <?php
    $age = 17;

    if ($age >= 18) {
        echo "Vous êtes majeur";
    } else {
        echo "Vous êtes mineur";
    }
    ?>

</body>

</html>