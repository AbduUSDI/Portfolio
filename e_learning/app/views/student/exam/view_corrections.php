<?php
session_start();

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$examController = new \Controllers\ExamController($db);
$authController = new \Controllers\AuthController($db);

// Vérifiez que l'utilisateur est connecté et qu'il est un étudiant
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user || $user['role_id'] != 3) {
    header('Location: /Portfolio/e_learning/login');
    exit();
}

// Récupérer toutes les corrections associées aux soumissions de l'étudiant
$feedbacks = $examController->getFeedbacksByStudentId($user['id']);

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>

<div class="container mt-5 containerr rounded">
    <h2 class="text-white">Corrections du Formateur</h2>

    <?php if (!empty($feedbacks)) : ?>
        <?php foreach ($feedbacks as $feedback) : ?>
            <div class="card">
                <div class="card-header">Examen: <?php echo htmlspecialchars($feedback['title']); ?></div>
                <div class="card-body">
                    <p><?php echo htmlspecialchars($feedback['message']); ?></p>
                    <?php if (!empty($feedback['audio_path'])): ?>
                        <audio controls>
                            <source src="/Portfolio/e_learning/public<?php echo htmlspecialchars($feedback['audio_path']); ?>" type="audio/mpeg">
                            Votre navigateur ne supporte pas la lecture audio.
                        </audio>
                    <?php else: ?>
                        <p class="text-danger">Pas de message audio disponible.</p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-white">Aucune correction disponible pour vos soumissions.</p>
    <?php endif; ?>
</div>

<?php include '../../../../public/templates/footer.php'; ?>
