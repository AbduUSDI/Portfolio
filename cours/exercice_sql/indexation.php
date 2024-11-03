<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Indexation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Indexation</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="index-commands">
            <p>Complétez les requêtes SQL pour créer et supprimer des index. Répondez ensuite aux questions sur l'utilisation de l'indexation pour optimiser les performances.</p>

            <!-- CREATE INDEX -->
            <div class="mb-4">
                <h3>1. Utilisation de CREATE INDEX :</h3>
                <p>Complétez la requête pour créer un index nommé <strong>idx_nom</strong> sur la colonne <strong>nom</strong> de la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE INDEX</span> <span class="sql-column">idx_nom</span> <span class="sql-keyword">ON</span> <span class="sql-table">Clients</span>(<input type="text" id="index_column" class="code-trou" placeholder="Colonne...">);
                </code></pre>
            </div>

            <!-- DROP INDEX -->
            <div class="mb-4">
                <h3>2. Utilisation de DROP INDEX :</h3>
                <p>Complétez la requête pour supprimer l'index nommé <strong>idx_nom</strong> de la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">DROP INDEX</span> <span class="sql-column">idx_nom</span> <span class="sql-keyword">ON</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <!-- INDEX UNIQUE -->
            <div class="mb-4">
                <h3>3. Utilisation de l'index UNIQUE :</h3>
                <p>Complétez la requête pour créer un index unique sur la colonne <strong>email</strong> de la table <strong>Clients</strong> pour s'assurer que chaque adresse email est unique.</p>
                <pre><code>
<span class="sql-keyword">CREATE UNIQUE INDEX</span> <span class="sql-column">idx_unique_email</span> <span class="sql-keyword">ON</span> <span class="sql-table">Clients</span>(<input type="text" id="unique_index_column" class="code-trou" placeholder="Colonne...">);
                </code></pre>
            </div>

            <!-- INDEX MULTICOLONNE -->
            <div class="mb-4">
                <h3>4. Utilisation de l'index multicolonne :</h3>
                <p>Complétez la requête pour créer un index sur les colonnes <strong>nom</strong> et <strong>prenom</strong> de la table <strong>Clients</strong> pour accélérer les recherches par nom et prénom.</p>
                <pre><code>
<span class="sql-keyword">CREATE INDEX</span> <span class="sql-column">idx_nom_prenom</span> <span class="sql-keyword">ON</span> <span class="sql-table">Clients</span>(<input type="text" id="multi_index_column1" class="code-trou" placeholder="Colonne...">, <input type="text" id="multi_index_column2" class="code-trou" placeholder="Colonne...">);
                </code></pre>
            </div>

            <!-- Questions sur les commandes SQL d'indexation -->
            <h3>Questions sur les commandes SQL d'indexation :</h3>

            <div class="mb-3">
                <label class="form-label">1. La commande <span class="sql-keyword">CREATE INDEX</span> est utilisée pour <input type="text" id="q1_trou" class="code-trou" placeholder="..."> un index sur une ou plusieurs colonnes.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La commande <span class="sql-keyword">DROP INDEX</span> est utilisée pour <input type="text" id="q2_trou" class="code-trou" placeholder="..."> un index existant.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. Quel est l’avantage d’utiliser un <span class="sql-keyword">index unique</span> sur une colonne ?</label>
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

    <script src="js/verification_sql_index_commands.js"></script>
</body>
</html>
