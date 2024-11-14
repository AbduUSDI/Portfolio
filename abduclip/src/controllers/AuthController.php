<?php
namespace Controllers;

use Models\User;

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // Inscription d'un utilisateur local
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

    // Connexion pour utilisateurs locaux
    public function login($email, $password) {
        $user = $this->userModel->login($email, $password);
    
        if ($user) {
            $this->initializeSession($user['id']);
            
            // Stocke les informations utilisateur dans la session
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email']
            ];
    
            return $user;
        } else {
            throw new \Exception("Email ou mot de passe incorrect.");
        }
    }

    // Démarre la session pour un utilisateur
    private function initializeSession($userId) {
        $sessionId = $this->userModel->startOrUpdateSession($userId);
        $_SESSION['session_id'] = $sessionId;
        $_SESSION['user_id'] = $userId;
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
