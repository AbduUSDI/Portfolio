<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur JavaScript - Exemples Visuels et Concepts</title>
    <!-- Bootstrap pour les modals et la sidebar responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php' ?>

    <!-- Sidebar -->
    <div class="sidebar">

        <a href="#intro">Introduction</a>

        <button class="dropdown-btn"><i class="fas fa-code"></i> JavaScript de Base  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
                    <a href="#variables">Variables</a>
                    <a href="#types-donnees">Types de données</a>
                    <a href="#operateurs">Opérateurs</a>
                    <a href="#conditions">Conditions</a>       
                    <a href="#boucles">Boucles</a>
                    <a href="#fonctions">Fonctions</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-desktop"></i>  Exercices JavaScript de base <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="exercices_js/variable.php">Variable</a>
                    <a href="exercices_js/type_donnee.php">Types de données</a>
                    <a href="exercices_js/operateurs.php">Opérateurs</a>
                    <a href="exercices_js/conditions.php">Conditions</a>
                    <a href="exercices_js/boucles.php">Boucles</a>
                    <a href="exercices_js/fonctions.php">Fonctions</a>
                </div>
        <button class="dropdown-btn"><i class="fas fa-rocket"></i> JavaScript Avancé  <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
                    <a href="#promises">Promises</a>
                    <a href="#async-await">Async/Await</a>
                    <a href="#classes">Classes</a>
                    <a href="#dom-selection">Sélection DOM</a>
                    <a href="#dom-modification">Modification du DOM</a>
                    <a href="#events">Gestion des événements</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-pen-nib"></i>  Exercices JavaScript avancé <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="exercices_js/promise.php">Promise</a>
                    <a href="exercices_js/async_await.php">Async/Await</a>
                    <a href="exercices_js/classes.php">Classes</a>
                    <a href="exercices_js/selection_dom.php">Sélection DOM</a>
                    <a href="exercices_js/modify_dom.php">Modification du DOM</a>
                    <a href="exercices_js/events.php">Gestion des événements</a>
                </div>
            <button class="dropdown-btn"><i class="fas fa-laptop-code"></i> JavaScript Pro  <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="#modules">Modules</a>
                    <a href="#fetch">API Fetch</a>
                    <a href="#webstorage">Web Storage</a>
                    <a href="#json">JSON</a>
                    <a href="#poo">Programmation Orientée Objet</a>
                    <a href="#dom-advanced">Manipulation Avancée du DOM</a>
                    <a href="#callbacks-closures">Callbacks & Closures</a>
                    <a href="#langage-json">Manipulation de JSON</a>
                    <a href="#web-workers">Web Workers</a>
                    <a href="#gestion-erreurs-debugging">Gestion des Erreurs & Debugging</a>
                    <a href="#service-workers-pwa">Service Workers & PWA</a>
                    <a href="#es6">Syntaxe Moderne ES6+</a>
                    <a href="#testing">Tests Unitaires</a>
                </div>  
            <button class="dropdown-btn"><i class="fas fa-handshake"></i>  Exercices JavaScript Pro <i class="fas fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="exercices_js/modules-exercice/modules.php">Modules</a>
                    <a href="exercices_js/fetch-exercice/fetch.php">API Fetch</a>
                    <a href="exercices_js/web-storage/web_storage.php">Web Storage</a>
                    <a href="exercices_js/json/json.php">JSON</a>
                    <a href="exercices_js/poo/poo.php">Programmation Orientée Objet</a>
                    <a href="exercices_js/manip-dom/manip_dom.php">Manipulation Avancée du DOM</a>
                    <a href="exercices_js/callback-closures/callback_closures.php">Callbacks & Closures</a>
                    <a href="exercices_js/manip-json/manip_json.php">Manipulation de JSON</a>
                    <a href="exercices_js/web-workers/web_workers.php">Web Workers</a>
                    <a href="exercices_js/gestion-erreurs/gestion_erreurs.php">Gestion des Erreurs & Debugging</a>
                    <a href="exercices_js/service-workers/service_workers.php">Service Workers & PWA</a>
                    <a href="exercices_js/es6/es6.php">Syntaxe Moderne ES6+</a>
                    <a href="exercices_js/unit-test/unit_test.php">Tests Unitaires</a>
                </div>
    </div>

    <!-- Page Content -->
    <div class="content">
        <div class="container animate__animated animate__fadeInUp">

            <!-- JavaScript de Base -->
            <div class="content-section">
                <h1 id="intro">Introduction de JavaScript</h1>

                <p>
JavaScript est un langage de programmation dynamique et interprété principalement utilisé pour apporter des interactions et de l'interactivité aux pages web. Développé à l'origine par Netscape dans les années 1990, il est devenu l'un des trois langages fondamentaux du développement web, aux côtés de HTML et CSS. Contrairement à ces derniers, JavaScript permet de manipuler le contenu d'une page web en temps réel sans nécessiter de rechargement de page, grâce à ce qu'on appelle le "DOM" (Document Object Model), la structure hiérarchique d'une page HTML.
</p>

<p>
<strong>Caractéristiques de JavaScript :</strong>
</p>
<ul>
    <li><strong>Langage interprété :</strong> JavaScript est exécuté par le navigateur sans besoin de compilation, ce qui le rend rapide et réactif pour les modifications en temps réel.</li>
    <li><strong>Basé sur les événements :</strong> JavaScript peut réagir aux actions de l'utilisateur (clics, survols, saisies de texte, etc.), offrant ainsi des fonctionnalités interactives sur le web.</li>
    <li><strong>Orientation objet et fonctionnelle :</strong> JavaScript prend en charge des paradigmes de programmation orientée objet, fonctionnelle et événementielle, ce qui le rend polyvalent et adaptable à de nombreux besoins.</li>
    <li><strong>Portabilité :</strong> JavaScript est supporté par tous les navigateurs modernes et fonctionne sur presque toutes les plateformes, ce qui en fait un choix universel pour le développement web.</li>
</ul>

<p>
<strong>Applications principales de JavaScript :</strong>
</p>
<ul>
    <li><strong>Manipulation du DOM :</strong> Permet de créer, modifier, et supprimer des éléments HTML en temps réel, comme changer le contenu d’une page, afficher des messages d’erreur, ou mettre à jour des données affichées.</li>
    <li><strong>Validation des formulaires :</strong> JavaScript est couramment utilisé pour valider les données saisies par l’utilisateur avant leur envoi au serveur, offrant ainsi une première couche de sécurité.</li>
    <li><strong>Effets et animations :</strong> Avec les bibliothèques comme jQuery et les frameworks modernes, JavaScript rend possible l’animation de pages, comme les menus déroulants, les carrousels d’images et les transitions.</li>
    <li><strong>Appels asynchrones (AJAX) :</strong> Grâce à AJAX (Asynchronous JavaScript and XML), JavaScript peut communiquer avec un serveur en arrière-plan, ce qui permet de mettre à jour des parties de la page sans la recharger intégralement, offrant ainsi une expérience utilisateur fluide.</li>
    <li><strong>Programmation côté serveur :</strong> Avec des environnements comme Node.js, JavaScript peut être utilisé pour le développement backend, rendant possible la création d’applications complètes uniquement en JavaScript.</li>
</ul>

<p>
<strong>Importance de JavaScript dans l'écosystème web :</strong> JavaScript est aujourd'hui incontournable dans le développement d’applications web modernes. Avec des frameworks populaires comme React, Angular et Vue, il permet de construire des interfaces utilisateur dynamiques et évolutives. En backend, Node.js a ouvert la voie à des applications full-stack en JavaScript, facilitant la collaboration entre développeurs frontend et backend. Les API modernes de JavaScript, comme les API Canvas, WebGL, et WebSockets, permettent également de créer des jeux, des visualisations de données, et des applications en temps réel.
</p>

<p>
En résumé, JavaScript est essentiel pour le développement web, car il offre des possibilités infinies pour rendre les sites interactifs, dynamiques et agréables pour l'utilisateur. La combinaison de sa puissance, de sa polyvalence et de son accessibilité fait de JavaScript un pilier central de l'expérience utilisateur sur le web.
</p>


                <h1 id="js-base"><i class="fas fa-code icon"></i>JavaScript de Base</h1>
                <div class="row">
                <div class="col-md-6">
    <h3 id="variables">Variables</h3>
    <p>
        Les variables sont utilisées pour stocker des données en mémoire et faciliter leur réutilisation. En JavaScript, on utilise les mots-clés 
        <code>var</code>, <code>let</code>, ou <code>const</code> pour déclarer des variables, chacune ayant des caractéristiques spécifiques :
    </p>
    <ul>
        <li><strong>var :</strong> Déclare une variable avec une portée globale ou fonctionnelle, mais sa portée est moins précise que celle de <code>let</code> ou <code>const</code>.</li>
        <li><strong>let :</strong> Permet de déclarer une variable avec une portée limitée au bloc dans lequel elle est définie. Recommandée pour les variables dont la valeur peut changer.</li>
        <li><strong>const :</strong> Utilisée pour les constantes, ou variables qui ne seront pas réassignées après leur déclaration.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple d'utilisation de var, let, et const
var age = 25;          // Variable globale ou fonctionnelle
let nom = "Alice";     // Variable locale au bloc
const pays = "France"; // Constante, ne peut être réassignée</code></pre>
        
        <p>Utilisez les boutons pour voir les valeurs et tester la réassignation des variables :</p>
        <button onclick="afficherValeurs()" class="btn btn-primary">Afficher les Valeurs</button>
        <button onclick="modifierValeurs()" class="btn btn-secondary">Réassigner les Valeurs</button>
        
        <div id="resultat" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    var age = 25;          // Variable globale
    let nom = "Alice";     // Variable de bloc
    const pays = "France"; // Constante

    function afficherValeurs() {
        document.getElementById("resultat").innerText = 
            "Âge : " + age + ", Nom : " + nom + ", Pays : " + pays;
    }

    function modifierValeurs() {
        age = 30;          // Modification de la variable var
        nom = "Bob";       // Modification de la variable let
        try {
            pays = "Italie";  // Tentative de modification de la constante (génère une erreur)
        } catch (error) {
            document.getElementById("resultat").innerText = 
                "Erreur : Impossible de modifier 'pays' déclaré en const.";
        }
        afficherValeurs(); // Réaffiche les valeurs après tentative de réassignation
    }
</script>

<div class="col-md-6">
    <h3 id="types-donnees">Types de Données</h3>
    <p>
        En JavaScript, les types de données sont les fondements des opérations de programmation. Ils permettent de stocker et de manipuler différentes sortes de valeurs :
    </p>
    <ul>
        <li><strong>Number</strong> : Représente les valeurs numériques, incluant les entiers et les flottants.</li>
        <li><strong>String</strong> : Représente du texte, encapsulé entre des guillemets simples ou doubles.</li>
        <li><strong>Boolean</strong> : Valeur logique qui peut être <code>true</code> ou <code>false</code>.</li>
        <li><strong>Object</strong> : Structure complexe pour regrouper plusieurs valeurs en paires clé-valeur.</li>
        <li><strong>Undefined</strong> : Type attribué à une variable non initialisée.</li>
        <li><strong>Null</strong> : Type pour les valeurs spécifiquement vides ou nulles.</li>
        <li><strong>Symbol</strong> : Type unique et immuable, souvent utilisé comme identifiant.</li>
    </ul>
    
    <div class="example-box">
        <pre><code class="language-javascript">// Déclaration de différents types de données
