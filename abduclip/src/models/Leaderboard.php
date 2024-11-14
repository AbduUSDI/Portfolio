<?php
namespace Models;

class Leaderboard {
    use DatabaseTrait;

    // Méthode pour récupérer le classement des joueurs pour un jeu spécifique
    public function getLeaderboardForGame($gameId, $limit = 10) {
        // Collection MongoDB pour les scores
        $collection = $this->getMongoCollection('leaderboard');

        // Récupère les scores pour le jeu spécifié, triés du plus haut au plus bas
        $leaderboard = $collection->find(
            ['game_id' => $gameId],
            [
                'sort' => ['score' => -1],
                'limit' => $limit
            ]
        )->toArray();

        return $leaderboard;
    }
}
