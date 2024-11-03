<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur AJAX - Concepts et Pratiques Avancées</title>
    <!-- Bootstrap pour les modals et la sidebar responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php' ?>

<!-- Sidebar -->
<div class="sidebar">
    <a href="#ajax-intro"><i class="fas fa-code"></i> Introduction à AJAX</a>
    <a href="#ajax-setup"><i class="fas fa-cog"></i> Configuration et Prérequis</a>
    <a href="#ajax-requests"><i class="fas fa-play"></i> Types de Requêtes AJAX</a>

    <button class="dropdown-btn">Les Bases d'AJAX <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#ajax-methods"><i class="fas fa-tools"></i> Méthodes AJAX</a>
        <a href="#ajax-xmlhttprequest"><i class="fas fa-rocket"></i> XMLHttpRequest</a>
        <a href="#async-await"><i class="fas fa-rocket"></i> Async/Await</a>
        <a href="#ajax-fetch"><i class="fas fa-laptop-code"></i> Fetch API</a>
        <a href="#promise"><i class="fas fa-laptop-code"></i> Promise</a>
    </div>

    <button class="dropdown-btn">AJAX Avancé <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#error-handling"><i class="fas fa-exclamation-triangle"></i> Gestion des Erreurs</a>
        <a href="#async-await-fetch"><i class="fas fa-sync-alt"></i> Async/Await avec Fetch</a>
        <a href="#ajax-json"><i class="fas fa-database"></i> AJAX avec JSON</a>
        <a href="#ajax-promises"><i class="fas fa-file-signature"></i> Utilisation des Promises</a>
        <a href="#ajax-timeouts"><i class="fas fa-hourglass-half"></i> Gestion des Timeouts</a>
    </div>

    <button class="dropdown-btn">Intégration AJAX <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#ajax-php"><i class="fas fa-server"></i> AJAX avec PHP</a>
        <a href="#ajax-node"><i class="fas fa-server"></i> AJAX avec Node.js</a>
        <a href="#ajax-security"><i class="fas fa-shield-alt"></i> Sécurité et AJAX</a>
    </div>

    <a href="#ajax-examples"><i class="fas fa-code-branch"></i> Exemples Pratiques</a>
    <a href="#ajax-best-practices"><i class="fas fa-check-circle"></i> Bonnes Pratiques AJAX</a>
    <a href="exercice_ajax/methodes_ajax/exercice_methode_ajax.php"><i class="fas fa-desktop"></i> Exercice AJAX - Méthodes de base</a>
    <a href="exercice_ajax/avance_ajax/ajax_avance.php"><i class="fas fa-desktop"></i> Exercice AJAX Avancé</a>
    <a href="exercice_ajax/evaluation/ajax_evaluation.php"><i class="fas fa-pen-nib"></i> Evaluation AJAX</a>
</div>


    <!-- Page Content -->
    <div class="content">
        <div class="container animate__animated animate__fadeInUp">

            <!-- Introduction à AJAX -->
<div class="content-section" id="ajax-intro">
    <h1><i class="fas fa-code icon"></i> Introduction à AJAX</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <p><strong>AJAX</strong> (Asynchronous JavaScript and XML) est une technologie permettant la communication asynchrone avec le serveur, sans recharger la page. Elle rend les applications web plus interactives, rapides et fluides.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-lightbulb"></i> Pourquoi utiliser AJAX ?</h3>
                <p>Grâce à AJAX, seules les parties nécessaires de la page se chargent, réduisant ainsi le temps de chargement, économisant la bande passante, et améliorant l'expérience utilisateur.</p>
            </div>

            <h2 style="color: #0056b3;"><i class="fas fa-tools"></i> Fonctionnement d'AJAX</h2>
            <ul>
                <li><i class="fas fa-arrow-right"></i> <strong>Requête Asynchrone</strong> : Le navigateur envoie une requête au serveur en arrière-plan.</li>
                <li><i class="fas fa-arrow-right"></i> <strong>Traitement Serveur</strong> : Le serveur traite la requête et renvoie une réponse (souvent en JSON ou XML).</li>
                <li><i class="fas fa-arrow-right"></i> <strong>Réponse Dynamique</strong> : La page est mise à jour dynamiquement sans rechargement complet.</li>
            </ul>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ff6600; margin-bottom: 15px;">
                <h3><i class="fas fa-exclamation-circle"></i> Remarque Importante</h3>
                <p>AJAX n'est pas une alternative au backend mais améliore la communication fluide entre le serveur et le client.</p>
            </div>

            <h2 style="color: #28a745;"><i class="fas fa-code"></i> Technologies Utilisées dans AJAX</h2>
            <p>AJAX s'appuie sur plusieurs technologies :</p>
            <ul>
                <li><i class="fas fa-file-code"></i> <strong>HTML</strong> : Structure de la page.</li>
                <li><i class="fas fa-paint-brush"></i> <strong>CSS</strong> : Mise en forme et design de la page.</li>
                <li><i class="fas fa-code"></i> <strong>JavaScript</strong> : Logique client pour envoyer et recevoir des données.</li>
                <li><i class="fas fa-database"></i> <strong>Serveur</strong> : Fournit les données (JSON, XML) en réponse aux requêtes.</li>
            </ul>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745;">
                <h3><i class="fas fa-book"></i> Exemple d'AJAX</h3>
                <p>Envoyer une requête avec <code>XMLHttpRequest</code> et afficher les données reçues sans recharger la page.</p>
                <pre><code>
// Exemple simple de requête AJAX
let xhr = new XMLHttpRequest();
xhr.open("GET", "https://api.example.com/data", true);
xhr.onload = function() {
    if (xhr.status === 200) {
        console.log(JSON.parse(xhr.responseText));
    }
};
xhr.send();
                </code></pre>
            </div>
        </div>
    </div>
</div>
<!-- Configuration et Prérequis -->
<div class="content-section" id="ajax-setup">
    <h1><i class="fas fa-cog icon"></i> Configuration et Prérequis</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <p>Avant de commencer avec AJAX, il est important d'assurer que l'environnement de développement soit prêt et que toutes les dépendances nécessaires soient installées.</p>

            <h2 style="color: #0056b3;"><i class="fas fa-wrench"></i> Préparer le Projet</h2>
            <ul>
                <li><i class="fas fa-folder"></i> <strong>Structure du Projet</strong> : Organisez vos fichiers en séparant HTML, CSS, et JavaScript.</li>
                <li><i class="fas fa-database"></i> <strong>Serveur de Développement</strong> : Utilisez un serveur local comme XAMPP, WAMP, ou un environnement intégré si vous travaillez en Node.js.</li>
                <li><i class="fas fa-link"></i> <strong>Connexion Serveur</strong> : Assurez-vous que le serveur peut gérer les requêtes AJAX (CORS, permissions de sécurité, etc.).</li>
            </ul>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-lightbulb"></i> Conseil</h3>
                <p>Utilisez un outil comme Postman pour tester vos API avant de les intégrer dans votre code AJAX.</p>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-cogs"></i> Prérequis Techniques</h2>
            <p>Pour tirer le meilleur parti d'AJAX, quelques connaissances techniques sont recommandées :</p>
            <ul>
                <li><i class="fas fa-file-code"></i> <strong>HTML/CSS</strong> : Connaissances de base pour structurer et styliser la page.</li>
                <li><i class="fas fa-code"></i> <strong>JavaScript</strong> : Maîtrise des fonctions et de la manipulation DOM.</li>
                <li><i class="fas fa-server"></i> <strong>Backend (PHP, Node.js)</strong> : Savoir comment traiter les requêtes côté serveur.</li>
            </ul>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ff6600; margin-bottom: 15px;">
                <h3><i class="fas fa-exclamation-circle"></i> Note de Sécurité</h3>
                <p>Assurez-vous que votre serveur gère les requêtes de manière sécurisée (vérification des entrées, protection contre les attaques CSRF/XSS).</p>
            </div>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745;">
                <h3><i class="fas fa-cog"></i> Exemple de Fichier de Configuration</h3>
                <p>Un exemple de configuration dans un fichier <code>config.js</code> pour préparer les paramètres de connexion AJAX :</p>
                <pre><code>
