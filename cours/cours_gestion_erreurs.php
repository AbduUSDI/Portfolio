<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur la Gestion des Erreurs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css">
</head>
<body>
<?php include 'templates/nav.php'; ?>

<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">Gestion des Erreurs</h3>
    <button class="dropdown-btn">Introduction</button>
    <div class="dropdown-container">
        <a href="#intro">Présentation</a>
        <a href="#importance">Importance de la Gestion des Erreurs</a>
    </div>

    <button class="dropdown-btn">Types d'Erreurs</button>
    <div class="dropdown-container">
        <a href="#types-erreurs">Types d'Erreurs</a>
        <a href="#erreurs-syntaxe">Erreurs de Syntaxe</a>
        <a href="#erreurs-execution">Erreurs d'Exécution</a>
        <a href="#exceptions">Exceptions</a>
    </div>

    <button class="dropdown-btn">Bonnes Pratiques</button>
    <div class="dropdown-container">
        <a href="#gestion-erreurs">Gestion des Erreurs</a>
        <a href="#journalisation">Journalisation des Erreurs</a>
        <a href="#messages-utilisateur">Messages d'Erreur pour l'Utilisateur</a>
    </div>

    <button class="dropdown-btn">Exemples de Code</button>
    <div class="dropdown-container">
        <a href="#exemples-php">Exemples en PHP</a>
        <a href="#exemples-python">Exemples en Python</a>
        <a href="#exemples-javascript">Exemple en JavaScript</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <div class="row">
    <h1>Cours Complet sur la Gestion des Erreurs</h1>
<p class="intro-text">La gestion des erreurs est essentielle dans le développement de logiciels pour s'assurer que les programmes fonctionnent correctement même en cas d'erreurs. Ce cours vous guidera à travers les différents types d'erreurs, leur importance, et comment les gérer efficacement.</p>

<!-- Introduction -->
<div class="content-section col-md-6">
<section id="intro" class="intro-section">
    <h2><i class="fas fa-info-circle icon"></i> Présentation</h2>
    <p class="highlight">La gestion des erreurs consiste à anticiper, détecter et traiter les erreurs qui peuvent survenir lors de l'exécution d'un programme. Une bonne gestion permet d'améliorer l'expérience utilisateur et d'éviter les plantages imprévus.</p>
    <p><strong>Mnémonique :</strong> <em>A.D.A.P.T.</em> pour se souvenir des étapes clés de la gestion des erreurs : 
        <strong>A</strong>nticiper, <strong>D</strong>étecter, <strong>A</strong>nalysé, <strong>P</strong>rendre des mesures, <strong>T</strong>raiter.</p>
</section>
</div>

<!-- Importance de la Gestion des Erreurs -->
<div class="content-section col-md-6">
<section id="importance" class="importance-section">
    <h2><i class="fas fa-exclamation-circle icon"></i> Importance de la Gestion des Erreurs</h2>
    <p class="highlight">Une gestion efficace des erreurs contribue à :</p>
    <ul class="importance-list">
        <li><i class="fas fa-check-circle"></i> <strong>Améliorer la robustesse du logiciel.</strong></li>
        <li><i class="fas fa-check-circle"></i> <strong>Faciliter le débogage et la maintenance.</strong></li>
        <li><i class="fas fa-check-circle"></i> <strong>Offrir une meilleure expérience utilisateur.</strong></li>
    </ul>
    <p><strong>Mnémonique :</strong> <em>B.E.R.R.E.</em> pour se souvenir des bénéfices de la gestion des erreurs : 
        <strong>B</strong>on fonctionnement, <strong>E</strong>fficacité, <strong>R</strong>obustesse, <strong>R</strong>éduction des bugs, <strong>E</strong>xpérience utilisateur.</p>
