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
    <a href="#hsl">hsl()</a>
</div>

<!-- Typographie -->
<button class="dropdown-btn">Typographie <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#font-family">font-family</a>
    <a href="#font-size">font-size</a>
    <a href="#font-weight">font-weight</a>
    <a href="#line-height">line-height</a>
    <a href="#letter-spacing">letter-spacing</a>
    <a href="#word-spacing">word-spacing</a>
    <a href="#text-align">text-align</a>
    <a href="#text-decoration">text-decoration</a>
    <a href="#text-transform">text-transform</a>
    <a href="#text-indent">text-indent</a>
    <a href="#font-style">font-style</a>
    <a href="#text-shadow">text-shadow</a>
</div>

<!-- Positionnement -->
<button class="dropdown-btn">Positionnement <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#position">position</a>
    <a href="#z-index">z-index</a>
    <a href="#trbl">top, right, bottom, left</a>
    <a href="#float">float</a>
    <a href="#clear">clear</a>
    <a href="#overflow">overflow</a>
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
    <a href="#border-radius">border-radius</a>
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
    <a href="#transition">transition</a>
    <a href="#transform">transform</a>
    <a href="#animation">animation</a>
    <a href="#filter">filter</a>
    <a href="#backdrop-filter">backdrop-filter</a>
</div>

<!-- Pseudo-classes et Pseudo-éléments -->
<button class="dropdown-btn">Pseudo-classes et Pseudo-éléments <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#hover">:hover</a>
    <a href="#active">:active</a>
    <a href="#focus">:focus</a>
    <a href="#before-after">::before and ::after</a>
    <a href="#first-child">:first-child</a>
    <a href="#last-child">:last-child</a>
    <a href="#nth-child">:nth-child()</a>
    <a href="#nth-of-type">:nth-of-type()</a>
</div>

<!-- Médias Queries et Responsivité -->
<button class="dropdown-btn">Médias Queries et Responsivité <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#media-query">media query</a>
    <a href="#responsive-font">Responsive Font</a>
    <a href="#viewport">Viewport Units</a>
    <a href="#aspect-ratio">aspect-ratio</a>
</div>

<!-- Listes et Tableaux -->
<button class="dropdown-btn">Listes et Tableaux <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#list-style">list-style</a>
    <a href="#table-layout">table-layout</a>
    <a href="#border-collapse">border-collapse</a>
    <a href="#border-spacing">border-spacing</a>
    <a href="#caption-side">caption-side</a>
</div>

<!-- Divers -->
<button class="dropdown-btn">Divers <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#visibility">visibility</a>
    <a href="#cursor">cursor</a>
    <a href="#content">content</a>
    <a href="#resize">resize</a>
    <a href="#pointer-events">pointer-events</a>
    <a href="#user-select">user-select</a>
    <a href="#will-change">will-change</a>
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
    <h3 id="color" style="display: flex; align-items: center;">
        <i class="fas fa-palette" style="color: #f39c12; margin-right: 10px;"></i> Color
    </h3>
    <p>La propriété <code>color</code> permet de définir la couleur du texte. Choisissez parmi une large palette de couleurs pour rendre votre texte unique !</p>
    
    <!-- Exemples de couleurs avec icônes et styles -->
    <div class="example-box" style="color: blue;">
        <i class="fas fa-tint" style="color: blue; margin-right: 5px;"></i> Texte en bleu
    </div>
    <p><code>color: blue;</code></p>

    <div class="example-box" style="color: red;">
        <i class="fas fa-tint" style="color: red; margin-right: 5px;"></i> Texte en rouge
    </div>
    <p><code>color: red;</code></p>

    <div class="example-box" style="color: green;">
        <i class="fas fa-tint" style="color: green; margin-right: 5px;"></i> Texte en vert
    </div>
    <p><code>color: green;</code></p>

    <div class="example-box" style="color: #8e44ad;">
        <i class="fas fa-tint" style="color: #8e44ad; margin-right: 5px;"></i> Texte en violet
    </div>
    <p><code>color: #8e44ad;</code></p>

    <div class="example-box" style="color: #ff5733;">
        <i class="fas fa-tint" style="color: #ff5733; margin-right: 5px;"></i> Texte en orange
    </div>
    <p><code>color: #ff5733;</code></p>

    <!-- Ajouter des conseils -->
    <div style="background-color: #e0f7fa; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #f39c12;"></i>
        <strong>Astuce :</strong> Utilisez des couleurs cohérentes avec le thème de votre site pour renforcer l'attrait visuel et améliorer l'expérience utilisateur.
    </div>
</div>

<div class="col-md-6">
    <h3 id="background-color" style="display: flex; align-items: center;">
        <i class="fas fa-fill-drip" style="color: #3498db; margin-right: 10px;"></i> Background Color
    </h3>
    <p>La propriété <code>background-color</code> permet de définir la couleur d'arrière-plan d'un élément, ajoutant de la profondeur et du style à vos pages.</p>

    <!-- Exemples d'arrière-plan avec icônes et styles -->
    <div class="example-box" style="background-color: lightgreen; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: lightgreen; margin-right: 5px;"></i> Arrière-plan vert clair
    </div>
    <p><code>background-color: lightgreen;</code></p>

    <div class="example-box" style="background-color: lightblue; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: lightblue; margin-right: 5px;"></i> Arrière-plan bleu clair
    </div>
    <p><code>background-color: lightblue;</code></p>

    <div class="example-box" style="background-color: pink; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: pink; margin-right: 5px;"></i> Arrière-plan rose
    </div>
    <p><code>background-color: pink;</code></p>

    <div class="example-box" style="background-color: #f0e68c; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: #f0e68c; margin-right: 5px;"></i> Arrière-plan kaki clair
    </div>
    <p><code>background-color: #f0e68c;</code></p>

    <div class="example-box" style="background-color: #ffcccb; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: #ffcccb; margin-right: 5px;"></i> Arrière-plan rouge clair
    </div>
    <p><code>background-color: #ffcccb;</code></p>

    <!-- Ajouter des conseils -->
    <div style="background-color: #eaf2f8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez des couleurs de fond pour différencier des sections importantes de la page et améliorer la hiérarchie visuelle.
    </div>
</div>

<div class="col-md-6">
    <h3 id="opacity" style="display: flex; align-items: center;">
        <i class="fas fa-adjust" style="color: #e74c3c; margin-right: 10px;"></i> Opacity
    </h3>
    <p>La propriété <code>opacity</code> ajuste la transparence d'un élément. Elle accepte des valeurs entre <strong>0</strong> (totalement transparent) et <strong>1</strong> (complètement opaque).</p>

    <!-- Exemples d'opacité avec styles et icônes -->
    <div class="example-box" style="background-color: rgba(255, 0, 0, 1); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: rgba(255, 0, 0, 1); margin-right: 5px;"></i> Opacité 1 (complètement opaque)
    </div>
    <p><code>opacity: 1;</code></p>

    <div class="example-box" style="background-color: rgba(255, 0, 0, 0.7); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: rgba(255, 0, 0, 0.7); margin-right: 5px;"></i> Opacité 0.7 (semi-opaque)
    </div>
    <p><code>opacity: 0.7;</code></p>

    <div class="example-box" style="background-color: rgba(255, 0, 0, 0.5); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: rgba(255, 0, 0, 0.5); margin-right: 5px;"></i> Opacité 0.5 (semi-transparent)
    </div>
    <p><code>opacity: 0.5;</code></p>

    <div class="example-box" style="background-color: rgba(255, 0, 0, 0.3); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: rgba(255, 0, 0, 0.3); margin-right: 5px;"></i> Opacité 0.3 (translucide)
    </div>
    <p><code>opacity: 0.3;</code></p>

    <div class="example-box" style="background-color: rgba(255, 0, 0, 0.1); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: rgba(255, 0, 0, 0.1); margin-right: 5px;"></i> Opacité 0.1 (quasi transparent)
    </div>
    <p><code>opacity: 0.1;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fce4ec; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
        <strong>Astuce :</strong> Utilisez des niveaux d'opacité pour créer des effets d'empilement d'éléments et de superpositions visuelles intéressantes.
    </div>
</div>

<div class="col-md-6">
    <h3 id="border-color" style="display: flex; align-items: center;">
        <i class="fas fa-border-style" style="color: #e67e22; margin-right: 10px;"></i> Border Color
    </h3>
    <p>La propriété <code>border-color</code> permet de définir la couleur de la bordure d'un élément. Elle peut être appliquée pour souligner ou encadrer des sections importantes de votre page.</p>

    <!-- Exemples de couleur de bordure avec styles et icônes -->
    <div class="example-box" style="border: 2px solid red; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: red; margin-right: 5px;"></i> Bordure rouge
    </div>
    <p><code>border-color: red;</code></p>

    <div class="example-box" style="border: 2px solid blue; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: blue; margin-right: 5px;"></i> Bordure bleue
    </div>
    <p><code>border-color: blue;</code></p>

    <div class="example-box" style="border: 2px solid green; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: green; margin-right: 5px;"></i> Bordure verte
    </div>
    <p><code>border-color: green;</code></p>

    <div class="example-box" style="border: 2px solid #f39c12; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: #f39c12; margin-right: 5px;"></i> Bordure orange
    </div>
    <p><code>border-color: #f39c12;</code></p>

    <div class="example-box" style="border: 2px solid #8e44ad; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square" style="color: #8e44ad; margin-right: 5px;"></i> Bordure violette
    </div>
    <p><code>border-color: #8e44ad;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fcf3cf; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e67e22;"></i>
        <strong>Astuce :</strong> Utilisez des couleurs de bordure contrastées pour attirer l’attention sur des éléments clés ou délimiter des sections.
    </div>
</div>

<div class="col-md-6">
    <h3 id="rgba" style="display: flex; align-items: center;">
        <i class="fas fa-tint" style="color: #2ecc71; margin-right: 10px;"></i> RGBA
    </h3>
    <p>La fonction <code>rgba()</code> permet de définir une couleur en spécifiant des valeurs pour le rouge, le vert, le bleu, et un niveau d'alpha pour la transparence (de 0 pour totalement transparent à 1 pour totalement opaque).</p>

    <!-- Exemples de valeurs RGBA avec styles et icônes -->
    <div class="example-box" style="background-color: rgba(255, 0, 0, 0.3); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: rgba(255, 0, 0, 0.3); margin-right: 5px;"></i> Rouge avec 30% d'opacité
    </div>
    <p><code>background-color: rgba(255, 0, 0, 0.3);</code></p>

    <div class="example-box" style="background-color: rgba(0, 0, 255, 0.5); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: rgba(0, 0, 255, 0.5); margin-right: 5px;"></i> Bleu avec 50% d'opacité
    </div>
    <p><code>background-color: rgba(0, 0, 255, 0.5);</code></p>

    <div class="example-box" style="background-color: rgba(0, 128, 0, 0.7); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: rgba(0, 128, 0, 0.7); margin-right: 5px;"></i> Vert avec 70% d'opacité
    </div>
    <p><code>background-color: rgba(0, 128, 0, 0.7);</code></p>

    <div class="example-box" style="background-color: rgba(255, 165, 0, 0.9); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: rgba(255, 165, 0, 0.9); margin-right: 5px;"></i> Orange avec 90% d'opacité
    </div>
    <p><code>background-color: rgba(255, 165, 0, 0.9);</code></p>

    <div class="example-box" style="background-color: rgba(128, 0, 128, 0.2); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: rgba(128, 0, 128, 0.2); margin-right: 5px;"></i> Violet avec 20% d'opacité
    </div>
    <p><code>background-color: rgba(128, 0, 128, 0.2);</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #ecf0f1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2ecc71;"></i>
        <strong>Astuce :</strong> Utilisez la transparence pour créer des effets de superposition, en jouant avec les opacités pour faire ressortir des éléments sur des arrière-plans.
    </div>
</div>
<div class="col-md-6">
    <h3 id="hsl" style="display: flex; align-items: center;">
        <i class="fas fa-palette" style="color: #8e44ad; margin-right: 10px;"></i> HSL
    </h3>
    <p>La fonction <code>hsl()</code> permet de définir une couleur en spécifiant trois valeurs : la teinte (<em>hue</em>, en degrés, de 0 à 360), la saturation (en %, de 0% à 100%), et la luminosité (<em>lightness</em>, en %, de 0% à 100%).</p>

    <!-- Exemples de valeurs HSL avec styles et icônes -->
    <div class="example-box" style="background-color: hsl(0, 100%, 50%); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: hsl(0, 100%, 50%); margin-right: 5px;"></i> Rouge pur
    </div>
    <p><code>background-color: hsl(0, 100%, 50%);</code></p>

    <div class="example-box" style="background-color: hsl(120, 100%, 50%); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: hsl(120, 100%, 50%); margin-right: 5px;"></i> Vert pur
    </div>
    <p><code>background-color: hsl(120, 100%, 50%);</code></p>

    <div class="example-box" style="background-color: hsl(240, 100%, 50%); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: hsl(240, 100%, 50%); margin-right: 5px;"></i> Bleu pur
    </div>
    <p><code>background-color: hsl(240, 100%, 50%);</code></p>

    <div class="example-box" style="background-color: hsl(60, 100%, 50%); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: hsl(60, 100%, 50%); margin-right: 5px;"></i> Jaune pur
    </div>
    <p><code>background-color: hsl(60, 100%, 50%);</code></p>

    <div class="example-box" style="background-color: hsl(180, 50%, 50%); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-square-full" style="color: hsl(180, 50%, 50%); margin-right: 5px;"></i> Cyan à 50% de saturation
    </div>
    <p><code>background-color: hsl(180, 50%, 50%);</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f5eef8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #8e44ad;"></i>
        <strong>Astuce :</strong> Utilisez la fonction <code>hsl()</code> pour des ajustements rapides de couleur. Modifier la saturation et la luminosité permet de créer des nuances harmonieuses sans modifier la teinte.
    </div>
</div>

    </div>
</div>

<!-- Typographie -->
<div class="content-section" id="typography">
    <h2><i class="fas fa-font icon"></i> Typographie</h2>
    <div class="row">
        <!-- font-family -->
<div class="col-md-6">
    <h3 id="font-family" style="display: flex; align-items: center;">
        <i class="fas fa-font" style="color: #3498db; margin-right: 10px;"></i> Font Family
    </h3>
    <p>La propriété <code>font-family</code> permet de définir la police de caractère d'un élément. Elle peut inclure des polices de secours (fallback) pour assurer une cohérence visuelle en cas de non-disponibilité de la police principale.</p>

    <!-- Exemples de font-family avec styles et icônes -->
    <div class="example-box" style="font-family: Arial, sans-serif; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-font" style="color: #3498db; margin-right: 5px;"></i> Texte en Arial
    </div>
    <p><code>font-family: Arial, sans-serif;</code></p>

    <div class="example-box" style="font-family: 'Courier New', monospace; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-font" style="color: #3498db; margin-right: 5px;"></i> Texte en Courier New
    </div>
    <p><code>font-family: 'Courier New', monospace;</code></p>

    <div class="example-box" style="font-family: 'Times New Roman', serif; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-font" style="color: #3498db; margin-right: 5px;"></i> Texte en Times New Roman
    </div>
    <p><code>font-family: 'Times New Roman', serif;</code></p>

    <div class="example-box" style="font-family: 'Comic Sans MS', cursive; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-font" style="color: #3498db; margin-right: 5px;"></i> Texte en Comic Sans MS
    </div>
    <p><code>font-family: 'Comic Sans MS', cursive;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #d6eaf8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez des polices sans-serif pour une apparence moderne et des polices serif pour un style plus classique.
    </div>
</div>

<!-- font-size -->
<div class="col-md-6">
    <h3 id="font-size" style="display: flex; align-items: center;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 10px;"></i> Font Size
    </h3>
    <p>La propriété <code>font-size</code> ajuste la taille du texte. Vous pouvez définir la taille en pixels (<code>px</code>), en points (<code>pt</code>), ou en unités relatives comme <code>em</code> et <code>rem</code>.</p>

    <!-- Exemples de font-size avec styles et icônes -->
    <div class="example-box" style="font-size: 14px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte de taille 14px
    </div>
    <p><code>font-size: 14px;</code></p>

    <div class="example-box" style="font-size: 18px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte de taille 18px
    </div>
    <p><code>font-size: 18px;</code></p>

    <div class="example-box" style="font-size: 24px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte de taille 24px
    </div>
    <p><code>font-size: 24px;</code></p>

    <div class="example-box" style="font-size: 32px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte de taille 32px
    </div>
    <p><code>font-size: 32px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2ecc71;"></i>
        <strong>Astuce :</strong> Utilisez des tailles de texte relatives comme <code>em</code> et <code>rem</code> pour une meilleure adaptabilité sur différents écrans.
    </div>
</div>

        <!-- font-weight -->
<div class="col-md-6">
    <h3 id="font-weight" style="display: flex; align-items: center;">
        <i class="fas fa-bold" style="color: #e74c3c; margin-right: 10px;"></i> Font Weight
    </h3>
    <p>La propriété <code>font-weight</code> permet de régler l'épaisseur ou la graisse du texte. Elle prend des valeurs telles que <code>normal</code>, <code>bold</code>, ou des valeurs numériques (100 à 900) pour ajuster la visibilité.</p>

    <!-- Exemples de font-weight avec styles et icônes -->
    <div class="example-box" style="font-weight: 400; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text" style="color: #e74c3c; margin-right: 5px;"></i> Texte en poids normal (400)
    </div>
    <p><code>font-weight: 400;</code></p>

    <div class="example-box" style="font-weight: 600; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text" style="color: #e74c3c; margin-right: 5px;"></i> Texte en semi-gras (600)
    </div>
    <p><code>font-weight: 600;</code></p>

    <div class="example-box" style="font-weight: bold; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text" style="color: #e74c3c; margin-right: 5px;"></i> Texte en gras
    </div>
    <p><code>font-weight: bold;</code></p>

    <div class="example-box" style="font-weight: 900; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text" style="color: #e74c3c; margin-right: 5px;"></i> Texte en extra-gras (900)
    </div>
    <p><code>font-weight: 900;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdecea; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
        <strong>Astuce :</strong> Utilisez une graisse de texte plus lourde pour mettre en avant des titres ou des points clés, et des graisses plus légères pour les paragraphes.
    </div>
</div>

<!-- line-height -->
<div class="col-md-6">
    <h3 id="line-height" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt-v" style="color: #2ecc71; margin-right: 10px;"></i> Line Height
    </h3>
    <p>La propriété <code>line-height</code> ajuste l'espacement vertical entre les lignes de texte, favorisant la lisibilité et la clarté. Elle peut être définie avec des valeurs numériques, des pourcentages ou des unités de mesure (px, em).</p>

    <!-- Exemples de line-height avec styles et icônes -->
    <div class="example-box" style="line-height: 1.2; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte avec interligne de 1.2
    </div>
    <p><code>line-height: 1.2;</code></p>

    <div class="example-box" style="line-height: 1.5; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte avec interligne de 1.5
    </div>
    <p><code>line-height: 1.5;</code></p>

    <div class="example-box" style="line-height: 2; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte avec interligne de 2
    </div>
    <p><code>line-height: 2;</code></p>

    <div class="example-box" style="line-height: 3; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #2ecc71; margin-right: 5px;"></i> Texte avec interligne de 3
    </div>
    <p><code>line-height: 3;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2ecc71;"></i>
        <strong>Astuce :</strong> Une interligne plus grande rend le texte plus lisible, surtout pour les paragraphes. Privilégiez un interligne de 1.5 ou plus pour les longs textes.
    </div>
</div>
<!-- letter-spacing -->
<div class="col-md-6">
    <h3 id="letter-spacing" style="display: flex; align-items: center;">
        <i class="fas fa-text-width" style="color: #9b59b6; margin-right: 10px;"></i> Letter Spacing
    </h3>
    <p>La propriété <code>letter-spacing</code> permet de définir l'espacement entre les lettres dans un texte, favorisant la lisibilité ou créant des effets stylistiques.</p>

    <!-- Exemples de letter-spacing avec styles et icônes -->
    <div class="example-box" style="letter-spacing: 0px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-width" style="color: #9b59b6; margin-right: 5px;"></i> Espacement normal entre lettres
    </div>
    <p><code>letter-spacing: 0px;</code></p>

    <div class="example-box" style="letter-spacing: 2px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-width" style="color: #9b59b6; margin-right: 5px;"></i> Espacement de 2px entre lettres
    </div>
    <p><code>letter-spacing: 2px;</code></p>

    <div class="example-box" style="letter-spacing: 5px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-width" style="color: #9b59b6; margin-right: 5px;"></i> Espacement de 5px entre lettres
    </div>
    <p><code>letter-spacing: 5px;</code></p>

    <div class="example-box" style="letter-spacing: -1px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-width" style="color: #9b59b6; margin-right: 5px;"></i> Espacement réduit (-1px) entre lettres
    </div>
    <p><code>letter-spacing: -1px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f5eef8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #9b59b6;"></i>
        <strong>Astuce :</strong> Utilisez un espacement légèrement augmenté pour des titres ou des mots clés pour les rendre plus lisibles et attirants.
    </div>
</div>

