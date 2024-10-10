<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$database = new \Database\Database();
$db = $database->getConnection();

// Vérifiez que l'utilisateur est connecté et qu'il est un formateur
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user || $user['role_id'] != 2) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas un formateur
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
    <a class="navbar-brand" href="/Portfolio/e_learning/teacher">Espace enseignant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/teacher/profile">Mon profil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="evaluationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Évaluations
                </a>
                <div class="dropdown-menu" aria-labelledby="evaluationDropdown">
                    <a class="dropdown-item text-dark" href="/Portfolio/e_learning/teacher/exams">Gérer les examens</a>
                    <a class="dropdown-item text-dark" href="/Portfolio/e_learning/teacher/correction">Corriger les examens</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/teacher/students">Gérer les élèves</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/teacher/quizzes">Gérer les quiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/e_learning/teacher/lives">Gérer les lives</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Portfolio/e_learning/teacher/messages">
                    Messagerie
                    <?php if ($unreadMessagesCount > 0): ?>
                        <span class="badge badge-danger"><?php echo $unreadMessagesCount; ?></span>
                    <?php endif; ?>
                </a>
            </li>
                <form method="POST" class="form-inline ml-auto">
                    <button type="submit" name="logout" class="btn btn-outline-danger">Déconnexion</button>
                </form>
            </li>
        </ul>
        
    </div>
</nav>