<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia - Présentation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/memo.css"/>
</head>
<body>
    
    <!-- Header -->
    <header class="text-center p-6 bg-blue-600 text-white">
        <h1 class="header-title">Présentation de Zoo Arcadia</h1>
        <p>Un projet écoresponsable pour une gestion complète et optimisée des ressources du zoo</p>
    </header>
    <br>
    <div class="container">
        <button onclick="resetSlides()">Réinitialiser l'exercice</button>
        <button onclick="showAllSlidesWithAnswers()">Afficher toutes les diapositives avec réponses</button>
    </div>
    

    <!-- Container for Cards -->
    <div class="container my-5">
    <div class="row">
    <div id="slide1" class="col-md-9">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2 class="card-title text-primary">
                <i class="fas fa-info-circle" style="color:#007bff;"></i> 
                <span style="color:#007bff;">Introduction</span>
            </h2>

            <!-- Étape 1: Accueil et remerciement -->
            <div class="mb-3">
                <h5 class="text-secondary">
                    <i class="fas fa-handshake" style="color:#28a745;"></i> 
                    <span style="color:#28a745;">Étape 1 : Accueil</span>
                </h5>
                <p class="card-text">
                    <input type="text" class="fill-in" data-answer="Bonjour">,
                    aujourd'hui, je vais vous présenter un projet intitulé 
                    <input type="text" class="fill-in" data-answer="Zoo Arcadia">.
                </p>
            </div>

            <!-- Étape 2: Présentation du projet -->
            <div class="mb-3">
                <h5 class="text-secondary">
                    <i class="fas fa-leaf" style="color:#28a745;"></i> 
                    <span style="color:#28a745;">Étape 2 : Présentation du Projet</span>
                </h5>
                <p class="card-text">
                    Ce projet est conçu pour répondre aux besoins d'un zoo dans la gestion de ses informations et de ses ressources.
                    <input type="text" class="fill-in" data-answer="Zoo Arcadia adopte une démarche écoresponsable">, facilitant la consultation des informations sur les 
                    <input type="text" class="fill-in" data-answer="animaux">,
                    les <input type="text" class="fill-in" data-answer="habitats">, 
                    les <input type="text" class="fill-in" data-answer="services">, 
                    les <input type="text" class="fill-in" data-answer="horaires">, et les 
                    <input type="text" class="fill-in" data-answer="avis des visiteurs">.
                </p>
            </div>

            <!-- Étape 3: Espaces dédiés -->
            <div class="mb-3">
                <h5 class="text-secondary">
                    <i class="fas fa-layer-group" style="color:#28a745;"></i> 
                    <span style="color:#28a745;">Étape 3 : Espaces Dédicés</span>
                </h5>
                <p class="card-text">
                    Pour une gestion complète et optimisée, l'application propose trois espaces dédiés :
                </p>
                <ul class="list-unstyled">
                    <li>
                        <span class="text-primary font-weight-bold">
                            <i class="fas fa-user-cog mr-2" style="color:#007bff;"></i>Espace 
                        </span> - <input type="text" class="fill-in" data-answer="Administrateur">
                    </li>
                    <li>
                        <span class="text-primary font-weight-bold">
                            <i class="fas fa-user-md mr-2" style="color:#007bff;"></i>Espace 
                        </span> - <input type="text" class="fill-in" data-answer="Vétérinaire">
                    </li>
                    <li>
                        <span class="text-primary font-weight-bold">
                            <i class="fas fa-user-tie mr-2" style="color:#007bff;"></i>Espace 
                        </span> - <input type="text" class="fill-in" data-answer="Employé">
                    </li>
                </ul>
            </div>
            <button id="indicebutton1">Voir les indices</button>
            <div id="message1" class="text-center mt-3"></div>
            <button onclick="validateSlide(1)">Vérifier les réponses</button>
        </div>
    </div>
</div>
<div id="answers-container1" class="col-md-3">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5 class="card-title text-primary">
                <i class="fas fa-check-circle" style="color:#28a745;"></i> Réponses Attendues
            </h5>
            <ul class="list-unstyled mt-3">
                <li><strong>Étape 1 :</strong> Bonjour, Zoo Arcadia</li>
                <li><strong>Étape 2 :</strong> 
                    <ul>
                        <li>Zoo Arcadia adopte une démarche écoresponsable</li>
                        <li>animaux</li>
                        <li>habitats</li>
                        <li>services</li>
                        <li>horaires</li>
                        <li>avis des visiteurs</li>
                    </ul>
                </li>
                <li><strong>Étape 3 :</strong> 
                    <ul>
                        <li>Administrateur</li>
                        <li>Vétérinaire</li>
                        <li>Employé</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="slide2" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-bullseye text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Contexte et objectifs</span>
            </h2>
            <p class="card-text mt-3">
                Pour vous donner un peu de contexte, ce projet s’inscrit dans la réalisation d’une 
                <input type="text" class="fill-in" data-answer="application web"> visant à offrir une 
                <input type="text" class="fill-in" data-answer="expérience enrichissante"> aux visiteurs tout en garantissant une 
                <input type="text" class="fill-in" data-answer="gestion simplifiée"> des opérations internes du zoo.
            </p>
            <p class="card-text mt-4">
                Les objectifs principaux de ce projet sont de proposer une interface 
                <input type="text" class="fill-in" data-answer="intuitive et responsive">, accessible depuis tout type d’appareil, et de fournir des espaces dédiés à chaque type d’utilisateur : 
                <input type="text" class="fill-in" data-answer="administrateurs">, 
                <input type="text" class="fill-in" data-answer="vétérinaires"> et 
                <input type="text" class="fill-in" data-answer="employés">. En plus, l'application incarne des valeurs 
                <input type="text" class="fill-in" data-answer="écoresponsables">, alignées avec l'engagement du zoo en matière de conservation et de durabilité.
            </p>
            <button id="indicebutton2">Voir les indices</button>
            <div id="message2" class="text-center mt-3"></div>
            <button onclick="validateSlide(2)">Vérifier les réponses</button>
        </div>
    </div>
