<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours sur Bootstrap et Tailwind</title>
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Lien vers Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Lien vers Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Lien vers le CSS personnalisé -->
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php' ?>
<!-- Sidebar pour la navigation des sections -->
<div class="sidebar">
    <h3 style="position: relative; left: 15px; font-weight: bold;">Bootstrap & Tailwind</h3>
    
    <!-- Section Bootstrap -->
    <button class="dropdown-btn">Bootstrap <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <!-- Installation et structure -->
        <a href="#bootstrap-setup">Installation et Structure</a>
        
        <!-- Grille et conteneurs -->
        <a href="#bootstrap-grid">Grille et Conteneurs</a>

        <!-- Composants courants de Bootstrap -->
        <a href="#bootstrap-components">Composants</a>
        <a href="#bootstrap-buttons">Boutons</a>
        <a href="#bootstrap-alerts">Alertes</a>
        <a href="#bootstrap-modals">Modales</a>
        <a href="#bootstrap-cards">Cartes</a>
        <a href="#bootstrap-navbar">Barres de navigation</a>
        <a href="#bootstrap-forms">Formulaires</a>
        <a href="#bootstrap-carousel">Carrousels</a>
        <a href="#bootstrap-breadcrumbs">Breadcrumbs</a>
        <a href="#bootstrap-accordion">Accordion</a>
        <a href="#bootstrap-collapse">Collapse</a>

        <!-- Utilitaires et pratiques courantes -->
        <a href="#bootstrap-utilities">Utilitaires</a>
        <a href="#bootstrap-grid-customization">Personnalisation de Grille</a>
        <a href="#bootstrap-theming">Thèmes et Styles Personnalisés</a>
    </div>
</div>


<!-- Contenu principal de la page -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">

    <div class="content-section" id="bootstrap">
    <h2><i class="fab fa-bootstrap icon"></i> Bootstrap</h2>
    
    <!-- Installation et Structure -->
    <div class="content-subsection" id="bootstrap-setup">
        <h3>Installation et Structure</h3>
        <p>Bootstrap peut être installé de plusieurs façons : via un CDN, un téléchargement ou npm.</p>
        <pre><code>&lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"&gt;</code></pre>
    </div>
    
    <div class="content-subsection" id="bootstrap-grid">
    <h3>Grille et Conteneurs</h3>
    <p>
        Bootstrap utilise un système de grille flexible à 12 colonnes qui permet de structurer les éléments pour créer des mises en page réactives. Ce système est composé de conteneurs, de rangées (<code>row</code>) et de colonnes (<code>col</code>). La grille s'adapte aux différents écrans grâce aux classes de points de rupture : <code>.col-</code>, <code>.col-sm-</code>, <code>.col-md-</code>, <code>.col-lg-</code>, et <code>.col-xl-</code>.
    </p>
    
    <!-- Conteneurs -->
    <h3>Conteneurs</h3>
    <p>
        Les conteneurs limitent la largeur du contenu et créent une marge intérieure, centrant ainsi les éléments sur la page. Bootstrap propose trois types de conteneurs : 
        <code>container</code> (largeur fixe), <code>container-fluid</code> (pleine largeur) et <code>container-{breakpoint}</code> pour adapter la largeur au point de rupture.
    </p>
    <pre><code>&lt;div class="container"&gt;...contenu ici...&lt;/div&gt;
