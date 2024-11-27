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

    <!-- Introduction -->
    <a href="#intro">Introduction</a>

    <!-- Section : Fondamentaux -->
    <button class="dropdown-btn"><i class="fas fa-code"></i> JavaScript : Les Fondamentaux <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#variables">Variables</a>
        <a href="#types-donnees">Types de données</a>
        <a href="#operateurs">Opérateurs</a>
        <a href="#conditions">Conditions</a>
        <a href="#boucles">Boucles</a>
        <a href="#fonctions">Fonctions</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-desktop"></i> Exercices : Fondamentaux <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/variable.php">Variables</a>
        <a href="exercices_js/type_donnee.php">Types de données</a>
        <a href="exercices_js/operateurs.php">Opérateurs</a>
        <a href="exercices_js/conditions.php">Conditions</a>
        <a href="exercices_js/boucles.php">Boucles</a>
        <a href="exercices_js/fonctions.php">Fonctions</a>
    </div>

    <!-- Section : Manipulation DOM et Événements -->
    <button class="dropdown-btn"><i class="fas fa-rocket"></i> JavaScript : Manipulation du DOM et Événements <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#dom-selection">Sélection DOM</a>
        <a href="#dom-modification">Modification du DOM</a>
        <a href="#events">Gestion des événements</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-pen-nib"></i> Exercices : DOM et Événements <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/selection_dom.php">Sélection DOM</a>
        <a href="exercices_js/modify_dom.php">Modification du DOM</a>
        <a href="exercices_js/events.php">Gestion des événements</a>
    </div>

    <!-- Section : Concepts Avancés -->
    <button class="dropdown-btn"><i class="fas fa-laptop-code"></i> JavaScript : Concepts Avancés <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#classes">Classes</a>
        <a href="#poo">Programmation orientée objet</a>
        <a href="#promises">Promises</a>
        <a href="#async-await">Async/Await</a>
        <a href="#callbacks-closures">Callbacks & Closures</a>
        <a href="#json">JSON</a>
        <a href="#modules">Modules</a>
        <a href="#fetch">API Fetch</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-handshake"></i> Exercices : Concepts Avancés <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/classes.php">Classes</a>
        <a href="exercices_js/poo_js.php">Classes</a>
        <a href="exercices_js/promise.php">Promises</a>
        <a href="exercices_js/async_await.php">Async/Await</a>
        <a href="exercices_js/callback-closures/callback_closures.php">Callbacks & Closures</a>
        <a href="exercices_js/json/json.php">JSON</a>
        <a href="exercices_js/modules-exercice/modules.php">Modules</a>
        <a href="exercices_js/fetch-exercice/fetch.php">API Fetch</a>
    </div>

    <!-- Section : Expert et Pro -->
    <button class="dropdown-btn"><i class="fas fa-code-branch"></i> JavaScript : Techniques Expert <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#webstorage">Web Storage</a>
        <a href="#poo-expert">Programmation Orientée Objet</a>
        <a href="#web-workers">Web Workers</a>
        <a href="#gestion-erreurs-debugging">Gestion des Erreurs & Debugging</a>
        <a href="#service-workers-pwa">Service Workers & PWA</a>
        <a href="#es6">Syntaxe Moderne ES6+</a>
        <a href="#testing">Tests Unitaires</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-tasks"></i> Exercices : Expert <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/web-storage/web_storage.php">Web Storage</a>
        <a href="exercices_js/poo/poo_expert.php">Programmation Orientée Objet</a>
        <a href="exercices_js/web-workers/web_workers.php">Web Workers</a>
        <a href="exercices_js/gestion-erreurs/gestion_erreurs.php">Gestion des Erreurs</a>
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
        Les variables sont essentielles pour stocker et manipuler des données dans un programme. En JavaScript, on utilise trois types de déclaration :
        <code>var</code>, <code>let</code>, et <code>const</code>. Voici une explication de chaque mot-clé et des exemples concrets.
    </p>
    <ul>
        <li>
            <strong>var :</strong> 
            Déclare une variable avec une portée fonctionnelle ou globale. Utilisé dans des versions plus anciennes de JavaScript, mais il est moins précis que <code>let</code> ou <code>const</code>.
        </li>
        <li>
            <strong>let :</strong> 
            Déclare une variable avec une portée limitée au bloc où elle est définie. Idéal pour des valeurs qui peuvent changer.
        </li>
        <li>
            <strong>const :</strong> 
            Déclare une constante, c'est-à-dire une valeur qui ne peut pas être réassignée après sa déclaration. Utilisé pour des données fixes.
        </li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemple : Gestion d'un panier d'achat
<span class="keyword">var</span> produit = <span class="string">"Ordinateur"</span>;  <span class="comment">// Variable globale</span>
<span class="keyword">let</span> quantite = <span class="number">1</span>;             <span class="comment">// Variable de bloc</span>
<span class="keyword">const</span> prixUnitaire = <span class="number">899.99</span>;  <span class="comment">// Constante</span>

<span class="keyword">function</span> afficherPanier() {
    <span class="keyword">console</span>.log(<span class="string">`Produit : ${produit}, Quantité : ${quantite}, Total : ${quantite * prixUnitaire}€`</span>);
}

<span class="keyword">function</span> ajouterProduit() {
    quantite += <span class="number">1</span>;
    afficherPanier();
}

<span class="keyword">function</span> changerProduit(<span class="variable">nouveauProduit</span>) {
    produit = nouveauProduit; <span class="comment">// Réassignation avec var</span>
    afficherPanier();
}</code></pre>

        <p>Testez les fonctionnalités du panier :</p>
        <button onclick="afficherPanier()" class="btn btn-primary">Afficher Panier</button>
        <button onclick="ajouterProduit()" class="btn btn-success">Ajouter un Produit</button>
        <button onclick="changerProduit('Tablette')" class="btn btn-warning">Changer Produit</button>

        <div id="resultat" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
    </div>
</div>

<script>
    // Déclarations
    var produit = "Ordinateur";
    let quantite = 1;
    const prixUnitaire = 899.99;

    // Afficher le panier
    function afficherPanier() {
        document.getElementById("resultat").innerText =
            `Produit : ${produit}, Quantité : ${quantite}, Total : ${(quantite * prixUnitaire).toFixed(2)}€`;
    }

    // Ajouter un produit
    function ajouterProduit() {
        quantite += 1; // Incrémente la quantité
        afficherPanier();
    }

    // Changer le produit (exemple avec var)
    function changerProduit(nouveauProduit) {
        produit = nouveauProduit; // Réassignation
        afficherPanier();
    }
</script>


<div class="col-md-6">
    <h3 id="types-donnees">Types de Données</h3>
    <p>
        En JavaScript, les types de données permettent de stocker et manipuler différents types de valeurs. Voici une présentation de leurs caractéristiques avec des exemples pratiques.
    </p>
    <ul>
        <li><strong>Number</strong> : Représente les valeurs numériques, comme les entiers (<code>42</code>) ou les décimales (<code>3.14</code>).</li>
        <li><strong>String</strong> : Représente des textes, encadrés par des guillemets simples ou doubles (<code>"Bonjour"</code>).</li>
        <li><strong>Boolean</strong> : Valeurs logiques, soit <code>true</code> (vrai) soit <code>false</code> (faux).</li>
        <li><strong>Object</strong> : Structure complexe regroupant des valeurs en paires clé-valeur (<code>{ nom: "Alice", age: 30 }</code>).</li>
        <li><strong>Undefined</strong> : Attribué à une variable qui n’a pas encore reçu de valeur.</li>
        <li><strong>Null</strong> : Représente une valeur intentionnellement vide.</li>
        <li><strong>Symbol</strong> : Identifiant unique utilisé pour des cas particuliers, souvent comme clé dans des objets.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Exemples de types de données
<span class="keyword">let</span> nombre = <span class="number">42</span>;                      <span class="comment">// Number</span>
<span class="keyword">let</span> texte = <span class="string">"Bonjour, monde!"</span>;        <span class="comment">// String</span>
<span class="keyword">let</span> estVrai = <span class="keyword">true</span>;                  <span class="comment">// Boolean</span>
<span class="keyword">let</span> personne = { nom: <span class="string">"Alice"</span>, age: <span class="number">30</span> }; <span class="comment">// Object</span>
<span class="keyword">let</span> valeurIndefinie;                       <span class="comment">// Undefined</span>
<span class="keyword">let</span> valeurNull = <span class="keyword">null</span>;               <span class="comment">// Null</span>
<span class="keyword">let</span> identifiantUnique = <span class="keyword">Symbol</span>(<span class="string">"id"</span>);  <span class="comment">// Symbol</span>
</code></pre>

        <button onclick="afficherTypes()" class="btn btn-primary">Afficher Types et Valeurs</button>
        <button onclick="modifierValeurs()" class="btn btn-secondary">Modifier Certaines Valeurs</button>
        
        <div id="resultat-types" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
    </div>
</div>

<script>
    // Déclaration des types de données
    let nombre = 42;
    let texte = "Bonjour, monde!";
    let estVrai = true;
    let personne = { nom: "Alice", age: 30 };
    let valeurIndefinie;
    let valeurNull = null;
    let identifiantUnique = Symbol("id");

    // Afficher les types et les valeurs
    function afficherTypes() {
        document.getElementById("resultat-types").innerHTML =
            `<strong>Nombre :</strong> ${nombre} (${typeof nombre})<br>` +
            `<strong>Texte :</strong> ${texte} (${typeof texte})<br>` +
            `<strong>Booléen :</strong> ${estVrai} (${typeof estVrai})<br>` +
            `<strong>Objet :</strong> ${JSON.stringify(personne)} (${typeof personne})<br>` +
            `<strong>Indéfini :</strong> ${valeurIndefinie} (${typeof valeurIndefinie})<br>` +
            `<strong>Null :</strong> ${valeurNull} (${valeurNull === null ? "null" : typeof valeurNull})<br>` +
            `<strong>Symbole :</strong> ${identifiantUnique.toString()} (${typeof identifiantUnique})`;
    }

    // Modifier certaines valeurs pour illustrer le comportement
    function modifierValeurs() {
        nombre += 10; // Ajout à une valeur numérique
        texte = texte.replace("monde", "JavaScript"); // Modification d'une chaîne de caractères
        estVrai = !estVrai; // Inverse la valeur booléenne
        personne.nom = "Bob"; // Modification d'une propriété de l'objet
        valeurIndefinie = "Maintenant définie"; // Affectation d'une valeur
        afficherTypes(); // Mise à jour des résultats
    }
</script>

</div>

<div class="row">
<div class="col-md-6">
    <h3 id="operateurs">Opérateurs</h3>
    <p>
        Les opérateurs en JavaScript sont essentiels pour effectuer des calculs, comparer des valeurs, ou évaluer des conditions. Voici les principaux types d'opérateurs :
    </p>
    <ul>
        <li><strong>Mathématiques</strong> : Addition, soustraction, multiplication, division, et modulo.</li>
        <li><strong>Comparaison</strong> : Comparer deux valeurs (égalité, supériorité, etc.).</li>
        <li><strong>Logique</strong> : Combiner ou inverser des conditions.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Déclaration des variables
<span class="keyword">let</span> a = <span class="number">10</span>; <span class="comment">// Nombre 1</span>
<span class="keyword">let</span> b = <span class="number">5</span>;  <span class="comment">// Nombre 2</span>

// Opérateurs Mathématiques
<span class="keyword">let</span> addition = a + b;
<span class="keyword">let</span> multiplication = a * b;

// Opérateurs de Comparaison
<span class="keyword">let</span> egalite = (a == b);
<span class="keyword">let</span> superieur = (a > b);

// Opérateurs Logiques
<span class="keyword">let</span> condition = (a > b) && (b > <span class="number">0</span>);</code></pre>

        <p>Testez les résultats des différents opérateurs avec des valeurs personnalisées :</p>
        <div>
            <label for="input-a">Valeur de <strong>a</strong> :</label>
            <input type="number" id="input-a" value="10" class="form-control">
            <label for="input-b" style="margin-top: 10px;">Valeur de <strong>b</strong> :</label>
            <input type="number" id="input-b" value="5" class="form-control">
        </div>
        <button onclick="calculerOperateurs()" class="btn btn-primary" style="margin-top: 10px;">Calculer et Afficher les Résultats</button>

        <div id="resultat-operateurs" style="margin-top: 20px; font-weight: bold; color: #333;"></div>
    </div>
</div>

<script>
    function calculerOperateurs() {
        // Récupérer les valeurs des inputs
        let a = parseFloat(document.getElementById("input-a").value);
        let b = parseFloat(document.getElementById("input-b").value);

        // Calculs mathématiques
        let addition = a + b;
        let soustraction = a - b;
        let multiplication = a * b;
        let division = b !== 0 ? (a / b).toFixed(2) : "Division par zéro impossible";
        let modulo = b !== 0 ? a % b : "Modulo par zéro impossible";

        // Comparaison
        let egalite = a == b;
        let difference = a != b;
        let superieur = a > b;
        let inferieurOuEgal = a <= b;

        // Logique
        let etLogique = (a > 0) && (b > 0);
        let ouLogique = (a > b) || (b === 0);
        let nonLogique = !(a > b);

        // Afficher les résultats
        document.getElementById("resultat-operateurs").innerHTML = `
            <strong>Opérateurs Mathématiques :</strong><br>
            Addition (a + b) : ${addition}<br>
            Soustraction (a - b) : ${soustraction}<br>
            Multiplication (a * b) : ${multiplication}<br>
            Division (a / b) : ${division}<br>
            Modulo (a % b) : ${modulo}<br><br>

            <strong>Opérateurs de Comparaison :</strong><br>
            Égalité (a == b) : ${egalite}<br>
            Différence (a != b) : ${difference}<br>
            Supérieur (a > b) : ${superieur}<br>
            Inférieur ou Égal (a <= b) : ${inferieurOuEgal}<br><br>

            <strong>Opérateurs Logiques :</strong><br>
            ET Logique (a > 0 && b > 0) : ${etLogique}<br>
            OU Logique (a > b || b == 0) : ${ouLogique}<br>
            NON Logique (!(a > b)) : ${nonLogique}
        `;
    }
</script>

<div class="col-md-6">
    <h3 id="conditions">Conditions</h3>
    <p>
        En JavaScript, les instructions conditionnelles dirigent le programme en fonction des situations. Voici les principales structures conditionnelles :
    </p>
    <ul>
        <li><strong>if/else</strong> : Exécute un bloc si une condition est vraie, sinon un autre.</li>
        <li><strong>else if</strong> : Permet plusieurs conditions.</li>
        <li><strong>switch</strong> : Compare une valeur à plusieurs cas possibles.</li>
        <li><strong>Opérateur conditionnel (ternaire)</strong> : Simplifie les conditions <code>if/else</code>.</li>
        <li><strong>Combinaisons logiques</strong> : Combine des conditions avec <code>&&</code> (ET) et <code>||</code> (OU).</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Test des conditions avec différentes valeurs
<span class="keyword">let</span> age = <span class="number">20</span>;
<span class="keyword">if</span> (age >= <span class="number">18</span>) {
    console.log(<span class="string">"Vous êtes majeur."</span>);
} <span class="keyword">else</span> {
    console.log(<span class="string">"Vous êtes mineur."</span>);
}

// Switch : Tester une couleur
<span class="keyword">let</span> couleur = <span class="string">"rouge"</span>;
<span class="keyword">switch</span> (couleur) {
    <span class="keyword">case</span> <span class="string">"rouge"</span>:
        console.log(<span class="string">"La couleur est rouge."</span>);
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        console.log(<span class="string">"Couleur inconnue."</span>);
}</code></pre>

        <div>
            <label for="input-age">Âge :</label>
            <input type="number" id="input-age" value="20" class="form-control">
            
            <label for="input-couleur" style="margin-top: 10px;">Couleur :</label>
            <input type="text" id="input-couleur" value="rouge" class="form-control">
            
            <label for="input-permis" style="margin-top: 10px;">Avez-vous un permis de conduire ?</label>
            <select id="input-permis" class="form-control">
                <option value="true">Oui</option>
                <option value="false">Non</option>
            </select>
        </div>

        <button onclick="testerConditions()" class="btn btn-primary" style="margin-top: 10px;">Tester les Conditions</button>
        
        <div id="resultat-conditions" style="margin-top: 20px; font-weight: bold; color: #333;"></div>
    </div>
