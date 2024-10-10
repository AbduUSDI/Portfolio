<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$messageController = new \Controllers\MessageController($db);
$authController = new \Controllers\AuthController($db);

// Vérifiez que l'utilisateur est connecté
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$user) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location: /Portfolio/e_learning/login');
    exit();
}

// Récupérer les messages de l'utilisateur
$messages = $messageController->getMessagesByUserId($user['id']);
$unreadCount = $messageController->getUnreadMessagesCount($user['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mark_as_read'])) {
        $messageController->markAllMessagesAsRead($user['id']);
        header('Location: /Portfolio/e_learning/teacher/messages');
        exit();
    }

    if (isset($_POST['delete'])) {
        $messageId = $_POST['message_id'];
        $messageController->deleteMessage($messageId);
        header('Location: /Portfolio/e_learning/teacher/messages');
        exit();
    }
}

include_once '../../../public/templates/header.php';
include_once 'navbar_teacher.php';
?>
<div class="container mt-5">
    <h1 class="text-white">Mes Messages</h1>

    <?php if ($unreadCount > 0): ?>
        <form method="POST" class="mb-3">
            <button type="submit" name="mark_as_read" class="btn btn-primary">Marquer tous comme lus (<?php echo $unreadCount; ?>)</button>
        </form>
    <?php endif; ?>

    <?php if (count($messages) > 0): ?>
        <?php foreach ($messages as $message): ?>
            <div class="message-card <?php echo $message['read_status'] == 0 ? 'bg-light' : ''; ?>">
                <div class="message-sender">De : <?php echo htmlspecialchars($message['sender_username']); ?></div>
                <div class="message-content"><?php echo htmlspecialchars($message['body']); ?></div>
                <div class="message-date">Reçu le : <?php echo htmlspecialchars($message['created_at']); ?></div>
                <?php if ($message['read_status'] == 0): ?>
                    <span class="badge badge-primary">Non lu</span>
                <?php endif; ?>
            </div>
            <form method="POST" class="mb-3">
                <input type="hidden" name="message_id" value="<?php echo $message['id']; ?>">
                <button type="submit" class="btn btn-outline-danger" name="delete">Supprimer</button>
            </form>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-white">Vous n'avez aucun message.</p>
    <?php endif; ?>
</div>

<?php include '../../../public/templates/footer.php'; ?>
