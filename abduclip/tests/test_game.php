<?php
// ID du jeu sur GameDistribution
$gameId = "04425491014a4c64a7578f725ba51415"; // Remplace par l'ID de ton jeu
// URL de la page sur laquelle le jeu est intégré (celle où tu testes)
$pageUrl = "https://abduclip.com/tests/test_game.php/"; // Remplace par l'URL de ta page

// Construction de l'URL du jeu avec le paramètre gd_sdk_referrer_url
$gameCdnUrl = "https://html5.gamedistribution.com/{$gameId}/?gd_sdk_referrer_url=" . urlencode($pageUrl);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Jeu via CDN avec GameDistribution</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        iframe {
            width: 800px;
            height: 600px;
            border: none;
        }
    </style>
</head>
<body>

    <h1>Test du jeu via CDN</h1>
    
    <!-- Affichage du jeu via iframe avec le paramètre gd_sdk_referrer_url -->
    <iframe src="<?= htmlspecialchars($gameCdnUrl); ?>" allowfullscreen></iframe>
    
    <p>Le jeu est chargé via l'URL CDN : <strong><?= htmlspecialchars_decode($gameCdnUrl); ?></strong></p>

</body>
</html>