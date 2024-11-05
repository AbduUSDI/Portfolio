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
        <a href="#avantages">Avantages de MongoDB</a>
        <a href="#limitations">Limitations de MongoDB</a>
    </div>
    
    <button class="dropdown-btn">Installation et Configuration <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#installation">Installation de MongoDB</a>
        <a href="#configuration">Configuration de MongoDB</a>
        <a href="#compass">Utilisation de MongoDB Compass</a>
        <a href="#cloud">MongoDB Atlas (Cloud)</a>
    </div>
    
    <button class="dropdown-btn">Bases de Données <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#create-db">Création de Base de Données</a>
        <a href="#drop-db">Suppression de Base de Données</a>
        <a href="#list-db">Lister les Bases de Données</a>
    </div>
    
    <button class="dropdown-btn">Collections <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#create-collection">Création de Collections</a>
        <a href="#drop-collection">Suppression de Collections</a>
        <a href="#indexes">Gestion des Index</a>
        <a href="#sharding">Sharding et Scalabilité</a>
    </div>
    
    <button class="dropdown-btn">Documents <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#insert-doc">Insertion de Documents</a>
        <a href="#update-doc">Mise à Jour de Documents</a>
        <a href="#delete-doc">Suppression de Documents</a>
        <a href="#find-doc">Recherche de Documents</a>
        <a href="#schema-design">Conception de Schéma</a>
    </div>
    
    <button class="dropdown-btn">Requêtes <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#query">Requêtes MongoDB</a>
        <a href="#aggregation">Aggregation Framework</a>
        <a href="#text-search">Recherche Textuelle</a>
        <a href="#geospatial">Requêtes Géospatiales</a>
    </div>
    
    <button class="dropdown-btn">Performance et Optimisation <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#indexes-performance">Optimisation des Index</a>
        <a href="#performance-tuning">Ajustement de Performance</a>
        <a href="#profiling">Profilage des Requêtes</a>
    </div>
    
    <button class="dropdown-btn">Sécurité et Sauvegarde <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#auth">Authentification et Autorisation</a>
        <a href="#backup">Sauvegarde et Restauration</a>
        <a href="#replication">Réplication et Haute Disponibilité</a>
    </div>
    
    <button class="dropdown-btn">Outils et Intégrations <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#mongoose">Utilisation avec Mongoose</a>
        <a href="#nodejs">MongoDB avec Node.js</a>
        <a href="#data-pipelines">Pipelines de Données</a>
        <a href="#analytics">Intégration avec Outils d'Analyse</a>
    </div>
</div>


<!-- Contenu de la page -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">
    <section id="intro">
    <h1>Introduction à MongoDB</h1>

    <div class="course-content">
        <h2>Qu'est-ce que MongoDB ? <i class="fas fa-database"></i></h2>
        <p>MongoDB est une base de données NoSQL orientée documents, conçue pour stocker des données de manière flexible et évolutive. Contrairement aux bases de données relationnelles (SQL), MongoDB utilise un modèle de données basé sur des documents, facilitant la gestion des données semi-structurées ou non structurées.</p>

        <div class="example-box">
            <p style="font-weight: bold;">Exemple de Document JSON :</p>
            <pre>
<span class="variable">{
    "_id"</span>: <span class="string">"1a2b3c"</span>,
    <span class="variable">"nom"</span>: <span class="string">"Alice"</span>,
    <span class="variable">"age"</span>: <span class="number">29</span>,
    <span class="variable">"adresse"</span>: {
        <span class="variable">"rue"</span>: <span class="string">"123 Avenue"</span>,
        <span class="variable">"ville"</span>: <span class="string">"Paris"</span>,
        <span class="variable">"code_postal"</span>: <span class="string">"75001"</span>
    },
    <span class="variable">"interets"</span>: [<span class="string">"voyage"</span>, <span class="string">"lecture"</span>, <span class="string">"programmation"</span>]
}</pre>
        </div>

        <h2>Avantages de MongoDB <i class="fas fa-check-circle"></i></h2>
        <ul>
            <li><strong>Flexibilité du schéma :</strong> Permet de modifier la structure des documents sans avoir à redéfinir le schéma de la base de données.</li>
            <li><strong>Scalabilité :</strong> MongoDB peut être partitionné horizontalement (sharding) pour gérer de grandes quantités de données et de trafic.</li>
            <li><strong>Stockage de documents complexes :</strong> Idéal pour les applications avec des structures de données complexes, comme les applications web et mobiles modernes.</li>
        </ul>

        <h2>MongoDB dans l'écosystème NoSQL <i class="fas fa-network-wired"></i></h2>
        <p>MongoDB fait partie de la famille NoSQL, avec un modèle de données non relationnel. Dans une base de données MongoDB, les <strong>données sont stockées sous forme de documents</strong> JSON/BSON, ce qui permet de structurer les informations sous forme de paires clé-valeur.</p>
    </div>
</section>

<section id="nosql">
    <h1>Qu'est-ce que NoSQL ?</h1>

    <div class="course-content">
        <p>NoSQL est un type de base de données qui fournit une approche différente de celle des bases de données relationnelles traditionnelles (SQL). Conçues pour une flexibilité et une scalabilité accrues, les bases de données NoSQL sont particulièrement adaptées aux applications modernes nécessitant des performances élevées et un traitement de grandes quantités de données non structurées ou semi-structurées.</p>

        <h2>Pourquoi choisir NoSQL ? <i class="fas fa-lightbulb"></i></h2>
        <ul>
            <li><strong>Scalabilité horizontale :</strong> NoSQL permet d'ajouter facilement des serveurs pour distribuer les données et les traitements.</li>
            <li><strong>Flexibilité du schéma :</strong> Les bases de données NoSQL n'imposent pas de structure rigide. Cela permet aux développeurs de modifier le schéma sans migration complexe.</li>
            <li><strong>Performance :</strong> Adapté pour les applications nécessitant un traitement rapide et une faible latence.</li>
        </ul>

        <h2>Principaux types de bases de données NoSQL <i class="fas fa-database"></i></h2>
        <ul>
            <li><strong>Bases de données orientées documents :</strong> Stockent les données sous forme de documents (ex : MongoDB).</li>
            <li><strong>Bases de données orientées colonnes :</strong> Organisent les données par colonnes pour une analyse rapide (ex : Cassandra).</li>
            <li><strong>Bases de données clé-valeur :</strong> Utilisent des paires clé-valeur pour des recherches rapides (ex : Redis).</li>
            <li><strong>Bases de données orientées graphes :</strong> Idéales pour les données avec relations complexes (ex : Neo4j).</li>
        </ul>

        <h2>Comparaison SQL vs NoSQL <i class="fas fa-exchange-alt"></i></h2>
        <p>Voici un exemple comparant une table SQL à un document NoSQL pour mieux comprendre les différences :</p>

        <div class="example-box">
            <p style="font-weight: bold;">SQL :</p>
            <pre>
<span class="keyword">TABLE Utilisateurs</span> 
| id | nom       | age | ville   |
|----|-----------|-----|---------|
| 1  | Alice     | 29  | Paris   |
| 2  | Bob       | 34  | Lyon    |
            </pre>
            
            <p style="font-weight: bold;">NoSQL (MongoDB) :</p>
            <pre class="vscode-code">
[
    { 
        <span class="variable">"_id"</span>: <span class="string">"1"</span>, 
        <span class="variable">"nom"</span>: <span class="string">"Alice"</span>, 
        <span class="variable">"age"</span>: <span class="number">29</span>, 
        <span class="variable">"ville"</span>: <span class="string">"Paris"</span>
    },
    { 
        <span class="variable">"_id"</span>: <span class="string">"2"</span>, 
        <span class="variable">"nom"</span>: <span class="string">"Bob"</span>, 
        <span class="variable">"age"</span>: <span class="number">34</span>, 
        <span class="variable">"ville"</span>: <span class="string">"Lyon"</span>
    }
]
            </pre>
        </div>

        <h2>Cas d'utilisation de NoSQL <i class="fas fa-rocket"></i></h2>
        <p>Les bases de données NoSQL sont couramment utilisées dans les cas suivants :</p>
        <ul>
            <li><strong>Applications à grande échelle :</strong> Réseaux sociaux, e-commerce, jeux en ligne, etc.</li>
            <li><strong>Applications nécessitant une flexibilité des données :</strong> Services de streaming, IoT, analyses de données en temps réel.</li>
            <li><strong>Applications nécessitant une haute disponibilité :</strong> Chat en direct, suivi des événements, etc.</li>
        </ul>
    </div>
</section>


