<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Suppressions (DELETE)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Suppressions (DELETE)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="delete">
            <p>Complétez les requêtes SQL pour supprimer des données dans la base de données. Répondez ensuite aux questions sur les opérations de suppression en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les suppressions
                </div>
                <div class="card-body">
                    <h5 class="card-title">Informations de M. Dupont</h5>
                    <p class="card-text">
                        <strong>Nom :</strong> Dupont<br>
                        <strong>Prénom :</strong> Jean<br>
                        <strong>Email :</strong> jean.dupont@example.com<br>
                        <strong>ID :</strong> 1
                    </p>
                </div>
            </div>

            <!-- Suppression Simple -->
            <div class="mb-4">
                <h3>1. Suppression Simple :</h3>
                <p>Complétez la requête pour supprimer l'enregistrement de Jean Dupont dans la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">DELETE FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">client_id</span> = <input type="text" id="delete_simple_id" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Suppression avec Condition Multiple -->
            <div class="mb-4">
                <h3>2. Suppression avec Condition Multiple :</h3>
                <p>Complétez la requête pour supprimer tous les clients dont le statut est 'inactif' et qui n'ont pas passé de commandes.</p>
                <pre><code>
<span class="sql-keyword">DELETE FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">statut</span> = '<input type="text" id="delete_multiple_status" class="code-trou" placeholder="Valeur...">' 
<span class="sql-keyword">AND</span> <span class="sql-column">commandes</span> = <input type="text" id="delete_multiple_commandes" class="code-trou" placeholder="Valeur...">;
                </code></pre>
            </div>

            <!-- Suppression avec Sous-requête -->
            <div class="mb-4">
                <h3>3. Suppression avec Sous-requête :</h3>
                <p>Complétez la requête pour supprimer tous les clients qui ont passé leur dernière commande avant le 2022-01-01.</p>
                <pre><code>
<span class="sql-keyword">DELETE FROM</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">WHERE</span> <span class="sql-column">client_id</span> <span class="sql-keyword">IN</span> (<span class="sql-keyword">SELECT</span> <span class="sql-column">client_id</span> <span class="sql-keyword">FROM</span> <span class="sql-table">Commandes</span> 
<span class="sql-keyword">WHERE</span> <span class="sql-column">date_commande</span> <input type="text" id="delete_subquery_date" class="code-trou" placeholder="Condition...">);
                </code></pre>
            </div>

            <!-- Questions sur les Suppressions SQL -->
            <h3>Questions sur les Suppressions en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi est-il important de faire attention aux conditions dans une requête DELETE ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quels sont les risques d'une suppression sans condition ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quand utiliser une suppression avec une sous-requête ?</label>
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

    <script src="js/verification_sql_delete.js"></script>
</body>
</html>
