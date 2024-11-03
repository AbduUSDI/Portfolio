<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Sous-requêtes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Sous-requêtes</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="subqueries">
            <p>Complétez les requêtes SQL pour utiliser des sous-requêtes et obtenir les données souhaitées. Répondez ensuite aux questions sur l'utilisation des sous-requêtes en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les sous-requêtes
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Clients</strong> contient les informations sur chaque client, et la table <strong>Commandes</strong> contient les informations sur les commandes. Voici les colonnes de chaque table :
                    </p>
                    <ul>
                        <li><strong>Clients</strong> : client_id, nom, date_inscription</li>
                        <li><strong>Commandes</strong> : commande_id, client_id, montant, date_commande</li>
                    </ul>
                </div>
            </div>

            <!-- Sous-requête dans WHERE -->
            <div class="mb-4">
                <h3>1. Sous-requête dans WHERE :</h3>
                <p>Complétez la requête pour afficher les clients qui ont passé une commande supérieure à 500.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">nom</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">client_id</span> <span class="sql-keyword">IN</span> 
    (<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span> <span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span> 
    <span class="sql-keyword">WHERE</span> <span class="sql-column">montant</span> <input type="text" id="subquery_where" class="code-trou" placeholder="Condition...">);
                </code></pre>
            </div>

            <!-- Sous-requête avec HAVING -->
            <div class="mb-4">
                <h3>2. Sous-requête avec HAVING :</h3>
                <p>Complétez la requête pour afficher les clients ayant un montant total de commandes supérieur à 1000.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-keyword">SUM</span>(<span class="sql-column">montant</span>) <span class="sql-other">AS</span> <span class="sql-column">total_montant</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span>
<span class="sql-keyword">GROUP BY</span> <span class="sql-column">client_id</span>
<span class="sql-keyword">HAVING</span> <span class="sql-column">total_montant</span> <input type="text" id="subquery_having" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Sous-requête dans SELECT -->
            <div class="mb-4">
                <h3>3. Sous-requête dans SELECT :</h3>
                <p>Complétez la requête pour afficher le nom des clients ainsi que le montant total de leurs commandes.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">nom</span>, 
    (<span class="sql-keyword">SELECT</span> <span class="sql-keyword">SUM</span>(<span class="sql-column">montant</span>) 
     <span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span> 
     <span class="sql-keyword">WHERE</span> <span class="sql-column">Commandes.client_id</span> = <span class="sql-column">Clients.client_id</span>) 
     <span class="sql-other">AS</span> <span class="sql-column">total_montant</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <!-- Sous-requête corrélée -->
            <div class="mb-4">
                <h3>4. Sous-requête corrélée :</h3>
                <p>Complétez la requête pour afficher les clients qui ont passé des commandes après leur date d'inscription.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">nom</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-keyword">EXISTS</span> 
    (<span class="sql-keyword">SELECT</span> * <span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span> 
    <span class="sql-keyword">WHERE</span> <span class="sql-column">Commandes.client_id</span> = <span class="sql-column">Clients.client_id</span>
    <span class="sql-keyword">AND</span> <span class="sql-column">date_commande</span> <input type="text" id="subquery_correlated" class="code-trou" placeholder="Condition..."> <span class="sql-column">date_inscription</span>);
                </code></pre>
            </div>

            <!-- Questions sur les Sous-requêtes SQL -->
            <h3>Questions sur les Sous-requêtes en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi utiliser une sous-requête dans une clause WHERE ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quelle est la différence entre une sous-requête corrélée et une sous-requête non corrélée ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Pourquoi utiliser HAVING avec une sous-requête ?</label>
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

    <script src="js/verification_sql_subqueries.js"></script>
</body>
</html>