<section id="avantages">
    <h1 style="color: #4caf50;">Avantages de MongoDB <i class="fas fa-thumbs-up" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB est l'une des bases de données NoSQL les plus populaires, offrant des avantages qui le rendent idéal pour les applications modernes. Voici quelques raisons pour lesquelles MongoDB est apprécié par les développeurs :</p>

        <h2><i class="fas fa-random" style="color: #ff9800;"></i> Flexibilité du schéma</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #ff9800;">
            MongoDB ne nécessite pas de schéma strict, ce qui signifie que les documents peuvent évoluer au fil du temps sans modifications structurelles complexes. Cela permet aux développeurs d’adapter facilement la base de données aux besoins de l’application.
        </p>

        <h2><i class="fas fa-arrows-alt-h" style="color: #3f51b5;"></i> Scalabilité horizontale</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #3f51b5;">
            Grâce au sharding, MongoDB peut répartir les données sur plusieurs serveurs. Cela permet de gérer des volumes de données considérables et d'augmenter la capacité de l'application sans perdre en performance.
        </p>

        <h2><i class="fas fa-sync-alt" style="color: #8bc34a;"></i> Haute disponibilité avec réplication</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #8bc34a;">
            MongoDB utilise des ensembles de réplicas pour garantir que les données soient disponibles même en cas de panne. Les données sont dupliquées sur plusieurs serveurs, offrant une tolérance aux pannes.
        </p>

        <h2><i class="fas fa-rocket" style="color: #e91e63;"></i> Performance élevée</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #e91e63;">
            Optimisé pour les charges de lecture et écriture élevées, MongoDB est particulièrement rapide pour les applications nécessitant une faible latence, telles que les sites de e-commerce ou les applications en temps réel.
        </p>

        <h2><i class="fas fa-code-branch" style="color: #9c27b0;"></i> Support pour les données non structurées</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #9c27b0;">
            Parfait pour gérer les données non structurées, MongoDB peut stocker des données variées comme des logs, des données de capteurs, ou des informations de réseaux sociaux, sans avoir besoin d'un format strict.
        </p>

        <h2><i class="fas fa-tools" style="color: #607d8b;"></i> Écosystème riche et intégrations modernes</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #607d8b;">
            MongoDB propose des outils comme MongoDB Atlas pour le cloud, MongoDB Compass pour l’analyse graphique et supporte des langages populaires comme Node.js et Python, facilitant le développement d'applications modernes et robustes.
        </p>
    </div>
</section>
<section id="limitations">
    <h1 style="color: #f44336;">Limitations de MongoDB <i class="fas fa-exclamation-circle" style="color: #f44336;"></i></h1>

    <div class="course-content">
        <p>Bien que MongoDB présente de nombreux avantages, il est important de connaître ses limitations pour faire un choix éclairé. Voici quelques défis courants associés à MongoDB :</p>

        <h2><i class="fas fa-ban" style="color: #ff5722;"></i> Absence de transactions complexes</h2>
        <p style="background-color: #fbe9e7; padding: 10px; border-left: 4px solid #ff5722;">
            MongoDB n'est pas optimisé pour les transactions multi-documents avec garanties ACID (atomicité, cohérence, isolation, durabilité), bien que certaines améliorations aient été apportées. Cela peut limiter son utilisation pour des applications nécessitant des transactions complexes.
        </p>

        <h2><i class="fas fa-database" style="color: #3f51b5;"></i> Consommation d'espace de stockage élevée</h2>
        <p style="background-color: #e8eaf6; padding: 10px; border-left: 4px solid #3f51b5;">
            Les documents BSON, format utilisé par MongoDB, consomment souvent plus d’espace que les enregistrements SQL traditionnels, en particulier pour des applications avec de nombreuses données imbriquées.
        </p>

        <h2><i class="fas fa-balance-scale" style="color: #ff9800;"></i> Limites de cohérence pour certaines applications</h2>
        <p style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            MongoDB privilégie la performance et la flexibilité, ce qui peut entraîner des compromis en matière de cohérence dans les configurations hautement distribuées. Ce manque de cohérence peut être problématique pour des applications nécessitant une précision absolue des données.
        </p>

        <h2><i class="fas fa-link" style="color: #8bc34a;"></i> Gestion de jointures limitée</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            MongoDB ne gère pas les jointures de manière aussi naturelle que les bases de données relationnelles. Bien que l'agrégation <em>lookup</em> permette d'assembler des collections, elle reste moins performante et moins flexible que les jointures SQL.
        </p>

        <h2><i class="fas fa-code" style="color: #9c27b0;"></i> Manque de standardisation des requêtes</h2>
        <p style="background-color: #f3e5f5; padding: 10px; border-left: 4px solid #9c27b0;">
            MongoDB utilise sa propre syntaxe de requête, qui diffère de SQL. Les développeurs doivent apprendre cette syntaxe, ce qui peut limiter la portabilité des compétences et des requêtes entre différents types de bases de données.
        </p>

        <h2><i class="fas fa-dollar-sign" style="color: #607d8b;"></i> Coûts de licence pour MongoDB Enterprise et MongoDB Atlas</h2>
        <p style="background-color: #eceff1; padding: 10px; border-left: 4px solid #607d8b;">
            Bien que MongoDB soit open-source, les versions avancées comme MongoDB Enterprise et MongoDB Atlas incluent des frais pour des fonctionnalités supplémentaires telles que la sécurité avancée et la gestion des clusters, ce qui peut augmenter les coûts d'exploitation.
        </p>
    </div>
</section>
<section id="installation">
    <h1 style="color: #4caf50;">Installation de MongoDB <i class="fas fa-download" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB peut être installé sur plusieurs systèmes d’exploitation. Voici les étapes pour installer MongoDB sur Windows, macOS et Linux.</p>

        <h2><i class="fab fa-windows" style="color: #0078d7;"></i> Installation sur Windows</h2>
        <p style="background-color: #f1f8ff; padding: 10px; border-left: 4px solid #0078d7;">
            1. Téléchargez l'installateur MongoDB depuis le <a href="https://www.mongodb.com/try/download/community" target="_blank" style="color: #0078d7;">site officiel de MongoDB</a>.<br>
            2. Lancez l'installateur et sélectionnez <strong>"Complete"</strong> pour une installation complète.<br>
            3. Cochez <strong>"Install MongoDB as a Service"</strong> pour que MongoDB démarre automatiquement.<br>
            4. Cliquez sur <strong>"Finish"</strong> pour terminer l'installation.
        </p>
        
        <div class="example-box">
            <pre>
# Vérifiez l'installation en exécutant :
mongo --version
            </pre>
        </div>

        <h2><i class="fab fa-apple" style="color: #000;"></i> Installation sur macOS</h2>
        <p style="background-color: #f9f9f9; padding: 10px; border-left: 4px solid #000;">
            1. Ouvrez le terminal et installez <strong>Homebrew</strong> (si non installé) :<br>
            <div class="example-box">
                <pre>
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
                </pre>
            </div>
            2. Utilisez Homebrew pour installer MongoDB Community Edition :<br>
            <div class="example-box">
                <pre>
brew tap mongodb/brew
brew install mongodb-community@5.0
                </pre>
            </div>
            3. Démarrez MongoDB :<br>
            <div class="example-box">
                <pre>
brew services start mongodb/brew/mongodb-community
                </pre>
            </div>
        </p>

        <h2><i class="fab fa-linux" style="color: #ffcc00;"></i> Installation sur Linux</h2>
        <p style="background-color: #f5f5f5; padding: 10px; border-left: 4px solid #ffcc00;">
            1. Importez la clé publique de MongoDB :<br>
            <div class="example-box">
                <pre>
wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -
                </pre>
            </div>
            2. Créez une liste de sources pour MongoDB :<br>
            <div class="example-box">
                <pre>
echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu focal/mongodb-org/5.0 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list
                </pre>
            </div>
            3. Mettez à jour le cache et installez MongoDB :<br>
            <div class="example-box">
                <pre>
sudo apt update
sudo apt install -y mongodb-org
                </pre>
            </div>
            4. Démarrez MongoDB :<br>
            <div class="example-box">
                <pre>
sudo systemctl start mongod
                </pre>
            </div>
        </p>

        <h2><i class="fas fa-check-circle" style="color: #4caf50;"></i> Vérification de l'installation</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #4caf50;">
            Pour vérifier que MongoDB est bien installé, exécutez la commande suivante dans votre terminal ou invite de commande :<br>
            <div class="example-box">
                <pre>
mongo --version
                </pre>
            </div>
            Vous devriez voir la version installée de MongoDB, confirmant que l'installation est réussie.
        </p>
    </div>
