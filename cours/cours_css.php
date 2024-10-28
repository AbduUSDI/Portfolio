<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur CSS - Exemples Visuels et Attributs</title>
    <!-- Bootstrap pour les modals et la sidebar responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>

</head>
<d>
<?php include 'templates/nav.php' ?>
    <!-- Sidebar -->
<div class="sidebar">
    
    <h3 style="position: relative; left: 15px; font-weight: bold;">CSS</h3>
    <!-- Couleurs -->
    <button class="dropdown-btn">Couleurs <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#color">color</a>
        <a href="#background-color">background-color</a>
        <a href="#opacity">opacity</a>
        <a href="#border-color">border-color</a>
        <a href="#rgba">rgba()</a>
    </div>

    <!-- Typographie -->
    <button class="dropdown-btn">Typographie <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#font-family">font-family</a>
        <a href="#font-size">font-size</a>
        <a href="#font-weight">font-weight</a>
        <a href="#line-height">line-height</a>
        <a href="#text-align">text-align</a>
        <a href="#text-decoration">text-decoration</a>
        <a href="#text-transform">text-transform</a>
        <a href="#letter-spacing">letter-spacing</a>
        <a href="#word-spacing">word-spacing</a>
    </div>

    <!-- Positionnement -->
    <button class="dropdown-btn">Positionnement <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#position">position</a>
        <a href="#z-index">z-index</a>
        <a href="#top">top</a>
        <a href="#right">right</a>
        <a href="#bottom">bottom</a>
        <a href="#left">left</a>
        <a href="#float">float</a>
        <a href="#clear">clear</a>
    </div>

    <!-- Mise en page -->
    <button class="dropdown-btn">Mise en page <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#display">display</a>
        <a href="#flexbox">flexbox</a>
        <a href="#grid">grid</a>
        <a href="#align-items">align-items</a>
        <a href="#justify-content">justify-content</a>
        <a href="#gap">gap</a>
    </div>

    <!-- Marges et Espacements -->
    <button class="dropdown-btn">Marges et Espacements <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#margin">margin</a>
        <a href="#padding">padding</a>
        <a href="#border">border</a>
        <a href="#outline">outline</a>
        <a href="#box-sizing">box-sizing</a>
    </div>

    <!-- Dimensions -->
    <button class="dropdown-btn">Dimensions <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#width">width</a>
        <a href="#height">height</a>
        <a href="#max-width">max-width</a>
        <a href="#max-height">max-height</a>
        <a href="#min-width">min-width</a>
        <a href="#min-height">min-height</a>
    </div>

    <!-- Effets et Animations -->
    <button class="dropdown-btn">Effets et Animations <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#box-shadow">box-shadow</a>
        <a href="#text-shadow">text-shadow</a>
        <a href="#transition">transition</a>
        <a href="#animation">animation</a>
        <a href="#transform">transform</a>
        <a href="#filter">filter</a>
    </div>

    <!-- Pseudo-classes et Pseudo-éléments -->
    <button class="dropdown-btn">Pseudo-classes et Pseudo-éléments <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#hover">:hover</a>
        <a href="#active">:active</a>
        <a href="#focus">:focus</a>
        <a href="#before">::before</a>
        <a href="#after">::after</a>
        <a href="#first-child">:first-child</a>
        <a href="#last-child">:last-child</a>
        <a href="#nth-child">:nth-child()</a>
    </div>

    <!-- Médias Queries et Responsivité -->
    <button class="dropdown-btn">Médias Queries et Responsivité <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#media-query">media query</a>
        <a href="#responsive-font">Responsive Font</a>
        <a href="#viewport">Viewport Units</a>
    </div>
</div>
<!-- Page Content -->
<div class="content">
        <div class="container animate__animated animate__fadeInUp">
