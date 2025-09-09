<?php

session_start();

// On va utiliser l'autoload pour que les chemins en \ soient utilisables en / et donc lisibles par l'archi de dossiers Linux.
// On va utiliser le router pour piloter nos actions.
require_once 'vendor/autoload.php';
require_once 'router.php';


// Test de l'affichage
// require_once 'src/src/Views/home.php';
