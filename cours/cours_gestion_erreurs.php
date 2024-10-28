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
    </div>
</div>

<div class="content">
    <div class="container mt-5">
    <h1>Cours Complet sur la Gestion des Erreurs</h1>
<p class="intro-text">La gestion des erreurs est essentielle dans le développement de logiciels pour s'assurer que les programmes fonctionnent correctement même en cas d'erreurs. Ce cours vous guidera à travers les différents types d'erreurs, leur importance, et comment les gérer efficacement.</p>

<!-- Introduction -->
<section id="intro" class="intro-section">
    <h2><i class="fas fa-info-circle icon"></i> Présentation</h2>
    <p class="highlight">La gestion des erreurs consiste à anticiper, détecter et traiter les erreurs qui peuvent survenir lors de l'exécution d'un programme. Une bonne gestion permet d'améliorer l'expérience utilisateur et d'éviter les plantages imprévus.</p>
    <p><strong>Mnémonique :</strong> <em>A.D.A.P.T.</em> pour se souvenir des étapes clés de la gestion des erreurs : 
        <strong>A</strong>nticiper, <strong>D</strong>étecter, <strong>A</strong>nalysé, <strong>P</strong>rendre des mesures, <strong>T</strong>raiter.</p>
</section>


<!-- Importance de la Gestion des Erreurs -->
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

<!-- Types d'Erreurs -->
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


<!-- Erreurs de Syntaxe -->
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


       <!-- Erreurs d'Exécution -->
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


        <!-- Exceptions -->
        <section id="exceptions">
            <h2>Exceptions</h2>
            <p>Les exceptions sont des erreurs spécifiques qui peuvent être gérées. Voici comment les gérer en PHP :</p>
            <pre><code class="language-php">
<?php
try {
    // Code qui peut générer une exception
    throw new Exception("Une erreur s'est produite !");
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
            </code></pre>
        </section>

        <!-- Gestion des Erreurs -->
        <section id="gestion-erreurs">
            <h2>Gestion des Erreurs</h2>
            <p>Pour gérer les erreurs, utilisez les structures <code>try-catch</code> pour capturer et traiter les exceptions :</p>
            <pre><code class="language-php">
<?php
try {
    // Code pouvant générer une exception
} catch (Exception $e) {
    // Traitement de l'erreur
}
?>
            </code></pre>
        </section>

        <!-- Journalisation des Erreurs -->
        <section id="journalisation">
            <h2>Journalisation des Erreurs</h2>
            <p>Consignez les erreurs dans un fichier de log pour faciliter le débogage :</p>
            <pre><code class="language-php">
<?php
error_log("Erreur : " . $e->getMessage(), 3, "/var/log/my-errors.log");
?>
            </code></pre>
        </section>

        <!-- Messages d'Erreur pour l'Utilisateur -->
        <section id="messages-utilisateur">
            <h2>Messages d'Erreur pour l'Utilisateur</h2>
            <p>Affichez des messages clairs et utiles pour les utilisateurs :</p>
            <pre><code class="language-php">
<?php
echo "Une erreur est survenue. Veuillez réessayer plus tard.";
?>
            </code></pre>
        </section>

        <!-- Exemples de Code -->
        <section id="exemples-php">
            <h2>Exemples en PHP</h2>
            <p>Voici quelques exemples supplémentaires pour gérer les erreurs :</p>
            <pre><code class="language-php">
<?php
// Définition des classes d'exception personnalisées
class ExceptionType1 extends Exception {}
class ExceptionType2 extends Exception {}

try {
    // Code
} catch (ExceptionType1 $e) {
    // Traitement pour ExceptionType1
} catch (ExceptionType2 $e) {
    // Traitement pour ExceptionType2
}
?>
            </code></pre>
        </section>

        <section id="exemples-python">
            <h2>Exemples en Python</h2>
            <p>Pour ceux qui utilisent Python, voici comment gérer les erreurs :</p>
            <pre><code class="language-python">
try:
    # Code pouvant générer une exception
except ValueError:
    print("Erreur : valeur non valide.")
except ZeroDivisionError:
    print("Erreur : division par zéro.")
            </code></pre>
        </section>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
