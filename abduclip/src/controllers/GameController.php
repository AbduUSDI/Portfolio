<?php
namespace Controllers;

use Models\Game;

class GameController {
    private $gameModel;

    public function __construct() {
        $this->gameModel = new Game();
    }

    // Créer un nouveau jeu
    public function createGame($categoryId, $title, $description = null, $urlCdn = null, $filePath = null) {
        if (!$urlCdn && !$filePath) {
            throw new \Exception("Le jeu doit avoir soit une URL CDN soit un chemin de fichier.");
        }

        return $this->gameModel->createGame($categoryId, $title, $description, $urlCdn, $filePath);
    }

    // Lire un jeu par ID
    public function readGame($id) {
        return $this->gameModel->readGame($id);
    }

    // Mettre à jour un jeu
    public function updateGame($id, $categoryId, $title, $description = null, $urlCdn = null, $filePath = null) {
        if (!$urlCdn && !$filePath) {
            throw new \Exception("Le jeu doit avoir soit une URL CDN soit un chemin de fichier.");
        }

        $this->gameModel->updateGame($id, $categoryId, $title, $description, $urlCdn, $filePath);
    }

    // Supprimer un jeu
    public function deleteGame($id) {
        $this->gameModel->deleteGame($id);
    }

    // Lire tous les jeux d'une catégorie
    public function getGamesByCategory($categoryId) {
        return $this->gameModel->getGamesByCategory($categoryId);
    }

    // Lire tous les jeux
    public function getAllGames() {
        return $this->gameModel->getAllGames();
    }
}
