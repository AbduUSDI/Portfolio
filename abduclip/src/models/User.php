<?php

namespace Models;

use PDO;
use PDOException;
use Database\DatabaseInstance;

class User extends DatabaseInstance
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $createdAt;
    private $isAdmin;
    private $updatedAt;

    // Getters et Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getUsername() { return $this->username; }
    public function setUsername($username) { $this->username = $username; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = password_hash($password, PASSWORD_BCRYPT); }

    public function getCreatedAt() { return $this->createdAt; }
    public function setCreatedAt($createdAt) { $this->createdAt = $createdAt; }

    public function getUpdatedAt() { return $this->updatedAt; }
    public function setUpdatedAt($updatedAt) { $this->updatedAt = $updatedAt; }
    public function getIsAdmin() { return $this->isAdmin; }
    public function setIsAdmin($isAdmin) { $this->isAdmin = $isAdmin; }

    // Méthode pour trouver un utilisateur par email
    public function findByEmail($email)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche par email : " . $e->getMessage();
            return false;
        }
    }
    
    // Méthodes pour donner le statut d'admin
    public function grantAdmin($userId)
    {
        try {
            $sql = "UPDATE users SET is_admin = 1 WHERE id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de l'octroi du statut d'admin : " . $e->getMessage();
            return false;
        }
    }

    // Méthodes pour retirer le statut d'admin

    public function revokeAdmin($userId)
    {
        try {
            $sql = "UPDATE users SET is_admin = 0 WHERE id = :user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la révocation du statut d'admin : " . $e->getMessage();
            return false;
        }
    }

    // Actions CRUD
    public function create()
    {
        try {
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la création de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    public function read($id)
    {
        try {
            $sql = "SELECT id, username, email, created_at FROM users WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $this->setId($user['id']);
                $this->setUsername($user['username']);
                $this->setEmail($user['email']);
                $this->setCreatedAt($user['created_at']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    public function update()
    {
        try {
            $sql = "UPDATE users SET username = :username, email = :email, password = :password, updated_at = NOW() WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    public function readAll($limit = 10, $offset = 0)
    {
        try {
            $sql = "SELECT id, username, email, created_at FROM users LIMIT :limit OFFSET :offset";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
            return false;
        }
    }
}
