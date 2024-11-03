<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur SQL</title>
    <!-- Bootstrap pour la mise en page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php'; ?>

<!-- Sidebar -->
<div class="sidebar">
    <a href="#introduction-sql"><i class="fas fa-book-open"></i> Introduction à SQL</a>
    
    <!-- Concepts de Base -->
    <button class="dropdown-btn"><i class="fas fa-database"></i> Concepts de Base  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#tables">Tables et Relations</a>
        <a href="#requete">Requêtes SQL de Base</a>
        <a href="#types-donnees">Types de Données</a>
        <a href="#cles-primaires-etrangeres">Clés Primaires et Étrangères</a>
        <a href="#contraintes">Contraintes (PRIMARY, UNIQUE, FOREIGN)</a>
    </div>
    
    <!-- Manipulation de Données -->
    <button class="dropdown-btn"><i class="fas fa-cogs"></i> Manipulation de Données  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#insert">INSERT</a>
        <a href="#update">UPDATE</a>
        <a href="#delete">DELETE</a>
        <a href="#select">SELECT</a>
    </div>
    
    <!-- Requêtes Avancées -->
    <button class="dropdown-btn"><i class="fas fa-filter"></i> Requêtes Avancées  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#jointures">Jointures (INNER, LEFT, RIGHT, FULL)</a>
        <a href="#groupby">GROUP BY</a>
        <a href="#orderby">ORDER BY</a>
        <a href="#having">HAVING</a>
        <a href="#sous-requetes">Sous-requêtes</a>
    </div>
    
    <!-- Fonctions SQL -->
    <button class="dropdown-btn"><i class="fas fa-calculator"></i> Fonctions SQL  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#fonctions-aggregats">Fonctions d’Agrégats (COUNT, SUM, AVG)</a>
        <a href="#fonctions-texte">Fonctions Texte (UPPER, LOWER, CONCAT)</a>
        <a href="#fonctions-date">Fonctions de Date (NOW, DATEADD, DATEDIFF)</a>
        <a href="#fonctions-conversion">Fonctions de Conversion (CAST, CONVERT)</a>
    </div>
    
    <!-- Gestion des Bases de Données -->
    <button class="dropdown-btn"><i class="fas fa-server"></i> Gestion des Bases de Données  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#creation-db">Création et Suppression de Base de Données</a>
        <a href="#creation-tables">Création et Suppression de Tables</a>
        <a href="#indexation">Indexation</a>
        <a href="#transactions">Transactions (COMMIT, ROLLBACK)</a>
        <a href="#vues">Vues</a>
        <a href="#procedures">Procédures Stockées</a>
        <a href="#triggers">Triggers</a>
    </div>
    
    <!-- Sécurité et Optimisation -->
    <button class="dropdown-btn"><i class="fas fa-shield-alt"></i> Sécurité et Optimisation  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#securite">Sécurité (Permissions, Rôles)</a>
        <a href="#optimisation-requetes">Optimisation des Requêtes</a>
        <a href="#injections-sql">Protection contre les Injections SQL</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-desktop"></i> Exercices  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <button class="dropdown-btn">Exercices Concept de base  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="exercice_sql/exercice_sql_tables_relations.php">Exercice Tables et Relations</a>
            <a href="exercice_sql/exercice_sql_requetes.php">Exercice Requêtes de base</a>
            <a href="exercice_sql/exercice_sql_types_donnees.php">Exercice Type de données</a>
            <a href="exercice_sql/exercice_sql_cles.php">Exercice Clés primaires et Etrangères</a>
            <a href="exercice_sql/exercice_sql_contraintes.php">Exercice Contraintes</a>
        </div>

        <button class="dropdown-btn">Exercices Manipulation de données  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="exercice_sql/exercice_sql_insert.php">Exercice INSERT</a>
            <a href="exercice_sql/exercice_sql_update.php">Exercice UPDATE</a>
            <a href="exercice_sql/exercice_sql_delete.php">Exercice DELETE</a>
            <a href="exercice_sql/exercice_sql_select.php">Exercice SELECT</a>
        </div>

        <button class="dropdown-btn">Exercices Requêtes Avancées  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="exercice_sql/exercice_sql_jointures.php">Exercice Jointures (INNER, LEFT, RIGHT, FULL)</a>
            <a href="exercice_sql/exercice_sql_groupeby.php">Exercice GROUP BY</a>
            <a href="exercice_sql/exercice_sql_orderby.php">Exercice ORDER BY</a>
            <a href="exercice_sql/exercice_sql_having.php">Exercice HAVING</a>
            <a href="exercice_sql/exercice_sql_sous-requetes.php">Exercice Sous-requêtes</a>
        </div>

        <button class="dropdown-btn">Exercices Fonctions SQL  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
        <a href="exercice_sql/exercice_fonctions_aggregats.php">Exercice Fonctions d’Agrégats (COUNT, SUM, AVG)</a>
        <a href="exercice_sql/exercice_fonctions_texte.php">Exercice Fonctions Texte (UPPER, LOWER, CONCAT)</a>
        <a href="exercice_sql/exercice_fonctions_date.php">Exercice Fonctions de Date (NOW, DATEADD, DATEDIFF)</a>
        <a href="exercice_sql/exercice_fonctions_conversion.php">Exercice Fonctions de Conversion (CAST, CONVERT)</a>
        </div>

        <button class="dropdown-btn">Exercices Gestion des Bases de Données  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
        <a href="exercice_sql/creation-db.php">Exercice création et suppression de base de données</a>
        <a href="exercice_sql/creation-tables.php">Exercice création et suppression de tables</a>
        <a href="exercice_sql/indexation.php">Exercice indexation</a>
        <a href="exercice_sql/transactions.php">Exercice transactions (COMMIT, ROLLBACK)</a>
        <a href="exercice_sql/vues.php">Exercice vues</a>
        <a href="exercice_sql/procedures.php">Exercice procédures stockées</a>
        <a href="exercice_sql/triggers.php">Exercice triggers</a>
        </div>

        <button class="dropdown-btn">Exercices Sécurité et Optimisation  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercice_sql/securite.php">Exercice Sécurité (Permissions, Rôles)</a>
        <a href="exercice_sql/optimisation-requetes.php">Exercice Optimisation des Requêtes</a>
        <a href="exercice_sql/injections-sql.php">Exercice Protection contre les Injections SQL</a>
    </div>
    </div>
</div>


<!-- Contenu de la page -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">

    <div class="content-section" id="introduction-sql" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Introduction à SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        <strong>SQL</strong> (Structured Query Language) est un langage standardisé utilisé pour interagir avec les bases de données relationnelles. 
        Il permet aux utilisateurs de créer, lire, mettre à jour et supprimer des données (opérations connues sous le nom de CRUD) dans une base de données.
    </p>

    <h3>1. Histoire et Évolution de SQL</h3>
    <p style="font-size: 1.1em; color: #333;">
        SQL a été développé dans les années 1970 par Donald D. Knuth et d'autres chercheurs comme une méthode pour manipuler des données dans des systèmes de gestion de bases de données relationnelles. 
        Au fil des années, SQL a évolué et est devenu un langage standard reconnu par l'ANSI (American National Standards Institute) et l'ISO (International Organization for Standardization).
    </p>

    <h3>2. Importance de SQL</h3>
    <p style="font-size: 1.1em; color: #333;">
        SQL est essentiel pour plusieurs raisons :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Gestion des Données :</strong> SQL permet une gestion efficace des données, facilitant leur organisation et leur récupération.</li>
        <li><strong>Langage Universel :</strong> SQL est utilisé par presque tous les systèmes de gestion de bases de données, y compris MySQL, PostgreSQL, Microsoft SQL Server, et Oracle.</li>
        <li><strong>Interrogation Puissante :</strong> Avec SQL, les utilisateurs peuvent formuler des requêtes complexes pour obtenir des résultats précis à partir de grandes quantités de données.</li>
    </ul>

    <h3>3. Fonctions Principales de SQL</h3>
    <p style="font-size: 1.1em; color: #333;">
        SQL offre un ensemble de fonctionnalités qui permettent de manipuler les données et de gérer la structure de la base de données :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Création de Bases de Données :</strong> Créer de nouvelles bases de données et définir leur structure (tables, colonnes, types de données).</li>
        <li><strong>Manipulation des Données :</strong> Ajouter, modifier, supprimer et interroger des données dans les tables.</li>
        <li><strong>Contrôle d'Accès :</strong> Définir les permissions pour les utilisateurs et contrôler l'accès aux données sensibles.</li>
        <li><strong>Transactions :</strong> Gérer des transactions pour assurer l'intégrité des données lors de plusieurs opérations simultanées.</li>
    </ul>

    <h3>4. Exemples de Requêtes SQL</h3>
    <p style="font-size: 1.1em; color: #333;">
        Voici quelques exemples de requêtes SQL de base :
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer une table "Employes"
CREATE TABLE Employes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    salaire DECIMAL(10, 2)
);

-- Insérer un nouvel employé
INSERT INTO Employes (nom, prenom, salaire) VALUES ('Dupont', 'Jean', 35000.00);

-- Sélectionner tous les employés
SELECT * FROM Employes;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, nous créons une table <code>Employes</code>, insérons un nouvel enregistrement et sélectionnons tous les employés.
    </p>

    <h3>5. Conclusion</h3>
    <p style="font-size: 1.1em; color: #333;">
        SQL est un langage puissant et essentiel pour toute personne travaillant avec des bases de données. 
        Que vous soyez développeur, analyste de données, ou administrateur de bases de données, une compréhension solide de SQL est un atout majeur dans le paysage technologique actuel.
    </p>
</div>


    <div class="content-section" id="tables" style="background-color: #f2f4f7; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">Tables et Relations</h1>
    <p style="font-size: 1.1em; color: #333;">
        Dans les bases de données relationnelles, les <strong>tables</strong> sont des structures de données organisées en lignes et colonnes, permettant de stocker des informations sur des entités spécifiques (clients, produits, etc.). 
        La modélisation de ces données s’appuie sur la création de <strong>relations</strong> entre les tables, permettant une gestion efficace des informations et minimisant la redondance.
    </p>
    
    <!-- Types de Relations -->
    <h2 style="color: #388e3c; font-weight: bold; font-size: 1.6em; margin-top: 20px;">Types de Relations</h2>
    <p style="font-size: 1.1em; color: #333;">
        En modélisation relationnelle, les types de relations les plus courants sont :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Relation Un-à-Un (1:1)</strong> : Une ligne dans une table correspond à une seule ligne dans une autre table.</li>
        <li><strong>Relation Un-à-Plusieurs (1:N)</strong> : Une ligne dans une table peut être liée à plusieurs lignes dans une autre table. C’est le type de relation le plus courant.</li>
        <li><strong>Relation Plusieurs-à-Plusieurs (N:N)</strong> : Plusieurs lignes dans une table peuvent être liées à plusieurs lignes dans une autre table. Cette relation nécessite une table intermédiaire.</li>
    </ul>

    <!-- Exemples Professionnels -->
    <h3 style="font-weight: bold; font-size: 1.6em; margin-top: 20px;">Exemples Pratiques et Professionnels</h3>
    
    <!-- Un-à-Un -->
    <h4 style="font-weight: bold; margin-top: 15px;">1. Relation Un-à-Un (1:1)</h4>
    <p style="font-size: 1.1em; color: #333;">
        Ce type de relation est couramment utilisé pour des informations qui nécessitent un découpage pour des raisons de sécurité ou de confidentialité. Par exemple, une entreprise pourrait stocker les informations de base d'un employé dans une table <code>Employes</code> et les détails de paie dans une table <code>DetailsPaie</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Table Employes
CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    date_embauche DATE
);

-- Table DetailsPaie
CREATE TABLE DetailsPaie (
    details_paie_id INT PRIMARY KEY,
    employe_id INT UNIQUE,
    salaire DECIMAL(10, 2),
    banque VARCHAR(50),
    FOREIGN KEY (employe_id) REFERENCES Employes(employe_id)
);
        </code></pre>
    </div>
    
    <!-- Un-à-Plusieurs -->
    <h4 style="font-weight: bold; margin-top: 15px;">2. Relation Un-à-Plusieurs (1:N)</h4>
    <p style="font-size: 1.1em; color: #333;">
        Ce type de relation est souvent utilisé dans les systèmes de gestion de commandes. Par exemple, dans une entreprise de e-commerce, une table <code>Clients</code> peut être liée à une table <code>Commandes</code>, où chaque client peut avoir plusieurs commandes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Table Clients
CREATE TABLE Clients (
    client_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE
);

-- Table Commandes
CREATE TABLE Commandes (
    commande_id INT PRIMARY KEY,
    client_id INT,
    date_commande DATE,
    montant_total DECIMAL(10, 2),
    FOREIGN KEY (client_id) REFERENCES Clients(client_id)
);
        </code></pre>
    </div>

    <!-- Plusieurs-à-Plusieurs -->
    <h4 style="font-weight: bold; margin-top: 15px;">3. Relation Plusieurs-à-Plusieurs (N:N)</h4>
    <p style="font-size: 1.1em; color: #333;">
        Ce type de relation est utile pour modéliser des liens complexes, comme les affectations de projets dans une entreprise. Par exemple, une table <code>Employes</code> et une table <code>Projets</code> pourraient être reliées par une table intermédiaire <code>Affectations</code> qui suit quels employés sont affectés à quels projets.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Table Employes
CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50)
);

-- Table Projets
CREATE TABLE Projets (
    projet_id INT PRIMARY KEY,
    nom_projet VARCHAR(100),
    date_debut DATE,
    date_fin DATE
);

-- Table d'association Affectations
CREATE TABLE Affectations (
    employe_id INT,
    projet_id INT,
    date_affectation DATE,
    PRIMARY KEY (employe_id, projet_id),
    FOREIGN KEY (employe_id) REFERENCES Employes(employe_id),
    FOREIGN KEY (projet_id) REFERENCES Projets(projet_id)
);
        </code></pre>
    </div>

    <!-- Bonnes Pratiques -->
    <h3 style="font-weight: bold; font-size: 1.6em; margin-top: 20px;">Bonnes Pratiques en Conception de Tables et Relations</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des noms explicites</strong> pour les tables et colonnes afin de faciliter la compréhension de la base de données par les développeurs et analystes.</li>
        <li><strong>Normaliser les données</strong> pour éviter la redondance et assurer la cohérence des informations.</li>
        <li><strong>Définir les contraintes de clé étrangère</strong> pour maintenir l'intégrité référentielle entre les tables et éviter les erreurs de données.</li>
        <li><strong>Indexation des colonnes</strong> fréquemment utilisées dans les requêtes de recherche pour améliorer les performances, en particulier sur les colonnes de clé étrangère.</li>
    </ul>
</div>

<div class="content-section" id="requete" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Requêtes SQL de Base</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les requêtes SQL de base permettent de manipuler et d'extraire des données dans une base de données relationnelle. 
        Les commandes <strong>SELECT</strong>, <strong>WHERE</strong>, et <strong>LIMIT</strong> sont des outils fondamentaux pour interroger les tables et obtenir les informations souhaitées.
    </p>

    <!-- SELECT -->
    <h3>1. SELECT - Récupération de Données</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>SELECT</code> permet de récupérer des données d'une ou plusieurs colonnes dans une table. En milieu professionnel, elle est couramment utilisée pour extraire des informations, comme une liste de clients ou des transactions spécifiques.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Sélection de toutes les colonnes d'une table
SELECT * FROM Clients;

-- Sélection de colonnes spécifiques
SELECT nom, prenom FROM Clients;
        </code></pre>
    </div>

    <!-- WHERE -->
    <h3>2. WHERE - Filtrage de Données</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>WHERE</code> est utilisée pour filtrer les résultats et n'afficher que les lignes répondant à certaines conditions. Elle est essentielle pour affiner les recherches, par exemple pour trouver les clients résidant dans une ville spécifique.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Sélectionner les clients vivant à Paris
SELECT nom, prenom FROM Clients WHERE ville = 'Paris';

-- Sélectionner les clients avec un certain ID
SELECT nom, prenom FROM Clients WHERE client_id = 101;
        </code></pre>
    </div>

    <!-- LIMIT -->
    <h3>3. LIMIT - Limitation des Résultats</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>LIMIT</code> restreint le nombre de lignes retournées par une requête. En contexte professionnel, elle est souvent utilisée pour paginer les résultats ou limiter l’affichage aux premières lignes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Obtenir les 10 premiers clients
SELECT nom, prenom FROM Clients LIMIT 10;

-- Obtenir les 5 premiers clients de Paris
SELECT nom, prenom FROM Clients WHERE ville = 'Paris' LIMIT 5;
        </code></pre>
    </div>

    <!-- DISTINCT -->
    <h3>4. DISTINCT - Élimination des Doublons</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DISTINCT</code> est utilisée pour renvoyer des valeurs uniques, éliminant les doublons dans les résultats. Elle est utile pour extraire des données uniques, comme une liste de villes sans répétition.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Obtenir une liste de toutes les villes où se trouvent des clients sans doublons
SELECT DISTINCT ville FROM Clients;
        </code></pre>
    </div>

    <!-- ORDER BY -->
    <h3>5. ORDER BY - Tri des Résultats</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>ORDER BY</code> organise les résultats par ordre croissant ou décroissant selon une ou plusieurs colonnes. Cela facilite la visualisation des données dans un ordre particulier, comme le tri alphabétique des noms ou des dates.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Trier les clients par nom en ordre alphabétique
SELECT nom, prenom FROM Clients ORDER BY nom ASC;

