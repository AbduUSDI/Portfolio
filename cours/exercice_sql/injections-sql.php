<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Protection contre les Injections SQL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Protection contre les Injections SQL</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="sql-injection-protection">
            <p>Complétez les requêtes SQL sécurisées pour protéger votre application des attaques par injection SQL. Remplissez également les textes à trous pour mieux comprendre les bonnes pratiques en sécurité SQL.</p>

            <!-- Utilisation de Requêtes Préparées -->
            <div class="mb-4">
                <h3>1. Utilisation de Requêtes Préparées</h3>
                <p>Complétez la commande pour préparer une requête SQL d'insertion sécurisée pour un utilisateur.</p>
                <pre><code>
<span class="sql-keyword">PREPARE</span> <span class="sql-object">stmt</span> <span class="sql-keyword">FROM</span> 'INSERT INTO <span class="sql-object">Utilisateurs</span> (<span class="sql-column">nom</span>, <span class="sql-column">email</span>) <span class="sql-keyword">VALUES</span> (?, ?)';
<span class="sql-keyword">SET</span> <span class="sql-object">@nom</span> = '<input type="text" id="nom_value" class="code-trou" placeholder="Nom...">', <span class="sql-object">@email</span> = '<input type="text" id="email_value" class="code-trou" placeholder="Email...">';
<span class="sql-keyword">EXECUTE</span> <span class="sql-object">stmt</span> <span class="sql-keyword">USING</span> <span class="sql-object">@nom</span>, <span class="sql-object">@email</span>;
                </code></pre>
            </div>

            <!-- Validation des Entrées Utilisateur -->
            <div class="mb-4">
                <h3>2. Validation des Entrées Utilisateur</h3>
                <p>Complétez le code de validation pour vérifier que le nom de l'utilisateur ne contient pas de caractères spéciaux avant l'insertion.</p>
                <pre><code>
if (!preg_match(<span class="sql-keyword">"/^[a-zA-Z ]*$/"</span>, <span class="sql-object">$nom</span>)) {
    echo "Nom invalide";
} else {
    <span class="sql-keyword">/* Exécuter la requête SQL sécurisée ici */</span>
}
                </code></pre>
            </div>

            <!-- Texte à trous sur la protection SQL -->
            <h3>Texte à trous sur la protection SQL :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                Les <input type="text" id="prepared_statements" class="code-trou" placeholder="..."> permettent d'éviter les injections SQL en utilisant des <input type="text" id="placeholders" class="code-trou" placeholder="..."> pour les paramètres de requêtes. Cela empêche les attaquants d'insérer des <input type="text" id="malicious_code" class="code-trou" placeholder="..."> dans les requêtes SQL.
            </p>

            <p>
                La <input type="text" id="input_validation" class="code-trou" placeholder="..."> des entrées utilisateur est également importante pour <input type="text" id="prevent_injection" class="code-trou" placeholder="..."> les attaques. En s'assurant que les données utilisateur respectent des <input type="text" id="validation_rules" class="code-trou" placeholder="...">, on peut réduire les risques de <input type="text" id="security_vulnerabilities" class="code-trou" placeholder="...">.
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

    <script src="js/verification_sql_injection_protection.js"></script>
</body>
</html>
