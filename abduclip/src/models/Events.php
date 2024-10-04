<?php

namespace Models;

use Database\DatabaseInstance;
use PDO;
use PDOException;

class Events extends DatabaseInstance
{
    private $id;
    private $name;
    private $description;
    private $startDate;
    private $endDate;
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

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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

    // Créer un événement
    public function create()
    {
        try {
            $sql = "INSERT INTO events (name, description, start_date, end_date) VALUES (:name, :description, :start_date, :end_date)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':start_date', $this->startDate);
            $stmt->bindParam(':end_date', $this->endDate);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la création de l'événement : " . $e->getMessage();
            return false;
        }
    }

    // Lire un événement par ID
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM events WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $event = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($event) {
                $this->setId($event['id']);
                $this->setName($event['name']);
                $this->setDescription($event['description']);
                $this->setStartDate($event['start_date']);
                $this->setEndDate($event['end_date']);
                $this->setCreatedAt($event['created_at']);
                $this->setUpdatedAt($event['updated_at']);
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture de l'événement : " . $e->getMessage();
            return false;
        }
    }

    // Mettre à jour un événement
    public function update()
    {
        try {
            $sql = "UPDATE events SET name = :name, description = :description, start_date = :start_date, end_date = :end_date, updated_at = NOW() WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':start_date', $this->startDate);
            $stmt->bindParam(':end_date', $this->endDate);
            $stmt->bindParam(':id', $this->id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de l'événement : " . $e->getMessage();
            return false;
        }
    }

    // Supprimer un événement
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM events WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de l'événement : " . $e->getMessage();
            return false;
        }
    }

    // Lire tous les événements (avec pagination optionnelle)
    public function readAll($limit = 10, $offset = 0)
    {
        try {
            $sql = "SELECT * FROM events LIMIT :limit OFFSET :offset";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la lecture des événements : " . $e->getMessage();
            return false;
        }
    }
}
