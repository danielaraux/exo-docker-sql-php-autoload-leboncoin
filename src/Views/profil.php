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
                    <ul class="navbar-nav d-flex justify-content-end w-100 align-items-center">
                        <li class="nav-item">
                            <button type="submit" class="btn"><i class="bi bi-plus-square"></i> <b>Déposer une annonce</b></button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=logout">Se déconnecter</a>
                        </li>
                        <li class="nav-item px-2">

                            <a href="#" class="text-decoration-none">
                                <div class="fs-1" aria-current="page"><i class="bi bi-person-fill"></i></div>
                                <div class="text-center" aria-current="page"><?= $_SESSION['user']['username'] ?></div>
                            </a>

                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>

    <main class="min-vh-100">
        <h2 class="text-center">Page profil</h2>

    </main>

    <footer class="text-center py-2">
        <div>
            <h3 class="text-light mt-2">leboncoin-like 2006 - 2025</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>