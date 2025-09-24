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

    <main class="min-vh-100 container my-5">

        <div class="card">
            <div class="m-3">
                <h2>Votre Profil :</h2>
                <div class="my-2 mt-3"><b>Nom d'utilisateur : </b><?= $_SESSION['user']['username'] ?></div>
                <div class="my-2"><b>Email : </b><?= $_SESSION['user']['email'] ?></div>
                <div class="my-2"><b>Date d'inscription : </b><?= $_SESSION['user']['inscription'] ?></div>
            </div>
        </div>

        <div class="my-3">
            <h2>Mes Annonces : </h2>
        </div>

        <?php if (empty($annonceUser)) { ?>
            <p>Il n'y a pas d'annonces à afficher.<span> <a href="index.php?url=create">Créer une annonce</a></span></p>
        <?php } ?>

        <div class="row g-3 my-2">
            <?php foreach ($annonceUser as $annonces) { ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 d-flex flex-column shadow">
                        <div class="w-100 h-50 d-flex align-items-center justify-content-center">
                            <img
                                src="<?= $annonces['a_picture'] !== "nophoto.jpg"
                                            ? '/uploads/' . $_SESSION['user']['username'] . '/' . htmlspecialchars($annonces['a_picture'])
                                            : '/uploads/nophoto.jpg' ?>"
                                class="img-fluid w-100 h-100 object-fit-contain"
                                alt="<?= htmlspecialchars($annonces['a_title']) ?>">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b><?= htmlspecialchars($annonces['a_title']) ?></b></h5>
                            <p class="card-text">Date de création : <?= htmlspecialchars($annonces['a_publication']) ?></p>
                            <p class="card-text">Prix : <b><?= htmlspecialchars($annonces['a_price']) ?> €</b></p>

                            <!-- Voir les détails de l'annonce -->
                            <a href="index.php?url=details/<?= $annonces['a_id'] ?>" class="btn mt-auto">
                                Voir les détails de l'annonce
                            </a>

                            <!-- Modifier l'annonce -->
                            <a href="index.php?url=update/<?= $annonces['a_id'] ?>" class="btn bg-secondary mt-3">
                                Modifier l'annonce
                            </a>

                            <!-- Supprimer l'annonce -->
                            <!-- Bouton qui déclenche la modale -->
                            <button type="button" class="btn bg-danger mt-3"
                                data-bs-toggle="modal"
                                data-bs-target="#modal-<?= $annonces['a_id'] ?>">
                                Supprimer l'annonce
                            </button>
                        </div>
                    </div>
                </div>

                <!-- MODAL DE SUPPRESSION POUR CHAQUE ANNONCE -->
                <div class="modal fade" id="modal-<?= $annonces['a_id'] ?>" tabindex="-1" aria-labelledby="modalLabel-<?= $annonces['a_id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-danger" id="modalLabel-<?= $annonces['a_id'] ?>">SUPPRESSION DE L'ANNONCE</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <p>L'annonce <b><?= htmlspecialchars($annonces['a_title']) ?></b> va être complètement supprimée.</p>
                                <p><b>Voulez-vous vraiment supprimer cette annonce ? (Irréversible)</b></p>
                            </div>
                            <div class="modal-footer mb-2">
                                <a href="index.php?url=profil" class="btn bg-secondary mt-3 me-3">Retour</a>
                                <a href="index.php?url=delete/<?= $annonces['a_id'] ?>" class="btn bg-danger mt-3">Supprimer l'annonce</a>
                            </div>
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