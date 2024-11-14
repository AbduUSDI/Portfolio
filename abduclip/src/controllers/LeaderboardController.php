<?php
namespace Controllers;

use Models\Leaderboard;

class LeaderboardController {
    private $leaderboardModel;

    public function __construct() {
        $this->leaderboardModel = new Leaderboard();
    }

    // Méthode pour obtenir le classement des utilisateurs pour un jeu spécifique
    public function getLeaderboardForGame($gameId, $limit = 10) {
        return $this->leaderboardModel->getLeaderboardForGame($gameId, $limit);
    }
}