<!-- Couleurs -->
<div class="content-section" id="colors">
    <h2><i class="fas fa-palette icon"></i> Couleurs</h2>
    <div class="row">
        <!-- color -->
        <div class="col-md-6">
            <h3 id="color">color</h3>
            <p>Définit la couleur du texte.</p>
            <div class="example-box" style="color: blue;">Texte en bleu</div>
            <p><code>color: blue;</code></p>
        </div>
        <!-- background-color -->
        <div class="col-md-6">
            <h3 id="background-color">background-color</h3>
            <p>Définit la couleur d'arrière-plan d'un élément.</p>
            <div class="example-box" style="background-color: lightgreen;">Arrière-plan vert clair</div>
            <p><code>background-color: lightgreen;</code></p>
        </div>
        <!-- opacity -->
        <div class="col-md-6">
            <h3 id="opacity">opacity</h3>
            <p>Définit l'opacité d'un élément (entre 0 et 1).</p>
            <div class="example-box" style="background-color: rgba(255, 0, 0, 0.5);">Arrière-plan rouge semi-transparent</div>
            <p><code>opacity: 0.5;</code></p>
        </div>
        <!-- border-color -->
        <div class="col-md-6">
            <h3 id="border-color">border-color</h3>
            <p>Définit la couleur de la bordure d'un élément.</p>
            <div class="example-box" style="border: 2px solid red;">Bordure rouge</div>
            <p><code>border-color: red;</code></p>
        </div>
        <!-- rgba -->
        <div class="col-md-6">
            <h3 id="rgba">rgba()</h3>
            <p>Définit la couleur avec transparence, valeurs rouge, vert, bleu, et alpha (0-1).</p>
            <div class="example-box" style="background-color: rgba(0, 128, 0, 0.3);">Arrière-plan vert avec 30% d'opacité</div>
            <p><code>background-color: rgba(0, 128, 0, 0.3);</code></p>
        </div>
    </div>
</div>

<!-- Typographie -->
<div class="content-section" id="typography">
    <h2><i class="fas fa-font icon"></i> Typographie</h2>
    <div class="row">
        <!-- font-family -->
        <div class="col-md-6">
            <h3 id="font-family">font-family</h3>
            <p>Définit la police de caractère de l'élément.</p>
            <div class="example-box" style="font-family: Arial, sans-serif;">Texte en Arial</div>
            <p><code>font-family: Arial, sans-serif;</code></p>
        </div>
        <!-- font-size -->
        <div class="col-md-6">
            <h3 id="font-size">font-size</h3>
            <p>Définit la taille du texte.</p>
            <div class="example-box" style="font-size: 20px;">Texte de taille 20px</div>
            <p><code>font-size: 20px;</code></p>
        </div>
        <!-- font-weight -->
        <div class="col-md-6">
            <h3 id="font-weight">font-weight</h3>
            <p>Définit l'épaisseur du texte (normal, bold, etc.).</p>
            <div class="example-box" style="font-weight: bold;">Texte en gras</div>
            <p><code>font-weight: bold;</code></p>
        </div>
        <!-- line-height -->
        <div class="col-md-6">
            <h3 id="line-height">line-height</h3>
            <p>Définit l'interligne du texte.</p>
            <div class="example-box" style="line-height: 2;">Texte avec interligne de 2</div>
            <p><code>line-height: 2;</code></p>
        </div>
        <!-- text-align -->
        <div class="col-md-6">
            <h3 id="text-align">text-align</h3>
            <p>Définit l'alignement du texte (left, center, right).</p>
            <div class="example-box" style="text-align: center;">Texte centré</div>
            <p><code>text-align: center;</code></p>
        </div>
        <!-- text-decoration -->
        <div class="col-md-6">
            <h3 id="text-decoration">text-decoration</h3>
            <p>Applique une décoration au texte (underline, overline, line-through).</p>
            <div class="example-box" style="text-decoration: underline;">Texte souligné</div>
            <p><code>text-decoration: underline;</code></p>
        </div>
        <!-- text-transform -->
        <div class="col-md-6">
            <h3 id="text-transform">text-transform</h3>
            <p>Transforme le texte (uppercase, lowercase, capitalize).</p>
            <div class="example-box" style="text-transform: uppercase;">Texte en majuscules</div>
            <p><code>text-transform: uppercase;</code></p>
        </div>
        <!-- letter-spacing -->
        <div class="col-md-6">
            <h3 id="letter-spacing">letter-spacing</h3>
            <p>Définit l'espacement entre les lettres.</p>
            <div class="example-box" style="letter-spacing: 3px;">Texte avec espacement de 3px</div>
            <p><code>letter-spacing: 3px;</code></p>
        </div>
        <!-- word-spacing -->
        <div class="col-md-6">
            <h3 id="word-spacing">word-spacing</h3>
            <p>Définit l'espacement entre les mots.</p>
            <div class="example-box" style="word-spacing: 10px;">Texte avec espacement de mots de 10px</div>
            <p><code>word-spacing: 10px;</code></p>
        </div>
    </div>