</div>
<div id="answers-container2" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>application web</li>
                <li>expérience enrichissante</li>
                <li>gestion simplifiée</li>
                <li>intuitive et responsive</li>
                <li>administrateurs</li>
                <li>vétérinaires</li>
                <li>employés</li>
                <li>écoresponsables</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide3" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-project-diagram text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Méthodologies de projet</span>
            </h2>
            <p class="card-text mt-3">
                Sur cette slide, je vais vous expliquer la méthodologie de projet que j'ai mis en place pour Zoo Arcadia. 
                Tout d'abord, j'utilise un tableau Kanban via 
                <input type="text" class="fill-in" data-answer="TRELLO">, ce qui me permet de suivre facilement l'avancement des tâches et de structurer le travail en 3 colonnes :<br> 
                <span style="color:#28a745; font-weight:bold;"><i class="fas fa-list-ul"></i> <input type="text" class="fill-in" data-answer="A faire"></span>, 
                <span style="color:#ffc107; font-weight:bold;"><i class="fas fa-spinner"></i> <input type="text" class="fill-in" data-answer="En cours"></span> et 
                <span style="color:#17a2b8; font-weight:bold;"><i class="fas fa-check"></i> <input type="text" class="fill-in" data-answer="Fait"></span>.
                Pour encadrer l'utilisation de l'application, j'ai préparé un 
                <input type="text" class="fill-in" data-answer="manuel d'utilisation"> et une 
                <input type="text" class="fill-in" data-answer="documentation technique">, expliquant l'architecture et les fonctionnalités.
            </p>
            <p class="card-text mt-4">
                Pour garantir la qualité, j'effectue des tests dans un environnement local avec 
                <input type="text" class="fill-in" data-answer="XAMPP"> avant chaque déploiement. Des 
                <input type="text" class="fill-in" data-answer="diagrammes"> viennent compléter cette documentation pour illustrer les flux de données et les processus principaux.
                Grâce à cette organisation, chaque fonctionnalité des espaces d’administration est bien structurée, de la 
                <input type="text" class="fill-in" data-answer="gestion des utilisateurs"> et de ses services, aux 
                <input type="text" class="fill-in" data-answer="rapports vétérinaires">, jusqu’aux 
                <input type="text" class="fill-in" data-answer="horaires d'ouverture">.
            </p>
            <button id="indicebutton3">Voir les indices</button>
            <div id="message3" class="text-center mt-3"></div>
            <button onclick="validateSlide(3)">Vérifier les réponses de la Slide 3</button>
        </div>
    </div>
</div>
<div id="answers-container3" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>TRELLO</li>
                <li>A faire</li>
                <li>En cours</li>
                <li>Fait</li>
                <li>manuel d'utilisation</li>
                <li>documentation technique</li>
                <li>XAMPP</li>
                <li>diagrammes</li>
                <li>gestion des utilisateurs</li>
                <li>rapports vétérinaires</li>
                <li>horaires d'ouverture</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide4" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-code-branch text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Git</span>
            </h2>
            <p class="card-text mt-3">
                Pour gérer le développement de mon projet, j'ai adopté 
                <input type="text" class="fill-in" data-answer="Git"> comme outil de contrôle de versions. Cela m'a permis de structurer mon travail en plusieurs branches, notamment 
                <input type="text" class="fill-in" data-answer="main"> pour la version stable, et 
                <input type="text" class="fill-in" data-answer="dev"> pour les développements en cours. Cette séparation me permet de travailler de manière organisée, sans risquer de compromettre la version stable du projet.
            </p>
            <p class="card-text mt-4">
                J'ai également mis en place un système de versions pour identifier les étapes clés du projet, comme ici avec la version 
                <input type="text" class="fill-in" data-answer="1.0.0">. Enfin, j’ai utilisé les 
                <input type="text" class="fill-in" data-answer="pull requests"> pour gérer les changements majeurs. Cela m'a permis de maintenir un code propre et de prévenir les erreurs potentielles.
            </p>
            <p class="card-text mt-4">
                Chaque 
                <input type="text" class="fill-in" data-answer="commit"> représente un ensemble de modifications ou d'améliorations, ce qui me permet de revenir en arrière facilement en cas de problème. Vous pouvez voir ici un exemple de fréquence de mes commits, qui montrent une progression régulière.
            </p>
            <button id="indicebutton4">Voir les indices</button>
            <div id="message4" class="text-center mt-3"></div>
            <button onclick="validateSlide(4)">Vérifier les réponses de la Slide 4</button>
        </div>
    </div>
</div>
<div id="answers-container4" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>Git</li>
                <li>main</li>
                <li>dev</li>
                <li>1.0.0</li>
                <li>pull requests</li>
                <li>commit</li>
            </ul>
        </div>
    </div>
</div>

<div id="slide5" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-pencil-ruler text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Conception et Maquettes</span>
            </h2>
            <p class="card-text mt-3">
                Pour la conception de l'interface utilisateur, j'ai commencé par élaborer des 
                <input type="text" class="fill-in" data-answer="wireframes"> en utilisant 
                <input type="text" class="fill-in" data-answer="Balsamiq">. 
                Ces wireframes m'ont permis de définir la 
                <input type="text" class="fill-in" data-answer="structure"> et les 
                <input type="text" class="fill-in" data-answer="éléments visuels principaux"> de l'application, en me concentrant sur la 
                <input type="text" class="fill-in" data-answer="hiérarchie de l'information"> et l'
                <input type="text" class="fill-in" data-answer="organisation des contenus"> pour une 
                <input type="text" class="fill-in" data-answer="navigation intuitive">.
            </p>
            <p class="card-text mt-4">
                Comme vous pouvez le voir ici, j'ai réalisé des wireframes pour les versions 
                <input type="text" class="fill-in" data-answer="mobiles"> et 
                <input type="text" class="fill-in" data-answer="desktop">. 
                Cela m'a permis de garantir une 
                <input type="text" class="fill-in" data-answer="conception responsive">, adaptée aux différents supports, et d’optimiser l’
                <input type="text" class="fill-in" data-answer="ergonomie"> pour offrir une 
                <input type="text" class="fill-in" data-answer="expérience utilisateur agréable">.
            </p>
            <p class="card-text mt-4">
                Une fois la structure validée, je suis passé aux 
                <input type="text" class="fill-in" data-answer="mockups">, qui donnent un 
                <input type="text" class="fill-in" data-answer="aperçu plus réaliste"> de l’interface finale. Les mockups montrent comment l’
                <input type="text" class="fill-in" data-answer="application"> accueillera visuellement les utilisateurs, avec une 
                <input type="text" class="fill-in" data-answer="mise en forme cohérente">, une 
                <input type="text" class="fill-in" data-answer="palette de couleurs apaisante"> et une 
                <input type="text" class="fill-in" data-answer="interface claire">. L’objectif était de créer une application qui soit à la fois agréable et fonctionnelle, en mettant l’accent sur l’
                <input type="text" class="fill-in" data-answer="accessibilité"> et la 
                <input type="text" class="fill-in" data-answer="simplicité"> d'utilisation.
            </p>
            <button id="indicebutton5">Voir les indices</button>
            <div id="message5" class="text-center mt-3"></div>
            <button onclick="validateSlide(5)">Vérifier les réponses de la Slide 5</button>
        </div>
    </div>