-- Trier les clients par date d'inscription la plus récente
SELECT nom, prenom, date_inscription FROM Clients ORDER BY date_inscription DESC;
        </code></pre>
    </div>

    <!-- LISTE DES COMMANDES SQL -->
    <h3>Liste Complète des Commandes SQL</h3>
    <p style="font-size: 1.1em; color: #333;">
        Voici une liste des principales commandes SQL organisées par catégories, avec une explication de leur utilité :
    </p>

    <h4>1. Commandes de Manipulation de Données (DML)</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>SELECT</strong> : Récupère les données d'une ou plusieurs tables.</li>
        <li><strong>INSERT</strong> : Ajoute de nouvelles lignes dans une table.</li>
        <li><strong>UPDATE</strong> : Modifie les données existantes dans une table.</li>
        <li><strong>DELETE</strong> : Supprime des lignes d'une table.</li>
    </ul>

    <h4>2. Commandes de Définition de Données (DDL)</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>CREATE</strong> : Crée une nouvelle table, une vue ou une base de données.</li>
        <li><strong>ALTER</strong> : Modifie la structure d'une table (ajout, suppression de colonnes).</li>
        <li><strong>DROP</strong> : Supprime une table ou une base de données.</li>
        <li><strong>TRUNCATE</strong> : Vide une table de toutes ses données sans supprimer la structure.</li>
    </ul>

    <h4>3. Commandes de Contrôle de Transaction (TCL)</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>COMMIT</strong> : Valide une transaction et rend les modifications permanentes.</li>
        <li><strong>ROLLBACK</strong> : Annule une transaction et restaure les données à leur état précédent.</li>
        <li><strong>SAVEPOINT</strong> : Définit un point dans une transaction pour un retour partiel avec ROLLBACK.</li>
    </ul>

    <h4>4. Commandes de Contrôle de Données (DCL)</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>GRANT</strong> : Donne des privilèges d'accès à un utilisateur.</li>
        <li><strong>REVOKE</strong> : Retire des privilèges d'accès à un utilisateur.</li>
    </ul>

    <h4>5. Commandes Utilitaires</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>DESCRIBE</strong> ou <strong>DESC</strong> : Montre la structure d'une table (colonnes et types de données).</li>
        <li><strong>SHOW</strong> : Affiche les informations de la base de données (tables, index, vues, etc.).</li>
        <li><strong>USE</strong> : Change la base de données active pour une session.</li>
        <li><strong>EXPLAIN</strong> : Affiche le plan d'exécution d'une requête pour l'optimisation.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        Ces commandes SQL couvrent les fonctions principales pour manipuler, structurer, contrôler et optimiser les données dans une base de données relationnelle, 
        offrant une flexibilité et une sécurité accrues dans la gestion des informations professionnelles.
    </p>
</div>
<div class="content-section" id="types-donnees" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Types de Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les types de données en SQL définissent la nature des informations que chaque colonne peut stocker dans une table. Le choix du type de données est crucial pour garantir 
        une gestion efficace des ressources, l'intégrité des données et la rapidité des requêtes dans une base de données.
    </p>

    <!-- Types Numériques -->
    <h3>1. Types de Données Numériques</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les types numériques permettent de stocker des valeurs entières, décimales ou à virgule flottante. Ces types sont utilisés pour les quantités, les montants financiers, les codes et autres valeurs numériques.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>INT</strong> : Entier (de -2,147,483,648 à 2,147,483,647). Idéal pour les identifiants et les valeurs sans décimale.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>age INT;</code> — pour stocker l’âge d’un utilisateur.
            </div>
        </li>
        <li><strong>SMALLINT</strong> : Petit entier (de -32,768 à 32,767). Utilisé pour les valeurs d’entier qui ne dépassent pas cette plage.
        </li>
        <li><strong>BIGINT</strong> : Grand entier (de -9,223,372,036,854,775,808 à 9,223,372,036,854,775,807). Utilisé pour des valeurs très élevées.
        </li>
        <li><strong>DECIMAL(p, s)</strong> : Nombre décimal de précision fixe. Précision définie par l’utilisateur, idéal pour les montants financiers.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>salaire DECIMAL(10, 2);</code> — pour un salaire, avec 10 chiffres au total, dont 2 après la virgule.
            </div>
        </li>
        <li><strong>FLOAT</strong> et <strong>REAL</strong> : Nombre à virgule flottante pour des valeurs avec décimales, utilisé pour les mesures scientifiques.
        </li>
    </ul>

    <!-- Types de Texte -->
    <h3>2. Types de Données Texte</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les types de texte sont utilisés pour stocker des chaînes de caractères, tels que des noms, descriptions, et autres données textuelles.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>CHAR(n)</strong> : Chaîne de caractères de longueur fixe. Parfait pour des codes de taille fixe comme un code postal.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>code_postal CHAR(5);</code> — pour un code postal avec exactement 5 caractères.
            </div>
        </li>
        <li><strong>VARCHAR(n)</strong> : Chaîne de caractères de longueur variable. Utile pour des champs de longueur indéterminée, comme un nom.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>nom VARCHAR(50);</code> — pour un nom avec une longueur maximale de 50 caractères.
            </div>
        </li>
        <li><strong>TEXT</strong> : Texte de grande taille, utilisé pour des descriptions longues. Non indexé en général pour les recherches.
        </li>
    </ul>

    <!-- Types de Date et Heure -->
    <h3>3. Types de Données de Date et Heure</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les types de données de date et heure permettent de stocker des informations temporelles pour des analyses, des logs, et des historiques.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>DATE</strong> : Représente une date (AAAA-MM-JJ).
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>date_naissance DATE;</code> — pour stocker une date de naissance.
            </div>
        </li>
        <li><strong>TIME</strong> : Représente une heure (HH:MM:SS).
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>heure_rendezvous TIME;</code> — pour enregistrer une heure de rendez-vous.
            </div>
        </li>
        <li><strong>DATETIME</strong> : Combine date et heure (AAAA-MM-JJ HH:MM:SS), souvent utilisé pour les horodatages complets.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>date_creation DATETIME;</code> — pour enregistrer la date et l’heure de création d’un enregistrement.
            </div>
        </li>
        <li><strong>TIMESTAMP</strong> : Stocke une date et heure avec fuseau horaire, souvent utilisé pour le suivi des modifications.
        </li>
    </ul>

    <!-- Types Booléens et Binaires -->
    <h3>4. Types Booléens et Binaires</h3>
    <p style="font-size: 1.1em; color: #333;">
        Ces types sont utilisés pour stocker des données binaires ou des valeurs booléennes.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>BOOLEAN</strong> ou <strong>BIT</strong> : Utilisé pour stocker des valeurs vraies ou fausses, pratiques pour les drapeaux de statut.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>est_actif BOOLEAN;</code> — pour indiquer si un compte utilisateur est actif ou non.
            </div>
        </li>
        <li><strong>BINARY</strong> et <strong>VARBINARY</strong> : Stockent des données binaires de longueur fixe ou variable, utilisés pour des fichiers ou des images en format binaire.
        </li>
    </ul>

    <!-- Types JSON et XML -->
    <h3>5. Types JSON et XML</h3>
    <p style="font-size: 1.1em; color: #333;">
        SQL prend en charge les types de données JSON et XML dans certains systèmes de gestion de bases de données. Ces types sont utiles pour stocker des données structurées et semi-structurées.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>JSON</strong> : Utilisé pour stocker des objets JSON, permettant des requêtes et filtres basés sur la structure JSON.
            <div style="background-color: #e8f4fc; padding: 10px; margin-top: 10px;">
                <code>infos JSON;</code> — pour stocker des informations additionnelles sous forme d’objet JSON.
            </div>
        </li>
        <li><strong>XML</strong> : Type de données XML (dans certains SGBD) pour des données hiérarchiques.
        </li>
    </ul>

    <h3>Liste Complète des Types de Données</h3>
    <p style="font-size: 1.1em; color: #333;">
        Voici un récapitulatif des types de données SQL, regroupés par catégories :
    </p>
    
    <h4>Types Numériques</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>INT, SMALLINT, BIGINT</strong> : Entiers de différentes tailles</li>
        <li><strong>DECIMAL, NUMERIC</strong> : Nombre à précision fixe</li>
        <li><strong>FLOAT, REAL</strong> : Nombre à virgule flottante</li>
    </ul>

    <h4>Types de Texte</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>CHAR, VARCHAR</strong> : Chaînes de caractères</li>
        <li><strong>TEXT</strong> : Chaîne de grande taille</li>
    </ul>

    <h4>Types de Date et Heure</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>DATE</strong> : Date</li>
        <li><strong>TIME</strong> : Heure</li>
        <li><strong>DATETIME</strong> : Date et heure</li>
        <li><strong>TIMESTAMP</strong> : Date et heure avec fuseau</li>
    </ul>

    <h4>Types Booléens et Binaires</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>BOOLEAN, BIT</strong> : Valeurs vraies/fausses</li>
        <li><strong>BINARY, VARBINARY</strong> : Données binaires</li>
    </ul>

    <h4>Types JSON et XML</h4>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>JSON</strong> : Données JSON</li>
        <li><strong>XML</strong> : Données XML</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        La sélection appropriée des types de données garantit une performance optimale, la cohérence des données et un stockage efficace dans la base de données. 
        Chaque type est utilisé pour des cas d'utilisation spécifiques et peut influer sur la rapidité des requêtes et la gestion des ressources.
    </p>
</div>
<div class="content-section" id="cles-primaires-etrangeres" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Clés Primaires et Étrangères</h2>
    <p style="font-size: 1.1em; color: #333;">
        Dans une base de données relationnelle, les clés primaires et étrangères jouent un rôle essentiel dans l'organisation et la gestion des relations entre les tables. Elles permettent de lier des informations de manière structurée, garantissant l'intégrité des données et la cohérence des relations.
    </p>

    <!-- Clé Primaire -->
    <h3>1. Clé Primaire</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une <strong>clé primaire</strong> est une contrainte utilisée pour identifier de manière unique chaque enregistrement d'une table. Elle garantit l'unicité des valeurs dans une colonne (ou une combinaison de colonnes) et empêche les valeurs nulles. En général, une clé primaire est définie sur un identifiant numérique unique pour chaque enregistrement.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Unicité</strong> : La clé primaire assure qu'aucun doublon n'existe dans la colonne, chaque enregistrement est unique.</li>
        <li><strong>Non nullité</strong> : Une clé primaire ne peut pas contenir de valeur nulle, chaque enregistrement doit avoir une valeur pour la clé primaire.</li>
        <li><strong>Indexation automatique</strong> : La plupart des SGBD créent un index automatiquement sur la clé primaire pour optimiser les performances.</li>
    </ul>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Création d'une table avec une clé primaire
CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,  -- employe_id est la clé primaire
    nom VARCHAR(50),
    prenom VARCHAR(50),
    date_embauche DATE
);

-- Insertion avec la clé primaire
INSERT INTO Employes (employe_id, nom, prenom, date_embauche) 
VALUES (1, 'Dupont', 'Jean', '2023-01-15');
        </code></pre>
    </div>

    <!-- Clé Étrangère -->
    <h3>2. Clé Étrangère</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une <strong>clé étrangère</strong> est une contrainte qui permet de créer une relation entre deux tables. Elle fait référence à la clé primaire d'une autre table, permettant d'établir des liens et de maintenir l'intégrité référentielle des données. En d'autres termes, une clé étrangère garantit que les données présentes dans la colonne de référence existent dans la table liée.
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Intégrité référentielle</strong> : La clé étrangère empêche l'insertion de valeurs qui ne sont pas présentes dans la table de référence.</li>
        <li><strong>Relations</strong> : Elle est utilisée pour lier les tables, comme lier une table <code>Employes</code> à une table <code>Departements</code>.</li>
    </ul>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Création d'une table avec une clé étrangère
CREATE TABLE Departements (
    departement_id INT PRIMARY KEY,
    nom_departement VARCHAR(100)
);

CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    departement_id INT,
    FOREIGN KEY (departement_id) REFERENCES Departements(departement_id)
);

-- Insertion avec clé étrangère
INSERT INTO Departements (departement_id, nom_departement) VALUES (1, 'Ressources Humaines');
INSERT INTO Employes (employe_id, nom, prenom, departement_id) VALUES (1, 'Dupont', 'Jean', 1);
        </code></pre>
    </div>

    <!-- Relation entre Clés Primaires et Étrangères -->
    <h3>Relation entre Clés Primaires et Étrangères</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clé primaire identifie de manière unique chaque enregistrement dans une table, tandis que la clé étrangère crée un lien entre cette table et une autre. Ensemble, elles permettent de structurer une base de données relationnelle en assurant l'intégrité des relations entre les tables.
    </p>
    <p style="font-size: 1.1em; color: #333;">
        Par exemple, dans une application de gestion de projets, une table <code>Projets</code> peut être liée à une table <code>Employes</code> en utilisant une clé étrangère <code>employe_id</code> dans la table <code>Projets</code> qui référence la clé primaire <code>employe_id</code> de la table <code>Employes</code>.
    </p>

    <!-- Bonnes Pratiques avec Clés Primaires et Étrangères -->
    <h3>Bonnes Pratiques</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des clés primaires sur toutes les tables</strong> : Cela garantit une identification unique pour chaque enregistrement.</li>
        <li><strong>Créer des clés étrangères pour les relations</strong> : Utiliser les clés étrangères pour lier les tables tout en respectant l'intégrité référentielle.</li>
        <li><strong>Indexation</strong> : Créer des index sur les colonnes de clés étrangères pour optimiser les performances lors des jointures.</li>
        <li><strong>Utiliser les conventions de nommage</strong> : Par exemple, ajouter un suffixe `_id` (comme `employe_id`) pour identifier facilement les colonnes de clé primaire ou étrangère.</li>
    </ul>
</div>
<div class="content-section" id="contraintes" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Contraintes en SQL (PRIMARY, UNIQUE, FOREIGN)</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les contraintes en SQL sont des règles appliquées aux colonnes d'une table afin de garantir la validité et l'intégrité des données. Les contraintes les plus courantes sont <strong>PRIMARY</strong>, <strong>UNIQUE</strong>, et <strong>FOREIGN</strong>, utilisées pour organiser les relations entre les tables et assurer l'unicité des données.
    </p>

    <!-- PRIMARY KEY -->
    <h3>1. PRIMARY KEY (Clé Primaire)</h3>
    <p style="font-size: 1.1em; color: #333;">
        La contrainte <strong>PRIMARY KEY</strong> est utilisée pour identifier de manière unique chaque enregistrement dans une table. Elle garantit que chaque valeur de la colonne (ou combinaison de colonnes) est unique et ne contient pas de valeurs nulles. En général, une clé primaire est définie sur une colonne de type entier pour des raisons de performance.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Création d'une table avec une clé primaire
CREATE TABLE Clients (
    client_id INT PRIMARY KEY,   -- client_id est la clé primaire
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50),
    email VARCHAR(100)
);

-- Insérer un enregistrement avec une clé primaire
INSERT INTO Clients (client_id, nom, prenom, email) VALUES (1, 'Dupont', 'Jean', 'jean.dupont@example.com');
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        La clé primaire assure qu'aucun enregistrement dans la table ne partage la même valeur pour la colonne définie, ce qui est essentiel pour identifier chaque entrée de manière unique.
    </p>

    <!-- UNIQUE -->
    <h3>2. UNIQUE (Unicité)</h3>
    <p style="font-size: 1.1em; color: #333;">
        La contrainte <strong>UNIQUE</strong> garantit que toutes les valeurs d'une colonne sont distinctes, mais elle permet les valeurs nulles (sauf si la colonne est définie comme NOT NULL). Elle est souvent utilisée pour des colonnes qui nécessitent une unicité, comme les emails ou les numéros de téléphone, sans pour autant être une clé primaire.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Ajout d'une contrainte UNIQUE sur la colonne email
CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE  -- Chaque email doit être unique
);

-- Tentative d'insertion avec une contrainte UNIQUE
INSERT INTO Employes (employe_id, nom, prenom, email) VALUES (1, 'Martin', 'Paul', 'paul.martin@example.com');
INSERT INTO Employes (employe_id, nom, prenom, email) VALUES (2, 'Durand', 'Marie', 'paul.martin@example.com');  -- Cette insertion échouera car l'email est déjà utilisé.
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        La contrainte UNIQUE peut être appliquée à plusieurs colonnes pour garantir que la combinaison de leurs valeurs est unique.
    </p>

    <!-- FOREIGN KEY -->
    <h3>3. FOREIGN KEY (Clé Étrangère)</h3>
    <p style="font-size: 1.1em; color: #333;">
        La contrainte <strong>FOREIGN KEY</strong> est utilisée pour créer une relation entre deux tables. Elle garantit que la valeur d'une colonne dans une table correspond à une valeur de clé primaire dans une autre table, assurant ainsi l'intégrité référentielle des données.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Création d'une table avec une clé étrangère
CREATE TABLE Departements (
    departement_id INT PRIMARY KEY,
    nom_departement VARCHAR(100)
);

CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    departement_id INT,
    FOREIGN KEY (departement_id) REFERENCES Departements(departement_id)  -- Clé étrangère vers la table Departements
);

-- Insérer un enregistrement avec une clé étrangère valide
INSERT INTO Departements (departement_id, nom_departement) VALUES (1, 'Informatique');
INSERT INTO Employes (employe_id, nom, prenom, departement_id) VALUES (1, 'Dupont', 'Alice', 1);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        La clé étrangère empêche l'ajout de valeurs dans la colonne <code>departement_id</code> qui ne sont pas présentes dans la table <code>Departements</code>, assurant ainsi l'intégrité des données.
    </p>

    <!-- Bonnes Pratiques avec les Contraintes -->
    <h3>Bonnes Pratiques</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Définir une clé primaire</strong> sur chaque table pour assurer une identification unique des enregistrements.</li>
        <li><strong>Utiliser des contraintes UNIQUE</strong> pour garantir l’unicité des données là où c'est nécessaire, sans affecter la clé primaire.</li>
        <li><strong>Établir des clés étrangères</strong> pour les relations entre tables, ce qui facilite les jointures et assure la cohérence des données.</li>
        <li><strong>Utiliser ON DELETE et ON UPDATE</strong> avec les clés étrangères pour définir le comportement en cas de suppression ou mise à jour dans la table référencée.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces contraintes, on assure la fiabilité et l'intégrité des données dans les systèmes de gestion de bases de données relationnelles, contribuant ainsi à une structure de données robuste et optimisée pour les besoins professionnels.
    </p>