</section>
<section id="configuration">
    <h1 style="color: #4caf50;">Configuration de MongoDB <i class="fas fa-cogs" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Une fois MongoDB installé, certaines configurations de base sont nécessaires pour l'adapter à vos besoins et optimiser ses performances. Voici comment configurer MongoDB pour un usage basique.</p>

        <h2><i class="fas fa-folder-open" style="color: #3f51b5;"></i> Répertoires de données et de journaux</h2>
        <p style="background-color: #f1f8ff; padding: 10px; border-left: 4px solid #3f51b5;">
            MongoDB stocke ses données et journaux dans des répertoires par défaut. Vous pouvez personnaliser ces répertoires pour mieux organiser vos données. Par défaut :
        </p>
        <ul>
            <li>**Linux/macOS** : <code>/var/lib/mongo</code> (données), <code>/var/log/mongodb</code> (journaux)</li>
            <li>**Windows** : <code>C:\Program Files\MongoDB\Server\<version>\data</code> (données), <code>C:\Program Files\MongoDB\Server\<version>\log</code> (journaux)</li>
        </ul>
        <p>Pour modifier ces répertoires, accédez au fichier de configuration <code>mongod.conf</code> et mettez à jour les chemins sous les sections <code>storage.dbPath</code> et <code>systemLog.path</code>.</p>
        
        <div class="example-box">
            <pre>
# Exemple de configuration dans mongod.conf
storage:
  dbPath: "/custom/path/to/data"
systemLog:
  destination: file
  path: "/custom/path/to/log/mongodb.log"
            </pre>
        </div>

        <h2><i class="fas fa-shield-alt" style="color: #ff9800;"></i> Activer l'authentification</h2>
        <p style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            Pour sécuriser votre base de données, il est recommandé d’activer l’authentification. Sans authentification, toute personne ayant accès au serveur peut accéder aux données. 
            <br>1. Dans le fichier <code>mongod.conf</code>, ajoutez ou modifiez la ligne suivante :
        </p>
        <div class="example-box">
            <pre>
security:
  authorization: "enabled"
            </pre>
        </div>
        <p>2. Redémarrez MongoDB pour appliquer la configuration.</p>

        <h2><i class="fas fa-user-plus" style="color: #4caf50;"></i> Création d'un utilisateur administrateur</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #4caf50;">
            Une fois l'authentification activée, créez un utilisateur administrateur pour gérer les bases de données :
        </p>
        <div class="example-box">
            <pre>
# Connectez-vous à MongoDB
mongo

# Passez à la base de données d'administration
use admin

# Créez un utilisateur administrateur
db.createUser({
  user: "admin",
  pwd: "votre_mot_de_passe_sécurisé",
  roles: [ { role: "userAdminAnyDatabase", db: "admin" } ]
})
            </pre>
        </div>

        <h2><i class="fas fa-network-wired" style="color: #8bc34a;"></i> Configurer le réseau</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            Par défaut, MongoDB écoute uniquement sur <code>localhost</code> pour des raisons de sécurité. Pour autoriser l'accès distant :
        </p>
        <p>1. Modifiez le fichier <code>mongod.conf</code> :</p>
        <div class="example-box">
            <pre>
net:
  bindIp: 0.0.0.0  # écoute sur toutes les interfaces
            </pre>
        </div>
        <p>2. Redémarrez MongoDB pour appliquer la modification. **Attention :** Autoriser l'accès distant peut exposer votre base de données. Assurez-vous de configurer un pare-feu et d’activer l'authentification.</p>
        
        <h2><i class="fas fa-check-circle" style="color: #4caf50;"></i> Redémarrage de MongoDB</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #4caf50;">
            Après chaque modification de <code>mongod.conf</code>, redémarrez MongoDB pour appliquer les nouvelles configurations :
        </p>
        <div class="example-box">
            <pre>
# Sur Linux/macOS
sudo systemctl restart mongod

# Sur Windows (invite de commande en tant qu'administrateur)
net stop MongoDB
net start MongoDB
            </pre>
        </div>
    </div>
</section>
<section id="compass">
    <h1 style="color: #4caf50;">Utilisation de MongoDB Compass <i class="fas fa-compass" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB Compass est l'interface graphique officielle de MongoDB qui facilite la gestion, la visualisation, et l'analyse de données. Voici un guide pour vous aider à naviguer et utiliser MongoDB Compass efficacement.</p>

        <h2><i class="fas fa-download" style="color: #2196f3;"></i> Installation de MongoDB Compass</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            1. Téléchargez MongoDB Compass depuis le <a href="https://www.mongodb.com/try/download/compass" target="_blank" style="color: #2196f3;">site officiel de MongoDB</a>.<br>
            2. Installez l'application en suivant les instructions selon votre système d'exploitation (Windows, macOS, ou Linux).<br>
            3. Lancez MongoDB Compass après l'installation.
        </p>

        <h2><i class="fas fa-plug" style="color: #ff9800;"></i> Connexion à MongoDB</h2>
        <p style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            1. Ouvrez MongoDB Compass et vous verrez un écran de connexion.<br>
            2. Si vous exécutez MongoDB localement, utilisez l'URI suivant pour vous connecter :<br>
        </p>
        <div class="example-box">
            <pre>
mongodb://localhost:27017
            </pre>
        </div>
        <p>3. Cliquez sur <strong>"Connect"</strong> pour accéder à votre base de données locale.</p>

        <h2><i class="fas fa-database" style="color: #8bc34a;"></i> Navigation et gestion des bases de données</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            Une fois connecté, MongoDB Compass vous permet de visualiser et gérer vos bases de données et collections :
        </p>
        <ul>
            <li><strong>Créer une base de données :</strong> Cliquez sur <strong>"Create Database"</strong>, nommez-la et ajoutez une première collection pour l’initialiser.</li>
            <li><strong>Visualiser les données :</strong> Cliquez sur une collection pour afficher et explorer les documents.</li>
            <li><strong>Rechercher dans les documents :</strong> Utilisez l'onglet <strong>"Filter"</strong> pour appliquer des filtres aux données (par exemple, rechercher des documents avec des critères spécifiques).</li>
        </ul>

        <h2><i class="fas fa-filter" style="color: #9c27b0;"></i> Requêtes et filtres</h2>
        <p style="background-color: #f3e5f5; padding: 10px; border-left: 4px solid #9c27b0;">
            MongoDB Compass propose une interface intuitive pour exécuter des requêtes et filtrer des données :
        </p>
        <ul>
            <li><strong>Filtrage :</strong> Dans l'onglet <strong>"Filter"</strong>, entrez une requête en JSON pour afficher les documents correspondants. Exemple :
                <div class="example-box">
                    <pre>
{ "age": { "$gt": 25 } }
                    </pre>
                </div>
            </li>
            <li><strong>Tri :</strong> Utilisez l'onglet <strong>"Sort"</strong> pour trier les résultats par champ, par exemple par ordre alphabétique ou numérique.</li>
            <li><strong>Projection :</strong> Dans l'onglet <strong>"Project"</strong>, sélectionnez les champs à afficher, ce qui permet de masquer les champs inutiles pour la requête.</li>
        </ul>

        <h2><i class="fas fa-chart-bar" style="color: #673ab7;"></i> Analyser et visualiser les données</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            MongoDB Compass propose des outils d’analyse pour obtenir des statistiques rapides sur les données :
        </p>
        <ul>
            <li><strong>Analyse des documents :</strong> Obtenez un aperçu des champs les plus courants et de leurs types de données.</li>
            <li><strong>Histogrammes et graphiques :</strong> Visualisez des distributions de valeurs, utiles pour analyser les données d’une collection.</li>
            <li><strong>Pipeline d'agrégation :</strong> Créez des agrégations en utilisant l’interface graphique pour explorer plus en profondeur les données sans écrire de code.</li>
        </ul>

        <h2><i class="fas fa-trash-alt" style="color: #f44336;"></i> Supprimer des documents et collections</h2>
        <p style="background-color: #ffebee; padding: 10px; border-left: 4px solid #f44336;">
            Pour supprimer des documents ou des collections, sélectionnez l'élément à supprimer et cliquez sur <strong>"Delete"</strong>. MongoDB Compass permet de supprimer facilement des documents individuels ou des collections entières.
        </p>

        <h2><i class="fas fa-user-shield" style="color: #607d8b;"></i> Sécuriser MongoDB Compass</h2>
        <p style="background-color: #eceff1; padding: 10px; border-left: 4px solid #607d8b;">
            Assurez-vous que votre connexion est sécurisée, surtout lors de connexions à distance. MongoDB Compass prend en charge les connexions SSL/TLS et l'authentification pour protéger vos données.
        </p>
    </div>
