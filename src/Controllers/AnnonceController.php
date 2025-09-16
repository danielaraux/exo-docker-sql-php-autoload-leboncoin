<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

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
                var_dump($_SESSION['user']);
            }

            //     if (empty($errors)) {

            //         if (User::checkMail($_POST["email"])) {

            //             $userInfos = new User();
            //             $userInfos->getUserInfosByEmail($_POST["email"]);

            //             if (password_verify($_POST["password"], $userInfos->password)) {

            //                 // Nous allons créer une variable de session "user" avec les infos du User
            //                 $_SESSION["user"]["id"] = $userInfos->id;
            //                 $_SESSION["user"]["email"] = $userInfos->email;
            //                 $_SESSION["user"]["username"] = $userInfos->username;
            //                 $_SESSION["user"]["inscription"] = $userInfos->inscription;


            //                 // Nous allons ensuite faire une redirection sur une page choisie
            //                 header("Location: index.php?url=profil");
            //             } else {
            //                 $errors['connexion'] = 'Mail ou Mot de passe incorrect';
            //             }
            //         } else {
            //             $errors['connexion'] = 'Mail ou Mot de passe incorrect';
            //         }
            //     }
            // }



        }
        require_once __DIR__ . '/../Views/create.php'; // On appelle la vue Home
    }
}