// config.js
const apiBaseUrl = "https://api.example.com";
const headers = {
    "Content-Type": "application/json",
    "Authorization": "Bearer YOUR_TOKEN_HERE"
};
                </code></pre>
            </div>
        </div>
    </div>
</div>
<!-- Types de Requêtes AJAX -->
<div class="content-section" id="ajax-requests">
    <h1><i class="fas fa-play icon"></i> Types de Requêtes AJAX</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #0056b3;"><i class="fas fa-arrow-right"></i> Requête GET</h2>
            <p>La requête <strong>GET</strong> est utilisée pour récupérer des données depuis le serveur sans modifier son état. Idéale pour charger des informations sans impact sur le serveur.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête GET</h3>
                <pre><code>
// Requête GET pour récupérer des données d'un API
fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>

            <h2 style="color: #0056b3;"><i class="fas fa-arrow-right"></i> Requête POST</h2>
            <p>La requête <strong>POST</strong> est utilisée pour envoyer des données au serveur. Elle est souvent utilisée pour créer de nouvelles entrées ou soumettre des formulaires.</p>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ff6600; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête POST</h3>
                <pre><code>
// Requête POST pour envoyer des données au serveur
fetch('https://api.example.com/data', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ name: 'John', age: 30 })
})
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-arrow-right"></i> Requête PUT</h2>
            <p>La requête <strong>PUT</strong> est utilisée pour mettre à jour des ressources existantes sur le serveur. Elle remplace généralement l’intégralité de la ressource.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête PUT</h3>
                <pre><code>
// Requête PUT pour mettre à jour une ressource existante
fetch('https://api.example.com/data/1', {
    method: 'PUT',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ name: 'Jane', age: 25 })
})
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>

            <h2 style="color: #dc3545;"><i class="fas fa-arrow-right"></i> Requête DELETE</h2>
            <p>La requête <strong>DELETE</strong> est utilisée pour supprimer des ressources sur le serveur. Elle n’envoie généralement pas de corps de requête.</p>

            <div class="example-box" style="background-color: #ffe6e6; padding: 15px; border-left: 4px solid #dc3545;">
                <h3><i class="fas fa-code"></i> Exemple de Requête DELETE</h3>
                <pre><code>
// Requête DELETE pour supprimer une ressource
fetch('https://api.example.com/data/1', {
    method: 'DELETE'
})
    .then(response => response.json())
    .then(data => console.log('Ressource supprimée'))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>
        </div>
    </div>
</div>

<!-- Méthodes AJAX -->
<div class="content-section" id="ajax-methods">
    <h1><i class="fas fa-tools icon"></i> Méthodes AJAX</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-rocket"></i> XMLHttpRequest</h2>
            <p>La méthode <strong>XMLHttpRequest</strong> est la méthode historique pour envoyer des requêtes AJAX. Bien qu'elle soit moins utilisée aujourd'hui, elle reste utile pour certains cas d'utilisation.</p>
            
            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple d'XMLHttpRequest</h3>
                <pre><code>
// Exemple de requête GET avec XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open("GET", "https://api.example.com/data", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(JSON.parse(xhr.responseText));
    }
};
xhr.send();
                </code></pre>
            </div>

            <h2 style="color: #007bff;"><i class="fas fa-laptop-code"></i> Fetch API</h2>
            <p>La <strong>Fetch API</strong> est une méthode plus moderne et plus simple pour gérer les requêtes AJAX. Elle retourne des <em>Promises</em>, ce qui facilite la gestion asynchrone.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Fetch API</h3>
                <pre><code>
// Exemple de requête GET avec Fetch API
fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-sync-alt"></i> Async/Await</h2>
            <p><strong>Async/Await</strong> est une syntaxe qui simplifie la gestion asynchrone des requêtes AJAX, rendant le code plus lisible et plus facile à déboguer.</p>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple d'Async/Await avec Fetch</h3>
                <pre><code>
// Exemple de Fetch avec Async/Await
async function fetchData() {
    try {
        let response = await fetch('https://api.example.com/data');
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
fetchData();
                </code></pre>
            </div>

            <h2 style="color: #17a2b8;"><i class="fas fa-handshake"></i> Utilisation des Promises</h2>
            <p>Les <strong>Promises</strong> permettent de gérer les opérations asynchrones comme les requêtes AJAX. Elles sont résolues ou rejetées selon le succès ou l'échec de la requête.</p>

            <div class="example-box" style="background-color: #e6f7ff; padding: 15px; border-left: 4px solid #17a2b8;">
                <h3><i class="fas fa-code"></i> Exemple de Promise avec Fetch</h3>
                <pre><code>
// Exemple de requête GET avec Promise
fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>
        </div>
    </div>
</div>
<!-- XMLHttpRequest -->
<div class="content-section" id="ajax-xmlhttprequest">
    <h1><i class="fas fa-rocket icon"></i> XMLHttpRequest</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-info-circle"></i> Qu'est-ce que XMLHttpRequest ?</h2>
            <p>La méthode <strong>XMLHttpRequest</strong> est l'une des premières façons d'effectuer des requêtes AJAX. Elle permet d'envoyer et de recevoir des données depuis un serveur sans recharger la page. Elle est compatible avec presque tous les navigateurs mais est aujourd'hui souvent remplacée par <strong>Fetch API</strong> pour sa simplicité.</p>

            <h2 style="color: #0056b3;"><i class="fas fa-cogs"></i> Propriétés de XMLHttpRequest</h2>
            <ul>
                <li><strong>readyState</strong> : Indique l'état de la requête (0 à 4).</li>
                <li><strong>status</strong> : Code de statut HTTP de la réponse (ex. : 200 pour succès).</li>
                <li><strong>responseText</strong> : Données renvoyées par le serveur en texte.</li>
                <li><strong>responseXML</strong> : Données renvoyées sous forme XML, si disponible.</li>
            </ul>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête GET</h3>
                <pre><code>
// Requête GET avec XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open("GET", "https://api.example.com/data", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(JSON.parse(xhr.responseText));
    }
};
xhr.send();
                </code></pre>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-gear"></i> Méthodes de XMLHttpRequest</h2>
            <ul>
                <li><strong>open(method, url, async)</strong> : Initialise une requête (GET, POST, etc.), spécifiant la méthode, l’URL et si elle est asynchrone.</li>
                <li><strong>send(data)</strong> : Envoie la requête avec ou sans données (null si sans données).</li>
                <li><strong>setRequestHeader(header, value)</strong> : Définit les en-têtes HTTP, comme <em>Content-Type</em>.</li>
                <li><strong>abort()</strong> : Annule la requête.</li>
            </ul>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête POST</h3>
                <pre><code>
