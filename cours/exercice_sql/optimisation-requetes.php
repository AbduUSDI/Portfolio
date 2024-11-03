<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Optimisation des Requêtes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Optimisation des Requêtes</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="optimization-commands">
            <p>Complétez les champs pour chaque exemple d'optimisation et remplissez les textes à trous pour vérifier votre compréhension.</p>

            <!-- Indexation -->
            <div class="mb-4">
                <h3>1. Indexation</h3>
                <p>Complétez la requête pour créer un index sur la colonne <strong>nom</strong> de la table <strong>Employes</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE INDEX</span> <input type="text" id="index_name" class="code-trou" placeholder="Nom de l'index..."> <span class="sql-keyword">ON</span> <span class="sql-object">Employes</span>(<span class="sql-column">nom</span>);
                </code></pre>
            </div>

            <!-- Analyser les Requêtes -->
            <div class="mb-4">
                <h3>2. Analyser les Requêtes</h3>
                <p>Complétez la commande pour analyser une requête SQL à l'aide de <strong>EXPLAIN</strong>.</p>
                <pre><code>
<span class="sql-keyword">EXPLAIN</span> <span class="sql-keyword">SELECT *</span> <span class="sql-keyword">FROM</span> <span class="sql-object">Employes</span> <span class="sql-keyword">WHERE</span> <span class="sql-column">nom</span> = '<input type="text" id="nom_value" class="code-trou" placeholder="Nom...">';
                </code></pre>
            </div>

            <!-- Limiter le Résultat -->
            <div class="mb-4">
                <h3>3. Limiter le Résultat</h3>
                <p>Complétez la requête pour limiter le résultat à 10 employés.</p>
                <pre><code>
<span class="sql-keyword">SELECT *</span> <span class="sql-keyword">FROM</span> <span class="sql-object">Employes</span> <span class="sql-keyword">LIMIT</span> <input type="text" id="limit_value" class="code-trou" placeholder="Nombre de résultats...">;
                </code></pre>
            </div>

            <!-- Utiliser les Requêtes Préparées -->
            <div class="mb-4">
                <h3>4. Utiliser les Requêtes Préparées</h3>
                <p>Complétez la commande pour préparer et exécuter une requête d'insertion d'un employé.</p>
                <pre><code>
<span class="sql-keyword">PREPARE</span> <span class="sql-object">stmt</span> <span class="sql-keyword">FROM</span> 'INSERT INTO <span class="sql-object">Employes</span> (<span class="sql-column">nom</span>, <span class="sql-column">prenom</span>) <span class="sql-keyword">VALUES</span> (?, ?)';
<span class="sql-keyword">SET</span> <span class="sql-object">@nom</span> = '<input type="text" id="nom_value_prepared" class="code-trou" placeholder="Nom...">', <span class="sql-object">@prenom</span> = '<input type="text" id="prenom_value_prepared" class="code-trou" placeholder="Prénom...">';
<span class="sql-keyword">EXECUTE</span> <span class="sql-object">stmt</span> <span class="sql-keyword">USING</span> <span class="sql-object">@nom</span>, <span class="sql-object">@prenom</span>;
                </code></pre>
            </div>

            <!-- Requêtes N+1 -->
            <div class="mb-4">
                <h3>5. Éviter les Requêtes N+1</h3>
                <p>Complétez la requête optimisée avec jointure pour éviter le problème des requêtes N+1.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-object">c.nom</span>, <span class="sql-keyword">COUNT</span>(<span class="sql-object">co.id</span>) <span class="sql-keyword">AS total_commandes</span>
<span class="sql-keyword">FROM</span> <span class="sql-object">Clients</span> <span class="sql-object">c</span>
<span class="sql-keyword">LEFT JOIN</span> <span class="sql-object">Commandes</span> <span class="sql-object">co</span> <span class="sql-keyword">ON</span> <span class="sql-object">c.id</span> = <span class="sql-object">co.client_id</span>
<span class="sql-keyword">GROUP BY</span> <span class="sql-object">c.nom</span>;
                </code></pre>
            </div>

            <!-- Texte à trous sur l'optimisation des requêtes SQL -->
            <h3>Texte à trous sur l'optimisation des requêtes SQL :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                L'<input type="text" id="indexing" class="code-trou" placeholder="..."> est une technique qui permet d'<input type="text" id="speed_up_search" class="code-trou" placeholder="..."> les recherches dans une table en créant des <input type="text" id="index_structure" class="code-trou" placeholder="...">. 
                L'<input type="text" id="query_analysis" class="code-trou" placeholder="..."> à l'aide de <input type="text" id="explain_usage" class="code-trou" placeholder="..."> permet de comprendre le <input type="text" id="execution_plan" class="code-trou" placeholder="..."> de la requête et de repérer les goulots d'étranglement.
            </p>

            <p>
                En utilisant des <input type="text" id="limit_clause" class="code-trou" placeholder="..."> pour limiter les résultats, on peut <input type="text" id="reduce_data_load" class="code-trou" placeholder="..."> la charge de données traitées. Les <input type="text" id="prepared_statements" class="code-trou" placeholder="..."> permettent d'exécuter plusieurs fois la même requête avec des <input type="text" id="different_parameters" class="code-trou" placeholder="...">, ce qui améliore les performances et la sécurité.
            </p>

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

    <script src="js/verification_sql_optimization_commands.js"></script>
</body>
</html>
