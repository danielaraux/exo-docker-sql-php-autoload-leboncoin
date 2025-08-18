<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - Conditions PHP</title>
    <style>
        .dark {
            color: white;
            background-color: black;
            border: 1px solid black;
        }

        .light {
            color: black;
            background-color: light-grey;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 6 - Conditions PHP</h1>

    <?php
    $dark_mode = true
    ?>

    <!-- On ajoute notre ternaire à la fin de l'input pour que ça ajoute "checked" lorsque dark_mode est "true" -->
    <input type="checkbox" id="dark_mode" name="dark_mode" <?= $dark_mode ? "checked" : "" ?>>
    <label for="dark_mode">dark mode</label>

    <!-- On ajoute notre variable dark_mode, si dark_mode est true, ça met dark dans la class, sinon ça met light -->
    <div id="myElement" class="<?= $dark_mode == true ? "dark" : "light" ?>">
        <p>Hello World</p>
    </div>




</body>

</html>