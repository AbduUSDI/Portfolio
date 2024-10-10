<?php
session_start();

require_once '../../../../vendor/autoload.php';

if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 2) {
    echo 'Accès non autorisé';
    exit;
}

if (isset($_GET['user_id'])) {
    $userId = intval($_GET['user_id']);

    $database = new \Database\Database();
    $db = $database->getConnection();

    $profileController = new \Controllers\ProfileController($db);
    $profile = $profileController->getProfileByUserId($userId);

    if ($profile) {
        ?>
        <div>
            <p><strong>Prénom:</strong> <?php echo htmlspecialchars($profile['prenom']); ?></p>
            <p><strong>Nom:</strong> <?php echo htmlspecialchars($profile['nom']); ?></p>
            <p><strong>Date de naissance:</strong> <?php echo htmlspecialchars($profile['date_naissance']); ?></p>
            <p><strong>Biographie:</strong> <?php echo nl2br(htmlspecialchars($profile['biographie'])); ?></p>
            <?php if (!empty($profile['photo_profil'])): ?>
                <p><strong>Photo de profil:</strong><br>
                <img src="/Portfolio/e_learning/public/uploads/profil_picture/<?php echo htmlspecialchars($profile['photo_profil']); ?>" alt="Photo de profil" style="max-width: 100px;">
                </p>
            <?php endif; ?>
        </div>
        <?php
    } else {
        echo 'Profil non trouvé';
    }
} else {
    echo 'Aucun ID utilisateur fourni';
}