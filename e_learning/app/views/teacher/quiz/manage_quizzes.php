<?php

session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 2) {
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
$formationController = new \Controllers\FormationController($db);

// Gestion des actions CRUD
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    switch ($action) {
        case 'addQuiz':
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $formation_id = $_POST['formation_id'];
            $questions = $_POST['questions'] ?? [];
            $quizController->createQuizWithQuestions($titre, $description, $formation_id, $questions);
            break;
        case 'editQuiz':
            $id = $_POST['id'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $formation_id = $_POST['formation_id'];
            $questions = $_POST['questions'] ?? [];
            $quizController->updateQuizWithQuestions($id, $titre, $description, $formation_id, $questions);
            break;
        case 'deleteQuiz':
            $id = $_POST['id'];
            $quizController->deleteQuiz($id);
            break;
    }
}

$quizzes = $quizController->getAllQuizzes();
$courses = $formationController->getAllFormations();

include_once '../../../../public/templates/header.php';
include_once '../navbar_teacher.php';
?>

<h1 class="my-4 text-white">Gestion des Quiz</h1>
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-info" data-toggle="modal" data-target="#addQuizModal">Ajouter un nouveau quiz</button>
    </div>
    
    <div class="row">
        <?php foreach ($quizzes as $quiz): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title" style="color: black;"><?php echo htmlspecialchars_decode($quiz['quiz_name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars_decode($quiz['description']); ?></p>
                        <button class="btn btn-warning btn-edit-quiz" data-id="<?php echo $quiz['id']; ?>" data-toggle="modal" data-target="#editQuizModal">Modifier</button>
                        <button class="btn btn-danger btn-delete-quiz" data-id="<?php echo $quiz['id']; ?>" data-toggle="modal" data-target="#deleteQuizModal">Supprimer</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal pour ajouter un quiz -->
<div class="modal fade" id="addQuizModal" tabindex="-1" aria-labelledby="addQuizModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQuizModalLabel">Ajouter un nouveau quiz</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quizForm" method="post" action="">
                    <input type="hidden" name="action" value="addQuiz">
                    <div class="mb-3">
                        <label for="quizTitle" class="form-label">Titre du quiz</label>
                        <input type="text" class="form-control" id="quizTitle" name="titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description du quiz</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formation_id" class="form-label">Sélectionnez un cours</label>
                        <select class="form-control" id="formation_id" name="formation_id" required>
                            <?php foreach ($courses as $course): ?>
                                <option value="<?php echo $course['id']; ?>"><?php echo $course['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div id="questionsContainer">
                        <div class="question-item">
                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <input type="text" class="form-control" name="questions[0][question_text]" required>
                            </div>
                            <div class="answersContainer">
                                <div class="mb-3">
                                    <label class="form-label">Réponse</label>
                                    <input type="text" class="form-control" name="questions[0][answers][0][answer_text]" required>
                                    <input type="checkbox" name="questions[0][answers][0][is_correct]" value="1"> Correct
                                </div>
                            </div>
                            <button type="button" class="btn btn-success add-answer-btn">Ajouter une réponse</button>
                        </div>
                    </div>
                    <button type="button" id="addQuestionButton" class="btn btn-secondary mt-3">Ajouter une question</button>
                    <button type="submit" class="btn btn-primary mt-3">Ajouter le quiz</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour modifier un quiz -->
<div class="modal fade" id="editQuizModal" tabindex="-1" aria-labelledby="editQuizModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editQuizModalLabel">Modifier le quiz</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <input type="hidden" name="action" value="editQuiz">
                    <input type="hidden" id="editQuizId" name="id">
                    <div class="mb-3">
                        <label for="editQuizTitle" class="form-label">Titre du quiz</label>
                        <input type="text" class="form-control" id="editQuizTitle" name="titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="editQuizDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editQuizDescription" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editFormationId" class="form-label">Sélectionnez un cours</label>
                        <select class="form-control" id="editFormationId" name="formation_id" required>
                            <?php foreach ($courses as $course): ?>
                                <option value="<?php echo $course['id']; ?>"><?php echo $course['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div id="editQuestionsContainer"></div>
                    <button type="button" id="editAddQuestionButton" class="btn btn-secondary mt-3">Ajouter une question</button>
                    <button type="submit" class="btn btn-primary mt-3">Modifier le quiz</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour supprimer un quiz -->
<div class="modal fade" id="deleteQuizModal" tabindex="-1" aria-labelledby="deleteQuizModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteQuizModalLabel">Supprimer le quiz</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer ce quiz ?</p>
                <form method="post">
                    <input type="hidden" name="action" value="deleteQuiz">
                    <input type="hidden" id="deleteQuizId" name="id">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let questionCount = 1;

    document.getElementById('addQuestionButton').addEventListener('click', function () {
        const questionItem = document.createElement('div');
        questionItem.classList.add('question-item');
        questionItem.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Question</label>
                <input type="text" class="form-control" name="questions[${questionCount}][question_text]" required>
            </div>
            <div class="answersContainer">
                <div class="mb-3">
                    <label class="form-label">Réponse</label>
                    <input type="text" class="form-control" name="questions[${questionCount}][answers][0][answer_text]" required>
                    <input type="checkbox" name="questions[${questionCount}][answers][0][is_correct]" value="1"> Correct
                </div>
            </div>
            <button type="button" class="btn btn-success add-answer-btn">Ajouter une réponse</button>
        `;
        document.getElementById('questionsContainer').appendChild(questionItem);
        questionCount++;
    });

    document.getElementById('questionsContainer').addEventListener('click', function (e) {
        if (e.target.classList.contains('add-answer-btn')) {
            const answersContainer = e.target.previousElementSibling;
            const answerCount = answersContainer.querySelectorAll('.mb-3').length;
            const questionIndex = Array.from(answersContainer.closest('.question-item').parentNode.children).indexOf(answersContainer.closest('.question-item'));
            const answerHTML = `
                <div class="mb-3">
                    <label class="form-label">Réponse</label>
                    <input type="text" class="form-control" name="questions[${questionIndex}][answers][${answerCount}][answer_text]" required>
                    <input type="checkbox" name="questions[${questionIndex}][answers][${answerCount}][is_correct]" value="1"> Correct
                </div>
            `;
            answersContainer.insertAdjacentHTML('beforeend', answerHTML);
        }
    });

    // Gestion de la modification de quiz
    document.querySelectorAll('.btn-edit-quiz').forEach(button => {
        button.addEventListener('click', function () {
            const quizId = this.getAttribute('data-id');
            document.getElementById('editQuizId').value = quizId;
            
            // Adaptez les sélecteurs ici pour cibler les bons éléments dans les cartes
            const quizCard = this.closest('.card');
            const quizName = quizCard.querySelector('.card-title').innerText;
            const description = quizCard.querySelector('.card-text').innerText;
            document.getElementById('editQuizTitle').value = quizName;
            document.getElementById('editQuizDescription').value = description;

            // Charger les questions existantes
            fetch(`/Portfolio/e_learning/teacher/quizzes/get_questions/${quizId}`)
                .then(response => response.json())
                .then(data => {
                    const editQuestionsContainer = document.getElementById('editQuestionsContainer');
                    editQuestionsContainer.innerHTML = '';
                    data.questions.forEach((question, index) => {
                        const questionElement = document.createElement('div');
                        questionElement.classList.add('question-item');
                        questionElement.innerHTML = `
                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <input type="hidden" name="questions[${index}][id]" value="${question.id}">
                                <input type="text" class="form-control" name="questions[${index}][question_text]" value="${question.question_text}" required>
                            </div>
                            <div class="answersContainer">
                                ${question.answers.map((answer, answerIndex) => `
                                    <div class="mb-3">
                                        <label class="form-label">Réponse</label>
                                        <input type="hidden" name="questions[${index}][answers][${answerIndex}][id]" value="${answer.id}">
                                        <input type="text" class="form-control" name="questions[${index}][answers][${answerIndex}][answer_text]" value="${answer.answer_text}" required>
                                        <input type="checkbox" name="questions[${index}][answers][${answerIndex}][is_correct]" ${answer.is_correct ? 'checked' : ''} value="1"> Correct
                                    </div>
                                `).join('')}
                            </div>
                            <button type="button" class="btn btn-success add-answer-btn">Ajouter une réponse</button>
                        `;
                        editQuestionsContainer.appendChild(questionElement);
                    });
                });
        });
    });

    document.getElementById('editAddQuestionButton').addEventListener('click', function () {
        const editQuestionsContainer = document.getElementById('editQuestionsContainer');
        const questionCount = editQuestionsContainer.querySelectorAll('.question-item').length;
        const questionItem = document.createElement('div');
        questionItem.classList.add('question-item');
        questionItem.innerHTML = `
            <div class="mb-3">
                <label class="form-label">Question</label>
                <input type="text" class="form-control" name="questions[${questionCount}][question_text]" required>
            </div>
            <div class="answersContainer">
                <div class="mb-3">
                    <label class="form-label">Réponse</label>
                    <input type="text" class="form-control" name="questions[${questionCount}][answers][0][answer_text]" required>
                    <input type="checkbox" name="questions[${questionCount}][answers][0][is_correct]" value="1"> Correct
                </div>
            </div>
            <button type="button" class="btn btn-success add-answer-btn">Ajouter une réponse</button>
        `;
        editQuestionsContainer.appendChild(questionItem);
    });

    document.getElementById('editQuestionsContainer').addEventListener('click', function (e) {
        if (e.target.classList.contains('add-answer-btn')) {
            const answersContainer = e.target.previousElementSibling;
            const answerCount = answersContainer.querySelectorAll('.mb-3').length;
            const questionIndex = Array.from(answersContainer.closest('.question-item').parentNode.children).indexOf(answersContainer.closest('.question-item'));
            const answerHTML = `
                <div class="mb-3">
                    <label class="form-label">Réponse</label>
                    <input type="text" class="form-control" name="questions[${questionIndex}][answers][${answerCount}][answer_text]" required>
                    <input type="checkbox" name="questions[${questionIndex}][answers][${answerCount}][is_correct]" value="1"> Correct
                </div>
            `;
            answersContainer.insertAdjacentHTML('beforeend', answerHTML);
        }
    });

    document.querySelectorAll('.btn-delete-quiz').forEach(button => {
        button.addEventListener('click', function () {
            const quizId = this.getAttribute('data-id');
            document.getElementById('deleteQuizId').value = quizId;
        });
    });
});

</script>

<?php include '../../../../public/templates/footer.php'; ?>