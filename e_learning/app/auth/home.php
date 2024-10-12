<?php
        include_once '../../public/templates/header_visitor.php';
        include_once '../../public/templates/navbar.php';
?>
<style>
    body {
        background: white;
    }
</style>
<!-- Section Héro -->
    <div class="hero">
        <div>
            <h1 style="color: white;">Bienvenue sur la plateforme E-Learning</h1>
            <p style="color: white;">Boostez votre avenir avec les meilleurs cours en ligne</p>
            <a href="/Portfolio/e_learning/login" class="btn btn-info btn-lg">Connecte-toi !</a>
        </div>
    </div>

    <!-- Carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Diapositive 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Diapositive 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Diapositive 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/Portfolio/e_learning/public/image_and_video/webp/imagework.webp" class="d-block w-100" alt="Apprenez à votre rythme">
            </div>
            <div class="carousel-item">
                <img src="/Portfolio/e_learning/public/image_and_video/webp/skills.webp" class="d-block w-100" alt="Explorez de nouvelles compétences">
            </div>
            <div class="carousel-item">
                <img src="/Portfolio/e_learning/public/image_and_video/webp/community.webp" class="d-block w-100" alt="Rejoignez une communauté d'apprenants">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- Section Caractéristiques -->
    <div class="features container mt-5">
        <h2>Nos principales caractéristiques</h2>
        <div class="row">
            <div class="col-md-4 feature-item">
                <img src="/Portfolio/e_learning/public/image_and_video/webp/HighQuality.webp" alt="Caractéristique 1">
                <h4>Cours de haute qualité</h4>
                <p>Accédez à une vaste gamme de cours de haute qualité dispensés par des experts du secteur.</p>
            </div>
            <div class="col-md-4 feature-item">
                <img src="/Portfolio/e_learning/public/image_and_video/webp/Flexible.webp" alt="Caractéristique 2">
                <h4>Apprentissage flexible</h4>
                <p>Apprenez à votre rythme, à tout moment, n'importe où, sur n'importe quel appareil.</p>
            </div>
            <div class="col-md-4 feature-item">
                <img src="/Portfolio/e_learning/public/image_and_video/webp/Interactive.webp" alt="Caractéristique 3">
                <h4>Contenu interactif</h4>
                <p>Engagez-vous avec du contenu interactif et participez à des discussions animées.</p>
            </div>
        </div>
    </div>

<?php include_once '../../public/templates/footer_visitor.php'; ?>
