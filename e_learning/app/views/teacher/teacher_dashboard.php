<?php
session_start();

require_once '../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$quizController = new \Controllers\QuizController($db);
$examController = new \Controllers\ExamController($db);
$submissionController = new \Controllers\ExamSubmissionController($db);
$messageController = new \Controllers\MessageController($db);
$authController = new \Controllers\AuthController($db);

// Vérifiez que l'utilisateur est connecté et qu'il est un enseignant
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user || $user['role_id'] != 2) { // Supposant que role_id 2 est pour les enseignants
    header('Location: /Portfolio/e_learning/login');
    exit();
}

// Récupérer les données nécessaires pour le tableau de bord
$quizzes = $quizController->getAllQuizzes();
$exams = $examController->getExams();
$submissions = $submissionController->getSubmissionsByExam(0); // Récupère toutes les soumissions
$messages = $messageController->getMessagesByUserId($user['id']);


include_once '../../../public/templates/header.php';
include_once 'navbar_teacher.php';
?>

<div class="container mt-5">
    <h1 class="text-center text-white">Tableau de Bord Enseignant</h1>
    
    <div class="row card-container">
        <div class="col-md-4">
            <div class="card card-primary stats-card">
                <div class="card-body">
                    <h5 style="color: black;"><?php echo count($quizzes); ?></h5>
                    <p class="text-center">Mes Quiz</p>
                    <a href="/Portfolio/e_learning/teacher/quizzes" class="btn btn-info">Gérer les Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stats-card card-success">
                <div class="card-body">
                    <h5 style="color: black;"><?php echo count($exams); ?></h5>
                    <p class="text-center">Mes Examens</p>
                    <a href="/Portfolio/e_learning/teacher/exams" class="btn btn-info">Gérer les Examens</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stats-card card-danger">
                <div class="card-body">
                    <h5 style="color: black;"><?php echo count($submissions); ?></h5>
                    <p class="text-center">Soumissions Récentes</p>
                    <a href="/Portfolio/e_learning/teacher/correction" class="btn btn-info">Voir les Soumissions</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row card-container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Messages Récents
                </div>
                <div class="card-body">
                    <?php if (count($messages) > 0): ?>
                        <ul>
                            <?php foreach ($messages as $message): ?>
                                <li><?php echo htmlspecialchars($message['sender_username']) . ': ' . htmlspecialchars($message['body']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="/Portfolio/e_learning/teacher/messages" class="btn btn-secondary">Voir tous les messages</a>
                    <?php else: ?>
                        <p>Aucun message pour le moment.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../../public/templates/footer.php'; ?>
