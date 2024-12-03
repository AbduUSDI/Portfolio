<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur HTML</title>
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
<!-- Sidebar mise à jour -->
<div class="sidebar" id="sidebar">
    <a href="#intro"><i class="fas fa-book-open"></i> Introduction</a>

    <!-- Dropdown Balises de Structure -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-code"></i> Balises de Structure
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#doctype">!DOCTYPE</a>
        <a href="#html">html</a>
        <a href="#head">head</a>
        <a href="#title">title</a>
        <a href="#body">body</a>
    </div>

    <!-- Dropdown Formatage de Texte -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-font"></i> Formatage de Texte
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#h1-h6">h1 à h6</a>
        <a href="#p">p</a>
        <a href="#br">br</a>
        <a href="#hr">hr</a>
        <a href="#strong">strong</a>
        <a href="#b">b</a>
        <a href="#i">i</a>
        <a href="#em">em</a>
        <a href="#small">small</a>
        <a href="#mark">mark</a>
        <a href="#blockquote">blockquote</a>
        <a href="#pre">pre</a>
        <a href="#code">code</a>
    </div>

    <!-- Dropdown Multimédia -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-photo-video"></i> Multimédia
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#img">img</a>
        <a href="#audio">audio</a>
        <a href="#video">video</a>
        <a href="#source">source</a>
        <a href="#track">track</a>
        <a href="#iframe">iframe</a>
    </div>

    <!-- Dropdown Listes -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-list"></i> Listes
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#ul">ul</a>
        <a href="#ol">ol</a>
        <a href="#li">li</a>
        <a href="#dl">dl</a>
        <a href="#dt">dt</a>
        <a href="#dd">dd</a>
    </div>

    <!-- Dropdown Tableaux -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-table"></i> Tableaux
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#table">table</a>
        <a href="#tr">tr</a>
        <a href="#td">td</a>
        <a href="#th">th</a>
        <a href="#caption">caption</a>
        <a href="#thead">thead</a>
        <a href="#tbody">tbody</a>
        <a href="#tfoot">tfoot</a>
    </div>

    <!-- Dropdown Formulaires -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-edit"></i> Formulaires
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#form">form</a>
        <a href="#input">input</a>
        <a href="#textarea">textarea</a>
        <a href="#button">button</a>
        <a href="#select">select</a>
        <a href="#option">option</a>
        <a href="#label">label</a>
        <a href="#fieldset">fieldset</a>
        <a href="#legend">legend</a>
    </div>

    <!-- Dropdown Balises Sémantiques -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-rocket"></i> Balises Sémantiques
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#header">header</a>
        <a href="#nav">nav</a>
        <a href="#section">section</a>
        <a href="#article">article</a>
        <a href="#aside">aside</a>
        <a href="#footer">footer</a>
        <a href="#main">main</a>
        <a href="#figure">figure</a>
        <a href="#figcaption">figcaption</a>
        <a href="#time">time</a>
    </div>

    <!-- Dropdown Programmation et Scripts -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-laptop-code"></i> Programmation et Scripts
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#script">script</a>
        <a href="#noscript">noscript</a>
        <a href="#canvas">canvas</a>
        <a href="#embed">embed</a>
        <a href="#object">object</a>
        <a href="#param">param</a>
    </div>

    <!-- Dropdown Autres Balises -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-cubes"></i> Autres Balises
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#details">details</a>
        <a href="#summary">summary</a>
        <a href="#dialog">dialog</a>
        <a href="#data">data</a>
        <a href="#output">output</a>
        <a href="#progress">progress</a>
        <a href="#meter">meter</a>
    </div>

    <!-- Dropdown Attributs HTML -->
    <button class="dropdown-btn" aria-expanded="false"><i class="fas fa-cogs"></i> Attributs HTML
        <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-container" aria-hidden="true">
        <a href="#global-attributes">Attributs Universels</a>
        <a href="#a-attributes">Attributs de la balise &lt;a&gt;</a>
        <a href="#img-attributes">Attributs de la balise &lt;img&gt;</a>
        <a href="#input-attributes">Attributs de la balise &lt;input&gt;</a>
        <a href="#form-attributes">Attributs de la balise &lt;form&gt;</a>
        <a href="#button-attributes">Attributs de la balise &lt;button&gt;</a>
        <a href="#textarea-attributes">Attributs de la balise &lt;textarea&gt;</a>
        <a href="#table-attributes">Attributs de la balise &lt;table&gt;</a>
        <a href="#media-attributes">Attributs pour &lt;audio&gt; et &lt;video&gt;</a>
        <a href="#meta-attributes">Attributs de la balise &lt;meta&gt;</a>
        <a href="#link-attributes">Attributs de la balise &lt;link&gt;</a>
        <a href="#iframe-attributes">Attributs de la balise &lt;iframe&gt;</a>
        <a href="#audio-attributes">Attributs de la balise &lt;audio&gt;</a>
        <a href="#video-attributes">Attributs de la balise &lt;video&gt;</a>
        <a href="#script-attributes">Attributs de la balise &lt;script&gt;</a>
        <a href="#source-attributes">Attributs de la balise &lt;source&gt;</a>
        <a href="#track-attributes">Attributs de la balise &lt;track&gt;</a>
        <a href="#time-attributes">Attributs de la balise &lt;time&gt;</a>
        <a href="#progress-attributes">Attributs de la balise &lt;progress&gt;</a>
        <a href="#meter-attributes">Attributs de la balise &lt;meter&gt;</a>
    </div>

    <a href="#conclusion"><i class="fas fa-check-circle"></i> Conclusion</a>
</div>



    <!-- Page Content -->
    <div class="content">
        <div class="container animate__animated animate__fadeInUp">

<!-- Introduction -->
<div id="intro" class="intro-section">
    <h1>
        <i class="fas fa-book-open icon"></i> Introduction à HTML
    </h1>
    <p class="intro-text highlight">
        <i class="fas fa-info-circle" style="color: #1976d2; margin-right: 8px;"></i>
        HTML, ou <strong>HyperText Markup Language</strong>, est le standard universel pour structurer et présenter le contenu des pages web. 
        En utilisant un système de balises, il définit les éléments et les sections nécessaires à la création d'une page.
    </p>
    <p class="intro-text">
        <i class="fas fa-history" style="color: #f57c00; margin-right: 8px;"></i>
        Créé en 1991 par <strong>Tim Berners-Lee</strong>, HTML a marqué la naissance du World Wide Web. Aujourd'hui, la version <strong>HTML5</strong> inclut des outils modernes pour le multimédia, les animations et les interactions utilisateur.
    </p>
    <h3 class="importance-section">
        <i class="fas fa-lightbulb" style="color: #ffca28; margin-right: 8px;"></i> Pourquoi apprendre HTML ?
    </h3>
    <ul class="importance-list">
        <li>
            <i class="fas fa-laptop-code" style="color: #007bff; margin-right: 8px;"></i>
            <strong>Essentiel pour le développement web :</strong> HTML est la base de tous les sites web modernes, permettant de structurer du contenu de manière claire et accessible.
        </li>
        <li>
            <i class="fas fa-child" style="color: #e91e63; margin-right: 8px;"></i>
            <strong>Facile à apprendre :</strong> Un langage simple et intuitif, parfait pour les débutants en programmation.
        </li>
        <li>
            <i class="fas fa-check-circle" style="color: #43a047; margin-right: 8px;"></i>
            <strong>Polyvalent et compatible :</strong> Fonctionne sur toutes les plateformes et navigateurs, offrant une compatibilité universelle.
        </li>
    </ul>
</div>



