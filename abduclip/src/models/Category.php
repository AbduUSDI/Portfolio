<?php

namespace Models;

use Database\DatabaseInstance;
use PDO;
use PDOException;

class Category extends DatabaseInstance
{
    private $id;
    private $name;
    private $description;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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

    // Créer une catégorie
    public function create()
    {
        try {
            $sql = "INSERT INTO categories (name, description) VALUES (:name, :description)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la création de la catégorie : " . $e->getMessage();
            return false;
        }
    }

    // Lire une catégorie par ID
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM categories WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $category = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($category) {
                $this->setId($category['id']);
                $this->setName($category['name']);
                $this->setDescription($category['description']);
                $this->setCreatedAt($category['created_at']);
                $this->setUpdatedAt($category['updated_at']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture de la catégorie : " . $e->getMessage();
            return false;
        }
    }

    // Mettre à jour une catégorie
    public function update()
    {
        try {
            $sql = "UPDATE categories SET name = :name, description = :description, updated_at = NOW() WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de la catégorie : " . $e->getMessage();
            return false;
        }
    }

    // Supprimer une catégorie
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM categories WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de la catégorie : " . $e->getMessage();
            return false;
        }
    }

    // Lire toutes les catégories (avec pagination optionnelle)
    public function readAll($limit = 10, $offset = 0)
    {
        try {
            $sql = "SELECT * FROM categories LIMIT :limit OFFSET :offset";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture des catégories : " . $e->getMessage();
            return false;
        }
    }
}
