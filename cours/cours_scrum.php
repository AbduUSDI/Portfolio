<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthodologie Scrum - Cours Complet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php'; ?>

<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">Méthodologie Scrum</h3>
    <button class="dropdown-btn">Introduction à Scrum</button>
    <div class="dropdown-container">
        <a href="#what-is-scrum">Qu'est-ce que Scrum ?</a>
    </div>
    <button class="dropdown-btn">Rôles de Scrum</button>
    <div class="dropdown-container">
        <a href="#scrum-roles">Product Owner, Scrum Master, Équipe de Développement</a>
    </div>
    <button class="dropdown-btn">Événements Scrum</button>
    <div class="dropdown-container">
        <a href="#scrum-events">Sprint, Daily Scrum, Revue de Sprint, Rétrospective</a>
    </div>
    <button class="dropdown-btn">Artefacts Scrum</button>
    <div class="dropdown-container">
        <a href="#scrum-artifacts">Backlog Produit, Backlog de Sprint, Incrément</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Méthodologie Scrum</h1>
        <p>Scrum est une méthodologie Agile permettant de gérer des projets de manière itérative et incrémentale. Elle favorise la collaboration, la flexibilité et la livraison continue de valeur aux utilisateurs.</p>

        <!-- Qu'est-ce que Scrum ? -->
        <section id="what-is-scrum">
            <h2>Qu'est-ce que Scrum ?</h2>
            <p><strong>Scrum</strong> est un cadre de travail Agile utilisé pour le développement de produits complexes. Il se concentre sur l'apprentissage continu et les ajustements basés sur les retours des utilisateurs. Scrum est divisé en cycles appelés <em>sprints</em>, où une équipe itère et livre des fonctionnalités prêtes à être utilisées.</p>
            <p>Les éléments fondamentaux de Scrum sont les rôles, les événements et les artefacts, chacun jouant un rôle essentiel dans la réussite de la méthodologie.</p>
        </section>

        <!-- Rôles de Scrum -->
        <section id="scrum-roles">
            <h2>Rôles de Scrum</h2>
            <ul>
                <li><strong>Product Owner</strong> : Responsable de maximiser la valeur du produit. Il gère le backlog produit en priorisant les fonctionnalités selon les besoins des utilisateurs et les objectifs de l'entreprise.</li>
                <li><strong>Scrum Master</strong> : Facilite le processus Scrum et élimine les obstacles rencontrés par l'équipe. Il est le garant de l'application des principes Scrum et aide l'équipe à rester concentrée et productive.</li>
                <li><strong>Équipe de Développement</strong> : Composée de professionnels polyvalents qui travaillent ensemble pour livrer des incréments de produit fonctionnels à chaque sprint.</li>
            </ul>
        </section>

        <!-- Événements Scrum -->
        <section id="scrum-events">
            <h2>Événements Scrum</h2>
            <p>Les événements Scrum sont conçus pour structurer le processus et maximiser la transparence et l'amélioration continue :</p>
            <ul>
                <li><strong>Sprint</strong> : Cycle de travail itératif de 1 à 4 semaines. Chaque sprint aboutit à un incrément de produit fonctionnel.</li>
                <li><strong>Planification de Sprint</strong> : Réunion où l'équipe décide des éléments du backlog produit à inclure dans le sprint et établit un plan de travail.</li>
                <li><strong>Daily Scrum</strong> : Réunion quotidienne de 15 minutes pour synchroniser le travail de l'équipe et adapter le plan de travail si nécessaire.</li>
                <li><strong>Revue de Sprint</strong> : Réunion de fin de sprint où l'équipe présente l'incrément aux parties prenantes et recueille leurs retours.</li>
                <li><strong>Rétrospective de Sprint</strong> : Réunion interne où l'équipe analyse le sprint écoulé et identifie des actions d'amélioration pour le prochain sprint.</li>
            </ul>
        </section>

        <!-- Artefacts Scrum -->
        <section id="scrum-artifacts">
            <h2>Artefacts Scrum</h2>
            <p>Les artefacts Scrum fournissent de la transparence et définissent le travail à faire ainsi que l'avancement :</p>
            <ul>
                <li><strong>Backlog Produit</strong> : Liste des fonctionnalités, améliorations, et corrections à réaliser pour le produit. Le Product Owner est responsable de sa gestion et priorisation.</li>
                <li><strong>Backlog de Sprint</strong> : Liste des tâches que l'équipe s'engage à réaliser pendant le sprint en cours. Il est mis à jour en continu en fonction des besoins du sprint.</li>
                <li><strong>Incrément</strong> : Ensemble des éléments terminés du backlog produit à la fin d'un sprint. Il représente une étape d'avancement tangible du produit.</li>
            </ul>
        </section>
    </div>
</div>

<!-- Modals pour les exemples de Scrum -->
<div class="modal fade" id="sprintModal" tabindex="-1" role="dialog" aria-labelledby="sprintModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sprintModalLabel">Exemple de Sprint</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>Exemple : L'équipe de développement travaille sur l'ajout d'une fonctionnalité de paiement en ligne sur un site e-commerce. À la fin du sprint, la fonctionnalité est testée et prête à être utilisée par les utilisateurs.</pre>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
