<?php

namespace Controllers;

use Models\Profile;
use PDO;

class ProfileController
{
    private $db;
    private $profileModel;

    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->profileModel = new Profile();
    }

    // Créer un profil
    public function createProfile($userId, $bio, $avatar)
    {
        $this->profileModel->setUserId($userId);
        $this->profileModel->setBio($bio);
        $this->profileModel->setAvatar($avatar);

        if ($this->profileModel->create()) {
            return "Profil créé avec succès.";
        } else {
            return "Erreur lors de la création du profil.";
        }
    }

    // Lire un profil par ID utilisateur
    public function getProfile($userId)
    {
        if ($this->profileModel->read($userId)) {
            return [
                'id' => $this->profileModel->getId(),
                'user_id' => $this->profileModel->getUserId(),
                'bio' => $this->profileModel->getBio(),
                'avatar' => $this->profileModel->getAvatar(),
                'created_at' => $this->profileModel->getCreatedAt(),
                'updated_at' => $this->profileModel->getUpdatedAt(),
            ];
        } else {
            return null;  // Si aucun profil n'est trouvé
        }
    }

    // Mettre à jour un profil
    public function updateProfile($userId, $bio, $avatar)
    {
        if ($this->profileModel->read($userId)) {
            $this->profileModel->setBio($bio);
            $this->profileModel->setAvatar($avatar);

            if ($this->profileModel->update()) {
                return "Profil mis à jour avec succès.";
            } else {
                return "Erreur lors de la mise à jour du profil.";
            }
        } else {
            return "Profil non trouvé.";
        }
    }

    // Supprimer un profil
    public function deleteProfile($userId)
    {
        if ($this->profileModel->delete($userId)) {
            return "Profil supprimé avec succès.";
        } else {
            return "Erreur lors de la suppression du profil.";
        }
    }
}