<div class="content-section" id="all-tags" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
<h2 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px; display: flex; align-items: center;">
        <i class="fas fa-code icon" style="margin-right: 10px;"></i> Liste Complète des Balises HTML
    </h2>
    <p style="font-size: 1.1em; color: #333; background-color: #e2f0ff; padding: 15px; border-radius: 5px; border-left: 5px solid #1e88e5; line-height: 1.8;">
        Découvrez ici une <strong>liste exhaustive des balises HTML</strong> disponibles en <strong>HTML5</strong>. 
        Chaque balise est accompagnée d’une brève description pour comprendre son rôle dans la structure et la présentation des pages web.
    </p>
    <div class="highlight" style="background-color: #f9f9f9; padding: 10px; border-radius: 8px; margin-top: 15px;">
        <i class="fas fa-lightbulb" style="color: #ffca28; margin-right: 8px;"></i>
        <em>Astuce :</em> Cliquez sur une balise dans la sidebar pour en savoir plus sur son utilisation avec des exemples pratiques !
    </div>

    <div class="row">
    <div class="col-md-12 mb-4" id="structure">
    <h3 style="color: #388e3c;">
        <i class="fas fa-code"></i> Balises de structure
    </h3>
    <ul>
        <li id="doctype">
            <strong>&lt;!DOCTYPE&gt;</strong> : Indique le type de document HTML. Elle est utilisée pour informer le navigateur de la version de HTML utilisée.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;!DOCTYPE html&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Cette déclaration doit être placée tout en haut de votre document HTML.
                </p>
            </div>
        </li>
        <li id="html">
            <strong>&lt;html&gt;</strong> : Le conteneur principal pour tout le contenu HTML. Tous les éléments d'une page web doivent être inclus à l'intérieur de cette balise.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;html&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/html&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Elle encadre toutes les balises présentes sur la page.
                </p>
            </div>
        </li>
        <li id="head">
            <strong>&lt;head&gt;</strong> : Contient des métadonnées et des informations essentielles pour le navigateur (comme les styles, les liens et les scripts). Elle n'affiche rien directement sur la page.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;head&gt;</span>
                        <span class="class-name">&lt;title&gt;Titre de la page&lt;/title&gt;</span>
                        <span class="keyword">&lt;/head&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez les balises de style, de lien ou de script ici.
                </p>
            </div>
        </li>
        <li id="title">
            <strong>&lt;title&gt;</strong> : Définit le titre de la page, qui s'affiche dans l'onglet du navigateur ou dans les résultats de recherche.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;title&gt;</span>
                        Mon site web
                        <span class="keyword">&lt;/title&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ce texte apparaît dans l'onglet du navigateur.
                </p>
            </div>
        </li>
        <li id="body">
            <strong>&lt;body&gt;</strong> : Contient tout le contenu visible d'une page web, y compris le texte, les images, les vidéos, les formulaires, etc.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;body&gt;</span>
                        <span class="class-name">&lt;h1&gt;Bienvenue&lt;/h1&gt;</span>
                        <span class="class-name">&lt;p&gt;Ceci est une page d'exemple.&lt;/p&gt;</span>
                        <span class="keyword">&lt;/body&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Tout le contenu affiché sur votre site est placé à l'intérieur de cette balise.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="text-formatting">
    <h3 style="color: #388e3c;">
        <i class="fas fa-font"></i> Balises de Formatage de Texte
    </h3>
    <ul>
        <!-- h1 à h6 -->
        <li id="h1-h6">
            <strong>&lt;h1&gt; à &lt;h6&gt;</strong> : Définissent les titres, du plus grand (&lt;h1&gt;) au plus petit (&lt;h6&gt;).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;h1&gt;</span>Titre principal<span class="keyword">&lt;/h1&gt;</span>
                        <span class="keyword">&lt;h2&gt;</span>Titre secondaire<span class="keyword">&lt;/h2&gt;</span>
                        <span class="keyword">&lt;h6&gt;</span>Titre très petit<span class="keyword">&lt;/h6&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez &lt;h1&gt; pour les titres principaux et descendez jusqu'à &lt;h6&gt; pour des sous-sections.
                </p>
            </div>
        </li>

        <!-- p -->
        <li id="p">
            <strong>&lt;p&gt;</strong> : Définit un paragraphe de texte.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;p&gt;</span>Ceci est un paragraphe de texte.<span class="keyword">&lt;/p&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour structurer votre texte en paragraphes.
                </p>
            </div>
        </li>

        <!-- br -->
        <li id="br">
            <strong>&lt;br&gt;</strong> : Insère un saut de ligne.
            <div class="example-box">
                <pre>
                    <code>
                        Texte sur une ligne<span class="keyword">&lt;br&gt;</span>
                        Texte sur une autre ligne
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utile pour forcer un retour à la ligne.
                </p>
            </div>
        </li>

        <!-- hr -->
        <li id="hr">
            <strong>&lt;hr&gt;</strong> : Insère une ligne horizontale pour séparer le contenu.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;hr&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisé pour marquer des sections ou des pauses visuelles.
                </p>
            </div>
        </li>

        <!-- strong -->
        <li id="strong">
            <strong>&lt;strong&gt;</strong> : Texte en gras avec une importance particulière.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;strong&gt;</span>Texte important<span class="keyword">&lt;/strong&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour insister sur un mot ou une phrase clé.
                </p>
            </div>
        </li>

        <!-- b -->
        <li id="b">
            <strong>&lt;b&gt;</strong> : Texte en gras sans connotation d'importance.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;b&gt;</span>Texte en gras<span class="keyword">&lt;/b&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez-le pour styliser du texte sans signifier une importance particulière.
                </p>
            </div>
        </li>

        <!-- i -->
        <li id="i">
            <strong>&lt;i&gt;</strong> : Texte en italique.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;i&gt;</span>Texte en italique<span class="keyword">&lt;/i&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Souvent utilisé pour les termes étrangers ou pour styliser du texte.
                </p>
            </div>
        </li>

        <!-- em -->
        <li id="em">
            <strong>&lt;em&gt;</strong> : Texte en italique avec une emphase sémantique.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;em&gt;</span>Texte avec emphase<span class="keyword">&lt;/em&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisé pour insister sur des mots dans une phrase.
                </p>
            </div>
        </li>

        <!-- small -->
        <li id="small">
            <strong>&lt;small&gt;</strong> : Texte de petite taille.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;small&gt;</span>Texte réduit<span class="keyword">&lt;/small&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour les mentions légales ou annotations.
                </p>
            </div>
        </li>

        <!-- mark -->
        <li id="mark">
            <strong>&lt;mark&gt;</strong> : Texte surligné.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;mark&gt;</span>Texte surligné<span class="keyword">&lt;/mark&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Mettez en avant un texte dans une phrase.
                </p>
            </div>
        </li>

        <!-- blockquote -->
        <li id="blockquote">
            <strong>&lt;blockquote&gt;</strong> : Bloc de citation.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;blockquote&gt;</span>
                        C'est une citation.
                        <span class="keyword">&lt;/blockquote&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Souvent utilisé pour citer des sources externes.
                </p>
            </div>
        </li>

        <!-- pre -->
        <li id="pre">
            <strong>&lt;pre&gt;</strong> : Texte préformaté.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;pre&gt;</span>
                        Texte avec    des espaces
                        conservés.
                        <span class="keyword">&lt;/pre&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utile pour montrer du code ou des textes structurés.
                </p>
            </div>
        </li>

        <!-- code -->
        <li id="code">
            <strong>&lt;code&gt;</strong> : Texte représentant du code.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;code&gt;</span>console.log("Bonjour !")<span class="keyword">&lt;/code&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : À utiliser pour afficher du code en ligne.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="media">
    <h3 style="color: #388e3c;">
        <i class="fas fa-photo-video"></i> Balises Multimédia
    </h3>
    <ul>
        <!-- img -->
        <li id="img">
            <strong>&lt;img&gt;</strong> : Permet d'afficher une image sur la page.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">alt="Description de l'image"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Affiche une image avec un texte alternatif en cas d'erreur.
                </p>
            </div>
        </li>

        <!-- audio -->
        <li id="audio">
            <strong>&lt;audio&gt;</strong> : Permet la lecture de fichiers audio.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">controls</span> 
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">type="audio/mpeg"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoute un lecteur audio avec des contrôles.
                </p>
            </div>
        </li>

        <!-- video -->
        <li id="video">
            <strong>&lt;video&gt;</strong> : Permet la lecture de fichiers vidéo.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">width="640" height="360" controls</span> 
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">type="video/mp4"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoute un lecteur vidéo avec des contrôles et des dimensions spécifiques.
                </p>
            </div>
        </li>

        <!-- source -->
        <li id="source">
            <strong>&lt;source&gt;</strong> : Spécifie une source pour les balises &lt;audio&gt; ou &lt;video&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">controls</span> 
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">type="video/mp4"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez plusieurs balises &lt;source&gt; pour prendre en charge différents formats de fichiers.
                </p>
            </div>
        </li>

        <!-- track -->
        <li id="track">
            <strong>&lt;track&gt;</strong> : Ajoute des sous-titres ou des descriptions textuelles à une vidéo.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">controls</span> 
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">type="video/mp4"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;track</span> 
                        <span class="variable">src="subtitles.vtt"</span> 
                        <span class="variable">kind="subtitles"</span> 
                        <span class="variable">srclang="en"</span> 
                        <span class="variable">label="English"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez des sous-titres pour rendre vos vidéos accessibles.
                </p>
            </div>
        </li>

        <!-- iframe -->
        <li id="iframe">
            <strong>&lt;iframe&gt;</strong> : Permet d'intégrer un contenu externe, comme une page web ou une carte.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">width="640" height="360"</span> 
                        <span class="variable">frameborder="0"</span> 
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Intégrez des vidéos YouTube, des cartes Google Maps, ou d'autres contenus externes.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="lists">
    <h3 style="color: #388e3c;">
        <i class="fas fa-list"></i> Balises de Listes
    </h3>
    <ul>
        <!-- ul -->
        <li id="ul">
            <strong>&lt;ul&gt;</strong> : Définit une liste non ordonnée avec des puces comme marqueurs.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;ul&gt;</span>
                        <span class="keyword">&lt;li&gt;</span>Premier élément<span class="keyword">&lt;/li&gt;</span>
                        <span class="keyword">&lt;li&gt;</span>Deuxième élément<span class="keyword">&lt;/li&gt;</span>
                        <span class="keyword">&lt;/ul&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour créer une liste non ordonnée comme des options ou des items.
                </p>
            </div>
        </li>

        <!-- ol -->
        <li id="ol">
            <strong>&lt;ol&gt;</strong> : Définit une liste ordonnée avec des numéros ou des lettres comme marqueurs.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;ol&gt;</span>
                        <span class="keyword">&lt;li&gt;</span>Étape 1<span class="keyword">&lt;/li&gt;</span>
                        <span class="keyword">&lt;li&gt;</span>Étape 2<span class="keyword">&lt;/li&gt;</span>
                        <span class="keyword">&lt;/ol&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour afficher des étapes ou une séquence ordonnée.
                </p>
            </div>
        </li>

        <!-- li -->
        <li id="li">
            <strong>&lt;li&gt;</strong> : Élément de liste utilisé à l'intérieur des balises &lt;ul&gt; ou &lt;ol&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;ul&gt;</span>
                        <span class="keyword">&lt;li&gt;</span>Élément de liste<span class="keyword">&lt;/li&gt;</span>
                        <span class="keyword">&lt;/ul&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Chaque élément dans une liste doit être contenu dans une balise &lt;li&gt;.
                </p>
            </div>
        </li>

        <!-- dl -->
        <li id="dl">
            <strong>&lt;dl&gt;</strong> : Définit une liste de définition, utilisée pour présenter des termes et leurs descriptions.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;dl&gt;</span>
                        <span class="keyword">&lt;dt&gt;</span>HTML<span class="keyword">&lt;/dt&gt;</span>
                        <span class="keyword">&lt;dd&gt;</span>Langage de balisage pour le web<span class="keyword">&lt;/dd&gt;</span>
                        <span class="keyword">&lt;/dl&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour afficher des glossaires ou des définitions.
                </p>
            </div>
        </li>

        <!-- dt -->
        <li id="dt">
            <strong>&lt;dt&gt;</strong> : Définit un terme dans une liste de définition.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;dl&gt;</span>
                        <span class="keyword">&lt;dt&gt;</span>HTML<span class="keyword">&lt;/dt&gt;</span>
                        <span class="keyword">&lt;dd&gt;</span>Langage utilisé pour structurer le contenu web<span class="keyword">&lt;/dd&gt;</span>
                        <span class="keyword">&lt;/dl&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez &lt;dt&gt; pour introduire chaque terme dans une liste de définition.
                </p>
            </div>
        </li>

        <!-- dd -->
        <li id="dd">
            <strong>&lt;dd&gt;</strong> : Définit la description ou la définition d'un terme dans une liste de définition.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;dl&gt;</span>
                        <span class="keyword">&lt;dt&gt;</span>CSS<span class="keyword">&lt;/dt&gt;</span>
                        <span class="keyword">&lt;dd&gt;</span>Langage utilisé pour styliser les pages web<span class="keyword">&lt;/dd&gt;</span>
                        <span class="keyword">&lt;/dl&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Placez la description sous chaque terme défini par &lt;dt&gt;.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="tables">
    <h3 style="color: #388e3c;">
        <i class="fas fa-table"></i> Balises de Tableaux
    </h3>
    <ul>
        <!-- table -->
        <li id="table">
            <strong>&lt;table&gt;</strong> : Définit un tableau HTML. Contient les lignes et les cellules.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;table&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/table&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise comme conteneur principal pour un tableau.
                </p>
            </div>
        </li>

        <!-- tr -->
        <li id="tr">
            <strong>&lt;tr&gt;</strong> : Définit une ligne de tableau. Contient des cellules (&lt;td&gt; ou &lt;th&gt;).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;tr&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/tr&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Chaque ligne de tableau doit être définie à l'intérieur de cette balise.
                </p>
            </div>
        </li>

        <!-- td -->
        <li id="td">
            <strong>&lt;td&gt;</strong> : Définit une cellule de tableau contenant des données.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;td&gt;</span>Cellule de données<span class="keyword">&lt;/td&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : À utiliser dans une ligne (&lt;tr&gt;) pour ajouter des données.
                </p>
            </div>
        </li>

        <!-- th -->
        <li id="th">
            <strong>&lt;th&gt;</strong> : Définit une cellule d'en-tête de tableau.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;th&gt;</span>Titre de colonne<span class="keyword">&lt;/th&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisée pour les en-têtes de colonnes ou de lignes, souvent stylisée en gras.
                </p>
            </div>
        </li>

        <!-- caption -->
        <li id="caption">
            <strong>&lt;caption&gt;</strong> : Ajoute une légende au tableau.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;table&gt;</span>
                        <span class="keyword">&lt;caption&gt;</span>Légende du tableau<span class="keyword">&lt;/caption&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/table&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez un titre descriptif au tableau pour améliorer l'accessibilité.
                </p>
            </div>
        </li>

        <!-- thead -->
        <li id="thead">
            <strong>&lt;thead&gt;</strong> : Regroupe les lignes d'en-tête du tableau.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;thead&gt;</span>
                        <span class="keyword">&lt;tr&gt;</span>
                        <span class="keyword">&lt;th&gt;</span>Colonne 1<span class="keyword">&lt;/th&gt;</span>
                        <span class="keyword">&lt;th&gt;</span>Colonne 2<span class="keyword">&lt;/th&gt;</span>
                        <span class="keyword">&lt;/tr&gt;</span>
                        <span class="keyword">&lt;/thead&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Placez les en-têtes de colonnes dans cette section.
                </p>
            </div>
        </li>

        <!-- tbody -->
        <li id="tbody">
            <strong>&lt;tbody&gt;</strong> : Contient le corps principal du tableau.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;tbody&gt;</span>
                        <span class="keyword">&lt;tr&gt;</span>
                        <span class="keyword">&lt;td&gt;</span>Donnée 1<span class="keyword">&lt;/td&gt;</span>
                        <span class="keyword">&lt;td&gt;</span>Donnée 2<span class="keyword">&lt;/td&gt;</span>
                        <span class="keyword">&lt;/tr&gt;</span>
                        <span class="keyword">&lt;/tbody&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Regroupez les données principales ici.
                </p>
            </div>
        </li>

        <!-- tfoot -->
        <li id="tfoot">
            <strong>&lt;tfoot&gt;</strong> : Contient le pied du tableau, généralement utilisé pour les totaux ou notes.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;tfoot&gt;</span>
                        <span class="keyword">&lt;tr&gt;</span>
                        <span class="keyword">&lt;td colspan="2"&gt;</span>Total : 100<span class="keyword">&lt;/td&gt;</span>
                        <span class="keyword">&lt;/tr&gt;</span>
                        <span class="keyword">&lt;/tfoot&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour afficher les totaux ou des remarques générales.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="forms">
    <h3 style="color: #388e3c;">
        <i class="fas fa-edit"></i> Balises de Formulaires
    </h3>
    <ul>
        <!-- form -->
        <li id="form">
            <strong>&lt;form&gt;</strong> : Définit un formulaire HTML utilisé pour collecter et envoyer des données.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form</span> 
                        <span class="variable">action="/submit"</span> 
                        <span class="variable">method="POST"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour encapsuler tous les champs du formulaire.
                </p>
            </div>
        </li>

        <!-- input -->
        <li id="input">
            <strong>&lt;input&gt;</strong> : Champ de saisie pour collecter des informations (texte, email, mot de passe, etc.).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">name="username"</span> 
                        <span class="variable">placeholder="Entrez votre nom"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `type` pour spécifier le type de champ (texte, email, mot de passe, etc.).
                </p>
            </div>
        </li>

        <!-- textarea -->
        <li id="textarea">
            <strong>&lt;textarea&gt;</strong> : Zone de texte multi-ligne pour une saisie plus étendue.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;textarea</span> 
                        <span class="variable">name="message"</span> 
                        <span class="variable">rows="4" cols="50"</span>
                        <span class="keyword">&gt;</span>Votre message ici<span class="keyword">&lt;/textarea&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour collecter des commentaires ou des descriptions.
                </p>
            </div>
        </li>

        <!-- button -->
        <li id="button">
            <strong>&lt;button&gt;</strong> : Bouton cliquable pour soumettre ou déclencher des actions.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">type="submit"</span>
                        <span class="keyword">&gt;</span>Envoyer<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `type="submit"` pour soumettre le formulaire ou `type="button"` pour une action personnalisée.
                </p>
            </div>
        </li>

        <!-- select -->
        <li id="select">
            <strong>&lt;select&gt;</strong> : Définit un menu déroulant.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;select</span> 
                        <span class="variable">name="options"</span>
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;option&gt;</span>Option 1<span class="keyword">&lt;/option&gt;</span>
                        <span class="keyword">&lt;option&gt;</span>Option 2<span class="keyword">&lt;/option&gt;</span>
                        <span class="keyword">&lt;/select&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Contient plusieurs options parmi lesquelles l'utilisateur peut choisir.
                </p>
            </div>
        </li>

        <!-- option -->
        <li id="option">
            <strong>&lt;option&gt;</strong> : Définit une option dans un menu déroulant (&lt;select&gt;).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;option</span> 
                        <span class="variable">value="valeur1"</span>
                        <span class="keyword">&gt;</span>Option 1<span class="keyword">&lt;/option&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Chaque option du menu déroulant doit être définie avec cette balise.
                </p>
            </div>
        </li>

        <!-- label -->
        <li id="label">
            <strong>&lt;label&gt;</strong> : Ajoute une étiquette descriptive pour un champ de formulaire.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;label</span> 
                        <span class="variable">for="username"</span>
                        <span class="keyword">&gt;</span>Nom d'utilisateur<span class="keyword">&lt;/label&gt;</span>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">id="username"</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">name="username"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez l'attribut `for` pour associer un champ à son étiquette.
                </p>
            </div>
        </li>

        <!-- fieldset -->
        <li id="fieldset">
            <strong>&lt;fieldset&gt;</strong> : Groupe de champs de formulaire pour les organiser visuellement et sémantiquement.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;fieldset&gt;</span>
                        <span class="keyword">&lt;legend&gt;</span>Informations personnelles<span class="keyword">&lt;/legend&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/fieldset&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour regrouper des champs connexes.
                </p>
            </div>
        </li>

        <!-- legend -->
        <li id="legend">
            <strong>&lt;legend&gt;</strong> : Ajoute une légende descriptive pour un groupe &lt;fieldset&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;fieldset&gt;</span>
                        <span class="keyword">&lt;legend&gt;</span>Informations personnelles<span class="keyword">&lt;/legend&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/fieldset&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez-le pour fournir un titre descriptif pour un groupe de champs.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="semantic">
    <h3 style="color: #388e3c;">
        <i class="fas fa-rocket"></i> Balises Sémantiques
    </h3>
    <ul>
        <!-- header -->
        <li id="header">
            <strong>&lt;header&gt;</strong> : Définit l'en-tête de la page ou d'une section.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;header&gt;</span>
                        <span class="class-name">&lt;h1&gt;</span>Bienvenue sur Mon Site<span class="class-name">&lt;/h1&gt;</span>
                        <span class="class-name">&lt;nav&gt;</span>...<span class="class-name">&lt;/nav&gt;</span>
                        <span class="keyword">&lt;/header&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Placez le titre ou le menu principal dans cette balise.
                </p>
            </div>
        </li>

        <!-- nav -->
        <li id="nav">
            <strong>&lt;nav&gt;</strong> : Conteneur pour les liens de navigation.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;nav&gt;</span>
                        <span class="class-name">&lt;ul&gt;</span>
                        <span class="class-name">&lt;li&gt;</span><span class="variable">&lt;a href="#"&gt;</span>Accueil<span class="variable">&lt;/a&gt;</span><span class="class-name">&lt;/li&gt;</span>
                        <span class="class-name">&lt;li&gt;</span><span class="variable">&lt;a href="#"&gt;</span>Contact<span class="variable">&lt;/a&gt;</span><span class="class-name">&lt;/li&gt;</span>
                        <span class="class-name">&lt;/ul&gt;</span>
                        <span class="keyword">&lt;/nav&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Organisez les liens de navigation dans cette balise.
                </p>
            </div>
        </li>

        <!-- section -->
        <li id="section">
            <strong>&lt;section&gt;</strong> : Délimite une section logique dans une page.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;section&gt;</span>
                        <span class="class-name">&lt;h2&gt;</span>À propos<span class="class-name">&lt;/h2&gt;</span>
                        <span class="class-name">&lt;p&gt;</span>Contenu de la section...<span class="class-name">&lt;/p&gt;</span>
                        <span class="keyword">&lt;/section&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez-la pour diviser votre contenu en parties logiques.
                </p>
            </div>
        </li>

        <!-- article -->
        <li id="article">
            <strong>&lt;article&gt;</strong> : Définit un contenu autonome, comme un article de blog.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;article&gt;</span>
                        <span class="class-name">&lt;h2&gt;</span>Titre de l'article<span class="class-name">&lt;/h2&gt;</span>
                        <span class="class-name">&lt;p&gt;</span>Contenu de l'article...<span class="class-name">&lt;/p&gt;</span>
                        <span class="keyword">&lt;/article&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour du contenu pouvant être réutilisé indépendamment.
                </p>
            </div>
        </li>

        <!-- aside -->
        <li id="aside">
            <strong>&lt;aside&gt;</strong> : Définit du contenu secondaire, comme une barre latérale.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;aside&gt;</span>
                        <span class="class-name">&lt;p&gt;</span>Articles connexes<span class="class-name">&lt;/p&gt;</span>
                        <span class="keyword">&lt;/aside&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Placez ici des informations secondaires ou des liens supplémentaires.
                </p>
            </div>
        </li>

        <!-- footer -->
        <li id="footer">
            <strong>&lt;footer&gt;</strong> : Définit le pied de page d'une page ou section.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;footer&gt;</span>
                        <span class="class-name">&lt;p&gt;</span>© 2024 Mon Site<span class="class-name">&lt;/p&gt;</span>
                        <span class="keyword">&lt;/footer&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour les informations de copyright ou des liens de bas de page.
                </p>
            </div>
        </li>

        <!-- main -->
        <li id="main">
            <strong>&lt;main&gt;</strong> : Conteneur pour le contenu principal de la page.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;main&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/main&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Regroupe le contenu central de la page, excluant l'en-tête et le pied de page.
                </p>
            </div>
        </li>

        <!-- figure -->
        <li id="figure">
            <strong>&lt;figure&gt;</strong> : Conteneur pour des éléments illustratifs comme des images ou graphiques.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;figure&gt;</span>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">alt="Description"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;figcaption&gt;</span>Description de l'image<span class="keyword">&lt;/figcaption&gt;</span>
                        <span class="keyword">&lt;/figure&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Regroupez une image avec sa légende descriptive.
                </p>
            </div>
        </li>

        <!-- figcaption -->
        <li id="figcaption">
            <strong>&lt;figcaption&gt;</strong> : Ajoute une légende descriptive pour un élément &lt;figure&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;figcaption&gt;</span>Image de la mer<span class="keyword">&lt;/figcaption&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Placez cette balise sous une image dans un &lt;figure&gt;.
                </p>
            </div>
        </li>

        <!-- time -->
        <li id="time">
            <strong>&lt;time&gt;</strong> : Définit une date ou heure précise.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;time</span> 
                        <span class="variable">datetime="2024-12-01"</span>
                        <span class="keyword">&gt;</span>1er décembre 2024<span class="keyword">&lt;/time&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour afficher une date ou une heure sémantique.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="programming">
    <h3 style="color: #388e3c;">
        <i class="fas fa-laptop-code"></i> Balises pour Programmation et Scripts
    </h3>
    <ul>
        <!-- script -->
        <li id="script">
            <strong>&lt;script&gt;</strong> : Inclut ou référence un fichier JavaScript.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;script</span> 
                        <span class="variable">src="script.js"</span>
                        <span class="keyword">&gt;&lt;/script&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cette balise pour exécuter du code JavaScript ou inclure des fichiers externes.
                </p>
            </div>
        </li>

        <!-- noscript -->
        <li id="noscript">
            <strong>&lt;noscript&gt;</strong> : Affiche un contenu de secours si JavaScript est désactivé.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;noscript&gt;</span>
                        <span class="class-name">&lt;p&gt;</span>JavaScript est désactivé.<span class="class-name">&lt;/p&gt;</span>
                        <span class="keyword">&lt;/noscript&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour informer les utilisateurs que le site nécessite JavaScript.
                </p>
            </div>
        </li>

        <!-- canvas -->
        <li id="canvas">
            <strong>&lt;canvas&gt;</strong> : Définit une surface de dessin pour créer des graphiques dynamiques avec JavaScript.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;canvas</span> 
                        <span class="variable">id="myCanvas"</span> 
                        <span class="variable">width="500" height="400"</span>
                        <span class="keyword">&gt;&lt;/canvas&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez-le pour dessiner des graphiques 2D ou 3D avec JavaScript.
                </p>
            </div>
        </li>

        <!-- embed -->
        <li id="embed">
            <strong>&lt;embed&gt;</strong> : Insère des contenus externes, comme des vidéos ou animations Flash.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;embed</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">width="640" height="360"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour intégrer des médias ou des applications interactives.
                </p>
            </div>
        </li>

        <!-- object -->
        <li id="object">
            <strong>&lt;object&gt;</strong> : Conteneur pour intégrer des objets comme des fichiers PDF ou des vidéos.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;object</span> 
                        <span class="variable">data="document.pdf"</span> 
                        <span class="variable">type="application/pdf"</span>
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;/object&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez-le pour afficher des objets non HTML comme des PDF ou des applications Flash.
                </p>
            </div>
        </li>

        <!-- param -->
        <li id="param">
            <strong>&lt;param&gt;</strong> : Définit des paramètres pour un élément &lt;object&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;object</span> 
                        <span class="variable">data="movie.swf"</span> 
                        <span class="variable">type="application/x-shockwave-flash"</span>
                        <span class="keyword">&gt;</span>
                        <span class="keyword">&lt;param</span> 
                        <span class="variable">name="autoplay"</span> 
                        <span class="variable">value="true"</span> 
                        <span class="keyword">/&gt;</span>
                        <span class="keyword">&lt;/object&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez des paramètres comme la lecture automatique pour des objets intégrés.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="other">
    <h3 style="color: #388e3c;">
        <i class="fas fa-cubes"></i> Autres Balises
    </h3>
    <ul>
        <!-- details -->
        <li id="details">
            <strong>&lt;details&gt;</strong> : Conteneur pour des informations complémentaires, dépliable par l'utilisateur.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;details&gt;</span>
                        <span class="keyword">&lt;summary&gt;</span>Plus d'informations<span class="keyword">&lt;/summary&gt;</span>
                        <span class="variable">Voici les détails supplémentaires...</span>
                        <span class="keyword">&lt;/details&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Affiche des détails uniquement lorsque l'utilisateur clique sur le résumé.
                </p>
            </div>
        </li>

        <!-- summary -->
        <li id="summary">
            <strong>&lt;summary&gt;</strong> : Résumé ou titre pour une balise &lt;details&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;details&gt;</span>
                        <span class="keyword">&lt;summary&gt;</span>Voir les détails<span class="keyword">&lt;/summary&gt;</span>
                        <span class="variable">Voici le contenu...</span>
                        <span class="keyword">&lt;/details&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisé comme un titre cliquable pour déplier ou replier les informations.
                </p>
            </div>
        </li>

        <!-- dialog -->
        <li id="dialog">
            <strong>&lt;dialog&gt;</strong> : Définit une fenêtre de dialogue ou une popup.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;dialog</span> 
                        <span class="variable">open</span>
                        <span class="keyword">&gt;</span>Bienvenue dans cette boîte de dialogue !<span class="keyword">&lt;/dialog&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisé pour afficher une boîte modale ou une alerte.
                </p>
            </div>
        </li>

        <!-- data -->
        <li id="data">
            <strong>&lt;data&gt;</strong> : Associe une valeur numérique ou textuelle à un contenu.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;data</span> 
                        <span class="variable">value="1234"</span>
                        <span class="keyword">&gt;</span>Référence : ABC<span class="keyword">&lt;/data&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour afficher des données associées à des valeurs numériques ou uniques.
                </p>
            </div>
        </li>

        <!-- output -->
        <li id="output">
            <strong>&lt;output&gt;</strong> : Affiche le résultat d'un calcul ou d'une interaction utilisateur.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form oninput="result.value=parseInt(a.value)+parseInt(b.value)"&gt;</span>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="number" name="a"</span>
                        <span class="keyword"/&gt;</span>
                        +
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="number" name="b"</span>
                        <span class="keyword"/&gt;</span>
                        =
                        <span class="keyword">&lt;output</span> 
                        <span class="variable">name="result"</span>
                        <span class="keyword">&gt;&lt;/output&gt;</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Affiche le résultat en temps réel d'un calcul effectué via une interaction utilisateur.
                </p>
            </div>
        </li>

        <!-- progress -->
        <li id="progress">
            <strong>&lt;progress&gt;</strong> : Indique la progression d'une tâche.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;progress</span> 
                        <span class="variable">value="70" max="100"</span>
                        <span class="keyword">&gt;&lt;/progress&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez-la pour afficher une barre de progression de téléchargement ou de traitement.
                </p>
            </div>
        </li>

        <!-- meter -->
        <li id="meter">
            <strong>&lt;meter&gt;</strong> : Représente une valeur dans une plage connue.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="2.5" min="0" max="5"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Idéal pour afficher des niveaux ou des scores, comme une jauge.
                </p>
            </div>
        </li>
    </ul>
