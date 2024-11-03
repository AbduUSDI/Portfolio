<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Clause HAVING</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Clause HAVING</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="sql-having">
            <p>Complétez les requêtes SQL avec la clause HAVING pour filtrer les groupes de données en fonction d’une condition. Remplissez également les textes à trous pour vérifier votre compréhension.</p>

            <!-- Utilisation de HAVING avec GROUP BY -->
            <div class="mb-4">
                <h3>1. Utilisation de HAVING avec GROUP BY</h3>
                <p>Complétez la requête pour afficher les catégories de produits ayant un prix moyen supérieur à 50.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">categorie</span>, <span class="sql-keyword">AVG</span>(<span class="sql-column">prix</span>) <span class="sql-keyword">AS</span> <span class="sql-object">prix_moyen</span>
<span class="sql-keyword">FROM</span> <span class="sql-object">Produits</span>
<span class="sql-keyword">GROUP BY</span> <span class="sql-column">categorie</span>
<span class="sql-keyword">HAVING</span> <span class="sql-object">prix_moyen</span> <input type="text" id="having_condition" class="code-trou" placeholder="Condition..."> 50;
                </code></pre>
            </div>

            <!-- HAVING avec COUNT -->
            <div class="mb-4">
                <h3>2. Utilisation de HAVING avec COUNT</h3>
                <p>Complétez la requête pour afficher les clients ayant passé plus de 5 commandes.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-keyword">COUNT</span>(<span class="sql-column">commande_id</span>) <span class="sql-keyword">AS</span> <span class="sql-object">nombre_commandes</span>
<span class="sql-keyword">FROM</span> <span class="sql-object">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <span class="sql-column">client_id</span>
<span class="sql-keyword">HAVING</span> <span class="sql-object">nombre_commandes</span> <input type="text" id="having_count_condition" class="code-trou" placeholder="Condition..."> 5;
                </code></pre>
            </div>

            <!-- Texte à trous sur la clause HAVING -->
            <h3>Texte à trous sur la clause HAVING :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                La clause <input type="text" id="having_clause" class="code-trou" placeholder="..."> est utilisée pour <input type="text" id="filter_groups" class="code-trou" placeholder="..."> les groupes de données après avoir appliqué la clause <input type="text" id="group_by" class="code-trou" placeholder="...">. Contrairement à la clause <input type="text" id="where_clause" class="code-trou" placeholder="...">, qui agit sur les lignes individuelles, la clause HAVING permet de filtrer les <input type="text" id="aggregated_results" class="code-trou" placeholder="..."> après l'agrégation.
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

    <script src="js/verification_sql_having.js"></script>
</body>
</html>