</section>
</div>
<!-- Types d'Erreurs -->
<div class="content-section col-md-6">
<section id="types-erreurs" class="types-erreurs-section">
    <h2><i class="fas fa-exclamation-triangle icon"></i> Types d'Erreurs</h2>
    <p class="highlight">Il existe plusieurs types d'erreurs que l'on peut rencontrer lors du développement :</p>
    <ul class="types-list">
        <li><i class="fas fa-code icon"></i> <strong>Erreurs de Syntaxe :</strong> Ces erreurs surviennent lorsque le code ne respecte pas les règles syntaxiques du langage.</li>
        <li><i class="fas fa-bug icon"></i> <strong>Erreurs d'Exécution :</strong> Ces erreurs se produisent pendant l'exécution du programme, souvent dues à des opérations non valides.</li>
        <li><i class="fas fa-exclamation icon"></i> <strong>Exceptions :</strong> Ce sont des événements anormaux qui perturbent le flux normal d'exécution.</li>
    </ul>
    <p><strong>Mnémonique :</strong> <em>S.E.E.</em> pour se souvenir des types d'erreurs : 
        <strong>S</strong>yntaxe, <strong>E</strong>xécution, <strong>E</strong>xceptions.</p>
</section>
</div>

<!-- Erreurs de Syntaxe -->
<div class="content-section col-md-6">
<section id="erreurs-syntaxe">
    <h2><i class="fas fa-code icon"></i> Erreurs de Syntaxe</h2>
    <p>
        Les erreurs de syntaxe se produisent lorsque le code ne suit pas les règles de syntaxe du langage de programmation. Ces erreurs empêchent le programme de s'exécuter correctement et sont généralement détectées par l'interpréteur ou le compilateur avant l'exécution du code.
    </p>
    
    <h3>Causes Courantes d'Erreurs de Syntaxe</h3>
    <ul>
        <li><strong>Oubli de point-virgule :</strong> Dans de nombreux langages, comme PHP, chaque instruction doit se terminer par un point-virgule. L'oubli de ce symbole peut entraîner des erreurs.</li>
        <li><strong>Parenthèses ou accolades manquantes :</strong> Ne pas équilibrer les parenthèses ou les accolades peut également générer des erreurs. Par exemple, oublier une accolade ouvrante ou fermante dans une structure de contrôle.</li>
        <li><strong>Utilisation incorrecte des mots-clés :</strong> L'utilisation de mots réservés comme noms de variables peut causer des erreurs.</li>
        <li><strong>Erreurs de typographie :</strong> De simples fautes de frappe peuvent également provoquer des erreurs de syntaxe.</li>
    </ul>

    <h3>Exemple d'Erreur de Syntaxe</h3>
    <p>Voici un exemple d'erreur de syntaxe due à un oubli de point-virgule :</p>
    <pre><code class="language-php">
<?php
// Mauvaise syntaxe
// echo "Hello World"  // Oubli du point-virgule

// Correction :
echo "Hello World";  // Ajout du point-virgule
?>
    </code></pre>

    <h3>Autres Exemples d'Erreurs de Syntaxe</h3>
    <p>Voici d'autres exemples illustrant différents types d'erreurs de syntaxe :</p>

    <h4>1. Parenthèses Manquantes</h4>
    <pre><code class="language-php">
<?php
// Mauvaise syntaxe
if (true) {
    echo "Cette condition est vraie.";  // Erreur ici
}

// Correction :
if (true) {
    echo "Cette condition est vraie."; 
}
?>
    </code></pre>

    <h4>2. Utilisation de Mots-Réservés</h4>
    <pre><code class="language-php">
<?php
// Mauvaise syntaxe
if (!function_exists('maFonction')) {
    function maFonction() {
        return "Ceci est correct.";
    }
}

