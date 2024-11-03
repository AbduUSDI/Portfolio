<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Types de Données</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Types de Données</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="types_donnees">
            <p>Complétez les déclarations de colonnes en utilisant les types de données appropriés. Répondez aux questions sur les types de données pour évaluer votre compréhension.</p>

            <!-- Exercices Types de Données -->
            <div class="mb-4">
                <h3>1. Types de Données Numériques :</h3>
                <p>Complétez les types de données pour chaque colonne.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Employes</span> (
    <span class="sql-column">employe_id</span> <input type="text" id="numeric_type1" class="code-trou" placeholder="Type..."> <span class="sql-other">PRIMARY KEY</span>,
    <span class="sql-column">age</span> <input type="text" id="numeric_type2" class="code-trou" placeholder="Type...">,
    <span class="sql-column">salaire</span> <input type="text" id="numeric_type3" class="code-trou" placeholder="Type...">
);
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>2. Types de Données Texte :</h3>
                <p>Complétez les types de données pour les colonnes texte.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Clients</span> (
    <span class="sql-column">nom</span> <input type="text" id="text_type1" class="code-trou" placeholder="Type...">,
    <span class="sql-column">prenom</span> <input type="text" id="text_type2" class="code-trou" placeholder="Type...">,
    <span class="sql-column">description</span> <input type="text" id="text_type3" class="code-trou" placeholder="Type...">
);
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>3. Types de Données de Date et Heure :</h3>
                <p>Complétez les types de données pour les colonnes de date et heure.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Evenements</span> (
    <span class="sql-column">date_evenement</span> <input type="text" id="date_type1" class="code-trou" placeholder="Type...">,
    <span class="sql-column">heure_debut</span> <input type="text" id="date_type2" class="code-trou" placeholder="Type...">,
    <span class="sql-column">horodatage</span> <input type="text" id="date_type3" class="code-trou" placeholder="Type...">
);
                </code></pre>
            </div>

            <div class="mb-4">
                <h3>4. Types Booléens et Binaires :</h3>
                <p>Complétez les types de données pour les colonnes booléennes et binaires.</p>
                <pre><code>
<span class="sql-keyword">CREATE TABLE</span> <span class="sql-table">Utilisateurs</span> (
    <span class="sql-column">est_actif</span> <input type="text" id="boolean_type" class="code-trou" placeholder="Type...">,
    <span class="sql-column">photo</span> <input type="text" id="binary_type" class="code-trou" placeholder="Type...">
);
                </code></pre>
            </div>

            <!-- Questions sur les Types de Données -->
            <h3>Questions sur les Types de Données :</h3>
            <div class="mb-3">
                <label for="q1" class="form-label">1. Quel type de données serait idéal pour stocker un montant financier ?</label>
                <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q2" class="form-label">2. Quel type de données conviendrait pour un texte de longueur indéfinie, comme une description ?</label>
                <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q3" class="form-label">3. Quel type de données permet de stocker une date et une heure avec fuseau horaire ?</label>
                <input type="text" id="q3" class="form-control" placeholder="Entrez votre réponse ici...">
            </div>
            <div class="mb-3">
                <label for="q4" class="form-label">4. Quel type de données pourrait être utilisé pour un champ qui accepte uniquement des valeurs vrai/faux ?</label>
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

    <script src="js/verification_sql_types_donnees.js"></script>
</body>
</html>
