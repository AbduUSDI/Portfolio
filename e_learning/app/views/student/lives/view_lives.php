<?php
session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;

// Vérification que l'utilisateur est connecté et est un étudiant
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 3) {
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

require_once '../../../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$liveController = new \Controllers\LiveController($db);

// Récupération des sessions live disponibles
$lives = $liveController->getAllLivesStudent();

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>

<div class="container containerr rounded mt-5">
    <h2 class="text-white">Sessions Live Disponibles</h2>

    <?php if (count($lives) > 0): ?>
        <div class="row">
            <?php foreach ($lives as $live): 
                // Calculer la date de fin du live
                $liveStartDate = new DateTime($live['live_date']);
                $liveEndDate = clone $liveStartDate;
                $liveEndDate->modify('+1 hour'); // Ajouter une heure à la date de début
                $now = new DateTime();

                // Vérifier si le live est toujours accessible
                $isLiveAccessible = $now < $liveEndDate;
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="/Portfolio/e_learning/public/uploads/profil_picture/<?php echo htmlspecialchars($live['photo_profil'] ?? '/Portfolio/e_learning/public/image_and_video/jpg/avatar_default.jpg'); ?>" class="img-thumbnail" width="230px" alt="Photo de profil du formateur">
                        <div>
                            <h5 style="color: black;"><?php echo htmlspecialchars($live['title']); ?></h5>
                            <p><?php echo htmlspecialchars($live['description']); ?></p>
                            <p><strong>Date :</strong> <?php echo htmlspecialchars($live['live_date']); ?></p>
                            <p><strong>Formateur :</strong> <?php echo htmlspecialchars($live['prenom']) . ' ' . htmlspecialchars($live['nom']); ?></p>
                            <?php if ($isLiveAccessible): ?>
                                <a class="btn btn-outline-info" href="<?php echo htmlspecialchars($live['link']); ?>" target="_blank">Assister au live</a>
                            <?php else: ?>
                                <button class="btn btn-outline-secondary" disabled>Live Expiré</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-white">Aucune session live disponible pour le moment.</p>
    <?php endif; ?>
</div>

<?php include '../../../../public/templates/footer.php'; ?> 
