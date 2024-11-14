<?php
session_start();
require '../../vendor/autoload.php';
use Controllers\GameController;
use Models\Leaderboard;

include_once '../views/templates/header.php';
include_once '../views/templates/navbar.php';

// Récupération de l'ID du jeu depuis l'URL
$gameId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Vérification que l'ID est valide
if ($gameId <= 0) {
    echo "Jeu non trouvé.";
    exit;
}

// Initialisation du contrôleur des jeux
$gameController = new GameController();
$game = $gameController->readGame($gameId);

// Vérifiez que le jeu existe
if (!$game) {
    echo "Jeu non trouvé.";
    exit;
}

// Construction de l'URL du jeu avec GameDistribution
$pageUrl = "http://localhost/Portfolio/abduclip/src/public/index.php";
$gameUrl = $game['url_cdn'] ?? "https://html5.gamedistribution.com/{$game['file_path']}/?gd_sdk_referrer_url=" . urlencode($pageUrl);

// Initialisation de la classe Leaderboard pour récupérer le classement
$leaderboardModel = new Leaderboard();
$leaderboard = $leaderboardModel->getLeaderboardForGame($gameId);
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
                                <?php foreach ($category['games'] as $gameItem): ?>
                                    <li>
                                        <a href="game.php?id=<?= $gameItem['id'] ?>" class="btn btn-primary mb-1"><?= htmlspecialchars($gameItem['title']); ?></a>
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

        <!-- Main Content -->
        <main class="col-md-9 col-lg-10">
            <h2><?= htmlspecialchars($game['title']); ?></h2>
            <div class="game-container mb-4">
                <iframe src="<?= $gameUrl ?>" width="100%" height="600px" frameborder="0" allowfullscreen></iframe>
            </div>

            <!-- Leaderboard Section -->
            <div class="leaderboard">
                <h3>Classement des Meilleurs Scores</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Position</th>
                            <th>Joueur</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($leaderboard as $index => $entry): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($entry['player_name'] ?? 'Anonyme'); ?></td>
                                <td><?= htmlspecialchars($entry['score']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<script>
window.addEventListener("message", function(event) {
    // Vérifie l'origine de l'iframe pour la sécurité
    if (event.origin !== "https://html5.gamedistribution.com") return;

    const scoreData = event.data;
    
    // Vérifie si le message contient un score
    if (scoreData.type === "score") {
        // Envoie le score au serveur via AJAX
        fetch("save_score.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                gameId: <?= json_encode($gameId) ?>,
                playerName: "Joueur", // ou récupérez dynamiquement le nom du joueur si possible
                score: scoreData.score,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Score enregistré avec succès !");
                // Mise à jour du tableau de classement
                updateLeaderboard(data.leaderboard);
            } else {
                alert("Échec de l'enregistrement du score.");
            }
        });
    }
});

// Fonction pour mettre à jour le tableau de classement
function updateLeaderboard(leaderboard) {
    const leaderboardTable = document.querySelector(".leaderboard tbody");
    leaderboardTable.innerHTML = ""; // Vide le tableau actuel

    // Remplit le tableau avec les scores mis à jour
    leaderboard.forEach((entry, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${entry.player_name || "Anonyme"}</td>
            <td>${entry.score}</td>
        `;
        leaderboardTable.appendChild(row);
    });
}
</script>

