<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 3) {
    header('Location: /Portfolio/e_learning/login');
    exit;
}

require_once '../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$formationController = new \Controllers\FormationController($db);
$progressController = new \Controllers\ProgressController($db);
$quizController = new \Controllers\QuizController($db);

// Récupérer tous les quiz pour l'utilisateur
$userId = $_SESSION['user']['id'];
$quizzes = $quizController->getAllQuizzes();
$previousResults = $quizController->getPreviousResults($userId);
$formations = $formationController->getFormationsByUser($_SESSION['user']['id']);

include_once '../../../public/templates/header.php';
include_once 'navbar_student.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Bienvenue dans votre espace étudiant</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h3>Mes Formations</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php if (empty($formations)): ?>
                            <li class="list-group-item text-center">Aucun cours disponible</li>
                        <?php else: ?>
                            <?php foreach ($formations as $formation): ?>
                                <?php 
                                    $progressPercentage = $formationController->getStudentProgress($_SESSION['user']['id'], $formation['id']);
                                ?>
                                <li class="list-group-item">
                                    <a href="/Portfolio/e_learning/student/mediateque/formation/<?php echo $formation['id']; ?>">
                                        <?php echo htmlspecialchars_decode($formation['name']); ?>
                                    </a>
                                    <div class="progress mt-2">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $progressPercentage; ?>%;" aria-valuenow="<?php echo $progressPercentage; ?>" aria-valuemin="0" aria-valuemax="100">
                                            <?php echo round($progressPercentage); ?>%
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h3>Mes Quiz</h3>
                </div>
                <div class="card-body">
                    <?php if (empty($quizzes)): ?>
                        <p class="text-center">Aucun quiz disponible.</p>
                    <?php else: ?>
                        <ul class="list-group">
                            <?php foreach ($quizzes as $quiz): ?>
                                <li class="list-group-item">
                                    <h5><?php echo htmlspecialchars($quiz['quiz_name']); ?></h5>
                                    <p><?php echo htmlspecialchars($quiz['description']); ?></p>
                                    <?php if (isset($previousResults[$quiz['id']])): ?>
                                        <p class="text-success">Score précédent : <?php echo $previousResults[$quiz['id']]['score']; ?>%</p>
                                        <a href="/Portfolio/e_learning/student/quiz/take_quiz/<?php echo $quiz['id']; ?>&resume=true" class="btn btn-warning">Recommencer le quiz</a>
                                    <?php else: ?>
                                        <a href="/Portfolio/e_learning/student/quiz/take_quiz/<?php echo $quiz['id']; ?>" class="btn btn-primary">Commencer le quiz</a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../../public/templates/footer.php'; ?>