</section>
<section id="cloud">
    <h1 style="color: #4caf50;">MongoDB Atlas (Cloud) <i class="fas fa-cloud" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB Atlas est une plateforme de base de données MongoDB gérée dans le cloud. Elle permet de créer, déployer, et gérer des bases de données MongoDB sur des infrastructures cloud comme AWS, Azure, ou Google Cloud Platform. Voici comment démarrer avec MongoDB Atlas :</p>

        <h2><i class="fas fa-user-plus" style="color: #2196f3;"></i> Créer un compte MongoDB Atlas</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            1. Rendez-vous sur <a href="https://www.mongodb.com/cloud/atlas" target="_blank" style="color: #2196f3;">le site officiel de MongoDB Atlas</a>.<br>
            2. Cliquez sur <strong>"Start Free"</strong> pour créer un compte.<br>
            3. Suivez les instructions pour configurer votre compte MongoDB Atlas.
        </p>

        <h2><i class="fas fa-server" style="color: #8bc34a;"></i> Créer un cluster MongoDB</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            Une fois inscrit, créez un cluster pour héberger vos données MongoDB :
        </p>
        <ol>
            <li>Dans le tableau de bord MongoDB Atlas, cliquez sur <strong>"Build a Cluster"</strong>.</li>
            <li>Sélectionnez un fournisseur de cloud (AWS, Azure, ou Google Cloud), une région, et les options de cluster gratuites ou payantes.</li>
            <li>Cliquez sur <strong>"Create Cluster"</strong> et attendez quelques minutes que le cluster soit créé.</li>
        </ol>

        <h2><i class="fas fa-key" style="color: #ff9800;"></i> Configurer les identifiants et l'accès au réseau</h2>
        <p style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            Une fois votre cluster prêt, configurez les paramètres de sécurité :
        </p>
        <ul>
            <li><strong>Créer un utilisateur :</strong> Dans le tableau de bord, allez dans <strong>"Database Access"</strong> et cliquez sur <strong>"Add New Database User"</strong>. Définissez un nom d'utilisateur, un mot de passe sécurisé et les rôles d'accès.</li>
            <li><strong>Configurer l'accès réseau :</strong> Accédez à <strong>"Network Access"</strong> et cliquez sur <strong>"Add IP Address"</strong>. Vous pouvez autoriser votre adresse IP ou permettre l'accès depuis n'importe quelle IP en utilisant <code>0.0.0.0/0</code> (recommandé uniquement pour le développement).</li>
        </ul>

        <h2><i class="fas fa-plug" style="color: #4caf50;"></i> Connexion à MongoDB Atlas</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #4caf50;">
            1. Cliquez sur <strong>"Connect"</strong> dans votre cluster pour obtenir l'URI de connexion.<br>
            2. Choisissez <strong>"Connect Your Application"</strong> pour obtenir un URI à utiliser dans votre code.<br>
            3. Copiez l'URI et remplacez <code>&lt;username&gt;</code> et <code>&lt;password&gt;</code> par vos identifiants de connexion. Par exemple :
        </p>
        <div class="example-box">
            <pre>
mongodb+srv://<username>:<password>@cluster0.mongodb.net/myFirstDatabase?retryWrites=true&w=majority
            </pre>
        </div>

        <h2><i class="fas fa-chart-line" style="color: #673ab7;"></i> Surveillance et sauvegarde des données</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            MongoDB Atlas propose des outils pour surveiller et sauvegarder vos données :
        </p>
        <ul>
            <li><strong>Surveillance :</strong> Accédez aux performances de votre cluster via l'onglet <strong>"Metrics"</strong>, où vous pouvez observer l'utilisation de la CPU, les opérations de lecture/écriture, etc.</li>
            <li><strong>Backups automatiques :</strong> Configurez des sauvegardes automatiques dans l'onglet <strong>"Backups"</strong> pour garantir la sécurité de vos données.</li>
        </ul>

        <h2><i class="fas fa-lock" style="color: #607d8b;"></i> Sécuriser MongoDB Atlas</h2>
        <p style="background-color: #eceff1; padding: 10px; border-left: 4px solid #607d8b;">
            MongoDB Atlas propose plusieurs fonctionnalités de sécurité pour protéger vos données, telles que le chiffrement des données en transit et au repos, l'authentification multi-facteurs, et la gestion des accès basée sur les rôles. Assurez-vous de bien configurer ces options pour une protection optimale.
        </p>
    </div>
</section>
<section id="create-db">
    <h1 style="color: #4caf50;">Création de Base de Données <i class="fas fa-database" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Dans MongoDB, une base de données est automatiquement créée lorsqu'on insère des données dans une collection qui n'existe pas encore. Voici comment créer une base de données, que vous soyez dans l'interface en ligne de commande Mongo Shell, MongoDB Compass, ou MongoDB Atlas.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Utilisation du Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            1. Lancez le Mongo Shell en tapant <code>mongo</code> dans votre terminal.<br>
            2. Utilisez la commande suivante pour sélectionner ou créer une base de données :
        </p>
        <div class="example-box">
            <pre>
use nom_de_ma_base_de_donnees
            </pre>
        </div>
        <p>Si la base de données <code>nom_de_ma_base_de_donnees</code> n'existe pas encore, MongoDB la créera lorsque vous insérerez des documents dans une collection.</p>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Utilisation de MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            MongoDB Compass vous permet de créer une base de données via une interface graphique :
        </p>
        <ol>
            <li>Ouvrez MongoDB Compass et connectez-vous à votre instance MongoDB.</li>
            <li>Cliquez sur <strong>"Create Database"</strong> dans le tableau de bord.</li>
            <li>Entrez un nom pour la base de données et un nom pour la première collection.</li>
            <li>Cliquez sur <strong>"Create Database"</strong> pour valider.</li>
        </ol>

        <h2><i class="fas fa-cloud" style="color: #673ab7;"></i> Utilisation de MongoDB Atlas</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            Dans MongoDB Atlas, vous pouvez créer une base de données directement depuis le navigateur :
        </p>
        <ol>
            <li>Connectez-vous à votre cluster MongoDB Atlas et accédez à l'onglet <strong>"Collections"</strong>.</li>
            <li>Cliquez sur <strong>"Add My Own Data"</strong> pour créer une nouvelle base de données.</li>
            <li>Entrez le nom de la base de données et de la collection initiale, puis cliquez sur <strong>"Create"</strong>.</li>
        </ol>

        <h2><i class="fas fa-check-circle" style="color: #4caf50;"></i> Vérifier la base de données</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #4caf50;">
            Pour confirmer la création de la base de données, utilisez la commande suivante dans le Mongo Shell :
        </p>
        <div class="example-box">
            <pre>
show dbs
            </pre>
        </div>
        <p>Votre nouvelle base de données apparaîtra dans la liste une fois qu'elle contiendra au moins une collection avec des données.</p>
    </div>
</section>
<section id="drop-db">
    <h1 style="color: #f44336;">Suppression de Base de Données <i class="fas fa-trash-alt" style="color: #f44336;"></i></h1>

    <div class="course-content">
        <p>Dans MongoDB, vous pouvez supprimer une base de données en utilisant le Mongo Shell, MongoDB Compass, ou MongoDB Atlas. Voici comment procéder.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Suppression via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            1. Ouvrez le Mongo Shell en tapant <code>mongo</code> dans votre terminal.<br>
            2. Sélectionnez la base de données que vous souhaitez supprimer :
        </p>
        <div class="example-box">
            <pre>
use nom_de_ma_base_de_donnees
            </pre>
        </div>
        <p>3. Utilisez la commande suivante pour supprimer la base de données :</p>
        <div class="example-box">
            <pre>
db.dropDatabase()
            </pre>
        </div>
        <p>MongoDB vous confirmera que la base de données a été supprimée avec succès.</p>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Suppression via MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            1. Ouvrez MongoDB Compass et connectez-vous à votre instance MongoDB.<br>
            2. Sélectionnez la base de données que vous souhaitez supprimer dans la liste.<br>
            3. Cliquez sur l’icône de suppression (<i class="fas fa-trash-alt" style="color: #f44336;"></i>) pour supprimer la base de données, puis confirmez l’action.<br>
        </p>

        <h2><i class="fas fa-cloud" style="color: #673ab7;"></i> Suppression via MongoDB Atlas</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            1. Accédez à votre cluster MongoDB Atlas et allez dans l'onglet <strong>"Collections"</strong>.<br>
            2. Sélectionnez la base de données que vous souhaitez supprimer.<br>
            3. Dans les options de la collection, cliquez sur <strong>"Drop Database"</strong>, puis confirmez la suppression.
        </p>
    </div>
</section>
Création de Collections
<section id="list-db">
    <h1 style="color: #4caf50;">Lister les Bases de Données <i class="fas fa-list" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB vous permet de lister toutes les bases de données présentes sur votre instance. Voici comment visualiser la liste des bases de données disponibles.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Liste des bases de données via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Dans le Mongo Shell, vous pouvez voir toutes les bases de données en exécutant la commande suivante :
        </p>
        <div class="example-box">
            <pre>
