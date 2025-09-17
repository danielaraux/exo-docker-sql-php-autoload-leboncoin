<?php

// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

use App\Models\Annonce;
use Soap\Url;

class AnnonceController
{
    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $errors = [];

            //// VERIFICATION DU FORMULAIRE ////


            // VERIFICATION DE L'EMAIL
            if (isset($_POST['title'])) {
                if (empty($_POST['title'])) {
                    $errors['title'] = 'Titre obligatoire';
                }
            }
            // VERIFICATION DE LA DESCRIPTION
            if (isset($_POST['description'])) {
                if (empty($_POST['description'])) {
                    $errors['description'] = 'Description obligatoire';
                }
            }
            // VERIFICATION DU PRIX
            if (isset($_POST['price'])) {
                if (empty($_POST['price'])) {
                    $errors['price'] = 'Prix obligatoire';
                }
            }
            // VERIFICATION DE L'IMAGE
            // // Récupérer l'image jointe et la stocker dans uploads
            if (!empty($_FILES['picture']['tmp-name'])) {
                $uploads_dir = __DIR__ . '/../../public/uploads/'; // Chemin du dossier
                $tmp_name = $_FILES['picture']['tmp_name'];  // Chemin temporaire
                $name = basename($_FILES['picture']['name']); // Nom du fichier
                $mime = mime_content_type($tmp_name);

                // Formats acceptés
                $allowed = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];

                //max 2Mo de taille de photo
                $maxSize = 2 * 1024 * 1024;
                $size = $_FILES['picture']['size'];

                if (!in_array($mime, $allowed) && $size > $maxSize) {
                    $errors['picture'] = "Type de fichier non autorisé et fichier trop lourd";
                } elseif (!in_array($mime, $allowed)) {
                    $errors['picture'] = "Type de fichier non autorisé";
                } elseif ($size > $maxSize) {
                    $errors['picture'] = "Fichier trop lourd";
                } elseif (empty($errors)) {
                    move_uploaded_file($tmp_name, $uploads_dir . $name);
                }
            }

            // MISE EN PLACE DES VARIABES ET CREATION DE L'ANNONCE.
            if (empty($errors)) {
                // On défini les variables en fonction du formulaire
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $id = $_SESSION['user']['id']; // On récupère l'ID
                $picture = $_FILES['picture']['name']; // On récupère la photo



                // Création de l'Annonce
                $objAnnonce = new Annonce();
                $addAnnonce = $objAnnonce->createAnnonce($title, $description, $price, $picture, $id);

                header("Location: index.php?url=annonces");
            }
        }
        require_once __DIR__ . '/../Views/create.php'; // On appelle la vue Home
    }
    public function index()
    {


        $objAnnonce = new Annonce;
        $createAnnonce = $objAnnonce->findAll();

        require_once __DIR__ . '/../Views/annonces.php';
    }
}
