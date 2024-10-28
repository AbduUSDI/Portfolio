<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur MongoDB</title>
    <!-- Bootstrap pour les modals et la sidebar responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php'; ?>

<!-- Sidebar -->
<div class="sidebar">
    <h3 style="position: relative; left: 15px; font-weight: bold;">MongoDB</h3>
    <button class="dropdown-btn">Introduction <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#intro">Introduction à MongoDB</a>
        <a href="#nosql">Qu'est-ce que NoSQL ?</a>
    </div>
    <button class="dropdown-btn">Installation <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#installation">Installation de MongoDB</a>
        <a href="#configuration">Configuration de MongoDB</a>
    </div>
    <button class="dropdown-btn">Bases de Données <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#create-db">Création de Base de Données</a>
        <a href="#drop-db">Suppression de Base de Données</a>
    </div>
    <button class="dropdown-btn">Collections <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#create-collection">Création de Collections</a>
        <a href="#drop-collection">Suppression de Collections</a>
    </div>
    <button class="dropdown-btn">Documents <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#insert-doc">Insertion de Documents</a>
        <a href="#update-doc">Mise à Jour de Documents</a>
        <a href="#delete-doc">Suppression de Documents</a>
        <a href="#find-doc">Recherche de Documents</a>
    </div>
    <button class="dropdown-btn">Requêtes <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#query">Requêtes MongoDB</a>
        <a href="#aggregation">Aggregation</a>
    </div>
</div>

