<?php

// Classe Database pour la connexion à MySQL
class Database
{
    private static $instance = null;
    private $connection;

    // Configuration de la base de données
    private $host = 'localhost';
    private $dbname = 'qcm_database';
    private $username = 'Abdurahman';
    private $password = 'Abdufufu2525+';

    // Constructeur privé pour empêcher l'instanciation directe
    private function __construct()
    {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    // Singleton pour obtenir une seule instance de la connexion
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Obtenir la connexion PDO
    public function getConnection()
    {
        return $this->connection;
    }
}

// Classe Leaderboard pour la gestion des scores
class Leaderboard
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // Ajouter un score au leaderboard
    public function addScore($pseudo, $score)
    {
        try {
            $query = $this->db->prepare("INSERT INTO leaderboard (pseudo, score) VALUES (:pseudo, :score)");
            $query->execute([
                ':pseudo' => $pseudo,
                ':score' => $score,
            ]);
        } catch (PDOException $e) {
            die("Erreur lors de l'ajout du score : " . $e->getMessage());
        }
    }

    // Récupérer les scores classés par ordre décroissant
    public function getTopScores($limit = 10)
    {
        try {
            $query = $this->db->prepare("SELECT pseudo, score, created_at FROM leaderboard ORDER BY score DESC, created_at ASC LIMIT :limit");
            $query->bindValue(':limit', $limit, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des scores : " . $e->getMessage());
        }
    }
}

class Questions {
    public function getQuestionQCM1() {
        return [
        // Sécurité Web
        [
            "question" => "En quelle année les cookies HTTP ont-ils été inventés pour maintenir les sessions utilisateur ?",
            "answers" => ["1993", "1995", "1998", "2000"],
            "correct" => 1
        ],
        [
            "question" => "Quand les premières attaques Cross-Site Scripting (XSS) ont-elles été documentées ?",
            "answers" => ["1995", "1998", "2000", "2004"],
            "correct" => 2
        ],
        [
            "question" => "En quelle année OWASP (Open Web Application Security Project) a-t-il été créé ?",
            "answers" => ["2000", "2004", "2006", "2008"],
            "correct" => 1
        ],
        [
            "question" => "Quand l’en-tête HTTP Content-Security-Policy a-t-il été introduit pour prévenir les attaques XSS ?",
            "answers" => ["2004", "2008", "2010", "2011"],
            "correct" => 1
        ],
        [
            "question" => "Quelle année marque la première publication de l'OWASP Top 10 ?",
            "answers" => ["2008", "2010", "2011", "2014"],
            "correct" => 2
        ],
        [
            "question" => "Quand la vulnérabilité Heartbleed a-t-elle été révélée ?",
            "answers" => ["2012", "2014", "2016", "2018"],
            "correct" => 1
        ],
        [
            "question" => "Quand le RGPD a-t-il été adopté officiellement par le Parlement européen ?",
            "answers" => ["27 avril 2016", "4 mai 2016", "25 mai 2018", "25 mai 2016"],
            "correct" => 0
        ],
        [
            "question" => "À quelle date le RGPD est-il devenu obligatoire dans tous les pays de l'Union européenne ?",
            "answers" => ["27 avril 2016", "4 mai 2016", "25 mai 2016", "25 mai 2018"],
            "correct" => 3
        ],
        [
            "question" => "Quand le protocole TLS 1.3 a-t-il été officiellement lancé ?",
            "answers" => ["2018", "2019", "2020", "2021"],
            "correct" => 2
        ],

        // Inventions et évolutions des langages web
        [
            "question" => "Quelle année marque la naissance de HTML par Tim Berners-Lee ?",
            "answers" => ["1991", "1993", "1995", "1997"],
            "correct" => 0
        ],
        [
            "question" => "En quelle année CGI (Common Gateway Interface) a-t-il été créé ?",
            "answers" => ["1991", "1993", "1995", "1997"],
            "correct" => 1
        ],
        [
            "question" => "Quand PHP a-t-il été introduit pour la première fois ?",
            "answers" => ["1994", "1995", "1996", "1997"],
            "correct" => 0
        ],
        [
            "question" => "Quand JavaScript a-t-il été créé par Netscape ?",
            "answers" => ["1993", "1994", "1995", "1996"],
            "correct" => 2
        ],
        [
            "question" => "Quelle année marque la création de Node.js pour exécuter JavaScript côté serveur ?",
            "answers" => ["2007", "2008", "2009", "2010"],
            "correct" => 2
        ],
        [
            "question" => "Quand TypeScript a-t-il été lancé comme un sur-ensemble de JavaScript ?",
            "answers" => ["2010", "2011", "2012", "2013"],
            "correct" => 1
        ],

        // Frameworks et dépendances
        [
            "question" => "Quand Spring (Java) a-t-il été lancé pour les applications d’entreprise ?",
            "answers" => ["2000", "2002", "2004", "2006"],
            "correct" => 1
        ],
        [
            "question" => "Quand jQuery a-t-il été lancé, simplifiant la manipulation DOM et AJAX ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1
        ],
        [
            "question" => "En quelle année React a-t-il été introduit par Facebook ?",
            "answers" => ["2012", "2013", "2014", "2015"],
            "correct" => 1
        ],
        [
            "question" => "Quand Vue.js a-t-il été lancé pour créer des interfaces utilisateur progressives ?",
            "answers" => ["2013", "2014", "2015", "2016"],
            "correct" => 1
        ],

        // Évolutions des navigateurs
        [
            "question" => "Quand Internet Explorer a-t-il été lancé par Microsoft ?",
            "answers" => ["1993", "1995", "1997", "1999"],
            "correct" => 1
        ],
        [
            "question" => "Quelle année marque le développement de Safari par Apple ?",
            "answers" => ["2001", "2003", "2005", "2007"],
            "correct" => 1
        ],
        [
            "question" => "Quand Google Chrome a-t-il été lancé ?",
            "answers" => ["2006", "2008", "2010", "2012"],
            "correct" => 1
        ],

        // Sécurité et cryptographie
        [
            "question" => "Quand la cryptographie asymétrique a-t-elle été inventée par Diffie-Hellman ?",
            "answers" => ["1976", "1980", "1984", "1988"],
            "correct" => 0
        ],
        [
            "question" => "Quand SSL (Secure Socket Layer) a-t-il été utilisé pour la première fois publiquement ?",
            "answers" => ["1992", "1994", "1996", "1998"],
            "correct" => 1
        ],
        [
            "question" => "Quand le protocole TLS a-t-il été développé pour remplacer SSL ?",
            "answers" => ["1997", "1999", "2001", "2003"],
            "correct" => 1
        ],

        // Applications web
        [
            "question" => "Quand Ajax a-t-il été popularisé ?",
            "answers" => ["2002", "2004", "2006", "2008"],
            "correct" => 1
        ],
        [
            "question" => "Quand Google Maps a-t-il été lancé comme exemple de Single Page Application ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1
        ],
        [
            "question" => "Quand les Progressive Web Apps (PWA) ont-elles été annoncées officiellement ?",
            "answers" => ["2013", "2015", "2017", "2019"],
            "correct" => 1
        ],
    ];
    }