&lt;div class="container-fluid"&gt;...contenu pleine largeur...&lt;/div&gt;</code></pre>
    
    <!-- Exemple visuel de conteneur -->
    <div class="container visual-example" style="border: 1px solid #007bff; padding: 15px;">
        Conteneur de base - Largeur fixe et centrée
    </div>
    
    <!-- Grille Simple (Deux Colonnes) -->
    <h3>Grille Simple (Deux Colonnes)</h3>
    <p>
        La grille de Bootstrap utilise des rangées (<code>row</code>) pour aligner les colonnes (<code>col</code>) en lignes horizontales. Dans cet exemple, chaque colonne occupe 6 colonnes sur les écrans de taille moyenne (<code>col-md-6</code>).
    </p>
    <pre><code>&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-6"&gt;Contenu 1&lt;/div&gt;
        &lt;div class="col-md-6"&gt;Contenu 2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <div class="container visual-example" style="border: 1px solid #007bff;">
        <div class="row">
            <div class="col-md-6 visual-box">Colonne 1 (6/12)</div>
            <div class="col-md-6 visual-box">Colonne 2 (6/12)</div>
        </div>
    </div>

    <!-- Colonnes de Largeur Variable -->
    <h3>Colonnes de Largeur Variable</h3>
    <p>
        Il est possible de créer des colonnes de largeur variable en attribuant une fraction des 12 colonnes à chaque élément. Voici un exemple avec une colonne de 4/12 et une autre de 8/12 :
    </p>
    <pre><code>&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-4"&gt;Colonne de 4/12&lt;/div&gt;
        &lt;div class="col-md-8"&gt;Colonne de 8/12&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <div class="container visual-example" style="border: 1px solid #007bff;">
        <div class="row">
            <div class="col-md-4 visual-box">Colonne de 4/12</div>
            <div class="col-md-8 visual-box">Colonne de 8/12</div>
        </div>
    </div>

    <!-- Colonnes Automatiques (Auto-layout) -->
    <h3>Colonnes Automatiques (Auto-layout)</h3>
    <p>
        Utilisez <code>col</code> sans spécifier de taille pour des colonnes qui se répartissent équitablement la largeur disponible. Voici un exemple :
    </p>
    <pre><code>&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;Colonne 1&lt;/div&gt;
        &lt;div class="col"&gt;Colonne 2&lt;/div&gt;
        &lt;div class="col"&gt;Colonne 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <div class="container visual-example" style="border: 1px solid #007bff;">
        <div class="row">
            <div class="col visual-box">Colonne 1</div>
            <div class="col visual-box">Colonne 2</div>
            <div class="col visual-box">Colonne 3</div>
        </div>
    </div>

    <!-- Grille Réactive avec Points de Rupture -->
    <h3>Grille Réactive avec Points de Rupture</h3>
    <p>
        Pour créer des grilles adaptatives, spécifiez différentes tailles de colonnes pour chaque point de rupture (<code>.col-sm-</code>, <code>.col-md-</code>, etc.). L'exemple suivant utilise une disposition différente pour les petits et grands écrans :
    </p>
    <pre><code>&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-sm-12 col-md-4"&gt;1ère colonne&lt;/div&gt;
        &lt;div class="col-sm-6 col-md-4"&gt;2ème colonne&lt;/div&gt;
        &lt;div class="col-sm-6 col-md-4"&gt;3ème colonne&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <div class="container visual-example" style="border: 1px solid #007bff;">
        <div class="row">
            <div class="col-sm-12 col-md-4 visual-box">1ère colonne</div>
            <div class="col-sm-6 col-md-4 visual-box">2ème colonne</div>
            <div class="col-sm-6 col-md-4 visual-box">3ème colonne</div>
        </div>
    </div>

    <!-- Alignement Vertical et Horizontal -->
    <h3>Alignement Vertical et Horizontal</h3>
    <p>
        Bootstrap permet également d'aligner les colonnes de manière horizontale et verticale. Par exemple, pour centrer verticalement une colonne dans une ligne, utilisez <code>align-items-center</code> :
    </p>
    <pre><code>&lt;div class="container"&gt;
    &lt;div class="row align-items-center"&gt;
        &lt;div class="col-md-4"&gt;Centré verticalement&lt;/div&gt;
        &lt;div class="col-md-4"&gt;Colonne 2&lt;/div&gt;
        &lt;div class="col-md-4"&gt;Colonne 3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <div class="container visual-example" style="border: 1px solid #007bff;">
        <div class="row align-items-center" style="height: 100px;">
            <div class="col-md-4 visual-box">Centré verticalement</div>
            <div class="col-md-4 visual-box">Colonne 2</div>
            <div class="col-md-4 visual-box">Colonne 3</div>
        </div>
    </div>
</div>

    
    <!-- Composants Bootstrap -->