</div>
<div class="content-section" id="insert" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>INSERT - Insertion de Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        La commande <strong>INSERT</strong> est utilisée pour ajouter de nouvelles lignes dans une table de base de données. 
        En milieu professionnel, elle est couramment utilisée pour insérer des informations telles que des clients, des transactions, des produits, et bien plus. 
        <strong>INSERT INTO</strong> peut être employée pour insérer une seule ligne ou plusieurs lignes à la fois.
    </p>

    <!-- Insertion Simple -->
    <h3>1. Insertion Simple</h3>
    <p style="font-size: 1.1em; color: #333;">
        La syntaxe de base pour une insertion simple consiste à spécifier la table, les colonnes cibles, et les valeurs à insérer. 
        Dans cet exemple, nous insérons un seul enregistrement dans une table <code>Clients</code> avec des informations comme le nom, prénom, et email.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Insérer un enregistrement unique dans la table Clients
INSERT INTO Clients (client_id, nom, prenom, email)
VALUES (1, 'Dupont', 'Jean', 'jean.dupont@example.com');
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ce type d'insertion est idéal pour ajouter un client, une commande ou tout autre élément nécessitant une entrée unique dans la table.
    </p>

    <!-- Insertion Multiple -->
    <h3>2. Insertion Multiple</h3>
    <p style="font-size: 1.1em; color: #333;">
        Il est possible d'insérer plusieurs enregistrements en une seule commande en spécifiant plusieurs ensembles de valeurs. Cette méthode est plus efficace que des insertions individuelles, en particulier lors de l'insertion de nombreux enregistrements d'un coup.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Insérer plusieurs enregistrements dans la table Clients
INSERT INTO Clients (client_id, nom, prenom, email)
VALUES 
    (2, 'Martin', 'Paul', 'paul.martin@example.com'),
    (3, 'Durand', 'Marie', 'marie.durand@example.com'),
    (4, 'Petit', 'Luc', 'luc.petit@example.com');
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        L'insertion multiple permet de réduire le nombre d'opérations et d'améliorer les performances, surtout lorsqu'un grand volume de données doit être ajouté en une fois.
    </p>

    <!-- Insertion avec Valeurs Par Défaut -->
    <h3>3. Insertion avec Valeurs Par Défaut</h3>
    <p style="font-size: 1.1em; color: #333;">
        Certaines colonnes peuvent avoir des valeurs par défaut définies dans la structure de la table. Si une colonne possède une valeur par défaut, il est possible de l'omettre lors de l'insertion, et SQL utilisera cette valeur par défaut.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Insérer un enregistrement en utilisant des valeurs par défaut
CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    date_embauche DATE DEFAULT CURRENT_DATE
);

INSERT INTO Employes (employe_id, nom, prenom)
VALUES (1, 'Dupont', 'Alice');  -- La date_embauche sera définie à la date actuelle
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, la colonne <code>date_embauche</code> utilise la valeur par défaut <code>CURRENT_DATE</code> si aucune valeur n'est spécifiée, simplifiant ainsi l'insertion des données.
    </p>

    <!-- Insertion avec Sous-requête -->
    <h3>4. Insertion avec Sous-requête</h3>
    <p style="font-size: 1.1em; color: #333;">
        Il est possible d'utiliser une sous-requête pour insérer des données basées sur les résultats d'une autre table. Cette méthode est utile pour copier ou transférer des données d'une table à une autre.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Insérer des données d'une autre table dans une nouvelle table
CREATE TABLE ClientsArchive AS
SELECT * FROM Clients WHERE date_inscription < '2023-01-01';

-- Copie des enregistrements anciens dans une table d'archive
INSERT INTO ClientsArchive (client_id, nom, prenom, email)
SELECT client_id, nom, prenom, email FROM Clients WHERE date_inscription < '2023-01-01';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette technique est utilisée pour archiver des enregistrements anciens ou transférer des données dans une table de sauvegarde.
    </p>

    <!-- Bonnes Pratiques pour l'Insertion -->
    <h3>Bonnes Pratiques pour l'Insertion</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Vérifier les contraintes</strong> : Assurez-vous que les valeurs insérées respectent les contraintes de la table (clé primaire, clé étrangère, UNIQUE).</li>
        <li><strong>Utiliser des valeurs par défaut</strong> : Pour éviter les erreurs, définissez des valeurs par défaut pour les colonnes qui n'ont pas toujours besoin d'être spécifiées.</li>
        <li><strong>Préparer les requêtes avec des sous-requêtes</strong> : Si les données dépendent d'autres tables, les sous-requêtes permettent d'extraire et d'insérer les données appropriées en une seule étape.</li>
        <li><strong>Insertion en lot</strong> : Utiliser des insertions multiples pour améliorer les performances lors de l’ajout de nombreux enregistrements.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En utilisant les méthodes ci-dessus, vous pouvez gérer les insertions dans une base de données de manière flexible et optimisée, assurant une intégration efficace des nouvelles données dans vos applications professionnelles.
    </p>
</div>
<div class="content-section" id="update" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>UPDATE - Mise à Jour des Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        La commande <strong>UPDATE</strong> est utilisée pour modifier les enregistrements existants dans une table de base de données. 
        Elle permet d'actualiser les valeurs d'une ou plusieurs colonnes pour des lignes spécifiques, identifiées par une condition <code>WHERE</code>.
        Cette opération est essentielle dans les environnements professionnels pour maintenir les données à jour, comme pour corriger des informations d'utilisateur ou ajuster les quantités de stock.
    </p>

    <!-- Mise à jour Simple -->
    <h3>1. Mise à Jour Simple</h3>
    <p style="font-size: 1.1em; color: #333;">
        La syntaxe de base d'une requête <code>UPDATE</code> consiste à spécifier la table cible, la colonne à mettre à jour, et une condition <code>WHERE</code> pour sélectionner les lignes à modifier. Dans cet exemple, nous mettons à jour l'email d'un client dans la table <code>Clients</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Mise à jour d'un enregistrement spécifique dans la table Clients
UPDATE Clients
SET email = 'nouveau.email@example.com'
WHERE client_id = 1;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette mise à jour cible l'enregistrement avec <code>client_id = 1</code> et change uniquement l'email pour ce client spécifique.
    </p>

    <!-- Mise à jour de Plusieurs Colonnes -->
    <h3>2. Mise à Jour de Plusieurs Colonnes</h3>
    <p style="font-size: 1.1em; color: #333;">
        Il est possible de mettre à jour plusieurs colonnes en une seule commande <code>UPDATE</code>. Cette méthode est pratique pour actualiser plusieurs informations en une seule requête, par exemple pour corriger un nom et une adresse email en même temps.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Mise à jour de plusieurs colonnes pour un client spécifique
UPDATE Clients
SET nom = 'Martin', prenom = 'Paul', email = 'paul.martin@example.com'
WHERE client_id = 2;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, nous modifions le nom, le prénom, et l'email pour le client ayant l'ID <code>client_id = 2</code>.
    </p>

    <!-- Mise à jour avec une Condition de Filtrage (WHERE) -->
    <h3>3. Mise à Jour avec une Condition de Filtrage (WHERE)</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>WHERE</code> est essentielle pour cibler des enregistrements spécifiques lors d'une mise à jour. Sans cette clause, toutes les lignes de la table seraient affectées, ce qui pourrait provoquer des erreurs ou des pertes de données.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Mettre à jour le statut des clients dans une ville spécifique
UPDATE Clients
SET statut = 'VIP'
WHERE ville = 'Paris';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande met à jour tous les clients de la ville de Paris en leur attribuant le statut <code>VIP</code>, sans affecter les clients des autres villes.
    </p>

    <!-- Mise à jour avec Sous-requête -->
    <h3>4. Mise à Jour avec Sous-requête</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une sous-requête dans une instruction <code>UPDATE</code> permet d'effectuer des mises à jour basées sur des données provenant d'autres tables. 
        Cette méthode est souvent utilisée pour synchroniser ou ajuster des informations entre tables liées.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Mettre à jour le salaire des employés en fonction de leur département
UPDATE Employes
SET salaire = salaire * 1.1
WHERE departement_id IN (SELECT departement_id FROM Departements WHERE nom_departement = 'Informatique');
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, nous appliquons une augmentation de 10% aux employés du département <code>Informatique</code> en utilisant une sous-requête pour cibler uniquement ce département.
    </p>

    <!-- Bonnes Pratiques pour les Mises à Jour -->
    <h3>Bonnes Pratiques pour les Mises à Jour</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser la clause WHERE</strong> : Assurez-vous d'utiliser <code>WHERE</code> pour éviter de mettre à jour accidentellement toutes les lignes d'une table.</li>
        <li><strong>Prévisualiser avec SELECT</strong> : Avant une mise à jour massive, utilisez une requête <code>SELECT</code> pour vérifier que les lignes sélectionnées correspondent bien aux enregistrements à modifier.</li>
        <li><strong>Faire des sauvegardes</strong> : Pour des mises à jour importantes ou sur de gros volumes, sauvegardez la table pour éviter les pertes de données.</li>
        <li><strong>Utiliser des transactions</strong> : Dans les environnements où les données sont sensibles, encapsulez les requêtes <code>UPDATE</code> dans des transactions pour pouvoir annuler en cas d’erreur.</li>
        <li><strong>Limiter l'impact avec des sous-requêtes</strong> : Utilisez des sous-requêtes pour mettre à jour uniquement les enregistrements nécessaires dans des relations complexes entre tables.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, les mises à jour en SQL deviennent sûres et efficaces, permettant de maintenir les données cohérentes et à jour dans un environnement professionnel.
    </p>
</div>
<div class="content-section" id="delete" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>DELETE - Suppression de Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        La commande <strong>DELETE</strong> est utilisée pour supprimer des enregistrements spécifiques dans une table de base de données. Elle permet de retirer des données qui ne sont plus nécessaires ou de nettoyer la base de données de façon sélective. 
        En général, la clause <code>WHERE</code> est utilisée pour cibler les enregistrements spécifiques, garantissant que seules les lignes souhaitées sont supprimées.
    </p>

    <!-- Suppression Simple -->
    <h3>1. Suppression Simple avec WHERE</h3>
    <p style="font-size: 1.1em; color: #333;">
        La syntaxe de base de <code>DELETE</code> consiste à spécifier la table et une condition <code>WHERE</code> pour sélectionner les enregistrements à supprimer. Cette méthode est idéale pour retirer des enregistrements spécifiques, par exemple, un client obsolète ou une commande annulée.
    </p>
    <div style="background-color: #ffe5e5; padding: 15px; border-left: 4px solid #d32f2f;">
        <pre><code class="language-sql">
-- Suppression d'un enregistrement spécifique dans la table Clients
DELETE FROM Clients
WHERE client_id = 1;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, l'enregistrement avec <code>client_id = 1</code> est supprimé de la table <code>Clients</code>. La clause <code>WHERE</code> garantit que seule cette ligne est affectée.
    </p>

    <!-- Suppression de Plusieurs Enregistrements -->
    <h3>2. Suppression de Plusieurs Enregistrements</h3>
    <p style="font-size: 1.1em; color: #333;">
        Il est possible de supprimer plusieurs enregistrements en une seule commande <code>DELETE</code> en utilisant des conditions multiples ou des sous-requêtes. Cette méthode est utile pour des suppressions en masse basées sur des critères spécifiques.
    </p>
    <div style="background-color: #ffe5e5; padding: 15px; border-left: 4px solid #d32f2f;">
        <pre><code class="language-sql">
-- Suppression de tous les clients situés dans une ville donnée
DELETE FROM Clients
WHERE ville = 'Paris';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête supprime tous les clients qui se trouvent à Paris. Cette opération est utile pour nettoyer des enregistrements en fonction d'un critère géographique ou temporel.
    </p>

    <!-- Suppression avec Sous-requête -->
    <h3>3. Suppression avec Sous-requête</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les sous-requêtes permettent d’utiliser les données d’autres tables pour filtrer les enregistrements à supprimer. Cette approche est fréquemment utilisée pour maintenir la cohérence des données entre plusieurs tables.
    </p>
    <div style="background-color: #ffe5e5; padding: 15px; border-left: 4px solid #d32f2f;">
        <pre><code class="language-sql">
-- Suppression des employés d'un département spécifique
DELETE FROM Employes
WHERE departement_id IN (SELECT departement_id FROM Departements WHERE nom_departement = 'Informatique');
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, nous supprimons les employés du département <code>Informatique</code> en utilisant une sous-requête pour cibler les employés associés.
    </p>

    <!-- Suppression Totale (Attention) -->
    <h3>4. Suppression Totale (sans WHERE)</h3>
    <p style="font-size: 1.1em; color: #333;">
        Exécuter une commande <code>DELETE</code> sans condition <code>WHERE</code> supprime tous les enregistrements de la table. 
        Cette opération doit être effectuée avec précaution, car elle efface toutes les données de la table sans possibilité de retour (sauf en cas de sauvegarde ou de transaction).
    </p>
    <div style="background-color: #ffe5e5; padding: 15px; border-left: 4px solid #d32f2f;">
        <pre><code class="language-sql">
-- Suppression de tous les enregistrements de la table Clients
DELETE FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande vide la table <code>Clients</code> de tous ses enregistrements. Utilisez cette commande uniquement lorsque cela est intentionnel, par exemple pour réinitialiser des tables de test.
    </p>

    <!-- Bonnes Pratiques pour la Suppression -->
    <h3>Bonnes Pratiques pour la Suppression</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Vérifier avec SELECT</strong> : Avant de supprimer, utilisez une requête <code>SELECT</code> pour vérifier les enregistrements ciblés.</li>
        <li><strong>Utiliser toujours WHERE</strong> : Sans clause <code>WHERE</code>, tous les enregistrements sont supprimés. Cette clause est donc essentielle pour éviter les erreurs.</li>
        <li><strong>Envisager une archive</strong> : Pour des données sensibles, déplacer les enregistrements dans une table d'archive peut être préférable à une suppression définitive.</li>
        <li><strong>Utiliser des transactions</strong> : Lors de suppressions massives ou sensibles, encapsulez la requête <code>DELETE</code> dans une transaction pour permettre une annulation si nécessaire.</li>
        <li><strong>Sauvegarder avant suppression</strong> : Sauvegardez la table pour éviter des pertes de données irréversibles.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, les suppressions en SQL deviennent sûres et précises, contribuant à une base de données propre et maintenable dans des environnements professionnels.
    </p>
</div>
<div class="content-section" id="select" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>SELECT - Requête de Sélection de Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        La commande <strong>SELECT</strong> est l'instruction la plus couramment utilisée en SQL, permettant de récupérer des données dans une ou plusieurs tables. 
        Elle offre une grande flexibilité grâce à ses multiples options pour filtrer, trier et organiser les données. Dans un contexte professionnel, 
        <code>SELECT</code> est essentielle pour l’analyse, le reporting, et la visualisation de données.
    </p>

    <!-- Sélection de Colonnes -->
    <h3>1. Sélection de Colonnes</h3>
    <p style="font-size: 1.1em; color: #333;">
        La syntaxe de base de <code>SELECT</code> consiste à spécifier les colonnes que vous souhaitez récupérer d'une table. Il est possible de sélectionner une ou plusieurs colonnes, ou même toutes les colonnes en utilisant le symbole <code>*</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Sélection de toutes les colonnes
SELECT * FROM Clients;

-- Sélection de colonnes spécifiques
SELECT nom, prenom, email FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        La sélection spécifique de colonnes est plus efficace que la sélection de toutes les colonnes, surtout si seules quelques-unes sont nécessaires pour l'analyse.
    </p>

    <!-- Filtrage avec WHERE -->
    <h3>2. Filtrage avec WHERE</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>WHERE</code> est utilisée pour filtrer les enregistrements et ne renvoyer que ceux qui correspondent aux critères définis. Elle est essentielle pour cibler des données spécifiques et éviter de récupérer des enregistrements inutiles.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Sélection des clients dans une ville spécifique
SELECT nom, prenom FROM Clients
WHERE ville = 'Paris';

-- Sélection des clients inscrits après une certaine date
SELECT nom, email FROM Clients
WHERE date_inscription > '2023-01-01';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>WHERE</code> permet d'appliquer des conditions logiques pour une recherche précise et pertinente dans les bases de données.
    </p>

    <!-- Tri des Résultats avec ORDER BY -->
    <h3>3. Tri des Résultats avec ORDER BY</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>ORDER BY</code> est utilisée pour trier les résultats d'une requête en ordre croissant (<code>ASC</code>) ou décroissant (<code>DESC</code>). Elle permet de structurer les données de manière à faciliter l'interprétation ou le reporting.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Trier les clients par nom en ordre alphabétique
SELECT nom, prenom FROM Clients
ORDER BY nom ASC;

-- Trier les commandes par date en ordre décroissant
SELECT commande_id, client_id, date_commande FROM Commandes
ORDER BY date_commande DESC;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        <code>ORDER BY</code> est particulièrement utile pour organiser des rapports, par exemple, pour afficher les transactions récentes en tête de liste.
    </p>

    <!-- Limitation des Résultats avec LIMIT -->
    <h3>4. Limitation des Résultats avec LIMIT</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>LIMIT</code> restreint le nombre de lignes retournées par une requête <code>SELECT</code>. Elle est utile pour contrôler la taille des résultats, notamment lors de l'affichage de pages de résultats ou de rapports volumineux.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Sélection des 5 premiers clients
SELECT nom, prenom FROM Clients
LIMIT 5;

-- Sélection des 10 dernières commandes
SELECT commande_id, client_id FROM Commandes
ORDER BY date_commande DESC
LIMIT 10;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        <code>LIMIT</code> améliore les performances et facilite la gestion des données en limitant la quantité d'informations renvoyées.
    </p>

    <!-- Agrégation avec GROUP BY -->
    <h3>5. Agrégation avec GROUP BY</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>GROUP BY</code> est utilisée en combinaison avec des fonctions d'agrégation (telles que <code>COUNT</code>, <code>SUM</code>, <code>AVG</code>, etc.) pour regrouper les enregistrements en fonction de valeurs communes dans une ou plusieurs colonnes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Compter le nombre de clients par ville