let nombre = 42;                      // number
let texte = "Bonjour, monde!";         // string
let estVrai = true;                    // boolean
let personne = { nom: "Alice", age: 30 }; // object
let valeurIndefinie;                   // undefined
let valeurNull = null;                 // null
let identifiantUnique = Symbol("id");  // symbol</code></pre>

        <button onclick="afficherTypes()" class="btn btn-primary">Afficher Types et Valeurs</button>
        
        <div id="resultat-types" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

    <script>
        let nombre = 42;
        let texte = "Bonjour, monde!";
        let estVrai = true;
        let personne = { nom: "Alice", age: 30 };
        let valeurIndefinie;
        let valeurNull = null;
        let identifiantUnique = Symbol("id");

        function afficherTypes() {
            document.getElementById("resultat-types").innerHTML = 
                "Nombre : " + nombre + " (" + typeof nombre + ")<br>" +
                "Texte : " + texte + " (" + typeof texte + ")<br>" +
                "Booléen : " + estVrai + " (" + typeof estVrai + ")<br>" +
                "Objet : " + JSON.stringify(personne) + " (" + typeof personne + ")<br>" +
                "Indéfini : " + valeurIndefinie + " (" + typeof valeurIndefinie + ")<br>" +
                "Null : " + valeurNull + " (" + (valeurNull === null ? "null" : typeof valeurNull) + ")<br>" +
                "Symbole : " + identifiantUnique.toString() + " (" + typeof identifiantUnique + ")";
        }
    </script>
</div>

<div class="row">
<div class="col-md-6">
    <h3 id="operateurs">Opérateurs</h3>
    <p>
        Les opérateurs en JavaScript permettent d’effectuer des opérations sur des valeurs, qu’il s’agisse de calculs mathématiques, de comparaisons, ou de logique. 
        Voici les principaux types d'opérateurs :
    </p>
    <ul>
        <li><strong>Opérateurs mathématiques</strong> : Utilisés pour effectuer des calculs.
            <ul>
                <li><code>+</code> : Additionne deux nombres. Exemple : <code>a + b</code> (10 + 5 = 15)</li>
                <li><code>-</code> : Soustrait le second nombre du premier. Exemple : <code>a - b</code> (10 - 5 = 5)</li>
                <li><code>*</code> : Multiplie deux nombres. Exemple : <code>a * b</code> (10 * 5 = 50)</li>
                <li><code>/</code> : Divise le premier nombre par le second. Exemple : <code>a / b</code> (10 / 5 = 2)</li>
                <li><code>%</code> : Renvoie le reste d'une division (modulo). Exemple : <code>a % b</code> (10 % 5 = 0)</li>
            </ul>
        </li>
        <li><strong>Opérateurs de comparaison</strong> : Utilisés pour comparer deux valeurs et renvoient un résultat booléen (<code>true</code> ou <code>false</code>).
            <ul>
                <li><code>==</code> : Vérifie si les valeurs sont égales (peut ignorer le type). Exemple : <code>a == b</code> (faux si <code>a</code> est 10 et <code>b</code> est 5)</li>
                <li><code>!=</code> : Vérifie si les valeurs sont différentes. Exemple : <code>a != b</code> (vrai si <code>a</code> est 10 et <code>b</code> est 5)</li>
                <li><code>&gt;</code> : Vérifie si la première valeur est supérieure. Exemple : <code>a &gt; b</code> (vrai si <code>a</code> est 10 et <code>b</code> est 5)</li>
                <li><code>&lt;</code> : Vérifie si la première valeur est inférieure. Exemple : <code>a &lt; b</code> (faux si <code>a</code> est 10 et <code>b</code> est 5)</li>
                <li><code>&gt;=</code> : Vérifie si la première valeur est supérieure ou égale. Exemple : <code>a &gt;= b</code></li>
                <li><code>&lt;=</code> : Vérifie si la première valeur est inférieure ou égale. Exemple : <code>a &lt;= b</code></li>
            </ul>
        </li>
        <li><strong>Opérateurs logiques</strong> : Utilisés pour combiner plusieurs conditions.
            <ul>
                <li><code>&&</code> : ET logique. Renvoie <code>true</code> uniquement si les deux conditions sont vraies. Exemple : <code>(a &gt; b) && (b &gt; 0)</code></li>
                <li><code>||</code> : OU logique. Renvoie <code>true</code> si au moins une des conditions est vraie. Exemple : <code>(a &gt; b) || (b == 0)</code></li>
                <li><code>!</code> : NON logique. Inverse la valeur booléenne. Exemple : <code>!(a &gt; b)</code> (renvoie <code>false</code> si <code>a &gt; b</code> est vrai)</li>
            </ul>
        </li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Déclaration des variables
let a = 10;
let b = 5;

// Opérateurs mathématiques
let addition = a + b;
let soustraction = a - b;
let multiplication = a * b;
let division = a / b;
let modulo = a % b;

// Opérateurs de comparaison
let egalite = (a == b);          // false
let difference = (a != b);       // true
let superieur = (a > b);         // true
let inferieurOuEgal = (a <= b);  // false</code></pre>

        <button onclick="afficherResultatsOperateurs()" class="btn btn-primary">Calculer et Afficher les Résultats</button>
        
        <div id="resultat-operateurs" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    let a = 10;
    let b = 5;
    let addition = a + b;
    let soustraction = a - b;
    let multiplication = a * b;
    let division = a / b;
    let modulo = a % b;

    let egalite = (a == b);
    let difference = (a != b);
    let superieur = (a > b);
    let inferieurOuEgal = (a <= b);

    function afficherResultatsOperateurs() {
        document.getElementById("resultat-operateurs").innerHTML = 
            "<strong>Résultats des Opérateurs Mathématiques :</strong><br>" +
            "Addition (a + b) : " + addition + "<br>" +
            "Soustraction (a - b) : " + soustraction + "<br>" +
            "Multiplication (a * b) : " + multiplication + "<br>" +
            "Division (a / b) : " + division + "<br>" +
            "Modulo (a % b) : " + modulo + "<br><br>" +
            
            "<strong>Résultats des Opérateurs de Comparaison :</strong><br>" +
            "Égalité (a == b) : " + egalite + "<br>" +
            "Différence (a != b) : " + difference + "<br>" +
            "Supérieur (a > b) : " + superieur + "<br>" +
            "Inférieur ou Égal (a <= b) : " + inferieurOuEgal;
    }
</script>




<div class="col-md-6">
    <h3 id="conditions">Conditions</h3>
    <p>
        En JavaScript, les instructions conditionnelles permettent de diriger le flux du programme en fonction de différentes conditions.
        Les structures conditionnelles les plus courantes sont :
    </p>
    <ul>
        <li><strong>if/else</strong> : Vérifie une condition et exécute un bloc de code si elle est vraie ; sinon, exécute un autre bloc (facultatif).</li>
        <li><strong>else if</strong> : Ajoute des conditions supplémentaires entre un bloc <code>if</code> et <code>else</code>.</li>
        <li><strong>switch</strong> : Utilisé pour tester une variable contre plusieurs valeurs possibles et exécuter le code correspondant.</li>
        <li><strong>Opérateur conditionnel (ternaire)</strong> : Une syntaxe compacte pour écrire des conditions <code>if/else</code>.</li>
        <li><strong>Opérateurs logiques combinés</strong> : Combine plusieurs conditions en utilisant les opérateurs <code>&&</code> (ET) et <code>||</code> (OU).</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple d'utilisation de if/else
let age = 20;
if (age >= 18) {
    console.log("Vous êtes majeur.");
} else {
    console.log("Vous êtes mineur.");
}

// Exemple d'utilisation de else if
let heure = 15;
if (heure < 12) {
    console.log("Bonne matinée.");
} else if (heure < 18) {
    console.log("Bon après-midi.");
} else {
    console.log("Bonne soirée.");
}

// Exemple d'utilisation de switch
let couleur = "rouge";
switch (couleur) {
    case "rouge":
        console.log("La couleur est rouge.");
        break;
    case "bleu":
        console.log("La couleur est bleu.");
        break;
    default:
        console.log("Couleur non reconnue.");
}

// Exemple d'opérateur conditionnel (ternaire)
let resultat = (age >= 18) ? "Majeur" : "Mineur";
console.log(resultat);

// Combinaison de conditions avec && et ||
let permis = true;
if (age >= 18 && permis) {
    console.log("Vous pouvez conduire.");
} else {
    console.log("Vous ne pouvez pas conduire.");
}</code></pre>

        <button onclick="testerConditions()" class="btn btn-primary">Afficher les Résultats des Conditions</button>
        
        <div id="resultat-conditions" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function testerConditions() {
        let age = 20;
        let heure = 15;
        let couleur = "rouge";
        let resultat = (age >= 18) ? "Majeur" : "Mineur";
        let permis = true;

        // Messages de condition
        let messageAge = age >= 18 ? "Vous êtes majeur." : "Vous êtes mineur.";
        let messageHeure = (heure < 12) ? "Bonne matinée." : (heure < 18 ? "Bon après-midi." : "Bonne soirée.");
        let messageCouleur;
        switch (couleur) {
            case "rouge":
                messageCouleur = "La couleur est rouge.";
                break;
            case "bleu":
                messageCouleur = "La couleur est bleu.";
                break;
            default:
                messageCouleur = "Couleur non reconnue.";
        }
        let messageConduite = (age >= 18 && permis) ? "Vous pouvez conduire." : "Vous ne pouvez pas conduire.";

        // Affichage des résultats
        document.getElementById("resultat-conditions").innerHTML = 
            messageAge + "<br>" +
            messageHeure + "<br>" +
            messageCouleur + "<br>" +
            "Résultat Ternaire : " + resultat + "<br>" +
            messageConduite;
    }
</script>

                </div>

                <div class="row">
                <div class="col-md-6">
    <h3 id="boucles">Boucles</h3>
    <p>
        Les boucles permettent de répéter des sections de code plusieurs fois en fonction d’une condition. Les principales boucles en JavaScript sont :
    </p>
    <ul>
        <li><strong>for</strong> : Répète le code un nombre fixe de fois, selon un compteur initial, une condition et un incrément.</li>
        <li><strong>while</strong> : Exécute le code tant qu’une condition est vraie. La condition est vérifiée avant chaque exécution.</li>
        <li><strong>do...while</strong> : Similaire à <code>while</code>, mais la boucle est exécutée au moins une fois, car la condition est vérifiée après chaque itération.</li>
        <li><strong>for...of</strong> : Itère sur les éléments d’objets itérables, comme les tableaux.</li>
        <li><strong>for...in</strong> : Parcourt les propriétés énumérables d’un objet.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Boucle for
for (let i = 0; i < 5; i++) {
    console.log("for - Itération : " + i);
}

// Boucle while
let compteur = 0;
while (compteur < 3) {
    console.log("while - Compteur : " + compteur);
    compteur++;
}

// Boucle do...while
let num = 0;
do {
    console.log("do...while - Num : " + num);
    num++;
} while (num < 3);

// Boucle for...of
let fruits = ["pomme", "banane", "cerise"];
for (let fruit of fruits) {
    console.log("for...of - Fruit : " + fruit);
}

