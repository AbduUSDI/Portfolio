<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Mises à jour (UPDATE)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Mises à jour (UPDATE)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="update">
            <p>Complétez les requêtes SQL pour mettre à jour les informations dans la base de données. Répondez ensuite aux questions sur les opérations de mise à jour en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les mises à jour
                </div>
                <div class="card-body">
                    <h5 class="card-title">Informations de M. Dupont</h5>
                    <p class="card-text">
                        <strong>Nom :</strong> Dupont<br>
                        <strong>Prénom :</strong> Jean<br>
                        <strong>Email :</strong> jean.dupont@example.com<br>
                        <strong>Nouveau Email :</strong> jean.dupont@newdomain.com<br>
                        <strong>ID :</strong> 1
                    </p>
                </div>
            </div>

            <!-- Mise à jour Simple -->
            <div class="mb-4">
                <h3>1. Mise à jour Simple :</h3>
                <p>Complétez la requête pour mettre à jour l'adresse email de Jean Dupont dans la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">UPDATE</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">SET</span> <span class="sql-column">email</span> = '<input type="text" id="update_simple" class="code-trou" placeholder="Nouvelle valeur...">'
<span class="sql-keyword">WHERE</span> <span class="sql-column">client_id</span> = <input type="text" id="update_simple_id" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Mise à jour Multiple -->
            <div class="mb-4">
                <h3>2. Mise à jour Multiple :</h3>
                <p>Complétez la requête pour changer le statut des clients inactifs (statut = 'inactif') dans la table <strong>Clients</strong> pour les mettre en 'actif'.</p>
                <pre><code>
<span class="sql-keyword">UPDATE</span> <span class="sql-table">Clients</span>
<span class="sql-keyword">SET</span> <span class="sql-column">statut</span> = '<input type="text" id="update_multiple" class="code-trou" placeholder="Nouvelle valeur...">'
<span class="sql-keyword">WHERE</span> <span class="sql-column">statut</span> = '<input type="text" id="update_multiple_condition" class="code-trou" placeholder="Condition...">';
                </code></pre>
            </div>

            <!-- Mise à jour avec une Condition Complexe -->
            <div class="mb-4">
                <h3>3. Mise à jour avec une Condition Complexe :</h3>
                <p>Complétez la requête pour augmenter de 5% le salaire des employés ayant plus de 10 ans d'ancienneté.</p>
                <pre><code>
<span class="sql-keyword">UPDATE</span> <span class="sql-table">Employes</span>
<span class="sql-keyword">SET</span> <span class="sql-column">salaire</span> = <span class="sql-column">salaire</span> * <input type="text" id="update_condition_complex" class="code-trou" placeholder="Valeur...">
<span class="sql-keyword">WHERE</span> <span class="sql-column">anciennete</span> <span class="sql-other">&gt;</span> <input type="text" id="update_complex_condition" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Questions sur les Mises à Jour SQL -->
            <h3>Questions sur les Mises à Jour en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi est-il important d'ajouter une condition dans une requête UPDATE ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quels sont les risques d'une mise à jour sans condition ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quand utiliser une mise à jour avec une condition complexe ?</label>
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

    <script src="js/verification_sql_update.js"></script>
</body>
</html>
