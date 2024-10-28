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
    </div>
    <button class="dropdown-btn"><i class="fas fa-cogs"></i> Fonctions
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#functions">Déclaration de Fonctions</a>
        <a href="#params">Paramètres et Retour</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-database"></i> Gestion des Données
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#arrays">Tableaux</a>
        <a href="#sessions">Sessions</a>
        <a href="#cookies">Cookies</a>
        <a href="#file-handling">Gestion des Fichiers</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-lock"></i> Sécurité
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#input-validation">Validation des Entrées</a>
        <a href="#passwords">Hashage des mots de passe</a>
        <a href="#sql-injection">Protection contre les injections SQL</a>
    </div>
</div>

<!-- Contenu de la page -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">
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

    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <code>
            &lt;?php<br>
            echo "Bonjour, Monde !";<br>
            ?&gt;
        </code>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Cette syntaxe permet d'exécuter des scripts côté serveur pour générer du contenu avant que la page ne soit envoyée au navigateur de l'utilisateur. La commande <span style="color: #d32f2f; font-weight: bold;">echo</span>, très utilisée, permet d'afficher du texte ou des variables directement dans le document HTML.
    </p>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#syntaxModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="variables" style="background-color: #f9fafb; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Variables en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En <span style="color: #1e88e5; font-weight: bold;">PHP</span>, une variable est un conteneur pour stocker des valeurs de différents types. Toutes les variables en PHP commencent par le symbole <strong style="color: #d32f2f;">$</strong>, suivi d'un nom choisi par le développeur. PHP est un langage de typage dynamique, ce qui signifie que vous n'avez pas besoin de déclarer explicitement le type de chaque variable.
    </p>
    
    <p style="font-size: 1.1em; color: #333;">
        Voici des exemples d'utilisation des variables pour divers types de données :
    </p>

    <!-- Exemple de variables avec différents types -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong>Exemple de types de données</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$nom = "Abdurahman";         // Chaîne de caractères
$age = 30;                   // Entier
$poids = 72.5;               // Flottant
$estConnecte = true;         // Booléen

echo $nom;
?&gt;
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        En PHP, les variables peuvent contenir des <strong style="color: #d32f2f;">chaînes de caractères</strong>, des <strong style="color: #d32f2f;">nombres entiers</strong>, des <strong style="color: #d32f2f;">flottants</strong> (décimaux), et des <strong style="color: #d32f2f;">booléens</strong> (vrai/faux).
    </p>

    <!-- Exemple de variables avec concaténation -->
    <div style="background-color: #f1f8e9; padding: 15px; border-left: 4px solid #388e3c; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong>Exemple de concaténation de chaînes</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$prenom = "Jean";
$nom = "Dupont";
$age = 25;

echo "Bonjour, je m'appelle " . $prenom . " " . $nom . " et j'ai " . $age . " ans.";
?&gt;
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        PHP permet la <strong style="color: #d32f2f;">concaténation</strong> de chaînes de caractères en utilisant le point <strong style="color: #d32f2f;">.</strong>. Cette technique est utile pour assembler plusieurs chaînes de texte ou pour afficher des valeurs variables dans des phrases complètes.
    </p>

    <!-- Exemple de variables avec tableaux -->
    <div style="background-color: #e3f2fd; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong>Exemple de tableaux (array)</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$fruits = array("pomme", "banane", "cerise");
echo "Le premier fruit est " . $fruits[0];
?&gt;
        </pre>
    </div>

    <p style="font-size: 1.1em; color: #333;">
        Les <strong style="color: #d32f2f;">tableaux</strong> sont des structures de données qui permettent de stocker plusieurs valeurs sous une même variable. En PHP, ils peuvent être indexés numériquement ou de manière associative.
    </p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#variableModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="types" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Types de Données en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        <span style="color: #1e88e5; font-weight: bold;">PHP</span> prend en charge divers types de données, chacun étant utile pour manipuler et stocker des informations spécifiques. Voici les principaux types de données :
    </p>

    <!-- Exemple d'Entier -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong style="color: #1e88e5;">Entiers (Integer)</strong> :
        <p>Un entier est un nombre sans décimales, positif ou négatif.</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$age = 30;
echo "L'âge est " . $age;
?&gt;
        </pre>
    </div>

    <!-- Exemple de Flottant -->
    <div style="background-color: #f1f8e9; padding: 15px; border-left: 4px solid #388e3c; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong style="color: #388e3c;">Flottants (Float)</strong> :
        <p>Un nombre à virgule flottante, ou flottant, représente un nombre décimal.</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$prix = 19.99;
