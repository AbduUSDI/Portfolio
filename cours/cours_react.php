<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur React</title>
    <!-- Bootstrap pour les modals et la sidebar responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>

</head>
<body>
<?php include 'templates/nav.php'; ?>


<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">React Complet</h3>
    
    <button class="dropdown-btn">Introduction  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#intro-react">Présentation de React</a>
        <a href="#history">Histoire et Contexte</a>
        <a href="#installation">Installation et Configuration</a>
    </div>

    <button class="dropdown-btn">Concepts de Base  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#jsx">JSX</a>
        <a href="#rendering-elements">Rendu des Éléments</a>
        <a href="#composants">Composants (Fonctionnels et Classiques)</a>
        <a href="#props">Props</a>
        <a href="#state">State</a>
        <a href="#events">Gestion des Événements</a>
        <a href="#conditional-rendering">Rendu Conditionnel</a>
        <a href="#lists-and-keys">Listes et Clés</a>
    </div>

    <button class="dropdown-btn">Cycle de Vie des Composants  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#lifecycle-methods">Méthodes du Cycle de Vie (Classes)</a>
        <a href="#useeffect">Hook useEffect</a>
        <a href="#uselayout-effect">Hook useLayoutEffect</a>
        <a href="#cleanup-functions">Fonctions de Nettoyage</a>
    </div>

    <button class="dropdown-btn">Hooks de Base  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#use-state">useState</a>
        <a href="#use-effect">useEffect</a>
        <a href="#use-context">useContext</a>
    </div>

    <button class="dropdown-btn">Hooks Avancés  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#use-reducer">useReducer</a>
        <a href="#use-callback">useCallback</a>
        <a href="#use-memo">useMemo</a>
        <a href="#use-ref">useRef</a>
        <a href="#use-imperative-handle">useImperativeHandle</a>
        <a href="#use-debug-value">useDebugValue</a>
        <a href="#custom-hooks">Création de Hooks Personnalisés</a>
    </div>

    <button class="dropdown-btn">Gestion d'État  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#lifting-state-up">Lifting State Up</a>
        <a href="#prop-drilling">Prop Drilling</a>
        <a href="#context-api">Context API</a>
        <a href="#redux">Redux</a>
        <a href="#mobx">MobX</a>
        <a href="#zustand">Zustand</a>
        <a href="#jotai">Jotai</a>
    </div>

    <button class="dropdown-btn">Routage  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#react-router">React Router</a>
        <a href="#dynamic-routing">Routage Dynamique</a>
        <a href="#nested-routes">Routes Imbriquées</a>
        <a href="#protected-routes">Routes Protégées</a>
        <a href="#redirects">Redirections</a>
        <a href="#custom-navigation">Navigation Personnalisée</a>
    </div>

    <button class="dropdown-btn">Formulaires  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#controlled-components">Composants Contrôlés</a>
        <a href="#uncontrolled-components">Composants Non Contrôlés</a>
        <a href="#form-validation">Validation des Formulaires</a>
        <a href="#form-libraries">Bibliothèques de Formulaires (Formik, React Hook Form)</a>
    </div>

    <button class="dropdown-btn">API et Réseau  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#fetching-data">Récupération de Données (Fetch API)</a>
        <a href="#axios">Utilisation d'Axios</a>
        <a href="#graphql">Intégration avec GraphQL</a>
        <a href="#error-handling">Gestion des Erreurs</a>
        <a href="#caching">Mise en Cache (React Query, SWR)</a>
    </div>

    <button class="dropdown-btn">Animations et Style  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#css-in-js">CSS-in-JS (styled-components, Emotion)</a>
        <a href="#css-modules">CSS Modules</a>
        <a href="#animations">Animations (React Spring, Framer Motion)</a>
        <a href="#transitions">Transitions CSS</a>
        <a href="#responsive-design">Design Responsive</a>
    </div>

    <button class="dropdown-btn">Optimisation des Performances  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#react-memo">React.memo</a>
        <a href="#lazy-loading">Lazy Loading</a>
        <a href="#suspense">Suspense</a>
        <a href="#concurrent-mode">Mode Concurrent</a>
        <a href="#memoization">Mémorisation (useMemo, useCallback)</a>
        <a href="#profiling">Profiling et Analyse</a>
    </div>

    <button class="dropdown-btn">Tests  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#jest">Tests Unitaires avec Jest</a>
        <a href="#react-testing-library">React Testing Library</a>
        <a href="#enzyme">Enzyme</a>
        <a href="#e2e-testing">Tests End-to-End (Cypress, Playwright)</a>
        <a href="#mocking">Mocking des API</a>
        <a href="#code-coverage">Couverture de Code</a>
    </div>

    <button class="dropdown-btn">Accessibilité  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#aria">Utilisation des Attributs ARIA</a>
        <a href="#focus-management">Gestion du Focus</a>
        <a href="#screen-reader-compatibility">Compatibilité avec les Lecteurs d'Écran</a>
        <a href="#color-contrast">Contraste des Couleurs</a>
    </div>

    <button class="dropdown-btn">Déploiement  <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#build-process">Processus de Build (Webpack, Babel)</a>
        <a href="#hosting-options">Options d'Hébergement (Vercel, Netlify, AWS)</a>
        <a href="#ci-cd">CI/CD (Intégration Continue, Déploiement Continu)</a>
        <a href="#performance-monitoring">Suivi de Performance en Production</a>
    </div>
</div>

<div class="content">

    <div class="container animate__animated animate__fadeInUp">
        <!-- Section Présentation de React -->
