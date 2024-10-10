<?php

require_once '../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$authController = new \Controllers\AuthController($db);
$error = $authController->register();

if ($error) {
    // Rediriger vers la page de connexion avec un message d'erreur
    header("Location: /Portfolio/e_learning/login?error=" . urlencode($error));
    exit();
} else {
    // Rediriger vers la page de connexion avec un message de succès
    $success = "Inscription réussie. Vous pouvez maintenant vous connecter.";
    header("Location: /Portfolio/e_learning/login?success=" . urlencode($success));
    exit();
}
