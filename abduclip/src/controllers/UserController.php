<?php
namespace Controllers;

use Models\User;

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // --- Méthodes CRUD pour les administrateurs ---

    // Créer un nouvel utilisateur local
    public function createUser($username, $email, $password) {
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);

        if ($password) {
            $this->userModel->setPassword($password);
        }

        return $this->userModel->register(
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
    public function updatePasswordAbduclip($userId, $oldPassword, $newPassword) {
        $this->userModel->setId($userId);
        return $this->userModel->changePassword($this->userModel->getId(), $oldPassword, $newPassword);
    }
        // Mise à jour du nom d'utilisateur
    public function updateUsername($userId, $newUsername) {
        $this->userModel->setId($userId);
        $this->userModel->setUsername($newUsername);
        $this->userModel->updateUsername($this->userModel->getId(), $this->userModel->getUsername());
            
        // Mettez à jour le nom d'utilisateur dans la session
        $_SESSION['user']['username'] = $newUsername;
    }

    // Mise à jour de l'adresse e-mail
    public function updateEmail($userId, $newEmail) {
        $this->userModel->setId($userId);
        $this->userModel->setEmail($newEmail);
        $this->userModel->updateEmail($this->userModel->getId(), $this->userModel->getEmail());
    
        // Mettez à jour l'adresse e-mail dans la session
        $_SESSION['user']['email'] = $newEmail;
    }
    
}