</div>

    </div>
</div>

<div class="content-section" id="all-attributes" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
<h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px; display: flex; align-items: center;">
    <i class="fas fa-cogs icon" style="margin-right: 10px;"></i> Liste Complète des Attributs HTML
</h2>
<p style="font-size: 1.1em; color: #333; background-color: #e8f4ff; padding: 15px; border-radius: 5px; border-left: 5px solid #1e88e5; line-height: 1.8;">
    Les <strong>attributs HTML</strong> sont des propriétés associées aux balises HTML qui permettent de personnaliser leur comportement, leur apparence ou leur contenu. 
    Ils jouent un rôle essentiel dans la définition des fonctionnalités des éléments HTML et leur interaction avec l’utilisateur ou d’autres composants d’une page web. Chaque attribut est placé à l'intérieur d'une balise d'ouverture et peut être utilisé pour configurer des paramètres spécifiques.
</p>
<p style="font-size: 1.1em; color: #333; background-color: #f9f9f9; padding: 15px; border-radius: 5px; line-height: 1.8;">
    Cette section vous guidera à travers les attributs les plus courants et leur utilisation, en fournissant une description claire de leur rôle ainsi que des exemples pratiques. Que vous soyez débutant ou expérimenté, comprendre les attributs vous permettra de tirer pleinement parti des capacités du HTML.
