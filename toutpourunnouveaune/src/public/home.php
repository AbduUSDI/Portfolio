<?php
session_start();
require_once '../../vendor/autoload.php';
$db = (new Database\DatabaseConnection())->connect();

require_once '../views/templates/header.php';
require_once '../views/templates/navbar.php';

?>

<div class="container my-5">
    <div class="text-center">
        <h1 id="main-title" class="display-4 font-weight-bold">Tout pour un nouveau-né</h1>
        <img class="img-fluid w-100" src="/Portfolio/toutpourunnouveaune/assets/image/first_screen.webp">
        <p class="lead mt-4 mb-5"><strong>Bienvenue sur notre site "Tout pour un nouveau-né". Ce site a pour but de vous aider à réussir dans votre nouvelle vie de parents. Nous vous proposons des ressources variées, allant des conseils médicaux aux recettes pour bébés, en passant par des quizz interactifs et un forum pour échanger avec d'autres parents. Nous espérons que vous trouverez ici tout ce dont vous avez besoin pour traverser cette merveilleuse aventure avec votre bébé.</strong></p>
    </div>
    
    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 mb-4 fade-in-left">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/Portfolio/toutpourunnouveaune/assets/image/avimedicaux.jpg" alt="Avis Médicaux">
                <div class="card-body text-center">
                    <h3 class="card-title">Avis Médicaux</h3>
                    <p class="card-text">Consultez les conseils et recommandations de professionnels de santé pour assurer le bien-être de votre bébé et de toute la famille.</p>
                    <a href="/Portfolio/toutpourunnouveaune/medicaladvices" class="button">Voir les avis médicaux</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 fade-in-right">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/Portfolio/toutpourunnouveaune/assets/image/quiz.jpg" alt="Quizz">
                <div class="card-body text-center">
                    <h3 class="card-title">Quizz</h3>
                    <p class="card-text">Testez vos connaissances sur les soins et le développement de votre bébé avec nos quizz interactifs et informatifs.</p>
                    <a href="/Portfolio/toutpourunnouveaune/quizzes" class="button">Essayer nos quizz</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 fade-in-left">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/Portfolio/toutpourunnouveaune/assets/image/recettes.jpg" alt="Recettes pour Bébé">
                <div class="card-body text-center">
                    <h3 class="card-title">Recettes pour Bébé</h3>
                    <p class="card-text">Découvrez des recettes saines et délicieuses spécialement conçues pour les tout-petits, adaptées aux besoins nutritionnels de votre bébé.</p>
                    <a href="/Portfolio/toutpourunnouveaune/recipes" class="button">Voir les recettes</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 fade-in-right">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/Portfolio/toutpourunnouveaune/assets/image/guides.jpg" alt="Guides et Conseils">
                <div class="card-body text-center">
                    <h3 class="card-title">Guides et Conseils</h3>
                    <p class="card-text">Lisez nos guides détaillés et conseils pratiques sur la nutrition, la santé et le développement de votre enfant.</p>
                    <a href="/Portfolio/toutpourunnouveaune/guides" class="button">Explorer nos guides</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 fade-in-left">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/Portfolio/toutpourunnouveaune/assets/image/forum.jpg" alt="Forum">
                <div class="card-body text-center">
                    <h3 class="card-title">Forum</h3>
                    <p class="card-text">Rejoignez notre forum pour échanger avec d'autres parents, poser vos questions et partager vos expériences.</p>
                    <a href="/Portfolio/toutpourunnouveaune/forum" class="button">Accéder au forum</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Supprime l'observation après apparition
            }
        });
    }, { threshold: 0.1 });

    // Sélectionne tous les éléments qui doivent apparaître à partir de la gauche ou de la droite
    const elements = document.querySelectorAll('.fade-in-left, .fade-in-right');
    elements.forEach(el => observer.observe(el));
});
</script>
<?php require_once '../views/templates/footer.php'; ?> 
