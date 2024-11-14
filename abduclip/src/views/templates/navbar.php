<?php 

require '../../vendor/autoload.php';

$authController = new \Controllers\AuthController();
$userController = new \Controllers\UserController();
$categoryController = new \Controllers\CategoryAbduclipController();
$gameController = new \Controllers\GameController();

$error = '';

// Vérification si l'utilisateur est connecté et s'il est admin
$isAdmin = false;
if (isset($_SESSION['user_id'])) {
    $isAdmin = $authController->isAdmin($_SESSION['user_id']);
}

// Récupération des catégories avec leurs jeux
$categories = $categoryController->getAllCategoriesWithGames(); // Méthode personnalisée pour récupérer chaque catégorie et ses jeux


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    try {
        switch ($_POST['action']) {
            case 'login':
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $user = $authController->login($email, $password);
                header("Location: index.php");
                exit;

            case 'register':
                $username = $_POST['username'] ?? '';
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $authController->register($username, $email, $password);
                header("Location: index.php");
                exit;

            case 'update_username':
                $newUsername = $_POST['new_username'] ?? '';
                $userController->updateUsername($_SESSION['user_id'], $newUsername);
                header("Location: index.php");
                exit;

            case 'update_email':
                $newEmail = $_POST['new_email'] ?? '';
                $userController->updateEmail($_SESSION['user_id'], $newEmail);
                header("Location: index.php");
                exit;

            case 'update_password':
                $currentPassword = $_POST['current_password'] ?? '';
                $newPassword = $_POST['new_password'] ?? '';
                $userController->updatePasswordAbduclip($_SESSION['user_id'], $currentPassword, $newPassword);
                header("Location: index.php");
                exit;

            // Actions pour les catégories
            case 'add_category':
                $categoryName = $_POST['category_name'] ?? '';
                $categoryDescription = $_POST['category_description'] ?? '';
                $categoryController->createCategory($categoryName, $categoryDescription);
                header("Location: index.php");
                exit;

            case 'update_category':
                $categoryId = $_POST['category_id'] ?? null;
                $categoryName = $_POST['category_name'] ?? '';
                $categoryDescription = $_POST['category_description'] ?? '';
                if ($categoryId) {
                    $categoryController->updateCategory($categoryId, $categoryName, $categoryDescription);
                }
                header("Location: index.php");
                exit;

            case 'delete_category':
                $categoryId = $_POST['category_id'] ?? null;
                if ($categoryId) {
                    $categoryController->deleteCategory($categoryId);
                }
                header("Location: index.php");
                exit;

            // Actions pour les jeux
            case 'add_or_update_game':
                $gameId = $_POST['game_id'] ?? null;
                $title = $_POST['title'] ?? '';
                $description = $_POST['description'] ?? null;
                $categoryId = $_POST['category_id'] ?? null;
                $urlCdn = $_POST['url_cdn'] ?? null;
                $filePath = $_POST['file_path'] ?? null;

                if (empty($urlCdn) && empty($filePath)) {
                    throw new Exception("Veuillez fournir soit l'URL CDN, soit l'ID du jeu GameDistribution.");
                }

                if ($gameId) {
                    $gameController->updateGame($gameId, $categoryId, $title, $description, $urlCdn, $filePath);
                } else {
                    $gameController->createGame($categoryId, $title, $description, $urlCdn, $filePath);
                }
                header("Location: index.php");
                exit;

            case 'delete_game':
                $gameId = $_POST['game_id'] ?? null;
                if ($gameId) {
                    $gameController->deleteGame($gameId);
                }
                header("Location: index.php");
                exit;

            case 'logout':
                $authController->logout();
                header("Location: index.php");
                exit;
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>


<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Abduclip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php if ($isAdmin): ?>
            <!-- Bouton Administration visible uniquement pour les administrateurs -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#adminModal">Administration <i class="fas fa-caret-down"></i></a>
                    </li>
                </ul>
            <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classements de jeux</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Les jeux
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item" href="games.php#racing-games">Jeux de course</a></li>
                        <li><a class="dropdown-item" href="games.php#roleplay-games">Jeux de rôles</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="games.php#somulation-games">Jeux de simulation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">A venir</a>
                </li>
            </ul>

            <?php if (isset($_SESSION['user_id'])): ?>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">Profil <i class="fas fa-caret-down"></i></a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="">
                        <input type="hidden" name="action" value="logout">
                        <button type="submit" class="btn nav-link btn-link">Déconnexion</button>
                    </form>
                </li>
            </ul>
            <?php else: ?>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">S'inscrire</a>
                    </li>
                </ul>
            <?php endif; ?>
            <form class="d-flex ms-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Rechercher un jeu" aria-label="Search">
                <button class="btn nav-link btn-link" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>
<!-- Modal pour l'Administration -->
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">Panneau d'administration</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                <!-- Section Administration des CRUD -->
                <div class="admin-section col-md-6">
                    <h6>Gestion des Catégories</h6>
                    <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#categoryCrudModal">Gérer les Catégories</button>
                </div>

                <div class="admin-section col-md-6">
                    <h6>Gestion des Jeux</h6>
                    <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#gamesCrudModal">Gérer les Jeux</button>
                </div>

                <div class="admin-section col-md-6">
                    <h6>Gestion des Trophées</h6>
                    <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#trophiesCrudModal">Gérer les Trophées</button>
                </div>

                <div class="admin-section col-md-6">
                    <h6>Gestion des Utilisateurs</h6>
                    <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#usersCrudModal">Gérer les Utilisateurs</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Modal CRUD Catégories -->
<div class="modal fade" id="categoryCrudModal" tabindex="-1" aria-labelledby="categoryCrudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryCrudModalLabel">Gestion des Catégories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Section pour ajouter ou modifier une catégorie -->
                <form id="categoryForm" action="" method="POST" class="mb-4">
                    <h6 id="formTitle">Ajouter une nouvelle catégorie</h6>
                    <!-- Champ caché pour l'ID de la catégorie en mode modification -->
                    <input type="hidden" name="category_id" id="categoryId" value="">

                    <div class="form-group mb-2">
                        <label for="categoryName">Nom de la catégorie :</label>
                        <input type="text" name="category_name" id="categoryName" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="categoryDescription">Description :</label>
                        <textarea name="category_description" id="categoryDescription" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" id="submitButton" name="action" value="add_category" class="btn btn-primary w-100">Ajouter la catégorie</button>
                </form>

                <!-- Liste des catégories sous forme de cartes -->
                <div class="category-list">
                    <div class="row">
                        <?php foreach ($categories as $category): ?>
                            <div class="card col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($category['name']); ?></h5>
                                    <p class="card-text"><?= htmlspecialchars($category['description']); ?></p>
                                    <p class="card-text"><small class="text-muted">Jeux enregistrés : <?= count($category['games']); ?></small></p>
                                    
                                    <!-- Actions pour chaque catégorie -->
                                    <div class="d-flex justify-content-between">
                                        <button 
                                            class="btn btn-warning" 
                                            onclick="editCategory(<?= htmlspecialchars(json_encode($category)); ?>)">
                                            Modifier
                                        </button>
                                        <form action="" method="POST" class="d-inline">
                                            <input type="hidden" name="category_id" value="<?= $category['id']; ?>">
                                            <button type="submit" name="action" value="delete_category" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Fonction JavaScript pour remplir le formulaire d'ajout avec les données de la catégorie sélectionnée
    function editCategory(category) {
        // Remplir les champs avec les données de la catégorie
        document.getElementById('formTitle').textContent = 'Modifier la catégorie';
        document.getElementById('categoryId').value = category.id;
        document.getElementById('categoryName').value = category.name;
        document.getElementById('categoryDescription').value = category.description;
        
        // Modifier le bouton de soumission
        const submitButton = document.getElementById('submitButton');
        submitButton.textContent = 'Enregistrer les modifications';
        submitButton.setAttribute('name', 'action');
        submitButton.setAttribute('value', 'update_category');

        // Ouvrir le modal du formulaire pour modifier la catégorie
        const categoryCrudModal = new bootstrap.Modal(document.getElementById('categoryCrudModal'));
        categoryCrudModal.show();
    }
</script>


<div class="modal-dialog modal-lg modal-dialog-scrollable">
<!-- Modal CRUD Jeux -->
<div class="modal fade" id="gamesCrudModal" tabindex="-1" aria-labelledby="gamesCrudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gamesCrudModalLabel">Gestion des Jeux</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Liste des jeux existants classés par catégorie avec un affichage en cartes -->
                <h6>Jeux par Catégorie</h6>
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $category): ?>
                        <div class="mb-4">
                            <h6 class="text-primary"><?= htmlspecialchars($category['name']); ?></h6>
                            <div class="row">
                                <?php if (!empty($category['games'])): ?>
                                    <div class="scrollable-games-container mb-4">
                                    <?php foreach ($category['games'] as $game): ?>
                                        <?php
                                        $pageUrl = "https://abduclip.com/tests/test_game.php";
                                        $gameUrl = $game['url_cdn'] ?? "https://html5.gamedistribution.com/{$game['file_path']}/?gd_sdk_referrer_url=" . urlencode($pageUrl);
                                        ?>
                                        <div class="card mx-2" style="min-width: 200px;">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= htmlspecialchars($game['title']); ?></h5>
                                                
                                                <!-- Bouton pour ouvrir l'accordéon -->
                                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#description<?= $game['id']; ?>" aria-expanded="false" aria-controls="description<?= $game['id']; ?>">
                                                    Voir la description
                                                </button>

                                                <!-- Contenu de l'accordéon -->
                                                <div id="description<?= $game['id']; ?>" class="collapse">
                                                    <p class="card-text mt-2"><?= htmlspecialchars($game['description']); ?></p>
                                                </div>
                                            </div>

                                            <div class="card-footer d-flex justify-content-between">
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#gameViewModal" data-url="<?= htmlspecialchars($gameUrl); ?>">
                                                    Voir le jeu
                                                </button>
                                                <div>
                                                    <button class="btn btn-warning btn-sm" onclick="editGame(<?= htmlspecialchars(json_encode($game)); ?>)">Modifier</button>
                                                    <form action="" method="POST" class="d-inline">
                                                        <input type="hidden" name="action" value="delete_game">
                                                        <input type="hidden" name="game_id" value="<?= $game['id']; ?>">
                                                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php else: ?>
                                    <p class="text-muted">Aucun jeu pour cette catégorie</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted">Aucune catégorie ou aucun jeu pour le moment</p>
                <?php endif; ?>

                <!-- Formulaire d'ajout ou de modification d'un jeu -->
                <h6>Ajouter ou Modifier un Jeu</h6>
                <form action="" method="POST">
                    <input type="hidden" name="action" value="add_or_update_game">
                    <input type="hidden" name="game_id" id="gameId" value="">
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Catégorie</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id']; ?>"><?= htmlspecialchars($category['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="url_cdn" class="form-label">URL CDN du Jeu</label>
                        <input type="text" name="url_cdn" id="url_cdn" class="form-control" placeholder="URL du jeu sur GameDistribution">
                    </div>
                    <div class="mb-3">
                        <label for="file_path" class="form-label">ID du Jeu GameDistribution (si aucun URL CDN)</label>
                        <input type="text" name="file_path" id="file_path" class="form-control" placeholder="ID du jeu GameDistribution">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Enregistrer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal-dialog modal-lg modal-dialog-scrollable">
<!-- Modal pour afficher le jeu dans un iframe -->
<div class="modal fade" id="gameViewModal" tabindex="-1" aria-labelledby="gameViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gameViewModalLabel">Aperçu du Jeu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <iframe id="gameIframe" src="" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var gameViewModal = document.getElementById('gameViewModal');
        gameViewModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var gameUrl = button.getAttribute('data-url');
            var gameIframe = document.getElementById('gameIframe');
            gameIframe.src = gameUrl;
        });
        gameViewModal.addEventListener('hide.bs.modal', function () {
            var gameIframe = document.getElementById('gameIframe');
            gameIframe.src = "";
        });
    });

    function editGame(gameData) {
        document.getElementById('gameId').value = gameData.id;
        document.getElementById('title').value = gameData.title;
        document.getElementById('description').value = gameData.description;
        document.getElementById('category_id').value = gameData.category_id;
        document.getElementById('url_cdn').value = gameData.url_cdn || "";
        document.getElementById('file_path').value = gameData.file_path || "";
    }
