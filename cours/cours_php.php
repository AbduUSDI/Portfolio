<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur PHP</title>
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
    <a href="#intro"><i class="fas fa-book-open"></i> Introduction</a>
    
    <button class="dropdown-btn"><i class="fas fa-code"></i> Bases du PHP
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#syntax">Syntaxe</a>
        <a href="#variables">Variables</a>
        <a href="#types">Types de Données</a>
        <a href="#operateurs">Opérateurs</a>
        <a href="#constants">Constantes</a>
        <a href="#control-structures">Structures de Contrôle</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-cogs"></i> Fonctions et Gestion des Données
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#functions">Déclaration de Fonctions</a>
        <a href="#params">Paramètres et Valeurs de Retour</a>
        <a href="#arrays">Tableaux</a>
        <a href="#string-manipulation">Manipulation de Chaines</a>
        <a href="#sessions">Sessions</a>
        <a href="#cookies">Cookies</a>
        <a href="#file-handling">Gestion des Fichiers</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-shield-alt"></i> Sécurité
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#input-validation">Validation des Entrées</a>
        <a href="#password-hashing">Hashage des Mots de Passe</a>
        <a href="#sql-injection-protection">Protection contre les Injections SQL</a>
        <a href="#csrf">Protection contre les Attaques CSRF</a>
        <a href="#xss">Prévention des Attaques XSS</a>
        <a href="#latest-security">Dernières Pratiques en Sécurité</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-database"></i> Base de Données et ORM
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#mysql-connection">Connexion MySQL</a>
        <a href="#pdo">PDO</a>
        <a href="#query-optimization">Optimisation des Requêtes</a>
        <a href="#orm">Utilisation des ORM (Doctrine, Eloquent)</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-cube"></i> Programmation Orientée Objet (POO)
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#classes-objects">Classes et Objets</a>
        <a href="#constructors-destructors">Constructeurs et Destructeurs</a>
        <a href="#inheritance">Héritage</a>
        <a href="#polymorphism">Polymorphisme</a>
        <a href="#encapsulation">Encapsulation</a>
        <a href="#abstraction">Abstraction</a>
        <a href="#interfaces">Interfaces</a>
        <a href="#traits">Traits</a>
        <a href="#namespaces">Namespaces</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-globe"></i> Développement Web Avancé
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#api">Création d'APIs RESTful</a>
        <a href="#mvc">Modèle MVC</a>
        <a href="#oop">Programmation Orientée Objet</a>
        <a href="#autoloading">Autoloading</a>
        <a href="#dependency-injection">Injection de Dépendances</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-tools"></i> Outils et Bibliothèques
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#composer">Composer</a>
        <a href="#unit-tests">Tests Unitaires et PHPUnit</a>
        <a href="#debugging">Débogage et Xdebug</a>
        <a href="#profiling">Profiling avec Blackfire</a>
    </div>

    <button class="dropdown-btn"><i class="fas fa-cloud"></i> Hébergement et Déploiement
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#web-hosting">Hébergement Web</a>
        <a href="#docker">Docker</a>
        <a href="#ci-cd">Intégration Continue et Déploiement (CI/CD)</a>
    </div>

    <a href="#latest-news"><i class="fas fa-bell"></i> Dernières Actualités PHP</a>
</div>


<!-- Contenu de la page -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">

<!-- Intro -->
    <div class="content-section" id="intro" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        Introduction à PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        <span style="color: #1e88e5; font-weight: bold;">PHP</span>, dont le sigle signifie aujourd'hui <strong style="color: #d32f2f;">PHP: Hypertext Preprocessor</strong>, était initialement connu sous le nom de <span style="color: #d32f2f; font-weight: bold;">Personal Home Page</span>. Il s'agit d'un <strong style="color: #388e3c;">langage de script open-source</strong> exécuté côté serveur, conçu principalement pour le développement de <strong style="color: #388e3c;">sites web dynamiques et interactifs</strong>.
    </p>
    
    <p style="font-size: 1.1em; color: #333;">
        Ce langage a été créé en <strong style="color: #d32f2f;">1994</strong> par <span style="color: #1e88e5; font-weight: bold;">Rasmus Lerdorf</span>, un programmeur d'origine danoise-canadienne. À l'origine, PHP était un simple ensemble de scripts en Perl utilisés pour suivre les visites sur son propre site personnel. En réalisant le potentiel de son outil, <span style="font-weight: bold; color: #1e88e5;">Rasmus a réécrit PHP en langage C</span>, le transformant en un interpréteur plus performant, appelé <strong style="color: #d32f2f;">PHP/FI (Personal Home Page / Form Interpreter)</strong>.
    </p>
    
    <p style="font-size: 1.1em; color: #333;">
        <span style="font-weight: bold; color: #1e88e5;">Depuis, PHP a évolué de manière spectaculaire</span>, porté par une vaste <strong style="color: #388e3c;">communauté de développeurs</strong> qui continue d'enrichir ses fonctionnalités. Aujourd'hui, PHP est au cœur de millions de sites à travers le monde, soutenant des plateformes populaires comme <span style="color: #d32f2f; font-weight: bold;">WordPress</span>, <span style="color: #d32f2f; font-weight: bold;">Drupal</span> et <span style="color: #d32f2f; font-weight: bold;">Facebook</span>.
    </p>

    <p style="font-size: 1.1em; color: #333;">
        À chaque <strong style="color: #388e3c;">version majeure</strong>, PHP apporte des améliorations notables en termes de <span style="color: #1e88e5; font-weight: bold;">performance</span>, de <span style="color: #1e88e5; font-weight: bold;">sécurité</span> et de <span style="color: #1e88e5; font-weight: bold;">fonctionnalités</span>. Grâce à sa <span style="color: #388e3c; font-weight: bold;">syntaxe simple</span> et à sa large compatibilité avec les bases de données comme <strong>MySQL</strong> et <strong>PostgreSQL</strong>, PHP est devenu un choix privilégié pour le développement web.
    </p>
    
    <p style="font-size: 1.1em; color: #333; border-top: 1px solid #e0e0e0; padding-top: 15px; margin-top: 15px;">
        Ce guide vous accompagnera à travers les <strong style="color: #388e3c;">concepts fondamentaux et avancés</strong> de PHP, pour vous permettre de créer des applications web dynamiques et robustes.
    </p>
</div>
<div class="content-section" id="syntax" style="background-color: #f2f4f7; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Syntaxe de PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        La syntaxe de <span style="color: #1e88e5; font-weight: bold;">PHP</span> est conçue pour être simple, permettant aux développeurs d'intégrer des scripts directement dans du code <strong style="color: #d32f2f;">HTML</strong>. Cette flexibilité fait de PHP un langage idéal pour créer des pages web dynamiques, où le contenu peut être généré en fonction des interactions utilisateur.
    </p>
    
    <p style="font-size: 1.1em; color: #333;">
        Chaque script PHP commence par les balises <span style="color: #d32f2f; font-weight: bold;">&lt;?php</span> et se termine par <span style="color: #d32f2f; font-weight: bold;">?&gt;</span>, permettant ainsi de basculer facilement entre HTML et PHP au sein d'une même page. Par exemple :
    </p>

    <div class="example-box">
        <pre><code>
            <span class="keyword">&lt;?php</span><br>
            <span class="string">echo "Bonjour, Monde !"</span>;<br>
            <span class="keyword">?&gt;</span>
        </code></pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Cette syntaxe permet d'exécuter des scripts côté serveur pour générer du contenu avant que la page ne soit envoyée au navigateur de l'utilisateur. La commande <span style="color: #d32f2f; font-weight: bold;">echo</span>, très utilisée, permet d'afficher du texte ou des variables directement dans le document HTML.
    </p>
</div>

<!-- Variables -->
<div class="content-section" id="variables" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">

    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-code"></i> Variables en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        En <span style="color: #1e88e5; font-weight: bold;">PHP</span>, une variable est un conteneur pour stocker des valeurs de différents types. Toutes les variables en PHP commencent par le symbole <strong style="color: #d32f2f;">$</strong>, suivi d'un nom choisi par le développeur. PHP est un langage de typage dynamique, ce qui signifie que vous n'avez pas besoin de déclarer explicitement le type de chaque variable.
    </p>
    
    <p style="font-size: 1.1em; color: #333;">
        Voici des exemples d'utilisation des variables pour divers types de données :
    </p>

    <!-- Exemple de variables avec différents types -->
    <div class="example-box">
        <strong><i class="fas fa-database"></i> Exemple de types de données :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$nom</span> = <span class="string">"Abdurahman"</span>;         <span class="comment">// Chaîne de caractères</span>
<span class="variable">$age</span> = <span class="number">30</span>;                   <span class="comment">// Entier</span>
<span class="variable">$poids</span> = <span class="number">72.5</span>;               <span class="comment">// Flottant</span>
<span class="variable">$estConnecte</span> = <span class="keyword">true</span>;         <span class="comment">// Booléen</span>

<span class="keyword">echo</span> <span class="variable">$nom</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        En PHP, les variables peuvent contenir des <strong style="color: #d32f2f;">chaînes de caractères</strong>, des <strong style="color: #d32f2f;">nombres entiers</strong>, des <strong style="color: #d32f2f;">flottants</strong> (décimaux), et des <strong style="color: #d32f2f;">booléens</strong> (vrai/faux).
    </p>

    <!-- Exemple de variables avec concaténation -->
    <div class="example-box">
        <strong><i class="fas fa-link"></i> Exemple de concaténation de chaînes :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$prenom</span> = <span class="string">"Jean"</span>;
<span class="variable">$nom</span> = <span class="string">"Dupont"</span>;
<span class="variable">$age</span> = <span class="number">25</span>;

<span class="keyword">echo</span> <span class="string">"Bonjour, je m'appelle "</span> . <span class="variable">$prenom</span> . <span class="string">" "</span> . <span class="variable">$nom</span> . <span class="string">" et j'ai "</span> . <span class="variable">$age</span> . <span class="string">" ans."</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        PHP permet la <strong style="color: #d32f2f;">concaténation</strong> de chaînes de caractères en utilisant le point <strong style="color: #d32f2f;">.</strong>. Cette technique est utile pour assembler plusieurs chaînes de texte ou pour afficher des valeurs variables dans des phrases complètes.
    </p>

    <!-- Exemple de variables avec tableaux -->
    <div class="example-box">
        <strong><i class="fas fa-list"></i> Exemple de tableaux (array) :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$fruits</span> = <span class="keyword">array</span>(<span class="string">"pomme"</span>, <span class="string">"banane"</span>, <span class="string">"cerise"</span>);
<span class="keyword">echo</span> <span class="string">"Le premier fruit est "</span> . <span class="variable">$fruits</span>[<span class="number">0</span>];
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Les <strong style="color: #d32f2f;">tableaux</strong> sont des structures de données qui permettent de stocker plusieurs valeurs sous une même variable. En PHP, ils peuvent être indexés numériquement ou de manière associative.
    </p>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt"></i> Exercice :</strong>
        <p>Créez une variable nommée <code>$prenom</code> contenant votre prénom, une variable <code>$age</code> avec votre âge, et une variable <code>$ville</code> avec le nom de votre ville. Utilisez ensuite la concaténation pour afficher une phrase comme : "Bonjour, je m'appelle [prénom], j'ai [âge] ans et je vis à [ville]."</p>
        <p>Utilisez <code>echo</code> pour afficher le résultat.</p>
    </div>
</div>

<div class="content-section" id="types" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-cubes"></i> Types de Données en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        PHP prend en charge plusieurs types de données pour stocker différentes sortes de valeurs. Les types de données courants incluent les chaînes de caractères, les entiers, les flottants, les booléens, les tableaux et les objets. PHP détermine automatiquement le type de données d’une variable en fonction de sa valeur.
    </p>

    <!-- Chaînes de caractères -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-quote-right"></i> Chaînes de Caractères (String)
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les chaînes de caractères en PHP sont utilisées pour stocker du texte. Elles peuvent être entourées de guillemets simples <code>' '</code> ou de guillemets doubles <code>" "</code>.
    </p>
    <div class="example-box">
        <strong>Exemple de Chaîne de Caractères :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$message</span> = <span class="string">"Bonjour tout le monde!"</span>;
<span class="variable">$nom</span> = <span class="string">'Abdurahman'</span>;

<span class="keyword">echo</span> <span class="variable">$message</span> . <span class="string">" Mon nom est "</span> . <span class="variable">$nom</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Entiers -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-hashtag"></i> Entiers (Integer)
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les entiers sont des nombres sans partie décimale. Ils peuvent être positifs ou négatifs.
    </p>
    <div class="example-box">
        <strong>Exemple d'Entier :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$age</span> = <span class="number">30</span>;
<span class="variable">$anneeNaissance</span> = <span class="number">1993</span>;

<span class="keyword">echo</span> <span class="string">"J'ai "</span> . <span class="variable">$age</span> . <span class="string">" ans et je suis né en "</span> . <span class="variable">$anneeNaissance</span> . <span class="string">"."</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Flottants -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-percentage"></i> Flottants (Float)
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les flottants sont des nombres avec une partie décimale. Ils sont utilisés pour les valeurs numériques précises.
    </p>
    <div class="example-box">
        <strong>Exemple de Flottant :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$poids</span> = <span class="number">72.5</span>;
<span class="variable">$hauteur</span> = <span class="number">1.80</span>;

<span class="keyword">echo</span> <span class="string">"Mon poids est de "</span> . <span class="variable">$poids</span> . <span class="string">" kg et ma hauteur est de "</span> . <span class="variable">$hauteur</span> . <span class="string">" m."</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Booléens -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-check"></i> Booléens (Boolean)
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les booléens représentent des valeurs de vérité : <code>true</code> (vrai) ou <code>false</code> (faux). Ils sont souvent utilisés dans les conditions.
    </p>
    <div class="example-box">
        <strong>Exemple de Booléen :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$estConnecte</span> = <span class="keyword">true</span>;
<span class="variable">$aDesMessages</span> = <span class="keyword">false</span>;

<span class="keyword">if</span> (<span class="variable">$estConnecte</span>) {
    <span class="keyword">echo</span> <span class="string">"Utilisateur connecté"</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Utilisateur non connecté"</span>;
}
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Tableaux -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-list"></i> Tableaux (Array)
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les tableaux permettent de stocker plusieurs valeurs sous une seule variable. En PHP, ils peuvent être indexés numériquement ou associatifs.
    </p>
    <div class="example-box">
        <strong>Exemple de Tableau :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$animaux</span> = <span class="keyword">array</span>(<span class="string">"chien"</span>, <span class="string">"chat"</span>, <span class="string">"oiseau"</span>);

<span class="keyword">echo</span> <span class="string">"Le deuxième animal est un "</span> . <span class="variable">$animaux</span>[<span class="number">1</span>];
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Objets -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-cube"></i> Objets (Object)
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les objets sont des instances de classes en PHP. Ils permettent de créer des structures plus complexes et d'encapsuler des données et des fonctionnalités.
    </p>
    <div class="example-box">
        <strong>Exemple d'Objet :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">class</span> <span class="variable">Personne</span> {
    <span class="keyword">public</span> <span class="variable">$nom</span>;
    <span class="keyword">public</span> <span class="variable">$age</span>;

    <span class="keyword">public function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>) {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">age</span> = <span class="variable">$age</span>;
    }
}

<span class="variable">$personne</span> = <span class="keyword">new</span> <span class="variable">Personne</span>(<span class="string">"Abdurahman"</span>, <span class="number">30</span>);
<span class="keyword">echo</span> <span class="string">"Nom: "</span> . <span class="variable">$personne</span>-><span class="variable">nom</span> . <span class="string">", Age: "</span> . <span class="variable">$personne</span>-><span class="variable">age</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>
</div>



<div class="content-section" id="operateurs" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-calculator"></i> Opérateurs en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les opérateurs en PHP permettent de manipuler et de comparer des valeurs. Voici les principaux types d'opérateurs en PHP, incluant les opérateurs arithmétiques, d'affectation, de comparaison, et logiques.
    </p>

    <!-- Opérateurs Arithmétiques -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-plus"></i> Opérateurs Arithmétiques
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les opérateurs arithmétiques permettent d'effectuer des opérations mathématiques de base.
    </p>
    <div class="example-box">
        <strong>Exemples d'Opérateurs Arithmétiques :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$a</span> = <span class="number">10</span>;
<span class="variable">$b</span> = <span class="number">5</span>;

<span class="variable">$addition</span> = <span class="variable">$a</span> + <span class="variable">$b</span>;    <span class="comment">// Addition (10 + 5 = 15)</span>
<span class="variable">$soustraction</span> = <span class="variable">$a</span> - <span class="variable">$b</span>; <span class="comment">// Soustraction (10 - 5 = 5)</span>
<span class="variable">$multiplication</span> = <span class="variable">$a</span> * <span class="variable">$b</span>; <span class="comment">// Multiplication (10 * 5 = 50)</span>
<span class="variable">$division</span> = <span class="variable">$a</span> / <span class="variable">$b</span>;   <span class="comment">// Division (10 / 5 = 2)</span>
<span class="variable">$modulo</span> = <span class="variable">$a</span> % <span class="variable">$b</span>;    <span class="comment">// Modulo (10 % 5 = 0)</span>

<span class="keyword">echo</span> <span class="variable">$addition</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Opérateurs d'Affectation -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-equals"></i> Opérateurs d'Affectation
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les opérateurs d'affectation servent à attribuer une valeur à une variable. L'opérateur d'affectation le plus courant est <code>=</code>, mais il existe aussi des opérateurs combinés comme <code>+=</code> et <code>*=</code>.
    </p>
    <div class="example-box">
        <strong>Exemples d'Opérateurs d'Affectation :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$x</span> = <span class="number">10</span>;
<span class="variable">$x</span> += <span class="number">5</span>;   <span class="comment">// Equivalent à $x = $x + 5 (x vaut maintenant 15)</span>
<span class="variable">$y</span> = <span class="number">20</span>;
<span class="variable">$y</span> *= <span class="number">2</span>;   <span class="comment">// Equivalent à $y = $y * 2 (y vaut maintenant 40)</span>

<span class="keyword">echo</span> <span class="variable">$x</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Opérateurs de Comparaison -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-balance-scale"></i> Opérateurs de Comparaison
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les opérateurs de comparaison comparent deux valeurs et renvoient un booléen (<code>true</code> ou <code>false</code>) en fonction du résultat.
    </p>
    <div class="example-box">
        <strong>Exemples d'Opérateurs de Comparaison :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$a</span> = <span class="number">10</span>;
<span class="variable">$b</span> = <span class="number">20</span>;

<span class="variable">$egal</span> = <span class="variable">$a</span> == <span class="variable">$b</span>;    <span class="comment">// Faux, car 10 n'est pas égal à 20</span>
<span class="variable">$different</span> = <span class="variable">$a</span> != <span class="variable">$b</span>; <span class="comment">// Vrai, car 10 est différent de 20</span>
<span class="variable">$superieur</span> = <span class="variable">$a</span> > <span class="variable">$b</span>;   <span class="comment">// Faux, car 10 n'est pas supérieur à 20</span>

<span class="keyword">echo</span> <span class="variable">$egal</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Opérateurs Logiques -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-adjust"></i> Opérateurs Logiques
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Les opérateurs logiques sont utilisés pour combiner plusieurs conditions. Ils incluent <code>&&</code> (ET), <code>||</code> (OU), et <code>!</code> (NON).
    </p>
    <div class="example-box">
        <strong>Exemples d'Opérateurs Logiques :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$a</span> = <span class="number">10</span>;
<span class="variable">$b</span> = <span class="number">20</span>;

<span class="variable">$et</span> = (<span class="variable">$a</span> > <span class="number">5</span>) && (<span class="variable">$b</span> < <span class="number">30</span>);   <span class="comment">// Vrai, car les deux conditions sont vraies</span>
<span class="variable">$ou</span> = (<span class="variable">$a</span> > <span class="number">15</span>) || (<span class="variable">$b</span> == <span class="number">20</span>);  <span class="comment">// Vrai, car une des deux conditions est vraie</span>
<span class="variable">$non</span> = !<span class="variable">$et</span>;                            <span class="comment">// Faux, car $et est vrai</span>

<span class="keyword">echo</span> <span class="variable">$et</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt"></i> Exercice :</strong>
        <p>Créez deux variables, <code>$x</code> et <code>$y</code>, contenant des nombres de votre choix. Utilisez les opérateurs arithmétiques et logiques pour vérifier si la somme des deux nombres est supérieure à 20 et si l'un des deux nombres est pair.</p>
        <p>Affichez un message indiquant si les conditions sont vraies ou fausses.</p>
    </div>
</div>

<!-- Constantes en PHP -->

<div class="content-section" id="constants" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-thumbtack"></i> Constantes en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, une constante est une valeur qui ne peut pas être modifiée une fois définie. Les constantes sont souvent utilisées pour des valeurs fixes qui ne changent pas au cours de l'exécution du script, comme les paramètres de configuration.
    </p>
    <p style="font-size: 1.1em; color: #333;">
        On définit une constante en utilisant la fonction <code>define()</code> ou le mot-clé <code>const</code>. Par convention, les noms de constantes sont écrits en majuscules.
    </p>

    <!-- Définir une constante avec define() -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-cog"></i> Définir une Constante avec <code>define()</code>
    </h3>
    <div class="example-box">
        <strong>Exemple de Constante avec <code>define()</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">define</span>(<span class="string">"NOM_SITE"</span>, <span class="string">"MonSiteWeb"</span>);
<span class="keyword">define</span>(<span class="string">"TAUX_TVA"</span>, <span class="number">0.20</span>);

<span class="keyword">echo</span> <span class="string">"Bienvenue sur "</span> . <span class="variable">NOM_SITE</span>;
<span class="keyword">echo</span> <span class="string">"Le taux de TVA est de "</span> . <span class="variable">TAUX_TVA</span> . <span class="string">"."</span>;
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Définir une constante avec const -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-wrench"></i> Définir une Constante avec <code>const</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Le mot-clé <code>const</code> est une autre façon de définir une constante, généralement utilisé dans des classes.
    </p>
    <div class="example-box">
        <strong>Exemple de Constante avec <code>const</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">class</span> <span class="variable">Parametres</span> {
    <span class="keyword">const</span> <span class="variable">TAUX_INTERET</span> = <span class="number">0.05</span>;
    <span class="keyword">const</span> <span class="variable">NOM_BANQUE</span> = <span class="string">"BanquePopulaire"</span>;
}

<span class="keyword">echo</span> <span class="variable">Parametres</span>::<span class="variable">NOM_BANQUE</span>; <span class="comment">// Affiche "BanquePopulaire"</span>
<span class="keyword">echo</span> <span class="variable">Parametres</span>::<span class="variable">TAUX_INTERET</span>; <span class="comment">// Affiche 0.05</span>
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Constantes magiques -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-magic"></i> Constantes Magiques
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        PHP fournit également des "constantes magiques" qui changent de valeur en fonction de leur emplacement dans le code. Les constantes magiques sont précédées et suivies de deux underscores (<code>__</code>).
    </p>
    <div class="example-box">
        <strong>Exemples de Constantes Magiques :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">echo</span> <span class="variable">__LINE__</span>;    <span class="comment">// Affiche le numéro de la ligne actuelle</span>
<span class="keyword">echo</span> <span class="variable">__FILE__</span>;    <span class="comment">// Affiche le chemin complet du fichier</span>
<span class="keyword">echo</span> <span class="variable">__DIR__</span>;     <span class="comment">// Affiche le dossier du fichier</span>
<span class="keyword">echo</span> <span class="variable">__FUNCTION__</span>; <span class="comment">// Affiche le nom de la fonction</span>
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt"></i> Exercice :</strong>
        <p>Créez une constante appelée <code>NOM_ENTREPRISE</code> avec le nom d'une entreprise fictive. Affichez ensuite un message qui dit "Bienvenue chez [NOM_ENTREPRISE] !". Essayez aussi d'afficher le chemin du fichier en utilisant une constante magique.</p>
    </div>
</div>

<!-- Structure de contrôle -->
<div class="content-section" id="control-structures" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-project-diagram"></i> Structures de Contrôle en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les structures de contrôle permettent de diriger l'exécution du code en fonction de conditions ou de boucles. En PHP, les structures de contrôle les plus courantes sont <code>if</code>, <code>else</code>, <code>switch</code>, <code>for</code>, <code>while</code>, et <code>foreach</code>.
    </p>

    <!-- Condition if/else -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-code-branch"></i> Structure Conditionnelle <code>if</code> / <code>else</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        La structure <code>if</code> vérifie si une condition est vraie, et exécute le code associé. Si la condition est fausse, on peut utiliser <code>else</code> pour exécuter un autre bloc de code.
    </p>
    <div class="example-box">
        <strong>Exemple avec <code>if</code> / <code>else</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$age</span> = <span class="number">20</span>;

<span class="keyword">if</span> (<span class="variable">$age</span> >= <span class="number">18</span>) {
    <span class="keyword">echo</span> <span class="string">"Vous êtes majeur."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Vous êtes mineur."</span>;
}
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Structure switch -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-random"></i> Structure Conditionnelle <code>switch</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        La structure <code>switch</code> est utilisée pour exécuter différents blocs de code en fonction de la valeur d'une variable. Elle est particulièrement utile pour éviter de nombreux <code>if</code> imbriqués.
    </p>
    <div class="example-box">
        <strong>Exemple avec <code>switch</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$jour</span> = <span class="string">"mardi"</span>;

<span class="keyword">switch</span> (<span class="variable">$jour</span>) {
    <span class="keyword">case</span> <span class="string">"lundi"</span>:
        <span class="keyword">echo</span> <span class="string">"C'est le début de la semaine."</span>;
        <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="string">"vendredi"</span>:
        <span class="keyword">echo</span> <span class="string">"Le week-end approche!"</span>;
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        <span class="keyword">echo</span> <span class="string">"C'est un jour ordinaire."</span>;
}
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Boucle for -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-sync"></i> Boucle <code>for</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        La boucle <code>for</code> est utilisée lorsque le nombre d'itérations est connu à l'avance. Elle comprend trois parties : initialisation, condition, et incrémentation.
    </p>
    <div class="example-box">
        <strong>Exemple de boucle <code>for</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">for</span> (<span class="variable">$i</span> = <span class="number">1</span>; <span class="variable">$i</span> <= <span class="number">5</span>; <span class="variable">$i</span>++) {
    <span class="keyword">echo</span> <span class="string">"Itération : "</span> . <span class="variable">$i</span> . <span class="string">"<br>"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Boucle while -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-redo"></i> Boucle <code>while</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        La boucle <code>while</code> continue tant qu'une condition est vraie. Elle est idéale lorsque le nombre d'itérations n'est pas connu à l'avance.
    </p>
    <div class="example-box">
        <strong>Exemple de boucle <code>while</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$compteur</span> = <span class="number">1</span>;

<span class="keyword">while</span> (<span class="variable">$compteur</span> <= <span class="number">5</span>) {
    <span class="keyword">echo</span> <span class="string">"Compteur : "</span> . <span class="variable">$compteur</span> . <span class="string">"<br>"</span>;
    <span class="variable">$compteur</span>++;
}
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Boucle foreach -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-undo-alt"></i> Boucle <code>foreach</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        La boucle <code>foreach</code> est utilisée pour itérer sur chaque élément d'un tableau. Elle est particulièrement utile pour traiter des tableaux sans connaître leur taille.
    </p>
    <div class="example-box">
        <strong>Exemple de boucle <code>foreach</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="variable">$fruits</span> = <span class="keyword">array</span>(<span class="string">"pomme"</span>, <span class="string">"banane"</span>, <span class="string">"cerise"</span>);