</div>

<script>
    function testerConditions() {
        // Récupérer les valeurs des inputs
        let age = parseInt(document.getElementById("input-age").value);
        let couleur = document.getElementById("input-couleur").value.toLowerCase();
        let permis = document.getElementById("input-permis").value === "true";

        // Conditions
        let messageAge = age >= 18 ? "Vous êtes majeur." : "Vous êtes mineur.";
        let messageHeure = (new Date().getHours() < 12) ? "Bonne matinée." : "Bonne journée.";
        let messageCouleur;
        switch (couleur) {
            case "rouge":
                messageCouleur = "La couleur est rouge.";
                break;
            case "bleu":
                messageCouleur = "La couleur est bleu.";
                break;
            case "vert":
                messageCouleur = "La couleur est vert.";
                break;
            default:
                messageCouleur = "Couleur inconnue.";
        }
        let messageConduite = (age >= 18 && permis) ? "Vous pouvez conduire." : "Vous ne pouvez pas conduire.";

        // Résultat
        document.getElementById("resultat-conditions").innerHTML = `
            <strong>Résultats :</strong><br>
            ${messageAge}<br>
            ${messageHeure}<br>
            ${messageCouleur}<br>
            ${messageConduite}
        `;
    }
</script>
</div>

                <div class="row">
                <div class="col-md-6">
    <h3 id="boucles">Boucles</h3>
    <p>
        Les boucles permettent de répéter des sections de code en fonction d’une condition. Voici les principales boucles en JavaScript avec des exemples :
    </p>
    <ul>
        <li><strong>for</strong> : Répète le code un nombre déterminé de fois, avec un compteur.</li>
        <li><strong>while</strong> : Répète tant qu’une condition est vraie, vérifiée avant chaque itération.</li>
        <li><strong>do...while</strong> : Identique à <code>while</code>, mais s’exécute au moins une fois.</li>
        <li><strong>for...of</strong> : Parcourt les éléments d’un tableau ou d’un objet itérable.</li>
        <li><strong>for...in</strong> : Parcourt les propriétés énumérables d’un objet.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">let</span> table = <span class="number">3</span>;
<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= <span class="number">10</span>; i++) {
    console.log(<span class="string">`${table} x ${i} = ${table * i}`</span>);
}

<span class="keyword">let</span> somme = <span class="number">0</span>;
<span class="keyword">let</span> n = <span class="number">1</span>;
<span class="keyword">while</span> (n <= <span class="number">5</span>) {
    somme += n;
    n++;
}
console.log(<span class="string">"Somme : "</span> + somme);

<span class="keyword">let</span> motDePasse;
<span class="keyword">do</span> {
    motDePasse = prompt(<span class="string">"Entrez le mot de passe (indice : 1234) :"</span>);
} <span class="keyword">while</span> (motDePasse !== <span class="string">"1234"</span>);
console.log(<span class="string">"Mot de passe correct !"</span>);

<span class="keyword">let</span> produits = [
    { <span class="variable">nom</span>: <span class="string">"Ordinateur"</span>, <span class="variable">prix</span>: <span class="number">1000</span> },
    { <span class="variable">nom</span>: <span class="string">"Téléphone"</span>, <span class="variable">prix</span>: <span class="number">500</span> },
    { <span class="variable">nom</span>: <span class="string">"Tablette"</span>, <span class="variable">prix</span>: <span class="number">300</span> }
];
<span class="keyword">for</span> (<span class="keyword">let</span> produit <span class="keyword">of</span> produits) {
    console.log(<span class="string">`Produit : ${produit.nom}, Prix : ${produit.prix}€`</span>);
}

<span class="keyword">let</span> personne = { <span class="variable">nom</span>: <span class="string">"Alice"</span>, <span class="variable">age</span>: <span class="number">30</span>, <span class="variable">ville</span>: <span class="string">"Paris"</span> };
<span class="keyword">let</span> compteurProprietes = <span class="number">0</span>;
<span class="keyword">for</span> (<span class="keyword">let</span> propriete <span class="keyword">in</span> personne) {
    compteurProprietes++;
}
console.log(<span class="string">"Nombre de propriétés : "</span> + compteurProprietes);</code></pre>

        <button onclick="afficherResultatsBoucles()" class="btn btn-primary">Afficher les Résultats des Boucles</button>
        
        <div id="resultat-boucles" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    function afficherResultatsBoucles() {
        let resultats = "";

        // Boucle for : Table de multiplication
        let table = 3;
        resultats += `<strong>Boucle for :</strong> Table de multiplication pour ${table}<br>`;
        for (let i = 1; i <= 10; i++) {
            resultats += `${table} x ${i} = ${table * i}<br>`;
        }

        // Boucle while : Somme des nombres jusqu'à 5
        let somme = 0;
        let n = 1;
        while (n <= 5) {
            somme += n;
            n++;
        }
        resultats += `<br><strong>Boucle while :</strong> Somme des nombres de 1 à 5 : ${somme}<br>`;

        // Boucle for...of : Liste d'objets
        let produits = [
            { nom: "Ordinateur", prix: 1000 },
            { nom: "Téléphone", prix: 500 },
            { nom: "Tablette", prix: 300 }
        ];
        resultats += `<br><strong>Boucle for...of :</strong> Parcourir des produits<br>`;
        for (let produit of produits) {
            resultats += `Produit : ${produit.nom}, Prix : ${produit.prix}€<br>`;
        }

        // Boucle for...in : Compter les propriétés d'un objet
        let personne = { nom: "Alice", age: 30, ville: "Paris" };
        let compteurProprietes = 0;
        for (let propriete in personne) {
            compteurProprietes++;
        }
        resultats += `<br><strong>Boucle for...in :</strong> Nombre de propriétés dans l'objet personne : ${compteurProprietes}<br>`;

        document.getElementById("resultat-boucles").innerHTML = resultats;
    }
</script>

<div class="col-md-6">
    <h3 id="fonctions">Fonctions</h3>
    <p>
        Les fonctions sont des blocs de code réutilisables, permettant d'exécuter des tâches spécifiques. Elles peuvent recevoir des paramètres et retourner des résultats.
    </p>
    <ul>
        <li><strong>Fonction déclarée</strong> : Une fonction nommée, accessible partout après sa déclaration.</li>
        <li><strong>Fonction anonyme</strong> : Une fonction sans nom, souvent assignée à une variable.</li>
        <li><strong>Fonction fléchée</strong> : Une syntaxe concise introduite en ES6, utile pour des fonctions anonymes.</li>
    </ul>

    <div class="example-box">
        <pre><code class="language-javascript">// Fonction déclarée
<span class="keyword">function</span> saluer(<span class="variable">nom</span>) {
    <span class="keyword">return</span> <span class="string">`Bonjour, ${nom}!`</span>;
}

// Fonction anonyme
<span class="keyword">const</span> multiplier = <span class="keyword">function</span>(<span class="variable">x</span>, <span class="variable">y</span>) {
    <span class="keyword">return</span> <span class="variable">x</span> * <span class="variable">y</span>;
};

// Fonction fléchée
<span class="keyword">const</span> carre = (<span class="variable">nombre</span>) => <span class="variable">nombre</span> * <span class="variable">nombre</span>;

// Fonction avec valeur par défaut
<span class="keyword">function</span> direAge(<span class="variable">age</span> = <span class="number">18</span>) {
    <span class="keyword">return</span> <span class="string">`Vous avez ${age} ans.`</span>;
}

// Fonction récursive
<span class="keyword">function</span> factorielle(<span class="variable">n</span>) {
    <span class="keyword">if</span> (<span class="variable">n</span> === <span class="number">0</span>) <span class="keyword">return</span> <span class="number">1</span>;
    <span class="keyword">return</span> <span class="variable">n</span> * factorielle(<span class="variable">n</span> - <span class="number">1</span>);
}</code></pre>

        <div>
            <label for="input-nom">Nom :</label>
            <input type="text" id="input-nom" value="Alice" class="form-control">
            
            <label for="input-age" style="margin-top: 10px;">Âge :</label>
            <input type="number" id="input-age" value="25" class="form-control">
            
            <label for="input-nombre" style="margin-top: 10px;">Nombre pour carré :</label>
            <input type="number" id="input-nombre" value="4" class="form-control">
            
            <label for="input-factorielle" style="margin-top: 10px;">Calculer la factorielle de :</label>
            <input type="number" id="input-factorielle" value="5" class="form-control">
        </div>
        
        <button onclick="executerFonctions()" class="btn btn-primary" style="margin-top: 10px;">Exécuter les Fonctions</button>
        
        <div id="resultat-fonctions" style="margin-top: 20px; font-weight: bold;"></div>
    </div>
</div>

<script>
    // Fonction déclarée
    function saluer(nom) {
        return `Bonjour, ${nom}!`;
    }

    // Fonction anonyme
    const multiplier = function(x, y) {
        return x * y;
    };

    // Fonction fléchée
    const carre = (nombre) => nombre * nombre;

    // Fonction avec valeur par défaut
    function direAge(age = 18) {
        return `Vous avez ${age} ans.`;
    }

    // Fonction récursive
    function factorielle(n) {
        if (n === 0) return 1;
        return n * factorielle(n - 1);
    }

    function executerFonctions() {
        let nom = document.getElementById("input-nom").value;
        let age = parseInt(document.getElementById("input-age").value);
        let nombre = parseInt(document.getElementById("input-nombre").value);
        let factorielleNombre = parseInt(document.getElementById("input-factorielle").value);

        let messageSaluer = saluer(nom);
        let messageAge = direAge(age);
        let resultatCarre = carre(nombre);
        let resultatFactorielle = factorielle(factorielleNombre);

        document.getElementById("resultat-fonctions").innerHTML = `
            <strong>Résultats des Fonctions :</strong><br>
            Fonction déclarée (saluer) : ${messageSaluer}<br>
            Fonction avec valeur par défaut (direAge) : ${messageAge}<br>
            Fonction fléchée (carre) : Carré de ${nombre} = ${resultatCarre}<br>
            Fonction récursive (factorielle) : Factorielle de ${factorielleNombre} = ${resultatFactorielle}
        `;
    }
</script>


                </div>
    </div>
<!-- Manipulation du DOM et Événements -->
<div class="content-section" id="manip-dom-evenements">
    <h1><i class="fas fa-mouse-pointer icon"></i> Manipulation du DOM et Événements</h1>
    <p>
        La manipulation du DOM (Document Object Model) et la gestion des événements sont des compétences fondamentales pour rendre vos pages web interactives et dynamiques. 
        Ces concepts vous permettent de contrôler et de modifier les éléments HTML et CSS en temps réel en réponse aux actions des utilisateurs.
    </p>
    <p>
        Dans cette section, vous apprendrez à naviguer dans la structure du DOM, à manipuler les éléments de manière performante, et à utiliser des écouteurs d'événements pour capturer les interactions des utilisateurs.
        Vous découvrirez également des techniques avancées pour optimiser vos interactions avec le DOM et améliorer l'expérience utilisateur.
    </p>
    <h2>Contenu des cours</h2>
    <ul>
        <li>
            <strong>Sélection des éléments DOM :</strong> Utilisation de méthodes comme <code>querySelector</code>, <code>getElementById</code>, et <code>getElementsByClassName</code> pour cibler des éléments spécifiques.
        </li>
        <li>
            <strong>Modification du DOM :</strong> Ajout, suppression et modification d'éléments HTML, d'attributs et de classes CSS dynamiquement.
        </li>
        <li>
            <strong>Création et insertion d'éléments :</strong> Génération d'éléments HTML en JavaScript et insertion dans la structure existante.
        </li>
        <li>
            <strong>Gestion des événements utilisateur :</strong> Compréhension et utilisation des événements comme <code>click</code>, <code>mouseover</code>, <code>keydown</code>, et bien d'autres.
        </li>
        <li>
            <strong>Écouteurs d'événements :</strong> Ajout d’événements à des éléments à l'aide de <code>addEventListener</code> pour une gestion centralisée et performante.
        </li>
        <li>
            <strong>Bubbling et Capture :</strong> Maîtrise de la propagation des événements pour mieux contrôler les interactions complexes.
        </li>
        <li>
            <strong>Gestion dynamique des formulaires :</strong> Validation et capture des données des formulaires en JavaScript.
        </li>
        <li>
            <strong>Animation et transitions via JavaScript :</strong> Manipulation des propriétés CSS et utilisation de JavaScript pour créer des animations dynamiques.
        </li>
        <li>
            <strong>Optimisation des manipulations DOM :</strong> Techniques pour limiter le reflow/repaint et améliorer les performances des pages web interactives.
        </li>
    </ul>
    <p>
        Chaque cours comprend des exemples interactifs et des exercices pratiques pour vous permettre de manipuler efficacement le DOM et de gérer les événements utilisateur. 
        À la fin de cette section, vous serez capable de créer des interfaces dynamiques et réactives pour vos projets web.
    </p>
    <div class="row">

    <div class="col-md-12">
    <h3 id="dom-selection">Sélection du DOM</h3>
    <p>
        La sélection d'éléments du DOM est une étape fondamentale pour manipuler une page web. 
        Elle permet d’accéder aux éléments HTML et de les modifier dynamiquement. En JavaScript, plusieurs méthodes permettent de sélectionner des éléments selon leurs identifiants, classes, balises ou sélecteurs CSS.
    </p>
    <h4>Méthodes principales</h4>
    <ul>
        <li><strong>document.getElementById(id)</strong> : Sélectionne un élément unique par son identifiant (<code>id</code>).</li>
        <li><strong>document.getElementsByClassName(class)</strong> : Sélectionne une collection d’éléments avec une classe donnée.</li>
        <li><strong>document.getElementsByTagName(tag)</strong> : Sélectionne tous les éléments avec une balise spécifique.</li>
        <li><strong>document.querySelector(selector)</strong> : Sélectionne le premier élément qui correspond à un sélecteur CSS donné.</li>
        <li><strong>document.querySelectorAll(selector)</strong> : Sélectionne tous les éléments qui correspondent à un sélecteur CSS donné.</li>
    </ul>

    <h4>Exemples pratiques</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de sélection d'éléments</span>

// 1. Sélection par ID
<span class="keyword">let</span> elementParID = document.getElementById(<span class="string">"exemple-id"</span>);
elementParID.style.color = <span class="string">"blue"</span>;  <span class="comment">// Change la couleur de texte</span>

// 2. Sélection par classe
<span class="keyword">let</span> elementsParClasse = document.getElementsByClassName(<span class="string">"exemple-classe"</span>);
<span class="keyword">for</span> (<span class="keyword">let</span> elem <span class="keyword">of</span> elementsParClasse) {
    elem.style.fontWeight = <span class="string">"bold"</span>;  <span class="comment">// Change le poids du texte</span>
}

// 3. Sélection par balise
<span class="keyword">let</span> elementsParTag = document.getElementsByTagName(<span class="string">"p"</span>);
elementsParTag[<span class="number">0</span>].style.fontSize = <span class="string">"18px"</span>;  <span class="comment">// Change la taille du texte du premier élément</span>

// 4. Sélection avec querySelector
<span class="keyword">let</span> premierElement = document.querySelector(<span class="string">".exemple-classe"</span>);
premierElement.style.textDecoration = <span class="string">"underline"</span>;  <span class="comment">// Souligne le premier élément trouvé</span>