</div>

<!-- Positionnement -->
<div class="content-section" id="positioning">
    <h2><i class="fas fa-arrows-alt icon"></i> Positionnement</h2>
    <div class="row">
        <!-- position -->
        <div class="col-md-6">
            <h3 id="position">position</h3>
            <p>Définit le type de positionnement pour un élément (relative, absolute, fixed, sticky).</p>
            <div class="example-box" style="position: relative; top: 10px;">Position relative avec décalage vers le bas</div>
            <p><code>position: relative; top: 10px;</code></p>
        </div>
        <!-- z-index -->
        <div class="col-md-6">
            <h3 id="z-index">z-index</h3>
            <p>Définit la superposition d'un élément (uniquement pour les éléments positionnés).</p>
            <div class="example-box" style="position: relative; z-index: 2; background-color: yellow;">z-index de 2</div>
            <p><code>z-index: 2;</code></p>
        </div>
        <!-- float -->
        <div class="col-md-6">
            <h3 id="float">float</h3>
            <p>Permet à un élément de "flotter" à gauche ou à droite.</p>
            <div class="example-box" style="float: left; width: 100px; background-color: lightcoral;">Flottant à gauche</div>
            <p><code>float: left;</code></p>
        </div>
        <!-- clear -->
        <div class="col-md-6">
            <h3 id="clear">clear</h3>
            <p>
                La propriété <strong>clear</strong> est utilisée pour contrôler le comportement d'éléments par rapport aux éléments flottants. 
                Elle peut prendre les valeurs <code>left</code>, <code>right</code>, <code>both</code>, ou <code>none</code>. 
                Par exemple, <code>clear: both</code> positionne l'élément en dessous de tout élément flottant.
            </p>
            <div class="example-box" style="clear: both;">Texte après l'élément flottant</div>
            <p><code>clear: both;</code></p>
        </div>
    </div>
</div>

<!-- Mise en page -->
<div class="content-section" id="layout">
    <h2><i class="fas fa-th-large icon"></i> Mise en page</h2>
    <div class="row">
        <!-- display -->
        <div class="col-md-6">
            <h3 id="display">display</h3>
            <p>Définit le type d'affichage d'un élément (block, inline, flex, grid).</p>
            <div class="example-box" style="display: inline;">Texte avec display: inline</div>
            <p><code>display: inline;</code></p>
            <pre><code>&lt;div style="display: inline;"&gt;Texte avec display: inline&lt;/div&gt;</code></pre>
        </div>
        <!-- flexbox -->
        <div class="col-md-6">
            <h3 id="flexbox">flexbox</h3>
            <p>Utilisé pour créer des mises en page flexibles (display: flex).</p>
            <div class="example-box" style="display: flex; gap: 10px;">
                <div style="background-color: lightblue; padding: 5px;">Item 1</div>
                <div style="background-color: lightgreen; padding: 5px;">Item 2</div>
            </div>
            <p><code>display: flex; gap: 10px;</code></p>
            <pre><code>&lt;div style="display: flex; gap: 10px;"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
        <!-- grid -->
        <div class="col-md-6">
            <h3 id="grid">grid</h3>
            <p>Utilisé pour des mises en page en grille.</p>
            <div class="example-box" style="display: grid; grid-template-columns: 1fr 1fr;">
                <div style="background-color: lightcoral; padding: 5px;">Item 1</div>
                <div style="background-color: lightseagreen; padding: 5px;">Item 2</div>
            </div>
            <p><code>display: grid; grid-template-columns: 1fr 1fr;</code></p>
            <pre><code>&lt;div style="display: grid; grid-template-columns: 1fr 1fr;"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
        <!-- align-items -->
        <div class="col-md-6">
            <h3 id="align-items">align-items</h3>
            <p>Alignement vertical dans un conteneur flex ou grid.</p>
            <div class="example-box" style="display: flex; align-items: center; height: 100px;">
                <div style="background-color: lightcoral; padding: 5px;">Centré verticalement</div>
            </div>
            <p><code>align-items: center;</code></p>
            <pre><code>&lt;div style="display: flex; align-items: center; height: 100px;"&gt;
    &lt;div&gt;Centré verticalement&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
        <!-- justify-content -->
        <div class="col-md-6">
            <h3 id="justify-content">justify-content</h3>
            <p>Alignement horizontal dans un conteneur flex ou grid.</p>
            <div class="example-box" style="display: flex; justify-content: space-around;">
                <div style="background-color: lightcoral; padding: 5px;">Item 1</div>
                <div style="background-color: lightseagreen; padding: 5px;">Item 2</div>
            </div>
            <p><code>justify-content: space-around;</code></p>
            <pre><code>&lt;div style="display: flex; justify-content: space-around;"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
        <!-- gap -->
        <div class="col-md-6">
            <h3 id="gap">gap</h3>
            <p>Ajoute un espace entre les éléments dans un conteneur flex ou grid.</p>
            <div class="example-box" style="display: flex; gap: 10px;">
                <div style="background-color: lightcoral; padding: 5px;">Item 1</div>
                <div style="background-color: lightseagreen; padding: 5px;">Item 2</div>
            </div>
            <p><code>gap: 10px;</code></p>
            <pre><code>&lt;div style="display: flex; gap: 10px;"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>
