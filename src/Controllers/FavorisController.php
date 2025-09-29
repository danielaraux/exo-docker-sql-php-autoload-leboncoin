<?php

namespace App\Controllers;

use App\Models\Favoris;

class FavorisController
{
    public function index()
    {
        $userId = $_SESSION['user']['id'];
        $objgetFavoris = new Favoris();
        $getFavoris = $objgetFavoris->findByUser($userId);

        require_once __DIR__ . '/../Views/favoris.php';
    }



    // ajout du favoris et redirection
    public function add(int $annonceId): void
    {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?url=home");
        }

        $objaddFavoris = new Favoris();
        $addFavoris = $objaddFavoris;

        header("Location: index.php?url=home");
    }




    // suppression du favoris
    public function remove(int $annonceId): void
    {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?url=home");
        }

        $objremoveFavoris = new Favoris();
        $removeFavoris = $objremoveFavoris;


        header("Location: index.php?url=home");
    }
}
