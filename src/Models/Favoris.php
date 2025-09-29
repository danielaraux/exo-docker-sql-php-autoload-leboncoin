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
            $sql = 'INSERT INTO `favoris` (`user_id`, `annonce_id`) VALUES (`:u_id`, `:a_id`)';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':u_id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':a_id', $annonceId, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {

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
            $sql = 'DELETE FROM `favoris` WHERE `user_id` = `:u_id` AND `annonce_id` = `:a_id`';

            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':u_id', $userId, PDO::PARAM_INT);
            $stmt->bindValue(':a_id', $annonceId, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {

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

            // Requête SQL pour joindre la colonne a_id de annonces à 
            $sql = 'SELECT a.*
            FROM annonces AS a
            INNER JOIN favoris AS f ON f.annonce_id = a.a_id
            WHERE f.user_id = :userId
            ORDER BY a.a_publication DESC';


            // On prépare la requête avant de l'exécuter
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }
}
