<?php

namespace Models;

use Database\DatabaseInstance;
use PDO;
use PDOException;

class Game extends DatabaseInstance
{
    private $id;
    private $title;
    private $description;
    private $urlCdn;
    private $filePath;
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

    public function getUrlCdn()
    {
        return $this->urlCdn;
    }

    public function setUrlCdn($urlCdn)
    {
        $this->urlCdn = $urlCdn;
    }

    public function getFilePath()
    {
        return $this->filePath;
    }

    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
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

    // Créer un jeu
    public function create()
    {
        try {
            $sql = "INSERT INTO games (title, description, url_cdn, file_path) VALUES (:title, :description, :url_cdn, :file_path)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':url_cdn', $this->urlCdn);
            $stmt->bindParam(':file_path', $this->filePath);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la création du jeu : " . $e->getMessage();
            return false;
        }
    }

    // Lire un jeu par ID
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM games WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $game = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($game) {
                $this->setId($game['id']);
                $this->setTitle($game['title']);
                $this->setDescription($game['description']);
                $this->setUrlCdn($game['url_cdn']);
                $this->setFilePath($game['file_path']);
                $this->setCreatedAt($game['created_at']);
                $this->setUpdatedAt($game['updated_at']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture du jeu : " . $e->getMessage();
            return false;
        }
    }

    // Mettre à jour un jeu
    public function update()
    {
        try {
            $sql = "UPDATE games SET title = :title, description = :description, url_cdn = :url_cdn, file_path = :file_path, updated_at = NOW() WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':url_cdn', $this->urlCdn);
            $stmt->bindParam(':file_path', $this->filePath);
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du jeu : " . $e->getMessage();
            return false;
        }
    }

    // Supprimer un jeu
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM games WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du jeu : " . $e->getMessage();
            return false;
        }
    }

    // Lire tous les jeux (avec pagination optionnelle)
    public function readAll($limit = 10, $offset = 0)
    {
        try {
            $sql = "SELECT * FROM games LIMIT :limit OFFSET :offset";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture des jeux : " . $e->getMessage();
            return false;
        }
    }
}
