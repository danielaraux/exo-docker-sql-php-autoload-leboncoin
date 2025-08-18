<?php
require_once "assets/products.php";
// var_dump($produits);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Tableaux PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <button class="mx-3"><a href="../../index.php">Retour</a></button>


    <h1 class="text-center">Liste des articles</h1>

    <div class="d-flex flex-wrap justify-content-center" id="container-card">

        <!-- Boucle foreach pour afficher les cards dans laquelle on va insérer les catégories du products.php via htmlspecialchars -->
        <!-- Boucle imbriquée dans la div pour que les cards soient bien placées -->
        <!-- Formatage du prix pour afficher deux chiffres un espace et le symbole € -->
        <?php foreach ($produits as $value): ?>


            <div class="card m-3" style="width: 18rem;">
                <img src="<?= htmlspecialchars($value['image']) ?>" class="" alt="<?= htmlspecialchars($value['nom']) ?>" style="height: 18rem">
                <div class="card-body">
                    <h5 class="card-text"><?= htmlspecialchars($value['categorie']) ?></h5>
                    <h3 class="card-title"><?= htmlspecialchars($value['nom']) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($value['description']) ?></p>
                    <p class="card-text"><?= number_format($value['prix'], 2, ',', ' ') ?> €</p>
                </div>
            </div>

        <?php endforeach; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>