<?php

namespace Controllers;

use Models\SearchBar;
use PDO;

class SearchBarController
{
    private $db;
    private $searchModel;

    // Constructeur pour initialiser le modèle de recherche avec la connexion à la base de données
    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->searchModel = new SearchBar();
    }

    // Rechercher des utilisateurs
    public function searchUsers($searchTerm)
    {
        // Appeler la méthode de recherche dans le modèle
        $results = $this->searchModel->searchUsers($searchTerm);
        return $this->prepareResults($results);
    }

    // Rechercher des jeux
    public function searchGames($searchTerm)
    {
        // Appeler la méthode de recherche dans le modèle
        $results = $this->searchModel->searchGames($searchTerm);
        return $this->prepareResults($results);
    }

    // Méthode pour préparer les résultats avec setters et getters
    private function prepareResults($results)
    {
        $formattedResults = [];

        if (!empty($results)) {
            foreach ($results as $result) {
                $this->searchModel->setId($result['id']);
                $this->searchModel->setUsername($result['username'] ?? null);
                $this->searchModel->setEmail($result['email'] ?? null);
                $this->searchModel->setTitle($result['title'] ?? null);
                $this->searchModel->setDescription($result['description'] ?? null);
                $this->searchModel->setCreatedAt($result['created_at']);

                $formattedResults[] = [
                    'id' => $this->searchModel->getId(),
                    'username' => $this->searchModel->getUsername(),
                    'email' => $this->searchModel->getEmail(),
                    'title' => $this->searchModel->getTitle(),
                    'description' => $this->searchModel->getDescription(),
                    'created_at' => $this->searchModel->getCreatedAt(),
                ];
            }
        }

        return $formattedResults; // Retourne les données formatées
    }
}