<!-- word-spacing -->
<div class="col-md-6">
    <h3 id="word-spacing" style="display: flex; align-items: center;">
        <i class="fas fa-ellipsis-h" style="color: #3498db; margin-right: 10px;"></i> Word Spacing
    </h3>
    <p>La propriété <code>word-spacing</code> ajuste l'espacement entre les mots, ce qui peut améliorer la lisibilité des textes longs ou créer des effets stylistiques particuliers.</p>

    <!-- Exemples de word-spacing avec styles et icônes -->
    <div class="example-box" style="word-spacing: 0px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-ellipsis-h" style="color: #3498db; margin-right: 5px;"></i> Espacement normal entre mots
    </div>
    <p><code>word-spacing: 0px;</code></p>

    <div class="example-box" style="word-spacing: 5px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-ellipsis-h" style="color: #3498db; margin-right: 5px;"></i> Espacement de 5px entre mots
    </div>
    <p><code>word-spacing: 5px;</code></p>

    <div class="example-box" style="word-spacing: 10px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-ellipsis-h" style="color: #3498db; margin-right: 5px;"></i> Espacement de 10px entre mots
    </div>
    <p><code>word-spacing: 10px;</code></p>

    <div class="example-box" style="word-spacing: -2px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-ellipsis-h" style="color: #3498db; margin-right: 5px;"></i> Espacement réduit (-2px) entre mots
    </div>
    <p><code>word-spacing: -2px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #d6eaf8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez un espacement plus large pour les blocs de texte étroits et améliorez la lisibilité dans des paragraphes denses.
    </div>
</div>

        <!-- text-align -->
<div class="col-md-6">
    <h3 id="text-align" style="display: flex; align-items: center;">
        <i class="fas fa-align-center" style="color: #1abc9c; margin-right: 10px;"></i> Text Align
    </h3>
    <p>La propriété <code>text-align</code> définit l'alignement du texte dans un élément. Elle prend des valeurs telles que <code>left</code>, <code>center</code>, <code>right</code>, et <code>justify</code> pour organiser le contenu.</p>

    <!-- Exemples de text-align avec styles et icônes -->
    <div class="example-box" style="text-align: left; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-align-left" style="color: #1abc9c; margin-right: 5px;"></i> Texte aligné à gauche
    </div>
    <p><code>text-align: left;</code></p>

    <div class="example-box" style="text-align: center; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-align-center" style="color: #1abc9c; margin-right: 5px;"></i> Texte centré
    </div>
    <p><code>text-align: center;</code></p>

    <div class="example-box" style="text-align: right; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-align-right" style="color: #1abc9c; margin-right: 5px;"></i> Texte aligné à droite
    </div>
    <p><code>text-align: right;</code></p>

    <div class="example-box" style="text-align: justify; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-align-justify" style="color: #1abc9c; margin-right: 5px;"></i> Texte justifié
    </div>
    <p><code>text-align: justify;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #1abc9c;"></i>
        <strong>Astuce :</strong> Utilisez <code>justify</code> pour des paragraphes longs et <code>center</code> pour des titres ou des éléments importants.
    </div>
</div>

<!-- text-decoration -->
<div class="col-md-6">
    <h3 id="text-decoration" style="display: flex; align-items: center;">
        <i class="fas fa-underline" style="color: #e74c3c; margin-right: 10px;"></i> Text Decoration
    </h3>
    <p>La propriété <code>text-decoration</code> applique une décoration au texte, comme un soulignement, une ligne au-dessus, ou une ligne barrée.</p>

    <!-- Exemples de text-decoration avec styles et icônes -->
    <div class="example-box" style="text-decoration: underline; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-underline" style="color: #e74c3c; margin-right: 5px;"></i> Texte souligné
    </div>
    <p><code>text-decoration: underline;</code></p>

    <div class="example-box" style="text-decoration: overline; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-strikethrough" style="color: #e74c3c; margin-right: 5px; transform: rotate(180deg);"></i> Texte avec ligne au-dessus
    </div>
    <p><code>text-decoration: overline;</code></p>

    <div class="example-box" style="text-decoration: line-through; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-strikethrough" style="color: #e74c3c; margin-right: 5px;"></i> Texte barré
    </div>
    <p><code>text-decoration: line-through;</code></p>

    <div class="example-box" style="text-decoration: underline overline; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-underline" style="color: #e74c3c; margin-right: 5px;"></i> Texte souligné et avec ligne au-dessus
    </div>
    <p><code>text-decoration: underline overline;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdecea; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
        <strong>Astuce :</strong> Utilisez <code>underline</code> pour souligner les liens et <code>line-through</code> pour montrer des éléments indisponibles ou barrés.
    </div>
</div>
<!-- text-transform -->
<div class="col-md-6">
    <h3 id="text-transform" style="display: flex; align-items: center;">
        <i class="fas fa-text-height" style="color: #f39c12; margin-right: 10px;"></i> Text Transform
    </h3>
    <p>La propriété <code>text-transform</code> modifie la casse du texte. Elle peut transformer du texte en majuscules, minuscules, ou en capitalisant chaque mot.</p>

    <!-- Exemples de text-transform avec styles et icônes -->
    <div class="example-box" style="text-transform: uppercase; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #f39c12; margin-right: 5px;"></i> Texte en MAJUSCULES
    </div>
    <p><code>text-transform: uppercase;</code></p>

    <div class="example-box" style="text-transform: lowercase; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #f39c12; margin-right: 5px;"></i> texte en minuscules
    </div>
    <p><code>text-transform: lowercase;</code></p>

    <div class="example-box" style="text-transform: capitalize; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-text-height" style="color: #f39c12; margin-right: 5px;"></i> Texte Avec Majuscule Au Début De Chaque Mot
    </div>
    <p><code>text-transform: capitalize;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdf2e9; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #f39c12;"></i>
        <strong>Astuce :</strong> Utilisez <code>uppercase</code> pour les titres et <code>capitalize</code> pour un style formel.
    </div>
</div>

<!-- text-indent -->
<div class="col-md-6">
    <h3 id="text-indent" style="display: flex; align-items: center;">
        <i class="fas fa-indent" style="color: #2ecc71; margin-right: 10px;"></i> Text Indent
    </h3>
    <p>La propriété <code>text-indent</code> ajuste l'indentation de la première ligne de texte dans un paragraphe, ce qui est souvent utilisé pour améliorer la lisibilité des paragraphes longs.</p>

    <!-- Exemples de text-indent avec styles et icônes -->
    <div class="example-box" style="text-indent: 20px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-indent" style="color: #2ecc71; margin-right: 5px;"></i> Texte avec une indentation de 20px sur la première ligne. Cela améliore la structure des paragraphes en insérant une indentation.
    </div>
    <p><code>text-indent: 20px;</code></p>

    <div class="example-box" style="text-indent: 40px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-indent" style="color: #2ecc71; margin-right: 5px;"></i> Texte avec une indentation de 40px sur la première ligne. Cette technique est souvent utilisée dans les publications pour introduire de nouveaux paragraphes.
    </div>
    <p><code>text-indent: 40px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2ecc71;"></i>
        <strong>Astuce :</strong> Utilisez une légère indentation (environ 20px) pour rendre les textes plus élégants et organisés.
    </div>
</div>
<!-- font-style -->
<div class="col-md-6">
    <h3 id="font-style" style="display: flex; align-items: center;">
        <i class="fas fa-italic" style="color: #9b59b6; margin-right: 10px;"></i> Font Style
    </h3>
    <p>La propriété <code>font-style</code> définit le style de la police, comme <code>normal</code>, <code>italic</code>, ou <code>oblique</code>, ce qui permet d’ajouter des effets stylistiques au texte.</p>

    <!-- Exemples de font-style avec styles et icônes -->
    <div class="example-box" style="font-style: normal; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-font" style="color: #9b59b6; margin-right: 5px;"></i> Texte en style normal
    </div>
    <p><code>font-style: normal;</code></p>

    <div class="example-box" style="font-style: italic; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-italic" style="color: #9b59b6; margin-right: 5px;"></i> Texte en italique
    </div>
    <p><code>font-style: italic;</code></p>

    <div class="example-box" style="font-style: oblique; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-font" style="color: #9b59b6; margin-right: 5px;"></i> Texte en oblique
    </div>
    <p><code>font-style: oblique;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f5eef8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #9b59b6;"></i>
        <strong>Astuce :</strong> Utilisez <code>italic</code> pour les citations et <code>oblique</code> pour un style léger et moins formel.
    </div>
</div>

<!-- text-shadow -->
<div class="col-md-6">
    <h3 id="text-shadow" style="display: flex; align-items: center;">
        <i class="fas fa-shadow" style="color: #e67e22; margin-right: 10px;"></i> Text Shadow
    </h3>
    <p>La propriété <code>text-shadow</code> ajoute une ombre au texte, ce qui peut créer de la profondeur et des effets visuels uniques. Elle prend des valeurs pour le décalage horizontal, vertical, le flou, et la couleur.</p>

    <!-- Exemples de text-shadow avec styles et icônes -->
    <div class="example-box" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-shadow" style="color: #e67e22; margin-right: 5px;"></i> Ombre subtile
    </div>
    <p><code>text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);</code></p>

    <div class="example-box" style="text-shadow: 3px 3px 6px #e74c3c; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-shadow" style="color: #e67e22; margin-right: 5px;"></i> Ombre rouge intense
    </div>
    <p><code>text-shadow: 3px 3px 6px #e74c3c;</code></p>

    <div class="example-box" style="text-shadow: -2px 2px 5px #3498db; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-shadow" style="color: #e67e22; margin-right: 5px;"></i> Ombre bleue décalée
    </div>
    <p><code>text-shadow: -2px 2px 5px #3498db;</code></p>

    <div class="example-box" style="text-shadow: 1px 1px 2px #2ecc71, -1px -1px 2px #f39c12; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        <i class="fas fa-shadow" style="color: #e67e22; margin-right: 5px;"></i> Ombre multiple
    </div>
    <p><code>text-shadow: 1px 1px 2px #2ecc71, -1px -1px 2px #f39c12;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdf2e9; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e67e22;"></i>
        <strong>Astuce :</strong> Utilisez des ombres subtiles pour améliorer la lisibilité et des ombres multiples pour des effets décoratifs.
    </div>
</div>


    </div>
</div>

<!-- Positionnement -->
<div class="content-section" id="positioning">
    <h2 style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt" style="color: #2980b9; margin-right: 10px;"></i> Positionnement
    </h2>
    <div class="row">
        
        <!-- position -->
        <div class="col-md-12">
            <h3 id="position" style="display: flex; align-items: center;">
                <i class="fas fa-map-marker-alt" style="color: #2ecc71; margin-right: 10px;"></i> Position
            </h3>
            <p>La propriété <code>position</code> détermine le type de positionnement d'un élément : <code>relative</code>, <code>absolute</code>, <code>fixed</code>, ou <code>sticky</code>, qui modifient son placement dans le flux de la page.</p>

            <!-- Exemples de position avec styles et icônes -->
            <div class="example-box" style="position: relative; top: 10px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <i class="fas fa-arrow-down" style="color: #2ecc71; margin-right: 5px;"></i> Position relative avec décalage vers le bas
            </div>
            <p><code>position: relative; top: 10px;</code></p>

            <div class="example-box" style="opacity: 70%; position: absolute; top: 80px; left: 200px; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                <i class="fas fa-crosshairs" style="color: #2ecc71; margin-right: 5px;"></i> Position absolue avec décalage
            </div>
            <p><code>position: absolute; top: 10px; left: 20px;</code></p>

            <div class="example-box" style="position: sticky; top: 0; padding: 10px; border-radius: 5px; margin-bottom: 10px; background-color: #dff9fb;">
                <i class="fas fa-sticky-note" style="color: #2ecc71; margin-right: 5px;"></i> Position sticky en haut
            </div>
            <p><code>position: sticky; top: 0;</code></p>

            <!-- Boîte de conseil -->
            <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
                <i class="fas fa-lightbulb" style="color: #2ecc71;"></i>
                <strong>Astuce :</strong> Utilisez <code>fixed</code> pour des éléments toujours visibles comme les menus, et <code>sticky</code> pour des éléments qui se fixent lors du défilement.
            </div>
        </div>

        <!-- z-index -->
        <div class="col-md-6">
            <h3 id="z-index" style="display: flex; align-items: center;">
                <i class="fas fa-layer-group" style="color: #e74c3c; margin-right: 10px;"></i> Z-Index
            </h3>
            <p>La propriété <code>z-index</code> contrôle la superposition des éléments positionnés. Les valeurs plus élevées apparaissent au-dessus des valeurs plus faibles.</p>

            <!-- Exemples de z-index avec styles et icônes -->
            <div class="example-box" style="position: relative; z-index: 1; background-color: lightgrey; padding: 10px; border-radius: 5px; margin-bottom: -15px;">
                <i class="fas fa-layer-group" style="color: #e74c3c; margin-right: 5px;"></i> z-index de 1
            </div>
            <p><code>z-index: 1;</code></p>

            <div class="example-box" style="position: relative; z-index: 2; background-color: yellow; padding: 10px; border-radius: 5px; margin-top: 15px; margin-bottom: -15px;">
                <i class="fas fa-layer-group" style="color: #e74c3c; margin-right: 5px;"></i> z-index de 2
            </div>
            <p><code>z-index: 2;</code></p>

            <div class="example-box" style="position: relative; z-index: 3; background-color: orange; padding: 10px; border-radius: 5px; margin-top: 15px;">
                <i class="fas fa-layer-group" style="color: #e74c3c; margin-right: 5px;"></i> z-index de 3
            </div>
            <p><code>z-index: 3;</code></p>

            <!-- Boîte de conseil -->
            <div style="background-color: #fdecea; padding: 10px; border-radius: 5px; margin-top: 20px;">
                <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
                <strong>Astuce :</strong> Utilisez des valeurs <code>z-index</code> élevées pour des éléments essentiels (comme des menus déroulants) pour les superposer à d’autres éléments.
            </div>
        </div>

        <!-- top, right, bottom, left -->
        <div class="col-md-6">
            <h3 id="trbl" style="display: flex; align-items: center;">
                <i class="fas fa-arrows-alt" style="color: #2980b9; margin-right: 10px;"></i> Position avec <code>top</code>, <code>right</code>, <code>bottom</code>, <code>left</code>
            </h3>
            <p>Les propriétés <code>top</code>, <code>right</code>, <code>bottom</code>, et <code>left</code> définissent les positions respectives d'un élément positionné dans son conteneur ou par rapport au viewport.</p>

            <!-- Exemples de top, right, bottom, left -->
            <div class="example-box" style="position: relative; top: 20px; padding: 10px; border-radius: 5px; margin-bottom: 10px; background-color: #f9ebea;">
                <i class="fas fa-arrow-down" style="color: #e74c3c; margin-right: 5px;"></i> Décalage de 20px depuis le haut
            </div>
            <p><code>position: relative; top: 20px;</code></p>

            <div class="example-box" style="position: relative; right: 20px; padding: 10px; border-radius: 5px; margin-bottom: 10px; background-color: #eaf2f8;">
                <i class="fas fa-arrow-left" style="color: #3498db; margin-right: 5px;"></i> Décalage de 20px depuis la droite
            </div>
            <p><code>position: relative; right: 20px;</code></p>

            <div class="example-box" style="position: relative; bottom: 20px; padding: 10px; border-radius: 5px; margin-bottom: 10px; background-color: #e9f7ef;">
                <i class="fas fa-arrow-up" style="color: #27ae60; margin-right: 5px;"></i> Décalage de 20px depuis le bas
            </div>
            <p><code>position: relative; bottom: 20px;</code></p>

            <div class="example-box" style="position: relative; left: 20px; padding: 10px; border-radius: 5px; margin-bottom: 10px; background-color: #fef5e7;">
                <i class="fas fa-arrow-right" style="color: #f39c12; margin-right: 5px;"></i> Décalage de 20px depuis la gauche
            </div>
            <p><code>position: relative; left: 20px;</code></p>

            <!-- Boîte de conseil -->
            <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
                <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
                <strong>Astuce :</strong> Utilisez <code>top</code>, <code>right</code>, <code>bottom</code>, et <code>left</code> en combinaison avec les propriétés de <code>position</code> pour un contrôle précis du placement des éléments.
            </div>
        </div>

        <!-- Float et Clear -->
<div class="content-section" id="float-clear">
    <h2 style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt" style="color: #2980b9; margin-right: 10px;"></i> Float et Clear
    </h2>
    <div class="row">

        <!-- float -->
        <div class="col-md-6">
            <h3 id="float" style="display: flex; align-items: center;">
                <i class="fas fa-align-left" style="color: #f39c12; margin-right: 10px;"></i> Float
            </h3>
            <p>La propriété <code>float</code> permet à un élément de "flotter" à gauche ou à droite, le retirant du flux normal et permettant au texte ou aux autres éléments de s'enrouler autour de lui.</p>

            <!-- Exemples de float avec styles et icônes -->
            <div class="example-box" style="float: left; width: 100px; padding: 10px; background-color: #f7dc6f; margin-right: 10px; margin-bottom: 10px;">
                <i class="fas fa-align-left" style="color: #f39c12; margin-right: 5px;"></i> Flottant à gauche
            </div>
            <p><code>float: left;</code></p>

            <div class="example-box" style="float: right; width: 100px; padding: 10px; background-color: #aed6f1; margin-bottom: 10px;">
                <i class="fas fa-align-right" style="color: #3498db; margin-right: 5px;"></i> Flottant à droite
            </div>
            <p><code>float: right;</code></p>

            <!-- Boîte de conseil -->
            <div style="background-color: #fef9e7; padding: 10px; border-radius: 5px; margin-top: 20px;">
                <i class="fas fa-lightbulb" style="color: #f39c12;"></i>
                <strong>Astuce :</strong> Utilisez <code>float</code> pour créer des mises en page où le texte s'enroule autour d'images ou de blocs flottants.
            </div>
        </div>

        <!-- clear -->
        <div class="col-md-6">
            <h3 id="clear" style="display: flex; align-items: center;">
                <i class="fas fa-times" style="color: #e74c3c; margin-right: 10px;"></i> Clear
            </h3>
            <p>La propriété <code>clear</code> est utilisée pour contrôler le comportement d'un élément par rapport aux éléments flottants. Elle peut prendre les valeurs <code>left</code>, <code>right</code>, <code>both</code>, ou <code>none</code>.</p>

            <!-- Exemples de clear avec styles et icônes -->
            <div class="example-box" style="clear: left; padding: 10px; background-color: #fadbd8; margin-bottom: 10px;">
                <i class="fas fa-times-circle" style="color: #e74c3c; margin-right: 5px;"></i> Clear à gauche
            </div>
            <p><code>clear: left;</code></p>

            <div class="example-box" style="clear: right; padding: 10px; background-color: #d5f5e3; margin-bottom: 10px;">
                <i class="fas fa-times-circle" style="color: #27ae60; margin-right: 5px;"></i> Clear à droite
            </div>
            <p><code>clear: right;</code></p>

            <div class="example-box" style="clear: both; padding: 10px; background-color: #d6eaf8; margin-bottom: 10px;">
                <i class="fas fa-times-circle" style="color: #3498db; margin-right: 5px;"></i> Clear des deux côtés
            </div>
            <p><code>clear: both;</code></p>

            <!-- Boîte de conseil -->
            <div style="background-color: #fdecea; padding: 10px; border-radius: 5px; margin-top: 20px;">
                <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
                <strong>Astuce :</strong> Utilisez <code>clear: both</code> pour éviter que des éléments flottants affectent la mise en page des sections suivantes.
            </div>
        </div>

    </div>
</div>
<!-- Overflow -->
<div class="content-section" id="overflow">
    <h2 style="display: flex; align-items: center;">
        <i class="fas fa-expand-arrows-alt" style="color: #3498db; margin-right: 10px;"></i> Overflow
    </h2>
    <div class="row">

        <!-- overflow -->
        <div class="col-md-12">
            <h3 id="overflow" style="display: flex; align-items: center;">
                <i class="fas fa-arrows-alt" style="color: #9b59b6; margin-right: 10px;"></i> Overflow
            </h3>
            <p>La propriété <code>overflow</code> contrôle le comportement du contenu qui dépasse les dimensions d'un élément. Elle accepte les valeurs <code>visible</code>, <code>hidden</code>, <code>scroll</code>, et <code>auto</code>.</p>

            <!-- Exemples de overflow avec styles et icônes -->
            <div class="example-box" style="position: relative; left: 150px; width: 150px; height: 80px; overflow: visible; padding: 10px; border: 1px solid #9b59b6; margin-bottom: 10px;">
                <i class="fas fa-eye" style="color: #9b59b6; margin-right: 5px;"></i> Contenu visible (par défaut)
                <p style="margin: 0;">Texte débordant qui reste visible en dehors de la boîte.</p>
            </div>
            <p><code>overflow: visible;</code></p>

            <div class="example-box" style="position: relative; left: 350px; width: 150px; height: 80px; overflow: hidden; padding: 10px; border: 1px solid #9b59b6; margin-bottom: 10px;">
                <i class="fas fa-eye-slash" style="color: #9b59b6; margin-right: 5px;"></i> Contenu masqué
                <p style="margin: 0;">Texte débordant masqué dans la boîte.</p>
            </div>
            <p><code>overflow: hidden;</code></p>

            <div class="example-box" style="width: 150px; height: 80px; overflow: scroll; padding: 10px; border: 1px solid #9b59b6; margin-bottom: 10px;">
                <i class="fas fa-scroll" style="color: #9b59b6; margin-right: 5px;"></i> Contenu avec barres de défilement
                <p style="margin: 0;">Texte débordant avec une barre de défilement.</p>
            </div>
            <p><code>overflow: scroll;</code></p>

            <div class="example-box" style="width: 150px; height: 80px; overflow: auto; padding: 10px; border: 1px solid #9b59b6; margin-bottom: 10px;">
                <i class="fas fa-arrows-alt-h" style="color: #9b59b6; margin-right: 5px;"></i> Contenu avec défilement automatique
                <p style="margin: 0;">Texte débordant avec barre de défilement seulement si nécessaire.</p>
            </div>
            <p><code>overflow: auto;</code></p>

            <!-- Boîte de conseil -->
            <div style="background-color: #f4ecf7; padding: 10px; border-radius: 5px; margin-top: 20px;">
                <i class="fas fa-lightbulb" style="color: #9b59b6;"></i>
                <strong>Astuce :</strong> Utilisez <code>overflow: hidden</code> pour masquer le contenu excédentaire ou <code>overflow: auto</code> pour permettre le défilement automatique seulement en cas de dépassement.
            </div>
        </div>
        
    </div>