<div class="content-subsection" id="bootstrap-components">
    <h3>Composants</h3>
    <p>
        Bootstrap offre une vaste collection de composants UI préconstruits et personnalisables pour accélérer le développement web. Ces composants incluent boutons, cartes, alertes, formulaires, et bien plus, permettant ainsi de créer rapidement une interface utilisateur harmonieuse et réactive.
    </p>
    <div class="content-subsection" id="bootstrap-buttons">
    <!-- Boutons -->
    <h3>Boutons</h3>
    <p>
        Les boutons de Bootstrap sont stylisés pour s’adapter à différents contextes (primaire, succès, danger, etc.). Les classes comme <code>.btn-primary</code>, <code>.btn-success</code>, et <code>.btn-danger</code> définissent la couleur du bouton.
    </p>
    <pre><code>&lt;button class="btn btn-primary"&gt;Bouton Principal&lt;/button&gt;
&lt;button class="btn btn-success"&gt;Bouton Succès&lt;/button&gt;
&lt;button class="btn btn-danger"&gt;Bouton Danger&lt;/button&gt;</code></pre>
    <div>
        <button class="btn btn-primary">Bouton Principal</button>
        <button class="btn btn-success">Bouton Succès</button>
        <button class="btn btn-danger">Bouton Danger</button>
    </div>
</div>
</div>
    <div class="content-subsection" id="bootstrap-cards">
    <!-- Cartes -->
    <h3>Cartes</h3>
    <p>
        Les cartes de Bootstrap sont des conteneurs flexibles qui peuvent inclure des titres, du texte, des images, et des boutons. Elles permettent de structurer des éléments visuels de manière attrayante.
    </p>
    <pre><code>&lt;div class="card" style="width: 18rem;"&gt;
    &lt;img src="https://via.placeholder.com/150" class="card-img-top" alt="Image de carte"&gt;
    &lt;div class="card-body"&gt;
        &lt;h5 class="card-title"&gt;Titre de la carte&lt;/h5&gt;
        &lt;p class="card-text"&gt;Voici un exemple de texte dans une carte Bootstrap.&lt;/p&gt;
        &lt;a href="#" class="btn btn-primary"&gt;Voir Plus&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <div class="card" style="width: 18rem;">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image de carte">
        <div class="card-body">
            <h5 class="card-title">Titre de la carte</h5>
            <p class="card-text">Voici un exemple de texte dans une carte Bootstrap.</p>
            <a href="#" class="btn btn-primary">Voir Plus</a>
        </div>
    </div>
    </div>
    <div class="content-subsection" id="bootstrap-alerts">
    <!-- Alertes -->
    <h3>Alertes</h3>
    <p>
        Les alertes sont des messages d’information stylisés pour attirer l’attention des utilisateurs. Elles utilisent des classes comme <code>.alert-success</code>, <code>.alert-warning</code>, et <code>.alert-danger</code> pour changer de couleur selon le contexte.
    </p>
    <pre><code>&lt;div class="alert alert-success" role="alert"&gt;
    Ceci est une alerte de succès!
&lt;/div&gt;
&lt;div class="alert alert-warning" role="alert"&gt;
    Ceci est une alerte d’avertissement!
&lt;/div&gt;
&lt;div class="alert alert-danger" role="alert"&gt;
    Ceci est une alerte de danger!
&lt;/div&gt;</code></pre>
    <div class="alert alert-success" role="alert">
        Ceci est une alerte de succès!
    </div>
    <div class="alert alert-warning" role="alert">
        Ceci est une alerte d’avertissement!
    </div>
    <div class="alert alert-danger" role="alert">
        Ceci est une alerte de danger!
    </div>
</div>
<div class="content-subsection" id="bootstrap-forms">
    <!-- Formulaires -->
    <h3>Formulaires</h3>
    <p>
        Bootstrap offre des classes de style pour les formulaires, rendant les champs, boutons, et étiquettes uniformes et attrayants. Utilisez les classes comme <code>.form-control</code> pour les champs et <code>.form-label</code> pour les étiquettes.
    </p>
    <pre><code>&lt;form&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="email" class="form-label"&gt;Adresse Email&lt;/label&gt;
        &lt;input type="email" class="form-control" id="email" placeholder="Entrez votre email"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="password" class="form-label"&gt;Mot de Passe&lt;/label&gt;
        &lt;input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe"&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Connexion&lt;/button&gt;
