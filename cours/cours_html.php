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
            <div class="content-section" id="intro" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
    <h1 style="color: #1e88e5; font-weight: bold; font-size: 2em; margin-bottom: 15px;">
        <i class="fas fa-book-open icon"></i> Introduction à HTML
    </h1>
    <p style="font-size: 1.1em; color: #333;">
        HTML, ou <strong>HyperText Markup Language</strong>, est le langage de balisage standard utilisé pour créer la structure et le contenu des pages web. En définissant des éléments et des sections avec des balises, HTML permet de construire l'architecture de la page, de gérer le texte, les images, les liens, et d'autres éléments visuels.
    </p>
    <p style="font-size: 1.1em; color: #333;">
        Inventé en 1991 par le physicien Tim Berners-Lee, HTML est à l'origine du World Wide Web et est devenu depuis une norme utilisée dans le développement de tous les sites internet. Aujourd'hui, la version la plus couramment utilisée est <strong>HTML5</strong>, qui inclut des fonctionnalités avancées pour gérer le multimédia, l'animation, et l'interaction.
    </p>
    <h3 style="color: #388e3c; font-weight: bold; margin-top: 15px;">Pourquoi apprendre HTML ?</h3>
    <ul style="font-size: 1.1em; color: #333;">
        <li><strong>Essentiel pour le développement web</strong> : HTML est la base sur laquelle reposent tous les sites web. Maîtriser HTML est indispensable pour créer du contenu accessible et structuré.</li>
        <li><strong>Facile à apprendre</strong> : HTML est un langage de balisage simple, idéal pour les débutants souhaitant apprendre le développement web.</li>
        <li><strong>Polyvalent et compatible</strong> : HTML fonctionne sur toutes les plateformes et navigateurs, garantissant une compatibilité maximale.</li>
    </ul>
</div>

