<?php

// Nom du dossier virtuel "namespace" pour les Models
namespace App\Models;

use App\Models\Database;

// On va utiliser PDO et PDOException
use PDO;
use PDOException;

class Annonce
{

    public int $id;
    public string $title;
    public string $description;
    public string $price;
    public string $picture;
    public string $userId;
    /**
     * Permet de créer un utilisateur dans la table users
     * @param string $title
     * @param string $description
     * @param string $price
     * @param string $picture
     * @param string $userId
     * @return bool true si l'insertion a réussi, false en cas d'erreur
     */
    public function createAnnonce(string $title, string $description, float $price, string $picture, int $userId): bool
    {
        try {
            $pdo = Database::createInstancePDO();

            if (!$pdo) {
                return false;
            }

            // requête SQL pour insérer un utilisateur dans la table users
            $sql = 'INSERT INTO `annonces` (`a_title`, `a_description`, `a_price`, `a_picture`, `u_id`) VALUES (:title, :description , :price, :picture, :id)';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            // On associe chaque paramètre nommé de la requête (:email, :password, :username)
            // avec la valeur correspondante en PHP, en précisant leur type (ici string).
            // Grâce aux requêtes préparées, cela empêche toute injection SQL.
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':price', $price, PDO::PARAM_STR);
            $stmt->bindValue(':picture', $picture, PDO::PARAM_STR);
            $stmt->bindValue(':id', $userId, PDO::PARAM_STR);

            // On exécute la requête préparée. La méthode renvoie true si tout s’est bien passé,
            // false sinon. 
            // NB : Avec PDO configuré en mode ERRMODE_EXCEPTION, une erreur déclenchera une exception.
            return $stmt->execute();
        } catch (PDOException $e) {
            // test unitaire pour connaitre la raison de l'echec
            // echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }

    public function findAll(): array
    {
        try {
            $pdo = Database::createInstancePDO();
            if (!$pdo) {
                // return false;
                return [];
            }
            // requête SQL pour récupérer toute la table annonces avec le u_username pour afficher les photos de la galerie
            $sql = 'SELECT `a_id`, `a_title`, `a_description`, `a_price`, `a_picture`, `a_publication`, `u_id`, `u_username` FROM `annonces` NATURAL JOIN `users`';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // test unitaire pour connaitre la raison de l'echec
            // echo 'Erreur : ' . $e->getMessage();
            // return false;
            return [];
        }
    }

    public function findById(int $id): ?array
    {
        try {
            $pdo = Database::createInstancePDO();
            if (!$pdo) {
                return null;
            }
            // Je récupère toutes les colonnes de ma table annonces, j'ajoute users pour avoir "u_username" en gardant le pointage sur a_id.
            $sql = 'SELECT `a_id`, `a_title`, `a_description`, `a_price`, `a_picture`, `a_publication`, `u_id`, `u_username` FROM `annonces` NATURAL JOIN `users` WHERE a_id = :id';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $annonce = $stmt->fetch(PDO::FETCH_ASSOC);
            return $annonce;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function findByUser(int $userId): ?array
    {
        try {
            $pdo = Database::createInstancePDO();
            if (!$pdo) {
                return null;
            }
            // Je récupère toutes les colonnes de ma table annonces, j'ajoute users pour avoir "u_username" en gardant le pointage sur u_id.
            //SELECT pour afficher tout ce que je veux voir comme détails en fonction de l'u_id
            $sql = 'SELECT `a_id`, `a_title`, `a_description`, `a_price`, `a_picture`, `a_publication`, `u_id`, `u_username` FROM `annonces` NATURAL JOIN `users` WHERE u_id = :userId';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
            $stmt->execute();

            // fetchAll pour faire un foreach du tableau
            $annonceUser = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $annonceUser;
        } catch (PDOException $e) {
            return null;
        }
    }

    // La fonction delete vérifie l'id de l'annonce et celle du user (deux paramètres)
    public function deletebyId(int $id, int $userId): bool|null
    {
        try {
            $pdo = Database::createInstancePDO();
            if (!$pdo) {
                return null;
            }
            // Je supprime toutes les colonnes de ma table annonces, pour le cas ou on pointe sur le annonce id et sur l'user id
            $sql = 'DELETE FROM `annonces` WHERE a_id = :id AND u_id = :userId';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
            $stmt->execute();

            // on retourne true si l'execute a bien fonctionné
            return true;
        } catch (PDOException $e) {
            return null;
        }
    }
}
