<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation AJAX - QCM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php' ?>
    <h1 class="text-center mb-5">Évaluation Complète AJAX (QCM)</h1>
    <p class="text-center">Répondez aux questions ci-dessous pour évaluer votre compréhension d'AJAX. Cliquez sur "Soumettre" pour obtenir votre score.</p>

    <div id="evaluation" class="mb-5">
        <!-- Formulaire d'évaluation AJAX -->
        <form id="evaluationForm" onsubmit="return calculerScore()" class="mb-4">
            <!-- Questions seront ajoutées ici par JavaScript -->
            <div id="questions-container"></div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>

    <div id="score-result" class="mt-3"></div>
</div>

<script src="evaluation_ajax.js"></script>
</body>
</html>