// Correction :
if (!function_exists('maFonction')) {
    function maFonction() {
        return "Ceci est correct.";
    }
}
?>
    </code></pre>

    <h3>Comment Éviter les Erreurs de Syntaxe</h3>
    <p>Voici quelques conseils pour éviter les erreurs de syntaxe dans votre code :</p>
    <ul>
        <li><strong>Utiliser un IDE :</strong> Les environnements de développement intégrés (IDE) comme Visual Studio Code ou PhpStorm signalent souvent les erreurs de syntaxe en temps réel.</li>
        <li><strong>Lire les messages d'erreur :</strong> Les messages d'erreur fournis par l'interpréteur ou le compilateur peuvent donner des indices précieux sur la nature de l'erreur.</li>
        <li><strong>Valider votre code :</strong> Utiliser des outils de validation de code pour détecter les erreurs de syntaxe avant l'exécution.</li>
        <li><strong>Prendre son temps :</strong> Relire le code attentivement avant de l'exécuter, surtout après avoir fait des modifications.</li>
    </ul>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>S.A.F.E.</em> pour se souvenir de la prévention des erreurs de syntaxe : <strong>S</strong>uivre les règles, <strong>A</strong>ttention aux détails, <strong>F</strong>aire des tests, <strong>E</strong>couter les messages d'erreur.</p>
</section>
</div>

       <!-- Erreurs d'Exécution -->
       <div class="content-section col-md-6">
<section id="erreurs-execution">
    <h2><i class="fas fa-exclamation-circle icon"></i> Erreurs d'Exécution</h2>
    <p>
        Les erreurs d'exécution se produisent lorsque le programme est en cours d'exécution et qu'une instruction entraîne une condition qui empêche l'exécution normale du code.
        Ces erreurs peuvent être causées par des opérations invalides, des accès à des ressources manquantes, ou des exceptions non gérées.
    </p>

    <h3>Causes Courantes des Erreurs d'Exécution</h3>
    <ul>
        <li><strong>Division par zéro :</strong> Tentative de division par une variable qui a la valeur zéro.</li>
        <li><strong>Accès à des index non valides :</strong> Essayer d'accéder à un élément d'un tableau en utilisant un index qui n'existe pas.</li>
        <li><strong>Fichiers manquants :</strong> Essayer d'ouvrir un fichier qui n'existe pas peut provoquer une erreur.</li>
        <li><strong>Appels de fonction incorrects :</strong> Passer des arguments inappropriés à une fonction.</li>
    </ul>

    <h3>Exemple d'Erreur d'Exécution</h3>
    <p>Voici un exemple classique d'erreur d'exécution due à une division par zéro :</p>
    
    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
// Division par zéro
$denominator = 0;
if ($denominator != 0) {
    $result = 10 / $denominator;
} else {
    echo "&lt;span style='color: red;'&gt;Erreur : division par zéro.&lt;/span&gt;";  // Message d'erreur en rouge
}
?&gt;
    </code></pre>
    
    <h4>Résultat lorsque la condition est fausse :</h4>
    <pre><code class="language-php" style="color: red;">
Erreur : division par zéro.
    </code></pre>

    <h3>Autre Exemple : Accès à un Index Non Valide</h3>
    <p>Voici un autre exemple où une erreur d'exécution peut se produire lors de l'accès à un index non valide d'un tableau :</p>
    
    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
// Accès à un index non valide
$fruits = ["Pomme", "Banane", "Cerise"];
$index = 5;  // Index qui n'existe pas

if (isset($fruits[$index])) {
    echo $fruits[$index];
} else {
    echo "&lt;span style='color: red;'&gt;Erreur : Index $index n'existe pas dans le tableau.&lt;/span&gt;";  // Message d'erreur en rouge
}
?&gt;
    </code></pre>
    
    <h4>Résultat lorsque l'index n'existe pas :</h4>
    <pre><code class="language-php" style="color: red;">
