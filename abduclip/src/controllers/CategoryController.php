<?php

namespace Controllers;

use Models\Category;

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Category();
    }

    // Ajouter une catégorie
    public function createCategory($name, $description)
    {
        $this->categoryModel->setName($name);
        $this->categoryModel->setDescription($description);

        if ($this->categoryModel->create()) {
            return "Catégorie créée avec succès.";
        } else {
            return "Erreur lors de la création de la catégorie.";
        }
    }

    // Lire une catégorie par ID
    public function getCategory($id)
    {
        if ($this->categoryModel->read($id)) {
            return [
                'id' => $this->categoryModel->getId(),
                'name' => $this->categoryModel->getName(),
                'description' => $this->categoryModel->getDescription(),
                'created_at' => $this->categoryModel->getCreatedAt(),
                'updated_at' => $this->categoryModel->getUpdatedAt(),
            ];
        } else {
            return null;  // Si aucune catégorie n'est trouvée
        }
    }

    // Mettre à jour une catégorie
    public function updateCategory($id, $name, $description)
    {
        if ($this->categoryModel->read($id)) {
            $this->categoryModel->setName($name);
            $this->categoryModel->setDescription($description);

            if ($this->categoryModel->update()) {
                return "Catégorie mise à jour avec succès.";
            } else {
                return "Erreur lors de la mise à jour de la catégorie.";
            }
        } else {
            return "Catégorie non trouvée.";
        }
    }

    // Supprimer une catégorie
    public function deleteCategory($id)
    {
        if ($this->categoryModel->delete($id)) {
            return "Catégorie supprimée avec succès.";
        } else {
            return "Erreur lors de la suppression de la catégorie.";
        }
    }

    // Lire toutes les catégories avec pagination
    public function listCategories($limit = 10, $offset = 0)
    {
        return $this->categoryModel->readAll($limit, $offset);
    }
}
