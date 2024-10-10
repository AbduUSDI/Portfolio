<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$database = new \Database\Database();
$db = $database->getConnection();

// Vérifiez que l'utilisateur est connecté et qu'il est un administrateur
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user || $user['role_id'] != 1) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas un administrateur
    header('Location: /Portfolio/e_learning/login');
    exit();
}
// Déconnexion si le bouton est cliqué
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    
    $authController = new \Controllers\AuthController($db);
    $authController->logoutInFolder();
}
?>

<nav class="navbar navbar-expand-lg navbar bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Portfolio/e_learning/admin">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/Portfolio/e_learning/admin/users">Gérer les utilisateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Portfolio/e_learning/admin/teachers">Gérer les enseignants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Portfolio/e_learning/admin/students">Gérer les étudiants</a>
        </li>
        <!-- Dropdown for Quiz and Exams -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEvaluations" role="button" data-toggle="dropdown" aria-expanded="false">
            Les évaluations
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownEvaluations">
            <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/admin/quizzes">Gérer les quiz</a></li>
            <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/admin/exams">Gérer les examens</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Portfolio/e_learning/admin/mediateque">Gérer la médiathèque</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Forum
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum/threads/add">Créer une discussion</a></li>
            <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum/threads">Les discussions</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/my_threads">Mes publications</a></li>
            <li><a class="dropdown-item text-dark" href="/Portfolio/e_learning/forum">Accueil forum</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Portfolio/e_learning/admin/rules">Gérer les règles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Portfolio/e_learning/admin/profile">Mon profil</a>
        </li>
      </ul>
      <form method="POST" class="d-inline">
        <button type="submit" name="logout" class="btn btn-outline-danger">Déconnexion</button>
      </form>
    </div>
  </div>
</nav>
