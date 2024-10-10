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
$categoryController = new \Controllers\CategoryController($db);
$subCategoryController = new \Controllers\SubCategoryController($db);
$pageController = new \Controllers\PageController($db);

// Récupérer l'ID de la formation depuis l'URL
$formationId = isset($_GET['formation_id']) ? $_GET['formation_id'] : null;

if (!$formationId) {
    echo "Formation non spécifiée.";
    exit;
}

// Récupérer les détails de la formation
$formation = $formationController->getFormationById($formationId);
$categories = $categoryController->getCategoriesByFormation($formationId);

include_once '../../../../public/templates/header.php';
include_once '../navbar_student.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    #scrollToTopBtn {
        display: none;
        position: fixed;
        bottom: 170px;
        right: 20px;
        z-index: 99;
        font-size: 18px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 50%;
        padding: 10px 15px;
        cursor: pointer;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    #scrollToTopBtn:hover {
        background-color: #333;
    }
    #scrollToBottomBtn {
        display: none;
        position: fixed;
        bottom: 170px;
        right: 80px;
        z-index: 99;
        font-size: 18px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 50%;
        padding: 10px 15px;
        cursor: pointer;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    #scrollToBottomBtn:hover {
        background-color: #333;
    }
</style>
<div class="container mt-5">
    <h1 class="text-center mb-4"><?php echo htmlspecialchars_decode($formation['name']); ?></h1>
    <p class="text-center text-white"><?php echo htmlspecialchars_decode($formation['description']); ?></p>

    <?php if (empty($categories)): ?>
        <p class="text-center">Aucune catégorie disponible pour cette formation.</p>
    <?php else: ?>
        <div class="accordion" id="formationAccordion">
            <?php foreach ($categories as $category): ?>
                <?php 
                $subCategories = $subCategoryController->getSubCategoriesByCategory($category['id']); 
                $categoryProgress = $categoryController->getCategoryProgress($_SESSION['user']['id'], $category['id']);
                $status = $categoryProgress['status'] ?? 'not_started';
                ?>
                <div class="card">
                    <div class="card-header" id="heading<?php echo $category['id']; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $category['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $category['id']; ?>">
                                    <?php echo htmlspecialchars_decode($category['title']); ?>
                                </button>
                            </h2>
                            <div class="filter-buttons">
                                <button class="btn btn-secondary" onclick="updateCategoryStatus(<?php echo $category['id']; ?>, 'not_started')">Non commencée</button>
                                <button class="btn btn-warning" onclick="updateCategoryStatus(<?php echo $category['id']; ?>, 'in_progress')">En cours</button>
                                <button class="btn btn-success" onclick="updateCategoryStatus(<?php echo $category['id']; ?>, 'completed')">Terminée</button>
                            </div>
                        </div>
                        <div class="progress-status">
                            Statut : <span id="status-<?php echo $category['id']; ?>"><?php echo ucfirst(str_replace('_', ' ', $status)); ?></span>
                        </div>
                    </div>

                    <div id="collapse<?php echo $category['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $category['id']; ?>" data-parent="#formationAccordion">
                        <div class="card-body">
                            <?php if (empty($subCategories)): ?>
                                <p class="text-center">Aucune sous-catégorie disponible pour cette catégorie.</p>
                            <?php else: ?>
                                <?php foreach ($subCategories as $subCategory): ?>
                                    <h5><?php echo htmlspecialchars_decode($subCategory['title']); ?></h5>
                                    <?php $pages = $pageController->getPagesBySubCategory($subCategory['id']); ?>
                                    <?php if (empty($pages)): ?>
                                        <p class="text-center">Aucune page disponible pour cette sous-catégorie.</p>
                                    <?php else: ?>
                                        <div class="accordion" id="subCategoryAccordion<?php echo $subCategory['id']; ?>">
                                            <?php foreach ($pages as $page): ?>
                                                <div class="card">
                                                    <div class="card-header" id="headingPage<?php echo $page['id']; ?>">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsePage<?php echo $page['id']; ?>" aria-expanded="true" aria-controls="collapsePage<?php echo $page['id']; ?>">
                                                                <?php echo htmlspecialchars_decode($page['title']); ?>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsePage<?php echo $page['id']; ?>" class="collapse" aria-labelledby="headingPage<?php echo $page['id']; ?>" data-parent="#subCategoryAccordion<?php echo $subCategory['id']; ?>" data-id="<?php echo $page['id']; ?>">
                                                        <div class="card-body">
                                                            <p><?php echo $page['content']; ?></p>
                                                            <?php if (!empty($page['video_url'])): ?>
                                                                <div class="flowplayer" data-splash="true"><video data-title="titre" controls="controls" wmode="transparent" type="video/mp4" src="/Portfolio/e_learning<?php echo htmlspecialchars_decode($page['video_url']); ?>" height="200" width="100%"></video></div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<button onclick="topFunction()" id="scrollToTopBtn" title="Retour en haut">
    <i class="fas fa-arrow-up"></i>
</button>
<button onclick="bottomFunction()" id="scrollToBottomBtn" title="Aller en bas">
    <i class="fas fa-arrow-down"></i>
</button>

<!-- Inclusion de jQuery (version complète, pas la version 'slim' qui ne supporte pas AJAX) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateCategoryStatus(categoryId, status) {
        $.ajax({
            url: '/Portfolio/e_learning/student/mediateque/update_status',
            type: 'POST',
            data: {
                category_id: categoryId,
                status: status
            },
            success: function(response) {
                response = JSON.parse(response);
                if (response.success) {
                    $('#status-' + categoryId).text(response.status);
                    alert('Statut mis à jour avec succès');
                } else {
                    alert('Erreur lors de la mise à jour du statut');
                }
            },
            error: function() {
                alert('Erreur lors de la requête AJAX');
            }
        });
    }

    $(document).ready(function() {
    $('.collapse').on('show.bs.collapse', function() {
        var pageId = $(this).attr('data-id');
        if (pageId) {
            $.ajax({
                url: '/Portfolio/e_learning/student/mediateque/update_count',
                type: 'POST',
                data: { id: pageId },
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.success) {
                        console.log('View count incremented for page ID: ' + pageId);
                    } else {
                        console.log('Failed to increment view count for page ID: ' + pageId);
                    }
                },
                error: function() {
                    console.log('Error during AJAX request');
                }
            });
        }
    });
});
window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        // Montrer le bouton "Retour en haut" si l'utilisateur a défilé plus de 20px
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollToTopBtn").style.display = "block";
        } else {
            document.getElementById("scrollToTopBtn").style.display = "none";
        }

        // Montrer le bouton "Aller en bas" si l'utilisateur n'est pas encore en bas
        if ((window.innerHeight + window.scrollY) < document.body.offsetHeight) {
            document.getElementById("scrollToBottomBtn").style.display = "block";
        } else {
            document.getElementById("scrollToBottomBtn").style.display = "none";
        }
    }

    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function bottomFunction() {
        window.scrollTo({
            top: document.body.scrollHeight, // Aller à la hauteur totale de la page
            behavior: 'smooth'
        });
    }

</script>

<?php include '../../../../public/templates/footer.php'; ?>
