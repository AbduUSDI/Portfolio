<?php

session_start();

// Durée de vie de la session en secondes (30 minutes)
$sessionLifetime = 1800;
// Vérifiez que l'utilisateur est connecté et qu'il est un administrateur
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 1) {
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

$mongoClient = new \Database\MongoDB();
$formationController = new \Controllers\FormationController($db);
$categoryController = new \Controllers\CategoryController($db);
$subCategoryController = new \Controllers\SubCategoryController($db);
$pageController = new \Controllers\PageController($db);
$profileController = new \Controllers\ProfileController($db);
$threadController = new \Controllers\ThreadController($db);
$userController = new \Controllers\UserController($db);
$quizController = new \Controllers\QuizController($db);

$users = $userController->getAllUsers();
$formations = $formationController->getAllFormations();
$pages = $pageController->getAllPages();

// Récupération des statistiques des élèves
$cursusStats = $userController->getCursusValidationStats();

header('Content-Type: text/html; charset=utf-8'); 

include_once '../../../public/templates/header.php'; 
include_once 'navbar_admin.php';
?>

<div class="container mt-5">
    <div class="row">
        <!-- Section des Formations -->
        <div class="col-md-8">
            <h1 class="text-white">Formations</h1>
            <div class="row">
                <?php foreach ($formations as $formation): ?>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-header">
                                <?php echo htmlspecialchars_decode($formation['name']); ?>
                            </div>
                            <div class="card-body">
                                <p><?php echo htmlspecialchars_decode($formation['description']); ?></p>
                                <button class="btn btn-info" data-toggle="modal" data-target="#formationModal<?php echo $formation['id']; ?>">Voir Détails</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="formationModal<?php echo $formation['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="formationModalLabel<?php echo $formation['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="formationModalLabel<?php echo $formation['id']; ?>"><?php echo htmlspecialchars_decode($formation['name']); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php 
                                    $categories = $categoryController->getCategoriesByFormation($formation['id']);
                                    foreach ($categories as $category): 
                                    ?>
                                        <h3 class="h3catego"><?php echo htmlspecialchars_decode($category['title']); ?></h3>
                                        <?php 
                                        $subcategories = $subCategoryController->getSubCategoriesByCategory($category['id']);
                                        foreach ($subcategories as $subcategory): 
                                        ?>
                                            <h4 class="subcategomodal"><?php echo htmlspecialchars_decode($subcategory['title']); ?></h4>
                                            <?php 
                                            $pages = $pageController->getPagesBySubCategory($subcategory['id']);
                                            foreach ($pages as $page): 
                                            ?>
                                                <div class="mt-2">
                                                    <h5 class="pagemodal"><?php echo htmlspecialchars_decode($page['title']); ?></h5>
                                                    <?php
                                                        $video_url = htmlspecialchars_decode($page['video_url']);
                                                        $cleaned_video_url = ('/Portfolio/e_learning'. $video_url);
                                                    ?>
                                                    <div class="flowplayer" data-splash="true"><video data-title="titre" controls="controls" wmode="transparent" type="video/mp4" src="<?php echo $cleaned_video_url . '?autoplay=0'; ?>" height="200" width="100%"></video></div>
                                                    <p>
                                                        Nombre de visionnages : <?php echo htmlspecialchars_decode($page['view_count']); ?>
                                                    </p>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Section des Statistiques des Élèves -->
        <div class="col-md-4">
            <h1 class="text-white">Statistiques des Élèves</h1>
            <div class="row">
                <div class="col-12">
                    <div class="stats-card card-primary text-white mb-3">
                        <h5>Total des étudiants</h5>
                        <p><?php echo $cursusStats['total']; ?> étudiants inscrits.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="stats-card card-success text-white mb-3">
                        <h5>Cursus Validé</h5>
                        <p><?php echo $cursusStats['cursus_valide']; ?> étudiants ayant validé le cursus.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="stats-card card-danger text-white mb-3">
                        <h5>Cursus Non Validé</h5>
                        <p><?php echo $cursusStats['cursus_non_valide']; ?> étudiants n'ayant pas validé le cursus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../../../public/templates/footer.php'; ?>
