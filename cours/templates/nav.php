<!-- Bouton pour ouvrir le modal avec icône de menu burger -->
<button id="menu-btn" type="button" class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#navigationModal">
    <i class="fas fa-bars"></i>
</button>

<!-- Modal de navigation en haut -->
<div class="modal fade" id="navigationModal" tabindex="-1" aria-labelledby="navigationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="navigationModalLabel">Navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">

                <nav class="nav flex-column">
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=home">Accueil</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_complet">Cours complet du développeur moderne</a>

                    <!-- HTML et CSS -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">HTML et CSS</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_html">Cours HTML</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_css">Cours CSS</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_bootstrap">Bootstrap</a>

                    <!-- UX/UI -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">UX/UI</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_ux">Introduction à l'UX</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_ui">Introduction à l'UI</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_accessibilite">Accessibilité Web</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_prototypage">Prototypage et Wireframes</a>

                    <!-- Langages de Programmation -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">Langages de Programmation</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_js">JavaScript</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_php">PHP</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_python">Python</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_java">Java</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_rust">Rust</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_go">Go</a>

                    <!-- Frameworks et Bibliothèques -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">Frameworks et Bibliothèques</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_ajax">AJAX</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_react">React</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_vue">Vue.js</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_angular">Angular</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_django">Django</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_laravel">Laravel</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_tailwind">Tailwind CSS</a>

                    <!-- Containerisation et DevOps -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">Containerisation et DevOps</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_docker">Docker</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_kubernetes">Kubernetes</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_ci_cd">CI/CD</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_ansible">Ansible</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_terraform">Terraform</a>

                    <!-- Bases de Données -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">Bases de Données</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_sql">SQL</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_mysql">MySQL</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_mongodb">MongoDB</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_postgresql">PostgreSQL</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_redis">Redis</a>

                    <!-- Méthodologies -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">Méthodologies</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_scrum">Scrum</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_kanban">Kanban</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_agile">Méthodologie Agile</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_tdd">Développement Dirigé par les Tests (TDD)</a>

                    <!-- Sécurité et Bonnes Pratiques -->
                    <h3 class="mt-3 category-title" style="background: #0056b3;">Sécurité et Bonnes Pratiques</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_securite_web">Sécurité Web</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_bonnes_pratiques_code">Bonnes Pratiques de Code</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_gestion_erreurs">Gestion des Erreurs</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_tests_unitaires">Tests Unitaires</a>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=cours_performance">Optimisation de la Performance</a>

                    <h3 class="mt-3 category-title" style="background: #0056b3;">Mes fiches de révisions</h3>
                    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=memo">Memo</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Bouton pour ouvrir la sidebar -->
<button id="sidebarToggle" class="sidebar-toggle-btn">
    <i class="fas fa-bars"></i>
</button>
<!-- Boutons pour naviguer en haut et en bas -->
<button onclick="topFunction()" id="scrollToTopBtn" title="Retour en haut" class="scroll-btn">
    <i class="fas fa-arrow-up"></i>
</button>
<button onclick="bottomFunction()" id="scrollToBottomBtn" title="Aller en bas" class="scroll-btn">
    <i class="fas fa-arrow-down"></i>
</button>

<!-- Styles CSS pour personnaliser le modal et les boutons -->
<style>
    /* Style général du modal */
    .modal-content {
        background: #f8f9fa;
        color: #212529;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        font-family: Arial, sans-serif;
    }

    .modal-header {
        background-color: #e3f2fd;
        color: #fff;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    /* Style des liens de navigation */
    .modal-body .nav-link {
        font-size: 18px;
        color: #007bff;
        padding: 12px;
        border-radius: 8px;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .modal-body .nav-link:hover {
        background-color: #e9ecef;
        color: #0056b3;
    }

    /* Style des titres de catégorie */
    .category-title {
        font-size: 20px;
        margin: 20px 0 10px;
        color: white;
        font-weight: bold;
        background-color: #e3f2fd;
        border-radius: 8px;
        padding: 8px;
    }

    /* Style des boutons fixes en bas */
    #menu-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #007bff;
        color: white;
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1050;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #menu-btn:hover {
        background-color: #0056b3;
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Style des boutons de navigation en haut et en bas */
    .scroll-btn {
        position: fixed;
        bottom: 100px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        display: none;
        align-items: center;
        justify-content: center;
        transition: background-color 0.2s ease;
    }

    .scroll-btn:hover {
        background-color: #0056b3;
    }

</style>

<!-- Scripts JavaScript pour le comportement du bouton de défilement et le modal -->
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    document.getElementById("scrollToTopBtn").style.display = 
        (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" : "none";
    
    document.getElementById("scrollToBottomBtn").style.display = 
        ((window.innerHeight + window.scrollY) < document.body.offsetHeight) ? "block" : "none";
}

function topFunction() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function bottomFunction() {
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
}
</script>

<!-- Liens de scripts JavaScript Bootstrap pour activer le modal -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
