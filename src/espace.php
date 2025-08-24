<?php

session_start();

// Condition pour retourner à la page de connexion si on lance la page sans s'être connecté
// Si le tableau user est n'existe pas ou est null, redirection vers la page de login
// Car les données se transmettent uniquement lors de la connexion via SESSION
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// On crée des variables pour plus de praticité
$userName = $_SESSION['user']['name'];
$userRole = $_SESSION['user']['role'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page espace session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-mobile navbar-expand-lg d-flex align-items-center">
            <div class="container-fluid">
                <div><a href="login.php"><img src="assets/img/logo.png" alt="logo doctolab" style="width: 8rem;"></a></div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Liens à gauche -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item m-2">
                            <a href="#" class="nav-link-hover">Prendre un rendez-vous</a>
                        </li>
                        <li class="nav-item m-2">
                            <a href="#" class="nav-link-hover">Consulter mes rendez-vous</a>
                        </li>
                        <?php if ($userRole === 'admin') : ?>
                            <li class="nav-item m-2">
                                <a href="#" class="nav-link-hover">Gérer les utilisateurs</a>
                            </li>
                            <li class="nav-item m-2">
                                <a href="#" class="nav-link-hover">Gérer les rendez-vous</a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <!-- Liens à droite Bouton déconnexion pas bien en place côté mobile -->
                    <div class="d-flex ms-auto align-items-center">
                        <div class="text-light me-2"><b><?= htmlspecialchars("$userName ($userRole)") ?></b></div>
                        <div><a href="logout.php" class="nav-link-hover text-light">Déconnexion</a></div>
                    </div>
                </div>

            </div>
        </nav>







    </header>

    <main>

        <h1 class="text-center fs-2 m-3">Page espace session</h1>

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