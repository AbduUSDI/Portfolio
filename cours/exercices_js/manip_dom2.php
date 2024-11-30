<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Manipulation Avancée du DOM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Manipulation Avancée du DOM</h1>

    <!-- Zone de manipulation du DOM -->
    <ul id="ma-liste" class="list-group mb-3">
        <li class="list-group-item">Élément existant 1</li>
        <li class="list-group-item">Élément existant 2</li>
    </ul>
    <button class="btn btn-primary mb-3" onclick="ajouterNouvelElement()">Ajouter un nouvel élément</button>
    <button class="btn btn-secondary mb-3" onclick="clonerElement()">Cloner le dernier élément</button>
    <button class="btn btn-danger mb-3" onclick="supprimerDernierElement()">Supprimer le dernier élément</button>

    <div id="resultat" class="mt-3"></div>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle méthode permet de créer un nouvel élément DOM en JavaScript ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'createElement')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Comment ajouter une classe à un élément créé dynamiquement ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'classList.add')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Question 3 -->
        <div class="mb-3">
            <label for="q3" class="form-label">Question 3 : Quelle méthode permet de cloner un élément existant dans le DOM ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q3', 'cloneNode')">Vérifier la réponse</button>
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

<script src="script2.js"></script>
<script src="verification2.js"></script>
</body>
</html>
