<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Conditions PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 7 - Conditions PHP</h1>

    <?php
    $show = true
    ?>

    <?php if ($show == true) { ?>
        <!-- Quand show est égal à true -->
        <div class="container">
            <div id="bloc">
                <p>Je suis le bloc visible</p>
            </div>
        </div>

    <?php } else { ?>
        <!-- Quand show est égal à false -->
        <div class="container">
            <p>Le bloc est caché</p>
        </div>

    <?php } ?>

</body>

</html>