<span class="keyword">foreach</span> (<span class="variable">$fruits</span> <span class="keyword">as</span> <span class="variable">$fruit</span>) {
    <span class="keyword">echo</span> <span class="string">"Fruit : "</span> . <span class="variable">$fruit</span> . <span class="string">"<br>"</span>;
}
<span class="keyword">?&gt;</span>
        </pre>
    </div>
    <!-- Boucle trycatch -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Gestion des Exceptions avec <code>try</code> / <code>catch</code>
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Le bloc <code>try</code> / <code>catch</code> en PHP est utilisé pour gérer les exceptions. Il permet d'attraper des erreurs sans interrompre l'exécution du programme. Le code susceptible de générer une exception est placé dans le bloc <code>try</code>, et en cas d'erreur, le bloc <code>catch</code> est exécuté pour gérer l'exception.
    </p>
    <div class="example-box">
        <strong>Exemple de <code>try</code> / <code>catch</code> :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">diviser</span>(<span class="variable">$numerateur</span>, <span class="variable">$denominateur</span>) {
    <span class="keyword">if</span> (<span class="variable">$denominateur</span> == <span class="number">0</span>) {
        <span class="keyword">throw new</span> <span class="variable">Exception</span>(<span class="string">"Division par zéro interdite."</span>);
    }
    <span class="keyword">return</span> <span class="variable">$numerateur</span> / <span class="variable">$denominateur</span>;
}

<span class="keyword">try</span> {
    <span class="variable">$resultat</span> = <span class="variable">diviser</span>(<span class="number">10</span>, <span class="number">0</span>);
    <span class="keyword">echo</span> <span class="variable">$resultat</span>;
} <span class="keyword">catch</span> (<span class="variable">Exception</span> <span class="variable">$e</span>) {
    <span class="keyword">echo</span> <span class="string">"Erreur : "</span> . <span class="variable">$e</span>-><span class="variable">getMessage</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, la fonction <code>diviser</code> lance une exception si le dénominateur est zéro. Le bloc <code>try</code> tente d'exécuter cette fonction, et en cas de division par zéro, le bloc <code>catch</code> capture l'exception et affiche un message d'erreur.
    </p>

    
    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt"></i> Exercice <code>try...catch</code> :</strong>
        <p>Créez une fonction qui vérifie si une chaîne de texte contient plus de 10 caractères. Si c'est le cas, lancez une exception avec le message "La chaîne est trop longue". Utilisez <code>try</code> / <code>catch</code> pour gérer cette exception et afficher un message approprié.</p>
    </div>
    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt"></i> Exercice<code> foreach</code> :</strong>
        <p>Créez un tableau contenant les jours de la semaine. Utilisez une boucle <code>foreach</code> pour afficher chaque jour. Ajoutez ensuite une condition dans la boucle pour afficher un message spécifique pour le week-end ("samedi" et "dimanche").</p>
    </div>
</div>

<div class="content-section" id="functions" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-cogs"></i> Déclaration de Fonctions en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les fonctions en PHP permettent d'organiser et de réutiliser des blocs de code. Elles prennent généralement des paramètres et peuvent renvoyer une valeur. Dans un contexte professionnel, les fonctions aident à structurer le code et à exécuter des tâches spécifiques de manière efficace.
    </p>

    <!-- Fonction de validation d'email -->
    <h3 style="font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-envelope"></i> Exemple : Validation d'un Email
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check-circle" style="color: #388e3c;"></i> Cette fonction professionnelle vérifie si une adresse email est bien formatée. Elle pourrait être utilisée dans une application de gestion d'utilisateurs pour garantir que seuls des emails valides sont enregistrés.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Fonction de Validation d'Email :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">validerEmail</span>(<span class="variable">$email</span>) {
    <span class="keyword">return</span> <span class="function">filter_var</span>(<span class="variable">$email</span>, <span class="variable">FILTER_VALIDATE_EMAIL</span>) !== <span class="keyword">false</span>;
}

// Utilisation
<span class="variable">$email</span> = <span class="string">"utilisateur@example.com"</span>;
<span class="keyword">if</span> (<span class="variable">validerEmail</span>(<span class="variable">$email</span>)) {
    <span class="keyword">echo</span> <span class="string">"Email valide"</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Email invalide"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Fonction pour calculer un total avec TVA -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-calculator"></i> Exemple : Calcul d'un Total avec TVA
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-percentage" style="color: #ff5722;"></i> Cette fonction calcule le total d'une commande en ajoutant la TVA. Elle pourrait être utilisée dans un site e-commerce pour afficher le prix total à l'utilisateur.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Fonction de Calcul de Total avec TVA :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">calculerTotalTTC</span>(<span class="variable">$montantHT</span>, <span class="variable">$tauxTVA</span> = <span class="number">0.20</span>) {
    <span class="variable">$montantTTC</span> = <span class="variable">$montantHT</span> * ( <span class="number">1</span> + <span class="variable">$tauxTVA</span>);
    <span class="keyword">return</span> <span class="function">round</span>(<span class="variable">$montantTTC</span>, <span class="number">2</span>);
}

// Utilisation
<span class="variable">$montantHT</span> = <span class="number">100</span>;
<span class="variable">$totalTTC</span> = <span class="variable">calculerTotalTTC</span>(<span class="variable">$montantHT</span>);
<span class="keyword">echo</span> <span class="string">"Le montant TTC est : "</span> . <span class="variable">$totalTTC</span> . <span class="string">"€"</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Fonction d'envoi de mail avec modèle -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-paper-plane"></i> Exemple : Envoi de Mail avec Modèle
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-envelope" style="color: #1e88e5;"></i> Cette fonction permet d'envoyer un email personnalisé. Elle utilise un modèle de message pour s'assurer que chaque email est correctement formaté. Ce type de fonction est courant dans les applications professionnelles pour envoyer des notifications ou des confirmations.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Fonction d'Envoi de Mail :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">envoyerEmail</span>(<span class="variable">$destinataire</span>, <span class="variable">$sujet</span>, <span class="variable">$contenu</span>) {
    <span class="variable">$headers</span> = <span class="string">"From: contact@monsite.com\r\n"</span>;
    <span class="variable">$headers</span> .= <span class="string">"Content-Type: text/html; charset=UTF-8\r\n"</span>;
    
    <span class="keyword">return</span> <span class="function">mail</span>(<span class="variable">$destinataire</span>, <span class="variable">$sujet</span>, <span class="variable">$contenu</span>, <span class="variable">$headers</span>);
}

// Utilisation
<span class="variable">$destinataire</span> = <span class="string">"client@example.com"</span>;
<span class="variable">$sujet</span> = <span class="string">"Confirmation de votre commande"</span>;
<span class="variable">$contenu</span> = <span class="string">"
    &lt;h1&gt;Merci pour votre commande&lt;/h1&gt;
    &lt;p&gt;Votre commande a été reçue et sera traitée sous peu.&lt;/p&gt;
"</span>;

<span class="keyword">if</span> (<span class="variable">envoyerEmail</span>(<span class="variable">$destinataire</span>, <span class="variable">$sujet</span>, <span class="variable">$contenu</span>)) {
    <span class="keyword">echo</span> <span class="string">"Email envoyé avec succès"</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Erreur lors de l'envoi de l'email"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-bolt" style="color: #ff5722;"></i> Créez une fonction <code>calculerRemise</code> qui prend le montant d'une commande et un pourcentage de remise. Elle doit renvoyer le montant final après application de la remise. Simulez ensuite un calcul de remise de 10% sur une commande de 200€.</p>
    </div>
</div>


<div class="content-section" id="params" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-sign-in-alt"></i> Paramètres et <i class="fas fa-sign-out-alt"></i> Valeurs de Retour en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, les paramètres permettent de passer des informations à une fonction pour qu'elle les utilise dans son traitement. Les fonctions peuvent aussi retourner une valeur en utilisant l'instruction <code>return</code>. Cela est essentiel pour obtenir un résultat à réutiliser dans d'autres parties du code, ce qui est courant dans les applications professionnelles.
    </p>

    <!-- Fonction avec paramètres pour calculer une réduction -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-percentage"></i> Exemple : Calcul de Réduction sur un Prix
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-tags" style="color: #4caf50;"></i> Cette fonction calcule le prix après réduction en utilisant le prix initial et le pourcentage de réduction. Cela pourrait être utilisé dans un site e-commerce pour appliquer des promotions aux produits.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Fonction de Calcul de Réduction :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">calculerReduction</span>(<span class="variable">$prixInitial</span>, <span class="variable">$pourcentageReduction</span>) {
    <span class="variable">$montantReduction</span> = <span class="variable">$prixInitial</span> * (<span class="variable">$pourcentageReduction</span> / <span class="number">100</span>);
    <span class="keyword">return</span> <span class="variable">$prixInitial</span> - <span class="variable">$montantReduction</span>;
}

// Utilisation
<span class="variable">$prixProduit</span> = <span class="number">150</span>;
<span class="variable">$prixApresReduction</span> = <span class="variable">calculerReduction</span>(<span class="variable">$prixProduit</span>, <span class="number">20</span>);
<span class="keyword">echo</span> <span class="string">"Le prix après réduction est de : "</span> . <span class="variable">$prixApresReduction</span> . <span class="string">"€"</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Fonction avec retour de données structuré (tableau associatif) -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-box"></i> Exemple : Informations de Commande sous forme de Tableau Associatif
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shopping-cart" style="color: #ff9800;"></i> Cette fonction renvoie un tableau associatif contenant des informations de commande, comme le montant, le client et la date. Ce format de retour est très utile pour structurer les données avant de les afficher ou de les enregistrer.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Fonction d'Informations de Commande :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">creerCommande</span>(<span class="variable">$nomClient</span>, <span class="variable">$montantTotal</span>) {
    <span class="variable">$commande</span> = [
        <span class="string">"client"</span> => <span class="variable">$nomClient</span>,
        <span class="string">"montant"</span> => <span class="variable">$montantTotal</span>,
        <span class="string">"date"</span> => <span class="function">date</span>(<span class="string">"Y-m-d H:i:s"</span>)
    ];
    <span class="keyword">return</span> <span class="variable">$commande</span>;
}

// Utilisation
<span class="variable">$infoCommande</span> = <span class="variable">creerCommande</span>(<span class="string">"Dupont Jean"</span>, <span class="number">250</span>);
<span class="keyword">echo</span> <span class="string">"Client : "</span> . <span class="variable">$infoCommande</span>[<span class="string">"client"</span>] . <span class="string">" - Montant : "</span> . <span class="variable">$infoCommande</span>[<span class="string">"montant"</span>] . <span class="string">"€ - Date : "</span> . <span class="variable">$infoCommande</span>[<span class="string">"date"</span>];

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Fonction avec paramètres par défaut pour une configuration -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 20px;">
        <i class="fas fa-cog"></i> Exemple : Configuration d'Affichage avec Paramètres par Défaut
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-sliders-h" style="color: #673ab7;"></i> Cette fonction configure des options d'affichage avec des paramètres par défaut. Dans un site professionnel, ce type de fonction pourrait être utilisé pour personnaliser la mise en page ou les réglages d'un tableau.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Fonction de Configuration d'Affichage :</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">configurerAffichage</span>(<span class="variable">$largeur</span> = <span class="number">800</span>, <span class="variable">$hauteur</span> = <span class="number">600</span>, <span class="variable">$theme</span> = <span class="string">"clair"</span>) {
    <span class="keyword">return</span> [
        <span class="string">"largeur"</span> => <span class="variable">$largeur</span>,
        <span class="string">"hauteur"</span> => <span class="variable">$hauteur</span>,
        <span class="string">"theme"</span> => <span class="variable">$theme</span>
    ];
}

// Utilisation
<span class="variable">$optionsAffichage</span> = <span class="variable">configurerAffichage</span>(<span class="number">1024</span>);
<span class="keyword">echo</span> <span class="string">"Affichage : largeur "</span> . <span class="variable">$optionsAffichage</span>[<span class="string">"largeur"</span>] . <span class="string">"px, hauteur "</span> . <span class="variable">$optionsAffichage</span>[<span class="string">"hauteur"</span>] . <span class="string">"px, thème "</span> . <span class="variable">$optionsAffichage</span>[<span class="string">"theme"</span>];

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une fonction <code>calculerFraisLivraison</code> qui prend un montant de commande et un paramètre de distance (par défaut 10 km). La fonction doit appliquer 2€ par kilomètre de distance et renvoyer le total des frais de livraison. Testez-la avec une commande de 100€ et une distance de 15 km.</p>
    </div>
</div>
<div class="content-section" id="arrays" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-list"></i> Tableaux en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les tableaux en PHP sont des structures de données qui permettent de stocker plusieurs valeurs dans une seule variable. Ils peuvent être indexés numériquement ou par des clés associatives. Dans un contexte professionnel, les tableaux sont essentiels pour organiser des collections de données, comme les listes de produits, les informations utilisateur, etc.
    </p>

    <!-- Tableaux indexés numériquement -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-th-list"></i> Tableaux Indexés Numériquement
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-hashtag" style="color: #9e9e9e;"></i> Un tableau indexé numériquement utilise des indices numériques pour chaque élément. Cela est pratique pour stocker des collections simples, comme une liste d'articles ou de catégories.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Liste d'Articles Disponibles</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$articles</span> = [<span class="string">"Ordinateur"</span>, <span class="string">"Smartphone"</span>, <span class="string">"Tablette"</span>];

<span class="keyword">foreach</span> (<span class="variable">$articles</span> <span class="keyword">as</span> <span class="variable">$article</span>) {
    <span class="keyword">echo</span> <span class="string">"Produit : "</span> . <span class="variable">$article</span> . <span class="string">"<br>"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Tableaux associatifs -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-key"></i> Tableaux Associatifs
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-key" style="color: #ff9800;"></i> Un tableau associatif utilise des clés pour identifier chaque valeur. Cela est particulièrement utile pour structurer des informations complexes, comme les détails d'un utilisateur.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Informations Utilisateur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$utilisateur</span> = [
    <span class="string">"nom"</span> => <span class="string">"Dupont"</span>,
    <span class="string">"email"</span> => <span class="string">"dupont@example.com"</span>,
    <span class="string">"age"</span> => <span class="number">30</span>
];

<span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$utilisateur</span>[<span class="string">"nom"</span>] . <span class="string">"<br>Email : "</span> . <span class="variable">$utilisateur</span>[<span class="string">"email"</span>] . <span class="string">"<br>Age : "</span> . <span class="variable">$utilisateur</span>[<span class="string">"age"</span>];

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Tableaux multidimensionnels -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-layer-group"></i> Tableaux Multidimensionnels
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-layer-group" style="color: #4caf50;"></i> Un tableau multidimensionnel est un tableau contenant un ou plusieurs autres tableaux. Il est souvent utilisé pour organiser des ensembles de données complexes, comme une liste de produits avec leurs détails.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Liste de Produits avec Détails</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$produits</span> = [
    [
        <span class="string">"nom"</span> => <span class="string">"Ordinateur"</span>,
        <span class="string">"prix"</span> => <span class="number">1000</span>,
        <span class="string">"stock"</span> => <span class="number">5</span>
    ],
    [
        <span class="string">"nom"</span> => <span class="string">"Smartphone"</span>,
        <span class="string">"prix"</span> => <span class="number">700</span>,
        <span class="string">"stock"</span> => <span class="number">8</span>
    ]
];

<span class="keyword">foreach</span> (<span class="variable">$produits</span> <span class="keyword">as</span> <span class="variable">$produit</span>) {
    <span class="keyword">echo</span> <span class="string">"Produit : "</span> . <span class="variable">$produit</span>[<span class="string">"nom"</span>] . <span class="string">", Prix : "</span> . <span class="variable">$produit</span>[<span class="string">"prix"</span>] . <span class="string">"€, Stock : "</span> . <span class="variable">$produit</span>[<span class="string">"stock"</span>] . <span class="string">" unités<br>"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un tableau multidimensionnel contenant une liste de clients, chaque client ayant un nom, un email et un numéro de téléphone. Utilisez une boucle <code>foreach</code> pour afficher les informations de chaque client sous forme de liste.</p>
    </div>
</div>
<div class="content-section" id="string-manipulation" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-quote-right"></i> Manipulation de Chaînes en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        La manipulation de chaînes est essentielle dans PHP, car elle permet de traiter des données textuelles comme les noms, les descriptions, les messages, etc. PHP propose de nombreuses fonctions pour manipuler les chaînes de caractères de manière professionnelle.
    </p>

    <!-- Fonction strlen pour la longueur des chaînes -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-ruler-horizontal"></i> Calcul de la Longueur d'une Chaîne
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-arrows-alt-h" style="color: #4caf50;"></i> La fonction <code>strlen()</code> permet de mesurer la longueur d'une chaîne de caractères, ce qui est utile, par exemple, pour limiter le nombre de caractères dans une description de produit.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Limiter une Description de Produit</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$description</span> = <span class="string">"Ce produit est de haute qualité et très populaire."</span>;

<span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$description</span>) > <span class="number">30</span>) {
    <span class="variable">$description</span> = <span class="function">substr</span>(<span class="variable">$description</span>, <span class="number">0</span>, <span class="number">30</span>) . <span class="string">"..."</span>;
}

<span class="keyword">echo</span> <span class="variable">$description</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Conversion des chaînes en majuscules/minuscules -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-text-height"></i> Conversion en Majuscules et Minuscules
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-arrow-up" style="color: #d32f2f;"></i> et <i class="fas fa-arrow-down" style="color: #1976d2;"></i> Les fonctions <code>strtoupper()</code> et <code>strtolower()</code> permettent de convertir une chaîne en majuscules ou en minuscules. Cela est souvent utile pour standardiser les données textuelles, comme les noms d'utilisateur.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Standardisation du Nom d'Utilisateur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$nomUtilisateur</span> = <span class="string">"Dupont Jean"</span>;

<span class="variable">$nomUtilisateur</span> = <span class="function">strtoupper</span>(<span class="variable">$nomUtilisateur</span>);
<span class="keyword">echo</span> <span class="string">"Nom d'utilisateur standardisé : "</span> . <span class="variable">$nomUtilisateur</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Recherche et remplacement de texte -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-search"></i> Recherche et Remplacement de Texte
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-exchange-alt" style="color: #ff9800;"></i> La fonction <code>str_replace()</code> permet de rechercher et remplacer une sous-chaîne dans une chaîne. Cela est utile pour corriger des erreurs ou personnaliser un message.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Remplacement de Mots dans une Politique</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$politiqueRetour</span> = <span class="string">"Les retours sont acceptés sous 14 jours."</span>;
<span class="variable">$nouvellePolitique</span> = <span class="function">str_replace</span>(<span class="string">"14 jours"</span>, <span class="string">"30 jours"</span>, <span class="variable">$politiqueRetour</span>);

<span class="keyword">echo</span> <span class="variable">$nouvellePolitique</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Extraction de sous-chaînes -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cut"></i> Extraction de Sous-Chaînes
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-scissors" style="color: #8e24aa;"></i> La fonction <code>substr()</code> permet d'extraire une partie d'une chaîne, utile par exemple pour afficher un résumé d'un article.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Résumé d'un Article</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$article</span> = <span class="string">"PHP est un langage de script populaire utilisé principalement pour le développement web."</span>;
<span class="variable">$resume</span> = <span class="function">substr</span>(<span class="variable">$article</span>, <span class="number">0</span>, <span class="number">50</span>) . <span class="string">"..."</span>;

<span class="keyword">echo</span> <span class="variable">$resume</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une fonction qui prend un nom complet (prénom et nom) et le formate comme suit : le prénom en minuscules et le nom en majuscules. Par exemple, "Jean Dupont" doit devenir "jean DUPONT". Testez la fonction avec différents noms.</p>
    </div>
</div>
<div class="content-section" id="sessions" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-user-lock"></i> Gestion des Sessions en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les sessions en PHP permettent de conserver des informations sur un utilisateur entre les différentes pages d'un site web. Elles sont souvent utilisées pour gérer les connexions, les préférences utilisateur, et bien d'autres données nécessaires à la personnalisation de l'expérience utilisateur. Les sessions sont particulièrement importantes dans les applications professionnelles pour maintenir la sécurité et la continuité des données.
    </p>

    <!-- Démarrer une session -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play"></i> Démarrer une Session
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-play-circle" style="color: #4caf50;"></i> La fonction <code>session_start()</code> initialise une session ou reprend celle déjà existante. Cette fonction doit être appelée au tout début du script, avant tout affichage HTML.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Démarrer une Session et Enregistrer un Nom d'Utilisateur</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="function">session_start</span>(); <span class="comment">// Démarre la session</span>

<span class="variable">$_SESSION</span>[<span class="string">'nom_utilisateur'</span>] = <span class="string">"JeanDupont"</span>;

<span class="keyword">echo</span> <span class="string">"Bienvenue, "</span> . <span class="variable">$_SESSION</span>[<span class="string">'nom_utilisateur'</span>];

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utiliser les sessions pour gérer les connexions -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sign-in-alt"></i> Gestion de la Connexion avec une Session
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-user-check" style="color: #1976d2;"></i> Les sessions sont souvent utilisées pour garder une trace des utilisateurs connectés. Une fois la session démarrée, on peut vérifier si un utilisateur est connecté ou non et rediriger les utilisateurs non connectés vers une page de connexion.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Vérifier l'État de Connexion</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="function">session_start</span>();

<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_SESSION</span>[<span class="string">'connecte'</span>]) && <span class="variable">$_SESSION</span>[<span class="string">'connecte'</span>] === <span class="keyword">true</span>) {
    <span class="keyword">echo</span> <span class="string">"Bienvenue, vous êtes connecté!"</span>;
} <span class="keyword">else</span> {
    <span class="function">header</span>(<span class="string">"Location: login.php"</span>);
    <span class="keyword">exit</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Gestion de l'inactivité avec expiration de session -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-hourglass-half"></i> Gestion de l'Inactivité et Expiration de Session
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-clock" style="color: #ff9800;"></i> Pour des raisons de sécurité, il est souvent nécessaire de déconnecter un utilisateur après une certaine période d'inactivité. Ce type de fonctionnalité est essentiel pour les applications bancaires, les systèmes de gestion d'entreprise, etc.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Déconnexion Automatique après 5 Minutes d'Inactivité</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="function">session_start</span>();

<span class="variable">$dureeInactivite</span> = <span class="number">300</span>; <span class="comment">// Durée en secondes (5 minutes)</span>

<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_SESSION</span>[<span class="string">'derniere_activite'</span>]) && (<span class="function">time</span>() - <span class="variable">$_SESSION</span>[<span class="string">'derniere_activite'</span>] > <span class="variable">$dureeInactivite</span>)) {
    <span class="function">session_unset</span>(); <span class="comment">// Supprime toutes les variables de session</span>
    <span class="function">session_destroy</span>(); <span class="comment">// Détruit la session</span>
    <span class="function">header</span>(<span class="string">"Location: login.php"</span>);
    <span class="keyword">exit</span>();
}

<span class="variable">$_SESSION</span>[<span class="string">'derniere_activite'</span>] = <span class="function">time</span>();

<span class="keyword">echo</span> <span class="string">"Session active."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Stockage des données utilisateur avec session et array -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-database"></i> Stockage des Données Utilisateur avec un Tableau de Session
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-id-badge" style="color: #673ab7;"></i> Les sessions permettent de stocker des informations supplémentaires sur l'utilisateur, comme ses préférences et son rôle. Cela peut être structuré dans un tableau multidimensionnel pour des données complexes.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Stockage des Détails d'Utilisateur Connecté</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="function">session_start</span>();

<span class="variable">$_SESSION</span>[<span class="string">'utilisateur'</span>] = [
    <span class="string">"id"</span> => <span class="number">1</span>,
    <span class="string">"nom"</span> => <span class="string">"Dupont"</span>,
    <span class="string">"role"</span> => <span class="string">"admin"</span>,
    <span class="string">"preferences"</span> => [
        <span class="string">"theme"</span> => <span class="string">"sombre"</span>,
        <span class="string">"notifications"</span> => <span class="keyword">true</span>
    ]
];

// Accéder aux données de session
<span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$_SESSION</span>[<span class="string">'utilisateur'</span>][<span class="string">'nom'</span>];
<span class="keyword">echo</span> <span class="string">" - Rôle : "</span> . <span class="variable">$_SESSION</span>[<span class="string">'utilisateur'</span>][<span class="string">'role'</span>];
<span class="keyword">echo</span> <span class="string">" - Thème : "</span> . <span class="variable">$_SESSION</span>[<span class="string">'utilisateur'</span>][<span class="string">'preferences'</span>][<span class="string">'theme'</span>];

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un système de gestion de session pour une application de connexion où :
            <ul>
                <li>Les utilisateurs sont redirigés vers une page de connexion s'ils ne sont pas connectés.</li>
                <li>La session se termine automatiquement après 10 minutes d'inactivité.</li>
                <li>Affichez les détails de l'utilisateur, y compris son nom, son rôle, et son choix de thème (clair/sombre).</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="cookies" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-cookie-bite"></i> Gestion des Cookies en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les cookies sont des petits fichiers stockés sur l'ordinateur de l'utilisateur qui permettent de conserver des informations entre les différentes visites sur un site web. En PHP, les cookies sont souvent utilisés pour mémoriser les préférences de l'utilisateur, comme le choix de langue, ou pour maintenir une connexion persistante.
    </p>

    <!-- Création de cookies -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-plus-circle"></i> Création d'un Cookie
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-clipboard-check" style="color: #4caf50;"></i> En PHP, la fonction <code>setcookie()</code> est utilisée pour créer un cookie. Elle prend en paramètre le nom du cookie, sa valeur, et une durée d'expiration en timestamp.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Enregistrer une Préférence de Langue</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">setcookie</span>(<span class="string">"langue"</span>, <span class="string">"fr"</span>, <span class="function">time</span>() + <span class="number">3600</span> * <span class="number">24</span> * <span class="number">30</span>); <span class="comment">// Expire dans 30 jours</span>

<span class="keyword">echo</span> <span class="string">"Préférence de langue enregistrée en cookie."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Lecture d'un cookie -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-eye"></i> Lecture d'un Cookie
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-eye" style="color: #1976d2;"></i> Une fois le cookie créé, on peut accéder à sa valeur en utilisant la superglobale <code>$_COOKIE</code>. Cela est utile pour personnaliser l'expérience utilisateur en fonction des préférences précédemment enregistrées.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Afficher la Préférence de Langue de l'Utilisateur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_COOKIE</span>[<span class="string">"langue"</span>])) {
    <span class="keyword">echo</span> <span class="string">"Langue préférée : "</span> . <span class="variable">$_COOKIE</span>[<span class="string">"langue"</span>];
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Aucune préférence de langue enregistrée."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Modification et suppression d'un cookie -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-edit"></i> Modification et Suppression d'un Cookie
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Pour modifier un cookie, il suffit de le recréer avec une nouvelle valeur. Pour le supprimer, on peut le recréer avec une date d'expiration passée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Suppression d'un Cookie de Langue</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">setcookie</span>(<span class="string">"langue"</span>, <span class="string">""</span>, <span class="function">time</span>() - <span class="number">3600</span>); <span class="comment">// Expire dans le passé</span>

