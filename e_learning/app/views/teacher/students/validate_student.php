<?php
require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$userController = new \Controllers\UserController($db);

$studentId = $_POST['student_id'];
$validationStatus = $_POST['validation_status'];

if ($userController->validateStudent($studentId, $validationStatus)) {
    echo json_encode(['status' => 'success', 'message' => 'Cursus validé avec succès.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la validation du cursus.']);
}
