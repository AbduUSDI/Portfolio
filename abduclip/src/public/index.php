<?php
session_start();

include_once '../views/templates/header.php';
include_once '../views/templates/navbar.php';
?>

<div class="container-fluid">
    <div class="row">
<!-- Sidebar -->
<aside class="col-md-3 col-lg-2 bg-light sidebar p-3">
    <h5 class="sidebar-title">Liste des Jeux par catégories</h5>
    <div class="list-group">
        <?php foreach ($categories as $category): ?>
            <div class="list-group-item">
                <h6 class="category-title"><?= htmlspecialchars($category['name']); ?></h6>
                <ul class="list-unstyled ms-3">
                    <?php if (!empty($category['games'])): ?>
                        <?php foreach ($category['games'] as $game): ?>
                        <li>
                            <!-- Ajout de `game_id=` avant l'ID pour passer correctement le paramètre -->
                            <a href="game.php?id=<?= $game['id'] ?>" class="btn btn-primary mb-1"><?= htmlspecialchars($game['title']); ?></a>
                        </li>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <li><em>Aucun jeu disponible dans cette catégorie</em></li>
                    <?php endif; ?>
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