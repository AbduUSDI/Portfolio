<?php
require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$formationController = new \Controllers\FormationController($db);

$userId = (int)$_POST['user_id'] ?? null;
$formationId = (int)$_POST['formation_id'] ?? null;

if ($userId === null || $formationId === null) {
    echo json_encode(['status' => 'error', 'message' => 'Données manquantes : user_id ou formation_id']);
    exit;
}

if ($formationController->assignFormationToStudent($userId, $formationId)) {
    echo json_encode(['status' => 'success', 'message' => 'Formation ajoutée avec succès.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de l\'ajout de la formation.']);
}
