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

        <div class="mx-auto p-3 my-4 card shadow">

            <h2 class="text-center">Créer une annonce</h2>
            <form method="post" class="form-container mx-auto my-4" enctype="multipart/form-data">

                <!-- Titre -->
                <div class="mb-3">
                    <label for="title" class="form-label">
                        <b>Titre de l'annonce : </b><span class="text-danger">* <i><?= isset($errors['title']) ? htmlspecialchars($errors['title']) : '' ?></i></span>
                    </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Entrez le titre..." value="<?= $_POST['title'] ?? "" ?>">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">
                        <b>Description : </b><span class="text-danger">* <i><?= isset($errors['description']) ? htmlspecialchars($errors['description']) : '' ?></i></span>
                    </label>
                    <textarea class="form-control" name="description" id="description" placeholder="Entrez votre description..." rows="5"><?= $_POST['description'] ?? "" ?></textarea>
                </div>

                <!-- Prix -->
                <div class="mb-3">
                    <label for="price" class="form-label">
                        <b>Prix : (en Euros) </b><span class="text-danger">* <i><?= isset($errors['price']) ? htmlspecialchars($errors['price']) : '' ?></i></span>
                    </label>
                    <input type="number" name="price" class="form-control" id="price" step="any" min="1" placeholder="Entrez le prix..." value="<?= $_POST['price'] ?? "" ?>">
                </div>

                <!-- Photo -->
                <div class="mb-3">
                    <label for="photo" class="form-label">
                        <b>Photo :</b> (facultatif) formats valides : jpeg, jpg, webp, png. Taille maximum : 2 Mo.
                        <div class="text-danger my-2"><b><i><?= isset($errors['picture']) ? htmlspecialchars($errors['picture']) : '' ?></i></b></div>
                    </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="picture" id="picture">
                    </div>
                </div>

                <div class="text-danger">* Champs obligatoires</div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn">Créer l'annonce</button>
                </div>

            </form>
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