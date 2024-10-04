<?php

namespace Models;

use Database\DatabaseInstance;
use PDO;
use PDOException;

class SearchBar extends DatabaseInstance
{
    private $id;
    private $username;
    private $email;
    private $createdAt;
    private $title;
    private $description;

    // Getters et Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Rechercher des utilisateurs par nom d'utilisateur ou email
    public function searchUsers($searchTerm)
    {
        try {
            $sql = "SELECT id, username, email, created_at FROM users WHERE username LIKE :searchTerm OR email LIKE :searchTerm";
            $stmt = $this->db->prepare($sql);
            $term = "%" . $searchTerm . "%";  // Ajout des jokers pour une recherche flexible
            $stmt->bindParam(':searchTerm', $term, PDO::PARAM_STR);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($results) {
                foreach ($results as $result) {
                    $this->setId($result['id']);
                    $this->setUsername($result['username']);
                    $this->setEmail($result['email']);
                    $this->setCreatedAt($result['created_at']);
                }
            }

            return $results;
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche d'utilisateurs : " . $e->getMessage();
            return false;
        }
    }

    // Rechercher des jeux par titre ou description
    public function searchGames($searchTerm)
    {
        try {
            $sql = "SELECT id, title, description, created_at FROM games WHERE title LIKE :searchTerm OR description LIKE :searchTerm";
            $stmt = $this->db->prepare($sql);
            $term = "%" . $searchTerm . "%";  // Ajout des jokers pour une recherche flexible
            $stmt->bindParam(':searchTerm', $term, PDO::PARAM_STR);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($results) {
                foreach ($results as $result) {
                    $this->setId($result['id']);
                    $this->setTitle($result['title']);
                    $this->setDescription($result['description']);
                    $this->setCreatedAt($result['created_at']);
                }
            }

            return $results;
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche des jeux : " . $e->getMessage();
            return false;
        }
    }
}
