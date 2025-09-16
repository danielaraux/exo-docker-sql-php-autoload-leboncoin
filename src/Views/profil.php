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

    <main class="container my-5">

        <?php
        var_dump($_SESSION["user"]);
        ?>

        <div class="card">
            <div class="m-3">
                <h2>Votre Profil :</h2>
                <div class="my-2 mt-3"><b>Nom d'utilisateur : </b><?= $_SESSION['user']['username'] ?></div>
                <div class="my-2"><b>Email : </b><?= $_SESSION['user']['email'] ?></div>
                <div class="my-2"><b>Date d'inscription : </b><?= $_SESSION['user']['inscription'] ?></div>
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