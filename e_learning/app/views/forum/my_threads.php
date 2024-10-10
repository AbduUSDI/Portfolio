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
$mongoClient = new \Database\MongoDBForum();

$threadController = new \Controllers\ThreadController($db);

$userId = $_SESSION['user']['id']; // ID de l'utilisateur connecté
$userThreads = $threadController->getThreadsByUserId($userId);

// Gestion des actions CRUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $result = false;
        $message = '';
        $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

        try {
            switch ($action) {
                case 'update_thread':
                    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
                    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);
                
                    if ($id && $title && $body) {
                        $result = $threadController->updatePost($id, $title, $body);
                        $message = $result ? "Discussion mise à jour avec succès." : "Erreur lors de la mise à jour de la discussion.";
                    } else {
                        $message = "Tous les champs sont requis pour mettre à jour une discussion.";
                    }
                    break;

                case 'delete_thread':
                    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
                    
                    if ($id) {
                        $result = $threadController->deletePost($id) && $mongoClient->deleteThread($id);
                        $message = $result ? "Discussion supprimée avec succès." : "Erreur lors de la suppression de la discussion.";
                    } else {
                        $message = "ID de la discussion invalide pour la suppression.";
                    }
                    break;

                default:
                    $message = "Action non reconnue.";
            }
        } catch (Exception $e) {
            $message = "Une erreur est survenue : " . $e->getMessage();
            error_log($e->getMessage());
        }

        $_SESSION['message'] = $message;
        $_SESSION['message_type'] = $result ? 'success' : 'danger';
        
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}

include '../../../public/templates/header.php';
include 'templates/navbar_forum.php';
?>

<div class="container mt-5">
    <h1>Mes Threads</h1>
    <?php if (empty($userThreads)): ?>
        <p class="text-white">Vous n'avez pas encore créé de thread.</p>
    <?php else: ?>
        <a href="/Portfolio/e_learning/forum/threads/add" class="btn btn-info mt-3">Créer un nouveau thread</a>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($userThreads as $thread): ?>
                <tr>
                    <td><?php echo htmlspecialchars($thread['title']); ?></td>
                    <td><?php echo $thread['created_at']; ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm btn-modifier" type="button" data-toggle="collapse" data-target="#editThreadForm<?php echo $thread['id']; ?>" aria-expanded="false" aria-controls="editThreadForm<?php echo $thread['id']; ?>">
                            Modifier
                        </button>
                        <form method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce thread ?');">
                            <input type="hidden" name="action" value="delete_thread">
                            <input type="hidden" name="id" value="<?php echo $thread['id']; ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="collapse" id="editThreadForm<?php echo $thread['id']; ?>">
                            <form action="/Portfolio/e_learning/forum/my_threads" method="POST">
                                <input type="hidden" name="action" value="update_thread">
                                <input type="hidden" name="id" value="<?php echo $thread['id']; ?>">
                                <div class="form-group">
                                    <label for="title<?php echo $thread['id']; ?>">Titre</label>
                                    <input type="text" class="form-control" id="title<?php echo $thread['id']; ?>" name="title" value="<?php echo htmlspecialchars($thread['title']); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="body<?php echo $thread['id']; ?>">Contenu</label>
                                    <textarea class="form-control" id="body<?php echo $thread['id']; ?>" name="body" required><?php echo htmlspecialchars($thread['body']); ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Enregistrer les modifications</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    <?php endif; ?>
</div>

<?php include '../../../public/templates/footer.php'; ?>
