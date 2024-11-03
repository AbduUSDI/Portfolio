<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Fonctions de Date (NOW, DATEADD, DATEDIFF)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Fonctions de Date (NOW, DATEADD, DATEDIFF)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="date-functions">
            <p>Complétez les requêtes SQL pour manipuler les dates. Répondez ensuite aux questions sur l’utilisation des fonctions de date en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les Fonctions de Date
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Commandes</strong> contient les informations suivantes :
                    </p>
                    <ul>
                        <li><strong>commande_id</strong> : Identifiant de la commande</li>
                        <li><strong>client_id</strong> : Identifiant du client</li>
                        <li><strong>date_commande</strong> : Date de la commande</li>
                        <li><strong>montant</strong> : Montant de la commande</li>
                    </ul>
                </div>
            </div>

            <!-- NOW -->
            <div class="mb-4">
                <h3>1. Utilisation de NOW :</h3>
                <p>Complétez la requête pour afficher toutes les commandes passées aujourd'hui.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> * 
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span> 
<span class="sql-keyword">WHERE</span> <span class="sql-column">date_commande</span> = <span class="sql-keyword">DATE</span>(<span class="sql-keyword">NOW</span>());
                </code></pre>
            </div>

            <!-- DATEADD -->
            <div class="mb-4">
                <h3>2. Utilisation de DATEADD :</h3>
                <p>Complétez la requête pour afficher toutes les commandes passées au cours des 7 derniers jours.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> * 
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">date_commande</span> >= <span class="sql-keyword">DATEADD</span>(<span class="sql-other">DAY</span>, <input type="text" id="dateadd_days" class="code-trou" placeholder="Valeur...">, <span class="sql-keyword">NOW</span>());
                </code></pre>
            </div>

            <!-- DATEDIFF -->
            <div class="mb-4">
                <h3>3. Utilisation de DATEDIFF :</h3>
                <p>Complétez la requête pour afficher l’identifiant et le montant des commandes passées il y a plus de 30 jours.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">commande_id</span>, <span class="sql-column">montant</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">WHERE</span> <span class="sql-keyword">DATEDIFF</span>(<span class="sql-keyword">NOW</span>(), <span class="sql-column">date_commande</span>) > <input type="text" id="datediff_days" class="code-trou" placeholder="Valeur...">;
                </code></pre>
            </div>

            <!-- Questions sur les Fonctions de Date SQL -->
            <h3>Questions sur les Fonctions de Date en SQL :</h3>

            <div class="mb-3">
                <label class="form-label">1. La fonction <span class="sql-keyword">NOW</span> retourne la <input type="text" id="q1_trou" class="code-trou" placeholder="..."> actuelle.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La fonction <span class="sql-keyword">DATEADD</span> est utilisée pour ajouter ou soustraire des <input type="text" id="q2_trou" class="code-trou" placeholder="..."> à une date.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. La fonction <span class="sql-keyword">DATEDIFF</span> retourne la différence en jours entre deux <input type="text" id="q3_trou" class="code-trou" placeholder="...">.</label>
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

    <script src="js/verification_sql_date_functions.js"></script>
</body>
</html>