<section id="intro-react" class="container intro-section">
    <h2><i class="icon fas fa-rocket"></i> Présentation de React</h2>
    <p class="intro-text">
        React est une bibliothèque JavaScript développée par Facebook, introduite en 2013. Elle est conçue pour créer des interfaces utilisateur dynamiques et performantes, en permettant aux développeurs de structurer leur code autour de composants réutilisables. 
    </p>
    
    <div class="highlight">
        <p><strong>React</strong> se concentre principalement sur la <em>vue</em> dans le modèle MVC (Modèle-Vue-Contrôleur) et gère efficacement la mise à jour du DOM en utilisant un mécanisme connu sous le nom de <em>Virtual DOM</em>.</p>
    </div>

    <h3>Caractéristiques Principales de React</h3>
    <div class="importance-section">
        <ul class="importance-list">
            <li><strong>Composants Réutilisables :</strong> Permet de créer des blocs d'interface indépendants.</li>
            <li><strong>Virtual DOM :</strong> Optimise les performances en réduisant les manipulations directes du DOM.</li>
            <li><strong>Unidirectional Data Flow :</strong> Un flux de données prévisible et structuré.</li>
        </ul>
    </div>
</section>

<!-- Section Histoire et Contexte de React -->
<section id="history" class="container intro-section">
    <h2><i class="icon fas fa-history"></i> Histoire et Contexte de React</h2>
    <p class="intro-text">
        <i class="icon fas fa-calendar-alt"></i> <strong>React</strong> a été développé par Facebook en 2011 pour répondre à des défis internes, notamment l'amélioration des performances et de la maintenabilité des interfaces utilisateur. Il a été officiellement rendu open-source en 2013, permettant aux développeurs du monde entier d'y contribuer et de l'adopter.
    </p>
    
    <div class="highlight">
        <p><i class="icon fas fa-globe"></i> Depuis sa publication, <strong>React</strong> est rapidement devenu l'une des bibliothèques JavaScript les plus populaires pour le développement d'interfaces utilisateur, adopté par des entreprises de toutes tailles, y compris <strong>Airbnb</strong>, <strong>Instagram</strong>, et <strong>Netflix</strong>.</p>
    </div>

    <h3><i class="icon fas fa-lightbulb"></i> Pourquoi Facebook a-t-il créé React ?</h3>
    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-tachometer-alt"></i> <strong>Performance Améliorée :</strong> Avec le <em>Virtual DOM</em>, React permet de réduire les temps de rendu et de rendre les mises à jour de l'interface plus fluides.</li>
            <li><i class="icon fas fa-cogs"></i> <strong>Maintenance Facile :</strong> La modularité de React aide les développeurs à créer des applications évolutives et maintenables.</li>
            <li><i class="icon fas fa-users"></i> <strong>Expérience Utilisateur Optimisée :</strong> En priorisant le rendu de composants individuels, React améliore l'expérience utilisateur sur les applications complexes.</li>
        </ul>
    </div>
</section>
<!-- Section Installation et Configuration de React -->
<section id="installation" class="container intro-section">
    <h2><i class="icon fas fa-cogs"></i> Installation et Configuration de React</h2>

    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> Avant de commencer avec React, vous devez installer <strong>Node.js</strong> et <strong>npm</strong> (Node Package Manager). 
        Node.js est un environnement d'exécution JavaScript qui permet d'exécuter du code JavaScript côté serveur. NPM est un gestionnaire de packages qui permet d'installer les outils nécessaires, comme React.
    </p>
    
    <h3><i class="icon fas fa-file-download"></i> Étape 1 : Télécharger et installer Node.js</h3>
    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-link"></i> Rendez-vous sur le site officiel de Node.js à <a href="https://nodejs.org" target="_blank">nodejs.org</a>.</li>
            <li><i class="icon fas fa-download"></i> Téléchargez la version recommandée de Node.js pour votre système d'exploitation.</li>
            <li><i class="icon fas fa-laptop"></i> Installez Node.js en suivant les instructions de l'installateur.</li>
        </ul>
    </div>
    
    <h3><i class="icon fas fa-check"></i> Étape 2 : Vérifier l'installation de Node.js et npm</h3>
    <p class="highlight">
        Ouvrez un terminal (ou une invite de commande) et exécutez les commandes suivantes pour vérifier que Node.js et npm sont installés :
    </p>
    <div class="example-box">
        <pre>
            <code>
                node -v
                npm -v
            </code>
        </pre>
    </div>
    <p>
        Les commandes ci-dessus devraient afficher les versions de Node.js et npm installées. Si vous voyez des numéros de version (ex. <code>v16.13.0</code>), vous êtes prêt à continuer.
    </p>

    <h3><i class="icon fas fa-magic"></i> Étape 3 : Créer un nouveau projet React</h3>
    <p class="intro-text">
        Pour initialiser un projet React, nous allons utiliser un outil fourni par Facebook appelé <code>Create React App</code>. Cet outil génère une structure de projet prête à l'emploi avec tout le nécessaire pour démarrer.
    </p>
    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Astuce :</strong> Utilisez <code>Create React App</code> pour éviter la configuration manuelle de Webpack et Babel.</p>
    </div>
    
    <h4><i class="icon fas fa-terminal"></i> Commandes pour créer le projet</h4>
    <div class="example-box">
        <pre>
            <code>
                npx create-react-app mon-projet
                cd mon-projet
            </code>
        </pre>
    </div>
    <p>
        <i class="icon fas fa-info-circle"></i> La commande <code>npx</code> exécute le package <code>create-react-app</code> sans besoin de l'installer globalement. Remplacez <code>mon-projet</code> par le nom de votre choix pour le dossier de votre application.
    </p>

    <h3><i class="icon fas fa-play-circle"></i> Étape 4 : Démarrer le serveur de développement</h3>
    <p class="intro-text">
        Maintenant que le projet est configuré, démarrez le serveur de développement pour visualiser votre application React.
    </p>
    <div class="example-box">
        <pre>
            <code>
                npm start
            </code>
        </pre>
    </div>
    <p>
        Cette commande va :
        <ul class="importance-list">
            <li><i class="icon fas fa-sync-alt"></i> Lancer un serveur local de développement.</li>
            <li><i class="icon fas fa-arrow-right"></i> Ouvrir votre application dans le navigateur à l'adresse <strong>http://localhost:3000</strong>.</li>
            <li><i class="icon fas fa-eye"></i> Actualiser automatiquement l'affichage lorsque vous modifiez le code.</li>
        </ul>
    </p>

    <h3><i class="icon fas fa-desktop"></i> Étape 5 : Visualiser l'application React</h3>
    <p>
        Une fois le serveur de développement démarré, une page devrait s'ouvrir automatiquement dans votre navigateur avec l'application de base React. Vous devriez voir un écran d'accueil par défaut avec le logo de React et du texte indiquant que votre application est opérationnelle.
    </p>

    <h3><i class="icon fas fa-edit"></i> Étape 6 : Modifier le code</h3>
    <p>
        Pour explorer davantage, ouvrez le fichier <code>src/App.js</code> dans votre éditeur de code préféré. Modifiez le texte ou ajoutez un élément, puis enregistrez. Le navigateur se rafraîchira automatiquement pour afficher vos modifications.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-thumbs-up"></i> Félicitations ! Vous avez installé et configuré votre première application React.</p>
    </div>