<div class="content-section" id="all-tags" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-code icon"></i> Liste Complète des Balises HTML
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Cette section présente une liste complète des balises HTML disponibles en HTML5, accompagnée d'une description de leur rôle et utilisation.
    </p>

    <div class="row">
        <div class="col-md-6 mb-4" id="structure">
            <h3 style="color: #388e3c;">Balises de Structure</h3>
            <ul>
                <li id="doctype"><strong>&lt;!DOCTYPE&gt;</strong> : Indique le type de document HTML.</li>
                <li id="#html"><strong>&lt;html&gt;</strong> : Conteneur principal pour le contenu HTML.</li>
                <li id="#head"><strong>&lt;head&gt;</strong> : Contient des métadonnées sur le document.</li>
                <li id="#title"><strong>&lt;title&gt;</strong> : Définit le titre de la page (visible dans l'onglet du navigateur).</li>
                <li id="#body"><strong>&lt;body&gt;</strong> : Contient le contenu principal de la page.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="text-formatting">
            <h3 style="color: #388e3c;">Balises de Formatage de Texte</h3>
            <ul>
                <li id="#h1-h6"><strong>&lt;h1&gt; à &lt;h6&gt;</strong> : Titres, du plus grand (&lt;h1&gt;) au plus petit (&lt;h6&gt;).</li>
                <li id="#p"><strong>&lt;p&gt;</strong> : Paragraphe de texte.</li>
                <li id="#br"><strong>&lt;br&gt;</strong> : Saut de ligne.</li>
                <li id="#hr"><strong>&lt;hr&gt;</strong> : Ligne horizontale.</li>
                <li id="#strong"><strong>&lt;strong&gt;</strong> : Texte en gras avec importance.</li>
                <li id="#b"><strong>&lt;b&gt;</strong> : Texte en gras, sans importance particulière.</li>
                <li id="#i"><strong>&lt;i&gt;</strong> : Texte en italique.</li>
                <li id="#em"><strong>&lt;em&gt;</strong> : Texte en italique avec emphase.</li>
                <li id="#small"><strong>&lt;small&gt;</strong> : Texte de petite taille.</li>
                <li id="#mark"><strong>&lt;mark&gt;</strong> : Texte surligné.</li>
                <li id="#blockquote"><strong>&lt;blockquote&gt;</strong> : Bloc de citation.</li>
                <li id="#pre"><strong>&lt;pre&gt;</strong> : Texte préformaté.</li>
                <li id="#code"><strong>&lt;code&gt;</strong> : Texte de code.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="media">
            <h3 style="color: #388e3c;">Balises Multimédia</h3>
            <ul>
                <li id="#img"><strong>&lt;img&gt;</strong> : Image.</li>
                <li id="#audio"><strong>&lt;audio&gt;</strong> : Lecture audio.</li>
                <li id="#video"><strong>&lt;video&gt;</strong> : Lecture vidéo.</li>
                <li id="#source"><strong>&lt;source&gt;</strong> : Source pour &lt;audio&gt; et &lt;video&gt;.</li>
                <li id="#track"><strong>&lt;track&gt;</strong> : Sous-titres pour les vidéos.</li>
                <li id="#iframe"><strong>&lt;iframe&gt;</strong> : Contenu externe intégré (comme des pages web).</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="lists">
            <h3 style="color: #388e3c;">Balises de Listes</h3>
            <ul>
                <li id="#ul"><strong>&lt;ul&gt;</strong> : Liste non ordonnée (avec puces).</li>
                <li id="#ol"><strong>&lt;ol&gt;</strong> : Liste ordonnée (avec numéros).</li>
                <li id="#li"><strong>&lt;li&gt;</strong> : Élément de liste (utilisé dans &lt;ul&gt; et &lt;ol&gt;).</li>
                <li id="#dl"><strong>&lt;dl&gt;</strong> : Liste de définition.</li>
                <li id="#dt"><strong>&lt;dt&gt;</strong> : Terme dans une liste de définition.</li>
                <li id="#dd"><strong>&lt;dd&gt;</strong> : Description dans une liste de définition.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="tables">
            <h3 style="color: #388e3c;">Balises de Tableaux</h3>
            <ul>
                <li id="#table"><strong>&lt;table&gt;</strong> : Débute un tableau.</li>
                <li id="#tr"><strong>&lt;tr&gt;</strong> : Ligne de tableau.</li>
                <li id="#td"><strong>&lt;td&gt;</strong> : Cellule de tableau.</li>
                <li id="#th"><strong>&lt;th&gt;</strong> : Cellule d'en-tête de tableau.</li>
                <li id="#caption"><strong>&lt;caption&gt;</strong> : Légende d'un tableau.</li>
                <li id="#thead"><strong>&lt;thead&gt;</strong> : Regroupe l'en-tête du tableau.</li>
                <li id="#tbody"><strong>&lt;tbody&gt;</strong> : Corps du tableau.</li>
                <li id="#tfoot"><strong>&lt;tfoot&gt;</strong> : Pied de tableau.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="forms">
            <h3 style="color: #388e3c;">Balises de Formulaires</h3>
            <ul>
                <li id="#form"><strong>&lt;form&gt;</strong> : Conteneur de formulaire.</li>
                <li id="#input"><strong>&lt;input&gt;</strong> : Champ de saisie.</li>
                <li id="#textarea"><strong>&lt;textarea&gt;</strong> : Zone de texte multi-ligne.</li>
                <li id="#button"><strong>&lt;button&gt;</strong> : Bouton cliquable.</li>
                <li id="#select"><strong>&lt;select&gt;</strong> : Menu déroulant.</li>
                <li id="#option"><strong>&lt;option&gt;</strong> : Option dans un menu déroulant.</li>
                <li id="#label"><strong>&lt;label&gt;</strong> : Étiquette pour champ de formulaire.</li>
                <li id="#fieldset"><strong>&lt;fieldset&gt;</strong> : Groupe de champs de formulaire.</li>
                <li id="#legend"><strong>&lt;legend&gt;</strong> : Légende d'un &lt;fieldset&gt;.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="semantic">
            <h3 style="color: #388e3c;">Balises Sémantiques</h3>
            <ul>
                <li id="#header"><strong>&lt;header&gt;</strong> : En-tête de page ou de section.</li>
                <li id="#nav"><strong>&lt;nav&gt;</strong> : Navigation principale.</li>
                <li id="#section"><strong>&lt;section&gt;</strong> : Section d'une page.</li>
                <li id="#acrticle"><strong>&lt;article&gt;</strong> : Contenu indépendant.</li>
                <li id="#aside"><strong>&lt;aside&gt;</strong> : Contenu secondaire.</li>
                <li id="#footer"><strong>&lt;footer&gt;</strong> : Pied de page.</li>
                <li id="#main"><strong>&lt;main&gt;</strong> : Contenu principal de la page.</li>
                <li id="#figure"><strong>&lt;figure&gt;</strong> : Conteneur pour éléments illustratifs.</li>
                <li id="#figcaption"><strong>&lt;figcaption&gt;</strong> : Légende pour &lt;figure&gt;.</li>
                <li id="#time"><strong>&lt;time&gt;</strong> : Indication d'heure ou de date.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="programming">
            <h3 style="color: #388e3c;">Balises pour Programmation et Scripts</h3>
            <ul>
                <li id="#script"><strong>&lt;script&gt;</strong> : Inclut ou référence du JavaScript.</li>
                <li id="#noscript"><strong>&lt;noscript&gt;</strong> : Contenu de secours si JavaScript est désactivé.</li>
                <li id="#canvas"><strong>&lt;canvas&gt;</strong> : Surface de dessin pour graphiques JavaScript.</li>
                <li id="#embed"><strong>&lt;embed&gt;</strong> : Insère des plugins (ex. Flash).</li>
                <li id="#object"><strong>&lt;object&gt;</strong> : Conteneur pour objets intégrés.</li>
                <li id="#param"><strong>&lt;param&gt;</strong> : Paramètre pour &lt;object&gt;.</li>
            </ul>
        </div>

        <div class="col-md-6 mb-4" id="other">
            <h3 style="color: #388e3c;">Autres Balises</h3>
            <ul>
                <li id="#details"><strong>&lt;details&gt;</strong> : Conteneur pour des informations complémentaires.</li>
                <li id="#summary"><strong>&lt;summary&gt;</strong> : Résumé pour &lt;details&gt;.</li>
                <li id="#dialog"><strong>&lt;dialog&gt;</strong> : Fenêtre de dialogue ou popup.</li>
                <li id="#data"><strong>&lt;data&gt;</strong> : Associe une valeur numérique ou texte à un contenu.</li>
                <li id="#output"><strong>&lt;output&gt;</strong> : Représente le résultat d'un calcul.</li>
                <li id="#progress"><strong>&lt;progress&gt;</strong> : Barre de progression.</li>
                <li id="#meter"><strong>&lt;meter&gt;</strong> : Mesure d'une valeur scalaire.</li>
            </ul>
        </div>
    </div>
</div>

<div class="content-section" id="all-attributes" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-cogs icon"></i> Liste Complète des Attributs HTML
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Cette section présente les attributs HTML les plus courants, accompagnés d'une brève description de leur rôle et effet d’action lorsqu'ils sont utilisés sur des balises spécifiques.
    </p>

    <!-- Attributs Universels -->
    <div class="row">
        <div class="col-md-6 mb-4" id="global-attributes">
            <h3 style="color: #388e3c;">Attributs Universels</h3>
            <ul>
                <li id="#id"><strong>id</strong> : Identifiant unique pour une balise. Utilisé pour les styles CSS et la manipulation DOM en JavaScript.</li>
                <li id="#class"><strong>class</strong> : Attribue une ou plusieurs classes CSS pour appliquer du style ou cibler des éléments dans JavaScript.</li>
                <li id="#style"><strong>style</strong> : Ajoute des styles CSS en ligne.</li>
                <li id="#title"><strong>title</strong> : Affiche un texte au survol de l’élément.</li>
                <li id="#lang"><strong>lang</strong> : Définit la langue de l’élément.</li>
                <li id="#data-*"><strong>data-*</strong> : Attribut personnalisé pour stocker des données supplémentaires dans un élément.</li>
                <li id="#hidden"><strong>hidden</strong> : Masque l’élément.</li>
                <li id="#tabindex"><strong>tabindex</strong> : Détermine l'ordre de tabulation de l’élément.</li>
            </ul>
        </div>

        <!-- Attributs de la balise <a> -->
        <div class="col-md-6 mb-4" id="a-attributes">
            <h3 style="color: #388e3c;">Attributs de la balise &lt;a&gt;</h3>
            <ul>
                <li id="#href"><strong>href</strong> : Spécifie l’URL de la page ou du fichier lié.</li>
                <li id="#target"><strong>target</strong> : Définit où ouvrir le lien (`_blank` pour un nouvel onglet, `_self` pour le même onglet, etc.).</li>
                <li id="#download"><strong>download</strong> : Télécharge le fichier au lieu de l’ouvrir.</li>
                <li id="#rel"><strong>rel</strong> : Définit la relation entre le document actuel et la ressource liée (utile pour SEO et sécurité).</li>
                <li id="#hreflang"><strong>hreflang</strong> : Indique la langue du document cible.</li>
                <li id="#type-a"><strong>type</strong> : Type MIME du lien cible.</li>
            </ul>
        </div>

        <!-- Attributs de la balise <img> -->
        <div class="col-md-6 mb-4" id="img-attributes">
            <h3 style="color: #388e3c;">Attributs de la balise &lt;img&gt;</h3>
            <ul>
                <li id="#src"><strong>src</strong> : Chemin de l’image.</li>
                <li id="#alt"><strong>alt</strong> : Texte alternatif affiché si l’image ne se charge pas (important pour l'accessibilité).</li>
                <li id="#width"><strong>width</strong> : Largeur de l’image.</li>
                <li id="#height"><strong>height</strong> : Hauteur de l’image.</li>
                <li id="#loading"><strong>loading</strong> : Définit le chargement paresseux (`lazy`) pour optimiser les performances.</li>
                <li id="#srcset"><strong>srcset</strong> : Définit plusieurs sources d’image pour s’adapter aux résolutions d’écran.</li>
            </ul>
        </div>

        <!-- Attributs de la balise <input> -->
        <div class="col-md-6 mb-4" id="input-attributes">
            <h3 style="color: #388e3c;">Attributs de la balise &lt;input&gt;</h3>
            <ul>
                <li id="#type-input"><strong>type</strong> : Définit le type de champ (text, password, email, etc.).</li>
                <li id="#name-input"><strong>name</strong> : Nom de l’élément utilisé lors de l’envoi du formulaire.</li>
                <li id="#value-input"><strong>value</strong> : Valeur par défaut ou actuelle du champ.</li>
                <li id="#placeholder-input"><strong>placeholder</strong> : Texte indicatif affiché lorsqu’aucune valeur n’est saisie.</li>
                <li id="#required-input"><strong>required</strong> : Rend le champ obligatoire pour la soumission du formulaire.</li>
                <li id="#disabled-input"><strong>disabled</strong> : Désactive le champ.</li>
                <li id="#readonly"><strong>readonly</strong> : Rend le champ non modifiable.</li>
                <li id="#min"><strong>min</strong> et <strong>max</strong> : Valeurs minimum et maximum pour les champs numériques et de date.</li>
                <li id="#step"><strong>step</strong> : Incrémentation pour les champs numériques.</li>
            </ul>
        </div>

        <!-- Attributs de la balise <form> -->
        <div class="col-md-6 mb-4" id="form-attributes">
            <h3 style="color: #388e3c;">Attributs de la balise &lt;form&gt;</h3>
            <ul>
                <li id="#action"><strong>action</strong> : URL où envoyer les données du formulaire.</li>
                <li id="#method"><strong>method</strong> : Méthode de soumission (`GET` ou `POST`).</li>
                <li id="#enctype"><strong>enctype</strong> : Encodage des données lors de l’envoi (multipart/form-data pour les fichiers).</li>
                <li id="#target"><strong>target</strong> : Destination de la soumission (ex. `_blank` pour un nouvel onglet).</li>
                <li id="#autocomplete"><strong>autocomplete</strong> : Active/désactive l'auto-complétion pour le formulaire.</li>
            </ul>
        </div>

        <!-- Attributs de la balise <button> -->
        <div class="col-md-6 mb-4" id="button-attributes">
            <h3 style="color: #388e3c;">Attributs de la balise &lt;button&gt;</h3>
            <ul>
                <li id="#type-button"><strong>type</strong> : Spécifie le type de bouton (`button`, `submit`, `reset`).</li>
                <li id="#disabled-button"><strong>disabled</strong> : Désactive le bouton.</li>
                <li id="#name-button"><strong>name</strong> : Nom du bouton, souvent utilisé pour identifier des actions spécifiques.</li>
                <li id="#value-button"><strong>value</strong> : Valeur associée au bouton (utile pour les actions).</li>
            </ul>
        </div>

        <!-- Attributs de la balise <textarea> -->
        <div class="col-md-6 mb-4" id="textarea-attributes">
            <h3 style="color: #388e3c;">Attributs de la balise &lt;textarea&gt;</h3>
            <ul>
                <li id="#rows"><strong>rows</strong> : Nombre de lignes de la zone de texte.</li>
                <li id="#cols"><strong>cols</strong> : Nombre de colonnes de la zone de texte.</li>
                <li id="#maxlength"><strong>maxlength</strong> : Nombre maximum de caractères.</li>
                <li id="#placeholer-textarea"><strong>placeholder</strong> : Texte indicatif dans la zone de texte.</li>
                <li id="#readonly-textarea"><strong>readonly</strong> : Rend la zone de texte non modifiable.</li>
            </ul>
        </div>

        <!-- Attributs pour la balise <table> et ses éléments -->
        <div class="col-md-6 mb-4" id="table-attributes">
            <h3 style="color: #388e3c;">Attributs pour la balise &lt;table&gt; et ses éléments</h3>
            <ul>
                <li id="#border"><strong>border</strong> : Largeur de la bordure du tableau.</li>
                <li id="#cellpadding"><strong>cellpadding</strong> : Espace intérieur des cellules.</li>
                <li id="#cellspacing"><strong>cellspacing</strong> : Espace entre les cellules.</li>
                <li id="#width-table"><strong>width</strong> : Largeur du tableau.</li>
                <li id="#colspan"><strong>colspan</strong> : Fusion de colonnes pour &lt;td&gt; et &lt;th&gt;.</li>
                <li id="#rowspan"><strong>rowspan</strong> : Fusion de lignes pour &lt;td&gt; et &lt;th&gt;.</li>
            </ul>
        </div>

        <!-- Attributs de la balise <audio> et <video> -->
        <div class="col-md-6 mb-4" id="media-attributes">
            <h3 style="color: #388e3c;">Attributs pour &lt;audio&gt; et &lt;video&gt;</h3>
            <ul>
                <li id="#src-audio-video"><strong>src</strong> : Chemin du fichier média.</li>
                <li id="#controls"><strong>controls</strong> : Affiche les contrôles de lecture.</li>
                <li id="#autoplay"><strong>autoplay</strong> : Démarre automatiquement la lecture.</li>
                <li id="#loop"><strong>loop</strong> : Lit en boucle.</li>
                <li id="#mute"><strong>muted</strong> : Démarre sans son.</li>
                <li id="#poster"><strong>poster</strong> : Image affichée avant la lecture de la vidéo.</li>
            </ul>
        </div>
    </div>
</div>

<div class="content-section" id="remaining-attributes" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; line-height: 1.8;">
    <h2 style="color: #1e88e5; font-weight: bold; font-size: 1.8em; margin-bottom: 15px;">
        <i class="fas fa-cogs icon"></i> Attributs Complémentaires pour Toutes les Balises HTML
    </h2>
    <p style="font-size: 1.1em; color: #333;">
        Cette section fournit les attributs spécifiques pour les balises HTML qui n'ont pas été abordées précédemment, offrant ainsi une vue d'ensemble de toutes les options de personnalisation.
    </p>

    <!-- Balise <meta> -->
    <div class="col-md-6 mb-4" id="meta-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;meta&gt;</h3>
        <ul>
            <li id="#name-meta"><strong>name</strong> : Définit le type de métadonnée (ex. `description`, `keywords`).</li>
            <li id="#content-meta"><strong>content</strong> : Le contenu de la métadonnée.</li>
            <li id="#charset-meta"><strong>charset</strong> : Définit l'encodage des caractères (ex. `UTF-8`).</li>
            <li id="#http"><strong>http-equiv</strong> : Fournit des informations HTTP à la page (ex. `refresh`).</li>
        </ul>
    </div>

    <!-- Balise <link> -->
    <div class="col-md-6 mb-4" id="link-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;link&gt;</h3>
        <ul>
            <li id="#href-link"><strong>href</strong> : URL de la ressource liée (ex. fichier CSS).</li>
            <li id="#rel-link"><strong>rel</strong> : Relation entre le document et la ressource liée (ex. `stylesheet`).</li>
            <li id="#type-link"><strong>type</strong> : Type MIME de la ressource.</li>
            <li id="#media-link"><strong>media</strong> : Définit le type de média pour appliquer la ressource (ex. `screen`, `print`).</li>
        </ul>
    </div>

    <!-- Balise <iframe> -->
    <div class="col-md-6 mb-4" id="iframe-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;iframe&gt;</h3>
        <ul>
            <li id="#src-iframe"><strong>src</strong> : URL du contenu à afficher.</li>
            <li id="#width-iframe"><strong>width</strong> : Largeur de l’iframe.</li>
            <li id="#height-iframe"><strong>height</strong> : Hauteur de l’iframe.</li>
            <li id="#loading-iframe"><strong>loading</strong> : Mode de chargement (ex. `lazy`).</li>
            <li id="#allowfullscreen"><strong>allowfullscreen</strong> : Permet le mode plein écran.</li>
            <li id="#frameborder"><strong>frameborder</strong> : Affiche ou masque la bordure autour de l'iframe.</li>
        </ul>
    </div>

    <!-- Balise <audio> -->
    <div class="col-md-6 mb-4" id="audio-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;audio&gt;</h3>
        <ul>
            <li id="#src-audio"><strong>src</strong> : Chemin du fichier audio.</li>
            <li id="#controls-audio"><strong>controls</strong> : Affiche les contrôles de lecture.</li>
            <li id="#autoplay-audio"><strong>autoplay</strong> : Lit automatiquement le fichier audio.</li>
            <li id="#loop-audio"><strong>loop</strong> : Lit en boucle.</li>
            <li id="#muted-audio"><strong>muted</strong> : Lit l’audio en mode muet.</li>
        </ul>
    </div>

    <!-- Balise <video> -->
    <div class="col-md-6 mb-4" id="video-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;video&gt;</h3>
        <ul>
            <li id="#src-video"><strong>src</strong> : Chemin du fichier vidéo.</li>
            <li id="#controls-video"><strong>controls</strong> : Affiche les contrôles de lecture.</li>
            <li id="#autoplay-video"><strong>autoplay</strong> : Lance automatiquement la vidéo.</li>
            <li id="#loop-video"><strong>loop</strong> : Joue la vidéo en boucle.</li>
            <li id="#muted-video"><strong>muted</strong> : Commence la lecture sans son.</li>
            <li id="#poster-video"><strong>poster</strong> : Image affichée avant le début de la lecture.</li>
        </ul>
    </div>

    <!-- Balise <script> -->
    <div class="col-md-6 mb-4" id="script-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;script&gt;</h3>
        <ul>
            <li id="#src-script"><strong>src</strong> : URL du fichier JavaScript externe.</li>
            <li id="#type-script"><strong>type</strong> : Type MIME du script (généralement `text/javascript`).</li>
            <li id="#async-script"><strong>async</strong> : Exécute le script de manière asynchrone.</li>
            <li id="#defer-script"><strong>defer</strong> : Retarde l’exécution du script jusqu'à la fin du chargement de la page.</li>
        </ul>
    </div>

    <!-- Balise <source> (utilisée dans <picture>, <audio>, <video>) -->
    <div class="col-md-6 mb-4" id="source-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;source&gt;</h3>
        <ul>
            <li id="#src-source"><strong>src</strong> : Chemin de la source.</li>
            <li id="#type-source"><strong>type</strong> : Type MIME de la source (ex. `image/webp`).</li>
            <li id="#media-source"><strong>media</strong> : Définit les conditions pour utiliser cette source (ex. `min-width: 800px`).</li>
        </ul>
    </div>

    <!-- Balise <track> (sous-titres et autres métadonnées dans <video> et <audio>) -->
    <div class="col-md-6 mb-4" id="track-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;track&gt;</h3>
        <ul>
            <li id="#src-track"><strong>src</strong> : URL du fichier de sous-titres.</li>
            <li id="#kind-track"><strong>kind</strong> : Type de piste (ex. `subtitles`, `captions`).</li>
            <li id="#srclang-track"><strong>srclang</strong> : Langue de la piste.</li>
            <li id="#label-track"><strong>label</strong> : Nom de la piste affichée.</li>
            <li id="#default-track"><strong>default</strong> : Active cette piste par défaut.</li>
        </ul>
    </div>

    <!-- Balise <time> -->
    <div class="col-md-6 mb-4" id="time-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;time&gt;</h3>
        <ul>
            <li id="datetime-time"><strong>datetime</strong> : Valeur date/heure de l'élément au format ISO 8601.</li>
        </ul>
    </div>

    <!-- Balise <progress> -->
    <div class="col-md-6 mb-4" id="progress-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;progress&gt;</h3>
        <ul>
            <li id="#value-progress"><strong>value</strong> : Valeur actuelle du progrès.</li>
            <li id="#max-progress"><strong>max</strong> : Valeur maximale de la progression.</li>
        </ul>
    </div>

    <!-- Balise <meter> -->
    <div class="col-md-6 mb-4" id="meter-attributes">
        <h3 style="color: #388e3c;">Attributs de la balise &lt;meter&gt;</h3>
        <ul>
            <li id="#value-meter"><strong>value</strong> : Valeur de la mesure actuelle.</li>
            <li id="#min-meter"><strong>min</strong> : Valeur minimale.</li>
            <li id="#max-meter"><strong>max</strong> : Valeur maximale.</li>
            <li id="#low-meter"><strong>low</strong> : Valeur en dessous de laquelle la mesure est basse.</li>
            <li id="#high-meter"><strong>high</strong> : Valeur au-dessus de laquelle la mesure est élevée.</li>
            <li id="#optimum-meter"><strong>optimum</strong> : Valeur optimale pour cette mesure.</li>
        </ul>
    </div>
</div>

            <!-- Conclusion -->
            <div class="content-section" id="conclusion">
                <h2><i class="fas fa-check-circle icon"></i>Conclusion</h2>
                <p>HTML est la base de toute page web. Une bonne compréhension des balises de base ainsi que des notions plus avancées permet de créer des pages structurées et efficaces.</p>
            </div>

        </div>
    </div>

<!-- Modal Balises de Structure -->
<div class="modal fade" id="structureModal" tabindex="-1" role="dialog" aria-labelledby="structureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="structureModalLabel">Exemples de Balises de Structure</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Titre de la page&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Contenu principal de la page.
    &lt;/body&gt;
&lt;/html&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises de Formatage de Texte -->
<div class="modal fade" id="textFormattingModal" tabindex="-1" role="dialog" aria-labelledby="textFormattingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="textFormattingModalLabel">Exemples de Balises de Formatage de Texte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;h1&gt;Titre principal&lt;/h1&gt;
&lt;p&gt;Ceci est un paragraphe.&lt;/p&gt;
&lt;br&gt; (Saut de ligne)
&lt;hr&gt; (Ligne horizontale)
&lt;strong&gt;Texte en gras important&lt;/strong&gt;
&lt;b&gt;Texte en gras simple&lt;/b&gt;
&lt;i&gt;Texte en italique&lt;/i&gt;
&lt;em&gt;Texte en italique avec emphase&lt;/em&gt;
&lt;small&gt;Texte de petite taille&lt;/small&gt;
&lt;mark&gt;Texte surligné&lt;/mark&gt;
&lt;blockquote&gt;Bloc de citation&lt;/blockquote&gt;
&lt;pre&gt;Texte préformaté&lt;/pre&gt;
&lt;code&gt;Code source&lt;/code&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises Multimédia -->
<div class="modal fade" id="multimediaModal" tabindex="-1" role="dialog" aria-labelledby="multimediaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="multimediaModalLabel">Exemples de Balises Multimédia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;img src="image.jpg" alt="Description de l'image"&gt;
&lt;audio controls&gt;
    &lt;source src="audio.mp3" type="audio/mpeg"&gt;
&lt;/audio&gt;
&lt;video width="320" height="240" controls&gt;
    &lt;source src="video.mp4" type="video/mp4"&gt;
&lt;/video&gt;
&lt;track src="subtitles.vtt" kind="subtitles" srclang="en" label="English"&gt;
&lt;iframe src="https://www.example.com" width="600" height="400"&gt;&lt;/iframe&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises de Listes -->
<div class="modal fade" id="listModal" tabindex="-1" role="dialog" aria-labelledby="listModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="listModalLabel">Exemples de Balises de Listes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;ul&gt;
    &lt;li&gt;Élément de liste non ordonnée&lt;/li&gt;
&lt;/ul&gt;
&lt;ol&gt;
    &lt;li&gt;Élément de liste ordonnée&lt;/li&gt;
&lt;/ol&gt;
&lt;dl&gt;
    &lt;dt&gt;Terme&lt;/dt&gt;
    &lt;dd&gt;Définition du terme&lt;/dd&gt;
&lt;/dl&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises de Tableaux -->
<div class="modal fade" id="tableModal" tabindex="-1" role="dialog" aria-labelledby="tableModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tableModalLabel">Exemples de Balises de Tableaux</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;table&gt;
    &lt;caption&gt;Titre du tableau&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;&lt;th&gt;En-tête&lt;/th&gt;&lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;&lt;td&gt;Donnée&lt;/td&gt;&lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;&lt;td&gt;Pied du tableau&lt;/td&gt;&lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises de Formulaires -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Exemples de Balises de Formulaires</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;form action="/submit"&gt;
    &lt;input type="text" name="nom" placeholder="Votre nom"&gt;
    &lt;textarea rows="4" cols="50"&gt;Votre texte ici&lt;/textarea&gt;
    &lt;button type="submit"&gt;Envoyer&lt;/button&gt;
    &lt;select&gt;
        &lt;option value="1"&gt;Option 1&lt;/option&gt;
    &lt;/select&gt;
&lt;/form&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises Sémantiques -->
<div class="modal fade" id="semanticModal" tabindex="-1" role="dialog" aria-labelledby="semanticModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="semanticModalLabel">Exemples de Balises Sémantiques</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;header&gt;En-tête du site&lt;/header&gt;
&lt;nav&gt;Menu de navigation&lt;/nav&gt;
&lt;section&gt;Section principale&lt;/section&gt;
&lt;article&gt;Article de contenu&lt;/article&gt;
&lt;aside&gt;Barre latérale&lt;/aside&gt;
&lt;footer&gt;Pied de page&lt;/footer&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Balises pour Programmation et Scripts -->
<div class="modal fade" id="programmingModal" tabindex="-1" role="dialog" aria-labelledby="programmingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="programmingModalLabel">Exemples de Balises pour Programmation et Scripts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;script src="app.js"&gt;&lt;/script&gt;
&lt;noscript&gt;JavaScript est désactivé&lt;/noscript&gt;
&lt;canvas&gt;&lt;/canvas&gt; pour dessins graphiques
&lt;embed src="file.swf"&gt;
&lt;object&gt;&lt;param name="param1" value="valeur"&gt;&lt;/object&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Autres Balises -->
<div class="modal fade" id="otherTagsModal" tabindex="-1" role="dialog" aria-labelledby="otherTagsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otherTagsModalLabel">Exemples d'Autres Balises</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;details&gt;
    &lt;summary&gt;Résumé du contenu&lt;/summary&gt;
    Contenu détaillé ici.
&lt;/details&gt;
&lt;dialog open&gt;Fenêtre de dialogue&lt;/dialog&gt;
&lt;data value="42"&gt;42&lt;/data&gt;
&lt;output name="result"&gt;Résultat&lt;/output&gt;
&lt;progress value="70" max="100"&gt;&lt;/progress&gt;
&lt;meter value="2" min="0" max="5"&gt;&lt;/meter&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs Universels -->
<div class="modal fade" id="universalAttributesModal" tabindex="-1" role="dialog" aria-labelledby="universalAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="universalAttributesModalLabel">Exemples d'Attributs Universels</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;div id="uniqueId" class="container main" style="color: blue;" title="Infobulle" lang="fr" data-info="extra data" hidden tabindex="1"&gt;
    Contenu du div avec attributs universels.
&lt;/div&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs de la balise <a> -->
<div class="modal fade" id="anchorAttributesModal" tabindex="-1" role="dialog" aria-labelledby="anchorAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="anchorAttributesModalLabel">Exemples d'Attributs pour &lt;a&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;a href="https://example.com" target="_blank" download="example.pdf" rel="noopener noreferrer" hreflang="en" type="text/html"&gt;
    Lien vers Example.com
&lt;/a&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs de la balise <img> -->
<div class="modal fade" id="imgAttributesModal" tabindex="-1" role="dialog" aria-labelledby="imgAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imgAttributesModalLabel">Exemples d'Attributs pour &lt;img&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;img src="image.jpg" alt="Description de l'image" width="200" height="150" loading="lazy" srcset="image2x.jpg 2x, image1x.jpg 1x"&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs de la balise <input> -->
<div class="modal fade" id="inputAttributesModal" tabindex="-1" role="dialog" aria-labelledby="inputAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputAttributesModalLabel">Exemples d'Attributs pour &lt;input&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;input type="text" name="username" value="default" placeholder="Entrez votre nom" required disabled readonly min="1" max="10" step="1"&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs de la balise <form> -->
<div class="modal fade" id="formAttributesModal" tabindex="-1" role="dialog" aria-labelledby="formAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formAttributesModalLabel">Exemples d'Attributs pour &lt;form&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;form action="/submit-form" method="post" enctype="multipart/form-data" target="_blank" autocomplete="on"&gt;
    Formulaire avec divers attributs.
&lt;/form&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs de la balise <button> -->
<div class="modal fade" id="buttonAttributesModal" tabindex="-1" role="dialog" aria-labelledby="buttonAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buttonAttributesModalLabel">Exemples d'Attributs pour &lt;button&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;button type="submit" name="action" value="save" disabled&gt;Envoyer&lt;/button&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs de la balise <textarea> -->
<div class="modal fade" id="textareaAttributesModal" tabindex="-1" role="dialog" aria-labelledby="textareaAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="textareaAttributesModalLabel">Exemples d'Attributs pour &lt;textarea&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;textarea rows="4" cols="50" maxlength="200" placeholder="Votre texte ici..." readonly&gt;
Texte par défaut
&lt;/textarea&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs pour <table> et ses éléments -->
<div class="modal fade" id="tableAttributesModal" tabindex="-1" role="dialog" aria-labelledby="tableAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tableAttributesModalLabel">Exemples d'Attributs pour &lt;table&gt; et ses éléments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;table border="1" cellpadding="5" cellspacing="2" width="100%"&gt;
    &lt;tr&gt;
        &lt;td colspan="2"&gt;Cellule fusionnée&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs pour <audio> et <video> -->
<div class="modal fade" id="mediaAttributesModal" tabindex="-1" role="dialog" aria-labelledby="mediaAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediaAttributesModalLabel">Exemples d'Attributs pour &lt;audio&gt; et &lt;video&gt;</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;audio src="audio.mp3" controls autoplay loop muted&gt;&lt;/audio&gt;
&lt;video src="video.mp4" controls autoplay loop muted poster="poster.jpg" width="320" height="240"&gt;&lt;/video&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

<!-- Modal Attributs Complémentaires -->
<div class="modal fade" id="additionalAttributesModal" tabindex="-1" role="dialog" aria-labelledby="additionalAttributesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="additionalAttributesModalLabel">Exemples d'Attributs Complémentaires</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <pre>
&lt;meta name="description" content="Description de la page"&gt;
&lt;link href="style.css" rel="stylesheet" media="screen"&gt;
&lt;iframe src="https://example.com" width="600" height="400" loading="lazy" allowfullscreen frameborder="0"&gt;&lt;/iframe&gt;
&lt;script src="script.js" async defer&gt;&lt;/script&gt;
&lt;source src="video.webm" type="video/webm"&gt;
&lt;track src="subtitles.vtt" kind="subtitles" srclang="en" label="English" default&gt;
&lt;time datetime="2024-10-27"&gt;27 Octobre 2024&lt;/time&gt;
&lt;progress value="50" max="100"&gt;&lt;/progress&gt;
&lt;meter value="3" min="0" max="10" low="2" high="8" optimum="5"&gt;&lt;/meter&gt;
                </pre>
            </div>
        </div>
    </div>
</div>

    <!-- Ajoutez les modals similaires pour chaque balise abordée dans le cours -->

    <!-- Bootstrap JS et jQuery pour les modals et le dropdown -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>
