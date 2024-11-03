<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Manipulation de JSON</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Manipulation de JSON</h1>

    <!-- Formulaire pour ajouter un produit -->
    <div class="mb-3">
        <label for="productName" class="form-label">Nom du produit :</label>
        <input type="text" id="productName" class="form-control" placeholder="Entrez le nom du produit">
    </div>

    <div class="mb-3">
        <label for="productPrice" class="form-label">Prix du produit :</label>
        <input type="number" id="productPrice" class="form-control" placeholder="Entrez le prix du produit">
    </div>

    <button class="btn btn-primary" onclick="addProduct()">Ajouter le produit</button>
    <button class="btn btn-secondary" onclick="displayProducts()">Afficher les produits</button>
    <button class="btn btn-danger" onclick="clearProducts()">Effacer les produits</button>

    <div id="product-list" class="mt-4"></div>

    <!-- Section de questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>
        
        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle méthode JSON est utilisée pour convertir un objet JavaScript en chaîne de texte ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'JSON.stringify')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Comment accède-t-on aux données stockées dans localStorage ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'localStorage.getItem')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Question 3 -->
        <div class="mb-3">
            <label for="q3" class="form-label">Question 3 : Quelle méthode JSON est utilisée pour convertir une chaîne en objet JavaScript ?</label>
            <input type="text" id="q3" class="form-control" placeholder="Entrez la méthode ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q3', 'JSON.parse')">Vérifier la réponse</button>
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
