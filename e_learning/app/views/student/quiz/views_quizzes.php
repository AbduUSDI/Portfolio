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

// Récupérer tous les quiz pour l'utilisateur
$userId = $_SESSION['user']['id'];
$quizzes = $quizController->getAllQuizzes();
$previousResults = $quizController->getPreviousResults($userId);

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Mes Quiz</h1>
    <?php if (empty($quizzes)): ?>
        <p class="text-center">Aucun quiz disponible.</p>
    <?php else: ?>
        <div class="row">
            <?php foreach ($quizzes as $quiz): ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <?php echo htmlspecialchars($quiz['quiz_name']); ?>
                        </div>
                        <div class="card-body">
                            <p><?php echo htmlspecialchars($quiz['description']); ?></p>
                            <?php if (isset($previousResults[$quiz['id']])): ?>
                                <p class="text-success">Score précédent : <?php echo $previousResults[$quiz['id']]['score']; ?>%</p>
                                <a href="/Portfolio/e_learning/student/quiz/take_quiz/<?php echo $quiz['id']; ?>&resume=true" class="btn btn-warning">Reprendre le quiz</a>
                            <?php else: ?>
                                <a href="/Portfolio/e_learning/student/quiz/take_quiz/<?php echo $quiz['id']; ?>" class="btn btn-primary">Commencer le quiz</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include '../../../../public/templates/footer.php'; ?>
