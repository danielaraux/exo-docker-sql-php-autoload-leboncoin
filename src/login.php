<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="">


    <h1 class="text-center">Formulaire d'inscription</h1>
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

                <!-- Ternaire pour dire que si il y a une erreur, ça affiche 'Nom obligatoire' -->
                <!-- On peut simplifier par isset($errors['nom']) ? $errors['nom'] : '' ?> -->
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