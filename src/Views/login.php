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
        <div class="card shadow mx-auto p-3 my-4">

            <h2 class="text-center mt-3">Se connecter</h2>
            <form action="" method="post" class="form-container mx-auto my-4">

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <b>Adresse email : </b><span class="text-danger">* <i><?= isset($errors['email']) ? htmlspecialchars($errors['email']) : '' ?></i></span>
                    </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse email..." value="<?= htmlspecialchars($_POST['email'] ?? "") ?>">
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <b>Mot de passe : </b><span class="text-danger">* <i><?= isset($errors['password']) ? htmlspecialchars($errors['password']) : '' ?></i></span>
                    </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe...">
                </div>

                <div class="text-danger">* Champs obligatoires</div>
                <div class="my-3">
                    <a href="index.php?url=register">Pas encore inscrit ? Inscrivez-vous ici !</a>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn">Se connecter</button>
                </div>

            </form>
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