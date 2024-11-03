<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Fonctions Texte (UPPER, LOWER, CONCAT)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Fonctions Texte (UPPER, LOWER, CONCAT)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="text-functions">
            <p>Complétez les requêtes SQL pour manipuler des chaînes de caractères. Répondez ensuite aux questions sur l’utilisation des fonctions de texte en SQL.</p>

            <div class="card mb-4">
                <div class="card-header">
                    Informations pour les Fonctions de Texte
                </div>
                <div class="card-body">
                    <p class="card-text">
                        La table <strong>Clients</strong> contient les informations suivantes :
                    </p>
                    <ul>
                        <li><strong>client_id</strong> : Identifiant du client</li>
                        <li><strong>nom</strong> : Nom du client</li>
                        <li><strong>prenom</strong> : Prénom du client</li>
                        <li><strong>email</strong> : Adresse email du client</li>
                    </ul>
                </div>
            </div>

            <!-- UPPER -->
            <div class="mb-4">
                <h3>1. Utilisation de UPPER :</h3>
                <p>Complétez la requête pour afficher les noms des clients en majuscules.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">UPPER</span>(<input type="text" id="upper_column" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">nom_majuscule</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <!-- LOWER -->
            <div class="mb-4">
                <h3>2. Utilisation de LOWER :</h3>
                <p>Complétez la requête pour afficher les emails des clients en minuscules.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">LOWER</span>(<input type="text" id="lower_column" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">email_minuscule</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <!-- CONCAT -->
            <div class="mb-4">
                <h3>3. Utilisation de CONCAT :</h3>
                <p>Complétez la requête pour afficher les noms complets des clients en concaténant le prénom et le nom, séparés par un espace.</p>
                <pre><code>
<span class="sql-keyword">SELECT</span> <span class="sql-keyword">CONCAT</span>(<input type="text" id="concat_column1" class="code-trou" placeholder="Colonne...">, <span class="sql-other">' '</span>, <input type="text" id="concat_column2" class="code-trou" placeholder="Colonne...">) <span class="sql-other">AS</span> <span class="sql-column">nom_complet</span>
<span class="sql-keyword">FROM</span> <span class="sql-table">Clients</span>;
                </code></pre>
            </div>

            <!-- Questions sur les Fonctions de Texte SQL -->
            <h3>Questions sur les Fonctions de Texte en SQL :</h3>

            <div class="mb-3">
                <label class="form-label">1. La fonction <span class="sql-keyword">UPPER</span> est utilisée pour convertir tous les caractères d'une chaîne en <input type="text" id="q1_trou" class="code-trou" placeholder="...">.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La fonction <span class="sql-keyword">LOWER</span> est utilisée pour convertir tous les caractères d'une chaîne en <input type="text" id="q2_trou" class="code-trou" placeholder="...">.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. La fonction <span class="sql-keyword">CONCAT</span> permet de <input type="text" id="q3_trou" class="code-trou" placeholder="..."> plusieurs chaînes de caractères en une seule.</label>
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

    <script src="js/verification_sql_text_functions.js"></script>
</body>
</html>
