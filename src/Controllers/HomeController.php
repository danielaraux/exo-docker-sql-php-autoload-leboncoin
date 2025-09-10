<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

// On utilise le dossier virtuel namespace "Models" qui pointe sur le PokemonModel
// use App\Models\PokemonModel;

class HomeController
{
    public function index()
    {


        require_once __DIR__ . '/../Views/home.php'; // On appelle la vue Home
    }
}
