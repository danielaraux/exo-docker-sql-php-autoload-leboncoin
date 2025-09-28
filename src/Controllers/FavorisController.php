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

        require_once __DIR__ . '/../Views/Favoris.php';
    }



    // ajout du favoris et redirection
    public function add(int $annonceId): void
    {



        require_once __DIR__ . '/../Views/home.php';
    }




    // suppression du favoris
    public function remove(int $annonceId): void {}
}
