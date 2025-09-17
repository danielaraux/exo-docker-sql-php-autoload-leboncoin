<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

use App\Models\Annonce;

// On utilise le dossier virtuel namespace "Models" qui pointe sur le PokemonModel
// use App\Models\PokemonModel;

class AnnonceController
{
    public function create()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $errors = [];


            // VERIFICATION DE L'EMAIL
            if (isset($_POST['title'])) {

                if (empty($_POST['title'])) {

                    $errors['title'] = 'Titre obligatoire';
                }
            }

            if (isset($_POST['description'])) {

                if (empty($_POST['description'])) {

                    $errors['description'] = 'Description obligatoire';
                }
            }

            if (isset($_POST['price'])) {

                if (empty($_POST['price'])) {

                    $errors['price'] = 'Prix obligatoire';
                }
            }

            if (empty($errors)) {
                // var_dump($_POST);

                // On défini les variables en fonction du formulaire
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $id = $_SESSION['user']['id']; // On récupère l'ID
                $picture = $_FILES['picture']['name']; // On récupère la photo

                // var_dump($id);
                // var_dump($_FILES['picture']['name']);


                // Création de l'Annonce
                $objAnnonce = new Annonce();
                $addAnnonce = $objAnnonce->createAnnonce($title, $description, $price, $picture, $id);
            }
        }
        require_once __DIR__ . '/../Views/create.php'; // On appelle la vue Home
    }
}
