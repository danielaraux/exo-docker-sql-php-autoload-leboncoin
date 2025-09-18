<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

use App\Models\User;

// On utilise le dossier virtuel namespace "Models" qui pointe sur le PokemonModel
// use App\Models\PokemonModel;

class UserController
{
    // FONCTION PROFIL
    public function profil()
    {
        require_once __DIR__ . "/../Views/profil.php";
    }

    // FONCTION QUI S'EXECUTE SUR LA VUE DU FORMULAIRE
    public function register()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $errors = [];

            // Création de la regex
            $regName = "/^[a-zA-Z0-9àèé\-_]+$/";

            // VERIFICATION USERNAME
            if (isset($_POST['username'])) {

                // On va vérifier si c'est vide
                if (empty($_POST['username'])) {

                    // Si c'est vide, on le stocke dans notre tableau
                    $errors['username'] = "Nom d'utilisateur obligatoire";

                    // Sinon si ça ne respecte pas le regex, alors on stocke caractères non autorisés
                } else if (!preg_match($regName, $_POST['username'])) {
                    $errors['username'] = 'Caractères non autorisés';
                }
                if ((User::checkUsername($_POST['username']) == true)) {
                    $errors['username'] = "Le nom d'utilisateur renseigné est déja utilisé, veuillez réessayer.";
                }
            }

            // VERIFICATION DE L'EMAIL
            if (isset($_POST['email'])) {

                if (empty($_POST['email'])) {

                    $errors['email'] = 'Email obligatoire';

                    // Sinon si 
                } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                    // Si mail non valide, on crée une erreur
                    $errors['email'] = 'Email non valide';
                }
                if ((User::checkMail($_POST['email']) == true)) {
                    $errors['email'] = "L'adresse mail renseignée est déja utilisée, veuillez réessayer.";
                }
            }

            // VERIFICATION DU MOT DE PASSE
            if (isset($_POST['password'])) {

                if (strlen($_POST['password']) < 8) {
                    $errors['password'] = 'Le mot de passe doit contenir entre 8 et 64 caractères (Avec majuscule, minuscule + chiffre ou caractère spécial recommandé)';
                }
            }

            // VERIFICATION DU MOT DE PASSE CONFIRME
            if (isset($_POST['passwordConfirm'])) {

                if (empty($_POST['passwordConfirm'])) {

                    $errors['passwordConfirm'] = 'Veuillez confirmer le mot de passe';
                }

                if ($_POST['password'] !== $_POST['passwordConfirm']) {
                    $errors['passwordConfirm'] = "Les mots de passe ne correspondent pas.";
                }
                // if (empty($errors['password']) && empty($errors['passwordConfirm'])) {
                //     $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // }
            }

            // VERIFICATION DU CGU
            if (!isset($_POST['cgu'])) {
                // Si c'est vide, on stocke dans notre tableau le message d'erreur pour l'afficher en html ensuite
                $errors['cgu'] = 'Validation des CGU obligatoire';
            }



            // Si pas d'erreurs A LA VERIFICATION SERVEUR, alors on crée l'utilisateur et on redirige vers la page de bienvenue
            if (empty($errors)) {

                // On vérifie si le mail et si le username sont strictement égaux à false (pas donc utilisés).
                if ((User::checkUsername($_POST['username']) === false) && User::checkMail($_POST['email']) === false) {
                    $userModel = new User();
                    $addUser = $userModel->createUser($_POST['email'], $_POST['password'], $_POST['username']);

                    $_SESSION['username'] = $_POST['username'];

                    // On redirige vers la page de bienvenue
                    header("Location: index.php?url=welcome");

                    // header('Refresh: 3; url=index.php?url=welcome');
                }
            }
        }
        require_once __DIR__ . '/../Views/register.php'; // On appelle la vue Register
    }




    public function welcome()
    {
        require_once __DIR__ . "/../Views/welcome.php";
    }




    public function login()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $errors = [];


            // VERIFICATION DE L'EMAIL
            if (isset($_POST['email'])) {

                if (empty($_POST['email'])) {

                    $errors['email'] = 'Email obligatoire';
                }
            }

            // VERIFICATION DU MOT DE PASSE
            if (isset($_POST['password'])) {

                if (empty($_POST['password'])) {
                    $errors['password'] = 'Mot de passe obligatoire';
                }
            }

            if (empty($errors)) {

                if (User::checkMail($_POST["email"]) === true) {

                    $userInfos = new User();
                    $userInfos->getUserInfosByEmail($_POST["email"]);

                    if (password_verify($_POST["password"], $userInfos->password)) {

                        // Nous allons créer une variable de session "user" avec les infos du User
                        $_SESSION["user"]["id"] = $userInfos->id;
                        $_SESSION["user"]["email"] = $userInfos->email;
                        $_SESSION["user"]["username"] = $userInfos->username;
                        $_SESSION["user"]["inscription"] = $userInfos->inscription;


                        // Nous allons ensuite faire une redirection sur une page choisie
                        header("Location: index.php?url=profil");
                    } else {
                        $errors['email'] = 'Adresse mail ou mot de passe incorrect';
                    }
                } else {
                    $errors['email'] = 'Adresse mail ou mot de passe incorrect';
                }
            }
        }
        require_once __DIR__ . "/../Views/login.php";
    }


    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Refresh: 2; url=index.php');
        require_once __DIR__ . "/../Views/logout.php";
    }
}