&lt;/form&gt;</code></pre>
<div class="container col-md-6">
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</div> 
</div>
<div class="content-subsection" id="bootstrap-modals">
    <!-- Modals -->
    <h3>Modals</h3>
    <p>
        Les modals sont des fenêtres contextuelles qui apparaissent au-dessus du contenu principal. Elles sont souvent utilisées pour les notifications, formulaires ou confirmations.
    </p>
    <pre><code>&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"&gt;
    Ouvrir le modal
&lt;/button&gt;

&lt;div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Titre du Modal&lt;/h5&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                Contenu du modal.
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary" data-bs-dismiss="modal"&gt;Fermer&lt;/button&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Sauvegarder&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ouvrir le modal
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Titre du Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Contenu du modal.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success">Sauvegarder</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Barre de Navigation -->
<div class="content-subsection" id="bootstrap-navbar">
    <h3>Barre de Navigation (Navbar)</h3>
    <p>
        La barre de navigation Bootstrap est un composant responsive et personnalisable permettant de créer des menus de navigation intuitifs et attrayants. Elle s’adapte automatiquement aux écrans de différentes tailles et peut inclure des liens, des boutons, des champs de recherche, et des menus déroulants.
    </p>

    <!-- Code d'Exemple de Base -->
    <h4>Exemple de Barre de Navigation Basique</h4>
    <p>Voici un exemple de barre de navigation simple avec le logo et quelques liens :</p>
    <pre><code>&lt;nav class="navbar navbar-expand-lg navbar-light bg-light"&gt;
    &lt;a class="navbar-brand" href="#"&gt;MonSite&lt;/a&gt;
    &lt;button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"&gt;
        &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="collapse navbar-collapse" id="navbarNav"&gt;
        &lt;ul class="navbar-nav"&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" aria-current="page" href="#"&gt;Accueil&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;À propos&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Services&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Contact&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>

    <!-- Exécution visuelle -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light visual-example" style="border: 1px solid #007bff;">
        <a class="navbar-brand" href="#">MonSite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Navbar avec Menu Déroulant et Champs de Recherche -->
    <h4>Barre de Navigation avec Menu Déroulant et Champ de Recherche</h4>
    <p>Ce code ajoute un menu déroulant et un champ de recherche à la barre de navigation :</p>
    <pre><code>&lt;nav class="navbar navbar-expand-lg navbar-dark bg-dark"&gt;
    &lt;a class="navbar-brand" href="#"&gt;MonSite&lt;/a&gt;
    &lt;button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"&gt;
        &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="collapse navbar-collapse" id="navbarNavDropdown"&gt;
        &lt;ul class="navbar-nav"&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link active" aria-current="page" href="#"&gt;Accueil&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class="nav-item dropdown"&gt;
                &lt;a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                    Services
                &lt;/a&gt;
                &lt;ul class="dropdown-menu" aria-labelledby="navbarDropdown"&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Service 1&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Service 2&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Service 3&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li class="nav-item"&gt;
                &lt;a class="nav-link" href="#"&gt;Contact&lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
        &lt;form class="d-flex ms-auto"&gt;
            &lt;input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search"&gt;
            &lt;button class="btn btn-outline-success" type="submit"&gt;Rechercher&lt;/button&gt;
        &lt;/form&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>

    <!-- Exécution visuelle -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark visual-example" style="border: 1px solid #007bff;">
        <a class="navbar-brand" href="#">MonSite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Service 1</a></li>
                        <li><a class="dropdown-item" href="#">Service 2</a></li>
                        <li><a class="dropdown-item" href="#">Service 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
