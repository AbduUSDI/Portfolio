<?php

namespace Controllers;

use Models\Leaderboard;
use PDO;

class LeaderboardController
{
    private $db;
    private $leaderboardModel;

    public function __construct()
    {
        $this->leaderboardModel = new Leaderboard();
    }

    // Ajouter un score pour un joueur
    public function addScore($userId, $gameId, $score)
    {
        $this->leaderboardModel->setUserId($userId);
        $this->leaderboardModel->setGameId($gameId);
        $this->leaderboardModel->setScore($score);

        if ($this->leaderboardModel->create()) {
            return "Score ajouté avec succès.";
        } else {
            return "Erreur lors de l'ajout du score.";
        }
    }

    // Récupérer le score d'un joueur pour un jeu
    public function getScore($userId, $gameId)
    {
        if ($this->leaderboardModel->read($userId, $gameId)) {
            return [
                'id' => $this->leaderboardModel->getId(),
                'user_id' => $this->leaderboardModel->getUserId(),
                'game_id' => $this->leaderboardModel->getGameId(),
                'score' => $this->leaderboardModel->getScore(),
                'created_at' => $this->leaderboardModel->getCreatedAt(),
            ];
        } else {
            return null;  // Si aucun score n'est trouvé
        }
    }

    // Mettre à jour le score d'un joueur
    public function updateScore($userId, $gameId, $score)
    {
        if ($this->leaderboardModel->read($userId, $gameId)) {
            $this->leaderboardModel->setScore($score);

            if ($this->leaderboardModel->update()) {
                return "Score mis à jour avec succès.";
            } else {
                return "Erreur lors de la mise à jour du score.";
            }
        } else {
            return "Score non trouvé.";
        }
    }

    // Supprimer un score
    public function deleteScore($userId, $gameId)
    {
        if ($this->leaderboardModel->delete($userId, $gameId)) {
            return "Score supprimé avec succès.";
        } else {
            return "Erreur lors de la suppression du score.";
        }
    }

    // Récupérer le classement des meilleurs scores pour un jeu
    public function getTopScores($gameId, $limit = 10)
    {
        return $this->leaderboardModel->getTopScores($gameId, $limit);
    }
}
