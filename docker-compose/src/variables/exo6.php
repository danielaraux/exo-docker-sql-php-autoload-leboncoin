<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button><a href="../index.php">Retour</a></button>


    <h1>Exercice 6</h1>

    <!-- // PHP -->
    <?php
    $title = "Sleeping Dogs";
    $description = "Sleeping Dogs est un jeu vidéo d'action en monde ouvert avec vue à la troisième personne. Développé par United Front Games et édité par Square Enix et Namco Bandai Games, le jeu est sorti en 2012 sur PlayStation 3, Xbox 360 et Windows. Une version mise à jour comprenant tous les contenus téléchargeables préalablement mis en ligne, titrée Sleeping Dogs: Definitive Edition, sorti sur PC, PlayStation 4 et Xbox One en 2014.";
    $lien = 'https://fr.wikipedia.org/wiki/Sleeping_Dogs_(jeu_vid%C3%A9o)';
    $image = 'https://upload.wikimedia.org/wikipedia/en/9/90/Sleeping_Dogs_-_Square_Enix_video_game_cover.jpg'
    ?>



    <div class="card" style="width:20%">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo $image ?>">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $title ?><i class="material-icons right">more_vert</i></span>
            <p><a href="<?php echo $lien ?>">Lien du site</a></p>
        </div>
        <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sleeping Dogs<i class="material-icons right">close</i></span>
            <div style="margin: 5px">Description : </div>
            <?php echo $description ?>
        </div>
    </div>


    <!-- echo court : <?= $title ?> -->
    <!-- Permet de faire un echo uniquement sans avoir a taper php echo -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>