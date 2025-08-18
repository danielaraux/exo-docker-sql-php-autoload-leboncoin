<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Boucles PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 2 - Boucles PHP</h1>

    <ol>
        <?php
        $i = 1;
        while ($i <= 14) { ?>

            <li>février</li>

        <?php $i++;
        }
        ?>
    </ol>

</body>

</html>