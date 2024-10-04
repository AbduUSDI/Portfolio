<?php

namespace Models;

use PDO;
use PDOException;
use Database\DatabaseInstance;

class UserHistory extends DatabaseInstance
{
    private $db;
    private $id;
    private $userId;
    private $gameId;
    private $lastPlayed;

    // Constructeur pour établir la connexion à la base de données
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

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

    public function getLastPlayed()
    {
        return $this->lastPlayed;
    }

    public function setLastPlayed($lastPlayed)
    {
        $this->lastPlayed = $lastPlayed;
    }

    // Actions CRUD

    // Ajouter un enregistrement dans l'historique des jeux joués
    public function create()
    {
        try {
            $sql = "INSERT INTO user_game_history (user_id, game_id, last_played) VALUES (:user_id, :game_id, :last_played)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':user_id', $this->userId);
            $stmt->bindParam(':game_id', $this->gameId);
            $stmt->bindParam(':last_played', $this->lastPlayed);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la création de l'historique : " . $e->getMessage();
            return false;
        }
    }

    // Lire l'historique d'un utilisateur spécifique
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM user_game_history WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $history = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($history) {
                $this->setId($history['id']);
                $this->setUserId($history['user_id']);
                $this->setGameId($history['game_id']);
                $this->setLastPlayed($history['last_played']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture de l'historique : " . $e->getMessage();
            return false;
        }
    }

    // Mettre à jour l'historique d'un utilisateur
    public function update()
    {
        try {
            $sql = "UPDATE user_game_history SET user_id = :user_id, game_id = :game_id, last_played = :last_played WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':user_id', $this->userId);
            $stmt->bindParam(':game_id', $this->gameId);
            $stmt->bindParam(':last_played', $this->lastPlayed);
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de l'historique : " . $e->getMessage();
            return false;
        }
    }

    // Supprimer un enregistrement d'historique
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM user_game_history WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de l'historique : " . $e->getMessage();
            return false;
        }
    }

    // Lire tout l'historique pour un utilisateur spécifique
    public function readAllForUser($userId, $limit = 10, $offset = 0)
    {
        try {
            $sql = "SELECT * FROM user_game_history WHERE user_id = :user_id LIMIT :limit OFFSET :offset";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture de l'historique pour l'utilisateur : " . $e->getMessage();
            return false;
        }
    }
}