Erreur : Index 5 n'existe pas dans le tableau.
    </code></pre>

    <h3>Comment Gérer les Erreurs d'Exécution</h3>
    <p>Pour gérer les erreurs d'exécution, il est recommandé de :</p>
    <ul>
        <li><strong>Utiliser des blocs <code>try-catch</code> :</strong> Cela permet de capturer et de traiter les exceptions potentielles.</li>
        <li><strong>Valider les entrées :</strong> Avant d'effectuer des opérations, vérifiez que les valeurs sont valides (par exemple, vérifier si un dénominateur est zéro avant de diviser).</li>
        <li><strong>Utiliser <code>isset()</code> :</strong> Pour vérifier l'existence d'un index dans un tableau avant d'y accéder.</li>
    </ul>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>D.E.A.L.</em> pour se souvenir des bonnes pratiques de gestion des erreurs d'exécution : 
        <strong>D</strong>étecter, <strong>E</strong>valuer, <strong>A</strong>juster, <strong>L</strong>imiter.
    </p>
</section>
</div>

        <!-- Exceptions -->
        <div class="content-section col-md-6">
<section id="exceptions">
    <h2><i class="fas fa-exclamation-triangle icon"></i> Exceptions</h2>
    <p>
        Les exceptions sont des erreurs spécifiques qui peuvent survenir lors de l'exécution d'un programme et qui peuvent être gérées par le code. 
        En PHP, les exceptions permettent de traiter des conditions d'erreur sans interrompre le programme. 
        Voici comment les gérer efficacement :
    </p>

    <h3>Exemple de Gestion d'Exception</h3>
    <p>
        Voici un exemple de code qui génère une exception et comment la gérer :
    </p>
    
    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
try {
    // Code qui peut générer une exception
    throw new Exception("Une erreur s'est produite !");
} catch (Exception $e) {
    echo "&lt;span style='color: red;'&gt;Erreur : &lt;/span&gt;" . $e->getMessage();
}
?&gt;
    </code></pre>

    <h4>Résultat lorsque l'exception est lancée :</h4>
    <pre><code class="language-php">
Erreur : Une erreur s'est produite !
    </code></pre>

    <h3>Utilisation de Plusieurs Exceptions</h3>
    <p>
        Vous pouvez également gérer différentes exceptions en utilisant plusieurs blocs <code>catch</code> :
    </p>
    
    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
try {
    // Lancer une exception
    throw new InvalidArgumentException("Argument invalide !");
} catch (InvalidArgumentException $e) {
    echo "&lt;span style='color: orange;'&gt;Erreur d'argument : &lt;/span&gt;" . $e->getMessage();
} catch (Exception $e) {
    echo "&lt;span style='color: red;'&gt;Erreur générale : &lt;/span&gt;" . $e->getMessage();
}
?&gt;
    </code></pre>

    <h4>Résultat lorsque l'argument est invalide :</h4>
    <pre><code class="language-php">
Erreur d'argument : Argument invalide !
    </code></pre>
</section>
</div>
<!-- Gestion des Erreurs -->
<div class="content-section col-md-6">
<section id="gestion-erreurs">
    <h2><i class="fas fa-tools icon"></i> Gestion des Erreurs</h2>
    <p>
        La gestion des erreurs est essentielle pour garantir que votre programme reste fonctionnel même lorsqu'il rencontre des problèmes.
        En PHP, vous pouvez utiliser les structures <code>try-catch</code> pour capturer et traiter les exceptions.
    </p>

    <h3>Structure de Base pour Gérer les Erreurs</h3>
    <p>Voici comment utiliser <code>try-catch</code> pour gérer les erreurs :</p>
    
    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
try {
    // Code pouvant générer une exception
    if (!file_exists("fichier_inexistant.txt")) {
        throw new Exception("Le fichier n'existe pas !");
    }
    // Autres instructions...
} catch (Exception $e) {
    // Traitement de l'erreur
    echo "&lt;span style='color: red;'&gt;Erreur : &lt;/span&gt;" . $e->getMessage();
}
?&gt;
    </code></pre>

    <h4>Résultat lorsque le fichier n'existe pas :</h4>
    <pre><code class="language-php">
