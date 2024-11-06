<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Liste des Cours</title>
    <!-- Bootstrap pour le style et la mise en forme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>

<?php include 'templates/nav.php'; ?>
<div class="sidebar">
    <h2>Menu</h2>
    <a href="index.php?page=home">Accueil</a>
    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=memo">Memo</a>
    <h4>HTML et CSS</h4>
    <a href="index.php?page=cours_html">Cours HTML</a>
    <a href="index.php?page=cours_css">Cours CSS</a>
    <a href="index.php?page=cours_bootstrap">Bootstrap</a>
    
    <h4>UX/UI</h4>
    <a href="index.php?page=cours_ux">Introduction à l'UX</a>
    <a href="index.php?page=cours_ui">Introduction à l'UI</a>
    <a href="index.php?page=cours_accessibilite">Accessibilité Web</a>
    <a href="index.php?page=cours_prototypage">Prototypage et Wireframes</a>
    
    <h4>Langages de Programmation</h4>
    <a href="index.php?page=cours_js">JavaScript</a>
    <a href="index.php?page=cours_php">PHP</a>
    <a href="index.php?page=cours_python">Python</a>
    <a href="index.php?page=cours_java">Java</a>
    <a href="index.php?page=cours_rust">Rust</a>
    <a href="index.php?page=cours_go">Go</a>
    
    <h4>Frameworks et Bibliothèques</h4>
    <a href="index.php?page=cours_ajax">AJAX</a>
    <a href="index.php?page=cours_react">React</a>
    <a href="index.php?page=cours_vue">Vue.js</a>
    <a href="index.php?page=cours_angular">Angular</a>
    <a href="index.php?page=cours_django">Django</a>
    <a href="index.php?page=cours_laravel">Laravel</a>
    <a href="index.php?page=cours_tailwind">Tailwind CSS</a>
    
    <h4>Containerisation et DevOps</h4>
    <a href="index.php?page=cours_docker">Docker</a>
    <a href="index.php?page=cours_kubernetes">Kubernetes</a>
    <a href="index.php?page=cours_ci_cd">CI/CD</a>
    <a href="index.php?page=cours_ansible">Ansible</a>
    <a href="index.php?page=cours_terraform">Terraform</a>
    
    <h4>Bases de Données</h4>
    <a href="index.php?page=cours_sql">SQL</a>
    <a href="index.php?page=cours_mysql">MySQL</a>
    <a href="index.php?page=cours_mongodb">MongoDB</a>
    <a href="index.php?page=cours_postgresql">PostgreSQL</a>
    <a href="index.php?page=cours_redis">Redis</a>
    
    <h4>Méthodologies</h4>
    <a href="index.php?page=cours_scrum">Scrum</a>
    <a href="index.php?page=cours_kanban">Kanban</a>
    <a href="index.php?page=cours_agile">Méthodologie Agile</a>
    <a href="index.php?page=cours_tdd">Développement Dirigé par les Tests (TDD)</a>
    
    <h4>Sécurité et Bonnes Pratiques</h4>
    <a href="index.php?page=cours_securite_web">Sécurité Web</a>
    <a href="index.php?page=cours_bonnes_pratiques_code">Bonnes Pratiques de Code</a>
    <a href="index.php?page=cours_gestion_erreurs">Gestion des Erreurs</a>
    <a href="index.php?page=cours_tests_unitaires">Tests Unitaires</a>
    <a href="index.php?page=cours_performance">Optimisation de la Performance</a>