// Requête POST avec XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open("POST", "https://api.example.com/data", true);
xhr.setRequestHeader("Content-Type", "application/json");
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(JSON.parse(xhr.responseText));
    }
};
xhr.send(JSON.stringify({ name: "John", age: 30 }));
                </code></pre>
            </div>

            <div class="example-box" style="background-color: #ffe6e6; padding: 15px; border-left: 4px solid #dc3545;">
                <h3><i class="fas fa-exclamation-circle"></i> Remarque sur la Sécurité</h3>
                <p>Assurez-vous de gérer les erreurs et les CORS (Cross-Origin Resource Sharing) pour sécuriser vos requêtes AJAX via XMLHttpRequest.</p>
            </div>
        </div>
    </div>
</div>
<!-- Async/Await -->
<div class="content-section" id="async-await">
    <h1><i class="fas fa-sync-alt icon"></i> Async/Await</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-info-circle"></i> Qu'est-ce que Async/Await ?</h2>
            <p><strong>Async/Await</strong> est une syntaxe moderne en JavaScript qui simplifie la gestion des opérations asynchrones, telles que les requêtes AJAX. Elle repose sur les <em>Promises</em> mais rend le code plus lisible et facile à comprendre.</p>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-lightbulb"></i> Avantages de Async/Await</h3>
                <ul>
                    <li><i class="fas fa-check"></i> Lisibilité : Le code ressemble à du code synchrone, facilitant sa compréhension.</li>
                    <li><i class="fas fa-check"></i> Gestion des erreurs : Utilisation de <code>try...catch</code> pour capturer les erreurs.</li>
                </ul>
            </div>

            <h2 style="color: #ffc107;"><i class="fas fa-play"></i> Syntaxe de base</h2>
            <p>La fonction doit être précédée du mot clé <code>async</code>, et chaque opération asynchrone doit être précédée de <code>await</code>, indiquant que le code attend que la promesse soit résolue avant de continuer.</p>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-code"></i> Exemple d'Async/Await avec Fetch</h2>
            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête GET</h3>
                <pre><code>
// Fonction asynchrone pour récupérer des données avec Fetch
async function fetchData() {
    try {
        let response = await fetch('https://api.example.com/data');
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
fetchData();
                </code></pre>
                <p>Dans cet exemple, <code>await</code> est utilisé pour attendre la réponse de la requête <code>fetch</code> avant de passer à l'étape suivante. Le bloc <code>try...catch</code> capture les erreurs.</p>
            </div>

            <h2 style="color: #dc3545;"><i class="fas fa-exclamation-circle"></i> Gestion des erreurs avec Async/Await</h2>
            <div class="example-box" style="background-color: #ffe6e6; padding: 15px; border-left: 4px solid #dc3545;">
                <h3><i class="fas fa-exclamation-triangle"></i> Exemple de Gestion d'Erreur</h3>
                <pre><code>
// Gestion des erreurs avec try...catch
async function postData() {
    try {
        let response = await fetch('https://api.example.com/data', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name: "John", age: 30 })
        });
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur lors de la requête:', error);
    }
}
postData();
                </code></pre>
                <p>Le bloc <code>try...catch</code> permet de capturer toutes les erreurs qui peuvent survenir lors de la requête, telles que les problèmes de connexion ou les erreurs serveur.</p>
            </div>
        </div>
    </div>
</div>
<!-- Fetch API -->
<div class="content-section" id="ajax-fetch">
    <h1><i class="fas fa-laptop-code icon"></i> Fetch API</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-info-circle"></i> Qu'est-ce que Fetch API ?</h2>
            <p>La <strong>Fetch API</strong> est une méthode moderne en JavaScript pour effectuer des requêtes AJAX. Elle remplace avantageusement <code>XMLHttpRequest</code> grâce à une syntaxe plus simple et plus lisible, notamment en utilisant des <em>Promises</em> pour gérer les opérations asynchrones.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-lightbulb"></i> Avantages de Fetch API</h3>
                <ul>
                    <li><i class="fas fa-check"></i> Syntaxe claire et concise.</li>
                    <li><i class="fas fa-check"></i> Supporte les <em>Promises</em> pour gérer les réponses asynchrones.</li>
                    <li><i class="fas fa-check"></i> Permet d’utiliser <code>Async/Await</code> pour plus de lisibilité.</li>
                </ul>
            </div>
            
            <h2 style="color: #007bff;"><i class="fas fa-arrow-right"></i> Requête GET avec Fetch</h2>
            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête GET</h3>
                <pre><code>
