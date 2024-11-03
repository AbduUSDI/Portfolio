<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Création et Suppression de Bases de Données</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Création et Suppression de Bases de Données</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="database-commands">
            <p>Complétez les requêtes SQL pour créer et supprimer des bases de données. Répondez ensuite aux questions sur l'utilisation des commandes SQL pour gérer les bases de données.</p>

            <!-- CREATE DATABASE -->
            <div class="mb-4">
                <h3>1. Utilisation de CREATE DATABASE :</h3>
                <p>Complétez la requête pour créer une base de données nommée <strong>GestionClients</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE DATABASE</span> <span class="sql-db">GestionClients</span>;
                </code></pre>
            </div>

            <!-- DROP DATABASE -->
            <div class="mb-4">
                <h3>2. Utilisation de DROP DATABASE :</h3>
                <p>Complétez la requête pour supprimer la base de données nommée <strong>GestionClients</strong>.</p>
                <pre><code>
<span class="sql-keyword">DROP DATABASE</span> <span class="sql-db">GestionClients</span>;
                </code></pre>
            </div>

            <!-- CREATE DATABASE IF NOT EXISTS -->
            <div class="mb-4">
                <h3>3. Utilisation de CREATE DATABASE IF NOT EXISTS :</h3>
                <p>Complétez la requête pour créer la base de données <strong>Inventaire</strong> uniquement si elle n'existe pas déjà.</p>
                <pre><code>
<span class="sql-keyword">CREATE DATABASE IF NOT EXISTS</span> <span class="sql-db">Inventaire</span>;
                </code></pre>
            </div>

            <!-- DROP DATABASE IF EXISTS -->
            <div class="mb-4">
                <h3>4. Utilisation de DROP DATABASE IF EXISTS :</h3>
                <p>Complétez la requête pour supprimer la base de données <strong>Inventaire</strong> uniquement si elle existe.</p>
                <pre><code>
<span class="sql-keyword">DROP DATABASE IF EXISTS</span> <span class="sql-db">Inventaire</span>;
                </code></pre>
            </div>

            <!-- Questions sur les commandes SQL de gestion de bases de données -->
            <h3>Questions sur les commandes SQL de gestion de bases de données :</h3>

            <div class="mb-3">
                <label class="form-label">1. La commande <span class="sql-keyword">CREATE DATABASE</span> est utilisée pour <input type="text" id="q1_trou" class="code-trou" placeholder="..."> une nouvelle base de données.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La commande <span class="sql-keyword">DROP DATABASE</span> est utilisée pour <input type="text" id="q2_trou" class="code-trou" placeholder="..."> une base de données existante.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. Pourquoi est-il recommandé d’utiliser <span class="sql-keyword">IF EXISTS</span> ou <span class="sql-keyword">IF NOT EXISTS</span> lors de la création ou de la suppression de bases de données ?</label>
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

    <script src="js/verification_sql_database_commands.js"></script>
</body>
</html>