</div>
<div id="answers-container5" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>wireframes</li>
                <li>Balsamiq</li>
                <li>structure</li>
                <li>éléments visuels principaux</li>
                <li>hiérarchie de l'information</li>
                <li>organisation des contenus</li>
                <li>navigation intuitive</li>
                <li>mobiles</li>
                <li>desktop</li>
                <li>conception responsive</li>
                <li>ergonomie</li>
                <li>expérience utilisateur agréable</li>
                <li>mockups</li>
                <li>aperçu plus réaliste</li>
                <li>application</li>
                <li>mise en forme cohérente</li>
                <li>palette de couleurs apaisante</li>
                <li>interface claire</li>
                <li>accessibilité</li>
                <li>simplicité</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide6" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-pencil-ruler text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Conception avec Balsamiq</span>
            </h2>
            <p class="card-text mt-3">
                Pour la conception de l'interface utilisateur, j'ai utilisé 
                <input type="text" class="fill-in" data-answer="Balsamiq"> pour créer des 
                <input type="text" class="fill-in" data-answer="wireframes">. Cet outil 
                <input type="text" class="fill-in" data-answer="simple et intuitif"> m'a permis de me concentrer sur la 
                <input type="text" class="fill-in" data-answer="structure de l'interface"> sans être distrait par l'
                <input type="text" class="fill-in" data-answer="esthétique">.
            </p>
            <p class="card-text mt-4">
                Grâce à Balsamiq, j’ai pu 
                <input type="text" class="fill-in" data-answer="travailler rapidement et efficacement">, en testant différentes idées pour la 
                <input type="text" class="fill-in" data-answer="version desktop">. Cette première étape a posé les bases d’une 
                <input type="text" class="fill-in" data-answer="interface fluide">, assurant une 
                <input type="text" class="fill-in" data-answer="navigation ergonomique"> pour les utilisateurs.
            </p>
            <button id="indicebutton6">Voir les indices</button>
            <div id="message6" class="text-center mt-3"></div>
            <button onclick="validateSlide(6)">Vérifier les réponses de la Slide 6</button>
        </div>
    </div>
</div>
<div id="answers-container6" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>Balsamiq</li>
                <li>wireframes</li>
                <li>simple et intuitif</li>
                <li>structure de l'interface</li>
                <li>esthétique</li>
                <li>travailler rapidement et efficacement</li>
                <li>version desktop</li>
                <li>interface fluide</li>
                <li>navigation ergonomique</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide7" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-desktop text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Conception avec Uizard.io</span>
            </h2>
            <p class="card-text mt-3">
                Pour les 
                <input type="text" class="fill-in" data-answer="mockups">, j’ai utilisé 
                <input type="text" class="fill-in" data-answer="Uizard.io">, un outil qui facilite la création d’interfaces grâce à ses 
                <input type="text" class="fill-in" data-answer="templates"> et 
                <input type="text" class="fill-in" data-answer="composants">. Cela m’a permis de concevoir des écrans 
                <input type="text" class="fill-in" data-answer="rapidement"> tout en assurant une 
                <input type="text" class="fill-in" data-answer="cohérence visuelle">.
            </p>
            <p class="card-text mt-4">
                Uizard.io intègre aussi de l’
                <input type="text" class="fill-in" data-answer="intelligence artificielle">, ce qui accélère la génération d’écrans en fonction des besoins, notamment pour l’adaptation 
                <input type="text" class="fill-in" data-answer="responsive">. Les exemples ici montrent comment j’ai pu créer une interface 
                <input type="text" class="fill-in" data-answer="intuitive"> et 
                <input type="text" class="fill-in" data-answer="uniforme"> en un 
                <input type="text" class="fill-in" data-answer="minimum de temps">.
            </p>
            <button id="indicebutton7">Voir les indices</button>
            <div id="message7" class="text-center mt-3"></div>
            <button onclick="validateSlide(7)">Vérifier les réponses de la Slide 7</button>
        </div>
    </div>
</div>
<div id="answers-container7" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>mockups</li>
                <li>Uizard.io</li>
                <li>templates</li>
                <li>composants</li>
                <li>rapidement</li>
                <li>cohérence visuelle</li>
                <li>intelligence artificielle</li>
                <li>responsive</li>
                <li>intuitive</li>
                <li>uniforme</li>
                <li>minimum de temps</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide8" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-laptop-code text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Développement et technologies</span>
            </h2>
            <p class="card-text mt-3">
                Voici les technologies utilisées pour ce projet. J'ai structuré le développement selon les principes 
                <input type="text" class="fill-in" data-answer="SOLID"> pour assurer une bonne maintenabilité.
            </p>
            <p class="card-text mt-4">
                Le front-end repose sur 
                <input type="text" class="fill-in" data-answer="HTML">, 
                <input type="text" class="fill-in" data-answer="CSS">, et 
                <input type="text" class="fill-in" data-answer="JavaScript">, tandis que le back-end est développé en 
                <input type="text" class="fill-in" data-answer="PHP">. Pour la base de données, j’ai utilisé 
                <input type="text" class="fill-in" data-answer="MySQL">, et 
                <input type="text" class="fill-in" data-answer="MongoDB"> pour le stockage en non relationnel.
            </p>
            <button id="indicebutton8">Voir les indices</button>
            <div id="message8" class="text-center mt-3"></div>
            <button onclick="validateSlide(8)">Vérifier les réponses de la Slide 8</button>
        </div>
    </div>
</div>
<div id="answers-container8" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>SOLID</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>MongoDB</li>
            </ul>
        </div>
    </div>
</div>

<div id="slide9" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-cubes text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Principes SOLID</span>
            </h2>
            <p class="card-text mt-3">
                Pour ce projet, j'ai appliqué les principes 
                <input type="text" class="fill-in" data-answer="SOLID">, qui sont essentiels pour garantir la 
                <input type="text" class="fill-in" data-answer="maintenabilité">, la 
                <input type="text" class="fill-in" data-answer="modularité"> et l'
                <input type="text" class="fill-in" data-answer="extensibilité"> du code. En respectant la 
                <input type="text" class="fill-in" data-answer="responsabilité unique"> et la 
                <input type="text" class="fill-in" data-answer="séparation des préoccupations">, j'ai pu créer des 
                <input type="text" class="fill-in" data-answer="modules indépendants"> et facilement évolutifs, notamment en utilisant des 
                <input type="text" class="fill-in" data-answer="interfaces"> pour une meilleure indépendance des composants.
            </p>
            <p class="card-text mt-4">
                Ce respect des principes SOLID permet d’obtenir un 
                <input type="text" class="fill-in" data-answer="code propre"> et 
                <input type="text" class="fill-in" data-answer="scalable">, comme illustré ici avec la structure de mon projet, chacun gérant une 
                <input type="text" class="fill-in" data-answer="entité spécifique">.
            </p>
            
            <!-- Schéma des principes SOLID -->
            <div class="text-center mt-5">
                <img src="assets/image/solid.png" alt="Schéma des principes SOLID" class="img-fluid rounded border" style="max-width: 100%;">
                <p class="mt-3">
                    Schéma illustrant les principes SOLID :
                </p>
                <ul class="list-unstyled">
                    <li>
                        <span style="color:#28a745; font-weight:bold;">
                            <i class="fas fa-check"></i> Responsabilité unique
                        </span>
                    </li>
                    <li>
                        <span style="color:#17a2b8; font-weight:bold;">
                            <i class="fas fa-door-open"></i> Ouvert/Fermé
                        </span>
                    </li>
                    <li>
                        <span style="color:#ffc107; font-weight:bold;">
                            <i class="fas fa-exchange-alt"></i> Substitution de Liskov
                        </span>
                    </li>
                    <li>
                        <span style="color:#e83e8c; font-weight:bold;">
                            <i class="fas fa-layer-group"></i> Ségrégation des Interfaces
                        </span>
                    </li>
                    <li>
                        <span style="color:#6c757d; font-weight:bold;">
                            <i class="fas fa-plug"></i> Inversion des Dépendances
                        </span>
                    </li>
                </ul>
            </div>
            <button id="indicebutton9">Voir les indices</button>
            <div id="message9" class="text-center mt-3"></div>
            <button onclick="validateSlide(9)">Vérifier les réponses de la Slide 9</button>
        </div>
    </div>
