<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Manipulation du DOM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <hr>
    <div class="row">
        <div class="col-md-6">
            <?php include '../../templates/retour.php'; ?>
        </div>
        <div class="col-md-6">
            <a class="btn btn-warning" href="manip_dom2.php">Exercice suivant de la manipulation avancée du DOM</a>
        </div>
    </div>
    <hr>
    <h1 class="text-center mb-5">Exercice : Manipulation du DOM</h1>

    <!-- Structure de base pour la manipulation du DOM -->
    <div id="content" class="p-3 mb-3 border">
        <h2 class="title">Titre principal</h2>
        <p class="description">Ceci est une description initiale.</p>
        <button id="btn" class="btn btn-primary">Cliquez-moi</button>
        <ul class="list">
            <li>Élément 1</li>
            <li>Élément 2</li>
            <li>Élément 3</li>
        </ul>
    </div>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle méthode permet de sélectionner un élément par son ID ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'getElementById')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Quelle méthode permet de sélectionner tous les éléments d'une même classe ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'getElementsByClassName')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Question 3 -->
        <div class="mb-3">
            <label for="q3" class="form-label">Question 3 : Quelle méthode permet de modifier le texte d'un élément sélectionné ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q3', 'textContent')">Vérifier la réponse</button>
            <div id="q3-result" class="mt-2"></div>
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

<script src="script.js"></script>
<script src="verification.js"></script>
</body>
</html>