<!-- Contenu de la page -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">
        
        <!-- Introduction -->
        <div class="content-section" id="intro">
            <h2><i class="fas fa-book icon"></i> Introduction à MongoDB</h2>
            <p>
                <strong>MongoDB</strong> est une base de données NoSQL orientée document. Contrairement aux bases de données relationnelles, MongoDB stocke les données sous forme de documents JSON (BSON) qui permettent une structure flexible et évolutive.
            </p>
            <p>
                MongoDB est conçu pour gérer de grandes quantités de données, permettant ainsi des performances élevées et une scalabilité horizontale. 
            </p>
        </div>

        <!-- Qu'est-ce que NoSQL ? -->
        <div class="content-section" id="nosql">
            <h2><i class="fas fa-database icon"></i> Qu'est-ce que NoSQL ?</h2>
            <p>
                Les bases de données NoSQL sont une catégorie de systèmes de gestion de bases de données qui ne reposent pas sur le modèle relationnel traditionnel. 
                Elles sont conçues pour des applications nécessitant une grande flexibilité, des performances élevées et une scalabilité.
            </p>
            <p>
                Les bases de données NoSQL incluent différents types, tels que :
                <ul>
                    <li><strong>Orientées document</strong> (comme MongoDB)</li>
                    <li><strong>Orientées colonnes</strong> (comme Cassandra)</li>
                    <li><strong>Orientées clés-valeurs</strong> (comme Redis)</li>
                    <li><strong>Orientées graphes</strong> (comme Neo4j)</li>
                </ul>
            </p>
        </div>

        <!-- Installation -->
        <div class="content-section" id="installation">
            <h2><i class="fas fa-tools icon"></i> Installation de MongoDB</h2>
            <p>Pour installer MongoDB, vous pouvez suivre les étapes ci-dessous :</p>
            <ol>
                <li>Téléchargez MongoDB Community Server depuis le site officiel.</li>
                <li>Suivez les instructions d'installation pour votre système d'exploitation (Windows, macOS, Linux).</li>
                <li>Configurez les variables d'environnement si nécessaire.</li>
                <li>Démarrez le service MongoDB en utilisant la commande appropriée.</li>
            </ol>
        </div>

        <!-- Configuration -->
        <div class="content-section" id="configuration">
            <h2><i class="fas fa-cog icon"></i> Configuration de MongoDB</h2>
            <p>
                La configuration de MongoDB peut inclure des paramètres tels que le chemin du stockage des données, la port d'écoute, et les options de sécurité. 
                Ces configurations peuvent être définies dans le fichier <code>mongod.conf</code>.
            </p>
        </div>

        <!-- Création de Base de Données -->
        <div class="content-section" id="create-db">
            <h2><i class="fas fa-database icon"></i> Création de Base de Données</h2>
            <p>
                Pour créer une nouvelle base de données, il suffit de sélectionner une base de données qui n'existe pas encore et d'y insérer un document. 
                Par exemple :
            </p>
            <pre><code>use nom_de_la_base_de_donnees</code></pre>
            <p>Après cela, MongoDB créera la base de données lorsque vous insérez un document.</p>
        </div>

        <!-- Suppression de Base de Données -->
        <div class="content-section" id="drop-db">
            <h2><i class="fas fa-trash icon"></i> Suppression de Base de Données</h2>
            <p>
                Pour supprimer une base de données, utilisez la commande suivante :
            </p>
            <pre><code>db.dropDatabase()</code></pre>
            <p>Cette commande supprimera la base de données actuellement sélectionnée.</p>
        </div>

        <!-- Création de Collections -->
        <div class="content-section" id="create-collection">
            <h2><i class="fas fa-folder-plus icon"></i> Création de Collections</h2>
            <p>
                Une collection peut être créée en insérant un document :
            </p>
            <pre><code>db.nom_de_la_collection.insertOne({ nom: "exemple" })</code></pre>
            <p>MongoDB créera automatiquement la collection si elle n'existe pas.</p>
        </div>

        <!-- Suppression de Collections -->
        <div class="content-section" id="drop-collection">
            <h2><i class="fas fa-folder-minus icon"></i> Suppression de Collections</h2>
            <p>
                Pour supprimer une collection, utilisez la commande suivante :
            </p>
            <pre><code>db.nom_de_la_collection.drop()</code></pre>
            <p>Cela supprimera la collection spécifiée et tous les documents qu'elle contient.</p>
        </div>

        <!-- Insertion de Documents -->
        <div class="content-section" id="insert-doc">
            <h2><i class="fas fa-plus icon"></i> Insertion de Documents</h2>
            <p>
                Pour insérer des documents dans une collection, vous pouvez utiliser les commandes suivantes :
            </p>
            <pre><code>db.nom_de_la_collection.insertOne({ nom: "exemple", valeur: 123 })</code></pre>
            <pre><code>db.nom_de_la_collection.insertMany([{ nom: "exemple1" }, { nom: "exemple2" }])</code></pre>
            <p>Ces commandes vous permettent d'insérer un ou plusieurs documents dans la collection.</p>
        </div>

        <!-- Mise à Jour de Documents -->
        <div class="content-section" id="update-doc">
            <h2><i class="fas fa-edit icon"></i> Mise à Jour de Documents</h2>
            <p>
                Pour mettre à jour des documents, utilisez les commandes suivantes :
            </p>
            <pre><code>db.nom_de_la_collection.updateOne({ nom: "exemple" }, { $set: { valeur: 456 } })</code></pre>
            <pre><code>db.nom_de_la_collection.updateMany({ valeur: { $lt: 100 } }, { $set: { statut: "bas" } })</code></pre>
            <p>Ces commandes mettent à jour un ou plusieurs documents selon des critères définis.</p>
        </div>

        <!-- Suppression de Documents -->
        <div class="content-section" id="delete-doc">
            <h2><i class="fas fa-trash-alt icon"></i> Suppression de Documents</h2>
            <p>
                Pour supprimer des documents, utilisez les commandes suivantes :
            </p>
            <pre><code>db.nom_de_la_collection.deleteOne({ nom: "exemple" })</code></pre>
            <pre><code>db.nom_de_la_collection.deleteMany({ valeur: { $lt: 100 } })</code></pre>
            <p>Ces commandes supprimeront un ou plusieurs documents selon des critères définis.</p>
        </div>

        <!-- Recherche de Documents -->
        <div class="content-section" id="find-doc">
            <h2><i class="fas fa-search icon"></i> Recherche de Documents</h2>
            <p>
                Pour rechercher des documents dans une collection, utilisez :
            </p>
            <pre><code>db.nom_de_la_collection.find({ nom: "exemple" })</code></pre>
            <pre><code>db.nom_de_la_collection.find({ valeur: { $gt: 100 } })</code></pre>
            <p>Ces commandes retournent les documents qui correspondent aux critères spécifiés.</p>
        </div>

        <!-- Requêtes MongoDB -->
        <div class="content-section" id="query">
            <h2><i class="fas fa-file-alt icon"></i> Requêtes MongoDB</h2>
            <p>
                MongoDB utilise un langage de requête basé sur JSON pour interagir avec les données. Voici quelques requêtes courantes :
            </p>
            <ul>
                <li><code>find()</code> : Recherche des documents dans une collection.</li>
                <li><code>aggregate()</code> : Exécute des opérations d'agrégation sur les données.</li>
                <li><code>countDocuments()</code> : Compte le nombre de documents dans une collection.</li>
            </ul>
        </div>

        <!-- Aggregation -->
        <div class="content-section" id="aggregation">
            <h2><i class="fas fa-signal icon"></i> Aggregation</h2>
            <p>
                L'agrégation permet de traiter des données et d'effectuer des calculs sur les résultats. Voici un exemple d'utilisation de l'agrégation :
            </p>
            <pre><code>db.nom_de_la_collection.aggregate([ { $match: { valeur: { $gt: 100 } } }, { $group: { _id: "$nom", total: { $sum: "$valeur" } } } ])</code></pre>
            <p>Cette commande filtre les documents et les groupe par nom, calculant la somme des valeurs pour chaque groupe.</p>
        </div>
        
    </div>
</div>

<!-- Bootstrap JS (optional if you want responsive behavior) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