</div>
<div id="answers-container9" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>SOLID</li>
                <li>maintenabilité</li>
                <li>modularité</li>
                <li>extensibilité</li>
                <li>responsabilité unique</li>
                <li>séparation des préoccupations</li>
                <li>modules indépendants</li>
                <li>interfaces</li>
                <li>code propre</li>
                <li>scalable</li>
                <li>entité spécifique</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide10" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-code text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">L’utilisation de HTML dans mon projet</span>
            </h2>
            <p class="card-text mt-3">
                Pour structurer efficacement mon projet, j'ai segmenté les éléments 
                <input type="text" class="fill-in" data-answer="HTML"> principaux dans différents fichiers pour favoriser la 
                <input type="text" class="fill-in" data-answer="modularité"> et la 
                <input type="text" class="fill-in" data-answer="réutilisation">.
            </p>
            <p class="card-text mt-4">
                Le 
                <input type="text" class="fill-in" data-answer="header"> contient les balises essentielles de configuration, y compris les métadonnées pour le 
                <input type="text" class="fill-in" data-answer="SEO">, l’icône de 
                <input type="text" class="fill-in" data-answer="favicon">, et les liens vers les ressources externes comme 
                <input type="text" class="fill-in" data-answer="Bootstrap"> et 
                <input type="text" class="fill-in" data-answer="FontAwesome">. Cela permet de garantir une base standardisée et 
                <input type="text" class="fill-in" data-answer="responsive"> sur toutes les pages.
            </p>
            <p class="card-text mt-4">
                Le 
                <input type="text" class="fill-in" data-answer="footer"> centralise les liens vers les sections clés du site ainsi qu'un 
                <input type="text" class="fill-in" data-answer="iframe Google Maps"> pour la localisation du zoo, ce qui améliore l'
                <input type="text" class="fill-in" data-answer="accessibilité"> et l'
                <input type="text" class="fill-in" data-answer="expérience utilisateur">.
            </p>
            <p class="card-text mt-4">
                Pour la 
                <input type="text" class="fill-in" data-answer="barre de navigation">, j'ai utilisé les classes Bootstrap, notamment pour la 
                <input type="text" class="fill-in" data-answer="disposition responsive"> et les 
                <input type="text" class="fill-in" data-answer="composants de navigation">, assurant une expérience fluide sur différents supports.
            </p>
            <p class="card-text mt-4">
                Enfin, le 
                <input type="text" class="fill-in" data-answer="formulaire de connexion"> est stylisé avec des classes Bootstrap pour une présentation uniforme et professionnelle. Ce découpage de la structure HTML garantit une page 
                <input type="text" class="fill-in" data-answer="organisée">, 
                <input type="text" class="fill-in" data-answer="intuitive"> et facile à maintenir, avec des éléments clés facilement modulables.
            </p>
            <button id="indicebutton10">Voir les indices</button>
            <div id="message10" class="text-center mt-3"></div>
            <button onclick="validateSlide(10)">Vérifier les réponses de la Slide 10</button>
        </div>
    </div>
</div>
<div id="answers-container10" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>HTML</li>
                <li>modularité</li>
                <li>réutilisation</li>
                <li>header</li>
                <li>SEO</li>
                <li>favicon</li>
                <li>Bootstrap</li>
                <li>FontAwesome</li>
                <li>responsive</li>
                <li>footer</li>
                <li>iframe Google Maps</li>
                <li>accessibilité</li>
                <li>expérience utilisateur</li>
                <li>barre de navigation</li>
                <li>disposition responsive</li>
                <li>composants de navigation</li>
                <li>formulaire de connexion</li>
                <li>organisée</li>
                <li>intuitive</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide11" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-paint-brush text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">L’utilisation de CSS dans mon projet</span>
            </h2>
            <p class="card-text mt-3">
                Pour la partie 
                <input type="text" class="fill-in" data-answer="CSS"> de mon projet, j'ai travaillé sur des 
                <input type="text" class="fill-in" data-answer="styles globaux"> et des 
                <input type="text" class="fill-in" data-answer="personnalisations"> pour assurer un 
                <input type="text" class="fill-in" data-answer="design cohérent"> sur toutes les pages. J'ai appliqué des 
                <input type="text" class="fill-in" data-answer="styles universels"> aux balises principales comme 
                <input type="text" class="fill-in" data-answer="<body>">, 
                <input type="text" class="fill-in" data-answer="<h1>">, 
                <input type="text" class="fill-in" data-answer="<h2>">, 
                <input type="text" class="fill-in" data-answer="<h3>">, et 
                <input type="text" class="fill-in" data-answer="<p>"> afin de maintenir un 
                <input type="text" class="fill-in" data-answer="rendu visuel propre">.
            </p>
            <p class="card-text mt-4">
                Le projet intègre également un 
                <input type="text" class="fill-in" data-answer="fond d'écran unique">, des 
                <input type="text" class="fill-in" data-answer="styles sur mesure"> pour les éléments clés comme le 
                <input type="text" class="fill-in" data-answer="footer">, les 
                <input type="text" class="fill-in" data-answer="boutons">, et les 
                <input type="text" class="fill-in" data-answer="cartes">. J'ai ajouté des 
                <input type="text" class="fill-in" data-answer="animations et transitions légères"> pour enrichir l'
                <input type="text" class="fill-in" data-answer="expérience utilisateur">, avec un effet de 
                <input type="text" class="fill-in" data-answer="zoom"> sur les cartes et les images lorsqu'on fait un 
                <input type="text" class="fill-in" data-answer="hover">.
            </p>
            <p class="card-text mt-4">
                L’ensemble du design est entièrement 
                <input type="text" class="fill-in" data-answer="responsive">, permettant une adaptation sur tous types d'écrans.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="GIFs"> que vous voyez illustrent le 
                <input type="text" class="fill-in" data-answer="rendu final"> et montrent en direct les 
                <input type="text" class="fill-in" data-answer="animations et transitions">, démontrant l'
                <input type="text" class="fill-in" data-answer="aspect dynamique"> de l'interface. Ces effets apportent une touche de 
                <input type="text" class="fill-in" data-answer="modernité"> et un effet visuel qui captent l’attention des utilisateurs.
            </p>
            <button id="indicebutton11">Voir les indices</button>
            <div id="message11" class="text-center mt-3"></div>
            <button onclick="validateSlide(11)">Vérifier les réponses de la Slide 11</button>
        </div>
    </div>
