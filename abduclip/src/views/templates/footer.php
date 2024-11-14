<!-- Footer -->
<footer id="footerId" class="bg-light text-center text-lg-start mt-5 fixed-bottom">
    <!-- Bouton pour réduire/agrandir le footer -->
    <div class="footer-toggle d-flex justify-content-center p-2">
        <button id="toggleFooterBtn" class="btn btn-primary"><i id="footerIcon" class="fas fa-chevron-up"></i></button>
    </div>

    <!-- Contenu du footer avec transition fluide -->
    <div class="footer-content" style="overflow: hidden; transition: max-height 0.5s ease;">
        <div class="containerr p-4">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-white text-center">Liens utiles</h5>
                    <br>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/contact">
                                <i class="fas fa-envelope mr-2"></i> Nous contacter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/home#openhours">
                                <i class="fas fa-clock mr-2"></i> Nos horaires
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/aproposdenous">
                                <i class="fas fa-info-circle mr-2"></i> A propos de nous
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/mentions-legales">
                                <i class="fas fa-file-alt mr-2"></i> Mentions légales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/politique-de-confidentialite">
                                <i class="fas fa-user-shield mr-2"></i> Politique de confidentialité
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section Plan Google Maps -->
                <div class="col-md-4">
                    <h5 class="text-white text-center">Adresse</h5>
                    <p class="text-white text-center">Forêt de Brocéliande, 35380 Paimpont</p>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.098412817444!2d-2.2466591491221856!3d48.00743897921212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ed92e0dbf4477%3A0x9e59e8de9302db5a!2s35380%20Paimpont%2C%20France!5e0!3m2!1sen!2sfr!4v1695648726871!5m2!1sen!2sfr" 
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Section Réseaux sociaux -->
                <div class="col-md-4">
                    <h5>Suivez-nous</h5>
                    <div class="d-flex justify-content-center">
                        <a href="https://twitter.com" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="https://facebook.com" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </a>
                        <a href="https://snapchat.com" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-snapchat-ghost fa-2x"></i>
                        </a>
                        <a href="https://instagram.com" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://github.com" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-4">
            <p class="text-white text-center">
                <img src="/assets/image/favicon.ico" width="32px" height="32px" alt="Abduclip MiniJeux Favicon"> &copy; 2024 Abduclip - Minijeux. Tous droits réservés.
            </p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleFooterBtn = document.getElementById("toggleFooterBtn");
        const footerContent = document.querySelector(".footer-content");
        const footerIcon = document.getElementById("footerIcon");
        let isFooterCollapsed = true; // Défini à true pour être fermé par défaut

        // Initialiser la hauteur maximale du footer en position fermée
        footerContent.style.maxHeight = "0"; // Fermé par défaut

        toggleFooterBtn.addEventListener("click", function() {
            isFooterCollapsed = !isFooterCollapsed;
            footerContent.style.maxHeight = isFooterCollapsed ? "0" : "300px"; // Ajustez 300px selon votre contenu
            footerIcon.className = isFooterCollapsed ? "fas fa-chevron-down" : "fas fa-chevron-up";
        });
    });
</script>

</body>
</html>
