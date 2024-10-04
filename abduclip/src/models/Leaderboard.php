<?php

namespace Models;

use Database\DatabaseInstance;
use PDO;
use PDOException;

class Leaderboard extends DatabaseInstance
{
    private $id;
    private $userId;
    private $gameId;
    private $score;
    private $createdAt;

    // Getters et Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getGameId()
    {
        return $this->gameId;
    }

    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    // CRUD Actions

    // Créer un score pour un joueur
    public function create()
    {
        try {
            $sql = "INSERT INTO leaderboard (user_id, game_id, score) VALUES (:user_id, :game_id, :score)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $this->userId);
            $stmt->bindParam(':game_id', $this->gameId);
            $stmt->bindParam(':score', $this->score);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du score : " . $e->getMessage();
            return false;
        }
    }

    // Lire le score d'un joueur pour un jeu spécifique
    public function read($userId, $gameId)
    {
        try {
            $sql = "SELECT * FROM leaderboard WHERE user_id = :user_id AND game_id = :game_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':game_id', $gameId);
            $stmt->execute();

            $leaderboard = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($leaderboard) {
                $this->setId($leaderboard['id']);
                $this->setUserId($leaderboard['user_id']);
                $this->setGameId($leaderboard['game_id']);
                $this->setScore($leaderboard['score']);
                $this->setCreatedAt($leaderboard['created_at']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture du score : " . $e->getMessage();
            return false;
        }
    }

    // Mettre à jour le score d'un joueur
    public function update()
    {
        try {
            $sql = "UPDATE leaderboard SET score = :score, created_at = NOW() WHERE user_id = :user_id AND game_id = :game_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':score', $this->score);
            $stmt->bindParam(':user_id', $this->userId);
            $stmt->bindParam(':game_id', $this->gameId);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du score : " . $e->getMessage();
            return false;
        }
    }

    // Supprimer un score
    public function delete($userId, $gameId)
    {
        try {
            $sql = "DELETE FROM leaderboard WHERE user_id = :user_id AND game_id = :game_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':game_id', $gameId);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du score : " . $e->getMessage();
            return false;
        }
    }

    // Lire le classement pour un jeu (Top N joueurs)
    public function getTopScores($gameId, $limit = 10)
    {
        try {
            $sql = "SELECT users.username, leaderboard.score FROM leaderboard
                    JOIN users ON leaderboard.user_id = users.id
                    WHERE game_id = :game_id
                    ORDER BY score DESC LIMIT :limit";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':game_id', $gameId);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des meilleurs scores : " . $e->getMessage();
            return false;
        }
    }
}
