<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours sur le Prototypage et le Wireframing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css">
</head>
<body>
<?php include 'templates/nav.php'; ?>

<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">Prototypage et Wireframing</h3>
    <button class="dropdown-btn">Introduction</button>
    <div class="dropdown-container">
        <a href="#definition-wireframe">Qu'est-ce qu'un Wireframe ?</a>
        <a href="#definition-prototype">Qu'est-ce qu'un Prototype ?</a>
    </div>

    <button class="dropdown-btn">Pratiques et Techniques</button>
    <div class="dropdown-container">
        <a href="#techniques-wireframe">Techniques de Wireframing</a>
        <a href="#techniques-prototype">Techniques de Prototypage</a>
    </div>

    <button class="dropdown-btn">Outils Populaires</button>
    <div class="dropdown-container">
        <a href="#tools-wireframe">Outils de Wireframing</a>
        <a href="#tools-prototype">Outils de Prototypage</a>
    </div>

    <button class="dropdown-btn">Bonnes Pratiques</button>
    <div class="dropdown-container">
        <a href="#best-practices">Conseils pour un Prototypage et un Wireframing Réussis</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Prototypage et Wireframing</h1>
        <p>Le prototypage et le wireframing sont des étapes clés dans le processus de conception, permettant d'élaborer la structure et l'expérience utilisateur d'un produit avant son développement complet.</p>

        <!-- Qu'est-ce qu'un Wireframe ? -->
        <section id="definition-wireframe">
            <h2>Qu'est-ce qu'un Wireframe ?</h2>
            <p><strong>Définition :</strong> Un wireframe est un schéma de base qui montre la disposition des éléments d'une page ou d'une interface sans détails graphiques. Il sert de plan architectural pour l'agencement du contenu.</p>
            <p><strong>Importance :</strong> Le wireframe permet de structurer l'interface et de s'assurer que toutes les fonctionnalités nécessaires sont représentées avant de commencer le prototypage et le design final.</p>
            <div class="example-box" style="border: 1px solid #ccc; padding: 10px;">
                <p>Exemple de Wireframe simple :</p>
                <div style="border: 1px solid #000; padding: 10px; margin-bottom: 10px;">Header</div>
                <div style="border: 1px solid #000; padding: 10px; margin-bottom: 10px;">Section principale (contenu, texte)</div>
                <div style="border: 1px solid #000; padding: 10px; margin-bottom: 10px;">Sidebar</div>
                <div style="border: 1px solid #000; padding: 10px;">Footer</div>
            </div>
        </section>

        <!-- Qu'est-ce qu'un Prototype ? -->
        <section id="definition-prototype">
            <h2>Qu'est-ce qu'un Prototype ?</h2>
            <p><strong>Définition :</strong> Un prototype est une version interactive du produit qui simule l'expérience utilisateur finale. Contrairement au wireframe, il peut inclure des éléments graphiques, de la navigation et des interactions pour tester l'ergonomie de l'interface.</p>
            <p><strong>Importance :</strong> Le prototypage permet de valider les hypothèses de conception, de tester l'interface avec des utilisateurs réels et d'obtenir des retours avant le développement final.</p>
            <div class="example-box" style="border: 1px solid #ccc; padding: 10px;">
                <p>Exemple de prototype (non-fonctionnel dans cet exemple) :</p>
                <button type="button" class="btn btn-primary">Cliquez ici pour tester</button>
            </div>
        </section>

        <!-- Techniques de Wireframing -->
        <section id="techniques-wireframe">
            <h2>Techniques de Wireframing</h2>
            <ul>
                <li><strong>Wireframes sur papier :</strong> Dessiner rapidement les éléments de l'interface pour des idées initiales.</li>
                <li><strong>Wireframes numériques :</strong> Utiliser des outils comme Figma ou Sketch pour créer des versions numériques précises et partagées.</li>
                <li><strong>Wireframes interactifs :</strong> Permettent de naviguer entre différentes sections pour visualiser l'expérience utilisateur.</li>
            </ul>
            <p><strong>Exemple :</strong></p>
            <pre><code>
            Wireframe de base :
            [Header]
            [Contenu Principal] [Sidebar]
            [Footer]
            </code></pre>
        </section>

        <!-- Techniques de Prototypage -->
        <section id="techniques-prototype">
            <h2>Techniques de Prototypage</h2>
            <ul>
                <li><strong>Prototype statique :</strong> Utilisé pour montrer la structure sans interactions complexes.</li>
                <li><strong>Prototype interactif :</strong> Permet de simuler les flux d'utilisateurs avec des boutons cliquables et des transitions.</li>
                <li><strong>Prototype de haute-fidélité :</strong> Inclut des éléments graphiques, des animations et des interactions proches de la version finale.</li>
            </ul>
            <p><strong>Exemple :</strong></p>
            <pre><code>
            Prototype interactif de page de connexion :
            [Nom d'utilisateur] [Mot de passe] [Bouton Connexion]
            </code></pre>
        </section>

        <!-- Outils de Wireframing -->
        <section id="tools-wireframe">
            <h2>Outils de Wireframing</h2>
            <ul>
                <li><strong>Balsamiq :</strong> Un outil populaire pour créer des wireframes rapides et basiques.</li>
                <li><strong>Figma :</strong> Permet de réaliser des wireframes collaboratifs avec une interface simple et des options de partage.</li>
                <li><strong>Sketch :</strong> Utilisé pour les wireframes de haute-fidélité et les conceptions plus détaillées.</li>
            </ul>
        </section>

        <!-- Outils de Prototypage -->
        <section id="tools-prototype">
            <h2>Outils de Prototypage</h2>
            <ul>
                <li><strong>InVision :</strong> Un des outils de prototypage les plus courants, permettant des retours rapides grâce aux commentaires intégrés.</li>
                <li><strong>Adobe XD :</strong> Permet de créer des prototypes interactifs et de collaborer facilement avec les équipes.</li>
                <li><strong>Marvel :</strong> Simple d’utilisation, cet outil permet de créer des prototypes en quelques étapes.</li>
            </ul>
        </section>

        <!-- Bonnes Pratiques -->
        <section id="best-practices">
            <h2>Conseils pour un Prototypage et un Wireframing Réussis</h2>
            <ul>
                <li><strong>Simplifier au maximum les wireframes :</strong> Se concentrer sur la disposition sans se soucier des détails visuels.</li>
                <li><strong>Impliquer les utilisateurs :</strong> Obtenir des retours sur les wireframes et prototypes pour adapter le produit aux besoins réels.</li>
                <li><strong>Éviter les éléments trop détaillés dans les premières étapes :</strong> Commencer par un wireframe basique, puis ajouter des détails progressivement.</li>
                <li><strong>Tester l'interactivité des prototypes :</strong> Assurer que chaque clic ou interaction fonctionne comme prévu pour une expérience utilisateur fluide.</li>
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
