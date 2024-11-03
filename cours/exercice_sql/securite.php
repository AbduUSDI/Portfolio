<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Sécurité (Permissions, Rôles)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Sécurité (Permissions, Rôles)</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="security-commands">
            <p>Complétez les requêtes SQL pour gérer les permissions et les rôles. Remplissez également les textes à trous pour consolider votre compréhension des concepts de sécurité en SQL.</p>

            <!-- GRANT -->
            <div class="mb-4">
                <h3>1. Utilisation de GRANT (Accorder des Permissions) :</h3>
                <p>Complétez la requête pour accorder la permission SELECT sur la table <strong>Employes</strong> à un utilisateur spécifique.</p>
                <pre><code>
<span class="sql-keyword">GRANT</span> <input type="text" id="permission_select" class="code-trou" placeholder="Permission..."> <span class="sql-keyword">ON</span> <span class="sql-object">Employes</span>
<span class="sql-keyword">TO</span> '<input type="text" id="user_name_1" class="code-trou" placeholder="Nom de l'utilisateur...">'@'localhost';
                </code></pre>
            </div>

            <!-- REVOKE -->
            <div class="mb-4">
                <h3>2. Utilisation de REVOKE (Révoquer des Permissions) :</h3>
                <p>Complétez la requête pour révoquer les permissions INSERT et UPDATE pour l'utilisateur sur la table <strong>Commandes</strong>.</p>
                <pre><code>
<span class="sql-keyword">REVOKE</span> <input type="text" id="permissions_multiple" class="code-trou" placeholder="Permissions..."> <span class="sql-keyword">ON</span> <span class="sql-object">Commandes</span>
<span class="sql-keyword">FROM</span> '<input type="text" id="user_name_2" class="code-trou" placeholder="Nom de l'utilisateur...">'@'localhost';
                </code></pre>
            </div>

            <!-- CREATE ROLE -->
            <div class="mb-4">
                <h3>3. Utilisation de CREATE ROLE (Créer un Rôle) :</h3>
                <p>Complétez la requête pour créer un rôle nommé <strong>Gestionnaire</strong> et accorder les permissions nécessaires.</p>
                <pre><code>
<span class="sql-keyword">CREATE ROLE</span> <span class="sql-object">Gestionnaire</span>;

<span class="sql-keyword">GRANT</span> <input type="text" id="permissions_role" class="code-trou" placeholder="Permissions..."> <span class="sql-keyword">ON</span> <span class="sql-object">Employes</span> <span class="sql-keyword">TO</span> <span class="sql-object">Gestionnaire</span>;
                </code></pre>
            </div>

            <!-- ASSIGN ROLE TO USER -->
            <div class="mb-4">
                <h3>4. Assigner un rôle à un utilisateur :</h3>
                <p>Complétez la requête pour assigner le rôle <strong>Gestionnaire</strong> à l'utilisateur.</p>
                <pre><code>
<span class="sql-keyword">GRANT</span> <span class="sql-object">Gestionnaire</span> <span class="sql-keyword">TO</span> '<input type="text" id="user_name_3" class="code-trou" placeholder="Nom de l'utilisateur...">'@'localhost';
                </code></pre>
            </div>

            <!-- DROP ROLE -->
            <div class="mb-4">
                <h3>5. Utilisation de DROP ROLE (Supprimer un Rôle) :</h3>
                <p>Complétez la requête pour supprimer le rôle <strong>Gestionnaire</strong> de la base de données.</p>
                <pre><code>
<span class="sql-keyword">DROP ROLE IF EXISTS</span> <span class="sql-object">Gestionnaire</span>;
                </code></pre>
            </div>

            <!-- Texte à trous sur la sécurité SQL -->
            <h3>Texte à trous sur la sécurité SQL :</h3>
            <p>Remplissez les champs pour compléter le texte.</p>

            <p>
                Le <input type="text" id="principle" class="code-trou" placeholder="..."> de <input type="text" id="least_privilege" class="code-trou" placeholder="..."> consiste à accorder seulement les <input type="text" id="necessary_permissions" class="code-trou" placeholder="..."> nécessaires aux utilisateurs pour minimiser les <input type="text" id="security_risks" class="code-trou" placeholder="...">. 
                L'<input type="text" id="use_of_roles" class="code-trou" placeholder="..."> de <input type="text" id="roles" class="code-trou" placeholder="..."> permet de simplifier la gestion des <input type="text" id="permissions_management" class="code-trou" placeholder="..."> en attribuant des <input type="text" id="group_permissions" class="code-trou" placeholder="..."> aux utilisateurs en fonction de leurs responsabilités.
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

    <script src="js/verification_sql_security_commands.js"></script>
</body>
</html>
