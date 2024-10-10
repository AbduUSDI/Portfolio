<?php
require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$userController = new \Controllers\UserController($db);
$certificateController = new \Controllers\CertificateController($db); // Initialiser le contrôleur des certificats

$studentId = $_POST['student_id'];
$validationStatus = $_POST['validation_status'];

if ($userController->validateStudent($studentId, $validationStatus)) {
    if ($validationStatus == 1) { // Si le cursus est validé
        try {
            $certificateFilename = $certificateController->generateCertificate($studentId);
            echo json_encode(['status' => 'success', 'message' => 'Cursus validé avec succès. Certificat généré : ' . $certificateFilename]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Cursus validé mais erreur lors de la génération du certificat : ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['status' => 'success', 'message' => 'Cursus mis à jour avec succès.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la validation du cursus.']);
}
