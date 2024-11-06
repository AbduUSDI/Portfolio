<?php

// Démarrer la session
session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification de la durée d'inactivité
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $sessionLifetime)) {
    // Supprimer toutes les variables de session et détruire la session
    session_unset();
    session_destroy();
    // Redirection vers la page de login
    header('Location: login.php');
    exit;
}

// Mettre à jour le temps de dernière activité de la session
$_SESSION['LAST_ACTIVITY'] = time();

// Récupérer le paramètre de routage et le nettoyer
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? 'home';

// Liste des pages autorisées
$pages = [
    'home',
    'cours_html',
    'cours_html_avance',
    'cours_css',
    'cours_bootstrap',
    'cours_animation',
    'cours_ux',
    'cours_ui',
    'cours_accessibilite',
    'cours_prototypage',
    'cours_js',
    'cours_ajax',
    'cours_php',
    'cours_python',
    'cours_java',
    'cours_rust',
    'cours_go',
    'cours_react',
    'cours_vue',
    'cours_angular',
    'cours_django',
    'cours_laravel',
    'cours_tailwind',
    'cours_docker',
    'cours_kubernetes',
    'cours_ci_cd',
    'cours_ansible',
    'cours_terraform',
    'cours_sql',
    'cours_mysql',
    'cours_mongodb',
    'cours_postgresql',
    'cours_redis',
    'cours_scrum',
    'cours_kanban',
    'cours_agile',
    'cours_tdd',
    'cours_securite_web',
    'cours_bonnes_pratiques_code',
    'cours_gestion_erreurs',
    'cours_tests_unitaires',
    'cours_performance',
    'memo',
    '404'
];

// Chemin de base des fichiers des pages
$baseDir = __DIR__;

// Vérifier si la page demandée est dans la liste des pages autorisées
if (!in_array($page, $pages)) {
    $page = '404'; // Rediriger vers une page 404 en cas de page non trouvée
}

// Construire le chemin du fichier à inclure
$filePath = realpath($baseDir . "/$page.php");

// Sécurité supplémentaire : vérifier que le fichier existe dans le répertoire de base
if ($filePath && strpos($filePath, $baseDir) === 0 && file_exists($filePath)) {
    try {
        // Inclure la page demandée
        include $filePath;
    } catch (Exception $e) {
        // Gestion des erreurs avec message propre
        echo "Une erreur s'est produite : " . htmlspecialchars($e->getMessage());
    }
} else {
    // Si le fichier n'existe pas, afficher un message d'erreur
    echo "Une erreur s'est produite : fichier introuvable.";
}
