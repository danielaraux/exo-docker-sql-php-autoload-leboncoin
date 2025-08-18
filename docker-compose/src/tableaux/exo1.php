<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Tableaux PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="text-center">

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 1 - Tableaux PHP</h1>


    <?php
    $tableau = ["Alice", "Bob", "Charlie", "David", "Emma"];

    array_push($tableau, "Gerard"); // pour ajouter gerard dans le tableau
    array_unshift($tableau, "Bruno"); // pour supprimer bruno du tableau


    array_splice($tableau, 1, 1); // pour supprimer l'élément en position 1

    echo "Trouver l'index d'un prénom dans le tableau : ";

    echo array_search("Bob", $tableau); // pour trouver l'index d'un prénom du tableau (ça nous affiche 1 sur la page)
    echo "<br>";
    array_splice($tableau, 1, 1); // pour supprimer bob et qu'un seul élément.

    echo "Compter le nombre de prénoms dans le tableau : ";
    echo count($tableau); // pour compter le nombre de prénoms dans le tableau

    echo "<br>";
    echo "<br>";


    //  <!-- On peut faire un foreach -->
    echo "Methode avec un foreach : ", "<br>";
    foreach ($tableau as $value) {
        echo $value . '<br>';
    }

    echo "<br>";
    // ou une boucle for en utilisant les index
    echo "Methode avec un for : ", "<br>";
    for ($i = 0; $i < count($tableau); $i++) { ?>
        <div class="border"><?= $i, " ", $tableau[$i] ?></div>

    <?php } ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>