<?php
namespace Database;

use PDO;

class DatabaseConnection {
    // Singleton pour la connexion à la base de données
    private static $instance = null;
    private $connection;

    private function __construct() {
        // Connexion à la base de données
        $host = 'localhost';
        $db = 'mini_jeux';
        $user = 'Abdurahman';
        $pass = 'Abdufufu2525+';
        $this->connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}