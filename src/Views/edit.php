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

        <h2 class="text-center">Modifier l'annonce :</h2>

        <div class="btn-container">
            <a href="index.php?url=annonces" class="btn">Retour aux annonces</a>
        </div>

        <form method="post" class="mx-auto my-4" enctype="multipart/form-data">

            <div class="row my-4 border mx-auto rounded p-4 shadow">
                <!-- Image -->
                <div class="container-card col-md-5 col-9 mx-auto mb-5">
                    <div class="card col-md-7 w-100 mx-auto border-0">
                        <img
                            src="<?= $annonceInfo['a_picture'] !== "nophoto.jpg"
                                        ? '/uploads/' . htmlspecialchars($annonceInfo['u_username']) . '/' . htmlspecialchars($annonceInfo['a_picture'])
                                        : '/uploads/nophoto.jpg' ?>"
                            class="img-annonce rounded d-block mx-auto"
                            alt="Photo de l'annonce <?= htmlspecialchars($annonceInfo['a_title']) ?>">

                    </div>
                    <?php if ($annonceInfo['a_picture'] == "nophoto.jpg") { ?>
                        <p class="my-2 ms-3"><i>Pas de photo ajoutée à l'annonce</i></p>
                    <?php } ?>

                    <!-- Image -->
                    <div class="img-change mx-auto my-3">
                        <label for="photo" class="form-label">
                            <div><b>Changer la photo : (facultatif)</b></div>
                            <div><i>Formats valides : jpeg, jpg, webp, png.</i></div>
                            <div><i>Taille maximum : 8 Mo.</i></div>

                            <div class="text-danger my-2"><b><i><?= isset($errors['picture']) ? htmlspecialchars($errors['picture']) : '' ?></i></b></div>
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="picture" id="picture">
                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <div class="col-md-7">

                    <!-- Titre -->
                    <div class="mb-3">
                        <label for="title" class="form-label">
                            <b>Titre de l'annonce : </b><span class="text-danger">* <i><?= isset($errors['title']) ? htmlspecialchars($errors['title']) : '' ?></i></span>
                        </label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= htmlspecialchars($annonceInfo['a_title'] ?? "")  ?>">
                    </div>

                    <!-- Prix -->
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            <b>Prix : (en €) </b><span class="text-danger">* <i><?= isset($errors['price']) ? htmlspecialchars($errors['price']) : '' ?></i></span>
                        </label>
                        <div class="mb-2"><i>ex. 1.50 pour 1.50€</i></div>
                        <input type="number" name="price" class="form-control" id="price" step="any" min="1" value="<?= htmlspecialchars($annonceInfo['a_price'] ?? "") ?>">
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            <b>Description : </b><span class="text-danger">* <i><?= isset($errors['description']) ? htmlspecialchars($errors['description']) : '' ?></i></span>
                        </label>
                        <textarea class="form-control" name="description" id="description" rows="15"><?= htmlspecialchars($annonceInfo['a_description'] ?? "")  ?></textarea>
                    </div>

                    <div class="d-flex justify-content-end mt-4">

                        <div class="text-center mt-5">
                            <button type="submit" class="btn">Valider les modifications</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <footer class="text-center py-2">
        <div>
            <h3 class="text-light mt-2">leboncoin-like 2006 - 2025</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>