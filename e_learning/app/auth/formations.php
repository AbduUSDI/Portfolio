<?php
require_once '../../vendor/autoload.php';

$database = new \Database\Database();
$db = $database->getConnection();

$formationController = new \Controllers\FormationController($db);
$formations = $formationController->getAllFormations();
include_once '../../public/templates/header_visitor.php';
include_once '../../public/templates/navbar.php';
?>
    <!-- Page Content -->
    <div class="container containerr rounded mt-5">
        <h1 class="text-white">Voici la listes de toutes nos formations disponible</h1>
        <div class="card">
        <img src="/Portfolio/e_learning/public/image_and_video/webp/ressource.webp" class="card-img-top" alt="Image pour la liste des formations" width="150" height="500">
        <?php foreach ($formations as $formation): ?>
        <div class="card col-md-6">
            <div class="card-header bg-dark mb-3" style="color: white;"><?php echo htmlspecialchars_decode($formation['name']); ?></div>
            <div class="card-body"><p><?php echo htmlspecialchars_decode($formation['description']); ?></p></div>
        <?php endforeach ?>
        </div>
    </div>
    </div>

    <?php
include_once '../../public/templates/footer_visitor.php';
?>
