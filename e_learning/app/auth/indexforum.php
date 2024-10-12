<?php
include_once '../../public/templates/header_visitor.php';
include_once '../../public/templates/navbar.php';
?>
    <!-- Forum Description Section -->
    <section class="forum-section containerr">
        <div class="container">
            <h1 class="text-center mb-5 text-white">Voici ce que notre forum propose :</h1>
            <p class="text-center mb-5 text-white">Notre forum est l'endroit idéal pour échanger des idées, poser des questions, et apprendre de notre communauté. Que vous soyez étudiant, formateur, ou simplement curieux, vous y trouverez une richesse de connaissances partagées par des membres passionnés.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="forum-card">
                        <img src="/Portfolio/e_learning/public/image_and_video/webp/gendiscuss.webp" alt="Discussions Générales">
                        <div class="forum-title">Discussions Générales</div>
                        <div class="forum-description">Participez aux discussions sur une variété de sujets liés à l'éducation et au développement personnel.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="forum-card">
                        <img src="/Portfolio/e_learning/public/image_and_video/webp/homework.webp" alt="Aide aux Devoirs">
                        <div class="forum-title">Aide aux Devoirs</div>
                        <div class="forum-description">Besoin d'aide pour vos devoirs ? Posez vos questions et obtenez des réponses de notre communauté.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="forum-card">
                        <img src="/Portfolio/e_learning/public/image_and_video/webp/ressource.webp" alt="Partage de Ressources">
                        <div class="forum-title">Partage de Ressources</div>
                        <div class="forum-description">Découvrez et partagez des ressources éducatives, des cours en ligne, des livres, et plus encore.</div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 text-white">
                <h2>Rejoignez notre communauté dès aujourd'hui !</h2>
                <p>Inscrivez-vous maintenant et commencez à participer aux discussions.</p>
                <a href="/Portfolio/e_learning/login" class="btn btn-success">S'inscrire</a>
            </div>
        </div>
    </section>

<?php
include_once '../../public/templates/footer_visitor.php';
?>