echo "Le prix est de " . $prix . " euros";
?&gt;
        </pre>
    </div>

    <!-- Exemple de Chaîne de caractères -->
    <div style="background-color: #e3f2fd; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong style="color: #1e88e5;">Chaînes de caractères (String)</strong> :
        <p>Une chaîne de caractères représente une séquence de caractères, utilisée pour le texte.</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$nom = "Jean Dupont";
echo "Bonjour, " . $nom;
?&gt;
        </pre>
    </div>

    <!-- Exemple de Booléen -->
    <div style="background-color: #fff3e0; padding: 15px; border-left: 4px solid #fb8c00; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong style="color: #fb8c00;">Booléens (Boolean)</strong> :
        <p>Un booléen peut être soit <strong>true</strong> (vrai) soit <strong>false</strong> (faux), souvent utilisé pour les conditions.</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$estConnecte = true;
if ($estConnecte) {
    echo "L'utilisateur est connecté.";
} else {
    echo "L'utilisateur n'est pas connecté.";
}
?&gt;
        </pre>
    </div>

    <!-- Exemple de Tableaux -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong style="color: #1e88e5;">Tableaux (Array)</strong> :
        <p>Un tableau peut stocker plusieurs valeurs sous une seule variable, indexées numériquement ou par clé.</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$fruits = array("pomme", "banane", "cerise");
echo "Le premier fruit est " . $fruits[0];
?&gt;
        </pre>
    </div>

    <!-- Exemple d'Objets -->
    <div style="background-color: #f9fbe7; padding: 15px; border-left: 4px solid #cddc39; margin-top: 15px; margin-bottom: 15px; color: #333;">
        <strong style="color: #cddc39;">Objets (Object)</strong> :
        <p>Un objet est une instance d'une classe, qui peut contenir des propriétés et des méthodes.</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
class Personne {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }
}

$personne = new Personne("Alice", 25);
echo $personne->nom . " a " . $personne->age . " ans.";
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#typesModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="operateurs" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Opérateurs en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        PHP propose plusieurs types d'opérateurs permettant de manipuler des données et de contrôler le flux d'exécution. Voici les principaux types d'opérateurs :
    </p>

    <!-- Liste des types d'opérateurs -->
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong style="color: #d32f2f;">Opérateurs arithmétiques</strong> : utilisés pour les opérations mathématiques (addition, soustraction, multiplication, etc.).</li>
        <li><strong style="color: #1e88e5;">Opérateurs de comparaison</strong> : utilisés pour comparer deux valeurs (égalité, différence, supérieur, inférieur, etc.).</li>
        <li><strong style="color: #388e3c;">Opérateurs logiques</strong> : utilisés pour combiner des conditions (ET, OU, NON).</li>
        <li><strong style="color: #fb8c00;">Opérateurs d'affectation</strong> : utilisés pour assigner des valeurs aux variables, souvent en combinant une opération.</li>
    </ul>

    <!-- Exemple d'opérateurs arithmétiques -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple d'Opérateurs Arithmétiques</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$a = 10;
$b = 5;
echo $a + $b; // Addition
echo $a - $b; // Soustraction
echo $a * $b; // Multiplication
echo $a / $b; // Division
echo $a % $b; // Modulo
?&gt;
        </pre>
    </div>

    <!-- Exemple d'opérateurs de comparaison -->
    <div style="background-color: #f1f8e9; padding: 15px; border-left: 4px solid #388e3c; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #388e3c;">Exemple d'Opérateurs de Comparaison</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$x = 10;
$y = 20;
echo $x == $y; // Égalité
echo $x != $y; // Différence
echo $x &gt; $y; // Supérieur
echo $x &lt; $y; // Inférieur
echo $x &gt;= $y; // Supérieur ou égal
echo $x &lt;= $y; // Inférieur ou égal
?&gt;
        </pre>
    </div>

    <!-- Exemple d'opérateurs logiques -->
    <div style="background-color: #fff3e0; padding: 15px; border-left: 4px solid #fb8c00; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #fb8c00;">Exemple d'Opérateurs Logiques</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$condition1 = true;
$condition2 = false;
echo $condition1 && $condition2; // ET logique
echo $condition1 || $condition2; // OU logique
echo !$condition1; // NON logique
?&gt;
        </pre>
    </div>

    <!-- Exemple d'opérateurs d'affectation -->
    <div style="background-color: #e3f2fd; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple d'Opérateurs d'Affectation</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$z = 10;
