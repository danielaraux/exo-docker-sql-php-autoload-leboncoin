<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Tableaux PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 2 - Tableaux PHP</h1>

    <?php

    // On crée le tableau associatif
    $personne = [
        "nom" => "DOE",
        "prenom" => "Jane",
        "age" => 70,
        "ville" => "Villejuif",
        "hobbies" => ["Course à pied", "Surf", "Saut en parachute"],
    ];

    //2. On ajoute la profession
    echo "<b>2. Ajoute la profession : </b>";
    $personne["profession"] = "Agricultrice";
    var_dump($personne);


    //3. On modifie la ville
    echo "<hr>";
    echo "<b>3. Modifier la ville en Paris : </b>";
    $personne["ville"] = "Paris";
    var_dump($personne);


    //4. On ajoute un nouveau hobby
    echo "<hr>";
    echo "<b>4. Ajoute un nouveau hobby : </b>";
    array_push($personne["hobbies"], "Mécanique");

    // On peut aussi faire comme ça
    // $personne["hobbies"][] = "Mécanique";
    var_dump($personne);


    //5. On supprime la clé age du tableau
    echo "<hr>";
    echo "<b>5. Supprime la clé age du tableau : </b>";
    unset($personne["age"]);
    var_dump($personne);


    //6. On vérifie si la clé profession existe dans le tableau et affiche un message en conséquence
    echo "<hr>";
    echo "<b>6. On vérifie si la clé profession existe dans le tableau : </b>";
    echo "<br>";
    if (array_key_exists('profession', $personne)) {
        echo "La clé profession existe bien";
    } else {
        echo "La clé profession n'existe pas";
    }


    //7. Affiche les informations de la personne avec une boucle :
    echo "<hr>";
    echo "<b>7. Affiche les informations de la personne avec une boucle : </b>";
    echo "<br>";
    foreach ($personne as $key => $value) {
        if ($key == 'hobbies') {
            echo implode(', ', $value) . '<br>';
        } else {
            echo $value . '<br>';
        }
    }


    //8. Tri les hobbies par ordre alphabétique et les afficher comme précédemment :
    echo "<hr>";
    echo "<b>8. Tri les hobbies par ordre alphabétique et les afficher comme précédemment : </b>";
    echo "<br>";



    ?>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>