<span class="keyword">echo</span> <span class="string">"Cookie de langue supprimé."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Cookies pour la gestion de la connexion persistante -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sign-in-alt"></i> Gestion de la Connexion Persistante avec Cookies
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-user-clock" style="color: #673ab7;"></i> Les cookies peuvent être utilisés pour maintenir une connexion persistante en stockant un identifiant unique pour chaque utilisateur. Cela permet à l'utilisateur de rester connecté même après avoir fermé le navigateur.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Connexion Automatique avec un Cookie d'Identifiant</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_COOKIE</span>[<span class="string">"user_id"</span>])) {
    <span class="variable">$userId</span> = <span class="variable">$_COOKIE</span>[<span class="string">"user_id"</span>];
    <span class="keyword">echo</span> <span class="string">"Connexion automatique réussie pour l'utilisateur ID : "</span> . <span class="variable">$userId</span>;
} <span class="keyword">else</span> {
    <span class="comment">// Connexion initiale, définir le cookie après validation</span>
    <span class="variable">$userId</span> = <span class="function">generateUserId</span>(); <span class="comment">// Fonction fictive de génération d'ID</span>
    <span class="function">setcookie</span>(<span class="string">"user_id"</span>, <span class="variable">$userId</span>, <span class="function">time</span>() + <span class="number">3600</span> * <span class="number">24</span> * <span class="number">30</span>); <span class="comment">// Expire dans 30 jours</span>
    <span class="keyword">echo</span> <span class="string">"Cookie de connexion défini."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Gestion des préférences de thème avec cookies -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-palette"></i> Gestion des Préférences de Thème avec Cookies
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-adjust" style="color: #8e24aa;"></i> Les cookies peuvent aussi être utilisés pour mémoriser des préférences, comme le thème choisi par l'utilisateur (clair ou sombre), afin de maintenir cette préférence lors de visites futures.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Préférence de Thème</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Définir le thème si non défini</span>
<span class="keyword">if</span> (!<span class="keyword">isset</span>(<span class="variable">$_COOKIE</span>[<span class="string">"theme"</span>])) {
    <span class="function">setcookie</span>(<span class="string">"theme"</span>, <span class="string">"sombre"</span>, <span class="function">time</span>() + <span class="number">3600</span> * <span class="number">24</span> * <span class="number">30</span>);
}

<span class="comment">// Utiliser le thème enregistré</span>
<span class="variable">$themeActuel</span> = <span class="variable">$_COOKIE</span>[<span class="string">"theme"</span>] ?? <span class="string">"clair"</span>;
<span class="keyword">echo</span> <span class="string">"Thème actuel : "</span> . <span class="variable">$themeActuel</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un système de gestion de cookies pour une boutique en ligne où :
            <ul>
                <li>Un cookie enregistre le dernier produit consulté par l'utilisateur.</li>
                <li>Les préférences de langue et de thème sont mémorisées dans des cookies distincts.</li>
                <li>Après 1 heure d'inactivité, un message de rappel encourageant l'utilisateur à revenir sur le site est affiché.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="file-handling" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-file-alt"></i> Gestion des Fichiers en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        La gestion des fichiers est une fonctionnalité puissante de PHP qui permet de lire, écrire, et manipuler des fichiers directement sur le serveur. Cette fonctionnalité est couramment utilisée dans des applications professionnelles pour des tâches telles que l'upload de documents, la lecture de fichiers de log, ou la gestion des rapports.
    </p>

    <!-- Lecture de fichiers -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-eye"></i> Lecture d'un Fichier
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-folder-open" style="color: #4caf50;"></i> PHP offre plusieurs fonctions pour lire un fichier, comme <code>fopen()</code> et <code>fread()</code>. Cela est utile pour afficher le contenu d'un fichier, par exemple les logs d'une application.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Lecture d'un Fichier de Log</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$fichierLog</span> = <span class="string">"logs.txt"</span>;

<span class="keyword">if</span> (<span class="function">file_exists</span>(<span class="variable">$fichierLog</span>)) {
    <span class="variable">$contenu</span> = <span class="function">file_get_contents</span>(<span class="variable">$fichierLog</span>);
    <span class="keyword">echo</span> <span class="string">"Contenu du fichier : "</span> . <span class="variable">$contenu</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Fichier non trouvé."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Écriture dans un fichier -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-pencil-alt"></i> Écriture dans un Fichier
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-edit" style="color: #1976d2;"></i> PHP permet également d'écrire dans des fichiers en utilisant <code>fwrite()</code>. Cette fonctionnalité est couramment utilisée pour ajouter des entrées dans un fichier de log ou générer des rapports.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Ajouter une Entrée dans un Fichier de Log</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$fichierLog</span> = <span class="string">"logs.txt"</span>;
<span class="variable">$handle</span> = <span class="function">fopen</span>(<span class="variable">$fichierLog</span>, <span class="string">"a"</span>); <span class="comment">// Mode "a" pour ajouter à la fin</span>

<span class="keyword">if</span> (<span class="variable">$handle</span>) {
    <span class="variable">$date</span> = <span class="function">date</span>(<span class="string">"Y-m-d H:i:s"</span>);
    <span class="variable">$message</span> = <span class="string">"[$date] - Nouvelle entrée de log.\n"</span>;
    <span class="function">fwrite</span>(<span class="variable">$handle</span>, <span class="variable">$message</span>);
    <span class="function">fclose</span>(<span class="variable">$handle</span>);
    <span class="keyword">echo</span> <span class="string">"Log ajouté avec succès."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Impossible d'écrire dans le fichier."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Upload de fichiers -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-upload"></i> Upload de Fichiers
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-cloud-upload-alt" style="color: #ff9800;"></i> L'upload de fichiers permet aux utilisateurs de transférer des fichiers depuis leur ordinateur vers le serveur. Cela est commun pour les sites qui nécessitent des documents ou images, comme un formulaire d'inscription avec photo.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Formulaire d'Upload et Traitement de Fichier</strong>
        <pre>
<span class="keyword">&lt;form</span> <span class="keyword">action</span>=<span class="string">"upload.php"</span> <span class="keyword">method</span>=<span class="string">"POST"</span> <span class="keyword">enctype</span>=<span class="string">"multipart/form-data"</span>&gt;
    <span class="keyword">&lt;input</span> <span class="keyword">type</span>=<span class="string">"file"</span> <span class="keyword">name</span>=<span class="string">"fichier"</span>&gt;
    <span class="keyword">&lt;button</span> <span class="keyword">type</span>=<span class="string">"submit"</span>&gt;Uploader&lt;/button&gt;
<span class="keyword">&lt;/form&gt;

<span class="keyword">&lt;?php</span> <span class="comment">// upload.php</span>

<span class="keyword">if</span> (<span class="variable">$_FILES</span>[<span class="string">'fichier'</span>][<span class="string">'error'</span>] == <span class="number">0</span>) {
    <span class="variable">$destination</span> = <span class="string">"uploads/"</span> . <span class="variable">basename</span>(<span class="variable">$_FILES</span>[<span class="string">'fichier'</span>][<span class="string">'name'</span>]);
    <span class="keyword">if</span> (<span class="function">move_uploaded_file</span>(<span class="variable">$_FILES</span>[<span class="string">'fichier'</span>][<span class="string">'tmp_name'</span>], <span class="variable">$destination</span>)) {
        <span class="keyword">echo</span> <span class="string">"Fichier uploadé avec succès!"</span>;
    } <span class="keyword">else</span> {
        <span class="keyword">echo</span> <span class="string">"Erreur lors de l'upload."</span>;
    }
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Aucun fichier sélectionné."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Gestion des permissions de fichiers -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lock"></i> Gestion des Permissions de Fichiers
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shield-alt" style="color: #8e24aa;"></i> La fonction <code>chmod()</code> en PHP permet de modifier les permissions d'un fichier. Cela est utile dans un contexte professionnel pour restreindre l'accès aux fichiers sensibles.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Modifier les Permissions d'un Fichier</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$fichier</span> = <span class="string">"confidentiel.txt"</span>;
<span class="function">chmod</span>(<span class="variable">$fichier</span>, <span class="number">0600</span>); <span class="comment">// Permissions de lecture/écriture pour le propriétaire seulement</span>

<span class="keyword">echo</span> <span class="string">"Permissions modifiées avec succès."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un système de gestion de fichiers pour un blog où :
            <ul>
                <li>Les utilisateurs peuvent uploader une image pour chaque article.</li>
                <li>Un fichier de log enregistre chaque upload avec la date et l'utilisateur.</li>
                <li>Les permissions des fichiers uploadés sont définies pour être accessibles uniquement par l'utilisateur.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="input-validation" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-check-circle"></i> Validation des Entrées en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        La validation des entrées est une étape essentielle dans le développement en PHP pour garantir la sécurité et la qualité des données traitées par l'application. Elle permet de s'assurer que les données fournies par l'utilisateur sont valides et conformes aux attentes, en évitant les failles de sécurité comme les injections SQL et les attaques XSS.
    </p>

    <!-- Validation de l'email -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-envelope"></i> Validation de l'Email
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check" style="color: #4caf50;"></i> La validation des adresses e-mail garantit que l'utilisateur a saisi une adresse valide. PHP fournit la fonction <code>filter_var()</code> pour vérifier le format d'une adresse e-mail.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Validation d'Email</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$email</span> = <span class="string">"test@example.com"</span>;

<span class="keyword">if</span> (<span class="function">filter_var</span>(<span class="variable">$email</span>, <span class="variable">FILTER_VALIDATE_EMAIL</span>)) {
    <span class="keyword">echo</span> <span class="string">"Email valide."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Email invalide."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Validation du mot de passe -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-key"></i> Validation de Mot de Passe
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-lock" style="color: #ff9800;"></i> Pour assurer la sécurité des comptes utilisateurs, un mot de passe doit respecter certains critères (longueur minimale, caractères spéciaux, etc.). Un bon mot de passe doit être difficile à deviner et conforme aux exigences de l'application.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Validation de Mot de Passe</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$password</span> = <span class="string">"MySecurePass123!"</span>;

<span class="keyword">if</span> (<span class="function">strlen</span>(<span class="variable">$password</span>) >= <span class="number">8</span> && <span class="function">preg_match</span>(<span class="string">"/[A-Z]/"</span>, <span class="variable">$password</span>) && <span class="function">preg_match</span>(<span class="string">"/\d/"</span>, <span class="variable">$password</span>) && <span class="function">preg_match</span>(<span class="string">"/[\W]/"</span>, <span class="variable">$password</span>)) {
    <span class="keyword">echo</span> <span class="string">"Mot de passe valide."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Mot de passe invalide."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Prévention des injections SQL -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-database"></i> Prévention des Injections SQL
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shield-alt" style="color: #673ab7;"></i> La validation des entrées est cruciale pour éviter les attaques par injection SQL. L'utilisation de requêtes préparées est une bonne pratique pour sécuriser les données sensibles, comme les informations de connexion.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Requête Préparée pour Prévenir les Injections SQL</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="variable">PDO</span>(<span class="string">"mysql:host=localhost;dbname=test"</span>, <span class="string">"user"</span>, <span class="string">"password"</span>);
<span class="variable">$email</span> = <span class="string">"user@example.com"</span>;
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM users WHERE email = :email"</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">':email'</span>, <span class="variable">$email</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>();
<span class="variable">$user</span> = <span class="variable">$stmt</span>-><span class="function">fetch</span>();

<span class="keyword">if</span> (<span class="variable">$user</span>) {
    <span class="keyword">echo</span> <span class="string">"Utilisateur trouvé."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Aucun utilisateur trouvé."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Validation des entrées de texte -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-text-height"></i> Validation des Champs de Texte
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check-square" style="color: #8e24aa;"></i> Les champs de texte doivent être validés pour éviter les failles XSS (Cross-Site Scripting) en utilisant des fonctions comme <code>htmlspecialchars()</code> pour échapper les caractères spéciaux.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Échapper les Caractères Spéciaux pour un Champ de Texte</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$nomUtilisateur</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$_POST</span>[<span class="string">"nomUtilisateur"</span>]);

<span class="keyword">echo</span> <span class="string">"Bonjour, "</span> . <span class="variable">$nomUtilisateur</span> . <span class="string">"!"</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un formulaire de connexion sécurisé qui :
            <ul>
                <li>Valide l'email avec <code>filter_var()</code>.</li>
                <li>Vérifie que le mot de passe a au moins 8 caractères, une lettre majuscule, un chiffre et un caractère spécial.</li>
                <li>Utilise une requête préparée pour vérifier l'authentification de l'utilisateur dans la base de données.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="password-hashing" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-lock"></i> Hashage des Mots de Passe en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Le hashage des mots de passe est essentiel pour assurer la sécurité des données utilisateurs. En PHP, on utilise des algorithmes de hashage sécurisés pour stocker les mots de passe de manière protégée, empêchant leur récupération en cas de fuite de données. PHP fournit des fonctions de hashage comme <code>password_hash()</code> et <code>password_verify()</code> pour simplifier cette tâche.
    </p>

    <!-- Utilisation de password_hash() -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-key"></i> Générer un Hash de Mot de Passe avec <code>password_hash()</code>
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shield-alt" style="color: #4caf50;"></i> La fonction <code>password_hash()</code> permet de générer un hash sécurisé d'un mot de passe. Elle utilise l'algorithme <code>BCRYPT</code> par défaut, mais peut être configurée pour utiliser d'autres algorithmes, comme <code>ARGON2</code> pour une sécurité accrue.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Hashage d'un Mot de Passe</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$motDePasse</span> = <span class="string">"MonMotDePasse123!"</span>;
<span class="variable">$hash</span> = <span class="function">password_hash</span>(<span class="variable">$motDePasse</span>, <span class="variable">PASSWORD_BCRYPT</span>);

<span class="keyword">echo</span> <span class="string">"Mot de passe hashé : "</span> . <span class="variable">$hash</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Vérification du mot de passe avec password_verify() -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-check"></i> Vérification du Mot de Passe avec <code>password_verify()</code>
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-user-check" style="color: #1976d2;"></i> Pour vérifier un mot de passe, on utilise <code>password_verify()</code>, qui compare le mot de passe saisi par l'utilisateur avec le hash stocké. Cela est essentiel pour authentifier l'utilisateur de manière sécurisée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Vérification d'un Mot de Passe Hashé</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$motDePasseSaisi</span> = <span class="string">"MonMotDePasse123!"</span>;

<span class="keyword">if</span> (<span class="function">password_verify</span>(<span class="variable">$motDePasseSaisi</span>, <span class="variable">$hash</span>)) {
    <span class="keyword">echo</span> <span class="string">"Mot de passe correct."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Mot de passe incorrect."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation d'ARGON2 pour un hashage plus sécurisé -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-user-shield"></i> Hashage avec ARGON2
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-lock" style="color: #673ab7;"></i> L'algorithme <code>ARGON2</code> est une alternative plus sécurisée que <code>BCRYPT</code> pour le hashage de mots de passe. Il est particulièrement recommandé pour les applications sensibles qui nécessitent une sécurité maximale.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Hashage avec ARGON2</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$motDePasse</span> = <span class="string">"MotDePasseFort123!"</span>;
<span class="variable">$hashArgon2</span> = <span class="function">password_hash</span>(<span class="variable">$motDePasse</span>, <span class="variable">PASSWORD_ARGON2ID</span>);

<span class="keyword">echo</span> <span class="string">"Mot de passe hashé avec ARGON2 : "</span> . <span class="variable">$hashArgon2</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Re-hashage du mot de passe pour sécurité -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-redo"></i> Re-hashage du Mot de Passe
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-sync-alt" style="color: #ff9800;"></i> Il est parfois nécessaire de re-hasher un mot de passe si l'algorithme ou les options de hashage ont changé. La fonction <code>password_needs_rehash()</code> permet de vérifier si un re-hashage est nécessaire.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Vérification de la Nécessité de Re-hashage</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">if</span> (<span class="function">password_needs_rehash</span>(<span class="variable">$hash</span>, <span class="variable">PASSWORD_ARGON2ID</span>)) {
    <span class="variable">$hash</span> = <span class="function">password_hash</span>(<span class="variable">$motDePasseSaisi</span>, <span class="variable">PASSWORD_ARGON2ID</span>);
    <span class="keyword">echo</span> <span class="string">"Mot de passe re-hashé pour plus de sécurité."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Implémentez un système de gestion de mot de passe sécurisé qui :
            <ul>
                <li>Utilise <code>password_hash()</code> pour stocker les mots de passe des utilisateurs avec l'algorithme <code>ARGON2</code>.</li>
                <li>Vérifie le mot de passe saisi lors de la connexion avec <code>password_verify()</code>.</li>
                <li>Contrôle si un re-hashage est nécessaire à chaque connexion, en utilisant <code>password_needs_rehash()</code>.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="sql-injection-protection" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-shield-alt"></i> Protection contre les Injections SQL en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les injections SQL sont des attaques qui exploitent des failles de sécurité dans les requêtes SQL pour manipuler ou voler des données dans la base de données. En PHP, l'utilisation de requêtes préparées est l'un des moyens les plus efficaces pour se protéger contre ces attaques.
    </p>

    <!-- Qu'est-ce qu'une injection SQL ? -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Qu'est-ce qu'une Injection SQL ?
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-info-circle" style="color: #f44336;"></i> Une injection SQL consiste à insérer du code SQL malveillant dans une requête pour accéder aux données ou manipuler la base de données. Par exemple, un attaquant peut modifier une requête pour contourner l'authentification ou récupérer des informations sensibles.
    </p>

    <!-- Utilisation de requêtes préparées avec PDO -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-database"></i> Utilisation de Requêtes Préparées avec PDO
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-lock" style="color: #4caf50;"></i> Les requêtes préparées permettent de séparer le code SQL des données, ce qui empêche les attaques par injection SQL. PHP offre la bibliothèque PDO (PHP Data Objects) pour exécuter des requêtes préparées de manière sécurisée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation d'une Requête Préparée avec un Paramètre de Connexion</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="variable">PDO</span>(<span class="string">"mysql:host=localhost;dbname=test"</span>, <span class="string">"user"</span>, <span class="string">"password"</span>);

<span class="variable">$email</span> = <span class="string">"utilisateur@example.com"</span>;
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM users WHERE email = :email"</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":email"</span>, <span class="variable">$email</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>();
<span class="variable">$user</span> = <span class="variable">$stmt</span>-><span class="function">fetch</span>();

<span class="keyword">if</span> (<span class="variable">$user</span>) {
    <span class="keyword">echo</span> <span class="string">"Utilisateur trouvé."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Aucun utilisateur trouvé."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation de bindParam() et bindValue() -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-anchor"></i> Différence entre <code>bindParam()</code> et <code>bindValue()</code>
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-asterisk" style="color: #ff9800;"></i> En PDO, on peut lier des paramètres à la requête en utilisant <code>bindParam()</code> ou <code>bindValue()</code>. <code>bindParam()</code> est utilisé lorsque la valeur peut changer avant l'exécution de la requête, tandis que <code>bindValue()</code> est utilisé pour des valeurs constantes.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation de <code>bindParam()</code> et <code>bindValue()</code></strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"INSERT INTO logs (message, created_at) VALUES (:message, :created_at)"</span>);
<span class="variable">$message</span> = <span class="string">"Connexion réussie"</span>;
<span class="variable">$stmt</span>-><span class="function">bindValue</span>(<span class="string">":message"</span>, <span class="variable">$message</span>);

<span class="variable">$date</span> = <span class="function">date</span>(<span class="string">"Y-m-d H:i:s"</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":created_at"</span>, <span class="variable">$date</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exemples avancés : Utilisation d'une recherche par plusieurs paramètres -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-search"></i> Recherche Sécurisée avec Plusieurs Paramètres
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-filter" style="color: #8e24aa;"></i> Un exemple professionnel avancé consiste à rechercher un utilisateur en fonction de plusieurs critères en utilisant des requêtes préparées. Cela assure la sécurité des données tout en permettant une flexibilité dans les recherches.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Recherche d'un Utilisateur avec des Critères Multiples</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$nom</span> = <span class="string">"Dupont"</span>;
<span class="variable">$email</span> = <span class="string">"dupont@example.com"</span>;

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM users WHERE nom = :nom AND email = :email"</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":nom"</span>, <span class="variable">$nom</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":email"</span>, <span class="variable">$email</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>();

<span class="variable">$user</span> = <span class="variable">$stmt</span>-><span class="function">fetch</span>();
<span class="keyword">if</span> (<span class="variable">$user</span>) {
    <span class="keyword">echo</span> <span class="string">"Utilisateur trouvé : "</span> . <span class="variable">$user</span>[<span class="string">'nom'</span>];
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Aucun utilisateur trouvé."</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un formulaire sécurisé pour rechercher un utilisateur en fonction de plusieurs critères et afficher ses informations si elles sont trouvées :
            <ul>
                <li>Utilisez une requête préparée pour une recherche par nom et adresse e-mail.</li>
                <li>Vérifiez et affichez les informations utilisateur uniquement si tous les critères correspondent.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="csrf" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-shield-alt"></i> Protection contre les Attaques CSRF en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Une attaque CSRF (Cross-Site Request Forgery) se produit lorsque des actions non autorisées sont effectuées sur un site web au nom d'un utilisateur authentifié, sans son consentement. Ces attaques peuvent être empêchées en utilisant des tokens CSRF, qui vérifient que la requête provient bien de l'utilisateur.
    </p>

    <!-- Qu'est-ce qu'une attaque CSRF ? -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Qu'est-ce qu'une Attaque CSRF ?
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-info-circle" style="color: #f44336;"></i> Dans une attaque CSRF, l'attaquant pousse l'utilisateur à exécuter des actions non désirées, comme la modification de son mot de passe ou le transfert de fonds. L'utilisateur est authentifié mais n'a pas intentionnellement initié l'action. En utilisant un token CSRF, on s'assure que la requête vient bien de l’utilisateur.
    </p>

    <!-- Génération de tokens CSRF -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-key"></i> Génération d'un Token CSRF
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-key" style="color: #4caf50;"></i> Pour chaque formulaire sensible, on génère un token CSRF unique et on le stocke dans la session utilisateur. Ce token est ensuite envoyé dans le formulaire comme champ caché pour permettre la validation lors de la soumission.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Génération d'un Token CSRF</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">session_start</span>();

<span class="comment">// Génération d'un token CSRF unique</span>
<span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>] = <span class="function">bin2hex</span>(<span class="function">random_bytes</span>(<span class="number">32</span>));

<span class="comment">// Ajout du token dans un formulaire</span>
<span class="keyword">?&gt;</span>

<span class="keyword">&lt;form</span> <span class="keyword">method</span>=<span class="string">"POST"</span> <span class="keyword">action</span>=<span class="string">"traitement.php"</span>&gt;
    <span class="keyword">&lt;input</span> <span class="keyword">type</span>=<span class="string">"hidden"</span> <span class="keyword">name</span>=<span class="string">"csrf_token"</span> <span class="keyword">value</span>=<span class="string">"&lt;?php echo $_SESSION['csrf_token']; ?&gt;"</span>&gt;
    <span class="keyword">&lt;button</span> <span class="keyword">type</span>=<span class="string">"submit"</span>&gt;Envoyer&lt;/button&gt;
<span class="keyword">&lt;/form&gt;
        </pre>
    </div>

    <!-- Vérification du token CSRF -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-check"></i> Vérification du Token CSRF lors de la Soumission
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-lock" style="color: #1976d2;"></i> Lors de la soumission du formulaire, on compare le token CSRF du formulaire avec celui de la session. Si les deux correspondent, la requête est considérée comme légitime.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Vérification d'un Token CSRF</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">session_start</span>();

<span class="comment">// Vérification du token CSRF</span>
<span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_POST</span>[<span class="string">'csrf_token'</span>]) && <span class="variable">$_POST</span>[<span class="string">'csrf_token'</span>] === <span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>]) {
    <span class="keyword">echo</span> <span class="string">"Requête sécurisée, traitement effectué."</span>;
} <span class="keyword">else</span> {
    <span class="keyword">echo</span> <span class="string">"Erreur : token CSRF invalide."</span>;
    <span class="function">exit</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Régénération du token CSRF après usage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-redo"></i> Régénération du Token CSRF après Soumission
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-sync-alt" style="color: #ff9800;"></i> Pour des raisons de sécurité, il est conseillé de régénérer le token CSRF après chaque soumission de formulaire réussie afin d'éviter toute réutilisation malveillante.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Régénération du Token CSRF après Traitement</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Après vérification et traitement, régénérer le token</span>
<span class="variable">$_SESSION</span>[<span class="string">'csrf_token'</span>] = <span class="function">bin2hex</span>(<span class="function">random_bytes</span>(<span class="number">32</span>));

<span class="keyword">echo</span> <span class="string">"Token CSRF régénéré."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Implémentez un formulaire sécurisé qui :
            <ul>
                <li>Génère un token CSRF lors de l'affichage du formulaire et l'ajoute comme champ caché.</li>
                <li>Vérifie la validité du token CSRF lors de la soumission.</li>
                <li>Régénère le token après une soumission valide pour une sécurité accrue.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="xss" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-shield-virus"></i> Prévention des Attaques XSS en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les attaques XSS (Cross-Site Scripting) exploitent les failles dans les pages web dynamiques pour exécuter des scripts malveillants dans le navigateur de l’utilisateur. En PHP, il est essentiel de bien assainir et échapper les données pour protéger les utilisateurs contre ce type d'attaque.
    </p>

    <!-- Qu'est-ce qu'une attaque XSS ? -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Qu'est-ce qu'une Attaque XSS ?
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-info-circle" style="color: #f44336;"></i> Une attaque XSS consiste à injecter des scripts malveillants dans le contenu d’une page web, permettant à l’attaquant de voler des informations sensibles ou de manipuler la page web. Les attaques XSS ciblent généralement les champs de formulaire et les affichages dynamiques.
    </p>

    <!-- Utilisation de htmlspecialchars() -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-shield-alt"></i> Utilisation de <code>htmlspecialchars()</code> pour Échapper les Caractères Spéciaux
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-lock" style="color: #4caf50;"></i> La fonction <code>htmlspecialchars()</code> convertit les caractères spéciaux en entités HTML, empêchant ainsi l'exécution de scripts malveillants. Elle est idéale pour échapper les données dynamiques avant de les afficher.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Assainir une Entrée Utilisateur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$nomUtilisateur</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$_POST</span>[<span class="string">"nomUtilisateur"</span>], <span class="variable">ENT_QUOTES</span>, <span class="string">"UTF-8"</span>);

<span class="keyword">echo</span> <span class="string">"Bonjour, "</span> . <span class="variable">$nomUtilisateur</span> . <span class="string">"!"</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Validation et assainissement des entrées -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-filter"></i> Validation et Assainissement des Champs de Formulaire
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check" style="color: #1976d2;"></i> Assainir les données reçues d'un formulaire avant de les traiter est une bonne pratique pour éviter les attaques XSS. En combinant <code>htmlspecialchars()</code> avec <code>strip_tags()</code>, on supprime également les balises HTML indésirables.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Validation et Assainissement d’un Champ de Texte</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$commentaire</span> = <span class="function">strip_tags</span>(<span class="variable">$_POST</span>[<span class="string">"commentaire"</span>]); <span class="comment">// Supprime les balises HTML</span>
<span class="variable">$commentaire</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$commentaire</span>, <span class="variable">ENT_QUOTES</span>, <span class="string">"UTF-8"</span>);

<span class="keyword">echo</span> <span class="string">"Commentaire : "</span> . <span class="variable">$commentaire</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Protection des données de session -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-user-shield"></i> Protection des Données de Session contre les Attaques XSS
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-user-shield" style="color: #673ab7;"></i> Les données de session peuvent également être vulnérables aux attaques XSS si elles sont affichées sans échapper. Il est donc important d'assainir toutes les informations stockées dans la session avant de les afficher.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Échapper une Donnée de Session</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">session_start</span>();

<span class="comment">// Assainir et afficher le nom d'utilisateur depuis la session</span>
<span class="variable">$nomUtilisateur</span> = <span class="function">htmlspecialchars</span>(<span class="variable">$_SESSION</span>[<span class="string">"nom_utilisateur"</span>], <span class="variable">ENT_QUOTES</span>, <span class="string">"UTF-8"</span>);

<span class="keyword">echo</span> <span class="string">"Bienvenue, "</span> . <span class="variable">$nomUtilisateur</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Implémentez un formulaire sécurisé contre les attaques XSS qui :
            <ul>
                <li>Demande le nom et un commentaire de l'utilisateur.</li>
                <li>Assainit les entrées avec <code>htmlspecialchars()</code> et <code>strip_tags()</code>.</li>
                <li>Affiche les données de manière sécurisée après la soumission.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="latest-security" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-user-shield"></i> Meilleures Pratiques de Sécurité en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Sécuriser une application PHP est essentiel pour protéger les utilisateurs et leurs données. Voici une liste de bonnes pratiques de sécurité recommandées pour le développement d'applications PHP.
    </p>

    <!-- Configuration des en-têtes HTTP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-network-wired"></i> Configuration des En-Têtes HTTP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shield-alt" style="color: #4caf50;"></i> Utiliser des en-têtes HTTP sécurisés, comme <code>Content-Security-Policy</code>, <code>X-Frame-Options</code>, et <code>X-XSS-Protection</code>, permet de réduire les risques d'attaques XSS et de clickjacking.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Configuration des En-Têtes HTTP dans PHP</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">header</span>(<span class="string">"Content-Security-Policy: default-src 'self'"</span>);
<span class="function">header</span>(<span class="string">"X-Frame-Options: DENY"</span>);
<span class="function">header</span>(<span class="string">"X-XSS-Protection: 1; mode=block"</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Gestion des erreurs et des exceptions -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Gestion des Erreurs et des Exceptions
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-bug" style="color: #d32f2f;"></i> Masquer les messages d'erreur en production empêche les attaquants de voir des informations sensibles. Utilisez un gestionnaire d'erreurs personnalisé pour consigner les erreurs sans les afficher aux utilisateurs.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Gestion des Erreurs avec un Gestionnaire Personnalisé</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">ini_set</span>(<span class="string">"display_errors"</span>, <span class="string">"0"</span>);
<span class="function">ini_set</span>(<span class="string">"log_errors"</span>, <span class="string">"1"</span>);
<span class="function">ini_set</span>(<span class="string">"error_log"</span>, <span class="string">"/path/to/php-error.log"</span>);

<span class="keyword">set_exception_handler</span>(<span class="function">function</span>(<span class="variable">$e</span>) {
    <span class="function">error_log</span>(<span class="variable">$e</span>-><span class="function">getMessage</span>());
    <span class="keyword">echo</span> <span class="string">"Une erreur est survenue."</span>;
});

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Chiffrement des données sensibles -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lock"></i> Chiffrement des Données Sensibles
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-key" style="color: #673ab7;"></i> Les données sensibles doivent être chiffrées avant d'être stockées. Utilisez des algorithmes sécurisés tels que <code>openssl_encrypt()</code> et des clés de chiffrement fortes pour protéger les informations sensibles.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Chiffrement et Déchiffrement d'une Donnée Sensible</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$data</span> = <span class="string">"Information confidentielle"</span>;
<span class="variable">$key</span> = <span class="function">openssl_random_pseudo_bytes</span>(<span class="number">32</span>);
<span class="variable">$iv</span> = <span class="function">openssl_random_pseudo_bytes</span>(<span class="number">16</span>);

<span class="variable">$encryptedData</span> = <span class="function">openssl_encrypt</span>(<span class="variable">$data</span>, <span class="string">"AES-256-CBC"</span>, <span class="variable">$key</span>, <span class="number">0</span>, <span class="variable">$iv</span>);

<span class="variable">$decryptedData</span> = <span class="function">openssl_decrypt</span>(<span class="variable">$encryptedData</span>, <span class="string">"AES-256-CBC"</span>, <span class="variable">$key</span>, <span class="number">0</span>, <span class="variable">$iv</span>);

<span class="keyword">echo</span> <span class="string">"Donnée déchiffrée : "</span> . <span class="variable">$decryptedData</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Sécurisation des sessions -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-user-lock"></i> Sécurisation des Sessions
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-user-check" style="color: #ff9800;"></i> Sécuriser les sessions en configurant les paramètres de session pour qu'elles soient plus sûres, comme en forçant l'utilisation de cookies sécurisés et en limitant les durées de session.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Paramètres de Sécurité des Sessions</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="function">session_start</span>([
    <span class="string">"cookie_lifetime"</span> => <span class="number">3600</span>,
    <span class="string">"cookie_secure"</span> => <span class="keyword">true</span>,
    <span class="string">"cookie_httponly"</span> => <span class="keyword">true</span>,
]);

<span class="comment">// Rotation de l'identifiant de session après chaque connexion</span>
<span class="function">session_regenerate_id</span>(<span class="keyword">true</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Appliquez ces pratiques de sécurité dans un projet PHP :
            <ul>
                <li>Configurez les en-têtes HTTP pour renforcer la sécurité.</li>
                <li>Mettez en place une gestion des erreurs pour masquer les messages d’erreur en production.</li>
                <li>Implémentez le chiffrement pour stocker et récupérer des données sensibles.</li>
                <li>Sécurisez les sessions en configurant les paramètres de session recommandés.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="mysql-connection" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-database"></i> Connexion à une Base de Données MySQL en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Pour interagir avec une base de données MySQL en PHP, il est recommandé d'utiliser l'extension PDO (PHP Data Objects). PDO permet de se connecter à une base de données de manière sécurisée et offre un ensemble de fonctionnalités, telles que les requêtes préparées pour protéger contre les injections SQL.
    </p>

    <!-- Connexion de base avec PDO -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-link"></i> Connexion Basique avec PDO
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check" style="color: #4caf50;"></i> La connexion à MySQL avec PDO est établie en créant une instance de la classe PDO. Vous devrez fournir les informations de connexion : le nom d'hôte, le nom de la base de données, le nom d'utilisateur et le mot de passe.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Connexion à une Base de Données MySQL</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">try</span> {
    <span class="variable">$dsn</span> = <span class="string">"mysql:host=localhost;dbname=nom_de_la_base"</span>;
    <span class="variable">$username</span> = <span class="string">"nom_utilisateur"</span>;
    <span class="variable">$password</span> = <span class="string">"mot_de_passe"</span>;

    <span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="variable">PDO</span>(<span class="variable">$dsn</span>, <span class="variable">$username</span>, <span class="variable">$password</span>);
    <span class="variable">$pdo</span>-><span class="function">setAttribute</span>(<span class="variable">PDO::ATTR_ERRMODE</span>, <span class="variable">PDO::ERRMODE_EXCEPTION</span>);

    <span class="keyword">echo</span> <span class="string">"Connexion réussie!"</span>;
} <span class="keyword">catch</span> (<span class="variable">PDOException</span> <span class="variable">$e</span>) {
    <span class="keyword">echo</span> <span class="string">"Erreur de connexion : "</span> . <span class="variable">$e</span>-><span class="function">getMessage</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation des requêtes préparées pour sécuriser les données -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-shield-alt"></i> Utilisation des Requêtes Préparées
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shield-alt" style="color: #1976d2;"></i> Les requêtes préparées permettent d'éviter les injections SQL en séparant le code SQL des données. Cela rend la connexion plus sécurisée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Requête Préparée pour Insérer des Données</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$sql</span> = <span class="string">"INSERT INTO utilisateurs (nom, email) VALUES (:nom, :email)"</span>;
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="variable">$sql</span>);

<span class="variable">$nom</span> = <span class="string">"Dupont"</span>;
<span class="variable">$email</span> = <span class="string">"dupont@example.com"</span>;

<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":nom"</span>, <span class="variable">$nom</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":email"</span>, <span class="variable">$email</span>);

<span class="variable">$stmt</span>-><span class="function">execute</span>();

<span class="keyword">echo</span> <span class="string">"Données insérées avec succès."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Fermeture de la connexion -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sign-out-alt"></i> Fermeture de la Connexion
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-times-circle" style="color: #d32f2f;"></i> La connexion PDO sera fermée automatiquement en fin de script. Cependant, pour les applications intensives, il est possible de fermer explicitement la connexion en détruisant l'objet PDO.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Fermeture de la Connexion</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$pdo</span> = <span class="keyword">null</span>; <span class="comment">// Ferme explicitement la connexion</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un script PHP qui :
            <ul>
                <li>Se connecte à une base de données MySQL en utilisant PDO.</li>
                <li>Insère un nouvel utilisateur avec des données de formulaire sécurisées par une requête préparée.</li>
                <li>Affiche un message confirmant l'insertion et ferme la connexion.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="pdo" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-database"></i> Introduction à PDO en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        PDO (PHP Data Objects) est une extension PHP pour accéder aux bases de données de manière sécurisée et orientée objet. PDO offre une interface unifiée pour de nombreux systèmes de gestion de bases de données, y compris MySQL, PostgreSQL, et SQLite. Il prend en charge les requêtes préparées, la gestion des transactions, et d’autres fonctionnalités de sécurité.
    </p>

    <!-- Connexion basique avec PDO -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-link"></i> Connexion à une Base de Données avec PDO
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check" style="color: #4caf50;"></i> Pour se connecter à une base de données avec PDO, il faut fournir un DSN (Data Source Name), ainsi que les informations d’identification, comme le nom d'utilisateur et le mot de passe.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Connexion à une Base de Données MySQL avec PDO</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">try</span> {
    <span class="variable">$dsn</span> = <span class="string">"mysql:host=localhost;dbname=nom_de_la_base;charset=utf8"</span>;
    <span class="variable">$username</span> = <span class="string">"nom_utilisateur"</span>;
    <span class="variable">$password</span> = <span class="string">"mot_de_passe"</span>;

    <span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="variable">PDO</span>(<span class="variable">$dsn</span>, <span class="variable">$username</span>, <span class="variable">$password</span>);
    <span class="variable">$pdo</span>-><span class="function">setAttribute</span>(<span class="variable">PDO::ATTR_ERRMODE</span>, <span class="variable">PDO::ERRMODE_EXCEPTION</span>);

    <span class="keyword">echo</span> <span class="string">"Connexion réussie!"</span>;
} <span class="keyword">catch</span> (<span class="variable">PDOException</span> <span class="variable">$e</span>) {
    <span class="keyword">echo</span> <span class="string">"Erreur de connexion : "</span> . <span class="variable">$e</span>-><span class="function">getMessage</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Requêtes préparées pour la sécurité -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-shield-alt"></i> Utilisation des Requêtes Préparées avec PDO
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-shield-alt" style="color: #1976d2;"></i> Les requêtes préparées permettent de lier des paramètres à la requête, offrant une protection contre les injections SQL. Cela est particulièrement important lors de l'insertion ou de la mise à jour des données en fonction des entrées utilisateur.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Requête Préparée pour Insérer des Données</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$sql</span> = <span class="string">"INSERT INTO utilisateurs (nom, email) VALUES (:nom, :email)"</span>;
<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="variable">$sql</span>);

<span class="variable">$nom</span> = <span class="string">"Dupont"</span>;
<span class="variable">$email</span> = <span class="string">"dupont@example.com"</span>;

<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":nom"</span>, <span class="variable">$nom</span>);
<span class="variable">$stmt</span>-><span class="function">bindParam</span>(<span class="string">":email"</span>, <span class="variable">$email</span>);

<span class="variable">$stmt</span>-><span class="function">execute</span>();

<span class="keyword">echo</span> <span class="string">"Données insérées avec succès."</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Gestion des transactions -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exchange-alt"></i> Gestion des Transactions avec PDO
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-sync" style="color: #8e24aa;"></i> PDO prend en charge les transactions, ce qui permet d'exécuter plusieurs requêtes comme une opération unique. Si une des opérations échoue, la transaction est annulée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Gestion d'une Transaction</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">try</span> {
    <span class="variable">$pdo</span>-><span class="function">beginTransaction</span>();

    <span class="variable">$pdo</span>-><span class="function">exec</span>(<span class="string">"INSERT INTO comptes (nom, solde) VALUES ('Dupont', 1000)"</span>);
    <span class="variable">$pdo</span>-><span class="function">exec</span>(<span class="string">"UPDATE comptes SET solde = solde - 500 WHERE nom = 'Dupont'"</span>);

    <span class="variable">$pdo</span>-><span class="function">commit</span>();

    <span class="keyword">echo</span> <span class="string">"Transaction réussie."</span>;
} <span class="keyword">catch</span> (<span class="variable">PDOException</span> <span class="variable">$e</span>) {
    <span class="variable">$pdo</span>-><span class="function">rollBack</span>();
    <span class="keyword">echo</span> <span class="string">"Erreur dans la transaction : "</span> . <span class="variable">$e</span>-><span class="function">getMessage</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Récupération de données -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-database"></i> Récupération de Données avec PDO
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-search" style="color: #673ab7;"></i> Pour récupérer des données, PDO offre plusieurs méthodes, comme <code>fetch()</code> pour récupérer une seule ligne, et <code>fetchAll()</code> pour obtenir toutes les lignes correspondantes.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Récupérer les Utilisateurs de la Base de Données</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">query</span>(<span class="string">"SELECT * FROM utilisateurs"</span>);
<span class="variable">$utilisateurs</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>(<span class="variable">PDO::FETCH_ASSOC</span>);

<span class="keyword">foreach</span> (<span class="variable">$utilisateurs</span> <span class="keyword">as</span> <span class="variable">$utilisateur</span>) {
    <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'nom'</span>] . <span class="string">", Email : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'email'</span>] . <span class="string">"&lt;br&gt;"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un script PHP qui :
            <ul>
                <li>Se connecte à une base de données MySQL avec PDO.</li>
                <li>Utilise une transaction pour effectuer deux opérations d'insertion de manière sécurisée.</li>
                <li>Récupère et affiche les données des utilisateurs dans un tableau HTML.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="query-optimization" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-tachometer-alt"></i> Optimisation des Requêtes avec PDO en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'optimisation des requêtes SQL est essentielle pour améliorer la performance d'une application PHP qui interagit avec une base de données. En utilisant PDO de manière optimale, vous pouvez réduire le temps de traitement et la charge sur le serveur, garantissant ainsi une expérience utilisateur fluide.
    </p>

    <!-- Utilisation des requêtes préparées pour éviter les recompilations -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-shield-alt"></i> Utilisation de Requêtes Préparées pour Éviter les Recompilations
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-check-circle" style="color: #4caf50;"></i> Les requêtes préparées non seulement sécurisent les interactions avec la base de données mais réduisent aussi la charge sur le serveur, car la requête est compilée une seule fois, même si elle est exécutée plusieurs fois avec des paramètres différents.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Requête Préparée avec des Paramètres Variables</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT * FROM utilisateurs WHERE age &gt; :age"</span>);

<span class="variable">$ages</span> = [20, 30, 40];
<span class="keyword">foreach</span> (<span class="variable">$ages</span> <span class="keyword">as</span> <span class="variable">$age</span>) {
    <span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':age'</span> => <span class="variable">$age</span>]);
    <span class="variable">$utilisateurs</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>(<span class="variable">PDO::FETCH_ASSOC</span>);

    <span class="keyword">foreach</span> (<span class="variable">$utilisateurs</span> <span class="keyword">as</span> <span class="variable">$utilisateur</span>) {
        <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'nom'</span>] . <span class="string">", Age : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'age'</span>] . <span class="string">"&lt;br&gt;"</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Limitation des colonnes récupérées -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-columns"></i> Limitation des Colonnes Récupérées
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-compress" style="color: #ff9800;"></i> Récupérez uniquement les colonnes nécessaires pour réduire la quantité de données transférées et améliorer la performance. En évitant le <code>SELECT *</code>, vous réduisez également la mémoire utilisée par l’application.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Sélection de Colonnes Spécifiques</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT nom, email FROM utilisateurs WHERE age &gt; :age"</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">':age'</span> => <span class="number">25</span>]);

<span class="variable">$utilisateurs</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>(<span class="variable">PDO::FETCH_ASSOC</span>);
<span class="keyword">foreach</span> (<span class="variable">$utilisateurs</span> <span class="keyword">as</span> <span class="variable">$utilisateur</span>) {
    <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'nom'</span>] . <span class="string">", Email : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'email'</span>] . <span class="string">"&lt;br&gt;"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Pagination des résultats -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-list-ol"></i> Utilisation de la Pagination pour les Gros Résultats
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-tasks" style="color: #8e24aa;"></i> Divisez les grands ensembles de données en pages pour limiter le nombre de résultats renvoyés en une seule fois. Cela réduit la charge de traitement et améliore l’expérience utilisateur en rendant les pages plus rapides.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Pagination des Résultats</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$page</span> = <span class="function">isset</span>(<span class="variable">$_GET</span>[<span class="string">'page'</span>]) ? <span class="function">intval</span>(<span class="variable">$_GET</span>[<span class="string">'page'</span>]) : <span class="number">1</span>;
<span class="variable">$limit</span> = <span class="number">10</span>;
<span class="variable">$offset</span> = (<span class="variable">$page</span> - <span class="number">1</span>) * <span class="variable">$limit</span>;

<span class="variable">$stmt</span> = <span class="variable">$pdo</span>-><span class="function">prepare</span>(<span class="string">"SELECT nom, email FROM utilisateurs LIMIT :limit OFFSET :offset"</span>);
<span class="variable">$stmt</span>-><span class="function">bindValue</span>(<span class="string">':limit'</span>, <span class="variable">$limit</span>, <span class="variable">PDO::PARAM_INT</span>);
<span class="variable">$stmt</span>-><span class="function">bindValue</span>(<span class="string">':offset'</span>, <span class="variable">$offset</span>, <span class="variable">PDO::PARAM_INT</span>);
<span class="variable">$stmt</span>-><span class="function">execute</span>();

<span class="variable">$utilisateurs</span> = <span class="variable">$stmt</span>-><span class="function">fetchAll</span>(<span class="variable">PDO::FETCH_ASSOC</span>);

<span class="keyword">foreach</span> (<span class="variable">$utilisateurs</span> <span class="keyword">as</span> <span class="variable">$utilisateur</span>) {
    <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'nom'</span>] . <span class="string">", Email : "</span> . <span class="variable">$utilisateur</span>[<span class="string">'email'</span>] . <span class="string">"&lt;br&gt;"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation des index pour accélérer les requêtes -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-search-plus"></i> Utilisation des Index pour Accélérer les Requêtes
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-chart-line" style="color: #ff5722;"></i> Les index sur les colonnes fréquemment recherchées ou triées améliorent considérablement les performances des requêtes. Assurez-vous que votre base de données dispose d'index sur les colonnes clés.
    </p>
    <p style="font-size: 1.1em; color: #333;">
        <strong>Exemple SQL pour ajouter un index sur la colonne "email" :</strong><br>
        <code>CREATE INDEX idx_email ON utilisateurs (email);</code>
    </p>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Optimisez une requête en :
            <ul>
                <li>Utilisant des requêtes préparées avec des paramètres variables pour des filtres d’âge différents.</li>
                <li>Récupérant seulement les colonnes nécessaires.</li>
                <li>Ajoutant une pagination avec une limite et un offset.</li>
                <li>Assurant que les colonnes fréquemment recherchées ont des index appropriés.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="orm" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-database"></i> Utilisation des ORM : Doctrine et Eloquent en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les ORM (Object-Relational Mapping) simplifient les interactions avec les bases de données en mappant les tables à des objets PHP. Cela permet de manipuler les données sous forme d'objets, rendant le code plus lisible et évitant d'écrire du SQL brut. En PHP, **Doctrine** et **Eloquent** sont deux ORM populaires.
    </p>

    <!-- Doctrine ORM -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cogs"></i> Doctrine ORM
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-database" style="color: #4caf50;"></i> Doctrine est un ORM robuste et flexible utilisé pour des projets complexes. Il suit les principes DDD (Domain-Driven Design) et permet une gestion avancée des relations entre les entités.
    </p>

    <!-- Installation de Doctrine avec Composer -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-download"></i> Installation de Doctrine
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Installez Doctrine en utilisant Composer :
    </p>
    <div class="example-box">
        <pre><code>composer require doctrine/orm</code></pre>
    </div>

    <!-- Exemple de création d'entité avec Doctrine -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-file-code"></i> Exemple : Création d'une Entité avec Doctrine
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Voici comment créer une entité avec Doctrine pour mapper la table `User`.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Code : Entité User</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">use</span> <span class="variable">Doctrine\ORM\Mapping</span> <span class="keyword">as</span> <span class="variable">ORM</span>;

/**
 * <span class="variable">@ORM\Entity</span>
 * <span class="variable">@ORM\Table</span>(name="<span class="string">users</span>")
 */
<span class="keyword">class</span> <span class="variable">User</span>
{
    /** <span class="variable">@ORM\Id</span> */
    /** <span class="variable">@ORM\Column</span>(type="<span class="string">integer</span>") */
    /** <span class="variable">@ORM\GeneratedValue</span> */
    <span class="keyword">private</span> <span class="variable">int</span> <span class="variable">$id</span>;

    /** <span class="variable">@ORM\Column</span>(type="<span class="string">string</span>", length=<span class="number">255</span>) */
    <span class="keyword">private</span> <span class="variable">string</span> <span class="variable">$name</span>;

    /** <span class="variable">@ORM\Column</span>(type="<span class="string">string</span>", length=<span class="number">255</span>, unique=<span class="keyword">true</span>) */
    <span class="keyword">private</span> <span class="variable">string</span> <span class="variable">$email</span>;

    <span class="comment">// Getters et setters...</span>
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Requête avec Doctrine -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-search"></i> Requête avec Doctrine
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Pour récupérer les utilisateurs de la base de données :
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Récupérer des Utilisateurs avec Doctrine</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$repository</span> = <span class="variable">$entityManager</span>-><span class="function">getRepository</span>(<span class="variable">User::class</span>);
<span class="variable">$users</span> = <span class="variable">$repository</span>-><span class="function">findAll</span>();

<span class="keyword">foreach</span> (<span class="variable">$users</span> <span class="keyword">as</span> <span class="variable">$user</span>) {
    <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$user</span>-><span class="function">getName</span>() . <span class="string">", Email : "</span> . <span class="variable">$user</span>-><span class="function">getEmail</span>() . <span class="string">"&lt;br&gt;"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Eloquent ORM -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Eloquent ORM
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-leaf" style="color: #4caf50;"></i> Eloquent est l'ORM de Laravel, mais il peut être utilisé en dehors de ce framework. Il est très populaire pour sa syntaxe intuitive et sa simplicité.
    </p>

    <!-- Installation de Eloquent avec Composer -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-download"></i> Installation de Eloquent
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Installez Eloquent en utilisant Composer :
    </p>
    <div class="example-box">
        <pre><code>composer require illuminate/database</code></pre>
    </div>

    <!-- Configuration de Eloquent -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-cogs"></i> Configuration de Eloquent
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Voici comment configurer Eloquent en dehors de Laravel :
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Configuration de Eloquent</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">use</span> <span class="variable">Illuminate\Database\Capsule\Manager</span> <span class="keyword">as</span> <span class="variable">Capsule</span>;

<span class="variable">$capsule</span> = <span class="keyword">new</span> <span class="variable">Capsule</span>;
<span class="variable">$capsule</span>-><span class="function">addConnection</span>([
    <span class="string">"driver"</span> => <span class="string">"mysql"</span>,
    <span class="string">"host"</span> => <span class="string">"localhost"</span>,
    <span class="string">"database"</span> => <span class="string">"database"</span>,
    <span class="string">"username"</span> => <span class="string">"root"</span>,
    <span class="string">"password"</span> => <span class="string">"password"</span>,
    <span class="string">"charset"</span> => <span class="string">"utf8"</span>,
    <span class="string">"collation"</span> => <span class="string">"utf8_unicode_ci"</span>,
    <span class="string">"prefix"</span> => <span class="string">""</span>
]);

<span class="variable">$capsule</span>-><span class="function">setAsGlobal</span>();
<span class="variable">$capsule</span>-><span class="function">bootEloquent</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Création de modèles avec Eloquent -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-file-code"></i> Exemple : Création d'un Modèle User avec Eloquent
    </h3>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Modèle Eloquent</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">use</span> <span class="variable">Illuminate\Database\Eloquent\Model</span>;

<span class="keyword">class</span> <span class="variable">User</span> <span class="keyword">extends</span> <span class="variable">Model</span>
{
    <span class="variable">protected</span> <span class="variable">$table</span> = <span class="string">"users"</span>;
    <span class="variable">protected</span> <span class="variable">$fillable</span> = [<span class="string">'name'</span>, <span class="string">'email'</span>];
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation des requêtes avec Eloquent -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        <i class="fas fa-search"></i> Requête avec Eloquent
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Pour récupérer tous les utilisateurs dans Eloquent :
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Récupération des Utilisateurs avec Eloquent</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$users</span> = <span class="variable">User</span>::<span class="function">all</span>();

<span class="keyword">foreach</span> (<span class="variable">$users</span> <span class="keyword">as</span> <span class="variable">$user</span>) {
    <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="variable">$user</span>-><span class="variable">name</span> . <span class="string">", Email : "</span> . <span class="variable">$user</span>-><span class="variable">email</span> . <span class="string">"&lt;br&gt;"</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une application basique en utilisant un ORM :
            <ul>
                <li>Utilisez Doctrine ou Eloquent pour créer un modèle `User` avec des propriétés `name` et `email`.</li>
                <li>Insérez des utilisateurs en utilisant votre modèle ORM.</li>
                <li>Récupérez et affichez tous les utilisateurs dans une vue HTML.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="classes-objects" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-object-group"></i> Classes et Objets en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        PHP est un langage orienté objet, ce qui signifie qu'il permet de créer des structures basées sur des classes et des objets. Cela facilite la réutilisation du code et l'organisation des projets en suivant des principes de programmation orientée objet (POO) comme l'encapsulation, l'héritage, et le polymorphisme.
    </p>

    <!-- Déclaration de base d'une classe -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-plus-circle"></i> Déclaration d'une Classe en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une classe est un modèle qui définit des propriétés (variables) et des méthodes (fonctions) pour les objets. Voici comment créer une classe simple nommée <code>Personne</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classe Personne</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Personne</span>
{
    <span class="keyword">public</span> <span class="variable">$nom</span>;
    <span class="keyword">public</span> <span class="variable">$age</span>;

    <span class="comment">// Constructeur pour initialiser les propriétés</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">age</span> = <span class="variable">$age</span>;
    }

    <span class="comment">// Méthode pour afficher les informations</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficher</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="keyword">$this</span>-><span class="variable">nom</span> . <span class="string">", Age : "</span> . <span class="keyword">$this</span>-><span class="variable">age</span> . <span class="string">" ans."</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Création d'un objet et utilisation des méthodes -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-user"></i> Création et Utilisation d'un Objet
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une fois la classe définie, nous pouvons créer un objet de cette classe et appeler ses méthodes.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Instanciation d'un Objet et Appel de Méthodes</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="variable">$personne</span> = <span class="keyword">new</span> <span class="variable">Personne</span>(<span class="string">"Jean Dupont"</span>, <span class="number">30</span>);
<span class="variable">$personne</span>-><span class="function">afficher</span>(); <span class="comment">// Affiche : Nom : Jean Dupont, Age : 30 ans.</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Encapsulation : Propriétés privées et méthodes d'accès -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lock"></i> Encapsulation : Propriétés Privées et Méthodes d'Accès
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'encapsulation permet de protéger les données d'une classe en définissant certaines propriétés comme <code>private</code>. On utilise alors des méthodes d'accès (<code>getters</code> et <code>setters</code>) pour interagir avec ces propriétés.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Encapsulation dans la Classe Personne</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Personne</span>
{
    <span class="keyword">private</span> <span class="variable">$nom</span>;
    <span class="keyword">private</span> <span class="variable">$age</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">age</span> = <span class="variable">$age</span>;
    }

    <span class="comment">// Getter pour le nom</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">getNom</span>()
    {
        <span class="keyword">return</span> <span class="keyword">$this</span>-><span class="variable">nom</span>;
    }

    <span class="comment">// Setter pour le nom</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">setNom</span>(<span class="variable">$nom</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Héritage : Extension d'une classe -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sitemap"></i> Héritage : Extension d'une Classe
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'héritage permet de créer une nouvelle classe basée sur une classe existante. La nouvelle classe hérite des propriétés et méthodes de la classe parente, et peut également avoir ses propres propriétés et méthodes.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classe Employe qui Hérite de Personne</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Employe</span> <span class="keyword">extends</span> <span class="variable">Personne</span>
{
    <span class="keyword">private</span> <span class="variable">$salaire</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>, <span class="variable">$salaire</span>)
    {
        <span class="keyword">parent</span>::<span class="function">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>);
        <span class="keyword">$this</span>-><span class="variable">salaire</span> = <span class="variable">$salaire</span>;
    }

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficherSalaire</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Salaire : "</span> . <span class="keyword">$this</span>-><span class="variable">salaire</span> . <span class="string">"€ par an"</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Polymorphisme : Méthodes redéfinies -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sync-alt"></i> Polymorphisme : Redéfinition de Méthodes
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Le polymorphisme permet de redéfinir les méthodes héritées dans une sous-classe. Cela permet à la sous-classe de modifier le comportement d'une méthode héritée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Redéfinir une Méthode dans Employe</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Employe</span> <span class="keyword">extends</span> <span class="variable">Personne</span>
{
    <span class="keyword">private</span> <span class="variable">$salaire</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>, <span class="variable">$salaire</span>)
    {
        <span class="keyword">parent</span>::<span class="function">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>);
        <span class="keyword">$this</span>-><span class="variable">salaire</span> = <span class="variable">$salaire</span>;
    }

    <span class="comment">// Redéfinition de la méthode afficher</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficher</span>()
    {
        <span class="keyword">parent</span>::<span class="function">afficher</span>();
        <span class="keyword">echo</span> <span class="string">", Salaire : "</span> . <span class="keyword">$this</span>-><span class="variable">salaire</span> . <span class="string">"€"</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une application simple en PHP orientée objet qui :
            <ul>
                <li>Définit une classe <code>Produit</code> avec des propriétés comme <code>nom</code>, <code>prix</code> et <code>quantite</code>.</li>
                <li>Crée une sous-classe <code>ProduitElectronique</code> qui hérite de <code>Produit</code> et ajoute une propriété <code>garantie</code>.</li>
                <li>Utilise le polymorphisme pour redéfinir une méthode dans la sous-classe.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="constructors-destructors" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-cogs"></i> Constructeurs et Destructeurs en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, les constructeurs et destructeurs sont des méthodes spéciales utilisées dans les classes pour gérer l'initialisation et la destruction des objets. Le constructeur est automatiquement appelé lors de la création d'un objet, tandis que le destructeur est invoqué quand l'objet est détruit ou que le script se termine.
    </p>

    <!-- Constructeur -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play-circle"></i> Constructeur : Initialisation de l'Objet
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-info-circle" style="color: #4caf50;"></i> Le constructeur est une méthode spéciale, nommée <code>__construct()</code> en PHP, qui est automatiquement exécutée lors de l'instanciation de la classe. Il permet d'initialiser les propriétés de l'objet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation d'un Constructeur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Personne</span>
{
    <span class="keyword">public</span> <span class="variable">$nom</span>;
    <span class="keyword">public</span> <span class="variable">$age</span>;

    <span class="comment">// Constructeur pour initialiser le nom et l'âge</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">age</span> = <span class="variable">$age</span>;
        <span class="keyword">echo</span> <span class="string">"Objet créé pour "</span> . <span class="variable">$this</span>-><span class="variable">nom</span> . <span class="string">".&lt;br&gt;"</span>;
    }
}

<span class="comment">// Création d'un objet Personne avec des valeurs initiales</span>
<span class="variable">$personne</span> = <span class="keyword">new</span> <span class="variable">Personne</span>(<span class="string">"Alice"</span>, <span class="number">25</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Destructeur -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-stop-circle"></i> Destructeur : Libération des Ressources
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <i class="fas fa-times-circle" style="color: #d32f2f;"></i> Le destructeur, nommé <code>__destruct()</code>, est une méthode spéciale appelée automatiquement lorsque l'objet est détruit, soit explicitement, soit à la fin du script. Il est souvent utilisé pour libérer des ressources, comme fermer une connexion à une base de données.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation d'un Destructeur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Personne</span>
{
    <span class="keyword">public</span> <span class="variable">$nom</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">echo</span> <span class="string">"Objet créé pour "</span> . <span class="variable">$this</span>-><span class="variable">nom</span> . <span class="string">".&lt;br&gt;"</span>;
    }

    <span class="comment">// Destructeur pour libérer les ressources</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__destruct</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Objet de "</span> . <span class="variable">$this</span>-><span class="variable">nom</span> . <span class="string">" détruit.&lt;br&gt;"</span>;
    }
}

<span class="comment">// Création d'un objet Personne</span>
<span class="variable">$personne</span> = <span class="keyword">new</span> <span class="variable">Personne</span>(<span class="string">"Bob"</span>);
<span class="comment">// L'objet est automatiquement détruit à la fin du script</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Constructeurs et destructeurs dans un contexte de base de données -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-database"></i> Exemple Avancé : Constructeurs et Destructeurs avec Connexion à une Base de Données
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Dans un contexte réel, le constructeur peut être utilisé pour établir une connexion à une base de données, tandis que le destructeur peut fermer cette connexion lorsque l'objet n'est plus nécessaire.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Connexion à la Base de Données avec PDO</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Database</span>
{
    <span class="keyword">private</span> <span class="variable">$pdo</span>;

    <span class="comment">// Constructeur : ouverture de la connexion</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>()
    {
        <span class="keyword">try</span> {
            <span class="variable">$this</span>-><span class="variable">pdo</span> = <span class="keyword">new</span> <span class="variable">PDO</span>(<span class="string">"mysql:host=localhost;dbname=testdb"</span>, <span class="string">"root"</span>, <span class="string">"password"</span>);
            <span class="variable">$this</span>-><span class="variable">pdo</span>-><span class="function">setAttribute</span>(<span class="variable">PDO::ATTR_ERRMODE</span>, <span class="variable">PDO::ERRMODE_EXCEPTION</span>);
            <span class="keyword">echo</span> <span class="string">"Connexion établie.&lt;br&gt;"</span>;
        } <span class="keyword">catch</span> (<span class="variable">PDOException</span> <span class="variable">$e</span>) {
            <span class="keyword">echo</span> <span class="string">"Erreur de connexion : "</span> . <span class="variable">$e</span>-><span class="function">getMessage</span>() . <span class="string">"&lt;br&gt;"</span>;
        }
    }

    <span class="comment">// Destructeur : fermeture de la connexion</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__destruct</span>()
    {
        <span class="variable">$this</span>-><span class="variable">pdo</span> = <span class="keyword">null</span>;
        <span class="keyword">echo</span> <span class="string">"Connexion fermée.&lt;br&gt;"</span>;
    }
}

<span class="comment">// Création d'un objet Database</span>
<span class="variable">$db</span> = <span class="keyword">new</span> <span class="variable">Database</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une classe PHP qui utilise un constructeur et un destructeur :
            <ul>
                <li>Définissez une classe <code>Fichier</code> qui prend en paramètre un nom de fichier dans le constructeur et ouvre le fichier en mode lecture.</li>
                <li>Affichez le contenu du fichier dans une méthode <code>afficherContenu()</code>.</li>
                <li>Utilisez le destructeur pour fermer automatiquement le fichier lorsque l'objet est détruit.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="inheritance" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-sitemap"></i> Héritage en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'héritage est un principe de la programmation orientée objet qui permet à une classe (appelée "classe enfant" ou "sous-classe") d'hériter des propriétés et méthodes d'une autre classe (appelée "classe parent"). Cela permet de réutiliser le code existant, d'ajouter de nouvelles fonctionnalités, et de modifier le comportement des méthodes héritées.
    </p>

    <!-- Déclaration de base de l'héritage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-plus-circle"></i> Création d'une classe enfant
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, une classe enfant est déclarée en utilisant le mot-clé <code>extends</code>. Voici un exemple simple où une classe <code>Employe</code> hérite des propriétés et méthodes de la classe <code>Personne</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : classe Personne et classe Employe</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Personne</span>
{
    <span class="keyword">public</span> <span class="variable">$nom</span>;
    <span class="keyword">public</span> <span class="variable">$age</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">age</span> = <span class="variable">$age</span>;
    }

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficher</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Nom : "</span> . <span class="keyword">$this</span>-><span class="variable">nom</span> . <span class="string">", Age : "</span> . <span class="keyword">$this</span>-><span class="variable">age</span> . <span class="string">" ans."</span>;
    }
}

<span class="comment">// Classe Employe qui hérite de la classe Personne</span>
<span class="keyword">class</span> <span class="variable">Employe</span> <span class="keyword">extends</span> <span class="variable">Personne</span>
{
    <span class="keyword">public</span> <span class="variable">$salaire</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>, <span class="variable">$salaire</span>)
    {
        <span class="keyword">parent</span>::<span class="function">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>);
        <span class="keyword">$this</span>-><span class="variable">salaire</span> = <span class="variable">$salaire</span>;
    }

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficherSalaire</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Salaire : "</span> . <span class="keyword">$this</span>-><span class="variable">salaire</span> . <span class="string">"€ par an."</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation de parent:: pour accéder aux méthodes de la classe parent -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-arrow-up"></i> Utilisation de <code>parent::</code> pour appeler les méthodes de la classe parent
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, le mot-clé <code>parent</code> permet d'accéder aux méthodes ou constructeurs de la classe parent. Dans l'exemple précédent, nous avons utilisé <code>parent::__construct()</code> pour appeler le constructeur de la classe <code>Personne</code>.
    </p>

    <!-- Redéfinition des méthodes (polymorphisme) -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sync-alt"></i> Redéfinition des méthodes (polymorphisme)
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Le polymorphisme permet aux classes enfants de redéfinir les méthodes héritées de la classe parent. Cela permet à la classe enfant de modifier le comportement de la méthode héritée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Redéfinir une méthode dans la classe Employe</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Employe</span> <span class="keyword">extends</span> <span class="variable">Personne</span>
{
    <span class="keyword">public</span> <span class="variable">$salaire</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>, <span class="variable">$salaire</span>)
    {
        <span class="keyword">parent</span>::<span class="function">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$age</span>);
        <span class="keyword">$this</span>-><span class="variable">salaire</span> = <span class="variable">$salaire</span>;
    }

    <span class="comment">// Redéfinition de la méthode afficher</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficher</span>()
    {
        <span class="keyword">parent</span>::<span class="function">afficher</span>();
        <span class="keyword">echo</span> <span class="string">", Salaire : "</span> . <span class="keyword">$this</span>-><span class="variable">salaire</span> . <span class="string">"€"</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exemple d'utilisation pratique de l'héritage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Exemple pratique : Modèle de produit et produit électronique
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, nous créons une classe <code>Produit</code> pour représenter un produit générique et une classe <code>ProduitElectronique</code> qui hérite de <code>Produit</code> et ajoute des fonctionnalités spécifiques aux produits électroniques.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classes Produit et ProduitElectronique</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Produit</span>
{
    <span class="keyword">public</span> <span class="variable">$nom</span>;
    <span class="keyword">public</span> <span class="variable">$prix</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$prix</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">prix</span> = <span class="variable">$prix</span>;
    }

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficherInfos</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Produit : "</span> . <span class="keyword">$this</span>-><span class="variable">nom</span> . <span class="string">", Prix : "</span> . <span class="keyword">$this</span>-><span class="variable">prix</span> . <span class="string">"€"</span>;
    }
}

