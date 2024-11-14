<?php
require_once '../../vendor/autoload.php'; // Ajustez le chemin si nécessaire
use Models\User;

function check_inactivity_timeout($max_inactivity = 900) { // Durée d'inactivité en secondes (900 = 15 minutes)
    
    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['user_id'])) {
        // Instancie le modèle User pour mettre à jour l'activité dans la base de données
        $userModel = new User();
        
        // Vérifier l'inactivité
        if (isset($_SESSION['last_activity'])) {
            $inactivity_duration = time() - $_SESSION['last_activity'];
            
            if ($inactivity_duration > $max_inactivity) {
                // Si la durée d'inactivité est dépassée, déconnecter l'utilisateur
                $userModel->endSession($_SESSION['session_id']); // Terminer la session en base de données
                session_unset();
                session_destroy();
                header("Location: index.php?timeout=1"); // Rediriger vers index.php avec un message d'expiration
                exit();
            }
        }
        
        // Mettre à jour la dernière activité en base de données pour les utilisateurs connectés
        if (isset($_SESSION['session_id'])) {
            $userModel->updateLastActivity($_SESSION['session_id']);
        }
        
        // Mettre à jour le timestamp de la dernière activité en session
        $_SESSION['last_activity'] = time();
    }
}
