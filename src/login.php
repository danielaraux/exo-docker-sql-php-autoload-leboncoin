<?php

session_start();

require_once 'users.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $errors = [];

    // création de la regex
    $regName = "/^[a-zA-Zàèé\-]+$/";

    // VERIFICATION DE L'EMAIL
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email obligatoire';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email non valide';
    }

    // VERIFICATION DU MOT DE PASSE
    if (empty($_POST['password'])) {
        $errors['password'] = 'Mot de passe obligatoire';
    } elseif (strlen($_POST['password']) < 6) {
        $errors['password'] = 'Le mot de passe doit contenir au moins 6 caractères';
    }

    // VERIFICATION DE L'UTILISATEUR SI PAS D'ERREUR
    if (empty($errors)) {
        $userFound = "";
        foreach ($users as $u) {
            if ($u['email'] === $_POST['email']) {
                $userFound = $u;
                break;
            }
        }

        // Si ça ne trouve pas l'utilisateur, message d'erreur
        if (!$userFound) {
            $errors['email'] = 'Cet email n’existe pas';

            // Si le mot de passe tappé n'est pas bon, message d'erreur
        } elseif (!password_verify($_POST['password'], $userFound['password'])) {
            $errors['password'] = 'Mot de passe incorrect';


            // Autrement c'est que l'on a trouvé l'utilisateur, récupère le Prenom NOM de l'adresse email,
            // on stocke les infos session et on redirige vers espace.php
        } else {
            $email = $userFound['email']; // On stocke l'adresse email
            $parts = explode('@', $email); // Sépare ce qu'il y a avant et après le @, on stocke
            $prenomNom = $parts[0]; // On récupère le prenom.nom

            $pn = explode('.', $prenomNom); // On sépare le prénom du nom grace au point, on stocke
            $prenom = ucfirst($pn[0]); // On met la première lettre du prénom en majuscule
            $nom = strtoupper($pn[1]); // On met le nom en majuscule

            $fullName = $prenom . ' ' . $nom; // On stocke Prenom espace NOM dans $fullName


            $_SESSION['user'] = [ // On stocke nos informations de l'user authentifié dans le tableau user
                'email' => $userFound['email'],
                'name'  => $fullName,
                'role'  => $userFound['role']
            ];
            header("Location: espace.php"); // On redirige vers espace.php
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <div>
                <!-- LOGO ACCUEIL -->
                <div><a href="login.php"><img src="assets/img/logo.png" alt="logo doctolab" style="width: 8rem;"></a></div>
            </div>
        </nav>
    </header>

    <main>
        <h1 class="text-center fs-2 m-3">Page de connexion</h1>
        <div class="se-connecter mx-auto m-3 mt-5"><b>Se connecter</b></div>

        <!-- FORM -->
        <div class="container-form mx-auto m-3 p-3 p-lg-5 border">
            <form action="" method="post" class="form-body mx-auto">

                <!-- EMAIL -->
                <div class="mb-4">
                    <label for="email" class="form-label">
                        <b>Adresse email :</b> <span class="text-danger">* <?= isset($errors['email']) ? htmlspecialchars($errors['email']) : '' ?></span>
                    </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse email..." value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                </div>


                <!-- PASSWORD -->
                <div class="mb-3">
                    <label for="password" class="form-label">

                        <b>Mot de passe :</b> <span class="text-danger">* <?= isset($errors['password']) ? htmlspecialchars($errors['password']) : '' ?></span>
                    </label>
                    <input type="password" name="password" class="form-control" id="password" title="Doit contenir au minimum 6 caractères" placeholder="Entrez votre mot de passe...">
                </div>

                <div class="text-danger m-2">* : champs obligatoires</div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3 w-100"><b>Continuer</b></button>
                </div>
            </form>
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