</section>

<!-- Section JSX dans React -->
<section id="jsx" class="container intro-section">
    <h2><i class="icon fas fa-code"></i> Comprendre JSX</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> JSX (JavaScript XML) est une extension de syntaxe pour JavaScript qui permet d’écrire du HTML directement dans le code JavaScript. Il rend le code React plus lisible et expressif en facilitant la création d'éléments d'interface utilisateur.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> Bien que JSX ressemble à du HTML, il est en réalité transformé en appels JavaScript par des outils comme Babel avant d'être exécuté dans le navigateur.</p>
    </div>
    
    <h3><i class="icon fas fa-tags"></i> Syntaxe de Base de JSX</h3>
    <p>
        JSX permet d’écrire des balises similaires à HTML dans le code JavaScript. Voici un exemple simple de JSX qui affiche un titre :
    </p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Exemple de composant en JSX</span>
                <span class="keyword">const</span> element = <span class="string">{"<h1>Bonjour, monde !</h1>"}</span>;
                <span class="keyword">ReactDOM.render</span>(element, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-exclamation-triangle"></i> Règles Importantes de JSX</h3>
    <p>Pour bien utiliser JSX, il faut respecter certaines règles :</p>
    <ul class="importance-list">
        <li><i class="icon fas fa-times-circle"></i> <strong>Un seul élément parent :</strong> Toute expression JSX doit être contenue dans un élément parent unique. Par exemple, pour afficher plusieurs éléments, ils doivent être englobés dans une <code>{"<div>"}</code> ou une balise vide <code>{"<></>"}</code>.</li>
        <li><i class="icon fas fa-check-circle"></i> <strong>Syntaxe fermée :</strong> Toutes les balises doivent être fermées, y compris celles qui sont vides. Par exemple, <code>{"<img />"}</code> au lieu de <code>{"<img>"}</code>.</li>
        <li><i class="icon fas fa-font"></i> <strong>Interpolation :</strong> Vous pouvez insérer des expressions JavaScript dans du JSX en les plaçant entre accolades <code>{"{}"}</code>.</li>
    </ul>

    <h3><i class="icon fas fa-cogs"></i> Exemple d’Utilisation d’Expressions JavaScript dans JSX</h3>
    <p>
        Dans JSX, vous pouvez insérer des variables, des fonctions, et d'autres expressions JavaScript en les plaçant entre accolades <code>{"{}"}</code>.
    </p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Exemple de JSX avec une variable et une expression</span>
                <span class="keyword">const</span> user = <span class="string">'Marie'</span>;
                <span class="keyword">const</span> element = <span class="string">{"<h1>Bonjour, {"{"}user{"}"}!</h1>"}</span>;
                <span class="keyword">ReactDOM.render</span>(element, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-cog"></i> Avantages de JSX</h3>
    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-eye"></i> <strong>Lisibilité :</strong> JSX rend le code plus facile à comprendre pour les développeurs en ressemblant à du HTML.</li>
            <li><i class="icon fas fa-wrench"></i> <strong>Intégration de JavaScript :</strong> Les accolades permettent d'insérer facilement des expressions JavaScript dans le code.</li>
            <li><i class="icon fas fa-rocket"></i> <strong>Optimisation :</strong> JSX est compilé en JavaScript pur par des outils comme Babel, ce qui permet de bénéficier des performances de JavaScript tout en utilisant une syntaxe proche du HTML.</li>
        </ul>
    </div>
</section>
<!-- Section Rendu des Éléments dans React -->
<section id="rendering-elements" class="container intro-section">
    <h2><i class="icon fas fa-desktop"></i> Rendu des Éléments</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> Le rendu des éléments est au cœur de React. Un élément en React est une description de ce que vous voulez voir à l'écran. Les éléments sont immuables : une fois créés, ils ne changent pas, ce qui garantit un comportement plus prévisible et performant de l'application.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> En React, on utilise <code>ReactDOM.render()</code> pour afficher un élément sur la page. Cette méthode prend deux arguments : l'élément à afficher et le conteneur DOM dans lequel l'afficher.</p>
    </div>
    
    <h3><i class="icon fas fa-code"></i> Exemple de Rendu d’un Élément Simple</h3>
    <p>Voici un exemple simple d’un élément JSX qui affiche "Bonjour, monde !" dans le DOM :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Sélectionnez le conteneur DOM dans lequel afficher l'élément</span>
                <span class="keyword">const</span> element = <span class="string">{"<h1>Bonjour, monde !</h1>"}</span>;
                <span class="comment">// Affiche l'élément dans le conteneur avec l'ID 'root'</span>
                <span class="keyword">ReactDOM.render</span>(element, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-redo-alt"></i> Mise à Jour et Immuabilité des Éléments</h3>
    <p>
        En React, les éléments sont <strong>immuables</strong>. Une fois qu'un élément est créé, il ne peut pas être modifié. Pour mettre à jour ce qui est affiché, il faut créer un nouvel élément et l'envoyer à <code>ReactDOM.render()</code>.
    </p>
    <p>Par exemple, pour afficher l'heure actuelle et la mettre à jour toutes les secondes :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="keyword">function</span> tick() {'{'}
                    <span class="keyword">const</span> element = (
                        <span class="string">{"<h2>Il est {"{"}new Date().toLocaleTimeString(){"}"}.</h2>"}</span>
                    );
                    <span class="keyword">ReactDOM.render</span>(element, document.getElementById(<span class="string">'root'</span>));
                {'}'}

                <span class="comment">// Met à jour l'affichage toutes les secondes</span>
                <span class="keyword">setInterval</span>(tick, 1000);
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-cogs"></i> Fonctionnement du Rendu</h3>
    <p>
        Lorsqu'un élément est rendu, React met à jour le DOM de manière minimale en modifiant uniquement ce qui a changé. Grâce au <em>Virtual DOM</em>, React optimise la mise à jour pour des performances maximales.
    </p>

    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-arrow-right"></i> <strong>Virtual DOM :</strong> Une copie en mémoire du DOM, permettant de minimiser les manipulations réelles du DOM en ne modifiant que les parties qui ont changé.</li>
            <li><i class="icon fas fa-rocket"></i> <strong>Performance :</strong> Le rendu différentiel de React permet de rendre des applications rapides et réactives.</li>
        </ul>
    </div>
    
    <h3><i class="icon fas fa-clipboard-check"></i> Points Importants</h3>
    <ul class="importance-list">
        <li><i class="icon fas fa-check-circle"></i> <strong>Immuabilité :</strong> Un élément React ne change jamais une fois créé. Il faut créer un nouvel élément pour mettre à jour l'affichage.</li>
        <li><i class="icon fas fa-sync-alt"></i> <strong>ReactDOM.render() :</strong> Cette méthode est utilisée pour afficher des éléments dans le DOM.</li>
        <li><i class="icon fas fa-clock"></i> <strong>Mises à jour efficaces :</strong> React utilise le Virtual DOM pour effectuer des mises à jour minimales, optimisant ainsi les performances.</li>
    </ul>
</section>

<!-- Section Composants en React (Fonctionnels et Classiques) -->
<section id="composants" class="container intro-section">
    <h2><i class="icon fas fa-cubes"></i> Composants en React (Fonctionnels et Classiques)</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> Les composants sont les blocs de construction de base en React. Ils permettent de diviser l'interface en morceaux réutilisables et indépendants. Un composant peut être soit <strong>fonctionnel</strong> (basé sur une fonction) soit <strong>classique</strong> (basé sur une classe).
    </p>

    <h3><i class="icon fas fa-cog"></i> Composants Fonctionnels</h3>
    <p>
        Les composants fonctionnels sont des fonctions JavaScript qui acceptent des <strong>props</strong> (paramètres) et retournent des éléments React. Ils sont simples à écrire et sont particulièrement adaptés pour des composants qui ne gèrent pas d'état interne.
    </p>
    
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Exemple de composant fonctionnel simple</span>
                <span class="keyword">function</span> <span class="class-name">Bienvenue</span>(props) {'{'}
                    <span class="keyword">return</span> <span class="string">{"<h1>Bonjour, {"{"}props.nom{"}"}</h1>"}</span>;
                {'}'}
                
                <span class="comment">// Utilisation du composant fonctionnel</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Bienvenue nom='Marie' />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <p>
        <i class="icon fas fa-info-circle"></i> Les composants fonctionnels sont aujourd'hui les plus utilisés, notamment avec l'introduction des <strong>Hooks</strong> qui leur permettent de gérer l'état et d'autres fonctionnalités avancées.
    </p>

    <h3><i class="icon fas fa-cogs"></i> Composants Classiques</h3>
    <p>
        Avant l'arrivée des composants fonctionnels avec Hooks, les composants étaient principalement créés avec des classes. Les composants classiques utilisent la syntaxe des classes JavaScript, nécessitant la méthode <code>render()</code> pour retourner les éléments.
    </p>
    
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Exemple de composant classique</span>
                <span class="keyword">class</span> <span class="class-name">Bienvenue</span> <span class="keyword">extends</span> React.Component {'{'}
                    <span class="keyword">render</span>() {'{'}
                        <span class="keyword">return</span> <span class="string">{"<h1>Bonjour, {"{"}this.props.nom{"}"}</h1>"}</span>;
                    {'}'}
                {'}'}

                <span class="comment">// Utilisation du composant classique</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Bienvenue nom='Jean' />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-balance-scale"></i> Différences entre composants fonctionnels et classiques</h3>
    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-check"></i> <strong>Composants Fonctionnels :</strong> Simples et concis, adaptés aux composants statiques ou sans état. Ils sont désormais utilisés pour des composants complexes grâce aux Hooks.</li>
            <li><i class="icon fas fa-check"></i> <strong>Composants Classiques :</strong> Requis pour gérer l’état avant l’introduction des Hooks, mais aujourd'hui souvent remplacés par des composants fonctionnels.</li>
            <li><i class="icon fas fa-history"></i> <strong>Hooks :</strong> Les Hooks permettent aux composants fonctionnels de gérer l'état et des effets, ce qui a largement remplacé l'utilisation des composants classiques.</li>
        </ul>
    </div>

    <h3><i class="icon fas fa-tasks"></i> Quand utiliser quel type de composant ?</h3>
    <p>
        Bien que les composants fonctionnels soient désormais la norme, il est utile de comprendre les composants classiques pour le code existant. Utilisez des composants fonctionnels avec des Hooks pour bénéficier de la simplicité et des fonctionnalités modernes de React.
    </p>
</section>
<!-- Section props dans React -->
<section id="props" class="container intro-section">
    <h2><i class="icon fas fa-box-open"></i> Les props en React</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> Les <strong>props</strong> (abréviation de "properties") sont des paramètres que l'on passe aux composants React pour leur fournir des données. Les props permettent aux composants de recevoir des valeurs dynamiques de la part de leurs parents, ce qui les rend plus réutilisables et modulaires.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> Les props sont immuables, ce qui signifie qu'elles ne peuvent pas être modifiées par le composant qui les reçoit. Cela garantit un flux de données unidirectionnel en React.</p>
    </div>

    <h3><i class="icon fas fa-code"></i> Exemple de composant utilisant des props</h3>
    <p>Dans cet exemple, le composant <code>Bienvenue</code> reçoit une prop <code>nom</code> qu'il utilise pour afficher un message personnalisé :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel utilisant des props</span>
                <span class="keyword">function</span> <span class="class-name">Bienvenue</span>(props) {'{'}
                    <span class="keyword">return</span> <span class="string">{"<h1>Bonjour, {"{"}props.nom{"}"}</h1>"}</span>;
                {'}'}

                <span class="comment">// Utilisation du composant avec une prop</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Bienvenue nom='Alice' />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-puzzle-piece"></i> Passer plusieurs props</h3>
    <p>Les composants peuvent également recevoir plusieurs props en les passant sous forme d'attributs dans le composant parent. Par exemple :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel utilisant plusieurs props</span>
                <span class="keyword">function</span> <span class="class-name">Utilisateur</span>(props) {'{'}
                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            <span class="string">{"<h1>Nom : {"{"}props.nom{"}"} </h1>"}</span>
                            <span class="string">{"<p>Âge : {"{"}props.age{"}"} ans</p>"}</span>
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}

                <span class="comment">// Utilisation du composant avec plusieurs props</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Utilisateur nom='Bob' age={25} />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-balance-scale"></i> props vs state</h3>
    <p>
        Bien que les props et le state servent tous deux à gérer des données dans un composant React, il existe des différences essentielles entre eux :
    </p>
    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-arrow-right"></i> <strong>props :</strong> Fournies par le composant parent, elles sont <strong>immutables</strong> et permettent la communication entre composants.</li>
            <li><i class="icon fas fa-sync-alt"></i> <strong>state :</strong> Géré localement par le composant, il est mutable et permet de gérer des données propres au composant.</li>
        </ul>
    </div>

    <h3><i class="icon fas fa-check-circle"></i> Points clés à retenir sur les props</h3>
    <ul class="importance-list">
        <li><i class="icon fas fa-lock"></i> Les props sont immuables et ne peuvent pas être modifiées par le composant enfant.</li>
        <li><i class="icon fas fa-arrow-right"></i> Les props permettent de transmettre des données du parent vers l'enfant.</li>
        <li><i class="icon fas fa-puzzle-piece"></i> Utilisez plusieurs props pour passer différentes valeurs aux composants.</li>
    </ul>
</section>
<!-- Section state dans React -->
<section id="state" class="container intro-section">
    <h2><i class="icon fas fa-database"></i> Le state en React</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> En React, le <strong>state</strong> est un objet géré localement par un composant. Contrairement aux props, le state est mutable, ce qui signifie que les données peuvent être modifiées en fonction de l'état de l'application ou de calculs internes.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> Le state est souvent utilisé pour gérer des données dynamiques, comme des valeurs calculées ou des états de chargement, qui influencent ce qui est affiché dans l'interface.</p>
    </div>

    <h3><i class="icon fas fa-cog"></i> Utilisation du state dans un composant fonctionnel</h3>
    <p>Dans les composants fonctionnels modernes, le state est géré avec le Hook <code>useState</code>. Voici comment initialiser et utiliser une variable de state :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Importer le Hook useState</span>
                <span class="keyword">import</span> <span class="string">React, { useState }</span> <span class="keyword">from</span> <span class="string">'react'</span>;

                <span class="comment">// Composant fonctionnel avec une variable de state "count"</span>
                <span class="keyword">function</span> <span class="class-name">Compteur</span>() {'{'}
                    <span class="comment">// Déclarer une variable de state "count" initialisée à 0</span>
                    <span class="keyword">const [count, setCount] = useState(0);</span>

                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            <span class="string">{"<h1>Compteur : {"{"}count{"}"}</h1>"}</span>
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}
                
                <span class="comment">// Affichage du composant Compteur</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Compteur />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-cogs"></i> Utilisation du state dans un composant classique</h3>
    <p>Dans les composants classiques, le state est initialisé dans le constructeur et mis à jour avec <code>this.setState</code>. Voici un exemple de déclaration du state dans un composant classique :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant classique avec une variable de state "count"</span>
                <span class="keyword">class</span> <span class="class-name">Compteur</span> <span class="keyword">extends</span> React.Component {'{'}
                    <span class="comment">// Initialisation du state dans le constructeur</span>
                    <span class="keyword">constructor</span>(props) {'{'}
                        <span class="keyword">super</span>(props);
                        <span class="keyword">this.state = {'{'}</span> count: 0 {'}'}; 
                    {'}'}

                    <span class="keyword">render</span>() {'{'}
                        <span class="keyword">return</span> (
                            <span class="string">{"<div>"}</span>
                                <span class="string">{"<h1>Compteur : {"{"}this.state.count{"}"}</h1>"}</span>
                            <span class="string">{"</div>"}</span>
                        );
                    {'}'}
                {'}'}

                <span class="comment">// Affichage du composant Compteur</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Compteur />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-sync-alt"></i> Mise à jour du state dans les composants</h3>
    <p>
        En React, pour modifier le state dans un composant fonctionnel, on utilise la fonction de mise à jour du Hook <code>useState</code>, et dans un composant classique, on utilise <code>this.setState</code>. Ces méthodes permettent de recalculer l'interface de manière efficace lorsque le state change.
    </p>

    <h3><i class="icon fas fa-balance-scale"></i> Différences entre state et props</h3>
    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-arrow-right"></i> <strong>state :</strong> Géré localement par le composant, mutable, et utilisé pour des données qui peuvent changer.</li>
            <li><i class="icon fas fa-arrow-right"></i> <strong>props :</strong> Fournies par le parent, immuables, et utilisées pour transmettre des données statiques ou dynamiques aux composants enfants.</li>
        </ul>
    </div>
</section>
<!-- Section gestion des événements dans React -->
<section id="events" class="container intro-section">
    <h2><i class="icon fas fa-mouse-pointer"></i> Gestion des événements en React</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> En React, la gestion des événements est similaire à celle en JavaScript standard, mais avec quelques différences notables. Les événements en React sont nommés en <strong>camelCase</strong> (par exemple, <code>onClick</code>), et au lieu d'attribuer une chaîne de caractères, on passe une fonction comme gestionnaire d'événement.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> Les événements en React sont des instances synthétiques, appelées <strong>SyntheticEvent</strong>, qui normalisent les événements à travers les différents navigateurs pour une meilleure compatibilité.</p>
    </div>

    <h3><i class="icon fas fa-code"></i> Définir un gestionnaire d'événement</h3>
    <p>
        Pour gérer un événement en React, vous définissez une fonction qui sera appelée lorsque l'événement se produit. Cette fonction peut être définie en dehors du JSX et passée comme référence. Voici comment définir un gestionnaire d'événement sans interaction directe :
    </p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel sans interaction directe</span>
                <span class="keyword">function</span> <span class="class-name">MonComposant</span>() {'{'}
                    <span class="comment">// Définir le gestionnaire d'événement</span>
                    <span class="keyword">function</span> handleEvent(event) {'{'}
                        <span class="comment">// Traitement de l'événement</span>
                        <span class="keyword">console.log</span>(<span class="string">'Événement déclenché : '</span>, event);
                    {'}'}

                    <span class="comment">// Rendu du composant sans interaction directe</span>
                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            <span class="string">{"<p>Gestion des événements en React</p>"}</span>
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}

                <span class="comment">// Utilisation du composant</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<MonComposant />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-sync-alt"></i> Comprendre le SyntheticEvent</h3>
    <p>
        Le <code>SyntheticEvent</code> est un objet d'événement synthétique fourni par React qui enveloppe l'événement natif du navigateur. Il fournit une interface cohérente à travers les différents navigateurs et améliore les performances en recyclant les objets d'événements.
    </p>

    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Exemple de gestion d'un événement synthétique</span>
                <span class="keyword">function</span> <span class="class-name">MonComposant</span>() {'{'}
                    <span class="keyword">function</span> handleEvent(event) {'{'}
                        <span class="comment">// Accès aux propriétés de l'événement</span>
                        <span class="keyword">console.log</span>(<span class="string">'Type d\'événement : '</span>, event.type);
                    {'}'}

                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            <span class="string">{"<p>Analyse des événements en React</p>"}</span>
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-exclamation-triangle"></i> Différences clés avec les événements DOM natifs</h3>
    <ul class="importance-list">
        <li><i class="icon fas fa-check"></i> <strong>Nom des événements :</strong> En React, les noms d'événements utilisent le camelCase (par exemple, <code>onMouseEnter</code>) au lieu de minuscules en JavaScript natif (par exemple, <code>mouseenter</code>).</li>
        <li><i class="icon fas fa-check"></i> <strong>Gestionnaires d'événements :</strong> Les gestionnaires sont passés en tant que fonctions, et non en tant que chaînes de caractères.</li>
        <li><i class="icon fas fa-check"></i> <strong>Événements synthétiques :</strong> React utilise le <code>SyntheticEvent</code> pour assurer la compatibilité entre les navigateurs.</li>
    </ul>

    <h3><i class="icon fas fa-code-branch"></i> Utilisation des événements sans interaction directe</h3>
    <p>
        Dans certains cas, vous pouvez avoir besoin de gérer des événements sans interaction directe avec l'utilisateur, par exemple, en réponse à des événements du cycle de vie ou des mises à jour du state.
    </p>

    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel utilisant useEffect pour gérer un événement</span>
                <span class="keyword">import</span> <span class="string">React, { useState, useEffect }</span> <span class="keyword">from</span> <span class="string">'react'</span>;

                <span class="keyword">function</span> <span class="class-name">Horloge</span>() {'{'}
                    <span class="comment">// Déclarer une variable de state "heure"</span>
                    <span class="keyword">const [heure, setHeure] = useState(<span class="keyword">new</span> Date());

                    <span class="comment">// Utiliser useEffect pour mettre à jour l'heure chaque seconde</span>
                    <span class="keyword">useEffect</span>(() => {'{'}
                        <span class="keyword">const</span> timerID = setInterval(() => {'{'}
                            setHeure(<span class="keyword">new</span> Date());
                        {'}'}, 1000);

                        <span class="comment">// Nettoyage lors du démontage du composant</span>
                        <span class="keyword">return</span> () => clearInterval(timerID);
                    {'}'}, []);

                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            <span class="string">{"<h2>Il est {"{"}heure.toLocaleTimeString(){"}"}.</h2>"}</span>
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}

                <span class="comment">// Affichage du composant Horloge</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Horloge />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-question-circle"></i> Pourquoi utiliser les événements en React sans interaction directe ?</h3>
    <p>
        Même sans interaction utilisateur explicite, les événements peuvent être utilisés pour :
    </p>
    <ul class="importance-list">
        <li><i class="icon fas fa-sync"></i> Répondre aux changements de state ou de props.</li>
        <li><i class="icon fas fa-cloud-download-alt"></i> Gérer les réponses des appels API asynchrones.</li>
        <li><i class="icon fas fa-cogs"></i> Effectuer des actions lors des phases du cycle de vie du composant.</li>
    </ul>
