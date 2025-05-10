/**
 * Configuration for the Portfolio OS
 */
const CONFIG = {
  // User information
  user: {
    name: "Abdurrahman",
    title: "Développeur Full Stack",
    avatar: "public/assets/avatar.png",
    email: "contact@abdurrahman.fr",
    github: "https://github.com/abdurrahman",
    linkedin: "https://linkedin.com/in/abdurrahman",
  },

  // About information
  about: {
    bio: "Je suis un développeur Full Stack passionné par la création d'applications web modernes et performantes. J'aime résoudre des problèmes complexes et apprendre de nouvelles technologies.",
    skills: [
      "JavaScript",
      "TypeScript",
      "React",
      "Vue.js",
      "Node.js",
      "Express",
      "MongoDB",
      "PostgreSQL",
      "HTML5",
      "CSS3",
      "Tailwind CSS",
      "Git",
      "Docker",
      "AWS",
      "Firebase",
    ],
    experience: [
      {
        title: "Développeur Full Stack Senior",
        company: "TechCorp",
        period: "2020 - Présent",
        description:
          "Développement d'applications web avec React et Node.js. Mise en place d'architectures microservices et déploiement sur AWS.",
      },
      {
        title: "Développeur Front-end",
        company: "WebAgency",
        period: "2018 - 2020",
        description: "Création d'interfaces utilisateur réactives avec Vue.js et intégration avec des API REST.",
      },
      {
        title: "Développeur Junior",
        company: "StartupInc",
        period: "2016 - 2018",
        description: "Développement de fonctionnalités front-end et back-end pour une application SaaS.",
      },
    ],
    education: [
      {
        degree: "Master en Informatique",
        school: "Université de Paris",
        year: "2016",
      },
      {
        degree: "Licence en Informatique",
        school: "Université de Lyon",
        year: "2014",
      },
    ],
  },

  // Projects information
  projects: [
    {
      title: "E-commerce Platform",
      description: "Plateforme e-commerce complète avec panier, paiement et gestion des commandes.",
      image: "public/assets/projects/ecommerce.png",
      tags: ["React", "Node.js", "MongoDB", "Stripe"],
      github: "https://github.com/abdurrahman/ecommerce",
      demo: "https://ecommerce-demo.abdurrahman.fr",
    },
    {
      title: "Task Manager",
      description: "Application de gestion de tâches avec fonctionnalités de collaboration en temps réel.",
      image: "public/assets/projects/taskmanager.png",
      tags: ["Vue.js", "Firebase", "Tailwind CSS"],
      github: "https://github.com/abdurrahman/taskmanager",
      demo: "https://taskmanager.abdurrahman.fr",
    },
    {
      title: "Portfolio OS",
      description: "Portfolio interactif simulant Windows 11 et macOS avec des applications personnalisées.",
      image: "public/assets/projects/portfolioos.png",
      tags: ["HTML", "CSS", "JavaScript"],
      github: "https://github.com/abdurrahman/portfolio-os",
      demo: "https://portfolio.abdurrahman.fr",
    },
    {
      title: "Weather App",
      description: "Application météo avec prévisions sur 7 jours et géolocalisation.",
      image: "public/assets/projects/weatherapp.png",
      tags: ["React", "OpenWeather API", "Geolocation"],
      github: "https://github.com/abdurrahman/weather-app",
      demo: "https://weather.abdurrahman.fr",
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

// Rendre CONFIG accessible globalement
window.CONFIG = CONFIG
export default CONFIG;