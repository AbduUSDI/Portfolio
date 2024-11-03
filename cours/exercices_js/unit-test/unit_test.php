<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Tests Unitaires</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Tests Unitaires en JavaScript avec Jest</h1>

    <!-- Description de l'exercice -->
    <p>Dans cet exercice, vous allez créer des fonctions JavaScript simples et utiliser Jest pour écrire des tests unitaires. Cela permet de vérifier que chaque fonction fonctionne comme attendu indépendamment.</p>

    <!-- Formulaire pour questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle fonction Jest utilise-t-on pour vérifier un résultat attendu ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez la réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'expect')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Comment vérifie-t-on l'égalité d'une valeur avec Jest ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'toBe')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Boutons d'indices -->
        <div class="mt-4">
            <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
            <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
            <button class="btn btn-secondary" onclick="afficherIndice(3)">Indice 3</button>
            <div id="indice" class="mt-3"></div>
        </div>

        <!-- Bouton pour afficher les réponses -->
        <div class="mt-4">
            <button class="btn btn-warning" onclick="afficherReponses()">Afficher les réponses</button>
            <div id="reponses" class="mt-3"></div>
        </div>
    </section>
</div>

<script src="./verification.js"></script>
</body>
</html>
