<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : AJAX Avancé</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : AJAX Avancé</h1>

    <!-- Gestion des Erreurs -->
    <section id="error-handling-section" class="mb-5">
        <h2>Gestion des Erreurs</h2>
        <p>Simulez une requête avec une gestion d’erreur en utilisant <code>try...catch</code> pour capturer les erreurs de requête.</p>
        <button class="btn btn-danger" onclick="simulerErreur()">Simuler Erreur</button>
        <div id="error-result" class="mt-3"></div>
    </section>

    <!-- Async/Await avec Fetch -->
    <section id="async-await-fetch-section" class="mb-5">
        <h2>Async/Await avec Fetch</h2>
        <p>Utilisez <code>Async/Await</code> pour envoyer une requête Fetch et afficher le résultat.</p>
        <button class="btn btn-success" onclick="fetchAsyncAwait()">Charger les Données</button>
        <div id="async-await-fetch-result" class="mt-3"></div>
    </section>

    <!-- AJAX avec JSON -->
    <section id="ajax-json-section" class="mb-5">
        <h2>AJAX avec JSON</h2>
        <p>Envoyez et recevez des données en JSON via une requête AJAX.</p>
        <button class="btn btn-info" onclick="fetchWithJSON()">Envoyer JSON</button>
        <div id="json-result" class="mt-3"></div>
    </section>

    <!-- Utilisation des Promises -->
    <section id="promises-section" class="mb-5">
        <h2>Utilisation des Promises</h2>
        <p>Utilisez une <code>Promise</code> pour traiter une requête AJAX et afficher le résultat ou une erreur.</p>
        <button class="btn btn-primary" onclick="handlePromise()">Utiliser Promise</button>
        <div id="promise-result" class="mt-3"></div>
    </section>

    <!-- Gestion des Timeouts -->
    <section id="timeouts-section" class="mb-5">
        <h2>Gestion des Timeouts</h2>
        <p>Créez une requête avec un timeout en utilisant <code>Promise.race()</code> et gérez le cas où le délai est dépassé.</p>
        <button class="btn btn-warning" onclick="handleTimeout()">Simuler Timeout</button>
        <div id="timeout-result" class="mt-3"></div>
    </section>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Questions pour chaque concept -->
        <div class="mb-3">
            <label class="form-label">Question 1 : Quelle structure est souvent utilisée pour capturer les erreurs en AJAX ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponseAvance('q1', 'try...catch')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">Question 2 : Quelle syntaxe facilite l’utilisation de Fetch en mode asynchrone ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponseAvance('q2', 'Async/Await')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">Question 3 : Quel format est le plus courant pour échanger des données en AJAX ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponseAvance('q3', 'JSON')">Vérifier la réponse</button>
            <div id="q3-result" class="mt-2"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">Question 4 : Quel objet en JavaScript permet de représenter une opération asynchrone ?</label>
            <input type="text" id="q4" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponseAvance('q4', 'Promise')">Vérifier la réponse</button>
            <div id="q4-result" class="mt-2"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">Question 5 : Quelle méthode permet de définir un délai maximal pour une requête AJAX en utilisant Promise ?</label>
            <input type="text" id="q5" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponseAvance('q5', 'Promise.race')">Vérifier la réponse</button>
            <div id="q5-result" class="mt-2"></div>
        </div>

        <!-- Boutons d'indices et solutions -->
        <div class="mt-4">
            <button class="btn btn-secondary me-2" onclick="afficherIndiceAvance(1)">Indice 1</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndiceAvance(2)">Indice 2</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndiceAvance(3)">Indice 3</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndiceAvance(4)">Indice 4</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndiceAvance(5)">Indice 5</button>
            <div id="indice" class="mt-3"></div>
        </div>

        <div class="mt-4">
            <button class="btn btn-warning" onclick="afficherReponsesAvance()">Afficher les réponses</button>
            <div id="reponses" class="mt-3"></div>
        </div>
    </section>
</div>

<script src="ajax-advanced.js"></script>
<script src="verification.js"></script>
</body>
</html>