</script>



<!-- Modal CRUD Trophées -->
<div class="modal fade" id="trophiesCrudModal" tabindex="-1" aria-labelledby="trophiesCrudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trophiesCrudModalLabel">Gestion des Trophées</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaires ou composants pour gérer les trophées ici -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal CRUD Utilisateurs -->
<div class="modal fade" id="usersCrudModal" tabindex="-1" aria-labelledby="usersCrudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usersCrudModalLabel">Gestion des Utilisateurs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaires ou composants pour gérer les utilisateurs ici -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal pour le profil utilisateur -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header profile-header">
                <h5 class="modal-title" id="profileModalLabel">Mon Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Section d'édition de profil -->
                <div class="profile-section">
                    <h6>Modifier le Profil</h6>
                    <!-- Modification du nom d'utilisateur -->
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="new-username" class="form-label">Nom d'utilisateur :</label>
                            <input type="text" name="new_username" id="new-username" class="form-control" value="<?php echo $_SESSION['user']['username']; ?>">
                        </div>
                        <button type="submit" name="action" value="update_username" class="btn btn-primary w-100">Modifier le nom d'utilisateur</button>
                    </form>

                    <!-- Modification de l'email -->
                    <form action="" method="POST" class="mt-3">
                        <div class="mb-3">
                            <label for="new-email" class="form-label">Adresse e-mail :</label>
                            <input type="email" name="new_email" id="new-email" class="form-control" value="<?php echo $_SESSION['user']['email']; ?>">
                        </div>
                        <button type="submit" name="action" value="update_email" class="btn btn-primary w-100">Modifier l'adresse e-mail</button>
                    </form>

                    <!-- Modification du mot de passe -->
                    <form action="" method="POST" class="mt-3">
                        <div class="mb-3">
                            <label for="current-password" class="form-label">Mot de passe actuel :</label>
                            <input type="password" name="current_password" id="current-password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="new-password" class="form-label">Nouveau mot de passe :</label>
                            <input type="password" name="new_password" id="new-password" class="form-control">
                        </div>
                        <button type="submit" name="action" value="update_password" class="btn btn-primary w-100">Modifier le mot de passe</button>
                    </form>
                </div>

                <!-- Section des favoris -->
                <div class="profile-section">
                    <h6>Favoris</h6>
                    <?php foreach ($_SESSION['user_favorites'] as $favorite): ?>
                        <div class="list-item">
                            <?php echo htmlspecialchars($favorite['game_name']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Section des derniers jeux joués -->
                <div class="profile-section">
                    <h6>Derniers jeux joués</h6>
                    <?php foreach ($_SESSION['user_recent_games'] as $game): ?>
                        <div class="list-item">
                            <?php echo htmlspecialchars($game['game_name']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Section des trophées -->
                <div class="profile-section">
                    <h6>Trophées</h6>
                    <?php foreach ($_SESSION['user_trophies'] as $trophy): ?>
                        <div class="list-item">
                            <?php echo htmlspecialchars($trophy['trophy_name']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Connexion -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <?php if ($error): ?>
                        <p class="alert alert-danger"><?= htmlspecialchars($error); ?></p>
                    <?php endif; ?>
                    <div class="form-group mb-3">
                        <label for="login-email"><i class="fas fa-envelope"></i> Email :</label>
                        <input type="email" name="email" id="login-email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="login-password"><i class="fas fa-lock"></i> Mot de passe :</label>
                        <input type="password" name="password" id="login-password" class="form-control" required>
                    </div>
                    <button type="submit" name="action" value="login" class="btn btn-primary w-100">Se connecter</button>
                    <div class="social-login d-flex justify-content-around mt-3">
                        <button class="btn btn-light" disabled><i class="fab fa-google"></i> Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Inscription -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Inscription</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <?php if ($error): ?>
                        <p class="alert alert-danger"><?= htmlspecialchars($error); ?></p>
                    <?php endif; ?>
                    <div class="form-group mb-3">
                        <label for="register-username"><i class="fas fa-user"></i> Nom d'utilisateur :</label>
                        <input type="text" name="username" id="register-username" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="register-email"><i class="fas fa-envelope"></i> Email :</label>
                        <input type="email" name="email" id="register-email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="register-password"><i class="fas fa-lock"></i> Mot de passe :</label>
                        <input type="password" name="password" id="register-password" class="form-control" required>
                    </div>
                    <button type="submit" name="action" value="register" class="btn btn-primary w-100">S'inscrire</button>
                    <div class="social-login d-flex justify-content-around mt-3">
                        <button class="btn btn-light" disabled><i class="fab fa-google"></i> Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once '../views/templates/footer.php' ?>
