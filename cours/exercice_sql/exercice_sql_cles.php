<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Clés Primaires et Étrangères</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Clés Primaires et Étrangères</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="cles">
            <p>Complétez les déclarations de tables en ajoutant les clés primaires et étrangères appropriées. Répondez aux questions sur les clés en SQL.</p>

            <!-- Exercices Clés Primaires et Étrangères -->
            <div class="mb-4">
                <h3>1. Déclaration de Clé Primaire :</h3>
                <p>Complétez la requête pour définir une clé primaire pour la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Clients</span> (
    <span class="sql-column">client_id</span> <span class="sql-other">INT</span> <input type="text" id="primary_key1" class="code-trou" placeholder="Clé Primaire...">,
    <span class="sql-column">nom</span> <span class="sql-other">VARCHAR(50)</span>,
    <span class="sql-column">prenom</span> <span class="sql-other">VARCHAR(50)</span>
);
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>2. Déclaration de Clé Étrangère :</h3>
                <p>Complétez la requête pour ajouter une clé étrangère reliant la table <strong>Commandes</strong> à la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Commandes</span> (
    <span class="sql-column">commande_id</span> <span class="sql-other">INT PRIMARY KEY</span>,
    <span class="sql-column">client_id</span> <span class="sql-other">INT</span>,
    <span class="sql-column">date_commande</span> <span class="sql-other">DATE</span>,
    <span class="sql-keyword">FOREIGN KEY</span> (<span class="sql-column">client_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Clients</span>(<input type="text" id="foreign_key1" class="code-trou" placeholder="Clé Étrangère...">)
);
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>3. Relation Plusieurs-à-Plusieurs avec une Table d'Association :</h3>
                <p>Complétez la requête pour définir une relation N:N entre les tables <strong>Etudiants</strong> et <strong>Cours</strong> via la table <strong>Inscription</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Inscription</span> (
    <span class="sql-column">etudiant_id</span> <span class="sql-other">INT</span>,
    <span class="sql-column">cours_id</span> <span class="sql-other">INT</span>,
    <span class="sql-column">date_inscription</span> <span class="sql-other">DATE</span>,
    <span class="sql-other">PRIMARY KEY</span> (<span class="sql-column">etudiant_id</span>, <span class="sql-column">cours_id</span>),
    <span class="sql-keyword">FOREIGN KEY</span> (<span class="sql-column">etudiant_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Etudiants</span>(<input type="text" id="foreign_key2" class="code-trou" placeholder="Clé...">),
    <span class="sql-keyword">FOREIGN KEY</span> (<span class="sql-column">cours_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Cours</span>(<input type="text" id="foreign_key3" class="code-trou" placeholder="Clé...">)
);
                </code></pre>
            </div>

            <!-- Questions sur les Clés Primaires et Étrangères -->
            <h3>Questions sur les Clés en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi les clés primaires sont-elles importantes dans une table SQL ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Que permet de garantir une clé étrangère dans une relation entre deux tables ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quel type de relation nécessite une table d'association contenant deux clés étrangères ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q4" class="form-label">4. Pourquoi est-il important d'assurer l'intégrité référentielle avec des clés étrangères ?</label>
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

    <script src="js/verification_sql_cles.js"></script>
</body>
</html>