</section>
<!-- Section rendu conditionnel dans React -->
<section id="conditional-rendering" class="container intro-section">
    <h2><i class="icon fas fa-eye"></i> Rendu conditionnel en React</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> En React, le rendu conditionnel permet d'afficher ou de masquer des éléments en fonction de certaines conditions. Cela est utile pour afficher différentes interfaces selon des états ou des valeurs spécifiques, par exemple, pour afficher un message de chargement ou de connexion.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> Le rendu conditionnel peut être géré en utilisant des opérateurs JavaScript, comme l'opérateur ternaire ou <code>if</code>, directement dans le code JSX.</p>
    </div>

    <h3><i class="icon fas fa-code"></i> Utilisation d'un opérateur ternaire</h3>
    <p>Un opérateur ternaire est une méthode concise pour afficher du contenu en fonction d'une condition. Voici un exemple simple qui affiche un message différent selon qu'un utilisateur est connecté ou non :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel avec rendu conditionnel</span>
                <span class="keyword">function</span> <span class="class-name">Bienvenue</span>(props) {'{'}
                    <span class="comment">// Déclaration d'une variable simulant l'état de connexion</span>
                    <span class="keyword">const</span> estConnecte = props.estConnecte;

                    <span class="comment">// Rendu conditionnel avec opérateur ternaire</span>
                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            <span class="string">{"<h1>"}</span>
                            {"{"} estConnecte ? <span class="string">"Bienvenue, utilisateur!"</span> : <span class="string">"Veuillez vous connecter"</span> {"}"}
                            <span class="string">{"</h1>"}</span>
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}

                <span class="comment">// Affichage du composant avec estConnecte à true ou false</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Bienvenue estConnecte={true} />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-toggle-on"></i> Utilisation de l'instruction if pour le rendu conditionnel</h3>
    <p>En React, vous pouvez aussi utiliser l'instruction <code>if</code> pour gérer le rendu conditionnel, particulièrement pour des conditions plus complexes. Voici un exemple qui affiche un message de chargement si les données sont en cours de traitement :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel affichant un message selon l'état de chargement</span>
                <span class="keyword">function</span> <span class="class-name">Chargement</span>(props) {'{'}
                    <span class="comment">// Vérifier si l'état de chargement est actif</span>
                    <span class="keyword">const</span> estEnChargement = props.estEnChargement;

                    <span class="comment">// Rendu conditionnel avec if</span>
                    <span class="keyword">if</span> (estEnChargement) {'{'}
                        <span class="keyword">return</span> <span class="string">{"<p>Chargement en cours...</p>"}</span>;
                    {'}'}

                    <span class="keyword">return</span> <span class="string">{"<p>Données chargées avec succès.</p>"}</span>;
                {'}'}

                <span class="comment">// Affichage du composant avec estEnChargement à true ou false</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Chargement estEnChargement={true} />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-exclamation-circle"></i> Masquer des éléments avec &&</h3>
    <p>L'opérateur logique <code>&&</code> peut être utilisé pour conditionnellement rendre un élément si une condition est remplie. Par exemple :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel utilisant && pour afficher un message d'avertissement</span>
                <span class="keyword">function</span> <span class="class-name">Alerte</span>(props) {'{'}
                    <span class="comment">// Déclaration d'une variable simulant une condition d'avertissement</span>
                    <span class="keyword">const</span> afficherAlerte = props.afficherAlerte;

                    <span class="comment">// Rendu conditionnel avec &&</span>
                    <span class="keyword">return</span> (
                        <span class="string">{"<div>"}</span>
                            {"{"} afficherAlerte && <span class="string">{"<p>Alerte : Veuillez vérifier vos informations!</p>"}</span> {"}"}
                        <span class="string">{"</div>"}</span>
                    );
                {'}'}

                <span class="comment">// Affichage du composant avec afficherAlerte à true ou false</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<Alerte afficherAlerte={true} />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-question-circle"></i> Quand utiliser le rendu conditionnel ?</h3>
    <p>Le rendu conditionnel est utile dans plusieurs situations en React :</p>
    <ul class="importance-list">
        <li><i class="icon fas fa-check"></i> Affichage de messages en fonction de l'état de l'application (par exemple, connecté ou non).</li>
        <li><i class="icon fas fa-hourglass-half"></i> Affichage de messages de chargement lorsque les données sont en cours de traitement.</li>
        <li><i class="icon fas fa-exclamation-triangle"></i> Masquer ou afficher des alertes et des avertissements selon les conditions.</li>
    </ul>