$z += 5; // Equivalent à $z = $z + 5
$z -= 3; // Equivalent à $z = $z - 3
$z *= 2; // Equivalent à $z = $z * 2
$z /= 2; // Equivalent à $z = $z / 2
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#operateursModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>



<div class="content-section" id="functions" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Déclaration de Fonctions en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les fonctions en <span style="color: #1e88e5; font-weight: bold;">PHP</span> permettent de structurer et de réutiliser du code. Elles permettent de diviser un programme en blocs logiques, chacun effectuant une tâche spécifique, ce qui améliore la lisibilité et la maintenabilité du code.
    </p>
    
    <!-- Exemple de fonction simple -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple de fonction simple</strong> :
        <p>Voici une fonction qui affiche un message de bienvenue :</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
function salutation() {
    echo "Bonjour, bienvenue sur notre site !";
}

salutation(); // Appel de la fonction
?&gt;
        </pre>
    </div>

    <!-- Exemple de fonction avec paramètres -->
    <div style="background-color: #f1f8e9; padding: 15px; border-left: 4px solid #388e3c; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #388e3c;">Exemple de fonction avec paramètres</strong> :
        <p>Les fonctions peuvent accepter des <strong style="color: #d32f2f;">paramètres</strong> pour traiter des valeurs différentes :</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
function salutation($nom) {
    echo "Bonjour, " . $nom . " !";
}

salutation("Abdurahman"); // Appel de la fonction avec un paramètre
?&gt;
        </pre>
    </div>

    <!-- Exemple de fonction avec valeur de retour -->
    <div style="background-color: #fff3e0; padding: 15px; border-left: 4px solid #fb8c00; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #fb8c00;">Exemple de fonction avec valeur de retour</strong> :
        <p>Les fonctions peuvent renvoyer une <strong style="color: #d32f2f;">valeur</strong> avec l'instruction <code>return</code> :</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
function addition($a, $b) {
    return $a + $b;
}

$resultat = addition(5, 10); // Appel de la fonction et récupération du résultat
echo "Le résultat est : " . $resultat;
?&gt;
        </pre>
    </div>

    <!-- Exemple de fonction avec valeurs par défaut -->
    <div style="background-color: #e3f2fd; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple de fonction avec valeurs par défaut</strong> :
        <p>Il est possible de définir des <strong style="color: #d32f2f;">valeurs par défaut</strong> pour les paramètres :</p>
        <pre style="color: #333; font-size: 1em;">
&lt;?php
function salutation($nom = "invité") {
    echo "Bonjour, " . $nom . " !";
}

salutation(); // Utilise la valeur par défaut "invité"
salutation("Marie"); // Remplace la valeur par défaut par "Marie"
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#functionModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="params" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Paramètres et Valeurs de Retour en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En <span style="color: #1e88e5; font-weight: bold;">PHP</span>, les fonctions peuvent accepter des <strong style="color: #d32f2f;">paramètres</strong> pour recevoir des valeurs et renvoyer un <strong style="color: #d32f2f;">résultat</strong> avec <code>return</code>.
    </p>

    <!-- Exemple de fonction avec paramètres et retour -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
function multiplier($a, $b) {
    return $a * $b;
}

$resultat = multiplier(4, 5);
echo "Le résultat de la multiplication est : " . $resultat;
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paramsModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


        <!-- Gestion des Données -->
        <div class="content-section" id="arrays" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Tableaux en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong style="color: #1e88e5;">tableaux</strong> en PHP permettent de stocker plusieurs valeurs sous une seule variable. Ils peuvent être numérotés (indexés) ou associatifs (avec des clés).
    </p>

    <!-- Exemple de tableau indexé -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Tableau indexé</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$fruits = array("Pomme", "Banane", "Cerise");
echo "Le premier fruit est : " . $fruits[0];
?&gt;
        </pre>
    </div>

    <!-- Exemple de tableau associatif -->
    <div style="background-color: #f1f8e9; padding: 15px; border-left: 4px solid #388e3c; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #388e3c;">Tableau associatif</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$personne = array("nom" => "Dupont", "age" => 30);
echo "Nom : " . $personne["nom"];
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#arrayModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="sessions" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Sessions en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong style="color: #1e88e5;">sessions</strong> permettent de stocker des informations sur l'utilisateur pendant toute la durée de sa visite. Elles sont utiles pour gérer les données sensibles.
    </p>

    <!-- Exemple de gestion de session -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
