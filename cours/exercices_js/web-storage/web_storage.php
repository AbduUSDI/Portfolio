<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Web Storage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Web Storage</h1>

    <!-- Formulaire pour entrer les informations -->
    <div class="mb-3">
        <label for="userName" class="form-label">Nom d'utilisateur :</label>
        <input type="text" id="userName" class="form-control" placeholder="Entrez votre nom">
    </div>
    <div class="mb-3">
        <label for="userColor" class="form-label">Couleur préférée :</label>
        <input type="color" id="userColor" class="form-control">
    </div>

    <button class="btn btn-primary" onclick="saveToLocalStorage()">Sauvegarder dans localStorage</button>
    <button class="btn btn-secondary" onclick="saveToSessionStorage()">Sauvegarder dans sessionStorage</button>
    <button class="btn btn-warning" onclick="clearStorage()">Effacer le stockage</button>

    <div id="storageResult" class="mt-4"></div>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle méthode est utilisée pour sauvegarder des données dans localStorage ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'setItem')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Quelle méthode permet de supprimer toutes les données de sessionStorage ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'clear')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Question 3 -->
        <div class="mb-3">
            <label for="q3" class="form-label">Question 3 : Quelle méthode permet d'obtenir une donnée spécifique à partir de localStorage ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q3', 'getItem')">Vérifier la réponse</button>
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