</div>
<div id="answers-container11" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>CSS</li>
                <li>styles globaux</li>
                <li>personnalisations</li>
                <li>design cohérent</li>
                <li>styles universels</li>
                <li>&lt;body&gt;</li>
                <li>&lt;h1&gt;</li>
                <li>&lt;h2&gt;</li>
                <li>&lt;h3&gt;</li>
                <li>&lt;p&gt;</li>
                <li>rendu visuel propre</li>
                <li>fond d'écran unique</li>
                <li>styles sur mesure</li>
                <li>footer</li>
                <li>boutons</li>
                <li>cartes</li>
                <li>animations et transitions légères</li>
                <li>expérience utilisateur</li>
                <li>zoom</li>
                <li>hover</li>
                <li>responsive</li>
                <li>GIFs</li>
                <li>rendu final</li>
                <li>animations et transitions</li>
                <li>aspect dynamique</li>
                <li>modernité</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide12" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-code text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">L’utilisation de JavaScript dans mon projet</span>
            </h2>
            <p class="card-text mt-3">
                Pour ce projet, j'ai utilisé 
                <input type="text" class="fill-in" data-answer="JavaScript Vanilla"> pour la 
                <input type="text" class="fill-in" data-answer="manipulation de base">, la 
                <input type="text" class="fill-in" data-answer="Fetch API"> pour des 
                <input type="text" class="fill-in" data-answer="requêtes asynchrones modernes">, et 
                <input type="text" class="fill-in" data-answer="AJAX"> pour des 
                <input type="text" class="fill-in" data-answer="interactions dynamiques"> avec le serveur sans rechargement de page, assurant une 
                <input type="text" class="fill-in" data-answer="expérience utilisateur fluide">.
            </p>
            <p class="card-text mt-4">
                Pour cette partie, j'ai utilisé JavaScript Vanilla pour 
                <input type="text" class="fill-in" data-answer="manipuler directement le DOM"> sans framework additionnel. J'ai intégré 
                <input type="text" class="fill-in" data-answer="addEventListener"> pour écouter les interactions, comme le clic sur l'icône d'affichage du mot de passe. La fonction 
                <input type="text" class="fill-in" data-answer="togglePassword"> permet de basculer entre l'affichage en clair et masqué du mot de passe en modifiant l'attribut 
                <input type="text" class="fill-in" data-answer="input type">. Enfin, j'ai utilisé une 
                <input type="text" class="fill-in" data-answer="icône FontAwesome"> pour améliorer l’interface, changeant dynamiquement l'icône 'œil' en fonction de l'état du champ.
            </p>
            <p class="card-text mt-4">
                J'ai utilisé la Fetch API pour envoyer des 
                <input type="text" class="fill-in" data-answer="requêtes asynchrones"> au serveur, permettant ici d'enregistrer les clics dans MongoDB via le fichier 
                <input type="text" class="fill-in" data-answer="record_click.php">. Lorsqu'un utilisateur clique sur un animal, son 
                <input type="text" class="fill-in" data-answer="animalId"> est transmis, et si l'enregistrement est réussi, il est redirigé vers la page de l’animal avec 
                <input type="text" class="fill-in" data-answer="window.location.href">. En cas d'échec, une erreur est capturée et affichée dans la 
                <input type="text" class="fill-in" data-answer="console"> pour faciliter le débogage.
            </p>
            <p class="card-text mt-4">
                Dans cette partie, j'ai utilisé AJAX pour des interactions dynamiques avec le serveur sans rechargement de page. La fonction 
                <input type="text" class="fill-in" data-answer="refreshServiceTable"> actualise automatiquement la table des services. Les 
                <input type="text" class="fill-in" data-answer="Modals"> permettent d'ajouter ou de modifier des services via des fenêtres interactives. J'ai utilisé 
                <input type="text" class="fill-in" data-answer="FormData"> pour gérer facilement les données du formulaire lors des envois. Un 
                <input type="text" class="fill-in" data-answer="CSRF Token"> est ajouté pour renforcer la 
                <input type="text" class="fill-in" data-answer="sécurité"> des actions sensibles. Les boutons 
                <input type="text" class="fill-in" data-answer=".btn-edit"> et 
                <input type="text" class="fill-in" data-answer=".btn-delete"> déclenchent des actions spécifiques pour l’édition et la suppression. Enfin, la fonction 
                <input type="text" class="fill-in" data-answer="decodeHtml"> aide à afficher correctement les descriptions en décodant le HTML.
            </p>
            <button id="indicebutton12">Voir les indices</button>
            <div id="message12" class="text-center mt-3"></div>
            <button onclick="validateSlide(12)">Vérifier les réponses de la Slide 12</button>
        </div>
    </div>