// Boucle for...in
let personne = { nom: "Alice", age: 30 };
for (let propriete in personne) {
    console.log("for...in - " + propriete + " : " + personne[propriete]);
}</code></pre>

        <button onclick="afficherResultatsBoucles()" class="btn btn-primary">Afficher les Résultats des Boucles</button>
        
        <div id="resultat-boucles" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function afficherResultatsBoucles() {
        let resultats = "";

        // Boucle for
        for (let i = 0; i < 5; i++) {
            resultats += "for - Itération : " + i + "<br>";
        }

        // Boucle while
        let compteur = 0;
        while (compteur < 3) {
            resultats += "while - Compteur : " + compteur + "<br>";
            compteur++;
        }

        // Boucle do...while
        let num = 0;
        do {
            resultats += "do...while - Num : " + num + "<br>";
            num++;
        } while (num < 3);

        // Boucle for...of
        let fruits = ["pomme", "banane", "cerise"];
        for (let fruit of fruits) {
            resultats += "for...of - Fruit : " + fruit + "<br>";
        }

        // Boucle for...in
        let personne = { nom: "Alice", age: 30 };
        for (let propriete in personne) {
            resultats += "for...in - " + propriete + " : " + personne[propriete] + "<br>";
        }

        document.getElementById("resultat-boucles").innerHTML = resultats;
    }
</script>


<div class="col-md-6">
    <h3 id="fonctions">Fonctions</h3>
    <p>
        Les fonctions sont des blocs de code réutilisables, permettant d'exécuter des tâches spécifiques. Elles se définissent avec le mot-clé <code>function</code> et peuvent accepter des paramètres et retourner des valeurs.
    </p>
    <ul>
        <li><strong>Fonction déclarée</strong> : Une fonction nommée qui peut être appelée depuis n'importe où dans le code.</li>
        <li><strong>Fonction anonyme</strong> : Une fonction sans nom, souvent utilisée comme argument ou dans une variable.</li>
        <li><strong>Fonction fléchée</strong> : Une syntaxe compacte introduite en ES6, particulièrement utile pour les fonctions anonymes.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Fonction déclarée
function saluer(nom) {
    return "Bonjour, " + nom + "!";
}
let message1 = saluer("Alice");

// Fonction anonyme affectée à une variable
const multiplier = function(x, y) {
    return x * y;
};
let resultatMultiplication = multiplier(5, 3);

// Fonction fléchée
const carre = (nombre) => nombre * nombre;
let resultatCarre = carre(4);

console.log(message1);           // Bonjour, Alice!
console.log(resultatMultiplication); // 15
console.log(resultatCarre);       // 16</code></pre>

        <button onclick="executerFonctions()" class="btn btn-primary">Exécuter les Fonctions</button>
        
        <div id="resultat-fonctions" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function saluer(nom) {
        return "Bonjour, " + nom + "!";
    }
    
    const multiplier = function(x, y) {
        return x * y;
    };
    
    const carre = (nombre) => nombre * nombre;

    function executerFonctions() {
        let message1 = saluer("Alice");
        let resultatMultiplication = multiplier(5, 3);
        let resultatCarre = carre(4);

        document.getElementById("resultat-fonctions").innerHTML = 
            "Fonction déclarée (saluer) : " + message1 + "<br>" +
            "Fonction anonyme (multiplier) : " + resultatMultiplication + "<br>" +
            "Fonction fléchée (carre) : " + resultatCarre;
    }
</script>
                </div>
    </div>

            <!-- JavaScript Avancé -->
            <div class="content-section" id="js-avance">
                <h1><i class="fas fa-rocket icon"></i>JavaScript Avancé</h1>
                <p>JavaScript avancé implique l'utilisation de techniques plus complexes et d'une meilleure gestion des fonctionnalités.</p>

                <div class="row">
                <div class="col-md-6">
    <h3 id="promises">Promises</h3>
    <p>
        Les Promises en JavaScript permettent de gérer des opérations asynchrones, comme les appels de données à des serveurs. Une Promise est un objet représentant la réussite ou l'échec d'une opération asynchrone.
    </p>
    <ul>
        <li><strong>Etat "Pending" (En attente)</strong> : La Promise est en cours d’exécution, mais son résultat n’est pas encore disponible.</li>
        <li><strong>Etat "Fulfilled" (Résolue)</strong> : La Promise a réussi, et le résultat est disponible.</li>
        <li><strong>Etat "Rejected" (Rejetée)</strong> : La Promise a échoué et retourne une erreur.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple de Promise avec délai variable
function delay(ms) {
    return new Promise((resolve, reject) => {
        if (ms < 1000) {
            reject("Délai trop court !");
        } else {
            setTimeout(() => resolve(`Temps écoulé après ${ms} ms !`), ms);
        }
    });
}

// Exemple de chaîne de Promises
delay(1500)
    .then(message => {
        console.log(message);
        return delay(2000);  // Chaine une deuxième Promise
    })
    .then(message => console.log("Deuxième délai : " + message))
    .catch(error => console.error("Erreur : " + error));

// Utilisation de Promise.all pour gérer plusieurs Promises
Promise.all([delay(1000), delay(2000), delay(3000)])
    .then(messages => console.log("Tous les délais sont passés :", messages))
    .catch(error => console.error("Une des Promises a échoué :", error));
</code></pre>

        <button onclick="executerPromiseChain()" class="btn btn-primary">Exécuter les Exemples de Promises</button>
        
        <div id="resultat-promises" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function delay(ms) {
        return new Promise((resolve, reject) => {
            if (ms < 1000) {
                reject("Délai trop court !");
            } else {
                setTimeout(() => resolve(`Temps écoulé après ${ms} ms !`), ms);
            }
        });
    }

    function executerPromiseChain() {
        // Exécution de la première chaîne de Promises
        delay(1500)
            .then(message => {
                document.getElementById("resultat-promises").innerHTML = "Premier délai : " + message;
                return delay(2000);  // Chaine une deuxième Promise
            })
            .then(message => {
                document.getElementById("resultat-promises").innerHTML += "<br>Deuxième délai : " + message;
            })
            .catch(error => {
                document.getElementById("resultat-promises").innerHTML = "Erreur dans la chaîne : " + error;
            });

        // Exécution de Promise.all pour plusieurs délais simultanés
        Promise.all([delay(1000), delay(2000), delay(3000)])
            .then(messages => {
                document.getElementById("resultat-promises").innerHTML += "<br><br>Tous les délais sont passés :<br>" + messages.join("<br>");
            })
            .catch(error => {
                document.getElementById("resultat-promises").innerHTML += "<br>Erreur avec Promise.all : " + error;
            });
    }
</script>


<div class="col-md-6">
    <h3 id="async-await">Async/Await</h3>
    <p>
        Les mots-clés <code>async</code> et <code>await</code> permettent d'écrire du code asynchrone en JavaScript de manière plus lisible et structurée, sans avoir à chaîner les <code>then</code> des Promises.
    </p>
    <ul>
        <li><strong>Async</strong> : Ajouté devant une fonction, <code>async</code> indique que cette fonction retourne toujours une Promise, même si elle ne contient pas directement de Promise.</li>
        <li><strong>Await</strong> : Utilisé uniquement à l'intérieur d'une fonction <code>async</code>, il suspend l'exécution de la fonction jusqu'à ce que la Promise soit résolue ou rejetée.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple d'utilisation de async/await
async function attendre(millis) {
    return new Promise(resolve => setTimeout(() => resolve(`Attendu ${millis} ms`), millis));
}

// Fonction async pour gérer l'attente avec await
async function executerAsync() {
    let message1 = await attendre(1000);
    console.log(message1);
    let message2 = await attendre(2000);
    console.log(message2);
    return "Opérations terminées";
}

// Appel de la fonction async
executerAsync().then(result => console.log(result));
</code></pre>

        <button onclick="executerAsyncAvecAffichage()" class="btn btn-primary">Exécuter Async/Await</button>
        
        <div id="resultat-async-await" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    async function attendre(millis) {
        return new Promise(resolve => setTimeout(() => resolve(`Attendu ${millis} ms`), millis));
    }

    async function executerAsyncAvecAffichage() {
        let message1 = await attendre(1000);
        document.getElementById("resultat-async-await").innerHTML = message1 + "<br>";
        
        let message2 = await attendre(2000);
        document.getElementById("resultat-async-await").innerHTML += message2 + "<br>";
        
        document.getElementById("resultat-async-await").innerHTML += "Opérations terminées";
    }
</script>

                </div>

                <div class="row">
                <div class="col-md-6">
    <h3 id="classes">Classes</h3>
    <p>
        Les classes en JavaScript permettent de structurer le code de manière organisée en suivant le paradigme de la Programmation Orientée Objet (POO).
        Elles définissent des objets avec des propriétés et des méthodes pour créer des instances avec des caractéristiques et des comportements similaires.
    </p>
    <ul>
        <li><strong>Constructeur</strong> : Une fonction spéciale qui initialise les propriétés de l’objet lors de la création d’une instance.</li>
        <li><strong>Propriétés</strong> : Variables attachées à l'objet (comme <code>nom</code> ou <code>age</code> dans l'exemple ci-dessous).</li>
        <li><strong>Méthodes</strong> : Fonctions liées à l'objet pour définir son comportement (comme <code>parler</code>).</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Définition d'une classe
class Animal {
    constructor(nom, age) {
        this.nom = nom;  // Propriété nom
        this.age = age;  // Propriété age
    }

    parler() {  // Méthode parler
        return `${this.nom} fait un bruit !`;
    }
}

// Création d'instances de la classe
let chien = new Animal("Chien", 5);
let chat = new Animal("Chat", 3);

// Affichage des résultats
console.log(chien.parler());  // "Chien fait un bruit !"
console.log(chat.parler());   // "Chat fait un bruit !"
</code></pre>

        <button onclick="afficherResultatsClasses()" class="btn btn-primary">Créer et Afficher des Objets</button>
        
        <div id="resultat-classes" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    class Animal {
        constructor(nom, age) {
            this.nom = nom;
            this.age = age;
        }

        parler() {
            return `${this.nom} fait un bruit !`;
        }
    }

    function afficherResultatsClasses() {
        let chien = new Animal("Chien", 5);
        let chat = new Animal("Chat", 3);
        
        document.getElementById("resultat-classes").innerHTML =
            chien.parler() + "<br>" + chat.parler();
    }
</script>
<div class="col-md-6">
    <h3 id="events">Événements</h3>
    <p>
        En JavaScript, les événements sont des actions déclenchées par l'utilisateur (comme un clic, un survol, ou une frappe) ou par le navigateur. Les événements permettent d'interagir avec la page et de créer des interactions dynamiques.
    </p>
    <ul>
        <li><strong>click</strong> : Se déclenche lorsqu'un élément est cliqué.</li>
        <li><strong>mouseover</strong> : Se déclenche lorsque la souris passe au-dessus d'un élément.</li>
        <li><strong>keydown</strong> : Se déclenche lorsqu'une touche est pressée sur le clavier.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple d'événements JavaScript
// Fonction pour changer de couleur lors du clic
function changerCouleur() {
    document.getElementById("element").style.color = "blue";
}

