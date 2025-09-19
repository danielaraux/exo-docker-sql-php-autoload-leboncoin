<?php

namespace App\Controllers;

use App\Models\Annonce;

class AnnonceController
{
    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $errors = [];

            //// VERIFICATION DU FORMULAIRE ////
            if (empty($_POST['title'])) {
                $errors['title'] = 'Titre obligatoire';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Description obligatoire';
            }
            if (empty($_POST['price'])) {
                $errors['price'] = 'Prix obligatoire';
            }

            // Valeur par défaut pour l'image
            $picture = "uploads/nophoto.jpg";

            // Vérification de l'image uploadée
            if (!empty($_FILES['picture']['tmp_name'])) {

                $username = $_SESSION['user']['username'];
                $uploads_dir = __DIR__ . '/../../public/uploads/';
                $user_dir = $uploads_dir . $username . '/';

                // Création du dossier utilisateur si nécessaire
                if (!is_dir($user_dir)) {
                    mkdir($user_dir, 0755, true);
                }

                $tmp_name = $_FILES['picture']['tmp_name'];
                $mime = mime_content_type($tmp_name);
                $allowed = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
                $maxSize = 2 * 1024 * 1024;
                $size = $_FILES['picture']['size'];

                if (!in_array($mime, $allowed)) {
                    $errors['picture'] = "Type de fichier non autorisé";
                } elseif ($size > $maxSize) {
                    $errors['picture'] = "Fichier trop lourd";
                } else {
                    // Génération d’un nom unique
                    $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
                    $newName = uniqid('', true) . '.' . $extension;

                    if (move_uploaded_file($tmp_name, $user_dir . $newName)) {
                        $picture = "uploads/$username/$newName"; // remplacer la valeur par défaut
                    } else {
                        $errors['picture'] = "Erreur lors de l'upload du fichier";
                    }
                }
            }

            // Si aucune erreur, création de l'annonce
            if (empty($errors)) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $userId = $_SESSION['user']['id'];

                $objAnnonce = new Annonce();
                $objAnnonce->createAnnonce($title, $description, $price, $picture, $userId);

                header("Location: index.php?url=annonces");
                exit;
            }
        }

        // Affichage du formulaire
        require_once __DIR__ . '/../Views/create.php';
    }

    public function index()
    {
        $objAnnonce = new Annonce();
        $createAnnonce = $objAnnonce->findAll();

        require_once __DIR__ . '/../Views/annonces.php';
    }

    public function show($id)
    {
        $objAnnonce = new Annonce();
        $annonce = $objAnnonce->findById((int)$id);

        if (!$annonce) {
            require_once __DIR__ . '/../Views/page404.php';
            return;
        }

        require_once __DIR__ . '/../Views/details.php';
    }
}
