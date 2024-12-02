<?php
// Inclure la navigation et la classe Questions
include 'templates/nav.php';
require 'fonctions.php';

$questionHandler = new Questions();
$questions = $questionHandler->getQuestionQCM1();

shuffle($questions);
$selectedQuestions = array_slice($questions, 0, 20);

$_SESSION['questions'] = $selectedQuestions; // Stocker les questions dans la session.

// Définir la catégorie pour ce QCM
$category = "Dates"; // Modifier ici selon la catégorie du QCM
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM - Dates clés</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="/Portfolio/cours/assets/css/exercice.css"/>
</head>
<body>
<div class="container mt-5">
    <?php include_once 'retour.php'; ?>
    <h1 class="text-center mb-4 text-primary">QCM - Dates clés</h1>
    <form action="index.php?page=qcm_dev/save_score" method="POST" id="qcm-form">
        <div class="row">
            <?php foreach ($selectedQuestions as $index => $question): ?>
                <div class="col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0"><?= ($index + 1) . ". " . $question['question'] ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($question['answers'] as $answerIndex => $answer): ?>
                                    <div class="col-md-6">
                                        <div class="form-check p-2">
                                            <input 
                                                type="radio"
                                                name="question-<?= $index ?>" 
                                                value="<?= $answerIndex ?>" 
                                                id="q<?= $index ?>a<?= $answerIndex ?>" 
                                                class="form-check-input styled-checkbox"
                                                required
                                            >
                                            <label class="form-check-label d-flex align-items-center" for="q<?= $index ?>a<?= $answerIndex ?>">
                                                <span class="checkbox-custom"></span>
                                                <?= $answer ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Champ pour le pseudo -->
        <div class="mb-4">
            <label for="pseudo" class="form-label">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" class="form-control rounded-pill shadow-sm" required>
        </div>

        <!-- Champ caché pour la catégorie -->
        <input type="hidden" name="category" value="<?= $category ?>">

        <button type="submit" class="btn btn-success w-100 shadow-lg">Valider le QCM</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