// Fonction pour afficher un message lors du survol
function afficherMessage() {
    document.getElementById("resultat-events").textContent = "Vous avez survolé l'élément !";
}
</code></pre>

        <button onclick="changerCouleur()" class="btn btn-primary">Changer la Couleur</button>
        <div id="element" onmouseover="afficherMessage()" style="margin-top: 10px; font-weight: bold;">
            Survolez-moi pour un message !
        </div>
        <div id="resultat-events" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function changerCouleur() {
        document.getElementById("element").style.color = "blue";
    }

    function afficherMessage() {
        document.getElementById("resultat-events").textContent = "Vous avez survolé l'élément !";
    }
</script>
<div class="col-md-6">
    <h3 id="dom-modification">Modification du DOM</h3>
    <p>
        La modification du DOM (Document Object Model) permet de changer le contenu, les styles, et la structure de la page web en réponse aux actions de l'utilisateur.
        Cela inclut l'ajout, la suppression, ou la modification d'éléments HTML.
    </p>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple de modification du DOM
// Changer le contenu d'un élément
function changerTexte() {
    document.getElementById("texte-modifiable").textContent = "Texte modifié avec JavaScript!";
}

// Ajouter un nouvel élément
function ajouterElement() {
    let nouvelElement = document.createElement("p");
    nouvelElement.textContent = "Ceci est un nouvel élément ajouté.";
    document.getElementById("conteneur").appendChild(nouvelElement);
}

// Supprimer un élément
function supprimerElement() {
    let elementASupprimer = document.getElementById("texte-modifiable");
    elementASupprimer.remove();
}
</code></pre>

        <button onclick="changerTexte()" class="btn btn-primary">Changer le Texte</button>
        <button onclick="ajouterElement()" class="btn btn-secondary">Ajouter un Élément</button>
        <button onclick="supprimerElement()" class="btn btn-danger">Supprimer l'Élément</button>

        <div id="conteneur" style="margin-top: 10px;">
            <p id="texte-modifiable">Cliquez sur les boutons pour modifier ce texte, ajouter ou supprimer un élément.</p>
        </div>
    </div>
</div>

<script>
    function changerTexte() {
        document.getElementById("texte-modifiable").textContent = "Texte modifié avec JavaScript!";
    }

    function ajouterElement() {
        let nouvelElement = document.createElement("p");
        nouvelElement.textContent = "Ceci est un nouvel élément ajouté.";
        document.getElementById("conteneur").appendChild(nouvelElement);
    }

    function supprimerElement() {
        let elementASupprimer = document.getElementById("texte-modifiable");
        elementASupprimer.remove();
    }
</script>
<div class="col-md-6">
    <h3 id="dom-selection">Sélection du DOM</h3>
    <p>
        En JavaScript, la sélection d'éléments du DOM permet d'accéder et de manipuler les éléments HTML de la page.
        Voici les méthodes courantes pour sélectionner des éléments :
    </p>
    <ul>
        <li><strong>document.getElementById(id)</strong> : Sélectionne un élément par son identifiant.</li>
        <li><strong>document.getElementsByClassName(class)</strong> : Sélectionne tous les éléments avec une classe donnée.</li>
        <li><strong>document.getElementsByTagName(tag)</strong> : Sélectionne tous les éléments avec une balise spécifique.</li>
        <li><strong>document.querySelector(selector)</strong> : Sélectionne le premier élément qui correspond au sélecteur CSS donné.</li>
        <li><strong>document.querySelectorAll(selector)</strong> : Sélectionne tous les éléments qui correspondent au sélecteur CSS donné.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple de sélection d'éléments
// Sélection par ID
let elementParID = document.getElementById("exemple-id");
elementParID.style.color = "blue";  // Change la couleur de texte

// Sélection par classe
let elementsParClasse = document.getElementsByClassName("exemple-classe");
for (let elem of elementsParClasse) {
    elem.style.fontWeight = "bold";
}

// Sélection par tag
let elementsParTag = document.getElementsByTagName("p");
elementsParTag[0].style.fontSize = "18px";

// Sélection avec querySelector
let premierElement = document.querySelector(".exemple-classe");
premierElement.style.textDecoration = "underline";

// Sélection avec querySelectorAll
let tousLesElements = document.querySelectorAll("p");
tousLesElements.forEach(el => el.style.margin = "10px 0");
</code></pre>

        <button onclick="selectionnerElements()" class="btn btn-primary">Appliquer la Sélection</button>
        
        <div id="selection-exemple" style="margin-top: 10px;">
            <p id="exemple-id">Cet élément est sélectionné par ID.</p>
            <p class="exemple-classe">Cet élément est sélectionné par classe.</p>
            <p class="exemple-classe">Un autre élément avec la même classe.</p>
            <p>Élément sélectionné par balise.</p>
        </div>
    </div>
</div>

<script>
    function selectionnerElements() {
        // Sélection par ID
        let elementParID = document.getElementById("exemple-id");
        elementParID.style.color = "blue";  // Change la couleur de texte

        // Sélection par classe
        let elementsParClasse = document.getElementsByClassName("exemple-classe");
        for (let elem of elementsParClasse) {
            elem.style.fontWeight = "bold";
        }

        // Sélection par tag
        let elementsParTag = document.getElementsByTagName("p");
        elementsParTag[0].style.fontSize = "18px";

        // Sélection avec querySelector
        let premierElement = document.querySelector(".exemple-classe");
        premierElement.style.textDecoration = "underline";

        // Sélection avec querySelectorAll
        let tousLesElements = document.querySelectorAll("p");
        tousLesElements.forEach(el => el.style.margin = "10px 0");
    }
</script>

                </div>
            </div>

            <!-- JavaScript Pro -->
            <div class="content-section" id="js-pro">
                <h1><i class="fas fa-laptop-code icon"></i>JavaScript Pro</h1>
                <p>Les fonctionnalités avancées de JavaScript sont essentielles pour les développeurs expérimentés qui cherchent à optimiser leurs applications web.</p>

                <div class="row">
                <div class="col-md-12">
    <h3 id="modules">Modules en JavaScript</h3>
    <p>
        Les modules en JavaScript permettent de structurer le code en le divisant en plusieurs fichiers, chacun ayant une fonctionnalité spécifique. 
        Cette approche améliore la maintenabilité, la réutilisation, et la clarté du code. Avec l'ES6, JavaScript introduit des mots-clés pour exporter 
        et importer des éléments d’un module.
    </p>
    
    <ul>
        <li><strong>export</strong> : Permet de rendre des fonctions, objets ou variables accessibles depuis d'autres fichiers.</li>
        <li><strong>import</strong> : Utilisé pour intégrer des éléments d'un module exporté dans un autre fichier.</li>
    </ul>

    <h4>Avantages des Modules</h4>
    <ul>
        <li><strong>Encapsulation</strong> : Les modules permettent de limiter la portée des variables et fonctions, évitant les conflits globaux.</li>
        <li><strong>Réutilisabilité</strong> : En organisant les fonctionnalités par fichier, on peut facilement réutiliser des modules.</li>
        <li><strong>Maintenabilité</strong> : La structure modulaire rend le code plus lisible et plus simple à maintenir.</li>
    </ul>

    <div class="example-box">
        <h4>Exemple : Création d'un Module JavaScript</h4>
        <p>Imaginons que nous avons un fichier appelé <code>mathUtils.js</code> qui contient des fonctions mathématiques. Nous allons exporter des fonctions pour les utiliser ailleurs.</p>
        
        <pre><code class="language-javascript">// mathUtils.js
export function addition(a, b) {
    return a + b;
}

export function soustraction(a, b) {
    return a - b;
}

// Export par défaut
export default function multiplier(a, b) {
    return a * b;
}
</code></pre>

        <h4>Importer le Module dans un autre Fichier</h4>
        <p>Dans un autre fichier, par exemple <code>main.js</code>, nous pouvons importer ces fonctions pour les utiliser.</p>
        
        <pre><code class="language-javascript">// main.js
import multiplier, { addition, soustraction } from './mathUtils.js';

console.log(addition(5, 3));         // 8
console.log(soustraction(5, 3));     // 2
console.log(multiplier(5, 3));       // 15
</code></pre>
        
        <h4>Explications</h4>
        <ul>
            <li><code>export</code> rend les fonctions accessibles à l'extérieur du fichier <code>mathUtils.js</code>.</li>
            <li><code>import</code> permet d'inclure les fonctions dans <code>main.js</code>.</li>
            <li>La fonction <code>multiplier</code> est exportée par défaut, ce qui signifie que son importation n’exige pas de la nommer entre accolades.</li>
        </ul>
        
        <h4>Autres Fonctions Avancées des Modules</h4>
        <ul>
            <li><strong>Renommer les Importations</strong> : Vous pouvez renommer les éléments importés pour éviter des conflits de nom.</li>
            <li><strong>Réexporter depuis d'autres Modules</strong> : Utilisez <code>export * from './module'</code> pour réexporter tous les éléments d'un module existant.</li>
            <li><strong>Chargement dynamique de Modules</strong> : Avec <code>import()</code>, vous pouvez charger des modules de manière dynamique, par exemple, en fonction de certaines conditions.</li>
        </ul>

        <h4>Exemple : Renommer les Importations</h4>
        <pre><code class="language-javascript">// main.js avec renommer
import { addition as add, soustraction as subtract } from './mathUtils.js';

console.log(add(5, 3));             // 8
console.log(subtract(5, 3));        // 2
</code></pre>

        <h4>Exemple : Chargement Dynamique de Modules</h4>
        <p>Le chargement dynamique permet de charger des modules uniquement si nécessaire, ce qui peut optimiser les performances.</p>
        <pre><code class="language-javascript">// Chargement dynamique
async function chargerMultiplication() {
    const { default: multiplier } = await import('./mathUtils.js');
    console.log(multiplier(5, 3));   // 15
}

chargerMultiplication();
</code></pre>

        <p>Ce cours couvre les bases ainsi que les techniques avancées pour une utilisation professionnelle des modules en JavaScript.</p>
    </div>
</div>


<div class="col-md-12">
    <h3 id="fetch">API Fetch</h3>
    <p>
        L'API <code>fetch</code> est une méthode moderne et puissante en JavaScript pour effectuer des requêtes HTTP et interagir avec des API. 
        Elle utilise des Promises, rendant le code asynchrone plus lisible et facile à gérer.
    </p>

    <ul>
        <li><strong>Méthode GET</strong> : Utilisée pour récupérer des données depuis un serveur.</li>
        <li><strong>Méthode POST</strong> : Utilisée pour envoyer des données au serveur, souvent dans des opérations de création.</li>
        <li><strong>Méthodes PUT et DELETE</strong> : Utilisées respectivement pour mettre à jour et supprimer des ressources.</li>
    </ul>

    <div class="example-box">
        <h4>Exemple : Effectuer une Requête GET</h4>
        <p>Dans cet exemple, nous effectuons une requête pour obtenir des données d'un exemple d'API.</p>
        
        <pre><code class="language-javascript">// Exemple de requête GET
fetch('https://jsonplaceholder.typicode.com/posts/1')
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur de réseau');
        }
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error('Erreur:', error));
</code></pre>

        <p>
            <strong>Explications :</strong> La méthode <code>fetch</code> retourne une Promise. Une fois la réponse reçue, 
            nous utilisons <code>response.json()</code> pour transformer la réponse en format JSON, qui est ensuite traité.
        </p>

        <h4>Exemple : Requête POST pour Envoyer des Données</h4>
        <p>Dans cet exemple, nous envoyons des données au serveur en utilisant une requête POST.</p>
        
        <pre><code class="language-javascript">// Exemple de requête POST
