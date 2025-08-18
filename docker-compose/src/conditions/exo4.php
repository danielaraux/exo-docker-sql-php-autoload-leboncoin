<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Conditions PHP</title>
</head>

<body>

    <button><a href="../index.php">Retour</a></button>

    <h1>Exercice 4 - Conditions PHP</h1>

    <?php
    $magnitude = 0;

    // via des else if
    if ($magnitude == 1) {
        echo "Magnitude : Micro-séisme impossible à ressentir.";
    } else

    if ($magnitude == 2) {
        echo "Magnitude : Micro-séisme impossible à ressentir mais enregistrable par lessismomètres.";
    } else

    if ($magnitude == 3) {
        echo "Magnitude : Ne cause pas de dégats mais commence à pouvoir être légèrementressenti.";
    } else

    if ($magnitude == 4) {
        echo "Magnitude : Séisme capable de faire bouger des objets mais ne causantgénéralement pas de dégâts.";
    } else

    if ($magnitude == 5) {
        echo "Magnitude : Séisme capable d'engendrer des dégats importants sur de vieuxbâtiments ou bien des bâtiments présentants des défauts deconstruction. Peu de dégats sur des bâtiments modernes.";
    } else

    if ($magnitude == 6) {
        echo "Magnitude : Fort séisme capable d'engendrer des destructions majeures sur unelarge distance (180 km) autour de l'épicentre.";
    } else

    if ($magnitude == 7) {
        echo "Magnitude : Séisme capable de destructions majeures à modérées sur une trèslarge zone en fonction de la distance.";
    } else

    if ($magnitude == 8) {
        echo "Magnitude : Séisme capable de destructions majeures sur une très large zone deplusieurs centaines de kilomètres.";
    } else

    if ($magnitude == 9) {
        echo "Magnitude : Séisme capable de tout détruire sur une très vaste zone.";
    } else
        echo "Magnitude : Ce niveau de magnitude n'existe pas";



    // Ou via un switch
    switch ($magnitude) {
        case 1:
            $result = "Micro-séisme impossible à ressentir.";
            break;
        default;

        case 2:
            $result = "Micro-séisme impossible à ressentir mais enregistrable par les
sismomètres.";
            break;
        default;

        case 3:
            $result = "Ne cause pas de dégats mais commence à pouvoir être légèrement
ressenti.";
            break;
        default;

        case 4:
            $result = "Séisme capable de faire bouger des objets mais ne causant
généralement pas de dégâts.";
            break;
        default;

        case 5:
            $result = "Séisme capable d'engendrer des dégats importants sur de vieux
bâtiments ou bien des bâtiments présentants des défauts de
construction. Peu de dégats sur des bâtiments modernes.";
            break;
        default;

        case 6:
            $result = "Fort séisme capable d'engendrer des destructions majeures sur une
large distance (180 km) autour de l'épicentre.";
            break;
        default;

        case 7:
            $result = "Séisme capable de destructions majeures à modérées sur une très
large zone en fonction de la distance.";
            break;
        default;

        case 8:
            $result = "Séisme capable de destructions majeures sur une très large zone de
plusieurs centaines de kilomètres.";
            break;
        default;

        case 9:
            $result = "Séisme capable de tout détruire sur une très vaste zone.";
            break;
        default;
    }


    ?>

</body>

</html>