</div>
<div id="answers-container12" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>JavaScript Vanilla</li>
                <li>manipulation de base</li>
                <li>Fetch API</li>
                <li>requêtes asynchrones modernes</li>
                <li>AJAX</li>
                <li>interactions dynamiques</li>
                <li>expérience utilisateur fluide</li>
                <li>manipuler directement le DOM</li>
                <li>addEventListener</li>
                <li>togglePassword</li>
                <li>input type</li>
                <li>icône FontAwesome</li>
                <li>requêtes asynchrones</li>
                <li>record_click.php</li>
                <li>animalId</li>
                <li>window.location.href</li>
                <li>console</li>
                <li>refreshServiceTable</li>
                <li>Modals</li>
                <li>FormData</li>
                <li>CSRF Token</li>
                <li>sécurité</li>
                <li>.btn-edit</li>
                <li>.btn-delete</li>
                <li>decodeHtml</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide13" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-server text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">L’utilisation de PHP dans mon projet</span>
            </h2>
            <p class="card-text mt-3">
                Dans ce projet, grâce aux 
                <input type="text" class="fill-in" data-answer="namespaces">, j'ai pu organiser le code de manière 
                <input type="text" class="fill-in" data-answer="modulaire"> et 
                <input type="text" class="fill-in" data-answer="isolée">. J'ai également mis en place un 
                <input type="text" class="fill-in" data-answer="chargement automatique"> conforme à la norme 
                <input type="text" class="fill-in" data-answer="PSR-4">, ce qui optimise les performances en chargeant les classes uniquement quand elles sont instanciées.
            </p>
            <p class="card-text mt-4">
                Pour sécuriser les accès, j'ai implémenté un système de gestion de 
                <input type="text" class="fill-in" data-answer="sessions">. Chaque session démarre à la connexion et a une durée de vie de 
                <input type="text" class="fill-in" data-answer="30 minutes">. À chaque interaction, la durée est mise à jour ; sinon, la session se termine automatiquement, et l'utilisateur est redirigé vers la page de connexion.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="includes"> m'ont permis de diviser le code en 
                <input type="text" class="fill-in" data-answer="blocs logiques">, comme pour les en-têtes et pieds de page, ce qui facilite les modifications globales sans duplication. Cela favorise la 
                <input type="text" class="fill-in" data-answer="modularité"> et simplifie la maintenance.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="boucles"> sont essentielles pour parcourir et afficher les données de manière 
                <input type="text" class="fill-in" data-answer="dynamique">, comme les rapports vétérinaires, présentés en cartes individuelles. Cette approche permet une organisation visuelle efficace, tout en rendant le code réutilisable.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="conditions"> jouent un rôle important dans la 
                <input type="text" class="fill-in" data-answer="logique décisionnelle"> du projet. Elles permettent, par exemple, de vérifier si l'utilisateur ajoute un like ou un commentaire. J'ai également intégré des vérifications de sécurité, comme les 
                <input type="text" class="fill-in" data-answer="tokens CSRF"> et les filtres pour assurer l'intégrité des données.
            </p>
            <p class="card-text mt-4">
                Les superglobales 
                <input type="text" class="fill-in" data-answer="$_POST"> et 
                <input type="text" class="fill-in" data-answer="$_GET"> facilitent la récupération des données utilisateur pour des actions comme l'ajout, la modification ou la suppression d'animaux. Grâce à ces variables, le traitement des données est 
                <input type="text" class="fill-in" data-answer="centralisé et sécurisé">.
            </p>
            <p class="card-text mt-4">
                Enfin, la création d'
                <input type="text" class="fill-in" data-answer="instances"> est cruciale pour relier les différentes couches de l'application. Par exemple, les connexions aux bases de données 
                <input type="text" class="fill-in" data-answer="MySQL"> et 
                <input type="text" class="fill-in" data-answer="MongoDB"> sont initialisées, suivies des dépôts et services, puis du contrôleur. Cette structure en 
                <input type="text" class="fill-in" data-answer="couches"> permet de gérer les données de façon fluide et modulaire, tout en facilitant l’évolution du projet.
            </p>
            <button id="indicebutton13">Voir les indices</button>
            <div id="message13" class="text-center mt-3"></div>
            <button onclick="validateSlide(13)">Vérifier les réponses de la Slide 13</button>
        </div>
    </div>
</div>
<div id="answers-container13" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>namespaces</li>
                <li>modulaire</li>
                <li>isolée</li>
                <li>chargement automatique</li>
                <li>PSR-4</li>
                <li>sessions</li>
                <li>30 minutes</li>
                <li>includes</li>
                <li>blocs logiques</li>
                <li>modularité</li>
                <li>boucles</li>
                <li>dynamique</li>
                <li>conditions</li>
                <li>logique décisionnelle</li>
                <li>tokens CSRF</li>
                <li>$_POST</li>
                <li>$_GET</li>
                <li>centralisé et sécurisé</li>
                <li>instances</li>
                <li>MySQL</li>
                <li>MongoDB</li>
                <li>couches</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide14" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-database text-primary mr-3" style="font-size: 2rem;"></i>
                <span style="color:#007bff;">L’utilisation de MySQL dans mon projet</span>
            </h2>
            <p class="card-text mt-3">
                Dans ce projet, j'ai utilisé 
                <input type="text" class="fill-in" data-answer="PDO"> pour la connexion à la base de données, profitant de sa 
                <input type="text" class="fill-in" data-answer="flexibilité"> et de ses options de 
                <input type="text" class="fill-in" data-answer="sécurité">. Le code est organisé dans un namespace 
                <input type="text" class="fill-in" data-answer="Database">, ce qui assure une structure 
                <input type="text" class="fill-in" data-answer="modulaire">. La méthode 
                <input type="text" class="fill-in" data-answer="connect()"> initialise la connexion avec les paramètres nécessaires et active la gestion des erreurs avec 
                <input type="text" class="fill-in" data-answer="PDO::ERRMODE_EXCEPTION"> pour un débogage efficace. Cette approche garantit une connexion 
                <input type="text" class="fill-in" data-answer="sécurisée"> et 
                <input type="text" class="fill-in" data-answer="fiable">.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="requêtes préparées"> sont employées pour toutes les interactions avec la base de données, protégeant contre les 
                <input type="text" class="fill-in" data-answer="injections SQL"> grâce aux 
                <input type="text" class="fill-in" data-answer="placeholders">. Avec 
                <input type="text" class="fill-in" data-answer="bindParam"> et 
                <input type="text" class="fill-in" data-answer="bindValue">, les valeurs sont 
                <input type="text" class="fill-in" data-answer="sécurisées"> et 
                <input type="text" class="fill-in" data-answer="validées"> avant exécution, simplifiant les opérations fréquentes comme l'ajout et la mise à jour des données.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="clés"> et 
                <input type="text" class="fill-in" data-answer="contraintes"> assurent l'
                <input type="text" class="fill-in" data-answer="intégrité des données">. La 
                <input type="text" class="fill-in" data-answer="clé primaire"> identifie chaque enregistrement, tandis que les 
                <input type="text" class="fill-in" data-answer="clés étrangères"> lient les tables, garantissant la 
                <input type="text" class="fill-in" data-answer="cohérence"> des données avec des contraintes de cascade et des restrictions en cas de modification. Les 
                <input type="text" class="fill-in" data-answer="index"> améliorent les performances des requêtes, surtout pour des tables volumineuses.
            </p>
            <p class="card-text mt-4">
                Les tables sont structurées en 
                <input type="text" class="fill-in" data-answer="lignes"> et 
                <input type="text" class="fill-in" data-answer="colonnes">, chaque colonne ayant un type de données spécifique, comme 
                <input type="text" class="fill-in" data-answer="int"> ou 
                <input type="text" class="fill-in" data-answer="varchar">, pour optimiser le stockage. Cette organisation assure une base de données 
                <input type="text" class="fill-in" data-answer="efficace">, capable de gérer différentes informations de manière 
                <input type="text" class="fill-in" data-answer="structurée">.
            </p>
            <p class="card-text mt-4">
                Enfin, la 
                <input type="text" class="fill-in" data-answer="sécurité"> est renforcée par des privilèges 
                <input type="text" class="fill-in" data-answer="restreints"> pour les utilisateurs de la base de données, limitant les accès. De plus, des 
                <input type="text" class="fill-in" data-answer="sauvegardes régulières"> assurent la 
                <input type="text" class="fill-in" data-answer="résilience"> des données en cas de problème, offrant une gestion sécurisée et fiable du système.
            </p>
            <button id="indicebutton14">Voir les indices</button>
            <div id="message14" class="text-center mt-3"></div>
            <button onclick="validateSlide(14)">Vérifier les réponses de la Slide 14</button>
        </div>
    </div>