// 5. Sélection avec querySelectorAll
<span class="keyword">let</span> tousLesElements = document.querySelectorAll(<span class="string">"p"</span>);
tousLesElements.forEach(el => el.style.margin = <span class="string">"10px 0"</span>);  <span class="comment">// Ajoute une marge à chaque élément</span>
</code></pre>
    </div>

    <h4>Cas d'utilisation courants</h4>
    <p>Voici quelques exemples concrets de sélection d'éléments et leurs applications :</p>
    <ul>
        <li>
            <strong>Modification de contenu dynamique :</strong> Sélectionnez un élément pour mettre à jour son texte, par exemple une notification utilisateur.
        </li>
        <li>
            <strong>Application de styles :</strong> Changez dynamiquement les couleurs, tailles ou autres propriétés CSS des éléments.
        </li>
        <li>
            <strong>Ajout ou suppression de classes :</strong> Ajoutez ou supprimez des classes pour activer/désactiver des styles CSS prédéfinis.
        </li>
        <li>
            <strong>Gestion des formulaires :</strong> Accédez aux champs de formulaire pour valider ou capturer les données saisies par l'utilisateur.
        </li>
        <li>
            <strong>Parcours d’une liste :</strong> Sélectionnez tous les éléments d’un tableau ou d’une liste et appliquez des modifications uniformes.
        </li>
    </ul>

    <h4>Exemples supplémentaires</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple supplémentaire : Ajout et suppression de classes CSS</span>

// Ajouter une classe à un élément
<span class="keyword">let</span> element = document.querySelector(<span class="string">"#exemple-id"</span>);
element.classList.add(<span class="string">"nouvelle-classe"</span>);

// Supprimer une classe
element.classList.remove(<span class="string">"ancienne-classe"</span>);

// Vérifier si une classe existe
<span class="keyword">if</span> (element.classList.contains(<span class="string">"active"</span>)) {
    console.log(<span class="string">"L'élément est actif."</span>);
}

// Basculer une classe
element.classList.toggle(<span class="string">"highlight"</span>);
</code></pre>
    </div>

    <h4>Exemple interactif</h4>
    <div id="selection-exemple" style="margin-top: 10px;">
        <p id="exemple-id">Cet élément est sélectionné par ID.</p>
        <p class="exemple-classe">Cet élément est sélectionné par classe.</p>
        <p class="exemple-classe">Un autre élément avec la même classe.</p>
        <p>Élément sélectionné par balise.</p>
        <button onclick="selectionnerElements()" class="btn btn-primary" style="margin-top: 10px;">Appliquer la Sélection</button>
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
            elem.style.fontWeight = "bold"; // Change le poids du texte
        }

        // Sélection par balise
        let elementsParTag = document.getElementsByTagName("p");
        elementsParTag[0].style.fontSize = "18px"; // Change la taille du texte du premier élément

        // Sélection avec querySelector
        let premierElement = document.querySelector(".exemple-classe");
        premierElement.style.textDecoration = "underline"; // Souligne le premier élément trouvé

        // Sélection avec querySelectorAll
        let tousLesElements = document.querySelectorAll("p");
        tousLesElements.forEach(el => el.style.margin = "10px 0"); // Ajoute une marge à chaque élément
    }
</script>

<div class="col-md-12">
    <h3 id="dom-modification">Modification du DOM</h3>
    <p>
        La modification du DOM permet de manipuler dynamiquement les éléments HTML, leurs contenus, leurs styles et même leur structure. 
        Elle est essentielle pour rendre vos pages web interactives et réactives en réponse aux actions des utilisateurs.
    </p>
    <h4>Exemples courants</h4>
    <ul>
        <li>Changer le texte ou le HTML d'un élément.</li>
        <li>Modifier ou ajouter des styles CSS.</li>
        <li>Créer, insérer, ou supprimer des éléments HTML.</li>
        <li>Ajouter ou retirer des classes CSS pour activer des styles dynamiques.</li>
    </ul>

    <h4>Exemples interactifs</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de modification du DOM avancée</span>

// Modifier le contenu texte d'un élément
<span class="keyword">function</span> modifierTexte() {
    document.getElementById(<span class="string">"texte-modifiable"</span>).textContent = <span class="string">"Texte mis à jour dynamiquement !"</span>;
}

// Modifier le contenu HTML d'un élément
<span class="keyword">function</span> modifierHTML() {
    document.getElementById(<span class="string">"conteneur-html"</span>).innerHTML = <span class="string">`
        <h3>Nouvel HTML ajouté dynamiquement</h3>
        <p>Ceci est un contenu dynamique avec des balises.</p>
    `</span>;
}

// Ajouter un nouvel élément avec un style spécifique
<span class="keyword">function</span> ajouterElementStylé() {
    <span class="keyword">let</span> nouvelElement = document.createElement(<span class="string">"p"</span>);
    nouvelElement.textContent = <span class="string">"Nouvel élément avec un style personnalisé."</span>;
    nouvelElement.style.color = <span class="string">"purple"</span>;
    nouvelElement.style.fontStyle = <span class="string">"italic"</span>;
    document.getElementById(<span class="string">"conteneur"</span>).appendChild(nouvelElement);
}

// Supprimer tous les enfants d'un élément
<span class="keyword">function</span> viderConteneur() {
    <span class="keyword">let</span> conteneur = document.getElementById(<span class="string">"conteneur"</span>);
    conteneur.innerHTML = <span class="string">""</span>;
}

// Alterner une classe CSS
<span class="keyword">function</span> toggleClasse() {
    document.getElementById(<span class="string">"texte-modifiable"</span>).classList.toggle(<span class="string">"highlight"</span>);
}
</code></pre>

        <button onclick="modifierTexte()" class="btn btn-primary">Modifier le Texte</button>
        <button onclick="modifierHTML()" class="btn btn-secondary">Modifier le HTML</button>
        <button onclick="ajouterElementStylé()" class="btn btn-success">Ajouter un Élément Stylé</button>
        <button onclick="viderConteneur()" class="btn btn-danger">Vider le Conteneur</button>
        <button onclick="toggleClasse()" class="btn btn-warning">Alterner une Classe CSS</button>

        <div id="conteneur" style="margin-top: 20px;">
            <p id="texte-modifiable">Cliquez sur les boutons pour voir les modifications.</p>
            <div id="conteneur-html"></div>
        </div>
    </div>

    <h4>Cas d'utilisation pratiques</h4>
    <p>Voici des exemples réels de modification du DOM pour des applications web :</p>
    <ul>
        <li>
            <strong>Notifications dynamiques :</strong> Affichez ou masquez des messages d'erreur ou de succès après une action utilisateur.
        </li>
        <li>
            <strong>Formulaires interactifs :</strong> Validez et mettez en évidence les champs d'un formulaire en fonction des données saisies.
        </li>
        <li>
            <strong>Interface utilisateur réactive :</strong> Créez ou mettez à jour dynamiquement des tableaux, listes ou cartes de contenu en fonction des données récupérées.
        </li>
        <li>
            <strong>Mode sombre :</strong> Alternez entre des thèmes clairs et sombres en basculant des classes CSS.
        </li>
        <li>
            <strong>Animations CSS :</strong> Activez des animations en ajoutant ou supprimant des classes dynamiquement.
        </li>
    </ul>
</div>

<script>
    // Modification du contenu texte
    function modifierTexte() {
        document.getElementById("texte-modifiable").textContent = "Texte mis à jour dynamiquement !";
    }

    // Modification du contenu HTML
    function modifierHTML() {
        document.getElementById("conteneur-html").innerHTML = `
            <h3>Nouvel HTML ajouté dynamiquement</h3>
            <p>Ceci est un contenu dynamique avec des balises.</p>
        `;
    }

    // Ajouter un nouvel élément avec un style spécifique
    function ajouterElementStylé() {
        let nouvelElement = document.createElement("p");
        nouvelElement.textContent = "Nouvel élément avec un style personnalisé.";
        nouvelElement.style.color = "purple";
        nouvelElement.style.fontStyle = "italic";
        document.getElementById("conteneur").appendChild(nouvelElement);
    }

    // Supprimer tous les enfants d'un élément
    function viderConteneur() {
        let conteneur = document.getElementById("conteneur");
        conteneur.innerHTML = "";
    }

    // Alterner une classe CSS
    function toggleClasse() {
        document.getElementById("texte-modifiable").classList.toggle("highlight");
    }
</script>

<style>
    .highlight {
        background-color: yellow;
        font-weight: bold;
        padding: 5px;
    }
</style>


<div class="col-md-12">
    <h3 id="events">Événements</h3>
    <p>
        Les événements en JavaScript permettent de capturer les actions des utilisateurs (clics, frappes au clavier, soumissions de formulaires) ou du navigateur 
        (chargement de la page, redimensionnement de la fenêtre, etc.). Ils sont essentiels pour rendre une page web interactive.
    </p>
    <h4>Types d'événements courants</h4>
    <ul>
        <li><strong>click</strong> : Déclenché lorsqu'un élément est cliqué.</li>
        <li><strong>mouseover</strong> : Déclenché lorsque la souris passe au-dessus d'un élément.</li>
        <li><strong>keydown</strong> : Déclenché lorsqu'une touche du clavier est pressée.</li>
        <li><strong>submit</strong> : Déclenché lorsqu’un formulaire est soumis.</li>
        <li><strong>resize</strong> : Déclenché lorsqu’une fenêtre est redimensionnée.</li>
    </ul>

    <h4>Exemples interactifs</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'événements JavaScript</span>

// Changer la couleur d'un élément au clic
<span class="keyword">function</span> changerCouleur() {
    document.getElementById(<span class="string">"element"</span>).style.color = <span class="string">"blue"</span>;
}

// Afficher un message au survol
<span class="keyword">function</span> afficherMessage() {
    document.getElementById(<span class="string">"resultat-events"</span>).textContent = <span class="string">"Vous avez survolé l'élément !"</span>;
}

// Capturer une touche pressée
<span class="keyword">function</span> afficherTouche(event) {
    document.getElementById(<span class="string">"resultat-keydown"</span>).textContent = <span class="string">`Touche pressée : ${event.key}`</span>;
}

// Capturer la soumission d'un formulaire
<span class="keyword">function</span> gererSoumission(event) {
    event.preventDefault(); <span class="comment">// Empêche le comportement par défaut de la soumission</span>
    document.getElementById(<span class="string">"resultat-submit"</span>).textContent = <span class="string">"Formulaire soumis !"</span>;
}

// Réagir au redimensionnement de la fenêtre
<span class="keyword">function</span> afficherDimensions() {
    <span class="keyword">let</span> largeur = window.innerWidth;
    <span class="keyword">let</span> hauteur = window.innerHeight;
    document.getElementById(<span class="string">"resultat-resize"</span>).textContent = <span class="string">`Dimensions : ${largeur}x${hauteur}`</span>;
}
</code></pre>

        <button onclick="changerCouleur()" class="btn btn-primary">Changer la Couleur</button>
        <div id="element" onmouseover="afficherMessage()" style="margin-top: 10px; font-weight: bold;">
            Survolez-moi pour un message !
        </div>
        <div id="resultat-events" style="margin-top: 10px; font-weight: bold;"></div>
        <div style="margin-top: 10px;">
            <input type="text" placeholder="Tapez quelque chose..." onkeydown="afficherTouche(event)" class="form-control">
            <div id="resultat-keydown" style="margin-top: 10px; font-weight: bold;"></div>
        </div>
        <form onsubmit="gererSoumission(event)" style="margin-top: 10px;">
            <label for="input-form">Saisissez quelque chose :</label>
            <input type="text" id="input-form" class="form-control" required>
            <button type="submit" class="btn btn-secondary" style="margin-top: 10px;">Soumettre</button>
        </form>
        <div id="resultat-submit" style="margin-top: 10px; font-weight: bold;"></div>
        <div style="margin-top: 10px;">
            <p>Redimensionnez la fenêtre pour voir les dimensions :</p>
            <div id="resultat-resize" style="font-weight: bold;"></div>
        </div>
    </div>
</div>

<script>
    // Changer la couleur d'un élément au clic
    function changerCouleur() {
        document.getElementById("element").style.color = "blue";
    }

    // Afficher un message au survol
    function afficherMessage() {
        document.getElementById("resultat-events").textContent = "Vous avez survolé l'élément !";
    }

    // Capturer une touche pressée
    function afficherTouche(event) {
        document.getElementById("resultat-keydown").textContent = `Touche pressée : ${event.key}`;
    }

    // Capturer la soumission d'un formulaire
    function gererSoumission(event) {
        event.preventDefault(); // Empêche la soumission par défaut
        document.getElementById("resultat-submit").textContent = "Formulaire soumis !";
    }

    // Réagir au redimensionnement de la fenêtre
    function afficherDimensions() {
        let largeur = window.innerWidth;
        let hauteur = window.innerHeight;
        document.getElementById("resultat-resize").textContent = `Dimensions : ${largeur}x${hauteur}`;
    }

    // Ajouter un écouteur pour l'événement de redimensionnement
    window.addEventListener("resize", afficherDimensions);
</script>

    </div>
</div>

<!-- JavaScript Avancé -->
<div class="content-section" id="js-avance">
    <h1><i class="fas fa-rocket icon"></i> JavaScript Avancé</h1>
    <p>
        Le JavaScript avancé est une étape essentielle pour les développeurs souhaitant maîtriser pleinement ce langage. 
        Il va au-delà des bases pour se concentrer sur des concepts, outils et techniques qui permettent de créer des applications plus dynamiques, performantes et maintenables.
    </p>
    <p>
        Dans cette section, vous apprendrez à utiliser des fonctionnalités modernes de JavaScript, à manipuler le DOM de manière avancée, 
        et à gérer des interactions complexes avec des serveurs, des API et des données asynchrones. Vous serez également initié aux meilleures pratiques de développement pour produire un code propre, efficace et évolutif.
    </p>
    <h2>Contenu des cours</h2>
    <ul>
        <li>
            <strong>Promises et Async/Await :</strong> Gestion du code asynchrone pour effectuer des opérations comme les requêtes API sans bloquer l'exécution.
        </li>
        <li>
            <strong>Classes et Programmation Orientée Objet (POO) :</strong> Structure de votre code avec des concepts avancés d’héritage et d’encapsulation.
        </li>
        <li>
            <strong>Manipulation Avancée du DOM :</strong> Techniques pour sélectionner, modifier et manipuler les éléments HTML de manière performante.
        </li>
        <li>
            <strong>Événements et Listeners :</strong> Gestion efficace des événements utilisateur pour améliorer l'interactivité.
        </li>
        <li>
            <strong>Modules JavaScript :</strong> Organisation et réutilisation du code avec l'import/export de fonctionnalités.
        </li>
        <li>
            <strong>Fetch API et Gestion des Données :</strong> Communication avec des serveurs pour récupérer et envoyer des données.
        </li>
        <li>
            <strong>JSON et Web Storage :</strong> Manipulation des données JSON et stockage local avec LocalStorage ou SessionStorage.
        </li>
        <li>
            <strong>Service Workers et Progressive Web Apps (PWA) :</strong> Création d’applications web modernes avec des fonctionnalités hors ligne.
        </li>
        <li>
            <strong>Gestion des Erreurs et Debugging :</strong> Techniques pour identifier, prévenir et résoudre les erreurs efficacement.
        </li>
    </ul>
    <p>
        Chaque cours inclut des exemples pratiques, des exercices interactifs, et des projets pour appliquer vos nouvelles compétences. 
        À la fin de cette section, vous serez capable de développer des applications JavaScript avancées et professionnelles.
    </p>
    <div class="row">
    <div class="col-md-12">
    <h3 id="classes">Classes</h3>
    <p>
        En JavaScript, les classes sont une fonctionnalité introduite avec ES6. Elles permettent de créer des modèles réutilisables 
        pour structurer le code et organiser des fonctionnalités communes. Bien que les classes soient une abstraction, elles facilitent la gestion des données 
        et des comportements liés à ces données.
    </p>
    <h4>Caractéristiques principales</h4>
    <ul>
        <li><strong>Création de classes :</strong> Déclaration d'une classe avec le mot-clé <code>class</code>.</li>
        <li><strong>Constructeur :</strong> Une méthode spéciale appelée automatiquement lors de l'instanciation d'une classe.</li>
        <li><strong>Méthodes :</strong> Fonctionnalités définies à l'intérieur des classes pour effectuer des actions spécifiques.</li>
        <li><strong>Propriétés statiques :</strong> Propriétés directement accessibles via la classe, sans créer une instance.</li>
    </ul>

    <h4>Exemples pratiques</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Définir une classe</span>
