<?php
session_start();
require '../../vendor/autoload.php';

// Inclusion des templates header et navbar
include_once '../views/templates/header.php';
include_once '../views/templates/navbar.php';

use Controllers\AuthController;
$categoryController = new \Controllers\CategoryController();
$authController = new AuthController();
$action = isset($_GET['action']) ? $_GET['action'] : 'login';
$message = '';

// Gestion des formulaires en fonction des actions (connexion, inscription, mot de passe oublié)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($action) {
        case 'register':
            $message = $authController->register($_POST['username'], $_POST['email'], $_POST['password']);
            break;
        default: // login
            $message = $authController->login($_POST['email'], $_POST['password']);
            break;
    }
}
?>

<div class="container mx-auto mt-10 px-4">
    <div class="max-w-md mx-auto bg-white p-8 shadow-lg rounded-lg">
        <!-- Affichage du message (succès ou erreur) -->
        <?php if (!empty($message)) : ?>
            <div class="mb-4 text-red-500">
                <?= htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <!-- Affichage dynamique du titre -->
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">
            <?php if ($action == 'register') : ?>
                Inscription
            <?php elseif ($action == 'forgot_password') : ?>
                Mot de passe oublié
            <?php else : ?>
                Connexion
            <?php endif; ?>
        </h2>

        <!-- Formulaire de connexion -->
        <?php if ($action == 'login') : ?>
            <form method="POST" action="/login.php?action=login">
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="flex justify-between items-center">
                    <a href="/login.php?action=forgot_password" class="text-sm text-green-600 hover:underline">Mot de passe oublié ?</a>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Se connecter</button>
                </div>
            </form>
            <p class="text-center mt-6">
                <a href="/login.php?action=register" class="text-sm text-gray-600 hover:underline">Créer un nouveau compte</a>
            </p>

            <!-- Connexion via réseaux sociaux -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">Ou connectez-vous avec :</p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="/auth/google" class="text-gray-600 hover:text-green-600">
                        <i class="fab fa-google fa-2x"></i>
                    </a>
                    <a href="/auth/github" class="text-gray-600 hover:text-green-600">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    <a href="/auth/outlook" class="text-gray-600 hover:text-green-600">
                        <i class="fab fa-microsoft fa-2x"></i>
                    </a>
                </div>
            </div>
        <?php endif; ?>

        <!-- Formulaire d'inscription -->
        <?php if ($action == 'register') : ?>
            <form method="POST" action="/login.php?action=register">
                <div class="mb-4">
                    <label for="username" class="block text-gray-600">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="block text-gray-600">Confirmer le mot de passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">S'inscrire</button>
            </form>
            <p class="text-center mt-6">
                <a href="/login.php?action=login" class="text-sm text-gray-600 hover:underline">Déjà un compte ? Se connecter</a>
            </p>
        <?php endif; ?>

        <!-- Formulaire d'oubli de mot de passe -->
        <?php if ($action == 'forgot_password') : ?>
            <form method="POST" action="/login.php?action=forgot_password">
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Entrez votre email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Envoyer le lien de réinitialisation</button>
            </form>
            <p class="text-center mt-6">
                <a href="/login.php?action=login" class="text-sm text-gray-600 hover:underline">Retour à la connexion</a>
            </p>
        <?php endif; ?>
    </div>
</div>

<?php
// Inclusion du footer
include_once '../views/templates/footer.php';
?>
