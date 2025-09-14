<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leboncoin-like</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="sticky-top border-bottom shadow">
        <nav class="navbar navbar-expand-lg container">
            <div class="container-fluid">

                <h1 class="mt-2">leboncoin-like</h1>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-end w-100">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=register">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=login">Se connecter</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>

    <main class="container">

        <div class="d-md-flex justify-content-around my-5">
            <div>
                <p class="error-404">404</p>
                <p class="error-perdu">Perdu dans les</p>
                <p class="mb-5 error-rayons">RAYONS !</p>
                <p class="mt-5">Désolés, on a cherché dans tous les coins, on n’a pas trouvé la bonne page.</p>
            </div>

            <div class="text-center d-flex align-items-center justify-content-center">

                <button class="btn"><a href="index.php" class="text-light text-decoration-none"><span class="me-2"><i class="bi bi-arrow-left"></i> </span>Retour à l'accueil</a></button>
            </div>
        </div>


        <!-- <div class="container my-5 ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
               
            </div>
        </div>

        <div class="d-flex justify-content-end m-3">
            <a href="#" class="btn btn-primary">Revenir en haut</a>
        </div> -->

    </main>

    <footer class="text-center py-2 fixed-bottom">
        <div>
            <h3 class="text-light mt-2">leboncoin-like 2006 - 2025</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>