<span class="keyword">class</span> Voiture {
    <span class="comment">// Le constructeur initialise les propriétés</span>
    <span class="keyword">constructor</span>(marque, modele, annee) {
        this.marque = marque;
        this.modele = modele;
        this.annee = annee;
    }

    <span class="comment">// Méthode pour afficher les détails de la voiture</span>
    afficherDetails() {
        <span class="keyword">return</span> <span class="string">`Voiture : ${this.marque} ${this.modele}, Année : ${this.annee}`</span>;
    }

    <span class="comment">// Propriété statique</span>
    <span class="keyword">static</span> categorie = <span class="string">"Véhicule"</span>;

    <span class="comment">// Méthode statique</span>
    <span class="keyword">static</span> comparer(voiture1, voiture2) {
        <span class="keyword">return</span> voiture1.annee > voiture2.annee ? voiture1 : voiture2;
    }
}

<span class="comment">// Instanciation d'une classe</span>
<span class="keyword">let</span> voiture1 = <span class="keyword">new</span> Voiture(<span class="string">"Toyota"</span>, <span class="string">"Corolla"</span>, <span class="number">2020</span>);
<span class="keyword">let</span> voiture2 = <span class="keyword">new</span> Voiture(<span class="string">"Honda"</span>, <span class="string">"Civic"</span>, <span class="number">2018</span>);

<span class="comment">// Utiliser une méthode</span>
console.log(voiture1.afficherDetails()); <span class="comment">// Voiture : Toyota Corolla, Année : 2020</span>

<span class="comment">// Accéder à une propriété statique</span>
console.log(Voiture.categorie); <span class="comment">// Véhicule</span>

<span class="comment">// Utiliser une méthode statique</span>
<span class="keyword">let</span> plusRecente = Voiture.comparer(voiture1, voiture2);
console.log(plusRecente.afficherDetails()); <span class="comment">// Voiture : Toyota Corolla, Année : 2020</span>
</code></pre>
    </div>

    <h4>Cas d'utilisation pratiques</h4>
    <p>Les classes peuvent être utilisées pour :</p>
    <ul>
        <li><strong>Modéliser des entités :</strong> Créer des modèles simples pour structurer les données, comme des produits, des utilisateurs ou des véhicules.</li>
        <li><strong>Créer des collections réutilisables :</strong> Définir des fonctionnalités standardisées pour des groupes similaires d'objets.</li>
        <li><strong>Ajouter des méthodes spécifiques :</strong> Faciliter les opérations fréquentes sur des ensembles de données.</li>
        <li><strong>Centraliser des propriétés ou méthodes :</strong> Utiliser des méthodes ou propriétés statiques pour des valeurs communes.</li>
    </ul>
</div>
<div class="col-md-12">
    <h3 id="poo">Programmation Orientée Objet (POO)</h3>
    <p>
        Après avoir exploré les classes, il est important de comprendre leur rôle dans un paradigme plus large : la Programmation Orientée Objet (POO).
        Les classes sont un outil de la POO, mais la POO va bien au-delà en proposant une manière de penser et de structurer votre code en JavaScript.
    </p>

    <h4>Différence entre les Classes et la POO</h4>
    <ul>
        <li>
            <strong>Classes :</strong> Une abstraction qui permet de créer des modèles d'objets. Elles se concentrent sur la création et la gestion de structures spécifiques.
        </li>
        <li>
            <strong>POO :</strong> Un paradigme de programmation qui repose sur des concepts comme l'encapsulation, l'héritage, et le polymorphisme. 
            La POO utilise les classes et les objets pour structurer le code, favoriser la réutilisation et faciliter la maintenance.
        </li>
    </ul>

    <h4>Principes fondamentaux de la POO</h4>
    <p>La POO repose sur quatre piliers principaux :</p>
    <ul>
        <li><strong>Encapsulation :</strong> Regrouper les données (propriétés) et les comportements (méthodes) dans une entité appelée objet.</li>
        <li><strong>Héritage :</strong> Créer des relations entre les classes pour partager des propriétés et des méthodes communes.</li>
        <li><strong>Polymorphisme :</strong> Permettre à des méthodes ou des objets de prendre plusieurs formes, souvent en redéfinissant ou en surchargeant des méthodes.</li>
        <li><strong>Abstraction :</strong> Cacher les détails complexes pour ne montrer que l'essentiel à l'utilisateur.</li>
    </ul>

    <h4>Exemples pratiques</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de POO en JavaScript</span>

<span class="comment">// Classe de base (Encapsulation)</span>
<span class="keyword">class</span> Animal {
    <span class="keyword">constructor</span>(nom, type) {
        this.nom = nom;
        this.type = type;
    }

    <span class="comment">// Méthode générique</span>
    decrire() {
        <span class="keyword">return</span> <span class="string">`${this.nom} est un ${this.type}.`</span>;
    }
}

<span class="comment">// Héritage : Classe spécifique qui hérite de la classe Animal</span>
<span class="keyword">class</span> Chien <span class="keyword">extends</span> Animal {
    <span class="comment">// Ajout d'une méthode spécifique</span>
    aboyer() {
        <span class="keyword">return</span> <span class="string">`Woof! Je suis ${this.nom}.`</span>;
    }
}

<span class="comment">// Polymorphisme : Redéfinition de la méthode decrire</span>
<span class="keyword">class</span> Chat <span class="keyword">extends</span> Animal {
    decrire() {
        <span class="keyword">return</span> <span class="string">`${this.nom} est un chat très mignon.`</span>;
    }
}

<span class="comment">// Instanciation d'objets</span>
<span class="keyword">let</span> animal1 = <span class="keyword">new</span> Animal(<span class="string">"Daisy"</span>, <span class="string">"oiseau"</span>);
<span class="keyword">let</span> chien1 = <span class="keyword">new</span> Chien(<span class="string">"Max"</span>, <span class="string">"chien"</span>);
<span class="keyword">let</span> chat1 = <span class="keyword">new</span> Chat(<span class="string">"Milo"</span>, <span class="string">"chat"</span>);

<span class="comment">// Utilisation des méthodes</span>
console.log(animal1.decrire()); <span class="comment">// Daisy est un oiseau.</span>
console.log(chien1.decrire());  <span class="comment">// Max est un chien.</span>
console.log(chien1.aboyer());  <span class="comment">// Woof! Je suis Max.</span>
console.log(chat1.decrire());  <span class="comment">// Milo est un chat très mignon.</span>
</code></pre>
    </div>

    <h4>Concepts avancés</h4>
    <ul>
        <li><strong>Constructeurs parent et super :</strong> Utilisation du mot-clé <code>super</code> pour accéder au constructeur ou aux méthodes d’une classe parente.</li>
        <li><strong>Getters et Setters :</strong> Méthodes pour accéder ou modifier des propriétés tout en encapsulant la logique.</li>
        <li><strong>Composition :</strong> Utilisation d'autres objets au lieu d'hériter d'une classe (concept <em>has-a</em>).</li>
    </ul>

    <h4>Exemples supplémentaires</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec super et getters/setters</span>

<span class="keyword">class</span> Personne {
    <span class="keyword">constructor</span>(nom, age) {
        this.nom = nom;
        this.age = age;
    }

    <span class="comment">// Getter pour le nom complet</span>
    get nomComplet() {
        <span class="keyword">return</span> <span class="string">`Nom complet : ${this.nom}`</span>;
    }

    <span class="comment">// Setter pour changer le nom</span>
    set changerNom(nouveauNom) {
        this.nom = nouveauNom;
    }
}

<span class="comment">// Héritage et utilisation de super</span>
<span class="keyword">class</span> Etudiant <span class="keyword">extends</span> Personne {
    <span class="keyword">constructor</span>(nom, age, programme) {
        <span class="keyword">super</span>(nom, age); <span class="comment">// Appelle le constructeur parent</span>
        this.programme = programme;
    }

    decrire() {
        <span class="keyword">return</span> <span class="string">`${this.nom}, ${this.age} ans, étudie ${this.programme}.`</span>;
    }
}

<span class="comment">// Instanciation</span>
<span class="keyword">let</span> etudiant1 = <span class="keyword">new</span> Etudiant(<span class="string">"Alice"</span>, <span class="number">22</span>, <span class="string">"Informatique"</span>);

<span class="comment">// Utilisation</span>
console.log(etudiant1.decrire());  <span class="comment">// Alice, 22 ans, étudie Informatique.</span>
etudiant1.changerNom = <span class="string">"Alicia"</span>;
console.log(etudiant1.nomComplet); <span class="comment">// Nom complet : Alicia</span>
</code></pre>
    </div>
</div>
<div class="col-md-12">
    <h3 id="promises">Promises</h3>
    <p>
        Les Promises en JavaScript sont un mécanisme pour gérer les opérations asynchrones. Elles permettent d’exécuter du code après l’achèvement d’une tâche, 
        en évitant les fameux "callbacks hell" et en rendant le code plus lisible et maintenable.
    </p>

    <h4>Pourquoi utiliser les Promises ?</h4>
    <ul>
        <li>
            <strong>Simplifier les opérations asynchrones :</strong> Les Promises permettent de chaîner des opérations asynchrones de manière claire.
        </li>
        <li>
            <strong>Éviter les callbacks imbriqués :</strong> En remplaçant les callbacks imbriqués par des méthodes comme <code>then</code> et <code>catch</code>.
        </li>
        <li>
            <strong>Gestion efficace des erreurs :</strong> Les Promises capturent les erreurs sur tout le chaînage via <code>catch</code>.
        </li>
    </ul>

    <h4>Structure d’une Promise</h4>
    <p>Une Promise est un objet qui représente une valeur qui peut être disponible maintenant, dans le futur, ou jamais. Elle a trois états possibles :</p>
    <ul>
        <li><strong>Pending :</strong> La Promise est en attente (opération en cours).</li>
        <li><strong>Fulfilled :</strong> La Promise est résolue avec succès.</li>
        <li><strong>Rejected :</strong> La Promise a échoué.</li>
    </ul>

    <h4>Création et utilisation de Promises</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Création d'une Promise</span>
<span class="keyword">const</span> maPromise = <span class="keyword">new</span> Promise((resolve, reject) => {
    <span class="comment">// Simule une opération asynchrone</span>
    <span class="keyword">let</span> operationReussie = <span class="boolean">true</span>;

    <span class="comment">// Après 2 secondes, on décide du résultat</span>
    setTimeout(() => {
        <span class="keyword">if</span> (operationReussie) {
            resolve(<span class="string">"Opération réussie !"</span>);
        } <span class="keyword">else</span> {
            reject(<span class="string">"Erreur lors de l'opération."</span>);
        }
    }, <span class="number">2000</span>);
});

<span class="comment">// Consommer une Promise</span>
maPromise
    .then((resultat) => {
        console.log(resultat); <span class="comment">// "Opération réussie !"</span>
    })
    .catch((erreur) => {
        console.error(erreur); <span class="comment">// "Erreur lors de l'opération."</span>
    })
    .finally(() => {
        console.log(<span class="string">"Opération terminée."</span>);
    });
</code></pre>
    </div>

    <h4>Méthodes principales des Promises</h4>
    <ul>
        <li>
            <strong><code>then</code> :</strong> Exécute une fonction lorsque la Promise est résolue.
        </li>
        <li>
            <strong><code>catch</code> :</strong> Exécute une fonction lorsque la Promise est rejetée.
        </li>
        <li>
            <strong><code>finally</code> :</strong> Exécute une fonction une fois que la Promise est terminée, qu'elle soit résolue ou rejetée.
        </li>
        <li>
            <strong><code>Promise.all</code> :</strong> Attend que toutes les Promises passées soient résolues ou qu’une échoue.
        </li>
        <li>
            <strong><code>Promise.race</code> :</strong> Renvoie la première Promise résolue ou rejetée.
        </li>
        <li>
            <strong><code>Promise.allSettled</code> :</strong> Attend que toutes les Promises soient terminées, quelle que soit leur issue.
        </li>
        <li>
            <strong><code>Promise.any</code> :</strong> Renvoie la première Promise résolue, ignore les rejets.
        </li>
    </ul>

    <h4>Exemples avancés</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec Promise.all</span>
<span class="keyword">const</span> promesse1 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">1000</span>, <span class="string">"Promise 1 résolue"</span>));
<span class="keyword">const</span> promesse2 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">2000</span>, <span class="string">"Promise 2 résolue"</span>));
<span class="keyword">const</span> promesse3 = <span class="keyword">new</span> Promise((resolve, reject) => setTimeout(reject, <span class="number">1500</span>, <span class="string">"Promise 3 rejetée"</span>));

Promise.all([promesse1, promesse2, promesse3])
    .then((resultats) => {
        console.log(resultats); <span class="comment">// ["Promise 1 résolue", "Promise 2 résolue"]</span>
    })
    .catch((erreur) => {
        console.error(erreur); <span class="comment">// "Promise 3 rejetée"</span>
    });

<span class="comment">// Exemple avec Promise.race</span>
Promise.race([promesse1, promesse2, promesse3])
    .then((resultat) => {
        console.log(resultat); <span class="comment">// "Promise 1 résolue"</span>
    })
    .catch((erreur) => {
        console.error(erreur); <span class="comment">// Si la première est rejetée</span>
    });
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <p>Les Promises sont utilisées dans divers scénarios asynchrones :</p>
    <ul>
        <li><strong>Requêtes API :</strong> Récupération de données depuis un serveur avec <code>fetch</code>.</li>
        <li><strong>Chargement de ressources :</strong> Téléchargement d'images ou de fichiers.</li>
        <li><strong>Animations :</strong> Attente de la fin d’une animation ou d’une transition.</li>
        <li><strong>Opérations complexes :</strong> Exécution de plusieurs tâches asynchrones en parallèle.</li>
    </ul>
</div>

<div class="col-md-12">
    <h3 id="async-await">Async/Await</h3>
    <p>
        <strong>Async/Await</strong> est une syntaxe introduite avec ES8 (ECMAScript 2017) pour simplifier la gestion des opérations asynchrones. 
        Elle repose sur les Promises, mais rend le code plus lisible et facile à écrire, semblable à du code synchrone.
    </p>

    <h4>Pourquoi utiliser Async/Await ?</h4>
    <ul>
        <li><strong>Lisibilité :</strong> Simplifie les chaînes de <code>.then</code> et évite les imbrications complexes.</li>
        <li><strong>Gestion des erreurs :</strong> Permet de capturer les erreurs avec un bloc <code>try/catch</code>, facilitant le débogage.</li>
        <li><strong>Code synchrone-like :</strong> Écrit des fonctions asynchrones de manière séquentielle, ce qui est intuitif.</li>
    </ul>

    <h4>Concepts fondamentaux</h4>
    <ul>
        <li>
            <strong><code>async</code> :</strong> Déclare une fonction asynchrone. Une fonction asynchrone renvoie toujours une Promise.
        </li>
        <li>
            <strong><code>await</code> :</strong> Suspend l’exécution d’une fonction asynchrone jusqu'à ce qu'une Promise soit résolue ou rejetée.
        </li>
    </ul>

    <h4>Structure d’Async/Await</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Définir une fonction asynchrone</span>
<span class="keyword">async</span> <span class="keyword">function</span> exempleAsync() {
    <span class="comment">// Simuler une opération asynchrone avec une Promise</span>
    <span class="keyword">let</span> resultat = <span class="keyword">await</span> <span class="keyword">new</span> Promise((resolve) => {
        setTimeout(() => resolve(<span class="string">"Opération terminée !"</span>), <span class="number">2000</span>);
    });

    console.log(resultat); <span class="comment">// "Opération terminée !"</span>
}

<span class="comment">// Appeler une fonction asynchrone</span>
exempleAsync();
</code></pre>
    </div>

    <h4>Gestion des erreurs avec Async/Await</h4>
    <p>Les erreurs dans les fonctions asynchrones peuvent être capturées avec un bloc <code>try/catch</code> :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de gestion d'erreur</span>