</div>
<div class="content-subsection" id="bootstrap-carousel">
    <h3>Carrousel</h3>
    <p>
        Le carrousel de Bootstrap permet de faire défiler des éléments, comme des images, avec des contrôles pour naviguer entre les diapositives. Il est idéal pour afficher plusieurs images ou annonces.
    </p>
    <pre><code>&lt;div id="carouselExample" class="carousel slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="image1.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="image2.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>

<div id="carouselExample" class="carousel slide visual-example secondary" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="content-subsection" id="bootstrap-breadcrumbs">
    <h3>Breadcrumbs (Fil d'Ariane)</h3>
    <p>
        Le fil d'Ariane permet de montrer la position d'une page dans la structure hiérarchique du site, utile pour la navigation et le SEO.
    </p>
    <pre><code>&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Accueil&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Catégorie&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Sous-catégorie&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>

<nav aria-label="breadcrumb" class="visual-example">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
        <li class="breadcrumb-item"><a href="#">Catégorie</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sous-catégorie</li>
    </ol>
</nav>

<div class="content-subsection" id="bootstrap-collapse">
    <h3>Collapse</h3>
    <p>
        Le composant Collapse crée des sections pliables, idéales pour des éléments tels que des FAQ ou des sections d'informations supplémentaires.
    </p>
    <pre><code>&lt;button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"&gt;
    Afficher le contenu
&lt;/button&gt;

&lt;div class="collapse" id="collapseExample"&gt;
    &lt;div class="card card-body"&gt;
        Contenu caché qui peut être affiché en cliquant sur le bouton.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Afficher le contenu
</button>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        Contenu caché qui peut être affiché en cliquant sur le bouton.
    </div>
</div>

<div class="content-subsection" id="bootstrap-accordion">
    <h3>Accordion</h3>
    <p>
        L'Accordion est un ensemble de sections Collapse, où une seule section peut être ouverte à la fois, idéal pour organiser du contenu de manière concise.
    </p>
    <pre><code>&lt;div class="accordion" id="accordionExample"&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingOne"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
                Titre 1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample"&gt;
            &lt;div class="accordion-body"&gt;
                Contenu de la première section.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header" id="headingTwo"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
                Titre 2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample"&gt;
            &lt;div class="accordion-body"&gt;
                Contenu de la deuxième section.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

<div class="accordion visual-example" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button  btn btn-outline-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Titre 1
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Contenu de la première section.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Titre 2
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Contenu de la deuxième section.
            </div>
        </div>
    </div>
</div>

<!-- Utilitaires Bootstrap -->
<div class="content-subsection" id="bootstrap-utilities">
    <h3>Utilitaires Bootstrap</h3>
    <p>Bootstrap propose une gamme d'utilitaires pour faciliter la mise en forme et l'espacement des éléments. Voici quelques-uns des utilitaires les plus utilisés :</p>

    <!-- Espacement (Margins et Padding) -->
    <h3>Espacement (Margins et Padding)</h3>
    <p>Les utilitaires d'espacement de Bootstrap permettent d'ajouter facilement des marges et des padding aux éléments.</p>
    <pre><code>&lt;div class="mt-3 mb-3"&gt;Marge en haut et en bas&lt;/div&gt;
&lt;div class="p-5"&gt;Padding de 5 unités sur tous les côtés&lt;/div&gt;</code></pre>
    
    <div class="example-box mt-3 mb-3" style="background-color: #e3f2fd;">Marge en haut et en bas (3 unités)</div>
    <div class="example-box p-5" style="background-color: #ffecb3;">Padding de 5 unités</div>

    <!-- Couleurs de Texte et de Fond -->
    <h3>Couleurs de Texte et de Fond</h3>
    <p>Utilisez les classes de couleurs pour styliser rapidement le texte et l'arrière-plan des éléments.</p>
    <pre><code>&lt;div class="text-primary"&gt;Texte bleu primaire&lt;/div&gt;
&lt;div class="bg-success text-white"&gt;Fond vert et texte blanc&lt;/div&gt;</code></pre>
    
    <div class="example-box text-primary">Texte bleu primaire</div>
    <div class="example-box bg-success text-white" style="padding: 10px;">Fond vert avec texte blanc</div>

    <!-- Alignement du Texte -->
    <h3>Alignement du Texte</h>
    <p>Utilisez ces classes pour aligner le texte.</p>
    <pre><code>&lt;div class="text-center"&gt;Texte centré&lt;/div&gt;
&lt;div class="text-end"&gt;Texte aligné à droite&lt;/div&gt;</code></pre>
    
    <div class="example-box text-center" style="background-color: #f1f1f1; padding: 5px;">Texte centré</div>
    <div class="example-box text-end" style="background-color: #f1f1f1; padding: 5px;">Texte aligné à droite</div>

    <!-- Affichage et Visibilité -->
    <h3>Affichage et Visibilité</h3>
    <p>Bootstrap fournit également des classes pour contrôler l'affichage des éléments.</p>
    <pre><code>&lt;div class="d-inline"&gt;Affiché en ligne&lt;/div&gt;
&lt;div class="d-block"&gt;Affiché en bloc&lt;/div&gt;</code></pre>
    
    <div class="d-inline" style="background-color: #c8e6c9; padding: 5px;">Affiché en ligne</div>
    <div class="d-block" style="background-color: #ffcdd2; padding: 5px;">Affiché en bloc</div>
</div>

    
    <!-- Thèmes et Styles Personnalisés Bootstrap -->
<div class="content-subsection" id="bootstrap-themes">
    <h3>Thèmes et Styles Personnalisés</h3>
    <p>Bootstrap permet de personnaliser les styles pour s'adapter à l'identité visuelle de votre projet. Voici quelques techniques pour personnaliser et étendre Bootstrap.</p>

    <!-- Utilisation des Variables Sass -->
    <h3>Utilisation des Variables Sass</h3>
    <p>
        Bootstrap utilise Sass, un préprocesseur CSS, qui permet de modifier facilement les couleurs, typographies, et tailles par défaut via des variables. Vous pouvez par exemple redéfinir la couleur principale et recompiler Bootstrap.
    </p>
    <pre><code>// Définition de la couleur principale en Sass
$primary: #ff5733;
@import "bootstrap";</code></pre>
    <p>En utilisant une configuration Sass, vous pouvez adapter le thème à votre projet sans toucher directement aux fichiers de Bootstrap.</p>

    <!-- Utilisation des Classes Personnalisées -->
    <h3>Utilisation des Classes Personnalisées</h3>
    <p>Créez des classes supplémentaires pour surcharger ou étendre les classes Bootstrap sans modifier les fichiers sources.</p>
    <pre><code>&lt;style&gt;
.custom-bg {
    background-color: #ff5733 !important;
    color: white !important;
}
.custom-padding {
    padding: 20px;
}
&lt;/style&gt;</code></pre>
    
    <div class="custom-bg custom-padding example-box">
        Élément avec fond personnalisé et padding
    </div>

    <!-- Utilisation de CSS Personnalisé -->
    <h3>Utilisation de CSS Personnalisé</h3>
    <p>Ajoutez des fichiers CSS pour styliser certains éléments sans affecter les autres composants Bootstrap. Cela permet de conserver l'uniformité tout en personnalisant des éléments spécifiques.</p>
    <pre><code>&lt;link rel="stylesheet" href="assets/css/custom-styles.css"&gt;</code></pre>
    <p>Dans le fichier <code>custom-styles.css</code>, vous pouvez ajouter des règles CSS pour styliser les éléments de votre site :</p>
    <pre><code>.btn-custom {
    background-color: #6a1b9a;
    color: white;
    border-radius: 50px;
}</code></pre>
    <div class="btn btn-custom">Bouton Personnalisé</div>

    <!-- Thèmes Bootstrap Pré-établis -->
    <h3>Thèmes Bootstrap Pré-établis</h3>
    <p>Il existe également de nombreux thèmes Bootstrap disponibles en ligne qui étendent les styles par défaut. Des sites comme <a class="text-primary" href="https://bootswatch.com/" target="_blank">Bootswatch</a> proposent des thèmes gratuits que vous pouvez ajouter directement à votre projet.</p>
    </div>
    
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
