<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

use App\Models\Annonce;

// On utilise le dossier virtuel namespace "Models" qui pointe sur le PokemonModel
// use App\Models\PokemonModel;

class HomeController
{
    public function index()
    {

        $objAnnonce = new Annonce();
        $createAnnonce = $objAnnonce->findAll();

        require_once __DIR__ . '/../Views/home.php'; // On appelle la vue Home
    }
}