fetch('https://jsonplaceholder.typicode.com/posts', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        title: 'Mon titre',
        body: 'Contenu de l\'article',
        userId: 1
    })
})
    .then(response => response.json())
    .then(data => console.log('Données envoyées:', data))
    .catch(error => console.error('Erreur:', error));
</code></pre>

        <p>
            <strong>Explications :</strong> La requête POST utilise les options <code>method</code>, <code>headers</code>, 
            et <code>body</code>. Nous définissons <code>Content-Type</code> pour indiquer que nous envoyons des données au format JSON.
        </p>

        <h4>Utilisation de <code>async/await</code> pour Simplifier l'Utilisation de Fetch</h4>
        <p>L'utilisation de <code>async/await</code> permet de rendre le code encore plus lisible.</p>
        
        <pre><code class="language-javascript">// Exemple avec async/await
async function obtenirArticle() {
    try {
        const response = await fetch('https://jsonplaceholder.typicode.com/posts/1');
        if (!response.ok) throw new Error('Erreur de réseau');
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Erreur:', error);
    }
}

obtenirArticle();
</code></pre>

        <h4>Requête PUT pour Mettre à Jour une Ressource</h4>
        <pre><code class="language-javascript">// Exemple de requête PUT
fetch('https://jsonplaceholder.typicode.com/posts/1', {
    method: 'PUT',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        id: 1,
        title: 'Titre mis à jour',
        body: 'Contenu mis à jour',
        userId: 1
    })
})
    .then(response => response.json())
    .then(data => console.log('Données mises à jour:', data))
    .catch(error => console.error('Erreur:', error));
</code></pre>

        <h4>Requête DELETE pour Supprimer une Ressource</h4>
        <pre><code class="language-javascript">// Exemple de requête DELETE
fetch('https://jsonplaceholder.typicode.com/posts/1', {
    method: 'DELETE'
})
    .then(response => {
        if (response.ok) console.log('Ressource supprimée');
    })
    .catch(error => console.error('Erreur:', error));
</code></pre>
        
        <p>Ces exemples couvrent les opérations HTTP de base en utilisant <code>fetch</code>, et présentent des bonnes pratiques pour gérer les erreurs.</p>
    </div>
</div>

                </div>

                <div class="row">
                <div class="col-md-12">
                <h3 id="webstorage">Web Storage</h3>
<p>
    Le <strong>Web Storage</strong> est une API permettant de stocker des données côté client dans le navigateur. 
    Il inclut deux mécanismes principaux :
</p>
<ul>
    <li><strong>localStorage</strong> : Stocke les données sans date d'expiration, même après la fermeture du navigateur.</li>
    <li><strong>sessionStorage</strong> : Stocke les données pendant la session de navigation en cours. Les données sont supprimées une fois la session fermée.</li>
</ul>

<h4>Méthodes Principales de Web Storage</h4>
<p>Les méthodes suivantes permettent d'interagir avec <code>localStorage</code> et <code>sessionStorage</code> :</p>

<ul>
    <li>
        <strong>setItem(key, value)</strong> : Cette méthode permet de stocker une donnée dans <code>localStorage</code> ou <code>sessionStorage</code>. Elle prend deux paramètres :
        <ul>
            <li><code>key</code> : la clé sous laquelle la donnée sera stockée.</li>
            <li><code>value</code> : la valeur de la donnée à stocker.</li>
        </ul>
        <p><em>Exemple :</em></p>
        <pre><code class="language-javascript">// Stocker une donnée
localStorage.setItem('nom', 'Alice'); // Stocke 'Alice' sous la clé 'nom'
sessionStorage.setItem('sessionUser', 'John'); // Stocke 'John' pour la session active</code></pre>
    </li>

    <li>
        <strong>getItem(key)</strong> : Récupère une donnée stockée en utilisant la clé. Retourne <code>null</code> si aucune donnée n'est trouvée pour la clé donnée.
        <p><em>Exemple :</em></p>
        <pre><code class="language-javascript">// Récupérer une donnée
let nom = localStorage.getItem('nom'); // Récupère 'Alice'
console.log(nom); // Affiche "Alice"</code></pre>
    </li>

    <li>
        <strong>removeItem(key)</strong> : Supprime un élément spécifique du stockage en utilisant la clé fournie, ce qui permet de libérer de l'espace pour d'autres données.
        <p><em>Exemple :</em></p>
        <pre><code class="language-javascript">// Supprimer une donnée
localStorage.removeItem('nom'); // Supprime l'élément avec la clé 'nom'</code></pre>
    </li>

    <li>
        <strong>clear()</strong> : Supprime toutes les données stockées dans <code>localStorage</code> ou <code>sessionStorage</code>, en fonction de l'API utilisée.
        <p><em>Exemple :</em></p>
        <pre><code class="language-javascript">// Effacer tout le stockage
localStorage.clear(); // Supprime toutes les données de localStorage
sessionStorage.clear(); // Supprime toutes les données de sessionStorage</code></pre>
    </li>
</ul>


    <div class="example-box">
        <h4>Exemple : Utilisation de <code>localStorage</code></h4>
        <p>Dans cet exemple, nous stockons, récupérons et supprimons un élément depuis le <code>localStorage</code>.</p>

        <pre><code class="language-javascript">// Stockage de données
localStorage.setItem('nom', 'Alice');

// Récupération de données
let nom = localStorage.getItem('nom');
console.log('Nom:', nom); // Affiche "Nom: Alice"

// Suppression de données
localStorage.removeItem('nom');
</code></pre>

        <button onclick="utiliserLocalStorage()" class="btn btn-primary">Tester localStorage</button>
        <div id="resultat-localStorage" style="margin-top: 10px; font-weight: bold;"></div>

        <h4>Exemple : Utilisation de <code>sessionStorage</code></h4>
        <p>Dans cet exemple, nous stockons, récupérons et supprimons un élément depuis le <code>sessionStorage</code>.</p>

        <pre><code class="language-javascript">// Stockage de données
sessionStorage.setItem('sessionUser', 'John Doe');

// Récupération de données
let sessionUser = sessionStorage.getItem('sessionUser');
console.log('Session User:', sessionUser); // Affiche "Session User: John Doe"

// Suppression de données
sessionStorage.removeItem('sessionUser');
</code></pre>

        <button onclick="utiliserSessionStorage()" class="btn btn-primary">Tester sessionStorage</button>
        <div id="resultat-sessionStorage" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Section ajoutée pour la gestion complète de Web Storage -->
    <div class="example-box mt-5">
        <h4>Gestion Complète : Sauvegarder, Charger et Effacer</h4>

        <!-- Formulaire pour entrer les informations -->
        <div class="mb-3">
            <label for="userName" class="form-label">Nom d'utilisateur :</label>
            <input type="text" id="userName" class="form-control" placeholder="Entrez votre nom">
        </div>
        <div class="mb-3">
            <label for="userColor" class="form-label">Couleur préférée :</label>
            <input type="color" id="userColor" class="form-control">
        </div>

        <button class="btn btn-danger" onclick="saveToLocalStorage()">Sauvegarder dans localStorage</button>
        <button class="btn btn-secondary" onclick="saveToSessionStorage()">Sauvegarder dans sessionStorage</button>
        <button class="btn btn-warning" onclick="clearStorage()">Effacer le stockage</button>

        <div id="storageResult" class="mt-4"></div>
    </div>
</div>

<script>
// Fonction pour tester l'utilisation de localStorage
function utiliserLocalStorage() {
    // Stockage de données
    localStorage.setItem('nom', 'Alice');

    // Récupération de données
    let nom = localStorage.getItem('nom');

    // Affichage du résultat
    document.getElementById('resultat-localStorage').innerHTML = 
        "Stocké dans localStorage : Nom = " + nom;

    // Suppression de données
    localStorage.removeItem('nom');
}

// Fonction pour tester l'utilisation de sessionStorage
function utiliserSessionStorage() {
    // Stockage de données
    sessionStorage.setItem('sessionUser', 'John Doe');

    // Récupération de données
    let sessionUser = sessionStorage.getItem('sessionUser');

    // Affichage du résultat
    document.getElementById('resultat-sessionStorage').innerHTML = 
        "Stocké dans sessionStorage : Utilisateur = " + sessionUser;

    // Suppression de données
    sessionStorage.removeItem('sessionUser');
}

// Fonction pour sauvegarder dans localStorage
function saveToLocalStorage() {
    const userName = document.getElementById("userName").value;
    const userColor = document.getElementById("userColor").value;

    if (userName && userColor) {
        localStorage.setItem("userName", userName);
        localStorage.setItem("userColor", userColor);
        displayResult("Données sauvegardées dans localStorage !");
    } else {
        displayResult("Veuillez entrer toutes les informations.", "danger");
    }
}

// Fonction pour sauvegarder dans sessionStorage
function saveToSessionStorage() {
    const userName = document.getElementById("userName").value;
    const userColor = document.getElementById("userColor").value;

    if (userName && userColor) {
        sessionStorage.setItem("userName", userName);
        sessionStorage.setItem("userColor", userColor);
        displayResult("Données sauvegardées dans sessionStorage !");
    } else {
        displayResult("Veuillez entrer toutes les informations.", "danger");
    }
}

// Fonction pour afficher un message de résultat
function displayResult(message, type = "success") {
    const resultDiv = document.getElementById("storageResult");
    resultDiv.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
}

// Fonction pour effacer les données du stockage
function clearStorage() {
    localStorage.clear();
    sessionStorage.clear();
    displayResult("Les données ont été effacées.");
}

// Chargement des données lors de l'ouverture de la page
document.addEventListener("DOMContentLoaded", () => {
    const userName = localStorage.getItem("userName") || sessionStorage.getItem("userName");
    const userColor = localStorage.getItem("userColor") || sessionStorage.getItem("userColor");

    if (userName && userColor) {
        document.getElementById("userName").value = userName;
        document.getElementById("userColor").value = userColor;
        displayResult("Données chargées depuis le stockage.");
    }
});
</script>



<div class="col-md-12">
    <h3 id="json">JSON</h3>
    <p>
        JSON, ou JavaScript Object Notation, est un format léger et lisible de représentation de données en texte structuré. 
        Il est largement utilisé pour échanger des informations entre le client et le serveur.
    </p>
    <ul>
        <li><strong>Simplicité</strong> : JSON est facile à lire et à écrire pour les humains et simple à interpréter pour les machines.</li>
        <li><strong>Structure</strong> : JSON utilise des paires clé-valeur, similaires aux objets JavaScript.</li>
        <li><strong>Compatibilité</strong> : JSON est indépendant du langage et peut être utilisé avec de nombreux langages de programmation.</li>
    </ul>

    <div class="example-box">
        <h4>Exemple : Conversion d'un objet JavaScript en JSON</h4>
        <pre><code class="language-javascript">// Objet JavaScript
const utilisateur = {
    nom: "Alice",
    age: 25,
    pays: "France"
};

