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
        <a href="#ajax-methods"><i class="fas fa-tools"></i> Méthodes AJAX</a>
        <a href="#ajax-xmlhttprequest"><i class="fas fa-rocket"></i> XMLHttpRequest</a>
        <a href="#ajax-fetch"><i class="fas fa-laptop-code"></i> Fetch API</a>

        <button class="dropdown-btn">AJAX Avancé <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="#error-handling">Gestion des erreurs</a>
            <a href="#async-await">Async/Await avec Fetch</a>
            <a href="#ajax-json">AJAX avec JSON</a>
            <a href="#ajax-promises">Utilisation des Promises</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content">
        <div class="container animate__animated animate__fadeInUp">

            <!-- Introduction à AJAX -->
            <div class="content-section" id="ajax-intro">
                <h1><i class="fas fa-code icon"></i>Introduction à AJAX</h1>
                <p>AJAX (Asynchronous JavaScript and XML) permet d'envoyer et de recevoir des données depuis un serveur en arrière-plan sans recharger la page entière. Cela rend les applications web plus interactives et réactives.</p>
                <button type="button" class="btn btn-example" data-toggle="modal" data-target="#introModal">Voir Exemple</button>
            </div>

            <!-- Méthodes AJAX -->
            <div class="content-section" id="ajax-methods">
                <h1><i class="fas fa-tools icon"></i>Méthodes AJAX</h1>
                <p>AJAX repose principalement sur deux approches : l’utilisation de l’objet `XMLHttpRequest` et de l'API moderne Fetch. Voici comment les utiliser :</p>

                <div class="row">
                    <div class="col-md-6">
                        <h3 id="xmlhttprequest">XMLHttpRequest</h3>
                        <p>XMLHttpRequest est une méthode ancienne pour envoyer des requêtes HTTP asynchrones. C'est une API bas niveau qui est toujours supportée mais moins utilisée depuis l’arrivée de Fetch.</p>
                        <button type="button" class="btn btn-example" data-toggle="modal" data-target="#xhrModal">Voir Exemple</button>
                    </div>

                    <div class="col-md-6">
                        <h3 id="fetch">Fetch API</h3>
                        <p>Fetch est une API moderne qui simplifie l'envoi de requêtes HTTP asynchrones. Elle est plus intuitive et basée sur des Promises, ce qui facilite la gestion des réponses et des erreurs.</p>
                        <button type="button" class="btn btn-example" data-toggle="modal" data-target="#fetchModal">Voir Exemple</button>
                    </div>
                </div>
            </div>

            <!-- XMLHttpRequest -->
            <div class="content-section" id="ajax-xmlhttprequest">
                <h1><i class="fas fa-rocket icon"></i>XMLHttpRequest</h1>
                <p>L'objet XMLHttpRequest permet d'envoyer des requêtes HTTP vers un serveur et de recevoir une réponse de manière asynchrone.</p>
                <button type="button" class="btn btn-example" data-toggle="modal" data-target="#xmlhttprequestModal">Voir Exemple</button>
            </div>

            <!-- Fetch API -->
            <div class="content-section" id="ajax-fetch">
                <h1><i class="fas fa-laptop-code icon"></i>Fetch API</h1>
                <p>La Fetch API remplace progressivement XMLHttpRequest. Elle offre une syntaxe plus simple et repose sur l'utilisation des Promises.</p>
                <button type="button" class="btn btn-example" data-toggle="modal" data-target="#fetchApiModal">Voir Exemple</button>
            </div>

            <!-- AJAX Avancé -->
            <div class="content-section" id="ajax-avance">
                <h1><i class="fas fa-tools icon"></i>AJAX Avancé</h1>

                <div class="row">
                    <div class="col-md-6">
                        <h3 id="error-handling">Gestion des erreurs</h3>
                        <p>Il est important de gérer correctement les erreurs dans AJAX pour offrir une bonne expérience utilisateur. Cela inclut la gestion des erreurs réseau et des réponses non valides.</p>
                        <button type="button" class="btn btn-example" data-toggle="modal" data-target="#errorModal">Voir Exemple</button>
                    </div>

                    <div class="col-md-6">
                        <h3 id="async-await">Async/Await avec Fetch</h3>
                        <p>Les mots-clés `async` et `await` permettent d'utiliser des Promises de manière plus lisible et structurée, notamment lors des requêtes AJAX.</p>
                        <button type="button" class="btn btn-example" data-toggle="modal" data-target="#asyncModal">Voir Exemple</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h3 id="ajax-json">AJAX avec JSON</h3>
                        <p>Le format JSON (JavaScript Object Notation) est souvent utilisé avec AJAX pour échanger des données structurées entre le client et le serveur.</p>
                        <button type="button" class="btn btn-example" data-toggle="modal" data-target="#jsonModal">Voir Exemple</button>
                    </div>

                    <div class="col-md-6">
                        <h3 id="ajax-promises">Utilisation des Promises</h3>
                        <p>Les Promises simplifient la gestion des requêtes asynchrones en offrant un moyen plus structuré de traiter les succès et les erreurs.</p>
                        <button type="button" class="btn btn-example" data-toggle="modal" data-target="#promisesModal">Voir Exemple</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modals pour AJAX -->
    <!-- Modal Introduction -->
    <div class="modal fade" id="introModal" tabindex="-1" role="dialog" aria-labelledby="introModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="introModalLabel">Exemple AJAX Simple</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