</section>
<!-- Section listes et clés dans React -->
<section id="lists-and-keys" class="container intro-section">
    <h2><i class="icon fas fa-list"></i> Listes et clés en React</h2>
    
    <p class="intro-text">
        <i class="icon fas fa-info-circle"></i> En React, les listes permettent d'afficher des collections de données de manière dynamique. Lorsque vous créez une liste d'éléments en React, il est important d'attribuer une <strong>clé unique</strong> à chaque élément pour aider React à optimiser le rendu et la mise à jour des éléments.
    </p>

    <div class="highlight">
        <p><i class="icon fas fa-lightbulb"></i> <strong>Note :</strong> Les clés en React ne sont visibles que pour React, elles ne sont pas transmises aux composants enfants. Elles servent uniquement à identifier les éléments pour le Virtual DOM.</p>
    </div>

    <h3><i class="icon fas fa-code"></i> Afficher une liste en utilisant map()</h3>
    <p>Pour afficher une liste en React, on utilise la fonction <code>map()</code>, qui permet de parcourir un tableau et de retourner un élément pour chaque élément du tableau. Voici un exemple simple :</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel affichant une liste de noms</span>
                <span class="keyword">function</span> <span class="class-name">ListeNoms</span>() {'{'}
                    <span class="comment">// Tableau de noms</span>
                    <span class="keyword">const</span> noms = [<span class="string">'Alice'</span>, <span class="string">'Bob'</span>, <span class="string">'Charlie'</span>];

                    <span class="comment">// Utilisation de map() pour créer une liste d'éléments</span>
                    <span class="keyword">return</span> (
                        <span class="string">{"<ul>"}</span>
                            {"{"} noms.map(nom => <span class="string">{"<li>"}</span>{"{"}nom{"}"}<span class="string">{"</li>"}</span>) {"}"}
                        <span class="string">{"</ul>"}</span>
                    );
                {'}'}

                <span class="comment">// Affichage du composant ListeNoms</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<ListeNoms />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-key"></i> Utilisation des clés pour les éléments de liste</h3>
    <p>Pour que React puisse gérer efficacement les éléments d'une liste, chaque élément doit avoir une <strong>clé unique</strong>. Les clés aident React à identifier les éléments qui changent, sont ajoutés ou supprimés.</p>
    <div class="example-box">
        <pre>
            <code>
                <span class="comment">// Composant fonctionnel avec clés pour chaque élément de liste</span>
                <span class="keyword">function</span> <span class="class-name">ListeNomsAvecCles</span>() {'{'}
                    <span class="keyword">const</span> noms = [<span class="string">'Alice'</span>, <span class="string">'Bob'</span>, <span class="string">'Charlie'</span>];

                    <span class="keyword">return</span> (
                        <span class="string">{"<ul>"}</span>
                            {"{"} noms.map((nom, index) => (
                                <span class="string">{"<li key={"{"}index{"}"}>"}</span>{"{"}nom{"}"}<span class="string">{"</li>"}</span>
                            )) {"}"}
                        <span class="string">{"</ul>"}</span>
                    );
                {'}'}

                <span class="comment">// Affichage du composant ListeNomsAvecCles</span>
                <span class="keyword">ReactDOM.render</span>(<span class="string">{"<ListeNomsAvecCles />"}</span>, document.getElementById(<span class="string">'root'</span>));
            </code>
        </pre>
    </div>

    <h3><i class="icon fas fa-exclamation-triangle"></i> Pourquoi les clés sont-elles importantes ?</h3>
    <p>Les clés permettent à React d'identifier les éléments de liste et de suivre leur position dans le Virtual DOM. Elles sont essentielles pour améliorer les performances lors des mises à jour de la liste, car elles aident React à éviter de recréer les éléments qui n'ont pas changé.</p>

    <div class="importance-section">
        <ul class="importance-list">
            <li><i class="icon fas fa-check"></i> Utilisez des clés uniques et stables pour chaque élément, comme un identifiant unique si disponible.</li>
            <li><i class="icon fas fa-check"></i> Évitez d'utiliser l'index du tableau comme clé si les éléments peuvent changer d'ordre, car cela peut conduire à des rendus inattendus.</li>
        </ul>
    </div>

    <h3><i class="icon fas fa-question-circle"></i> Quand utiliser les listes et les clés ?</h3>
    <p>Les listes et les clés sont utiles dans plusieurs situations en React :</p>
    <ul class="importance-list">
        <li><i class="icon fas fa-check"></i> Lors de l'affichage d'une collection de données, comme des listes de noms, de produits, ou d'articles.</li>
        <li><i class="icon fas fa-redo-alt"></i> Pour mettre à jour dynamiquement des éléments d'une liste, comme un panier d'achat.</li>
        <li><i class="icon fas fa-sync"></i> Lors de la mise en place de composants qui changent fréquemment d'ordre ou de structure.</li>
    </ul>
</section>


    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
