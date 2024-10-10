<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$database = new \Database\Database();
$db = $database->getConnection();

// Vérifiez que l'utilisateur est connecté et qu'il est un eleve
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user || $user['role_id'] != 3) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas un eleve
    header('Location: /Portfolio/e_learning/login');
    exit();
}
// Déconnexion si le bouton est cliqué
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    
    $authController = new \Controllers\AuthController($db);
    $authController->logoutInFolder();
}

$messageController = new \Controllers\MessageController($db);

// Récupérer le nombre de messages non lus
$unreadMessagesCount = $messageController->getUnreadMessagesCount($_SESSION['user']['id']);
?>

<nav class="navbar navbar-expand-lg navbar bg">
    <a class="navbar-brand" href="/Portfolio/e_learning/student">Espace Étudiant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/student/mediateque">La médiatèque</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="quizDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Quiz
                </a>
                <ul class="dropdown-menu" aria-labelledby="quizDropdown">
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/student/quiz">Voir les quiz</a></li>
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/student/quiz/scores">Voir les scores des quiz</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="evaluationDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Evaluations
                </a>
                <ul class="dropdown-menu" aria-labelledby="evaluationDropdown">
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/student/exams">Voir les évaluations</a></li>
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/student/correction">Voir les corrections</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Portfolio/e_learning/student/messages">
                    Messagerie
                    <?php if ($unreadMessagesCount > 0): ?>
                        <span class="badge badge-danger"><?php echo $unreadMessagesCount; ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/student/profile">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/student/lives">Les lives</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="forumDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Forum
                </a>
                <ul class="dropdown-menu" aria-labelledby="forumDropdown">
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum/threads/add">Créer une discussion</a></li>
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum/threads">Les discussions</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum/my_threads">Mes publications</a></li>
                    <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum">Page d'accueil</a></li>
                </ul>
            </li>
            <form method="POST" class="d-inline">
                <button type="submit" name="logout" class="btn btn-outline-danger">Déconnexion</button>
            </form>
        </ul>
    </div>
</nav>
