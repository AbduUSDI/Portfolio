// Installation du Service Worker
self.addEventListener('install', (event) => {
    console.log("Service Worker installé !");
    // Ici, vous pouvez pré-cacher des ressources si nécessaire
    event.waitUntil(
        caches.open('v1').then((cache) => {
            return cache.addAll([
                '/', // La page d'accueil
                '/Portfolio/cours/index.php', // Exemple de fichier
                '/Portfolio/cours/assets/css/cours.css', // Exemple de fichier CSS
                '/Portfolio/cours/assets/js/scripts.js', // Exemple de fichier JavaScript
            ]);
        })
    );
});

// Activation du Service Worker
self.addEventListener('activate', (event) => {
    console.log("Service Worker activé !");
});

// Interception des requêtes pour gérer le cache
self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            // Retourne la réponse mise en cache ou effectue une requête réseau si le fichier n'est pas dans le cache
            return response || fetch(event.request);
        })
    );
});
