<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Service Workers & PWA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Service Workers & PWA</h1>

    <button class="btn btn-primary mb-3" onclick="registerServiceWorker()">Enregistrer le Service Worker</button>
    <div id="sw-result" class="mt-3"></div>

    <!-- Section Questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>

        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : À quoi servent les Service Workers ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'fournir une expérience hors ligne et gérer le cache')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Quelles sont les trois étapes du cycle de vie d’un Service Worker ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez les trois étapes ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'installation, activation, fonctionnement')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Boutons d'indices -->
        <div class="mt-4">
            <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
            <button class="btn btn-secondary" onclick="afficherIndice(2)">Indice 2</button>
            <div id="indice" class="mt-3"></div>
        </div>

        <!-- Bouton pour Afficher les Réponses -->
        <div class="mt-4">
            <button class="btn btn-warning" onclick="afficherReponses()">Afficher les réponses</button>
            <div id="reponses" class="mt-3"></div>
        </div>
    </section>
</div>

<script src="./script.js"></script>
<script src="./verification.js"></script>
</body>
</html>
