<?php
namespace Database;

use MongoDB\Client;

class MongoDBConnection {
    private static $instance = null;
    private $client;
    private $database;

    private function __construct() {
        $uri = 'mongodb://localhost:27017';
        $databaseName = 'abduclip_leaderboard';

        $this->client = new Client($uri);
        $this->database = $this->client->selectDatabase($databaseName);
    }

    // Méthode pour obtenir l'instance unique (Singleton)
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new MongoDBConnection();
        }
        return self::$instance;
    }

    // Méthode pour récupérer une collection
    public function getCollection($collectionName) {
        return $this->database->selectCollection($collectionName);
    }
}