<span class="keyword">class</span> <span class="variable">ProduitElectronique</span> <span class="keyword">extends</span> <span class="variable">Produit</span>
{
    <span class="keyword">public</span> <span class="variable">$garantie</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$prix</span>, <span class="variable">$garantie</span>)
    {
        <span class="keyword">parent</span>::<span class="function">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$prix</span>);
        <span class="keyword">$this</span>-><span class="variable">garantie</span> = <span class="variable">$garantie</span>;
    }

    <span class="comment">// Redéfinition de la méthode pour inclure la garantie</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">afficherInfos</span>()
    {
        <span class="keyword">parent</span>::<span class="function">afficherInfos</span>();
        <span class="keyword">echo</span> <span class="string">", Garantie : "</span> . <span class="keyword">$this</span>-><span class="variable">garantie</span> . <span class="string">" ans"</span>;
    }
}

<span class="comment">// Utilisation de l'héritage</span>
<span class="variable">$produit</span> = <span class="keyword">new</span> <span class="variable">ProduitElectronique</span>(<span class="string">"Ordinateur"</span>, <span class="number">1200</span>, <span class="number">2</span>);
<span class="variable">$produit</span>-><span class="function">afficherInfos</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une application basique avec héritage en PHP :
            <ul>
                <li>Définissez une classe <code>Vehicule</code> avec des propriétés comme <code>marque</code> et <code>vitesseMax</code>, et une méthode <code>afficherInfos()</code>.</li>
                <li>Créez une sous-classe <code>Voiture</code> qui hérite de <code>Vehicule</code> et ajoute une propriété <code>nombrePortes</code>.</li>
                <li>Redéfinissez la méthode <code>afficherInfos()</code> dans <code>Voiture</code> pour inclure le nombre de portes.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="polymorphism" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-sync-alt"></i> Polymorphisme en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Le polymorphisme est une caractéristique de la programmation orientée objet qui permet aux classes dérivées de redéfinir les méthodes héritées de leur classe parent. En PHP, cela signifie que des méthodes portant le même nom dans différentes classes peuvent avoir des comportements différents, selon la classe qui les utilise.
    </p>

    <!-- Exemple de base du polymorphisme -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Exemple de base : Classe Animal et classes dérivées
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Supposons que nous ayons une classe de base <code>Animal</code> avec une méthode <code>parler()</code>, et deux classes dérivées <code>Chien</code> et <code>Chat</code> qui redéfinissent cette méthode pour produire des sons spécifiques.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Polymorphisme avec la méthode <code>parler()</code></strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Animal</span>
{
    <span class="comment">// Méthode parler définie dans la classe de base</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Cet animal fait un bruit."</span>;
    }
}

