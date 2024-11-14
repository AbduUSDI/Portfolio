<?php

function check_inactivity_timeout($max_inactivity = 900) { // Durée d'inactivité en secondes (900 = 15 minutes)
    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['user_id'])) {
        // Vérifier l'inactivité
        if (isset($_SESSION['last_activity'])) {
            $inactivity_duration = time() - $_SESSION['last_activity'];
            
            if ($inactivity_duration > $max_inactivity) {
                // Si la durée d'inactivité est dépassée, déconnecter l'utilisateur
                session_unset();
                session_destroy();
                header("Location: index.php?timeout=1"); // Rediriger vers index.php avec un message d'expiration
                exit();
            }
        }
        
        // Mettre à jour le timestamp de la dernière activité pour les utilisateurs connectés
        $_SESSION['last_activity'] = time();
    }
}

