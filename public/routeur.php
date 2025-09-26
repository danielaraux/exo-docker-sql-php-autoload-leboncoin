<?php

// On va chercher les namespace qui pointent sur les classes qu'on veut utiliser. (Plus besoin d'utiliser les require_once sur les case des switch).
use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Controllers\AnnonceController;


$url = $_GET['url'] ?? 'home'; // on défini la variable qui va récupérer l'url de l'index sinon, pointer sur home
$arrayUrl = explode('/', $url); // je transforme l'url en tableau
$page = $arrayUrl[0] ?? 'home'; // je récupère l'index pour la page


$id = $arrayUrl[1] ?? null;

// var_dump($_SESSION);
// vérifier le $_session sur le routeur en edit

// var_dump($_FILES);
// var_dump($_POST);


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

        case 'welcome':
                $objectController = new UserController();
                $objectController->welcome();
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


        // à faire
        case 'edit':
                $objectController = new AnnonceController();
                $objectController->edit($id, $_SESSION['user']['id']);
                break;

        case 'delete':
                $objectController = new AnnonceController();
                $objectController->delete($id, $_SESSION['user']['id']); // Ma fonction prend deux arguments, l'annonce id et l'user id qu'on défini en haut
                break;

        default:
                require_once __DIR__ . "/../src/Views/page404.php";
                break;
}
