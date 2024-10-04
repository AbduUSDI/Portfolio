<?php

namespace Controllers;

use Models\User;
use PDO;

class UserController
{
    private $db;
    private $userModel;

    // Constructeur pour initialiser le modèle User avec la connexion à la base de données
    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->userModel = new User();
    }

    // Créer un nouvel utilisateur
    public function createUser($username, $email, $password)
    {
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);
        $this->userModel->setPassword($password);

        if ($this->userModel->create()) {
            return "Utilisateur créé avec succès.";
        } else {
            return "Erreur lors de la création de l'utilisateur.";
        }
    }

    // Récupérer les détails d'un utilisateur (sans afficher)
    public function getUser($id)
    {
        if ($this->userModel->read($id)) {
            return [
                'username' => $this->userModel->getUsername(),
                'email' => $this->userModel->getEmail(),
                'created_at' => $this->userModel->getCreatedAt(),
            ];
        } else {
            return null;  // Si l'utilisateur n'est pas trouvé
        }
    }

    // Mettre à jour un utilisateur
    public function updateUser($id, $username, $email, $password)
    {
        if ($this->userModel->read($id)) {
            $this->userModel->setUsername($username);
            $this->userModel->setEmail($email);
            $this->userModel->setPassword($password);

            if ($this->userModel->update()) {
                return "Utilisateur mis à jour avec succès.";
            } else {
                return "Erreur lors de la mise à jour de l'utilisateur.";
            }
        } else {
            return "Utilisateur non trouvé.";
        }
    }

    // Supprimer un utilisateur
    public function deleteUser($id)
    {
        if ($this->userModel->delete($id)) {
            return "Utilisateur supprimé avec succès.";
        } else {
            return "Erreur lors de la suppression de l'utilisateur.";
        }
    }

    // Récupérer une liste d'utilisateurs (sans afficher)
    public function listUsers($limit = 10, $offset = 0)
    {
        return $this->userModel->readAll($limit, $offset);
    }
}
