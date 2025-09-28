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

        <h2 class="text-center">Détails de l'annonce :</h2>

        <div class="btn-container">
            <a href="index.php?url=annonces" class="btn">Retour aux annonces</a>
        </div>
        <div class="row my-4 border mx-auto rounded p-4 shadow">
            <!-- Image -->
            <div class="container-card col-md-5 col-9 mx-auto mb-5">
                <div class="card col-md-7 w-100 mx-auto border-0">
                    <img
                        src="<?= $annonce['a_picture'] !== "nophoto.jpg"
                                    ? '/uploads/' . htmlspecialchars($annonce['u_username']) . '/' . htmlspecialchars($annonce['a_picture'])
                                    : '/uploads/nophoto.jpg' ?>"
                        class="img-annonce rounded d-block mx-auto"
                        alt="<?= htmlspecialchars($annonce['a_title']) ?>">

                </div>
                <?php if ($annonce['a_picture'] == "nophoto.jpg") { ?>
                    <p class="my-2 text-center"><i>Pas de photo ajoutée à l'annonce</i></p>
                <?php } ?>

                <div class="d-flex justify-content-center mt-4">
                    <?php
                    if ($_SESSION['user']['id'] === $annonce['u_id']) { ?>
                        <!-- Modifier l'annonce -->
                        <a href="index.php?url=edit/<?= $annonce['a_id'] ?>" class="btn mt-3 w-50">
                            Modifier l'annonce
                        </a>

                    <?php } else { ?>
                        <a href="#" class="btn mt-2">Contacter le vendeur</a>
                    <?php } ?>
                </div>

            </div>

            <!-- Contenu -->
            <div class="col-md-7">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="card-title"><?= htmlspecialchars($annonce['a_title']) ?></h3>
                </div>
                <p class="card-text">Date de création : <?= (new DateTime($annonce["a_publication"]))->format('d/m/Y') ?></p>
                <p class="fw-bold fs-5">Prix : <?= htmlspecialchars($annonce['a_price']) ?> €</p>

                <p class="card-text my-5">
                    <?= nl2br(htmlspecialchars($annonce['a_description'])) ?>
                </p>

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