<?php
namespace Database;

class DatabaseInstance {
    // Connexion à la base de données partagée
    protected $db;

    public function __construct() {
        $this->db = \Database\DatabaseConnection::getInstance()->getConnection();
    }
}