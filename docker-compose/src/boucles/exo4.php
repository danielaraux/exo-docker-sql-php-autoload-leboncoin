<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Boucles PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 4 - Boucles PHP</h1>

    <h2>Opacité descendante :</h2>

    <div class="d-flex flex-wrap gap-5">
        <?php
        for ($i = 100; $i >= 0; $i -= 25) { ?>

            <div class="border border-dark p-3 rounded  bg-primary  text-light opacity-<?php echo $i ?>"><?php echo $i ?> %</div>

        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>