show dbs
            </pre>
        </div>
        <p>Cette commande affiche toutes les bases de données avec leur taille respective.</p>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Liste des bases de données via MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            MongoDB Compass affiche automatiquement la liste des bases de données dans le tableau de bord dès que vous vous connectez à votre instance MongoDB. Cliquez sur une base de données pour explorer son contenu.
        </p>

        <h2><i class="fas fa-cloud" style="color: #673ab7;"></i> Liste des bases de données via MongoDB Atlas</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            Dans MongoDB Atlas, accédez à votre cluster et sélectionnez l'onglet <strong>"Collections"</strong>. La liste des bases de données et collections apparaîtra, vous permettant d'explorer chaque base de données en détail.
        </p>
    </div>
</section>
<section id="create-collection">
    <h1 style="color: #4caf50;">Création de Collections <i class="fas fa-folder-plus" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Une collection dans MongoDB est similaire à une table dans une base de données relationnelle. Les collections contiennent des documents, et elles sont créées automatiquement lorsque des documents y sont insérés pour la première fois. Voici comment créer une collection dans Mongo Shell, MongoDB Compass, et MongoDB Atlas.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Création via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Dans Mongo Shell, vous pouvez créer une collection en insérant un document dans une collection inexistante, ou en utilisant la commande <code>createCollection</code> :
        </p>
        <ul>
            <li><strong>1. Créer en insérant un document :</strong> Cette méthode crée automatiquement la collection si elle n'existe pas encore.</li>
        </ul>
        <div class="example-box">
            <pre>
use nom_de_ma_base_de_donnees
db.ma_collection.insertOne({ "nom": "Alice", "age": 25 })
            </pre>
        </div>
        <ul>
            <li><strong>2. Utiliser <code>createCollection</code> :</strong> Vous pouvez aussi créer une collection explicitement :</li>
        </ul>
        <div class="example-box">
            <pre>
db.createCollection("ma_collection")
            </pre>
        </div>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Création via MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            MongoDB Compass offre une interface visuelle pour créer des collections :
        </p>
        <ol>
            <li>Ouvrez MongoDB Compass et connectez-vous à votre instance MongoDB.</li>
            <li>Sélectionnez la base de données où vous souhaitez ajouter la collection.</li>
            <li>Cliquez sur <strong>"Create Collection"</strong> et entrez le nom de la nouvelle collection.</li>
            <li>Cliquez sur <strong>"Create"</strong> pour finaliser.</li>
        </ol>

        <h2><i class="fas fa-cloud" style="color: #673ab7;"></i> Création via MongoDB Atlas</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            Dans MongoDB Atlas, les collections peuvent être créées directement depuis le navigateur :
        </p>
        <ol>
            <li>Accédez à votre cluster MongoDB Atlas et ouvrez l'onglet <strong>"Collections"</strong>.</li>
            <li>Sélectionnez la base de données dans laquelle vous voulez créer une collection.</li>
            <li>Cliquez sur <strong>"Add My Own Data"</strong> si c'est la première collection, ou <strong>"Create Collection"</strong> pour en ajouter une nouvelle.</li>
            <li>Entrez le nom de la collection et cliquez sur <strong>"Create"</strong>.</li>
        </ol>

        <h2><i class="fas fa-check-circle" style="color: #4caf50;"></i> Vérification de la collection</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #4caf50;">
            Pour vérifier la création de la collection dans le Mongo Shell, utilisez la commande suivante :
        </p>
        <div class="example-box">
            <pre>
show collections
            </pre>
        </div>
        <p>La nouvelle collection apparaîtra dans la liste si elle a été créée avec succès.</p>
    </div>
</section>
<section id="drop-collection">
    <h1 style="color: #f44336;">Suppression de Collections <i class="fas fa-trash-alt" style="color: #f44336;"></i></h1>

    <div class="course-content">
        <p>La suppression d'une collection dans MongoDB est une opération simple, mais définitive. Assurez-vous d'avoir sauvegardé les données si nécessaire avant de procéder.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Suppression via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Dans le Mongo Shell, vous pouvez supprimer une collection avec la commande <code>drop</code> :
        </p>
        <div class="example-box">
            <pre>
use nom_de_ma_base_de_donnees
db.ma_collection.drop()
            </pre>
        </div>
        <p>MongoDB affichera un message confirmant la suppression.</p>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Suppression via MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            Dans MongoDB Compass :
        </p>
        <ol>
            <li>Connectez-vous à votre instance et sélectionnez la base de données contenant la collection à supprimer.</li>
            <li>Sélectionnez la collection et cliquez sur <strong>"Drop Collection"</strong>.</li>
            <li>Confirmez la suppression dans la fenêtre de confirmation.</li>
        </ol>

        <h2><i class="fas fa-cloud" style="color: #673ab7;"></i> Suppression via MongoDB Atlas</h2>
        <p style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            Dans MongoDB Atlas :
        </p>
        <ol>
            <li>Accédez à votre cluster MongoDB Atlas, puis ouvrez l'onglet <strong>"Collections"</strong>.</li>
            <li>Sélectionnez la base de données et la collection que vous souhaitez supprimer.</li>
            <li>Cliquez sur <strong>"Drop Collection"</strong> et confirmez l'action.</li>
        </ol>
    </div>
</section>
<section id="indexes">
    <h1 style="color: #4caf50;">Gestion des Index <i class="fas fa-sort" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Les index améliorent les performances de recherche en permettant un accès plus rapide aux données. MongoDB prend en charge différents types d'index pour optimiser les requêtes.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Création d'Index via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Utilisez la méthode <code>createIndex</code> pour créer un index sur un ou plusieurs champs :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.createIndex({ "nom": 1 })
            </pre>
        </div>
        <p>Dans cet exemple, un index est créé sur le champ <code>nom</code> pour des recherches rapides par ordre croissant (1 signifie ascendant).</p>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Gestion des Index via MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            MongoDB Compass offre une interface pour créer et gérer les index :
        </p>
        <ol>
            <li>Ouvrez MongoDB Compass, sélectionnez la collection souhaitée.</li>
            <li>Accédez à l'onglet <strong>"Indexes"</strong> et cliquez sur <strong>"Create Index"</strong>.</li>
            <li>Choisissez le champ et le type d'index (ascendant ou descendant), puis cliquez sur <strong>"Create"</strong>.</li>
        </ol>

        <h2><i class="fas fa-tasks" style="color: #ff9800;"></i> Types d'Index dans MongoDB</h2>
        <ul>
            <li><strong>Index unique :</strong> Assure que chaque valeur dans le champ est unique.</li>
            <li><strong>Index de texte :</strong> Utilisé pour la recherche en texte intégral.</li>
            <li><strong>Index géospatial :</strong> Permet les requêtes de données spatiales (ex. : localisation).</li>
            <li><strong>Index composé :</strong> Indexe plusieurs champs pour optimiser les requêtes combinées.</li>
        </ul>

        <h2><i class="fas fa-eraser" style="color: #f44336;"></i> Suppression d'Index</h2>
        <p>Vous pouvez supprimer un index en utilisant la commande suivante dans le Mongo Shell :</p>
        <div class="example-box">
            <pre>
db.ma_collection.dropIndex("nom_1")
            </pre>
        </div>
        <p>Remplacez <code>nom_1</code> par le nom de l'index que vous souhaitez supprimer.</p>
    </div>
</section>
<section id="sharding">
    <h1 style="color: #673ab7;">Sharding et Scalabilité <i class="fas fa-network-wired" style="color: #673ab7;"></i></h1>

    <div class="course-content">
        <p>Le sharding permet à MongoDB de répartir les données sur plusieurs serveurs, ce qui améliore la scalabilité et les performances pour des bases de données volumineuses.</p>

        <h2><i class="fas fa-sitemap" style="color: #2196f3;"></i> Introduction au Sharding</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Le sharding divise une collection en fragments, distribués sur différents nœuds. Chaque fragment contient une portion des données, ce qui permet de répartir la charge et d'augmenter la capacité.
        </p>

        <h2><i class="fas fa-cog" style="color: #8bc34a;"></i> Configuration du Sharding</h2>
        <p>Voici les étapes de base pour activer le sharding dans MongoDB :</p>
        <ol>
            <li><strong>Configurer un cluster :</strong> MongoDB doit être configuré en tant que cluster sharded avec des shards, des serveurs de configuration, et un routeur (mongos).</li>
            <li><strong>Activer le sharding pour une base de données :</strong> Utilisez la commande suivante :</li>
        </ol>
        <div class="example-box">
            <pre>
sh.enableSharding("nom_de_ma_base_de_donnees")
            </pre>
        </div>
        <p>3. <strong>Choisir une clé de shard :</strong> Sélectionnez un champ utilisé fréquemment dans les requêtes comme clé de shard.</p>
        <div class="example-box">
            <pre>
