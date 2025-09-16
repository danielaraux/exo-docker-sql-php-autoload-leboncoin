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
    public string $publication;
    public string $u_id;
    /**
     * Permet de créer un utilisateur dans la table users
     * @param string $title
     * @param string $description
     * @param string $price
     * @param string $picture
     * @param string $publication
     * @param string $u_id
     * @return bool true si l'insertion a réussi, false en cas d'erreur
     */
    public function createAnnonce(string $title, string $description, string $price, string $picture, string $publication, string $u_id): bool
    {
        try {
            // Creation d'une instance de connexion à la base de données
            $pdo = Database::createInstancePDO();

            // test si la connexion est ok
            if (!$pdo) {
                // pas de connexion, on return false
                return false;
            }

            // requête SQL pour insérer un utilisateur dans la table users
            $sql = 'INSERT INTO `annonces` (`a_title`, `a_description`, `a_price`, `a_picture`, `a_publication`, `u_id`) VALUES (:a_title, :a_description , :a_price, :a_picture, :a_publication, :u_id)';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            // On associe chaque paramètre nommé de la requête (:email, :password, :username)
            // avec la valeur correspondante en PHP, en précisant leur type (ici string).
            // Grâce aux requêtes préparées, cela empêche toute injection SQL.
            $stmt->bindValue(':a_title', $a_title, PDO::PARAM_STR);
            $stmt->bindValue(':a_description', $a_description, PDO::PARAM_STR);
            $stmt->bindValue(':a_price', $a_price, PDO::PARAM_STR);
            $stmt->bindValue(':a_picture', $a_picture, PDO::PARAM_STR);
            $stmt->bindValue(':a_publication', $a_publication, PDO::PARAM_STR);
            $stmt->bindValue(':u_id', $u_id, PDO::PARAM_STR);

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