<span class="comment">// Classe Chien qui hérite de Animal et redéfinit parler()</span>
<span class="keyword">class</span> <span class="variable">Chien</span> <span class="keyword">extends</span> <span class="variable">Animal</span>
{
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Le chien aboie : Woof Woof!"</span>;
    }
}

<span class="comment">// Classe Chat qui hérite de Animal et redéfinit parler()</span>
<span class="keyword">class</span> <span class="variable">Chat</span> <span class="keyword">extends</span> <span class="variable">Animal</span>
{
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Le chat miaule : Miaou!"</span>;
    }
}

<span class="comment">// Fonction polymorphique qui accepte tout type d'animal</span>
<span class="keyword">function</span> <span class="variable">faireParler</span>(<span class="variable">Animal</span> <span class="variable">$animal</span>)
{
    <span class="variable">$animal</span>-><span class="function">parler</span>();
}

<span class="comment">// Utilisation du polymorphisme</span>
<span class="variable">$chien</span> = <span class="keyword">new</span> <span class="variable">Chien</span>();
<span class="variable">$chat</span> = <span class="keyword">new</span> <span class="variable">Chat</span>();

<span class="variable">faireParler</span>(<span class="variable">$chien</span>); <span class="comment">// Affiche : "Le chien aboie : Woof Woof!"</span>
<span class="variable">faireParler</span>(<span class="variable">$chat</span>);  <span class="comment">// Affiche : "Le chat miaule : Miaou!"</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Interface pour standardiser le polymorphisme -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-layer-group"></i> Utilisation d'interfaces pour le polymorphisme
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, les interfaces permettent de garantir que toutes les classes qui les implémentent utilisent certaines méthodes. Dans un contexte polymorphique, une interface peut être utilisée pour définir des méthodes communes sans implémenter de logique spécifique. 
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Interface Parlant</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">interface</span> <span class="variable">Parlant</span>
{
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">parler</span>();
}

<span class="keyword">class</span> <span class="variable">Chien</span> <span class="keyword">implements</span> <span class="variable">Parlant</span>
{
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Woof Woof!"</span>;
    }
}

<span class="keyword">class</span> <span class="variable">Chat</span> <span class="keyword">implements</span> <span class="variable">Parlant</span>
{
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Miaou!"</span>;
    }
}

<span class="comment">// Fonction polymorphique</span>
<span class="keyword">function</span> <span class="variable">faireParler</span>(<span class="variable">Parlant</span> <span class="variable">$animal</span>)
{
    <span class="variable">$animal</span>-><span class="function">parler</span>();
}

<span class="variable">$chien</span> = <span class="keyword">new</span> <span class="variable">Chien</span>();
<span class="variable">$chat</span> = <span class="keyword">new</span> <span class="variable">Chat</span>();

<span class="variable">faireParler</span>(<span class="variable">$chien</span>); <span class="comment">// Affiche : "Woof Woof!"</span>
<span class="variable">faireParler</span>(<span class="variable">$chat</span>);  <span class="comment">// Affiche : "Miaou!"</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Avantages du polymorphisme -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lightbulb"></i> Avantages du polymorphisme
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Le polymorphisme permet de :
        <ul>
            <li><strong>Éviter la duplication de code</strong> en réutilisant des méthodes et interfaces communes.</li>
            <li><strong>Rendre le code plus flexible</strong> en permettant d'ajouter de nouvelles classes dérivées sans modifier la logique existante.</li>
            <li><strong>Simplifier la maintenance</strong> en séparant la logique spécifique dans des classes dérivées.</li>
        </ul>
    </p>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un petit programme en utilisant le polymorphisme :
            <ul>
                <li>Définissez une interface <code>Vehicule</code> avec une méthode <code>deplacer()</code>.</li>
                <li>Créez deux classes <code>Voiture</code> et <code>Bateau</code> qui implémentent l'interface <code>Vehicule</code> et redéfinissent la méthode <code>deplacer()</code> pour afficher leur mode de déplacement.</li>
                <li>Utilisez une fonction qui accepte un objet de type <code>Vehicule</code> et appelle <code>deplacer()</code>.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="encapsulation" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-lock"></i> Encapsulation en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'encapsulation est un principe de la programmation orientée objet qui consiste à protéger les données d'un objet en contrôlant l'accès à ses propriétés et méthodes. En PHP, cela se fait à l'aide des modificateurs d'accès <code>public</code>, <code>protected</code>, et <code>private</code>, qui définissent la visibilité des propriétés et méthodes d'une classe.
    </p>

    <!-- Modificateurs d'accès -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-key"></i> Modificateurs d'accès : public, protected, et private
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, les modificateurs d'accès permettent de définir comment les propriétés et méthodes d'une classe peuvent être utilisées :
        <ul>
            <li><code>public</code> : Accessible depuis n'importe où, y compris de l'extérieur de la classe.</li>
            <li><code>protected</code> : Accessible uniquement depuis la classe elle-même et ses classes dérivées.</li>
            <li><code>private</code> : Accessible uniquement depuis la classe elle-même.</li>
        </ul>
    </p>

    <!-- Exemple d'encapsulation avec des propriétés privées et des méthodes d'accès -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Exemple : utilisation de l'encapsulation avec des propriétés privées
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, nous avons une classe <code>CompteBancaire</code> qui encapsule ses données en utilisant des propriétés <code>private</code> pour garantir que le solde ne peut être modifié que par des méthodes dédiées.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classe CompteBancaire avec Encapsulation</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">CompteBancaire</span>
{
    <span class="keyword">private</span> <span class="variable">$solde</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$soldeInitial</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">solde</span> = <span class="variable">$soldeInitial</span>;
    }

    <span class="comment">// Méthode pour déposer de l'argent</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">deposer</span>(<span class="variable">$montant</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">solde</span> += <span class="variable">$montant</span>;
    }

    <span class="comment">// Méthode pour retirer de l'argent avec vérification</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">retirer</span>(<span class="variable">$montant</span>)
    {
        <span class="keyword">if</span> (<span class="variable">$montant</span> &gt; <span class="keyword">$this</span>-><span class="variable">solde</span>) {
            <span class="keyword">echo</span> <span class="string">"Solde insuffisant!"</span>;
        } <span class="keyword">else</span> {
            <span class="keyword">$this</span>-><span class="variable">solde</span> -= <span class="variable">$montant</span>;
        }
    }

    <span class="comment">// Méthode pour obtenir le solde actuel</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">getSolde</span>()
    {
        <span class="keyword">return</span> <span class="keyword">$this</span>-><span class="variable">solde</span>;
    }
}

<span class="comment">// Création d'un compte bancaire et manipulation</span>
<span class="variable">$compte</span> = <span class="keyword">new</span> <span class="variable">CompteBancaire</span>(<span class="number">100</span>);
<span class="variable">$compte</span>-><span class="function">deposer</span>(<span class="number">50</span>);  <span class="comment">// Ajoute 50 au solde</span>
<span class="variable">$compte</span>-><span class="function">retirer</span>(<span class="number">30</span>);  <span class="comment">// Retire 30 du solde
<span class="keyword">echo</span> <span class="variable">$compte</span>-><span class="function">getSolde</span>();  <span class="comment">// Affiche le solde actuel : 120</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation des getters et setters -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-tools"></i> Getters et setters pour un accès contrôlé
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les getters et setters sont des méthodes spéciales qui permettent d’accéder et de modifier les propriétés privées d’une classe. Ils permettent d'exercer un contrôle sur la manière dont les propriétés sont modifiées ou lues.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Getters et Setters</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Produit</span>
{
    <span class="keyword">private</span> <span class="variable">$nom</span>;
    <span class="keyword">private</span> <span class="variable">$prix</span>;

    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$prix</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">prix</span> = <span class="variable">$prix</span>;
    }

    <span class="comment">// Getter pour le nom</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">getNom</span>()
    {
        <span class="keyword">return</span> <span class="keyword">$this</span>-><span class="variable">nom</span>;
    }

    <span class="comment">// Setter pour le nom</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">setNom</span>(<span class="variable">$nom</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
    }

    <span class="comment">// Getter pour le prix</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">getPrix</span>()
    {
        <span class="keyword">return</span> <span class="keyword">$this</span>-><span class="variable">prix</span>;
    }

    <span class="comment">// Setter pour le prix</span>
    <span class="keyword">public</span> <span class="function">function</span> <span class="variable">setPrix</span>(<span class="variable">$prix</span>)
    {
        <span class="keyword">if</span> (<span class="variable">$prix</span> &gt;= <span class="number">0</span>) {
            <span class="keyword">$this</span>-><span class="variable">prix</span> = <span class="variable">$prix</span>;
        }
    }
}

<span class="comment">// Utilisation des getters et setters</span>
<span class="variable">$produit</span> = <span class="keyword">new</span> <span class="variable">Produit</span>(<span class="string">"Laptop"</span>, <span class="number">1000</span>);
<span class="variable">echo</span> <span class="string">"Produit : "</span> . <span class="variable">$produit</span>-><span class="function">getNom</span>() . <span class="string">", Prix : "</span> . <span class="variable">$produit</span>-><span class="function">getPrix</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une classe PHP avec des propriétés privées et des méthodes d'accès :
            <ul>
                <li>Définissez une classe <code>Voiture</code> avec des propriétés privées comme <code>marque</code>, <code>modele</code>, et <code>vitesseMax</code>.</li>
                <li>Ajoutez des getters et setters pour chacune des propriétés, en validant que la <code>vitesseMax</code> ne peut pas être négative.</li>
                <li>Créez un objet <code>Voiture</code> et utilisez les getters et setters pour afficher et modifier ses propriétés.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="abstraction" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-lightbulb"></i> Abstraction en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'abstraction est un concept de la programmation orientée objet qui permet de modéliser des classes générales sans fournir de détails d'implémentation pour certaines méthodes. Les classes abstraites servent de modèles pour les classes dérivées, qui doivent alors fournir des implémentations concrètes pour les méthodes abstraites.
    </p>

    <!-- Classes abstraites en PHP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-layer-group"></i> Classes abstraites
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une classe abstraite est une classe qui ne peut pas être instanciée directement. Elle peut contenir des méthodes abstraites (sans implémentation) et des méthodes concrètes (avec implémentation). Les classes dérivées doivent implémenter toutes les méthodes abstraites de la classe parent.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classe abstraite Forme</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Classe abstraite qui définit un modèle général pour les formes géométriques</span>
<span class="keyword">abstract class</span> <span class="variable">Forme</span>
{
    <span class="comment">// Méthode abstraite pour calculer l'aire, à implémenter dans les sous-classes</span>
    <span class="keyword">abstract public function</span> <span class="variable">calculerAire</span>();

    <span class="comment">// Méthode concrète qui peut être utilisée par toutes les formes</span>
    <span class="keyword">public function</span> <span class="variable">description</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Ceci est une forme géométrique."</span>;
    }
}
<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Implémentation de classes concrètes -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-shapes"></i> Implémentation de classes concrètes
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une fois qu'une classe abstraite est définie, les classes concrètes qui héritent de cette classe doivent implémenter toutes les méthodes abstraites. Cela permet de créer des comportements spécifiques tout en respectant une interface commune définie par la classe abstraite.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classe Carré et Cercle dérivées de Forme</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Classe Carré qui hérite de Forme et implémente calculerAire()</span>
<span class="keyword">class</span> <span class="variable">Carre</span> <span class="keyword">extends</span> <span class="variable">Forme</span>
{
    <span class="keyword">private</span> <span class="variable">$cote</span>;

    <span class="keyword">public function</span> <span class="variable">__construct</span>(<span class="variable">$cote</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">cote</span> = <span class="variable">$cote</span>;
    }

    <span class="keyword">public function</span> <span class="variable">calculerAire</span>()
    {
        <span class="keyword">return</span> <span class="variable">$this</span>-><span class="variable">cote</span> * <span class="variable">$this</span>-><span class="variable">cote</span>;
    }
}

<span class="comment">// Classe Cercle qui hérite de Forme et implémente calculerAire()</span>
<span class="keyword">class</span> <span class="variable">Cercle</span> <span class="keyword">extends</span> <span class="variable">Forme</span>
{
    <span class="keyword">private</span> <span class="variable">$rayon</span>;

    <span class="keyword">public function</span> <span class="variable">__construct</span>(<span class="variable">$rayon</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">rayon</span> = <span class="variable">$rayon</span>;
    }

    <span class="keyword">public function</span> <span class="variable">calculerAire</span>()
    {
        <span class="keyword">return</span> <span class="number">3.14159</span> * <span class="variable">$this</span>-><span class="variable">rayon</span> * <span class="variable">$this</span>-><span class="variable">rayon</span>;
    }
}

<span class="comment">// Création d'objets Carré et Cercle et affichage de leur aire</span>
<span class="variable">$carre</span> = <span class="keyword">new</span> <span class="variable">Carre</span>(<span class="number">5</span>);
<span class="variable">$cercle</span> = <span class="keyword">new</span> <span class="variable">Cercle</span>(<span class="number">3</span>);

<span class="variable">echo</span> <span class="string">"Aire du carré : "</span> . <span class="variable">$carre</span>-><span class="function">calculerAire</span>();  <span class="comment">// Affiche : Aire du carré : 25</span>
<span class="variable">echo</span> <span class="string">"Aire du cercle : "</span> . <span class="variable">$cercle</span>-><span class="function">calculerAire</span>(); <span class="comment">// Affiche : Aire du cercle : 28.27431</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Avantages de l'abstraction -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-thumbs-up"></i> Avantages de l'abstraction
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'abstraction permet de :
        <ul>
            <li><strong>Réduire la complexité</strong> en cachant les détails d'implémentation et en exposant uniquement les méthodes essentielles.</li>
            <li><strong>Améliorer la réutilisabilité du code</strong> en fournissant une interface commune pour des implémentations spécifiques.</li>
            <li><strong>Renforcer la cohérence</strong> en obligeant les classes dérivées à implémenter les méthodes abstraites.</li>
        </ul>
    </p>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une classe abstraite en PHP pour modéliser un système de paiement :
            <ul>
                <li>Définissez une classe abstraite <code>Paiement</code> avec une méthode abstraite <code>effectuerPaiement()</code> et une méthode concrète <code>afficherRecap()</code> qui affiche un message standard de paiement.</li>
                <li>Créez deux classes concrètes <code>CarteCredit</code> et <code>PayPal</code> qui héritent de <code>Paiement</code> et implémentent la méthode <code>effectuerPaiement()</code> pour simuler un paiement via carte de crédit et PayPal.</li>
                <li>Testez les deux classes en créant des objets et en appelant leurs méthodes.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="interfaces" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-layer-group"></i> Interfaces en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, une interface est une structure qui définit un ensemble de méthodes que toutes les classes qui implémentent l'interface doivent définir. Les interfaces ne contiennent pas de logique ou d'implémentation. Elles servent uniquement à imposer une structure aux classes dérivées, assurant une cohérence dans la conception.
    </p>

    <!-- Déclaration d'une interface en PHP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-key"></i> Déclaration d'une interface
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une interface se déclare avec le mot-clé <code>interface</code>, et ses méthodes n'ont pas de corps. Voici un exemple d'interface <code>Animal</code> qui définit une méthode <code>parler()</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Interface Animal</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">interface</span> <span class="variable">Animal</span>
{
    <span class="comment">// Méthode sans implémentation, à définir dans les classes concrètes</span>
    <span class="keyword">public function</span> <span class="variable">parler</span>();
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Implémentation d'une interface dans une classe -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cogs"></i> Implémentation d'une interface
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une classe qui implémente une interface doit définir toutes les méthodes de l'interface. Voici des exemples de classes <code>Chien</code> et <code>Chat</code> qui implémentent l'interface <code>Animal</code> en définissant leur propre méthode <code>parler()</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Implémentation de l'interface Animal</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">interface</span> <span class="variable">Animal</span>
{
    <span class="keyword">public function</span> <span class="variable">parler</span>();
}

<span class="comment">// Classe Chien implémentant l'interface Animal</span>
<span class="keyword">class</span> <span class="variable">Chien</span> <span class="keyword">implements</span> <span class="variable">Animal</span>
{
    <span class="keyword">public function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Woof Woof!"</span>;
    }
}

