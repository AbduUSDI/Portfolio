<?php

namespace Controllers;

use Models\Events;

class EventsController
{
    private $eventModel;

    public function __construct()
    {
        $this->eventModel = new Events();
    }

    // Ajouter un événement
    public function createEvent($name, $description, $startDate, $endDate)
    {
        $this->eventModel->setName($name);
        $this->eventModel->setDescription($description);
        $this->eventModel->setStartDate($startDate);
        $this->eventModel->setEndDate($endDate);

        if ($this->eventModel->create()) {
            return "Événement créé avec succès.";
        } else {
            return "Erreur lors de la création de l'événement.";
        }
    }

    // Lire un événement par ID
    public function getEvent($id)
    {
        if ($this->eventModel->read($id)) {
            return [
                'id' => $this->eventModel->getId(),
                'name' => $this->eventModel->getName(),
                'description' => $this->eventModel->getDescription(),
                'start_date' => $this->eventModel->getStartDate(),
                'end_date' => $this->eventModel->getEndDate(),
                'created_at' => $this->eventModel->getCreatedAt(),
                'updated_at' => $this->eventModel->getUpdatedAt(),
            ];
        } else {
            return null;  // Si aucun événement n'est trouvé
        }
    }

    // Mettre à jour un événement
    public function updateEvent($id, $name, $description, $startDate, $endDate)
    {
        if ($this->eventModel->read($id)) {
            $this->eventModel->setName($name);
            $this->eventModel->setDescription($description);
            $this->eventModel->setStartDate($startDate);
            $this->eventModel->setEndDate($endDate);

            if ($this->eventModel->update()) {
                return "Événement mis à jour avec succès.";
            } else {
                return "Erreur lors de la mise à jour de l'événement.";
            }
        } else {
            return "Événement non trouvé.";
        }
    }

    // Supprimer un événement
    public function deleteEvent($id)
    {
        if ($this->eventModel->delete($id)) {
            return "Événement supprimé avec succès.";
        } else {
            return "Erreur lors de la suppression de l'événement.";
        }
    }

    // Lire tous les événements avec pagination
    public function listEvents($limit = 10, $offset = 0)
    {
        return $this->eventModel->readAll($limit, $offset);
    }
}