</div>

<!-- Marges et Espacements -->
<div class="content-section" id="spacing">
    <h2><i class="fas fa-arrows-alt icon"></i> Marges et Espacements</h2>
    <div class="row">
        <!-- margin -->
        <div class="col-md-6">
            <h3 id="margin">margin</h3>
            <p>Définit l'espace extérieur autour de l'élément.</p>
            <div class="example-box" style="margin: 20px; background-color: lightgrey;">Avec marges de 20px</div>
            <p><code>margin: 20px;</code></p>
            <pre><code>&lt;div style="margin: 20px;"&gt;Avec marges de 20px&lt;/div&gt;</code></pre>
        </div>
        <!-- padding -->
        <div class="col-md-6">
            <h3 id="padding">padding</h3>
            <p>Définit l'espace intérieur, entre le contenu et la bordure de l'élément.</p>
            <div class="example-box" style="padding: 20px; background-color: lightgrey;">Avec padding de 20px</div>
            <p><code>padding: 20px;</code></p>
            <pre><code>&lt;div style="padding: 20px;"&gt;Avec padding de 20px&lt;/div&gt;</code></pre>
        </div>
        <!-- border -->
        <div class="col-md-6">
            <h3 id="border">border</h3>
            <p>Définit la bordure autour d'un élément.</p>
            <div class="example-box" style="border: 2px solid black;">Bordure de 2px noire</div>
            <p><code>border: 2px solid black;</code></p>
            <pre><code>&lt;div style="border: 2px solid black;"&gt;Bordure de 2px noire&lt;/div&gt;</code></pre>
        </div>
        <!-- outline -->
        <div class="col-md-6">
            <h3 id="outline">outline</h3>
            <p>
                La propriété <strong>outline</strong> est utilisée pour ajouter un contour autour d'un élément, en dehors des bordures. Contrairement aux bordures normales, 
                elle ne modifie pas la disposition de l'élément. Elle est souvent utilisée pour mettre en évidence un élément lors d'une interaction, 
                comme le focus d'un champ de formulaire. Exemple de propriétés :
            </p>
            <ul>
                <li><strong>outline-width</strong> : Épaisseur de l'outline.</li>
                <li><strong>outline-style</strong> : Style de l'outline (solid, dotted, dashed, etc.).</li>
                <li><strong>outline-color</strong> : Couleur de l'outline.</li>
            </ul>
            <div class="example-box" style="outline: 2px dashed blue;">Contour bleu en tirets</div>
            <p><code>outline: 2px dashed blue;</code></p>
        </div>

        <!-- box-sizing -->
        <div class="col-md-6">
            <h3 id="box-sizing">box-sizing</h3>
            <p>
                La propriété <strong>box-sizing</strong> détermine la manière dont la taille totale d'un élément est calculée : elle inclut ou non les bordures et le padding 
                dans la largeur et la hauteur spécifiées de l'élément.
            </p>
            <ul>
                <li><strong>content-box</strong> (par défaut) : La largeur et la hauteur s'appliquent uniquement au contenu ; les bordures et le padding sont ajoutés en plus.</li>
                <li><strong>border-box</strong> : La largeur et la hauteur incluent le padding et les bordures, ce qui facilite le contrôle de la taille totale.</li>
            </ul>
            <div class="example-box" style="box-sizing: border-box; width: 150px; padding: 20px; border: 5px solid #333;">
                <strong>border-box</strong> avec <code>width</code> de 150px, incluant padding et bordure
            </div>
            <p><code>box-sizing: border-box; width: 150px; padding: 20px; border: 5px solid #333;</code></p>
        </div>
    </div>