// Requête GET pour récupérer des données
fetch('https://api.example.com/data')
    .then(response => {
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
                <p>Dans cet exemple, <code>fetch</code> envoie une requête GET. La réponse est vérifiée pour détecter les erreurs, puis convertie en JSON.</p>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-arrow-right"></i> Requête POST avec Fetch</h2>
            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête POST</h3>
                <pre><code>
// Requête POST pour envoyer des données
fetch('https://api.example.com/data', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ name: "John", age: 30 })
})
    .then(response => {
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
                <p>Dans cet exemple, <code>fetch</code> envoie une requête POST avec un corps JSON. La réponse est vérifiée et convertie en JSON.</p>
            </div>

            <h2 style="color: #dc3545;"><i class="fas fa-exclamation-triangle"></i> Gestion des Erreurs</h2>
            <div class="example-box" style="background-color: #ffe6e6; padding: 15px; border-left: 4px solid #dc3545;">
                <h3><i class="fas fa-exclamation-circle"></i> Gestion des Erreurs avec Fetch</h3>
                <p>La <code>Fetch API</code> ne lance pas d’erreurs pour les statuts HTTP (comme 404 ou 500). Utilisez une vérification manuelle avec <code>response.ok</code> pour détecter et gérer les erreurs.</p>
            </div>
        </div>
    </div>
</div>
<!-- Promises -->
<div class="content-section" id="promise">
    <h1><i class="fas fa-file-signature icon"></i> Promises</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-info-circle"></i> Qu'est-ce qu'une Promise ?</h2>
            <p>Une <strong>Promise</strong> est un objet qui représente une opération asynchrone dans le futur. Elle permet de gérer le succès ou l'échec de cette opération et facilite le chaînage d'actions asynchrones, comme les requêtes AJAX.</p>

            <h2 style="color: #007bff;"><i class="fas fa-arrow-right"></i> États d'une Promise</h2>
            <ul>
                <li><i class="fas fa-clock"></i> <strong>Pending</strong> : La promise est en attente (non résolue).</li>
                <li><i class="fas fa-check"></i> <strong>Fulfilled</strong> : La promise est réussie, avec une valeur renvoyée.</li>
                <li><i class="fas fa-times"></i> <strong>Rejected</strong> : La promise a échoué, avec une raison ou une erreur.</li>
            </ul>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Promise Simple</h3>
                <pre><code>
// Exemple de création d'une Promise
let maPromise = new Promise((resolve, reject) => {
    let success = true;
    if (success) {
        resolve("Opération réussie !");
    } else {
        reject("Opération échouée.");
    }
});

maPromise
    .then(result => console.log(result))  // En cas de succès
    .catch(error => console.error(error)); // En cas d'échec
                </code></pre>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-arrow-right"></i> Méthodes Clés des Promises</h2>
            <ul>
                <li><strong>then()</strong> : Exécute une fonction lorsque la promise est réussie.</li>
                <li><strong>catch()</strong> : Exécute une fonction lorsque la promise échoue.</li>
                <li><strong>finally()</strong> : Exécute une fonction après le succès ou l'échec de la promise.</li>
            </ul>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Fetch avec Promise</h3>
                <pre><code>
// Utilisation de Fetch avec Promises
fetch('https://api.example.com/data')
    .then(response => {
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error))
    .finally(() => console.log('Requête terminée.'));
                </code></pre>
                <p>Dans cet exemple, <code>then()</code>, <code>catch()</code> et <code>finally()</code> sont utilisés pour gérer les étapes de succès, d'échec et d'achèvement de la requête.</p>
            </div>

            <h2 style="color: #dc3545;"><i class="fas fa-exclamation-circle"></i> Gestion des Erreurs</h2>
            <div class="example-box" style="background-color: #ffe6e6; padding: 15px; border-left: 4px solid #dc3545;">
                <h3><i class="fas fa-exclamation-triangle"></i> Exemple de Gestion d'Erreur</h3>
                <p>Lors de l'utilisation des promises, il est crucial de capturer les erreurs avec <code>catch()</code> pour éviter que des erreurs non gérées se propagent.</p>
            </div>
        </div>
    </div>
</div>

<!-- Gestion des Erreurs en AJAX -->
<div class="content-section" id="error-handling">
    <h1><i class="fas fa-exclamation-triangle icon"></i> Gestion des Erreurs en AJAX</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #dc3545;"><i class="fas fa-info-circle"></i> Pourquoi gérer les erreurs en AJAX ?</h2>
            <p>Les erreurs en AJAX peuvent provenir de plusieurs sources : des problèmes de connexion, des erreurs de serveur, des réponses mal formatées, ou des restrictions de sécurité (CORS). Gérer ces erreurs garantit une meilleure résilience de l'application et fournit des informations utiles pour le débogage.</p>

            <h2 style="color: #007bff;"><i class="fas fa-rocket"></i> Gestion des Erreurs avec XMLHttpRequest</h2>
            <p>Avec <strong>XMLHttpRequest</strong>, vérifiez le code de statut HTTP pour détecter les erreurs de réponse, et utilisez <code>onerror</code> pour capturer les erreurs de connexion.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Gestion d'Erreur avec XMLHttpRequest</h3>
                <pre><code>
// Requête avec gestion d'erreur
let xhr = new XMLHttpRequest();
xhr.open("GET", "https://api.example.com/data", true);

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            console.log(JSON.parse(xhr.responseText));
        } else {
            console.error("Erreur: " + xhr.status);
        }
    }
};

xhr.onerror = function() {
    console.error("Erreur de connexion.");
};

xhr.send();
                </code></pre>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-laptop-code"></i> Gestion des Erreurs avec Fetch API</h2>
            <p>La <strong>Fetch API</strong> ne déclenche pas d’erreurs pour les réponses HTTP, mais utilise <code>response.ok</code> pour indiquer si la requête a réussi. Capturez les erreurs avec <code>catch()</code>.</p>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Gestion d'Erreur avec Fetch API</h3>
                <pre><code>
