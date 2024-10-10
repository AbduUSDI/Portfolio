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

$formationController = new \Controllers\FormationController($db);

// Récupérer les formations de l'étudiant
$formations = $formationController->getFormationsByUser($_SESSION['user']['id']);

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Mes cours assignés</h1>
    <?php if (empty($formations)): ?>
        <p class="text-center">Aucune formation disponible.</p>
    <?php else: ?>
        <div class="row">
            <?php foreach ($formations as $formation): ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <?php echo htmlspecialchars_decode($formation['name']); ?>
                        </div>
                        <div class="card-body">
                            <p><?php echo htmlspecialchars_decode($formation['description']); ?></p>
                            <?php
                            // Calculer la progression de l'étudiant dans la formation
                            $progress = $formationController->getStudentProgress($_SESSION['user']['id'], $formation['id']);
                            ?>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $progress; ?>%;" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100">
                                    <?php echo $progress; ?>%
                                </div>
                            </div>
                            <a href="/Portfolio/e_learning/student/mediateque/formation/<?php echo $formation['id']; ?>" class="btn btn-primary">Voir les cours</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include '../../../../public/templates/footer.php'; ?>