session_start(); // Démarrer la session
$_SESSION["utilisateur"] = "Dupont";
echo "Utilisateur connecté : " . $_SESSION["utilisateur"];
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sessionModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="cookies" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Cookies en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Les <strong style="color: #1e88e5;">cookies</strong> sont utilisés pour stocker des informations sur le navigateur de l'utilisateur, afin de les conserver entre les sessions de navigation.
    </p>

    <!-- Exemple de création et d'accès à un cookie -->
    <div style="background-color: #e8f4fc; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
// Définir un cookie
setcookie("utilisateur", "Dupont", time() + (86400 * 30), "/"); // 86400 = 1 jour

// Accéder au cookie
if(isset($_COOKIE["utilisateur"])) {
    echo "Utilisateur : " . $_COOKIE["utilisateur"];
} else {
    echo "Cookie 'utilisateur' non défini.";
}
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cookieModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>

<div class="content-section" id="file-management" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Gestion des Fichiers en PHP
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, la gestion des fichiers permet de créer, lire, écrire et supprimer des fichiers directement depuis votre code. Cette fonctionnalité est utile pour stocker des informations externes sans utiliser une base de données.
    </p>
    
    <h3 style="color: #388e3c; font-weight: bold; margin-top: 15px;">Principales Fonctions de Gestion des Fichiers :</h3>
    <ul style="color: #333; font-size: 1.1em;">
        <li><strong>fopen :</strong> Ouvre un fichier en lecture, écriture ou ajout.</li>
        <li><strong>fwrite :</strong> Écrit du contenu dans un fichier ouvert.</li>
        <li><strong>fread :</strong> Lit le contenu d’un fichier.</li>
        <li><strong>fclose :</strong> Ferme le fichier après usage pour libérer la ressource.</li>
        <li><strong>file_exists :</strong> Vérifie si un fichier existe.</li>
        <li><strong>unlink :</strong> Supprime un fichier.</li>
    </ul>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fileManagementModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>

        <!-- Sécurité -->
        <div class="content-section" id="input-validation" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #d32f2f; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Validation des Entrées
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        En PHP, il est essentiel de <strong style="color: #d32f2f;">valider et assainir les entrées</strong> utilisateur pour éviter les attaques malveillantes comme les injections de scripts ou les failles XSS (Cross-Site Scripting).
    </p>

    <!-- Exemple de validation d'entrée -->
    <div style="background-color: #ffe5e5; padding: 15px; border-left: 4px solid #d32f2f; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #d32f2f;">Exemple de validation d'entrée</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$nom = htmlspecialchars($_POST["nom"]); // Convertit les caractères spéciaux en entités HTML
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // Nettoie l'email

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email valide";
} else {
    echo "Email invalide";
}
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#validationModal" style="background-color: #d32f2f; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="passwords" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #388e3c; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Hashage des mots de passe
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Utilisez la fonction <strong style="color: #388e3c;">password_hash</strong> pour stocker les mots de passe de manière sécurisée en PHP. Le hashage protège les mots de passe en les rendant illisibles, même en cas de fuite de données.
    </p>

    <!-- Exemple de hashage et vérification de mot de passe -->
    <div style="background-color: #e8f5e9; padding: 15px; border-left: 4px solid #388e3c; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #388e3c;">Exemple de hashage et vérification de mot de passe</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
$motDePasse = "monmotdepasse";
$motDePasseHashe = password_hash($motDePasse, PASSWORD_DEFAULT); // Hashage sécurisé

if (password_verify("monmotdepasse", $motDePasseHashe)) {
    echo "Mot de passe correct";
} else {
    echo "Mot de passe incorrect";
}
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#passwordModal" style="background-color: #388e3c; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


<div class="content-section" id="sql-injection" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.6;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        Protection contre les Injections SQL
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Pour se protéger contre les <strong style="color: #1e88e5;">injections SQL</strong>, utilisez les requêtes préparées avec <strong style="color: #1e88e5;">PDO</strong> en PHP. Cela empêche l'exécution de commandes SQL non sécurisées dans les bases de données.
    </p>

    <!-- Exemple de requête préparée avec PDO -->
    <div style="background-color: #e3f2fd; padding: 15px; border-left: 4px solid #1e88e5; margin-top: 15px; margin-bottom: 15px;">
        <strong style="color: #1e88e5;">Exemple de requête préparée avec PDO</strong> :
        <pre style="color: #333; font-size: 1em;">
