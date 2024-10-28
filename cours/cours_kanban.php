<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthodologie Kanban - Cours Complet</title>
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
    <h3 style="padding-left: 15px; font-weight: bold;">Méthodologie Kanban</h3>
    <button class="dropdown-btn">Introduction à Kanban</button>
    <div class="dropdown-container">
        <a href="#what-is-kanban">Qu'est-ce que Kanban ?</a>
    </div>
    <button class="dropdown-btn">Principes de Kanban</button>
    <div class="dropdown-container">
        <a href="#kanban-principles">Principe de Flux, Limites WIP</a>
    </div>
    <button class="dropdown-btn">Outils Kanban</button>
    <div class="dropdown-container">
        <a href="#kanban-tools">Tableau, Cartes, Colonne</a>
    </div>
    <button class="dropdown-btn">Pratiques de Kanban</button>
    <div class="dropdown-container">
        <a href="#kanban-practices">Visualisation, Limitation des tâches</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Méthodologie Kanban</h1>
        <p>Kanban est une méthode Agile axée sur la visualisation et la gestion du flux de travail pour optimiser la productivité et l'efficacité. Elle est particulièrement utile pour les équipes souhaitant améliorer continuellement leurs processus.</p>

        <!-- Qu'est-ce que Kanban ? -->
        <section id="what-is-kanban">
            <h2>Qu'est-ce que Kanban ?</h2>
            <p><strong>Kanban</strong> est un système de gestion du travail qui utilise des tableaux visuels pour suivre les tâches dans différentes étapes du flux de travail. Chaque tâche est représentée par une carte et progresse de colonne en colonne, représentant des étapes telles que "À faire", "En cours" et "Terminé".</p>
            <p>Kanban favorise l'optimisation continue du flux de travail en identifiant et en éliminant les blocages qui ralentissent la productivité.</p>
        </section>

        <!-- Principes de Kanban -->
        <section id="kanban-principles">
            <h2>Principes de Kanban</h2>
            <ul>
                <li><strong>Visualiser le travail</strong> : Utiliser des tableaux et des cartes pour afficher toutes les tâches en cours, facilitant le suivi et la communication.</li>
                <li><strong>Limiter le Travail en Cours (WIP)</strong> : Éviter de commencer trop de tâches à la fois en limitant le nombre d'éléments actifs dans chaque étape.</li>
                <li><strong>Gérer le Flux</strong> : Observer le flux de travail pour identifier les blocages et améliorer continuellement la productivité.</li>
                <li><strong>Amélioration Continue</strong> : Chercher constamment des moyens d'optimiser les processus et de réduire les délais.</li>
            </ul>
        </section>

        <!-- Outils Kanban -->
        <section id="kanban-tools">
            <h2>Outils Kanban</h2>
            <ul>
                <li><strong>Tableau Kanban</strong> : Un tableau visuel divisé en colonnes représentant les étapes du flux de travail. Par exemple, un tableau peut inclure les colonnes "À faire", "En cours" et "Terminé".</li>
                <li><strong>Cartes Kanban</strong> : Représentent les tâches individuelles, avec des détails tels que les responsables, la date d'échéance, et la priorité.</li>
                <li><strong>Colonnes</strong> : Chaque colonne correspond à une étape spécifique dans le flux de travail, permettant de suivre la progression de chaque tâche.</li>
            </ul>
        </section>

        <!-- Pratiques de Kanban -->
        <section id="kanban-practices">
            <h2>Pratiques de Kanban</h2>
            <p>Les pratiques Kanban sont essentielles pour gérer efficacement le flux de travail :</p>
            <ul>
                <li><strong>Visualiser le Flux de Travail</strong> : Afficher les tâches et leur statut pour une transparence totale.</li>
                <li><strong>Limiter les Tâches en Cours (WIP)</strong> : En fixant des limites de WIP, les équipes évitent de surcharger les membres et réduisent les retards.</li>
                <li><strong>Mesurer et Gérer le Flux</strong> : Analyser les données du tableau, comme le temps de cycle, pour identifier et résoudre les goulots d'étranglement.</li>
                <li><strong>Retrospectives</strong> : Organiser régulièrement des réunions pour discuter des améliorations et ajuster les processus.</li>
            </ul>
        </section>
    </div>
</div>

<!-- Modals pour les exemples de Kanban -->
<div class="modal fade" id="kanbanExampleModal" tabindex="-1" role="dialog" aria-labelledby="kanbanExampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kanbanExampleModalLabel">Exemple de Tableau Kanban</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>Exemple : Dans une équipe de développement, un tableau Kanban comporte les colonnes "À faire", "En cours", "En révision" et "Terminé". Chaque tâche passe par ces étapes jusqu'à son achèvement.</pre>
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
