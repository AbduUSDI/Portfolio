<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Contraintes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Contraintes (PRIMARY, UNIQUE, FOREIGN)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="contraintes">
            <p>Complétez les requêtes SQL en ajoutant les contraintes `PRIMARY`, `UNIQUE` et `FOREIGN` appropriées. Répondez ensuite aux questions sur les contraintes en SQL.</p>

            <!-- Contraintes PRIMARY KEY -->
            <div class="mb-4">
                <h3>1. Contrainte PRIMARY KEY :</h3>
                <p>Complétez la requête pour définir une clé primaire pour la table <strong>Produits</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Produits</span> (
    <span class="sql-column">produit_id</span> <span class="sql-other">INT</span> <input type="text" id="primary_key" class="code-trou" placeholder="Contrainte...">,
    <span class="sql-column">nom_produit</span> <span class="sql-other">VARCHAR(50)</span>,
    <span class="sql-column">prix</span> <span class="sql-other">DECIMAL(10, 2)</span>
);
                </code></pre>
            </div>

            <!-- Contraintes UNIQUE -->
            <div class="mb-4">
                <h3>2. Contrainte UNIQUE :</h3>
                <p>Complétez la requête pour que l'email de chaque client soit unique dans la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Clients</span> (
    <span class="sql-column">client_id</span> <span class="sql-other">INT PRIMARY KEY</span>,
    <span class="sql-column">nom</span> <span class="sql-other">VARCHAR(50)</span>,
    <span class="sql-column">email</span> <span class="sql-other">VARCHAR(100)</span> <input type="text" id="unique_key" class="code-trou" placeholder="Contrainte...">
);
                </code></pre>
            </div>

            <!-- Contraintes FOREIGN KEY -->
            <div class="mb-4">
                <h3>3. Contrainte FOREIGN KEY :</h3>
                <p>Complétez la requête pour établir une clé étrangère reliant la table <strong>Commandes</strong> à la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Commandes</span> (
    <span class="sql-column">commande_id</span> <span class="sql-other">INT PRIMARY KEY</span>,
    <span class="sql-column">client_id</span> <span class="sql-other">INT</span>,
    <span class="sql-column">date_commande</span> <span class="sql-other">DATE</span>,
    <span class="sql-keyword">FOREIGN KEY</span> (<span class="sql-column">client_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Clients</span>(<input type="text" id="foreign_key" class="code-trou" placeholder="Clé...">)
);
                </code></pre>
            </div>

            <!-- Questions sur les Contraintes -->
            <h3>Questions sur les Contraintes en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi utilise-t-on la contrainte PRIMARY KEY ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Que garantit la contrainte UNIQUE dans une colonne ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Que permet d’assurer une contrainte FOREIGN KEY entre deux tables ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q4" class="form-label">4. Pourquoi est-il recommandé d'utiliser des clés uniques pour des données sensibles, comme un email ?</label>
                <input type="text" id="q4" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>

            <button class="btn btn-primary" onclick="verifierReponses()">Vérifier les réponses</button>
            <div id="resultat-exercice" class="mt-3"></div>

            <!-- Boutons d'indices -->
            <div class="mt-4">
                <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
                <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
                <button class="btn btn-secondary" onclick="afficherIndice(3)">Indice 3</button>
                <div id="indice" class="mt-3"></div>
            </div>

            <!-- Bouton pour afficher la réponse -->
            <div class="mt-4">
                <button class="btn btn-warning" onclick="afficherReponse()">Afficher la réponse</button>
                <div id="reponse" class="mt-3"></div>
            </div>
        </section>
    </div>

    <script src="js/verification_sql_contraintes.js"></script>
</body>
</html>