</div>


    </div>
</div>

<!-- Mise en page -->
<div class="content-section" id="layout">
    <h2><i class="fas fa-th-large icon"></i> Mise en page</h2>
    <div class="row">
        <!-- Display -->
<div class="col-md-6">
    <h3 id="display" style="display: flex; align-items: center;">
        <i class="fas fa-eye" style="color: #2980b9; margin-right: 10px;"></i> Display
    </h3>
    <p>La propriété <code>display</code> définit le type d'affichage d'un élément. Elle prend des valeurs telles que <code>block</code>, <code>inline</code>, <code>inline-block</code>, <code>flex</code>, et <code>grid</code> pour ajuster la disposition des éléments.</p>

    <!-- Exemple display: inline -->
    <div class="example-box" style="display: inline; background-color: #f9e79f; padding: 5px; margin-right: 5px;">
        Texte avec display: inline
    </div>
    <p><code>display: inline;</code></p>
    <pre><code>&lt;div style="display: inline;"&gt;Texte avec display: inline&lt;/div&gt;</code></pre>

    <!-- Exemple display: block -->
    <div class="example-box" style="display: block; background-color: #aed6f1; padding: 5px; margin-bottom: 10px;">
        Texte avec display: block
    </div>
    <p><code>display: block;</code></p>
    <pre><code>&lt;div style="display: block;"&gt;Texte avec display: block&lt;/div&gt;</code></pre>

    <!-- Exemple display: inline-block -->
    <div class="example-box" style="display: inline-block; background-color: #f5b7b1; padding: 5px; margin-right: 5px;">
        Texte avec display: inline-block
    </div>
    <p><code>display: inline-block;</code></p>
    <pre><code>&lt;div style="display: inline-block;"&gt;Texte avec display: inline-block&lt;/div&gt;</code></pre>

    <!-- Exemple display: flex -->
    <div class="example-box" style="display: flex; gap: 5px; background-color: #eafaf1; padding: 5px; border: 1px solid #27ae60; border-radius: 5px;">
        <div style="background-color: #76d7c4; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
    </div>
    <p><code>display: flex;</code></p>
    <pre><code>&lt;div style="display: flex;"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <!-- Exemple display: grid -->
    <div class="example-box" style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px; background-color: #f4ecf7; padding: 5px; border: 1px solid #9b59b6; border-radius: 5px;">
        <div style="background-color: #f1948a; padding: 5px;">Item 1</div>
        <div style="background-color: #48c9b0; padding: 5px;">Item 2</div>
    </div>
    <p><code>display: grid; grid-template-columns: 1fr 1fr;</code></p>
    <pre><code>&lt;div style="display: grid; grid-template-columns: 1fr 1fr;"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
        <strong>Astuce :</strong> Utilisez <code>display: inline</code> pour que les éléments suivent le flux du texte, <code>block</code> pour qu'ils occupent toute la largeur disponible, <code>inline-block</code> pour des éléments en ligne avec des dimensions contrôlables, <code>flex</code> pour des mises en page dynamiques, et <code>grid</code> pour créer des dispositions en grille.
    </div>
</div>


<!-- Flexbox -->
<div class="col-md-6">
    <h3 id="flexbox" style="display: flex; align-items: center;">
        <i class="fas fa-grip-horizontal" style="color: #27ae60; margin-right: 10px;"></i> Flexbox
    </h3>
    <p>La propriété <code>display: flex</code> est utilisée pour créer des mises en page flexibles, permettant aux éléments de s'aligner et de se répartir dynamiquement dans un conteneur.</p>

    <!-- Exemple de flexbox de base avec gap -->
    <div class="example-box" style="display: flex; gap: 10px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #76d7c4; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
        <div style="background-color: #2ecc71; padding: 5px;">Item 3</div>
    </div>
    <p><code>display: flex; gap: 10px;</code></p>

    <!-- Exemple avec justify-content: space-between -->
    <div class="example-box" style="display: flex; justify-content: space-between; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #76d7c4; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
        <div style="background-color: #2ecc71; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: space-between;</code></p>

    <!-- Exemple avec justify-content: center et align-items: center -->
    <div class="example-box" style="display: flex; justify-content: center; align-items: center; height: 100px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #76d7c4; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
    </div>
    <p><code>justify-content: center; align-items: center;</code></p>

    <!-- Exemple avec flex-direction: column -->
    <div class="example-box" style="display: flex; flex-direction: column; gap: 10px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1;">
        <div style="background-color: #76d7c4; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
        <div style="background-color: #2ecc71; padding: 5px;">Item 3</div>
    </div>
    <p><code>flex-direction: column;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #27ae60;"></i>
        <strong>Astuce :</strong> Utilisez <code>flexbox</code> avec des propriétés comme <code>justify-content</code>, <code>align-items</code>, et <code>flex-direction</code> pour créer des mises en page dynamiques et adaptatives.
    </div>
</div>

<!-- Grid -->
<div class="col-md-6">
    <h3 id="grid" style="display: flex; align-items: center;">
        <i class="fas fa-th" style="color: #9b59b6; margin-right: 10px;"></i> Grid
    </h3>
    <p>La propriété <code>display: grid</code> est utilisée pour créer des mises en page en grille, permettant de placer des éléments dans un arrangement en lignes et colonnes.</p>

    <!-- Exemple simple de grid -->
    <div class="example-box" style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; padding: 10px; border: 1px solid #9b59b6; border-radius: 5px; background-color: #f4ecf7; margin-bottom: 15px;">
        <div style="background-color: #f1948a; padding: 5px;">Item 1</div>
        <div style="background-color: #48c9b0; padding: 5px;">Item 2</div>
    </div>
    <p><code>display: grid; grid-template-columns: 1fr 1fr;</code></p>

    <!-- Exemple de grid avec plusieurs colonnes et lignes -->
    <div class="example-box" style="display: grid; grid-template-columns: 1fr 2fr 1fr; grid-template-rows: auto auto; gap: 10px; padding: 10px; border: 1px solid #9b59b6; border-radius: 5px; background-color: #f4ecf7; margin-bottom: 15px;">
        <div style="background-color: #f1948a; padding: 5px;">Item 1</div>
        <div style="background-color: #f7dc6f; padding: 5px;">Item 2</div>
        <div style="background-color: #48c9b0; padding: 5px;">Item 3</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 4</div>
        <div style="background-color: #a9dfbf; padding: 5px;">Item 5</div>
    </div>
    <p><code>grid-template-columns: 1fr 2fr 1fr; grid-template-rows: auto auto;</code></p>

    <!-- Exemple de grid avec fusion de cellules (grid-area) -->
    <div class="example-box" style="display: grid; grid-template-columns: 1fr 1fr; grid-template-areas: 'header header' 'content sidebar' 'footer footer'; gap: 10px; padding: 10px; border: 1px solid #9b59b6; border-radius: 5px; background-color: #f4ecf7;">
        <div style="grid-area: header; background-color: #f1948a; padding: 5px;">Header</div>
        <div style="grid-area: content; background-color: #85c1e9; padding: 5px;">Content</div>
        <div style="grid-area: sidebar; background-color: #48c9b0; padding: 5px;">Sidebar</div>
        <div style="grid-area: footer; background-color: #a9dfbf; padding: 5px;">Footer</div>
    </div>
    <p><code>grid-template-areas: 'header header' 'content sidebar' 'footer footer';</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fef9e7; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #9b59b6;"></i>
        <strong>Astuce :</strong> Utilisez <code>grid-template-columns</code> et <code>grid-template-rows</code> pour définir la structure de la grille et <code>grid-area</code> pour fusionner les cellules pour des mises en page plus complexes.
    </div>
</div>


<!-- Align Items -->
<div class="col-md-6">
    <h3 id="align-items" style="display: flex; align-items: center;">
        <i class="fas fa-align-center" style="color: #27ae60; margin-right: 10px;"></i> Align Items
    </h3>
    <p>La propriété <code>align-items</code> contrôle l'alignement vertical des éléments dans un conteneur <code>flex</code> ou <code>grid</code>. Elle accepte des valeurs comme <code>center</code>, <code>flex-start</code>, <code>flex-end</code>, <code>stretch</code>, et <code>baseline</code>.</p>

    <!-- Exemple align-items: center -->
    <div class="example-box" style="display: flex; align-items: center; height: 100px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #f1948a; padding: 5px;">Centré verticalement</div>
    </div>
    <p><code>align-items: center;</code></p>

    <!-- Exemple align-items: flex-start -->
    <div class="example-box" style="display: flex; align-items: flex-start; height: 100px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #f1948a; padding: 5px;">Aligné en haut</div>
    </div>
    <p><code>align-items: flex-start;</code></p>

    <!-- Exemple align-items: flex-end -->
    <div class="example-box" style="display: flex; align-items: flex-end; height: 100px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #f1948a; padding: 5px;">Aligné en bas</div>
    </div>
    <p><code>align-items: flex-end;</code></p>

    <!-- Exemple align-items: stretch -->
    <div class="example-box" style="display: flex; align-items: stretch; height: 100px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #f1948a; padding: 5px; height: 100%;">Étendu</div>
    </div>
    <p><code>align-items: stretch;</code></p>

    <!-- Exemple align-items: baseline -->
    <div class="example-box" style="display: flex; align-items: baseline; height: 100px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1;">
        <div style="background-color: #f1948a; padding: 5px; font-size: 20px;">Aligné à la ligne de base</div>
        <div style="background-color: #58d68d; padding: 5px; font-size: 14px;">Texte plus petit</div>
    </div>
    <p><code>align-items: baseline;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #27ae60;"></i>
        <strong>Astuce :</strong> Utilisez <code>align-items</code> pour positionner les éléments de manière flexible dans un conteneur flex ou grid, selon leur hauteur ou leur ligne de base.
    </div>
</div>


        <!-- Justify Content -->
<div class="col-md-6">
    <h3 id="justify-content" style="display: flex; align-items: center;">
        <i class="fas fa-align-justify" style="color: #3498db; margin-right: 10px;"></i> Justify Content
    </h3>
    <p>La propriété <code>justify-content</code> contrôle l'alignement horizontal des éléments dans un conteneur <code>flex</code> ou <code>grid</code>, distribuant l'espace entre eux selon la valeur choisie.</p>

    <!-- Exemple justify-content: flex-start -->
    <div class="example-box" style="display: flex; justify-content: flex-start; padding: 10px; border: 1px solid #3498db; border-radius: 5px; background-color: #eaf2f8; margin-bottom: 15px;">
        <div style="background-color: #aed6f1; padding: 5px;">Item 1</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 2</div>
        <div style="background-color: #5dade2; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: flex-start;</code></p>

    <!-- Exemple justify-content: flex-end -->
    <div class="example-box" style="display: flex; justify-content: flex-end; padding: 10px; border: 1px solid #3498db; border-radius: 5px; background-color: #eaf2f8; margin-bottom: 15px;">
        <div style="background-color: #aed6f1; padding: 5px;">Item 1</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 2</div>
        <div style="background-color: #5dade2; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: flex-end;</code></p>

    <!-- Exemple justify-content: center -->
    <div class="example-box" style="display: flex; justify-content: center; padding: 10px; border: 1px solid #3498db; border-radius: 5px; background-color: #eaf2f8; margin-bottom: 15px;">
        <div style="background-color: #aed6f1; padding: 5px;">Item 1</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 2</div>
        <div style="background-color: #5dade2; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: center;</code></p>

    <!-- Exemple justify-content: space-between -->
    <div class="example-box" style="display: flex; justify-content: space-between; padding: 10px; border: 1px solid #3498db; border-radius: 5px; background-color: #eaf2f8; margin-bottom: 15px;">
        <div style="background-color: #aed6f1; padding: 5px;">Item 1</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 2</div>
        <div style="background-color: #5dade2; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: space-between;</code></p>

    <!-- Exemple justify-content: space-around -->
    <div class="example-box" style="display: flex; justify-content: space-around; padding: 10px; border: 1px solid #3498db; border-radius: 5px; background-color: #eaf2f8; margin-bottom: 15px;">
        <div style="background-color: #aed6f1; padding: 5px;">Item 1</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 2</div>
        <div style="background-color: #5dade2; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: space-around;</code></p>

    <!-- Exemple justify-content: space-evenly -->
    <div class="example-box" style="display: flex; justify-content: space-evenly; padding: 10px; border: 1px solid #3498db; border-radius: 5px; background-color: #eaf2f8;">
        <div style="background-color: #aed6f1; padding: 5px;">Item 1</div>
        <div style="background-color: #85c1e9; padding: 5px;">Item 2</div>
        <div style="background-color: #5dade2; padding: 5px;">Item 3</div>
    </div>
    <p><code>justify-content: space-evenly;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eaf2f8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez <code>justify-content</code> pour ajuster la répartition de l’espace horizontal entre les éléments, en fonction de la disposition souhaitée : <code>center</code> pour un centrage, <code>space-between</code> pour des espaces égaux, ou <code>flex-end</code> pour un alignement à droite.
    </div>
</div>


<!-- Gap -->
<div class="col-md-6">
    <h3 id="gap" style="display: flex; align-items: center;">
        <i class="fas fa-grip-lines" style="color: #27ae60; margin-right: 10px;"></i> Gap
    </h3>
    <p>La propriété <code>gap</code> crée de l'espace entre les éléments d'un conteneur <code>flex</code> ou <code>grid</code>, facilitant le contrôle de l'espacement sans marges ou paddings supplémentaires.</p>

    <!-- Exemple de gap: 15px dans un conteneur flex -->
    <div class="example-box" style="display: flex; gap: 15px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #82e0aa; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
        <div style="background-color: #2ecc71; padding: 5px;">Item 3</div>
    </div>
    <p><code>gap: 15px;</code> dans un conteneur flex</p>

    <!-- Exemple de gap: 30px dans un conteneur flex -->
    <div class="example-box" style="display: flex; gap: 30px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1; margin-bottom: 15px;">
        <div style="background-color: #82e0aa; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
        <div style="background-color: #2ecc71; padding: 5px;">Item 3</div>
    </div>
    <p><code>gap: 30px;</code> dans un conteneur flex</p>

    <!-- Exemple de gap dans un conteneur grid -->
    <div class="example-box" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; padding: 10px; border: 1px solid #27ae60; border-radius: 5px; background-color: #eafaf1;">
        <div style="background-color: #82e0aa; padding: 5px;">Item 1</div>
        <div style="background-color: #58d68d; padding: 5px;">Item 2</div>
        <div style="background-color: #2ecc71; padding: 5px;">Item 3</div>
        <div style="background-color: #27ae60; padding: 5px;">Item 4</div>
    </div>
    <p><code>grid-template-columns: 1fr 1fr; gap: 20px;</code> dans un conteneur grid</p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #27ae60;"></i>
        <strong>Astuce :</strong> Utilisez <code>gap</code> pour ajuster facilement l'espacement entre les éléments, en augmentant la lisibilité et l'esthétique sans ajouter de marges individuelles.
    </div>
</div>


    </div>
</div>

<!-- Marges et Espacements -->
<div class="content-section" id="spacing">
    <h2><i class="fas fa-arrows-alt icon"></i> Marges et Espacements</h2>
    <div class="row">
        <!-- Margin -->
<div class="col-md-6">
    <h3 id="margin" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt" style="color: #3498db; margin-right: 10px;"></i> Margin
    </h3>
    <p>La propriété <code>margin</code> définit l'espace extérieur autour de l'élément, créant de l'espace entre l'élément et ceux qui l'entourent. Elle peut être appliquée uniformément ou spécifiquement sur chaque côté.</p>

    <!-- Exemple de marge uniforme -->
    <div class="example-box" style="margin: 20px; background-color: lightgrey; padding: 5px;">
        Avec marges de 20px
    </div>
    <p><code>margin: 20px;</code></p>

    <!-- Exemple de marges individuelles (haut, droite, bas, gauche) -->
    <div class="example-box" style="margin: 10px 20px 30px 40px; background-color: lightgrey; padding: 5px;">
        Marge : haut 10px, droite 20px, bas 30px, gauche 40px
    </div>
    <p><code>margin: 10px 20px 30px 40px;</code></p>

    <!-- Exemple de marges horizontales et verticales -->
    <div class="example-box" style="margin: 15px 30px; background-color: lightgrey; padding: 5px;">
        Marge : 15px vertical, 30px horizontal
    </div>
    <p><code>margin: 15px 30px;</code></p>

    <!-- Exemple de centrage avec margin auto -->
    <div class="example-box" style="margin: 0 auto; width: 50%; background-color: lightgrey; padding: 5px;">
        Centré horizontalement avec <code>margin: auto</code>
    </div>
    <p><code>margin: 0 auto;</code> pour centrer un élément horizontalement</p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eaf2f8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez des marges individuelles (ex. <code>margin-top</code>, <code>margin-right</code>, etc.) pour un contrôle précis, et <code>margin: auto</code> pour centrer des éléments en largeur fixe.
    </div>
</div>

        <!-- Padding -->
<div class="col-md-6">
    <h3 id="padding" style="display: flex; align-items: center;">
        <i class="fas fa-expand" style="color: #3498db; margin-right: 10px;"></i> Padding
    </h3>
    <p>La propriété <code>padding</code> définit l'espace intérieur entre le contenu et la bordure de l'élément, créant une séparation autour du contenu lui-même. Elle peut être appliquée uniformément ou spécifiquement sur chaque côté.</p>

    <!-- Exemple de padding uniforme -->
    <div class="example-box" style="padding: 20px; background-color: lightgrey;">
        Avec padding de 20px
    </div>
    <p><code>padding: 20px;</code></p>

    <!-- Exemple de padding individuel (haut, droite, bas, gauche) -->
    <div class="example-box" style="padding: 10px 20px 30px 40px; background-color: lightgrey; margin-top: 10px;">
        Padding : haut 10px, droite 20px, bas 30px, gauche 40px
    </div>
    <p><code>padding: 10px 20px 30px 40px;</code></p>

    <!-- Exemple de padding vertical et horizontal -->
    <div class="example-box" style="padding: 15px 30px; background-color: lightgrey; margin-top: 10px;">
        Padding : 15px vertical, 30px horizontal
    </div>
    <p><code>padding: 15px 30px;</code></p>

    <!-- Exemple avec padding uniquement en haut et en bas -->
    <div class="example-box" style="padding: 20px 0; background-color: lightgrey; margin-top: 10px;">
        Padding : 20px en haut et en bas, 0 à gauche et droite
    </div>
    <p><code>padding: 20px 0;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eaf2f8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez des valeurs de <code>padding</code> individuelles pour ajuster précisément l'espace intérieur de chaque côté de l'élément, ou utilisez une seule valeur pour appliquer le même padding partout.
    </div>
</div>

        <!-- Border -->
<div class="col-md-6">
    <h3 id="border" style="display: flex; align-items: center;">
        <i class="fas fa-border-style" style="color: #2c3e50; margin-right: 10px;"></i> Border
    </h3>
    <p>La propriété <code>border</code> définit la bordure autour d'un élément. Elle peut spécifier la largeur, le style et la couleur de la bordure.</p>

    <!-- Exemple de bordure simple -->
    <div class="example-box" style="border: 2px solid black; padding: 5px; margin-bottom: 10px;">
        Bordure de 2px noire
    </div>
    <p><code>border: 2px solid black;</code></p>

    <!-- Exemple de bordure colorée et plus épaisse -->
    <div class="example-box" style="border: 4px solid #3498db; padding: 5px; margin-bottom: 10px;">
        Bordure bleue de 4px
    </div>
    <p><code>border: 4px solid #3498db;</code></p>

    <!-- Exemple de bordure avec style en pointillés -->
    <div class="example-box" style="border: 2px dotted #e74c3c; padding: 5px; margin-bottom: 10px;">
        Bordure rouge en pointillés
    </div>
    <p><code>border: 2px dotted #e74c3c;</code></p>

    <!-- Exemple de bordure uniquement en haut -->
    <div class="example-box" style="border-top: 3px solid #2ecc71; padding: 5px; margin-bottom: 10px;">
        Bordure en haut de 3px verte
    </div>
    <p><code>border-top: 3px solid #2ecc71;</code></p>

    <!-- Exemple de bordure arrondie -->
    <div class="example-box" style="border: 2px solid #9b59b6; border-radius: 10px; padding: 5px;">
        Bordure de 2px avec coins arrondis
    </div>
    <p><code>border: 2px solid #9b59b6; border-radius: 10px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2c3e50;"></i>
        <strong>Astuce :</strong> Utilisez <code>border-radius</code> pour adoucir les angles d’une bordure, et combinez différents styles et couleurs pour un effet visuel plus attrayant.
    </div>
