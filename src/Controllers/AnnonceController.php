<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

use App\Models\Annonce;
use Soap\Url;

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



                // Création de l'Annonce
                $objAnnonce = new Annonce();
                $addAnnonce = $objAnnonce->createAnnonce($title, $description, $price, $picture, $id);

                var_dump($_FILES['picture']['tmp_name']);

                $defaultPicture = 'nophoto.jpg';

                // // Récupérer l'image jointe et la stocker dans uploads
                if (!empty($_FILES['picture'])) {
                    $uploads_dir = __DIR__ . '/../../public/uploads/'; // Chemin du dossier
                    $tmp_name = $_FILES['picture']['tmp_name'];  // Chemin temporaire
                    $name = basename($_FILES['picture']['name']); // Nom du fichier
                    move_uploaded_file($tmp_name, $uploads_dir . $name);
                }





                // Mettre la photo par défaut si picture est vide
                if (empty($_FILES['picture'])) {
                    $name = $defaultPicture;
                }






                // header("Location: index.php?url=annonces");
            }
        }
        require_once __DIR__ . '/../Views/create.php'; // On appelle la vue Home
    }

    public function index()
    {
        require_once __DIR__ . '/../Views/annonces.php';
    }
}
