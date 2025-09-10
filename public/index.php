<?php

session_start();

// On va utiliser l'autoload pour que les chemins en \ soient utilisables en / et donc lisibles par l'archi de dossiers Linux.
// On va utiliser le router pour piloter nos actions.
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/routeur.php';
