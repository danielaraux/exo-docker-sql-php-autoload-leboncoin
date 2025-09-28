<?php

namespace App\Models;

use App\Models\Database;

// On va utiliser PDO et PDOException
use PDO;
use PDOException;

class Favoris
{
    public function addFavoris(int $userId, int $annonceId): bool
    {
        try {
            $pdo = Database::createInstancePDO();

            if (!$pdo) {
                return false;
            }

            // requête SQL pour insérer le u_id et le a_id dans la table favoris
            $sql = 'INSERT INTO `favoris` (`user_id`, `annonce_id`) VALUES (:u_id, :a_id)';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            // On associe chaque paramètre nommé de la requête
            // avec la valeur correspondante en PHP, en précisant leur type
            // Grâce aux requêtes préparées, cela empêche toute injection SQL.
            $stmt->bindValue(':u_id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':a_id', $annonceId, PDO::PARAM_INT);

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



    public function removeFavoris(int $userId, int $annonceId): bool
    {
        try {
            $pdo = Database::createInstancePDO();

            if (!$pdo) {
                return false;
            }

            // requête SQL pour supprimer le u_id et le a_id dans la table favoris (donc supprimer le favoris)
            $sql = 'DELETE FROM `favoris` WHERE `user_id` = `u_id` AND `annonce_id` = `a_id`';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            // On associe chaque paramètre nommé de la requête
            // avec la valeur correspondante en PHP, en précisant leur type
            // Grâce aux requêtes préparées, cela empêche toute injection SQL.
            $stmt->bindValue(':u_id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':a_id', $annonceId, PDO::PARAM_INT);

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


    public function findByUser(int $userId): array
    {
        try {
            $pdo = Database::createInstancePDO();

            if (!$pdo) {
                return [];
            }

            // requête SQL pour joindre la colonne a_id de annonces à 
            $sql = 'SELECT `*` FROM `annonces` INNER JOIN `favoris` ON `annonces_id` = `a_id` WHERE `user_id` = `u_id` ORDER BY `a_publication` DESC';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            // On associe chaque paramètre nommé de la requête
            // avec la valeur correspondante en PHP, en précisant leur type
            // Grâce aux requêtes préparées, cela empêche toute injection SQL.
            $stmt->bindValue(':u_id', $userId, PDO::PARAM_INT);

            // On exécute la requête préparée. La méthode renvoie true si tout s’est bien passé,
            // false sinon. 
            // NB : Avec PDO configuré en mode ERRMODE_EXCEPTION, une erreur déclenchera une exception.
            return $stmt->execute();
        } catch (PDOException $e) {
            // test unitaire pour connaitre la raison de l'echec
            // echo 'Erreur : ' . $e->getMessage();
            return [];
        }
    }
}