SELECT ville, COUNT(*) AS nombre_clients
FROM Clients
GROUP BY ville;

-- Calculer le total des ventes par client
SELECT client_id, SUM(montant) AS total_ventes
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        <code>GROUP BY</code> est utile pour générer des statistiques ou des rapports, comme le nombre de commandes par client ou le total des ventes par région.
    </p>

    <!-- Bonnes Pratiques pour les Requêtes SELECT -->
    <h3>Bonnes Pratiques pour les Requêtes SELECT</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Sélectionner seulement les colonnes nécessaires</strong> : Évitez le <code>*</code> si toutes les colonnes ne sont pas nécessaires pour optimiser les performances.</li>
        <li><strong>Utiliser WHERE pour filtrer les données</strong> : Cela réduit le nombre d'enregistrements retournés et améliore la pertinence des résultats.</li>
        <li><strong>Utiliser LIMIT pour des ensembles de données volumineux</strong> : Cela permet de gérer efficacement les résultats et d'éviter la surcharge de ressources.</li>
        <li><strong>Utiliser les index sur les colonnes</strong> : Les index sur les colonnes utilisées fréquemment dans <code>WHERE</code> et <code>ORDER BY</code> améliorent considérablement les performances.</li>
        <li><strong>Combiner les clauses pour des résultats précis</strong> : En combinant <code>WHERE</code>, <code>ORDER BY</code>, et <code>GROUP BY</code>, vous pouvez structurer des requêtes adaptées aux analyses et rapports avancés.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, les requêtes <code>SELECT</code> peuvent être optimisées pour fournir des résultats précis et pertinents dans des environnements professionnels, facilitant l'analyse et la prise de décision.
    </p>
</div>

<div class="content-section" id="jointures" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Jointures - INNER, LEFT, RIGHT, FULL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>jointures</strong> en SQL permettent de combiner des données provenant de plusieurs tables en fonction de colonnes qui leur sont communes. 
        Dans les bases de données relationnelles, les jointures facilitent la récupération de données connexes, par exemple pour obtenir des informations complètes sur les commandes, les clients, ou les produits.
    </p>

    <!-- INNER JOIN -->
    <h3>1. INNER JOIN</h3>
    <p style="font-size: 1.1em; color: #333;">
        La jointure <strong>INNER JOIN</strong> renvoie uniquement les enregistrements qui ont des correspondances dans les deux tables. 
        Elle est utilisée pour extraire des données reliées lorsque l’on ne souhaite afficher que les lignes pour lesquelles il existe une relation dans chaque table.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Récupérer les informations des clients avec leurs commandes
SELECT Clients.nom, Clients.prenom, Commandes.date_commande, Commandes.montant
FROM Clients
INNER JOIN Commandes ON Clients.client_id = Commandes.client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête renvoie uniquement les clients qui ont passé au moins une commande. Les clients sans commande ne seront pas inclus dans les résultats.
    </p>

    <!-- LEFT JOIN -->
    <h3>2. LEFT JOIN</h3>
    <p style="font-size: 1.1em; color: #333;">
        La jointure <strong>LEFT JOIN</strong> renvoie tous les enregistrements de la table de gauche (première table mentionnée) et les enregistrements correspondants de la table de droite. 
        Si aucune correspondance n'existe, les valeurs pour les colonnes de la table de droite seront <code>NULL</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Récupérer tous les clients, même ceux sans commande
SELECT Clients.nom, Clients.prenom, Commandes.date_commande, Commandes.montant
FROM Clients
LEFT JOIN Commandes ON Clients.client_id = Commandes.client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, tous les clients sont inclus, même ceux qui n'ont passé aucune commande. Les colonnes de <code>Commandes</code> seront <code>NULL</code> pour les clients sans commande.
    </p>

    <!-- RIGHT JOIN -->
    <h3>3. RIGHT JOIN</h3>
    <p style="font-size: 1.1em; color: #333;">
        La jointure <strong>RIGHT JOIN</strong> renvoie tous les enregistrements de la table de droite (deuxième table mentionnée) et les enregistrements correspondants de la table de gauche. 
        Si aucune correspondance n'existe, les valeurs des colonnes de la table de gauche seront <code>NULL</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Récupérer toutes les commandes, même celles sans client (exemple théorique)
SELECT Clients.nom, Clients.prenom, Commandes.date_commande, Commandes.montant
FROM Clients
RIGHT JOIN Commandes ON Clients.client_id = Commandes.client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête affiche toutes les commandes, y compris celles qui n'ont pas de client associé dans la table <code>Clients</code> (cas rare, souvent pour des tables mal structurées).
    </p>

    <!-- FULL JOIN -->
    <h3>4. FULL JOIN</h3>
    <p style="font-size: 1.1em; color: #333;">
        La jointure <strong>FULL JOIN</strong> renvoie tous les enregistrements des deux tables, en affichant <code>NULL</code> pour les colonnes sans correspondance. 
        Cette jointure est utile pour afficher tous les enregistrements, qu'ils aient ou non une correspondance dans l'autre table.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Récupérer tous les clients et toutes les commandes, y compris les non correspondants
SELECT Clients.nom, Clients.prenom, Commandes.date_commande, Commandes.montant
FROM Clients
FULL OUTER JOIN Commandes ON Clients.client_id = Commandes.client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête retourne tous les clients et toutes les commandes. Les colonnes des enregistrements sans correspondance contiennent <code>NULL</code>. Note : certains systèmes (comme MySQL) n'implémentent pas directement <code>FULL JOIN</code>, auquel cas il est possible d'utiliser une combinaison de <code>LEFT JOIN</code> et <code>RIGHT JOIN</code>.
    </p>

    <!-- Bonnes Pratiques pour les Jointures -->
    <h3>Bonnes Pratiques pour les Jointures</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser INNER JOIN pour des relations fortes</strong> : Lorsque les deux tables sont censées avoir une relation pour chaque ligne.</li>
        <li><strong>Utiliser LEFT JOIN pour conserver tous les enregistrements de la table principale</strong> : Par exemple, pour garder tous les clients même sans commande.</li>
        <li><strong>Optimiser avec des index</strong> : L’utilisation d’index sur les colonnes de jointure (<code>ON</code>) améliore les performances de la requête.</li>
        <li><strong>Éviter les FULL JOIN sur des grandes tables</strong> : Cela peut créer des tables temporaires volumineuses et ralentir le traitement. Préférez les <code>LEFT</code> et <code>RIGHT JOIN</code> quand c’est possible.</li>
        <li><strong>Vérifier les résultats avec des requêtes de test</strong> : Avant d’utiliser une jointure dans une requête complexe, testez avec <code>SELECT</code> simple pour vous assurer des résultats attendus.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, les jointures peuvent être optimisées pour récupérer des données connexes efficacement dans les bases de données relationnelles, facilitant les rapports et analyses dans les contextes professionnels.
    </p>
</div>
<div class="content-section" id="groupby" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>GROUP BY - Regroupement des Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        La clause <strong>GROUP BY</strong> en SQL permet de regrouper les enregistrements d'une table en fonction des valeurs d'une ou plusieurs colonnes. 
        Elle est couramment utilisée avec des fonctions d'agrégation (<code>COUNT</code>, <code>SUM</code>, <code>AVG</code>, <code>MAX</code>, <code>MIN</code>) pour obtenir des résumés de données, par exemple le nombre de commandes par client ou la moyenne des ventes par produit.
    </p>

    <!-- Utilisation de GROUP BY avec COUNT -->
    <h3>1. GROUP BY avec COUNT</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>COUNT</code> associée à <code>GROUP BY</code> permet de compter le nombre d'enregistrements dans chaque groupe. Par exemple, on peut compter le nombre de commandes par client.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Compter le nombre de commandes par client
SELECT client_id, COUNT(*) AS nombre_commandes
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, la requête affiche le nombre de commandes passées par chaque client. C'est particulièrement utile pour des rapports de suivi d'activité client.
    </p>

    <!-- Utilisation de GROUP BY avec SUM -->
    <h3>2. GROUP BY avec SUM</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>SUM</code> permet de calculer le total des valeurs d'une colonne pour chaque groupe. Cela peut être utilisé pour obtenir le montant total des ventes par client ou par produit.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Total des ventes par client
SELECT client_id, SUM(montant) AS total_ventes
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête calcule le montant total des ventes pour chaque client, utile pour générer des rapports de revenus client.
    </p>

    <!-- Utilisation de GROUP BY avec AVG -->
    <h3>3. GROUP BY avec AVG</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>AVG</code> est utilisée pour calculer la moyenne d'une colonne pour chaque groupe, telle que la moyenne des ventes par produit ou la moyenne des dépenses par client.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Moyenne des montants dépensés par client
SELECT client_id, AVG(montant) AS moyenne_depenses
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ce calcul permet de voir la moyenne de dépenses par client, utile pour les analyses de comportement d'achat.
    </p>

    <!-- Utilisation de GROUP BY avec HAVING -->
    <h3>4. GROUP BY avec HAVING</h3>
    <p style="font-size: 1.1em; color: #333;">
        La clause <code>HAVING</code> fonctionne comme <code>WHERE</code> mais s'applique aux groupes formés par <code>GROUP BY</code>. Elle est utilisée pour filtrer les résultats après l'agrégation, par exemple pour afficher uniquement les clients ayant un certain nombre de commandes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les clients avec plus de 5 commandes
SELECT client_id, COUNT(*) AS nombre_commandes
FROM Commandes
GROUP BY client_id
HAVING COUNT(*) > 5;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête affiche uniquement les clients ayant passé plus de cinq commandes. <code>HAVING</code> est essentiel pour appliquer des conditions sur les résultats agrégés.
    </p>

    <!-- Utilisation de GROUP BY avec plusieurs colonnes -->
    <h3>5. GROUP BY avec Plusieurs Colonnes</h3>
    <p style="font-size: 1.1em; color: #333;">
        Il est possible de grouper par plusieurs colonnes pour obtenir des regroupements plus détaillés. Par exemple, on peut grouper par ville et par client pour obtenir le nombre de commandes dans chaque ville pour chaque client.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Nombre de commandes par ville et par client
SELECT ville, client_id, COUNT(*) AS nombre_commandes
FROM Commandes
GROUP BY ville, client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, nous regroupons les commandes par ville et par client, ce qui est utile pour les analyses géographiques des ventes.
    </p>

    <!-- Bonnes Pratiques pour GROUP BY -->
    <h3>Bonnes Pratiques pour GROUP BY</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser uniquement les colonnes nécessaires</strong> : Ne groupez que par les colonnes nécessaires pour éviter des calculs supplémentaires inutiles.</li>
        <li><strong>Utiliser HAVING pour les filtres sur les agrégations</strong> : Préférez <code>HAVING</code> à <code>WHERE</code> lorsque vous filtrez des résultats agrégés.</li>
        <li><strong>Préférer les index</strong> : Les index sur les colonnes utilisées dans <code>GROUP BY</code> peuvent améliorer les performances.</li>
        <li><strong>Utiliser GROUP BY avec parcimonie sur de grands ensembles</strong> : Grouper de grandes tables peut être coûteux en ressources ; des ajustements de requêtes peuvent être nécessaires pour optimiser les performances.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, <code>GROUP BY</code> devient un outil puissant pour générer des analyses et des rapports précis et performants, essentiels dans les environnements professionnels.
    </p>
</div>

<div class="content-section" id="orderby" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>ORDER BY - Tri des Résultats</h2>
    <p style="font-size: 1.1em; color: #333;">
        La clause <strong>ORDER BY</strong> en SQL permet de trier les résultats d'une requête selon une ou plusieurs colonnes. 
        Elle peut être utilisée pour organiser les données en ordre croissant (<code>ASC</code>) ou décroissant (<code>DESC</code>), ce qui est particulièrement utile pour des rapports, des tableaux de bord ou des analyses de données.
    </p>

    <!-- Tri de Base avec ORDER BY -->
    <h3>1. Tri de Base avec ORDER BY</h3>
    <p style="font-size: 1.1em; color: #333;">
        Par défaut, <code>ORDER BY</code> trie les données en ordre croissant. La clause <code>ASC</code> est optionnelle dans ce cas. Pour trier les données en ordre décroissant, utilisez <code>DESC</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Trier les clients par nom en ordre croissant (par défaut)
SELECT nom, prenom FROM Clients
ORDER BY nom;

-- Trier les clients par nom en ordre décroissant
SELECT nom, prenom FROM Clients
ORDER BY nom DESC;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ces exemples montrent comment trier les résultats par le nom des clients. Le tri croissant est utilisé pour un ordre alphabétique, tandis que le tri décroissant est utile pour inverser cet ordre.
    </p>

    <!-- Tri sur Plusieurs Colonnes -->
    <h3>2. Tri sur Plusieurs Colonnes</h3>
    <p style="font-size: 1.1em; color: #333;">
        <code>ORDER BY</code> peut être appliqué à plusieurs colonnes en spécifiant l'ordre pour chacune. Cette fonctionnalité est utile pour des tris hiérarchisés, par exemple, trier par ville puis par nom de client dans chaque ville.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Trier les clients par ville (ordre croissant) puis par nom (ordre croissant)
SELECT ville, nom, prenom FROM Clients
ORDER BY ville, nom;

-- Trier les clients par ville (ordre croissant) et par date d'inscription (ordre décroissant)
SELECT ville, nom, date_inscription FROM Clients
ORDER BY ville ASC, date_inscription DESC;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        En utilisant plusieurs colonnes dans <code>ORDER BY</code>, les données peuvent être structurées selon des priorités spécifiques, offrant une lecture plus claire et mieux organisée pour les rapports.
    </p>

    <!-- ORDER BY avec Expressions et Calculs -->
    <h3>3. ORDER BY avec Expressions et Calculs</h3>
    <p style="font-size: 1.1em; color: #333;">
        <code>ORDER BY</code> peut également trier les résultats selon des expressions ou des calculs appliqués aux colonnes. Cela est pratique pour trier des données dérivées ou calculées, comme le montant total des ventes ou l'âge des clients.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Trier les commandes par montant total décroissant
SELECT client_id, montant, montant * 1.2 AS montant_TTC
FROM Commandes
ORDER BY montant_TTC DESC;

