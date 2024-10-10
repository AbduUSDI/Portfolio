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

// Récupération de l'ID du quiz depuis l'URL
$quizId = isset($_GET['quiz_id']) ? $_GET['quiz_id'] : null;

if (!$quizId) {
    echo "Quiz non spécifié.";
    exit;
}

// Récupération des détails du quiz et des questions
$quiz = $quizController->getQuizById($quizId);
$questions = $quizController->getQuestionsByQuiz($quizId);

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userAnswers = $_POST['answers'] ?? [];
    $totalQuestions = count($questions);
    $score = 0;

    foreach ($questions as $question) {
        $correctAnswers = [];
        $selectedAnswers = $userAnswers[$question['id']] ?? [];

        // Récupération des bonnes réponses pour cette question
        foreach ($quizController->getAnswersByQuestion($question['id']) as $answer) {
            if ($answer['is_correct']) {
                $correctAnswers[] = $answer['id'];
            }
        }

        // Vérification si les réponses cochées sont correctes
        $correctSelected = !array_diff($selectedAnswers, $correctAnswers);
        $incorrectSelected = !array_diff($correctAnswers, $selectedAnswers);

        if ($correctSelected && $incorrectSelected) {
            $score++;
        }
    }

    // Calcul du score
    $scorePercentage = ($score / $totalQuestions) * 100;

    // Sauvegarde du score dans la table quiz_results pour qu'il soit affiché plus tard sur le dashboard et l'espace enseignant
    $quizController->saveUserScore($quizId, $_SESSION['user']['id'], $scorePercentage);

    echo "<div class='containerr mt-5'><h3 class='text-white'>Votre score: " . $score . " / " . $totalQuestions . " points (" . round($scorePercentage, 2) . "%)</h3></div>";
}
?>

<div class="container mt-5">
    <h1 class="text-center mb-4"><?php echo htmlspecialchars($quiz['quiz_name']); ?></h1>
    <form method="post">
        <?php foreach ($questions as $question): ?>
            <div class="card mb-4">
                <div class="card-header">
                    <?php echo htmlspecialchars($question['question_text']); ?>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($quizController->getAnswersByQuestion($question['id']) as $answer): ?>
                            <li class="list-group-item">
                                <label>
                                    <input type="checkbox" name="answers[<?php echo $question['id']; ?>][]" value="<?php echo $answer['id']; ?>">
                                    <?php echo htmlspecialchars($answer['answer_text']); ?>
                                </label>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
    </form>
</div>

<?php include '../../../../public/templates/footer.php'; ?>
