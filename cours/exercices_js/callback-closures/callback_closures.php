<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Callbacks et Closures</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Callbacks et Closures</h1>

    <!-- Exercice de Callback -->
    <section id="callback-section" class="mb-5">
        <h2>Callback</h2>
        <p>Utilisez la fonction <code>executeCallback</code> pour exécuter une fonction callback donnée.</p>
        <button class="btn btn-primary" onclick="executeCallback(logMessage, 'Bonjour, ceci est un callback !')">Exécuter Callback</button>
        <div id="callback-result" class="mt-3"></div>
    </section>

    <!-- Exercice de Closure -->
    <section id="closure-section" class="mb-5">
        <h2>Closure</h2>
        <p>Utilisez la fonction <code>createCounter</code> pour créer un compteur et afficher le nombre de fois où le bouton est cliqué.</p>
        <button class="btn btn-secondary" onclick="incrementCounterDisplay()">Incrémenter le Compteur</button>
        <div id="closure-result" class="mt-3"></div>
    </section>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Comment appelle-t-on une fonction passée en paramètre d'une autre fonction et exécutée dans cette dernière ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'callback')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Que retourne une closure en JavaScript ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'fonction imbriquée')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Boutons d'indices -->
        <div class="mt-4">
            <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
            <div id="indice" class="mt-3"></div>
        </div>

        <!-- Bouton pour afficher les réponses -->
        <div class="mt-4">
            <button class="btn btn-warning" onclick="afficherReponses()">Afficher les réponses</button>
            <div id="reponses" class="mt-3"></div>
        </div>
    </section>
</div>

<script src="script.js"></script>
<script src="verification.js"></script>
</body>
</html>