</div>
<!-- Border Radius -->
<div class="col-md-6">
    <h3 id="border-radius" style="display: flex; align-items: center;">
        <i class="fas fa-circle-notch" style="color: #9b59b6; margin-right: 10px;"></i> Border Radius
    </h3>
    <p>La propriété <code>border-radius</code> permet d'arrondir les coins d'un élément. Elle accepte des valeurs en pixels, pourcentages ou unités de longueur. Vous pouvez appliquer des arrondis uniformes ou spécifiques à chaque coin.</p>

    <!-- Exemple de coins arrondis uniformes -->
    <div class="example-box" style="border: 2px solid #9b59b6; border-radius: 10px; padding: 5px; margin-bottom: 10px;">
        Coins arrondis de 10px
    </div>
    <p><code>border-radius: 10px;</code></p>

    <!-- Exemple de coins arrondis en cercle -->
    <div class="example-box" style="border: 2px solid #9b59b6; border-radius: 50%; padding: 20px; width: 80px; height: 80px; text-align: center; margin-bottom: 10px;">
        Cercle
    </div>
    <p><code>border-radius: 50%;</code></p>

    <!-- Exemple de coins arrondis partiels (haut-gauche et bas-droit) -->
    <div class="example-box" style="border: 2px solid #9b59b6; border-top-left-radius: 15px; border-bottom-right-radius: 15px; padding: 5px; margin-bottom: 10px;">
        Arrondi haut-gauche et bas-droit
    </div>
    <p><code>border-top-left-radius: 15px; border-bottom-right-radius: 15px;</code></p>

    <!-- Exemple de bordure elliptique avec valeurs multiples -->
    <div class="example-box" style="border: 2px solid #9b59b6; border-radius: 20px 50px; padding: 5px; margin-bottom: 10px;">
        Bordure elliptique
    </div>
    <p><code>border-radius: 20px 50px;</code></p>

    <!-- Exemple de bordure arrondie avec des valeurs spécifiques pour chaque coin -->
    <div class="example-box" style="border: 2px solid #9b59b6; border-radius: 10px 20px 30px 40px; padding: 5px; margin-bottom: 10px;">
        Coins arrondis : 10px, 20px, 30px, 40px
    </div>
    <p><code>border-radius: 10px 20px 30px 40px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #9b59b6;"></i>
        <strong>Astuce :</strong> Utilisez <code>border-radius: 50%</code> pour créer des éléments circulaires parfaits, et combinez des valeurs pour des effets personnalisés sur chaque coin.
    </div>
</div>

        <!-- Outline -->
<div class="col-md-6">
    <h3 id="outline" style="display: flex; align-items: center;">
        <i class="fas fa-highlighter" style="color: #2980b9; margin-right: 10px;"></i> Outline
    </h3>
    <p>
        La propriété <code>outline</code> est utilisée pour ajouter un contour autour d'un élément, en dehors des bordures. Contrairement aux bordures normales, 
        elle ne modifie pas la disposition de l'élément. Elle est souvent utilisée pour mettre en évidence un élément lors d'une interaction, 
        comme le focus d'un champ de formulaire. Exemple de propriétés :
    </p>
    <ul>
        <li><strong>outline-width</strong> : Épaisseur de l'outline.</li>
        <li><strong>outline-style</strong> : Style de l'outline (solid, dotted, dashed, etc.).</li>
        <li><strong>outline-color</strong> : Couleur de l'outline.</li>
    </ul>

    <!-- Exemple d'outline en pointillés -->
    <div class="example-box" style="outline: 2px dashed blue; padding: 5px; margin-bottom: 10px;">
        Contour bleu en tirets
    </div>
    <p><code>outline: 2px dashed blue;</code></p>

    <!-- Exemple d'outline épais et solide -->
    <div class="example-box" style="outline: 4px solid #e74c3c; padding: 5px; margin-bottom: 10px;">
        Contour rouge solide de 4px
    </div>
    <p><code>outline: 4px solid #e74c3c;</code></p>

    <!-- Exemple d'outline pour focus -->
    <div class="example-box" tabindex="0" style="outline: none; padding: 5px; border: 1px solid #3498db; margin-bottom: 10px;" onfocus="this.style.outline = '3px solid #3498db';" onblur="this.style.outline = 'none';">
        Focus pour voir le contour bleu
    </div>
    <p><code>outline: 3px solid #3498db;</code> appliqué lors de l'interaction focus</p>

    <!-- Exemple d'outline dégradé -->
    <div class="example-box" style="outline: 3px solid transparent; outline-offset: 2px; padding: 5px; margin-bottom: 10px; background-image: linear-gradient(to right, #e74c3c, #3498db);">
        Outline transparent avec fond dégradé
    </div>
    <p><code>outline: 3px solid transparent;</code> avec fond en dégradé</p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
        <strong>Astuce :</strong> Utilisez <code>outline</code> pour attirer l'attention sur un élément lors des interactions sans affecter la disposition. Combinez avec <code>outline-offset</code> pour ajuster la distance entre le contour et l'élément.
    </div>
</div>


<!-- Box Sizing -->
<div class="col-md-6">
    <h3 id="box-sizing" style="display: flex; align-items: center;">
        <i class="fas fa-vector-square" style="color: #333; margin-right: 10px;"></i> Box Sizing
    </h3>
    <p>
        La propriété <code>box-sizing</code> détermine la manière dont la taille totale d'un élément est calculée : elle inclut ou non les bordures et le padding 
        dans la largeur et la hauteur spécifiées de l'élément.
    </p>
    <ul>
        <li><strong>content-box</strong> (par défaut) : La largeur et la hauteur s'appliquent uniquement au contenu ; les bordures et le padding sont ajoutés en plus.</li>
        <li><strong>border-box</strong> : La largeur et la hauteur incluent le padding et les bordures, ce qui facilite le contrôle de la taille totale.</li>
    </ul>

    <!-- Exemple avec box-sizing: border-box -->
    <div class="example-box" style="box-sizing: border-box; width: 150px; padding: 20px; border: 5px solid #333; background-color: #f0f3f4; margin-bottom: 10px;">
        <strong>border-box</strong> avec <code>width</code> de 150px, incluant padding et bordure
    </div>
    <p><code>box-sizing: border-box; width: 150px; padding: 20px; border: 5px solid #333;</code></p>

    <!-- Exemple avec box-sizing: content-box -->
    <div class="example-box" style="box-sizing: content-box; width: 150px; padding: 20px; border: 5px solid #333; background-color: #f0f3f4;">
        <strong>content-box</strong> avec <code>width</code> de 150px, ajoutant padding et bordure
    </div>
    <p><code>box-sizing: content-box; width: 150px; padding: 20px; border: 5px solid #333;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #333;"></i>
        <strong>Astuce :</strong> Utilisez <code>box-sizing: border-box</code> pour un contrôle plus facile de la taille des éléments, surtout lors de l’ajout de padding et de bordures.
    </div>
</div>

    </div>
</div>

<!-- Dimensions -->
<div class="content-section" id="dimensions">
    <h2><i class="fas fa-ruler icon"></i> Dimensions</h2>
    <div class="row">
        <!-- Width -->
<div class="col-md-6">
    <h3 id="width" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt-h" style="color: #2980b9; margin-right: 10px;"></i> Width
    </h3>
        <!-- Bouton pour modal d'exemple de largeur fixe en pixels -->
        <button onclick="openModal('modal-width-200px')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Largeur de 200px</button>
    <div id="modal-width-200px" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-width-200px')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="width: 200px; background-color: lightblue; padding: 5px;">
                Largeur de 200px
            </div>
            <p><code>width: 200px;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple de largeur en pourcentage -->
    <button onclick="openModal('modal-width-50pct')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Largeur de 50%</button>
    <div id="modal-width-50pct" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-width-50pct')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="width: 50%; background-color: lightcoral; padding: 5px;">
                Largeur de 50% du conteneur parent
            </div>
            <p><code>width: 50%;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple de largeur en unités de viewport (vw) -->
    <button onclick="openModal('modal-width-30vw')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Largeur de 30vw</button>
    <div id="modal-width-30vw" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-width-30vw')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="width: 30vw; background-color: lightgreen; padding: 5px;">
                Largeur de 30vw (30% de la largeur de la fenêtre)
            </div>
            <p><code>width: 30vw;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple avec max-width pour largeur maximale -->
    <button onclick="openModal('modal-width-max')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Largeur avec max-width</button>
    <div id="modal-width-max" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-width-max')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="width: 100%; max-width: 300px; background-color: lightgoldenrodyellow; padding: 5px;">
                Largeur de 100%, avec un maximum de 300px
            </div>
            <p><code>width: 100%; max-width: 300px;</code></p>
        </div>
    </div>
    <p>
    La propriété <code>width</code> en CSS permet de définir la largeur d'un élément. Elle contrôle la largeur de l'espace que cet élément occupe dans son conteneur. En fonction des valeurs utilisées, la largeur peut être fixée ou adaptative, ce qui est essentiel pour concevoir des mises en page flexibles et responsives. Voici un aperçu des valeurs les plus courantes :
</p>
<ul>
    <li><strong>Pixels (px)</strong> : Une valeur en pixels donne une largeur fixe à l'élément, comme <code>width: 200px;</code>. Cette unité est idéale lorsque vous voulez une taille exacte et non adaptable.</li>
    <li><strong>Pourcentage (%)</strong> : La valeur en pourcentage adapte la largeur de l'élément en fonction de la largeur de son conteneur parent. Par exemple, <code>width: 50%;</code> rend l'élément large de la moitié du conteneur. Cela permet une réactivité naturelle sur les tailles d’écran variées.</li>
    <li><strong>Unités de viewport (vw, vh)</strong> : Les unités relatives au viewport (comme <code>vw</code> pour la largeur de la fenêtre et <code>vh</code> pour la hauteur) permettent de créer des éléments proportionnés à la taille de la fenêtre de l’utilisateur. Par exemple, <code>width: 30vw;</code> signifie que l'élément occupera 30 % de la largeur totale de la fenêtre de visualisation, quelle que soit sa taille.</li>
    <li><strong>Unités relatives (em, rem)</strong> : Ces unités basées sur la taille de la police (de l’élément parent pour <code>em</code> et de la racine du document pour <code>rem</code>) permettent une largeur proportionnelle au texte. Par exemple, <code>width: 20em;</code> ajuste la largeur en fonction de la taille de la police, ce qui peut être utile pour des mises en page fluides en typographie.</li>
    <li><strong>Valeurs spéciales</strong> : 
        <ul>
            <li><code>auto</code> : Cette valeur ajuste automatiquement la largeur de l'élément en fonction de son contenu et du modèle de boîte CSS. Si utilisé dans un conteneur flex, il peut remplir l'espace restant disponible.</li>
            <li><code>inherit</code> : Cette valeur fait hériter à l'élément la largeur de son conteneur parent.</li>
        </ul>
    </li>
</ul>
<p>
    La propriété <code>width</code> fonctionne en combinaison avec d'autres propriétés de dimensionnement, comme <code>max-width</code> et <code>min-width</code>, pour limiter ou étendre la largeur d'un élément. Par exemple, utiliser <code>width: 100%</code> avec <code>max-width: 500px;</code> donne un élément adaptable qui ne dépasse pas 500 pixels, même sur des écrans plus larges.
</p>
<p>
    Lorsque la propriété <code>box-sizing</code> est réglée sur <code>border-box</code>, la largeur inclut également les bordures et le padding, facilitant ainsi le calcul de la taille totale de l’élément. Cela simplifie la mise en page en garantissant que la largeur totale de l’élément reste constante, même avec un padding ou une bordure.
</p>
<p>
    En utilisant des valeurs de largeur flexibles et adaptées, la propriété <code>width</code> joue un rôle crucial dans la création de mises en page responsives, permettant aux éléments de s'adapter naturellement à différentes tailles d'écran.
</p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
        <strong>Astuce :</strong> Utilisez <code>width: 100%</code> avec <code>max-width</code> pour des mises en page flexibles et responsives, en limitant la largeur maximale selon l'espace disponible.
    </div>
</div>

<!-- JavaScript pour ouvrir et fermer le modal -->
<script>
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
</script>


        <!-- Height -->
<div class="col-md-6">
    <h3 id="height" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt-v" style="color: #e74c3c; margin-right: 10px;"></i> Height
    </h3>

    <!-- Bouton pour modal d'exemple de hauteur fixe en pixels -->
    <button onclick="openModal('modal-height-100px')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Hauteur de 100px</button>
    <div id="modal-height-100px" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-height-100px')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="height: 100px; background-color: lightcoral; padding: 5px;">
                Hauteur de 100px
            </div>
            <p><code>height: 100px;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple de hauteur en pourcentage -->
    <button onclick="openModal('modal-height-50pct')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Hauteur de 50%</button>
    <div id="modal-height-50pct" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-height-50pct')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="height: 50%; background-color: lightblue; padding: 5px;">
                Hauteur de 50% du conteneur parent
            </div>
            <p><code>height: 50%;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple de hauteur en unités de viewport (vh) -->
    <button onclick="openModal('modal-height-30vh')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: Hauteur de 30vh</button>
    <div id="modal-height-30vh" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-height-30vh')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="height: 30vh; background-color: lightgreen; padding: 5px;">
                Hauteur de 30vh (30% de la hauteur de la fenêtre)
            </div>
            <p><code>height: 30vh;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple avec min-height pour hauteur minimale -->
    <button onclick="openModal('modal-height-min')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple: min-height de 50px</button>
    <div id="modal-height-min" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-height-min')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="height: auto; min-height: 50px; background-color: lightgoldenrodyellow; padding: 5px;">
                Hauteur minimale de 50px
            </div>
            <p><code>min-height: 50px;</code></p>
        </div>
    </div>

    <p>
        La propriété <code>height</code> en CSS permet de définir la hauteur d'un élément. En contrôlant cette hauteur, elle ajuste l'espace vertical que cet élément occupe dans son conteneur. Selon les valeurs utilisées, elle peut être fixe ou adaptative. Voici les unités les plus courantes pour la hauteur :
    </p>
    <ul>
        <li><strong>Pixels (px)</strong> : Une hauteur en pixels, comme <code>height: 100px;</code>, définit une taille exacte et non flexible.</li>
        <li><strong>Pourcentage (%)</strong> : Définir une hauteur en pourcentage ajuste l'élément par rapport à la hauteur du conteneur parent, par exemple, <code>height: 50%;</code>.</li>
        <li><strong>Unités de viewport (vh)</strong> : Les unités relatives au viewport comme <code>vh</code> rendent l’élément proportionnel à la hauteur de la fenêtre, par exemple <code>height: 30vh;</code>.</li>
        <li><strong>Unités relatives (em, rem)</strong> : Ces unités sont basées sur la taille de la police, utile pour des hauteurs ajustables selon le texte.</li>
        <li><strong>Valeurs spéciales</strong> : 
            <ul>
                <li><code>auto</code> : Calcule automatiquement la hauteur en fonction du contenu.</li>
                <li><code>inherit</code> : Hérite de la hauteur de l'élément parent.</li>
            </ul>
        </li>
    </ul>
    <p>
        Les propriétés <code>min-height</code> et <code>max-height</code> peuvent limiter ou étendre la hauteur d'un élément. Par exemple, <code>min-height: 50px;</code> garantit une hauteur minimum, alors que <code>max-height: 300px;</code> empêche l’élément de dépasser une certaine hauteur.
    </p>
    <p>
        En utilisant <code>box-sizing: border-box</code>, la hauteur inclut le padding et les bordures, ce qui simplifie le calcul de la taille finale.
    </p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f4f6f7; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
        <strong>Astuce :</strong> Utilisez <code>min-height</code> et <code>max-height</code> pour des mises en page flexibles et maîtrisez la hauteur des éléments selon le contenu et l’espace disponible.
    </div>
</div>

<!-- JavaScript pour ouvrir et fermer le modal -->
<script>
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
</script>


    <!-- Max Width -->
<div class="col-md-6">
    <h3 id="max-width" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt-h" style="color: #3498db; margin-right: 10px;"></i> Max Width
    </h3>
    <p>
        La propriété <code>max-width</code> fixe la largeur maximale d'un élément. Cela signifie que l'élément ne pourra pas s'étendre au-delà de cette valeur, mais pourra se réduire pour s'adapter à des écrans plus petits. <strong>Utilisée dans les mises en page responsives,</strong> elle est particulièrement utile pour limiter la largeur d'images, de cartes, ou de sections de contenu sans compromettre leur adaptabilité.
    </p>
    <ul>
        <li><strong>Pixels (px)</strong> : Une largeur maximale en pixels comme <code>max-width: 300px;</code> empêche l'élément de dépasser cette taille fixe.</li>
        <li><strong>Pourcentage (%)</strong> : <code>max-width: 80%;</code> limite l'élément à 80% de la largeur du conteneur parent, permettant une adaptation en fonction de la taille de la fenêtre.</li>
    </ul>

    <!-- Exemple avec max-width en pixels -->
    <div class="example-box" style="max-width: 300px; background-color: lightblue; padding: 5px; margin-bottom: 10px;">
        Largeur maximale de 300px
    </div>
    <p><code>max-width: 300px;</code></p>

    <!-- Exemple avec max-width en pourcentage -->
    <div class="example-box" style="width: 100%; max-width: 80%; background-color: lightcoral; padding: 5px; margin-bottom: 10px;">
        Largeur maximale de 80% du conteneur parent
    </div>
    <p><code>max-width: 80%;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eaf2f8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez <code>max-width</code> pour limiter la taille des éléments tout en assurant une adaptabilité aux différentes tailles d'écran.
    </div>
</div>

<!-- Max Height -->
<div class="col-md-6">
    <h3 id="max-height" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt-v" style="color: #e74c3c; margin-right: 10px;"></i> Max Height
    </h3>
    <p>
        La propriété <code>max-height</code> fixe la hauteur maximale d'un élément, ce qui empêche cet élément de s’étendre au-delà d’une certaine hauteur. <strong>Très utile pour des éléments avec du contenu dynamique,</strong> elle est souvent combinée avec <code>overflow: auto;</code> pour ajouter un défilement lorsque le contenu dépasse la hauteur maximale.
    </p>
    <ul>
        <li><strong>Pixels (px)</strong> : <code>max-height: 150px;</code> fixe une limite maximale en pixels.</li>
        <li><strong>Pourcentage (%)</strong> : <code>max-height: 50%;</code> permet de limiter la hauteur de l'élément à 50% du conteneur parent.</li>
    </ul>

    <!-- Bouton pour modal d'exemple avec max-height en pixels et overflow -->
    <button onclick="openModal('modal-max-height-150px')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple : Hauteur max de 150px</button>
    <div id="modal-max-height-150px" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-max-height-150px')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="max-height: 150px; background-color: lightcoral; overflow: auto; padding: 5px;">
                Contenu avec une hauteur maximale de 150px. Si le contenu dépasse, vous pouvez faire défiler.
            </div>
            <p><code>max-height: 150px; overflow: auto;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal d'exemple avec max-height en pourcentage -->
    <button onclick="openModal('modal-max-height-50pct')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple : Hauteur max de 50%</button>
    <div id="modal-max-height-50pct" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-max-height-50pct')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="height: 100%; max-height: 50%; background-color: lightgreen; padding: 5px;">
                Hauteur maximale de 50% du conteneur parent
            </div>
            <p><code>max-height: 50%;</code></p>
        </div>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdecea; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
        <strong>Astuce :</strong> Utilisez <code>max-height</code> pour gérer le contenu de grande hauteur et éviter la surcharge de mise en page.
    </div>
</div>

<!-- JavaScript pour ouvrir et fermer le modal -->
<script>
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
</script>


<!-- Min Width -->
<div class="col-md-6">
    <h3 id="min-width" style="display: flex; align-items: center;">
        <i class="fas fa-compress-arrows-alt" style="color: #27ae60; margin-right: 10px;"></i> Min Width
    </h3>
    <p>
        La propriété <code>min-width</code> fixe la largeur minimale d'un élément, garantissant que cet élément ne devienne jamais plus petit que la valeur spécifiée. <strong>Utilisée pour préserver la lisibilité des éléments comme les boutons ou les zones de texte,</strong> elle assure la stabilité des mises en page en évitant des rétrécissements excessifs.
    </p>
    <ul>
        <li><strong>Pixels (px)</strong> : <code>min-width: 200px;</code> impose une largeur minimale fixe.</li>
        <li><strong>Pourcentage (%)</strong> : <code>min-width: 50%;</code> garantit que l'élément ne sera pas inférieur à 50% de la largeur du conteneur.</li>
    </ul>

    <!-- Exemple avec min-width en pixels -->
    <div class="example-box" style="min-width: 200px; background-color: lightgreen; padding: 5px; margin-bottom: 10px;">
        Largeur minimale de 200px
    </div>
    <p><code>min-width: 200px;</code></p>

    <!-- Exemple avec min-width en pourcentage -->
    <div class="example-box" style="width: 100%; min-width: 50%; background-color: lightblue; padding: 5px; margin-bottom: 10px;">
        Largeur minimale de 50% du conteneur parent
    </div>
    <p><code>min-width: 50%;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #27ae60;"></i>
        <strong>Astuce :</strong> Utilisez <code>min-width</code> pour garantir la lisibilité et l’accessibilité des éléments, surtout sur les petits écrans.
    </div>
