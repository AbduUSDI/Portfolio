<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Transactions (BEGIN, COMMIT, ROLLBACK)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
    <style>
        .sql-keyword { color: #569cd6; font-weight: bold; }
        .sql-object, .sql-column { color: #9cdcfe; font-weight: bold; }
        .code-trou { color: #ffcb6b; background-color: #2d2d2d; border: none; border-bottom: 2px solid #ffcb6b; padding: 2px 5px; min-width: 50px; max-width: 100%; width: auto; display: inline-block; text-align: center; font-size: 0.9em; }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Transactions (BEGIN, COMMIT, ROLLBACK)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="sql-transactions">
            <p>Complétez les requêtes SQL pour gérer les transactions en utilisant les commandes <strong>BEGIN</strong>, <strong>COMMIT</strong>, et <strong>ROLLBACK</strong>. Remplissez également les textes à trous pour comprendre le rôle de chaque commande dans une transaction.</p>

            <!-- Utilisation de BEGIN et COMMIT -->
            <div class="mb-4">
                <h3>1. Utilisation de BEGIN et COMMIT</h3>
                <p>Complétez la série de commandes pour insérer un produit et valider la transaction.</p>
                <pre><code>
<span class="sql-keyword">BEGIN</span>;
<span class="sql-keyword">INSERT INTO</span> <span class="sql-object">Produits</span> (<span class="sql-column">nom</span>, <span class="sql-column">prix</span>)
<span class="sql-keyword">VALUES</span> ('<input type="text" id="product_name" class="code-trou" placeholder="Nom du produit...">', <input type="text" id="product_price" class="code-trou" placeholder="Prix...">);
<span class="sql-keyword">COMMIT</span>;
                </code></pre>
            </div>

            <!-- Utilisation de ROLLBACK -->
            <div class="mb-4">
                <h3>2. Utilisation de ROLLBACK</h3>
                <p>Complétez la série de commandes pour insérer un client, puis annuler la transaction.</p>
                <pre><code>
<span class="sql-keyword">BEGIN</span>;
<span class="sql-keyword">INSERT INTO</span> <span class="sql-object">Clients</span> (<span class="sql-column">nom</span>, <span class="sql-column">email</span>)
<span class="sql-keyword">VALUES</span> ('<input type="text" id="client_name" class="code-trou" placeholder="Nom du client...">', '<input type="text" id="client_email" class="code-trou" placeholder="Email...">');
<span class="sql-keyword">ROLLBACK</span>;
                </code></pre>
            </div>

            <!-- Texte à trous sur les Transactions SQL -->
            <h3>Texte à trous sur les Transactions SQL :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                Une transaction en SQL est une série d'opérations exécutées comme une <input type="text" id="atomic_unit" class="code-trou" placeholder="...">. La commande <input type="text" id="begin_command" class="code-trou" placeholder="..."> démarre une transaction, tandis que la commande <input type="text" id="commit_command" class="code-trou" placeholder="..."> valide toutes les modifications effectuées. En cas d'erreur, la commande <input type="text" id="rollback_command" class="code-trou" placeholder="..."> annule toutes les opérations de la transaction pour revenir à l'état initial, assurant ainsi l'intégrité des données.
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

    <script src="js/verification_sql_transactions.js"></script>
</body>
</html>