// Conversion de l'objet en JSON
const jsonUtilisateur = JSON.stringify(utilisateur);
console.log(jsonUtilisateur); // Affiche le JSON sous forme de texte
</code></pre>

        <button onclick="convertirEnJSON()" class="btn btn-primary">Convertir en JSON</button>
        <div id="resultat-json" style="margin-top: 10px; font-weight: bold;"></div>

        <h4>Exemple : Conversion de JSON en Objet JavaScript</h4>
        <pre><code class="language-javascript">// Chaîne JSON
const dataJSON = '{"nom": "Bob", "age": 30, "pays": "Canada"}';

// Conversion du JSON en objet JavaScript
const objetUtilisateur = JSON.parse(dataJSON);
console.log(objetUtilisateur); // Affiche l'objet JavaScript
</code></pre>

        <button onclick="convertirEnObjet()" class="btn btn-primary">Convertir en Objet JavaScript</button>
        <div id="resultat-objet" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function convertirEnJSON() {
        const utilisateur = {
            nom: "Alice",
            age: 25,
            pays: "France"
        };

        // Conversion de l'objet en JSON
        const jsonUtilisateur = JSON.stringify(utilisateur);

        // Affichage du résultat
        document.getElementById("resultat-json").innerHTML = "Objet en JSON : " + jsonUtilisateur;
    }

    function convertirEnObjet() {
        const dataJSON = '{"nom": "Bob", "age": 30, "pays": "Canada"}';

        // Conversion du JSON en objet JavaScript
        const objetUtilisateur = JSON.parse(dataJSON);

        // Affichage du résultat
        document.getElementById("resultat-objet").innerHTML = 
            "JSON en Objet : Nom = " + objetUtilisateur.nom + ", Age = " + objetUtilisateur.age + ", Pays = " + objetUtilisateur.pays;
    }
</script>
<div class="col-md-12">
    <h3 id="poo">Programmation Orientée Objet (POO) en JavaScript</h3>
    <p>
        La <strong>Programmation Orientée Objet (POO)</strong> est un paradigme de programmation basé sur la notion d’<strong>objets</strong>, lesquels représentent des entités ayant des caractéristiques (propriétés) et des comportements (méthodes).
        En JavaScript, bien qu’étant à l’origine un langage orienté prototype, la POO est maintenant pleinement intégrée grâce aux <strong>classes</strong> depuis la spécification ECMAScript 6 (ES6).
    </p>

    <h4>Concepts Fondamentaux de la POO</h4>
    <ul>
        <li><strong>Objet</strong> : Instance d’une classe regroupant des données et des fonctionnalités.</li>
        <li><strong>Classe</strong> : Modèle définissant les propriétés et comportements d’un objet. Définie avec le mot-clé <code>class</code>.</li>
        <li><strong>Constructeur</strong> : Méthode spéciale <code>constructor</code> appelée automatiquement lors de la création d'un objet.</li>
        <li><strong>Méthode</strong> : Fonction définie dans une classe pour interagir avec l’objet.</li>
        <li><strong>Héritage</strong> : Mécanisme permettant de créer une classe basée sur une autre.</li>
        <li><strong>Encapsulation</strong> : Restreindre l'accès aux propriétés pour un meilleur contrôle.</li>
        <li><strong>Polymorphisme</strong> : Traitement uniforme d'objets de types différents.</li>
    </ul>

    <h4>Exemple de Code avec Explications</h4>
    <p>Ce code utilise plusieurs concepts de POO : création de classes, héritage, méthodes et surcharge de méthodes.</p>

    <div class="example-box">
        <pre><code class="language-javascript">// Définition de la classe de base Animal
class Animal {
    constructor(nom, age) {
        this.nom = nom; // Propriété publique
        this.age = age;
    }

    // Méthode de base
    sePresenter() {
        return `Je suis un ${this.nom} et j'ai ${this.age} ans.`;
    }
}

// Sous-classe Chat qui hérite de Animal
class Chat extends Animal {
    constructor(nom, age, couleur) {
        super(nom, age); // Appel du constructeur parent
        this.couleur = couleur;
    }

    // Surcharge de méthode
    sePresenter() {
        return `Je suis un chat de couleur ${this.couleur}, mon nom est ${this.nom}.`;
    }

    miauler() {
        return `${this.nom} fait "Miaou !"`;
    }
}

// Exécution des exemples
function creerExemplesPOO() {
    const animal = new Animal("Chien", 5);
    const chat = new Chat("Whiskers", 3, "gris");

    document.getElementById("resultat-poo").innerHTML = 
        animal.sePresenter() + "<br>" + 
        chat.sePresenter() + "<br>" + 
        chat.miauler();
}</code></pre>
        <button onclick="creerExemplesPOO()" class="btn btn-primary">Exécuter l'Exemple POO</button>
        <div id="resultat-poo" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    // Classe de base Animal
    class Animal {
        constructor(nom, age) {
            this.nom = nom;
            this.age = age;
        }

        sePresenter() {
            return `Je suis un ${this.nom} et j'ai ${this.age} ans.`;
        }
    }

    // Sous-classe Chat
    class Chat extends Animal {
        constructor(nom, age, couleur) {
            super(nom, age);
            this.couleur = couleur;
        }

        sePresenter() {
            return `Je suis un chat de couleur ${this.couleur}, mon nom est ${this.nom}.`;
        }

        miauler() {
            return `${this.nom} fait "Miaou !"`;
        }
    }

    // Fonction d'exécution
    function creerExemplesPOO() {
        const animal = new Animal("Chien", 5);
        const chat = new Chat("Whiskers", 3, "gris");

        document.getElementById("resultat-poo").innerHTML = 
            animal.sePresenter() + "<br>" + 
            chat.sePresenter() + "<br>" + 
            chat.miauler();
    }
</script>
<div class="col-md-12">
    <h3 id="dom-advanced">Manipulation Avancée du DOM en JavaScript</h3>
    <p>
        La manipulation du DOM (Document Object Model) permet d'interagir avec les éléments d'une page HTML via JavaScript, 
        en modifiant leur contenu, style ou comportement. Cette section explore des techniques avancées pour une manipulation 
        plus dynamique et interactive.
    </p>

    <h4>Concepts et Techniques Avancées de Manipulation du DOM</h4>
    <ul>
        <li><strong>Création et Suppression d’Éléments</strong> : Ajouter ou supprimer dynamiquement des éléments du DOM.</li>
        <li><strong>Attributs et Propriétés</strong> : Manipuler les attributs et propriétés d’un élément, comme les classes, id, et autres attributs HTML.</li>
        <li><strong>Écouteurs d'Événements Dynamiques</strong> : Ajouter des événements aux éléments dynamiquement créés dans le DOM.</li>
        <li><strong>Clonage d'Éléments</strong> : Dupliquer des éléments existants dans le DOM.</li>
    </ul>

    <h4>Exemples de Code avec Explications</h4>
    <p>Ces exemples montrent comment utiliser ces techniques pour manipuler le DOM de manière avancée.</p>

    <!-- Exemple de code avec explications -->
    <div class="example-box">
        <pre><code class="language-javascript">// 1. Création et ajout d'un nouvel élément
const liste = document.getElementById("ma-liste");
const nouvelElement = document.createElement("li");
nouvelElement.textContent = "Nouvel élément";
liste.appendChild(nouvelElement);

// 2. Modification d'attributs et propriétés
nouvelElement.classList.add("nouvelle-classe");   // Ajoute une classe
nouvelElement.id = "element-special";             // Définit un id

// 3. Ajout d'un événement à un élément nouvellement créé
nouvelElement.addEventListener("click", () => {
    alert("Élément cliqué !");
});

// 4. Clonage d'un élément existant
const cloneElement = nouvelElement.cloneNode(true);
liste.appendChild(cloneElement); // Ajoute le clone à la liste

// 5. Suppression d'un élément
setTimeout(() => {
    liste.removeChild(cloneElement); // Supprime le clone après 3 secondes
}, 3000);</code></pre>

        <button onclick="executerDOMManipulation()" class="btn btn-primary">Exécuter les Manipulations DOM</button>

        <ul id="ma-liste" style="margin-top: 10px;">
            <li>Élément existant 1</li>
            <li>Élément existant 2</li>
        </ul>

        <div id="resultat-dom" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function executerDOMManipulation() {
        const liste = document.getElementById("ma-liste");

        // 1. Création et ajout d'un nouvel élément
        const nouvelElement = document.createElement("li");
        nouvelElement.textContent = "Nouvel élément";
        liste.appendChild(nouvelElement);

        // 2. Modification d'attributs et propriétés
        nouvelElement.classList.add("nouvelle-classe");   // Ajoute une classe
        nouvelElement.id = "element-special";             // Définit un id

        // 3. Ajout d'un événement à un élément nouvellement créé
        nouvelElement.addEventListener("click", () => {
            alert("Élément cliqué !");
        });

        // 4. Clonage d'un élément existant
        const cloneElement = nouvelElement.cloneNode(true);
        liste.appendChild(cloneElement); // Ajoute le clone à la liste

        // 5. Suppression d'un élément après 3 secondes
        setTimeout(() => {
            liste.removeChild(cloneElement); // Supprime le clone après 3 secondes
        }, 3000);
    }
</script>
<div class="col-md-12">
    <h3 id="callbacks-closures">Callbacks et Closures en JavaScript</h3>
    <p>
        Les <strong>callbacks</strong> et <strong>closures</strong> sont des concepts fondamentaux en JavaScript, 
        surtout pour la programmation asynchrone et la gestion de la portée des variables. Ils sont essentiels pour 
        écrire un code efficace, modulaire et dynamique.
    </p>

    <h4>1. Callbacks</h4>
    <p>
        Un <strong>callback</strong> est une fonction passée en argument à une autre fonction, qui est ensuite appelée 
        à un moment précis. Les callbacks sont très utilisés pour gérer des opérations asynchrones, telles que les 
        requêtes HTTP ou les timers.
    </p>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple d'utilisation de callback
function saluer(nom, callback) {
    console.log("Bonjour, " + nom + " !");
    callback();
}

function auRevoir() {
    console.log("Au revoir !");
}

// Appel avec un callback
saluer("Alice", auRevoir);</code></pre>

        <p>Dans cet exemple, la fonction <code>auRevoir</code> est passée en tant que callback à <code>saluer</code> et est exécutée après l'affichage du message de bienvenue.</p>
    </div>

    <h4>2. Closures</h4>
    <p>
        Une <strong>closure</strong> est une fonction qui se souvient de l'environnement dans lequel elle a été créée, 
        même après que cet environnement a cessé d'exister. Les closures permettent de créer des variables "privées" 
        et de les garder accessibles dans des fonctions internes.
    </p>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple de closure
function creerCompteur() {
    let compteur = 0;
    return function() {
        compteur++;
        console.log("Compteur : " + compteur);
    };
}

