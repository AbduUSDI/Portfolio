<?php 

require '../../vendor/autoload.php';

use Controllers\AuthController;

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $authController = new AuthController();
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        if ($_POST['action'] === 'login') {
            $user = $authController->login($email, $password);
            header("Location: dashboard.php");
            exit;
        } elseif ($_POST['action'] === 'register') {
            $username = $_POST['username'] ?? '';
            $authController->register($username, $email, $password);
            header("Location: dashboard.php");
            exit;
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Abduclip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                        <li><a class="dropdown-item" href="#">Jeux de course</a></li>
                        <li><a class="dropdown-item" href="#">Jeux de rôles</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Jeux de simulation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">A venir</a>
                </li>
            </ul>

            <!-- Ajout des boutons de connexion et d'inscription -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">S'inscrire</a>
                </li>
            </ul>

            <form class="d-flex ms-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Rechercher un jeu" aria-label="Search">
                <button class="btn btn-primary" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>

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
                <form action="login.php" method="POST">
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
                        <button type="button" class="btn btn-light"><i class="fab fa-google"></i> Google</button>
                        <button type="button" class="btn btn-light"><i class="fab fa-facebook"></i> Facebook</button>
                        <button type="button" class="btn btn-light"><i class="fab fa-snapchat"></i> Snapchat</button>
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
                <form action="login.php" method="POST">
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
                        <button type="button" class="btn btn-light"><i class="fab fa-google"></i> Google</button>
                        <button type="button" class="btn btn-light"><i class="fab fa-facebook"></i> Facebook</button>
                        <button type="button" class="btn btn-light"><i class="fab fa-snapchat"></i> Snapchat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once '../views/templates/footer.php' ?>