// Gestion d'erreur avec Fetch
fetch('https://api.example.com/data')
    .then(response => {
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                </code></pre>
            </div>

            <h2 style="color: #28a745;"><i class="fas fa-sync-alt"></i> Gestion des Erreurs avec Async/Await</h2>
            <p>Avec <strong>Async/Await</strong>, utilisez un bloc <code>try...catch</code> pour gérer les erreurs dans une fonction asynchrone. Cela capture les erreurs des requêtes et des opérations asynchrones.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745;">
                <h3><i class="fas fa-code"></i> Exemple de Gestion d'Erreur avec Async/Await</h3>
                <pre><code>
// Gestion d'erreur avec Async/Await
async function fetchData() {
    try {
        let response = await fetch('https://api.example.com/data');
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
fetchData();
                </code></pre>
            </div>
        </div>
    </div>
</div>
<!-- Async/Await avec Fetch -->
<div class="content-section" id="async-await-fetch">
    <h1><i class="fas fa-sync-alt icon"></i> Async/Await avec Fetch</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-info-circle"></i> Qu'est-ce que Async/Await avec Fetch ?</h2>
            <p>Combiner <strong>Async/Await</strong> avec la <strong>Fetch API</strong> permet de gérer les requêtes AJAX de manière lisible et structurée, sans le besoin de chaîner plusieurs <code>then()</code>. <code>Async</code> indique que la fonction est asynchrone, tandis que <code>await</code> force l'attente de la résolution de la requête avant de continuer.</p>

            <h2 style="color: #007bff;"><i class="fas fa-code"></i> Exemple de Requête GET</h2>
            <p>Un exemple de requête <strong>GET</strong> avec <code>Async/Await</code> et <code>Fetch</code>, pour récupérer des données de manière asynchrone.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Code de Requête GET</h3>
                <pre><code>
// Fonction asynchrone pour récupérer des données
async function fetchData() {
    try {
        let response = await fetch('https://api.example.com/data');
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
fetchData();
                </code></pre>
                <p>Dans cet exemple, <code>await</code> est utilisé pour attendre la réponse de la requête <code>fetch</code>. Si la réponse n’est pas "ok", une erreur est déclenchée, et capturée dans le bloc <code>catch</code>.</p>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-arrow-right"></i> Exemple de Requête POST</h2>
            <p>Avec <strong>Async/Await</strong> et <strong>Fetch</strong>, on peut également envoyer des données en utilisant une requête <strong>POST</strong>.</p>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Code de Requête POST</h3>
                <pre><code>
// Fonction asynchrone pour envoyer des données
async function postData() {
    try {
        let response = await fetch('https://api.example.com/data', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name: "John", age: 30 })
        });
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
postData();
                </code></pre>
                <p>Dans cette requête <code>POST</code>, les données sont envoyées en JSON avec l’en-tête approprié. Toute erreur est capturée dans le bloc <code>catch</code> pour assurer une gestion des erreurs propre.</p>
            </div>

            <h2 style="color: #dc3545;"><i class="fas fa-exclamation-triangle"></i> Meilleures Pratiques pour Async/Await</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Toujours utiliser <code>try...catch</code> pour capturer les erreurs.</li>
                <li><i class="fas fa-check-circle"></i> Utiliser <code>await</code> pour les opérations asynchrones qui doivent se terminer avant de continuer.</li>
                <li><i class="fas fa-check-circle"></i> Tester les réponses avec <code>response.ok</code> pour détecter les erreurs HTTP.</li>
            </ul>
        </div>
    </div>
</div>
<!-- AJAX avec JSON -->
<div class="content-section" id="ajax-json">
    <h1><i class="fas fa-database icon"></i> AJAX avec JSON</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-info-circle"></i> Pourquoi JSON en AJAX ?</h2>
            <p><strong>JSON</strong> (JavaScript Object Notation) est un format léger et facile à lire pour échanger des données entre le client et le serveur. Avec AJAX, JSON est idéal pour envoyer et recevoir des informations structurées, car il est natif en JavaScript et simple à manipuler.</p>

            <h2 style="color: #007bff;"><i class="fas fa-rocket"></i> Utilisation de JSON avec XMLHttpRequest</h2>
            <p>Pour utiliser JSON avec <strong>XMLHttpRequest</strong>, envoyez les données en JSON dans le corps de la requête et parsez la réponse en JSON.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête POST avec XMLHttpRequest</h3>
                <pre><code>
// Requête POST avec JSON en utilisant XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open("POST", "https://api.example.com/data", true);
xhr.setRequestHeader("Content-Type", "application/json");

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        let data = JSON.parse(xhr.responseText);
        console.log(data);
    } else if (xhr.readyState === 4) {
        console.error("Erreur: " + xhr.status);
    }
};

let jsonData = JSON.stringify({ name: "John", age: 30 });
xhr.send(jsonData);
                </code></pre>
                <p>Dans cet exemple, les données sont envoyées en JSON en définissant le <code>Content-Type</code> à <code>application/json</code> et la réponse est parsée avec <code>JSON.parse()</code>.</p>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-laptop-code"></i> Utilisation de JSON avec Fetch API et Async/Await</h2>
            <p>La <strong>Fetch API</strong> rend l'envoi et la réception de JSON plus simple et plus lisible, surtout avec <strong>Async/Await</strong>.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Requête POST avec Fetch et JSON</h3>
                <pre><code>
// Requête POST avec JSON en utilisant Fetch et Async/Await
async function postData() {
    try {
        let response = await fetch('https://api.example.com/data', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name: "John", age: 30 })
        });
        if (!response.ok) throw new Error('Erreur: ' + response.status);
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
postData();
                </code></pre>
                <p>Dans cet exemple, les données sont envoyées au serveur en JSON, et la réponse est convertie en JSON à l'aide de <code>response.json()</code>.</p>
            </div>

            <h2 style="color: #ffc107;"><i class="fas fa-exclamation-triangle"></i> Conseils pour AJAX avec JSON</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Toujours définir <code>Content-Type</code> à <code>application/json</code> pour indiquer le format des données.</li>
                <li><i class="fas fa-check-circle"></i> Utilisez <code>JSON.stringify()</code> pour convertir les données en JSON avant de les envoyer.</li>
                <li><i class="fas fa-check-circle"></i> Utilisez <code>response.json()</code> ou <code>JSON.parse()</code> pour traiter les réponses JSON.</li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilisation des Promises -->
<div class="content-section" id="ajax-promises">
    <h1><i class="fas fa-file-signature icon"></i> Utilisation des Promises en JavaScript</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-info-circle"></i> Qu'est-ce qu'une Promise ?</h2>
            <p>Une <strong>Promise</strong> est un objet en JavaScript qui représente une opération asynchrone et son résultat futur. Les Promises facilitent la gestion des tâches asynchrones, comme les requêtes AJAX, et permettent de chaîner plusieurs opérations de manière fluide.</p>

            <h2 style="color: #007bff;"><i class="fas fa-play"></i> Création d'une Promise</h2>
            <p>Une Promise est créée en utilisant le mot clé <code>new Promise()</code>, avec deux arguments de fonction : <code>resolve</code> (pour une opération réussie) et <code>reject</code> (pour un échec).</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Promise Simple</h3>
                <pre><code>
// Création d'une Promise simple
let maPromise = new Promise((resolve, reject) => {
    let success = true;
    if (success) {
        resolve("Opération réussie !");
    } else {
        reject("Opération échouée.");
    }
});

maPromise
    .then(result => console.log(result))   // Affiche "Opération réussie !" en cas de succès
    .catch(error => console.error(error)); // Affiche "Opération échouée." en cas d'erreur
                </code></pre>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-handshake"></i> Méthodes Principales des Promises</h2>
            <ul>
                <li><strong>then()</strong> : Exécute une fonction lorsque la Promise est résolue avec succès.</li>
                <li><strong>catch()</strong> : Exécute une fonction lorsque la Promise est rejetée (échec).</li>
                <li><strong>finally()</strong> : Exécute une fonction après résolution ou rejet de la Promise.</li>
            </ul>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Chaining de Promises</h3>
                <pre><code>
// Chaînage de Promises avec then et catch
function obtenirDonnees() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            let succes = true;
            if (succes) {
                resolve("Données obtenues !");
            } else {
                reject("Erreur lors de l'obtention des données.");
            }
        }, 1000);
    });
}

obtenirDonnees()
    .then(data => {
        console.log(data);
        return "Étape suivante";
    })
    .then(step => console.log(step))
    .catch(error => console.error("Erreur:", error))
    .finally(() => console.log("Opération terminée."));
                </code></pre>
                <p>Dans cet exemple, chaque <code>then()</code> reçoit le résultat du précédent et le transmet. <code>catch()</code> capture les erreurs, et <code>finally()</code> s'exécute à la fin.</p>
            </div>

            <h2 style="color: #dc3545;"><i class="fas fa-exclamation-triangle"></i> Meilleures Pratiques</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Utilisez <code>catch()</code> pour capturer les erreurs en évitant les échecs non gérés.</li>
                <li><i class="fas fa-check-circle"></i> Utilisez <code>finally()</code> pour nettoyer les ressources ou effectuer des actions après la Promise.</li>
                <li><i class="fas fa-check-circle"></i> Préférez <code>then()</code> pour chaîner les opérations asynchrones successives.</li>
            </ul>
        </div>
    </div>
