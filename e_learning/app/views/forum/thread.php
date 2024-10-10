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
$profileController = new \Controllers\ProfileController($db);
$friendController = new \Controllers\FriendController($db);
$messageController = new \Controllers\MessageController($db);
$mongoClient = new \Database\MongoDBForum();

$threadId = $_GET['id'];
$currentThread = $threadController->getThreadById($threadId);
$responses = $threadController->getResponsesByThreadId($threadId);

// Récupérer les profils des utilisateurs pour afficher le nom et prénom
$userProfiles = [];
$userProfiles[$currentThread['user_id']] = $profileController->getProfileByUserId($currentThread['user_id']);
foreach ($responses as $response) {
    $userId = $response['user_id'];
    if (!isset($userProfiles[$userId])) {
        $userProfiles[$userId] = $profileController->getProfileByUserId($userId);
    }
}

// Mise à jour des vues dans MongoDB
$viewsCollection = $mongoClient->getCollection('views');
$viewsCollection->updateOne(
    ['thread_id' => $threadId],
    ['$inc' => ['views' => 1]],
    ['upsert' => true]
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $body = $_POST['body'];
    $userId = $_SESSION['user']['id'];
    if ($threadController->createResponse($threadId, $userId, $body)) {
        header("Location: /Portfolio/e_learning/forum/thread/$threadId");
        exit;
    } else {
        $error = "Erreur lors de l'ajout de la réponse. Veuillez réessayer.";
    }
}

include_once '../../../public/templates/header.php';
include_once 'templates/navbar_forum.php';
?>

<div class="container mt-4">
    <h1 class="my-4"><?php echo htmlspecialchars($currentThread['title']); ?></h1>
    <div class="card">
        <div class="card-header">
            Posté par : 
            <a href="#" class="user-profile-link" data-toggle="modal" data-target="#userProfileModal" data-user-id="<?php echo $currentThread['user_id']; ?>">
                <?php echo htmlspecialchars($userProfiles[$currentThread['user_id']]['prenom'] . ' ' . $userProfiles[$currentThread['user_id']]['nom']); ?>
            </a>
        </div>
        <div class="mt-5 zero card-body">
            <p><?php echo htmlspecialchars($currentThread['body']); ?></p>
            <small class="text-muted">Le <?php echo $currentThread['created_at']; ?></small>

            <h2 class="my-4 text-dark">Réponses</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <ul class="list-group mb-4">
                <?php foreach ($responses as $response): ?>
                    <li class="list-group-item">
                        <p><?php echo htmlspecialchars($response['body'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <small class="text-muted">
                            Par 
                            <a href="#" class="user-profile-link" data-toggle="modal" data-target="#userProfileModal" data-user-id="<?php echo $response['user_id']; ?>">
                                <?php echo htmlspecialchars($userProfiles[$response['user_id']]['prenom'] . ' ' . $userProfiles[$response['user_id']]['nom']); ?>
                            </a> 
                            le <?php echo htmlspecialchars($response['created_at'], ENT_QUOTES, 'UTF-8'); ?>
                        </small>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h2 class="my-4 text-dark">Ajouter une réponse</h2>
            <form action="/Portfolio/e_learning/forum/thread/<?php echo $threadId; ?>" method="post">
                <div class="form-group">
                    <label for="body">Votre réponse</label>
                    <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publier</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Profil Utilisateur -->
<div class="modal fade" id="userProfileModal" tabindex="-1" role="dialog" aria-labelledby="userProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userProfileModalLabel">Profil de l'utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="user-profile-content">
                    <!-- Contenu du profil chargé via AJAX -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" id="addFriendButton">Ajouter en ami</button>
                <button type="button" class="btn btn-success" id="sendMessageButton">Envoyer un message</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var profileLinks = document.querySelectorAll('.user-profile-link');

    profileLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var userId = this.getAttribute('data-user-id');

            fetch('/Portfolio/e_learning/forum/profile/' + userId)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('user-profile-content').innerHTML = data;
                });

            // Ajouter les actions aux boutons
            document.getElementById('addFriendButton').onclick = function() {
    fetch('/Portfolio/e_learning/forum/send_friend', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'receiver_id=' + userId
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    });
};

document.getElementById('sendMessageButton').onclick = function() {
    var message = prompt('Entrez votre message :');
    if (message) {
        fetch('/Portfolio/e_learning/forum/message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'receiver_id=' + encodeURIComponent(userId) + '&message=' + encodeURIComponent(message)
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        });
    }
};

        });
    });
});
</script>

<?php include_once '../../../public/templates/footer.php'; ?>
