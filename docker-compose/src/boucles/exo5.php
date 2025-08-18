<?php
$month = 'Février';
$totalDays = 28;
$specialDays = 14

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Boucles PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr)
        }
    </style>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 5 - Boucles PHP</h1>


    <div class="container text-center">
        <div class="text-danger fw-bold"><?= $month ?></div>


        <div class="calendar">

            <div class="border bg-secondary">L</div>
            <div class="border bg-secondary">M</div>
            <div class="border bg-secondary">M</div>
            <div class="border bg-secondary">J</div>
            <div class="border bg-secondary">V</div>
            <div class="border bg-secondary">S</div>
            <div class="border bg-secondary">D</div>


            <?php for ($i = 1; $i <= $totalDays; $i++) { ?>

                if ($i == $specialDays) {
                <div class="border bg-danger">
                    <div><?= $i ?></div>
                </div>
                } else {
                <div class="border">
                    <div><?= $i ?></div>
                </div>
                }

            <?php } ?>

        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>