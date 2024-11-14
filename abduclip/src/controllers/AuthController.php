<?php
namespace Controllers;

use Models\User;

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // Inscription d'un utilisateur
    public function register($username, $email, $password) {
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);
        $this->userModel->setPassword($password);

        // Appelle la méthode d'inscription du modèle User
        return $this->userModel->register(
            $this->userModel->getUsername(),
            $this->userModel->getEmail(),
            $this->userModel->getPassword()
        );
    }

// Connexion d'un utilisateur
public function login($email, $password) {
    $user = $this->userModel->login($email, $password);

    if ($user) {
        $this->userModel->setId($user['id']);

        // Démarre ou met à jour la session existante avec IP et user agent
        $sessionId = $this->userModel->startOrUpdateSession($this->userModel->getId());
        
        // Stocke l'ID de session et l'ID de l'utilisateur dans la session PHP
        $_SESSION['session_id'] = $sessionId;
        $_SESSION['user_id'] = $this->userModel->getId();

        return $user;
    } else {
        throw new \Exception("Email ou mot de passe incorrect.");
    }
}


    // Déconnexion d'un utilisateur
    public function logout() {
        if (isset($_SESSION['session_id'])) {
            // Termine la session en base de données
            $this->userModel->endSession($_SESSION['session_id']);

            // Supprime les informations de session
            unset($_SESSION['session_id'], $_SESSION['user_id']);
            session_destroy();
        }
    }

    // Vérifier si l'utilisateur est administrateur
    public function isAdmin($userId) {
        $this->userModel->setId($userId); // Utilise le setter pour configurer l'ID de l'utilisateur
        return $this->userModel->isAdmin($this->userModel->getId());
    }
}
