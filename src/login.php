<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $errors = [];

    // création de la regex
    $regName = "/^[a-zA-Zàèé\-]+$/";

    var_dump($_POST['email']);

    // VERIFICATION DE L EMAIL
    if (isset($_POST['email'])) {

        if (empty($_POST['email'])) {

            $errors['email'] = 'email obligatoire';

            // Sinon si 
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            // Si mail non valide, on crée une erreur
            $errors['email'] = 'mail non valide';
        }
    }










    // VERIFICATION DU MOT DE PASSE A CONTINUER

    if (isset($_POST['password'])) {

        if (empty($_POST['password'])) {

            $errors['password'] = 'password obligatoire';

            // Sinon si 
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            // Si mail non valide, on crée une erreur
            $errors['email'] = 'mail non valide';
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

<body class="">


    <h1 class="text-center">Page de connexion</h1>
    <form action="" method="post" class="w-50 mx-auto">


        <!-- EMAIL -->
        <div class="mb-3">
            <label for="email" class="form-label">
                Adresse email : <span class="text-danger">* <?= isset($errors['email']) ? $errors['email'] : '' ?></span>
            </label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse email..." value="<?= $_POST['email'] ?? "" ?>">
        </div>


        <!-- PASSWORD -->
        <div class="mb-3">
            <label for="password" class="form-label">

                Mot de passe : <span class="text-danger">*</span>
            </label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe...">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>