</div>
<div id="answers-container14" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>PDO</li>
                <li>flexibilité</li>
                <li>sécurité</li>
                <li>Database</li>
                <li>modulaire</li>
                <li>connect()</li>
                <li>PDO::ERRMODE_EXCEPTION</li>
                <li>sécurisée</li>
                <li>fiable</li>
                <li>requêtes préparées</li>
                <li>injections SQL</li>
                <li>placeholders</li>
                <li>bindParam</li>
                <li>bindValue</li>
                <li>sécurisées</li>
                <li>validées</li>
                <li>clés</li>
                <li>contraintes</li>
                <li>intégrité des données</li>
                <li>clé primaire</li>
                <li>clés étrangères</li>
                <li>cohérence</li>
                <li>index</li>
                <li>lignes</li>
                <li>colonnes</li>
                <li>int</li>
                <li>varchar</li>
                <li>efficace</li>
                <li>structurée</li>
                <li>sécurité</li>
                <li>restreints</li>
                <li>sauvegardes régulières</li>
                <li>résilience</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide15" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-database text-primary mr-3" style="font-size: 2rem;"></i>
                <span style="color:#007bff;">L’utilisation de MongoDB dans mon projet</span>
            </h2>
            <p class="card-text mt-3">
                Dans mon projet, 
                <input type="text" class="fill-in" data-answer="MongoDB"> est principalement utilisé pour l'enregistrement des 
                <input type="text" class="fill-in" data-answer="clics des utilisateurs">, ce qui me permet de suivre les 
                <input type="text" class="fill-in" data-answer="interactions en temps réel">. Par exemple, chaque clic sur un animal est enregistré via une fonction JavaScript utilisant 
                <input type="text" class="fill-in" data-answer="fetch">, qui envoie une requête au fichier 
                <input type="text" class="fill-in" data-answer="record_click.php">. Ce fichier enregistre ensuite le clic dans une collection MongoDB, garantissant une 
                <input type="text" class="fill-in" data-answer="capture rapide"> et 
                <input type="text" class="fill-in" data-answer="flexible"> de l'information.
            </p>
            <p class="card-text mt-4">
                J'ai également mis en place un système pour récupérer les trois animaux les plus populaires. La fonction 
                <input type="text" class="fill-in" data-answer="getTopThreeAnimalsByClicks"> effectue une requête dans MongoDB pour trier et limiter les résultats aux trois premiers, et retourne ces données pour affichage. Grâce à une intégration avec 
                <input type="text" class="fill-in" data-answer="MySQL">, les détails des animaux proviennent de MySQL, tandis que le nombre de clics est extrait de MongoDB, permettant une 
                <input type="text" class="fill-in" data-answer="double gestion des données"> et une grande 
                <input type="text" class="fill-in" data-answer="flexibilité">.
            </p>
            <p class="card-text mt-4">
                Enfin, la fonction 
                <input type="text" class="fill-in" data-answer="getCollection"> permet de sélectionner dynamiquement une collection, offrant une 
                <input type="text" class="fill-in" data-answer="flexibilité"> dans la manipulation de mes données. L’utilisation combinée de MongoDB et de MySQL m’apporte ainsi 
                <input type="text" class="fill-in" data-answer="robustesse"> et 
                <input type="text" class="fill-in" data-answer="adaptabilité"> dans la gestion de mon projet.
            </p>
            <button id="indicebutton15">Voir les indices</button>
            <div id="message15" class="text-center mt-3"></div>
            <button onclick="validateSlide(15)">Vérifier les réponses de la Slide 15</button>
        </div>
    </div>
</div>
<div id="answers-container15" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>MongoDB</li>
                <li>clics des utilisateurs</li>
                <li>interactions en temps réel</li>
                <li>fetch</li>
                <li>record_click.php</li>
                <li>capture rapide</li>
                <li>flexible</li>
                <li>getTopThreeAnimalsByClicks</li>
                <li>MySQL</li>
                <li>double gestion des données</li>
                <li>flexibilité</li>
                <li>getCollection</li>
                <li>flexibilité</li>
                <li>robustesse</li>
                <li>adaptabilité</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide16" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white" id="card">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-shield-alt text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Sécurité et protection des données</span>
            </h2>
            <p class="card-text mt-3">
                Dans mon projet, la sécurité des données est une 
                <input type="text" class="fill-in" data-answer="priorité">. J'ai implémenté plusieurs mesures de protection pour garantir l'
                <input type="text" class="fill-in" data-answer="intégrité"> et la 
                <input type="text" class="fill-in" data-answer="confidentialité"> des informations.
            </p>
            <p class="card-text mt-4">
                Premièrement, j'utilise le 
                <input type="text" class="fill-in" data-answer="hashage des mots de passe"> avec 
                <input type="text" class="fill-in" data-answer="password_hash()">. Cela assure que les mots de passe stockés sont sécurisés et qu'ils ne peuvent pas être décryptés en cas de fuite de données.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="requêtes préparées"> sont également une norme dans mon projet. Elles permettent de protéger contre les 
                <input type="text" class="fill-in" data-answer="injections SQL"> en utilisant 
                <input type="text" class="fill-in" data-answer="bindParam">, ce qui lie les valeurs de manière sécurisée avant l'exécution.
            </p>
            <p class="card-text mt-4">
                Ensuite, la 
                <input type="text" class="fill-in" data-answer="validation des entrées utilisateur"> est essentielle pour éviter les failles 
                <input type="text" class="fill-in" data-answer="XSS"> et valider les données reçues. J’utilise 
                <input type="text" class="fill-in" data-answer="filter_input"> et 
                <input type="text" class="fill-in" data-answer="htmlspecialchars"> pour nettoyer les données avant de les stocker ou afficher.
            </p>
            <p class="card-text mt-4">
                J'ai également mis en place une 
                <input type="text" class="fill-in" data-answer="gestion des sessions"> avec expiration. Après 
                <input type="text" class="fill-in" data-answer="30 minutes"> d'inactivité, la session est automatiquement détruite, réduisant ainsi les risques de 
                <input type="text" class="fill-in" data-answer="vol de session"> en cas d'oubli de déconnexion.
            </p>
            <p class="card-text mt-4">
                Les 
                <input type="text" class="fill-in" data-answer="permissions d'accès"> sont gérées en fonction des rôles utilisateur. Par exemple, seuls les 
                <input type="text" class="fill-in" data-answer="administrateurs"> ont accès à certaines sections sensibles, et les utilisateurs non connectés sont 
                <input type="text" class="fill-in" data-answer="redirigés"> pour éviter des accès non autorisés.
            </p>
            <p class="card-text mt-4">
                Enfin, l'interaction dynamique sans rechargement de page est sécurisée avec des 
                <input type="text" class="fill-in" data-answer="tokens"> pour éviter toute manipulation non autorisée, comme illustré dans mes scripts AJAX. Cela améliore l’
                <input type="text" class="fill-in" data-answer="expérience utilisateur"> tout en assurant une communication sécurisée.
            </p>
            <p class="card-text mt-4">
                Ces mesures combinées garantissent une 
                <input type="text" class="fill-in" data-answer="protection robuste"> contre les menaces courantes et renforcent la 
                <input type="text" class="fill-in" data-answer="fiabilité"> de mon application.
            </p>
            <button id="indicebutton16">Voir les indices</button>
            <div id="message16" class="text-center mt-3"></div>
            <button onclick="validateSlide(16)">Vérifier les réponses de la Slide 16</button>
        </div>
    </div>