db.ma_collection.createIndex({ "champ_de_shard": 1 })
sh.shardCollection("nom_de_ma_base_de_donnees.ma_collection", { "champ_de_shard": 1 })
            </pre>
        </div>

        <h2><i class="fas fa-tachometer-alt" style="color: #ff9800;"></i> Avantages du Sharding</h2>
        <ul>
            <li><strong>Scalabilité horizontale :</strong> Permet de répartir les données et les requêtes sur plusieurs serveurs.</li>
            <li><strong>Répartition de la charge :</strong> Améliore la performance en répartissant le trafic.</li>
            <li><strong>Haute disponibilité :</strong> Les clusters sharded peuvent être configurés avec des réplicas pour une redondance accrue.</li>
        </ul>
    </div>
</section>
<section id="insert-doc">
    <h1 style="color: #4caf50;">Insertion de Documents <i class="fas fa-plus-circle" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Dans MongoDB, les données sont stockées sous forme de documents JSON. Vous pouvez insérer des documents dans une collection via le Mongo Shell, MongoDB Compass, ou MongoDB Atlas.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Insertion via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Utilisez la méthode <code>insertOne</code> pour insérer un document, ou <code>insertMany</code> pour plusieurs documents :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.insertOne({ "nom": "Alice", "age": 25, "ville": "Paris" })

db.ma_collection.insertMany([
    { "nom": "Bob", "age": 30, "ville": "Lyon" },
    { "nom": "Charlie", "age": 35, "ville": "Marseille" }
])
            </pre>
        </div>

        <h2><i class="fas fa-compass" style="color: #8bc34a;"></i> Insertion via MongoDB Compass</h2>
        <p style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            1. Connectez-vous à MongoDB Compass et sélectionnez la collection.<br>
            2. Cliquez sur <strong>"Insert Document"</strong> et entrez le document au format JSON.<br>
            3. Cliquez sur <strong>"Insert"</strong> pour ajouter le document à la collection.
        </p>
    </div>
</section>
<section id="update-doc">
    <h1 style="color: #ff9800;">Mise à Jour de Documents <i class="fas fa-edit" style="color: #ff9800;"></i></h1>

    <div class="course-content">
        <p>MongoDB propose plusieurs méthodes pour mettre à jour les documents dans une collection, notamment <code>updateOne</code> pour un seul document et <code>updateMany</code> pour plusieurs documents.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Mise à Jour via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Pour mettre à jour un document spécifique, utilisez <code>$set</code> pour modifier les champs :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.updateOne(
    { "nom": "Alice" },
    { $set: { "ville": "Lille" } }
)

db.ma_collection.updateMany(
    { "ville": "Lyon" },
    { $set: { "age": 32 } }
)
            </pre>
        </div>
    </div>
</section>
<section id="delete-doc">
    <h1 style="color: #f44336;">Suppression de Documents <i class="fas fa-trash" style="color: #f44336;"></i></h1>

    <div class="course-content">
        <p>Vous pouvez supprimer des documents dans MongoDB en utilisant les méthodes <code>deleteOne</code> pour un seul document ou <code>deleteMany</code> pour plusieurs documents.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Suppression via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Utilisez <code>deleteOne</code> ou <code>deleteMany</code> pour supprimer des documents :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.deleteOne({ "nom": "Alice" })

db.ma_collection.deleteMany({ "ville": "Lyon" })
            </pre>
        </div>
    </div>
</section>
<section id="find-doc">
    <h1 style="color: #4caf50;">Recherche de Documents <i class="fas fa-search" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB offre des méthodes de recherche puissantes, telles que <code>find</code> et <code>findOne</code>, pour localiser des documents spécifiques dans une collection.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Recherche via le Mongo Shell</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Utilisez <code>find</code> pour rechercher des documents qui correspondent à un critère :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.find({ "ville": "Paris" })

db.ma_collection.find({ "age": { $gt: 25 } })
            </pre>
        </div>
        <p>La méthode <code>find</code> retourne tous les documents qui correspondent au critère donné.</p>
    </div>
</section>
<section id="schema-design">
    <h1 style="color: #9c27b0;">Conception de Schéma <i class="fas fa-project-diagram" style="color: #9c27b0;"></i></h1>

    <div class="course-content">
        <p>MongoDB est une base de données NoSQL sans schéma strict, mais il est recommandé de concevoir un schéma logique pour structurer efficacement les données et optimiser les performances.</p>

        <h2><i class="fas fa-cogs" style="color: #ff9800;"></i> Principes de Conception</h2>
        <ul>
            <li><strong>Modélisation selon les requêtes :</strong> Structurez les documents en fonction des requêtes les plus fréquentes.</li>
            <li><strong>Imbrication vs Référence :</strong> Imbriquez les données lorsqu’elles sont fortement liées ; utilisez des références pour des relations plus lâches.</li>
            <li><strong>Optimisation de la taille des documents :</strong> Évitez les documents trop volumineux pour réduire le temps de traitement.</li>
            <li><strong>Utilisation des Index :</strong> Planifiez les champs qui nécessitent des index pour des recherches rapides.</li>
        </ul>

        <h2><i class="fas fa-lightbulb" style="color: #4caf50;"></i> Exemple de Schéma</h2>
        <p>Voici un exemple de schéma MongoDB pour une application de blog :</p>
        <div class="example-box">
            <pre>
{
    "_id": ObjectId("..."),
    "auteur": "John Doe",
    "titre": "Comment utiliser MongoDB",
    "contenu": "Introduction à MongoDB...",
    "tags": ["MongoDB", "NoSQL", "Base de Données"],
    "commentaires": [
        { "utilisateur": "Alice", "commentaire": "Super article !" },
        { "utilisateur": "Bob", "commentaire": "Merci pour les infos." }
    ],
    "date_creation": ISODate("2024-11-03T00:00:00Z")
}
            </pre>
        </div>
    </div>
</section>
<section id="query">
    <h1 style="color: #4caf50;">Requêtes MongoDB <i class="fas fa-database" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB offre un langage de requêtes puissant pour extraire et manipuler des données. Les requêtes MongoDB utilisent une syntaxe JSON pour définir des critères et des opérations de recherche.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Exemples de Requêtes de Base</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            MongoDB permet d'utiliser plusieurs opérateurs pour filtrer les documents :
        </p>
        <div class="example-box">
            <pre>
# Requête pour trouver les documents où "age" est supérieur à 25
db.ma_collection.find({ "age": { "$gt": 25 } })

# Requête pour trouver les documents où "ville" est soit "Paris" soit "Lyon"
db.ma_collection.find({ "ville": { "$in": ["Paris", "Lyon"] } })

# Requête pour les documents où "nom" commence par "A"
db.ma_collection.find({ "nom": { "$regex": "^A" } })
            </pre>
        </div>
    </div>
</section>
<section id="aggregation">
    <h1 style="color: #673ab7;">Aggregation Framework <i class="fas fa-chart-pie" style="color: #673ab7;"></i></h1>

    <div class="course-content">
        <p>Le Framework d'Agrégation de MongoDB permet de transformer et d'agréger des données pour créer des rapports et des analyses complexes. Il utilise des "pipelines" d'étapes pour traiter les données.</p>

        <h2><i class="fas fa-tools" style="color: #ff9800;"></i> Exemple de Pipeline d'Agrégation</h2>
        <p style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            Voici un exemple de pipeline d'agrégation pour calculer l'âge moyen des utilisateurs par ville :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.aggregate([
    { $group: { "_id": "$ville", "age_moyen": { $avg: "$age" } } }
])
            </pre>
        </div>
        <p>Cette requête groupe les documents par <code>ville</code> et calcule l'âge moyen pour chaque groupe.</p>

        <h2><i class="fas fa-layer-group" style="color: #8bc34a;"></i> Étapes d'Agrégation</h2>
        <ul>
            <li><strong>$match :</strong> Filtrer les documents.</li>
            <li><strong>$group :</strong> Grouper les documents et appliquer des opérations d'agrégation (ex : <code>$sum</code>, <code>$avg</code>).</li>
            <li><strong>$sort :</strong> Trier les résultats.</li>
            <li><strong>$project :</strong> Sélectionner les champs à afficher.</li>
        </ul>
    </div>
</section>
<section id="text-search">
    <h1 style="color: #9c27b0;">Recherche Textuelle <i class="fas fa-search" style="color: #9c27b0;"></i></h1>

    <div class="course-content">
        <p>MongoDB supporte la recherche en texte intégral, permettant de rechercher des mots clés dans les champs texte des documents. Cette fonctionnalité utilise des index de texte.</p>

        <h2><i class="fas fa-terminal" style="color: #2196f3;"></i> Création d'un Index de Texte</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Pour activer la recherche textuelle, créez un index de texte sur le champ souhaité :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.createIndex({ "description": "text" })
            </pre>
        </div>

        <h2><i class="fas fa-search" style="color: #4caf50;"></i> Effectuer une Recherche Textuelle</h2>
        <p>Une fois l'index créé, utilisez <code>$text</code> pour rechercher des mots clés :</p>
        <div class="example-box">
            <pre>