let xhr = new XMLHttpRequest();
xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts', true);
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
    }
};
xhr.send();
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal XMLHttpRequest -->
    <div class="modal fade" id="xhrModal" tabindex="-1" role="dialog" aria-labelledby="xhrModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="xhrModalLabel">Exemple de XMLHttpRequest POST</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
let xhr = new XMLHttpRequest();
xhr.open('POST', 'https://jsonplaceholder.typicode.com/posts', true);
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 201) {
        console.log(xhr.responseText);
    }
};
xhr.send(JSON.stringify({ title: 'Post Title', body: 'Post body content' }));
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Fetch API -->
    <div class="modal fade" id="fetchApiModal" tabindex="-1" role="dialog" aria-labelledby="fetchApiModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fetchApiModalLabel">Exemple de Fetch API</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gestion des erreurs -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Exemple de Gestion des erreurs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
fetch('https://jsonplaceholder.typicode.com/invalid-url')
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur HTTP: ' + response.status);
        }
        return response.json();
    })
    .catch(error => console.error('Erreur:', error));
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Async/Await avec Fetch -->
    <div class="modal fade" id="asyncModal" tabindex="-1" role="dialog" aria-labelledby="asyncModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="asyncModalLabel">Exemple Async/Await avec Fetch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
async function fetchData() {
    try {
        let response = await fetch('https://jsonplaceholder.typicode.com/posts');
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}
fetchData();
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal JSON avec AJAX -->
    <div class="modal fade" id="jsonModal" tabindex="-1" role="dialog" aria-labelledby="jsonModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jsonModalLabel">AJAX avec JSON</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
fetch('https://jsonplaceholder.typicode.com/posts', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ title: 'Mon titre', body: 'Mon contenu' })
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error('Erreur:', error));
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Promises -->
    <div class="modal fade" id="promisesModal" tabindex="-1" role="dialog" aria-labelledby="promisesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="promisesModalLabel">AJAX avec Promises</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
let promise = new Promise(function(resolve, reject) {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts');
    xhr.onload = function() {
        if (xhr.status === 200) {
            resolve(xhr.response);
        } else {
            reject('Erreur: ' + xhr.status);
        }
    };
    xhr.send();
});

promise.then(function(result) {
    console.log(result);
}).catch(function(error) {
    console.log(error);
});
                    </pre>
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