Erreur : Le fichier n'existe pas !
    </code></pre>

    <h3>Conseils pour Gérer les Erreurs</h3>
    <ul>
        <li><strong>Utiliser des messages d'erreur clairs :</strong> Indiquez exactement ce qui a mal tourné pour faciliter le débogage.</li>
        <li><strong>Évitez les erreurs silencieuses :</strong> Ne laissez pas les exceptions non gérées passer inaperçues.</li>
        <li><strong>Documentez vos exceptions :</strong> Tenez à jour une documentation sur les exceptions que vos méthodes peuvent lancer.</li>
    </ul>
</section>
</div>
       <!-- Journalisation des Erreurs -->
       <div class="content-section col-md-6">
<section id="journalisation">
    <h2><i class="fas fa-file-alt icon"></i> Journalisation des Erreurs</h2>
    <p>
        La journalisation des erreurs est une pratique essentielle pour faciliter le débogage et la maintenance de vos applications. 
        En consignant les erreurs dans un fichier de log, vous pouvez suivre les problèmes survenus dans votre application sans interrompre son fonctionnement.
    </p>

    <h3>Pourquoi Journaliser les Erreurs ?</h3>
    <ul>
        <li><strong>Facilite le Débogage :</strong> Vous pouvez analyser les erreurs après coup sans avoir besoin d'être en mode débogage.</li>
        <li><strong>Améliore la Sécurité :</strong> En masquant les détails des erreurs affichées à l'utilisateur tout en les consignant pour l'analyse interne.</li>
        <li><strong>Permet une Surveillance Proactive :</strong> Vous pouvez suivre les erreurs récurrentes et identifier des tendances pour améliorer le code.</li>
    </ul>

    <h3>Exemple de Journalisation d'Erreur</h3>
    <p>
        Voici comment consigner une erreur dans un fichier de log en utilisant la fonction <code>error_log()</code> :
    </p>

    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
// Exemple d'utilisation de journalisation
try {
    // Lancer une exception pour démonstration
    throw new Exception("Une erreur s'est produite lors du traitement des données.");
} catch (Exception $e) {
    // Journaliser l'erreur dans un fichier de log
    error_log("Erreur : " . $e->getMessage(), 3, "/var/log/my-errors.log");
    echo "&lt;span style='color: orange;'&gt;Erreur enregistrée dans le fichier de log.&lt;/span&gt;";
}
?&gt;
    </code></pre>

    <h4>Résultat de l'exécution :</h4>
    <pre><code class="language-php">
Erreur enregistrée dans le fichier de log.
    </code></pre>

    <h3>Configuration de la Journalisation</h3>
    <p>
        Assurez-vous que le chemin du fichier de log est accessible en écriture par le serveur web. 
        Vous pouvez également configurer la journalisation dans le fichier <code>php.ini</code> pour définir un fichier de log global et le niveau de journalisation :
    </p>
    <pre><code>
log_errors = On
error_log = "/var/log/my-errors.log"
    </code></pre>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>L.O.G.</em> pour se souvenir des bonnes pratiques de journalisation : 
        <strong>L</strong>ogger les erreurs, <strong>O</strong>ptimiser la sécurité, <strong>G</strong>érer proactivement.
    </p>
</section>

</div>
<!-- Messages d'Erreur pour l'Utilisateur -->
<div class="content-section col-md-6">
<section id="messages-utilisateur">
    <h2><i class="fas fa-exclamation-triangle icon"></i> Messages d'Erreur pour l'Utilisateur</h2>
    <p>
        Lorsqu'une erreur se produit dans votre application, il est essentiel d'afficher des messages clairs et utiles pour les utilisateurs. 
        Ces messages doivent être compréhensibles, éviter les jargons techniques et offrir des solutions ou des instructions sur la façon de procéder.
    </p>

    <h3>Importance des Messages d'Erreur</h3>
    <ul>
        <li><strong>Améliore l'Expérience Utilisateur :</strong> Un bon message d'erreur aide l'utilisateur à comprendre ce qui s'est mal passé.</li>
        <li><strong>Réduit la Frustration :</strong> En fournissant des informations utiles, vous minimisez la frustration des utilisateurs.</li>
        <li><strong>Dirige vers une Solution :</strong> Les messages peuvent guider les utilisateurs sur les étapes à suivre pour résoudre le problème.</li>
    </ul>

    <h3>Exemple de Message d'Erreur</h3>
    <p>Voici un exemple de code qui affiche un message d'erreur simple :</p>
    <h4>Code fonctionnel :</h4>
    <pre><code class="language-php">
