<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Création et Suppression de Tables</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Création et Suppression de Tables</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="table-commands">
            <p>Complétez les requêtes SQL pour créer et supprimer des tables. Répondez ensuite aux questions sur l'utilisation des commandes SQL pour gérer les tables.</p>

            <!-- CREATE TABLE -->
            <div class="mb-4">
                <h3>1. Utilisation de CREATE TABLE :</h3>
                <p>Complétez la requête pour créer une table nommée <strong>Clients</strong> avec les colonnes suivantes :</p>
                <ul>
                    <li><strong>client_id</strong> : INT, clé primaire</li>
                    <li><strong>nom</strong> : VARCHAR(50)</li>
                    <li><strong>email</strong> : VARCHAR(100)</li>
                </ul>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Clients</span> (
    <span class="sql-column">client_id</span> <input type="text" id="client_id_type" class="code-trou" placeholder="Type..."> <span class="sql-keyword">PRIMARY KEY</span>,
    <span class="sql-column">nom</span> <input type="text" id="nom_type" class="code-trou" placeholder="Type...">,
    <span class="sql-column">email</span> <input type="text" id="email_type" class="code-trou" placeholder="Type...">
);
                </code></pre>
            </div>

            <!-- DROP TABLE -->
            <div class="mb-4">
                <h3>2. Utilisation de DROP TABLE :</h3>
                <p>Complétez la requête pour supprimer la table nommée <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">DROP TABLE</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <!-- CREATE TABLE IF NOT EXISTS -->
            <div class="mb-4">
                <h3>3. Utilisation de CREATE TABLE IF NOT EXISTS :</h3>
                <p>Complétez la requête pour créer la table <strong>Produits</strong> avec les colonnes suivantes uniquement si elle n'existe pas déjà :</p>
                <ul>
                    <li><strong>produit_id</strong> : INT, clé primaire</li>
                    <li><strong>nom_produit</strong> : VARCHAR(50)</li>
                    <li><strong>prix</strong> : DECIMAL(10,2)</li>
                </ul>
                <pre><code>
<span class="sql-keyword">CREATE TABLE IF NOT EXISTS</span> <span class="sql-table">Produits</span> (
    <span class="sql-column">produit_id</span> <input type="text" id="produit_id_type" class="code-trou" placeholder="Type..."> <span class="sql-keyword">PRIMARY KEY</span>,
    <span class="sql-column">nom_produit</span> <input type="text" id="nom_produit_type" class="code-trou" placeholder="Type...">,
    <span class="sql-column">prix</span> <input type="text" id="prix_type" class="code-trou" placeholder="Type...">
);
                </code></pre>
            </div>

            <!-- DROP TABLE IF EXISTS -->
            <div class="mb-4">
                <h3>4. Utilisation de DROP TABLE IF EXISTS :</h3>
                <p>Complétez la requête pour supprimer la table <strong>Produits</strong> uniquement si elle existe.</p>
                <pre><code>
<span class="sql-keyword">DROP TABLE IF EXISTS</span> <span class="sql-table">Produits</span>;
                </code></pre>
            </div>

            <!-- Questions sur les commandes SQL de gestion de tables -->
            <h3>Questions sur les commandes SQL de gestion de tables :</h3>

            <div class="mb-3">
                <label class="form-label">1. La commande <span class="sql-keyword">CREATE TABLE</span> est utilisée pour <input type="text" id="q1_trou" class="code-trou" placeholder="..."> une nouvelle table.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La commande <span class="sql-keyword">DROP TABLE</span> est utilisée pour <input type="text" id="q2_trou" class="code-trou" placeholder="..."> une table existante.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. Pourquoi est-il recommandé d’utiliser <span class="sql-keyword">IF EXISTS</span> ou <span class="sql-keyword">IF NOT EXISTS</span> lors de la création ou de la suppression de tables ?</label>
                <input type="text" id="q3_trou" class="form-control" placeholder="Entrez votre réponse ici...">
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

    <script src="js/verification_sql_table_commands.js"></script>
</body>
</html>
