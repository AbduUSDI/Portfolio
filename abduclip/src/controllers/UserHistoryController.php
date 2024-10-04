<?php

namespace Controllers;

use Models\UserHistory;
use PDO;

class UserHistoryController
{
    private $db;
    private $userHistoryModel;

    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->userHistoryModel = new UserHistory($db);
    }

    // Ajouter un enregistrement dans l'historique
    public function addHistory($userId, $gameId)
    {
        $this->userHistoryModel->setUserId($userId);
        $this->userHistoryModel->setGameId($gameId);
        $this->userHistoryModel->setLastPlayed(date('Y-m-d H:i:s'));

        if ($this->userHistoryModel->create()) {
            return "Historique ajouté avec succès.";
        } else {
            return "Erreur lors de l'ajout de l'historique.";
        }
    }

    // Récupérer l'historique pour un utilisateur
    public function getUserHistory($userId, $limit = 10, $offset = 0)
    {
        return $this->userHistoryModel->readAllForUser($userId, $limit, $offset);
    }

    // Supprimer un historique
    public function deleteHistory($id)
    {
        if ($this->userHistoryModel->delete($id)) {
            return "Historique supprimé avec succès.";
        } else {
            return "Erreur lors de la suppression de l'historique.";
        }
    }
}