<span class="comment">// Classe Chat implémentant l'interface Animal</span>
<span class="keyword">class</span> <span class="variable">Chat</span> <span class="keyword">implements</span> <span class="variable">Animal</span>
{
    <span class="keyword">public function</span> <span class="variable">parler</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Miaou!"</span>;
    }
}

<span class="comment">// Création des objets et utilisation de la méthode parler()</span>
<span class="variable">$chien</span> = <span class="keyword">new</span> <span class="variable">Chien</span>();
<span class="variable">$chat</span> = <span class="keyword">new</span> <span class="variable">Chat</span>();

<span class="variable">$chien</span>-><span class="function">parler</span>(); <span class="comment">// Affiche : Woof Woof!</span>
<span class="variable">$chat</span>-><span class="function">parler</span>();  <span class="comment">// Affiche : Miaou!</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Avantages des interfaces -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-thumbs-up"></i> Avantages des interfaces
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les interfaces apportent plusieurs avantages :
        <ul>
            <li><strong>Standardisation</strong> : Elles assurent que les classes implémentant une interface respectent une structure uniforme.</li>
            <li><strong>Modularité</strong> : Elles permettent de développer des classes de manière indépendante tout en suivant une interface commune.</li>
            <li><strong>Flexibilité</strong> : Les interfaces permettent aux classes de différents types de travailler ensemble de manière cohérente, facilitant le polymorphisme.</li>
        </ul>
    </p>

    <!-- Interface avec plusieurs méthodes -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-layer-group"></i> Interface avec plusieurs méthodes
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une interface peut définir plusieurs méthodes, offrant ainsi une structure plus complète pour les classes qui l'implémentent. Voici un exemple d'interface <code>Vehicule</code> avec plusieurs méthodes.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Interface Vehicule avec plusieurs méthodes</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">interface</span> <span class="variable">Vehicule</span>
{
    <span class="keyword">public function</span> <span class="variable">demarrer</span>();
    <span class="keyword">public function</span> <span class="variable">arreter</span>();
}

<span class="keyword">class</span> <span class="variable">Voiture</span> <span class="keyword">implements</span> <span class="variable">Vehicule</span>
{
    <span class="keyword">public function</span> <span class="variable">demarrer</span>()
    {
        <span class="keyword">echo</span> <span class="string">"La voiture démarre."</span>;
    }

    <span class="keyword">public function</span> <span class="variable">arreter</span>()
    {
        <span class="keyword">echo</span> <span class="string">"La voiture s'arrête."</span>;
    }
}

<span class="keyword">class</span> <span class="variable">Bateau</span> <span class="keyword">implements</span> <span class="variable">Vehicule</span>
{
    <span class="keyword">public function</span> <span class="variable">demarrer</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Le bateau démarre."</span>;
    }

    <span class="keyword">public function</span> <span class="variable">arreter</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Le bateau s'arrête."</span>;
    }
}

<span class="comment">// Utilisation des méthodes de l'interface</span>
<span class="variable">$voiture</span> = <span class="keyword">new</span> <span class="variable">Voiture</span>();
<span class="variable">$bateau</span> = <span class="keyword">new</span> <span class="variable">Bateau</span>();

<span class="variable">$voiture</span>-><span class="function">demarrer</span>(); <span class="comment">// Affiche : La voiture démarre.</span>
<span class="variable">$bateau</span>-><span class="function">demarrer</span>();  <span class="comment">// Affiche : Le bateau démarre.</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une interface en PHP pour un système de paiement :
            <ul>
                <li>Définissez une interface <code>Paiement</code> avec deux méthodes : <code>effectuerPaiement()</code> et <code>annulerPaiement()</code>.</li>
                <li>Créez deux classes <code>CarteCredit</code> et <code>PayPal</code> qui implémentent l'interface <code>Paiement</code> et fournissent des implémentations spécifiques pour chaque méthode.</li>
                <li>Créez des objets des deux classes et appelez leurs méthodes pour simuler des transactions.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="traits" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-puzzle-piece"></i> Traits en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les traits en PHP permettent de réutiliser du code dans plusieurs classes sans utiliser l'héritage. Un trait est une collection de méthodes pouvant être intégrées dans une ou plusieurs classes. Les traits sont particulièrement utiles pour ajouter des fonctionnalités communes à différentes classes qui ne partagent pas de lien hiérarchique direct.
    </p>

    <!-- Déclaration d'un trait -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-puzzle-piece"></i> Déclaration d'un trait
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les traits sont déclarés avec le mot-clé <code>trait</code>. Ils peuvent contenir des méthodes concrètes et des propriétés. Une classe utilise un trait avec le mot-clé <code>use</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Trait SalutTrait</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">trait</span> <span class="variable">SalutTrait</span>
{
    <span class="comment">// Méthode pour afficher un message de salut</span>
    <span class="keyword">public function</span> <span class="variable">direSalut</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Bonjour !"</span>;
    }
}

<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="comment">// Utilisation du trait SalutTrait</span>
    <span class="keyword">use</span> <span class="variable">SalutTrait</span>;
}

<span class="comment">// Création d'un objet Utilisateur</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>();
<span class="variable">$utilisateur</span>-><span class="function">direSalut</span>(); <span class="comment">// Affiche : Bonjour !</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation de plusieurs traits -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-puzzle-piece"></i> Utilisation de plusieurs traits
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une classe peut utiliser plusieurs traits en les séparant par des virgules. Cela permet de combiner différentes fonctionnalités dans une même classe.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation de plusieurs traits</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">trait</span> <span class="variable">SalutTrait</span>
{
    <span class="keyword">public function</span> <span class="variable">direSalut</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Bonjour !"</span>;
    }
}

<span class="keyword">trait</span> <span class="variable">AuRevoirTrait</span>
{
    <span class="keyword">public function</span> <span class="variable">direAuRevoir</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Au revoir !"</span>;
    }
}

<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">use</span> <span class="variable">SalutTrait</span>, <span class="variable">AuRevoirTrait</span>;
}

<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>();
<span class="variable">$utilisateur</span>-><span class="function">direSalut</span>();    <span class="comment">// Affiche : Bonjour !</span>
<span class="variable">$utilisateur</span>-><span class="function">direAuRevoir</span>(); <span class="comment">// Affiche : Au revoir !</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Gestion des conflits entre traits -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Gestion des conflits de méthode entre traits
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Si plusieurs traits possèdent des méthodes portant le même nom, PHP permet de résoudre le conflit en utilisant le mot-clé <code>insteadof</code> pour choisir quelle méthode utiliser. Vous pouvez également renommer une méthode en utilisant <code>as</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Gestion de conflits entre traits</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">trait</span> <span class="variable">TraitA</span>
{
    <span class="keyword">public function</span> <span class="variable">message</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Message de TraitA"</span>;
    }
}

<span class="keyword">trait</span> <span class="variable">TraitB</span>
{
    <span class="keyword">public function</span> <span class="variable">message</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Message de TraitB"</span>;
    }
}

<span class="keyword">class</span> <span class="variable">MaClasse</span>
{
    <span class="keyword">use</span> <span class="variable">TraitA</span>, <span class="variable">TraitB</span> <span class="comment">// Gestion du conflit</span>
    {
        <span class="variable">TraitA::message</span> <span class="keyword">insteadof</span> <span class="variable">TraitB</span>;
        <span class="variable">TraitB::message</span> <span class="keyword">as</span> <span class="variable">messageDeB</span>;
    }
}

<span class="variable">$objet</span> = <span class="keyword">new</span> <span class="variable">MaClasse</span>();
<span class="variable">$objet</span>-><span class="function">message</span>();      <span class="comment">// Affiche : Message de TraitA</span>
<span class="variable">$objet</span>-><span class="function">messageDeB</span>(); <span class="comment">// Affiche : Message de TraitB</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Avantages des traits -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-thumbs-up"></i> Avantages des traits
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les traits offrent plusieurs avantages :
        <ul>
            <li><strong>Réutilisabilité</strong> : Ils permettent de réutiliser des méthodes dans plusieurs classes sans héritage.</li>
            <li><strong>Flexibilité</strong> : Ils offrent une alternative à l'héritage pour partager du code entre des classes qui ne partagent pas de hiérarchie.</li>
            <li><strong>Résolution de conflits</strong> : En cas de conflit de méthodes, les traits offrent des mécanismes pour choisir les méthodes à utiliser.</li>
        </ul>
    </p>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez des traits pour une application de gestion de documents :
            <ul>
                <li>Définissez un trait <code>Imprimable</code> avec une méthode <code>imprimer()</code> qui simule l'impression d'un document.</li>
                <li>Définissez un autre trait <code>Exportable</code> avec une méthode <code>exporter()</code> qui simule l'exportation du document au format PDF.</li>
                <li>Créez une classe <code>Document</code> qui utilise ces deux traits et implémente les méthodes.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="namespaces" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-folder"></i> Namespaces en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les namespaces (ou espaces de noms) en PHP sont utilisés pour organiser le code en évitant les conflits de noms entre les classes, fonctions et constantes. Ils sont particulièrement utiles dans les projets de grande taille ou lorsque l’on utilise plusieurs bibliothèques avec des noms similaires.
    </p>

    <!-- Déclaration d'un namespace -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code-branch"></i> Déclaration d'un namespace
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Un namespace est déclaré avec le mot-clé <code>namespace</code>, suivi du nom de l’espace de noms. Il est placé au tout début du fichier PHP, avant tout autre code. Voici un exemple de déclaration de namespace dans un fichier contenant une classe.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Déclaration d'un namespace</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Déclaration du namespace MonProjet</span>
<span class="keyword">namespace</span> <span class="variable">MonProjet</span>;

<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">public function</span> <span class="variable">direBonjour</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Bonjour de MonProjet\Utilisateur!"</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation d'un namespace -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play-circle"></i> Utilisation d'un namespace
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour accéder à une classe ou une fonction dans un namespace spécifique, utilisez le nom du namespace suivi d'un antislash <code>\</code>. Voici un exemple d'utilisation du namespace <code>MonProjet</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation du namespace MonProjet</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">require_once</span> <span class="string">"MonProjet/Utilisateur.php"</span>;

<span class="comment">// Utilisation de la classe avec le namespace complet</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">MonProjet\Utilisateur</span>();
<span class="variable">$utilisateur</span>-><span class="function">direBonjour</span>(); <span class="comment">// Affiche : Bonjour de MonProjet\Utilisateur!</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Alias avec le mot-clé 'use' -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exchange-alt"></i> Alias avec le mot-clé <code>use</code>
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour simplifier l'accès aux classes dans un namespace, vous pouvez utiliser le mot-clé <code>use</code> pour créer un alias. Cela rend le code plus lisible et évite de devoir répéter le namespace complet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation d'un alias avec <code>use</code></strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">require_once</span> <span class="string">"MonProjet/Utilisateur.php"</span>;

<span class="comment">// Alias pour la classe MonProjet\Utilisateur</span>
<span class="keyword">use</span> <span class="variable">MonProjet\Utilisateur</span> <span class="keyword">as</span> <span class="variable">User</span>;

<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">User</span>();
<span class="variable">$utilisateur</span>-><span class="function">direBonjour</span>(); <span class="comment">// Affiche : Bonjour de MonProjet\Utilisateur!</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Namespaces imbriqués -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-folder-plus"></i> Namespaces imbriqués
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les namespaces peuvent être organisés de manière hiérarchique, en utilisant un antislash pour séparer les sous-namespaces. Cela est utile pour organiser un projet complexe.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Namespaces imbriqués</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">namespace</span> <span class="variable">MonProjet\Services</span>;

