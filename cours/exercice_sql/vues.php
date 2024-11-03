<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Vues</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Vues</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="sql-views">
            <p>Complétez les requêtes SQL pour créer, utiliser et supprimer des vues, et remplissez les textes à trous pour approfondir votre compréhension des vues en SQL.</p>

            <!-- Créer une Vue -->
            <div class="mb-4">
                <h3>1. CREATE VIEW - Créer une Vue</h3>
                <p>Complétez la requête pour créer une vue affichant les employés ayant un salaire supérieur à 40 000.</p>
                <pre><code>
<span class="sql-keyword">CREATE VIEW</span> <span class="sql-object">Vue_Employes_Salaires</span> <span class="sql-keyword">AS</span>
<span class="sql-keyword">SELECT</span> <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">salaire</span>
<span class="sql-keyword">FROM</span> <span class="sql-object">Employes</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">salaire</span> <input type="text" id="salaire_condition" class="code-trou" placeholder="Condition..."> 40000;
                </code></pre>
            </div>

            <!-- Utiliser une Vue dans une Requête -->
            <div class="mb-4">
                <h3>2. Utiliser une Vue dans une Requête</h3>
                <p>Complétez la requête pour obtenir les informations de la vue <strong>Vue_Employes_Salaires</strong> où les salaires dépassent 50 000.</p>
                <pre><code>
<span class="sql-keyword">SELECT *</span> <span class="sql-keyword">FROM</span> <span class="sql-object">Vue_Employes_Salaires</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">salaire</span> <input type="text" id="salary_filter" class="code-trou" placeholder="Condition..."> 50000;
                </code></pre>
            </div>

            <!-- Supprimer une Vue -->
            <div class="mb-4">
                <h3>3. DROP VIEW - Supprimer une Vue</h3>
                <p>Complétez la commande pour supprimer la vue <strong>Vue_Employes_Salaires</strong>.</p>
                <pre><code>
<span class="sql-keyword">DROP VIEW</span> <span class="sql-object">Vue_Employes_Salaires</span>;
                </code></pre>
            </div>

            <!-- Texte à trous sur les Vues en SQL -->
            <h3>Texte à trous sur les Vues en SQL :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                Une vue en SQL est une <input type="text" id="virtual_table" class="code-trou" placeholder="..."> qui affiche le résultat d'une <input type="text" id="query_result" class="code-trou" placeholder="...">. Les vues sont particulièrement utiles pour <input type="text" id="simplify_queries" class="code-trou" placeholder="..."> les requêtes complexes, et elles permettent de protéger les <input type="text" id="sensitive_data" class="code-trou" placeholder="..."> en masquant certaines colonnes.
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

    <script src="js/verification_sql_views.js"></script>
</body>
</html>