</div>

<!-- Min Height -->
<div class="col-md-6">
    <h3 id="min-height" style="display: flex; align-items: center;">
        <i class="fas fa-arrows-alt-v" style="color: #f1c40f; margin-right: 10px;"></i> Min Height
    </h3>
    <p>
        La propriété <code>min-height</code> définit la hauteur minimale d'un élément pour garantir qu'il ait toujours une taille verticale suffisante, même si le contenu est peu volumineux. <strong>Utile pour les sections de présentation ou les cartes,</strong> elle assure la consistance visuelle des éléments dans une mise en page.
    </p>
    <ul>
        <li><strong>Pixels (px)</strong> : <code>min-height: 100px;</code> fixe une hauteur minimale en pixels.</li>
        <li><strong>Pourcentage (%)</strong> : <code>min-height: 30%;</code> permet à l'élément d'occuper au moins 30% de la hauteur du conteneur.</li>
    </ul>

    <!-- Bouton pour modal avec min-height en pixels -->
    <button onclick="openModal('modal-min-height-100px')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple : Hauteur min de 100px</button>
    <div id="modal-min-height-100px" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-min-height-100px')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="min-height: 100px; background-color: lightyellow; padding: 5px;">
                Hauteur minimale de 100px
            </div>
            <p><code>min-height: 100px;</code></p>
        </div>
    </div>

    <!-- Bouton pour modal avec min-height en pourcentage -->
    <button onclick="openModal('modal-min-height-30pct')" style="margin-bottom: 10px;" class="btn btn-warning">Voir Exemple : Hauteur min de 30%</button>
    <div id="modal-min-height-30pct" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 5px; width: 80%; max-width: 400px; text-align: center;">
            <span onclick="closeModal('modal-min-height-30pct')" style="float: right; font-size: 1.5rem; cursor: pointer;">&times;</span>
            <div class="example-box" style="height: 100%; min-height: 30%; background-color: lightgoldenrodyellow; padding: 5px;">
                Hauteur minimale de 30% du conteneur parent
            </div>
            <p><code>min-height: 30%;</code></p>
        </div>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #fef9e7; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #f1c40f;"></i>
        <strong>Astuce :</strong> Utilisez <code>min-height</code> pour conserver une mise en page équilibrée, même si le contenu est peu volumineux.
    </div>
</div>

<!-- JavaScript pour ouvrir et fermer le modal -->
<script>
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
</script>


</div>

<!-- Effets et Animations -->
<div class="content-section" id="effects-animations">
    <h2><i class="fas fa-magic icon"></i> Effets et Animations</h2>
    <div class="row">
        
        <!-- Box Shadow -->
<div class="col-md-6">
    <h3 id="box-shadow" style="display: flex; align-items: center;">
        <i class="fas fa-square" style="color: #34495e; margin-right: 10px;"></i> Box Shadow
    </h3>
    <p>
        La propriété <code>box-shadow</code> ajoute une ombre autour d’un élément pour donner une profondeur visuelle, souvent utilisée pour souligner des éléments ou créer un effet de surélévation. Cette propriété peut être personnalisée en ajustant différents paramètres :
    </p>

    <h4>Paramètres de <code>box-shadow</code> :</h4>
    <ul>
        <li><strong>Décalage horizontal</strong> : Contrôle le décalage horizontal de l'ombre. Une valeur positive la déplace vers la droite, une valeur négative vers la gauche.</li>
        <li><strong>Décalage vertical</strong> : Contrôle le décalage vertical de l'ombre. Une valeur positive la déplace vers le bas, une valeur négative vers le haut.</li>
        <li><strong>Rayon de flou</strong> : Contrôle le degré de flou de l'ombre. Plus la valeur est élevée, plus l'ombre est diffuse.</li>
        <li><strong>Rayon d’étendue</strong> : Optionnel, il agrandit ou réduit la taille de l'ombre autour de l'élément. Une valeur positive étend l'ombre, une valeur négative la rétrécit.</li>
        <li><strong>Couleur</strong> : Détermine la couleur de l'ombre, qui peut inclure la transparence grâce au format <code>rgba</code>.</li>
    </ul>

    <h4>Exemples d’ombres avec <code>box-shadow</code> :</h4>

    <!-- Exemple d'ombre simple -->
    <div class="example-box" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); padding: 10px; background-color: #f0f0f0; margin-bottom: 10px;">
        Ombre simple : <code>box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);</code>
    </div>

    <!-- Exemple d'ombre floue -->
    <div class="example-box" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); padding: 10px; background-color: #f0f0f0; margin-bottom: 10px;">
        Ombre floue : <code>box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);</code>
    </div>

    <!-- Exemple d'ombre étendue -->
    <div class="example-box" style="box-shadow: 10px 10px 5px 5px rgba(0, 0, 0, 0.4); padding: 10px; background-color: #f0f0f0; margin-bottom: 10px;">
        Ombre étendue : <code>box-shadow: 10px 10px 5px 5px rgba(0, 0, 0, 0.4);</code>
    </div>

    <!-- Exemple d'ombre intérieure -->
    <div class="example-box" style="box-shadow: inset 5px 5px 15px rgba(0, 0, 0, 0.3); padding: 10px; background-color: #f0f0f0; margin-bottom: 10px;">
        Ombre intérieure : <code>box-shadow: inset 5px 5px 15px rgba(0, 0, 0, 0.3);</code>
    </div>

    <!-- Exemple de multiple ombres -->
    <div class="example-box" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(0, 0, 0, 0.2); padding: 10px; background-color: #f0f0f0;">
        Ombres multiples : <code>box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(0, 0, 0, 0.2);</code>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f6f3; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #16a085;"></i>
        <strong>Astuce :</strong> Utilisez <code>box-shadow</code> pour mettre en valeur des éléments importants ou donner un effet de profondeur. Vous pouvez même appliquer plusieurs ombres pour des effets plus complexes.
    </div>
</div>

        <!-- Transition -->
<div class="col-md-6">
    <h3 id="transition" style="display: flex; align-items: center;">
        <i class="fas fa-exchange-alt" style="color: #8e44ad; margin-right: 10px;"></i> Transition
    </h3>
    <p>
        La propriété <code>transition</code> permet de créer des animations fluides entre différents états CSS d'un élément, par exemple lors d'un changement de couleur, de taille, ou de position. En ajoutant une transition, on obtient un effet plus naturel et esthétique. La propriété <strong>transition</strong> contrôle la durée et le timing des effets.
    </p>

    <h4>Paramètres de <code>transition</code> :</h4>
    <ul>
        <li><strong>Propriété</strong> : Définit quelle propriété sera animée, comme <code>background-color</code>, <code>transform</code>, ou <code>opacity</code>.</li>
        <li><strong>Durée</strong> : Contrôle la durée de l'animation, spécifiée en secondes (s) ou millisecondes (ms).</li>
        <li><strong>Fonction de timing</strong> : Détermine le rythme de la transition. Les options incluent <code>ease</code> (par défaut), <code>linear</code>, <code>ease-in</code>, <code>ease-out</code>, et <code>ease-in-out</code>.</li>
        <li><strong>Délai</strong> (facultatif) : Définit le délai avant le début de l'animation.</li>
    </ul>

    <h4>Exemples de <code>transition</code> :</h4>

    <!-- Exemple de transition de couleur -->
    <div class="example-box" style="background-color: #f0f0f0; padding: 10px; transition: background-color 0.5s;">
        <div style="padding: 10px; background-color: #e74c3c; color: white;" onmouseover="this.style.backgroundColor='#c0392b';" onmouseout="this.style.backgroundColor='#e74c3c';">
            Passez votre souris ici pour voir la transition de couleur
        </div>
        <p><code>transition: background-color 0.5s;</code></p>
    </div>

    <!-- Exemple de transition de taille -->
    <div class="example-box" style="padding: 10px; margin-top: 10px; background-color: #3498db; color: white; transition: transform 0.5s;">
        <div style="padding: 10px; cursor: pointer;" onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">
            Passez votre souris ici pour voir la transition de taille
        </div>
        <p><code>transition: transform 0.5s;</code></p>
    </div>

    <!-- Exemple de transition multiple -->
    <div class="example-box" style="padding: 10px; margin-top: 10px; background-color: #2ecc71; color: white; transition: background-color 0.5s, transform 0.5s;">
        <div style="padding: 10px; cursor: pointer;" onmouseover="this.style.backgroundColor='#27ae60'; this.style.transform='rotate(10deg)';" onmouseout="this.style.backgroundColor='#2ecc71'; this.style.transform='rotate(0deg)';">
            Passez votre souris ici pour voir une transition multiple
        </div>
        <p><code>transition: background-color 0.5s, transform 0.5s;</code></p>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #f5eef8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #8e44ad;"></i>
        <strong>Astuce :</strong> Utilisez <code>transition</code> pour améliorer l'expérience utilisateur en rendant les changements visuels plus fluides et naturels. Essayez de combiner plusieurs propriétés pour des effets complexes et intéressants.
    </div>
</div>


        <!-- Transform -->
<div class="col-md-6">
    <h3 id="transform" style="display: flex; align-items: center;">
        <i class="fas fa-sync-alt" style="color: #3498db; margin-right: 10px;"></i> Transform
    </h3>
    <p>
        La propriété <code>transform</code> permet de manipuler la position, la taille, la rotation ou l’inclinaison d’un élément sans modifier sa place dans le flux de la page. Elle est couramment utilisée pour créer des effets visuels et des animations.
    </p>

    <h4>Principales fonctions de <code>transform</code> :</h4>
    <ul>
        <li><strong>translate(x, y)</strong> : Déplace l’élément horizontalement (x) et/ou verticalement (y).</li>
        <li><strong>rotate(angle)</strong> : Fait pivoter l'élément d'un angle spécifié.</li>
        <li><strong>scale(x, y)</strong> : Redimensionne l'élément. Une valeur supérieure à 1 agrandit l'élément, tandis qu'une valeur inférieure à 1 le réduit.</li>
        <li><strong>skew(x, y)</strong> : Incline l'élément selon les axes horizontal et vertical.</li>
    </ul>

    <h4>Exemples de <code>transform</code> :</h4>

    <!-- Exemple de rotation -->
    <div class="example-box" style="transform: rotate(15deg); padding: 10px; background-color: #f0f0f0; margin-bottom: 10px;">
        Pivote de 15 degrés : <code>transform: rotate(15deg);</code>
    </div>

    <!-- Exemple de translation -->
    <div class="example-box" style="transform: translate(20px, 10px); padding: 10px; background-color: #e74c3c; color: white; margin-bottom: 10px;">
        Déplacé de 20px vers la droite et de 10px vers le bas : <code>transform: translate(20px, 10px);</code>
    </div>

    <!-- Exemple de redimensionnement -->
    <div class="example-box" style="transform: scale(0.8); padding: 10px; background-color: #3498db; color: white; margin-bottom: 10px;">
        Rétréci de -20% de sa taille d'origine : <code>transform: scale(0.8);</code>
    </div>

    <!-- Exemple d'inclinaison -->
    <div class="example-box" style="transform: skew(15deg, 5deg); padding: 10px; background-color: #2ecc71; color: white; margin-bottom: 10px;">
        Incliné de 15 degrés horizontalement et de 5 degrés verticalement : <code>transform: skew(15deg, 5deg);</code>
    </div>

    <!-- Exemple de combinaison de transformations -->
    <div class="example-box" style="transform: translate(10px, 10px) rotate(10deg) scale(1.1); padding: 10px; background-color: #f39c12; color: white;">
        Déplacé, pivoté et agrandi : <code>transform: translate(10px, 10px) rotate(10deg) scale(1.1);</code>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #16a085;"></i>
        <strong>Astuce :</strong> Combinez plusieurs fonctions <code>transform</code> pour créer des effets visuels complexes et attrayants, par exemple pour des animations sur les boutons et les images.
    </div>
</div>


       <!-- Animation -->
