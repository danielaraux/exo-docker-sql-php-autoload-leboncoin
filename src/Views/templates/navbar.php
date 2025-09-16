<nav class="navbar navbar-expand-lg container">
    <div class="container-fluid">

        <h1 class="mt-2"><a href="index.php" class="title-color">leboncoin-like</a></h1>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-end w-100 align-items-center">
                <?php
                if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <button class="btn"><a href="index.php?url=create" class="text-decoration-none text-light"><i class="bi bi-plus-square"></i> <b>Déposer une annonce</b></a></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?url=logout">Se déconnecter</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="index.php?url=profil" class="text-decoration-none">
                            <div class="fs-1" aria-current="page"><i class="bi bi-person-fill"></i></div>
                            <div class="text-center" aria-current="page"><?= $_SESSION['user']['username'] ?></div>
                        </a>
                    </li>
                <?php } else { ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?url=register">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?url=login">Se connecter</a>
                    </li>
                <?php } ?>
            </ul>
        </div>

    </div>
</nav>