</div>
<div class="container mt-5">
    <h1 class="text-primary text-center mb-4">Bienvenue au Centre de Cours</h1>
    <p class="text-center mb-5">Explorez une gamme de cours pour enrichir vos compétences en développement web, programmation et plus encore.</p>

    <div class="row">
        <!-- Section HTML et CSS -->
        <div class="col-12">
            <h3 class="text-secondary mb-3">HTML et CSS</h3>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cours HTML</h5>
                    <p class="card-text">Découvrez les bases du langage HTML pour structurer vos pages web.</p>
                    <a href="index.php?page=cours_html" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cours CSS</h5>
                    <p class="card-text">Apprenez à styliser vos pages web avec CSS pour des designs modernes.</p>
                    <a href="index.php?page=cours_css" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bootstrap</h5>
                    <p class="card-text">Utilisez Bootstrap pour un design rapide et moderne.</p>
                    <a href="index.php?page=cours_bootstrap" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Section UX/UI -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">UX/UI</h3>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Introduction à l'UX</h5>
                    <p class="card-text">Découvrez les principes de l'Expérience Utilisateur (UX).</p>
                    <a href="index.php?page=cours_ux" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Introduction à l'UI</h5>
                    <p class="card-text">Apprenez les bases de l'Interface Utilisateur (UI).</p>
                    <a href="index.php?page=cours_ui" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Accessibilité Web</h5>
                    <p class="card-text">Apprenez à rendre vos sites accessibles à tous les utilisateurs.</p>
                    <a href="index.php?page=cours_accessibilite" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Prototypage et Wireframes</h5>
                    <p class="card-text">Apprenez à créer des prototypes et wireframes.</p>
                    <a href="index.php?page=cours_prototypage" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Section Langages de Programmation -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Langages de Programmation</h3>
        </div>

        <!-- JavaScript -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">JavaScript</h5>
                    <p class="card-text">Maîtrisez JavaScript pour des pages interactives.</p>
                    <a href="index.php?page=cours_js" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- PHP -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text">Apprenez les bases de PHP pour le développement de sites dynamiques.</p>
                    <a href="index.php?page=cours_php" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Python -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Python</h5>
                    <p class="card-text">Apprenez Python pour la création de logiciels performants.</p>
                    <a href="index.php?page=cours_python" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Java -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Java</h5>
                    <p class="card-text">Apprenez Java, un langage polyvalent utilisé dans le développement web, mobile et plus.</p>
                    <a href="index.php?page=cours_java" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Rust -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rust</h5>
                    <p class="card-text">Découvrez Rust, un langage performant et sécurisé pour les systèmes modernes.</p>
                    <a href="index.php?page=cours_rust" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Go -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Go</h5>
                    <p class="card-text">Apprenez Go, le langage rapide et efficace créé par Google pour les applications en réseau.</p>
                    <a href="index.php?page=cours_go" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Section Frameworks et Bibliothèques -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Frameworks et Bibliothèques</h3>
        </div>
        <!-- Ajax -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">AJAX</h5>
                    <p class="card-text">Créez des pages asynchrones et sans rechargement de pages avec AJAX.</p>
                    <a href="index.php?page=cours_ajax" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>
        <!-- React -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">React</h5>
                    <p class="card-text">Créez des interfaces modernes avec React.</p>
                    <a href="index.php?page=cours_react" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Vue.js -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vue.js</h5>
                    <p class="card-text">Découvrez Vue.js pour construire des applications web dynamiques.</p>
                    <a href="index.php?page=cours_vue" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Angular -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Angular</h5>
                    <p class="card-text">Maîtrisez Angular pour le développement de front-end avancé.</p>
                    <a href="index.php?page=cours_angular" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Django -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Django</h5>
                    <p class="card-text">Apprenez Django, le framework Python pour le développement web rapide.</p>
                    <a href="index.php?page=cours_django" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Laravel -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Laravel</h5>
                    <p class="card-text">Développez des applications web robustes avec Laravel.</p>
                    <a href="index.php?page=cours_laravel" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Tailwind CSS -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tailwind CSS</h5>
                    <p class="card-text">Utilisez Tailwind CSS pour un design rapide et réactif.</p>
                    <a href="index.php?page=cours_tailwind" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>


        <!-- Section Containerisation et DevOps -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Containerisation et DevOps</h3>
        </div>

        <!-- Docker -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Docker</h5>
                    <p class="card-text">Apprenez Docker pour la gestion des conteneurs.</p>
                    <a href="index.php?page=cours_docker" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Kubernetes -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kubernetes</h5>
                    <p class="card-text">Maîtrisez Kubernetes pour l'orchestration de conteneurs.</p>
                    <a href="index.php?page=cours_kubernetes" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- CI/CD -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CI/CD</h5>
                    <p class="card-text">Découvrez l'intégration et le déploiement continus pour un développement agile.</p>
                    <a href="index.php?page=cours_ci_cd" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Ansible -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ansible</h5>
                    <p class="card-text">Automatisez la gestion de configurations avec Ansible.</p>
                    <a href="index.php?page=cours_ansible" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Terraform -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Terraform</h5>
                    <p class="card-text">Apprenez Terraform pour la gestion d'infrastructures en tant que code.</p>
                    <a href="index.php?page=cours_terraform" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>


        <!-- Section Bases de Données -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Bases de Données</h3>
        </div>

        <!-- SQL -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">SQL</h5>
                    <p class="card-text">Apprenez le langage SQL pour manipuler les données efficacement.</p>
                    <a href="index.php?page=cours_sql" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- MySQL -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">MySQL</h5>
                    <p class="card-text">Découvrez MySQL, un système de gestion de base de données populaire et puissant.</p>
                    <a href="index.php?page=cours_mysql" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- MongoDB -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">MongoDB</h5>
                    <p class="card-text">Explorez MongoDB, une base de données NoSQL pour des données flexibles et scalables.</p>
                    <a href="index.php?page=cours_mongodb" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- PostgreSQL -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PostgreSQL</h5>
                    <p class="card-text">Apprenez PostgreSQL, une base de données avancée et open-source.</p>
                    <a href="index.php?page=cours_postgresql" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Redis -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Redis</h5>
                    <p class="card-text">Découvrez Redis, une base de données en mémoire pour des performances ultra-rapides.</p>
                    <a href="index.php?page=cours_redis" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>


        <!-- Section Méthodologies -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Méthodologies</h3>
        </div>

        <!-- Scrum -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Scrum</h5>
                    <p class="card-text">Découvrez la méthodologie Scrum pour une meilleure gestion de projet.</p>
                    <a href="index.php?page=cours_scrum" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Kanban -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kanban</h5>
                    <p class="card-text">Apprenez Kanban pour une gestion de flux de travail efficace.</p>
                    <a href="index.php?page=cours_kanban" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Méthodologie Agile -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Méthodologie Agile</h5>
                    <p class="card-text">Explorez la méthodologie Agile pour des projets flexibles et collaboratifs.</p>
                    <a href="index.php?page=cours_agile" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- TDD (Test-Driven Development) -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Développement Dirigé par les Tests (TDD)</h5>
                    <p class="card-text">Apprenez le TDD pour un développement axé sur la qualité et la fiabilité.</p>
                    <a href="index.php?page=cours_tdd" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>


        <!-- Section Sécurité et Bonnes Pratiques -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Sécurité et Bonnes Pratiques</h3>
        </div>

        <!-- Sécurité Web -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sécurité Web</h5>
                    <p class="card-text">Maîtrisez les bonnes pratiques de sécurité pour protéger vos applications.</p>
                    <a href="index.php?page=cours_securite_web" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Bonnes Pratiques de Code -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bonnes Pratiques de Code</h5>
                    <p class="card-text">Découvrez les meilleures pratiques pour écrire un code propre et maintenable.</p>
                    <a href="index.php?page=cours_bonnes_pratiques_code" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Gestion des Erreurs -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gestion des Erreurs</h5>
                    <p class="card-text">Apprenez les techniques pour gérer les erreurs et assurer la stabilité de votre application.</p>
                    <a href="index.php?page=cours_gestion_erreurs" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Tests Unitaires -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tests Unitaires</h5>
                    <p class="card-text">Maîtrisez les tests unitaires pour garantir la qualité de votre code.</p>
                    <a href="index.php?page=cours_tests_unitaires" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>

        <!-- Optimisation de la Performance -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Optimisation de la Performance</h5>
                    <p class="card-text">Découvrez les techniques pour améliorer la performance de vos applications web.</p>
                    <a href="index.php?page=cours_performance" class="btn btn-primary">Voir le cours</a>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- Bootstrap JS pour les fonctionnalités responsive -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
