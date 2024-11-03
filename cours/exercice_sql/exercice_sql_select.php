<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Sélections (SELECT)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Sélections (SELECT)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="select">
            <p>Complétez les requêtes SQL pour sélectionner des données dans la base de données. Répondez ensuite aux questions sur les opérations de sélection en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les sélections
                </div>
                <div class="card-body">
                    <h5 class="card-title">Informations de M. Dupont</h5>
                    <p class="card-text">
                        <strong>Nom :</strong> Dupont<br>
                        <strong>Prénom :</strong> Jean<br>
                        <strong>Email :</strong> jean.dupont@example.com<br>
                        <strong>ID :</strong> 1
                    </p>
                    <p class="card-text">
                        <strong>Exemples d'autres enregistrements :</strong><br>
                        - Paul Martin (Email : paul.martin@example.com, ID : 2)<br>
                        - Marie Durand (Email : marie.durand@example.com, ID : 3)<br>
                        - Luc Petit (Email : luc.petit@example.com, ID : 4)
                    </p>
                </div>
            </div>

            <!-- Sélection Simple -->
            <div class="mb-4">
                <h3>1. Sélection Simple :</h3>
                <p>Complétez la requête pour sélectionner le nom et l'email de Jean Dupont dans la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <input type="text" id="select_simple_columns" class="code-trou" placeholder="Colonnes...">
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">client_id</span> = <input type="text" id="select_simple_id" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Sélection avec Condition Multiple -->
            <div class="mb-4">
                <h3>2. Sélection avec Condition Multiple :</h3>
                <p>Complétez la requête pour sélectionner les clients ayant le statut 'actif' et qui ont passé au moins une commande.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">statut</span> = '<input type="text" id="select_multiple_status" class="code-trou" placeholder="Condition...">' 
<span class="sql-keyword">AND</span> <span class="sql-column">commandes</span> >= <input type="text" id="select_multiple_commandes" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Sélection avec Tri -->
            <div class="mb-4">
                <h3>3. Sélection avec Tri :</h3>
                <p>Complétez la requête pour sélectionner tous les clients et les trier par date d'inscription (date_inscription) en ordre décroissant.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">date_inscription</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">ORDER BY</span> <span class="sql-column">date_inscription</span> <input type="text" id="select_order" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Sélection avec Jointure -->
            <div class="mb-4">
                <h3>4. Sélection avec Jointure :</h3>
                <p>Complétez la requête pour sélectionner les noms des clients et leurs dates de commande en utilisant une jointure entre les tables <strong>Clients</strong> et <strong>Commandes</strong>.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-column">Clients.nom</span>, <span class="sql-column">Commandes.date_commande</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">INNER JOIN</span> <span class="sql-table">Commandes</span> <span class="sql-keyword">ON</span> <span class="sql-column">Clients.client_id</span> = <span class="sql-column">Commandes.client_id</span>;
                </code></pre>
            </div>

            <!-- Questions sur les Sélections SQL -->
            <h3>Questions sur les Sélections en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi est-il important de bien spécifier les colonnes dans une requête SELECT ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quand utiliser une jointure dans une sélection ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Comment l'ordre des résultats peut-il influencer la présentation des données ?</label>
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

    <script src="js/verification_sql_select.js"></script>
</body>
</html>