</div>
<!-- Gestion des Timeouts en AJAX -->
<div class="content-section" id="ajax-timeouts">
    <h1><i class="fas fa-hourglass-half icon"></i> Gestion des Timeouts en AJAX</h1>
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-info-circle"></i> Pourquoi gérer les Timeouts ?</h2>
            <p>Les <strong>timeouts</strong> sont importants pour éviter qu'une requête AJAX ne prenne trop de temps en cas de problème de connexion ou de réponse lente du serveur. Cela permet de contrôler l'expérience utilisateur en signalant des erreurs lorsque le délai d'attente est dépassé.</p>

            <h2 style="color: #007bff;"><i class="fas fa-rocket"></i> Gestion des Timeouts avec XMLHttpRequest</h2>
            <p>Avec <strong>XMLHttpRequest</strong>, il est possible de définir un délai maximum en millisecondes avant que la requête ne soit annulée.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Timeout avec XMLHttpRequest</h3>
                <pre><code>
// Timeout avec XMLHttpRequest
let xhr = new XMLHttpRequest();
xhr.open("GET", "https://api.example.com/data", true);
xhr.timeout = 5000; // Timeout après 5 secondes

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("Réponse:", JSON.parse(xhr.responseText));
    }
};

xhr.ontimeout = function() {
    console.error("Erreur: La requête a pris trop de temps.");
};

xhr.send();
                </code></pre>
                <p>Dans cet exemple, si la réponse prend plus de 5 secondes, <code>ontimeout</code> est déclenché et affiche un message d'erreur.</p>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-laptop-code"></i> Gestion des Timeouts avec Fetch API</h2>
            <p>La <strong>Fetch API</strong> ne gère pas directement les timeouts. Cependant, il est possible de gérer les délais d'attente en utilisant <code>Promise.race()</code> pour limiter le temps d'attente.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple de Timeout avec Fetch et Promise.race()</h3>
                <pre><code>
// Timeout avec Fetch et Promise.race
function fetchWithTimeout(url, timeout = 5000) {
    return Promise.race([
        fetch(url).then(response => {
            if (!response.ok) throw new Error('Erreur: ' + response.status);
            return response.json();
        }),
        new Promise((_, reject) =>
            setTimeout(() => reject(new Error("Erreur: La requête a pris trop de temps.")), timeout)
        )
    ]);
}

fetchWithTimeout("https://api.example.com/data")
    .then(data => console.log(data))
    .catch(error => console.error(error));
                </code></pre>
                <p>Dans cet exemple, <code>Promise.race()</code> déclenche un rejet si la requête dépasse le délai de 5 secondes.</p>
            </div>

            <h2 style="color: #ffc107;"><i class="fas fa-exclamation-triangle"></i> Conseils pour la Gestion des Timeouts</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Ajustez les délais d'attente selon l'importance et la vitesse attendue des réponses.</li>
                <li><i class="fas fa-check-circle"></i> Fournissez un message d'erreur clair pour informer l'utilisateur en cas de timeout.</li>
                <li><i class="fas fa-check-circle"></i> Utilisez <code>Promise.race()</code> avec Fetch pour gérer les délais d'attente, car Fetch ne supporte pas les timeouts natifs.</li>
            </ul>
        </div>
    </div>
</div>

<!-- AJAX avec PHP -->
<div class="content-section" id="ajax-php">
    <h1><i class="fas fa-server icon"></i> AJAX avec PHP</h1>
    <div class="row">
        <!-- Première colonne : Envoi de données avec JavaScript -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-laptop-code"></i> Envoi de Données au Serveur</h2>
            <p>Pour envoyer des données au serveur PHP avec AJAX, on utilise <strong>Fetch API</strong> ou <strong>XMLHttpRequest</strong> en JavaScript pour appeler un script PHP. Le script reçoit les données, les traite, puis renvoie une réponse au client.</p>

            <h3 style="color: #007bff;">Exemple avec Fetch API (JavaScript)</h3>
            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h4><i class="fas fa-code"></i> Code JavaScript - Requête POST</h4>
                <pre><code>
// JavaScript : Envoi de données via Fetch API
async function envoyerDonnees() {
    let donnees = { nom: "John", age: 30 };
    try {
        let response = await fetch("process.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(donnees)
        });
        let resultat = await response.json();
        console.log("Réponse du serveur:", resultat);
    } catch (error) {
        console.error("Erreur:", error);
    }
}
envoyerDonnees();
                </code></pre>
                <p>Ce code JavaScript envoie des données JSON au script PHP <code>process.php</code>, qui les traitera côté serveur.</p>
            </div>
        </div>

        <!-- Deuxième colonne : Traitement des données côté serveur avec PHP -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-server"></i> Traitement des Données avec PHP</h2>
            <p>Le script PHP reçoit les données via la méthode <code>$_POST</code> ou en lisant les données JSON brutes. Il les traite et retourne une réponse JSON au client.</p>

            <h3 style="color: #28a745;">Exemple de Script PHP</h3>
            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h4><i class="fas fa-code"></i> Code PHP - process.php</h4>
                <pre><code>
// PHP : Traitement des données et réponse JSON
header("Content-Type: application/json");

// Récupération des données JSON envoyées par le client
$data = json_decode(file_get_contents("php://input"), true);

// Traitement des données (exemple)
$nom = $data["nom"];
$age = $data["age"];
$response = ["status" => "success", "message" => "Bonjour, $nom. Vous avez $age ans."];

// Envoi de la réponse au format JSON
echo json_encode($response);
                </code></pre>
                <p>Ce script PHP lit les données JSON, les traite et renvoie une réponse JSON au client.</p>
            </div>

            <h2 style="color: #ffc107;"><i class="fas fa-exclamation-triangle"></i> Conseils pour AJAX avec PHP</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Toujours définir <code>Content-Type: application/json</code> dans l'en-tête PHP pour les réponses JSON.</li>
                <li><i class="fas fa-check-circle"></i> Utiliser <code>json_encode()</code> pour envoyer des réponses JSON au client.</li>
                <li><i class="fas fa-check-circle"></i> Utiliser <code>json_decode()</code> pour lire les données JSON du client.</li>
            </ul>
        </div>
    </div>
</div>
<!-- AJAX avec Node.js -->
<div class="content-section" id="ajax-node">
    <h1><i class="fas fa-server icon"></i> AJAX avec Node.js</h1>
    <div class="row">
        <!-- Première colonne : Envoi de données avec JavaScript -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-laptop-code"></i> Envoi de Données au Serveur Node.js</h2>
            <p>Pour envoyer des données au serveur Node.js avec AJAX, on utilise <strong>Fetch API</strong> ou <strong>XMLHttpRequest</strong> en JavaScript pour appeler une route d'API sur le serveur Node.js, qui est gérée avec <code>Express</code>.</p>

            <h3 style="color: #007bff;">Exemple avec Fetch API (JavaScript)</h3>
            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h4><i class="fas fa-code"></i> Code JavaScript - Requête POST</h4>
                <pre><code>
