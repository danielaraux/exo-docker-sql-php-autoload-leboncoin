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


    <main class="container min-vh-100">
        <div class="card shadow mx-auto p-3 my-4">

            <h2 class="text-center mt-3">Formulaire d'inscription</h2>
            <form method="post" class="form-container mx-auto my-4">

                <!-- USERNAME -->
                <div class="mb-3">
                    <label for="username" class="form-label">
                        <b>Nom d'utilisateur : </b><span class="text-danger">* <i><?= isset($errors['username']) ? htmlspecialchars($errors['username']) : '' ?></i></span>
                    </label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur..." value="<?= $_POST['username'] ?? "" ?>">
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <b>Adresse email : </b><span class="text-danger">* <i><?= isset($errors['email']) ? htmlspecialchars($errors['email']) : '' ?></i></span>
                    </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse email..." value="<?= $_POST['email'] ?? "" ?>">
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label for="password" class="form-label">
                        <b>Mot de passe : </b><span class="text-danger">* <i><?= isset($errors['password']) ? htmlspecialchars($errors['password']) : '' ?></i></span>
                    </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe...">
                </div>

                <!--CONFIRM PASSWORD -->
                <div class="mb-3">
                    <label for="password" class="form-label">

                        <!-- Si passwordConfirm existe dans $errors, alors ça affiche le contenu de $errors, sinon on affiche rien -->
                        <b>Confirmation du Mot de passe : </b><span class="text-danger">* <i><?= isset($errors['passwordConfirm']) ? htmlspecialchars($errors['passwordConfirm']) : '' ?></i>
                            <span>
                    </label>
                    <input type="password" name="passwordConfirm" class="form-control" id="passwordConfirm" placeholder="Confirmez votre mot de passe...">
                </div>

                <!-- CGU -->
                <div class="form-check mb-3">
                    <input type="checkbox" name="cgu" class="form-check-input" id="exampleCheck1" value="<?= $_POST['cgu'] ?? "" ?>">
                    <label class="form-check-label cgu" for="exampleCheck1">
                        <b>J'accepte les CGU</b> <span class="text-danger">* <i><?= isset($errors['cgu']) ? htmlspecialchars($errors['cgu']) : '' ?></i></span>
                    </label>
                </div>
                <div class="text-danger">* Champs obligatoires</div>
                <div class="my-3">
                    <a href="index.php?url=login">Déja inscrit ? Connectez-vous !</a>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn mb-3">S'inscrire</button>
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