db.ma_collection.find({ $text: { $search: "MongoDB" } })
            </pre>
        </div>
        <p>Cette requête retourne tous les documents contenant le mot "MongoDB" dans le champ <code>description</code>.</p>
    </div>
</section>
<section id="geospatial">
    <h1 style="color: #4caf50;">Requêtes Géospatiales <i class="fas fa-map-marker-alt" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB prend en charge les requêtes géospatiales, qui permettent de stocker et de manipuler des données géographiques comme les emplacements et les coordonnées.</p>

        <h2><i class="fas fa-map" style="color: #2196f3;"></i> Création d'un Index Géospatial</h2>
        <p style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            Pour utiliser les requêtes géospatiales, créez un index géospatial sur le champ contenant les coordonnées :
        </p>
        <div class="example-box">
            <pre>
db.ma_collection.createIndex({ "emplacement": "2dsphere" })
            </pre>
        </div>

        <h2><i class="fas fa-search-location" style="color: #8bc34a;"></i> Exemple de Requête Géospatiale</h2>
        <p>Voici comment rechercher les documents situés dans un rayon de 5 km d'un emplacement spécifique :</p>
        <div class="example-box">
            <pre>
db.ma_collection.find({
    "emplacement": {
        $near: {
            $geometry: { type: "Point", coordinates: [48.8566, 2.3522] },
            $maxDistance: 5000
        }
    }
})
            </pre>
        </div>
        <p>Cette requête retourne les documents situés à moins de 5 km des coordonnées de Paris (48.8566, 2.3522).</p>
    </div>
</section>
<section id="index-optimization">
    <h1 style="color: #4caf50;">Optimisation des Index <i class="fas fa-sort" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Les index permettent d'accélérer les requêtes en MongoDB, mais un index mal conçu peut ralentir les performances. Voici quelques bonnes pratiques pour optimiser les index.</p>

        <h2><i class="fas fa-tachometer-alt" style="color: #ff9800;"></i> Bonnes Pratiques pour les Index</h2>
        <ul style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            <li><strong>Limiter le nombre d'index :</strong> Évitez de créer des index sur chaque champ. Choisissez ceux utilisés fréquemment dans les requêtes.</li>
            <li><strong>Utiliser les index composés :</strong> Créez des index composés lorsque les requêtes utilisent plusieurs champs (ex. : <code>{ "nom": 1, "age": 1 }</code>).</li>
            <li><strong>Index partiels :</strong> Utilisez des index partiels pour indexer uniquement une portion des documents, ce qui réduit l'espace de stockage.</li>
        </ul>

        <h2><i class="fas fa-wrench" style="color: #8bc34a;"></i> Vérification de l'Efficacité des Index</h2>
        <p>Vous pouvez utiliser <code>explain()</code> pour vérifier si les index sont utilisés efficacement par les requêtes.</p>
        <div class="example-box">
            <pre>
db.ma_collection.find({ "nom": "Alice" }).explain("executionStats")
            </pre>
        </div>
        <p>Le retour de <code>executionStats</code> affiche si un index est utilisé pour la requête et fournit des statistiques d'exécution.</p>
    </div>
</section>
<section id="performance-tuning">
    <h1 style="color: #673ab7;">Ajustement de Performance <i class="fas fa-cogs" style="color: #673ab7;"></i></h1>

    <div class="course-content">
        <p>L'ajustement des performances est essentiel pour les bases de données volumineuses et les applications nécessitant des temps de réponse rapides. Voici quelques techniques pour améliorer les performances en MongoDB.</p>

        <h2><i class="fas fa-database" style="color: #2196f3;"></i> Techniques d'Ajustement</h2>
        <ul style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            <li><strong>Limitez la taille des documents :</strong> MongoDB est plus performant avec des documents de taille modérée (moins de 16 Mo).</li>
            <li><strong>Utilisez le bon type de stockage :</strong> Sélectionnez WiredTiger pour les performances élevées et la compression des données.</li>
            <li><strong>Optimisez les requêtes :</strong> Utilisez <code>$project</code> pour limiter les champs retournés et <code>$match</code> pour filtrer dès le début d'un pipeline d'agrégation.</li>
        </ul>

        <h2><i class="fas fa-memory" style="color: #4caf50;"></i> Surveillance des Performances</h2>
        <p>Surveillez régulièrement les performances de MongoDB pour identifier les goulots d'étranglement. Vous pouvez utiliser MongoDB Atlas pour accéder à des statistiques de performances en temps réel, ou utiliser la commande suivante dans le Mongo Shell pour les métriques de base :</p>
        <div class="example-box">
            <pre>
db.serverStatus()
            </pre>
        </div>
    </div>
