<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthodologie Agile - Cours Complet</title>
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
    <h3 style="padding-left: 15px; font-weight: bold;">Méthodologie Agile</h3>
    <button class="dropdown-btn">Introduction à Agile</button>
    <div class="dropdown-container">
        <a href="#what-is-agile">Définition et Origine</a>
    </div>
    <button class="dropdown-btn">Principes d'Agile</button>
    <div class="dropdown-container">
        <a href="#agile-principles">Manifesto Agile et ses 12 Principes</a>
    </div>
    <button class="dropdown-btn">Processus Agile</button>
    <div class="dropdown-container">
        <a href="#agile-process">Étapes et Cycle de Vie</a>
    </div>
    <button class="dropdown-btn">Pratiques d'Agile</button>
    <div class="dropdown-container">
        <a href="#agile-practices">User Stories, Réunions, Rétrospectives</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Méthodologie Agile</h1>
        <p>La méthodologie Agile est une approche itérative et flexible qui met l'accent sur la collaboration, la livraison rapide de valeur, et l'adaptation continue aux besoins changeants des utilisateurs.</p>

        <!-- Qu'est-ce que la Méthodologie Agile ? -->
        <section id="what-is-agile">
            <h2>Qu'est-ce que la Méthodologie Agile ?</h2>
            <p><strong>Définition :</strong> Agile est une méthodologie de gestion de projet favorisant les livraisons fréquentes de fonctionnalités à travers des cycles courts appelés "sprints". Cela permet une adaptation rapide aux retours des utilisateurs et aux changements de priorités.</p>
            <p><strong>Origine :</strong> Agile a été formalisé en 2001 par le "Manifeste Agile" qui définit des valeurs et des principes guidant les équipes vers une meilleure collaboration et flexibilité.</p>
        </section>

        <!-- Manifesto Agile et ses Principes -->
        <section id="agile-principles">
            <h2>Manifesto Agile et ses 12 Principes</h2>
            <ul>
                <li><strong>Individu et interactions</strong> plutôt que processus et outils.</li>
                <li><strong>Collaboration avec le client</strong> plus qu'une négociation contractuelle.</li>
                <li><strong>Réponse au changement</strong> plutôt que suivi d'un plan.</li>
                <li><strong>Livraison continue</strong> de fonctionnalités pour obtenir des retours réguliers.</li>
            </ul>
            <p><strong>Les 12 Principes d'Agile</strong> incluent l'amélioration continue, la motivation des équipes, et la simplicité pour maximiser l'efficacité.</p>
        </section>

        <!-- Processus et Cycle de Vie d'Agile -->
        <section id="agile-process">
            <h2>Processus et Cycle de Vie d'Agile</h2>
            <ol>
                <li><strong>Planification du Sprint</strong> : Déterminer les tâches et les objectifs du sprint.</li>
                <li><strong>Développement</strong> : Les équipes travaillent sur les fonctionnalités pendant la durée du sprint.</li>
                <li><strong>Livraison</strong> : Présentation des fonctionnalités complètes au client pour obtenir des retours.</li>
                <li><strong>Rétrospective</strong> : Analyse des succès et des points d'amélioration pour le sprint suivant.</li>
            </ol>
            <p>Chaque cycle se répète, offrant une opportunité constante d'amélioration et d'ajustement en fonction des retours utilisateurs.</p>
        </section>

        <!-- Pratiques Courantes en Agile -->
        <section id="agile-practices">
            <h2>Pratiques Courantes en Agile</h2>
            <ul>
                <li><strong>User Stories</strong> : Définir les exigences du projet en petites tâches centrées sur l'utilisateur.</li>
                <li><strong>Réunions Quotidiennes (Daily Stand-up)</strong> : Synchroniser les équipes sur les avancées et les obstacles du jour.</li>
                <li><strong>Rétrospectives</strong> : Analyse post-sprint pour discuter de ce qui a fonctionné et ce qui doit être amélioré.</li>
            </ul>
            <p>Ces pratiques permettent une adaptation rapide, une collaboration renforcée et une transparence accrue dans le développement des projets.</p>
        </section>

        <!-- Exemple de Projet Agile -->
        <div class="modal fade" id="agileExampleModal" tabindex="-1" role="dialog" aria-labelledby="agileExampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agileExampleModalLabel">Exemple de Projet Agile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>Dans un projet de développement d'application mobile, chaque sprint pourrait inclure la mise en œuvre d'une fonctionnalité spécifique (inscription utilisateur, notifications, etc.), testée et validée par le client avant de passer au sprint suivant.</pre>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agileExampleModal">
            Voir Exemple de Projet Agile
        </button>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
