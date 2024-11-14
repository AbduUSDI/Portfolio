<?php
namespace Controllers;

use Models\User;

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // --- Méthodes CRUD pour les administrateurs ---

    // Créer un nouvel utilisateur
    public function createUser($username, $email, $password) {
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);
        $this->userModel->setPassword($password);
        
        return $this->userModel->createUser(
            $this->userModel->getUsername(),
            $this->userModel->getEmail(),
            $this->userModel->getPassword()
        );
    }

    // Lire un utilisateur par ID
    public function readUser($id) {
        $this->userModel->setId($id);
        return $this->userModel->readUser($this->userModel->getId());
    }

    // Mettre à jour un utilisateur
    public function updateUser($id, $username, $email, $password = null) {
        $this->userModel->setId($id);
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);
        if ($password) {
            $this->userModel->setPassword($password);
        }

        $this->userModel->updateUser(
            $this->userModel->getId(),
            $this->userModel->getUsername(),
            $this->userModel->getEmail(),
            $password ? $this->userModel->getPassword() : null
        );
    }

    // Supprimer un utilisateur
    public function deleteUser($id) {
        $this->userModel->setId($id);
        $this->userModel->deleteUser($this->userModel->getId());
    }

    // --- Méthodes pour la gestion des préférences et des scores ---

    // Récupérer les scores d'un utilisateur
    public function getUserScores($userId) {
        $this->userModel->setId($userId);
        return $this->userModel->getUserScores($this->userModel->getId());
    }

    // Mettre à jour les préférences utilisateur
    public function updatePreferences($userId, $preferences) {
        $this->userModel->setId($userId);
        $this->userModel->updatePreferences($this->userModel->getId(), $preferences);
    }

    // Récupérer les préférences utilisateur
    public function getPreferences($userId) {
        $this->userModel->setId($userId);
        return $this->userModel->getPreferences($this->userModel->getId());
    }

    // --- Méthode pour changer le mot de passe de l'utilisateur ---

    // Changer le mot de passe d'un utilisateur
    public function changePassword($userId, $oldPassword, $newPassword) {
        $this->userModel->setId($userId);
        return $this->userModel->changePassword($this->userModel->getId(), $oldPassword, $newPassword);
    }
}