</div>
<div id="answers-container16" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>priorité</li>
                <li>intégrité</li>
                <li>confidentialité</li>
                <li>hashage des mots de passe</li>
                <li>password_hash()</li>
                <li>requêtes préparées</li>
                <li>injections SQL</li>
                <li>bindParam</li>
                <li>validation des entrées utilisateur</li>
                <li>XSS</li>
                <li>filter_input</li>
                <li>htmlspecialchars</li>
                <li>gestion des sessions</li>
                <li>30 minutes</li>
                <li>vol de session</li>
                <li>permissions d'accès</li>
                <li>administrateurs</li>
                <li>redirigés</li>
                <li>tokens</li>
                <li>expérience utilisateur</li>
                <li>protection robuste</li>
                <li>fiabilité</li>
            </ul>
        </div>
    </div>
</div>


<div id="slide17" class="col-md-9">
    <div class="card shadow-lg mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-5">
            <h2 class="card-title text-primary d-flex align-items-center">
                <i class="fas fa-cloud-upload-alt text-primary mr-3" style="font-size: 2rem;"></i> 
                <span style="color:#007bff;">Le déploiement de mon application sur le Web</span>
            </h2>
            <p class="card-text mt-3">
                Pour le 
                <input type="text" class="fill-in" data-answer="déploiement"> de mon application, j'ai mis en place une 
                <input type="text" class="fill-in" data-answer="infrastructure complète et sécurisée">. Mon application est hébergée sur 
                <input type="text" class="fill-in" data-answer="Heroku">, ce qui garantit une 
                <input type="text" class="fill-in" data-answer="disponibilité optimale"> et une 
                <input type="text" class="fill-in" data-answer="facilité de mise à jour continue">.
            </p>
            <p class="card-text mt-4">
                Pour la 
                <input type="text" class="fill-in" data-answer="base de données">, j'utilise 
                <input type="text" class="fill-in" data-answer="StackHero"> avec une configuration 
                <input type="text" class="fill-in" data-answer="SSL"> activée pour 
                <input type="text" class="fill-in" data-answer="sécuriser les communications"> entre le serveur et la base de données. L'intégration avec 
                <input type="text" class="fill-in" data-answer="IONOS"> me permet de 
                <input type="text" class="fill-in" data-answer="gérer le domaine"> et les 
                <input type="text" class="fill-in" data-answer="certificats SSL">, assurant ainsi une 
                <input type="text" class="fill-in" data-answer="connexion sécurisée"> pour les utilisateurs.
            </p>
            <p class="card-text mt-4">
                J'utilise également 
                <input type="text" class="fill-in" data-answer="MongoDB Atlas"> pour des opérations spécifiques de 
                <input type="text" class="fill-in" data-answer="stockage NoSQL">, ce qui améliore la 
                <input type="text" class="fill-in" data-answer="flexibilité de gestion des données">. Avec 
                <input type="text" class="fill-in" data-answer=".htaccess">, j'ai optimisé le 
                <input type="text" class="fill-in" data-answer="SEO"> de mon site pour une 
                <input type="text" class="fill-in" data-answer="meilleure visibilité en ligne">.
            </p>
            <p class="card-text mt-4">
                Enfin, j’ai intégré une gestion des 
                <input type="text" class="fill-in" data-answer="cookies"> pour 
                <input type="text" class="fill-in" data-answer="optimiser l'expérience utilisateur"> et se conformer aux standards de 
                <input type="text" class="fill-in" data-answer="confidentialité">.
            </p>
            <button id="indicebutton17">Voir les indices</button>
            <div id="message17" class="text-center mt-3"></div>
            <button onclick="validateSlide(17)">Vérifier les réponses de la Slide 17</button>
        </div>
    </div>
</div>
<div id="answers-container17" class="col-md-3">
    <div class="card shadow mb-4 border-0 rounded-lg bg-gradient-to-r from-blue-50 to-white">
        <div class="card-body p-4">
            <h5 class="card-title text-primary">Indices - Réponses attendues</h5>
            <ul class="list-unstyled mt-3">
                <li>déploiement</li>
                <li>infrastructure complète et sécurisée</li>
                <li>Heroku</li>
                <li>disponibilité optimale</li>
                <li>facilité de mise à jour continue</li>
                <li>base de données</li>
                <li>StackHero</li>
                <li>SSL</li>
                <li>sécuriser les communications</li>
                <li>IONOS</li>
                <li>gérer le domaine</li>
                <li>certificats SSL</li>
                <li>connexion sécurisée</li>
                <li>MongoDB Atlas</li>
                <li>stockage NoSQL</li>
                <li>flexibilité de gestion des données</li>
                <li>.htaccess</li>
                <li>SEO</li>
                <li>meilleure visibilité en ligne</li>
                <li>cookies</li>
                <li>optimiser l'expérience utilisateur</li>
                <li>confidentialité</li>
            </ul>
        </div>
    </div>
</div>


</div>
</div>
    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-3">
        <p>Fiche de révision pour Diaporama de USDI Abdurahman - Graduate Développeur Front-End 2023 - 2024</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/memo.js"></script>
</body>
</html>
