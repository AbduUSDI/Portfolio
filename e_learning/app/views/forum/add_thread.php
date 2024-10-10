<?php
session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et a un rôle autorisé (1, 2, 3)
$allowedRoles = [1, 2, 3];

if (!isset($_SESSION['user']) || !in_array($_SESSION['user']['role_id'], $allowedRoles)) {
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

require_once '../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$userController = new \Controllers\UserController($db);
$threadController = new \Controllers\ThreadController($db);

// Traitement du formulaire lorsqu'il est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $user_id = $_SESSION['user']['id'];

    // Utilisation de la méthode createThread pour créer un nouveau thread
    if ($threadController->createThread($user_id, $title, $body, 'thread')) {
        // Redirection vers la page d'accueil du forum après la création réussie du thread
        header('Location: /Portfolio/e_learning/forum');
        exit;
    } else {
        // Message d'erreur en cas d'échec de la création du thread
        $error_message = "Erreur lors de la création de la discussion. Veuillez réessayer.";
    }
}

include_once '../../../public/templates/header.php';
include_once 'templates/navbar_forum.php';
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Créer une nouvelle discussion
        </div>
        <div class="card-body">
            <?php if (isset($error_message)): ?>
                <div class="alert" role="alert">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/Portfolio/e_learning/forum/threads/add">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titre de la discussion" required>
                </div>
                <div class="form-group mt-3">
                    <label for="body">Contenu</label>
                    <textarea class="form-control" id="body" name="body" rows="5" placeholder="Contenu de la discussion" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Créer la discussion</button>
            </form>
        </div>
    </div>
</div>

<?php include_once '../../../public/templates/footer.php'; ?>
