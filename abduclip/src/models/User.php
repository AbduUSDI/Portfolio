<?php
namespace Models;

class User {
    use DatabaseTrait;

    // Propriétés de l'utilisateur
    private $id;
    private $username;
    private $email;
    private $password;
    private $created_at;
    private $updated_at;

    // --- Getters et Setters ---

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        // Hashage du mot de passe pour une sécurité accrue
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    // --- Méthodes CRUD pour l'Administrateur ---

    // Création d'un utilisateur local
    public function createUser($username, $email, $password) {
        $sql = "INSERT INTO users (username, email, password, created_at, updated_at) 
                VALUES (:username, :email, :password, NOW(), NOW())";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        if ($password) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $hashedPassword);
        }
        $stmt->execute();
        return $this->getSqlConnection()->lastInsertId();
    }

    // Méthode d'enregistrement
    public function register($username, $email, $password) {
        // Vérifier si l'email est déjà utilisé
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->fetch()) {
            throw new \Exception("Cet email est déjà utilisé.");
        }

        // Enregistre l'utilisateur
        return $this->createUser($username, $email, $password);
    }

    // Lire un utilisateur par ID
    public function readUser($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Mettre à jour un utilisateur
    public function updateUser($id, $username, $email, $password = null) {
        $sql = "UPDATE users SET username = :username, email = :email, updated_at = NOW()";
        if ($password) {
            $sql .= ", password = :password";
        }
        $sql .= " WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        if ($password) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $hashedPassword);
        }
        $stmt->execute();
    }

    // Supprimer un utilisateur
    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Authentification de l'utilisateur
    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Authentification réussie
        }
        return false; // Authentification échouée
    }

    // Méthodes pour un site de mini-jeux

    public function getUserScores($userId) {
        $collection = $this->getMongoCollection('leaderboard');
        return $collection->find(['user_id' => $userId])->toArray();
    }
    
    public function updatePreferences($userId, $preferences) {
        $collection = $this->getMongoCollection('user_preferences');
        $collection->updateOne(
            ['user_id' => $userId],
            ['$set' => ['preferences' => $preferences]],
            ['upsert' => true]
        );
    }
    
    public function getPreferences($userId) {
        $collection = $this->getMongoCollection('user_preferences');
        return $collection->findOne(['user_id' => $userId]);
    }

    // Démarrer ou mettre à jour une session pour un utilisateur
    public function startOrUpdateSession($userId) {
        $sessionId = bin2hex(random_bytes(32));
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? null;
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? null;

        $sql = "SELECT * FROM user_sessions WHERE user_id = :user_id LIMIT 1";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        $existingSession = $stmt->fetch();

        if ($existingSession) {
            $sql = "UPDATE user_sessions 
                    SET ip_address = :ip_address, user_agent = :user_agent, last_activity = NOW() 
                    WHERE user_id = :user_id";
            $stmt = $this->getSqlConnection()->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':ip_address', $ipAddress);
            $stmt->bindParam(':user_agent', $userAgent);
            $stmt->execute();
            
            return $existingSession['session_id'];
        } else {
            $sql = "INSERT INTO user_sessions (user_id, session_id, ip_address, user_agent, created_at, last_activity) 
                    VALUES (:user_id, :session_id, :ip_address, :user_agent, NOW(), NOW())";
            $stmt = $this->getSqlConnection()->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':session_id', $sessionId);
            $stmt->bindParam(':ip_address', $ipAddress);
            $stmt->bindParam(':user_agent', $userAgent);
            $stmt->execute();
            
            return $sessionId;
        }
    }

    // Récupérer une session active par ID de session
    public function getSession($sessionId) {
        $sql = "SELECT * FROM user_sessions WHERE session_id = :session_id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':session_id', $sessionId);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Mettre à jour la dernière activité de la session
    public function updateLastActivity($sessionId) {
        $sql = "UPDATE user_sessions SET last_activity = NOW() WHERE session_id = :session_id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':session_id', $sessionId);
        $stmt->execute();
    }

    // Terminer une session
    public function endSession($sessionId) {
        $sql = "DELETE FROM user_sessions WHERE session_id = :session_id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':session_id', $sessionId);
        $stmt->execute();
    }

    // Changement de mot de passe
    public function changePassword($userId, $oldPassword, $newPassword) {
        $user = $this->readUser($userId);
        if ($user && password_verify($oldPassword, $user['password'])) {
            $sql = "UPDATE users SET password = :password, updated_at = NOW() WHERE id = :id";
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $stmt = $this->getSqlConnection()->prepare($sql);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':id', $userId);
            $stmt->execute();
            return true;
        }
        return false;
    }

    // Vérification des privilèges d'administrateur
    public function isAdmin($userId) {
        $user = $this->readUser($userId);
        return isset($user['is_admin']) && $user['is_admin'] == 1;
    }
    public function updateUsername($userId, $newUsername) {
        $sql = "UPDATE users SET username = :username, updated_at = NOW() WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':username', $newUsername);
        $stmt->bindParam(':id', $userId);
        $stmt->execute();
    }
    public function updateEmail($userId, $newEmail) {
        // Vérifie si l'e-mail est déjà utilisé par un autre utilisateur
        $sql = "SELECT id FROM users WHERE email = :email AND id != :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':email', $newEmail);
        $stmt->bindParam(':id', $userId);
        $stmt->execute();
    
        if ($stmt->fetch()) {
            throw new \Exception("Cet email est déjà utilisé par un autre utilisateur.");
        }
    
        // Met à jour l'adresse e-mail de l'utilisateur
        $sql = "UPDATE users SET email = :email, updated_at = NOW() WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':email', $newEmail);
        $stmt->bindParam(':id', $userId);
        $stmt->execute();
    }
        
}