const incrementer = creerCompteur();
incrementer(); // Affiche : Compteur : 1
incrementer(); // Affiche : Compteur : 2</code></pre>

        <p>Dans cet exemple, la variable <code>compteur</code> reste accessible à la fonction interne, même après que <code>creerCompteur</code> a terminé son exécution.</p>
    </div>

    <h4>Explications Détaillées des Concepts</h4>

    <h5>Callbacks : Fonctionnement et Utilisation</h5>
    <p>
        Les callbacks permettent d'exécuter une fonction après qu'une autre a terminé, ce qui est crucial pour les opérations asynchrones. 
        Par exemple, lors de la récupération de données depuis une API, un callback est exécuté après que les données sont prêtes.
    </p>

    <ul>
        <li><strong>Simplicité</strong> : Facile à comprendre pour des opérations séquentielles.</li>
        <li><strong>Flexibilité</strong> : Permet de gérer la suite d'opérations après une tâche asynchrone.</li>
        <li><strong>Problème de callback hell</strong> : Un inconvénient des callbacks est la difficulté de lire le code lorsque de nombreux callbacks sont imbriqués (appelé "callback hell").</li>
    </ul>

    <h5>Closures : Portée et Avantages</h5>
    <p>
        Les closures créent un environnement où les variables locales de la fonction parente restent accessibles dans les fonctions internes, 
        même après la fin de la fonction parente. Elles sont souvent utilisées pour créer des variables "privées".
    </p>

    <ul>
        <li><strong>Encapsulation</strong> : Permet de créer des données privées, accessibles uniquement via des fonctions de contrôle.</li>
        <li><strong>Mémoire</strong> : Garde les données en mémoire tant que la closure est accessible.</li>
    </ul>

    <h6>Exemples Interactifs</h6>
    
    <button onclick="exempleCallback()" class="btn btn-primary">Exécuter Callback</button>
    <button onclick="exempleClosure()" class="btn btn-primary">Exécuter Closure</button>
    
    <div id="resultat-callback-closure" style="margin-top: 10px; font-weight: bold;"></div>
</div>

<script>
    // Exemple de Callback
    function exempleCallback() {
        function saluer(nom, callback) {
            document.getElementById("resultat-callback-closure").innerHTML = "Bonjour, " + nom + " !";
            callback();
        }

        function auRevoir() {
            document.getElementById("resultat-callback-closure").innerHTML += "<br>Au revoir !";
        }

        saluer("Alice", auRevoir);
    }

    // Exemple de Closure
    function exempleClosure() {
        function creerCompteur() {
            let compteur = 0;
            return function() {
                compteur++;
                document.getElementById("resultat-callback-closure").innerHTML = "Compteur : " + compteur;
            };
        }

        const incrementer = creerCompteur();
        incrementer();
        setTimeout(incrementer, 1000); // Affiche le compteur incrémenté après 1 seconde
    }
</script>
<div class="col-md-12">
    <h3 id="langage-json">Manipulation de JSON</h3>
    <p>
    <i class="fas fa-database"></i> **JSON (JavaScript Object Notation)**<br>
    JSON est un format léger pour l’échange de données structuré entre un client et un serveur. 🌐 Il est particulièrement apprécié pour sa <strong>lisibilité</strong> et <strong>simplicité</strong>, car :
    <ul>
        <li><i class="fas fa-eye"></i> **Facile à lire et à écrire :** Le format JSON est intuitif pour les humains, avec une structure similaire aux objets JavaScript.</li>
        <li><i class="fas fa-robot"></i> **Facile à analyser et à générer :** Les machines, comme les navigateurs ou serveurs, peuvent traiter rapidement le JSON en utilisant des méthodes comme <code>JSON.parse()</code> pour convertir en objet et <code>JSON.stringify()</code> pour convertir en chaîne.</li>
    </ul>
    JSON est couramment utilisé pour transmettre des données de manière efficace et standardisée entre des applications, des API ou lors de l'échange d'informations en temps réel. 🚀
</p>


    <h4>1. Structure de JSON</h4>
    <p>Les objets JSON sont composés de paires clé-valeur. Voici un exemple de structure JSON :</p>
    <div class="example-box">
        <pre><code class="language-json">
{
    "nom": "Alice",
    "age": 25,
    "ville": "Paris",
    "interets": ["lecture", "voyages", "musique"],
    "emploi": {
        "poste": "développeur",
        "entreprise": "TechCorp"
    }
}</code></pre>
    </div>

    <h4>2. Conversion entre JSON et JavaScript</h4>
    <p>
        Pour manipuler JSON en JavaScript, nous utilisons les méthodes <code>JSON.stringify()</code> pour convertir un objet JavaScript en JSON,
        et <code>JSON.parse()</code> pour convertir une chaîne JSON en objet JavaScript.
    </p>

    <div class="example-box">
        <pre><code class="language-javascript">// Conversion d'un objet JavaScript en JSON
const personne = {
    nom: "Alice",
    age: 25,
    ville: "Paris"
};
const json = JSON.stringify(personne);
console.log(json); // Résultat : {"nom":"Alice","age":25,"ville":"Paris"}

// Conversion d'une chaîne JSON en objet JavaScript
const jsonString = '{"nom":"Alice","age":25,"ville":"Paris"}';
const objet = JSON.parse(jsonString);
console.log(objet.nom); // Résultat : Alice</code></pre>
    </div>

    <h4>3. Manipulation de Données JSON Issues d'une API</h4>
    <p>
        Souvent, on récupère des données JSON depuis une API en utilisant <code>fetch</code>. Voici comment récupérer et afficher des données JSON depuis une API.
    </p>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple de requête API avec fetch
fetch('https://jsonplaceholder.typicode.com/users/1')
    .then(response => response.json()) // Conversion JSON
    .then(data => {
        console.log("Nom:", data.name);
        console.log("Ville:", data.address.city);
    })
    .catch(error => console.error('Erreur:', error));</code></pre>

        <button onclick="exempleFetch()" class="btn btn-primary">Exécuter Fetch JSON</button>
        <div id="resultat-fetch" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <h4>4. Modifier et Afficher des Données JSON en JavaScript</h4>
    <p>Une fois les données converties en objet JavaScript, vous pouvez les manipuler comme n’importe quel autre objet.</p>

    <div class="example-box">
        <pre><code class="language-javascript">// Manipulation des données JSON
let utilisateur = {
    nom: "Bob",
    age: 30,
    interets: ["sport", "cinéma"]
};

// Ajout d'un nouveau champ
utilisateur.email = "bob@example.com";

// Suppression d'un champ
delete utilisateur.age;

// Affichage des données modifiées
console.log(utilisateur);</code></pre>

        <button onclick="afficherDonneesJson()" class="btn btn-primary">Afficher les Données JSON</button>
        <div id="resultat-json" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    // Fonction pour l'exemple de Fetch
    function exempleFetch() {
        fetch('https://jsonplaceholder.typicode.com/users/1')
            .then(response => response.json())
            .then(data => {
                document.getElementById("resultat-fetch").innerHTML = 
                    "Nom : " + data.name + "<br>" +
                    "Ville : " + data.address.city;
            })
            .catch(error => {
                document.getElementById("resultat-fetch").innerHTML = "Erreur : " + error;
            });
    }

    // Fonction pour afficher et manipuler JSON
    function afficherDonneesJson() {
        let utilisateur = {
            nom: "Bob",
            age: 30,
            interets: ["sport", "cinéma"]
        };

        // Modification des données
        utilisateur.email = "bob@example.com";
        delete utilisateur.age;

        // Affichage dans l'interface
        document.getElementById("resultat-json").innerHTML = JSON.stringify(utilisateur, null, 2);
    }
</script>
<div class="col-md-12">
    <h3 id="web-workers">Web Workers</h3>
    <p>
    <i class="fas fa-tachometer-alt"></i> **Qu'est-ce qu'un Web Worker ?**<br>
    Les <strong>Web Workers</strong> en JavaScript permettent d'exécuter des tâches en arrière-plan dans un <strong>thread séparé</strong> de celui de l'interface utilisateur (UI). Cela aide à maintenir l'UI fluide tout en effectuant des tâches lourdes, comme des calculs intensifs ou des opérations de traitement de données. 📈<br><br>

    <i class="fas fa-check-circle"></i> **Pourquoi utiliser les Web Workers ?**<br>
    <ul>
        <li><strong>Amélioration des performances :</strong> Exécuter des tâches lourdes en arrière-plan empêche de bloquer l'UI, la rendant plus fluide et réactive. 🚀</li>
        <li><strong>Prévention des blocages :</strong> En isolant les calculs ou manipulations de données importantes, on évite les ralentissements et erreurs dans le navigateur. 🛠️</li>
        <li><strong>Multitâche en JavaScript :</strong> Les Web Workers apportent un aspect multitâche, permettant de diviser les tâches dans une application. 🖥️</li>
    </ul>

    <i class="fas fa-layer-group"></i> **Types de Web Workers**<br>
    <strong>1. Dedicated Workers :</strong> Les plus courants, ces Workers sont créés pour une page spécifique et s'arrêtent lorsque l'on quitte cette page.<br>
    <strong>2. Shared Workers :</strong> Permettent plusieurs connexions à partir de différentes pages, partageant les mêmes données. 🧩<br>
</p>


    <div class="example-box">
        <pre><code class="language-javascript">// Création et lancement d'un Web Worker
function startWorker() {
    if (window.Worker) {
        // Création du Worker avec le fichier worker.js
        const worker = new Worker('worker.js');

        // Envoi d'un message au Worker (par exemple, 5 millions pour un calcul de somme)
        worker.postMessage(5000000);

        // Réception du résultat du Worker
        worker.onmessage = function(event) {
            document.getElementById("resultat-worker").innerHTML = "Résultat : " + event.data;
            console.log("Résultat reçu du Worker :", event.data);
        };

        // Gestion des erreurs
        worker.onerror = function(error) {
            document.getElementById("resultat-worker").innerHTML = "Erreur : " + error.message;
            console.error("Erreur dans le Worker :", error.message);
        };
    } else {
        document.getElementById("resultat-worker").innerHTML = "Les Web Workers ne sont pas pris en charge dans ce navigateur.";
    }
}
</code></pre>

        <button onclick="startWorker()" class="btn btn-primary">Démarrer le Web Worker</button>
        <div id="resultat-worker" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>
<script>
    function startWorker() {
    if (window.Worker) {
        // Création du Worker avec le fichier worker.js
        const worker = new Worker('assets/js/worker.js');

        // Envoi d'un message au Worker (par exemple, 5 millions pour un calcul de somme)
        worker.postMessage(5000000);

        // Réception du résultat du Worker
        worker.onmessage = function(event) {
            document.getElementById("resultat-worker").innerHTML = "Résultat : " + event.data;
            console.log("Résultat reçu du Worker :", event.data);
        };

        // Gestion des erreurs
        worker.onerror = function(error) {
            document.getElementById("resultat-worker").innerHTML = "Erreur : " + error.message;
            console.error("Erreur dans le Worker :", error.message);
        };
    } else {
        document.getElementById("resultat-worker").innerHTML = "Les Web Workers ne sont pas pris en charge dans ce navigateur.";
    }
}
</script>

