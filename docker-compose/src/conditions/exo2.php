<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Conditions PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 2 - Conditions PHP</h1>

    <?php
    $isEasy = true;


    // if $isEasy == true
    if ($isEasy) {
        echo "C'est facile";
    } else {
        echo "C'est difficile";
    }

    // Transformation en ternaire : On affiche via echo, "Si isEasy est "true" (pour false on aurait ajouté un ! devant $isEasy), alors affiche "facile", sinon (:) affiche "Difficile"
    echo $isEasy ? 'facile' : 'difficile';

    ?>

</body>

</html>