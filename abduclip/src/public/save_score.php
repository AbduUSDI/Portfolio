<?php
require '../../vendor/autoload.php';
use Models\Leaderboard;

// Récupération des données JSON
$input = json_decode(file_get_contents('php://input'), true);
$gameId = $input['gameId'] ?? null;
$playerName = $input['playerName'] ?? 'Anonyme';
$score = $input['score'] ?? null;

$response = ['success' => false];

if ($gameId && $score) {
    $leaderboardModel = new Leaderboard();

    // Enregistre le score dans la base de données
    $leaderboardModel->getMongoCollection('leaderboard')->insertOne([
        'game_id' => $gameId,
        'player_name' => $playerName,
        'score' => $score,
        'timestamp' => new \MongoDB\BSON\UTCDateTime(),
    ]);

    // Récupère le classement mis à jour
    $updatedLeaderboard = $leaderboardModel->getLeaderboardForGame($gameId);

    // Retourne le classement mis à jour au format JSON
    $response = [
        'success' => true,
        'leaderboard' => $updatedLeaderboard
    ];
}

// Envoie la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