// JavaScript : Envoi de données avec Fetch API
async function envoyerDonnees() {
    let donnees = { nom: "John", age: 30 };
    try {
        let response = await fetch("http://localhost:3000/api/data", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(donnees)
        });
        let resultat = await response.json();
        console.log("Réponse du serveur:", resultat);
    } catch (error) {
        console.error("Erreur:", error);
    }
}
envoyerDonnees();
                </code></pre>
                <p>Ce code JavaScript envoie des données JSON à une API Node.js sur l'URL <code>/api/data</code>.</p>
            </div>
        </div>

        <!-- Deuxième colonne : Traitement des données côté serveur avec Node.js -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-server"></i> Traitement des Données avec Node.js et Express</h2>
            <p>Le serveur Node.js reçoit les données JSON via <code>req.body</code> (grâce à <code>Express</code> et son middleware <code>express.json()</code>) et renvoie une réponse JSON.</p>

            <h3 style="color: #28a745;">Exemple de Serveur Node.js avec Express</h3>
            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h4><i class="fas fa-code"></i> Code Node.js - serveur.js</h4>
                <pre><code>
// Installation : npm install express
const express = require('express');
const app = express();
const PORT = 3000;

// Middleware pour traiter les données JSON
app.use(express.json());

// Route pour recevoir les données
app.post('/api/data', (req, res) => {
    const { nom, age } = req.body;
    const response = { status: "success", message: `Bonjour, ${nom}. Vous avez ${age} ans.` };
    res.json(response);
});

// Démarrer le serveur
app.listen(PORT, () => {
    console.log(`Serveur en écoute sur http://localhost:${PORT}`);
});
                </code></pre>
                <p>Ce serveur écoute sur le port 3000 et utilise <code>/api/data</code> pour traiter les données JSON reçues et renvoyer une réponse JSON au client.</p>
            </div>

            <h2 style="color: #ffc107;"><i class="fas fa-exclamation-triangle"></i> Conseils pour AJAX avec Node.js</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Utilisez <code>express.json()</code> pour traiter les données JSON envoyées par le client.</li>
                <li><i class="fas fa-check-circle"></i> Toujours définir <code>Content-Type: application/json</code> pour les réponses JSON.</li>
                <li><i class="fas fa-check-circle"></i> Utilisez des URL de base claires pour les API (comme <code>/api/data</code>).</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sécurité et AJAX -->
<div class="content-section" id="ajax-security">
    <h1><i class="fas fa-shield-alt icon"></i> Sécurité et AJAX</h1>
    <div class="row">
        <!-- Première colonne : Principales menaces de sécurité -->
        <div class="col-md-6">
            <h2 style="color: #dc3545;"><i class="fas fa-exclamation-triangle"></i> Principales Menaces de Sécurité</h2>
            <ul>
                <li><strong>Cross-Site Scripting (XSS)</strong> : Les attaques XSS injectent du code malveillant dans les pages web, souvent via des entrées utilisateur non filtrées.</li>
                <li><strong>Cross-Site Request Forgery (CSRF)</strong> : Les attaques CSRF forcent un utilisateur authentifié à exécuter des actions non autorisées sur un autre site.</li>
                <li><strong>Injection SQL</strong> : Une technique d'injection qui utilise des entrées utilisateur malveillantes pour manipuler des requêtes SQL.</li>
                <li><strong>Exposition des Données Sensibles</strong> : Transmettre des données sensibles sans cryptage ou contrôles d'accès peut exposer les utilisateurs à des violations de données.</li>
            </ul>

            <h2 style="color: #007bff;"><i class="fas fa-shield-alt"></i> Meilleures Pratiques de Sécurité AJAX</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> <strong>Valider les entrées utilisateur</strong> : Nettoyez et validez toutes les entrées pour éviter les injections et attaques XSS.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Utiliser HTTPS</strong> : Assurez-vous que les échanges AJAX se font uniquement sur des connexions sécurisées.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Limiter les CORS</strong> : Configurez CORS (Cross-Origin Resource Sharing) pour autoriser uniquement les domaines de confiance.</li>
            </ul>
        </div>

        <!-- Deuxième colonne : Techniques de protection avec AJAX -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-key"></i> Techniques de Protection</h2>
            <h3>1. Prévenir les attaques XSS</h3>
            <p>Utilisez des bibliothèques comme <code>DOMPurify</code> pour nettoyer les entrées utilisateur avant de les afficher dans le DOM. Assurez-vous que tous les champs d'entrée sont correctement validés côté serveur.</p>

            <h3>2. Protection CSRF</h3>
            <p>Pour protéger contre les attaques CSRF, utilisez des <strong>tokens CSRF</strong>. Un token unique est généré côté serveur pour chaque session et doit être inclus dans chaque requête AJAX.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h4><i class="fas fa-code"></i> Exemple d'Utilisation de CSRF Token</h4>
                <pre><code>
// JavaScript : Inclusion d'un token CSRF dans une requête
async function envoyerRequete() {
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    let response = await fetch("https://example.com/api", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "CSRF-Token": csrfToken
        },
        body: JSON.stringify({ data: "example" })
    });
    let result = await response.json();
    console.log(result);
}
                </code></pre>
            </div>

            <h3>3. Utiliser des En-têtes de Sécurité</h3>
            <p>Activez des en-têtes HTTP de sécurité comme <code>Content-Security-Policy</code> pour restreindre les sources de scripts et limiter les risques d'attaques XSS.</p>

            <h3>4. Limiter les CORS</h3>
            <p>Assurez-vous que votre serveur est configuré pour autoriser uniquement les domaines de confiance. Par exemple, dans un serveur Node.js avec Express :</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745;">
                <h4><i class="fas fa-code"></i> Configuration CORS dans Node.js</h4>
                <pre><code>
// Configuration CORS dans Express (Node.js)
const express = require('express');
const cors = require('cors');
const app = express();

app.use(cors({
    origin: "https://example.com", // Autorise uniquement example.com
    methods: ["GET", "POST"],
    allowedHeaders: ["Content-Type", "CSRF-Token"]
}));
                </code></pre>
            </div>
        </div>
    </div>
</div>
<!-- Exemples Pratiques en AJAX -->
<div class="content-section" id="ajax-examples">
    <h1><i class="fas fa-code-branch icon"></i> Exemples Pratiques en AJAX</h1>
    <div class="row">
        <!-- Première colonne : Chargement de Contenu Dynamique -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-sync-alt"></i> Chargement de Contenu Dynamique</h2>
            <p>Le chargement de contenu dynamique est une utilisation courante d'AJAX, permettant d'ajouter des informations sans recharger la page.</p>

            <div class="example-box" style="background-color: #f1f8ff; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple - Chargement de Posts depuis une API</h3>
                <pre><code>
// JavaScript : Charger du contenu avec Fetch
async function chargerPosts() {
    try {
        let response = await fetch("https://jsonplaceholder.typicode.com/posts");
        let posts = await response.json();
        posts.forEach(post => {
            document.querySelector("#posts").innerHTML += `<h6>${post.title}</h6><p>${post.body}</p>`;
        });
    } catch (error) {
        console.error("Erreur:", error);
    }
}
chargerPosts();
                </code></pre>
                <p>Ce code charge des posts d'une API et les affiche dans un élément HTML avec l'ID <code>posts</code>.</p>
            </div>
        </div>

        <!-- Deuxième colonne : Envoi de Formulaire avec AJAX -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-paper-plane"></i> Envoi de Formulaire sans Rechargement</h2>
            <p>Envoyer des formulaires avec AJAX est pratique pour éviter les rechargements de page et améliorer l’expérience utilisateur.</p>

            <div class="example-box" style="background-color: #e6ffe6; padding: 15px; border-left: 4px solid #28a745; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple - Envoi d’un Formulaire de Contact</h3>
                <pre><code>
