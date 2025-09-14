<?php


// Nom du dossier virtuel "namespace" pour les Controllers
namespace App\Controllers;

// On utilise le dossier virtuel namespace "Models" qui pointe sur le PokemonModel
// use App\Models\PokemonModel;

class UserController
{

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

            // VERIFICATION DES ERREURS
            // Si pas d'erreurs, alors redirige vers confirmation.php
            if (empty($errors)) {
                header("Location: index.php?url=profil");
            }
        }


        require_once __DIR__ . '/../Views/register.php'; // On appelle la vue Register
    }
}