&lt;?php
// Simuler une erreur
$errorOccurred = true;

if ($errorOccurred) {
    // Affichage d'un message d'erreur
    echo "&lt;span style='color: red;'&gt;Une erreur est survenue. Veuillez réessayer plus tard.&lt;/span&gt;";
}
?&gt;
    </code></pre>

    <h4>Résultat de l'exécution :</h4>
    <pre><code class="language-php">
Une erreur est survenue. Veuillez réessayer plus tard.
    </code></pre>

    <h3>Conseils pour Rédiger des Messages d'Erreur</h3>
    <ul>
        <li><strong>Soit clair :</strong> Utilisez un langage simple et évitez le jargon technique.</li>
        <li><strong>Soit spécifique :</strong> Donnez des détails sur la nature de l'erreur si possible.</li>
        <li><strong>Offrez des solutions :</strong> Si possible, suggérez des actions que l'utilisateur peut entreprendre pour résoudre le problème.</li>
        <li><strong>Utilisez un style cohérent :</strong> Maintenez un format de message d'erreur cohérent tout au long de votre application.</li>
    </ul>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>C.L.A.I.R.</em> pour se souvenir de la rédaction de messages d'erreur : 
        <strong>C</strong>larifier, <strong>L</strong>ogique, <strong>A</strong>ction, <strong>I</strong>ndiquer, <strong>R</strong>ésoudre.
    </p>
</section>
</div>

       <!-- Exemples de Code -->
       <div class="content-section col-md-6">
<section id="exemples-php">
    <h2><i class="fas fa-code icon"></i> Exemples en PHP</h2>
    <p>Voici quelques exemples supplémentaires pour gérer les erreurs en PHP en utilisant des exceptions personnalisées :</p>

    <h3>Définition d'Exceptions Personnalisées</h3>
    <p>Les exceptions personnalisées permettent de créer des types d'erreurs spécifiques pour une gestion plus fine des erreurs dans votre application. Voici comment les définir :</p>
    <pre><code class="language-php">
&lt;?php
// Définition des classes d'exception personnalisées
class ExceptionType1 extends Exception {}
class ExceptionType2 extends Exception {}
?&gt;
    </code></pre>

    <h3>Utilisation des Exceptions Personnalisées</h3>
    <p>Vous pouvez ensuite utiliser ces exceptions personnalisées dans un bloc <code>try-catch</code> pour gérer les erreurs spécifiques :</p>
    <pre><code class="language-php">
&lt;?php
// Utilisation des exceptions personnalisées
try {
    // Simuler une condition d'erreur
    $condition = "type1"; // Changer cette valeur pour tester différents types

    if ($condition == "type1") {
        throw new ExceptionType1("Erreur de type 1 détectée !");
    } elseif ($condition == "type2") {
        throw new ExceptionType2("Erreur de type 2 détectée !");
    } else {
        echo "Aucune erreur détectée.";
    }
} catch (ExceptionType1 $e) {
    echo "Traitement pour ExceptionType1 : " . $e->getMessage();
} catch (ExceptionType2 $e) {
    echo "Traitement pour ExceptionType2 : " . $e->getMessage();
}
?&gt;
    </code></pre>

    <h3>Résultat de l'exécution</h3>
    <p>Si la condition de l'exemple est "type1", le résultat affichera :</p>
    <pre><code class="language-php">