<span class="keyword">async</span> <span class="keyword">function</span> operationAvecErreur() {
    <span class="keyword">try</span> {
        <span class="keyword">let</span> resultat = <span class="keyword">await</span> <span class="keyword">new</span> Promise((_, reject) => {
            setTimeout(() => reject(<span class="string">"Une erreur est survenue."</span>), <span class="number">2000</span>);
        });

        console.log(resultat); <span class="comment">// Ne sera pas exécuté</span>
    } <span class="keyword">catch</span> (erreur) {
        console.error(erreur); <span class="comment">// "Une erreur est survenue."</span>
    }
}

operationAvecErreur();
</code></pre>
    </div>

    <h4>Combinaison d’Async/Await avec des boucles</h4>
    <p>Async/Await peut être utilisé dans des boucles pour gérer des opérations répétées de manière séquentielle :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exécution séquentielle avec une boucle</span>
<span class="keyword">async</span> <span class="keyword">function</span> traiterTableau() {
    <span class="keyword">let</span> elements = [<span class="string">"A"</span>, <span class="string">"B"</span>, <span class="string">"C"</span>];

    <span class="keyword">for</span> (<span class="keyword">let</span> element <span class="keyword">of</span> elements) {
        <span class="keyword">await</span> <span class="keyword">new</span> Promise((resolve) => {
            setTimeout(() => {
                console.log(<span class="string">`Traitement de ${element}`</span>);
                resolve();
            }, <span class="number">1000</span>);
        });
    }

    console.log(<span class="string">"Tous les éléments ont été traités."</span>);
}

traiterTableau();
</code></pre>
    </div>

    <h4>Exemples avancés</h4>
    <p>Async/Await peut être combiné avec des Promises pour exécuter des tâches simultanées et séquentielles :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exécution parallèle avec Promise.all</span>
<span class="keyword">async</span> <span class="keyword">function</span> executionParallele() {
    <span class="keyword">let</span> promesse1 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">1000</span>, <span class="string">"Tâche 1 terminée"</span>));
    <span class="keyword">let</span> promesse2 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">2000</span>, <span class="string">"Tâche 2 terminée"</span>));

    <span class="keyword">let</span> resultats = <span class="keyword">await</span> Promise.all([promesse1, promesse2]);

    console.log(resultats); <span class="comment">// ["Tâche 1 terminée", "Tâche 2 terminée"]</span>
}

executionParallele();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Requêtes API :</strong> Utilisation de <code>fetch</code> pour récupérer des données de manière asynchrone.</li>
        <li><strong>Animations :</strong> Synchronisation d'animations ou de transitions.</li>
        <li><strong>Flux de traitement :</strong> Exécution de plusieurs étapes dépendantes de manière séquentielle.</li>
        <li><strong>Opérations parallèles :</strong> Gérer plusieurs tâches simultanées avec <code>Promise.all</code>.</li>
    </ul>
</div>
<div class="col-md-12" id="callbacks-closures">
    <h3>Callbacks</h3>
    <p>
        Les <strong>callbacks</strong> sont des fonctions passées en argument à une autre fonction, qui sont ensuite exécutées à l’intérieur de cette fonction. 
        Ils permettent d’exécuter du code de manière asynchrone ou en réponse à un événement.
    </p>

    <h4>Pourquoi utiliser des callbacks ?</h4>
    <ul>
        <li><strong>Flexibilité :</strong> Vous pouvez passer différentes fonctions pour modifier le comportement d'une fonction principale.</li>
        <li><strong>Asynchronisme :</strong> Les callbacks sont souvent utilisés pour gérer des opérations asynchrones, comme les requêtes API.</li>
    </ul>

    <h4>Exemple simple</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de callback simple</span>
<span class="keyword">function</span> afficherMessage(message, callback) {
    console.log(<span class="string">"Message principal :"</span>, message);
    callback(); <span class="comment">// Appelle la fonction callback</span>
}

<span class="comment">// Fonction callback</span>
<span class="keyword">function</span> afficherFin() {
    console.log(<span class="string">"Opération terminée."</span>);
}

<span class="comment">// Appel de la fonction avec un callback</span>
afficherMessage(<span class="string">"Bonjour, monde !"</span>, afficherFin);
</code></pre>
    </div>

    <h4>Gestion des opérations asynchrones</h4>
    <p>Les callbacks sont souvent utilisés pour gérer des opérations comme des délais ou des requêtes asynchrones :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple asynchrone avec setTimeout</span>
<span class="keyword">function</span> executerAvecDelai(callback) {
    console.log(<span class="string">"Début de l'opération..."</span>);
    setTimeout(() => {
        callback(); <span class="comment">// Exécute le callback après 2 secondes</span>
    }, <span class="number">2000</span>);
}

<span class="comment">// Callback</span>
<span class="keyword">function</span> finDelai() {
    console.log(<span class="string">"Opération terminée après 2 secondes."</span>);
}

executerAvecDelai(finDelai);
</code></pre>
    </div>
</div>
<div class="col-md-12">
    <h3>Closures</h3>
    <p>
        Une <strong>closure</strong> est une fonction qui se souvient de son environnement lexical, même lorsque la fonction est exécutée en dehors de cet environnement. 
        Cela signifie qu’une fonction interne peut accéder aux variables de sa fonction parente, même après que la fonction parente ait terminé son exécution.
    </p>

    <h4>Pourquoi utiliser les closures ?</h4>
    <ul>
        <li><strong>Encapsulation :</strong> Permet de créer des fonctions avec des variables privées.</li>
        <li><strong>Mémoire persistante :</strong> Les closures permettent de conserver l’état des variables entre plusieurs appels.</li>
    </ul>

    <h4>Exemple de base</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple simple de closure</span>
