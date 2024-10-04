<?php

namespace Controllers;

use Models\User;
use Models\Game;
use Models\Category;
use Models\Events;

class AdminController
{
    private $userModel;
    private $gameModel;
    private $categoryModel;
    private $eventModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->gameModel = new Game();
        $this->categoryModel = new Category();
        $this->eventsModel = new Events();
    }

    // Vérifier si l'utilisateur est un administrateur
    private function isAdmin()
    {
        session_start();
        return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
    }

    // Gérer les utilisateurs (Lecture des utilisateurs)
    public function manageUsers()
    {
        if ($this->isAdmin()) {
            return $this->userModel->readAll();
        } else {
            return "Accès refusé. Vous devez être administrateur pour accéder à cette page.";
        }
    }

    // Supprimer un utilisateur
    public function deleteUser($userId)
    {
        if ($this->isAdmin()) {
            return $this->userModel->delete($userId);
        } else {
            return "Accès refusé. Vous devez être administrateur pour effectuer cette action.";
        }
    }

    // Gérer les jeux (Lecture des jeux)
    public function manageGames()
    {
        if ($this->isAdmin()) {
            return $this->gameModel->readAll();
        } else {
            return "Accès refusé. Vous devez être administrateur pour accéder à cette page.";
        }
    }

    // Supprimer un jeu
    public function deleteGame($gameId)
    {
        if ($this->isAdmin()) {
            return $this->gameModel->delete($gameId);
        } else {
            return "Accès refusé. Vous devez être administrateur pour effectuer cette action.";
        }
    }

    // Gérer les catégories (Lecture des catégories)
    public function manageCategories()
    {
        if ($this->isAdmin()) {
            return $this->categoryModel->readAll();
        } else {
            return "Accès refusé. Vous devez être administrateur pour accéder à cette page.";
        }
    }

    // Supprimer une catégorie
    public function deleteCategory($categoryId)
    {
        if ($this->isAdmin()) {
            return $this->categoryModel->delete($categoryId);
        } else {
            return "Accès refusé. Vous devez être administrateur pour effectuer cette action.";
        }
    }

    // Gérer les événements (Lecture des événements)
    public function manageEvents()
    {
        if ($this->isAdmin()) {
            return $this->eventModel->readAll();
        } else {
            return "Accès refusé. Vous devez être administrateur pour accéder à cette page.";
        }
    }

    // Supprimer un événement
    public function deleteEvent($eventId)
    {
        if ($this->isAdmin()) {
            return $this->eventModel->delete($eventId);
        } else {
            return "Accès refusé. Vous devez être administrateur pour effectuer cette action.";
        }
    }

    // Gérer les permissions (ajouter une vérification d'admin)
    public function grantAdmin($userId)
    {
        if ($this->isAdmin()) {
            return $this->userModel->grantAdmin($userId);
        } else {
            return "Accès refusé. Vous devez être administrateur pour effectuer cette action.";
        }
    }

    // Révoquer les droits d'admin
    public function revokeAdmin($userId)
    {
        if ($this->isAdmin()) {
            return $this->userModel->revokeAdmin($userId);
        } else {
            return "Accès refusé. Vous devez être administrateur pour effectuer cette action.";
        }
    }
}
