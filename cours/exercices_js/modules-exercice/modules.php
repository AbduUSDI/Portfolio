<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Modules JavaScript</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Modules JavaScript</h1>
    
    <!-- Formulaire pour entrer les nombres -->
    <div class="mb-3">
        <label for="number1" class="form-label">Nombre 1 :</label>
        <input type="number" id="number1" class="form-control" placeholder="Entrez un nombre">
    </div>

    <div class="mb-3">
        <label for="number2" class="form-label">Nombre 2 :</label>
        <input type="number" id="number2" class="form-control" placeholder="Entrez un nombre">
    </div>

    <button class="btn btn-primary" onclick="performOperations()">Calculer</button>
    <div id="result" class="mt-3"></div>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle fonction permet d'additionner deux nombres ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez la fonction ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'addition')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Comment nomme-t-on la fonction pour diviser deux nombres ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la fonction ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'division')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Question 3 -->
        <div class="mb-3">
            <label for="q3" class="form-label">Question 3 : Comment appelle-t-on la fonction pour soustraire deux nombres ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez la fonction ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q3', 'soustraction')">Vérifier la réponse</button>
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

<script type="module" src="./app.js"></script>
<script src="./verification.js"></script>
</body>
</html>
