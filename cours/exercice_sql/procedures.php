<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Procédures Stockées</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Procédures Stockées</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="sql-stored-procedures">
            <p>Complétez les requêtes SQL pour créer, exécuter et supprimer des procédures stockées, et remplissez les textes à trous pour vérifier votre compréhension des procédures stockées en SQL.</p>

            <!-- Créer une Procédure Stockée -->
            <div class="mb-4">
                <h3>1. CREATE PROCEDURE - Créer une Procédure Stockée</h3>
                <p>Complétez la commande pour créer une procédure stockée qui ajoute un nouvel employé avec un nom, un prénom et un salaire.</p>
                <pre><code>
<span class="sql-keyword">CREATE PROCEDURE</span> <span class="sql-object">AjouterEmploye</span>(<span class="sql-keyword">IN</span> <span class="sql-column">nom VARCHAR(50)</span>, <span class="sql-keyword">IN</span> <span class="sql-column">prenom VARCHAR(50)</span>, <span class="sql-keyword">IN</span> <span class="sql-column">salaire DECIMAL(10,2)</span>)
<span class="sql-keyword">BEGIN</span>
    <span class="sql-keyword">INSERT INTO</span> <span class="sql-object">Employes</span> (<span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">salaire</span>)
    <span class="sql-keyword">VALUES</span> (<span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">salaire</span>);
<span class="sql-keyword">END</span>;
                </code></pre>
            </div>

            <!-- Exécuter une Procédure Stockée -->
            <div class="mb-4">
                <h3>2. CALL - Exécuter une Procédure Stockée</h3>
                <p>Complétez la commande pour exécuter la procédure stockée <strong>AjouterEmploye</strong> en ajoutant un employé nommé Jean Dupont avec un salaire de 45 000.</p>
                <pre><code>
<span class="sql-keyword">CALL</span> <span class="sql-object">AjouterEmploye</span>('Jean', 'Dupont', <input type="text" id="salaire_employe" class="code-trou" placeholder="Salaire...">);
                </code></pre>
            </div>

            <!-- Supprimer une Procédure Stockée -->
            <div class="mb-4">
                <h3>3. DROP PROCEDURE - Supprimer une Procédure Stockée</h3>
                <p>Complétez la commande pour supprimer la procédure stockée <strong>AjouterEmploye</strong>.</p>
                <pre><code>
<span class="sql-keyword">DROP PROCEDURE</span> <span class="sql-object">AjouterEmploye</span>;
                </code></pre>
            </div>

            <!-- Texte à trous sur les Procédures Stockées en SQL -->
            <h3>Texte à trous sur les Procédures Stockées en SQL :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                Une procédure stockée est un ensemble de <input type="text" id="sql_commands" class="code-trou" placeholder="..."> SQL regroupées pour être exécutées comme une seule unité. La commande <input type="text" id="create_procedure" class="code-trou" placeholder="..."> permet de créer une procédure stockée, tandis que la commande <input type="text" id="call_procedure" class="code-trou" placeholder="..."> exécute la procédure. En cas de besoin, la commande <input type="text" id="drop_procedure" class="code-trou" placeholder="..."> peut être utilisée pour supprimer une procédure stockée.
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

    <script src="js/verification_sql_stored_procedures.js"></script>
</body>
</html>