</p>
<div class="highlight" style="background-color: #fffbdd; padding: 10px; border-radius: 5px; margin-top: 15px; font-size: 1.1em;">
    <i class="fas fa-lightbulb" style="color: #ffc107; margin-right: 8px;"></i>
    <em>Astuce :</em> Combinez plusieurs attributs pour enrichir vos balises et répondre aux besoins spécifiques de votre projet web.
</div>


    <!-- Attributs Universels -->
    <div class="row">
    <div class="col-md-12 mb-4" id="global-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-globe"></i> Attributs Universels
    </h3>
    <ul>
        <!-- id -->
        <li id="id">
            <strong>id</strong> : Identifiant unique pour une balise. Utilisé pour les styles CSS et la manipulation DOM en JavaScript.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;div</span> 
                        <span class="variable">id="uniqueID"</span>
                        <span class="keyword">&gt;</span>Contenu ici<span class="keyword">&lt;/div&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez cet attribut pour cibler spécifiquement un élément avec JavaScript ou CSS.
                </p>
            </div>
        </li>

        <!-- class -->
        <li id="class">
            <strong>class</strong> : Attribue une ou plusieurs classes CSS pour appliquer des styles ou cibler des éléments.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;p</span> 
                        <span class="variable">class="text-important highlight"</span>
                        <span class="keyword">&gt;</span>Texte stylisé<span class="keyword">&lt;/p&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Une balise peut avoir plusieurs classes pour appliquer plusieurs styles.
                </p>
            </div>
        </li>

        <!-- style -->
        <li id="style">
            <strong>style</strong> : Ajoute des styles CSS directement dans une balise.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;h1</span> 
                        <span class="variable">style="color: red; font-size: 2em;"</span>
                        <span class="keyword">&gt;</span>Titre rouge<span class="keyword">&lt;/h1&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utile pour un style spécifique sans créer une règle CSS dédiée.
                </p>
            </div>
        </li>

        <!-- title -->
        <li id="title">
            <strong>title</strong> : Affiche un texte explicatif lorsqu’un utilisateur survole l’élément.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;abbr</span> 
                        <span class="variable">title="HyperText Markup Language"</span>
                        <span class="keyword">&gt;</span>HTML<span class="keyword">&lt;/abbr&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Fournit des informations supplémentaires à l’utilisateur sous forme d'infobulle.
                </p>
            </div>
        </li>

        <!-- lang -->
        <li id="lang">
            <strong>lang</strong> : Définit la langue de l’élément.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;html</span> 
                        <span class="variable">lang="fr"</span>
                        <span class="keyword">&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Améliore l’accessibilité et les optimisations SEO en précisant la langue.
                </p>
            </div>
        </li>

        <!-- data-* -->
        <li id="data-*">
            <strong>data-*</strong> : Attributs personnalisés pour stocker des données supplémentaires dans un élément.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">data-user-id="1234"</span>
                        <span class="keyword">&gt;</span>Voir utilisateur<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utile pour passer des données personnalisées à un script JavaScript.
                </p>
            </div>
        </li>

        <!-- hidden -->
        <li id="hidden">
            <strong>hidden</strong> : Masque un élément de la page sans le supprimer du DOM.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;div</span> 
                        <span class="variable">hidden</span>
                        <span class="keyword">&gt;</span>Texte masqué<span class="keyword">&lt;/div&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Masquez temporairement un élément que vous pouvez afficher plus tard avec JavaScript.
                </p>
            </div>
        </li>

        <!-- tabindex -->
        <li id="tabindex">
            <strong>tabindex</strong> : Définit l'ordre de tabulation pour un élément dans le DOM.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">tabindex="1"</span>
                        <span class="keyword">&gt;</span>Bouton principal<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Contrôlez l'ordre de navigation au clavier pour une meilleure expérience utilisateur.
                </p>
            </div>
        </li>
    </ul>
