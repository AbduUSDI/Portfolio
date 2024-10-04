<?php

namespace Controllers;

use Models\User;

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    // Inscription d'un nouvel utilisateur
    public function register($username, $email, $password)
    {
        // Vérifier si l'utilisateur existe déjà
        if ($this->userModel->findByEmail($email)) {
            return "Cet email est déjà utilisé.";
        }

        // Hash du mot de passe avant de l'enregistrer
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Création de l'utilisateur
        $this->userModel->setUsername($username);
        $this->userModel->setEmail($email);
        $this->userModel->setPassword($hashedPassword);

        if ($this->userModel->create()) {
            return "Inscription réussie.";
        } else {
            return "Erreur lors de l'inscription.";
        }
    }

    // Connexion de l'utilisateur
    public function login($email, $password)
    {
        // Rechercher l'utilisateur par email
        $user = $this->userModel->findByEmail($email);

        if ($user) {
            // Vérifier le mot de passe
            if (password_verify($password, $user['password'])) {
                // Démarrer une session et stocker les informations de l'utilisateur
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                return "Connexion réussie.";
            } else {
                return "Mot de passe incorrect.";
            }
        } else {
            return "Aucun utilisateur trouvé avec cet email.";
        }
    }

    // Déconnexion de l'utilisateur
    public function logout()
    {
        // Démarrer la session et la détruire
        session_start();
        session_unset();
        session_destroy();
        return "Déconnexion réussie.";
    }

    // Vérifier si l'utilisateur est connecté
    public function isLoggedIn()
    {
        session_start();
        return isset($_SESSION['user_id']);
    }

    // Obtenir les informations de l'utilisateur connecté
    public function getUser()
    {
        session_start();
        if ($this->isLoggedIn()) {
            return [
                'user_id' => $_SESSION['user_id'],
                'username' => $_SESSION['username']
            ];
        } else {
            return null;
        }
    }
}
