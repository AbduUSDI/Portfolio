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
         // Vous pouvez ajouter un hachage de mot de passe ici si nécessaire
         $this->password = password_hash($password, PASSWORD_BCRYPT);
     }
 
     public function getCreatedAt() {
         return $this->created_at;
     }
 
     public function getUpdatedAt() {
         return $this->updated_at;
     }

    // --- Méthodes CRUD pour l'Administrateur ---

    // Création d'un utilisateur
    public function createUser($username, $email, $password) {
        $sql = "INSERT INTO users (username, email, password, created_at, updated_at) VALUES (:username, :email, :password, NOW(), NOW())";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
        return $this->getSqlConnection()->lastInsertId();
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

    // --- Méthodes supplémentaires pour un site de mini-jeux ---

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
    public function register($username, $email, $password) {
        // Vérifier si l'email est déjà utilisé
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        if ($stmt->fetch()) {
            throw new \Exception("Cet email est déjà utilisé.");
        }
    
        // Si l'email est unique, créer un nouvel utilisateur
        $sql = "INSERT INTO users (username, email, password, created_at, updated_at) VALUES (:username, :email, :password, NOW(), NOW())";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
    
        return $this->getSqlConnection()->lastInsertId();
    }
// Démarrer ou mettre à jour une session pour un utilisateur
public function startOrUpdateSession($userId) {
    $sessionId = bin2hex(random_bytes(32)); // Génère un ID de session unique et sécurisé si nécessaire
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? null;
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? null;

    // Vérifie si une session existe déjà pour cet utilisateur
    $sql = "SELECT * FROM user_sessions WHERE user_id = :user_id LIMIT 1";
    $stmt = $this->getSqlConnection()->prepare($sql);
    $stmt->bindParam(':user_id', $userId);
    $stmt->execute();
    $existingSession = $stmt->fetch();

    if ($existingSession) {
        // Si une session existe, on la met à jour avec les nouvelles informations
        $sql = "UPDATE user_sessions 
                SET ip_address = :ip_address, user_agent = :user_agent, last_activity = NOW() 
                WHERE user_id = :user_id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':ip_address', $ipAddress);
        $stmt->bindParam(':user_agent', $userAgent);
        $stmt->execute();
        
        // Utilise l'ID de session existant
        return $existingSession['session_id'];
    } else {
        // Si aucune session n'existe, on en crée une nouvelle
        $sql = "INSERT INTO user_sessions (user_id, session_id, ip_address, user_agent, created_at, last_activity) 
                VALUES (:user_id, :session_id, :ip_address, :user_agent, NOW(), NOW())";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':session_id', $sessionId);
        $stmt->bindParam(':ip_address', $ipAddress);
        $stmt->bindParam(':user_agent', $userAgent);
        $stmt->execute();
        
        // Retourne le nouvel ID de session
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
}