</div>


<div class="col-md-12 mb-4" id="a-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-link"></i> Attributs de la balise &lt;a&gt;
    </h3>
    <ul>
        <!-- href -->
        <li id="href">
            <strong>href</strong> : Spécifie l’URL de la page ou du fichier lié.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;a</span> 
                        <span class="variable">href="https://example.com"</span>
                        <span class="keyword">&gt;</span>Visitez notre site<span class="keyword">&lt;/a&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Redirige l’utilisateur vers une page externe ou interne.
                </p>
            </div>
        </li>

        <!-- target -->
        <li id="target">
            <strong>target</strong> : Définit où ouvrir le lien.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;a</span> 
                        <span class="variable">href="https://example.com"</span> 
                        <span class="variable">target="_blank"</span>
                        <span class="keyword">&gt;</span>Ouvrir dans un nouvel onglet<span class="keyword">&lt;/a&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `_blank` pour un nouvel onglet ou `_self` pour le même onglet.
                </p>
            </div>
        </li>

        <!-- download -->
        <li id="download">
            <strong>download</strong> : Télécharge le fichier au lieu de l’ouvrir.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;a</span> 
                        <span class="variable">href="file.pdf"</span> 
                        <span class="variable">download="document.pdf"</span>
                        <span class="keyword">&gt;</span>Télécharger le PDF<span class="keyword">&lt;/a&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Propose un fichier à télécharger avec un nom spécifique.
                </p>
            </div>
        </li>

        <!-- rel -->
        <li id="rel">
            <strong>rel</strong> : Définit la relation entre le document actuel et la ressource liée.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;a</span> 
                        <span class="variable">href="https://example.com"</span> 
                        <span class="variable">rel="noopener noreferrer"</span>
                        <span class="keyword">&gt;</span>Lien sécurisé<span class="keyword">&lt;/a&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez `noopener` pour empêcher l’accès au contexte du parent (utile pour la sécurité).
                </p>
            </div>
        </li>

        <!-- hreflang -->
        <li id="hreflang">
            <strong>hreflang</strong> : Indique la langue du document cible.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;a</span> 
                        <span class="variable">href="https://example.com"</span> 
                        <span class="variable">hreflang="en"</span>
                        <span class="keyword">&gt;</span>Lien vers le site anglais<span class="keyword">&lt;/a&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utile pour les sites multilingues et le SEO.
                </p>
            </div>
        </li>

        <!-- type -->
        <li id="type-a">
            <strong>type</strong> : Type MIME du lien cible.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;a</span> 
                        <span class="variable">href="document.pdf"</span> 
                        <span class="variable">type="application/pdf"</span>
                        <span class="keyword">&gt;</span>Télécharger le PDF<span class="keyword">&lt;/a&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Fournit des métadonnées sur le type de fichier ciblé.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs de la balise <img> -->
