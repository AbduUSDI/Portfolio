<?php
namespace Models;

class Game {
    use DatabaseTrait;

    private $id;
    private $category_id;
    private $title;
    private $description;
    private $url_cdn;
    private $file_path;
    private $created_at;
    private $updated_at;

    // --- Getters et Setters ---
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getUrlCdn() {
        return $this->url_cdn;
    }

    public function setUrlCdn($url_cdn) {
        $this->url_cdn = $url_cdn;
    }

    public function getFilePath() {
        return $this->file_path;
    }

    public function setFilePath($file_path) {
        $this->file_path = $file_path;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    // --- CRUD Operations ---
    
    // Créer un nouveau jeu
    public function createGame($category_id, $title, $description = null, $url_cdn = null, $file_path = null) {
        $sql = "INSERT INTO games (category_id, title, description, url_cdn, file_path, created_at, updated_at) 
                VALUES (:category_id, :title, :description, :url_cdn, :file_path, NOW(), NOW())";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindValue(':url_cdn', $url_cdn ?? null);
        $stmt->bindValue(':file_path', $file_path ?? null);
        $stmt->execute();
        return $this->getSqlConnection()->lastInsertId();
    }

    // Lire un jeu par ID
    public function readGame($id) {
        $sql = "SELECT * FROM games WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Mettre à jour un jeu
    public function updateGame($id, $category_id, $title, $description = null, $url_cdn = null, $file_path = null) {
        $sql = "UPDATE games SET category_id = :category_id, title = :title, description = :description, 
                url_cdn = :url_cdn, file_path = :file_path, updated_at = NOW() WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindValue(':url_cdn', $url_cdn ?? null);
        $stmt->bindValue(':file_path', $file_path ?? null);
        $stmt->execute();
    }

    // Supprimer un jeu
    public function deleteGame($id) {
        $sql = "DELETE FROM games WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Lire tous les jeux d'une catégorie
    public function getGamesByCategory($category_id) {
        $sql = "SELECT * FROM games WHERE category_id = :category_id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

    // Lire tous les jeux
    public function getAllGames() {
        $sql = "SELECT * FROM games";
        $stmt = $this->getSqlConnection()->query($sql);
        return $stmt->fetchAll();
    }
}
