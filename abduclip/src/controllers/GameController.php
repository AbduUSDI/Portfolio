<?php

namespace Controllers;

use Models\Game;

class GameController
{
    private $gameModel;

    public function __construct()
    {
        $this->gameModel = new Game();
    }

    // Ajouter un jeu
    public function createGame($title, $description, $urlCdn, $filePath)
    {
        $this->gameModel->setTitle($title);
        $this->gameModel->setDescription($description);
        $this->gameModel->setUrlCdn($urlCdn);
        $this->gameModel->setFilePath($filePath);

        if ($this->gameModel->create()) {
            return "Jeu créé avec succès.";
        } else {
            return "Erreur lors de la création du jeu.";
        }
    }

    // Lire un jeu par ID
    public function getGame($id)
    {
        if ($this->gameModel->read($id)) {
            return [
                'id' => $this->gameModel->getId(),
                'title' => $this->gameModel->getTitle(),
                'description' => $this->gameModel->getDescription(),
                'url_cdn' => $this->gameModel->getUrlCdn(),
                'file_path' => $this->gameModel->getFilePath(),
                'created_at' => $this->gameModel->getCreatedAt(),
                'updated_at' => $this->gameModel->getUpdatedAt(),
            ];
        } else {
            return null;  // Si aucun jeu n'est trouvé
        }
    }

    // Mettre à jour un jeu
    public function updateGame($id, $title, $description, $urlCdn, $filePath)
    {
        if ($this->gameModel->read($id)) {
            $this->gameModel->setTitle($title);
            $this->gameModel->setDescription($description);
            $this->gameModel->setUrlCdn($urlCdn);
            $this->gameModel->setFilePath($filePath);

            if ($this->gameModel->update()) {
                return "Jeu mis à jour avec succès.";
            } else {
                return "Erreur lors de la mise à jour du jeu.";
            }
        } else {
            return "Jeu non trouvé.";
        }
    }

    // Supprimer un jeu
    public function deleteGame($id)
    {
        if ($this->gameModel->delete($id)) {
            return "Jeu supprimé avec succès.";
        } else {
            return "Erreur lors de la suppression du jeu.";
        }
    }

    // Lire tous les jeux avec pagination
    public function listGames($limit = 10, $offset = 0)
    {
        return $this->gameModel->readAll($limit, $offset);
    }
}