&lt;?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "username", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $email = $_POST["email"];
    $stmt->execute();

    $result = $stmt->fetchAll();
    print_r($result);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?&gt;
        </pre>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sqlModal" style="background-color: #1e88e5; color: #fff; font-weight: bold; margin-top: 15px;">
        Voir Exemple
    </button>
</div>


    </div>
</div>

<!-- Modals -->
<!-- Syntaxe -->
<div class="modal fade" id="syntaxModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Syntaxe PHP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>En PHP, le code est souvent intégré dans des balises spéciales :</p>
                <ul>
                    <li><strong>Ouverture PHP :</strong> <code>&lt;?php</code></li>
                    <li><strong>Fermeture PHP :</strong> <code>?&gt;</code></li>
                </ul>
                <p>Par exemple, pour afficher "Bonjour, Monde!" :</p>
                <blockquote>Utilisez <code>echo</code> suivi du texte à afficher.</blockquote>
            </div>
        </div>
    </div>
</div>


<!-- Variables -->
<div class="modal fade" id="variableModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Exemple de Variables</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les variables en PHP permettent de stocker et manipuler des valeurs :</p>
                <ul>
                    <li><strong>Déclaration :</strong> Commencez avec <code>$</code> suivi du nom de la variable.</li>
                    <li><strong>Exemple :</strong> <code>$nom</code> pour stocker un nom.</li>
                    <li><strong>Assignation :</strong> Utilisez <code>=</code> pour assigner une valeur, par exemple <code>$nom = "Jean";</code></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Types de Données -->
<div class="modal fade" id="typesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Exemple de Types de Données</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>PHP prend en charge plusieurs types de données :</p>
                <ul>
                    <li><strong>Entiers :</strong> Pour les nombres sans décimales, comme <code>42</code>.</li>
                    <li><strong>Flottants :</strong> Pour les nombres décimaux, comme <code>3.14</code>.</li>
                    <li><strong>Chaînes :</strong> Texte entouré de guillemets, comme <code>"Bonjour"</code>.</li>
                    <li><strong>Booléens :</strong> Valeurs de vérité, <code>true</code> ou <code>false</code>.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Fonctions -->
<div class="modal fade" id="functionModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Déclaration de Fonction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les fonctions en PHP permettent de structurer du code réutilisable :</p>
                <ul>
                    <li><strong>Définition :</strong> Utilisez <code>function</code> suivi du nom de la fonction.</li>
                    <li><strong>Paramètres :</strong> Placez-les entre parenthèses pour recevoir des valeurs externes.</li>
                    <li><strong>Retour :</strong> Utilisez <code>return</code> pour renvoyer une valeur.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Paramètres et Valeurs de Retour -->
<div class="modal fade" id="paramsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Paramètres et Valeurs de Retour</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les fonctions peuvent prendre des paramètres et retourner des valeurs :</p>
                <ul>
                    <li><strong>Paramètres :</strong> Passés entre parenthèses, ils permettent de fournir des données à la fonction.</li>
                    <li><strong>Valeurs de retour :</strong> Utilisez <code>return</code> pour renvoyer un résultat utilisable.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Tableaux -->
<div class="modal fade" id="arrayModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tableaux</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les tableaux permettent de stocker plusieurs valeurs :</p>
                <ul>
                    <li><strong>Tableaux indexés :</strong> Utilisent des indices numériques, par exemple <code>$fruits[0]</code>.</li>
                    <li><strong>Tableaux associatifs :</strong> Utilisent des clés définies, par exemple <code>$personne["nom"]</code>.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Sessions -->
<div class="modal fade" id="sessionModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sessions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les sessions permettent de stocker des informations utilisateur pendant une session de navigation :</p>
                <ul>
                    <li><strong>Initialisation :</strong> Utilisez <code>session_start()</code> pour démarrer une session.</li>
                    <li><strong>Stockage :</strong> Enregistrez des données dans <code>$_SESSION</code>, par exemple <code>$_SESSION["nom"]</code>.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Validation des Entrées -->
<div class="modal fade" id="validationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Validation des Entrées</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>La validation des entrées permet d'assainir les données avant traitement :</p>
                <ul>
                    <li><strong>Sanitisation :</strong> Utilisez <code>filter_input</code> pour filtrer les entrées.</li>
                    <li><strong>Exemple :</strong> <code>FILTER_SANITIZE_STRING</code> pour nettoyer une chaîne de caractères.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Hashage des mots de passe -->