</div>

<!-- Dimensions -->
<div class="content-section" id="dimensions">
    <h2><i class="fas fa-ruler icon"></i> Dimensions</h2>
    <div class="row">
        <!-- width -->
        <div class="col-md-6">
            <h3 id="width">width</h3>
            <p>Définit la largeur d'un élément.</p>
            <div class="example-box" style="width: 200px; background-color: lightblue;">Largeur de 200px</div>
            <p><code>width: 200px;</code></p>
            <pre><code>&lt;div style="width: 200px;"&gt;Largeur de 200px&lt;/div&gt;</code></pre>
        </div>
        <!-- height -->
        <div class="col-md-6">
            <h3 id="height">height</h3>
            <p>Définit la hauteur d'un élément.</p>
            <div class="example-box" style="height: 100px; background-color: lightcoral;">Hauteur de 100px</div>
            <p><code>height: 100px;</code></p>
            <pre><code>&lt;div style="height: 100px;"&gt;Hauteur de 100px&lt;/div&gt;</code></pre>
        </div>
    <!-- max-width -->
    <div class="col-md-6">
            <h3 id="max-width">max-width</h3>
            <p>
                La propriété <strong>max-width</strong> fixe la largeur maximale d'un élément. Elle permet de restreindre la largeur au-delà d'une certaine valeur, 
                tout en permettant à l'élément de se redimensionner lorsque la taille de l'écran diminue. Cela est particulièrement utile pour créer des mises en page réactives.
            </p>
            <div class="example-box" style="max-width: 300px; background-color: lightblue;">
                Largeur maximale de 300px
            </div>
            <p><code>max-width: 300px;</code></p>
        </div>

        <!-- max-height -->
        <div class="col-md-6">
            <h3 id="max-height">max-height</h3>
            <p>
                La propriété <strong>max-height</strong> fixe la hauteur maximale d'un élément. Elle est utile pour éviter qu'un élément ne devienne trop grand 
                en hauteur et pour maintenir une mise en page soignée, notamment pour des images ou des sections de contenu qui doivent rester visibles.
            </p>
            <div class="example-box" style="max-height: 150px; background-color: lightcoral; overflow: auto;">
                Contenu avec une hauteur maximale de 150px. Redimensionnez la fenêtre pour voir comment cela fonctionne.
            </div>
            <p><code>max-height: 150px;</code></p>
        </div>

        <!-- min-width -->
        <div class="col-md-6">
            <h3 id="min-width">min-width</h3>
            <p>
                La propriété <strong>min-width</strong> définit la largeur minimale d'un élément. Elle garantit qu'un élément ne se réduira pas 
                en dessous d'une certaine largeur, ce qui peut être important pour assurer la lisibilité du contenu et la cohérence de la mise en page.
            </p>
            <div class="example-box" style="min-width: 200px; background-color: lightgreen;">
                Largeur minimale de 200px
            </div>
            <p><code>min-width: 200px;</code></p>
        </div>

        <!-- min-height -->
        <div class="col-md-6">
            <h3 id="min-height">min-height</h3>
            <p>
                La propriété <strong>min-height</strong> fixe la hauteur minimale d'un élément. Elle est utilisée pour s'assurer qu'un élément ait 
                une hauteur suffisante, même lorsque le contenu est réduit, par exemple dans les sections de présentation.
            </p>
            <div class="example-box" style="min-height: 100px; background-color: lightyellow;">
                Hauteur minimale de 100px
            </div>
            <p><code>min-height: 100px;</code></p>
        </div>
