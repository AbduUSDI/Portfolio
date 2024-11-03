<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : ORDER BY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : ORDER BY</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="orderby">
            <p>Complétez les requêtes SQL pour trier les données de la base de données. Répondez ensuite aux questions sur l'utilisation de ORDER BY en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour ORDER BY
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Clients</strong> contient les informations sur chaque client. Elle a les colonnes suivantes :
                    </p>
                    <ul>
                        <li><strong>client_id</strong> : Identifiant du client</li>
                        <li><strong>nom</strong> : Nom du client</li>
                        <li><strong>date_inscription</strong> : Date d'inscription du client</li>
                        <li><strong>montant_total</strong> : Montant total des commandes passées par le client</li>
                    </ul>
                </div>
            </div>

            <!-- ORDER BY Ascendant -->
            <div class="mb-4">
                <h3>1. ORDER BY Ascendant :</h3>
                <p>Complétez la requête pour afficher tous les clients triés par leur date d'inscription en ordre croissant.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">date_inscription</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">ORDER BY</span> <input type="text" id="orderby_asc_column" class="code-trou" placeholder="Colonne..."> <input type="text" id="orderby_asc_order" class="code-trou" placeholder="ASC ou DESC...">;
                </code></pre>
            </div>

            <!-- ORDER BY Descendant -->
            <div class="mb-4">
                <h3>2. ORDER BY Descendant :</h3>
                <p>Complétez la requête pour afficher tous les clients triés par montant total en ordre décroissant.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">montant_total</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">ORDER BY</span> <input type="text" id="orderby_desc_column" class="code-trou" placeholder="Colonne..."> <input type="text" id="orderby_desc_order" class="code-trou" placeholder="ASC ou DESC...">;
                </code></pre>
            </div>

            <!-- ORDER BY avec plusieurs colonnes -->
            <div class="mb-4">
                <h3>3. ORDER BY avec plusieurs colonnes :</h3>
                <p>Complétez la requête pour afficher tous les clients triés d'abord par montant total en ordre décroissant, puis par nom en ordre croissant.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">montant_total</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">ORDER BY</span> <input type="text" id="orderby_multi_column1" class="code-trou" placeholder="Colonne..."> <input type="text" id="orderby_multi_order1" class="code-trou" placeholder="ASC ou DESC...">, 
<input type="text" id="orderby_multi_column2" class="code-trou" placeholder="Colonne..."> <input type="text" id="orderby_multi_order2" class="code-trou" placeholder="ASC ou DESC...">;
                </code></pre>
            </div>

            <!-- Questions sur ORDER BY SQL -->
            <h3>Questions sur ORDER BY en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi utiliser ORDER BY dans une requête SQL ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quelle est la différence entre ASC et DESC dans ORDER BY ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Pourquoi trier par plusieurs colonnes peut-il être utile ?</label>
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

    <script src="js/verification_sql_orderby.js"></script>
</body>
</html>