</section>
<section id="query-profiling">
    <h1 style="color: #f44336;">Profilage des Requêtes <i class="fas fa-chart-line" style="color: #f44336;"></i></h1>

    <div class="course-content">
        <p>Le profilage des requêtes vous aide à identifier les requêtes lentes et à analyser leur impact sur la performance. MongoDB propose un outil de profilage intégré pour surveiller les requêtes.</p>

        <h2><i class="fas fa-user-clock" style="color: #ff9800;"></i> Activer le Profiling</h2>
        <p>Le profiler de MongoDB a trois niveaux :</p>
        <ul style="background-color: #fff3e0; padding: 10px; border-left: 4px solid #ff9800;">
            <li><strong>0 :</strong> Désactivé (profiling inactif).</li>
            <li><strong>1 :</strong> Log les requêtes lentes (au-dessus d'un seuil défini).</li>
            <li><strong>2 :</strong> Log toutes les requêtes.</li>
        </ul>
        <p>Pour activer le niveau 1 ou 2, utilisez :</p>
        <div class="example-box">
            <pre>
db.setProfilingLevel(1, { slowms: 100 })
            </pre>
        </div>
        <p>Ici, les requêtes supérieures à 100 ms seront loggées.</p>

        <h2><i class="fas fa-search" style="color: #2196f3;"></i> Afficher les Requêtes Profilées</h2>
        <p>Les requêtes profilées sont stockées dans la collection <code>system.profile</code> de chaque base de données. Pour afficher les requêtes profilées :</p>
        <div class="example-box">
            <pre>
db.system.profile.find().sort({ ts: -1 }).limit(5)
            </pre>
        </div>
        <p>Cette commande retourne les 5 requêtes les plus récentes avec des informations détaillées sur le temps d'exécution et les index utilisés.</p>
    </div>
</section>
<section id="auth">
    <h1 style="color: #4caf50;">Authentification et Autorisation <i class="fas fa-lock" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Pour sécuriser MongoDB, il est essentiel de mettre en place l'authentification et l'autorisation. Cela permet de contrôler qui a accès aux données et quelles actions ils peuvent effectuer.</p>

        <h2><i class="fas fa-user-shield" style="color: #ff9800;"></i> Activer l'Authentification</h2>
        <p>Pour activer l'authentification, modifiez le fichier de configuration <code>mongod.conf</code> en ajoutant la ligne suivante :</p>
        <div class="example-box">
            <pre>
security:
  authorization: "enabled"
            </pre>
        </div>
        <p>Redémarrez MongoDB pour appliquer cette modification.</p>

        <h2><i class="fas fa-user-plus" style="color: #2196f3;"></i> Création d'Utilisateurs</h2>
        <p>Après avoir activé l'authentification, créez un utilisateur avec des rôles spécifiques :</p>
        <div class="example-box">
            <pre>
use admin
db.createUser({
    user: "adminUser",
    pwd: "votre_mot_de_passe",
    roles: [ { role: "userAdminAnyDatabase", db: "admin" } ]
})
            </pre>
        </div>
        <p>Les utilisateurs peuvent être assignés à des rôles spécifiques, comme <code>read</code> ou <code>readWrite</code>, pour restreindre leurs privilèges.</p>
    </div>
</section>
<section id="backup">
    <h1 style="color: #673ab7;">Sauvegarde et Restauration <i class="fas fa-database" style="color: #673ab7;"></i></h1>

    <div class="course-content">
        <p>Les sauvegardes sont essentielles pour éviter la perte de données. MongoDB offre des outils pour sauvegarder et restaurer les bases de données de manière fiable.</p>

        <h2><i class="fas fa-save" style="color: #4caf50;"></i> Sauvegarde avec <code>mongodump</code></h2>
        <p>La commande <code>mongodump</code> permet de sauvegarder une base de données en créant un fichier de dump :</p>
        <div class="example-box">
            <pre>
mongodump --db nom_de_ma_base --out /chemin/vers/dossier_sauvegarde
            </pre>
        </div>
        <p>Cette commande crée un dossier contenant des fichiers BSON pour chaque collection.</p>

        <h2><i class="fas fa-undo" style="color: #f44336;"></i> Restauration avec <code>mongorestore</code></h2>
        <p>Pour restaurer une base de données, utilisez la commande <code>mongorestore</code> en pointant vers le dossier de sauvegarde :</p>
        <div class="example-box">
            <pre>
mongorestore --db nom_de_ma_base /chemin/vers/dossier_sauvegarde/nom_de_ma_base
            </pre>
        </div>
        <p>Cette commande restaure toutes les collections de la base de données spécifiée.</p>
    </div>
</section>
<section id="replication">
    <h1 style="color: #4caf50;">Réplication et Haute Disponibilité <i class="fas fa-server" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>La réplication permet de dupliquer les données sur plusieurs serveurs, offrant une haute disponibilité et une tolérance aux pannes.</p>

        <h2><i class="fas fa-sync-alt" style="color: #2196f3;"></i> Configuration d'un Replica Set</h2>
        <p>Un <em>replica set</em> est un groupe de serveurs qui conserve les mêmes données, avec un nœud primaire et des nœuds secondaires. Voici les étapes de base pour configurer un <em>replica set</em> :</p>
        <ol style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            <li>Démarrez chaque instance MongoDB avec l'option <code>--replSet</code> :</li>
        </ol>
        <div class="example-box">
            <pre>
mongod --replSet "nom_du_replica_set" --port 27017 --dbpath /chemin/vers/db1
mongod --replSet "nom_du_replica_set" --port 27018 --dbpath /chemin/vers/db2
mongod --replSet "nom_du_replica_set" --port 27019 --dbpath /chemin/vers/db3
            </pre>
        </div>
        <ol start="2">
            <li>Connectez-vous à une instance et initialisez le replica set :</li>
        </ol>
        <div class="example-box">
            <pre>
rs.initiate({
    _id: "nom_du_replica_set",
    members: [
        { _id: 0, host: "localhost:27017" },
        { _id: 1, host: "localhost:27018" },
        { _id: 2, host: "localhost:27019" }
    ]
})
            </pre>
        </div>
        <p>Le replica set est maintenant configuré avec un nœud primaire et deux secondaires.</p>

        <h2><i class="fas fa-shield-alt" style="color: #8bc34a;"></i> Avantages de la Réplication</h2>
        <ul style="background-color: #e8f5e9; padding: 10px; border-left: 4px solid #8bc34a;">
            <li><strong>Haute disponibilité :</strong> Les données sont disponibles même si un nœud tombe en panne.</li>
            <li><strong>Lecture en répartition :</strong> Les nœuds secondaires peuvent servir aux requêtes en lecture pour répartir la charge.</li>
            <li><strong>Protection des données :</strong> Les données sont dupliquées, réduisant le risque de perte.</li>
        </ul>
    </div>
</section>
<section id="mongoose">
    <h1 style="color: #4caf50;">Utilisation avec Mongoose <i class="fas fa-database" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>Mongoose est une bibliothèque Node.js populaire pour interagir avec MongoDB. Elle fournit une interface basée sur des schémas pour structurer les données et simplifie les opérations CRUD.</p>

        <h2><i class="fas fa-file-alt" style="color: #ff9800;"></i> Installation de Mongoose</h2>
        <p>Installez Mongoose dans votre projet Node.js :</p>
        <div class="example-box">
            <pre>
npm install mongoose
            </pre>
        </div>

        <h2><i class="fas fa-database" style="color: #2196f3;"></i> Connexion à MongoDB avec Mongoose</h2>
        <p>Une fois installé, utilisez Mongoose pour vous connecter à MongoDB :</p>
        <div class="example-box">
            <pre>
const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/ma_base', {
    useNewUrlParser: true,
    useUnifiedTopology: true
}).then(() => console.log('Connexion réussie'))
  .catch((error) => console.error('Erreur de connexion:', error));
            </pre>
        </div>

        <h2><i class="fas fa-drafting-compass" style="color: #8bc34a;"></i> Définir un Schéma et un Modèle</h2>
        <p>Créez un schéma et un modèle pour structurer les données :</p>
        <div class="example-box">
            <pre>
const utilisateurSchema = new mongoose.Schema({
    nom: String,
    age: Number,
    ville: String
});

const Utilisateur = mongoose.model('Utilisateur', utilisateurSchema);
            </pre>
        </div>
        <p>Ce modèle permet de gérer les documents dans la collection <code>utilisateurs</code> avec les propriétés définies.</p>
    </div>
</section>
<section id="nodejs">
    <h1 style="color: #673ab7;">MongoDB avec Node.js <i class="fas fa-code" style="color: #673ab7;"></i></h1>

    <div class="course-content">
        <p>Node.js offre une connexion native à MongoDB via le <code>mongodb</code> client, permettant d'effectuer des opérations directement sur la base de données.</p>

        <h2><i class="fas fa-terminal" style="color: #ff9800;"></i> Installation du Client MongoDB</h2>
        <p>Installez le package <code>mongodb</code> dans votre projet Node.js :</p>
        <div class="example-box">
            <pre>
npm install mongodb
            </pre>
        </div>

        <h2><i class="fas fa-database" style="color: #4caf50;"></i> Connexion à MongoDB</h2>
        <p>Utilisez le client MongoDB pour vous connecter à votre base de données :</p>
        <div class="example-box">
            <pre>
const { MongoClient } = require('mongodb');
const uri = 'mongodb://localhost:27017';
const client = new MongoClient(uri);

async function run() {
    try {
        await client.connect();
        console.log('Connexion réussie');
        const db = client.db('ma_base');
        const collection = db.collection('utilisateurs');
        // Opérations avec la collection
    } finally {
        await client.close();
    }
}

run().catch(console.error);
            </pre>
        </div>
    </div>
</section>
<section id="data-pipelines">
    <h1 style="color: #9c27b0;">Pipelines de Données <i class="fas fa-project-diagram" style="color: #9c27b0;"></i></h1>

    <div class="course-content">
        <p>Les pipelines de données en MongoDB permettent de traiter des flux de données en étapes séquentielles, ce qui est utile pour des transformations, des agrégations et des analyses complexes.</p>

        <h2><i class="fas fa-layer-group" style="color: #ff9800;"></i> Création d'un Pipeline d'Agrégation</h2>
        <p>Voici un exemple de pipeline pour calculer le nombre d'utilisateurs par ville :</p>
        <div class="example-box">
            <pre>
db.utilisateurs.aggregate([
    { $group: { _id: "$ville", count: { $sum: 1 } } },
    { $sort: { count: -1 } }
])
            </pre>
        </div>
        <p>Ce pipeline groupe les utilisateurs par ville, compte le nombre de documents dans chaque groupe, et les trie par ordre décroissant.</p>

        <h2><i class="fas fa-cogs" style="color: #4caf50;"></i> Étapes Communes dans les Pipelines</h2>
        <ul>
            <li><strong>$match :</strong> Filtre les documents en amont.</li>
            <li><strong>$group :</strong> Groupe les documents et applique des opérations d'agrégation.</li>
            <li><strong>$sort :</strong> Trie les résultats.</li>
            <li><strong>$lookup :</strong> Permet de joindre des collections.</li>
        </ul>
    </div>
</section>
<section id="analytics">
    <h1 style="color: #4caf50;">Intégration avec Outils d'Analyse <i class="fas fa-chart-line" style="color: #4caf50;"></i></h1>

    <div class="course-content">
        <p>MongoDB peut être intégré avec divers outils d'analyse pour fournir des insights avancés et générer des rapports.</p>

        <h2><i class="fas fa-link" style="color: #2196f3;"></i> Intégration avec Tableau</h2>
        <p>Tableau permet de se connecter à MongoDB via MongoDB Connector ou en important des données CSV générées :</p>
        <ul style="background-color: #e3f2fd; padding: 10px; border-left: 4px solid #2196f3;">
            <li>Exportez les données de MongoDB en CSV avec <code>mongoexport</code>.</li>
            <li>Importez le fichier CSV dans Tableau pour la visualisation et l'analyse.</li>
        </ul>

        <h2><i class="fas fa-cogs" style="color: #673ab7;"></i> Intégration avec Apache Spark</h2>
        <p>MongoDB peut être intégré avec Apache Spark pour le traitement de données à grande échelle :</p>
        <ul style="background-color: #ede7f6; padding: 10px; border-left: 4px solid #673ab7;">
            <li>Installez le <code>mongo-spark-connector</code> pour accéder aux données MongoDB depuis Spark.</li>
            <li>Utilisez Spark pour effectuer des calculs distribués et des analyses avancées.</li>
        </ul>
    </div>
</section>

    </div>
</div>

<!-- Bootstrap JS (optional if you want responsive behavior) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
