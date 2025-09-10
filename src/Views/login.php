<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-LeBonCoin-Like</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/public/assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="text-center bg-dark text-light py-2">
                <h1>Home-LeBonCoin-Like</h1>
            </div>
        </nav>
    </header>

    <main class="min-vh-100 container">

        <form action="" method="post" class="w-50 mx-auto">

            <!-- EMAIL -->
            <div class="mb-3">
                <label for="email" class="form-label">
                    Adresse email : <span class="text-danger">*</span>
                </label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse email..." required>
            </div>

            <!-- PASSWORD -->
            <div class="mb-3">
                <label for="password" class="form-label">
                    Mot de passe : <span class="text-danger">*</span>
                </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe..." required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </form>

    </main>

    <footer class="text-center bg-dark text-light py-2">
        <div>
            <h1>Home-LeBonCoin-Like</h1>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>