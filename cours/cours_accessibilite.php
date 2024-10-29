<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur l'Accessibilité Web</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css">
</head>
<body>
<?php include 'templates/nav.php'; ?>

<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">Accessibilité Web</h3>
    <button class="dropdown-btn">Introduction à l'Accessibilité</button>
    <div class="dropdown-container">
        <a href="#accessibility-definition">Définition et Importance</a>
    </div>
    <button class="dropdown-btn">Bonnes Pratiques</button>
    <div class="dropdown-container">
        <a href="#color-contrast">Contraste des Couleurs</a>
        <a href="#alt-text">Texte Alternatif (Alt Text)</a>
        <a href="#keyboard-navigation">Navigation au Clavier</a>
        <a href="#aria-attributes">Attributs ARIA</a>
    </div>
    <button class="dropdown-btn">Outils et Tests</button>
    <div class="dropdown-container">
        <a href="#accessibility-tools">Outils de Vérification</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Accessibilité Web</h1>
        <p>L’accessibilité web vise à rendre les sites internet utilisables par tous, y compris par les personnes ayant des handicaps. En respectant les principes d'accessibilité, nous permettons une meilleure expérience pour tous les utilisateurs.</p>

        <!-- Définition et Importance -->
        <section id="accessibility-definition">
            <h2>Qu'est-ce que l'Accessibilité Web ?</h2>
            <p><strong>Définition :</strong> L’accessibilité web concerne l'ensemble des pratiques visant à rendre le contenu numérique accessible à tous, y compris les personnes ayant des limitations visuelles, auditives, physiques, cognitives, ou neurologiques.</p>
            <p><strong>Importance :</strong> L'accessibilité est cruciale pour assurer l'inclusion numérique, garantir la conformité légale (ex. : RGAA en France), et offrir une expérience utilisateur équitable.</p>
        </section>

        <!-- Bonnes Pratiques -->
        <section id="color-contrast">
            <h2>Contraste des Couleurs</h2>
            <p>Un bon contraste de couleur entre le texte et l'arrière-plan permet une lecture facile pour les personnes ayant des troubles visuels.</p>
            <p>Utilisez des couleurs suffisamment contrastées (ex : texte sombre sur fond clair) pour améliorer la lisibilité.</p>
            <div class="visual-example" style="background-color: #333; color: #fff; padding: 10px;">
                Texte avec contraste élevé (blanc sur fond sombre)
            </div>
        </section>

        <section id="alt-text">
            <h2>Texte Alternatif (Alt Text)</h2>
            <p>Le texte alternatif, ou <strong>alt text</strong>, est utilisé dans les balises d'image pour décrire le contenu visuel à ceux qui utilisent des lecteurs d'écran.</p>
            <pre><code>&lt;img src="image.jpg" alt="Description de l'image"&gt;</code></pre>
        </section>

        <section id="keyboard-navigation">
            <h2>Navigation au Clavier</h2>
            <p>La navigation au clavier permet aux utilisateurs de naviguer sans souris, en utilisant les touches de tabulation, flèche, etc. Assurez-vous que tous les éléments interactifs sont accessibles par le clavier.</p>
            <ul>
                <li>Assurez-vous que les liens et les boutons sont focusables avec la touche Tab.</li>
                <li>Utilisez <code>tabindex</code> pour ajuster l'ordre de navigation.</li>
            </ul>
        </section>

        <section id="aria-attributes">
            <h2>Attributs ARIA</h2>
            <p>Les attributs ARIA (Accessible Rich Internet Applications) améliorent l'accessibilité en ajoutant des informations aux éléments interactifs.</p>
            <ul>
                <li><code>aria-label</code> : Fournit une étiquette aux éléments qui n'ont pas de texte visible.</li>
                <li><code>aria-hidden</code> : Masque un élément pour les lecteurs d'écran.</li>
                <li><code>aria-live</code> : Indique si une région dynamique doit être annoncée par le lecteur d'écran.</li>
            </ul>
        </section>

        <!-- Outils et Tests -->
        <section id="accessibility-tools">
            <h2>Outils de Vérification de l'Accessibilité</h2>
            <p>Utilisez ces outils pour vérifier la conformité de votre site aux normes d'accessibilité :</p>
            <ul>
                <li><strong>Wave</strong> : Vérification visuelle de l'accessibilité d'une page.</li>
                <li><strong>AXE</strong> : Extension de navigateur pour des audits d'accessibilité.</li>
                <li><strong>Color Contrast Checker</strong> : Teste le contraste des couleurs.</li>
            </ul>
        </section>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
