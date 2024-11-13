<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background: linear-gradient(to right, #b15974, #841c3c);">
    <a class="navbar-brand text-white" href="/Portfolio/toutpourunnouveaune/home">Tout pour un nouveau né</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/home">Accueil</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/food_presentations">Conseils de nutrition</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/quizzes">Nos quizz</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/guides">Nos guides pour les parents</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/recipes">Diversification alimentaire / Recettes</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/contact">Nous contacter</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/medicaladvices">Les avis médicaux</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/forum">Le forum</a>
            </li>
            <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/logout">Déconnexion</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/login">Connexion</a>
                </li>
            <?php endif; ?>

            <!-- Ici utilisation de if pour afficher un bouton seulement si l'utilisateur ayant le rôle en question est connecté, sinon rien ne s'affichera -->
            
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1): ?>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/admin">Mon espace administrateur</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2): ?>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/doctor">Mon espace docteur</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 3): ?>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link text-white" href="/Portfolio/toutpourunnouveaune/parent">Mon espace parent</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
