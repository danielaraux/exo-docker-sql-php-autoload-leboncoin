<?php

// Pour reprendre la session
session_start();

// Pour vider la session
session_unset();

// Pour détruire la session
session_destroy();

// Pour revenir à la page de connexion au bout de 15s automatiquement
header("refresh:15;url=login.php")

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <nav>
            <div class="navbar d-flex align-items-center justify-content-between">
                <!-- LOGO ACCUEIL -->
                <div><a href="login.php"><img src="assets/img/logo.png" alt="logo doctolab" style="width: 8rem;"></a></div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container text-center mt-5">
            <h1 class="mb-4">Déconnexion</h1>
            <p class="text-success">Vous avez été déconnecté avec succès.</p>
            <a href="login.php" class="btn btn-primary mt-3">Retour à la page de connexion</a>
        </div>

    </main>


    <footer class="pb-3 fixed-bottom">
        <hr class="w-75 mx-auto">
        <div class="d-block d-lg-flex justify-content-lg-around align-items-lg-center">
            <div class="text-center">
                <img src="assets/img/doctolabfooter.png" alt="logo doctolab" style="width: 8rem;">

            </div>
            <div class="text-center"><a href="espace.php" class="text-decoration-none">Conditions générales d'utilisation (C.G.U)</a></div>
            <div class="copyright text-center">Copyright © 2025 Doctolab, tous droits réservés.</div>

            <div class="text-center">
                <a href="espace.php"><img src="assets/img/appstorebadge.png" alt="logo apple store" style="width: 8rem;"></a>
                <a href="espace.php"><img src="assets/img/googleplaybadge.png" alt="logo google play store" style="width: 8rem;"></a>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>