<div class="col-md-6">
    <h3 id="animation" style="display: flex; align-items: center;">
        <i class="fas fa-play-circle" style="color: #3498db; margin-right: 10px;"></i> Animation
    </h3>
    <p>
        La propriété <code>animation</code> permet de créer des effets visuels continus en appliquant une série de styles CSS sur un élément dans le temps. Les animations CSS peuvent être utilisées pour rendre une page plus interactive, en jouant sur des changements de couleurs, de taille, de position, etc.
    </p>

    <h4>Principaux paramètres d'<code>animation</code> :</h4>
    <ul>
        <li><strong>Nom de l'animation</strong> : Référence la séquence définie par <code>@keyframes</code>.</li>
        <li><strong>Durée</strong> : Détermine la durée de l'animation, spécifiée en secondes (s) ou millisecondes (ms).</li>
        <li><strong>Fonction de timing</strong> : Contrôle la vitesse de l'animation (exemples : <code>ease</code>, <code>linear</code>, <code>ease-in</code>, <code>ease-out</code>).</li>
        <li><strong>Délai</strong> : Définit le délai avant le démarrage de l'animation.</li>
        <li><strong>Itérations</strong> : Détermine combien de fois l'animation doit être jouée (<code>infinite</code> pour une boucle continue).</li>
        <li><strong>Direction</strong> : Contrôle le sens de l'animation (exemples : <code>normal</code>, <code>reverse</code>, <code>alternate</code>).</li>
    </ul>

    <h4>Exemples d’animations :</h4>

    <!-- Exemple de changement de couleur -->
    <div class="example-box effect-animation" style="padding: 10px; background-color: #3498db; color: white; animation: colorChange 2s infinite;">
        Animation de couleur : <code>animation: colorChange 2s infinite;</code>
    </div>

    <style>
        @keyframes colorChange {
            0% { background-color: #3498db; }
            50% { background-color: #e74c3c; }
            100% { background-color: #3498db; }
        }
    </style>

    <!-- Exemple d'animation de translation -->
    <div class="example-box" style="padding: 10px; background-color: #e74c3c; color: white; animation: moveRight 3s infinite alternate; margin-top: 10px;">
        Déplacement vers la droite : <code>animation: moveRight 3s infinite alternate;</code>
    </div>

    <style>
        @keyframes moveRight {
            0% { transform: translateX(0); }
            100% { transform: translateX(50px); }
        }
    </style>

    <!-- Exemple de redimensionnement -->
    <div class="example-box" style="padding: 10px; background-color: #2ecc71; color: white; animation: growShrink 2s infinite alternate; margin-top: 10px;">
        Redimensionnement : <code>animation: growShrink 2s infinite alternate;</code>
    </div>

    <style>
        @keyframes growShrink {
            0% { transform: scale(1); }
            100% { transform: scale(1.2); }
        }
    </style>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #27ae60;"></i>
        <strong>Astuce :</strong> Utilisez des animations CSS pour attirer l'attention sur des éléments importants ou pour créer des transitions fluides et engageantes. N'abusez pas des animations pour éviter de surcharger l'expérience utilisateur.
    </div>
</div>



       <!-- Filter -->
<div class="col-md-6">
    <h3 id="filter" style="display: flex; align-items: center;">
        <i class="fas fa-adjust" style="color: #34495e; margin-right: 10px;"></i> Filter
    </h3>
    <p>
        La propriété <code>filter</code> permet d'appliquer divers effets visuels, tels que la luminosité, le flou, le contraste et la saturation, sur des éléments. Ces effets sont souvent utilisés pour styliser des images, des vidéos ou des éléments pour obtenir un aspect visuel distinct et améliorer l'expérience utilisateur.
    </p>

    <h4>Principaux filtres disponibles :</h4>
    <ul>
        <li><strong>brightness()</strong> : Ajuste la luminosité de l'élément (valeurs entre 0 et 1 pour assombrir et >1 pour éclaircir).</li>
        <li><strong>blur()</strong> : Ajoute un flou autour de l'élément. La valeur spécifie le rayon de flou en pixels.</li>
        <li><strong>contrast()</strong> : Ajuste le contraste de l'élément (valeurs entre 0 et 1 pour réduire le contraste et >1 pour l'accentuer).</li>
        <li><strong>grayscale()</strong> : Convertit l'élément en niveaux de gris. La valeur va de 0 (pas de gris) à 1 (complètement gris).</li>
        <li><strong>sepia()</strong> : Applique un effet sépia, donnant une apparence vieillie à l'image. La valeur va de 0 à 1.</li>
    </ul>

    <h4>Exemples de filtres :</h4>

    <!-- Exemple de luminosité réduite et flou -->
    <div class="example-box" style="filter: brightness(0.8) blur(2px); padding: 10px; background-color: #3498db; color: white; margin-bottom: 10px;">
        Luminosité réduite et flou : <code>filter: brightness(0.8) blur(2px);</code>
    </div>

    <!-- Exemple d'augmentation de contraste -->
    <div class="example-box" style="filter: contrast(1.5); padding: 10px; background-color: #e74c3c; color: white; margin-bottom: 10px;">
        Contraste augmenté : <code>filter: contrast(1.5);</code>
    </div>

    <!-- Exemple de niveaux de gris -->
    <div class="example-box" style="filter: grayscale(1); padding: 10px; background-color: #2ecc71; color: white; margin-bottom: 10px;">
        Niveaux de gris : <code>filter: grayscale(1);</code>
    </div>

    <!-- Exemple d'effet sépia -->
    <div class="example-box" style="filter: sepia(0.7); padding: 10px; background-color: #f39c12; color: white; margin-bottom: 10px;">
        Effet sépia : <code>filter: sepia(0.7);</code>
    </div>

    <!-- Exemple de combinaison de filtres -->
    <div class="example-box" style="filter: grayscale(0.5) contrast(1.2) brightness(1.1); padding: 10px; background-color: #8e44ad; color: white;">
        Combinaison de filtres : <code>filter: grayscale(0.5) contrast(1.2) brightness(1.1);</code>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #34495e;"></i>
        <strong>Astuce :</strong> Utilisez les filtres pour donner un effet visuel particulier aux images ou pour attirer l’attention sur des éléments en combinant plusieurs effets de manière créative.
    </div>
</div>
<!-- Backdrop Filter -->
<div class="col-md-6">
    <h3 id="backdrop-filter" style="display: flex; align-items: center;">
        <i class="fas fa-adjust" style="color: #3498db; margin-right: 10px;"></i> Backdrop Filter
    </h3>
    <p>
        La propriété <code>backdrop-filter</code> applique des effets visuels tels que le flou ou la transparence aux éléments se trouvant *derrière* un élément. Contrairement à <code>filter</code>, qui affecte l'élément lui-même, <code>backdrop-filter</code> crée un effet de verre dépoli, comme celui souvent utilisé pour les barres de navigation translucides.
    </p>

    <h4>Principaux filtres disponibles pour <code>backdrop-filter</code> :</h4>
    <ul>
        <li><strong>blur()</strong> : Applique un flou à l'arrière-plan.</li>
        <li><strong>brightness()</strong> : Ajuste la luminosité de l'arrière-plan.</li>
        <li><strong>contrast()</strong> : Change le contraste de l'arrière-plan.</li>
        <li><strong>grayscale()</strong> : Convertit l'arrière-plan en niveaux de gris.</li>
        <li><strong>opacity()</strong> : Ajuste l’opacité de l’arrière-plan.</li>
        <li><strong>sepia()</strong> : Applique un effet sépia pour un aspect vieilli.</li>
    </ul>

    <h4>Exemples de <code>backdrop-filter</code> :</h4>

    <!-- Exemple de flou -->
    <div style="background-image: url('https://via.placeholder.com/300'); background-size: cover; padding: 20px; border-radius: 10px; backdrop-filter: blur(5px); color: white; margin-bottom: 10px;">
    <span class="text-dark">Flou de l'arrière-plan :</span> <code>backdrop-filter: blur(5px);</code>
    </div>

    <!-- Exemple de luminosité réduite -->
    <div style="background-image: url('https://via.placeholder.com/300'); background-size: cover; padding: 20px; border-radius: 10px; backdrop-filter: brightness(0.5); color: white; margin-bottom: 10px;">
    <span class="text-dark">Luminosité réduite de l'arrière-plan :</span> <code>backdrop-filter: brightness(0.5);</code>
    </div>

    <!-- Exemple de niveaux de gris -->
    <div style="background-image: url('https://via.placeholder.com/300'); background-size: cover; padding: 20px; border-radius: 10px; backdrop-filter: grayscale(1); color: white; margin-bottom: 10px;">
        <span class="text-dark">Niveaux de gris appliqués à l'arrière-plan :</span><code>backdrop-filter: grayscale(1);</code>
    </div>

    <!-- Exemple de combinaison de filtres -->
    <div style="background-image: url('https://via.placeholder.com/300'); background-size: cover; padding: 20px; border-radius: 10px; backdrop-filter: blur(5px) brightness(0.7); color: white;">
    <span class="text-dark">Combinaison de filtres :</span><code>backdrop-filter: blur(5px) brightness(0.7);</code>
    </div>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f6f3; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #16a085;"></i>
        <strong>Astuce :</strong> Utilisez <code>backdrop-filter</code> pour créer des effets de verre dépoli ou des barres de navigation transparentes sans affecter l’élément lui-même, offrant ainsi une expérience visuelle raffinée.
    </div>
</div>

        
    </div>
</div>


<!-- Pseudo-classes et Pseudo-éléments -->
<div class="content-section" id="pseudo-classes-elements">
    <h2><i class="fas fa-code icon"></i> Pseudo-classes et Pseudo-éléments</h2>
    <div class="row">
        
        <!-- Hover -->
<div class="col-md-6">
    <h3 id="hover" style="display: flex; align-items: center;">
        <i class="fas fa-mouse-pointer" style="color: #f39c12; margin-right: 10px;"></i> :hover
    </h3>
    <p>
        Le pseudo-élément <code>:hover</code> permet d’appliquer des styles spécifiques à un élément lorsque l’utilisateur le survole avec la souris. Il est idéal pour créer des effets interactifs et visuels qui améliorent l'expérience utilisateur en attirant l'attention sur des éléments clés.
    </p>

    <h4>Exemples de styles appliqués avec <code>:hover</code> :</h4>

    <!-- Exemple de changement de couleur de fond -->
    <div class="example-box effect-hover" style="padding: 10px; background-color: #3498db; color: white; margin-bottom: 10px;">
        Passez la souris ici : <code>.effect-hover:hover { background-color: #fdd835; }</code>
    </div>
    <style>
        .effect-hover:hover { background-color: #fdd835; color: #333; }
    </style>

    <!-- Exemple de changement de taille avec :hover -->
    <div class="example-box" style="padding: 10px; background-color: #2ecc71; color: white; transition: transform 0.3s; margin-bottom: 10px;">
        <div class="hover-scale" style="display: inline-block;">Survol pour agrandir</div>
    </div>
    <style>
        .hover-scale:hover { transform: scale(1.1); }
    </style>

    <!-- Exemple de rotation avec :hover -->
    <div class="example-box" style="padding: 10px; background-color: #e74c3c; color: white; transition: transform 0.3s; margin-bottom: 10px;">
        <div class="hover-rotate" style="display: inline-block;">Survol pour pivoter</div>
    </div>
    <style>
        .hover-rotate:hover { transform: rotate(10deg); }
    </style>

    <!-- Exemple d'opacité avec :hover -->
    <div class="example-box" style="padding: 10px; background-color: #f39c12; color: white; transition: opacity 0.3s; margin-bottom: 10px;">
        <div class="hover-opacity" style="display: inline-block;">Survol pour réduire l'opacité</div>
    </div>
    <style>
        .hover-opacity:hover { opacity: 0.7; }
    </style>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdf2e9; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #f39c12;"></i>
        <strong>Astuce :</strong> Utilisez <code>:hover</code> pour créer des effets interactifs subtils sur des boutons, des liens ou des images, afin de guider les utilisateurs et de rendre l'interface plus engageante.
    </div>
</div>


        <!-- Active -->
<div class="col-md-6">
    <h3 id="active" style="display: flex; align-items: center;">
        <i class="fas fa-hand-pointer" style="color: #2980b9; margin-right: 10px;"></i> :active
    </h3>
    <p>
        Le pseudo-élément <code>:active</code> applique un style spécifique à un élément au moment où il est cliqué. Cette propriété est particulièrement utile pour les boutons ou les liens, en créant un retour visuel instantané lorsque l’utilisateur appuie sur l’élément, renforçant ainsi l'interactivité de l'interface.
    </p>

    <h4>Exemples de styles appliqués avec <code>:active</code> :</h4>

    <!-- Exemple de changement de couleur de fond -->
    <div class="example-box effect-active" style="padding: 10px; background-color: #3498db; color: white; margin-bottom: 10px; cursor: pointer;">
        Cliquez ici : <code>.effect-active:active { background-color: #0288d1; }</code>
    </div>
    <style>
        .effect-active:active { background-color: #0288d1; color: white; }
    </style>

    <!-- Exemple de réduction de taille au clic -->
    <div class="example-box" style="padding: 10px; background-color: #2ecc71; color: white; transition: transform 0.1s; cursor: pointer; margin-bottom: 10px;">
        <div class="active-scale" style="display: inline-block;">Réduction de taille pendant le clic</div>
    </div>
    <style>
        .active-scale:active { transform: scale(0.95); }
    </style>

    <!-- Exemple de modification d'opacité au clic -->
    <div class="example-box" style="padding: 10px; background-color: #e74c3c; color: white; transition: opacity 0.1s; cursor: pointer; margin-bottom: 10px;">
        <div class="active-opacity" style="display: inline-block;">Opacité réduite pendant le clic</div>
    </div>
    <style>
        .active-opacity:active { opacity: 0.8; }
    </style>

    <!-- Exemple de bordure ajoutée au clic -->
    <div class="example-box" style="padding: 10px; background-color: #f39c12; color: white; transition: border 0.1s; cursor: pointer; margin-bottom: 10px;">
        <div class="active-border" style="display: inline-block;">Bordure ajoutée pendant le clic</div>
    </div>
    <style>
        .active-border:active { border: 2px solid #e67e22; }
    </style>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
        <strong>Astuce :</strong> Utilisez <code>:active</code> pour créer des effets visuels instantanés, renforçant l'interaction des utilisateurs avec les éléments de la page, notamment les boutons ou les liens.
    </div>
</div>


        <!-- Focus -->
<div class="col-md-6">
    <h3 id="focus" style="display: flex; align-items: center;">
        <i class="fas fa-crosshairs" style="color: #66bb6a; margin-right: 10px;"></i> :focus
    </h3>
    <p>
        Le pseudo-élément <code>:focus</code> s'applique lorsqu'un élément est activé ou sélectionné, notamment dans les champs de formulaires ou les liens. Il est souvent utilisé pour améliorer l'accessibilité en ajoutant un effet visuel, indiquant aux utilisateurs que l'élément est actif et prêt pour une interaction.
    </p>

    <h4>Exemples de styles appliqués avec <code>:focus</code> :</h4>

    <!-- Exemple de changement de couleur de fond -->
    <input type="text" class="example-box effect-focus" placeholder="Cliquez ici pour le focus" style="padding: 10px; border: 1px solid #ccc; outline: none; margin-bottom: 10px;">
    <style>
        .effect-focus:focus { background-color: #66bb6a; color: white; border-color: #4caf50; }
    </style>
    <p><code>.effect-focus:focus { background-color: #66bb6a; }</code></p>

    <!-- Exemple de changement de bordure au focus -->
    <textarea class="focus-border" placeholder="Cliquez ici pour voir le changement de bordure" style="padding: 10px; border: 1px solid #ccc; outline: none; width: 100%; margin-bottom: 10px;"></textarea>
    <style>
        .focus-border:focus { border-color: #42a5f5; box-shadow: 0 0 5px #42a5f5; }
    </style>
    <p><code>.focus-border:focus { border-color: #42a5f5; }</code></p>

    <!-- Exemple de mise en évidence avec une ombre -->
    <button class="focus-shadow" style="padding: 10px 20px; border: none; background-color: #f06292; color: white; outline: none; cursor: pointer;">
        Cliquez ici pour voir l'ombre
    </button>
    <style>
        .focus-shadow:focus { box-shadow: 0 0 8px #f06292; }
    </style>
    <p><code>.focus-shadow:focus { box-shadow: 0 0 8px #f06292; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f5e9; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #66bb6a;"></i>
        <strong>Astuce :</strong> Utilisez <code>:focus</code> pour améliorer l'accessibilité, en donnant des indications visuelles aux utilisateurs sur les éléments actuellement activés, comme les champs de formulaires et les liens.
    </div>
</div>


        <!-- Before and After -->
<div class="col-md-6">
    <h3 id="before-after" style="display: flex; align-items: center;">
        <i class="fas fa-code" style="color: #8e44ad; margin-right: 10px;"></i> ::before et ::after
    </h3>
    <p>
        Les pseudo-éléments <code>::before</code> et <code>::after</code> permettent d'ajouter du contenu avant ou après un élément, sans avoir à modifier le HTML. Ils sont souvent utilisés pour ajouter des décorations ou du texte, styliser des éléments, et créer des effets visuels.
    </p>

    <h4>Principaux usages de <code>::before</code> et <code>::after</code> :</h4>
    <ul>
        <li><strong>Décoration de texte</strong> : Ajouter des icônes ou des éléments visuels sans changer le contenu principal.</li>
        <li><strong>Styling</strong> : Créer des effets de rubans, de citations, ou de cadres autour d’un élément.</li>
        <li><strong>Ajout de texte dynamique</strong> : Afficher des labels, des titres, ou des notes supplémentaires.</li>
    </ul>

    <h4>Exemples de <code>::before</code> et <code>::after</code> :</h4>

    <!-- Exemple de texte ajouté avant et après -->
    <div class="example-box effect-before-after" style="padding: 10px; background-color: #f0f0f0; margin-bottom: 10px;">
        Contenu principal
    </div>
    <style>
        .effect-before-after::before { content: "Début - "; color: #8e44ad; font-weight: bold; }
        .effect-before-after::after { content: " - Fin"; color: #8e44ad; font-weight: bold; }
    </style>
    <p><code>.effect-before-after::before { content: "Début - "; }</code><br>
       <code>.effect-before-after::after { content: " - Fin"; }</code></p>

    <!-- Exemple de décoration avec un icône avant -->
    <div class="example-box effect-icon-before" style="padding: 10px; background-color: #3498db; color: white; margin-bottom: 10px;">
        Icône ajoutée avant le texte
    </div>
    <style>
        .effect-icon-before::before { content: "📘 "; font-size: 1.2em; margin-right: 5px; }
    </style>
    <p><code>.effect-icon-before::before { content: "📘 "; }</code></p>

    <!-- Exemple de ligne décorative après le texte -->
    <div class="example-box effect-line-after" style="padding: 10px; background-color: #2ecc71; color: white; position: relative; margin-bottom: 10px;">
        Ligne ajoutée après le texte
    </div>
    <style>
        .effect-line-after::after {
            content: ""; display: block; width: 100%; height: 2px; background-color: #27ae60; margin-top: 5px;
        }
    </style>
    <p><code>.effect-line-after::after { content: ""; display: block; width: 100%; height: 2px; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f9ebea; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #8e44ad;"></i>
        <strong>Astuce :</strong> Utilisez <code>::before</code> et <code>::after</code> pour ajouter des décorations, telles que des icônes ou des lignes, sans toucher au contenu HTML de l'élément.
    </div>
</div>


        <!-- First Child -->
<div class="col-md-6">
    <h3 id="first-child" style="display: flex; align-items: center;">
        <i class="fas fa-child" style="color: #ff7043; margin-right: 10px;"></i> :first-child
    </h3>
    <p>
        Le pseudo-élément <code>:first-child</code> sélectionne uniquement le premier élément enfant d'un parent. Il est particulièrement utile pour styliser le premier élément d'une liste ou d'un conteneur sans affecter les autres éléments enfants.
    </p>

    <h4>Utilisations pratiques de <code>:first-child</code> :</h4>
    <ul>
        <li><strong>Listes</strong> : Styliser le premier élément d'une liste de manière distincte.</li>
        <li><strong>Conteneurs</strong> : Mettre en évidence le premier élément d’un groupe de divs ou sections.</li>
        <li><strong>Tableaux</strong> : Appliquer un style spécifique à la première ligne d'un tableau.</li>
    </ul>

    <h4>Exemples de <code>:first-child</code> :</h4>

    <!-- Exemple de stylisation du premier enfant -->
    <div class="example-box effect-first-child" style="padding: 10px; background-color: #f5f5f5;">
        <div style="padding: 10px;">Premier enfant</div>
        <div style="padding: 10px;">Autre enfant</div>
        <div style="padding: 10px;">Autre enfant</div>
    </div>
    <style>
        .effect-first-child div:first-child { background-color: #ffccbc; font-weight: bold; }
    </style>
    <p><code>.effect-first-child div:first-child { background-color: #ffccbc; }</code></p>

    <!-- Exemple de stylisation du premier élément d'une liste -->
    <ul class="example-list effect-first-list" style="padding: 0; list-style: none; margin-top: 10px;">
        <li style="padding: 10px;">Premier élément de liste</li>
        <li style="padding: 10px;">Autre élément</li>
        <li style="padding: 10px;">Autre élément</li>
    </ul>
    <style>
        .effect-first-list li:first-child { background-color: #ffe0b2; font-weight: bold; }
    </style>
    <p><code>.effect-first-list li:first-child { background-color: #ffe0b2; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fff3e0; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #ff7043;"></i>
        <strong>Astuce :</strong> Utilisez <code>:first-child</code> pour donner une apparence unique au premier élément de divers groupes, tels que les listes ou les conteneurs de divs, afin de renforcer la hiérarchie visuelle.
    </div>
</div>


        <!-- Last Child -->
<div class="col-md-6">
    <h3 id="last-child" style="display: flex; align-items: center;">
        <i class="fas fa-child" style="color: #7986cb; margin-right: 10px;"></i> :last-child
    </h3>
    <p>
        Le pseudo-élément <code>:last-child</code> s'applique uniquement au dernier élément enfant d'un parent. Il est particulièrement utile pour styliser le dernier élément d'une liste ou d'un conteneur, permettant de créer une séparation visuelle ou un effet de clôture.
    </p>

    <h4>Utilisations pratiques de <code>:last-child</code> :</h4>
    <ul>
        <li><strong>Listes</strong> : Appliquer un style unique au dernier élément d'une liste.</li>
        <li><strong>Conteneurs</strong> : Différencier le dernier élément d’un groupe pour marquer une fin visuelle.</li>
        <li><strong>Tableaux</strong> : Styliser la dernière ligne d'un tableau pour donner un effet visuel de clôture.</li>
    </ul>

    <h4>Exemples de <code>:last-child</code> :</h4>

    <!-- Exemple de stylisation du dernier enfant dans un conteneur -->
    <div class="example-box effect-last-child" style="padding: 10px; background-color: #f5f5f5;">
        <div style="padding: 10px;">Premier enfant</div>
        <div style="padding: 10px;">Dernier enfant</div>
    </div>
    <style>
        .effect-last-child div:last-child { background-color: #c5cae9; font-weight: bold; }
    </style>
    <p><code>.effect-last-child div:last-child { background-color: #c5cae9; }</code></p>

    <!-- Exemple de stylisation du dernier élément d'une liste -->
    <ul class="example-list effect-last-list" style="padding: 0; list-style: none; margin-top: 10px;">
        <li style="padding: 10px;">Premier élément de liste</li>
        <li style="padding: 10px;">Autre élément</li>
        <li style="padding: 10px;">Dernier élément de liste</li>
    </ul>
    <style>
        .effect-last-list li:last-child { background-color: #d1c4e9; font-weight: bold; }
    </style>
    <p><code>.effect-last-list li:last-child { background-color: #d1c4e9; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8eaf6; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #7986cb;"></i>
        <strong>Astuce :</strong> Utilisez <code>:last-child</code> pour styliser le dernier élément de divers conteneurs, tels que les listes ou les blocs de texte, afin de souligner la fin d’un groupe ou de créer un effet de clôture.
    </div>
</div>


        <!-- Nth-Child -->
<div class="col-md-6">
    <h3 id="nth-child" style="display: flex; align-items: center;">
        <i class="fas fa-sort-numeric-up" style="color: #009688; margin-right: 10px;"></i> :nth-child()
    </h3>
    <p>
        Le pseudo-élément <code>:nth-child()</code> sélectionne un ou plusieurs éléments enfants d'un parent en fonction de leur position. Cela permet de créer des motifs de style répétitifs, de styliser un élément précis ou encore d'appliquer des effets de zébrage dans des listes ou tableaux.
    </p>

    <h4>Utilisations pratiques de <code>:nth-child()</code> :</h4>
    <ul>
        <li><strong>Styliser des éléments spécifiques</strong> : Appliquer un style unique au n-ième enfant, par exemple le 2e ou le 3e.</li>
        <li><strong>Effets de zébrage</strong> : Styliser les éléments pairs ou impairs d’une liste ou d’un tableau.</li>
        <li><strong>Motifs répétitifs</strong> : Créer des motifs visuels répétitifs, comme styliser tous les 3 éléments d’un groupe.</li>
    </ul>

    <h4>Exemples de <code>:nth-child()</code> :</h4>

    <!-- Exemple de stylisation du deuxième enfant -->
    <div class="example-box effect-nth-child" style="padding: 10px; background-color: #f5f5f5;">
        <div style="padding: 10px;">Premier enfant</div>
        <div style="padding: 10px;">Deuxième enfant</div>
        <div style="padding: 10px;">Troisième enfant</div>
    </div>
    <style>
        .effect-nth-child div:nth-child(2) { background-color: #b2dfdb; font-weight: bold; }
    </style>
    <p><code>.effect-nth-child div:nth-child(2) { background-color: #b2dfdb; }</code></p>

    <!-- Exemple de stylisation des éléments pairs -->
    <ul class="example-list effect-even-child" style="padding: 0; list-style: none; margin-top: 10px;">
        <li style="padding: 10px;">Élément 1</li>
        <li style="padding: 10px;">Élément 2</li>
        <li style="padding: 10px;">Élément 3</li>
        <li style="padding: 10px;">Élément 4</li>
    </ul>
    <style>
        .effect-even-child li:nth-child(even) { background-color: #e0f2f1; }
    </style>
    <p><code>.effect-even-child li:nth-child(even) { background-color: #e0f2f1; }</code></p>

    <!-- Exemple de stylisation des éléments impairs -->
    <ul class="example-list effect-odd-child" style="padding: 0; list-style: none; margin-top: 10px;">
        <li style="padding: 10px;">Élément 1</li>
        <li style="padding: 10px;">Élément 2</li>
        <li style="padding: 10px;">Élément 3</li>
        <li style="padding: 10px;">Élément 4</li>
    </ul>
    <style>
        .effect-odd-child li:nth-child(odd) { background-color: #b2ebf2; }
    </style>
    <p><code>.effect-odd-child li:nth-child(odd) { background-color: #b2ebf2; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e0f7fa; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #009688;"></i>
        <strong>Astuce :</strong> Utilisez <code>:nth-child()</code> pour des motifs répétitifs et des effets de zébrage en appliquant des styles spécifiques aux éléments en fonction de leur position, comme tous les éléments pairs ou impairs.
    </div>
</div>
<!-- Nth-of-Type -->
<div class="col-md-6">
    <h3 id="nth-of-type" style="display: flex; align-items: center;">
        <i class="fas fa-layer-group" style="color: #8e44ad; margin-right: 10px;"></i> :nth-of-type()
    </h3>
    <p>
        Le pseudo-élément <code>:nth-of-type()</code> sélectionne un ou plusieurs éléments en fonction de leur type et de leur position parmi les autres éléments de même type sous le même parent. C'est particulièrement utile pour styliser le n-ième élément d'un type spécifique, même s'il n'est pas le seul enfant de son parent.
    </p>

    <h4>Utilisations pratiques de <code>:nth-of-type()</code> :</h4>
    <ul>
        <li><strong>Styliser des éléments spécifiques d'un type</strong> : Appliquer un style unique au n-ième paragraphe, div ou autre élément de même type sous le même parent.</li>
        <li><strong>Effets de zébrage</strong> : Styliser tous les éléments pairs ou impairs d'un certain type dans un conteneur.</li>
        <li><strong>Motifs répétitifs</strong> : Créer des motifs visuels pour chaque 3e ou 4e élément d'un type donné.</li>
    </ul>

    <h4>Exemples de <code>:nth-of-type()</code> :</h4>

    <!-- Exemple de stylisation du deuxième paragraphe -->
    <div class="example-box effect-nth-of-type" style="padding: 10px; background-color: #f5f5f5;">
        <p style="padding: 10px;">Premier paragraphe</p>
        <p style="padding: 10px;">Deuxième paragraphe</p>
        <p style="padding: 10px;">Troisième paragraphe</p>
    </div>
    <style>
        .effect-nth-of-type p:nth-of-type(2) { background-color: #d1c4e9; font-weight: bold; }
    </style>
    <p><code>.effect-nth-of-type p:nth-of-type(2) { background-color: #d1c4e9; }</code></p>

    <!-- Exemple de stylisation des éléments pairs d'un type donné -->
    <ul class="example-list effect-even-of-type" style="padding: 0; list-style: none; margin-top: 10px;">
        <li style="padding: 10px;">Premier élément</li>
        <li style="padding: 10px;">Deuxième élément</li>
        <li style="padding: 10px;">Troisième élément</li>
        <li style="padding: 10px;">Quatrième élément</li>
    </ul>
    <style>
        .effect-even-of-type li:nth-of-type(even) { background-color: #e1bee7; }
    </style>
    <p><code>.effect-even-of-type li:nth-of-type(even) { background-color: #e1bee7; }</code></p>

    <!-- Exemple de stylisation des éléments impairs d'un type donné -->
    <ul class="example-list effect-odd-of-type" style="padding: 0; list-style: none; margin-top: 10px;">
        <li style="padding: 10px;">Premier élément</li>
        <li style="padding: 10px;">Deuxième élément</li>
        <li style="padding: 10px;">Troisième élément</li>
        <li style="padding: 10px;">Quatrième élément</li>
    </ul>
    <style>
        .effect-odd-of-type li:nth-of-type(odd) { background-color: #c5cae9; }
    </style>
    <p><code>.effect-odd-of-type li:nth-of-type(odd) { background-color: #c5cae9; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #ede7f6; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #8e44ad;"></i>
        <strong>Astuce :</strong> Utilisez <code>:nth-of-type()</code> pour styliser des éléments spécifiques dans des structures HTML complexes où plusieurs types d'éléments coexistent sous le même parent.
    </div>
</div>

        
    </div>
</div>


<!-- Médias Queries et Responsivité -->
<div class="content-section" id="media-queries-responsiveness">
    <h2><i class="fas fa-mobile-alt icon"></i> Médias Queries et Responsivité</h2>
    < class="row">
        
<!-- Media Query -->
<div class="col-md-6">
    <h3 id="media-query" style="display: flex; align-items: center;">
        <i class="fas fa-desktop" style="color: #42a5f5; margin-right: 10px;"></i> Media Query
    </h3>
    <p>
        Les <code>media queries</code> permettent d'appliquer des styles CSS conditionnels en fonction des caractéristiques de l'écran, comme sa largeur, sa hauteur, sa résolution ou son orientation. Elles sont essentielles pour concevoir des designs responsives qui s'adaptent aux différentes tailles d'appareils, du mobile au grand écran.
    </p>

    <h4>Exemples d’utilisation des <code>media queries</code> :</h4>

    <ul>
        <li><strong>Adaptation de la taille des polices</strong> : Ajuster la taille du texte pour une meilleure lisibilité sur les petits écrans.</li>
        <li><strong>Disposition en colonnes</strong> : Passer d'une disposition en une colonne sur mobile à plusieurs colonnes sur un écran plus large.</li>
        <li><strong>Changement de couleurs ou d’espacement</strong> : Ajuster les couleurs, marges et padding pour une meilleure expérience utilisateur.</li>
    </ul>

    <h4>Exemples de media queries :</h4>

    <!-- Exemple de media query pour changer la taille de la police -->
    <div class="example-box responsive-text" style="padding: 10px; background-color: #e3f2fd; font-size: 18px;">
        Redimensionnez la fenêtre pour voir le changement de style
    </div>
    <style>
        @media (max-width: 600px) {
            .responsive-text {
                font-size: 14px;
                background-color: #ffeb3b;
            }
        }
    </style>
    <p><code>@media (max-width: 600px) { .responsive-text { font-size: 14px; background-color: #ffeb3b; } }</code></p>

    <!-- Exemple de disposition en colonnes avec media queries -->
    <div class="example-box responsive-layout" style="display: flex; gap: 10px; background-color: #e8f5e9; padding: 10px;">
        <div style="flex: 1; background-color: #81c784; padding: 5px;">Colonne 1</div>
        <div style="flex: 1; background-color: #66bb6a; padding: 5px;">Colonne 2</div>
    </div>
    <style>
        @media (max-width: 600px) {
            .responsive-layout {
                display: block;
            }
        }
    </style>
    <p><code>@media (max-width: 600px) { .responsive-layout { display: block; } }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e3f2fd; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #42a5f5;"></i>
        <strong>Astuce :</strong> Utilisez des <code>media queries</code> pour rendre votre design plus flexible et responsive, en adaptant les styles CSS selon la largeur de l’écran pour offrir une expérience utilisateur optimale sur tous les appareils.
    </div>
</div>

        
        <!-- Responsive Font -->
<div class="col-md-6">
    <h3 id="responsive-font" style="display: flex; align-items: center;">
        <i class="fas fa-text-height" style="color: #42a5f5; margin-right: 10px;"></i> Responsive Font
    </h3>
    <p>
        En utilisant des unités de mesure basées sur le viewport, comme <code>vw</code> (viewport width), vous pouvez ajuster la taille du texte pour qu'elle reste proportionnelle à la largeur de la fenêtre. Cela permet de maintenir une lisibilité cohérente sur différents appareils, sans besoin de media queries supplémentaires.
    </p>

    <h4>Principales unités pour les polices responsives :</h4>
    <ul>
        <li><strong>vw</strong> : Largeur de la fenêtre d'affichage (viewport width). Par exemple, <code>font-size: 2vw;</code> adapte la taille de la police à 2% de la largeur de la fenêtre.</li>
        <li><strong>vh</strong> : Hauteur de la fenêtre d'affichage (viewport height), utile pour certaines mises en page plus spécifiques.</li>
        <li><strong>vmin</strong> et <strong>vmax</strong> : Respectivement le plus petit ou le plus grand côté de la fenêtre (en hauteur ou largeur), permettant une réactivité plus équilibrée.</li>
    </ul>

    <h4>Exemple de police responsive :</h4>

    <!-- Exemple de texte avec taille responsive en fonction du viewport -->
    <div class="example-box responsive-font" style="font-size: 2vw; padding: 10px; background-color: #e3f2fd;">
        Texte responsive en fonction de la largeur de la fenêtre
    </div>
    <p><code>.responsive-font { font-size: 2vw; }</code></p>

    <!-- Exemple de taille de police en combinaison avec media queries -->
    <p>
        Pour un contrôle encore plus précis, vous pouvez également combiner <code>vw</code> avec des media queries pour ajuster la police lorsque la largeur atteint certaines limites.
    </p>
    <style>
        .responsive-font { font-size: 2vw; }
        @media (max-width: 600px) {
            .responsive-font { font-size: 16px; }
        }
    </style>
    <p><code>@media (max-width: 600px) { .responsive-font { font-size: 16px; } }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e3f2fd; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #42a5f5;"></i>
        <strong>Astuce :</strong> Les unités <code>vw</code> et <code>vh</code> sont idéales pour le texte dans les grandes bannières ou titres. Pour le corps de texte, il est souvent préférable de fixer une taille minimale pour éviter des tailles de texte trop petites.
    </div>
</div>

        
        <!-- Viewport Units -->
<div class="col-md-12">
    <h3 id="viewport" style="display: flex; align-items: center;">
        <i class="fas fa-expand-arrows-alt" style="color: #29b6f6; margin-right: 10px;"></i> Viewport Units
    </h3>
    <p>
        Les unités <code>vh</code> (viewport height) et <code>vw</code> (viewport width) permettent de définir des dimensions en fonction de la taille de la fenêtre du navigateur. Elles sont pratiques pour créer des mises en page adaptatives et réactives, en ajustant les éléments selon les dimensions de l’écran.
    </p>

    <h4>Principales unités de viewport :</h4>
    <ul>
        <li><strong>vh</strong> : 1vh correspond à 1% de la hauteur de la fenêtre d'affichage (viewport height). Par exemple, <code>height: 100vh;</code> couvre 100% de la hauteur de la fenêtre.</li>
        <li><strong>vw</strong> : 1vw correspond à 1% de la largeur de la fenêtre d'affichage (viewport width). Par exemple, <code>width: 100vw;</code> couvre 100% de la largeur de la fenêtre.</li>
        <li><strong>vmin</strong> : Représente la plus petite dimension entre <code>vh</code> et <code>vw</code>, utile pour garder des éléments proportionnés sur tous les écrans.</li>
        <li><strong>vmax</strong> : Représente la plus grande dimension entre <code>vh</code> et <code>vw</code>, idéal pour des éléments occupant toujours la plus grande surface.</li>
    </ul>

    <h4>Exemples d’utilisation des unités de viewport :</h4>

    <!-- Exemple avec 100vh -->
    <div class="example-box full-height" style="height: 100vh; background-color: #b3e5fc; padding: 10px;">
        Prend 100% de la hauteur de la fenêtre
    </div>
    <p><code>.full-height { height: 100vh; }</code></p>

    <!-- Exemple avec vmin -->
    <div class="example-box min-size" style="width: 50vmin; height: 50vmin; background-color: #4fc3f7; padding: 10px; margin-top: 10px;">
        Taille basée sur la plus petite dimension (50vmin)
    </div>
    <p><code>.min-size { width: 50vmin; height: 50vmin; }</code></p>

    <!-- Exemple avec vmax -->
    <div class="example-box max-size">
        <strong>Taille basée sur la plus grande dimension (50vmax)</strong>
        <p><code>.max-size { width: 50vmax; height: 50vmax; }</code></p>
    </div>
    

    <!-- Boîte de conseil -->
    <div style="background-color: #e1f5fe; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #29b6f6;"></i>
        <strong>Astuce :</strong> Utilisez <code>vh</code> et <code>vw</code> pour créer des sections pleine largeur et pleine hauteur, et <code>vmin</code> ou <code>vmax</code> pour des éléments proportionnés aux dimensions de la fenêtre.
    </div>
</div>
<!-- Aspect Ratio -->
<div class="col-md-6">
    <h3 id="aspect-ratio" style="display: flex; align-items: center;">
        <i class="fas fa-expand" style="color: #8e44ad; margin-right: 10px;"></i> Aspect Ratio
    </h3>
    <p>
        La propriété <code>aspect-ratio</code> permet de définir un ratio (ou rapport de proportions) fixe entre la largeur et la hauteur d’un élément, garantissant qu’il conserve toujours les mêmes proportions, quel que soit l’espace disponible. Cela est particulièrement utile pour les éléments multimédias comme les vidéos, les images, ou les conteneurs de cartes.
    </p>

    <h4>Fonctionnement de <code>aspect-ratio</code> :</h4>
    <ul>
        <li><strong>Ratio standard</strong> : Exprimé sous forme de fraction, comme <code>16 / 9</code> pour un format d’écran large ou <code>1 / 1</code> pour un carré.</li>
        <li><strong>Dimensionnement adaptatif</strong> : L’élément ajuste sa taille tout en conservant le ratio défini, ce qui facilite les mises en page responsives.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>aspect-ratio</code> :</h4>

    <!-- Exemple de carré avec aspect-ratio de 1/1 -->
    <div class="example-box aspect-ratio-square" style="aspect-ratio: 1 / 1; background-color: #d7bde2; padding: 10px;">
        Proportion carrée 1:1
    </div>
    <p><code>.aspect-ratio-square { aspect-ratio: 1 / 1; }</code></p>

    <!-- Exemple de rectangle avec aspect-ratio de 16/9 -->
    <div class="example-box aspect-ratio-rect" style="aspect-ratio: 16 / 9; background-color: #bb8fce; padding: 10px; margin-top: 10px;">
        Proportion d’écran large 16:9
    </div>
    <p><code>.aspect-ratio-rect { aspect-ratio: 16 / 9; }</code></p>

    <!-- Exemple avec aspect-ratio et taille fixe -->
    <div class="example-box aspect-ratio-fixed" style="width: 200px; aspect-ratio: 4 / 3; background-color: #a569bd; padding: 10px; margin-top: 10px;">
        Proportion fixe 4:3, largeur de 200px
    </div>
    <p><code>.aspect-ratio-fixed { width: 200px; aspect-ratio: 4 / 3; }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f5eef8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #8e44ad;"></i>
        <strong>Astuce :</strong> Utilisez <code>aspect-ratio</code> pour des images, des vidéos, ou des conteneurs de carte afin de maintenir des proportions visuelles cohérentes sur tous les appareils et dans toutes les mises en page.
    </div>
</div>

<div class="content-section" id="lists-and-arrays">
    <h2><i class="fas fa-book"></i> Listes et tableaux</h2>
    <div class="row">
        <!-- List Style -->
                    <div class="col-md-6">
                        <h3 id="list-style" style="display: flex; align-items: center;">
                            <i class="fas fa-list" style="color: #2c3e50; margin-right: 10px;"></i> List Style
                        </h3>
                        <p>
                            La propriété <code>list-style</code> permet de personnaliser l’apparence des éléments de liste (ul, ol) en modifiant le type de puce, l'image de puce, ou la position des marqueurs. Cela donne plus de flexibilité pour le design des listes.
                        </p>

                        <h4>Sous-propriétés de <code>list-style</code> :</h4>
                        <ul>
                            <li><strong>list-style-type</strong> : Définit le type de puce de la liste (par exemple, <code>disc</code>, <code>circle</code>, <code>square</code>, <code>decimal</code>).</li>
                            <li><strong>list-style-position</strong> : Définit la position de la puce (<code>inside</code> ou <code>outside</code>) par rapport à l'élément de la liste.</li>
                            <li><strong>list-style-image</strong> : Permet d'utiliser une image comme puce de liste, en définissant un lien vers une image avec <code>url()</code>.</li>
                        </ul>

                        <h4>Exemples de <code>list-style</code> :</h4>

                        <!-- Exemple de list-style-type -->
                        <ul class="example-list" style="list-style-type: square; padding: 0; margin-bottom: 10px; position: relative; left: 20px">
                            <li>Élément de liste avec des carrés</li>
                            <li>Deuxième élément</li>
                            <li>Troisième élément</li>
                        </ul>
                        <p><code>list-style-type: square;</code></p>

                        <!-- Exemple de list-style-image -->
                        <ul class="example-list" style="list-style-image: url('https://via.placeholder.com/10'); padding: 0; margin-bottom: 10px; position: relative; left: 20px">
                            <li>Élément de liste avec une image de puce</li>
                            <li>Deuxième élément</li>
                            <li>Troisième élément</li>
                        </ul>
                        <p><code>list-style-image: url('https://via.placeholder.com/10');</code></p>

                        <!-- Exemple de list-style-position -->
                        <ul class="example-list" style="list-style-type: disc; list-style-position: inside; padding: 0; margin-bottom: 10px;">
                            <li>Élément de liste avec puce à l'intérieur</li>
                            <li>Deuxième élément</li>
                            <li>Troisième élément</li>
                        </ul>
                        <p><code>list-style-position: inside;</code></p>

                        <!-- Exemple combinant plusieurs propriétés -->
                        <ul class="example-list" style="list-style: circle inside; padding: 0;">
                            <li>Combinaison de <code>circle</code> et <code>inside</code></li>
                            <li>Deuxième élément</li>
                            <li>Troisième élément</li>
                        </ul>
                        <p><code>list-style: circle inside;</code></p>

                        <!-- Boîte de conseil -->
                        <div style="background-color: #ecf0f1; padding: 10px; border-radius: 5px; margin-top: 20px;">
                            <i class="fas fa-lightbulb" style="color: #2c3e50;"></i>
                            <strong>Astuce :</strong> Utilisez <code>list-style</code> pour personnaliser vos listes en fonction du design souhaité. La propriété raccourcie <code>list-style</code> vous permet de combiner les styles en une seule ligne.
                        </div>
                    </div>
                <!-- Table Layout -->
<div class="col-md-6">
    <h3 id="table-layout" style="display: flex; align-items: center;">
        <i class="fas fa-table" style="color: #3498db; margin-right: 10px;"></i> Table Layout
    </h3>
    <p>
        La propriété <code>table-layout</code> permet de contrôler la manière dont la largeur des colonnes d’une table est calculée et distribuée. Elle offre deux principales options : <code>auto</code> et <code>fixed</code>. 
        Cela influence la réactivité de la table et son temps de rendu, surtout lorsque la table contient un grand volume de données.
    </p>

    <h4>Valeurs de <code>table-layout</code> :</h4>
    <ul>
        <li><strong>auto</strong> : Par défaut, la largeur des colonnes s’adapte au contenu de chaque cellule. La table peut devenir plus large si le contenu est volumineux.</li>
        <li><strong>fixed</strong> : La largeur des colonnes est définie selon la première ligne de la table, et le reste du contenu est tronqué ou ajusté pour rentrer. La table est rendue plus rapidement, car la disposition ne dépend pas de tout le contenu.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>table-layout</code> :</h4>

    <!-- Exemple avec table-layout: auto -->
    <table class="example-table" style="table-layout: auto; width: 100%; border-collapse: collapse; background-color: #eaf2f8; margin-bottom: 10px;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd;">Nom</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Âge</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Alice</td>
            <td style="padding: 10px; border: 1px solid #ddd;">30</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Aime les sciences et les langues étrangères.</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Bob</td>
            <td style="padding: 10px; border: 1px solid #ddd;">25</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Passionné de photographie et de randonnée.</td>
        </tr>
    </table>
    <p><code>table-layout: auto;</code></p>

    <!-- Exemple avec table-layout: fixed -->
    <table class="example-table" style="table-layout: fixed; width: 100%; border-collapse: collapse; background-color: #d6eaf8;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd;">Nom</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Âge</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Alice</td>
            <td style="padding: 10px; border: 1px solid #ddd;">30</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Aime les sciences et les langues étrangères.</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Bob</td>
            <td style="padding: 10px; border: 1px solid #ddd;">25</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Passionné de photographie et de randonnée.</td>
        </tr>
    </table>
    <p><code>table-layout: fixed;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #ebf5fb; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez <code>table-layout: fixed</code> pour améliorer les performances et la lisibilité lorsque les tables contiennent un grand volume de données. Le mode <code>auto</code> est plus adapté pour des tables contenant des colonnes de largeurs variables.
    </div>
</div>
<!-- Border Collapse -->
<div class="col-md-6">
    <h3 id="border-collapse" style="display: flex; align-items: center;">
        <i class="fas fa-border-all" style="color: #1abc9c; margin-right: 10px;"></i> Border Collapse
    </h3>
    <p>
        La propriété <code>border-collapse</code> contrôle si les bordures d'une table sont fusionnées (collapsées) en une seule bordure ou séparées autour des cellules. Elle prend deux valeurs principales : <code>collapse</code> et <code>separate</code>.
    </p>

    <h4>Valeurs de <code>border-collapse</code> :</h4>
    <ul>
        <li><strong>collapse</strong> : Fusionne les bordures des cellules et de la table en une seule bordure. Cela crée un rendu plus net et compact, sans espace entre les cellules.</li>
        <li><strong>separate</strong> : Maintient les bordures des cellules séparées, laissant un espace entre elles. Par défaut, cet espace est contrôlé par la propriété <code>border-spacing</code>.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>border-collapse</code> :</h4>

    <!-- Exemple avec border-collapse: separate -->
    <table class="example-table" style="border-collapse: separate; border-spacing: 10px; width: 100%; background-color: #e8f6f3; margin-bottom: 10px;">
        <tr>
            <th style="padding: 10px; border: 2px solid #1abc9c;">Nom</th>
            <th style="padding: 10px; border: 2px solid #1abc9c;">Âge</th>
            <th style="padding: 10px; border: 2px solid #1abc9c;">Occupation</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Alice</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">30</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Ingénieur</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Bob</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">25</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Designer</td>
        </tr>
    </table>
    <p><code>border-collapse: separate; border-spacing: 10px;</code></p>

    <!-- Exemple avec border-collapse: collapse -->
    <table class="example-table" style="border-collapse: collapse; width: 100%; background-color: #d1f2eb;">
        <tr>
            <th style="padding: 10px; border: 2px solid #1abc9c;">Nom</th>
            <th style="padding: 10px; border: 2px solid #1abc9c;">Âge</th>
            <th style="padding: 10px; border: 2px solid #1abc9c;">Occupation</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Alice</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">30</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Ingénieur</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Bob</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">25</td>
            <td style="padding: 10px; border: 2px solid #1abc9c;">Designer</td>
        </tr>
    </table>
    <p><code>border-collapse: collapse;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #1abc9c;"></i>
        <strong>Astuce :</strong> Utilisez <code>border-collapse: collapse</code> pour un design plus compact. La valeur <code>separate</code> est utile lorsque vous voulez ajouter de l'espace entre les cellules avec <code>border-spacing</code>.
    </div>
</div>
<!-- Border Spacing -->
<div class="col-md-6">
    <h3 id="border-spacing" style="display: flex; align-items: center;">
        <i class="fas fa-border-style" style="color: #16a085; margin-right: 10px;"></i> Border Spacing
    </h3>
    <p>
        La propriété <code>border-spacing</code> permet de contrôler l’espace entre les cellules d’une table lorsque <code>border-collapse</code> est défini sur <code>separate</code>. Elle accepte une ou deux valeurs : une seule valeur applique le même espacement horizontal et vertical, tandis que deux valeurs permettent de définir un espacement distinct pour les lignes et les colonnes.
    </p>

    <h4>Utilisation de <code>border-spacing</code> :</h4>
    <ul>
        <li><strong>Une valeur</strong> : Par exemple, <code>border-spacing: 10px;</code> applique un espace de 10 pixels entre chaque cellule, horizontalement et verticalement.</li>
        <li><strong>Deux valeurs</strong> : Par exemple, <code>border-spacing: 10px 20px;</code> applique 10 pixels d’espacement vertical et 20 pixels d’espacement horizontal.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>border-spacing</code> :</h4>

    <!-- Exemple avec border-spacing: 10px -->
    <table class="example-table" style="border-collapse: separate; border-spacing: 10px; width: 100%; background-color: #eafaf1; margin-bottom: 10px;">
        <tr>
            <th style="padding: 10px; border: 2px solid #16a085;">Nom</th>
            <th style="padding: 10px; border: 2px solid #16a085;">Âge</th>
            <th style="padding: 10px; border: 2px solid #16a085;">Occupation</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #16a085;">Alice</td>
            <td style="padding: 10px; border: 2px solid #16a085;">30</td>
            <td style="padding: 10px; border: 2px solid #16a085;">Ingénieur</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #16a085;">Bob</td>
            <td style="padding: 10px; border: 2px solid #16a085;">25</td>
            <td style="padding: 10px; border: 2px solid #16a085;">Designer</td>
        </tr>
    </table>
    <p><code>border-spacing: 10px;</code></p>

    <!-- Exemple avec border-spacing: 10px 20px -->
    <table class="example-table" style="border-collapse: separate; border-spacing: 10px 20px; width: 100%; background-color: #e8f6f3;">
        <tr>
            <th style="padding: 10px; border: 2px solid #16a085;">Nom</th>
            <th style="padding: 10px; border: 2px solid #16a085;">Âge</th>
            <th style="padding: 10px; border: 2px solid #16a085;">Occupation</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #16a085;">Alice</td>
            <td style="padding: 10px; border: 2px solid #16a085;">30</td>
            <td style="padding: 10px; border: 2px solid #16a085;">Ingénieur</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 2px solid #16a085;">Bob</td>
            <td style="padding: 10px; border: 2px solid #16a085;">25</td>
            <td style="padding: 10px; border: 2px solid #16a085;">Designer</td>
        </tr>
    </table>
    <p><code>border-spacing: 10px 20px;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #16a085;"></i>
        <strong>Astuce :</strong> Utilisez <code>border-spacing</code> pour ajuster l'espace entre les cellules lorsque <code>border-collapse</code> est défini sur <code>separate</code>. Cela est particulièrement utile pour améliorer la lisibilité et ajouter de l'air entre les données dans un tableau.
    </div>
</div>
<!-- Caption Side -->
<div class="col-md-6">
    <h3 id="caption-side" style="display: flex; align-items: center;">
        <i class="fas fa-align-center" style="color: #3498db; margin-right: 10px;"></i> Caption Side
    </h3>
    <p>
        La propriété <code>caption-side</code> contrôle la position d'une légende de table (définie avec la balise <code>&lt;caption&gt;</code>) par rapport à la table. Elle peut être placée en haut ou en bas de la table.
    </p>

    <h4>Valeurs de <code>caption-side</code> :</h4>
    <ul>
        <li><strong>top</strong> (par défaut) : Place la légende au-dessus de la table.</li>
        <li><strong>bottom</strong> : Place la légende en bas de la table.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>caption-side</code> :</h4>

    <!-- Exemple avec caption-side: top -->
    <table class="example-table" style="width: 100%; border-collapse: collapse; background-color: #eaf2f8; margin-bottom: 20px;">
        <caption style="caption-side: top; font-weight: bold; font-size: 1.2em; padding: 5px;">Légende en haut</caption>
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd;">Nom</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Âge</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Occupation</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Alice</td>
            <td style="padding: 10px; border: 1px solid #ddd;">30</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Ingénieur</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Bob</td>
            <td style="padding: 10px; border: 1px solid #ddd;">25</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Designer</td>
        </tr>
    </table>
    <p><code>caption-side: top;</code></p>

    <!-- Exemple avec caption-side: bottom -->
    <table class="example-table" style="width: 100%; border-collapse: collapse; background-color: #d1f2eb;">
        <caption style="caption-side: bottom; font-weight: bold; font-size: 1.2em; padding: 5px;">Légende en bas</caption>
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd;">Nom</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Âge</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Occupation</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Alice</td>
            <td style="padding: 10px; border: 1px solid #ddd;">30</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Ingénieur</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;">Bob</td>
            <td style="padding: 10px; border: 1px solid #ddd;">25</td>
            <td style="padding: 10px; border: 1px solid #ddd;">Designer</td>
        </tr>
    </table>
    <p><code>caption-side: bottom;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #3498db;"></i>
        <strong>Astuce :</strong> Utilisez <code>caption-side: bottom</code> pour les tables où le contenu de la légende agit comme une note explicative ou un résumé placé sous les données.
    </div>
</div>

                </div>
            </div>
    <div class="content-section" id="others">
        <h2><i class="fas fa-code"></i> Divers</h2>
            <div class="row">
                <!-- Visibility -->
<div class="col-md-6">
    <h3 id="visibility" style="display: flex; align-items: center;">
        <i class="fas fa-eye-slash" style="color: #e74c3c; margin-right: 10px;"></i> Visibility
    </h3>
    <p>
        La propriété <code>visibility</code> contrôle si un élément est visible ou non, tout en maintenant son espace dans la mise en page. Contrairement à <code>display: none</code> qui retire complètement l’élément de la mise en page, <code>visibility</code> laisse un espace réservé pour l’élément.
    </p>

    <h4>Valeurs de <code>visibility</code> :</h4>
    <ul>
        <li><strong>visible</strong> (par défaut) : L'élément est affiché normalement.</li>
        <li><strong>hidden</strong> : L'élément est masqué mais occupe toujours son espace dans la mise en page.</li>
        <li><strong>collapse</strong> : Pour les éléments de tableau uniquement, cela supprime l’élément de la mise en page (similaire à <code>display: none</code>).</li>
    </ul>

    <h4>Exemples d’utilisation de <code>visibility</code> :</h4>

    <!-- Exemple avec visibility: visible -->
    <div class="example-box visibility-visible" style="visibility: visible; background-color: #d5f5e3; padding: 10px; margin-bottom: 10px;">
        Cet élément est visible (valeur par défaut)
    </div>
    <p><code>visibility: visible;</code></p>

    <!-- Exemple avec visibility: hidden -->
    <div class="example-box visibility-hidden" style="visibility: hidden; background-color: #f9e79f; padding: 10px; margin-bottom: 10px;">
        Cet élément est masqué mais occupe toujours de l’espace
    </div>
    <p><code>visibility: hidden;</code></p>

    <!-- Exemple de mise en page avec espace réservé pour un élément masqué -->
    <div style="background-color: #ebf5fb; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <p>Texte d'exemple avant l'élément masqué</p>
        <div class="example-box visibility-hidden" style="visibility: hidden; background-color: #f9e79f; padding: 10px; margin-bottom: 10px;">
            Cet élément est masqué (espace réservé)
        </div>
        <p>Texte d'exemple après l'élément masqué</p>
    </div>
    <p><code>visibility: hidden;</code> avec espace laissé dans la mise en page</p>

    <!-- Boîte de conseil -->
    <div style="background-color: #fdf2e9; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #e74c3c;"></i>
        <strong>Astuce :</strong> Utilisez <code>visibility: hidden</code> pour masquer temporairement un élément sans perturber la mise en page, par exemple pour des messages d’erreur ou des notifications qui s'affichent dynamiquement.
    </div>
</div>
<!-- Cursor -->
<div class="col-md-6">
    <h3 id="cursor" style="display: flex; align-items: center;">
        <i class="fas fa-mouse-pointer" style="color: #2980b9; margin-right: 10px;"></i> Cursor
    </h3>
    <p>
        La propriété <code>cursor</code> permet de contrôler l'apparence du curseur de la souris lorsque celui-ci survole un élément. Différents styles de curseur peuvent indiquer une fonctionnalité particulière de l'élément, comme un lien cliquable ou une zone de redimensionnement.
    </p>

    <h4>Valeurs communes de <code>cursor</code> :</h4>
    <ul>
        <li><strong>default</strong> : Le curseur par défaut (souvent une flèche).</li>
        <li><strong>pointer</strong> : Affiche un curseur en forme de main, généralement utilisé pour indiquer un lien cliquable.</li>
        <li><strong>text</strong> : Affiche un curseur en forme de "I", indiquant une zone de texte éditable.</li>
        <li><strong>move</strong> : Indique que l'élément peut être déplacé.</li>
        <li><strong>not-allowed</strong> : Montre un symbole de "non autorisé" (⛔), souvent pour indiquer une action interdite.</li>
        <li><strong>grab</strong> et <strong>grabbing</strong> : Représente une main prête à "saisir" ou "déplacer" un objet.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>cursor</code> :</h4>

    <!-- Exemple avec cursor: default -->
    <div style="cursor: default; background-color: #ecf0f1; padding: 10px; margin-bottom: 10px;">
        Curseur par défaut (flèche)
    </div>
    <p><code>cursor: default;</code></p>

    <!-- Exemple avec cursor: pointer -->
    <div style="cursor: pointer; background-color: #d6eaf8; padding: 10px; margin-bottom: 10px;">
        Curseur en forme de main (cliquable)
    </div>
    <p><code>cursor: pointer;</code></p>

    <!-- Exemple avec cursor: text -->
    <div style="cursor: text; background-color: #eaf2f8; padding: 10px; margin-bottom: 10px;">
        Curseur en forme de I (édition de texte)
    </div>
    <p><code>cursor: text;</code></p>

    <!-- Exemple avec cursor: move -->
    <div style="cursor: move; background-color: #d5f5e3; padding: 10px; margin-bottom: 10px;">
        Curseur de déplacement
    </div>
    <p><code>cursor: move;</code></p>

    <!-- Exemple avec cursor: not-allowed -->
    <div style="cursor: not-allowed; background-color: #f9e79f; padding: 10px; margin-bottom: 10px;">
        Curseur "non autorisé"
    </div>
    <p><code>cursor: not-allowed;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
        <strong>Astuce :</strong> Utilisez <code>cursor: pointer</code> pour indiquer des zones cliquables, <code>cursor: text</code> pour des champs de texte, et <code>cursor: not-allowed</code> pour signaler des actions non disponibles.
    </div>
</div>

<!-- Content -->
<div class="col-md-6">
    <h3 id="content" style="display: flex; align-items: center;">
        <i class="fas fa-quote-right" style="color: #9b59b6; margin-right: 10px;"></i> Content
    </h3>
    <p>
        La propriété <code>content</code> permet d'ajouter du contenu dans le style CSS, souvent en combinaison avec les pseudo-éléments <code>::before</code> et <code>::after</code>. Cela peut inclure du texte, des images, des attributs HTML ou même des symboles spéciaux, permettant d’ajouter des éléments décoratifs ou informatifs sans modifier le code HTML.
    </p>

    <h4>Valeurs communes de <code>content</code> :</h4>
    <ul>
        <li><strong>Texte entre guillemets</strong> : <code>content: "Texte";</code> ajoute du texte avant ou après l’élément.</li>
        <li><strong>Attribut HTML</strong> : <code>content: attr(data-label);</code> utilise un attribut HTML de l’élément (par exemple, <code>data-label</code>).</li>
        <li><strong>Images</strong> : <code>content: url('image.png');</code> affiche une image en pseudo-élément.</li>
        <li><strong>Valeurs spéciales</strong> : <code>content: '';</code> ajoute un espace vide, tandis que <code>content: none;</code> supprime le contenu ajouté.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>content</code> :</h4>

    <!-- Exemple avec content: "Texte avant" -->
    <div class="example-box content-text" style="position: relative; padding: 10px; background-color: #f5eaf7;">
        Exemple avec texte ajouté avant
    </div>
    <style>
        .content-text::before {
            content: "Texte avant ";
            color: #9b59b6;
            font-weight: bold;
        }
    </style>
    <p><code>.content-text::before { content: "Texte avant "; color: #9b59b6; }</code></p>

    <!-- Exemple avec content: attr(data-label) -->
    <div class="example-box content-attr" data-label="Étiquette :" style="position: relative; padding: 10px; background-color: #ebdef0;">
        Utilisation de l’attribut data
    </div>
    <style>
        .content-attr::before {
            content: attr(data-label);
            color: #9b59b6;
            font-weight: bold;
            margin-right: 5px;
        }
    </style>
    <p><code>.content-attr::before { content: attr(data-label); color: #9b59b6; }</code></p>

    <!-- Exemple avec content: url(image.png) -->
    <div class="example-box content-image" style="position: relative; padding: 10px; background-color: #e8daef;">
        Exemple avec image ajoutée avant
    </div>
    <style>
        .content-image::before {
            content: url('https://via.placeholder.com/15');
            display: inline-block;
            margin-right: 5px;
        }
    </style>
    <p><code>.content-image::before { content: url('https://via.placeholder.com/15'); }</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f9ebf7; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #9b59b6;"></i>
        <strong>Astuce :</strong> Utilisez <code>content</code> pour afficher des informations complémentaires, comme des icônes, des étiquettes, ou pour ajouter des séparateurs visuels entre les éléments.
    </div>
</div>
<!-- Resize -->
<div class="col-md-6">
    <h3 id="resize" style="display: flex; align-items: center;">
        <i class="fas fa-expand-arrows-alt" style="color: #2c3e50; margin-right: 10px;"></i> Resize
    </h3>
    <p>
        La propriété <code>resize</code> permet de contrôler si un élément peut être redimensionné par l'utilisateur et dans quelle direction. Elle est souvent utilisée avec des éléments comme les zones de texte (<code>&lt;textarea&gt;</code>) pour permettre aux utilisateurs d'ajuster la taille de l'élément selon leurs besoins.
    </p>

    <h4>Valeurs de <code>resize</code> :</h4>
    <ul>
        <li><strong>none</strong> : Désactive le redimensionnement de l'élément.</li>
        <li><strong>both</strong> : Autorise le redimensionnement de l'élément en largeur et en hauteur.</li>
        <li><strong>horizontal</strong> : Autorise le redimensionnement de l'élément en largeur seulement.</li>
        <li><strong>vertical</strong> : Autorise le redimensionnement de l'élément en hauteur seulement.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>resize</code> :</h4>

    <!-- Exemple avec resize: both -->
    <div style="resize: both; overflow: auto; width: 200px; height: 100px; background-color: #e8f6f3; padding: 10px; margin-bottom: 10px;">
        Redimensionnable dans les deux directions (draguer depuis le coin).
    </div>
    <p><code>resize: both; overflow: auto;</code></p>

    <!-- Exemple avec resize: horizontal -->
    <div style="resize: horizontal; overflow: auto; width: 200px; height: 100px; background-color: #d1f2eb; padding: 10px; margin-bottom: 10px;">
        Redimensionnable horizontalement uniquement
    </div>
    <p><code>resize: horizontal; overflow: auto;</code></p>

    <!-- Exemple avec resize: vertical -->
    <div style="resize: vertical; overflow: auto; width: 200px; height: 100px; background-color: #a3e4d7; padding: 10px; margin-bottom: 10px;">
        Redimensionnable verticalement uniquement
    </div>
    <p><code>resize: vertical; overflow: auto;</code></p>

    <!-- Exemple avec resize: none -->
    <div style="resize: none; overflow: auto; width: 200px; height: 100px; background-color: #76d7c4; padding: 10px;">
        Redimensionnement désactivé
    </div>
    <p><code>resize: none;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #eafaf1; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2c3e50;"></i>
        <strong>Astuce :</strong> Utilisez <code>resize</code> avec <code>overflow: auto</code> pour que l'élément garde un contenu défilable en cas de redimensionnement.
    </div>
</div>
<!-- Pointer Events -->
<div class="col-md-6">
    <h3 id="pointer-events" style="display: flex; align-items: center;">
        <i class="fas fa-hand-pointer" style="color: #16a085; margin-right: 10px;"></i> Pointer Events
    </h3>
    <p>
        La propriété <code>pointer-events</code> contrôle si un élément peut recevoir des événements de pointage, comme les clics ou les survols de la souris. Elle est souvent utilisée pour désactiver les interactions sur certains éléments, tout en les laissant visibles.
    </p>

    <h4>Valeurs de <code>pointer-events</code> :</h4>
    <ul>
        <li><strong>auto</strong> : Active les événements de pointage (par défaut), permettant à l'élément de répondre aux clics et survols.</li>
        <li><strong>none</strong> : Désactive les événements de pointage, rendant l'élément insensible aux clics et survols de la souris.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>pointer-events</code> :</h4>

    <!-- Exemple avec pointer-events: auto -->
    <div class="pointer-auto" style="background-color: #d1f2eb; padding: 10px; margin-bottom: 10px;">
        Interaction activée - Cliquez ici
    </div>
    <p><code>pointer-events: auto;</code></p>

    <!-- Exemple avec pointer-events: none -->
    <div class="pointer-none" style="background-color: #e74c3c; color: white; padding: 10px; margin-bottom: 10px;">
        Interaction désactivée - Ne peut pas être cliqué
    </div>
    <p><code>pointer-events: none;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #e8f8f5; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #16a085;"></i>
        <strong>Astuce :</strong> Utilisez <code>pointer-events: none</code> pour afficher des éléments décoratifs ou des overlays sans interaction, tout en gardant les éléments en dessous cliquables.
    </div>
</div>

<style>
    .pointer-auto {
        cursor: pointer; /* Ajoute une indication visuelle de clic */
        pointer-events: auto;
    }

    .pointer-none {
        pointer-events: none;
    }
</style>
<!-- User Select -->
<div class="col-md-6">
    <h3 id="user-select" style="display: flex; align-items: center;">
        <i class="fas fa-mouse-pointer" style="color: #2980b9; margin-right: 10px;"></i> User Select
    </h3>
    <p>
        La propriété <code>user-select</code> détermine si le texte d'un élément peut être sélectionné par l'utilisateur. Elle est couramment utilisée pour désactiver la sélection de texte sur des éléments comme les titres, les boutons, ou les icônes interactives.
    </p>

    <h4>Valeurs de <code>user-select</code> :</h4>
    <ul>
        <li><strong>auto</strong> : Laisse le comportement de sélection par défaut, en fonction du type d'élément et des paramètres du navigateur.</li>
        <li><strong>none</strong> : Désactive complètement la sélection de texte pour l'élément.</li>
        <li><strong>text</strong> : Force la sélection de texte, même sur des éléments normalement non sélectionnables (par exemple, des boutons).</li>
        <li><strong>all</strong> : Sélectionne tout le texte dans l'élément d'un seul clic.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>user-select</code> :</h4>

    <!-- Exemple avec user-select: auto -->
    <div class="user-auto" style="background-color: #ecf0f1; padding: 10px; margin-bottom: 10px;">
        Sélection par défaut (auto)
    </div>
    <p><code>user-select: auto;</code></p>

    <!-- Exemple avec user-select: none -->
    <div class="user-none" style="background-color: #d6eaf8; padding: 10px; margin-bottom: 10px;">
        Sélection désactivée (none)
    </div>
    <p><code>user-select: none;</code></p>

    <!-- Exemple avec user-select: text -->
    <div class="user-text" style="background-color: #eaf2f8; padding: 10px; margin-bottom: 10px;">
        Sélection forcée (text)
    </div>
    <p><code>user-select: text;</code></p>

    <!-- Exemple avec user-select: all -->
    <div class="user-all" style="background-color: #d5f5e3; padding: 10px;">
        Sélection complète (all)
    </div>
    <p><code>user-select: all;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f0f3f4; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #2980b9;"></i>
        <strong>Astuce :</strong> Utilisez <code>user-select: none</code> pour les éléments interactifs où la sélection n'est pas souhaitée, comme des boutons ou des icônes.
    </div>
</div>

<style>
    .user-auto {
        user-select: auto;
    }

    .user-none {
        user-select: none;
    }

    .user-text {
        user-select: text;
    }

    .user-all {
        user-select: all;
    }
</style>
<!-- Will-Change -->
<div class="col-md-6">
    <h3 id="will-change" style="display: flex; align-items: center;">
        <i class="fas fa-chart-line" style="color: #8e44ad; margin-right: 10px;"></i> Will-Change
    </h3>
    <p>
        La propriété <code>will-change</code> informe le navigateur qu'un élément pourrait changer prochainement dans certaines propriétés, permettant ainsi une optimisation du rendu. Elle est souvent utilisée pour des effets d'animation ou de transformation.
    </p>

    <h4>Valeurs de <code>will-change</code> :</h4>
    <ul>
        <li><strong>transform</strong> : Optimise les transformations à venir, comme <code>scale</code> ou <code>rotate</code>.</li>
        <li><strong>opacity</strong> : Améliore les performances pour les changements d'opacité, souvent utilisé dans les transitions et animations.</li>
        <li><strong>scroll-position</strong> : Prépare l'élément pour un changement de position de défilement (utile pour les effets parallaxe).</li>
        <li><strong>auto</strong> : Valeur par défaut, ne prédit aucun changement.</li>
    </ul>

    <h4>Exemples d’utilisation de <code>will-change</code> :</h4>

    <!-- Exemple avec will-change: transform -->
    <div class="will-transform" style="background-color: #dcdde1; padding: 10px; margin-bottom: 10px; transition: transform 0.5s;">
        Survolez-moi pour voir une transformation
    </div>
    <p><code>will-change: transform;</code></p>

    <!-- Exemple avec will-change: opacity -->
    <div class="will-opacity" style="background-color: #f5b7b1; padding: 10px; margin-bottom: 10px; transition: opacity 0.5s;">
        Survolez-moi pour voir un changement d'opacité
    </div>
    <p><code>will-change: opacity;</code></p>

    <!-- Boîte de conseil -->
    <div style="background-color: #f5eef8; padding: 10px; border-radius: 5px; margin-top: 20px;">
        <i class="fas fa-lightbulb" style="color: #8e44ad;"></i>
        <strong>Astuce :</strong> Utilisez <code>will-change</code> uniquement sur les éléments nécessitant une optimisation de performance immédiate, car un usage excessif peut alourdir la mémoire.
    </div>
</div>

<style>
    .will-transform {
        will-change: transform;
    }

    .will-transform:hover {
        transform: scale(1.1);
    }

    .will-opacity {
        will-change: opacity;
    }

    .will-opacity:hover {
        opacity: 0.5;
    }
</style>

            </div>
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