Traitement pour ExceptionType1 : Erreur de type 1 détectée !
    </code></pre>

    <h3>Conseils pour l'Utilisation des Exceptions Personnalisées</h3>
    <ul>
        <li><strong>Utiliser des noms significatifs :</strong> Choisissez des noms qui décrivent clairement le type d'erreur.</li>
        <li><strong>Documenter vos exceptions :</strong> Ajoutez des commentaires pour expliquer quand et pourquoi utiliser chaque exception.</li>
        <li><strong>Tester vos exceptions :</strong> Assurez-vous de tester le comportement de votre code lors de l'utilisation d'exceptions.</li>
    </ul>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>E.R.R.E.U.R.</em> pour se souvenir des bonnes pratiques avec les exceptions personnalisées : 
        <strong>E</strong>xpliquer, <strong>R</strong>édiger, <strong>R</strong>éutiliser, <strong>E</strong>valuer, <strong>U</strong>tiliser, <strong>R</strong>ecueillir.
    </p>
</section>
</div>

<div class="content-section col-md-6">
<section id="exemples-python">
    <h2><i class="fas fa-code icon"></i> Exemples en Python</h2>
    <p>Pour ceux qui utilisent Python, voici comment gérer les erreurs en utilisant des exceptions :</p>

    <h3>Gestion des Exceptions en Python</h3>
    <p>En Python, vous pouvez utiliser la structure <code>try-except</code> pour capturer et gérer les exceptions qui peuvent survenir lors de l'exécution de votre code.</p>
    
    <h3>Exemple de Code</h3>
    <p>Voici un exemple où nous essayons de convertir une chaîne en entier et de diviser par un nombre. Si une erreur se produit, un message d'erreur est affiché :</p>
    <pre><code class="language-python">
try:
    # Demander à l'utilisateur d'entrer un nombre
    nombre = int(input("Entrez un nombre : "))
    # Effectuer une division
    resultat = 10 / nombre
    print(f"Le résultat est : {resultat}")
except ValueError:
    print("Erreur : valeur non valide. Veuillez entrer un entier.")
except ZeroDivisionError:
    print("Erreur : division par zéro.")
    </code></pre>

    <h3>Explication de l'Exemple</h3>
    <p>Dans cet exemple :</p>
    <ul>
        <li>Nous tentons de convertir la valeur saisie par l'utilisateur en entier.</li>
        <li>Si l'utilisateur entre une chaîne non numérique, une <code>ValueError</code> est levée.</li>
        <li>Si l'utilisateur entre zéro, une <code>ZeroDivisionError</code> est levée lors de la division.</li>
    </ul>

    <h3>Résultat de l'Exécution</h3>
    <p>Voici quelques exemples de ce qui pourrait être affiché :</p>
    <ul>
        <li><strong>Entrée valide :</strong> Si l'utilisateur entre <code>5</code>, le résultat sera :</li>
        <pre><code>Le résultat est : 2.0</code></pre>
        <li><strong>Entrée non valide :</strong> Si l'utilisateur entre <code>abc</code>, le message sera :</li>
        <pre><code>Erreur : valeur non valide. Veuillez entrer un entier.</code></pre>
        <li><strong>Division par zéro :</strong> Si l'utilisateur entre <code>0</code>, le message sera :</li>
        <pre><code>Erreur : division par zéro.</code></pre>
    </ul>

    <h3>Conseils pour Gérer les Exceptions en Python</h3>
    <ul>
        <li><strong>Spécifiez les exceptions :</strong> Il est préférable de capturer des exceptions spécifiques plutôt que d'utiliser un bloc <code>except</code> générique.</li>
        <li><strong>Utilisez <code>finally</code> pour le nettoyage :</strong> Si vous avez des ressources à libérer, utilisez un bloc <code>finally</code> pour exécuter ce code, qu'une exception se soit produite ou non.</li>
        <li><strong>Évitez de cacher les erreurs :</strong> Ne répondez pas simplement aux erreurs sans informer l'utilisateur de ce qui s'est mal passé.</li>
    </ul>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>C.L.E.A.R.</em> pour se souvenir des bonnes pratiques en gestion d'erreurs : 
        <strong>C</strong>apturer, <strong>L</strong>ire, <strong>E</strong>xpliquer, <strong>A</strong>juster, <strong>R</strong>écupérer.
    </p>