<div class="col-md-12 mb-4" id="img-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-image"></i> Attributs de la balise &lt;img&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src">
            <strong>src</strong> : Chemin de l’image.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">alt="Description de l'image"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : L'attribut `src` est indispensable pour définir le fichier image à afficher.
                </p>
            </div>
        </li>

        <!-- alt -->
        <li id="alt">
            <strong>alt</strong> : Texte alternatif affiché si l’image ne se charge pas (important pour l'accessibilité).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">alt="Description alternative"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez une description pour améliorer l'accessibilité et le SEO.
                </p>
            </div>
        </li>

        <!-- width -->
        <li id="width">
            <strong>width</strong> : Largeur de l’image.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">width="300"</span> 
                        <span class="variable">alt="Image redimensionnée"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `width` pour définir une largeur fixe en pixels.
                </p>
            </div>
        </li>

        <!-- height -->
        <li id="height">
            <strong>height</strong> : Hauteur de l’image.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">height="200"</span> 
                        <span class="variable">alt="Image redimensionnée"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez une hauteur spécifique pour contrôler les proportions de l'image.
                </p>
            </div>
        </li>

        <!-- loading -->
        <li id="loading">
            <strong>loading</strong> : Définit le chargement paresseux (`lazy`) pour optimiser les performances.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image.jpg"</span> 
                        <span class="variable">loading="lazy"</span> 
                        <span class="variable">alt="Image avec chargement paresseux"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `lazy` pour différer le chargement des images en dehors du viewport.
                </p>
            </div>
        </li>

        <!-- srcset -->
        <li id="srcset">
            <strong>srcset</strong> : Définit plusieurs sources d’image pour s’adapter aux résolutions d’écran.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;img</span> 
                        <span class="variable">src="image-small.jpg"</span> 
                        <span class="variable">srcset="image-small.jpg 480w, image-large.jpg 1024w"</span> 
                        <span class="variable">sizes="(max-width: 600px) 480px, 1024px"</span> 
                        <span class="variable">alt="Image responsive"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Permet de charger une image adaptée à la taille de l'écran de l'utilisateur.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs de la balise <input> -->
<div class="col-md-12 mb-4" id="input-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-keyboard"></i> Attributs de la balise &lt;input&gt;
    </h3>
    <ul>
        <!-- type -->
        <li id="type-input">
            <strong>type</strong> : Définit le type de champ (text, password, email, etc.).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="email"</span> 
                        <span class="variable">placeholder="Entrez votre email"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez le type de données attendu avec `type`.
                </p>
            </div>
        </li>

        <!-- name -->
        <li id="name-input">
            <strong>name</strong> : Nom de l’élément utilisé lors de l’envoi du formulaire.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">name="username"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `name` pour identifier les champs dans les données du formulaire.
                </p>
            </div>
        </li>

        <!-- value -->
        <li id="value-input">
            <strong>value</strong> : Valeur par défaut ou actuelle du champ.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">value="John Doe"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Affiche une valeur initiale modifiable par l'utilisateur.
                </p>
            </div>
        </li>

        <!-- placeholder -->
        <li id="placeholder-input">
            <strong>placeholder</strong> : Texte indicatif affiché lorsqu’aucune valeur n’est saisie.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">placeholder="Entrez votre nom"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez des instructions claires à l'utilisateur avec `placeholder`.
                </p>
            </div>
        </li>

        <!-- required -->
        <li id="required-input">
            <strong>required</strong> : Rend le champ obligatoire pour la soumission du formulaire.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">placeholder="Nom requis"</span> 
                        <span class="variable">required</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Empêche la soumission tant qu'une valeur n'est pas fournie.
                </p>
            </div>
        </li>

        <!-- disabled -->
        <li id="disabled-input">
            <strong>disabled</strong> : Désactive le champ.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">value="Non modifiable"</span> 
                        <span class="variable">disabled</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Un champ désactivé ne peut pas être modifié ni envoyé.
                </p>
            </div>
        </li>

        <!-- readonly -->
        <li id="readonly">
            <strong>readonly</strong> : Rend le champ non modifiable.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="text"</span> 
                        <span class="variable">value="Lecture seule"</span> 
                        <span class="variable">readonly</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `readonly` pour afficher une valeur fixe mais sélectionnable.
                </p>
            </div>
        </li>

        <!-- min et max -->
        <li id="min">
            <strong>min</strong> et <strong>max</strong> : Valeurs minimum et maximum pour les champs numériques et de date.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="number"</span> 
                        <span class="variable">min="1"</span> 
                        <span class="variable">max="10"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Limitez les valeurs acceptées dans une plage définie.
                </p>
            </div>
        </li>

        <!-- step -->
        <li id="step">
            <strong>step</strong> : Incrémentation pour les champs numériques.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;input</span> 
                        <span class="variable">type="number"</span> 
                        <span class="variable">step="0.5"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `step` pour contrôler les intervalles des valeurs.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs de la balise <form> -->
<div class="col-md-12 mb-4" id="form-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-edit"></i> Attributs de la balise &lt;form&gt;
    </h3>
    <ul>
        <!-- action -->
        <li id="action">
            <strong>action</strong> : URL où envoyer les données du formulaire.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form</span> 
                        <span class="variable">action="/submit-form"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez l’URL du serveur ou de l’API pour traiter les données soumises.
                </p>
            </div>
        </li>

        <!-- method -->
        <li id="method">
            <strong>method</strong> : Méthode de soumission (`GET` ou `POST`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form</span> 
                        <span class="variable">method="POST"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `POST` pour envoyer des données sensibles ou complexes.
                </p>
            </div>
        </li>

        <!-- enctype -->
        <li id="enctype">
            <strong>enctype</strong> : Encodage des données lors de l’envoi.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form</span> 
                        <span class="variable">enctype="multipart/form-data"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Nécessaire pour envoyer des fichiers via un formulaire.
                </p>
            </div>
        </li>

        <!-- target -->
        <li id="target">
            <strong>target</strong> : Destination de la soumission.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form</span> 
                        <span class="variable">action="/submit-form"</span> 
                        <span class="variable">target="_blank"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ouvre la réponse de la soumission dans un nouvel onglet.
                </p>
            </div>
        </li>

        <!-- autocomplete -->
        <li id="autocomplete">
            <strong>autocomplete</strong> : Active/désactive l'auto-complétion pour le formulaire.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;form</span> 
                        <span class="variable">autocomplete="off"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/form&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `off` pour désactiver l'auto-complétion des navigateurs.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs de la balise <button> -->
<div class="col-md-12 mb-4" id="button-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-hand-pointer"></i> Attributs de la balise &lt;button&gt;
    </h3>
    <ul>
        <!-- type -->
        <li id="type-button">
            <strong>type</strong> : Spécifie le type de bouton (`button`, `submit`, `reset`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">type="submit"</span>
                        <span class="keyword">&gt;</span>Envoyer<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `submit` pour envoyer un formulaire, `reset` pour le réinitialiser, ou `button` pour une action personnalisée.
                </p>
            </div>
        </li>

        <!-- disabled -->
        <li id="disabled-button">
            <strong>disabled</strong> : Désactive le bouton.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">disabled</span>
                        <span class="keyword">&gt;</span>Non cliquable<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Un bouton désactivé ne peut pas être utilisé ou cliqué.
                </p>
            </div>
        </li>

        <!-- name -->
        <li id="name-button">
            <strong>name</strong> : Nom du bouton, souvent utilisé pour identifier des actions spécifiques.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">name="action"</span> 
                        <span class="variable">type="submit"</span>
                        <span class="keyword">&gt;</span>Valider<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : L'attribut `name` est souvent utilisé pour transmettre une action précise lors de la soumission du formulaire.
                </p>
            </div>
        </li>

        <!-- value -->
        <li id="value-button">
            <strong>value</strong> : Valeur associée au bouton (utile pour les actions).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;button</span> 
                        <span class="variable">name="action"</span> 
                        <span class="variable">value="delete"</span> 
                        <span class="variable">type="submit"</span>
                        <span class="keyword">&gt;</span>Supprimer<span class="keyword">&lt;/button&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `value` pour transmettre des informations spécifiques avec le formulaire.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs de la balise <textarea> -->
<div class="col-md-12 mb-4" id="textarea-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-align-left"></i> Attributs de la balise &lt;textarea&gt;
    </h3>
    <ul>
        <!-- rows -->
        <li id="rows">
            <strong>rows</strong> : Nombre de lignes de la zone de texte.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;textarea</span> 
                        <span class="variable">rows="5"</span> 
                        <span class="keyword">&gt;&lt;/textarea&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `rows` pour définir la hauteur de la zone de texte en nombre de lignes.
                </p>
            </div>
        </li>

        <!-- cols -->
        <li id="cols">
            <strong>cols</strong> : Nombre de colonnes de la zone de texte.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;textarea</span> 
                        <span class="variable">cols="30"</span> 
                        <span class="keyword">&gt;&lt;/textarea&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `cols` pour définir la largeur de la zone de texte en nombre de colonnes.
                </p>
            </div>
        </li>

        <!-- maxlength -->
        <li id="maxlength">
            <strong>maxlength</strong> : Nombre maximum de caractères.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;textarea</span> 
                        <span class="variable">maxlength="200"</span> 
                        <span class="keyword">&gt;&lt;/textarea&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Limitez la saisie de l'utilisateur à un nombre spécifique de caractères.
                </p>
            </div>
        </li>

        <!-- placeholder -->
        <li id="placeholder-textarea">
            <strong>placeholder</strong> : Texte indicatif dans la zone de texte.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;textarea</span> 
                        <span class="variable">placeholder="Entrez votre message ici"</span> 
                        <span class="keyword">&gt;&lt;/textarea&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez un guide pour aider l'utilisateur à comprendre l'utilisation du champ.
                </p>
            </div>
        </li>

        <!-- readonly -->
        <li id="readonly-textarea">
            <strong>readonly</strong> : Rend la zone de texte non modifiable.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;textarea</span> 
                        <span class="variable">readonly</span> 
                        <span class="keyword">&gt;Texte non modifiable&lt;/textarea&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Affiche une valeur fixe que l'utilisateur ne peut pas modifier.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs pour la balise <table> et ses éléments -->
<div class="col-md-12 mb-4" id="table-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-table"></i> Attributs pour la balise &lt;table&gt; et ses éléments
    </h3>
    <ul>
        <!-- border -->
        <li id="border">
            <strong>border</strong> : Largeur de la bordure du tableau.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;table</span> 
                        <span class="variable">border="1"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/table&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez `border="1"` pour afficher une bordure simple autour du tableau.
                </p>
            </div>
        </li>

        <!-- cellpadding -->
        <li id="cellpadding">
            <strong>cellpadding</strong> : Espace intérieur des cellules.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;table</span> 
                        <span class="variable">cellpadding="10"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/table&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `cellpadding` pour ajouter de l'espace entre le contenu et les bordures des cellules.
                </p>
            </div>
        </li>

        <!-- cellspacing -->
        <li id="cellspacing">
            <strong>cellspacing</strong> : Espace entre les cellules.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;table</span> 
                        <span class="variable">cellspacing="5"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/table&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez `cellspacing` pour séparer les cellules du tableau.
                </p>
            </div>
        </li>

        <!-- width -->
        <li id="width-table">
            <strong>width</strong> : Largeur du tableau.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;table</span> 
                        <span class="variable">width="100%"</span>
                        <span class="keyword">&gt;</span>
                        <span class="variable">...</span>
                        <span class="keyword">&lt;/table&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `width="100%"` pour que le tableau s'adapte à la largeur de la page.
                </p>
            </div>
        </li>

        <!-- colspan -->
        <li id="colspan">
            <strong>colspan</strong> : Fusion de colonnes pour &lt;td&gt; et &lt;th&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;td</span> 
                        <span class="variable">colspan="2"</span>
                        <span class="keyword">&gt;</span>Fusionné sur 2 colonnes<span class="keyword">&lt;/td&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Fusionnez plusieurs colonnes pour une cellule plus large.
                </p>
            </div>
        </li>

        <!-- rowspan -->
        <li id="rowspan">
            <strong>rowspan</strong> : Fusion de lignes pour &lt;td&gt; et &lt;th&gt;.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;td</span> 
                        <span class="variable">rowspan="2"</span>
                        <span class="keyword">&gt;</span>Fusionné sur 2 lignes<span class="keyword">&lt;/td&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Fusionnez plusieurs lignes pour une cellule plus haute.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Attributs de la balise <audio> et <video> -->
<div class="col-md-12 mb-4" id="media-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-photo-video"></i> Attributs pour &lt;audio&gt; et &lt;video&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-audio-video">
            <strong>src</strong> : Chemin du fichier média.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez le chemin du fichier pour le lire.
                </p>
            </div>
        </li>

        <!-- controls -->
        <li id="controls">
            <strong>controls</strong> : Affiche les contrôles de lecture.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">controls</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `controls` pour ajouter des boutons de lecture, pause, volume, etc.
                </p>
            </div>
        </li>

        <!-- autoplay -->
        <li id="autoplay">
            <strong>autoplay</strong> : Démarre automatiquement la lecture.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">autoplay</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : La lecture commence automatiquement dès que la page est chargée.
                </p>
            </div>
        </li>

        <!-- loop -->
        <li id="loop">
            <strong>loop</strong> : Lit en boucle.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">loop</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Le fichier sera lu en boucle après la fin.
                </p>
            </div>
        </li>

        <!-- muted -->
        <li id="mute">
            <strong>muted</strong> : Démarre sans son.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">muted</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Le média est muet par défaut au démarrage.
                </p>
            </div>
        </li>

        <!-- poster -->
        <li id="poster">
            <strong>poster</strong> : Image affichée avant la lecture de la vidéo.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">poster="thumbnail.jpg"</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez une image de prévisualisation pour vos vidéos.
                </p>
            </div>
        </li>
    </ul>
</div>

    </div>
</div>

<div class="content-section" id="remaining-attributes" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
<h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px; display: flex; align-items: center;">
    <i class="fas fa-cogs icon" style="margin-right: 10px;"></i> Attributs complémentaires pour toutes les balises HTML
</h2>
<p style="font-size: 1.1em; color: #333; background-color: #f9f9f9; padding: 15px; border-radius: 5px; border-left: 5px solid #1e88e5; line-height: 1.8;">
    Dans cette section, vous découvrirez des attributs supplémentaires applicables à diverses balises HTML. 
    Ces attributs permettent d’améliorer la personnalisation, le comportement et l'accessibilité de vos éléments HTML. 
    Qu'il s'agisse de définir des métadonnées, d'améliorer l'interactivité ou d'ajouter des informations de contexte, ces options vous aident à enrichir votre code de manière efficace.
</p>
<div class="highlight" style="background-color: #fffbdd; padding: 10px; border-radius: 5px; margin-top: 15px; font-size: 1.1em;">
    <i class="fas fa-lightbulb" style="color: #ffc107; margin-right: 8px;"></i>
    <em>Astuce :</em> Expérimentez avec ces attributs pour optimiser l'expérience utilisateur et le référencement (SEO) de vos pages.
</div>


<!-- Balise <meta> -->
<div class="col-md-12 mb-4" id="meta-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-tags"></i> Attributs de la balise &lt;meta&gt;
    </h3>
    <ul>
        <!-- name -->
        <li id="name-meta">
            <strong>name</strong> : Définit le type de métadonnée (ex. `description`, `keywords`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meta</span> 
                        <span class="variable">name="description"</span> 
                        <span class="variable">content="Description de la page"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Fournit des informations sur la page pour les moteurs de recherche.
                </p>
            </div>
        </li>

        <!-- content -->
        <li id="content-meta">
            <strong>content</strong> : Le contenu de la métadonnée.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meta</span> 
                        <span class="variable">name="keywords"</span> 
                        <span class="variable">content="HTML, CSS, tutoriel"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez des mots-clés pour améliorer le référencement (SEO).
                </p>
            </div>
        </li>

        <!-- charset -->
        <li id="charset-meta">
            <strong>charset</strong> : Définit l'encodage des caractères (ex. `UTF-8`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meta</span> 
                        <span class="variable">charset="UTF-8"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez `UTF-8` pour garantir la compatibilité des caractères spéciaux.
                </p>
            </div>
        </li>

        <!-- http-equiv -->
        <li id="http">
            <strong>http-equiv</strong> : Fournit des informations HTTP à la page (ex. `refresh`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meta</span> 
                        <span class="variable">http-equiv="refresh"</span> 
                        <span class="variable">content="30"</span> 
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Recharge la page toutes les 30 secondes.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <link> -->
<div class="col-md-12 mb-4" id="link-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-link"></i> Attributs de la balise &lt;link&gt;
    </h3>
    <ul>
        <!-- href -->
        <li id="href-link">
            <strong>href</strong> : URL de la ressource liée (ex. fichier CSS).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;link</span> 
                        <span class="variable">href="styles.css"</span> 
                        <span class="variable">rel="stylesheet"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : L'attribut `href` spécifie le chemin vers le fichier CSS.
                </p>
            </div>
        </li>

        <!-- rel -->
        <li id="rel-link">
            <strong>rel</strong> : Relation entre le document et la ressource liée (ex. `stylesheet`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;link</span> 
                        <span class="variable">rel="icon"</span> 
                        <span class="variable">href="favicon.ico"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `rel="icon"` pour l'icône de la page ou `rel="stylesheet"` pour le fichier CSS.
                </p>
            </div>
        </li>

        <!-- type -->
        <li id="type-link">
            <strong>type</strong> : Type MIME de la ressource.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;link</span> 
                        <span class="variable">href="styles.css"</span> 
                        <span class="variable">rel="stylesheet"</span> 
                        <span class="variable">type="text/css"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Bien que rarement nécessaire aujourd'hui, `type` spécifie le format de la ressource (ex. `text/css`).
                </p>
            </div>
        </li>

        <!-- media -->
        <li id="media-link">
            <strong>media</strong> : Définit le type de média pour appliquer la ressource (ex. `screen`, `print`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;link</span> 
                        <span class="variable">href="print.css"</span> 
                        <span class="variable">rel="stylesheet"</span> 
                        <span class="variable">media="print"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `media="print"` pour des styles spécifiques aux impressions.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <iframe> -->
<div class="col-md-12 mb-4" id="iframe-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-window-maximize"></i> Attributs de la balise &lt;iframe&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-iframe">
            <strong>src</strong> : URL du contenu à afficher.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">width="600"</span> 
                        <span class="variable">height="400"</span>
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Chargez un site ou une application dans une zone définie de votre page.
                </p>
            </div>
        </li>

        <!-- width -->
        <li id="width-iframe">
            <strong>width</strong> : Largeur de l’iframe.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">width="800"</span> 
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez une largeur en pixels ou en pourcentage.
                </p>
            </div>
        </li>

        <!-- height -->
        <li id="height-iframe">
            <strong>height</strong> : Hauteur de l’iframe.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">height="600"</span> 
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez une hauteur en pixels ou en pourcentage.
                </p>
            </div>
        </li>

        <!-- loading -->
        <li id="loading-iframe">
            <strong>loading</strong> : Mode de chargement (ex. `lazy`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">loading="lazy"</span> 
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `lazy` pour différer le chargement jusqu'à ce que l'iframe soit visible.
                </p>
            </div>
        </li>

        <!-- allowfullscreen -->
        <li id="allowfullscreen">
            <strong>allowfullscreen</strong> : Permet le mode plein écran.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">allowfullscreen</span>
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez `allowfullscreen` pour permettre aux utilisateurs d’afficher le contenu en plein écran.
                </p>
            </div>
        </li>

        <!-- frameborder -->
        <li id="frameborder">
            <strong>frameborder</strong> : Affiche ou masque la bordure autour de l'iframe.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;iframe</span> 
                        <span class="variable">src="https://example.com"</span> 
                        <span class="variable">frameborder="0"</span>
                        <span class="keyword">&gt;&lt;/iframe&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `frameborder="0"` pour supprimer la bordure par défaut.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <audio> -->
<div class="col-md-12 mb-4" id="audio-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-music"></i> Attributs de la balise &lt;audio&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-audio">
            <strong>src</strong> : Chemin du fichier audio.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez le chemin d’un fichier audio pour le lire sur la page.
                </p>
            </div>
        </li>

        <!-- controls -->
        <li id="controls-audio">
            <strong>controls</strong> : Affiche les contrôles de lecture.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">controls</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez `controls` pour permettre à l'utilisateur de lire, mettre en pause ou ajuster le volume.
                </p>
            </div>
        </li>

        <!-- autoplay -->
        <li id="autoplay-audio">
            <strong>autoplay</strong> : Lit automatiquement le fichier audio.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">autoplay</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : La lecture de l’audio commence dès que la page est chargée.
                </p>
            </div>
        </li>

        <!-- loop -->
        <li id="loop-audio">
            <strong>loop</strong> : Lit en boucle.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">loop</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : L’audio est rejoué automatiquement après la fin.
                </p>
            </div>
        </li>

        <!-- muted -->
        <li id="muted-audio">
            <strong>muted</strong> : Lit l’audio en mode muet.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;audio</span> 
                        <span class="variable">src="audio.mp3"</span> 
                        <span class="variable">muted</span>
                        <span class="keyword">&gt;&lt;/audio&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Démarrez l’audio avec le son désactivé par défaut.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <video> -->
<div class="col-md-12 mb-4" id="video-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-video"></i> Attributs de la balise &lt;video&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-video">
            <strong>src</strong> : Chemin du fichier vidéo.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">width="640"</span> 
                        <span class="variable">height="360"</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez l'URL de la vidéo que vous souhaitez afficher sur la page.
                </p>
            </div>
        </li>

        <!-- controls -->
        <li id="controls-video">
            <strong>controls</strong> : Affiche les contrôles de lecture.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">controls</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez des boutons de lecture, pause, volume et autres options de contrôle.
                </p>
            </div>
        </li>

        <!-- autoplay -->
        <li id="autoplay-video">
            <strong>autoplay</strong> : Lance automatiquement la vidéo.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">autoplay</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : La lecture démarre dès que la page est chargée.
                </p>
            </div>
        </li>

        <!-- loop -->
        <li id="loop-video">
            <strong>loop</strong> : Joue la vidéo en boucle.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">loop</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : La vidéo redémarre automatiquement après sa fin.
                </p>
            </div>
        </li>

        <!-- muted -->
        <li id="muted-video">
            <strong>muted</strong> : Commence la lecture sans son.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">muted</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : La vidéo commence en silence par défaut.
                </p>
            </div>
        </li>

        <!-- poster -->
        <li id="poster-video">
            <strong>poster</strong> : Image affichée avant le début de la lecture.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;video</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">poster="thumbnail.jpg"</span>
                        <span class="keyword">&gt;&lt;/video&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez une vignette ou une image de présentation pour la vidéo.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <script> -->
<div class="col-md-12 mb-4" id="script-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-code"></i> Attributs de la balise &lt;script&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-script">
            <strong>src</strong> : URL du fichier JavaScript externe.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;script</span> 
                        <span class="variable">src="app.js"</span>
                        <span class="keyword">&gt;&lt;/script&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Chargez un fichier JavaScript externe dans votre page.
                </p>
            </div>
        </li>

        <!-- type -->
        <li id="type-script">
            <strong>type</strong> : Type MIME du script (généralement `text/javascript`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;script</span> 
                        <span class="variable">type="text/javascript"</span>
                        <span class="keyword">&gt;</span>
                        console.log("Bonjour !");
                        <span class="keyword">&lt;/script&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Bien que rarement nécessaire aujourd’hui, il spécifie le type de script.
                </p>
            </div>
        </li>

        <!-- async -->
        <li id="async-script">
            <strong>async</strong> : Exécute le script de manière asynchrone.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;script</span> 
                        <span class="variable">src="app.js"</span> 
                        <span class="variable">async</span>
                        <span class="keyword">&gt;&lt;/script&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `async` pour charger le script en parallèle et l'exécuter dès qu'il est prêt.
                </p>
            </div>
        </li>

        <!-- defer -->
        <li id="defer-script">
            <strong>defer</strong> : Retarde l’exécution du script jusqu'à la fin du chargement de la page.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;script</span> 
                        <span class="variable">src="app.js"</span> 
                        <span class="variable">defer</span>
                        <span class="keyword">&gt;&lt;/script&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Les scripts `defer` sont exécutés dans l’ordre où ils apparaissent, après le chargement complet de la page.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <source> (utilisée dans <picture>, <audio>, <video>) -->
<div class="col-md-12 mb-4" id="source-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-file-alt"></i> Attributs de la balise &lt;source&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-source">
            <strong>src</strong> : Chemin de la source.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="video.mp4"</span> 
                        <span class="variable">type="video/mp4"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez l'URL de la source média à utiliser dans un lecteur audio ou vidéo.
                </p>
            </div>
        </li>

        <!-- type -->
        <li id="type-source">
            <strong>type</strong> : Type MIME de la source (ex. `image/webp`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="image.webp"</span> 
                        <span class="variable">type="image/webp"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez le format de la source pour s'assurer qu'elle est correctement interprétée.
                </p>
            </div>
        </li>

        <!-- media -->
        <li id="media-source">
            <strong>media</strong> : Définit les conditions pour utiliser cette source (ex. `min-width: 800px`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;source</span> 
                        <span class="variable">src="large-image.jpg"</span> 
                        <span class="variable">media="(min-width: 800px)"</span> 
                        <span class="variable">type="image/jpeg"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez l'attribut `media` dans une balise `<picture>` pour fournir des images adaptées aux différentes tailles d'écran.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <track> (sous-titres et autres métadonnées dans <video> et <audio>) -->
<div class="col-md-12 mb-4" id="track-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-closed-captioning"></i> Attributs de la balise &lt;track&gt;
    </h3>
    <ul>
        <!-- src -->
        <li id="src-track">
            <strong>src</strong> : URL du fichier de sous-titres.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;track</span> 
                        <span class="variable">src="subtitles.vtt"</span> 
                        <span class="variable">kind="subtitles"</span>
                        <span class="variable">srclang="en"</span>
                        <span class="variable">label="English"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez le chemin du fichier de sous-titres pour lier les sous-titres à une vidéo.
                </p>
            </div>
        </li>

        <!-- kind -->
        <li id="kind-track">
            <strong>kind</strong> : Type de piste (ex. `subtitles`, `captions`).
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;track</span> 
                        <span class="variable">src="captions.vtt"</span> 
                        <span class="variable">kind="captions"</span>
                        <span class="variable">srclang="fr"</span>
                        <span class="variable">label="Français"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez `kind="subtitles"` pour des sous-titres ou `kind="captions"` pour des légendes.
                </p>
            </div>
        </li>

        <!-- srclang -->
        <li id="srclang-track">
            <strong>srclang</strong> : Langue de la piste.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;track</span> 
                        <span class="variable">src="subtitles.vtt"</span> 
                        <span class="variable">srclang="es"</span>
                        <span class="variable">label="Español"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez l'attribut `srclang` pour spécifier la langue des sous-titres (ex. `en`, `fr`, `es`).
                </p>
            </div>
        </li>

        <!-- label -->
        <li id="label-track">
            <strong>label</strong> : Nom de la piste affichée.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;track</span> 
                        <span class="variable">src="subtitles.vtt"</span> 
                        <span class="variable">label="English Subtitles"</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Le `label` est affiché dans le menu des sous-titres du lecteur vidéo.
                </p>
            </div>
        </li>

        <!-- default -->
        <li id="default-track">
            <strong>default</strong> : Active cette piste par défaut.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;track</span> 
                        <span class="variable">src="subtitles.vtt"</span> 
                        <span class="variable">kind="subtitles"</span> 
                        <span class="variable">srclang="en"</span> 
                        <span class="variable">default</span>
                        <span class="keyword">/&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Ajoutez `default` pour activer automatiquement cette piste lors de la lecture.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <time> -->
<div class="col-md-12 mb-4" id="time-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-clock"></i> Attributs de la balise &lt;time&gt;
    </h3>
    <ul>
        <!-- datetime -->
        <li id="datetime-time">
            <strong>datetime</strong> : Valeur date/heure de l'élément au format ISO 8601.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;time</span> 
                        <span class="variable">datetime="2024-12-03T14:30"</span>
                        <span class="keyword">&gt;</span>
                        3 décembre 2024, 14:30
                        <span class="keyword">&lt;/time&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `datetime` pour rendre la date ou l'heure compréhensible par les machines, comme les moteurs de recherche.
                </p>
            </div>
        </li>
    </ul>
</div>


 <!-- Balise <progress> -->
<div class="col-md-12 mb-4" id="progress-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-tasks"></i> Attributs de la balise &lt;progress&gt;
    </h3>
    <ul>
        <!-- value -->
        <li id="value-progress">
            <strong>value</strong> : Valeur actuelle du progrès.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;progress</span> 
                        <span class="variable">value="70"</span> 
                        <span class="variable">max="100"</span>
                        <span class="keyword">&gt;</span>
                        70%
                        <span class="keyword">&lt;/progress&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez une valeur pour indiquer l'état actuel d'une tâche ou d'un téléchargement.
                </p>
            </div>
        </li>

        <!-- max -->
        <li id="max-progress">
            <strong>max</strong> : Valeur maximale de la progression.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;progress</span> 
                        <span class="variable">value="30"</span> 
                        <span class="variable">max="50"</span>
                        <span class="keyword">&gt;</span>
                        60%
                        <span class="keyword">&lt;/progress&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez une limite supérieure pour la progression à l'aide de `max`.
                </p>
            </div>
        </li>
    </ul>
</div>


<!-- Balise <meter> -->
<div class="col-md-12 mb-4" id="meter-attributes">
    <h3 style="color: #388e3c;">
        <i class="fas fa-chart-bar"></i> Attributs de la balise &lt;meter&gt;
    </h3>
    <ul>
        <!-- value -->
        <li id="value-meter">
            <strong>value</strong> : Valeur de la mesure actuelle.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="5"</span> 
                        <span class="variable">min="0"</span> 
                        <span class="variable">max="10"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Spécifiez la valeur actuelle de la mesure pour indiquer un niveau ou un état.
                </p>
            </div>
        </li>

        <!-- min -->
        <li id="min-meter">
            <strong>min</strong> : Valeur minimale.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="3"</span> 
                        <span class="variable">min="0"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `min` pour définir le début de l'échelle.
                </p>
            </div>
        </li>

        <!-- max -->
        <li id="max-meter">
            <strong>max</strong> : Valeur maximale.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="7"</span> 
                        <span class="variable">max="10"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `max` pour fixer la limite supérieure de l'échelle.
                </p>
            </div>
        </li>

        <!-- low -->
        <li id="low-meter">
            <strong>low</strong> : Valeur en dessous de laquelle la mesure est basse.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="2"</span> 
                        <span class="variable">low="3"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Définissez une limite basse à l'aide de l'attribut `low`.
                </p>
            </div>
        </li>

        <!-- high -->
        <li id="high-meter">
            <strong>high</strong> : Valeur au-dessus de laquelle la mesure est élevée.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="8"</span> 
                        <span class="variable">high="7"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `high` pour définir une limite haute sur l'échelle.
                </p>
            </div>
        </li>

        <!-- optimum -->
        <li id="optimum-meter">
            <strong>optimum</strong> : Valeur optimale pour cette mesure.
            <div class="example-box">
                <pre>
                    <code>
                        <span class="keyword">&lt;meter</span> 
                        <span class="variable">value="5"</span> 
                        <span class="variable">optimum="6"</span>
                        <span class="keyword">&gt;&lt;/meter&gt;</span>
                    </code>
                </pre>
                <p class="highlight">
                    Exemple : Utilisez `optimum` pour indiquer la valeur idéale ou recommandée.
                </p>
            </div>
        </li>
    </ul>
</div>

</div>

<!-- Conclusion -->
<div class="content-section" id="conclusion" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; margin-top: 20px;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; display: flex; align-items: center;">
        <i class="fas fa-check-circle icon" style="margin-right: 10px;"></i> Conclusion
    </h2>
    <p style="font-size: 1.1em; color: #333; line-height: 1.8;">
        HTML est la pierre angulaire de toute page web. Une maîtrise des balises de base ainsi que des concepts plus avancés 
        est essentielle pour créer des pages web bien structurées, accessibles et performantes. En combinant 
        ces connaissances avec des outils modernes comme CSS et JavaScript, vous serez capable de construire des expériences 
        utilisateur riches et captivantes.
    </p>
    <div class="highlight" style="background-color: #e8f5e9; padding: 15px; border-radius: 5px; border-left: 5px solid #388e3c;">
        <i class="fas fa-lightbulb" style="color: #66bb6a; margin-right: 10px;"></i>
        <em>Astuce :</em> Continuez à expérimenter avec les balises et explorez les fonctionnalités avancées d'HTML5 pour repousser les limites de vos projets web.
    </div>
</div>


        </div>
    </div>

    <!-- Bootstrap JS et jQuery pour les modals et le dropdown -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>
