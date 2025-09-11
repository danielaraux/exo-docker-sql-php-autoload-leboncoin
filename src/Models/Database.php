<?php

namespace App\Models;

use PDO;
use PDOException;

class Database
{

    public static function createInstancePDO()
    {

        $servername = "db"; // elle s'appelle db dans notre docker compose
        $username = "root";
        $password = "root";
        $dbname = "leboncoin";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            $sql = "INSERT INTO users (u_email, u_password, u_username, u_inscription)
    VALUES ('homer.simpson@lol.com', 'Donut123', 'Dooh', '25-09-09')";
            echo 'User created successfully';
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // REQUETES SQL a faire pour afficher les annonces sur la page HOME
    // Exemple : SELECT *  ect voir sur le net sinon
}
