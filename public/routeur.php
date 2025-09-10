<?php

// On va chercher les namespace qui pointent sur les classes qu'on veut utiliser. (Plus besoin d'utiliser les require_once sur les case des switch).
use App\Controllers\HomeController;


$url = $_GET['url'] ?? 'home'; // on défini la variable qui va récupérer l'url de l'index sinon, pointer sur home
$arrayUrl = explode('/', $url); // je transforme l'url en tableau
$page = $arrayUrl[0] ?? 'home'; // je récupère l'index pour la page


$id = $arrayUrl[1] ?? null;



switch ($page) {
        case 'home':
                $objectController = new HomeController();
                $objectController->index();
                break;
        case 'register':
                $objectController = new UserController();
                $objectController->register();
                break;
        case 'login':
                $objectController = new UserController();
                $objectController->login();
                break;

        case 'profil':
                $objectController = new UserController();
                $objectController->profil();
                break;

        case 'logout':
                $objectController = new UserController();
                $objectController->logout();
                break;

        case 'annonces':
                $objectController = new AnnonceController();
                $objectController->index();
                break;

        case 'create':
                $objectController = new AnnonceController();
                $objectController->create();
                break;

        case 'details':
                $objectController = new AnnonceController();
                $objectController->show($id);
                break;

        default:
                require_once __DIR__ . '/src/views/page404.php';
                break;
}
