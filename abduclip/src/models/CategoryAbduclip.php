<?php
namespace Models;

class CategoryAbduclip {
    use DatabaseTrait;

    // Propriétés
    private $id;
    private $name;
    private $description;
    private $created_at;
    private $updated_at;

    // --- Getters et Setters ---
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    // --- Méthodes CRUD ---

    // Créer une nouvelle catégorie
    public function createCategory($name, $description = null) {
        $sql = "INSERT INTO categories (name, description, created_at, updated_at) VALUES (:name, :description, NOW(), NOW())";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        return $this->getSqlConnection()->lastInsertId();
    }

    // Lire une catégorie par ID
    public function readCategory($id) {
        $sql = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Mettre à jour une catégorie
    public function updateCategory($id, $name, $description = null) {
        $sql = "UPDATE categories SET name = :name, description = :description, updated_at = NOW() WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }

    // Supprimer une catégorie
    public function deleteCategory($id) {
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Lister toutes les catégories
    public function listCategories() {
        $sql = "SELECT * FROM categories";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

    // Récupérer toutes les catégories avec leur nombre de jeux associés
    public function getAllCategoriesWithGameCount() {
        $sql = "
            SELECT 
                categories.*, 
                COUNT(games.id) AS game_count 
            FROM 
                categories 
            LEFT JOIN 
                games ON categories.id = games.category_id 
            GROUP BY 
                categories.id
        ";
        $stmt = $this->getSqlConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
