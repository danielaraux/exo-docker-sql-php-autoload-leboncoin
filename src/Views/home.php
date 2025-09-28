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

        <h2 class="text-center">Toutes les annonces</h2>

        <div class="row g-3 my-2">
            <?php foreach ($createAnnonce as $annonce) { ?>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 d-flex flex-column shadow">
                        <div class="w-100 h-50 d-flex align-items-center justify-content-center">
                            <img
                                src="<?= $annonce['a_picture'] !== "nophoto.jpg"
                                            ? '/uploads/' . htmlspecialchars($annonce['u_username']) . '/' . htmlspecialchars($annonce['a_picture'])
                                            : '/uploads/nophoto.jpg' ?>"
                                class="img-fluid w-100 h-100 object-fit-contain"
                                alt="<?= htmlspecialchars($annonce['a_title']) ?>">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b><?= htmlspecialchars($annonce['a_title']) ?></b></h5>
                            <p class="card-text">Date de création : <?= (new DateTime($annonce["a_publication"]))->format('d/m/Y') ?></p>
                            <p class="card-text">Prix : <b><?= htmlspecialchars($annonce['a_price']) ?> €</b></p>

                            <!-- lien avec l'ID de l'annonce -->
                            <a href="index.php?url=details/<?= htmlspecialchars($annonce['a_id']) ?>"
                                class="btn mt-auto">
                                Détails
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
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