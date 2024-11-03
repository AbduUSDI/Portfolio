<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Exercice SQL : GROUP BY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : GROUP BY</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="groupby">
            <p>Complétez les requêtes SQL pour grouper les données dans la base de données. Répondez ensuite aux questions sur l’utilisation de GROUP BY en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour GROUP BY
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Commandes</strong> contient des informations sur les commandes passées par les clients.
                        Elle a les colonnes suivantes :
                    </p>
                    <ul>
                        <li><strong>client_id</strong> : Identifiant du client</li>
                        <li><strong>produit</strong> : Nom du produit commandé</li>
                        <li><strong>quantite</strong> : Quantité de produit commandé</li>
                        <li><strong>montant</strong> : Montant total de la commande</li>
                    </ul>
                </div>
            </div>

            <!-- GROUP BY avec COUNT -->
            <div class="mb-4">
                <h3>1. GROUP BY avec COUNT :</h3>
                <p>Complétez la requête pour obtenir le nombre total de commandes passées par chaque client.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-keyword">COUNT</span>(<span class="sql-column">commande_id</span>) <span class="sql-other">AS</span> <span class="sql-column">nombre_commandes</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <input type="text" id="groupby_count" class="code-trou" placeholder="Colonne...">;
                </code></pre>
            </div>

            <!-- GROUP BY avec SUM -->
            <div class="mb-4">
                <h3>2. GROUP BY avec SUM :</h3>
                <p>Complétez la requête pour calculer le montant total des commandes pour chaque client.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-keyword">SUM</span>(<span class="sql-column">montant</span>) <span class="sql-other">AS</span> <span class="sql-column">total_montant</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <input type="text" id="groupby_sum" class="code-trou" placeholder="Colonne...">;
                </code></pre>
            </div>

            <!-- GROUP BY avec AVG -->
            <div class="mb-4">
                <h3>3. GROUP BY avec AVG :</h3>
                <p>Complétez la requête pour calculer la quantité moyenne commandée par produit.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">produit</span>, <span class="sql-keyword">AVG</span>(<span class="sql-column">quantite</span>) <span class="sql-other">AS</span> <span class="sql-column">quantite_moyenne</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <input type="text" id="groupby_avg" class="code-trou" placeholder="Colonne...">;
                </code></pre>
            </div>

            <!-- GROUP BY avec HAVING -->
            <div class="mb-4">
                <h3>4. GROUP BY avec HAVING :</h3>
                <p>Complétez la requête pour afficher les clients ayant un montant total de commandes supérieur à 500.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-keyword">SUM</span>(<span class="sql-column">montant</span>) <span class="sql-other">AS</span> <span class="sql-column">total_montant</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <span class="sql-column">client_id</span>
<span class="sql-keyword">HAVING</span> <span class="sql-column">total_montant</span> <input type="text" id="groupby_having" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Questions sur GROUP BY SQL -->
            <h3>Questions sur GROUP BY en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi utiliser GROUP BY dans une requête SQL ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quelle est la différence entre GROUP BY et HAVING ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quand utiliser SUM et AVG avec GROUP BY ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
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

    <script src="js/verification_sql_groupby.js"></script>
</body>
</html>
