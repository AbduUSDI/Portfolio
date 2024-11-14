<?php
session_start();

// Exemple de jeux par catégorie
$categories = [
    'Action' => ['Jeu 1', 'Jeu 2', 'Jeu 3'],
    'Aventure' => ['Jeu 4', 'Jeu 5', 'Jeu 6'],
    'Puzzle' => ['Jeu 7', 'Jeu 8', 'Jeu 9'],
];


include_once '../views/templates/header.php';
include_once '../views/templates/navbar.php';
?>

<!-- Contenu de la page d'accueil : la sidear à gauche affichant la liste de jeux par catégories ; au centre il y a les 3 jeux les plus joués ; en descendant nous pouvons trouver d'autres fonctionnalités tels que le classements , etc -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-md-3 col-lg-2 bg-light sidebar p-3">
            <h5 class="sidebar-title">Catégories de Jeux</h5>
            <div class="list-group">
                <?php foreach ($categories as $category => $games): ?>
                    <div class="list-group-item">
                        <h6 class="category-title"><?= htmlspecialchars($category); ?></h6>
                        <ul class="list-unstyled ms-3">
                            <?php foreach ($games as $game): ?>
                                <li><a href="#" class="game-link"><?= htmlspecialchars($game); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </aside>

        <!-- Contenu principal -->
        <main class="col-md-9 col-lg-10">
            <h2>Accueil</h2>
            <div class="popular-games">
                <h3>Les 3 Jeux les plus joués</h3>
                <!-- Affichez ici les jeux les plus joués (à remplir selon votre logique) -->
            </div>
            <section class="additional-features mt-4">
                <h3>Classement et autres fonctionnalités</h3>
                <!-- Ajoutez ici les sections supplémentaires telles que les classements, etc. -->
            </section>
        </main>
    </div>
</div>





<?php include_once '../views/templates/footer.php' ?>