    public function getQuestionQCM2() {
        return [
            // Développement web et architecture
            [
                "question" => "Qu'est-ce que le Front-End en développement web ?",
                "answers" => [
                    "La partie serveur gérant la logique métier",
                    "La partie visible d'une application web interagissant avec l'utilisateur",
                    "Un outil pour gérer des bases de données",
                    "Une méthode de conception basée sur la blockchain"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel terme désigne un développeur maîtrisant à la fois le Front-End et le Back-End ?",
                "answers" => [
                    "Responsive Designer",
                    "DevOps Engineer",
                    "Full-Stack Developer",
                    "UX Designer"
                ],
                "correct" => 2
            ],
            [
                "question" => "Qu'est-ce que le Responsive Design ?",
                "answers" => [
                    "Un langage de programmation",
                    "Une approche permettant d'adapter un site web à différentes tailles d'écran",
                    "Un protocole de transfert sécurisé",
                    "Une architecture basée sur des requêtes dynamiques"
                ],
                "correct" => 1
            ],
            [
                "question" => "Dans l'architecture MVC, que représente la Vue ?",
                "answers" => [
                    "La gestion des données et de la logique métier",
                    "L'affichage des données à l'utilisateur",
                    "L'interface entre le modèle et la vue",
                    "La gestion des requêtes HTTP"
                ],
                "correct" => 1
            ],

            // Interconnectivité et APIs
            [
                "question" => "Qu'est-ce qu'une API ?",
                "answers" => [
                    "Un protocole de sécurité",
                    "Une interface permettant à deux applications de communiquer",
                    "Un service cloud de stockage",
                    "Un outil pour concevoir des pages web interactives"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle architecture API est simple et basée sur HTTP ?",
                "answers" => [
                    "GraphQL",
                    "Webhooks",
                    "SOAP",
                    "REST"
                ],
                "correct" => 3
            ],
            [
                "question" => "Qu'est-ce qu'un Webhook ?",
                "answers" => [
                    "Un protocole de transfert sécurisé",
                    "Un mécanisme envoyant des données automatiquement lorsqu'un événement se produit",
                    "Un outil de gestion de bases de données",
                    "Une méthode pour accélérer les recherches dans une base"
                ],
                "correct" => 1
            ],
            [
                "question" => "Qu'est-ce que GraphQL et en quoi se distingue-t-il de REST ?",
                "answers" => [
                    "Un protocole de transfert sécurisé",
                    "Un langage de requêtes pour obtenir exactement les données demandées",
                    "Une base de données non relationnelle",
                    "Un outil pour concevoir des Single Page Applications"
                ],
                "correct" => 1
            ],

            // Applications web modernes
            [
                "question" => "Quelle est une caractéristique clé des Progressive Web Apps (PWA) ?",
                "answers" => [
                    "Requiert un rechargement complet pour chaque page",
                    "Combine le meilleur des sites web et des applications natives",
                    "Utilise exclusivement des bases de données NoSQL",
                    "Fonctionne uniquement hors ligne"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel type d'application fonctionne sur une seule page HTML avec du contenu chargé dynamiquement ?",
                "answers" => [
                    "Single Page Application (SPA)",
                    "Multi-Page Application (MPA)",
                    "API REST",
                    "Cloud Computing"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle est la principale différence entre une MPA et une SPA ?",
                "answers" => [
                    "Une MPA recharge la page entière à chaque requête, tandis qu'une SPA charge dynamiquement le contenu",
                    "Une MPA fonctionne hors ligne, contrairement à une SPA",
                    "Une SPA utilise exclusivement des bases de données NoSQL",
                    "Une MPA est réservée aux applications natives"
                ],
                "correct" => 0
            ],

            // Bases de données
            [
                "question" => "Que signifie CRUD en gestion des bases de données ?",
                "answers" => [
                    "Create, Read, Update, Delete",
                    "Connect, Reset, Update, Display",
                    "Copy, Restore, Upload, Download",
                    "Compute, Render, Update, Deliver"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel type de base de données est optimisé pour des données non structurées ?",
                "answers" => [
                    "Relationnelle",
                    "NoSQL",
                    "Indexée",
                    "Dynamique"
                ],
                "correct" => 1
            ],
            [
                "question" => "Qu'est-ce que l'indexation dans une base de données et pourquoi est-elle importante ?",
                "answers" => [
                    "Une technique pour optimiser les recherches dans une base de données",
                    "Un outil pour convertir des données relationnelles en données non structurées",
                    "Un protocole de sécurité pour bases de données",
                    "Un mécanisme de sauvegarde automatique des bases"
                ],
                "correct" => 0
            ],

            // Optimisation et Performances
            [
                "question" => "Qu'est-ce que le SEO en développement web ?",
                "answers" => [
                    "Un protocole pour sécuriser les données",
                    "Un ensemble de techniques pour améliorer le classement d'un site web dans les moteurs de recherche",
                    "Un outil de développement pour créer des Single Page Applications",
                    "Une méthode pour accélérer les temps de réponse des APIs"
                ],
                "correct" => 1
            ],
            [
                "question" => "Qu'est-ce que le Lazy Loading ?",
                "answers" => [
                    "Une technique pour charger des ressources uniquement lorsque nécessaire",
                    "Une méthode de conception basée sur le cloud",
                    "Un protocole pour sécuriser les transferts de données",
                    "Un processus de création de bases de données NoSQL"
                ],
                "correct" => 0
            ],

            // Culture digitale et tendances
            [
                "question" => "Que signifie Open Source ?",
                "answers" => [
                    "Logiciels accessibles uniquement sur abonnement",
                    "Logiciels dont le code source est accessible et modifiable",
                    "Applications web accessibles uniquement hors ligne",
                    "Bases de données décentralisées"
                ],
                "correct" => 1
            ],
            [
                "question" => "Que désigne le terme IoT (Internet of Things) ?",
                "answers" => [
                    "Un réseau d'objets connectés capables de collecter et échanger des données",
                    "Un outil pour concevoir des Single Page Applications",
                    "Un protocole pour sécuriser les bases de données",
                    "Une méthode de transformation digitale"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que la transformation digitale et quels sont ses principaux objectifs ?",
                "answers" => [
                    "L'adoption de technologies numériques pour améliorer les processus organisationnels",
                    "Une technique de gestion de bases de données",
                    "Un protocole de sécurité pour les applications modernes",
                    "Une méthode de chargement différé des ressources web"
                ],
                "correct" => 0
            ],
            [
                "question" => "Pourquoi le Big Data est-il crucial pour les entreprises modernes ?",
                "answers" => [
                    "Il permet de traiter de grandes quantités de données pour extraire des tendances ou informations stratégiques",
                    "Il est utilisé uniquement pour le stockage des applications cloud",
                    "Il accélère le chargement des ressources web",
                    "Il remplace les bases de données relationnelles dans les applications modernes"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quels sont les avantages du Cloud Computing pour les entreprises ?",
                "answers" => [
                    "Une meilleure flexibilité et réduction des coûts",
                    "La sécurisation des API REST",
                    "Une amélioration des performances des applications natives",
                    "Un protocole pour sécuriser les communications"
                ],
                "correct" => 0
            ],

            // Sécurité web
            [
                "question" => "Que permet le protocole HTTPS ?",
                "answers" => [
                    "Chiffrer les données échangées sur un site web",
                    "Optimiser le contenu d'une application pour les moteurs de recherche",
                    "Accélérer le chargement des ressources d'une page",
                    "Connecter plusieurs bases de données NoSQL"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que le RGPD ?",
                "answers" => [
                    "Un règlement européen sur la gestion et la protection des données personnelles",
                    "Un protocole de sécurité pour les API REST",
                    "Un langage de requêtes pour bases de données relationnelles",
                    "Une méthode de gestion de contenus dynamiques"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que l'attaque XSS (Cross-Site Scripting) et comment peut-on s'en protéger ?",
                "answers" => [
                    "Une vulnérabilité permettant d'injecter du code malveillant ; protégée par la validation des entrées utilisateur",
                    "Une attaque incitant un utilisateur à effectuer une action non souhaitée",
                    "Un protocole pour sécuriser les communications",
                    "Un mécanisme d'optimisation des requêtes HTTP"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que l'attaque CSRF (Cross-Site Request Forgery) et comment peut-on la prévenir ?",
                "answers" => [
                    "Une attaque incitant un utilisateur à effectuer une action non souhaitée ; protégée par des jetons CSRF",
                    "Une vulnérabilité permettant d'injecter du code malveillant",
                    "Une méthode d'optimisation des requêtes API",
                    "Un outil pour concevoir des Single Page Applications"
                ],
                "correct" => 0
            ],

            // Méthodologies de Développement
            [
                "question" => "Quelle est la méthodologie visant à combiner développement et opérations ?",
                "answers" => [
                    "Agile",
                    "DevOps",
                    "UX",
                    "UI"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle discipline se concentre sur l'expérience utilisateur ?",
                "answers" => [
                    "UI (User Interface)",
                    "UX (User Experience)",
                    "SEO (Search Engine Optimization)",
                    "Cloud Computing"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle est la différence entre UX (User Experience) et UI (User Interface) ?",
                "answers" => [
                    "UX concerne l'expérience utilisateur, tandis que UI concerne le design graphique des interfaces",
                    "UX concerne le design des pages, tandis que UI concerne l'optimisation du contenu",
                    "UX est un protocole de communication, tandis que UI est une architecture",
                    "UX est uniquement lié aux performances, tandis que UI est lié au responsive design"
                ],
                "correct" => 0
            ],
            // Nouveaux concepts
            [
                "question" => "Qu'est-ce que le Web3 et en quoi diffère-t-il du Web traditionnel ?",
                "answers" => [
                    "Un web décentralisé basé sur la blockchain",
                    "Un outil pour gérer des bases de données NoSQL",
                    "Une méthode de développement pour Single Page Applications",
                    "Une application native fonctionnant hors ligne"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que la tokenisation et dans quels domaines est-elle utilisée ?",
                "answers" => [
                    "Un processus remplaçant des informations sensibles par des identifiants uniques, souvent utilisé en blockchain",
                    "Un mécanisme de sécurité pour les communications web",
                    "Un outil pour accélérer les recherches dans une base de données",
                    "Une méthode d'optimisation pour les contenus web"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que le Metaverse et quelles technologies le rendent possible ?",
                "answers" => [
                    "Un environnement numérique immersif combinant réalité augmentée et virtuelle",
                    "Un outil de gestion de données basé sur le cloud",
                    "Une méthode de développement pour Progressive Web Apps",
                    "Un langage de requêtes utilisé pour les APIs modernes"
                ],
                "correct" => 0
            ]
        ];
    }
    public function getQuestionQCM3() {
        return [
            // Agile
            [
                "question" => "Quel est l'objectif principal des pratiques Agile ?",
                "answers" => [
                    "Augmenter la vitesse de développement des applications",
                    "Favoriser la collaboration, l'adaptabilité et l'amélioration continue",
                    "Réduire le nombre de bugs en production",
                    "Mettre en place des systèmes de sécurité robustes"
                ],
                "correct" => 1
            ],
            [
                "question" => "Selon le manifeste Agile, quelle est une des priorités principales ?",
                "answers" => [
                    "Minimiser les coûts",
                    "Prioriser la satisfaction client grâce à des livraisons fréquentes",
                    "Automatiser tous les processus de développement",
                    "Éviter tout changement après le démarrage du projet"
                ],
                "correct" => 1
            ],

            // Scrum
            [
                "question" => "Quels sont les rôles principaux dans Scrum ?",
                "answers" => [
                    "Scrum Master, Product Owner, et équipe de développement",
                    "Chef de projet, développeur, et designer",
                    "Product Manager, UX Designer, et client",
                    "Analyste, développeur, et testeur"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce qu'un sprint dans la méthodologie Scrum ?",
                "answers" => [
                    "Un cycle de développement de 1 à 4 semaines",
                    "Une réunion quotidienne de 15 minutes",
                    "Une liste des tâches à accomplir",
                    "Une méthode de déploiement continu"
                ],
                "correct" => 0
            ],

            // Lean et Kanban
            [
                "question" => "Quel est le principal objectif de la méthodologie Lean ?",
                "answers" => [
                    "Éliminer les gaspillages pour maximiser la valeur pour le client",
                    "Améliorer les performances des serveurs",
                    "Automatiser les processus de développement",
                    "Créer des interfaces utilisateur plus intuitives"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce qu'un tableau Kanban ?",
                "answers" => [
                    "Un outil visuel pour gérer les flux de travail",
                    "Un système de tests automatisés",
                    "Une méthodologie pour concevoir des APIs",
                    "Un outil pour mesurer la performance des équipes"
                ],
                "correct" => 0
            ],

            // Git Flow
            [
                "question" => "Quelle branche contient la version stable d'un projet dans Git Flow ?",
                "answers" => [
                    "Feature branch",
                    "Hotfix branch",
                    "Master (ou Main)",
                    "Develop"
                ],
                "correct" => 2
            ],
            [
                "question" => "À quoi servent les feature branches dans Git Flow ?",
                "answers" => [
                    "Corriger les bugs critiques",
                    "Développer de nouvelles fonctionnalités spécifiques",
                    "Tester les versions en production",
                    "Créer des sauvegardes de la branche principale"
                ],
                "correct" => 1
            ],

            // Test-Driven Development (TDD)
            [
                "question" => "Quel est l'ordre des étapes dans le cycle TDD ?",
                "answers" => [
                    "Green, Red, Refactor",
                    "Red, Green, Refactor",
                    "Refactor, Red, Green",
                    "Green, Refactor, Red"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel est l'objectif principal du Test-Driven Development (TDD) ?",
                "answers" => [
                    "Réduire les temps de développement",
                    "Garantir que le code répond aux exigences fonctionnelles",
                    "Améliorer la performance des APIs",
                    "Accélérer les processus de déploiement"
                ],
                "correct" => 1
            ],

            // CI/CD
            [
                "question" => "Quelle est une caractéristique clé de l'intégration continue (CI) ?",
                "answers" => [
                    "Automatiser les tests et les fusions fréquentes dans une branche commune",
                    "Gérer les flux de travail avec un tableau Kanban",
                    "Créer des environnements de test manuels",
                    "Optimiser la performance des serveurs"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quels outils sont couramment utilisés pour CI/CD ?",
                "answers" => [
                    "GitHub Actions, GitLab CI/CD, Jenkins",
                    "Docker, Kubernetes, Terraform",
                    "MySQL, PostgreSQL, MongoDB",
                    "React, Angular, Vue.js"
                ],
                "correct" => 0
            ],

            // Développement Centré sur l’Utilisateur
            [
                "question" => "Quelle est la première étape du Design Thinking ?",
                "answers" => [
                    "Prototypage",
                    "Idéation",
                    "Empathie",
                    "Définition"
                ],
                "correct" => 2
            ],
            [
                "question" => "Qu'est-ce que Lean UX ?",
                "answers" => [
                    "Une combinaison du design UX et des principes Agile",
                    "Une méthode pour développer des APIs REST",
                    "Un outil pour gérer les flux de travail",
                    "Un processus de tests automatisés"
                ],
                "correct" => 0
            ],

            // Méthodologies Modernes
            [
                "question" => "Qu'est-ce que DevOps ?",
                "answers" => [
                    "Une pratique combinant développement et opérations pour réduire le temps entre développement et déploiement",
                    "Une méthode pour sécuriser les applications modernes",
                    "Un langage de programmation pour bases de données",
                    "Un processus de tests basé sur des scénarios"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle est une des caractéristiques principales du BDD (Behavior-Driven Development) ?",
                "answers" => [
                    "Se concentre sur les comportements attendus exprimés sous forme de scénarios",
                    "Automatise les déploiements en production",
                    "Réduit les cycles de développement grâce à des sprints",
                    "Remplace les tests automatisés par des tests manuels"
                ],
                "correct" => 0
            ],
            // Agile
            [
                "question" => "Quelle pratique Agile favorise une livraison fréquente de valeur au client ?",
                "answers" => [
                    "Intégration continue",
                    "Livraison itérative",
                    "Kanban",
                    "Test-Driven Development"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle est l'une des valeurs fondamentales d'Agile selon son manifeste ?",
                "answers" => [
                    "Les processus plutôt que les interactions humaines",
                    "Les plans stricts plutôt que l'adaptabilité",
                    "Les individus et leurs interactions plutôt que les processus et outils",
                    "Le respect du plan initial plutôt que l'amélioration continue"
                ],
                "correct" => 2
            ],

            // Scrum
            [
                "question" => "Quel est l'objectif principal des rétrospectives Scrum ?",
                "answers" => [
                    "Définir les tâches pour le prochain sprint",
                    "Examiner et améliorer les processus d'équipe après chaque sprint",
                    "Valider les livrables avant livraison",
                    "Corriger les bugs détectés en production"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle réunion Scrum est courte et quotidienne ?",
                "answers" => [
                    "Sprint Planning",
                    "Daily Stand-Up",
                    "Sprint Review",
                    "Rétrospective"
                ],
                "correct" => 1
            ],

            // Lean et Kanban
            [
                "question" => "Quel concept de Lean est utilisé pour limiter le nombre de tâches en cours ?",
                "answers" => [
                    "Pull System",
                    "Work In Progress (WIP)",
                    "Tableau Kanban",
                    "Amélioration continue"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle est une caractéristique clé des flux tirés (Pull System) dans Lean ?",
                "answers" => [
                    "Les tâches sont attribuées automatiquement aux membres de l'équipe",
                    "Les tâches sont tirées par les besoins du client ou de l'équipe",
                    "Toutes les tâches sont planifiées à l'avance",
                    "Les flux tirés sont utilisés uniquement pour les projets logiciels"
                ],
                "correct" => 1
            ],

            // TDD et BDD
            [
                "question" => "Comment le Behavior-Driven Development (BDD) se distingue-t-il du Test-Driven Development (TDD) ?",
                "answers" => [
                    "BDD se concentre sur les comportements attendus, tandis que TDD se concentre sur les fonctionnalités",
                    "BDD élimine le besoin de tests automatisés",
                    "TDD se base sur des scénarios en langage naturel",
                    "BDD est exclusivement utilisé pour les applications web"
                ],
                "correct" => 0
            ],
            [
                "question" => "Dans TDD, quelle étape consiste à écrire le code minimal pour réussir un test ?",
                "answers" => [
                    "Red",
                    "Green",
                    "Refactor",
                    "Debugging"
                ],
                "correct" => 1
            ],

            // CI/CD et DevOps
            [
                "question" => "Quel concept clé de DevOps repose sur la gestion des infrastructures comme du code ?",
                "answers" => [
                    "Monitoring en continu",
                    "Infrastructure as Code (IaC)",
                    "Intégration continue",
                    "Déploiement progressif"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quels sont les avantages du CI/CD ?",
                "answers" => [
                    "Amélioration de la sécurité et réduction des erreurs manuelles",
                    "Réduction du nombre de tests automatisés",
                    "Optimisation des performances des API",
                    "Planification stricte et détaillée de chaque étape"
                ],
                "correct" => 0
            ]
        ];
    }
    public function getQuestionQCM4() {
        return [
            // HTML5
            [
                "question" => "Quelle balise HTML5 représente un contenu autonome ?",
                "answers" => [
                    htmlspecialchars("<section>", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("<article>", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("<header>", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("<nav>", ENT_QUOTES, 'UTF-8')
                ],
                "correct" => 1
            ],
            [
                "question" => "À quoi sert l'API de géolocalisation en HTML5 ?",
                "answers" => [
                    "Ajouter des animations interactives",
                    "Afficher des graphiques 2D",
                    "Obtenir la position géographique de l'utilisateur",
                    "Stocker des données utilisateur localement"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quelle est la fonction principale des balises <header> et <footer> en HTML5 ?",
                "answers" => [
                    "Créer une section thématique",
                    "Structurer le contenu et améliorer l'accessibilité",
                    "Afficher des données utilisateur",
                    "Gérer les animations des pages"
                ],
                "correct" => 1
            ],

            // CSS3
            [
                "question" => "Quel outil CSS permet de créer des mises en page flexibles ?",
                "answers" => [
                    "CSS Grid",
                    "Flexbox",
                    "Media Queries",
                    "Animations @keyframes"
                ],
                "correct" => 1
            ],
            [
                "question" => "Qu'est-ce qu'une media query en CSS ?",
                "answers" => [
                    "Un moyen d'ajouter des animations dynamiques",
                    "Une technique pour rendre le contenu adaptatif selon la taille d'écran",
                    "Une méthode de structuration des éléments",
                    "Un outil pour gérer les transitions de style"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel système CSS permet d'organiser les éléments sur des lignes et colonnes ?",
                "answers" => [
                    "Flexbox",
                    "CSS Grid",
                    "Media Queries",
                    "Transitions CSS"
                ],
                "correct" => 1
            ],

            // JavaScript ES6+
            [
                "question" => "Quelle déclaration JavaScript a un scope de bloc et ne peut pas être redéclarée ?",
                "answers" => [
                    "Var",
                    "Let",
                    "Const",
                    "Scope"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quelle syntaxe JavaScript est utilisée pour écrire des fonctions anonymes plus concises ?",
                "answers" => [
                    "Déclaration classique",
                    "Fonctions fléchées (=>)",
                    "Constructeurs",
                    "Fonctions imbriquées"
                ],
                "correct" => 1
            ],
            [
                "question" => "À quoi sert async/await en JavaScript ?",
                "answers" => [
                    "Créer des animations",
                    "Gérer facilement des opérations asynchrones",
                    "Déclarer des variables globales",
                    "Utiliser des structures conditionnelles"
                ],
                "correct" => 1
            ],

            // Frameworks et bibliothèques
            [
                "question" => "Quel framework CSS rapide propose des grilles et des composants préconstruits ?",
                "answers" => [
                    "Tailwind CSS",
                    "Bootstrap",
                    "CSS Grid",
                    "React.js"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel framework JavaScript utilise un DOM virtuel pour optimiser les performances ?",
                "answers" => [
                    "Vue.js",
                    "React.js",
                    "Angular",
                    "Svelte"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel framework CSS utilitaire facilite la création de designs personnalisés ?",
                "answers" => [
                    "Bootstrap",
                    "CSS Grid",
                    "Tailwind CSS",
                    "Flexbox"
                ],
                "correct" => 2
            ],

            // Back-End
            [
                "question" => "Quel framework PHP est connu pour son élégance et son ORM Eloquent ?",
                "answers" => [
                    "Symfony",
                    "Laravel",
                    "WordPress",
                    "Zend Framework"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel framework minimaliste Node.js est utilisé pour créer des APIs REST ?",
                "answers" => [
                    "Socket.IO",
                    "Express.js",
                    "Fastify",
                    "Koa.js"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel langage côté serveur alimente WordPress ?",
                "answers" => [
                    "Java",
                    "Python",
                    "PHP",
                    "Node.js"
                ],
                "correct" => 2
            ],

            // Bases de données
            [
                "question" => "Quelle base de données est orientée documents et idéale pour des données non structurées ?",
                "answers" => [
                    "MySQL",
                    "PostgreSQL",
                    "MongoDB",
                    "SQLite"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quelle base de données relationnelle est populaire pour les applications web ?",
                "answers" => [
                    "PostgreSQL",
                    "MongoDB",
                    "Cassandra",
                    "Redis"
                ],
                "correct" => 0
            ],

            // Outils DevOps
            [
                "question" => "Quelle commande Git est utilisée pour fusionner deux branches ?",
                "answers" => [
                    "git push",
                    "git pull",
                    "git merge",
                    "git rebase"
                ],
                "correct" => 2
            ],
            [
                "question" => "Qu'est-ce qu'un conteneur Docker ?",
                "answers" => [
                    "Un outil pour surveiller les performances des serveurs",
                    "Une instance exécutable d'une image Docker",
                    "Un framework pour le développement collaboratif",
                    "Un processus pour sauvegarder des bases de données"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel outil CI/CD est intégré à GitHub pour automatiser les workflows ?",
                "answers" => [
                    "GitHub Actions",
                    "Jenkins",
                    "CircleCI",
                    "Travis CI"
                ],
                "correct" => 0
            ],
            [
                "question" => "Qu'est-ce que Docker Compose ?",
                "answers" => [
                    "Un outil pour organiser plusieurs conteneurs",
                    "Un framework CSS pour créer des grilles",
                    "Une commande Git pour fusionner des branches",
                    "Un outil pour gérer les bases de données NoSQL"
                ],
                "correct" => 0
            ],
             // HTML5
            [
                "question" => "Quelle balise HTML5 délimite une section thématique d'un document ?",
                "answers" => [
                    htmlspecialchars("<section>", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("<article>", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("<header>", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("<footer>", ENT_QUOTES, 'UTF-8')
                ],
                "correct" => 0
            ],
            [
                "question" => "À quoi sert la balise <nav> en HTML5 ?",
                "answers" => [
                    "Afficher des graphiques 2D",
                    "Définir une zone de navigation",
                    "Structurer les données d'un tableau",
                    "Créer un espace pour les animations"
                ],
                "correct" => 1
            ],

            // CSS3
            [
                "question" => "Quel outil CSS est utilisé pour créer des animations ?",
                "answers" => [
                    "Flexbox",
                    "CSS Grid",
                    "@keyframes",
                    "Media Queries"
                ],
                "correct" => 2
            ],

            // JavaScript ES6+
            [
                "question" => "Quelle fonctionnalité JavaScript ES6 permet d'extraire facilement des données d'un tableau ou d'un objet ?",
                "answers" => [
                    "Déstructuration",
                    "Fonctions fléchées",
                    "Async/await",
                    "Classes"
                ],
                "correct" => 0
            ],

            // Frameworks et bibliothèques
            [
                "question" => "Quel framework progressif est conçu pour des interfaces utilisateur légères et modulaires ?",
                "answers" => [
                    "React.js",
                    "Svelte",
                    "Vue.js",
                    "Angular"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quel framework compile les composants en JavaScript pur pour de meilleures performances ?",
                "answers" => [
                    "Svelte",
                    "React.js",
                    "Vue.js",
                    "Angular"
                ],
                "correct" => 0
            ],

            // Back-End
            [
                "question" => "Quel framework PHP est modulaire et adapté aux projets complexes ?",
                "answers" => [
                    "Laravel",
                    "Symfony",
                    "WordPress",
                    "Zend Framework"
                ],
                "correct" => 1
            ],

            // Bases de données
            [
                "question" => "Quelle base de données relationnelle prend en charge les types JSON et des requêtes complexes ?",
                "answers" => [
                    "MySQL",
                    "PostgreSQL",
                    "MongoDB",
                    "SQLite"
                ],
                "correct" => 1
            ],

            // Outils DevOps
            [
                "question" => "Quel outil CI/CD est une plateforme flexible intégrée à GitLab ?",
                "answers" => [
                    "GitHub Actions",
                    "Jenkins",
                    "GitLab CI/CD",
                    "CircleCI"
                ],
                "correct" => 2
            ]
        ];
    }
    public function getQuestionQCM5() {
        return [
            // Sécurité Web : XSS
            [
                "question" => "Qu'est-ce qu'une attaque XSS (Cross-Site Scripting) ?",
                "answers" => [
                    "Une attaque où un code malveillant est injecté dans une page web",
                    "Une attaque qui force un utilisateur à exécuter une action non autorisée",
                    "Un type de phishing basé sur des emails",
                    "Une faille dans le protocole HTTPS"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle fonction PHP est utilisée pour échapper les entrées utilisateur afin de prévenir les attaques XSS ?",
                "answers" => [
                    "htmlspecialchars()",
                    "mysqli_escape()",
                    "addslashes()",
                    "strip_tags()"
                ],
                "correct" => 0
            ],
            [
                "question" => "Que fait une Content Security Policy (CSP) ?",
                "answers" => [
                    "Elle redirige le trafic HTTP vers HTTPS",
                    "Elle définit des politiques pour limiter l'exécution de scripts",
                    "Elle chiffre les mots de passe dans la base de données",
                    "Elle supprime les entrées utilisateur non valides"
                ],
                "correct" => 1
            ],

            // Sécurité Web : CSRF
            [
                "question" => "Qu'est-ce qu'une attaque CSRF (Cross-Site Request Forgery) ?",
                "answers" => [
                    "Une attaque qui injecte du code malveillant dans une page web",
                    "Une attaque qui pousse un utilisateur authentifié à exécuter une action non autorisée",
                    "Une faille dans les certificats HTTPS",
                    "Un type de spam basé sur des formulaires web"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle méthode est recommandée pour prévenir les attaques CSRF ?",
                "answers" => [
                    "Échapper les entrées utilisateur",
                    "Utiliser des jetons CSRF pour vérifier l'origine des requêtes",
                    "Compresser les ressources comme les images et scripts",
                    "Utiliser des cookies pour stocker les données utilisateur"
                ],
                "correct" => 1
            ],

            // Sécurité Web : HTTPS
            [
                "question" => "Quel est l'objectif principal du protocole HTTPS ?",
                "answers" => [
                    "Optimiser la vitesse de chargement des pages",
                    "Chiffrer les échanges entre le client et le serveur",
                    "Empêcher les attaques XSS",
                    "Stocker les données utilisateur dans le cache"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel certificat est nécessaire pour mettre en place HTTPS ?",
                "answers" => [
                    "Certificat DNS",
                    "Certificat SSL/TLS",
                    "Certificat JSON",
                    "Certificat d'accès ARIA"
                ],
                "correct" => 1
            ],

            // Sécurité Web : Hash des mots de passe
            [
                "question" => "Quel algorithme est recommandé pour le hash des mots de passe ?",
                "answers" => [
                    "SHA1",
                    "bcrypt",
                    "MD5",
                    "CRC32"
                ],
                "correct" => 1
            ],
            [
                "question" => "Pourquoi faut-il utiliser un salt lors du hash des mots de passe ?",
                "answers" => [
                    "Pour accélérer les opérations de hash",
                    "Pour éviter les attaques par table de correspondance (rainbow tables)",
                    "Pour stocker les mots de passe de manière lisible",
                    "Pour améliorer la vitesse de traitement des requêtes"
                ],
                "correct" => 1
            ],

            // Accessibilité
            [
                "question" => "Quel principe est au cœur des standards WCAG ?",
                "answers" => [
                    "Créer du contenu uniquement pour les utilisateurs experts",
                    "Rendre le contenu perceptible, utilisable, compréhensible et robuste",
                    "Optimiser les performances des sites web",
                    "Assurer la compatibilité avec tous les navigateurs modernes"
                ],
                "correct" => 1
            ],
            [
                "question" => "Que fait l'attribut alt dans les balises <img> ?",
                "answers" => [
                    "Ajoute un texte alternatif pour les lecteurs d'écran",
                    "Optimise la vitesse de chargement des images",
                    "Spécifie la source des images",
                    "Active le lazy loading pour les images"
                ],
                "correct" => 0
            ],

            // Performances
            [
                "question" => "Quel format est recommandé pour des images optimisées ?",
                "answers" => [
                    "JPEG",
                    "PNG",
                    "WebP",
                    "BMP"
                ],
                "correct" => 2
            ],
            [
                "question" => "Qu'est-ce que le lazy loading ?",
                "answers" => [
                    "Un protocole pour sécuriser les connexions",
                    "Un système pour charger les ressources uniquement lorsqu'elles sont visibles",
                    "Une technique pour réduire les tailles de fichiers",
                    "Un algorithme pour accélérer les hash de mots de passe"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle directive HTTP permet d'activer la mise en cache du navigateur ?",
                "answers" => [
                    "Content-Security-Policy",
                    "Cache-Control",
                    "Strict-Transport-Security",
                    "X-Frame-Options"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel outil est utilisé pour analyser les performances des sites web ?",
                "answers" => [
                    "PageSpeed Insights",
                    "ARIA Validator",
                    "NVDA",
                    "Let’s Encrypt"
                ],
                "correct" => 0
            ],
            // Sécurité Web
            [
                "question" => "Quel est un avantage principal de l'utilisation de HTTPS ?",
                "answers" => [
                    "Accélérer le chargement des pages",
                    "Prévenir les attaques de type Man-In-The-Middle (MITM)",
                    "Rendre les pages web accessibles aux lecteurs d'écran",
                    "Éviter les attaques XSS"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel outil peut être utilisé pour obtenir un certificat SSL/TLS gratuitement ?",
                "answers" => [
                    "Cloudflare",
                    "Let’s Encrypt",
                    "Google PageSpeed Insights",
                    "Lighthouse"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel est l'objectif principal des jetons CSRF ?",
                "answers" => [
                    "Empêcher l'injection de scripts malveillants",
                    "Vérifier l'origine des requêtes sensibles",
                    "Minimiser la taille des ressources",
                    "Chiffrer les mots de passe"
                ],
                "correct" => 1
            ],

            // Hash des mots de passe
            [
                "question" => "Pourquoi Argon2 est-il recommandé pour le hash des mots de passe ?",
                "answers" => [
                    "Il est plus rapide que bcrypt",
                    "Il est conçu pour résister aux attaques par GPU",
                    "Il stocke les mots de passe en clair pour faciliter leur récupération",
                    "Il est utilisé par défaut dans les navigateurs modernes"
                ],
                "correct" => 1
            ],

            // Accessibilité
            [
                "question" => "Que signifie l'acronyme a11y pour l'accessibilité ?",
                "answers" => [
                    "Automated Web Testing",
                    "Accessibility (11 lettres entre a et y)",
                    "Advanced User Interface",
                    "Application Performance Insights"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel outil est utilisé pour détecter les problèmes d'accessibilité sur une page web ?",
                "answers" => [
                    "Lighthouse",
                    "NVDA",
                    "ImageOptim",
                    "Cloudflare"
                ],
                "correct" => 0
            ],

            // Performances
            [
                "question" => "Quelle technique améliore les performances en chargeant les ressources avant qu'elles ne soient nécessaires ?",
                "answers" => [
                    "Lazy Loading",
                    "Caching",
                    "Preloading",
                    "Hashing"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quel format de fichier est souvent utilisé pour minimiser la taille des polices personnalisées ?",
                "answers" => [
                    "WOFF2",
                    "TTF",
                    "OTF",
                    "EOT"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel attribut permet d'implémenter le lazy loading pour les images ?",
                "answers" => [
                    "alt",
                    "src",
                    "loading",
                    "defer"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quel outil analyse les performances des pages et fournit des recommandations ?",
                "answers" => [
                    "PageSpeed Insights",
                    "Docker",
                    "Axios",
                    "ARIA"
                ],
                "correct" => 0
            ],
             // Visual Studio Code
            [
                "question" => "Quelle extension VS Code est utilisée pour corriger les erreurs de code JavaScript ?",
                "answers" => [
                    "Prettier",
                    "Live Server",
                    "ESLint",
                    "Bracket Pair Colorizer"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quel raccourci permet de déplacer une ligne ou un bloc de code dans VS Code ?",
                "answers" => [
                    "Ctrl + B",
                    "Alt + flèche haut/bas",
                    "Shift + Alt + F",
                    "Ctrl + Shift + P"
                ],
                "correct" => 1
            ],
            [
                "question" => "Comment prévisualiser un projet en temps réel avec VS Code ?",
                "answers" => [
                    "Utiliser l'extension Live Server",
                    "Activer le terminal intégré",
                    "Utiliser GitLens",
                    "Configurer le fichier .vscode/settings.json"
                ],
                "correct" => 0
            ],

            // Outils de design et prototypage
            [
                "question" => "Quelle est une bonne pratique dans Figma pour harmoniser les designs ?",
                "answers" => [
                    "Utiliser des composants partagés",
                    "Créer des maquettes sur des calques séparés",
                    "Activer le mode collaboratif",
                    "Exporter les designs en CSS"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle fonctionnalité Figma permet de gérer des interfaces adaptatives ?",
                "answers" => [
                    "Auto Layout",
                    "Wireframes",
                    "Bibliothèques partagées",
                    "Grilles"
                ],
                "correct" => 0
            ],

            // Test des API
            [
                "question" => "Comment automatiser les tests dans Postman ?",
                "answers" => [
                    "Utiliser des scripts pré/post-requêtes",
                    "Exporter les collections sous forme de JSON",
                    "Créer des bibliothèques partagées",
                    "Ajouter des environnements dynamiques"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel type de requête est utilisé pour récupérer des données via une API ?",
                "answers" => [
                    "POST",
                    "PUT",
                    "DELETE",
                    "GET"
                ],
                "correct" => 3
            ],

            // Débogage et analyse
            [
                "question" => "Quel onglet de Chrome DevTools est utilisé pour déboguer JavaScript ?",
                "answers" => [
                    "Sources",
                    "Network",
                    "Performance",
                    "Elements"
                ],
                "correct" => 0
            ],
            [
                "question" => "Que permet de faire le mode 'Responsive Design' dans Chrome DevTools ?",
                "answers" => [
                    "Déboguer les erreurs CSS",
                    "Analyser les performances des scripts",
                    "Simuler l'affichage sur des appareils mobiles",
                    "Inspecter les requêtes HTTP"
                ],
                "correct" => 2
            ],

            // Gestion de projets et collaboration
            [
                "question" => "Quelle est une bonne pratique avec Trello pour la gestion des tâches ?",
                "answers" => [
                    "Utiliser des colonnes pour organiser les étapes ('À faire', 'En cours', 'Terminé')",
                    "Créer un tableau par membre de l'équipe",
                    "Ne pas ajouter de description dans les cartes",
                    "Attribuer toutes les tâches à un seul utilisateur"
                ],
                "correct" => 0
            ],

            // Analyse des performances
            [
                "question" => "Quel outil mesure les performances d'un site et fournit des scores d'optimisation ?",
                "answers" => [
                    "Lighthouse",
                    "Postman",
                    "Webpack",
                    "GitHub Actions"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel outil est recommandé pour réduire la taille des images sans perte de qualité ?",
                "answers" => [
                    "TinyPNG",
                    "Postman",
                    "GitLens",
                    "Webpack"
                ],
                "correct" => 0
            ]
        ];
    }
    public function getQuestionQCM6() {
        return [
            // Visual Studio Code
            [
                "question" => "Quelle extension VS Code permet un formatage automatique du code ?",
                "answers" => [
                    "GitLens",
                    "Prettier",
                    "ESLint",
                    "Live Server"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle fonctionnalité VS Code permet de voir l'historique des fichiers avec Git ?",
                "answers" => [
                    "GitLens",
                    "Bracket Pair Colorizer",
                    "Live Server",
                    "Prettier"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel raccourci VS Code permet de commenter ou décommenter une ligne ou une sélection ?",
                "answers" => [
                    "Ctrl + P",
                    "Ctrl + /",
                    "Shift + Alt + F",
                    "Ctrl + D"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle commande ouvre rapidement un fichier par son nom dans VS Code ?",
                "answers" => [
                    "Ctrl + P",
                    "Ctrl + B",
                    "Ctrl + Shift + P",
                    "Ctrl + /"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel fichier dans VS Code est utilisé pour des configurations spécifiques au projet ?",
                "answers" => [
                    ".vscode/settings.json",
                    "package.json",
                    "config.json",
                    ".env"
                ],
                "correct" => 0
            ],

            // Outils de design et prototypage
            [
                "question" => "Quel outil est utilisé pour créer des wireframes et prototypes interactifs ?",
                "answers" => [
                    "Figma",
                    "Postman",
                    "Trello",
                    "PhpStorm"
                ],
                "correct" => 0
            ],
            [
                "question" => "Dans Figma, quelle fonctionnalité est utilisée pour créer des interfaces adaptatives ?",
                "answers" => [
                    "Auto Layout",
                    "Wireframe",
                    "Grilles et guides",
                    "Composants partagés"
                ],
                "correct" => 0
            ],

            // Test des API
            [
                "question" => "Quel outil est utilisé pour tester des requêtes HTTP et des API REST ?",
                "answers" => [
                    "Postman",
                    "Lighthouse",
                    "Trello",
                    "WebStorm"
                ],
                "correct" => 0
            ],
            [
                "question" => "Dans Postman, quelle fonctionnalité permet d'automatiser les tests avec des scripts ?",
                "answers" => [
                    "Tests dynamiques",
                    "Scripts pré/post-requêtes",
                    "Collections d'API",
                    "Environnements dynamiques"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle pratique est recommandée pour gérer les clés API dynamiques dans Postman ?",
                "answers" => [
                    "Utiliser les environnements",
                    "Créer un fichier JSON externe",
                    "Configurer des sessions de cookies",
                    "Activer les tokens OAuth"
                ],
                "correct" => 0
            ],

            // Débogage et analyse
            [
                "question" => "Quel outil intégré au navigateur Chrome permet d'inspecter le DOM en direct ?",
                "answers" => [
                    "Chrome DevTools",
                    "GitLens",
                    "VS Code Terminal",
                    "WebStorm Debugger"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel onglet de Chrome DevTools est utilisé pour analyser les performances d'une page web ?",
                "answers" => [
                    "Sources",
                    "Network",
                    "Performance",
                    "Console"
                ],
                "correct" => 2
            ],
            [
                "question" => "Quelle technique peut être utilisée avec DevTools pour déboguer du code minifié ?",
                "answers" => [
                    "Breakpoints",
                    "Source maps",
                    "Lazy loading",
                    "Inspecter les requêtes"
                ],
                "correct" => 1
            ],

            // Intelligence artificielle
            [
                "question" => "Quel outil utilise l'IA pour suggérer du code directement dans votre éditeur ?",
                "answers" => [
                    "GitHub Copilot",
                    "ChatGPT",
                    "DeepCode",
                    "PhpStorm"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel outil peut être utilisé pour détecter les failles de sécurité dans le code avec l'IA ?",
                "answers" => [
                    "DeepCode",
                    "Selenium",
                    "WebStorm",
                    "GitHub Actions"
                ],
                "correct" => 0
            ],

            // Gestion de projets et collaboration
            [
                "question" => "Quel outil est souvent utilisé pour organiser les tâches avec des tableaux Kanban ?",
                "answers" => [
                    "Trello",
                    "Jira",
                    "Slack",
                    "WebStorm"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel outil de gestion de projets est particulièrement adapté à la méthodologie Agile ?",
                "answers" => [
                    "Trello",
                    "Jira",
                    "Figma",
                    "Postman"
                ],
                "correct" => 1
            ],

            // Analyse des performances
            [
                "question" => "Quel outil intégré à Chrome mesure l'accessibilité, le SEO et les performances ?",
                "answers" => [
                    "Lighthouse",
                    "PageSpeed Insights",
                    "GTmetrix",
                    "WebPageTest"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel outil mesure la vitesse d'un site et fournit des recommandations d'optimisation ?",
                "answers" => [
                    "GTmetrix",
                    "Selenium",
                    "Postman",
                    "WebStorm"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel framework est utilisé pour automatiser les tests de navigateurs ?",
                "answers" => [
                    "Selenium",
                    "WebStorm",
                    "PhpStorm",
                    "DeepCode"
                ],
                "correct" => 0
            ]
        ];
    }
    public function getQuestionQCM7() {
        return [
            // Principes fondamentaux
            [
                "question" => "Que signifie le principe KISS en développement ?",
                "answers" => [
                    "Keep It Simple, Stupid",
                    "Keep It Smart and Secure",
                    "Keep It Structured and Simple",
                    "Keep It Stable and Secure"
                ],
                "correct" => 0
            ],
            [
                "question" => "Que recommande le principe DRY (Don't Repeat Yourself) ?",
                "answers" => [
                    "Éviter les dépendances dans le code",
                    "Éviter les redondances en réutilisant des fonctions ou modules",
                    "Écrire du code en une seule ligne",
                    "Documenter toutes les fonctions dans une classe"
                ],
                "correct" => 1
            ],
            [
                "question" => "Qu'est-ce que YAGNI (You Aren't Gonna Need It) conseille ?",
                "answers" => [
                    "Ne pas écrire de fonctionnalités tant qu'elles ne sont pas nécessaires",
                    "Optimiser le code dès le début du projet",
                    "Anticiper les besoins futurs dans le développement",
                    "Utiliser des frameworks pour éviter le code inutile"
                ],
                "correct" => 0
            ],

            // Méthodologies et modèles
            [
                "question" => "Que signifie le S dans les principes SOLID ?",
                "answers" => [
                    "Single Responsibility Principle",
                    "Scalable Code Principle",
                    "Structured Object Principle",
                    "Secure Implementation Principle"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel est l'objectif du principe Open/Closed (O dans SOLID) ?",
                "answers" => [
                    "Les modules doivent être ouverts aux modifications directes",
                    "Les modules doivent être fermés à l'extension",
                    "Les modules doivent être ouverts à l'extension mais fermés à la modification",
                    "Les modules doivent être fermés aux dépendances externes"
                ],
                "correct" => 2
            ],
            [
                "question" => "Dans le modèle MVC, quel composant gère la logique métier ?",
                "answers" => [
                    "Model",
                    "View",
                    "Controller",
                    "Service"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle méthodologie est basée sur des sprints et des itérations courtes ?",
                "answers" => [
                    "Kanban",
                    "Scrum",
                    "MERISE",
                    "TDD"
                ],
                "correct" => 1
            ],

            // Documentation et clarté
            [
                "question" => "Quel outil peut être utilisé pour documenter une API REST ?",
                "answers" => [
                    "Swagger",
                    "Webpack",
                    "Cucumber",
                    "GitHub Actions"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle est une bonne pratique pour la documentation de code ?",
                "answers" => [
                    "Ajouter des commentaires sur chaque ligne de code",
                    "Expliquer l'intention derrière le code avec des commentaires",
                    "Éviter les commentaires dans le code",
                    "Utiliser uniquement des diagrammes UML"
                ],
                "correct" => 1
            ],

            // Gestion de projet et collaboration
            [
                "question" => "Quel type de branche Git est utilisé pour corriger un bug critique ?",
                "answers" => [
                    "feature/",
                    "hotfix/",
                    "develop/",
                    "main/"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quelle méthodologie utilise des colonnes comme 'À faire', 'En cours', 'Terminé' ?",
                "answers" => [
                    "Scrum",
                    "Kanban",
                    "TDD",
                    "CI/CD"
                ],
                "correct" => 1
            ],

            // Conception et sécurité
            [
                "question" => "Quelle unité est recommandée pour un design responsive ?",
                "answers" => [
                    "px",
                    "em",
                    "cm",
                    "dpi"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel algorithme est recommandé pour chiffrer les mots de passe ?",
                "answers" => [
                    "SHA1",
                    "bcrypt",
                    "MD5",
                    "AES"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel type d'attaque est prévenu par la validation des entrées utilisateur ?",
                "answers" => [
                    "XSS et SQL Injection",
                    "Man-In-The-Middle",
                    "DDoS",
                    "Phishing"
                ],
                "correct" => 0
            ],

            // Tests et maintenance
            [
                "question" => "Quel est l'objectif de TDD (Test-Driven Development) ?",
                "answers" => [
                    "Écrire du code avant d'exécuter les tests",
                    "Écrire les tests avant d'implémenter les fonctionnalités",
                    "Exécuter des tests après le déploiement",
                    "Tester uniquement les fonctions critiques"
                ],
                "correct" => 1
            ],
            [
                "question" => "Dans le cycle TDD, que signifie l'étape Green ?",
                "answers" => [
                    "Améliorer le code existant",
                    "Écrire un test qui échoue",
                    "Faire passer le test avec le minimum de code nécessaire",
                    "Écrire les spécifications"
                ],
                "correct" => 2
            ],

            // Intégration et automatisation
            [
                "question" => "Quel outil est utilisé pour configurer une intégration continue (CI) ?",
                "answers" => [
                    "GitHub Actions",
                    "Cucumber",
                    "Swagger",
                    "Webpack"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quel outil permet de compresser et optimiser les ressources front-end ?",
                "answers" => [
                    "Webpack",
                    "Postman",
                    "Docker",
                    "Jenkins"
                ],
                "correct" => 0
            ],
            // Principes fondamentaux
            [
                "question" => "Pourquoi le principe DRY est-il important ?",
                "answers" => [
                    "Il réduit la quantité de code dupliqué",
                    "Il facilite l'ajout de nouvelles fonctionnalités",
                    "Il empêche les attaques XSS",
                    "Il optimise les performances de l'application"
                ],
                "correct" => 0
            ],
            [
                "question" => "Que signifie 'Don't Repeat Yourself' ?",
                "answers" => [
                    "Ne pas répéter les données",
                    "Ne pas réutiliser les ressources inutiles",
                    "Éviter les redondances en centralisant les fonctionnalités",
                    "Créer du code modulaire et extensible"
                ],
                "correct" => 2
            ],

            // Méthodologies et modèles
            [
                "question" => "Dans le principe Liskov Substitution (L dans SOLID), que doit respecter une sous-classe ?",
                "answers" => [
                    "Les dépendances externes",
                    "La possibilité de remplacer la classe parente sans problème",
                    "Les propriétés privées de la classe parente",
                    "Le découplage total des modules"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel est un avantage principal du modèle MVC ?",
                "answers" => [
                    "Une meilleure séparation des responsabilités",
                    "Une réduction des coûts de maintenance",
                    "Un accès rapide aux bases de données",
                    "Une sécurité accrue des mots de passe"
                ],
                "correct" => 0
            ],

            // Documentation et clarté
            [
                "question" => "Que signifie une documentation 'KISS' ?",
                "answers" => [
                    "Utiliser uniquement des diagrammes UML",
                    "Créer une documentation concise et simple",
                    "Éviter d'ajouter des commentaires dans le code",
                    "Partager uniquement des manuels PDF longs"
                ],
                "correct" => 1
            ],
            [
                "question" => "Quel est l'objectif principal d'un commentaire dans le code ?",
                "answers" => [
                    "Expliquer les intentions derrière le code",
                    "Améliorer les performances du code",
                    "Réduire la quantité de code",
                    "Prévenir les erreurs de syntaxe"
                ],
                "correct" => 0
            ],

            // Gestion de projet et collaboration
            [
                "question" => "Quelle branche Git est utilisée pour développer des fonctionnalités spécifiques ?",
                "answers" => [
                    "feature/",
                    "develop/",
                    "main/",
                    "hotfix/"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle méthode Agile utilise des tableaux Kanban pour la gestion visuelle des tâches ?",
                "answers" => [
                    "Scrum",
                    "TDD",
                    "Kanban",
                    "CI/CD"
                ],
                "correct" => 2
            ],

            // Conception et sécurité
            [
                "question" => "Quelle pratique est recommandée pour éviter les attaques SQL Injection ?",
                "answers" => [
                    "Utiliser des requêtes préparées avec des paramètres",
                    "Chiffrer les mots de passe",
                    "Activer le lazy loading",
                    "Compresser les fichiers CSS et JavaScript"
                ],
                "correct" => 0
            ],
            [
                "question" => "Quelle unité relative est souvent utilisée pour la taille des polices en responsive design ?",
                "answers" => [
                    "px",
                    "em",
                    "cm",
                    "dpi"
                ],
                "correct" => 1
            ],

            // Tests et maintenance
            [
                "question" => "Quel outil permet d'écrire des scénarios pour BDD (Behavior-Driven Development) ?",
                "answers" => [
                    "Swagger",
                    "Cucumber",
                    "Postman",
                    "Jenkins"
                ],
                "correct" => 1
            ],
            [
                "question" => "Dans le cycle TDD, que signifie l'étape Refactor ?",
                "answers" => [
                    "Écrire un test qui échoue",
                    "Écrire le minimum de code pour que le test réussisse",
                    "Améliorer le code tout en s'assurant que les tests passent",
                    "Exécuter les tests finaux"
                ],
                "correct" => 2
            ]
        ];
    }


    
}