</div>

<!-- Effets et Animations -->
<div class="content-section" id="effects-animations">
    <h2><i class="fas fa-magic icon"></i> Effets et Animations</h2>
    <div class="row">
        
        <!-- box-shadow -->
        <div class="col-md-6">
            <h3 id="box-shadow">box-shadow</h3>
            <p>Ajoute une ombre autour de l'élément. Cela peut être utilisé pour donner une profondeur visuelle.</p>
            <div class="example-box effect-box-shadow">Ombre autour de cet élément</div>
            <p><code>box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);</code></p>
        </div>

        <!-- text-shadow -->
        <div class="col-md-6">
            <h3 id="text-shadow">text-shadow</h3>
            <p>Ajoute une ombre autour du texte, permettant de créer des effets de lumière ou de relief.</p>
            <div class="example-box effect-text-shadow">Ombre de texte</div>
            <p><code>text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);</code></p>
        </div>

        <!-- transition -->
        <div class="col-md-6">
            <h3 id="transition">transition</h3>
            <p>Permet une transition fluide entre différents états CSS, comme la couleur de fond ou la taille.</p>
            <div class="example-box effect-transition">Passez votre souris ici</div>
            <p><code>transition: background-color 0.5s, transform 0.5s;</code></p>
        </div>

        <!-- animation -->
        <div class="col-md-6">
            <h3 id="animation">animation</h3>
            <p>Applique une série de styles CSS dans le temps. Ici, une animation de changement de couleur est appliquée.</p>
            <div class="example-box effect-animation">Animation de couleur</div>
            <p><code>@keyframes colorChange { ... }</code></p>
        </div>

        <!-- transform -->
        <div class="col-md-6">
            <h3 id="transform">transform</h3>
            <p>Permet de déplacer, redimensionner, faire pivoter ou incliner un élément. Ici, l'élément est pivoté.</p>
            <div class="example-box effect-transform">Pivote de 15 degrés</div>
            <p><code>transform: rotate(15deg);</code></p>
        </div>

        <!-- filter -->
        <div class="col-md-6">
            <h3 id="filter">filter</h3>
            <p>Applique des effets visuels tels que la luminosité, le flou, ou le contraste. Ici, l'élément est assombri et flou.</p>
            <div class="example-box effect-filter">Luminosité réduite et flou</div>
            <p><code>filter: brightness(0.8) blur(2px);</code></p>
        </div>
        
    </div>
</div>


