<?php
// Inclure les fonctions pour le leaderboard
require 'fonctions.php';
$leaderboard = new Leaderboard();
$topScores = $leaderboard->getTopScores(10); // Top 10 des scores
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Liste des Cours</title>
    <!-- Bootstrap pour le style et la mise en forme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>

<?php
// Inclure le template de la navigation
include 'templates/nav.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Bienvenue sur les Quiz de Développeur</h1>
    <p class="text-center">Testez vos connaissances en développement web et web mobile avec nos quiz interactifs ! Découvrez les notions essentielles pour exceller dans ce domaine passionnant.</p>

    <div class="row mt-4">
        <!-- Carte pour le premier quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les dates clés</h5>
                    <p class="card-text">Testez votre mémoire sur les dates importantes dans l'histoire du développement web. 
                    Ce quiz couvre des moments marquants, comme la création des premiers navigateurs, l'émergence des frameworks modernes, et plus encore.</p>
                    <a href="index.php?page=qcm_dev/qcm1" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>
        <!-- Carte pour le deuxième quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les définitions clés</h5>
                    <p class="card-text">Maîtrisez-vous le jargon du développement web ? Ce quiz vous aidera à comprendre et à réviser des termes essentiels comme MVC, API, responsive design, et bien d'autres.</p>
                    <a href="index.php?page=qcm_dev/qcm2" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>
        <!-- Carte pour le troisième quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les méthodologies</h5>
                    <p class="card-text">Découvrez votre niveau de connaissance des méthodologies agiles, des principes de développement comme SCRUM, Kanban, et des bonnes pratiques pour gérer efficacement vos projets.</p>
                    <a href="index.php?page=qcm_dev/qcm3" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>
        <!-- Carte pour le quatrième quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les Techniques Utilisées</h5>
                    <p class="card-text">
                    Explorez vos connaissances sur les langages, frameworks, bibliothèques, et outils essentiels en développement web. 
                    Ce quiz couvre HTML5, CSS3, JavaScript ES6+, ainsi que des frameworks comme Bootstrap et React.
                    </p>
                    <a href="index.php?page=qcm_dev/qcm4" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>
        <!-- Carte pour le cinquième quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les Points techniques approfondis</h5>
                    <p class="card-text">
                        Testez vos connaissances sur des aspects avancés du développement web, 
                        notamment la sécurité avec les attaques XSS, CSRF et HTTPS, ainsi que le hash des mots de passe. 
                        Évaluez votre maîtrise des standards d'accessibilité (WCAG) et des bonnes pratiques 
                        d'optimisation des performances, telles que le lazy loading et la mise en cache.
                    </p>
                    <a href="index.php?page=qcm_dev/qcm5" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>

        <!-- Carte pour le sixième quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les Outils à maîtriser</h5>
                    <p class="card-text">
                        Découvrez votre niveau de maîtrise des outils essentiels pour le développement web. 
                        Explorez des questions sur des éditeurs de code comme VS Code, 
                        des outils de design comme Figma, et des outils de test d'API comme Postman. 
                        Apprenez également à utiliser efficacement Chrome DevTools et 
                        les plateformes de collaboration comme Trello et Jira.
                    </p>
                    <a href="index.php?page=qcm_dev/qcm6" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>

        <!-- Carte pour le septième quiz -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">QCM sur les Bonnes pratiques</h5>
                    <p class="card-text">
                        Testez vos connaissances sur les principes fondamentaux comme KISS, DRY, et YAGNI, 
                        ainsi que sur des méthodologies clés comme SCRUM, Kanban et TDD. 
                        Apprenez comment structurer des projets en suivant des modèles comme MVC et SOLID, 
                        tout en appliquant des standards de sécurité et de documentation.
                    </p>
                    <a href="index.php?page=qcm_dev/qcm7" class="btn btn-primary">Commencer le Quiz</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2 class="text-center">Classement</h2>
    <ul class="list-group">
        <?php if (!empty($topScores)): ?>
            <?php foreach ($topScores as $score): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><?= htmlspecialchars($score['pseudo']) ?></span>
                    <span><?= $score['score'] ?>/20</span>
                    <small class="text-muted"><?= $score['created_at'] ?></small>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item">Aucun score enregistré pour l'instant.</li>
        <?php endif; ?>
    </ul>
</div>

<!-- Bootstrap JS pour les fonctionnalités responsive -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
