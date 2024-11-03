<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Fonctions d'Agrégats (COUNT, SUM, AVG)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Fonctions d'Agrégats (COUNT, SUM, AVG)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="aggregates">
            <p>Complétez les requêtes SQL pour utiliser les fonctions d'agrégats et obtenir les données souhaitées. Répondez ensuite aux questions sur l'utilisation des fonctions d'agrégats en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les Fonctions d'Agrégats
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Commandes</strong> contient les informations sur les commandes passées par les clients. Voici les colonnes de la table :
                    </p>
                    <ul>
                        <li><strong>commande_id</strong> : Identifiant unique de la commande</li>
                        <li><strong>client_id</strong> : Identifiant du client</li>
                        <li><strong>montant</strong> : Montant de la commande</li>
                        <li><strong>quantite</strong> : Quantité de produits commandés</li>
                    </ul>
                </div>
            </div>

            <!-- Utilisation de COUNT -->
            <div class="mb-4">
                <h3>1. Utilisation de COUNT :</h3>
                <p>Complétez la requête pour afficher le nombre total de commandes passées.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">COUNT</span>(<input type="text" id="count_column" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">nombre_commandes</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>;
                </code></pre>
            </div>

            <!-- Utilisation de SUM -->
            <div class="mb-4">
                <h3>2. Utilisation de SUM :</h3>
                <p>Complétez la requête pour afficher le montant total de toutes les commandes.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">SUM</span>(<input type="text" id="sum_column" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">montant_total</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>;
                </code></pre>
            </div>

            <!-- Utilisation de AVG -->
            <div class="mb-4">
                <h3>3. Utilisation de AVG :</h3>
                <p>Complétez la requête pour afficher le montant moyen des commandes.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">AVG</span>(<input type="text" id="avg_column" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">montant_moyen</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>;
                </code></pre>
            </div>

            <!-- Utilisation de COUNT avec GROUP BY -->
            <div class="mb-4">
                <h3>4. Utilisation de COUNT avec GROUP BY :</h3>
                <p>Complétez la requête pour afficher le nombre de commandes passées par chaque client.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-keyword">COUNT</span>(<input type="text" id="count_groupby_column" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">nombre_commandes</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <input type="text" id="groupby_column" class="code-trou" placeholder="Colonne...">;
                </code></pre>
            </div>

            <!-- Questions sur les Fonctions d'Agrégats SQL -->
            <h3>Questions sur les Fonctions d'Agrégats en SQL :</h3>

            <div class="mb-3">
                <label class="form-label">1. La fonction <span class="sql-keyword">COUNT</span> est utilisée pour <input type="text" id="q1_trou1" class="code-trou" placeholder="..."> le nombre d'<input type="text" id="q1_trou2" class="code-trou" placeholder="..."> dans une table.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La fonction <span class="sql-keyword">SUM</span> additionne toutes les valeurs d'une colonne, tandis que la fonction <span class="sql-keyword">AVG</span> calcule <input type="text" id="q2_trou1" class="code-trou" placeholder="..."> de toutes les valeurs d'une colonne.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. La clause <span class="sql-keyword">GROUP BY</span> est utilisée pour <input type="text" id="q3_trou1" class="code-trou" placeholder="..."> les résultats par une colonne avant d’appliquer une fonction d’agrégat.</label>
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

    <script src="js/verification_sql_aggregates.js"></script>
</body>
</html>