<!-- Pseudo-classes et Pseudo-éléments -->
<div class="content-section" id="pseudo-classes-elements">
    <h2><i class="fas fa-code icon"></i> Pseudo-classes et Pseudo-éléments</h2>
    <div class="row">
        
        <!-- :hover -->
        <div class="col-md-6">
            <h3 id="hover">:hover</h3>
            <p>Appliqué lorsque l'utilisateur survole l'élément avec la souris. Idéal pour créer des effets interactifs.</p>
            <div class="example-box effect-hover">Passez la souris ici</div>
            <p><code>.effect-hover:hover { background-color: #fdd835; }</code></p>
        </div>

        <!-- :active -->
        <div class="col-md-6">
            <h3 id="active">:active</h3>
            <p>Appliqué lorsque l'élément est cliqué. Change souvent l'apparence du bouton pendant le clic.</p>
            <div class="example-box effect-active">Cliquez ici</div>
            <p><code>.effect-active:active { background-color: #0288d1; }</code></p>
        </div>

        <!-- :focus -->
        <div class="col-md-6">
            <h3 id="focus">:focus</h3>
            <p>Appliqué lorsque l'élément est en focus, par exemple lorsqu'il est sélectionné dans un formulaire.</p>
            <input type="text" class="example-box effect-focus" placeholder="Cliquez ici pour le focus">
            <p><code>.effect-focus:focus { background-color: #66bb6a; }</code></p>
        </div>

        <!-- ::before and ::after -->
        <div class="col-md-6">
            <h3 id="before-after">::before et ::after</h3>
            <p>Ajoute du contenu avant ou après l'élément sans modifier le HTML. Utilisé pour les décorations.</p>
            <div class="example-box effect-before-after">Contenu principal</div>
            <p><code>.effect-before-after::before { content: "Début - "; }</code><br>
               <code>.effect-before-after::after { content: " - Fin"; }</code></p>
        </div>

        <!-- :first-child -->
        <div class="col-md-6">
            <h3 id="first-child">:first-child</h3>
            <p>S'applique uniquement au premier élément enfant d'un parent. Pratique pour styliser le premier élément d'une liste ou d'un conteneur.</p>
            <div class="example-box effect-first-child">
                <div>Premier enfant</div>
                <div>Autre enfant</div>
            </div>
            <p><code>.effect-first-child div:first-child { background-color: #ffccbc; }</code></p>
        </div>

        <!-- :last-child -->
        <div class="col-md-6">
            <h3 id="last-child">:last-child</h3>
            <p>S'applique uniquement au dernier élément enfant d'un parent. Pratique pour styliser le dernier élément d'une liste ou d'un conteneur.</p>
            <div class="example-box effect-last-child">
                <div>Premier enfant</div>
                <div>Dernier enfant</div>
            </div>
            <p><code>.effect-last-child div:last-child { background-color: #c5cae9; }</code></p>
        </div>

        <!-- :nth-child() -->
        <div class="col-md-6">
            <h3 id="nth-child">:nth-child()</h3>
            <p>Sélectionne le n-ième enfant d'un parent. Peut être utilisé pour des motifs répétitifs dans le style.</p>
            <div class="example-box effect-nth-child">
                <div>Premier enfant</div>
                <div>Deuxième enfant</div>
                <div>Troisième enfant</div>
            </div>
            <p><code>.effect-nth-child div:nth-child(2) { background-color: #b2dfdb; }</code></p>
        </div>
        
    </div>
</div>


<!-- Médias Queries et Responsivité -->
<div class="content-section" id="media-queries-responsiveness">
    <h2><i class="fas fa-mobile-alt icon"></i> Médias Queries et Responsivité</h2>
    <div class="row">
        
        <!-- Media Query Example -->
        <div class="col-md-6">
            <h3 id="media-query">media query</h3>
            <p>Les media queries permettent d'appliquer des styles conditionnels en fonction des caractéristiques de l'écran, comme sa largeur. Elles sont essentielles pour créer des designs responsives qui s'adaptent à tous les appareils.</p>
            <div class="example-box responsive-text">Redimensionnez la fenêtre pour voir le changement de style</div>
            <p><code>@media (max-width: 600px) { .responsive-text { font-size: 14px; background-color: #ffeb3b; } }</code></p>
        </div>
        
        <!-- Responsive Font -->
        <div class="col-md-6">
            <h3 id="responsive-font">Responsive Font</h3>
            <p>En utilisant des unités de mesure comme <code>vw</code> (viewport width), la taille du texte s'ajuste en fonction de la largeur de la fenêtre. Cela permet de maintenir une proportion cohérente de la police sur différents écrans.</p>
            <div class="example-box responsive-font">Texte responsive en fonction de la largeur de la fenêtre</div>
            <p><code>.responsive-font { font-size: 2vw; }</code></p>
        </div>
        
        <!-- Viewport Units -->
        <div class="col-md-6">
            <h3 id="viewport">Viewport Units</h3>
            <p>Les unités <code>vh</code> (viewport height) et <code>vw</code> (viewport width) permettent de définir des dimensions relatives à la taille de la fenêtre du navigateur. Par exemple, 100vh prend toute la hauteur de la fenêtre.</p>
            <div class="example-box full-height" style="background-color: #b3e5fc;">Prend 100% de la hauteur de la fenêtre</div>
            <p><code>.full-height { height: 100vh; }</code></p>
        </div>
    </div>
</div>


</div>
</div>

    <!-- Bootstrap JS (optional if you want responsive behavior) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>
</html>
