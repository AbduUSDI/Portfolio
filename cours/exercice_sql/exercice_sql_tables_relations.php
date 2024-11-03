<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Code à Trou</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Code à Trou pour Tables, Relations et Bonnes Pratiques</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="relations">
            <p>Complétez les requêtes SQL en remplissant les champs vides. Ensuite, répondez aux questions sur les bonnes pratiques en remplissant les champs appropriés. Cliquez sur "Vérifier les réponses" pour valider.</p>

            <!-- Relation Un-à-Un -->
            <div class="mb-4">
                <h3>Relation Un-à-Un (1:1) :</h3>
                <p>Complétez la requête pour créer les tables <strong>Employes</strong> et <strong>DetailsPaie</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Employes</span> (
    <span class="sql-column">employe_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">nom</span> <span class="sql-datatype">VARCHAR(50)</span>,
    <span class="sql-column">prenom</span> <span class="sql-datatype">VARCHAR(50)</span>,
    <span class="sql-column">date_embauche</span> <span class="sql-datatype">DATE</span>
);

<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">DetailsPaie</span> (
    <span class="sql-column">details_paie_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">employe_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">UNIQUE</span>,
    <span class="sql-column">salaire</span> <span class="sql-datatype">DECIMAL(10, 2)</span>,
    <span class="sql-column">banque</span> <span class="sql-datatype">VARCHAR(50)</span>,
    <span class="sql-other">FOREIGN KEY</span> (<span class="sql-column">employe_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Employes</span>(<input type="text" id="relation1_1" class="code-trou" placeholder="Colonne Référence...">)
);
                </code></pre>
            </div>

            <!-- Relation Un-à-Plusieurs -->
            <div class="mb-4">
                <h3>Relation Un-à-Plusieurs (1:N) :</h3>
                <p>Complétez la requête pour créer les tables <strong>Clients</strong> et <strong>Commandes</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Clients</span> (
    <span class="sql-column">client_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">nom</span> <span class="sql-datatype">VARCHAR(50)</span>,
    <span class="sql-column">prenom</span> <span class="sql-datatype">VARCHAR(50)</span>,
    <span class="sql-column">email</span> <span class="sql-datatype">VARCHAR(100)</span> <span class="sql-other">UNIQUE</span>
);

<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Commandes</span> (
    <span class="sql-column">commande_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">client_id</span> <span class="sql-datatype">INT</span>,
    <span class="sql-column">date_commande</span> <span class="sql-datatype">DATE</span>,
    <span class="sql-column">montant_total</span> <span class="sql-datatype">DECIMAL(10, 2)</span>,
    <span class="sql-other">FOREIGN KEY</span> (<span class="sql-column">client_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Clients</span>(<input type="text" id="relation1_N" class="code-trou" placeholder="Colonne Référence...">)
);
                </code></pre>
            </div>

            <!-- Relation Plusieurs-à-Plusieurs -->
            <div class="mb-4">
                <h3>Relation Plusieurs-à-Plusieurs (N:N) :</h3>
                <p>Complétez la requête pour créer les tables <strong>Employes</strong>, <strong>Projets</strong>, et <strong>Affectations</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Employes</span> (
    <span class="sql-column">employe_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">nom</span> <span class="sql-datatype">VARCHAR(50)</span>,
    <span class="sql-column">prenom</span> <span class="sql-datatype">VARCHAR(50)</span>
);

<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Projets</span> (
    <span class="sql-column">projet_id</span> <span class="sql-datatype">INT</span> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">nom_projet</span> <span class="sql-datatype">VARCHAR(100)</span>,
    <span class="sql-column">date_debut</span> <span class="sql-datatype">DATE</span>,
    <span class="sql-column">date_fin</span> <span class="sql-datatype">DATE</span>
);

<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Affectations</span> (
    <span class="sql-column">employe_id</span> <span class="sql-datatype">INT</span>,
    <span class="sql-column">projet_id</span> <span class="sql-datatype">INT</span>,
    <span class="sql-column">date_affectation</span> <span class="sql-datatype">DATE</span>,
    <span class="sql-other">PRIMARY KEY</span> (<span class="sql-column">employe_id</span>, <span class="sql-column">projet_id</span>),
    <span class="sql-other">FOREIGN KEY</span> (<span class="sql-column">employe_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Employes</span>(<input type="text" id="relationN_N1" class="code-trou" placeholder="Colonne Référence...">),
    <span class="sql-other">FOREIGN KEY</span> (<span class="sql-column">projet_id</span>) <span class="sql-keyword">REFERENCES</span> <span class="sql-table">Projets</span>(<input type="text" id="relationN_N2" class="code-trou" placeholder="Colonne Référence...">)
);
                </code></pre>
            </div>

            <!-- Questions sur les Bonnes Pratiques -->
            <h3>Questions sur les Bonnes Pratiques :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Pourquoi est-il important d'utiliser des noms explicites pour les tables et colonnes ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Que signifie normaliser les données et quel est son avantage ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quelle est l'importance des contraintes de clé étrangère dans les relations entre tables ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q4" class="form-label">4. Pourquoi faut-il indexer les colonnes fréquemment utilisées dans les requêtes de recherche ?</label>
                <input type="text" id="q4" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>

            <button class="btn btn-primary" onclick="verifierReponses()">Vérifier les réponses</button>
            <div id="resultat-exercice" class="mt-3"></div>

            <!-- Boutons d'indices -->
            <div class="mt-4">
                <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1ère relation</button>
                <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2ème relation</button>
                <button class="btn btn-secondary" onclick="afficherIndice(3)">Indice 3ème relation</button>
                <div id="indice" class="mt-3"></div>
            </div>

            <!-- Bouton pour afficher la réponse -->
            <div class="mt-4">
                <button class="btn btn-warning" onclick="afficherReponse()">Afficher les réponses</button>
                <div id="reponse" class="mt-3"></div>
            </div>
        </section>
    </div>

    <script src="js/verification_sql_tables_relations.js"></script>
</body>
</html>
