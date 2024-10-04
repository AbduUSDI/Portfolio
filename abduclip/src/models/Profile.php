<?php

namespace Models;

use Database\DatabaseInstance;
use PDO;
use PDOException;

class Profile extends DatabaseInstance
{
    private $id;
    private $userId;
    private $bio;
    private $avatar;
    private $createdAt;
    private $updatedAt;

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

    public function getBio()
    {
        return $this->bio;
    }

    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    // CRUD Actions

    // Créer un profil
    public function create()
    {
        try {
            $sql = "INSERT INTO profiles (user_id, bio, avatar) VALUES (:user_id, :bio, :avatar)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $this->userId);
            $stmt->bindParam(':bio', $this->bio);
            $stmt->bindParam(':avatar', $this->avatar);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la création du profil : " . $e->getMessage();
            return false;
        }
    }

    // Lire un profil par ID utilisateur
    public function read($userId)
    {
        try {
            $sql = "SELECT * FROM profiles WHERE user_id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->execute();

            $profile = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($profile) {
                $this->setId($profile['id']);
                $this->setUserId($profile['user_id']);
                $this->setBio($profile['bio']);
                $this->setAvatar($profile['avatar']);
                $this->setCreatedAt($profile['created_at']);
                $this->setUpdatedAt($profile['updated_at']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture du profil : " . $e->getMessage();
            return false;
        }
    }

    // Mettre à jour un profil
    public function update()
    {
        try {
            $sql = "UPDATE profiles SET bio = :bio, avatar = :avatar, updated_at = NOW() WHERE user_id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':bio', $this->bio);
            $stmt->bindParam(':avatar', $this->avatar);
            $stmt->bindParam(':user_id', $this->userId);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du profil : " . $e->getMessage();
            return false;
        }
    }

    // Supprimer un profil
    public function delete($userId)
    {
        try {
            $sql = "DELETE FROM profiles WHERE user_id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du profil : " . $e->getMessage();
            return false;
        }
    }
}
