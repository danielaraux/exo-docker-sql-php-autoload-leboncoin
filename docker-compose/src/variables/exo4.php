<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button><a href="../index.php">Retour</a></button>


    <h1>Exercice 4</h1>

    <?php
    $lastName = "DOVER";
    $firstName = "Ben";
    $age = 107;

    // Première méthode
    echo "Bonjour", " ", $lastName, " ", $firstName, ", tu as bien ", $age, " ans ?";

    // ou

    echo "Bonjour $firstName $lastName, tu as bien $age ans ?";

    // Deuxième méthode, on concatène avec un . et des ''
    // echo 'Bonjour', ' . $lastName . ' ' . $firstName . ' ', tu as bien ' ' . $age . ' ans ?';
    ?>

</body>

</html>