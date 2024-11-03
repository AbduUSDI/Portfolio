<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice SQL : Triggers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice SQL : Triggers</h1>
        <?php include '../templates/retour.php'; ?>

        <section id="trigger-commands">
            <p>Complétez les requêtes SQL pour créer et supprimer des triggers. Répondez ensuite aux questions sur l'utilisation des triggers pour automatiser des actions dans la base de données.</p>

            <!-- CREATE TRIGGER (BEFORE INSERT) -->
            <div class="mb-4">
                <h3>1. Utilisation de CREATE TRIGGER (BEFORE INSERT) :</h3>
                <p>Complétez la requête pour créer un trigger nommé <strong>before_insert_clients</strong> qui s'exécute avant chaque insertion dans la table <strong>Clients</strong>. Il doit vérifier que l'email n'est pas vide.</p>
                <pre><code>
<span class="sql-keyword">CREATE TRIGGER</span> <input type="text" id="trigger_name_1" class="code-trou" placeholder="Nom du trigger...">
<span class="sql-keyword">BEFORE INSERT ON</span> <input type="text" id="table_name_1" class="code-trou" placeholder="Nom de la table...">
<span class="sql-keyword">FOR EACH ROW</span>
<span class="sql-keyword">BEGIN</span>
    <span class="sql-keyword">IF</span> <input type="text" id="check_email" class="code-trou" placeholder="Condition..."> <span class="sql-keyword">THEN</span>
        <span class="sql-keyword">SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT =</span> 'Email requis';
    <span class="sql-keyword">END IF</span>;
<span class="sql-keyword">END</span>;
                </code></pre>
            </div>

            <!-- CREATE TRIGGER (AFTER UPDATE) -->
            <div class="mb-4">
                <h3>2. Utilisation de CREATE TRIGGER (AFTER UPDATE) :</h3>
                <p>Complétez la requête pour créer un trigger nommé <strong>after_update_commandes</strong> qui s'exécute après chaque mise à jour de la table <strong>Commandes</strong>. Il doit enregistrer l'ancienne valeur du montant dans une table <strong>HistoriqueCommandes</strong>.</p>
                <pre><code>
<span class="sql-keyword">CREATE TRIGGER</span> <input type="text" id="trigger_name_2" class="code-trou" placeholder="Nom du trigger...">
<span class="sql-keyword">AFTER UPDATE ON</span> <input type="text" id="table_name_2" class="code-trou" placeholder="Nom de la table...">
<span class="sql-keyword">FOR EACH ROW</span>
<span class="sql-keyword">BEGIN</span>
    <span class="sql-keyword">INSERT INTO</span> <input type="text" id="history_table" class="code-trou" placeholder="Table d'historique...">(<span class="sql-column">commande_id</span>, <span class="sql-column">ancien_montant</span>)
    <span class="sql-keyword">VALUES</span>(<span class="sql-keyword">OLD</span>.<input type="text" id="column_id" class="code-trou" placeholder="Colonne ID...">, <span class="sql-keyword">OLD</span>.<input type="text" id="old_amount" class="code-trou" placeholder="Ancien montant...">);
<span class="sql-keyword">END</span>;
                </code></pre>
            </div>

            <!-- DROP TRIGGER -->
            <div class="mb-4">
                <h3>3. Utilisation de DROP TRIGGER :</h3>
                <p>Complétez la requête pour supprimer le trigger nommé <strong>before_insert_clients</strong> de la base de données.</p>
                <pre><code>
<span class="sql-keyword">DROP TRIGGER</span> <input type="text" id="trigger_name_3" class="code-trou" placeholder="Nom du trigger...">;
                </code></pre>
            </div>

            <!-- Questions sur les commandes SQL de triggers -->
            <h3>Questions sur les commandes SQL de triggers :</h3>

            <div class="mb-3">
                <label class="form-label">1. La commande <span class="sql-keyword">CREATE TRIGGER</span> est utilisée pour <input type="text" id="q1_trou" class="code-trou" placeholder="..."> un trigger qui exécute une action lors d'un événement spécifique.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">2. La commande <span class="sql-keyword">DROP TRIGGER</span> est utilisée pour <input type="text" id="q2_trou" class="code-trou" placeholder="..."> un trigger existant.</label>
            </div>

            <div class="mb-3">
                <label class="form-label">3. Pourquoi est-il utile d'utiliser un trigger <span class="sql-keyword">AFTER UPDATE</span> pour conserver un historique des valeurs ?</label>
                <input type="text" id="q3_trou" class="form-control" placeholder="Entrez votre réponse ici...">
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

    <script src="js/verification_sql_trigger_commands.js"></script>
</body>
</html>