<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hashage des mots de passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Le hashage permet de stocker les mots de passe en toute sécurité :</p>
                <ul>
                    <li><strong>Fonction :</strong> Utilisez <code>password_hash</code> pour hacher un mot de passe.</li>
                    <li><strong>Vérification :</strong> <code>password_verify</code> pour vérifier le mot de passe.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Protection contre les injections SQL -->
<div class="modal fade" id="sqlModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Protection contre les injections SQL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les injections SQL sont évitées en utilisant des requêtes préparées :</p>
                <ul>
                    <li><strong>PDO :</strong> Utilisez <code>prepare</code> et <code>execute</code> pour les requêtes avec des paramètres sécurisés.</li>
                    <li><strong>Exemple :</strong> <code>:id</code> comme paramètre dans la requête.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Opérations -->
<div class="modal fade" id="operateursModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Opérateurs en PHP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les opérateurs en PHP permettent d’effectuer des calculs et des comparaisons. Voici les principaux types :</p>
                <ul>
                    <li><strong>Opérateurs Arithmétiques :</strong> Utilisés pour les opérations mathématiques, comme l’addition (+), la soustraction (-), la multiplication (*) et la division (/).</li>
                    <li><strong>Opérateurs de Comparaison :</strong> Utilisés pour comparer des valeurs, par exemple, égalité (==), différence (!=), supérieur (&gt;), et inférieur (&lt;).</li>
                    <li><strong>Opérateurs Logiques :</strong> Permettent de combiner des conditions, tels que ET (<code>&&</code>), OU (<code>||</code>), et NON (<code>!</code>).</li>
                    <li><strong>Opérateurs d'Affectation :</strong> Utilisés pour assigner des valeurs, souvent en combinant une opération, comme <code>+=</code>, <code>-=</code>, et <code>*=</code>.</li>
                </ul>
                <p>Ces opérateurs sont essentiels pour manipuler et comparer les données dans vos programmes PHP.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cookies -->
<div class="modal fade" id="cookieModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cookies en PHP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Les cookies permettent de stocker des informations sur le navigateur de l’utilisateur pour une utilisation future.</p>
                <ul>
                    <li><strong>Création :</strong> Utilisez <code>setcookie</code> pour définir un cookie. Par exemple, pour stocker le nom d’utilisateur.</li>
                    <li><strong>Expiration :</strong> Spécifiez la durée de vie du cookie en secondes. Par exemple, <code>time() + 86400</code> pour une durée d'un jour.</li>
                    <li><strong>Lecture :</strong> Accédez au cookie via <code>$_COOKIE</code> pour récupérer sa valeur, par exemple <code>$_COOKIE["nom"]</code>.</li>
                </ul>
                <p>Les cookies sont utiles pour conserver les informations utilisateur entre les sessions, mais veillez à la confidentialité et à la sécurité des données stockées.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gestion des Fichiers -->
<div class="modal fade" id="fileManagementModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exemple de Gestion des Fichiers en PHP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Créer, écrire, lire et supprimer un fichier</h6>
                    <p>Dans cet exemple, nous allons créer un fichier, y écrire du contenu, lire ce contenu, puis supprimer le fichier.</p>
                    
                    <pre>
&lt;?php
// Chemin et nom du fichier
$fichier = "exemple.txt";

// Vérifie si le fichier existe avant de le créer
if (!file_exists($fichier)) {
    // Ouvre le fichier en mode écriture (crée le fichier s'il n'existe pas)
    $handle = fopen($fichier, "w");
    fwrite($handle, "Ceci est un exemple de contenu dans un fichier.\n");
    fclose($handle);
    echo "Fichier créé et contenu ajouté.<br>";
}

// Lecture du contenu du fichier
$handle = fopen($fichier, "r");
echo "Contenu du fichier :<br>";
echo fread($handle, filesize($fichier));
fclose($handle);

// Supprime le fichier
if (unlink($fichier)) {
    echo "<br>Fichier supprimé avec succès.";
} else {
    echo "<br>Erreur lors de la suppression du fichier.";
}
?&gt;
                    </pre>
                    
                    <p>Cet exemple utilise les fonctions <code>fopen</code>, <code>fwrite</code>, <code>fread</code>, <code>fclose</code>, <code>file_exists</code>, et <code>unlink</code> pour effectuer toutes les étapes de la gestion des fichiers en PHP.</p>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap et jQuery pour le fonctionnement des modals -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
