<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Fonctions de Conversion (CAST, CONVERT)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Fonctions de Conversion (CAST, CONVERT)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="conversion-functions">
            <p>Complétez les requêtes SQL pour manipuler les types de données en utilisant des fonctions de conversion. Répondez ensuite aux questions sur l’utilisation des fonctions de conversion en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les Fonctions de Conversion
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Commandes</strong> contient les informations suivantes :
                    </p>
                    <ul>
                        <li><strong>commande_id</strong> : Identifiant de la commande</li>
                        <li><strong>client_id</strong> : Identifiant du client</li>
                        <li><strong>date_commande</strong> : Date de la commande</li>
                        <li><strong>montant</strong> : Montant de la commande (type STRING)</li>
                    </ul>
                </div>
            </div>

            <!-- CAST -->
            <div class="mb-4">
                <h3>1. Utilisation de CAST :</h3>
                <p>Complétez la requête pour convertir le montant de type STRING en type DECIMAL afin de pouvoir effectuer des calculs.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">commande_id</span>, <span class="sql-keyword">CAST</span>(<span class="sql-column">montant</span> <span class="sql-keyword">AS</span> <input type="text" id="cast_type" class="code-trou" placeholder="Type...">) <span class="sql-other">AS</span> <span class="sql-column">montant_decimal</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>;
                </code></pre>
            </div>

            <!-- CONVERT -->
            <div class="mb-4">
                <h3>2. Utilisation de CONVERT :</h3>
                <p>Complétez la requête pour convertir la date de commande en type STRING.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">commande_id</span>, <span class="sql-keyword">CONVERT</span>(<span class="sql-column">date_commande</span>, <input type="text" id="convert_type" class="code-trou" placeholder="Type...">) <span class="sql-other">AS</span> <span class="sql-column">date_string</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>;
                </code></pre>
            </div>

            <!-- CAST et CONVERT combinés -->
            <div class="mb-4">
                <h3>3. Utilisation combinée de CAST et CONVERT :</h3>
                <p>Complétez la requête pour afficher le montant des commandes converti en type DECIMAL et la date convertie en STRING.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">commande_id</span>, 
    <span class="sql-keyword">CAST</span>(<span class="sql-column">montant</span> <span class="sql-keyword">AS</span> <input type="text" id="combined_cast_type" class="code-trou" placeholder="Type...">) <span class="sql-other">AS</span> <span class="sql-column">montant_decimal</span>, 
    <span class="sql-keyword">CONVERT</span>(<span class="sql-column">date_commande</span>, <input type="text" id="combined_convert_type" class="code-trou" placeholder="Type...">) <span class="sql-other">AS</span> <span class="sql-column">date_string</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>;
                </code></pre>
            </div>

            <!-- Questions sur les Fonctions de Conversion SQL -->
            <h3>Questions sur les Fonctions de Conversion en SQL :</h3>

            <div class="mb-3">
                <label class="form-label">1. La fonction <span class="sql-keyword">CAST</span> est utilisée pour convertir un <input type="text" id="q1_trou" class="code-trou" placeholder="..."> en un autre.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La fonction <span class="sql-keyword">CONVERT</span> est similaire à CAST mais permet souvent de spécifier un <input type="text" id="q2_trou" class="code-trou" placeholder="..."> de sortie.</label>
            </div>

            <button class="btn btn-primary" onclick="verifierReponses()">Vérifier les réponses</button>
            <div id="resultat-exercice" class="mt-3"></div>

            <!-- Boutons d'indices -->
            <div class="mt-4">
                <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
                <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
                <div id="indice" class="mt-3"></div>
            </div>

            <!-- Bouton pour afficher la réponse -->
            <div class="mt-4">
                <button class="btn btn-warning" onclick="afficherReponse()">Afficher la réponse</button>
                <div id="reponse" class="mt-3"></div>
            </div>
        </section>
    </div>

    <script src="js/verification_sql_conversion_functions.js"></script>
</body>
</html>
