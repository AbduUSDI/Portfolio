<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Méthodes AJAX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Méthodes AJAX</h1>

    <!-- Exercice de XMLHttpRequest -->
    <section id="xhr-section" class="mb-5">
        <h2>XMLHttpRequest</h2>
        <p>Utilisez la méthode <code>XMLHttpRequest</code> pour charger des données depuis une URL et afficher le résultat.</p>
        <button class="btn btn-primary" onclick="chargerDataXHR()">Charger les Données</button>
        <div id="xhr-result" class="mt-3"></div>
    </section>

    <!-- Exercice de Fetch API -->
    <section id="fetch-section" class="mb-5">
        <h2>Fetch API</h2>
        <p>Utilisez la méthode <code>Fetch API</code> pour charger des données depuis une URL et afficher le résultat.</p>
        <button class="btn btn-secondary" onclick="chargerDataFetch()">Charger les Données</button>
        <div id="fetch-result" class="mt-3"></div>
    </section>

    <!-- Exercice Async/Await -->
    <section id="async-await-section" class="mb-5">
        <h2>Async/Await</h2>
        <p>Utilisez la syntaxe <code>Async/Await</code> pour charger des données depuis une URL et afficher le résultat.</p>
        <button class="btn btn-success" onclick="chargerDataAsyncAwait()">Charger les Données</button>
        <div id="async-await-result" class="mt-3"></div>
    </section>

    <!-- Exercice de Promise -->
    <section id="promise-section" class="mb-5">
        <h2>Promise</h2>
        <p>Utilisez une <code>Promise</code> pour charger des données depuis une URL et afficher le résultat.</p>
        <button class="btn btn-info" onclick="chargerDataPromise()">Charger les Données</button>
        <div id="promise-result" class="mt-3"></div>
    </section>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>

        <!-- Question 1 : XMLHttpRequest -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle méthode AJAX est la plus ancienne pour effectuer des requêtes asynchrones ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'XMLHttpRequest')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 : Fetch API -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Quelle méthode AJAX moderne utilise des Promises pour gérer les requêtes ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'Fetch API')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Question 3 : Async/Await -->
        <div class="mb-3">
            <label for="q3" class="form-label">Question 3 : Quelle syntaxe permet de simplifier la gestion des Promises et rendre le code asynchrone plus lisible ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q3', 'Async/Await')">Vérifier la réponse</button>
            <div id="q3-result" class="mt-2"></div>
        </div>

        <!-- Question 4 : Promise -->
        <div class="mb-3">
            <label for="q4" class="form-label">Question 4 : Quel objet en JavaScript est utilisé pour représenter une opération asynchrone dont le résultat sera disponible dans le futur ?</label>
            <input type="text" id="q4" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q4', 'Promise')">Vérifier la réponse</button>
            <div id="q4-result" class="mt-2"></div>
        </div>

        <!-- Boutons d'indices -->
        <div class="mt-4">
            <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndice(3)">Indice 3</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndice(4)">Indice 4</button>
            <div id="indice" class="mt-3"></div>
        </div>

        <!-- Bouton pour afficher les réponses -->
        <div class="mt-4">
            <button class="btn btn-warning" onclick="afficherReponses()">Afficher les réponses</button>
            <div id="reponses" class="mt-3"></div>
        </div>
    </section>
</div>

<script src="ajax-exercises.js"></script>
<script src="verification.js"></script>
</body>
</html>
