<nav class="bg-white shadow-lg fixed w-full z-10">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a href="/home" class="flex items-center">
                <img src="/assets/image/favicon.jpg" class="h-8 w-8" alt="AbduClip">
                <span class="ml-2 text-xl font-semibold text-gray-700">AbduClip</span>
            </a>
            <div class="hidden md:flex space-x-6">
                <a href="/home" class="text-gray-700 hover:text-green-600">Accueil</a>
                <a href="/games" class="text-gray-700 hover:text-green-600">Les jeux</a>
                <a href="/profile" class="text-gray-700 hover:text-green-600">Profil</a>
                <a href="/contact" class="text-gray-700 hover:text-green-600">Contactez nous !</a>
                <a href="/home#avis" class="text-gray-700 hover:text-green-600"> Laissez un avis</a>
                <a href="/leaderboard" class="text-gray-700 hover:text-green-600">Classements</a>
                <a href="/login" class="text-gray-700 hover:text-green-600">Connexion</a>
            </div>
            <div class="md:hidden">
                <button id="nav-toggle" class="text-gray-700 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Script pour le menu mobile -->
<script>
    document.getElementById('nav-toggle').onclick = function() {
        let menu = document.getElementById('navbarNav');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
</script>