</section>
</div>
<div class="content-section col-md-6">
<section id="exemples-javascript">
    <h2><i class="fas fa-code icon"></i> Exemples en JavaScript</h2>
    <p>Pour ceux qui utilisent JavaScript, voici comment gérer les erreurs avec des exceptions :</p>

    <h3>Gestion des Exceptions en JavaScript</h3>
    <p>En JavaScript, vous pouvez utiliser la structure <code>try-catch</code> pour capturer et gérer les exceptions qui peuvent survenir lors de l'exécution de votre code.</p>

    <h3>Exemple de Code</h3>
    <p>Voici un exemple où nous tentons de convertir une chaîne en nombre et de diviser par un nombre. Si une erreur se produit, un message d'erreur est affiché :</p>
    <pre><code class="language-javascript">
try {
    // Demander à l'utilisateur d'entrer un nombre
    const nombre = prompt("Entrez un nombre : ");
    const resultat = 10 / parseInt(nombre);
    if (isNaN(resultat)) {
        throw new Error("Valeur non valide. Veuillez entrer un nombre.");
    }
    console.log(`Le résultat est : ${resultat}`);
} catch (e) {
    console.error(`Erreur : ${e.message}`);
}
    </code></pre>

    <h3>Explication de l'Exemple</h3>
    <p>Dans cet exemple :</p>
    <ul>
        <li>Nous demandons à l'utilisateur d'entrer un nombre via la fonction <code>prompt()</code>.</li>
        <li>Nous convertissons la valeur saisie en entier avec <code>parseInt()</code> et tentons de diviser 10 par ce nombre.</li>
        <li>Si l'utilisateur entre une valeur non numérique, la fonction <code>isNaN()</code> détecte cela et nous lançons une nouvelle erreur avec <code>throw</code>.</li>
        <li>La méthode <code>catch</code> gère l'erreur et affiche un message d'erreur dans la console.</li>
    </ul>

    <h3>Résultat de l'Exécution</h3>
    <p>Voici quelques exemples de ce qui pourrait être affiché dans la console :</p>
    <ul>
        <li><strong>Entrée valide :</strong> Si l'utilisateur entre <code>5</code>, le résultat sera :</li>
        <pre><code>Le résultat est : 2</code></pre>
        <li><strong>Entrée non valide :</strong> Si l'utilisateur entre <code>abc</code>, le message sera :</li>
        <pre><code>Erreur : Valeur non valide. Veuillez entrer un nombre.</code></pre>
        <li><strong>Division par zéro :</strong> Si l'utilisateur entre <code>0</code>, le message sera :</li>
        <pre><code>Erreur : Valeur non valide. Veuillez entrer un nombre.</code></pre>
    </ul>

    <h3>Conseils pour Gérer les Exceptions en JavaScript</h3>
    <ul>
        <li><strong>Utilisez <code>try-catch</code> pour capturer des erreurs :</strong> Cela vous permet de gérer les exceptions et d'empêcher le script de se bloquer.</li>
        <li><strong>Utilisez <code>throw</code> pour lancer des erreurs personnalisées :</strong> Cela vous aide à créer des messages d'erreur plus significatifs.</li>
        <li><strong>Validez les entrées :</strong> Vérifiez que les données saisies par l'utilisateur sont valides avant d'effectuer des opérations.</li>
    </ul>

    <h3>Mnémonique</h3>
    <p><strong>Mnémonique :</strong> <em>R.E.A.C.T.</em> pour se souvenir des bonnes pratiques en gestion d'erreurs : 
        <strong>R</strong>ecueillir, <strong>E</strong>valuer, <strong>A</strong>juster, <strong>C</strong>orriger, <strong>T</strong>ransmettre.
    </p>
</section>
</div>
</div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