// JavaScript : Envoi de formulaire avec Fetch
document.querySelector("#contactForm").addEventListener("submit", async function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    let response = await fetch("https://example.com/api/contact", {
        method: "POST",
        body: formData
    });
    let result = await response.json();
    console.log("Réponse:", result);
});
                </code></pre>
                <p>Ce code envoie un formulaire de contact sans recharger la page en utilisant <code>FormData</code> pour formater les données du formulaire.</p>
            </div>
        </div>

        <!-- Filtrage en Temps Réel -->
        <div class="col-md-6">
            <h2 style="color: #ffc107;"><i class="fas fa-search"></i> Filtrage en Temps Réel</h2>
            <p>Les filtres de recherche en temps réel sont une autre application puissante d’AJAX, permettant d'affiner les résultats au fur et à mesure que l'utilisateur tape.</p>

            <div class="example-box" style="background-color: #fff5e6; padding: 15px; border-left: 4px solid #ffc107; margin-bottom: 15px;">
                <h3><i class="fas fa-code"></i> Exemple - Recherche en Temps Réel</h3>
                <pre><code>
// JavaScript : Recherche dynamique avec Fetch
document.querySelector("#searchInput").addEventListener("input", async function() {
    let query = this.value;
    if (query.length > 2) { // Attendre que l'utilisateur tape 3 caractères ou plus
        let response = await fetch(`https://example.com/api/search?q=${query}`);
        let results = await response.json();
        let output = "";
        results.forEach(result => {
            output += `<p>${result.name}</p>`;
        });
        document.querySelector("#results").innerHTML = output;
    }
});
                </code></pre>
                <p>Ce code envoie la requête de recherche après que l’utilisateur a tapé au moins trois caractères et affiche les résultats en direct.</p>
            </div>
        </div>

        <!-- Pagination avec AJAX -->
        <div class="col-md-6">
            <h2 style="color: #17a2b8;"><i class="fas fa-list-ol"></i> Pagination avec AJAX</h2>
            <p>La pagination avec AJAX permet de charger de nouvelles pages de contenu sans recharger l'ensemble de la page.</p>

            <div class="example-box" style="background-color: #e6f7ff; padding: 15px; border-left: 4px solid #17a2b8;">
                <h3><i class="fas fa-code"></i> Exemple - Pagination Dynamique</h3>
                <pre><code>
// JavaScript : Pagination avec Fetch
let currentPage = 1;
async function chargerPage(page) {
    let response = await fetch(`https://example.com/api/items?page=${page}`);
    let items = await response.json();
    document.querySelector("#items").innerHTML = "";
    items.forEach(item => {
        document.querySelector("#items").innerHTML += `<p>${item.name}</p>`;
    });
}

document.querySelector("#nextPage").addEventListener("click", () => {
    currentPage++;
    chargerPage(currentPage);
});

document.querySelector("#prevPage").addEventListener("click", () => {
    if (currentPage > 1) {
        currentPage--;
        chargerPage(currentPage);
    }
});
                </code></pre>
                <p>Ce code utilise des boutons pour naviguer entre les pages de contenu, chargées dynamiquement avec AJAX.</p>
            </div>
        </div>
    </div>
</div>
<!-- Bonnes Pratiques AJAX -->
<div class="content-section" id="ajax-best-practices">
    <h1><i class="fas fa-check-circle icon"></i> Bonnes Pratiques AJAX</h1>
    <div class="row">
        <!-- Première colonne : Performances et Optimisations -->
        <div class="col-md-6">
            <h2 style="color: #007bff;"><i class="fas fa-tachometer-alt"></i> Optimisation des Performances</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> <strong>Minimisez les Requêtes</strong> : Évitez d’envoyer des requêtes AJAX trop fréquentes. Utilisez la détection de saisie différée (debounce) pour les recherches en temps réel.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Gérez les Cache</strong> : Mettez en cache les données fréquemment demandées pour éviter des requêtes répétitives (par exemple, stockez les données localement ou dans le cache du navigateur).</li>
                <li><i class="fas fa-check-circle"></i> <strong>Utilisez des Formats de Données Légers</strong> : Préférez JSON à XML pour des transferts de données plus rapides et plus légers.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Compressez les Réponses Serveur</strong> : Utilisez la compression GZIP côté serveur pour réduire la taille des données envoyées.</li>
            </ul>

            <h2 style="color: #ffc107;"><i class="fas fa-hourglass-half"></i> Gestion des Timeouts et des Requêtes Lentes</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> <strong>Définissez un Timeout</strong> : Prévoyez un délai d’attente pour chaque requête AJAX afin d’éviter que l'application ne reste bloquée indéfiniment.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Informez l'Utilisateur</strong> : Affichez un indicateur de chargement (spinner) pour améliorer l’expérience utilisateur en cas de requête longue.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Fournissez des Messages d'Erreur</strong> : Assurez-vous d'afficher des messages d’erreur en cas de timeout ou d’échec de la requête.</li>
            </ul>
        </div>

        <!-- Deuxième colonne : Sécurité et Expérience Utilisateur -->
        <div class="col-md-6">
            <h2 style="color: #28a745;"><i class="fas fa-lock"></i> Sécurité</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> <strong>Validez les Entrées</strong> : Vérifiez toutes les données reçues sur le serveur pour éviter les injections SQL et les attaques XSS.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Utilisez HTTPS</strong> : Assurez-vous que toutes les requêtes AJAX sont envoyées via une connexion HTTPS pour protéger les données.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Implémentez des Tokens CSRF</strong> : Protégez les requêtes sensibles contre les attaques CSRF en utilisant des tokens uniques pour chaque session utilisateur.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Limiter l'Accès CORS</strong> : Autorisez uniquement les domaines de confiance à accéder à vos ressources en configurant CORS de manière restrictive.</li>
            </ul>

            <h2 style="color: #17a2b8;"><i class="fas fa-user-check"></i> Expérience Utilisateur</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> <strong>Évitez les Rechargements Complets</strong> : Utilisez AJAX pour mettre à jour le contenu sans recharger la page, mais offrez toujours des alternatives de navigation pour les utilisateurs sans JavaScript.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Gérez les États de Requête</strong> : Indiquez les différents états (chargement, succès, échec) avec des notifications visuelles ou des messages d’état.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Détectez et Gérez les Erreurs Réseau</strong> : Vérifiez la connectivité avant d'envoyer des requêtes et proposez des solutions (comme un mode hors ligne) en cas de perte de connexion.</li>
            </ul>
        </div>
    </div>
</div>


</div>
</div>

    <!-- Bootstrap JS (optional if you want responsive behavior) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>
</html>
