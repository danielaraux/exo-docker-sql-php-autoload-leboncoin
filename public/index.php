<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php'; // Bien mettre en premier l'auto-load pour qu'il puisse aller chercher le Dotenv

// On va utiliser l'autoload pour que les chemins en \ soient utilisables en / et donc lisibles par l'archi de dossiers Linux.
// On va utiliser le router pour piloter nos actions.


use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once __DIR__ . '/routeur.php'; // On utilise le routeur ensuite
