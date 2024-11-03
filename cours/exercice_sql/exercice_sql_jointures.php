<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Jointures (INNER, LEFT, RIGHT, FULL)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Jointures (INNER, LEFT, RIGHT, FULL)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="join">
            <p>Complétez les requêtes SQL pour appliquer différents types de jointures et obtenir les données souhaitées. Répondez ensuite aux questions sur les jointures en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les jointures
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tables Clients et Commandes</h5>
                    <p class="card-text">
                        <strong>Clients</strong> contient les informations de chaque client.<br>
                        <strong>Commandes</strong> contient les informations des commandes passées par les clients.<br>
                        Les colonnes <strong>client_id</strong> dans chaque table permettent d'établir des jointures.
                    </p>
                </div>
            </div>

            <!-- INNER JOIN -->
            <div class="mb-4">
                <h3>1. INNER JOIN :</h3>
                <p>Complétez la requête pour afficher les clients ayant passé des commandes. Affichez le nom du client et la date de la commande.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <input type="text" id="inner_select_columns" class="code-trou" placeholder="Colonnes..."> 
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">INNER JOIN</span> <span class="sql-table">Commandes</span> 
<span class="sql-keyword">ON</span> <span class="sql-column">Clients.client_id</span> = <span class="sql-column">Commandes.client_id</span>;
                </code></pre>
            </div>

            <!-- LEFT JOIN -->
            <div class="mb-4">
                <h3>2. LEFT JOIN :</h3>
                <p>Complétez la requête pour afficher tous les clients, qu'ils aient passé des commandes ou non. Affichez le nom du client et la date de la commande (si disponible).</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <input type="text" id="left_select_columns" class="code-trou" placeholder="Colonnes..."> 
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">LEFT JOIN</span> <span class="sql-table">Commandes</span> 
<span class="sql-keyword">ON</span> <span class="sql-column">Clients.client_id</span> = <span class="sql-column">Commandes.client_id</span>;
                </code></pre>
            </div>

            <!-- RIGHT JOIN -->
            <div class="mb-4">
                <h3>3. RIGHT JOIN :</h3>
                <p>Complétez la requête pour afficher toutes les commandes et leurs clients associés, même si certains clients ne sont pas dans la liste des clients. Affichez le nom du client et la date de la commande (si disponible).</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <input type="text" id="right_select_columns" class="code-trou" placeholder="Colonnes..."> 
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">RIGHT JOIN</span> <span class="sql-table">Commandes</span> 
<span class="sql-keyword">ON</span> <span class="sql-column">Clients.client_id</span> = <span class="sql-column">Commandes.client_id</span>;
                </code></pre>
            </div>

            <!-- FULL JOIN -->
            <div class="mb-4">
                <h3>4. FULL JOIN :</h3>
                <p>Complétez la requête pour afficher tous les clients et toutes les commandes, même s'il n'y a pas de correspondance. Affichez le nom du client et la date de la commande (si disponible).</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <input type="text" id="full_select_columns" class="code-trou" placeholder="Colonnes..."> 
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">FULL OUTER JOIN</span> <span class="sql-table">Commandes</span> 
<span class="sql-keyword">ON</span> <span class="sql-column">Clients.client_id</span> = <span class="sql-column">Commandes.client_id</span>;
                </code></pre>
                <p class="text-muted">Note : Certaines bases de données ne prennent pas en charge FULL OUTER JOIN. Dans ce cas, une UNION de LEFT JOIN et RIGHT JOIN peut être utilisée.</p>
            </div>

            <!-- Questions sur les Jointures SQL -->
            <h3>Questions sur les Jointures en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Quelle est la différence entre INNER JOIN et LEFT JOIN ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quand utiliser une jointure FULL OUTER JOIN ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Comment RIGHT JOIN diffère-t-il de LEFT JOIN ?</label>
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

    <script src="js/verification_sql_join.js"></script>
</body>
</html>
