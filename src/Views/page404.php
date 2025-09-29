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
        <?php include_once __DIR__ . "/templates/navbar.php" ?>

    </header>

    <main class="container">

        <div class="d-md-flex justify-content-around my-5">
            <div>
                <p class="error-404">404</p>
                <p class="error-perdu">Perdu dans les</p>
                <p class="mb-5 error-rayons">RAYONS !</p>
                <p class="mt-5">La page n'a pas été trouvée.</p>
            </div>

            <div class="text-center d-flex align-items-center justify-content-center">

                <a href="index.php" class="btn text-light text-decoration-none"><span class="me-2"><i class="bi bi-arrow-left"></i> </span>Retour à l'accueil</a>
            </div>
        </div>

    </main>

    <footer class="text-center py-2 fixed-bottom">
        <div>
            <h3 class="text-light mt-2">leboncoin-like 2006 - 2025</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>