<span class="keyword">function</span> creerCompteur() {
    <span class="keyword">let</span> compteur = <span class="number">0</span>;

    <span class="comment">// Retourne une fonction qui utilise la variable compteur</span>
    <span class="keyword">return</span> <span class="keyword">function</span>() {
        compteur++;
        console.log(<span class="string">`Compteur : ${compteur}`</span>);
    };
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> incrementer = creerCompteur();
incrementer(); <span class="comment">// Compteur : 1</span>
incrementer(); <span class="comment">// Compteur : 2</span>
incrementer(); <span class="comment">// Compteur : 3</span>
</code></pre>
    </div>

    <h4>Encapsulation avec closures</h4>
    <p>Les closures sont souvent utilisées pour encapsuler des données dans un environnement privé :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'encapsulation avec une closure</span>
<span class="keyword">function</span> banqueCompte(initial) {
    <span class="keyword">let</span> solde = initial;

    <span class="comment">// Retourne des fonctions pour gérer le compte</span>
    <span class="keyword">return</span> {
        deposer(montant) {
            solde += montant;
            console.log(<span class="string">`Solde après dépôt : ${solde}€`</span>);
        },
        retirer(montant) {
            <span class="keyword">if</span> (montant > solde) {
                console.log(<span class="string">"Fonds insuffisants."</span>);
            } <span class="keyword">else</span> {
                solde -= montant;
                console.log(<span class="string">`Solde après retrait : ${solde}€`</span>);
            }
        },
        consulter() {
            console.log(<span class="string">`Solde actuel : ${solde}€`</span>);
        }
    };
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> monCompte = banqueCompte(<span class="number">100</span>);
monCompte.deposer(<span class="number">50</span>); <span class="comment">// Solde après dépôt : 150€</span>
monCompte.retirer(<span class="number">30</span>); <span class="comment">// Solde après retrait : 120€</span>
monCompte.consulter(); <span class="comment">// Solde actuel : 120€</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation des closures</h4>
    <ul>
        <li><strong>Fonctions mémorisées :</strong> Créer des fonctions avec un état persistant (par ex. compteurs).</li>
        <li><strong>Encapsulation :</strong> Protéger les données en limitant leur accès via des méthodes.</li>
        <li><strong>Gestion d'événements :</strong> Utiliser des closures pour conserver des valeurs dans des gestionnaires d’événements.</li>
    </ul>
</div>
<div class="col-md-12" id="json">
    <h3>JSON (JavaScript Object Notation)</h3>
    <p>
        <strong>JSON</strong> (JavaScript Object Notation) est un format de données léger, facile à lire et à écrire pour les humains, 
        et facile à analyser et générer pour les machines. JSON est largement utilisé pour échanger des données entre un client (navigateur) 
        et un serveur.
    </p>

    <h4>Pourquoi utiliser JSON ?</h4>
    <ul>
        <li><strong>Interopérabilité :</strong> JSON est pris en charge par presque tous les langages de programmation.</li>
        <li><strong>Format léger :</strong> JSON est compact et facile à transporter sur le réseau.</li>
        <li><strong>Facilité de lecture :</strong> Sa structure est intuitive et proche de celle des objets JavaScript.</li>
        <li><strong>Standard web :</strong> JSON est devenu un standard pour l’échange de données dans les API RESTful.</li>
    </ul>

    <h4>Structure de JSON</h4>
    <p>JSON est constitué de paires clé-valeur, et il peut contenir :</p>
    <ul>
        <li><strong>Objets :</strong> Représentés par des accolades <code>{}</code>.</li>
        <li><strong>Tableaux :</strong> Représentés par des crochets <code>[]</code>.</li>
        <li><strong>Types de données :</strong> String, Number, Boolean, Array, Object, <code>null</code>.</li>
    </ul>

    <h4>Exemple d’un fichier JSON</h4>
    <div class="example-box">
        <pre><code class="language-json">{
    "nom": "Alice",
    "age": 30,
    "estAdmin": false,
    "hobbies": ["lecture", "voyage", "cuisine"],
    "adresse": {
        "ville": "Paris",
        "codePostal": 75001
    }
}</code></pre>
    </div>

    <h4>Manipulation de JSON en JavaScript</h4>
    <p>JavaScript offre deux méthodes principales pour travailler avec JSON :</p>
    <ul>
        <li>
            <strong><code>JSON.stringify(objet)</code> :</strong> Convertit un objet JavaScript en chaîne JSON.
        </li>
        <li>
            <strong><code>JSON.parse(jsonString)</code> :</strong> Convertit une chaîne JSON en objet JavaScript.
        </li>
    </ul>

    <h4>Exemple d’utilisation</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'utilisation de JSON.stringify et JSON.parse</span>

<span class="comment">// Un objet JavaScript</span>
<span class="keyword">const</span> utilisateur = {
    nom: <span class="string">"Alice"</span>,
    age: <span class="number">30</span>,
    hobbies: [<span class="string">"lecture"</span>, <span class="string">"voyage"</span>],
    estAdmin: <span class="boolean">false</span>
};

<span class="comment">// Convertir l'objet en JSON</span>
<span class="keyword">const</span> jsonString = JSON.stringify(utilisateur);
console.log(jsonString);
/*
    {"nom":"Alice","age":30,"hobbies":["lecture","voyage"],"estAdmin":false}
*/

<span class="comment">// Convertir une chaîne JSON en objet</span>
<span class="keyword">const</span> jsonObjet = JSON.parse(jsonString);
console.log(jsonObjet);
/*
    {
        nom: "Alice",
        age: 30,
        hobbies: ["lecture", "voyage"],
        estAdmin: false
    }
*/
</code></pre>
    </div>

    <h4>Requêtes HTTP et JSON</h4>
    <p>JSON est fréquemment utilisé dans les requêtes API pour envoyer et recevoir des données. Voici un exemple avec <code>fetch</code> :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'utilisation de JSON avec fetch</span>
<span class="keyword">async</span> <span class="keyword">function</span> obtenirUtilisateurs() {
    <span class="keyword">try</span> {
        <span class="comment">// Effectuer une requête GET</span>
        <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">"https://jsonplaceholder.typicode.com/users"</span>);
        <span class="comment">// Convertir la réponse en JSON</span>
        <span class="keyword">const</span> utilisateurs = <span class="keyword">await</span> response.json();
        console.log(utilisateurs);
    } <span class="keyword">catch</span> (erreur) {
        console.error(<span class="string">"Erreur lors de la récupération des utilisateurs :"</span>, erreur);
    }
}

obtenirUtilisateurs();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>APIs :</strong> Échanger des données entre un client et un serveur.</li>
        <li><strong>Stockage local :</strong> Stocker des données dans <code>localStorage</code> ou <code>sessionStorage</code>.</li>
        <li><strong>Configuration :</strong> Utiliser JSON pour des fichiers de configuration.</li>
        <li><strong>Mock de données :</strong> Simuler des réponses de serveur pour les tests.</li>
    </ul>

    <h4>Bonnes pratiques avec JSON</h4>
    <ul>
        <li>Vérifiez toujours la validité de votre JSON avec des outils comme <a href="https://jsonlint.com" target="_blank">JSONLint</a>.</li>
        <li>Utilisez <code>try/catch</code> pour gérer les erreurs lors du parsing JSON.</li>
        <li>Évitez les références circulaires dans vos objets, car elles provoquent des erreurs avec <code>JSON.stringify</code>.</li>
        <li>Minimisez vos données pour réduire la taille de vos requêtes réseau.</li>
    </ul>
</div>
<div class="col-md-12" id="modules">
    <h3>Modules en JavaScript</h3>
    <p>
        Les <strong>modules</strong> en JavaScript permettent de mieux organiser le code en le divisant en plusieurs fichiers. Cela permet de maintenir un code plus propre, 
        réutilisable et facile à déboguer. Les modules facilitent l’importation et l’exportation de fonctionnalités entre différentes parties de l’application.
    </p>

    <h4>Pourquoi utiliser des modules ?</h4>
    <ul>
        <li><strong>Modularité :</strong> Divisez le code en blocs réutilisables pour éviter la duplication.</li>
        <li><strong>Maintenance :</strong> Facilite la gestion du code à long terme en le rendant plus lisible et organisé.</li>
        <li><strong>Scalabilité :</strong> Permet de développer des applications plus complexes avec une architecture bien structurée.</li>
        <li><strong>Réutilisation :</strong> Permet de partager du code entre différents projets ou modules.</li>
    </ul>

    <h4>Les types de modules en JavaScript</h4>
    <p>En JavaScript, il existe deux principaux systèmes pour gérer les modules :</p>
    <ul>
        <li><strong>Modules ES6 :</strong> La syntaxe native de JavaScript pour l'importation et l'exportation de modules.</li>
        <li><strong>CommonJS :</strong> Un système de modules principalement utilisé côté serveur (Node.js).</li>
    </ul>

    <h4>Modules ES6</h4>
    <p>Les modules ES6 sont maintenant la norme pour la gestion des modules en JavaScript, notamment dans les navigateurs modernes et les outils de bundling comme Webpack.</p>
    <ul>
        <li><strong><code>export</code> :</strong> Permet d'exporter une fonction, un objet, ou une variable d'un module.</li>
        <li><strong><code>import</code> :</strong> Permet d'importer des fonctions, objets ou variables depuis un autre module.</li>
    </ul>

    <h4>Exemple d’utilisation des Modules ES6</h4>
    <p>Imaginons que vous avez deux fichiers : <code>calcul.js</code> et <code>app.js</code>.</p>

    <h5>Fichier <code>calcul.js</code></h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier calcul.js - Contient des fonctions pour des calculs</span>

// Exportation d'une fonction
<span class="keyword">export</span> <span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="keyword">export</span> <span class="keyword">function</span> soustraction(a, b) {
    <span class="keyword">return</span> a - b;
}

<span class="keyword">export</span> <span class="keyword">const</span> pi = <span class="number">3.14</span>;
</code></pre>
    </div>

    <h5>Fichier <code>app.js</code></h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier app.js - Utilise les fonctions du module calcul.js</span>

// Importation des fonctions et variables depuis calcul.js
<span class="keyword">import</span> { addition, soustraction, pi } <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;

console.log(addition(<span class="number">5</span>, <span class="number">3</span>));  <span class="comment">// 8</span>
console.log(soustraction(<span class="number">5</span>, <span class="number">3</span>));  <span class="comment">// 2</span>
console.log(pi);  <span class="comment">// 3.14</span>
</code></pre>
    </div>

    <h4>Importation et exportation par défaut</h4>
    <p>Un module peut également exporter un seul élément par défaut à l'aide de <code>export default</code>. Cela simplifie l'importation d'un module avec un seul export.</p>

    <h5>Exemple d'exportation par défaut</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier calcul.js - Exportation par défaut</span>
<span class="keyword">export default</span> <span class="keyword">function</span> multiplication(a, b) {
    <span class="keyword">return</span> a * b;
}
</code></pre>
    </div>

    <h5>Importation par défaut</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier app.js - Importation de la fonction par défaut</span>
<span class="keyword">import</span> multiplication <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;

console.log(multiplication(<span class="number">5</span>, <span class="number">3</span>));  <span class="comment">// 15</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation des Modules</h4>
    <ul>
        <li><strong>Organiser le code :</strong> Diviser un code complexe en plusieurs fichiers pour améliorer la lisibilité et la maintenance.</li>
        <li><strong>Réutilisation :</strong> Créer des modules réutilisables pour partager du code entre plusieurs projets.</li>
        <li><strong>Gestion des dépendances :</strong> Utiliser des modules pour gérer des bibliothèques externes avec des outils comme NPM.</li>
        <li><strong>Scalabilité :</strong> Développer des applications complexes en répartissant les responsabilités entre différents modules.</li>
    </ul>

    <h4>Utilisation des Modules avec un Bundler (Webpack)</h4>
    <p>Les modules ES6 sont très efficaces dans un environnement de développement avec un bundler comme Webpack. 
        Ce dernier permet de regrouper plusieurs fichiers JavaScript en un seul fichier pour optimiser les performances du site.
    </p>
    <ul>
        <li><strong>Installation :</strong> Vous pouvez installer Webpack et ses dépendances via <code>npm</code> ou <code>yarn</code>.</li>
        <li><strong>Configuration :</strong> Utilisez un fichier de configuration pour définir les points d’entrée et de sortie des fichiers modules.</li>
        <li><strong>Utilisation :</strong> Après avoir configuré Webpack, vous pouvez importez vos fichiers JavaScript et ils seront automatiquement regroupés.</li>
    </ul>

    <h4>Conclusion</h4>
    <p>Les modules JavaScript permettent de structurer et de maintenir efficacement des applications complexes. Utiliser la syntaxe des modules ES6, 
    combinée à des outils modernes comme Webpack, rend le code plus modulaire, réutilisable et optimisé.</p>
</div>


    </div>
</div>
<div class="col-md-12" id="fetch">
    <h3>API Fetch</h3>
    <p>
        <strong>Fetch</strong> est une interface moderne introduite avec ES6 pour effectuer des requêtes HTTP. 
        Elle remplace l'ancienne méthode <code>XMLHttpRequest</code>, offrant une syntaxe plus simple et intuitive basée sur des Promises.
    </p>

    <h4>Pourquoi utiliser l'API Fetch ?</h4>
    <ul>
        <li><strong>Simplicité :</strong> Syntaxe claire et lisible pour effectuer des requêtes asynchrones.</li>
        <li><strong>Basée sur des Promises :</strong> Compatible avec <code>then</code>, <code>catch</code>, et <code>async/await</code>.</li>
        <li><strong>Supporte les options avancées :</strong> En-têtes personnalisés, méthodes HTTP (GET, POST, PUT, DELETE, etc.), gestion des corps de requêtes.</li>
    </ul>

    <h4>Syntaxe de base</h4>
    <p>La méthode <code>fetch()</code> retourne une Promise qui se résout avec une réponse HTTP (ou est rejetée en cas d'erreur réseau).</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple simple avec fetch</span>
<span class="keyword">fetch</span>(<span class="string">"https://jsonplaceholder.typicode.com/posts"</span>)
    .<span class="keyword">then</span>((response) => {
        <span class="comment">// Vérifie si la réponse est OK</span>
        <span class="keyword">if</span> (!response.ok) {
            <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">`Erreur HTTP ! Statut : ${response.status}`</span>);
        }
        <span class="keyword">return</span> response.json(); <span class="comment">// Convertit en JSON</span>
    })
    .<span class="keyword">then</span>((data) => {
        console.log(data); <span class="comment">// Affiche les données reçues</span>
    })
    .<span class="keyword">catch</span>((error) => {
        console.error(<span class="string">"Erreur lors de la requête :"</span>, error);
    });
</code></pre>
    </div>

    <h4>Utilisation avec <code>async/await</code></h4>
    <p>Pour rendre le code encore plus lisible, vous pouvez utiliser <code>async/await</code> avec Fetch :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec async/await</span>
<span class="keyword">async</span> <span class="keyword">function</span> obtenirPosts() {
    <span class="keyword">try</span> {
        <span class="comment">// Effectuer une requête GET</span>
        <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">"https://jsonplaceholder.typicode.com/posts"</span>);
        <span class="comment">// Vérifie si la réponse est OK</span>
        <span class="keyword">if</span> (!response.ok) {
            <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">`Erreur HTTP ! Statut : ${response.status}`</span>);
        }
        <span class="comment">// Convertit la réponse en JSON</span>
        <span class="keyword">const</span> data = <span class="keyword">await</span> response.json();
        console.log(data); <span class="comment">// Affiche les données</span>
    } <span class="keyword">catch</span> (erreur) {
        console.error(<span class="string">"Erreur :"</span>, erreur);
    }
}

obtenirPosts();
</code></pre>
    </div>

    <h4>Options avancées de Fetch</h4>
    <p>Fetch permet de configurer la requête avec un deuxième argument contenant des options :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'envoi de données avec Fetch</span>
<span class="keyword">async</span> <span class="keyword">function</span> envoyerDonnees() {
    <span class="keyword">const</span> donnees = {
        titre: <span class="string">"Nouveau post"</span>,
        contenu: <span class="string">"Ceci est un exemple de contenu."</span>
    };

    <span class="keyword">try</span> {
        <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">"https://jsonplaceholder.typicode.com/posts"</span>, {
            <span class="comment">// Configuration de la requête</span>
            method: <span class="string">"POST"</span>,
            headers: {
                <span class="string">"Content-Type"</span>: <span class="string">"application/json"</span>
            },
            body: JSON.stringify(donnees) <span class="comment">// Corps de la requête</span>
        });

        <span class="keyword">if</span> (!response.ok) {
            <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">`Erreur HTTP : ${response.status}`</span>);
        }

        <span class="keyword">const</span> result = <span class="keyword">await</span> response.json();
        console.log(<span class="string">"Données envoyées avec succès :"</span>, result);
    } <span class="keyword">catch</span> (erreur) {
        console.error(<span class="string">"Erreur :"</span>, erreur);
    }
}

envoyerDonnees();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Requêtes API :</strong> Communication avec un serveur pour récupérer ou envoyer des données.</li>
        <li><strong>Chargement dynamique :</strong> Charger des contenus dynamiques sans recharger la page (AJAX).</li>
        <li><strong>Authentification :</strong> Envoyer des identifiants utilisateur pour se connecter à un service.</li>
        <li><strong>Opérations CRUD :</strong> Créer, lire, mettre à jour ou supprimer des ressources sur un serveur.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Vérifiez toujours le statut de la réponse avec <code>response.ok</code> avant de traiter les données.</li>
        <li>Utilisez <code>try/catch</code> pour gérer les erreurs, notamment les problèmes de réseau ou de serveur.</li>
        <li>Spécifiez les en-têtes nécessaires pour les requêtes POST, PUT ou DELETE.</li>
        <li>Minimisez les requêtes réseau en regroupant les données nécessaires.</li>
    </ul>
</div>
<div class="content-section" id="js-expert">
    <h1><i class="fas fa-brain icon"></i> JavaScript Expert</h1>
    <p>
        Le niveau expert en JavaScript est destiné aux développeurs souhaitant maîtriser les aspects les plus avancés et les techniques professionnelles du langage. 
        Ce niveau explore des fonctionnalités modernes et des concepts complexes pour développer des applications hautement performantes et évolutives.
    </p>
    <p>
        Dans cette section, vous apprendrez à optimiser le traitement des données, gérer des opérations complexes avec les workers, utiliser des fonctionnalités avancées de JavaScript ES6+, 
        et améliorer la robustesse de vos applications grâce aux tests unitaires et à la gestion des erreurs. Vous explorerez également des concepts essentiels pour les Progressive Web Apps (PWA) et les environnements hors ligne.
    </p>

    <h2>Contenu des cours</h2>
    <ul>
        <li>
            <strong>Web Storage :</strong> Manipulation efficace des données stockées localement avec <code>localStorage</code> et <code>sessionStorage</code>, 
            pour des fonctionnalités telles que les sauvegardes automatiques et les préférences utilisateur.
        </li>
        <li>
            <strong>Programmation Orientée Objet Expert :</strong> Exploration approfondie de la POO, incluant l’héritage complexe, les mixins, et les design patterns en JavaScript.
        </li>
        <li>
            <strong>Web Workers :</strong> Utilisation des threads JavaScript pour exécuter des tâches intensives en arrière-plan sans bloquer l’interface utilisateur.
        </li>
        <li>
            <strong>Gestion des Erreurs et Debugging :</strong> Techniques avancées pour détecter, capturer et résoudre efficacement les erreurs dans des applications complexes.
        </li>
        <li>
            <strong>Service Workers et PWA :</strong> Développement d'applications web modernes capables de fonctionner hors ligne, avec des mises à jour automatiques et des notifications push.
        </li>
        <li>
            <strong>Synthaxe Moderne ES6+ :</strong> Utilisation des fonctionnalités avancées de JavaScript telles que les modules, les destructurations, les spread/rest operators, et les itérateurs.
        </li>
        <li>
            <strong>Tests Unitaires :</strong> Introduction aux frameworks comme Jest ou Mocha pour écrire et automatiser des tests unitaires, garantissant la qualité du code.
        </li>
    </ul>
    
    <p>
        Chaque cours est accompagné d'exemples pratiques, de défis interactifs, et de projets avancés pour mettre en pratique vos connaissances. 
        À la fin de cette section, vous serez équipé pour créer des applications JavaScript professionnelles, optimisées et robustes, capables de répondre aux exigences les plus complexes.
    </p>

    <div class="row">

    <div class="col-md-12" id="webstorage">
    <h3>Web Storage</h3>
    <p>
        Le <strong>Web Storage</strong> est une API JavaScript qui permet de stocker des données côté client directement dans le navigateur. 
        Il se compose de deux types principaux de stockage : <code>localStorage</code> et <code>sessionStorage</code>. 
        Ces méthodes offrent une manière simple et efficace de conserver des informations utilisateur pour des applications web.
    </p>

    <h4>Pourquoi utiliser le Web Storage ?</h4>
    <ul>
        <li><strong>Persistant :</strong> Les données peuvent persister après le rechargement ou la fermeture du navigateur (avec <code>localStorage</code>).</li>
        <li><strong>Accessible :</strong> Les données sont facilement accessibles via une simple API JavaScript.</li>
        <li><strong>Sécurisé :</strong> Les données sont spécifiques au domaine et ne sont pas envoyées au serveur automatiquement.</li>
        <li><strong>Rapide :</strong> Idéal pour stocker des préférences utilisateur, des jetons de session, ou des données temporaires.</li>
    </ul>

    <h4>Différences entre <code>localStorage</code> et <code>sessionStorage</code></h4>
    <table>
        <thead>
            <tr>
                <th>Caractéristique</th>
                <th><code>localStorage</code></th>
                <th><code>sessionStorage</code></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persistance</td>
                <td>Les données persistent après la fermeture du navigateur.</td>
                <td>Les données sont supprimées à la fermeture de l’onglet ou de la fenêtre.</td>
            </tr>
            <tr>
                <td>Portée</td>
                <td>Partagée entre tous les onglets et fenêtres du même domaine.</td>
                <td>Spécifique à l’onglet ou la fenêtre active.</td>
            </tr>
            <tr>
                <td>Taille</td>
                <td>5 à 10 Mo (selon le navigateur).</td>
                <td>5 à 10 Mo (selon le navigateur).</td>
            </tr>
        </tbody>
    </table>

    <h4>Fonctionnalités principales</h4>
    <ul>
        <li><code>setItem(key, value)</code> : Enregistre une donnée avec une clé.</li>
        <li><code>getItem(key)</code> : Récupère une donnée à partir d'une clé.</li>
        <li><code>removeItem(key)</code> : Supprime une donnée à partir d'une clé.</li>
        <li><code>clear()</code> : Supprime toutes les données stockées.</li>
        <li><code>length</code> : Retourne le nombre d'éléments stockés.</li>
    </ul>

    <h4>Exemples pratiques</h4>

    <h5>Stocker et récupérer des données</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Stocker une donnée</span>
localStorage.setItem(<span class="string">"utilisateur"</span>, <span class="string">"Alice"</span>);

<span class="comment">// Récupérer une donnée</span>
<span class="keyword">const</span> utilisateur = localStorage.getItem(<span class="string">"utilisateur"</span>);
console.log(utilisateur); <span class="comment">// Alice</span>
</code></pre>
    </div>

    <h5>Supprimer une donnée ou tout effacer</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Supprimer une donnée</span>
localStorage.removeItem(<span class="string">"utilisateur"</span>);

<span class="comment">// Supprimer toutes les données</span>
localStorage.clear();
</code></pre>
    </div>

    <h5>Manipuler des objets avec Web Storage</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Stocker un objet après sérialisation</span>
<span class="keyword">const</span> utilisateur = {
    nom: <span class="string">"Alice"</span>,
    age: <span class="number">30</span>,
    estAdmin: <span class="boolean">true</span>
};

localStorage.setItem(<span class="string">"utilisateur"</span>, JSON.stringify(utilisateur));

<span class="comment">// Récupérer et désérialiser l'objet</span>
<span class="keyword">const</span> utilisateurRecupere = JSON.parse(localStorage.getItem(<span class="string">"utilisateur"</span>));
console.log(utilisateurRecupere); <span class="comment">// { nom: "Alice", age: 30, estAdmin: true }</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Jetons de session :</strong> Stocker des tokens pour l’authentification (ex : OAuth).</li>
        <li><strong>Préférences utilisateur :</strong> Sauvegarder les thèmes, langues ou paramètres de personnalisation.</li>
        <li><strong>Panier d’achat :</strong> Conserver les articles ajoutés au panier dans une application e-commerce.</li>
        <li><strong>Statistiques locales :</strong> Enregistrer des données non sensibles pour l’analyse hors ligne.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez <code>JSON.stringify</code> pour stocker des objets et <code>JSON.parse</code> pour les récupérer.</li>
        <li>Évitez de stocker des données sensibles comme des mots de passe ou des informations bancaires.</li>
        <li>Nettoyez régulièrement les données inutilisées pour optimiser l'espace.</li>
        <li>Utilisez <code>sessionStorage</code> pour les données temporaires spécifiques à un onglet.</li>
    </ul>
</div>
<div class="col-md-12" id="poo-expert">
    <h3>Programmation Orientée Objet (POO) Expert</h3>
    <p>
        La <strong>Programmation Orientée Objet (POO)</strong> au niveau expert en JavaScript consiste à maîtriser des concepts avancés tels que 
        l’héritage complexe, les mixins, les design patterns, et l’utilisation efficace des classes dans des applications scalables et maintenables.
        Ce niveau approfondit les bases pour concevoir des systèmes robustes avec une architecture modulaire.
    </p>

    <h4>Concepts avancés de la POO</h4>
    <ul>
        <li><strong>Héritage complexe :</strong> Implémentation d'héritages multiples avec des classes et des prototypes.</li>
        <li><strong>Mixins :</strong> Ajout de fonctionnalités partagées à plusieurs classes sans héritage direct.</li>
        <li><strong>Encapsulation avancée :</strong> Gestion des membres privés et protégés dans les classes.</li>
        <li><strong>Polymorphisme :</strong> Permet d’utiliser une interface commune pour différentes implémentations.</li>
        <li><strong>Design Patterns :</strong> Application de modèles comme Singleton, Factory, ou Observer.</li>
    </ul>

    <h4>Héritage complexe</h4>
    <p>En JavaScript, l’héritage est basé sur les prototypes, mais avec les classes ES6, il est simplifié et plus intuitif.</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'héritage complexe</span>
<span class="keyword">class</span> Animal {
    <span class="keyword">constructor</span>(nom) {
        <span class="keyword">this</span>.nom = nom;
    }

    parler() {
        console.log(<span class="string">`${this.nom} fait un bruit.`</span>);
    }
}

<span class="keyword">class</span> Chien <span class="keyword">extends</span> Animal {
    parler() {
        console.log(<span class="string">`${this.nom} aboie.`</span>);
    }
}

<span class="keyword">class</span> Chat <span class="keyword">extends</span> Animal {
    parler() {
        console.log(<span class="string">`${this.nom} miaule.`</span>);
    }
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> rex = <span class="keyword">new</span> Chien(<span class="string">"Rex"</span>);
rex.parler(); <span class="comment">// Rex aboie.</span>

<span class="keyword">const</span> felix = <span class="keyword">new</span> Chat(<span class="string">"Félix"</span>);
felix.parler(); <span class="comment">// Félix miaule.</span>
</code></pre>
    </div>

    <h4>Mixins</h4>
    <p>Les mixins permettent d’ajouter des fonctionnalités à plusieurs classes sans utiliser l’héritage direct.</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de Mixin</span>
<span class="keyword">const</span> Volant = {
    voler() {
        console.log(<span class="string">`${this.nom} peut voler !`</span>);
    }
};

<span class="keyword">class</span> Oiseau {
    <span class="keyword">constructor</span>(nom) {
        <span class="keyword">this</span>.nom = nom;
    }
}

<span class="keyword">Object</span>.assign(Oiseau.prototype, Volant);

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> aigle = <span class="keyword">new</span> Oiseau(<span class="string">"Aigle"</span>);
aigle.voler(); <span class="comment">// Aigle peut voler !</span>
</code></pre>
    </div>

    <h4>Encapsulation avancée</h4>
    <p>
        Les membres privés ou protégés sont essentiels pour contrôler l’accès aux propriétés ou méthodes d’une classe. 
        En JavaScript, cela peut être réalisé avec des symboles ou le mot-clé <code>#</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'encapsulation avec membres privés</span>
<span class="keyword">class</span> CompteBancaire {
    <span class="keyword">constructor</span>(soldeInitial) {
        <span class="keyword">this</span>.<span class="keyword">#solde</span> = soldeInitial; <span class="comment">// Membres privés</span>
    }

    <span class="keyword">#verifierFonds</span>(montant) {
        <span class="keyword">return</span> montant <= <span class="keyword">this</span>.<span class="keyword">#solde</span>;
    }

    retirer(montant) {
        <span class="keyword">if</span> (<span class="keyword">this</span>.<span class="keyword">#verifierFonds</span>(montant)) {
            <span class="keyword">this</span>.<span class="keyword">#solde</span> -= montant;
            console.log(<span class="string">`Retrait de ${montant}€. Solde restant : ${this.#solde}€`</span>);
        } <span class="keyword">else</span> {
            console.log(<span class="string">"Fonds insuffisants."</span>);
        }
    }
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> compte = <span class="keyword">new</span> CompteBancaire(<span class="number">1000</span>);
compte.retirer(<span class="number">200</span>); <span class="comment">// Retrait de 200€. Solde restant : 800€</span>
compte.retirer(<span class="number">900</span>); <span class="comment">// Fonds insuffisants.</span>
</code></pre>
    </div>

    <h4>Polymorphisme</h4>
    <p>Le polymorphisme permet d’appeler des méthodes sur des objets dérivés, en garantissant un comportement spécifique à chaque sous-classe.</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de polymorphisme</span>
<span class="keyword">class</span> Forme {
    aire() {
        <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">"Méthode non implémentée."</span>);
    }
}

<span class="keyword">class</span> Cercle <span class="keyword">extends</span> Forme {
    <span class="keyword">constructor</span>(rayon) {
        <span class="keyword">super</span>();
        <span class="keyword">this</span>.rayon = rayon;
    }

    aire() {
        <span class="keyword">return</span> Math.PI * <span class="keyword">this</span>.rayon ** <span class="number">2</span>;
    }
}

<span class="keyword">class</span> Rectangle <span class="keyword">extends</span> Forme {
    <span class="keyword">constructor</span>(largeur, hauteur) {
        <span class="keyword">super</span>();
        <span class="keyword">this</span>.largeur = largeur;
        <span class="keyword">this</span>.hauteur = hauteur;
    }

    aire() {
        <span class="keyword">return</span> <span class="keyword">this</span>.largeur * <span class="keyword">this</span>.hauteur;
    }
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> formes = [
    <span class="keyword">new</span> Cercle(<span class="number">5</span>),
    <span class="keyword">new</span> Rectangle(<span class="number">4</span>, <span class="number">6</span>)
];

formes.forEach((forme) => {
    console.log(<span class="string">`Aire : ${forme.aire()}`</span>);
});
</code></pre>
    </div>

    <h4>Design Patterns</h4>
    <ul>
        <li><strong>Singleton :</strong> Créer une seule instance d’une classe pour tout un projet.</li>
        <li><strong>Factory :</strong> Générer des objets sans spécifier leur classe exacte.</li>
        <li><strong>Observer :</strong> Permet à un objet de notifier automatiquement les changements à ses abonnés.</li>
    </ul>
</div>
<div class="col-md-12" id="web-workers">
    <h3>Web Workers</h3>
    <p>
        Les <strong>Web Workers</strong> sont des scripts qui permettent d’exécuter du code JavaScript en arrière-plan, indépendamment du thread principal du navigateur. 
        Cela empêche les tâches intensives (comme les calculs complexes ou les requêtes longues) de bloquer l’interface utilisateur, offrant une meilleure expérience utilisateur.
    </p>

    <h4>Pourquoi utiliser les Web Workers ?</h4>
    <ul>
        <li><strong>Performances :</strong> Exécuter des tâches lourdes sans affecter l’interactivité de la page.</li>
        <li><strong>Multi-threading :</strong> Permet de tirer parti du traitement parallèle.</li>
        <li><strong>Expérience utilisateur :</strong> Maintenir une interface réactive tout en exécutant des calculs ou des traitements en arrière-plan.</li>
    </ul>

    <h4>Types de Web Workers</h4>
    <ul>
        <li><strong>Dedicated Workers :</strong> Associés à un seul script principal, parfaits pour des tâches spécifiques.</li>
        <li><strong>Shared Workers :</strong> Partagés entre plusieurs scripts principaux, utile pour gérer des ressources communes.</li>
        <li><strong>Service Workers :</strong> Utilisés pour les Progressive Web Apps (PWA), permettant des fonctionnalités comme le cache hors ligne et les notifications push.</li>
    </ul>

    <h4>Créer et utiliser un Web Worker</h4>
    <p>Un Web Worker est défini dans un fichier JavaScript séparé. Voici un exemple complet :</p>

    <h5>Fichier du Worker (<code>worker.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// worker.js - Fichier exécuté en arrière-plan</span>

<span class="comment">// Réception d'un message depuis le thread principal</span>
self.addEventListener(<span class="string">"message"</span>, (event) => {
    <span class="keyword">const</span> nombre = event.data;

    <span class="comment">// Calcul intensif</span>
    <span class="keyword">let</span> resultat = <span class="number">0</span>;
    <span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= nombre; i++) {
        resultat += i;
    }

    <span class="comment">// Envoi du résultat au thread principal</span>
    self.postMessage(resultat);
});
</code></pre>
    </div>

    <h5>Script principal (<code>main.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// main.js - Script principal</span>

<span class="comment">// Création d'un Worker</span>
<span class="keyword">const</span> worker = <span class="keyword">new</span> Worker(<span class="string">"worker.js"</span>);

<span class="comment">// Envoi d'un message au Worker</span>
worker.postMessage(<span class="number">1000000</span>);

<span class="comment">// Réception du résultat</span>
worker.addEventListener(<span class="string">"message"</span>, (event) => {
    console.log(<span class="string">`Résultat : ${event.data}`</span>);
});

<span class="comment">// Gestion des erreurs</span>
worker.addEventListener(<span class="string">"error"</span>, (error) => {
    console.error(<span class="string">`Erreur dans le Worker : ${error.message}`</span>);
});
</code></pre>
    </div>

    <h4>Shared Workers</h4>
    <p>Les <strong>Shared Workers</strong> peuvent être partagés entre plusieurs fenêtres ou onglets du même domaine :</p>
    <h5>Fichier Shared Worker (<code>shared-worker.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// shared-worker.js</span>

<span class="comment">// Gestion des connexions multiples</span>
self.addEventListener(<span class="string">"connect"</span>, (event) => {
    <span class="keyword">const</span> port = event.ports[<span class="number">0</span>];

    port.addEventListener(<span class="string">"message"</span>, (e) => {
        <span class="keyword">const</span> data = e.data;
        port.postMessage(<span class="string">`Données reçues : ${data}`</span>);
    });

    port.start();
});
</code></pre>
    </div>

    <h5>Utilisation d’un Shared Worker (<code>main.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// main.js</span>

<span class="comment">// Création d'un Shared Worker</span>
<span class="keyword">const</span> sharedWorker = <span class="keyword">new</span> SharedWorker(<span class="string">"shared-worker.js"</span>);
<span class="keyword">const</span> port = sharedWorker.port;

<span class="comment">// Envoi de données</span>
port.postMessage(<span class="string">"Hello depuis le script principal"</span>);

<span class="comment">// Réception de données</span>
port.addEventListener(<span class="string">"message"</span>, (event) => {
    console.log(event.data); <span class="comment">// Affiche : "Données reçues : Hello depuis le script principal"</span>
});

port.start();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Calculs intensifs :</strong> Traitement de grandes quantités de données ou algorithmes complexes.</li>
        <li><strong>Analyse de données :</strong> Parsing de fichiers volumineux (JSON, CSV) sans ralentir l'interface utilisateur.</li>
        <li><strong>Mises à jour en temps réel :</strong> Gérer les connexions WebSocket ou les notifications.</li>
        <li><strong>Manipulation d’images ou vidéos :</strong> Traitement en arrière-plan avec des librairies comme <code>Canvas</code>.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez les Workers pour des tâches longues ou intensives uniquement.</li>
        <li>Communiquez de manière efficace en limitant les messages envoyés entre le Worker et le thread principal.</li>
        <li>Gérez les erreurs dans le Worker avec des écouteurs d'événements.</li>
        <li>Nettoyez les Workers inutilisés en appelant <code>worker.terminate()</code> pour libérer des ressources.</li>
    </ul>
</div>
<div class="col-md-12" id="gestion-erreurs-debugging">
    <h3>Gestion des Erreurs et Debugging</h3>
    <p>
        En JavaScript, la gestion des erreurs et le debugging sont essentiels pour assurer la robustesse et la fiabilité des applications. 
        Une bonne gestion des erreurs permet d'anticiper et de traiter les problèmes, tandis que le debugging aide à localiser et corriger les bugs.
    </p>

    <h4>Pourquoi gérer les erreurs ?</h4>
    <ul>
        <li><strong>Prévenir les plantages :</strong> Empêche une erreur d’interrompre complètement l’exécution du programme.</li>
        <li><strong>Améliorer l’expérience utilisateur :</strong> Fournir des messages d’erreur clairs au lieu de comportements inattendus.</li>
        <li><strong>Faciliter le debugging :</strong> Identifier rapidement les causes des problèmes grâce à une gestion structurée.</li>
    </ul>

    <h4>Les erreurs en JavaScript</h4>
    <ul>
        <li><strong>SyntaxError :</strong> Erreur de syntaxe, détectée lors de l’analyse du code.</li>
        <li><strong>ReferenceError :</strong> Variable ou fonction non définie.</li>
        <li><strong>TypeError :</strong> Utilisation d’une valeur avec un type inapproprié.</li>
        <li><strong>RangeError :</strong> Utilisation d'une valeur en dehors d'une plage autorisée.</li>
        <li><strong>Custom Error :</strong> Erreurs définies par le développeur.</li>
    </ul>

    <h4>Gestion des erreurs avec <code>try...catch</code></h4>
    <p>
        Le bloc <code>try...catch</code> permet de capturer les erreurs et d’exécuter un code alternatif.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple simple avec try...catch</span>
<span class="keyword">try</span> {
    <span class="comment">// Code qui peut générer une erreur</span>
    console.log(utilisateur.nom); <span class="comment">// ReferenceError : utilisateur n'est pas défini</span>
} <span class="keyword">catch</span> (erreur) {
    console.error(<span class="string">"Une erreur est survenue :"</span>, erreur.message);
} <span class="comment">// Continue l'exécution sans plantage</span>
</code></pre>
    </div>

    <h4>Lancer des erreurs avec <code>throw</code></h4>
    <p>
        Vous pouvez créer vos propres erreurs personnalisées en utilisant <code>throw</code> pour signaler des conditions spécifiques.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec throw</span>
<span class="keyword">function</span> verifierAge(age) {
    <span class="keyword">if</span> (age < <span class="number">18</span>) {
        <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">"L'âge doit être supérieur ou égal à 18."</span>);
    }
    console.log(<span class="string">"Âge valide :"</span>, age);
}

<span class="keyword">try</span> {
    verifierAge(<span class="number">15</span>);
} <span class="keyword">catch</span> (erreur) {
    console.error(erreur.message); <span class="comment">// L'âge doit être supérieur ou égal à 18.</span>
}
</code></pre>
    </div>

    <h4>Déboguer avec <code>console</code></h4>
    <p>
        L'objet <code>console</code> est un outil puissant pour afficher des informations dans la console du navigateur :
    </p>
    <ul>
        <li><code>console.log()</code> : Affiche des informations générales.</li>
        <li><code>console.error()</code> : Affiche une erreur.</li>
        <li><code>console.warn()</code> : Affiche un avertissement.</li>
        <li><code>console.table()</code> : Affiche des données sous forme de tableau.</li>
    </ul>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemples de console</span>
<span class="keyword">const</span> utilisateur = { nom: <span class="string">"Alice"</span>, age: <span class="number">30</span> };
console.log(utilisateur); <span class="comment">// Affiche l'objet</span>
console.table(utilisateur); <span class="comment">// Affiche l'objet sous forme de tableau</span>
console.warn(<span class="string">"Attention : Variable non utilisée."</span>);
console.error(<span class="string">"Erreur critique détectée."</span>);
</code></pre>
    </div>

    <h4>Déboguer avec les outils du navigateur</h4>
    <p>
        Les navigateurs modernes offrent des outils de développement puissants :
    </p>
    <ul>
        <li><strong>Breakpoints :</strong> Permet de mettre en pause l'exécution du code pour analyser son état.</li>
        <li><strong>Call Stack :</strong> Affiche la pile d’appels pour retracer l’origine d’une erreur.</li>
        <li><strong>Watch Variables :</strong> Surveillez des variables spécifiques pendant l'exécution.</li>
        <li><strong>Network Tab :</strong> Vérifie les requêtes réseau pour identifier les erreurs côté serveur.</li>
    </ul>

    <h4>Gestion globale des erreurs</h4>
    <p>
        Vous pouvez capturer toutes les erreurs non gérées avec <code>window.onerror</code> ou <code>window.addEventListener('error')</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Gestion globale des erreurs</span>
window.addEventListener(<span class="string">"error"</span>, (event) => {
    console.error(<span class="string">`Erreur capturée globalement : ${event.message}`</span>);
});
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Validation des entrées :</strong> Vérifiez les données utilisateur avant de les traiter.</li>
        <li><strong>Requêtes API :</strong> Gérez les erreurs de réseau ou de réponse.</li>
        <li><strong>Gestion des dépendances :</strong> Anticipez les erreurs causées par des modules ou scripts externes.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez <code>try...catch</code> uniquement pour les blocs susceptibles de générer des erreurs.</li>
        <li>Écrivez des messages d'erreur clairs et descriptifs pour faciliter le debugging.</li>
        <li>Gérez les erreurs spécifiques pour éviter des comportements imprévisibles.</li>
        <li>Utilisez les outils de développement pour localiser et résoudre les bugs rapidement.</li>
    </ul>
</div>
<div class="col-md-12" id="service-workers-pwa">
    <h3>Service Workers & Progressive Web Apps (PWA)</h3>
    <p>
        Les <strong>Service Workers</strong> sont des scripts exécutés en arrière-plan par le navigateur, indépendamment des pages web. Ils sont une composante essentielle des <strong>Progressive Web Apps (PWA)</strong>, 
        offrant des fonctionnalités avancées comme le support hors ligne, les notifications push, et la mise en cache optimisée des ressources.
    </p>

    <h4>Pourquoi utiliser les Service Workers ?</h4>
    <ul>
        <li><strong>Fonctionnalité hors ligne :</strong> Permet de charger des pages même sans connexion Internet.</li>
        <li><strong>Performances accrues :</strong> Mise en cache des ressources pour des temps de chargement plus rapides.</li>
        <li><strong>Notifications push :</strong> Interagir avec l'utilisateur via des notifications.</li>
        <li><strong>Fondation des PWA :</strong> Indispensables pour transformer un site web en une application progressive.</li>
    </ul>

    <h4>Les étapes pour utiliser un Service Worker</h4>
    <ol>
        <li>Enregistrer le Service Worker dans votre application.</li>
        <li>Gérer l'installation et l'activation pour mettre en cache les ressources.</li>
        <li>Intercepter les requêtes réseau pour fournir des réponses en cache ou dynamiques.</li>
    </ol>

    <h4>Exemple pratique de Service Worker</h4>

    <h5>Fichier du Service Worker (<code>sw.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// sw.js - Service Worker</span>

<span class="comment">// Nom du cache</span>
<span class="keyword">const</span> CACHE_NAME = <span class="string">"v1"</span>;

<span class="comment">// Ressources à mettre en cache</span>
<span class="keyword">const</span> ressources = [
    <span class="string">"/index.html"</span>,
    <span class="string">"/style.css"</span>,
    <span class="string">"/app.js"</span>,
    <span class="string">"/images/logo.png"</span>
];

<span class="comment">// Installation du Service Worker</span>
self.addEventListener(<span class="string">"install"</span>, (event) => {
    console.log(<span class="string">"Service Worker : Installé"</span>);
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            console.log(<span class="string">"Mise en cache des ressources"</span>);
            <span class="keyword">return</span> cache.addAll(ressources);
        })
    );
});

<span class="comment">// Activation du Service Worker</span>
self.addEventListener(<span class="string">"activate"</span>, (event) => {
    console.log(<span class="string">"Service Worker : Activé"</span>);
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            <span class="keyword">return</span> Promise.all(
                cacheNames.map((cache) => {
                    <span class="keyword">if</span> (cache !== CACHE_NAME) {
                        console.log(<span class="string">`Suppression de l'ancien cache : ${cache}`</span>);
                        <span class="keyword">return</span> caches.delete(cache);
                    }
                })
            );
        })
    );
});

<span class="comment">// Interception des requêtes réseau</span>
self.addEventListener(<span class="string">"fetch"</span>, (event) => {
    console.log(<span class="string">`Requête interceptée : ${event.request.url}`</span>);
    event.respondWith(
        caches.match(event.request).then((response) => {
            <span class="comment">// Retourne la réponse en cache si disponible, sinon fait une requête réseau</span>
            <span class="keyword">return</span> response || fetch(event.request);
        })
    );
});
</code></pre>
    </div>

    <h5>Enregistrement du Service Worker (<code>app.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// app.js - Enregistrer le Service Worker</span>

<span class="keyword">if</span> (<span class="keyword">"serviceWorker"</span> <span class="keyword">in</span> navigator) {
    navigator.serviceWorker
        .register(<span class="string">"/sw.js"</span>)
        .then((registration) => {
            console.log(<span class="string">"Service Worker enregistré :", registration.scope</span>);
        })
        .catch((error) => {
            console.error(<span class="string">"Échec de l'enregistrement du Service Worker :", error</span>);
        });
}
</code></pre>
    </div>

    <h4>Progressive Web Apps (PWA)</h4>
    <p>Les PWA combinent des technologies web modernes pour offrir une expérience utilisateur proche des applications natives :</p>
    <ul>
        <li><strong>Installable :</strong> Ajout de l'application sur l'écran d'accueil du téléphone.</li>
        <li><strong>Fonctionnalité hors ligne :</strong> Accessible même sans connexion Internet grâce au Service Worker.</li>
        <li><strong>Performances optimisées :</strong> Chargement rapide des ressources mises en cache.</li>
    </ul>

    <h5>Fichier Manifest (<code>manifest.json</code>)</h5>
    <p>Un fichier <code>manifest.json</code> est requis pour transformer un site web en PWA :</p>
    <div class="example-box">
        <pre><code class="language-json">{
    "name": "Ma PWA",
    "short_name": "PWA",
    "start_url": "/index.html",
    "display": "standalone",
    "background_color": "#ffffff",
    "theme_color": "#000000",
    "icons": [
        {
            "src": "/images/icon-192.png",
            "sizes": "192x192",
            "type": "image/png"
        },
        {
            "src": "/images/icon-512.png",
            "sizes": "512x512",
            "type": "image/png"
        }
    ]
}</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Applications hors ligne :</strong> Sites web accessibles sans Internet.</li>
        <li><strong>Optimisation des performances :</strong> Mise en cache des ressources pour des temps de chargement plus rapides.</li>
        <li><strong>Notifications push :</strong> Garder les utilisateurs engagés avec des mises à jour en temps réel.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez des stratégies de mise en cache adaptées (cache first, network first, etc.).</li>
        <li>Testez votre PWA avec des outils comme <a href="https://web.dev/measure/" target="_blank">Lighthouse</a>.</li>
        <li>Minimisez les ressources mises en cache pour optimiser les performances.</li>
        <li>Assurez-vous que le fichier <code>manifest.json</code> est correct et lié à votre HTML.</li>
    </ul>
</div>
<div class="col-md-12" id="es6">
    <h3>Syntaxe Moderne ES6+</h3>
    <p>
        ES6 (ECMAScript 2015) et les versions ultérieures ont introduit des fonctionnalités modernes et puissantes en JavaScript. 
        Ces ajouts facilitent l'écriture d'un code plus propre, lisible et maintenable, tout en améliorant les performances des applications.
    </p>

    <h4>Pourquoi adopter la syntaxe ES6+ ?</h4>
    <ul>
        <li><strong>Lisibilité :</strong> Syntaxe plus concise et claire.</li>
        <li><strong>Productivité :</strong> Réduit la quantité de code nécessaire pour accomplir des tâches complexes.</li>
        <li><strong>Compatibilité :</strong> La plupart des navigateurs modernes et des outils comme Babel permettent une adoption large.</li>
    </ul>

    <h4>Principales fonctionnalités ES6+</h4>

    <h5>1. Déclaration de variables avec <code>let</code> et <code>const</code></h5>
    <p>
        Avant ES6, toutes les variables étaient déclarées avec <code>var</code>. Désormais, <code>let</code> et <code>const</code> offrent des portées plus précises.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Différences entre var, let, et const</span>

// var : portée globale ou fonctionnelle
<span class="keyword">var</span> x = <span class="number">10</span>;

// let : portée de bloc
<span class="keyword">let</span> y = <span class="number">20</span>;

// const : valeur constante, portée de bloc
<span class="keyword">const</span> z = <span class="number">30</span>;

// Exemple de portée
<span class="keyword">if</span> (<span class="boolean">true</span>) {
    <span class="keyword">let</span> y = <span class="number">50</span>;
    console.log(y); <span class="comment">// 50</span>
}
console.log(y); <span class="comment">// 20</span>
</code></pre>
    </div>

    <h5>2. Fonctions fléchées (<code>=></code>)</h5>
    <p>
        Les fonctions fléchées introduisent une syntaxe concise pour écrire des fonctions. Elles ne modifient pas la valeur de <code>this</code>, ce qui est utile dans certains contextes.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fonction classique</span>
<span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="comment">// Fonction fléchée</span>
<span class="keyword">const</span> additionFl = (a, b) => a + b;

console.log(additionFl(<span class="number">5</span>, <span class="number">3</span>)); <span class="comment">// 8</span>
</code></pre>
    </div>

    <h5>3. Littéraux de gabarits (<code>`</code>)</h5>
    <p>
        Les littéraux de gabarits permettent d'insérer facilement des variables ou des expressions dans des chaînes de caractères.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec littéraux de gabarits</span>
<span class="keyword">const</span> nom = <span class="string">"Alice"</span>;
<span class="keyword">const</span> age = <span class="number">30</span>;

<span class="keyword">const</span> message = <span class="string">`Bonjour, je m'appelle ${nom} et j'ai ${age} ans.`</span>;
console.log(message);
</code></pre>
    </div>

    <h5>4. Destructuration des objets et tableaux</h5>
    <p>
        La destructuration permet d'extraire des valeurs ou des propriétés d'objets et de tableaux.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Destructuration des objets</span>
<span class="keyword">const</span> utilisateur = { nom: <span class="string">"Alice"</span>, age: <span class="number">30</span> };
<span class="keyword">const</span> { nom, age } = utilisateur;

console.log(nom); <span class="comment">// Alice</span>
console.log(age); <span class="comment">// 30</span>

<span class="comment">// Destructuration des tableaux</span>
<span class="keyword">const</span> nombres = [<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>];
<span class="keyword">const</span> [a, b] = nombres;

console.log(a); <span class="comment">// 1</span>
console.log(b); <span class="comment">// 2</span>
</code></pre>
    </div>

    <h5>5. Opérateurs Spread et Rest (<code>...</code>)</h5>
    <p>
        Ces opérateurs permettent de copier, fusionner ou passer des arguments de manière flexible.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Spread</span>
<span class="keyword">const</span> nombres = [<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>];
<span class="keyword">const</span> nouveauxNombres = [...nombres, <span class="number">4</span>];

console.log(nouveauxNombres); <span class="comment">// [1, 2, 3, 4]</span>

<span class="comment">// Rest</span>
<span class="keyword">function</span> addition(...args) {
    <span class="keyword">return</span> args.reduce((somme, val) => somme + val);
}
console.log(addition(<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>)); <span class="comment">// 6</span>
</code></pre>
    </div>

    <h5>6. Modules JavaScript</h5>
    <p>
        L'importation et l'exportation de modules facilitent l'organisation et la réutilisation du code.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exportation dans calcul.js</span>
<span class="keyword">export</span> <span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="comment">// Importation dans main.js</span>
<span class="keyword">import</span> { addition } <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;
console.log(addition(<span class="number">5</span>, <span class="number">3</span>)); <span class="comment">// 8</span>
</code></pre>
    </div>

    <h5>7. Classes</h5>
    <p>
        Les classes introduisent une syntaxe simplifiée pour la Programmation Orientée Objet.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de classe</span>
<span class="keyword">class</span> Animal {
    <span class="keyword">constructor</span>(nom) {
        <span class="keyword">this</span>.nom = nom;
    }

    parler() {
        console.log(<span class="string">`${this.nom} fait un bruit.`</span>);
    }
}

<span class="keyword">const</span> chien = <span class="keyword">new</span> Animal(<span class="string">"Rex"</span>);
chien.parler(); <span class="comment">// Rex fait un bruit.</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li>Créer un code plus lisible et maintenable grâce à <code>let</code>, <code>const</code>, et les classes.</li>
        <li>Réduire les bugs avec des modules et une structure modulaire.</li>
        <li>Améliorer les performances avec des fonctions optimisées comme les littéraux de gabarits et les opérateurs spread/rest.</li>
    </ul>
</div>
<div class="col-md-12" id="testing">
    <h3>Tests Unitaires</h3>
    <p>
        Les <strong>tests unitaires</strong> consistent à vérifier individuellement chaque fonction ou composant d'un programme pour s'assurer qu'ils fonctionnent correctement.
        Ils permettent de détecter les bugs rapidement et d'assurer la fiabilité du code lors des modifications.
    </p>

    <h4>Pourquoi effectuer des tests unitaires ?</h4>
    <ul>
        <li><strong>Détection précoce des bugs :</strong> Identifiez les problèmes avant qu'ils n'affectent l'ensemble de l'application.</li>
        <li><strong>Réduction des coûts :</strong> Corrigez les erreurs avant qu'elles ne deviennent coûteuses à résoudre.</li>
        <li><strong>Facilite la maintenance :</strong> Assurez-vous que les modifications du code n'introduisent pas de régressions.</li>
        <li><strong>Améliore la confiance :</strong> Garantit que votre code fonctionne comme prévu.</li>
    </ul>

    <h4>Principes des tests unitaires</h4>
    <ul>
        <li>Un test doit être indépendant des autres tests.</li>
        <li>Les tests doivent être faciles à écrire, lire et maintenir.</li>
        <li>Chaque test doit se concentrer sur un cas spécifique (input/output attendu).</li>
    </ul>

    <h4>Outils populaires pour les tests unitaires</h4>
    <ul>
        <li><strong>Jest :</strong> Framework complet pour le test unitaire, fourni avec des fonctionnalités avancées.</li>
        <li><strong>Mocha :</strong> Framework flexible pour créer des tests personnalisés.</li>
        <li><strong>Chai :</strong> Librairie d'assertions souvent utilisée avec Mocha.</li>
        <li><strong>Vitest :</strong> Framework rapide et moderne pour les projets basés sur Vite.</li>
    </ul>

    <h4>Exemple de test unitaire avec Jest</h4>

    <h5>Fichier à tester (<code>calcul.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fonction à tester</span>
<span class="keyword">export</span> <span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="keyword">export</span> <span class="keyword">function</span> division(a, b) {
    <span class="keyword">if</span> (b === <span class="number">0</span>) {
        <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">"Division par zéro interdite"</span>);
    }
    <span class="keyword">return</span> a / b;
}
</code></pre>
    </div>

    <h5>Fichier de test (<code>calcul.test.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Importation des fonctions à tester</span>
<span class="keyword">import</span> { addition, division } <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;

<span class="comment">// Tests pour la fonction addition</span>
test(<span class="string">"Addition de deux nombres positifs"</span>, () => {
    <span class="keyword">expect</span>(addition(<span class="number">2</span>, <span class="number">3</span>)).toBe(<span class="number">5</span>);
});

test(<span class="string">"Addition avec zéro"</span>, () => {
    <span class="keyword">expect</span>(addition(<span class="number">0</span>, <span class="number">3</span>)).toBe(<span class="number">3</span>);
});

<span class="comment">// Tests pour la fonction division</span>
test(<span class="string">"Division de deux nombres positifs"</span>, () => {
    <span class="keyword">expect</span>(division(<span class="number">10</span>, <span class="number">2</span>)).toBe(<span class="number">5</span>);
});

test(<span class="string">"Division par zéro génère une erreur"</span>, () => {
    <span class="keyword">expect</span>(() => division(<span class="number">10</span>, <span class="number">0</span>)).toThrow(<span class="string">"Division par zéro interdite"</span>);
});
</code></pre>
    </div>

    <h4>Commandes pour exécuter les tests</h4>
    <ul>
        <li><code>npm install jest --save-dev</code> : Installe Jest dans votre projet.</li>
        <li><code>npx jest</code> : Lance tous les tests.</li>
        <li><code>npx jest --watch</code> : Exécute les tests automatiquement à chaque modification de fichier.</li>
    </ul>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Validation de logique métier :</strong> Tester les calculs, les conversions, ou toute logique clé.</li>
        <li><strong>Gestion des erreurs :</strong> S'assurer que les exceptions sont correctement levées et gérées.</li>
        <li><strong>Régressions :</strong> Vérifier que les nouvelles fonctionnalités n’introduisent pas de bugs dans le code existant.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Écrivez des tests simples et ciblés pour chaque cas d'utilisation.</li>
        <li>Assurez-vous que les noms des tests décrivent clairement leur objectif.</li>
        <li>Automatisez vos tests pour exécuter régulièrement votre suite.</li>
        <li>Évitez les dépendances externes dans vos tests unitaires.</li>
        <li>Incluez des tests pour les cas normaux, limites et erreurs.</li>
    </ul>
</div>


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
