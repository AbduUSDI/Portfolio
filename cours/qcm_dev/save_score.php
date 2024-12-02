<?php

require 'fonctions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifier si les questions existent dans la session
    if (!isset($_SESSION['questions']) || empty($_SESSION['questions'])) {
        echo "<div class='container mt-5 text-center'>";
        echo "<h1 class='text-danger'>Erreur</h1>";
        echo "<p class='text-muted'>Aucune question n'a été trouvée dans cette session. Veuillez relancer le quiz.</p>";
        echo "<a href='index.php?page=qcm_dev/index' class='btn btn-primary mt-3'>Retour à l'accueil</a>";
        echo "</div>";
        exit;
    }

    // Récupérer uniquement les questions posées depuis la session
    $questions = $_SESSION['questions'];

    // Récupérer et valider le pseudo
    $pseudo = htmlspecialchars(trim($_POST['pseudo'] ?? ''));
    if (empty($pseudo)) {
        echo "<div class='container mt-5 text-center'>";
        echo "<h1 class='text-danger'>Erreur</h1>";
        echo "<p class='text-muted'>Le pseudo est obligatoire pour enregistrer le score.</p>";
        echo "<a href='index.php?page=qcm_dev/index' class='btn btn-primary mt-3'>Retour à l'accueil</a>";
        echo "</div>";
        exit;
    }

    // Récupérer la catégorie envoyée
    $category = htmlspecialchars(trim($_POST['category'] ?? ''));
    if (empty($category)) {
        echo "<div class='container mt-5 text-center'>";
        echo "<h1 class='text-danger'>Erreur</h1>";
        echo "<p class='text-muted'>La catégorie est manquante. Veuillez relancer le quiz.</p>";
        echo "<a href='index.php?page=qcm_dev/index' class='btn btn-primary mt-3'>Retour à l'accueil</a>";
        echo "</div>";
        exit;
    }

    // Calculer le score
    $score = 0;
    $responses = []; // Stocker les réponses données et les bonnes réponses
    foreach ($questions as $index => $question) {
        $userAnswer = $_POST["question-$index"] ?? null;
        $responses[] = [
            'question' => $question['question'],
            'answers' => $question['answers'],
            'correct' => $question['correct'],
            'userAnswer' => $userAnswer
        ];
        if ($userAnswer !== null && $userAnswer == $question['correct']) {
            $score++;
        }
    }

    // Ajouter le score dans la base de données
    try {
        $leaderboard = new Leaderboard();
        $leaderboard->addScore($pseudo, $score, $category);

        // Afficher le résultat
        echo "<div class='container mt-5 text-center'>";
        echo "<div class='alert alert-success' role='alert'>";
        echo "<h1 class='display-4'>Merci, $pseudo !</h1>";
        echo "<p class='lead'>Votre score de <strong>$score/" . count($questions) . "</strong> dans la catégorie <strong>$category</strong> a été enregistré avec succès.</p>";
        echo "</div>";
        echo "<button id='show-answers' class='btn btn-secondary mt-3'>Voir les réponses</button>";
        echo "<a href='index.php?page=qcm_dev/index' class='btn btn-primary mt-3'>Retour à l'accueil</a>";
        echo "</div>";

        // Générer un tableau HTML avec les réponses
        echo "<div id='answers-container' class='container mt-5' style='display: none;'>";
        foreach ($responses as $index => $response) {
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Question " . ($index + 1) . ": " . htmlspecialchars($response['question']) . "</h5>";
            echo "<ul class='list-group'>";
            foreach ($response['answers'] as $key => $answer) {
                $class = '';
                $badge = '';

                // Déterminer la classe et le badge en fonction des réponses
                if (isset($response['userAnswer']) && $key == $response['userAnswer']) {
                    if ($key == $response['correct']) {
                        $class = 'list-group-item-success';
                    } else {
                        $class = 'list-group-item-danger';
                        $badge = " <span class='badge badge-danger'>Votre réponse</span>";
                    }
                }

                // Ajouter un badge vert pour la bonne réponse
                if ($key == $response['correct'] && (!isset($response['userAnswer']) || $class !== 'list-group-item-success')) {
                    $badge = " <span class='badge badge-success'>Bonne réponse</span>";
                }

                // Afficher l'élément de la liste
                echo "<li class='list-group-item $class'>";
                echo htmlspecialchars($answer) . $badge;
                echo "</li>";
            }

            // Indiquer que la question n'a pas été répondue si aucune réponse n'a été sélectionnée
            if (!isset($response['userAnswer'])) {
                echo "<p class='text-warning mt-2'>Vous n'avez pas répondu à cette question.</p>";
            }

            echo "</ul>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } catch (Exception $e) {
        echo "<div class='container mt-5 text-center'>";
        echo "<div class='alert alert-danger' role='alert'>";
        echo "<h1 class='text-danger'>Erreur</h1>";
        echo "<p class='text-muted'>Une erreur est survenue lors de l'enregistrement du score : " . $e->getMessage() . "</p>";
        echo "</div>";
        echo "<a href='index.php?page=qcm_dev/index' class='btn btn-primary mt-3'>Retour à l'accueil</a>";
        echo "</div>";
        exit;
    }

    // Détruire la session actuelle
    session_unset();  // Supprime les variables de session
    session_destroy(); // Détruit la session
} else {
    echo "<div class='container mt-5 text-center'>";
    echo "<div class='alert alert-warning' role='alert'>";
    echo "<h1 class='text-warning'>Erreur</h1>";
    echo "<p class='text-muted'>Cette page ne peut être accédée directement.</p>";
    echo "</div>";
    echo "<a href='index.php?page=qcm_dev/index' class='btn btn-primary mt-3'>Retour à l'accueil</a>";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat et Réponses</title>
    <!-- Bootstrap pour le style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<script>
    // Afficher les réponses
    document.addEventListener('DOMContentLoaded', () => {
        const showAnswersButton = document.getElementById('show-answers');
        const answersContainer = document.getElementById('answers-container');
        showAnswersButton.addEventListener('click', () => {
            answersContainer.style.display = 'block';
            showAnswersButton.style.display = 'none';
        });
    });
</script>
</body>
</html>
