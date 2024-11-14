<?php
namespace Models;

use Database\DatabaseConnection;
use Database\MongoDBConnection;

trait DatabaseTrait {
    protected $sqlConnection;
    protected $mongoConnection;

    public function __construct() {
        // Initialisation des connexions
        $this->sqlConnection = DatabaseConnection::getInstance();
        $this->mongoConnection = MongoDBConnection::getInstance();
    }

    // Méthode pour obtenir la connexion SQL
    protected function getSqlConnection() {
        return $this->sqlConnection->getConnection();
    }

    // Méthode pour obtenir une collection MongoDB
    protected function getMongoCollection($collectionName) {
        return $this->mongoConnection->getCollection($collectionName);
    }
}
