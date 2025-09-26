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

            if (empty($errors)) {

                $username = $_SESSION['user']['username'];
                $uploads_dir = __DIR__ . '/../../public/uploads/';
                $user_dir = $uploads_dir . $username . '/';
                $picture = "nophoto.jpg";

                if ($_FILES['picture']['error'] === 0) {

                    // Création du dossier utilisateur si il n'existe pas
                    if (!is_dir($user_dir)) {
                        mkdir($user_dir, 0755, true);
                    }

                    $tmp_name = $_FILES['picture']['tmp_name'];
                    $mime = mime_content_type($tmp_name);
                    $allowed = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
                    $maxSize = 8 * 1024 * 1024;
                    $size = $_FILES['picture']['size'];

                    if (!in_array($mime, $allowed)) {
                        $errors['picture'] = "Type de fichier non autorisé";
                    } elseif ($size > $maxSize) {
                        $errors['picture'] = "Fichier trop lourd";
                    } else {

                        // uniqid
                        $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
                        // Génération du nom ex. dg6fd4g6dsfg65dsfgds pour la photo
                        $newName = uniqid('', true) . '.' . $extension;

                        $picture = $newName;

                        // on prend le nom de l'image récupérée pour la déplacer dans /uploads/Test/ ça fonctionne.
                        if (isset($picture)) {
                            move_uploaded_file($tmp_name, $user_dir . $newName);
                        } else {
                            $errors['picture'] = "Erreur lors de l'upload du fichier";
                        }
                    }
                }
            }

            // Si pas d'erreur, on crée l'annonce
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

        // $annonce[a_picture] qui affiche ma photo

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

    // FONCTION DELETE
    // $id sera ce qui s'ajoute après delete/ qui est le numéro id de l'annonce et on ajoutera / et l'userId
    public function delete($id, $userId)
    {
        // On récupère l'annonce avec l'id via la méthode findById
        $objdeleteAnnonce = new Annonce();
        $annonceInfo = $objdeleteAnnonce->findById($id);

        // Si l'utilisateur n'est pas le bon, retour à la page 404
        if ($annonceInfo['u_id'] !== $_SESSION['user']['id']) {
            header("Location: index.php?url=page404.php");
        } else {

            if ($annonceInfo == false) {
                header("Location: index.php?url=home");
            } else {

                // On récupère le nom de la photo pour la supprimer ensuite localement
                $pictureName = $annonceInfo['a_picture'];

                // On supprime l'annonce via la methode deletebyId
                $deleteAnnonce = $objdeleteAnnonce->deletebyId((int) $id, (int) $userId);

                // var_dump($deleteAnnonce);
                if ($deleteAnnonce == true) {
                    if ($pictureName !== "nophoto.jpg") {
                        unlink("uploads/" . $_SESSION['user']['username'] . "/" . $pictureName);
                        header("Location: index.php?url=profil");
                        //
                    } else {
                        header("Location: index.php?url=profil");
                    }
                } else {
                    header("Location: index.php?url=profil");
                }
            }
        }
    }

    // FONCTION UPDATE
    public function edit(int $id, int $userId)
    {
        // Je récupère les données de l'annonce auprès du Modèle pour les afficher dans la vue
        $objgetannonceInfo = new Annonce();
        $annonceInfo = $objgetannonceInfo->findById($id);

        if ($annonceInfo['u_id'] !== $_SESSION['user']['id']) {
            header("Location: index.php?url=page404.php");
        } else {

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

                $username = $_SESSION['user']['username'];
                $uploads_dir = __DIR__ . '/../../public/uploads/';
                $user_dir = $uploads_dir . $username . '/';

                // On récupère le nom de la photo pour la supprimer ensuite localement
                $oldPicture = $annonceInfo['a_picture'];

                // Si le remplacement de photo fonctionne
                if ($_FILES['picture']['error'] === 0) {
                    $tmp_name = $_FILES['picture']['tmp_name'];
                    $mime = mime_content_type($tmp_name);
                    $allowed = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
                    $maxSize = 8 * 1024 * 1024;
                    $size = $_FILES['picture']['size'];

                    if (!in_array($mime, $allowed)) {
                        $errors['picture'] = "Type de fichier non autorisé, réessayez.";
                    } elseif ($size > $maxSize) {
                        $errors['picture'] = "Fichier trop lourd, réessayez.";
                    } else {
                        $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
                        $newName = uniqid('', true) . '.' . $extension;
                        $picture = $newName;

                        // 🔑 Vérifie que le dossier existe
                        if (!is_dir($user_dir)) {
                            mkdir($user_dir, 0755, true);
                        }

                        // Supprime l’ancienne photo si besoin
                        $oldFilePath = $user_dir . $oldPicture;
                        if ($oldPicture !== "nophoto.jpg" && file_exists($oldFilePath)) {
                            unlink($oldFilePath);
                        }

                        // Déplace la nouvelle
                        if (!move_uploaded_file($tmp_name, $user_dir . $newName)) {
                            $errors['picture'] = "Erreur lors de l'upload du fichier";
                        }
                    }
                }

                if (empty($errors)) {

                    $title = $_POST['title'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];

                    if (empty($_FILES['picture']['name'])) {
                        $picture = $oldPicture;
                    }

                    $objgetEditAnnonce = new Annonce();
                    $objeditAnnonce = $objgetEditAnnonce->editAnnonce($id, $title, $description, $price, $picture, $userId);

                    // Redirection vers la page détail de l'annonce
                    header("Location: index.php?url=details/" . $annonceInfo['a_id']);
                }
            }

            require_once __DIR__ . '/../Views/edit.php';
        }
    }
}
