<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Requêtes de Base</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Requêtes de Base et Commandes SQL</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="requetes">
            <p>Complétez les requêtes SQL en remplissant les champs vides et répondez aux questions sur les commandes SQL.</p>

            <!-- Exercices Requêtes de Base -->
            <div class="mb-4">
                <h3>1. SELECT - Récupération de Données :</h3>
                <p>Complétez la requête pour sélectionner tous les clients :</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> * <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>

                <p>Complétez la requête pour sélectionner uniquement le nom et le prénom :</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <input type="text" id="select_columns" class="code-trou" placeholder="nom, prenom"> <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>2. WHERE - Filtrage de Données :</h3>
                <p>Complétez la requête pour sélectionner les clients vivant à Paris :</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> nom, prenom <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span> <span class="sql-keyword">WHERE</span> <span class="sql-column">ville</span> = <input type="text" id="where_value" class="code-trou" placeholder="'Paris'">;
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>3. LIMIT - Limitation des Résultats :</h3>
                <p>Complétez la requête pour obtenir les 5 premiers clients de Paris :</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> nom, prenom <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span> <span class="sql-keyword">WHERE</span> ville = 'Paris' <span class="sql-keyword">LIMIT</span> <input type="text" id="limit_value" class="code-trou" placeholder="5">;
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>4. DISTINCT - Élimination des Doublons :</h3>
                <p>Complétez la requête pour obtenir les villes uniques :</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">DISTINCT</span> ville <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>5. ORDER BY - Tri des Résultats :</h3>
                <p>Complétez la requête pour trier les clients par nom en ordre alphabétique :</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> nom, prenom <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span> <span class="sql-keyword">ORDER BY</span> <input type="text" id="order_column" class="code-trou" placeholder="nom"> <span class="sql-other">ASC</span>;
                </code></pre>
            </div>

            <!-- Questions sur les Commandes SQL -->
            <h3>Questions sur les Commandes SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Quelle commande SQL est utilisée pour ajouter de nouvelles lignes dans une table ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quelle commande supprime toutes les lignes d'une table sans supprimer sa structure ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quelle commande valide une transaction et rend les modifications permanentes ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q4" class="form-label">4. Quelle commande montre la structure d'une table, y compris les colonnes et types de données ?</label>
                <input type="text" id="q4" class="form-control" placeholder="Entrez votre réponse ici...">
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

    <script src="js/verification_sql_requetes.js"></script>
</body>
</html>
