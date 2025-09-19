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

    <main class="min-vh-100 container my-4">
        <div class="row g-4 mt-5">
            <!-- Image -->
            <div class="col-12 col-md-5">
                <img src="<?= htmlspecialchars($annonce['a_picture']) ?>"
                    class="img-fluid rounded shadow"
                    alt="photo de l'annonce">
            </div>

            <!-- Contenu -->
            <div class="col-12 col-md-7">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="card-title"><?= htmlspecialchars($annonce['a_title']) ?></h3>
                    <a href="index.php?url=annonces" class="btn">Retour aux annonces</a>
                </div>

                <p class="fw-bold fs-5">Prix : <?= htmlspecialchars($annonce['a_price']) ?> €</p>

                <p class="card-text">
                    <?= htmlspecialchars($annonce['a_description']) ?>
                </p>

                <div class="d-flex justify-content-center mt-4">
                    <a href="#" class="btn">Contacter le vendeur</a>
                </div>
            </div>
        </div>
    </main>





    <footer class="text-center py-2">
        <div>
            <h3 class="text-light mt-2">leboncoin-like 2006 - 2025</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>