/**
 * Configuration for the Portfolio OS
 */
const CONFIG = {
  // User information
  user: {
    name: "Abdurahman USDI",
    title: "Développeur Web - PHP - Full Stack",
    avatar: "../../public/avatar.png",
    email: "abdu.usdi@gmail.com",
    phone: "+33 6 66 78 93 73",
    github: "https://github.com/AbduUSDI",
    linkedin: "https://www.linkedin.com/in/abdu-usdi-553877268/",
  },

  // About information
  about: {
    bio: "Développeur Web passionné avec une expertise en PHP, JavaScript, HTML, et CSS. Fort de plusieurs années d'expérience en gestion d'équipes et de travail intensif. Débutant en développement web complet, cependant, je suis déterminé, persévérant et orienté résultat.",
    skills: [
      "HTML5",
      "CSS3",
      "JavaScript",
      "PHP",
      "MySQL",
      "Git",
      "SOLID",
      "Agile & Scrum",
      "React",
      "Vue.js",
      "Bootstrap",
      "Laravel",
      "MVC",
    ],
    experience: [
      {
        title: "Assistant responsable compagnie aérienne - Traffic Assistant",
        company: "EVA AIR - Aéroport de CDG",
        period: "2020 - Présent",
        description:
          "Utilisation et gestion d'un système de facturation (ACCESS). Manipulation de données importantes et insertion dans un algorithme de suivi de facturation. Assistant à la supervision de 10 agents et gestion de rapports mensuels. Utilisation de AMADEUS et ALTEA, des logiciels aéroportuaire international.",
      },
      {
        title: "Adjoint au chef de la réception",
        company: "Staci 9 - Mitry Mory",
        period: "2018 - 2020",
        description:
          "Contrôle des produits reçus et saisie des bons de livraison. Gestion des commandes, des camions planifiés et de l'emploi du temps. Utilisation d'un logiciel interne pour créer et ajouter les produits dans la base de données sous un n°PAL.",
      },
    ],
    education: [
      {
        degree: "Développeur Web & Web Mobile",
        school: "STUDI",
        year: "2023",
        description:
          "Création d'applications web complètes (HTML, CSS, JavaScript, PHP), Méthodologies Agiles (Scrum, Kanban), Tests et débogages (unitaires et fonctionnels), Référencement SEO et Design thinking",
      },
      {
        degree: "ALTEA + AMADEUS AIR R/V/H",
        school: "Airsup Paris",
        year: "2020",
        description:
          "Apprentissage des logiciels Altea et Amadeus pour le métier d'agent d'escale, Maîtrise des techniques d'accueil et de gestion des passagers, Anglais commercial (communication avec des passagers internationaux)",
      },
    ],
    socialMedia: {
      facebook: "https://facebook.com/abdurahman.usdi",
      twitter: "https://twitter.com/abdurahman_usdi",
      instagram: "https://instagram.com/abdurahman_usdi",
      linkedin: "https://www.linkedin.com/in/abdu-usdi-553877268/",
      github: "https://github.com/AbduUSDI",
    },
  },

  // Projects information
  projects: [
    {
      title: "Zoo Arcadia",
      description: "Application web pour un Zoo, conçue avec les principes SOLID en PHP.",
      image: "assets/projects/zoo-arcadia.webp",
      tags: ["PHP", "SOLID", "MVC", "MySQL"],
      github: "https://github.com/abdurrahman/zoo-arcadia",
      demo: "https://zoo-arcadia.abdurrahman.fr",
    },
    {
      title: "Tout pour un nouveau-né",
      description: "Site pour accompagner les nouveaux parents, construit en PHP avec une structure MVC.",
      image: "assets/projects/first_screen.webp",
      tags: ["PHP", "MVC", "MySQL", "Bootstrap"],
      github: "https://github.com/abdurrahman/nouveau-ne",
      demo: "https://nouveau-ne.abdurrahman.fr",
    },
    {
      title: "E-Learning Platform",
      description:
        "Plateforme de formation en ligne, permettant aux organismes de créer des cours et d'organiser des sessions live.",
      image: "assets/projects/cours.webp",
      tags: ["PHP", "JavaScript", "MySQL", "Bootstrap"],
      github: "https://github.com/abdurrahman/e-learning",
      demo: "https://e-learning.abdurrahman.fr",
    },
    {
      title: "FullStackExplorer",
      description:
        "Une interface d'apprentissage moderne pour réviser les bases, explorer des concepts avancés, et suivre les dernières évolutions technologiques.",
      image: "assets/projects/image.work.webp",
      tags: ["JavaScript", "React", "Node.js", "MongoDB"],
      github: "https://github.com/abdurrahman/fullstack-explorer",
      demo: "https://fullstack-explorer.abdurrahman.fr",
    },
    {
      title: "Abduclip",
      description:
        "Plateforme de mini-jeux sur HTML5 et JavaScript avec des CDN et IFRAME, incluant un système de trophées et classements.",
      image: "assets/projects/abduclip.png",
      tags: ["HTML5", "JavaScript", "CSS3", "API"],
      github: "https://github.com/abdurrahman/abduclip",
      demo: "https://abduclip.abdurrahman.fr",
    },
    {
      title: "Plateforme de mini-jeux de codage",
      description:
        "Plateforme de mini-jeux de codage sur JavaScript, Vue.js et Nest.js avec un éditeur de code intégré, une console et un canvas de sortie.",
      image: "assets/projects/portfolio-os.png",
      tags: ["JavaScript", "Vue.js", "Nest.js", "Canvas API"],
      github: "https://github.com/abdurrahman/coding-games",
      demo: "https://coding-games.abdurrahman.fr",
    },
  ],

  // Default window positions
  defaultWindowPositions: {
    about: { top: 50, left: 50 },
    projects: { top: 80, left: 120 },
    cv: { top: 100, left: 200 },
    calculator: { top: 150, left: 300 },
    chrome: { top: 50, left: 400 },
  },

  // Default window sizes
  defaultWindowSizes: {
    about: { width: 700, height: 500 },
    projects: { width: 800, height: 600 },
    cv: { width: 800, height: 700 },
    calculator: { width: 300, height: 400 },
    chrome: { width: 900, height: 600 },
  },
}