-- Trier les clients par âge (en utilisant une expression pour calculer l'âge)
SELECT nom, prenom, YEAR(CURDATE()) - YEAR(date_naissance) AS age
FROM Clients
ORDER BY age DESC;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans ces exemples, <code>ORDER BY</code> trie les résultats selon des valeurs calculées, telles que le montant avec taxes et l'âge des clients, fournissant des options de tri avancées.
    </p>

    <!-- Utilisation de LIMIT avec ORDER BY -->
    <h3>4. Utilisation de LIMIT avec ORDER BY</h3>
    <p style="font-size: 1.1em; color: #333;">
        La combinaison de <code>ORDER BY</code> et <code>LIMIT</code> est courante pour récupérer les <em>n</em> premières lignes, comme les meilleures ventes ou les articles récents.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Obtenir les 5 clients les plus récents par date d'inscription
SELECT nom, prenom, date_inscription
FROM Clients
ORDER BY date_inscription DESC
LIMIT 5;

-- Obtenir les 10 produits les plus chers
SELECT produit_id, nom_produit, prix
FROM Produits
ORDER BY prix DESC
LIMIT 10;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        En utilisant <code>LIMIT</code> avec <code>ORDER BY</code>, il est facile de récupérer un sous-ensemble des données classées, tel que les meilleures ventes ou les utilisateurs les plus récents.
    </p>

    <!-- Bonnes Pratiques pour ORDER BY -->
    <h3>Bonnes Pratiques pour ORDER BY</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des index pour les colonnes de tri</strong> : Si vous triez régulièrement par certaines colonnes, des index peuvent grandement améliorer les performances.</li>
        <li><strong>Combiner ORDER BY et LIMIT pour les grandes tables</strong> : Pour des ensembles volumineux, limiter les résultats après le tri optimise l'exécution de la requête.</li>
        <li><strong>Éviter les expressions lourdes dans ORDER BY</strong> : Les calculs complexes peuvent ralentir le tri. Privilégiez les colonnes directes ou optimisez les expressions.</li>
        <li><strong>Vérifier les résultats</strong> : Effectuez des tests avec et sans <code>ORDER BY</code> pour vous assurer que les résultats sont comme attendu, notamment pour les tris sur des colonnes avec des valeurs NULL.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, la clause <code>ORDER BY</code> peut être utilisée de manière efficace pour organiser les résultats des requêtes SQL, 
        facilitant ainsi la lecture et l’interprétation des données dans des contextes professionnels.
    </p>
</div>
<div class="content-section" id="having" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>HAVING - Filtrage des Résultats Agrégés</h2>
    <p style="font-size: 1.1em; color: #333;">
        La clause <strong>HAVING</strong> est utilisée en SQL pour filtrer les résultats d'une requête après un regroupement avec <code>GROUP BY</code>. 
        Elle est souvent combinée avec des fonctions d'agrégation telles que <code>COUNT</code>, <code>SUM</code>, <code>AVG</code>, <code>MAX</code>, et <code>MIN</code>. 
        Contrairement à <code>WHERE</code>, qui filtre les lignes avant le regroupement, <code>HAVING</code> applique les conditions aux données agrégées.
    </p>

    <!-- Utilisation de HAVING avec GROUP BY et COUNT -->
    <h3>1. Utilisation de HAVING avec COUNT</h3>
    <p style="font-size: 1.1em; color: #333;">
        La combinaison de <code>HAVING</code> et <code>COUNT</code> permet de filtrer les groupes en fonction du nombre d'enregistrements dans chaque groupe. 
        Par exemple, afficher uniquement les clients ayant passé un certain nombre de commandes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les clients ayant passé plus de 3 commandes
SELECT client_id, COUNT(*) AS nombre_commandes
FROM Commandes
GROUP BY client_id
HAVING COUNT(*) > 3;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, seuls les clients ayant plus de trois commandes sont affichés. Ce type de filtrage est souvent utilisé dans les rapports pour identifier les clients actifs.
    </p>

    <!-- Utilisation de HAVING avec SUM -->
    <h3>2. Utilisation de HAVING avec SUM</h3>
    <p style="font-size: 1.1em; color: #333;">
        <code>HAVING</code> peut également être utilisé avec <code>SUM</code> pour filtrer les groupes en fonction du total de valeurs agrégées. 
        Par exemple, on peut filtrer les clients dont le montant total des achats dépasse un certain seuil.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les clients ayant dépensé plus de 1000 euros au total
SELECT client_id, SUM(montant) AS total_depenses
FROM Commandes
GROUP BY client_id
HAVING SUM(montant) > 1000;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête permet d'isoler les clients avec un total de dépenses supérieur à 1000 euros, utile pour les analyses de segmentation clients basées sur les dépenses.
    </p>

    <!-- Utilisation de HAVING avec AVG -->
    <h3>3. Utilisation de HAVING avec AVG</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>AVG</code> combinée avec <code>HAVING</code> permet de filtrer les groupes par moyenne. Par exemple, cela peut être utile pour identifier les produits ayant une moyenne de ventes élevée.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les produits avec un prix moyen de commande supérieur à 50 euros
SELECT produit_id, AVG(prix) AS prix_moyen
FROM Commandes
GROUP BY produit_id
HAVING AVG(prix) > 50;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ce type de requête est utile pour repérer les produits haut de gamme ou pour les analyses tarifaires basées sur la moyenne des ventes.
    </p>

    <!-- Utilisation de HAVING avec MAX et MIN -->
    <h3>4. Utilisation de HAVING avec MAX et MIN</h3>
    <p style="font-size: 1.1em; color: #333;">
        <code>HAVING</code> peut également être utilisé avec <code>MAX</code> et <code>MIN</code> pour filtrer des groupes selon les valeurs maximales ou minimales, par exemple, pour trouver les clients avec des commandes particulièrement élevées.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les clients dont la commande maximale dépasse 500 euros
SELECT client_id, MAX(montant) AS commande_max
FROM Commandes
GROUP BY client_id
HAVING MAX(montant) > 500;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête affiche les clients ayant passé au moins une commande de plus de 500 euros, utile pour identifier des clients premium ou des achats exceptionnels.
    </p>

    <!-- Bonnes Pratiques pour l'Utilisation de HAVING -->
    <h3>Bonnes Pratiques pour l'Utilisation de HAVING</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser HAVING pour les conditions sur les agrégations</strong> : Préférez <code>HAVING</code> à <code>WHERE</code> lorsque vous filtrez des données agrégées.</li>
        <li><strong>Éviter HAVING sans GROUP BY</strong> : <code>HAVING</code> est principalement conçu pour fonctionner avec <code>GROUP BY</code> et des fonctions d'agrégation. Sans <code>GROUP BY</code>, il agit comme <code>WHERE</code>, mais est moins performant.</li>
        <li><strong>Optimiser avec des index</strong> : Les index sur les colonnes de <code>GROUP BY</code> peuvent améliorer les performances de la requête, notamment sur les grandes tables.</li>
        <li><strong>Éviter des conditions lourdes dans HAVING</strong> : Les calculs complexes ou conditions multiples dans <code>HAVING</code> peuvent ralentir la requête ; simplifiez autant que possible.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, la clause <code>HAVING</code> devient un outil puissant pour effectuer des analyses précises sur des données agrégées, 
        ce qui est essentiel pour les rapports et les statistiques dans les contextes professionnels.
    </p>
</div>
<div class="content-section" id="sous-requetes" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Sous-requêtes - Requêtes Imbriquées</h2>
    <p style="font-size: 1.1em; color: #333;">
        Une <strong>sous-requête</strong>, ou requête imbriquée, est une requête SQL placée à l'intérieur d'une autre requête SQL. 
        Elle est souvent utilisée pour extraire des informations en fonction d'un jeu de données spécifique ou pour répondre à des critères complexes. 
        Les sous-requêtes peuvent apparaître dans des clauses comme <code>SELECT</code>, <code>FROM</code>, <code>WHERE</code>, et <code>HAVING</code>, et sont particulièrement utiles pour des opérations de filtrage avancées ou des calculs intermédiaires.
    </p>

    <!-- Sous-requête dans WHERE -->
    <h3>1. Sous-requête dans WHERE</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une sous-requête dans la clause <code>WHERE</code> permet de filtrer les résultats d'une requête en fonction de valeurs renvoyées par une autre requête. 
        Elle est utile pour des conditions basées sur des calculs ou des comparaisons avancées.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Obtenir les clients ayant passé au moins une commande de plus de 1000 euros
SELECT nom, prenom FROM Clients
WHERE client_id IN (
    SELECT client_id FROM Commandes
    WHERE montant > 1000
);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête affiche les clients ayant effectué des commandes de plus de 1000 euros, en utilisant une sous-requête pour identifier les <code>client_id</code> correspondants.
    </p>

    <!-- Sous-requête dans SELECT -->
    <h3>2. Sous-requête dans SELECT</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une sous-requête dans la clause <code>SELECT</code> permet d'inclure des valeurs calculées ou des résultats conditionnels dans le jeu de données principal. 
        Par exemple, elle peut être utilisée pour afficher le total des commandes d'un client dans une seule ligne de résultat.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher chaque client avec son total des dépenses
SELECT nom, prenom, 
       (SELECT SUM(montant) FROM Commandes WHERE Clients.client_id = Commandes.client_id) AS total_depenses
FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, la sous-requête calcule le total des dépenses de chaque client, qui est affiché dans une colonne <code>total_depenses</code> du jeu de résultats principal.
    </p>

    <!-- Sous-requête dans FROM -->
    <h3>3. Sous-requête dans FROM</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une sous-requête dans la clause <code>FROM</code> crée une table temporaire (souvent appelée <em>table dérivée</em>) à partir de laquelle on peut sélectionner des données. 
        Cette approche est utile pour structurer des calculs intermédiaires dans des requêtes complexes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Calculer le montant moyen des commandes par client et filtrer les clients avec une moyenne de plus de 500 euros
SELECT client_id, montant_moyen
FROM (
    SELECT client_id, AVG(montant) AS montant_moyen
    FROM Commandes
    GROUP BY client_id
) AS sous_requete
WHERE montant_moyen > 500;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, la sous-requête calcule la moyenne des montants des commandes par client. Ensuite, la requête principale sélectionne les clients dont la moyenne dépasse 500 euros.
    </p>

    <!-- Sous-requête corrélée -->
    <h3>4. Sous-requête Corrélée</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une <strong>sous-requête corrélée</strong> est une sous-requête qui dépend des valeurs de la requête principale. 
        Elle est réévaluée pour chaque ligne de la requête principale, ce qui la rend plus lente mais utile pour des conditions complexes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les commandes ayant un montant supérieur à la moyenne des commandes du même client
SELECT commande_id, client_id, montant
FROM Commandes AS c1
WHERE montant > (
    SELECT AVG(montant) FROM Commandes AS c2
    WHERE c2.client_id = c1.client_id
);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, la sous-requête dépend de chaque ligne de la requête principale et calcule la moyenne des montants par client. Elle retourne les commandes dont le montant est supérieur à cette moyenne.
    </p>

    <!-- Bonnes Pratiques pour les Sous-requêtes -->
    <h3>Bonnes Pratiques pour les Sous-requêtes</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Limiter l'utilisation des sous-requêtes corrélées</strong> : Les sous-requêtes corrélées sont souvent plus lentes, surtout sur de grands ensembles de données. Préférez les sous-requêtes non corrélées si possible.</li>
        <li><strong>Utiliser des alias pour les sous-requêtes</strong> : Lorsque vous placez une sous-requête dans <code>FROM</code>, attribuez-lui un alias pour faciliter la lecture et l'optimisation.</li>
        <li><strong>Privilégier les jointures lorsque possible</strong> : Dans certains cas, une jointure peut remplacer une sous-requête avec un meilleur rendement.</li>
        <li><strong>Optimiser les sous-requêtes avec des index</strong> : Ajouter des index sur les colonnes filtrées dans les sous-requêtes peut améliorer la performance globale.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, les sous-requêtes deviennent un outil puissant pour gérer des requêtes SQL complexes, permettant de produire des résultats précis et détaillés, adaptés aux besoins d'analyse dans des environnements professionnels.
    </p>
</div>
<div class="content-section" id="fonctions-aggregats" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Fonctions d'Agrégats - COUNT, SUM, AVG</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>fonctions d'agrégats</strong> en SQL permettent de calculer des valeurs à partir d'un ensemble de données et sont utilisées pour des opérations comme le comptage, la somme, et la moyenne des valeurs d'une colonne. 
        Les fonctions <code>COUNT</code>, <code>SUM</code>, et <code>AVG</code> sont parmi les plus couramment utilisées dans l’analyse de données et les rapports pour produire des résumés de données.
    </p>

    <!-- Fonction COUNT -->
    <h3>1. COUNT - Compter les Enregistrements</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>COUNT</code> retourne le nombre d'enregistrements dans une colonne ou une table. Elle est utile pour savoir combien de fois une condition est remplie ou pour obtenir le nombre total de lignes dans un groupe.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Compter le nombre total de clients
SELECT COUNT(*) AS nombre_clients
FROM Clients;

-- Compter le nombre de commandes pour chaque client
SELECT client_id, COUNT(*) AS nombre_commandes
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>COUNT(*)</code> renvoie le nombre total de clients dans la table <code>Clients</code>. Le second exemple montre comment compter le nombre de commandes pour chaque client, une utilisation fréquente pour les rapports d'activité.
    </p>

    <!-- Fonction SUM -->
    <h3>2. SUM - Calculer la Somme des Valeurs</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>SUM</code> retourne la somme des valeurs dans une colonne spécifiée. Elle est souvent utilisée pour additionner des montants, comme le total des ventes ou des revenus par client ou par produit.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Calculer le montant total des commandes
SELECT SUM(montant) AS total_ventes
FROM Commandes;

-- Total des ventes par client
SELECT client_id, SUM(montant) AS total_client
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Le premier exemple montre le montant total des ventes dans la table <code>Commandes</code>. Dans le second exemple, la somme est calculée pour chaque client, ce qui permet d'analyser les contributions individuelles des clients aux ventes totales.
    </p>

    <!-- Fonction AVG -->
    <h3>3. AVG - Calculer la Moyenne des Valeurs</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>AVG</code> calcule la moyenne des valeurs d'une colonne. Elle est utile pour obtenir des indicateurs de performance, comme le prix moyen des commandes ou la moyenne des dépenses par client.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Calculer le prix moyen des commandes
SELECT AVG(montant) AS moyenne_commandes
FROM Commandes;

-- Moyenne des dépenses par client
SELECT client_id, AVG(montant) AS moyenne_depenses
FROM Commandes
GROUP BY client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>AVG</code> calcule le montant moyen des commandes. Dans le second, il renvoie la moyenne des dépenses pour chaque client, une métrique utile pour les analyses de comportement d'achat.
    </p>

    <!-- Bonnes Pratiques pour les Fonctions d'Agrégats -->
    <h3>Bonnes Pratiques pour les Fonctions d'Agrégats</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser GROUP BY avec les fonctions d'agrégats</strong> : Pour obtenir des calculs agrégés par groupe (par exemple, par client ou par produit), ajoutez la clause <code>GROUP BY</code>.</li>
        <li><strong>Combiner avec HAVING pour filtrer les résultats agrégés</strong> : Utilisez <code>HAVING</code> pour appliquer des conditions après l'agrégation, comme filtrer les clients avec une moyenne de dépenses au-dessus d'un certain seuil.</li>
        <li><strong>Optimiser avec des index</strong> : Si les données sont volumineuses, des index sur les colonnes utilisées dans les agrégations peuvent améliorer les performances.</li>
        <li><strong>Attention aux NULL</strong> : Par défaut, les valeurs <code>NULL</code> sont ignorées dans les agrégats. Utilisez <code>COALESCE</code> pour remplacer les <code>NULL</code> si nécessaire.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, les fonctions d'agrégats permettent de calculer des statistiques essentielles pour les rapports et les analyses de données, 
        ce qui est indispensable dans les environnements professionnels pour une prise de décision éclairée.
    </p>
</div>
<div class="content-section" id="fonctions-texte" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Fonctions Texte - UPPER, LOWER, CONCAT</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>fonctions texte</strong> en SQL permettent de manipuler des chaînes de caractères. Elles sont essentielles pour nettoyer et formater les données textuelles dans les bases de données, 
        ainsi que pour réaliser des transformations de texte pour des rapports ou des recherches. Parmi les plus courantes, on retrouve <code>UPPER</code>, <code>LOWER</code>, et <code>CONCAT</code>.
    </p>

    <!-- Fonction UPPER -->
    <h3>1. UPPER - Convertir en Majuscules</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>UPPER</code> convertit toutes les lettres d'une chaîne de caractères en majuscules. Elle est utile pour standardiser le format des données avant des comparaisons ou pour afficher des noms propres dans un format plus lisible.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher les noms des clients en majuscules
SELECT UPPER(nom) AS nom_majuscule, prenom
FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, la fonction <code>UPPER</code> est utilisée pour convertir les noms des clients en majuscules. C'est une pratique courante pour les rapports formels ou les documents imprimés.
    </p>

    <!-- Fonction LOWER -->
    <h3>2. LOWER - Convertir en Minuscules</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>LOWER</code> convertit toutes les lettres d'une chaîne de caractères en minuscules. Elle est particulièrement utile pour normaliser des valeurs textuelles avant des recherches non sensibles à la casse.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Rechercher un email sans se soucier de la casse
SELECT email
FROM Clients
WHERE LOWER(email) = 'exemple@domaine.com';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, <code>LOWER</code> est utilisé pour s'assurer que la recherche d'email n'est pas sensible à la casse, ce qui est utile pour des données entrées de manière incohérente.
    </p>

    <!-- Fonction CONCAT -->
    <h3>3. CONCAT - Concaténer des Chaînes</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>CONCAT</code> permet de combiner plusieurs chaînes de caractères en une seule. C'est une fonction essentielle pour formater les informations, comme l'affichage d'un nom complet ou la création de messages personnalisés.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Combiner le prénom et le nom des clients
SELECT CONCAT(prenom, ' ', nom) AS nom_complet
FROM Clients;

-- Créer un message de bienvenue personnalisé
SELECT CONCAT('Bienvenue, ', prenom, ' ', nom, '!') AS message_bienvenue
FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>CONCAT</code> crée un nom complet en combinant le prénom et le nom du client. Dans le second, elle génère un message de bienvenue personnalisé, 
        souvent utilisé dans les interfaces utilisateur.
    </p>

    <!-- Bonnes Pratiques pour les Fonctions Texte -->
    <h3>Bonnes Pratiques pour les Fonctions Texte</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser UPPER ou LOWER pour les comparaisons</strong> : Pour les recherches non sensibles à la casse, appliquez systématiquement <code>UPPER</code> ou <code>LOWER</code> à la colonne et à la valeur recherchée.</li>
        <li><strong>Préférer CONCAT pour assembler des champs textuels</strong> : <code>CONCAT</code> est idéal pour formater des noms complets, adresses, ou tout autre texte composé de plusieurs colonnes.</li>
        <li><strong>Éviter les chaînes longues dans CONCAT</strong> : Si vous devez concaténer plusieurs valeurs, limitez la longueur des chaînes pour ne pas encombrer la base de données.</li>
        <li><strong>Assurer la cohérence des formats de texte</strong> : Utilisez <code>UPPER</code> ou <code>LOWER</code> dans des vues ou rapports pour des formats uniformes.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, les fonctions texte permettent de manipuler et formater les données textuelles de manière cohérente et efficace, 
        contribuant ainsi à la clarté et à la lisibilité des données dans des environnements professionnels.
    </p>
</div>
<div class="content-section" id="fonctions-date" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Fonctions de Date - NOW, DATEADD, DATEDIFF</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>fonctions de date</strong> en SQL sont essentielles pour manipuler les données temporelles, permettant de calculer, comparer et transformer des dates. 
        Parmi les fonctions les plus couramment utilisées, on trouve <code>NOW</code>, <code>DATEADD</code>, et <code>DATEDIFF</code>, qui facilitent les opérations de calcul de date pour des rapports, analyses et autres traitements temporels.
    </p>

    <!-- Fonction NOW -->
    <h3>1. NOW - Obtenir la Date et l'Heure Actuelles</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>NOW</code> renvoie la date et l'heure actuelles du système. Elle est utile pour enregistrer un horodatage des opérations ou pour obtenir l'heure actuelle dans des requêtes.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Afficher la date et l'heure actuelles
SELECT NOW() AS date_heure_actuelle;

-- Ajouter un enregistrement avec l'horodatage de l'opération
INSERT INTO Commandes (client_id, montant, date_commande)
VALUES (1, 250.00, NOW());
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>NOW</code> renvoie la date et l'heure actuelles. Dans le second, <code>NOW</code> est utilisé pour enregistrer la date et l'heure de commande dans la table <code>Commandes</code>.
    </p>

    <!-- Fonction DATEADD -->
    <h3>2. DATEADD - Ajouter une Durée à une Date</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>DATEADD</code> permet d'ajouter une durée (jours, mois, années) à une date donnée. Cette fonction est très pratique pour les calculs relatifs, comme planifier des échéances ou des rappels.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Ajouter 30 jours à la date actuelle
SELECT DATEADD(day, 30, NOW()) AS date_echeance;

-- Calculer la date d'expiration d'un abonnement de 1 an
SELECT client_id, DATEADD(year, 1, date_inscription) AS date_expiration
FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>DATEADD</code> ajoute 30 jours à la date actuelle, utile pour calculer une échéance. Dans le second, elle est utilisée pour calculer la date d'expiration d'un abonnement d'un an.
    </p>

    <!-- Fonction DATEDIFF -->
    <h3>3. DATEDIFF - Calculer la Différence entre Deux Dates</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>DATEDIFF</code> retourne la différence entre deux dates en jours. Elle est couramment utilisée pour mesurer la durée entre deux événements, comme la durée de l'abonnement ou le nombre de jours depuis une commande.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Calculer le nombre de jours depuis l'inscription de chaque client
SELECT client_id, DATEDIFF(NOW(), date_inscription) AS jours_depuis_inscription
FROM Clients;

-- Obtenir les commandes passées dans les 30 derniers jours
SELECT commande_id, client_id, montant
FROM Commandes
WHERE DATEDIFF(NOW(), date_commande) <= 30;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>DATEDIFF</code> calcule le nombre de jours écoulés depuis l'inscription de chaque client. Dans le second, elle est utilisée pour obtenir les commandes passées au cours des 30 derniers jours.
    </p>

    <!-- Bonnes Pratiques pour les Fonctions de Date -->
    <h3>Bonnes Pratiques pour les Fonctions de Date</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser NOW pour les opérations en temps réel</strong> : <code>NOW</code> est parfait pour les horodatages, mais évitez de l'utiliser dans des champs pré-calculés.</li>
        <li><strong>Utiliser DATEADD pour gérer les échéances et abonnements</strong> : Ajoutez des durées (jours, mois, années) aux dates pour automatiser les calculs de fin d'abonnement ou de période d'essai.</li>
        <li><strong>Utiliser DATEDIFF pour analyser les durées</strong> : Idéal pour des métriques comme la rétention des clients, la durée moyenne entre deux achats, etc.</li>
        <li><strong>Gérer les formats de date avec attention</strong> : Assurez-vous que les formats sont compatibles entre les différentes fonctions de date et les types de données.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, les fonctions de date permettent de gérer efficacement les données temporelles, essentielles pour des analyses précises et une gestion cohérente des données dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="fonctions-conversion" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Fonctions de Conversion - CAST, CONVERT</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>fonctions de conversion</strong> en SQL permettent de transformer des données d'un type à un autre, comme de <code>STRING</code> à <code>INTEGER</code> ou de <code>DATE</code> à <code>DATETIME</code>. 
        Les fonctions <code>CAST</code> et <code>CONVERT</code> sont couramment utilisées pour garantir que les données sont au bon format pour une analyse correcte ou pour des calculs.
    </p>

    <!-- Fonction CAST -->
    <h3>1. CAST - Convertir des Données d'un Type à un Autre</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>CAST</code> convertit une valeur d'un type de données à un autre. Elle est utile pour garantir la compatibilité entre les types de données dans les calculs ou les comparaisons.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Convertir une chaîne en entier pour les calculs
SELECT CAST('1234' AS INT) AS entier_valeur;

-- Convertir une date en chaîne de caractères pour l'affichage
SELECT CAST(date_inscription AS VARCHAR(10)) AS date_texte
FROM Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>CAST</code> convertit la chaîne de caractères <code>'1234'</code> en entier pour des calculs numériques. Dans le second, il transforme une date en texte pour un formatage personnalisé dans un rapport.
    </p>

    <!-- Fonction CONVERT -->
    <h3>2. CONVERT - Conversion avec Format Spécifique</h3>
    <p style="font-size: 1.1em; color: #333;">
        La fonction <code>CONVERT</code> est similaire à <code>CAST</code>, mais elle offre un contrôle supplémentaire sur les formats, notamment pour les dates et les nombres. Cette fonction est particulièrement utile pour les bases de données qui supportent des formats spécifiques.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Convertir une date en texte avec un format spécifique (SQL Server)
SELECT CONVERT(VARCHAR, date_commande, 103) AS date_format
FROM Commandes;

-- Convertir un nombre décimal en chaîne de caractères
SELECT CONVERT(VARCHAR, montant, 10) AS montant_texte
FROM Commandes;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, <code>CONVERT</code> transforme une date en texte au format "jj/mm/aaaa" (format 103 dans SQL Server). Dans le second, il convertit un nombre en texte, ce qui peut être utile pour des affichages personnalisés.
    </p>

    <!-- Bonnes Pratiques pour les Fonctions de Conversion -->
    <h3>Bonnes Pratiques pour les Fonctions de Conversion</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser CAST pour des conversions générales</strong> : <code>CAST</code> est plus standard et fonctionne sur plusieurs bases de données pour des conversions simples.</li>
        <li><strong>Utiliser CONVERT pour les formats spécifiques</strong> : Lorsque vous avez besoin de formats particuliers (ex. dates en "jj/mm/aaaa"), <code>CONVERT</code> peut offrir plus de flexibilité, surtout dans SQL Server.</li>
        <li><strong>Éviter les conversions inutiles</strong> : Les conversions peuvent ralentir les requêtes, surtout sur de grandes tables. Assurez-vous qu'elles sont nécessaires.</li>
        <li><strong>Gérer les erreurs de conversion</strong> : Assurez-vous que les données sont bien convertibles (ex. éviter de convertir des chaînes non numériques en entier) pour éviter les erreurs.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, les fonctions de conversion vous permettent de manipuler les données efficacement et d'assurer la cohérence des types de données, 
        ce qui est crucial pour des analyses et des rapports précis dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="creation-db" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Création et Suppression de Base de Données</h2>
    <p style="font-size: 1.1em; color: #333;">
        En SQL, la création et la suppression de bases de données sont des opérations de gestion essentielles. La commande <code>CREATE DATABASE</code> permet d'établir une nouvelle base de données pour organiser des tables et d'autres objets, tandis que la commande <code>DROP DATABASE</code> est utilisée pour supprimer une base de données existante et tous les objets qu'elle contient.
    </p>

    <!-- CREATE DATABASE -->
    <h3>1. CREATE DATABASE - Créer une Base de Données</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE DATABASE</code> crée une nouvelle base de données. Cette opération doit être effectuée avec soin, en s'assurant que le nom de la base de données est unique dans le système.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer une base de données appelée "EntrepriseDB"
CREATE DATABASE EntrepriseDB;

-- Spécifier des options supplémentaires (ex. charset) lors de la création
CREATE DATABASE EntrepriseDB
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Le premier exemple crée une base de données nommée <code>EntrepriseDB</code> avec les paramètres par défaut. Dans le second exemple, des options de codage des caractères (UTF-8) sont ajoutées pour assurer la prise en charge des caractères spéciaux, utile dans des environnements multilingues.
    </p>

    <!-- DROP DATABASE -->
    <h3>2. DROP DATABASE - Supprimer une Base de Données</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP DATABASE</code> supprime une base de données existante ainsi que toutes les tables, vues et autres objets qu'elle contient. Cette opération est irréversible, donc elle doit être utilisée avec précaution.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer la base de données "EntrepriseDB"
DROP DATABASE EntrepriseDB;

-- Vérifier si la base de données existe avant de la supprimer
DROP DATABASE IF EXISTS EntrepriseDB;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, la commande <code>DROP DATABASE</code> supprime directement la base de données <code>EntrepriseDB</code>. Le second exemple utilise <code>IF EXISTS</code> pour éviter les erreurs si la base de données n'existe pas, une pratique recommandée dans des scripts SQL automatisés.
    </p>

    <!-- Bonnes Pratiques pour la Gestion des Bases de Données -->
    <h3>Bonnes Pratiques pour la Gestion des Bases de Données</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Nommer les bases de données de manière descriptive</strong> : Choisissez des noms qui reflètent clairement la fonction ou le contenu de la base de données, comme <code>RHDB</code> pour des données de ressources humaines.</li>
        <li><strong>Utiliser des options de codage de caractères</strong> : Spécifiez le jeu de caractères et le collationnement lors de la création pour s'assurer que la base prend en charge toutes les langues et symboles requis.</li>
        <li><strong>Vérifier l'existence de la base avant suppression</strong> : Utilisez <code>IF EXISTS</code> pour éviter les erreurs dans les scripts automatisés ou en production.</li>
        <li><strong>Effectuer des sauvegardes régulières</strong> : Avant de supprimer une base de données, effectuez une sauvegarde pour éviter toute perte de données accidentelle.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, la gestion des bases de données devient plus sécurisée et fiable, ce qui est crucial pour maintenir l'intégrité des données et minimiser les risques d'erreurs dans des environnements professionnels.
    </p>
</div>
<div class="content-section" id="creation-tables" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Création et Suppression de Tables</h2>
    <p style="font-size: 1.1em; color: #333;">
        En SQL, les tables sont les structures de base pour organiser et stocker les données dans une base de données. La commande <code>CREATE TABLE</code> permet de créer une nouvelle table avec des colonnes spécifiques, tandis que la commande <code>DROP TABLE</code> est utilisée pour supprimer une table existante ainsi que toutes les données qu'elle contient.
    </p>

    <!-- CREATE TABLE -->
    <h3>1. CREATE TABLE - Créer une Table</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE TABLE</code> permet de définir une nouvelle table avec ses colonnes, leurs types de données, et les contraintes (comme <code>PRIMARY KEY</code> et <code>NOT NULL</code>). 
        Il est important de bien définir ces colonnes et contraintes pour garantir l'intégrité des données.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer une table "Employes" avec des colonnes et des contraintes
CREATE TABLE Employes (
    employe_id INT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    poste VARCHAR(50),
    salaire DECIMAL(10, 2) CHECK (salaire > 0),
    date_embauche DATE
);

-- Créer une table "Commandes" avec une clé étrangère
CREATE TABLE Commandes (
    commande_id INT PRIMARY KEY,
    client_id INT,
    montant DECIMAL(10, 2),
    date_commande DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (client_id) REFERENCES Clients(client_id)
);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, la table <code>Employes</code> est créée avec des colonnes pour l'ID, le nom, le prénom, le poste, le salaire, et la date d'embauche. 
        Une contrainte <code>CHECK</code> est appliquée pour s'assurer que le salaire est positif. Dans le second exemple, la table <code>Commandes</code> inclut une clé étrangère <code>client_id</code> pour établir une relation avec la table <code>Clients</code>.
    </p>

    <!-- DROP TABLE -->
    <h3>2. DROP TABLE - Supprimer une Table</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP TABLE</code> est utilisée pour supprimer une table existante ainsi que toutes les données qu'elle contient. Cette opération est irréversible, donc elle doit être utilisée avec précaution.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer la table "Employes"
DROP TABLE Employes;

-- Vérifier si la table "Commandes" existe avant de la supprimer
DROP TABLE IF EXISTS Commandes;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, la table <code>Employes</code> est supprimée. Le second exemple utilise <code>IF EXISTS</code> pour vérifier l'existence de la table <code>Commandes</code> avant de la supprimer, 
        ce qui est utile dans les scripts SQL automatisés pour éviter des erreurs si la table n'existe pas.
    </p>

    <!-- Bonnes Pratiques pour la Gestion des Tables -->
    <h3>Bonnes Pratiques pour la Gestion des Tables</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Définir des contraintes de clé primaire et étrangère</strong> : Assurez-vous que chaque table possède une clé primaire et que les relations sont bien définies par des clés étrangères pour garantir l'intégrité des données.</li>
        <li><strong>Utiliser IF EXISTS pour supprimer des tables</strong> : Cela permet d'éviter les erreurs dans les scripts automatisés si la table n'existe pas.</li>
        <li><strong>Effectuer des sauvegardes avant suppression</strong> : Avant de supprimer des tables avec des données importantes, effectuez une sauvegarde pour éviter toute perte de données.</li>
        <li><strong>Organiser les colonnes de manière logique</strong> : Placez les colonnes les plus importantes en premier, et regroupez les données similaires ensemble pour une meilleure lisibilité.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, vous pouvez gérer les tables de votre base de données de manière efficace et sécurisée, garantissant ainsi l'organisation et l'intégrité des données dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="indexation" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Indexation en SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>index</strong> en SQL permettent d'améliorer les performances des requêtes en rendant la recherche dans une base de données plus rapide. 
        Un index crée une structure de données qui optimise l'accès aux lignes d'une table, en particulier pour les colonnes fréquemment recherchées ou impliquées dans des jointures.
    </p>

    <!-- CREATE INDEX -->
    <h3>1. CREATE INDEX - Créer un Index</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE INDEX</code> crée un index sur une ou plusieurs colonnes d'une table. Un index peut être utilisé pour accélérer les requêtes <code>SELECT</code> impliquant des colonnes spécifiques, mais il augmente également le temps nécessaire aux opérations <code>INSERT</code>, <code>UPDATE</code>, et <code>DELETE</code> en raison de la gestion de l'index.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer un index simple sur la colonne "nom" dans la table "Employes"
CREATE INDEX idx_nom ON Employes(nom);

-- Créer un index composite sur les colonnes "client_id" et "date_commande" dans la table "Commandes"
CREATE INDEX idx_client_date ON Commandes(client_id, date_commande);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, un index simple est créé sur la colonne <code>nom</code> de la table <code>Employes</code>, ce qui accélère les recherches sur le nom. Dans le second exemple, un index composite est créé sur les colonnes <code>client_id</code> et <code>date_commande</code> dans la table <code>Commandes</code>, 
        ce qui améliore les performances des requêtes impliquant ces deux colonnes.
    </p>

    <!-- DROP INDEX -->
    <h3>2. DROP INDEX - Supprimer un Index</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP INDEX</code> supprime un index existant. Supprimer un index peut être nécessaire si celui-ci ne contribue pas aux performances ou si les données de la table ont évolué, rendant l'indexation inutile ou contre-productive.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer l'index "idx_nom" de la table "Employes"
DROP INDEX idx_nom ON Employes;

-- Supprimer l'index "idx_client_date" de la table "Commandes"
DROP INDEX idx_client_date ON Commandes;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ces commandes suppriment les index <code>idx_nom</code> et <code>idx_client_date</code> des tables <code>Employes</code> et <code>Commandes</code>. La suppression d'index non nécessaires peut alléger la base de données et accélérer les opérations de modification de données.
    </p>

    <!-- Types d'Index -->
    <h3>3. Types d'Index</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Index Unique</strong> : Empêche les valeurs dupliquées dans une colonne indexée. Il est créé avec <code>CREATE UNIQUE INDEX</code>.</li>
        <li><strong>Index Composite</strong> : Couvre plusieurs colonnes, souvent utilisé pour optimiser les requêtes impliquant plusieurs colonnes dans des clauses <code>WHERE</code>.</li>
        <li><strong>Index de Clé Primaire</strong> : Crée automatiquement un index unique sur une colonne définie comme <code>PRIMARY KEY</code>.</li>
        <li><strong>Index de Clé Étrangère</strong> : Peut être utilisé pour améliorer les jointures entre tables liées par des clés étrangères.</li>
        <li><strong>Index Plein Texte</strong> : Spécifique à certains moteurs, il optimise les recherches de texte intégral, notamment dans les colonnes de type texte ou chaîne de caractères.</li>
    </ul>

    <!-- Bonnes Pratiques pour l'Indexation -->
    <h3>Bonnes Pratiques pour l'Indexation</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Indexer les colonnes fréquemment recherchées</strong> : Ajoutez des index aux colonnes utilisées dans des filtres (<code>WHERE</code>) et des jointures pour améliorer les performances.</li>
        <li><strong>Utiliser des index composites pour des requêtes complexes</strong> : Les index sur plusieurs colonnes peuvent accélérer les requêtes avec des filtres combinés.</li>
        <li><strong>Éviter l'indexation excessive</strong> : Trop d'index ralentissent les opérations d'écriture et augmentent la taille de la base de données.</li>
        <li><strong>Analyser régulièrement les index</strong> : Utilisez des outils comme <code>EXPLAIN</code> pour surveiller les performances et identifier les index inutiles ou sous-utilisés.</li>
        <li><strong>Éviter d'indexer les colonnes avec de nombreuses valeurs identiques</strong> : Les index ne sont pas efficaces sur des colonnes contenant peu de valeurs uniques (par ex., booléens).</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, vous pouvez maximiser les performances de votre base de données et assurer une gestion efficace des ressources. 
        L'indexation est un outil puissant, mais il doit être utilisé de manière stratégique pour éviter des ralentissements dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="indexation" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Indexation en SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>index</strong> en SQL permettent d'améliorer les performances des requêtes en rendant la recherche dans une base de données plus rapide. 
        Un index crée une structure de données qui optimise l'accès aux lignes d'une table, en particulier pour les colonnes fréquemment recherchées ou impliquées dans des jointures.
    </p>

    <!-- CREATE INDEX -->
    <h3>1. CREATE INDEX - Créer un Index</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE INDEX</code> crée un index sur une ou plusieurs colonnes d'une table. Un index peut être utilisé pour accélérer les requêtes <code>SELECT</code> impliquant des colonnes spécifiques, mais il augmente également le temps nécessaire aux opérations <code>INSERT</code>, <code>UPDATE</code>, et <code>DELETE</code> en raison de la gestion de l'index.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer un index simple sur la colonne "nom" dans la table "Employes"
CREATE INDEX idx_nom ON Employes(nom);

-- Créer un index composite sur les colonnes "client_id" et "date_commande" dans la table "Commandes"
CREATE INDEX idx_client_date ON Commandes(client_id, date_commande);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, un index simple est créé sur la colonne <code>nom</code> de la table <code>Employes</code>, ce qui accélère les recherches sur le nom. Dans le second exemple, un index composite est créé sur les colonnes <code>client_id</code> et <code>date_commande</code> dans la table <code>Commandes</code>, 
        ce qui améliore les performances des requêtes impliquant ces deux colonnes.
    </p>

    <!-- DROP INDEX -->
    <h3>2. DROP INDEX - Supprimer un Index</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP INDEX</code> supprime un index existant. Supprimer un index peut être nécessaire si celui-ci ne contribue pas aux performances ou si les données de la table ont évolué, rendant l'indexation inutile ou contre-productive.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer l'index "idx_nom" de la table "Employes"
DROP INDEX idx_nom ON Employes;

-- Supprimer l'index "idx_client_date" de la table "Commandes"
DROP INDEX idx_client_date ON Commandes;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ces commandes suppriment les index <code>idx_nom</code> et <code>idx_client_date</code> des tables <code>Employes</code> et <code>Commandes</code>. La suppression d'index non nécessaires peut alléger la base de données et accélérer les opérations de modification de données.
    </p>

    <!-- Types d'Index -->
    <h3>3. Types d'Index</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Index Unique</strong> : Empêche les valeurs dupliquées dans une colonne indexée. Il est créé avec <code>CREATE UNIQUE INDEX</code>.</li>
        <li><strong>Index Composite</strong> : Couvre plusieurs colonnes, souvent utilisé pour optimiser les requêtes impliquant plusieurs colonnes dans des clauses <code>WHERE</code>.</li>
        <li><strong>Index de Clé Primaire</strong> : Crée automatiquement un index unique sur une colonne définie comme <code>PRIMARY KEY</code>.</li>
        <li><strong>Index de Clé Étrangère</strong> : Peut être utilisé pour améliorer les jointures entre tables liées par des clés étrangères.</li>
        <li><strong>Index Plein Texte</strong> : Spécifique à certains moteurs, il optimise les recherches de texte intégral, notamment dans les colonnes de type texte ou chaîne de caractères.</li>
    </ul>

    <!-- Bonnes Pratiques pour l'Indexation -->
    <h3>Bonnes Pratiques pour l'Indexation</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Indexer les colonnes fréquemment recherchées</strong> : Ajoutez des index aux colonnes utilisées dans des filtres (<code>WHERE</code>) et des jointures pour améliorer les performances.</li>
        <li><strong>Utiliser des index composites pour des requêtes complexes</strong> : Les index sur plusieurs colonnes peuvent accélérer les requêtes avec des filtres combinés.</li>
        <li><strong>Éviter l'indexation excessive</strong> : Trop d'index ralentissent les opérations d'écriture et augmentent la taille de la base de données.</li>
        <li><strong>Analyser régulièrement les index</strong> : Utilisez des outils comme <code>EXPLAIN</code> pour surveiller les performances et identifier les index inutiles ou sous-utilisés.</li>
        <li><strong>Éviter d'indexer les colonnes avec de nombreuses valeurs identiques</strong> : Les index ne sont pas efficaces sur des colonnes contenant peu de valeurs uniques (par ex., booléens).</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, vous pouvez maximiser les performances de votre base de données et assurer une gestion efficace des ressources. 
        L'indexation est un outil puissant, mais il doit être utilisé de manière stratégique pour éviter des ralentissements dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="indexation" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Indexation en SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>index</strong> en SQL permettent d'améliorer les performances des requêtes en rendant la recherche dans une base de données plus rapide. 
        Un index crée une structure de données qui optimise l'accès aux lignes d'une table, en particulier pour les colonnes fréquemment recherchées ou impliquées dans des jointures.
    </p>

    <!-- CREATE INDEX -->
    <h3>1. CREATE INDEX - Créer un Index</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE INDEX</code> crée un index sur une ou plusieurs colonnes d'une table. Un index peut être utilisé pour accélérer les requêtes <code>SELECT</code> impliquant des colonnes spécifiques, mais il augmente également le temps nécessaire aux opérations <code>INSERT</code>, <code>UPDATE</code>, et <code>DELETE</code> en raison de la gestion de l'index.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer un index simple sur la colonne "nom" dans la table "Employes"
CREATE INDEX idx_nom ON Employes(nom);

-- Créer un index composite sur les colonnes "client_id" et "date_commande" dans la table "Commandes"
CREATE INDEX idx_client_date ON Commandes(client_id, date_commande);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, un index simple est créé sur la colonne <code>nom</code> de la table <code>Employes</code>, ce qui accélère les recherches sur le nom. Dans le second exemple, un index composite est créé sur les colonnes <code>client_id</code> et <code>date_commande</code> dans la table <code>Commandes</code>, 
        ce qui améliore les performances des requêtes impliquant ces deux colonnes.
    </p>

    <!-- DROP INDEX -->
    <h3>2. DROP INDEX - Supprimer un Index</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP INDEX</code> supprime un index existant. Supprimer un index peut être nécessaire si celui-ci ne contribue pas aux performances ou si les données de la table ont évolué, rendant l'indexation inutile ou contre-productive.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer l'index "idx_nom" de la table "Employes"
DROP INDEX idx_nom ON Employes;

-- Supprimer l'index "idx_client_date" de la table "Commandes"
DROP INDEX idx_client_date ON Commandes;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ces commandes suppriment les index <code>idx_nom</code> et <code>idx_client_date</code> des tables <code>Employes</code> et <code>Commandes</code>. La suppression d'index non nécessaires peut alléger la base de données et accélérer les opérations de modification de données.
    </p>

    <!-- Types d'Index -->
    <h3>3. Types d'Index</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Index Unique</strong> : Empêche les valeurs dupliquées dans une colonne indexée. Il est créé avec <code>CREATE UNIQUE INDEX</code>.</li>
        <li><strong>Index Composite</strong> : Couvre plusieurs colonnes, souvent utilisé pour optimiser les requêtes impliquant plusieurs colonnes dans des clauses <code>WHERE</code>.</li>
        <li><strong>Index de Clé Primaire</strong> : Crée automatiquement un index unique sur une colonne définie comme <code>PRIMARY KEY</code>.</li>
        <li><strong>Index de Clé Étrangère</strong> : Peut être utilisé pour améliorer les jointures entre tables liées par des clés étrangères.</li>
        <li><strong>Index Plein Texte</strong> : Spécifique à certains moteurs, il optimise les recherches de texte intégral, notamment dans les colonnes de type texte ou chaîne de caractères.</li>
    </ul>

    <!-- Bonnes Pratiques pour l'Indexation -->
    <h3>Bonnes Pratiques pour l'Indexation</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Indexer les colonnes fréquemment recherchées</strong> : Ajoutez des index aux colonnes utilisées dans des filtres (<code>WHERE</code>) et des jointures pour améliorer les performances.</li>
        <li><strong>Utiliser des index composites pour des requêtes complexes</strong> : Les index sur plusieurs colonnes peuvent accélérer les requêtes avec des filtres combinés.</li>
        <li><strong>Éviter l'indexation excessive</strong> : Trop d'index ralentissent les opérations d'écriture et augmentent la taille de la base de données.</li>
        <li><strong>Analyser régulièrement les index</strong> : Utilisez des outils comme <code>EXPLAIN</code> pour surveiller les performances et identifier les index inutiles ou sous-utilisés.</li>
        <li><strong>Éviter d'indexer les colonnes avec de nombreuses valeurs identiques</strong> : Les index ne sont pas efficaces sur des colonnes contenant peu de valeurs uniques (par ex., booléens).</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, vous pouvez maximiser les performances de votre base de données et assurer une gestion efficace des ressources. 
        L'indexation est un outil puissant, mais il doit être utilisé de manière stratégique pour éviter des ralentissements dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="transactions" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Transactions - COMMIT, ROLLBACK</h2>
    <p style="font-size: 1.1em; color: #333;">
        En SQL, une <strong>transaction</strong> est un ensemble d'opérations qui sont exécutées comme une unité de travail. Les transactions permettent de s'assurer que les opérations sur une base de données sont complètes et cohérentes, en garantissant que toutes les opérations réussissent ou, en cas d'échec, que la base de données revient à son état initial. Les commandes <code>COMMIT</code> et <code>ROLLBACK</code> sont utilisées pour valider ou annuler les transactions.
    </p>

    <!-- BEGIN TRANSACTION -->
    <h3>1. Démarrer une Transaction</h3>
    <p style="font-size: 1.1em; color: #333;">
        La transaction commence avec la commande <code>BEGIN</code> ou <code>START TRANSACTION</code>, ce qui permet de regrouper plusieurs opérations en une seule unité. Les modifications ne seront pas visibles pour d'autres utilisateurs tant que la transaction n'est pas validée avec <code>COMMIT</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Commencer une transaction
BEGIN;

-- Exemple d'opérations dans une transaction
UPDATE Compte SET solde = solde - 500 WHERE compte_id = 1;
UPDATE Compte SET solde = solde + 500 WHERE compte_id = 2;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, nous commençons une transaction pour transférer des fonds d'un compte à un autre. Tant que la transaction n'est pas validée, les modifications ne sont pas appliquées de manière permanente.
    </p>

    <!-- COMMIT -->
    <h3>2. COMMIT - Valider la Transaction</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>COMMIT</code> valide toutes les modifications faites dans la transaction et les enregistre de manière permanente dans la base de données. Une fois le <code>COMMIT</code> effectué, les changements sont visibles pour tous les utilisateurs.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Valider la transaction
COMMIT;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, la transaction qui transfère des fonds est validée avec <code>COMMIT</code>. Les modifications deviennent alors définitives.
    </p>

    <!-- ROLLBACK -->
    <h3>3. ROLLBACK - Annuler la Transaction</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>ROLLBACK</code> annule toutes les modifications effectuées dans une transaction, rétablissant la base de données à l'état dans lequel elle était avant le début de la transaction. Cela est particulièrement utile en cas d'erreur ou de condition imprévue.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Annuler la transaction en cas d'erreur
ROLLBACK;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, la transaction est annulée avec <code>ROLLBACK</code> en cas d'erreur. Les modifications temporaires ne seront pas appliquées, et la base de données reviendra à son état initial.
    </p>

    <!-- Bonnes Pratiques pour l'Utilisation des Transactions -->
    <h3>Bonnes Pratiques pour l'Utilisation des Transactions</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des transactions pour les opérations critiques</strong> : Toute opération qui doit être exécutée en totalité ou non du tout (par ex., transfert de fonds, commandes multi-produits) doit être exécutée dans une transaction.</li>
        <li><strong>Valider ou annuler rapidement</strong> : Ne laissez pas les transactions ouvertes trop longtemps, car cela peut verrouiller les ressources et impacter les performances.</li>
        <li><strong>Gérer les erreurs de manière anticipée</strong> : Prévoyez des conditions de <code>ROLLBACK</code> en cas d'erreur pour garantir que la base de données reste dans un état cohérent.</li>
        <li><strong>Utiliser COMMIT avec précaution</strong> : N'utilisez <code>COMMIT</code> que lorsque vous êtes sûr que toutes les opérations de la transaction sont correctes et complètes.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, vous pouvez assurer la cohérence et l'intégrité des données dans vos bases de données, en minimisant les risques d'erreurs et en garantissant que les opérations critiques sont exécutées de manière fiable dans des environnements professionnels.
    </p>
</div>
<div class="content-section" id="vues" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Vues en SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Une <strong>vue</strong> en SQL est une table virtuelle qui présente le résultat d'une requête SQL. Les vues permettent de simplifier les requêtes complexes, de masquer des données, ou de présenter les données sous une forme spécifique sans duplicata dans la base de données. 
        Elles sont particulièrement utiles pour créer des rapports et fournir un accès aux données tout en protégeant les informations sensibles.
    </p>

    <!-- CREATE VIEW -->
    <h3>1. CREATE VIEW - Créer une Vue</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE VIEW</code> crée une nouvelle vue qui peut être utilisée comme une table dans les requêtes. Elle peut encapsuler des jointures, des filtres, et des calculs.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer une vue pour afficher les employés avec leurs salaires
CREATE VIEW Vue_Employes_Salaires AS
SELECT nom, prenom, salaire
FROM Employes
WHERE salaire > 30000;

-- Créer une vue pour afficher les commandes avec les détails des clients
CREATE VIEW Vue_Commandes_Clients AS
SELECT c.nom, c.prenom, co.date_commande, co.montant
FROM Clients c
JOIN Commandes co ON c.client_id = co.client_id;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, une vue nommée <code>Vue_Employes_Salaires</code> est créée pour afficher les employés ayant un salaire supérieur à 30 000. Dans le second exemple, 
        la vue <code>Vue_Commandes_Clients</code> est créée pour relier les informations des clients et des commandes, facilitant ainsi l'accès à des données combinées.
    </p>

    <!-- SELECT FROM VIEW -->
    <h3>2. Utiliser une Vue dans une Requête</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une fois créée, une vue peut être utilisée dans des requêtes de manière similaire à une table. Cela permet de simplifier les requêtes pour les utilisateurs finaux.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Sélectionner des données à partir de la vue
SELECT * FROM Vue_Employes_Salaires;

-- Obtenir des commandes avec les détails des clients
SELECT * FROM Vue_Commandes_Clients
WHERE montant > 100;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, la première requête sélectionne tous les employés ayant un salaire supérieur à 30 000 à partir de la vue <code>Vue_Employes_Salaires</code>. 
        La seconde requête obtient des informations sur les commandes dont le montant dépasse 100 à partir de la vue <code>Vue_Commandes_Clients</code>.
    </p>

    <!-- DROP VIEW -->
    <h3>3. DROP VIEW - Supprimer une Vue</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP VIEW</code> est utilisée pour supprimer une vue existante. Cela libère de l'espace et simplifie la gestion des objets de la base de données.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer la vue "Vue_Employes_Salaires"
DROP VIEW Vue_Employes_Salaires;

-- Supprimer la vue "Vue_Commandes_Clients"
DROP VIEW Vue_Commandes_Clients;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ces commandes suppriment les vues <code>Vue_Employes_Salaires</code> et <code>Vue_Commandes_Clients</code> de la base de données. La suppression d'une vue n'affecte pas les tables sous-jacentes.
    </p>

    <!-- Bonnes Pratiques pour l'Utilisation des Vues -->
    <h3>Bonnes Pratiques pour l'Utilisation des Vues</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des vues pour simplifier des requêtes complexes</strong> : Les vues permettent de masquer la complexité des requêtes et d'offrir une interface plus simple pour les utilisateurs.</li>
        <li><strong>Protéger les données sensibles</strong> : Utilisez des vues pour restreindre l'accès aux colonnes sensibles tout en fournissant les données nécessaires.</li>
        <li><strong>Éviter l'usage excessif des vues imbriquées</strong> : Bien que les vues puissent être utilisées pour encapsuler d'autres vues, des vues trop imbriquées peuvent nuire aux performances et à la lisibilité.</li>
        <li><strong>Documenter les vues créées</strong> : Gardez une documentation à jour des vues créées et de leur utilisation, facilitant la maintenance et la compréhension de la structure de la base de données.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En suivant ces bonnes pratiques, les vues peuvent améliorer la gestion et l'accès aux données dans vos bases de données, facilitant ainsi l'analyse et la génération de rapports tout en préservant l'intégrité des données.
    </p>
</div>
<div class="content-section" id="procedures" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Procédures Stockées en SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Une <strong>procédure stockée</strong> est un ensemble d'instructions SQL qui sont enregistrées dans la base de données et peuvent être exécutées en appelant simplement le nom de la procédure. 
        Les procédures stockées permettent de centraliser la logique de traitement des données, d'améliorer la sécurité et d'optimiser les performances en réduisant le volume de données envoyées entre le client et le serveur.
    </p>

    <!-- CREATE PROCEDURE -->
    <h3>1. CREATE PROCEDURE - Créer une Procédure Stockée</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE PROCEDURE</code> définit une nouvelle procédure stockée. Vous pouvez spécifier des paramètres d'entrée et de sortie pour personnaliser le comportement de la procédure.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer une procédure pour ajouter un nouvel employé
CREATE PROCEDURE AjouterEmploye(
    IN p_nom VARCHAR(50),
    IN p_prenom VARCHAR(50),
    IN p_salaire DECIMAL(10, 2)
)
BEGIN
    INSERT INTO Employes(nom, prenom, salaire)
    VALUES (p_nom, p_prenom, p_salaire);
END;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, la procédure <code>AjouterEmploye</code> permet d'ajouter un nouvel employé à la table <code>Employes</code>. Elle prend trois paramètres : le nom, le prénom, et le salaire, 
        et effectue une opération <code>INSERT</code> pour ajouter les informations à la table.
    </p>

    <!-- CALL PROCEDURE -->
    <h3>2. CALL - Exécuter une Procédure Stockée</h3>
    <p style="font-size: 1.1em; color: #333;">
        Pour exécuter une procédure stockée, utilisez la commande <code>CALL</code>, suivie du nom de la procédure et des paramètres requis.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Appeler la procédure pour ajouter un employé
CALL AjouterEmploye('Dupont', 'Jean', 35000.00);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ici, la procédure <code>AjouterEmploye</code> est appelée pour ajouter un employé nommé "Jean Dupont" avec un salaire de 35 000.
    </p>

    <!-- DROP PROCEDURE -->
    <h3>3. DROP PROCEDURE - Supprimer une Procédure Stockée</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP PROCEDURE</code> est utilisée pour supprimer une procédure stockée existante. Cela permet de libérer des ressources si une procédure n'est plus nécessaire.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer la procédure "AjouterEmploye"
DROP PROCEDURE IF EXISTS AjouterEmploye;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande supprime la procédure <code>AjouterEmploye</code> si elle existe. L'utilisation de <code>IF EXISTS</code> évite les erreurs si la procédure n'est pas trouvée.
    </p>

    <!-- Avantages des Procédures Stockées -->
    <h3>4. Avantages des Procédures Stockées</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Réduction du trafic réseau</strong> : En exécutant des opérations complexes sur le serveur, vous réduisez la quantité de données transférées entre le client et le serveur.</li>
        <li><strong>Amélioration de la sécurité</strong> : Les utilisateurs peuvent avoir accès aux procédures stockées sans accès direct aux tables sous-jacentes, réduisant le risque d'erreurs ou d'intrusions.</li>
        <li><strong>Encapsulation de la logique métier</strong> : Les procédures stockées permettent de centraliser la logique de traitement des données, ce qui facilite la maintenance et la mise à jour.</li>
        <li><strong>Optimisation des performances</strong> : Les procédures peuvent être compilées et optimisées par le serveur, ce qui peut améliorer les temps d'exécution pour des opérations répétées.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En utilisant les procédures stockées, vous pouvez créer des solutions de base de données robustes et efficaces, tout en assurant une gestion et un accès sécurisés aux données dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="triggers" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Triggers en SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Un <strong>trigger</strong> (ou déclencheur) en SQL est un mécanisme qui exécute automatiquement une action spécifiée en réponse à des événements de modification des données dans une table. Les triggers sont souvent utilisés pour automatiser des tâches, maintenir l'intégrité des données, et effectuer des audits.
    </p>

    <!-- CREATE TRIGGER -->
    <h3>1. CREATE TRIGGER - Créer un Trigger</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>CREATE TRIGGER</code> définit un nouveau trigger, en précisant l'événement qui déclenchera son exécution (par exemple, <code>INSERT</code>, <code>UPDATE</code>, ou <code>DELETE</code>), ainsi que l'action à réaliser.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer un trigger pour mettre à jour la date de modification dans la table "Employes"
CREATE TRIGGER UpdateDateModification
BEFORE UPDATE ON Employes
FOR EACH ROW
BEGIN
    SET NEW.date_modification = NOW();
END;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, le trigger <code>UpdateDateModification</code> est créé pour la table <code>Employes</code>. Il se déclenche avant toute mise à jour sur cette table, 
        en mettant à jour la colonne <code>date_modification</code> avec la date et l'heure actuelles. Cela permet de suivre la date de la dernière modification.
    </p>

    <!-- DROP TRIGGER -->
    <h3>2. DROP TRIGGER - Supprimer un Trigger</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP TRIGGER</code> est utilisée pour supprimer un trigger existant. Cela est nécessaire si le trigger n'est plus requis ou s'il doit être remplacé.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer le trigger "UpdateDateModification"
DROP TRIGGER IF EXISTS UpdateDateModification;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande supprime le trigger <code>UpdateDateModification</code> si celui-ci existe, ce qui est utile pour éviter des erreurs dans des scripts automatisés.
    </p>

    <!-- Avantages des Triggers -->
    <h3>3. Avantages des Triggers</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Automatisation des tâches</strong> : Les triggers peuvent automatiser des tâches répétitives, comme la mise à jour de champs de suivi, sans intervention manuelle.</li>
        <li><strong>Maintien de l'intégrité des données</strong> : Ils garantissent que certaines règles d'affaires sont respectées lors des opérations de modification des données.</li>
        <li><strong>Audits et journaux</strong> : Les triggers peuvent être utilisés pour enregistrer des modifications dans des tables d'audit, offrant ainsi une traçabilité des changements.</li>
        <li><strong>Simplification de la logique d'application</strong> : En déplaçant la logique métier vers la base de données, les applications clientes peuvent être simplifiées.</li>
    </ul>

    <!-- Bonnes Pratiques pour l'Utilisation des Triggers -->
    <h3>4. Bonnes Pratiques pour l'Utilisation des Triggers</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des triggers avec parcimonie</strong> : Les triggers peuvent ralentir les performances si trop d'opérations complexes y sont définies, donc ils doivent être utilisés judicieusement.</li>
        <li><strong>Documenter les triggers</strong> : Une documentation claire est essentielle pour la maintenance future et pour aider d'autres développeurs à comprendre la logique de déclenchement.</li>
        <li><strong>Tester les triggers soigneusement</strong> : Avant de déployer des triggers en production, il est crucial de tester leur comportement pour éviter des effets indésirables sur les données.</li>
        <li><strong>Eviter les triggers récursifs</strong> : Les triggers qui s'appellent eux-mêmes peuvent mener à des boucles infinies, donc il faut s'assurer qu'ils sont conçus pour éviter cela.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, vous pouvez tirer parti des triggers pour améliorer la gestion des données et automatiser des processus dans vos bases de données, tout en maintenant l'intégrité et la performance dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="securite" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Sécurité en SQL (Permissions, Rôles)</h2>
    <p style="font-size: 1.1em; color: #333;">
        La sécurité des bases de données est cruciale pour protéger les données sensibles et garantir que seuls les utilisateurs autorisés peuvent accéder ou modifier ces données. 
        En SQL, la gestion des permissions et des rôles permet de contrôler l'accès aux objets de la base de données (tables, vues, procédures, etc.) de manière granulaire.
    </p>

    <!-- Permissions -->
    <h3>1. Permissions</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>permissions</strong> définissent les actions qu'un utilisateur peut effectuer sur des objets spécifiques dans la base de données. 
        Les permissions peuvent être accordées pour des opérations telles que <code>SELECT</code>, <code>INSERT</code>, <code>UPDATE</code>, et <code>DELETE</code>.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Accorder la permission SELECT sur la table "Employes" à un utilisateur
GRANT SELECT ON Employes TO 'utilisateur'@'localhost';

-- Accorder plusieurs permissions à un utilisateur
GRANT INSERT, UPDATE ON Commandes TO 'utilisateur'@'localhost';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans le premier exemple, la permission <code>SELECT</code> est accordée à l'utilisateur spécifié pour la table <code>Employes</code>. 
        Dans le second exemple, les permissions <code>INSERT</code> et <code>UPDATE</code> sont accordées sur la table <code>Commandes</code>, permettant à l'utilisateur de modifier les données de cette table.
    </p>

    <!-- REVOKE -->
    <h3>2. REVOKE - Révoquer des Permissions</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>REVOKE</code> est utilisée pour supprimer des permissions précédemment accordées à un utilisateur.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Révoquer la permission SELECT de l'utilisateur sur la table "Employes"
REVOKE SELECT ON Employes FROM 'utilisateur'@'localhost';

-- Révoquer plusieurs permissions
REVOKE INSERT, UPDATE ON Commandes FROM 'utilisateur'@'localhost';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Ces commandes retirent les permissions <code>SELECT</code>, <code>INSERT</code>, et <code>UPDATE</code> pour l'utilisateur sur les tables respectives, garantissant ainsi un contrôle d'accès approprié.
    </p>

    <!-- Rôles -->
    <h3>3. Rôles</h3>
    <p style="font-size: 1.1em; color: #333;">
        Un <strong>rôle</strong> est un ensemble de permissions qui peuvent être attribuées à des utilisateurs. 
        L'utilisation de rôles simplifie la gestion des permissions, car il suffit de modifier le rôle pour affecter les permissions à tous les utilisateurs qui le possèdent.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer un rôle avec des permissions spécifiques
CREATE ROLE Gestionnaire;

-- Accorder des permissions au rôle
GRANT SELECT, INSERT, UPDATE ON Employes TO Gestionnaire;

-- Assigner le rôle à un utilisateur
GRANT Gestionnaire TO 'utilisateur'@'localhost';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, un rôle nommé <code>Gestionnaire</code> est créé et des permissions sont accordées à ce rôle. 
        Ensuite, le rôle est assigné à un utilisateur, ce qui lui permet d'exécuter les opérations spécifiées sans avoir besoin d'accorder les permissions individuellement.
    </p>

    <!-- DROP ROLE -->
    <h3>4. DROP ROLE - Supprimer un Rôle</h3>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>DROP ROLE</code> est utilisée pour supprimer un rôle existant. Cela supprime également toutes les permissions associées à ce rôle.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Supprimer le rôle "Gestionnaire"
DROP ROLE IF EXISTS Gestionnaire;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande retire le rôle <code>Gestionnaire</code> de la base de données, ainsi que toutes les permissions qui lui étaient associées.
    </p>

    <!-- Bonnes Pratiques pour la Sécurité -->
    <h3>5. Bonnes Pratiques pour la Sécurité</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Appliquer le principe du moindre privilège</strong> : Accordez uniquement les permissions nécessaires à chaque utilisateur ou rôle pour réduire les risques de violations de sécurité.</li>
        <li><strong>Utiliser des rôles pour simplifier la gestion</strong> : Créez des rôles basés sur les responsabilités des utilisateurs pour faciliter l'attribution des permissions.</li>
        <li><strong>Surveiller les permissions régulièrement</strong> : Faites des audits réguliers pour vérifier les permissions des utilisateurs et les rôles afin d'identifier et de corriger les accès excessifs.</li>
        <li><strong>Documenter les changements de permissions</strong> : Tenez à jour un registre des modifications de permissions et de rôles pour assurer la traçabilité et la responsabilité.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces bonnes pratiques, vous pouvez sécuriser vos bases de données et garantir que les données sensibles restent protégées contre les accès non autorisés dans les environnements professionnels.
    </p>
</div>
<div class="content-section" id="optimisation-requetes" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Optimisation des Requêtes SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        L'optimisation des requêtes SQL est cruciale pour améliorer les performances des bases de données, surtout lorsque les volumes de données augmentent. 
        Des requêtes optimisées réduisent le temps de réponse et minimisent l'utilisation des ressources du serveur, garantissant ainsi une expérience utilisateur fluide.
    </p>

    <!-- Indexation -->
    <h3>1. Indexation</h3>
    <p style="font-size: 1.1em; color: #333;">
        Un <strong>index</strong> est une structure de données qui améliore la vitesse des opérations de recherche dans une table. Les index permettent un accès plus rapide aux lignes de données sans avoir à scanner toute la table.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Créer un index sur la colonne "nom" de la table "Employes"
CREATE INDEX idx_nom ON Employes(nom);
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, un index est créé sur la colonne <code>nom</code> de la table <code>Employes</code>. Cela accélère les requêtes qui filtrent ou trient par cette colonne. 
        Cependant, l'indexation doit être utilisée judicieusement, car trop d'index peuvent ralentir les opérations d'<code>INSERT</code>, <code>UPDATE</code>, et <code>DELETE</code>.
    </p>

    <!-- Analyser les Requêtes -->
    <h3>2. Analyser les Requêtes</h3>
    <p style="font-size: 1.1em; color: #333;">
        Utilisez des outils d'analyse de requêtes, comme <code>EXPLAIN</code>, pour comprendre comment la base de données exécute vos requêtes. Cela vous aide à identifier les goulots d'étranglement et à apporter des améliorations.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Analyser une requête pour optimiser son exécution
EXPLAIN SELECT * FROM Employes WHERE nom = 'Dupont';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        L'utilisation de <code>EXPLAIN</code> avant une requête vous montre le plan d'exécution, vous permettant de voir si un index est utilisé ou si des opérations de table complètes sont effectuées.
    </p>

    <!-- Limiter le Résultat -->
    <h3>3. Limiter le Résultat</h3>
    <p style="font-size: 1.1em; color: #333;">
        Limitez le nombre de lignes retournées par une requête en utilisant des clauses comme <code>LIMIT</code> ou <code>OFFSET</code>. Cela réduit le volume de données traitées et renvoyées, améliorant ainsi les performances.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Limiter le résultat à 10 employés
SELECT * FROM Employes LIMIT 10;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête retourne uniquement les 10 premiers enregistrements de la table <code>Employes</code>, réduisant le temps de traitement et la charge sur le serveur.
    </p>

    <!-- Utiliser les Requêtes Préparées -->
    <h3>4. Utiliser les Requêtes Préparées</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les requêtes préparées permettent de précompiler une requête SQL et d'exécuter plusieurs fois la même requête avec des paramètres différents. Cela améliore les performances et la sécurité en évitant les injections SQL.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Préparer une requête pour insérer un nouvel employé
PREPARE stmt FROM 'INSERT INTO Employes (nom, prenom) VALUES (?, ?)';
SET @nom = 'Dupont', @prenom = 'Jean';
EXECUTE stmt USING @nom, @prenom;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, une requête préparée est utilisée pour insérer un nouvel employé. Cela améliore les performances lors de l'exécution répétée de la requête avec des valeurs différentes.
    </p>

    <!-- Éviter les Requêtes N+1 -->
    <h3>5. Éviter les Requêtes N+1</h3>
    <p style="font-size: 1.1em; color: #333;">
        Les requêtes N+1 se produisent lorsque vous exécutez une requête pour récupérer une liste d'enregistrements, puis exécutez une requête distincte pour chaque enregistrement. Cela peut entraîner une charge excessive sur la base de données.
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Mauvaise approche : N+1 requêtes
SELECT * FROM Clients;  -- Récupère tous les clients
SELECT * FROM Commandes WHERE client_id = ?;  -- Une requête pour chaque client

-- Bonne approche : Une seule requête avec jointure
SELECT c.nom, COUNT(co.id) as total_commandes
FROM Clients c
LEFT JOIN Commandes co ON c.id = co.client_id
GROUP BY c.nom;
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans la mauvaise approche, une requête supplémentaire est exécutée pour chaque client. La bonne approche utilise une jointure pour récupérer toutes les données en une seule requête, améliorant ainsi les performances.
    </p>

    <!-- Bonnes Pratiques pour l'Optimisation des Requêtes -->
    <h3>6. Bonnes Pratiques pour l'Optimisation des Requêtes</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des index appropriés</strong> : Créez des index sur les colonnes fréquemment utilisées dans les clauses WHERE et JOIN.</li>
        <li><strong>Éviter les SELECT *</strong> : Spécifiez uniquement les colonnes nécessaires dans vos requêtes pour réduire la quantité de données transférées.</li>
        <li><strong>Réécrire les requêtes complexes</strong> : Simplifiez les requêtes complexes en les décomposant en requêtes plus simples, si possible.</li>
        <li><strong>Surveiller les performances</strong> : Utilisez des outils de surveillance pour identifier les requêtes lentes et optimiser leur exécution.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        En appliquant ces pratiques, vous pouvez significativement améliorer les performances des requêtes SQL, garantissant une utilisation efficace des ressources de la base de données et une expérience utilisateur optimale.
    </p>
</div>
<div class="content-section" id="injections-sql" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2>Protection contre les Injections SQL</h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong>injections SQL</strong> sont l'une des vulnérabilités les plus courantes dans les applications web, permettant à un attaquant d'exécuter des requêtes SQL malveillantes en manipulant les entrées utilisateur. 
        Il est crucial de mettre en œuvre des mesures de protection pour éviter que les données sensibles ne soient compromises.
    </p>

    <!-- Qu'est-ce qu'une injection SQL ? -->
    <h3>1. Qu'est-ce qu'une injection SQL ?</h3>
    <p style="font-size: 1.1em; color: #333;">
        Une injection SQL se produit lorsque des entrées non filtrées sont intégrées directement dans des requêtes SQL. Cela permet aux attaquants d'injecter des commandes SQL malicieuses qui peuvent :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li>Accéder à des données sensibles (ex. mots de passe, informations personnelles)</li>
        <li>Modifier ou supprimer des données dans la base de données</li>
        <li>Exécuter des commandes administratives sur le serveur de la base de données</li>
    </ul>

    <!-- Exemples d'Injection SQL -->
    <h3>2. Exemples d'Injection SQL</h3>
    <p style="font-size: 1.1em; color: #333;">
        Voici un exemple simple d'injection SQL dans une requête de connexion :
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
-- Requête vulnérable à l'injection SQL
SELECT * FROM utilisateurs WHERE nom_utilisateur = 'admin' AND mot_de_passe = 'motdepasse';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Si un attaquant entre <code>' OR '1'='1</code> comme nom d'utilisateur, la requête devient :
    </p>
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5;">
        <pre><code class="language-sql">
SELECT * FROM utilisateurs WHERE nom_utilisateur = '' OR '1'='1' AND mot_de_passe = 'motdepasse';
        </code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette requête renvoie tous les utilisateurs, permettant à l'attaquant d'accéder à des données sensibles.
    </p>

    <!-- Bonnes Pratiques pour la Protection -->
    <h3>3. Bonnes Pratiques pour la Protection contre les Injections SQL</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des Requêtes Préparées</strong> : Les requêtes préparées séparent les données de la logique SQL, empêchant ainsi l'injection de code malveillant.
        <pre><code class="language-sql">
-- Exemple de requête préparée en PHP avec PDO
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE nom_utilisateur = :username AND mot_de_passe = :password");
$stmt->execute(['username' => $username, 'password' => $password]);
        </code></pre>
        </li>
        <li><strong>Échapper les Entrées Utilisateur</strong> : Utilisez des fonctions d'échappement appropriées pour nettoyer les entrées avant de les utiliser dans des requêtes SQL.
        <pre><code class="language-php">
$nom_utilisateur = mysqli_real_escape_string($conn, $_POST['nom_utilisateur']);
        </code></pre>
        </li>
        <li><strong>Valider et Assainir les Entrées</strong> : Validez toutes les entrées utilisateur pour vous assurer qu'elles correspondent à des formats attendus avant de les utiliser dans des requêtes.
        <pre><code class="language-php">
if (!preg_match('/^[a-zA-Z0-9_]+$/', $nom_utilisateur)) {
    // Gérer l'erreur
}
        </code></pre>
        </li>
        <li><strong>Limiter les Privilèges d'Accès</strong> : Assurez-vous que les comptes de base de données utilisés par votre application ont le minimum de privilèges nécessaires pour réduire l'impact d'une éventuelle injection SQL.
        </li>
    </ul>

    <!-- Outils de Détection -->
    <h3>4. Outils de Détection et de Prévention</h3>
    <p style="font-size: 1.1em; color: #333;">
        Utilisez des outils de sécurité et des pare-feu d'application web pour détecter et bloquer les tentatives d'injection SQL. 
        Des systèmes de gestion de sécurité des bases de données (DBMS) peuvent également offrir des fonctionnalités de prévention contre les injections SQL.
    </p>

    <!-- Conclusion -->
    <h3>5. Conclusion</h3>
    <p style="font-size: 1.1em; color: #333;">
        La protection contre les injections SQL est essentielle pour sécuriser vos applications et protéger les données sensibles. 
        En appliquant des bonnes pratiques de développement, en utilisant des requêtes préparées, et en surveillant régulièrement vos bases de données, vous pouvez réduire considérablement le risque d'injection SQL et garantir l'intégrité de vos données.
    </p>
</div>


    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
