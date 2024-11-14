<?php
namespace Controllers;

use Models\CategoryAbduclip;
use Models\Game;

class CategoryAbduclipController {
    private $categoryModel;
    private $gameModel;

    public function __construct() {
        $this->categoryModel = new CategoryAbduclip();
        $this->gameModel = new Game();
    }

    // Créer une nouvelle catégorie
    public function createCategory($name, $description = null) {
        return $this->categoryModel->createCategory($name, $description);
    }

    // Lire une catégorie par ID
    public function readCategory($id) {
        return $this->categoryModel->readCategory($id);
    }

    // Mettre à jour une catégorie
    public function updateCategory($id, $name, $description = null) {
        $this->categoryModel->updateCategory($id, $name, $description);
    }

    // Supprimer une catégorie
    public function deleteCategory($id) {
        $this->categoryModel->deleteCategory($id);
    }

    // Lister toutes les catégories
    public function listCategories() {
        return $this->categoryModel->listCategories();
    }

    // Récupérer toutes les catégories avec le nombre de jeux dans chaque catégorie
    public function getAllCategoriesWithGameCount() {
        return $this->categoryModel->getAllCategoriesWithGameCount();
    }
    // Méthode pour obtenir toutes les catégories avec leurs jeux
    public function getAllCategoriesWithGames() {
        // Récupérer toutes les catégories
        $categories = $this->categoryModel->listCategories();

        // Ajouter les jeux associés à chaque catégorie
        foreach ($categories as &$category) {
            $category['games'] = $this->gameModel->getGamesByCategory($category['id']);
        }

        return $categories;
    }
}