<span class="keyword">class</span> <span class="variable">EmailService</span>
{
    <span class="keyword">public function</span> <span class="variable">envoyerEmail</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Envoi d'un email..."</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation des namespaces imbriqués -->
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utilisation des namespaces imbriqués</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">require_once</span> <span class="string">"MonProjet/Services/EmailService.php"</span>;

<span class="comment">// Utilisation de la classe avec le namespace complet</span>
<span class="variable">$service</span> = <span class="keyword">new</span> <span class="variable">MonProjet\Services\EmailService</span>();
<span class="variable">$service</span>-><span class="function">envoyerEmail</span>(); <span class="comment">// Affiche : Envoi d'un email...</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une organisation de namespaces pour un système de gestion d'utilisateur :
            <ul>
                <li>Définissez un namespace <code>GestionUtilisateur</code> avec une classe <code>Utilisateur</code> contenant une méthode <code>connexion()</code>.</li>
                <li>Créez un sous-namespace <code>GestionUtilisateur\Services</code> avec une classe <code>AuthentificationService</code> contenant une méthode <code>verifierIdentifiants()</code>.</li>
                <li>Utilisez les classes avec leurs namespaces complets pour simuler une connexion utilisateur.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="api" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-network-wired"></i> Création d'une API RESTful en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les APIs RESTful permettent aux applications de communiquer entre elles de manière standardisée en utilisant le protocole HTTP. En PHP, la création d'une API RESTful consiste à créer des points de terminaison (endpoints) qui répondent aux requêtes HTTP (GET, POST, PUT, DELETE) avec des données JSON, souvent stockées dans une base de données.
    </p>

    <!-- Concepts clés de REST -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-book"></i> Concepts clés de REST
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une API RESTful suit généralement ces principes :
        <ul>
            <li><strong>Stateless</strong> : Chaque requête est indépendante et doit contenir toutes les informations nécessaires au traitement.</li>
            <li><strong>Utilisation des méthodes HTTP</strong> : 
                <ul>
                    <li><code>GET</code> : Récupérer des données.</li>
                    <li><code>POST</code> : Créer de nouvelles données.</li>
                    <li><code>PUT</code> : Mettre à jour des données existantes.</li>
                    <li><code>DELETE</code> : Supprimer des données.</li>
                </ul>
            </li>
            <li><strong>Format des données</strong> : Utilisation de JSON comme format de données standard.</li>
            <li><strong>Endpoints</strong> : Représentation des ressources via des URL, par exemple, <code>/api/produits</code>.</li>
        </ul>
    </p>

    <!-- Configuration de base de l'API -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cogs"></i> Configuration de base de l'API
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour créer une API RESTful en PHP, commencez par configurer les en-têtes HTTP pour accepter et envoyer des données en JSON.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Configuration des en-têtes JSON</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Définir les en-têtes pour permettre le JSON et les requêtes cross-origin (CORS)</span>
<span class="function">header</span>(<span class="string">"Content-Type: application/json; charset=UTF-8"</span>);
<span class="function">header</span>(<span class="string">"Access-Control-Allow-Origin: *"</span>);
<span class="function">header</span>(<span class="string">"Access-Control-Allow-Methods: GET, POST, PUT, DELETE"</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exemple de base d'une API RESTful en PHP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Exemple : API RESTful simple avec une ressource "produit"
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, nous créons une API pour gérer les produits, en ajoutant des points de terminaison pour les opérations de base (GET, POST, PUT, DELETE). Cet exemple suppose que vous avez une base de données MySQL avec une table <code>produits</code> contenant les colonnes <code>id</code>, <code>nom</code>, et <code>prix</code>.
    </p>

    <!-- Code PHP pour les opérations CRUD -->
    <div class="example-box">
        <strong><i class="fas fa-database"></i> Exemple : CRUD pour la ressource "produit"</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Connexion à la base de données</span>
<span class="keyword">function</span> <span class="variable">connecterBDD</span>()
{
    <span class="keyword">return new</span> <span class="variable">PDO</span>(<span class="string">"mysql:host=localhost;dbname=monapi"</span>, <span class="string">"root"</span>, <span class="string">"password"</span>);
}

<span class="comment">// Récupération de la méthode HTTP</span>
<span class="variable">$method</span> = <span class="function">$_SERVER</span>[<span class="string">"REQUEST_METHOD"</span>];

<span class="comment">// Points de terminaison de l'API</span>
<span class="keyword">switch</span> (<span class="variable">$method</span>) {
    <span class="comment">// Lire tous les produits</span>
    <span class="keyword">case</span> <span class="string">"GET"</span>:
        <span class="variable">$bdd</span> = <span class="function">connecterBDD</span>();
        <span class="variable">$query</span> = <span class="variable">$bdd</span>-><span class="function">query</span>(<span class="string">"SELECT * FROM produits"</span>);
        <span class="variable">$produits</span> = <span class="variable">$query</span>-><span class="function">fetchAll</span>(<span class="variable">PDO::FETCH_ASSOC</span>);
        <span class="function">echo json_encode</span>(<span class="variable">$produits</span>);
        <span class="keyword">break</span>;

    <span class="comment">// Créer un produit</span>
    <span class="keyword">case</span> <span class="string">"POST"</span>:
        <span class="variable">$data</span> = <span class="function">json_decode</span>(<span class="variable">file_get_contents</span>(<span class="string">"php://input"</span>), <span class="keyword">true</span>);
        <span class="variable">$bdd</span> = <span class="function">connecterBDD</span>();
        <span class="variable">$stmt</span> = <span class="variable">$bdd</span>-><span class="function">prepare</span>(<span class="string">"INSERT INTO produits (nom, prix) VALUES (:nom, :prix)"</span>);
        <span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">'nom'</span> => <span class="variable">$data</span>[<span class="string">'nom'</span>], <span class="string">'prix'</span> => <span class="variable">$data</span>[<span class="string">'prix'</span>]]);
        <span class="function">echo json_encode</span>([<span class="string">"message"</span> => <span class="string">"Produit créé"</span>]);
        <span class="keyword">break</span>;

    <span class="comment">// Mettre à jour un produit</span>
    <span class="keyword">case</span> <span class="string">"PUT"</span>:
        <span class="variable">$data</span> = <span class="function">json_decode</span>(<span class="variable">file_get_contents</span>(<span class="string">"php://input"</span>), <span class="keyword">true</span>);
        <span class="variable">$bdd</span> = <span class="function">connecterBDD</span>();
        <span class="variable">$stmt</span> = <span class="variable">$bdd</span>-><span class="function">prepare</span>(<span class="string">"UPDATE produits SET nom = :nom, prix = :prix WHERE id = :id"</span>);
        <span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">'id'</span> => <span class="variable">$data</span>[<span class="string">'id'</span>], <span class="string">'nom'</span> => <span class="variable">$data</span>[<span class="string">'nom'</span>], <span class="string">'prix'</span> => <span class="variable">$data</span>[<span class="string">'prix'</span>]]);
        <span class="function">echo json_encode</span>([<span class="string">"message"</span> => <span class="string">"Produit mis à jour"</span>]);
        <span class="keyword">break</span>;

    <span class="comment">// Supprimer un produit</span>
    <span class="keyword">case</span> <span class="string">"DELETE"</span>:
        <span class="variable">$data</span> = <span class="function">json_decode</span>(<span class="variable">file_get_contents</span>(<span class="string">"php://input"</span>), <span class="keyword">true</span>);
        <span class="variable">$bdd</span> = <span class="function">connecterBDD</span>();
        <span class="variable">$stmt</span> = <span class="variable">$bdd</span>-><span class="function">prepare</span>(<span class="string">"DELETE FROM produits WHERE id = :id"</span>);
        <span class="variable">$stmt</span>-><span class="function">execute</span>([<span class="string">'id'</span> => <span class="variable">$data</span>[<span class="string">'id'</span>]]);
        <span class="function">echo json_encode</span>([<span class="string">"message"</span> => <span class="string">"Produit supprimé"</span>]);
        <span class="keyword">break</span>;
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une API RESTful pour gérer des utilisateurs :
            <ul>
                <li>Créez une table <code>utilisateurs</code> avec les colonnes <code>id</code>, <code>nom</code>, et <code>email</code>.</li>
                <li>Implémentez les opérations CRUD pour cette table.</li>
                <li>Testez chaque endpoint avec des outils comme Postman ou Insomnia pour vérifier les opérations GET, POST, PUT, et DELETE.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="mvc" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-layer-group"></i> Modèle MVC en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'architecture MVC (Modèle-Vue-Contrôleur) est une façon de structurer une application en trois parties distinctes :
        <ul>
            <li><strong>Modèle (Model)</strong> : Gère les données de l'application, interagit avec la base de données.</li>
            <li><strong>Vue (View)</strong> : Représente l'interface utilisateur et affiche les données du modèle.</li>
            <li><strong>Contrôleur (Controller)</strong> : Contrôle la logique de l'application, traite les demandes de l'utilisateur et interagit avec le modèle et la vue.</li>
        </ul>
        Cette séparation permet une meilleure organisation et une maintenance facilitée de l'application.
    </p>

    <!-- Structure de base du projet MVC -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-folder"></i> Structure de base du projet MVC
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Un projet MVC en PHP suit généralement la structure suivante :
    </p>
    <div class="example-box">
        <pre>
mon_projet/
├── controllers/
│   └── ProduitController.php
├── models/
│   └── Produit.php
├── views/
│   └── produits/
│       ├── liste.php
│       └── detail.php
├── index.php
└── config/
    └── database.php
        </pre>
    </div>

    <!-- Exemple pratique d'un modèle MVC -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Exemple pratique : Application simple de gestion de produits
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Créons une application de gestion de produits en utilisant le modèle MVC. L'objectif est d'afficher une liste de produits et les détails de chaque produit. Voici les fichiers clés pour cet exemple.
    </p>

    <!-- 1. Configuration de la base de données -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        1. Configuration de la base de données
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Ce fichier configure la connexion à la base de données.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> config/database.php</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Database</span>
{
    <span class="keyword">private</span> <span class="variable">$host</span> = <span class="string">'localhost'</span>;
    <span class="keyword">private</span> <span class="variable">$dbname</span> = <span class="string">'mon_projet'</span>;
    <span class="keyword">private</span> <span class="variable">$username</span> = <span class="string">'root'</span>;
    <span class="keyword">private</span> <span class="variable">$password</span> = <span class="string">''</span>;

    <span class="keyword">public function</span> <span class="variable">connect</span>()
    {
        <span class="keyword">try</span> {
            <span class="variable">$pdo</span> = <span class="keyword">new</span> <span class="variable">PDO</span>(<span class="string">"mysql:host={$this->host};dbname={$this->dbname}"</span>, <span class="variable">$this</span>-><span class="variable">username</span>, <span class="variable">$this</span>-><span class="variable">password</span>);
            <span class="variable">$pdo</span>-><span class="variable">setAttribute</span>(<span class="variable">PDO::ATTR_ERRMODE</span>, <span class="variable">PDO::ERRMODE_EXCEPTION</span>);
            <span class="keyword">return</span> <span class="variable">$pdo</span>;
        } <span class="keyword">catch</span> (<span class="variable">PDOException</span> <span class="variable">$e</span>) {
            <span class="variable">echo</span> <span class="variable">$e</span>-><span class="variable">getMessage</span>();
        }
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- 2. Modèle (Model) -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        2. Modèle (Model) : models/Produit.php
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Le modèle représente les données de l'application. Ici, nous avons un modèle <code>Produit</code> qui interagit avec la table <code>produits</code> dans la base de données.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> models/Produit.php</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">require_once</span> <span class="string">'../config/database.php'</span>;

<span class="keyword">class</span> <span class="variable">Produit</span>
{
    <span class="keyword">private</span> <span class="variable">$db</span>;

    <span class="keyword">public function</span> <span class="variable">__construct</span>()
    {
        <span class="variable">$this</span>-><span class="variable">db</span> = (new Database())-><span class="variable">connect</span>();
    }

    <span class="comment">// Méthode pour obtenir tous les produits</span>
    <span class="keyword">public function</span> <span class="variable">getProduits</span>()
    {
        <span class="variable">$stmt</span> = <span class="variable">$this</span>-><span class="variable">db</span>-><span class="variable">query</span>(<span class="string">'SELECT * FROM produits'</span>);
        <span class="keyword">return</span> <span class="variable">$stmt</span>-><span class="variable">fetchAll</span>(<span class="variable">PDO::FETCH_ASSOC</span>);
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- 3. Contrôleur (Controller) -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        3. Contrôleur (Controller) : controllers/ProduitController.php
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        Le contrôleur récupère les données du modèle et les envoie à la vue. Le <code>ProduitController</code> gère l'affichage des produits.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> controllers/ProduitController.php</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">require_once</span> <span class="string">'../models/Produit.php'</span>;

<span class="keyword">class</span> <span class="variable">ProduitController</span>
{
    <span class="comment">// Action pour afficher la liste des produits</span>
    <span class="keyword">public function</span> <span class="variable">afficherProduits</span>()
    {
        <span class="variable">$produit</span> = <span class="keyword">new</span> <span class="variable">Produit</span>();
        <span class="variable">$produits</span> = <span class="variable">$produit</span>-><span class="variable">getProduits</span>();
        <span class="keyword">require</span> <span class="string">'../views/produits/liste.php'</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- 4. Vue (View) -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        4. Vue (View) : views/produits/liste.php
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        La vue affiche les données reçues du contrôleur. Elle représente l'interface utilisateur pour visualiser la liste des produits.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> views/produits/liste.php</strong>
        <pre>
<span class="keyword">&lt;?php</span> <span class="keyword">foreach</span> (<span class="variable">$produits</span> <span class="keyword">as</span> <span class="variable">$produit</span>): <span class="keyword">?&gt;</span>
    <span class="tag">&lt;h2&gt;</span><span class="variable">&lt;?php echo</span> <span class="variable">$produit</span>[<span class="string">'nom'</span>]<span class="tag">;&lt;/h2&gt;</span>
    <span class="tag">&lt;p&gt;</span>Prix : <span class="variable">&lt;?php echo</span> <span class="variable">$produit</span>[<span class="string">'prix'</span>]<span class="tag">;&lt;/p&gt;</span>
<span class="keyword">&lt;?php endforeach; ?&gt;</span>
        </pre>
    </div>

    <!-- Index.php -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        5. Point d'entrée : index.php
    </h3>
    <p style="font-size: 1.1em; color: #333;">
        <code>index.php</code> est le point d'entrée de l'application, qui initialise le contrôleur et lance l'application.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> index.php</strong>
        <pre>
<span class="keyword">&lt;?php</span>
<span class="keyword">require_once</span> <span class="string">'controllers/ProduitController.php'</span>;

<span class="variable">$controller</span> = <span class="keyword">new</span> <span class="variable">ProduitController</span>();
<span class="variable">$controller</span>-><span class="function">afficherProduits</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Étendez cette application :
            <ul>
                <li>Créez une méthode <code>afficherDetailProduit</code> dans le <code>ProduitController</code> pour afficher les détails d'un produit spécifique.</li>
                <li>Ajoutez une vue <code>detail.php</code> pour afficher ces détails.</li>
                <li>Implémentez la logique dans le modèle pour récupérer un produit par son ID.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="oop" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-cube"></i> Programmation Orientée Objet en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        La Programmation Orientée Objet (POO) est un paradigme de programmation qui permet de structurer le code en définissant des objets basés sur des classes. En PHP, la POO facilite la réutilisation, la maintenance, et la modularité du code.
    </p>

    <!-- Concepts clés de la POO -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-book"></i> Concepts clés de la POO
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Classe</strong> : Modèle ou plan pour créer des objets.</li>
        <li><strong>Objet</strong> : Instance d'une classe représentant une entité avec des propriétés et des méthodes.</li>
        <li><strong>Attribut</strong> : Variable définie dans une classe qui décrit l'état d'un objet.</li>
        <li><strong>Méthode</strong> : Fonction définie dans une classe qui décrit le comportement d'un objet.</li>
        <li><strong>Constructeur</strong> : Méthode spéciale utilisée pour initialiser un objet.</li>
    </ul>

    <!-- Définir une classe en PHP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Définir une classe en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une classe en PHP est définie avec le mot-clé <code>class</code>. Elle contient des attributs et des méthodes pour décrire les propriétés et les comportements de l'objet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Définition d'une classe Utilisateur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Déclaration de la classe Utilisateur</span>
<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">private</span> <span class="variable">$nom</span>;
    <span class="keyword">private</span> <span class="variable">$email</span>;

    <span class="comment">// Constructeur pour initialiser les attributs</span>
    <span class="keyword">public function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>, <span class="variable">$email</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
        <span class="keyword">$this</span>-><span class="variable">email</span> = <span class="variable">$email</span>;
    }

    <span class="comment">// Méthode pour obtenir le nom</span>
    <span class="keyword">public function</span> <span class="variable">getNom</span>()
    {
        <span class="keyword">return</span> <span class="keyword">$this</span>-><span class="variable">nom</span>;
    }

    <span class="comment">// Méthode pour définir le nom</span>
    <span class="keyword">public function</span> <span class="variable">setNom</span>(<span class="variable">$nom</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Création d'un objet -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cube"></i> Création d'un objet
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour créer un objet, on utilise le mot-clé <code>new</code> suivi de la classe. Ensuite, on peut accéder aux méthodes et aux attributs de l'objet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Création d'un objet et utilisation des méthodes</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Création d'un objet Utilisateur</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>(<span class="string">"Alice"</span>, <span class="string">"alice@example.com"</span>);

<span class="comment">// Utilisation des méthodes de l'objet</span>
<span class="variable">echo</span> <span class="variable">$utilisateur</span>-><span class="function">getNom</span>(); <span class="comment">// Affiche : Alice</span>
<span class="variable">$utilisateur</span>-><span class="function">setNom</span>(<span class="string">"Alice Dupont"</span>);
<span class="variable">echo</span> <span class="variable">$utilisateur</span>-><span class="function">getNom</span>(); <span class="comment">// Affiche : Alice Dupont</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Encapsulation -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lock"></i> Encapsulation
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'encapsulation consiste à protéger les données d'un objet en les rendant privées et en accédant à ces données uniquement par des méthodes (getters et setters). Cela améliore la sécurité et l'intégrité de l'objet.
    </p>

    <!-- Héritage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sitemap"></i> Héritage
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'héritage permet de créer une nouvelle classe qui hérite des attributs et méthodes d'une classe existante. En PHP, cela se fait avec le mot-clé <code>extends</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Héritage</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">protected</span> <span class="variable">$nom</span>;

    <span class="keyword">public function</span> <span class="variable">__construct</span>(<span class="variable">$nom</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">nom</span> = <span class="variable">$nom</span>;
    }

    <span class="keyword">public function</span> <span class="variable">getNom</span>()
    {
        <span class="keyword">return</span> <span class="variable">$this</span>-><span class="variable">nom</span>;
    }
}

<span class="comment">// La classe Admin hérite de Utilisateur</span>
<span class="keyword">class</span> <span class="variable">Admin</span> <span class="keyword">extends</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">public function</span> <span class="variable">saluer</span>()
    {
        <span class="keyword">echo</span> <span class="string">"Bonjour, je suis Admin et mon nom est "</span> . <span class="keyword">$this</span>-><span class="variable">getNom</span>();
    }
}

<span class="variable">$admin</span> = <span class="keyword">new</span> <span class="variable">Admin</span>(<span class="string">"Alice Dupont"</span>);
<span class="variable">$admin</span>-><span class="function">saluer</span>(); <span class="comment">// Affiche : Bonjour, je suis Admin et mon nom est Alice Dupont</span>

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Polymorphisme -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-shapes"></i> Polymorphisme
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Le polymorphisme permet d'utiliser une même interface pour des classes différentes. En PHP, cela se fait en définissant des méthodes communes dans une interface ou une classe parent, et en les redéfinissant dans les classes enfants.
    </p>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Appliquez les principes de la POO :
            <ul>
                <li>Créez une classe <code>Produit</code> avec des attributs <code>nom</code> et <code>prix</code>, et des méthodes pour les obtenir et les définir.</li>
                <li>Créez une classe <code>Electronique</code> qui hérite de <code>Produit</code> et ajoute un attribut <code>garantie</code> avec ses getters et setters.</li>
                <li>Instanciez un objet de chaque classe et affichez leurs attributs.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="autoloading" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-sync-alt"></i> Autoloading en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'autoloading est une fonctionnalité qui permet de charger automatiquement les fichiers de classes lorsqu'elles sont instanciées, sans avoir besoin d'utiliser <code>require</code> ou <code>include</code> pour chaque fichier. C'est une pratique standard pour organiser et simplifier le code, en particulier dans les projets de grande envergure.
    </p>

    <!-- Fonctionnement de l'autoloading -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cogs"></i> Fonctionnement de l'autoloading en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, l'autoloading peut être implémenté avec la fonction <code>spl_autoload_register()</code>, qui enregistre une fonction d'autoload personnalisée pour charger les classes à la demande.
    </p>

    <!-- Exemple simple d'autoloading -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-code"></i> Exemple simple d'autoloading
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, nous avons une fonction d'autoload qui charge automatiquement les classes à partir d'un dossier <code>classes</code> basé sur le nom de la classe.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Fonction d'autoload</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Fonction d'autoload pour charger les classes depuis le dossier 'classes'</span>
<span class="keyword">spl_autoload_register</span>(<span class="keyword">function</span> (<span class="variable">$className</span>) {
    <span class="variable">$path</span> = <span class="string">'classes/'</span> . <span class="variable">$className</span> . <span class="string">'.php'</span>;
    <span class="keyword">if</span> (<span class="keyword">file_exists</span>(<span class="variable">$path</span>)) {
        <span class="keyword">require_once</span> <span class="variable">$path</span>;
    }
});

<span class="comment">// Création d'une instance de la classe 'Utilisateur' dans 'classes/Utilisateur.php'</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Structure du dossier pour l'exemple -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        Structure de dossier pour l'exemple
    </h3>
    <div class="example-box">
        <pre>
mon_projet/
├── index.php
└── classes/
    ├── Utilisateur.php
    └── Produit.php
        </pre>
    </div>

    <!-- Utilisation avec les namespaces -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-folder"></i> Autoloading avec les namespaces
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Lorsque les classes utilisent des namespaces, il est possible de configurer l'autoloading pour traduire les namespaces en arborescence de dossiers. Par exemple, le namespace <code>MonProjet\Models\Utilisateur</code> peut être mappé au fichier <code>classes/MonProjet/Models/Utilisateur.php</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Autoloading avec namespaces</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Fonction d'autoload prenant en charge les namespaces</span>
<span class="keyword">spl_autoload_register</span>(<span class="keyword">function</span> (<span class="variable">$className</span>) {
    <span class="variable">$path</span> = <span class="string">'classes/'</span> . <span class="keyword">str_replace</span>(<span class="string">'\\'</span>, <span class="string">'/'</span>, <span class="variable">$className</span>) . <span class="string">'.php'</span>;
    <span class="keyword">if</span> (<span class="keyword">file_exists</span>(<span class="variable">$path</span>)) {
        <span class="keyword">require_once</span> <span class="variable">$path</span>;
    }
});

<span class="comment">// Chargement automatique de la classe MonProjet\Models\Utilisateur</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">MonProjet\Models\Utilisateur</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utilisation de Composer pour l'autoloading -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-box"></i> Autoloading avec Composer
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Composer, le gestionnaire de dépendances pour PHP, simplifie l'autoloading en générant automatiquement les fichiers d'autoload pour les classes et namespaces. Pour utiliser l'autoloading de Composer, suivez ces étapes :
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li>Créez un fichier <code>composer.json</code> à la racine de votre projet.</li>
        <li>Ajoutez les mappings d'autoloading pour vos namespaces.</li>
        <li>Exécutez <code>composer dump-autoload</code> pour générer les fichiers d'autoload.</li>
    </ol>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Configuration du fichier composer.json</strong>
        <pre>
{
    "autoload": {
        "psr-4": {
            "MonProjet\\": "classes/MonProjet/"
        }
    }
}
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Ensuite, vous pouvez inclure l'autoloader généré par Composer dans votre fichier principal (<code>index.php</code>) :
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Inclusion de l'autoloader de Composer</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">require_once</span> <span class="string">'vendor/autoload.php'</span>;

<span class="comment">// Utilisation d'une classe avec autoloading via Composer</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">MonProjet\Models\Utilisateur</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un autoloader pour votre projet :
            <ul>
                <li>Créez plusieurs classes dans un dossier <code>classes</code>, en utilisant des namespaces pour les organiser.</li>
                <li>Implémentez un autoloader personnalisé avec <code>spl_autoload_register()</code> pour charger automatiquement les classes avec leur namespace.</li>
                <li>Testez l'autoloading en créant des objets sans inclure manuellement les fichiers de classes.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 avec Composer -->
    <div class="example-box" style="background-color: #e0f7fa; border-left: 4px solid #00acc1; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #00acc1;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #00acc1;"></i> Utilisez Composer pour gérer l'autoloading dans un projet :
            <ul>
                <li>Créez une structure de dossiers avec des namespaces, par exemple, <code>App\\Controllers</code>, <code>App\\Models</code>, et <code>App\\Views</code>.</li>
                <li>Configurez le fichier <code>composer.json</code> pour l'autoloading avec le standard PSR-4.</li>
                <li>Exécutez <code>composer dump-autoload</code> pour générer l'autoloader de Composer.</li>
                <li>Créez un fichier <code>index.php</code> où vous incluez l'autoloader de Composer et instanciez des classes pour tester l'autoloading.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="dependency-injection" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-plug"></i> Injection de Dépendances en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'injection de dépendances est un concept de programmation qui consiste à fournir les dépendances d'une classe (ses objets ou services externes) plutôt que de les créer directement dans la classe elle-même. Cela favorise la modularité et facilite les tests unitaires, car il devient possible de substituer des dépendances réelles par des doubles de test.
    </p>

    <!-- Pourquoi utiliser l'injection de dépendances ? -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-question-circle"></i> Pourquoi utiliser l'injection de dépendances ?
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Modularité</strong> : Facilite le changement de comportement de la classe sans en modifier le code.</li>
        <li><strong>Testabilité</strong> : Permet d'injecter des dépendances factices (mocks) lors des tests.</li>
        <li><strong>Couplage réduit</strong> : Diminue le couplage entre les classes, rendant le code plus flexible.</li>
    </ul>

    <!-- Injection par le constructeur -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cube"></i> Injection de dépendances par le constructeur
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'injection par le constructeur consiste à injecter les dépendances dans le constructeur de la classe. Cela signifie que toutes les dépendances requises sont fournies au moment de l'instanciation de l'objet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Injection par le constructeur</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Service de notification</span>
<span class="keyword">class</span> <span class="variable">NotificationService</span>
{
    <span class="keyword">public function</span> <span class="variable">send</span>(<span class="variable">$message</span>)
    {
        <span class="keyword">echo</span> <span class="string">"Notification envoyée : "</span> . <span class="variable">$message</span>;
    }
}

<span class="comment">// Classe Utilisateur qui dépend de NotificationService</span>
<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">private</span> <span class="variable">$notificationService</span>;

    <span class="keyword">public function</span> <span class="variable">__construct</span>(<span class="variable">NotificationService</span> <span class="variable">$notificationService</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">notificationService</span> = <span class="variable">$notificationService</span>;
    }

    <span class="keyword">public function</span> <span class="variable">inscrireUtilisateur</span>(<span class="variable">$nom</span>)
    {
        <span class="comment">// Logique d'inscription...</span>
        <span class="keyword">$this</span>-><span class="variable">notificationService</span>-><span class="function">send</span>(<span class="string">"$nom a été inscrit avec succès."</span>);
    }
}

<span class="comment">// Injection de NotificationService dans Utilisateur</span>
<span class="variable">$notificationService</span> = <span class="keyword">new</span> <span class="variable">NotificationService</span>();
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>(<span class="variable">$notificationService</span>);
<span class="variable">$utilisateur</span>-><span class="function">inscrireUtilisateur</span>(<span class="string">"Alice"</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Injection par le setter -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-wrench"></i> Injection de dépendances par le setter
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'injection par le setter consiste à fournir la dépendance par une méthode publique (setter) après l'instanciation de l'objet. Cela peut être utile pour les dépendances optionnelles ou remplaçables.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Injection par le setter</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Classe avec dépendance injectée via un setter</span>
<span class="keyword">class</span> <span class="variable">Utilisateur</span>
{
    <span class="keyword">private</span> <span class="variable">$notificationService</span>;

    <span class="comment">// Méthode setter pour injecter NotificationService</span>
    <span class="keyword">public function</span> <span class="variable">setNotificationService</span>(<span class="variable">NotificationService</span> <span class="variable">$notificationService</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">notificationService</span> = <span class="variable">$notificationService</span>;
    }

    <span class="comment">// Utilisation de la dépendance</span>
    <span class="keyword">public function</span> <span class="variable">inscrireUtilisateur</span>(<span class="variable">$nom</span>)
    {
        <span class="comment">// Logique d'inscription...</span>
        <span class="keyword">$this</span>-><span class="variable">notificationService</span>-><span class="function">send</span>(<span class="string">"$nom a été inscrit avec succès."</span>);
    }
}

<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>();
<span class="variable">$utilisateur</span>-><span class="function">setNotificationService</span>(<span class="keyword">new</span> <span class="variable">NotificationService</span>());
<span class="variable">$utilisateur</span>-><span class="function">inscrireUtilisateur</span>(<span class="string">"Alice"</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Injection de dépendances avec un conteneur de services -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-box-open"></i> Injection avec un conteneur de services
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Un conteneur de services est une classe qui gère l'instanciation et la fourniture des dépendances. Les conteneurs sont utilisés dans les frameworks pour gérer les dépendances de manière centralisée.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Conteneur de services simple</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Conteneur de services simple</span>
<span class="keyword">class</span> <span class="variable">ServiceContainer</span>
{
    <span class="keyword">private</span> <span class="variable">$services</span> = [];

    <span class="comment">// Enregistrement d'un service</span>
    <span class="keyword">public function</span> <span class="variable">register</span>(<span class="variable">$name</span>, <span class="variable">$service</span>)
    {
        <span class="keyword">$this</span>-><span class="variable">services</span>[<span class="variable">$name</span>] = <span class="variable">$service</span>;
    }

    <span class="comment">// Récupération d'un service</span>
    <span class="keyword">public function</span> <span class="variable">get</span>(<span class="variable">$name</span>)
    {
        <span class="keyword">return</span> <span class="keyword">$this</span>-><span class="variable">services</span>[<span class="variable">$name</span>] ?? <span class="keyword">null</span>;
    }
}

<span class="comment">// Création d'un conteneur de services et enregistrement de NotificationService</span>
<span class="variable">$container</span> = <span class="keyword">new</span> <span class="variable">ServiceContainer</span>();
<span class="variable">$container</span>-><span class="function">register</span>(<span class="string">'notificationService'</span>, <span class="keyword">new</span> <span class="variable">NotificationService</span>());

<span class="comment">// Utilisation de NotificationService via le conteneur</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">Utilisateur</span>(<span class="variable">$container</span>-><span class="function">get</span>(<span class="string">'notificationService'</span>));
<span class="variable">$utilisateur</span>-><span class="function">inscrireUtilisateur</span>(<span class="string">"Alice"</span>);

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Mettez en pratique l'injection de dépendances :
            <ul>
                <li>Créez une classe <code>Logger</code> avec une méthode <code>log()</code> qui enregistre un message dans un fichier.</li>
                <li>Créez une classe <code>Produit</code> qui utilise le <code>Logger</code> pour enregistrer les événements (par exemple, ajout d'un produit).</li>
                <li>Utilisez l'injection par le constructeur pour fournir <code>Logger</code> à <code>Produit</code>.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="composer" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-box"></i> Composer : Gestionnaire de dépendances en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Composer est un outil de gestion de dépendances pour PHP. Il permet de déclarer les bibliothèques dont votre projet dépend, et il les installe et met à jour automatiquement. Composer simplifie l'intégration de bibliothèques tierces et automatise l'autoloading des classes.
    </p>

    <!-- Installation de Composer -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-download"></i> Installation de Composer
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour installer Composer globalement sur votre système, suivez ces étapes :
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li>Téléchargez l'installateur de Composer en exécutant la commande suivante :
            <pre><code>php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</code></pre>
        </li>
        <li>Exécutez l'installateur :
            <pre><code>php composer-setup.php</code></pre>
        </li>
        <li>Déplacez Composer pour qu'il soit accessible globalement :
            <pre><code>mv composer.phar /usr/local/bin/composer</code></pre>
        </li>
        <li>Vérifiez l'installation en tapant :
            <pre><code>composer --version</code></pre>
        </li>
    </ol>

    <!-- Initialisation d'un projet avec Composer -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play"></i> Initialiser un projet avec Composer
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour démarrer un projet avec Composer, créez un fichier <code>composer.json</code> pour définir les dépendances de votre projet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Commande pour initialiser un projet avec Composer</strong>
        <pre><code>composer init</code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande vous guidera pour configurer votre fichier <code>composer.json</code>, où vous pouvez ajouter des dépendances ou d'autres configurations pour votre projet.
    </p>

    <!-- Ajouter des dépendances -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-plus"></i> Ajouter des dépendances avec Composer
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour installer une bibliothèque, utilisez la commande <code>composer require</code>. Composer télécharge la bibliothèque et met à jour le fichier <code>composer.json</code> avec la dépendance.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Ajouter la bibliothèque GuzzleHTTP</strong>
        <pre><code>composer require guzzlehttp/guzzle</code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Composer télécharge les fichiers dans un dossier <code>vendor/</code> et met à jour <code>composer.json</code> pour inclure <code>guzzlehttp/guzzle</code>.
    </p>

    <!-- Utilisation de l'autoloading de Composer -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-sync-alt"></i> Autoloading avec Composer
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Composer simplifie l'autoloading des classes. Après avoir ajouté des classes ou bibliothèques, incluez le fichier <code>vendor/autoload.php</code> pour charger automatiquement toutes les classes de votre projet.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Utiliser l'autoloading de Composer</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="comment">// Inclure l'autoloader de Composer</span>
<span class="keyword">require_once</span> <span class="string">'vendor/autoload.php'</span>;

<span class="comment">// Utilisation de GuzzleHTTP après l'installation</span>
<span class="variable">$client</span> = <span class="keyword">new</span> <span class="variable">GuzzleHttp\Client</span>();
<span class="variable">$response</span> = <span class="variable">$client</span>-><span class="function">request</span>(<span class="string">'GET'</span>, <span class="string">'https://api.example.com/data'</span>);

<span class="keyword">echo</span> <span class="variable">$response</span>-><span class="function">getBody</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Utiliser Composer avec des namespaces -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-folder"></i> Utiliser des namespaces avec Composer
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour organiser votre projet avec des namespaces et l'autoloading, ajoutez une section <code>autoload</code> dans <code>composer.json</code> pour spécifier le mapping des namespaces.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Configuration des namespaces dans composer.json</strong>
        <pre>
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
        </pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Après avoir configuré les namespaces, exécutez <code>composer dump-autoload</code> pour générer l'autoloader. Composer chargera automatiquement toutes les classes dans le namespace <code>App</code> depuis le dossier <code>src/</code>.
    </p>

    <!-- Exemple de structure de projet -->
    <h3 style="color: #1e88e5; font-weight: bold; font-size: 1.5em; margin-top: 15px;">
        Exemple de structure de projet avec namespaces
    </h3>
    <div class="example-box">
        <pre>
mon_projet/
├── src/
│   ├── Models/
│   │   └── Utilisateur.php
│   └── Controllers/
│       └── UtilisateurController.php
├── composer.json
└── index.php
        </pre>
    </div>

    <div class="example-box">
        <strong><i class="fas fa-code"></i> index.php avec autoloading</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">require_once</span> <span class="string">'vendor/autoload.php'</span>;

<span class="comment">// Utilisation des classes avec namespaces</span>
<span class="variable">$utilisateur</span> = <span class="keyword">new</span> <span class="variable">App\Models\Utilisateur</span>();

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un projet Composer :
            <ul>
                <li>Initialisez un projet avec <code>composer init</code> et configurez le fichier <code>composer.json</code>.</li>
                <li>Ajoutez une bibliothèque externe (par exemple, <code>monolog/monolog</code> pour la gestion des logs).</li>
                <li>Utilisez l'autoloader de Composer dans <code>index.php</code> pour accéder aux classes de Monolog.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Utilisation de namespaces avec Composer :
            <ul>
                <li>Créez un dossier <code>src/</code> et ajoutez-y deux dossiers <code>Models</code> et <code>Controllers</code> pour y placer les classes.</li>
                <li>Configurez <code>composer.json</code> pour utiliser <code>App\\</code> comme namespace principal et le mapper sur <code>src/</code>.</li>
                <li>Dans <code>index.php</code>, utilisez une classe dans <code>App\Models</code> sans inclure manuellement son fichier.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="unit-tests" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-vial"></i> Tests Unitaires avec PHPUnit en PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Les tests unitaires consistent à vérifier le comportement des unités de code (fonctions, méthodes, classes) pour s'assurer qu'elles fonctionnent comme prévu. PHPUnit est une bibliothèque pour écrire et exécuter des tests unitaires en PHP, largement utilisée pour automatiser les tests et assurer la qualité du code.
    </p>

    <!-- Installation de PHPUnit -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-download"></i> Installation de PHPUnit
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour installer PHPUnit, vous pouvez utiliser Composer. Ajoutez PHPUnit à votre projet en exécutant la commande suivante dans le terminal :
    </p>
    <div class="example-box">
        <pre><code>composer require --dev phpunit/phpunit</code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Cette commande installe PHPUnit en tant que dépendance de développement dans le dossier <code>vendor</code>. Vous pouvez ensuite exécuter PHPUnit depuis le dossier <code>vendor/bin/phpunit</code>.
    </p>

    <!-- Créer un Test Unitaire -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-pencil-alt"></i> Créer un Test Unitaire
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les tests unitaires en PHPUnit sont créés en écrivant des classes de test qui étendent <code>PHPUnit\Framework\TestCase</code>. Chaque méthode de test doit être précédée du préfixe <code>test</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Test d'une classe Calculatrice</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">class</span> <span class="variable">Calculatrice</span>
{
    <span class="comment">// Addition</span>
    <span class="keyword">public function</span> <span class="variable">additionner</span>(<span class="variable">$a</span>, <span class="variable">$b</span>)
    {
        <span class="keyword">return</span> <span class="variable">$a</span> + <span class="variable">$b</span>;
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Maintenant, créons un test pour cette classe <code>Calculatrice</code>. Le fichier de test peut être nommé <code>CalculatriceTest.php</code> et placé dans un dossier <code>tests/</code>.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Classe de test CalculatriceTest</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">use</span> <span class="variable">PHPUnit\Framework\TestCase</span>;

<span class="keyword">class</span> <span class="variable">CalculatriceTest</span> <span class="keyword">extends</span> <span class="variable">TestCase</span>
{
    <span class="comment">// Méthode de test pour l'addition</span>
    <span class="keyword">public function</span> <span class="variable">testAdditionner</span>()
    {
        <span class="variable">$calculatrice</span> = <span class="keyword">new</span> <span class="variable">Calculatrice</span>();
        <span class="variable">$resultat</span> = <span class="variable">$calculatrice</span>-><span class="function">additionner</span>(<span class="number">2</span>, <span class="number">3</span>);
        
        <span class="comment">// Vérification du résultat attendu</span>
        <span class="variable">$this</span>-><span class="function">assertEquals</span>(<span class="number">5</span>, <span class="variable">$resultat</span>);
    }
}

<span class="keyword">?&gt;</span>
        </pre>
    </div>

    <!-- Assertions de PHPUnit -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-check-circle"></i> Assertions de PHPUnit
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        PHPUnit fournit plusieurs méthodes d'assertions pour vérifier les résultats des tests :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><code>assertEquals(\$expected, \$actual)</code> : Vérifie que deux valeurs sont égales.</li>
        <li><code>assertTrue(\$condition)</code> : Vérifie qu'une condition est vraie.</li>
        <li><code>assertFalse(\$condition)</code> : Vérifie qu'une condition est fausse.</li>
        <li><code>assertNull(\$variable)</code> : Vérifie qu'une variable est nulle.</li>
        <li><code>assertInstanceOf(\$class, \$object)</code> : Vérifie qu'un objet est une instance d'une classe donnée.</li>
    </ul>

    <!-- Exécution des Tests -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play-circle"></i> Exécuter les Tests
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour exécuter les tests, lancez la commande suivante dans le terminal :
    </p>
    <div class="example-box">
        <pre><code>vendor/bin/phpunit tests/</code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        PHPUnit analysera les fichiers de test dans le dossier <code>tests</code> et exécutera les méthodes de test. Le résultat montre si les tests ont réussi ou échoué, avec des détails sur les erreurs.
    </p>

    <!-- Bonnes pratiques pour les tests unitaires -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lightbulb"></i> Bonnes pratiques pour les tests unitaires
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Nommer clairement</strong> : Utilisez des noms de méthodes de test descriptifs.</li>
        <li><strong>Tester une seule chose</strong> : Chaque méthode de test doit vérifier un aspect spécifique du code.</li>
        <li><strong>Utiliser des données de test variées</strong> : Testez différentes valeurs d'entrée, y compris les cas limites.</li>
        <li><strong>Indépendance des tests</strong> : Les tests ne doivent pas dépendre les uns des autres.</li>
    </ul>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Écrivez des tests unitaires pour la classe <code>Calculatrice</code> :
            <ul>
                <li>Ajoutez une méthode <code>soustaire</code> à la classe <code>Calculatrice</code> pour soustraire deux nombres.</li>
                <li>Créez un test pour cette méthode dans <code>CalculatriceTest</code>.</li>
                <li>Vérifiez que le test échoue si le résultat est incorrect, puis corrigez-le pour le faire passer.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez une classe et ses tests unitaires :
            <ul>
                <li>Créez une classe <code>Panier</code> avec des méthodes pour ajouter et retirer des articles, et pour calculer le total.</li>
                <li>Écrivez des tests pour vérifier que le total du panier est correct après plusieurs opérations d'ajout et de retrait d'articles.</li>
                <li>Utilisez différentes assertions pour vérifier que chaque étape fonctionne correctement.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="debugging" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-bug"></i> Débogage en PHP avec Xdebug
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Xdebug est une extension pour PHP qui facilite le débogage, le profilage et le traçage des scripts PHP. Il s'intègre aux IDEs et éditeurs de code comme PHPStorm et Visual Studio Code pour une expérience de débogage puissante et interactive.
    </p>

    <!-- Installation de Xdebug -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-download"></i> Installation de Xdebug
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour installer Xdebug, suivez les étapes ci-dessous. La méthode varie selon votre environnement (par exemple, Windows, macOS, ou Linux).
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li>Exécutez la commande suivante pour vérifier si Xdebug est déjà installé :
            <pre><code>php -m | grep xdebug</code></pre>
        </li>
        <li>Si Xdebug n'est pas installé, téléchargez et installez-le avec la commande suivante :
            <pre><code>pecl install xdebug</code></pre>
        </li>
        <li>Ajoutez la configuration dans le fichier <code>php.ini</code> pour activer Xdebug :
            <pre><code>
[xdebug]
zend_extension="xdebug.so"
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_host=127.0.0.1
xdebug.client_port=9003
            </code></pre>
        </li>
        <li>Redémarrez le serveur web (Apache, Nginx, ou autre) pour appliquer les changements.</li>
    </ol>

    <!-- Configuration de l'IDE pour le débogage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cogs"></i> Configuration de l'IDE pour le débogage
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Xdebug peut être utilisé avec plusieurs IDEs. Voici un exemple de configuration pour Visual Studio Code :
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li>Installez l'extension <strong>PHP Debug</strong> dans Visual Studio Code.</li>
        <li>Ajoutez une configuration de débogage dans <code>.vscode/launch.json</code> :
            <div class="example-box">
                <pre>
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Ecouter Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003
        }
    ]
}
                </pre>
            </div>
        </li>
        <li>Placez des points d'arrêt dans votre code et lancez le débogage en choisissant <em>Ecouter Xdebug</em> dans la barre de débogage.</li>
    </ol>

    <!-- Utilisation de Xdebug pour le débogage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play-circle"></i> Utilisation de Xdebug pour le débogage
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Avec Xdebug, vous pouvez utiliser des points d'arrêt, inspecter les variables, et contrôler l'exécution du code en pas à pas. Voici les fonctionnalités principales :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Points d'arrêt</strong> : Interrompez l'exécution du code à un point spécifique pour examiner l'état.</li>
        <li><strong>Exécution pas à pas</strong> : Avancez ligne par ligne dans le code pour comprendre le flux d'exécution.</li>
        <li><strong>Observation des variables</strong> : Inspectez les valeurs des variables à tout moment.</li>
        <li><strong>Appels de pile</strong> : Affichez la pile d'appels pour comprendre comment le code a atteint un certain point.</li>
    </ul>

    <!-- Exemple de débogage avec Xdebug -->
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Débogage d'une fonction avec Xdebug</strong>
        <pre>
<span class="keyword">&lt;?php</span>

<span class="keyword">function</span> <span class="variable">additionner</span>(<span class="variable">$a</span>, <span class="variable">$b</span>)
{
    <span class="keyword">return</span> <span class="variable">$a</span> + <span class="variable">$b</span>;
}

<span class="variable">$resultat</span> = <span class="variable">additionner</span>(<span class="number">5</span>, <span class="number">3</span>);
<span class="keyword">echo</span> <span class="string">"Le résultat est : "</span> . <span class="variable">$resultat</span>;

<span class="keyword">?&gt;</span>
        </pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Placez un point d'arrêt sur la ligne <code>$resultat = additionner(5, 3);</code> pour examiner la fonction <code>additionner</code> en temps réel. Vous pouvez inspecter les variables <code>$a</code>, <code>$b</code>, et <code>$resultat</code> dans l'IDE.
    </p>

    <!-- Profilage et traçage avec Xdebug -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-chart-line"></i> Profilage et traçage avec Xdebug
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Xdebug peut aussi être utilisé pour le profilage et le traçage de l'exécution du code, ce qui est utile pour détecter des problèmes de performance. Activez ces fonctionnalités en ajoutant les paramètres suivants dans <code>php.ini</code> :
    </p>
    <div class="example-box">
        <pre>
[xdebug]
xdebug.mode=trace,profile
xdebug.output_dir="/chemin/vers/dossier_de_sortie"
        </pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Les fichiers de traçage et de profil sont enregistrés dans le dossier spécifié, et vous pouvez les analyser avec des outils comme <a href="https://www.qcachegrind.org/" target="_blank">QCacheGrind</a> pour identifier les goulots d'étranglement dans le code.
    </p>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Déboguez une fonction :
            <ul>
                <li>Créez une fonction <code>multiplier</code> qui multiplie deux nombres et renvoie le résultat.</li>
                <li>Ajoutez un point d'arrêt sur la ligne de retour de la fonction pour inspecter les variables.</li>
                <li>Exécutez le débogage et vérifiez que la fonction retourne les valeurs attendues.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Analyse de performance :
            <ul>
                <li>Activez le profilage dans <code>php.ini</code> et exécutez un script avec une boucle complexe.</li>
                <li>Utilisez un outil de visualisation comme QCacheGrind pour analyser le fichier de profil généré.</li>
                <li>Identifiez les parties du code qui consomment le plus de temps et optimisez-les si possible.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="profiling" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-chart-bar"></i> Profiling PHP avec Blackfire
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Blackfire est un outil de profilage pour PHP qui permet de mesurer la performance des applications. Il fournit une vue détaillée des appels de fonctions, de la consommation de mémoire, et du temps d'exécution pour aider à identifier et résoudre les problèmes de performance.
    </p>

    <!-- Installation de Blackfire -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-download"></i> Installation de Blackfire
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        L'installation de Blackfire implique deux étapes : installer l'agent Blackfire et l'extension PHP Blackfire. Voici les étapes générales :
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li><strong>Installer l'agent Blackfire :</strong> Téléchargez et installez l'agent en suivant les instructions sur le site de <a href="https://blackfire.io/docs/up-and-running/installation" target="_blank">Blackfire</a>. Sur un système Linux ou macOS, exécutez :
            <pre><code>curl -sSL https://packages.blackfire.io/gpg.key | sudo apt-key add -</code></pre>
            <pre><code>echo "deb http://packages.blackfire.io/debian any main" | sudo tee /etc/apt/sources.list.d/blackfire.list</code></pre>
            <pre><code>sudo apt update && sudo apt install blackfire-agent</code></pre>
        </li>
        <li><strong>Installer l'extension PHP Blackfire :</strong> Utilisez PECL pour installer l'extension PHP :
            <pre><code>pecl install blackfire</code></pre>
        </li>
        <li><strong>Configurer Blackfire :</strong> Après l'installation, configurez l'agent et l'extension PHP en ajoutant vos identifiants (Blackfire Server ID et Server Token) dans les fichiers de configuration. Ces identifiants sont disponibles sur votre compte Blackfire.
            <pre><code>blackfire-agent -register</code></pre>
        </li>
    </ol>

    <!-- Configuration de l'extension Blackfire PHP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-cogs"></i> Configuration de l'extension PHP Blackfire
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Après l'installation, assurez-vous que l'extension est activée dans <code>php.ini</code> :
    </p>
    <div class="example-box">
        <pre>
[blackfire]
extension=blackfire.so
blackfire.agent_socket="tcp://127.0.0.1:8707"
        </pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Vérifiez que l'extension est bien installée en utilisant <code>php -m | grep blackfire</code>.
    </p>

    <!-- Profilage de l'application -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-chart-line"></i> Profilage de l'application avec Blackfire
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Blackfire vous permet de lancer des profils à partir de l'interface en ligne de commande, d'un navigateur ou directement dans l'IDE (si supporté).
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li><strong>Profilage avec la ligne de commande :</strong> Utilisez la commande suivante pour profiler une page de votre application :
            <pre><code>blackfire curl http://localhost/votre_application.php</code></pre>
            Cette commande exécute la page et envoie les données de profil à votre tableau de bord Blackfire.
        </li>
        <li><strong>Profilage dans le navigateur :</strong> Installez l'extension Blackfire pour Chrome ou Firefox. Activez l'extension sur une page de votre application et cliquez sur le bouton pour lancer le profilage. Le profil sera généré et disponible dans le tableau de bord Blackfire.
        </li>
    </ol>

    <!-- Lecture des résultats de profilage -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-file-alt"></i> Lecture des résultats de profilage
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une fois le profil généré, Blackfire affiche des informations sur les performances, incluant :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Temps d'exécution</strong> : Durée totale de l'exécution de chaque fonction.</li>
        <li><strong>Consommation de mémoire</strong> : Mémoire utilisée par chaque fonction.</li>
        <li><strong>Requêtes de base de données</strong> : Analyse des requêtes exécutées et de leur impact sur les performances.</li>
        <li><strong>Arbre d'appels</strong> : Vue graphique de la chaîne d'appels, indiquant où le code passe le plus de temps.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        Ces informations vous aident à identifier les fonctions ou les requêtes lentes et à optimiser le code en conséquence. Blackfire fournit des recommandations pour vous guider dans l'amélioration des performances.
    </p>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Profilage d'une fonction :
            <ul>
                <li>Créez un script PHP contenant une fonction qui exécute une boucle de calcul complexe.</li>
                <li>Lancez le profilage de cette fonction avec Blackfire et analysez le rapport pour identifier les points à optimiser.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Analyse d'un projet complet :
            <ul>
                <li>Activez le profilage pour une page d'application web avec plusieurs requêtes de base de données.</li>
                <li>Utilisez les informations de Blackfire pour identifier les requêtes lentes et optimiser les appels SQL.</li>
                <li>Relancez le profilage pour voir l'impact des améliorations sur les performances globales.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="web-hosting" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-server"></i> Hébergement Web : Les plus grands hébergeurs et hébergement maison
    </h1>

    <!-- Grands hébergeurs -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-building"></i> Les plus grands hébergeurs
    </h2>
    
    <!-- Bluehost -->
    <div class="example-box" style="margin-top: 20px;">
        <strong><i class="fas fa-code"></i> Bluehost</strong>
        <p style="font-size: 1.1em; color: #333;">
            <strong>Description</strong> : L'un des hébergeurs les plus populaires, recommandé par WordPress.
            <br><strong>Types d'hébergement</strong> : Partagé, VPS, dédié, WordPress, WooCommerce.
        </p>
        <ul style="font-size: 1.1em; color: #333;">
            <li><strong>Performances</strong> : Haute disponibilité et rapidité de chargement.</li>
            <li><strong>Simplicité</strong> : Interface conviviale avec installateur CMS en un clic.</li>
            <li><strong>Support</strong> : Assistance 24/7.</li>
            <li><strong>Tarifs</strong> : À partir de 2,95 $/mois.</li>
        </ul>
    </div>
    
    <!-- HostGator -->
    <div class="example-box" style="margin-top: 20px;">
        <strong><i class="fas fa-code"></i> HostGator</strong>
        <p style="font-size: 1.1em; color: #333;">
            <strong>Description</strong> : Reconnu pour ses tarifs compétitifs et sa fiabilité.
            <br><strong>Types d'hébergement</strong> : Partagé, VPS, dédié, WordPress, revendeur.
        </p>
        <ul style="font-size: 1.1em; color: #333;">
            <li><strong>Disponibilité</strong> : Garantie de disponibilité de 99,9 %.</li>
            <li><strong>Simplicité</strong> : Interface intuitive et options de mise à niveau simples.</li>
            <li><strong>Support</strong> : Assistance 24/7 via chat et téléphone.</li>
            <li><strong>Tarifs</strong> : À partir de 2,75 $/mois.</li>
        </ul>
    </div>

    <!-- SiteGround -->
    <div class="example-box" style="margin-top: 20px;">
        <strong><i class="fas fa-code"></i> SiteGround</strong>
        <p style="font-size: 1.1em; color: #333;">
            <strong>Description</strong> : Hébergeur performant et recommandé pour WordPress.
            <br><strong>Types d'hébergement</strong> : Partagé, WordPress, WooCommerce, Cloud.
        </p>
        <ul style="font-size: 1.1em; color: #333;">
            <li><strong>Performances</strong> : Serveurs rapides avec SSD et CDN gratuit.</li>
            <li><strong>Sécurité</strong> : Certificats SSL gratuits et protection anti-bot.</li>
            <li><strong>Support</strong> : Assistance 24/7 avec support WordPress.</li>
            <li><strong>Tarifs</strong> : À partir de 3,99 $/mois.</li>
        </ul>
    </div>

    <!-- Hébergement maison -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-home"></i> Héberger un site Web chez soi
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Héberger un site chez soi peut être intéressant pour apprendre ou éviter des frais d'hébergement, mais nécessite un équipement et des configurations spécifiques. Voici les étapes générales :
    </p>
    <ol style="font-size: 1.1em; color: #333;">
        <li><strong>Installer un serveur Web</strong> :
            <ul>
                <li>Installez un serveur comme Apache ou Nginx.</li>
                <li>Configurez PHP et MySQL si nécessaire (pour une application dynamique).</li>
            </ul>
        </li>
        <li><strong>Configurer un nom de domaine</strong> :
            <ul>
                <li>Obtenez un nom de domaine et pointez-le vers l'IP de votre connexion internet.</li>
                <li>Utilisez un service DNS dynamique si votre IP change fréquemment (ex. No-IP).</li>
            </ul>
        </li>
        <li><strong>Ouvrir les ports réseau</strong> :
            <ul>
                <li>Accédez au panneau de configuration de votre routeur.</li>
                <li>Ouvrez le port 80 pour HTTP et le port 443 pour HTTPS (SSL).</li>
            </ul>
        </li>
        <li><strong>Sécuriser le serveur</strong> :
            <ul>
                <li>Protégez le serveur avec un pare-feu et configurez des sauvegardes régulières.</li>
                <li>Utilisez des certificats SSL pour sécuriser les connexions (via Let's Encrypt, par exemple).</li>
            </ul>
        </li>
    </ol>

    <!-- Exercice -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Hébergez un site Web localement :
            <ul>
                <li>Installez XAMPP (Windows) ou MAMP (macOS) pour un environnement local.</li>
                <li>Configurez un site simple en HTML ou PHP et accédez-y via votre IP locale.</li>
                <li>Explorez les configurations de base d'Apache ou Nginx.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="docker" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fab fa-docker"></i> Docker : Créer un environnement de développement PHP
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        Docker permet de conteneuriser les applications, c’est-à-dire de les encapsuler dans un environnement isolé contenant toutes leurs dépendances. Cela facilite le déploiement, le partage et la reproduction des environnements sur différents systèmes.
    </p>

    <!-- Installation de Docker -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-download"></i> Installation de Docker
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour installer Docker, téléchargez Docker Desktop depuis <a href="https://www.docker.com/products/docker-desktop/" target="_blank">le site officiel</a> pour Windows ou macOS. Sous Linux, exécutez les commandes suivantes :
    </p>
    <div class="example-box">
        <pre><code>sudo apt update
sudo apt install docker.io
sudo systemctl enable --now docker</code></pre>
    </div>

    <!-- Structure d'un Dockerfile pour PHP -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-file-alt"></i> Création d'un Dockerfile pour une application PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Un Dockerfile est un script qui définit l'environnement du conteneur, incluant le système de base, les dépendances et les commandes de configuration. Voici un exemple de Dockerfile pour une application PHP.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Dockerfile pour PHP et Apache</strong>
        <pre>
<span class="comment"># Utiliser une image PHP avec Apache</span>
<span class="keyword">FROM</span> php:8.0-apache

<span class="comment"># Installer des extensions PHP</span>
<span class="keyword">RUN</span> docker-php-ext-install mysqli pdo pdo_mysql

<span class="comment"># Copier les fichiers du projet vers le répertoire du serveur</span>
<span class="keyword">COPY</span> . /var/www/html

<span class="comment"># Configurer les permissions et le dossier racine d'Apache</span>
<span class="keyword">RUN</span> chown -R www-data:www-data /var/www/html

<span class="comment"># Exposer le port 80 pour l'accès HTTP</span>
<span class="keyword">EXPOSE</span> 80
        </pre>
    </div>

    <!-- Configuration d'un fichier docker-compose.yml -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-layer-group"></i> Utilisation de Docker Compose pour orchestrer les services
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Docker Compose permet de gérer plusieurs conteneurs avec un seul fichier de configuration <code>docker-compose.yml</code>. Voici un exemple de configuration pour une application PHP avec une base de données MySQL.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : docker-compose.yml</strong>
        <pre>
<span class="comment"># Fichier de configuration pour Docker Compose</span>
<span class="keyword">version</span>: '3.8'

<span class="keyword">services</span>:
  <span class="variable">php-apache</span>:
    <span class="keyword">build</span>: .
    <span class="keyword">ports</span>:
      - "80:80"
    <span class="keyword">volumes</span>:
      - .:/var/www/html
    <span class="keyword">depends_on</span>:
      - db

  <span class="variable">db</span>:
    <span class="keyword">image</span>: mysql:5.7
    <span class="keyword">environment</span>:
      <span class="variable">MYSQL_ROOT_PASSWORD</span>: example
      <span class="variable">MYSQL_DATABASE</span>: mydatabase
      <span class="variable">MYSQL_USER</span>: user
      <span class="variable">MYSQL_PASSWORD</span>: password
    <span class="keyword">volumes</span>:
      - db_data:/var/lib/mysql

<span class="keyword">volumes</span>:
  <span class="variable">db_data</span>:
        </pre>
    </div>

    <!-- Démarrage des conteneurs -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-play-circle"></i> Démarrer et gérer les conteneurs
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Une fois les fichiers Dockerfile et docker-compose.yml configurés, utilisez Docker Compose pour construire et démarrer les conteneurs :
    </p>
    <div class="example-box">
        <pre><code>docker-compose up -d</code></pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        La commande <code>-d</code> démarre les conteneurs en mode détaché. Accédez ensuite à votre application en visitant <code>http://localhost</code>.
    </p>

    <!-- Commandes Docker utiles -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-terminal"></i> Commandes Docker utiles
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><code>docker-compose up</code> : Démarre les conteneurs définis dans docker-compose.yml.</li>
        <li><code>docker-compose down</code> : Arrête et supprime tous les conteneurs.</li>
        <li><code>docker-compose build</code> : Reconstruit les images pour les conteneurs.</li>
        <li><code>docker ps</code> : Liste tous les conteneurs en cours d'exécution.</li>
        <li><code>docker exec -it &lt;container_name&gt; /bin/bash</code> : Accède au shell d'un conteneur pour des opérations en ligne de commande.</li>
    </ul>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Créez un environnement PHP avec Docker :
            <ul>
                <li>Créez un <code>Dockerfile</code> pour une application PHP basique.</li>
                <li>Configurez un conteneur Apache qui affiche "Hello, Docker!".</li>
                <li>Utilisez <code>docker-compose</code> pour automatiser le démarrage des services.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Ajouter une base de données MySQL :
            <ul>
                <li>Modifiez le fichier <code>docker-compose.yml</code> pour inclure un conteneur MySQL.</li>
                <li>Testez la connexion entre PHP et MySQL en créant un script de connexion simple.</li>
                <li>Utilisez <code>docker exec</code> pour accéder à la base de données et vérifier les tables.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="ci-cd" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-code-branch"></i> Intégration Continue et Déploiement Continu (CI/CD)
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        L'Intégration Continue (CI) et le Déploiement Continu (CD) sont des pratiques de développement qui automatisent les tests et le déploiement du code. Elles permettent des livraisons plus rapides et sûres, en détectant les erreurs de code et en intégrant automatiquement les changements dans l'environnement de production.
    </p>

    <!-- Principaux outils CI/CD -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-tools"></i> Outils de CI/CD populaires
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Voici quelques outils populaires pour mettre en place un pipeline CI/CD :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>GitHub Actions</strong> : Intégré à GitHub, idéal pour les projets open source et les intégrations simples.</li>
        <li><strong>GitLab CI/CD</strong> : Solution complète pour l'intégration continue et le déploiement, avec un excellent support pour Docker.</li>
        <li><strong>Jenkins</strong> : Serveur CI/CD open-source largement utilisé, adaptable aux grands projets.</li>
        <li><strong>Travis CI</strong> : Outil CI/CD populaire pour les projets open source.</li>
        <li><strong>CircleCI</strong> : Solution CI/CD flexible, particulièrement puissante avec Docker.</li>
    </ul>

    <!-- Configuration de GitHub Actions -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fab fa-github"></i> Exemple de configuration CI/CD avec GitHub Actions
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        GitHub Actions vous permet de définir des workflows pour automatiser les tests et le déploiement. Créez un fichier <code>.yml</code> dans <code>.github/workflows</code> pour configurer votre pipeline.
    </p>
    <div class="example-box">
        <strong><i class="fas fa-code"></i> Exemple : Workflow CI/CD pour une application PHP</strong>
        <pre>
<span class="comment"># .github/workflows/ci.yml</span>
<span class="keyword">name</span>: CI/CD Pipeline

<span class="keyword">on</span>:
  <span class="variable">push</span>:
    <span class="keyword">branches</span>: [main]
  <span class="variable">pull_request</span>:
    <span class="keyword">branches</span>: [main]

<span class="keyword">jobs</span>:
  <span class="variable">build</span>:
    <span class="keyword">runs-on</span>: ubuntu-latest

    <span class="keyword">steps</span>:
    - <span class="variable">name</span>: Checkout code
      <span class="keyword">uses</span>: actions/checkout@v2

    - <span class="variable">name</span>: Setup PHP
      <span class="keyword">uses</span>: shivammathur/setup-php@v2
      <span class="keyword">with</span>:
        <span class="variable">php-version</span>: '8.0'

    - <span class="variable">name</span>: Install dependencies
      <span class="keyword">run</span>: composer install

    - <span class="variable">name</span>: Run tests
      <span class="keyword">run</span>: phpunit --coverage-text

  <span class="variable">deploy</span>:
    <span class="keyword">runs-on</span>: ubuntu-latest
    <span class="keyword">needs</span>: build
    <span class="keyword">steps</span>:
    - <span class="variable">name</span>: Deploy to server
      <span class="keyword">run</span>: |
        scp -r ./src user@your-server:/path/to/deploy
        ssh user@your-server 'cd /path/to/deploy && php artisan migrate'
        </pre>
    </div>
    <p style="font-size: 1.1em; color: #333;">
        Dans cet exemple, le workflow exécute les étapes de test lors d'un <strong>push</strong> ou d'une <strong>pull request</strong> sur la branche <code>main</code>. Si les tests réussissent, le déploiement vers le serveur est exécuté.
    </p>

    <!-- Structure d'un pipeline CI/CD -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-project-diagram"></i> Structure d'un pipeline CI/CD
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Un pipeline CI/CD se compose généralement des étapes suivantes :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Build</strong> : Compilation du code et installation des dépendances.</li>
        <li><strong>Tests</strong> : Exécution de tests automatisés pour valider la fonctionnalité.</li>
        <li><strong>Analyse de code</strong> : Vérification de la qualité du code avec des outils comme PHP_CodeSniffer.</li>
        <li><strong>Déploiement</strong> : Déploiement automatique vers l'environnement de production si toutes les étapes réussissent.</li>
    </ul>

    <!-- Bonnes pratiques pour CI/CD -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-lightbulb"></i> Bonnes pratiques pour CI/CD
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Utiliser des branches de développement</strong> : Travaillez sur des branches distinctes et fusionnez-les dans la branche principale uniquement après validation.</li>
        <li><strong>Automatiser les tests</strong> : Testez toutes les fonctionnalités pour éviter les régressions.</li>
        <li><strong>Utiliser le déploiement progressif</strong> : Mettez en place des déploiements progressifs ou canary pour éviter les pannes en production.</li>
        <li><strong>Surveiller les erreurs</strong> : Utilisez des outils de monitoring pour détecter et corriger rapidement les erreurs en production.</li>
    </ul>

    <!-- Exercice 1 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 1 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Mettre en place un pipeline CI pour tester une application PHP :
            <ul>
                <li>Créez un fichier de configuration GitHub Actions pour exécuter les tests automatisés.</li>
                <li>Configurez les étapes de <strong>build</strong> et de <strong>test</strong> pour valider chaque <code>commit</code> sur la branche principale.</li>
                <li>Vérifiez que les tests s'exécutent et que les résultats apparaissent dans la section Actions de votre dépôt GitHub.</li>
            </ul>
        </p>
    </div>

    <!-- Exercice 2 -->
    <div class="example-box" style="background-color: #fff3cd; border-left: 4px solid #ffeb3b; margin-top: 20px;">
        <strong><i class="fas fa-pencil-alt" style="color: #ff9800;"></i> Exercice 2 :</strong>
        <p><i class="fas fa-lightbulb" style="color: #ffeb3b;"></i> Ajouter un déploiement automatique :
            <ul>
                <li>Ajoutez une étape de déploiement dans le fichier <code>ci.yml</code> pour copier le code sur un serveur distant.</li>
                <li>Utilisez <code>ssh</code> et <code>scp</code> pour déployer automatiquement le code après validation des tests.</li>
                <li>Testez le pipeline complet en effectuant un <code>push</code> vers la branche principale.</li>
            </ul>
        </p>
    </div>
</div>
<div class="content-section" id="php-updates" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-newspaper"></i> Dernières actualités PHP, fonctionnalités dépréciées et nouveautés
    </h1>

    <!-- Dernières actualités -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-clock"></i> Dernières actualités PHP
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>PHP 8.2</strong> : Sortie le 8 décembre 2022, cette version introduit des fonctionnalités telles que les classes en lecture seule, les types disjonctifs normaux (DNF), et des améliorations de performance grâce à l'optimisation du moteur JIT (Just-In-Time). <a href="https://www.hostinger.fr/blog/php-8-2" target="_blank">En savoir plus</a>.</li>
        <li><strong>PHP 8.3</strong> : Prévue pour le 8 novembre 2024, cette version apportera des optimisations de performance supplémentaires ainsi que des améliorations en matière de sécurité.</li>
    </ul>

    <!-- Fonctionnalités dépréciées -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-exclamation-triangle"></i> Fonctionnalités dépréciées
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Avec chaque nouvelle version, certaines fonctionnalités sont dépréciées pour encourager l'utilisation de pratiques plus modernes et sécurisées :
    </p>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>PHP 8.2</strong> :
            <ul>
                <li>Dépréciation des propriétés dynamiques.</li>
                <li>Dépréciation des fonctions <code>utf8_encode()</code> et <code>utf8_decode()</code>.</li>
                <li>Dépréciation de l'interpolation de chaînes avec <code>${}</code>. <a href="https://kinsta.com/fr/blog/php-8-2/" target="_blank">En savoir plus</a>.</li>
            </ul>
        </li>
        <li><strong>PHP 8.3</strong> :
            <ul>
                <li>Dépréciation de l'utilisation des opérateurs d'incrémentation/décrémentation (<code>++</code>/<code>--</code>) sur des chaînes non numériques.</li>
                <li>Dépréciation de l'appel de <code>get_class()</code> et <code>get_parent_class()</code> sans arguments. <a href="https://www.php.net/manual/fr/migration83.deprecated.php" target="_blank">En savoir plus</a>.</li>
            </ul>
        </li>
    </ul>

    <!-- Nouveautés appréciées -->
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-top: 20px;">
        <i class="fas fa-thumbs-up"></i> Nouveautés appréciées
    </h2>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Classes en lecture seule</strong> : Introduites dans PHP 8.2, elles permettent de déclarer des classes dont les propriétés ne peuvent être modifiées après l'initialisation, renforçant ainsi l'immuabilité des objets. <a href="https://www.hostinger.fr/blog/php-8-2" target="_blank">En savoir plus</a>.</li>
        <li><strong>Types disjonctifs normaux (DNF)</strong> : Cette fonctionnalité permet de combiner des types union et intersection, offrant une plus grande flexibilité dans la définition des types. <a href="https://kinsta.com/fr/blog/php-8-2/" target="_blank">En savoir plus</a>.</li>
        <li><strong>Optimisation du moteur JIT</strong> : Améliorée dans PHP 8.2, cette optimisation offre des gains de performance significatifs pour certaines applications. <a href="https://www.a-a-hebergement.com/php-8-2-nouveautes-php-8-2-wordpress-php-8-2-performance-php-8-2-opcache-php-8-2-mise-a-jour-php-wordpress-a-a-hebergement-com-php-8-2-hebergement-wordpress-php-8-2-optimisation-wordpress-php-8-2-comp/" target="_blank">En savoir plus</a>.</li>
    </ul>

    <p style="font-size: 1.1em; color: #333;">
        Il est recommandé aux développeurs de se tenir informés des évolutions du langage et de mettre à jour leurs applications pour bénéficier des améliorations et maintenir un haut niveau de sécurité.
    </p>
</div>


    </div>
</div>


<!-- Bootstrap et jQuery pour le fonctionnement des modals -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
