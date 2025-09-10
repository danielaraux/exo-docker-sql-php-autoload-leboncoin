<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

// On utilise le dossier virtuel namespace "Models" qui pointe sur le PokemonModel
// use App\Models\PokemonModel;

class UserController
{
    public function register()
    {


        require_once __DIR__ . '/../Views/register.php'; // On appelle la vue Register
    }
}
