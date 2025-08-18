<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Conditions PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 3 - Conditions PHP</h1>

    <?php
    $age = 17;
    $gender = "Femme";

    if ($gender == "Homme" && $age < 18) {
        echo "Vous êtes un Homme et vous êtes mineur";
    } elseif ($gender == "Homme" && $age >= 18) {
        echo "Vous êtes un Homme et vous êtes majeur";
    } elseif ($gender == "Femme" && $age < 18) {
        echo "Vous êtes une Femme et vous êtes mineure";
    } elseif ($gender == "Femme" && $age >= 18) {
        echo "Vous êtes une Femme et vous êtes majeure";
    }

    ?>

</body>

</html>