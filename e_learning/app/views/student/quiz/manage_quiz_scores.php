<?php
session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un étudiant
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 3) {
    header('Location: /Portfolio/e_learning/login');
    exit;
}

// Gestion de la durée de la session
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $sessionLifetime)) {
    session_unset();
    session_destroy();
    header('Location: /Portfolio/e_learning/login');
    exit;
}

$_SESSION['LAST_ACTIVITY'] = time();

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$quizController = new \Controllers\QuizController($db);

// Récupérer les scores de l'utilisateur
$userId = $_SESSION['user']['id'];
$scores = $quizController->getScoresByUser($userId);

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Mes Scores de Quiz</h1>
    <?php if (empty($scores)): ?>
        <p class="text-center">Aucun score enregistré pour le moment.</p>
    <?php else: ?>
        <div class="row">
            <?php foreach ($scores as $score): ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            Quiz: <?php echo htmlspecialchars($score['quiz_name']); ?>
                        </div>
                        <div class="card-body text-center">
                            <p>Score: <?php echo htmlspecialchars($score['score']); ?>%</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include '../../../../public/templates/footer.php'; ?>
