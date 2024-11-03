<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Insertions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Insertions (INSERT INTO)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="insertions">
            <p>Complétez les requêtes SQL pour réaliser différentes insertions de données. Répondez ensuite aux questions sur les insertions en SQL.</p>
            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les insertions
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
                        Vous pourrez également utiliser les informations suivantes pour les insertions multiples :<br>
                        <strong>Paul Martin :</strong> paul.martin@example.com (ID : 2)<br>
                        <strong>Marie Durand :</strong> marie.durand@example.com (ID : 3)<br>
                        <strong>Luc Petit :</strong> luc.petit@example.com (ID : 4)
                    </p>
                </div>
            </div>
            <!-- Insertion Simple -->
            <div class="mb-4">
                <h3>1. Insertion Simple :</h3>
                <p>Complétez la requête pour insérer un enregistrement dans la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">INSERT INTO</span> <span class="sql-table">Clients</span> (<span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">email</span>)
<span class="sql-keyword">VALUES</span> (<input type="text" id="insert_simple" class="code-trou" placeholder="Valeurs...">);
                </code></pre>
            </div>

            <!-- Insertion Multiple -->
            <div class="mb-4">
                <h3>2. Insertion Multiple :</h3>
                <p>Complétez la requête pour insérer plusieurs enregistrements dans la table <strong>Clients</strong>.</p>
                <pre><code>
<span class="sql-keyword">INSERT INTO</span> <span class="sql-table">Clients</span> (<span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">email</span>)
<span class="sql-keyword">VALUES</span> 
    (<input type="text" id="insert_multiple1" class="code-trou" placeholder="Valeurs...">),
    (<input type="text" id="insert_multiple2" class="code-trou" placeholder="Valeurs...">),
    (<input type="text" id="insert_multiple3" class="code-trou" placeholder="Valeurs...">);
                </code></pre>
            </div>

            <!-- Insertion avec Valeurs Par Défaut -->
            <div class="mb-4">
                <h3>3. Insertion avec Valeurs Par Défaut :</h3>
                <p>Complétez la requête pour insérer Alice Dupont (id = 1) dans la table <strong>Employes</strong> sans spécifier de date d'embauche.</p>
                <pre><code>
<span class="sql-keyword">INSERT INTO</span> <span class="sql-table">Employes</span> (<span class="sql-column">employe_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>)
<span class="sql-keyword">VALUES</span> (<input type="text" id="insert_default" class="code-trou" placeholder="Valeurs...">);
                </code></pre>
            </div>

            <!-- Insertion avec Sous-requête -->
            <div class="mb-4">
                <h3>4. Insertion avec Sous-requête :</h3>
                <p>Complétez la requête pour copier les enregistrements anciens dans la table <strong>ClientsArchive</strong> à partir de <strong>Clients</strong>.</p>
                <p class="text-muted">Condition : date d'inscription avant le 2023-01-01</p>
                <pre><code>
<span class="sql-keyword">INSERT INTO</span> <span class="sql-table">ClientsArchive</span> (<span class="sql-column">client_id</span>, <span class="sql-column">nom</span>, <span class="sql-column">prenom</span>, <span class="sql-column">email</span>)
<span class="sql-keyword">SELECT</span> <input type="text" id="insert_subquery" class="code-trou" placeholder="Colonnes..."> <span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span> <span class="sql-keyword">WHERE</span> <span class="sql-column">date_inscription</span> <input type="text" id="insert_condition" class="code-trou" placeholder="Condition...">;
                </code></pre>
            </div>

            <!-- Questions sur les Insertions SQL -->
            <h3>Questions sur les Insertions en SQL :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi utiliser une insertion multiple est-il plus performant qu'une insertion simple répétée ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quelle est l'utilité des valeurs par défaut lors d'une insertion ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quand utiliser une sous-requête dans une insertion ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q4" class="form-label">4. Pourquoi est-il important de vérifier les contraintes de la table avant une insertion ?</label>
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

    <script src="js/verification_sql_insert.js"></script>
</body>
</html>