<div class="col-md-12">
    <h3 id="gestion-erreurs-debugging">Gestion des erreurs et Debugging</h3>
    <p>
        <i class="fas fa-bug"></i> La **gestion des erreurs** et le **debugging** en JavaScript sont essentiels pour garantir le bon fonctionnement de votre code et une meilleure expérience utilisateur. L’identification des erreurs permet de corriger les bugs et d’assurer la robustesse de l'application.
    </p>
    
    <h4><i class="fas fa-tools"></i> Types d'erreurs courantes :</h4>
    <ul>
        <li><strong>Erreur de syntaxe :</strong> Une erreur dans l'écriture du code, par exemple un point-virgule manquant. (<code>SyntaxError</code>)</li>
        <li><strong>Erreur de référence :</strong> Se produit lorsque le code essaie d'accéder à une variable non définie. (<code>ReferenceError</code>)</li>
        <li><strong>Erreur de type :</strong> Arrive lorsque le code essaie d'utiliser une valeur d'une manière inappropriée. (<code>TypeError</code>)</li>
    </ul>

    <h4><i class="fas fa-shield-alt"></i> Gestion des erreurs avec <code>try...catch</code> :</h4>
    <p>Le bloc <code>try...catch</code> est utilisé pour capturer et gérer les erreurs lors de l'exécution du code.</p>
    <div class="example-box">
        <pre><code class="language-javascript">// Exemple d'utilisation de try...catch
try {
    let resultat = 10 / 0; // Test de division par zéro
    console.log(resultat);
} catch (erreur) {
    console.error("Erreur détectée : " + erreur.message);
} finally {
    console.log("Fin de la tentative de gestion.");
}</code></pre>
        <p><strong>Explication :</strong> Dans cet exemple, le code dans <code>try</code> est exécuté. Si une erreur survient, le code dans <code>catch</code> capture et affiche l'erreur sans interrompre le programme.</p>
    </div>

    <h4><i class="fas fa-search"></i> Outils de debugging :</h4>
    <ul>
        <li><strong>Console JavaScript :</strong> Utilisez <code>console.log()</code>, <code>console.error()</code>, et <code>console.warn()</code> pour afficher des messages dans la console.</li>
        <li><strong>Points d'arrêt :</strong> Dans l'inspecteur du navigateur, ajoutez des points d’arrêt pour exécuter le code ligne par ligne et repérer les erreurs.</li>
        <li><strong>Debugger :</strong> Utilisez le mot-clé <code>debugger</code> dans votre code pour déclencher un arrêt lorsque l'inspecteur est ouvert.</li>
    </ul>

    <h4><i class="fas fa-lightbulb"></i> Bonnes pratiques de debugging :</h4>
    <ul>
        <li><strong>Isoler le problème :</strong> Testez des blocs de code individuellement pour identifier la source de l’erreur.</li>
        <li><strong>Documentation des erreurs :</strong> Notez les erreurs et leurs solutions, elles peuvent réapparaître plus tard.</li>
        <li><strong>Approche itérative :</strong> Corrigez une erreur à la fois et testez le code à chaque modification.</li>
    </ul>
</div>

<div class="col-md-12">
    <h3 id="service-workers-pwa"><i class="fas fa-mobile-alt"></i> Service Workers & PWA</h3>
    <p>
        <strong>Service Workers</strong> sont des scripts exécutés en arrière-plan par le navigateur, permettant aux applications web d'agir comme des applications natives, même hors ligne.
        Ils jouent un rôle crucial dans les applications Web Progressives (<strong>PWA</strong>) pour fournir une expérience utilisateur plus riche et accessible. 
    </p>
    <p>
        <i class="fas fa-bolt"></i> <strong>Mémoire rapide :</strong> 
        Les Service Workers interceptent les requêtes réseau, gèrent le cache, et permettent la gestion d'événements en arrière-plan. 
        Parfait pour des fonctions comme l'accès en mode déconnecté ou les notifications push.
    </p>
    <ul>
        <li><strong>Installation :</strong> Les Service Workers doivent être installés et activés par le navigateur pour commencer à intercepter les requêtes.</li>
        <li><strong>Cycle de Vie :</strong> Ils suivent un cycle de vie spécifique : installation, activation, puis fonctionnement.</li>
        <li><strong>Caching :</strong> Ils permettent de stocker les fichiers statiques (comme les CSS et les images) pour un chargement rapide et un accès hors ligne.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Enregistrement d'un Service Worker
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
        .then((registration) => {
            console.log("Service Worker enregistré avec succès !", registration);
        })
        .catch((error) => {
            console.error("Erreur d'enregistrement du Service Worker :", error);
        });
}

// Code dans sw.js
self.addEventListener('install', (event) => {
    console.log("Service Worker installé !");
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
</code></pre>

        <button onclick="registerServiceWorker()" class="btn btn-primary">Tester Service Worker</button>
        <div id="sw-status" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function registerServiceWorker() {
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/Portfolio/cours/assets/js/sw.js')
                .then((registration) => {
                    document.getElementById("sw-status").innerHTML = "Service Worker enregistré avec succès!";
                })
                .catch((error) => {
                    document.getElementById("sw-status").innerHTML = "Erreur d'enregistrement: " + error;
                });
        } else {
            document.getElementById("sw-status").innerHTML = "Service Workers non supportés dans ce navigateur.";
        }
    }
</script>
<div class="col-md-12">
    <h3 id="es6"><i class="fas fa-code"></i> Syntaxe Moderne ES6+</h3>
    <p>
        <strong>ES6+ (ECMAScript 2015 et au-delà)</strong> représente une série de mises à jour majeures au langage JavaScript, introduisant des fonctionnalités qui améliorent la lisibilité, la maintenance, et les performances du code. 
        Ces améliorations incluent des outils comme les classes, les fonctions fléchées, et la déstructuration pour simplifier le code JavaScript moderne.
    </p>
    <p>
        <i class="fas fa-bolt"></i> <strong>Mémoire rapide :</strong> 
        ES6+ introduit de nombreuses fonctionnalités essentielles comme les modules, la syntaxe de déstructuration, et les promesses pour simplifier la gestion asynchrone.
        Parfait pour écrire un code JavaScript plus concis, modulaire, et facile à maintenir.
    </p>
    <ul>
        <li><strong>Let & Const :</strong> Permettent une gestion améliorée des variables avec une portée de bloc, réduisant les erreurs liées aux variables globales.</li>
        <li><strong>Fonctions fléchées :</strong> Syntaxe simplifiée pour écrire des fonctions, avec une liaison contextuelle simplifiée de `this`.</li>
        <li><strong>Modules :</strong> Favorisent le découpage du code en plusieurs fichiers, facilitant la réutilisation et la maintenance.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemples de syntaxe ES6+

// Déclaration de variable avec let et const
let variableModifiable = 42;
const constanteImmuable = "ES6";

// Fonction fléchée
const somme = (a, b) => a + b;
console.log(somme(5, 10)); // Affiche 15

// Objet avec déstructuration
const utilisateur = { nom: "Alice", age: 25 };
const { nom, age } = utilisateur;
console.log(nom, age); // Affiche Alice 25

// Classe avec constructeur et méthodes
class Personne {
    constructor(nom) {
        this.nom = nom;
    }
    
    direBonjour() {
        return `Bonjour, ${this.nom}!`;
    }
}

const personne = new Personne("Bob");
console.log(personne.direBonjour()); // Affiche Bonjour, Bob!

// Promesse pour le code asynchrone
const promesse = new Promise((resolve, reject) => {
    setTimeout(() => resolve("Résolu !"), 1000);
});

promesse.then(result => console.log(result)); // Affiche "Résolu !" après 1 seconde
</code></pre>

        <button onclick="testES6()" class="btn btn-primary">Tester le code ES6+</button>
        <div id="es6-status" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function testES6() {
        let result = '';
        try {
            // Test rapide de la syntaxe ES6+
            let variableModifiable = 42;
            const constanteImmuable = "ES6";

            const somme = (a, b) => a + b;
            result += `Somme : ${somme(5, 10)}<br>`;

            const utilisateur = { nom: "Alice", age: 25 };
            const { nom, age } = utilisateur;
            result += `Utilisateur : ${nom}, ${age} ans<br>`;

            class Personne {
                constructor(nom) {
                    this.nom = nom;
                }
                direBonjour() {
                    return `Bonjour, ${this.nom}!`;
                }
            }
            const personne = new Personne("Bob");
            result += personne.direBonjour();

            document.getElementById("es6-status").innerHTML = result;
        } catch (error) {
            document.getElementById("es6-status").innerHTML = "Erreur lors de l'exécution du code : " + error;
        }
    }
</script>
<div class="col-md-12">
    <h3 id="testing"><i class="fas fa-vial"></i> Tests Unitaires</h3>
    <p>
        <strong>Les tests unitaires</strong> sont une technique de test où chaque unité de code (comme les fonctions ou méthodes) est testée individuellement pour garantir qu’elle fonctionne correctement. 
        Ils sont essentiels pour détecter les erreurs rapidement et maintenir une base de code fiable et robuste, surtout en environnement de développement continu.
    </p>
    <p>
        <i class="fas fa-bolt"></i> <strong>Mémoire rapide :</strong> 
        Les tests unitaires permettent de s'assurer que chaque partie de code fonctionne de manière indépendante. Ils aident à identifier rapidement les bugs, facilitent la maintenance et sont essentiels pour les pratiques de développement comme le TDD (Test-Driven Development).
    </p>
    <ul>
        <li><strong>Isolation :</strong> Les tests unitaires testent des morceaux de code isolés pour s'assurer qu'ils fonctionnent sans dépendre d'autres parties du programme.</li>
        <li><strong>Rapidité :</strong> Étant donné qu'ils testent de petites portions de code, les tests unitaires sont rapides à exécuter.</li>
        <li><strong>Automatisation :</strong> Les tests peuvent être automatisés et exécutés à chaque mise à jour de code, garantissant la stabilité du code.</li>
    </ul>

    <h4>Utilisation de Jest pour les Tests Unitaires</h4>
    <p>
        <strong>Jest</strong> est un framework de test JavaScript largement utilisé pour créer et exécuter des tests unitaires. Il propose des méthodes simples comme <code>test</code> et <code>expect</code>, facilitant l'écriture de tests.
        Voici les étapes pour installer et utiliser Jest :
    </p>
    <ol>
        <li>Installer Jest : <code>npm install --save-dev jest</code></li>
        <li>Créer un fichier de test, par exemple <code>addition.test.js</code></li>
        <li>Exécuter les tests : <code>npx jest</code></li>
    </ol>
    <p>Un exemple de test en Jest :</p>
    <div class="example-box">
        <pre><code class="language-javascript">// addition.js - Fonction à tester
function addition(a, b) {
    return a + b;
}
module.exports = addition;

// addition.test.js - Test unitaire avec Jest
const addition = require('./addition');

test('addition de 5 et 10 donne 15', () => {
    expect(addition(5, 10)).toBe(15);
});
</code></pre>

        <button onclick="runUnitTest()" class="btn btn-primary">Tester le code unitaire</button>
        <div id="unit-test-status" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function runUnitTest() {
        let result = '';
        try {
            // Fonction à tester
            function addition(a, b) {
                return a + b;
            }

            // Test unitaire simulé (sans Jest)
            const expectedResult = 15;
            const actualResult = addition(5, 10);
            if (actualResult === expectedResult) {
                result = "Test réussi : addition(5, 10) donne bien 15.";
            } else {
                result = `Test échoué : attendu ${expectedResult}, mais reçu ${actualResult}.`;
            }

            document.getElementById("unit-test-status").innerHTML = result;
        } catch (error) {
            document.getElementById("unit-test-status").innerHTML = "Erreur lors de l'exécution du test : " + error;
        }
    }
</script>

                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS (optional if you want responsive behavior) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/worker.js"></script>

</body>
</html>
