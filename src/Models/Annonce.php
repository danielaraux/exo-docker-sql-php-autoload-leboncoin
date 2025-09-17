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
}
