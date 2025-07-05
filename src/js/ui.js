/**
 * Gestionnaire d'interface utilisateur pour Portfolio OS
 * Gère les éléments d'interface, les thèmes et les interactions
 */
export default class UIManager {
  /**
   * Constructeur de la classe UIManager
   * @param {Object} portfolioOS - Référence vers l'instance principale de PortfolioOS
   */
  constructor(portfolioOS = null) {
    this.portfolioOS = portfolioOS;
    this.currentTheme = 'windows';
    this.clockInterval = null;
    this.isInitialized = false;
  }

  /**
   * Initialise tous les éléments d'interface et les écouteurs d'événements
   * Initialise tous les éléments d'interface et les écouteurs d'événements
   */
  async init() {
    try {
      if (this.isInitialized) {
        return;
      }

      // Initialiser les composants dans l'ordre
      this.initTheme();
      this.initClock();
      this.initStartMenu();
      this.initContextMenu();
      this.initDesktopIcons();
      this.initThemeSwitcher();
      this.initDock();
      this.initSpotlight();

      // Événement de redimensionnement de la fenêtre
      window.addEventListener("resize", () => {
        this.adjustUIForScreenSize();
      });

      // Ajustement initial de l'interface
      this.adjustUIForScreenSize();

      this.isInitialized = true;

      // Notification d'initialisation réussie
      if (this.portfolioOS?.notifications) {
        this.portfolioOS.notifications.show({
          title: 'Interface initialisée',
          message: 'L\'interface utilisateur a été initialisée avec succès',
          type: 'success'
        });
      }

      console.log('Interface utilisateur initialisée avec succès');
    } catch (error) {
      console.error('Erreur lors de l\'initialisation de l\'interface utilisateur:', error);
      throw error;
    }
  }

  /**
   * Initialise le thème basé sur les préférences sauvegardées
   */
  initTheme() {
    try {
      const storage = this.portfolioOS?.storage || window.storage;
      const savedTheme = storage ? storage.loadTheme() : 'windows';
      this.setTheme(savedTheme);
    } catch (error) {
      console.warn('Erreur lors de l\'initialisation du thème, utilisation du thème par défaut:', error);
      this.setTheme('windows');
    }
  }

  /**
   * Définit le thème (windows ou macos)
   * @param {string} theme - Le thème à définir ('windows' ou 'macos')
   */
  setTheme(theme) {
    try {
      const CONFIG = this.portfolioOS?.config || window.CONFIG;

      if (theme === "windows") {
        document.body.classList.remove("macos-theme");
        document.body.classList.add("windows-theme");

        if (CONFIG?.windows?.wallpaper) {
          document.body.style.backgroundImage = `url('${CONFIG.windows.wallpaper}')`;
        }

        if (CONFIG?.windows?.accentColor) {
          document.documentElement.style.setProperty("--primary-color", CONFIG.windows.accentColor);
        }

        // Afficher l'interface Windows, cacher l'interface macOS
        const windowsUI = document.getElementById("windows-ui");
        const macosUI = document.getElementById("macos-ui");

        if (windowsUI) windowsUI.style.display = "block";
        if (macosUI) macosUI.style.display = "none";

        // Mettre à jour le sélecteur de thème
        const windowsOption = document.querySelector('.theme-option[data-theme="windows"]');
        const macosOption = document.querySelector('.theme-option[data-theme="macos"]');

        if (windowsOption) windowsOption.classList.add("active");
        if (macosOption) macosOption.classList.remove("active");

      } else if (theme === "macos") {
        document.body.classList.remove("windows-theme");
        document.body.classList.add("macos-theme");

        if (CONFIG?.macos?.wallpaper) {
          document.body.style.backgroundImage = `url('${CONFIG.macos.wallpaper}')`;
        }

        if (CONFIG?.macos?.accentColor) {
          document.documentElement.style.setProperty("--primary-color", CONFIG.macos.accentColor);
        }

        // Afficher l'interface macOS, cacher l'interface Windows
        const windowsUI = document.getElementById("windows-ui");
        const macosUI = document.getElementById("macos-ui");

        if (windowsUI) windowsUI.style.display = "none";
        if (macosUI) macosUI.style.display = "block";

        // Mettre à jour le sélecteur de thème
        const windowsOption = document.querySelector('.theme-option[data-theme="windows"]');
        const macosOption = document.querySelector('.theme-option[data-theme="macos"]');

        if (windowsOption) windowsOption.classList.remove("active");
        if (macosOption) macosOption.classList.add("active");

        // Initialiser le dock s'il n'est pas déjà initialisé
        this.initDock();
      }

      this.currentTheme = theme;

      // Mettre à jour les fenêtres pour le nouveau thème
      if (this.portfolioOS?.windowManager) {
        this.portfolioOS.windowManager.updateWindowsForTheme();
      }

      // Sauvegarder la préférence de thème
      if (this.portfolioOS?.storage) {
        this.portfolioOS.storage.saveTheme(theme);
      }
    } catch (error) {
      console.error('Erreur lors de la définition du thème:', error);
    }
  }

  /**
   * Initialise l'affichage de l'horloge
   */
  initClock() {
    const updateClock = () => {
      try {
        const now = new Date();
        const timeString = now.toLocaleTimeString("fr-FR", { hour: "2-digit", minute: "2-digit" });

        // Mettre à jour l'horloge de la barre des tâches Windows
        const winClock = document.getElementById("clock");
        if (winClock) {
          winClock.textContent = timeString;
        }

        // Mettre à jour l'horloge de la barre de menu macOS
        const macClock = document.getElementById("menuBarClock");
        if (macClock) {
          macClock.textContent = timeString;
        }
      } catch (error) {
        console.error('Erreur lors de la mise à jour de l\'horloge:', error);
      }
    };

    // Mettre à jour l'horloge immédiatement puis toutes les secondes
    updateClock();
    this.clockInterval = setInterval(updateClock, 1000);
  }

  /**
   * Initialise le menu démarrer Windows
   */
  initStartMenu() {
    try {
      const startButton = document.getElementById("startButton");
      const startMenu = document.getElementById("startMenu");

      if (startButton && startMenu) {
        // Basculer le menu démarrer au clic du bouton
        startButton.addEventListener("click", (e) => {
          e.stopPropagation();
          startMenu.classList.toggle("active");
        });

        // Fermer le menu démarrer en cliquant ailleurs
        document.addEventListener("click", (e) => {
          if (!startMenu.contains(e.target) && !startButton.contains(e.target)) {
            startMenu.classList.remove("active");
          }
        });

        // Ajouter les événements de clic aux éléments du menu démarrer
        const startMenuItems = startMenu.querySelectorAll(".start-menu-item");
        startMenuItems.forEach((item) => {
          item.addEventListener("click", () => {
            const app = item.dataset.app;
            if (app && this.portfolioOS?.launcher) {
              this.portfolioOS.launcher.launchApp(app);
              startMenu.classList.remove("active");
            }
          });
        });
      }
    } catch (error) {
      console.error('Erreur lors de l\'initialisation du menu démarrer:', error);
    }
  }

  /**
   * Initialise le menu contextuel du bureau
   */
  initContextMenu() {
    try {
      const desktop = document.getElementById("desktop");
      let contextMenu = document.getElementById("contextMenu");

      // Créer le menu contextuel s'il n'existe pas
      if (!contextMenu) {
        contextMenu = this.createContextMenu();
      }

      if (desktop && contextMenu) {
        // Afficher le menu contextuel au clic droit
        desktop.addEventListener("contextmenu", (e) => {
          e.preventDefault();

          // Positionner le menu au curseur
          contextMenu.style.display = "block";

          // Ajuster la position pour garder le menu dans la fenêtre
          let leftPos = e.clientX;
          let topPos = e.clientY;

          if (leftPos + contextMenu.offsetWidth > window.innerWidth) {
            leftPos = window.innerWidth - contextMenu.offsetWidth;
          }

          if (topPos + contextMenu.offsetHeight > window.innerHeight) {
            topPos = window.innerHeight - contextMenu.offsetHeight;
          }

          contextMenu.style.left = `${leftPos}px`;
          contextMenu.style.top = `${topPos}px`;
        });

        // Cacher le menu contextuel au clic
        document.addEventListener("click", () => {
          contextMenu.style.display = "none";
        });

        // Ajouter les événements de clic aux éléments du menu contextuel
        const contextMenuItems = contextMenu.querySelectorAll(".context-menu-item");
        contextMenuItems.forEach((item) => {
          item.addEventListener("click", () => {
            const action = item.dataset.action;

            switch (action) {
              case "refresh":
                window.location.reload();
                break;
              case "theme":
                const currentTheme = document.body.classList.contains("macos-theme") ? "macos" : "windows";
                const newTheme = currentTheme === "windows" ? "macos" : "windows";
                this.setTheme(newTheme);
                break;
            }
          });
        });
      }
    } catch (error) {
      console.error('Erreur lors de l\'initialisation du menu contextuel:', error);
    }
  }

  /**
   * Crée un menu contextuel pour le bureau
   * @returns {HTMLElement} L'élément du menu contextuel
   */
  createContextMenu() {
    const contextMenu = document.createElement("div");
    contextMenu.id = "contextMenu";
    contextMenu.className = "context-menu";
    contextMenu.style.display = "none";
    contextMenu.innerHTML = `
      <div class="context-menu-item" data-action="refresh">
        <span>Actualiser</span>
      </div>
      <div class="context-menu-item" data-action="theme">
        <span>Changer de thème</span>
      </div>
    `;
    document.body.appendChild(contextMenu);
    return contextMenu;
  }

  /**
   * Initialise les icônes du bureau
   */
  initDesktopIcons() {
    try {
      const desktopIcons = document.querySelectorAll(".desktop-icon");

      desktopIcons.forEach((icon) => {
        // Lancer l'application au double-clic
        icon.addEventListener("dblclick", () => {
          const app = icon.dataset.app;
          if (app && this.portfolioOS?.launcher) {
            this.portfolioOS.launcher.launchApp(app);
          }
        });

        // Ajouter l'effet de sélection au clic
        icon.addEventListener("click", (e) => {
          // Désélectionner toutes les icônes
          desktopIcons.forEach((i) => i.classList.remove("selected"));

          // Sélectionner l'icône cliquée
          icon.classList.add("selected");

          // Empêcher l'événement d'atteindre le bureau
          e.stopPropagation();
        });
      });

      // Désélectionner toutes les icônes en cliquant sur le bureau
      const desktop = document.getElementById("desktop");
      if (desktop) {
        desktop.addEventListener("click", () => {
          desktopIcons.forEach((icon) => icon.classList.remove("selected"));
        });
      }
    } catch (error) {
      console.error('Erreur lors de l\'initialisation des icônes du bureau:', error);
    }
  }

  /**
   * Initialise le sélecteur de thème
   */
  initThemeSwitcher() {
    try {
      const themeOptions = document.querySelectorAll(".theme-option");

      themeOptions.forEach((option) => {
        option.addEventListener("click", () => {
          const theme = option.dataset.theme;
          if (theme) {
            this.setTheme(theme);
          }
        });
      });
    } catch (error) {
      console.error('Erreur lors de l\'initialisation du sélecteur de thème:', error);
    }
  }

  /**
   * Initialise le dock macOS
   */
  initDock() {
    try {
      const dock = document.getElementById("dockItems");

      if (dock) {
        // Effacer les éléments de dock existants
        dock.innerHTML = "";

        // Ajouter les éléments du dock depuis la configuration
        const CONFIG = this.portfolioOS?.config || window.CONFIG;
        if (CONFIG?.macos?.dockApps) {
          CONFIG.macos.dockApps.forEach((app) => {
            const dockItem = document.createElement("div");
            dockItem.className = "dock-item";
            dockItem.dataset.app = app.app;
            dockItem.innerHTML = `<img src="${app.icon}" alt="${app.name}">`;

            // Lancer l'application au clic
            dockItem.addEventListener("click", () => {
              if (this.portfolioOS?.launcher) {
                this.portfolioOS.launcher.launchApp(app.app);
              }
            });

            dock.appendChild(dockItem);
          });
        }

        // Ajouter l'effet de survol du dock
        const dockItems = dock.querySelectorAll(".dock-item");
        dockItems.forEach((item) => {
          item.addEventListener("mouseover", () => {
            item.style.transform = "scale(1.2)";
          });

          item.addEventListener("mouseout", () => {
            item.style.transform = "scale(1)";
          });
        });
      }
    } catch (error) {
      console.error('Erreur lors de l\'initialisation du dock:', error);
    }
  }

  /**
   * Initialise la recherche Spotlight macOS
   */
  initSpotlight() {
    try {
      const spotlight = document.getElementById("spotlight");
      const searchIcon = document.querySelector('.menu-bar-icon img[alt="Search"]');

      if (spotlight) {
        // Basculer spotlight au clic de l'icône de recherche
        if (searchIcon) {
          searchIcon.parentElement.addEventListener("click", () => {
            spotlight.classList.toggle("active");
            if (spotlight.classList.contains("active")) {
              const spotlightInput = spotlight.querySelector("input");
              if (spotlightInput) {
                spotlightInput.focus();
              }
            }
          });
        }

        // Fermer spotlight en cliquant à l'extérieur
        document.addEventListener("click", (e) => {
          if (
            spotlight.classList.contains("active") &&
            !spotlight.contains(e.target) &&
            (!searchIcon || !searchIcon.parentElement.contains(e.target))
          ) {
            spotlight.classList.remove("active");
          }
        });

        // Fonctionnalité de recherche Spotlight
        const spotlightInput = spotlight.querySelector("input");
        const spotlightResults = spotlight.querySelector(".spotlight-results");

        if (spotlightInput && spotlightResults) {
          spotlightInput.addEventListener("input", () => {
            const query = spotlightInput.value.toLowerCase();

            // Effacer les résultats précédents
            spotlightResults.innerHTML = "";

            if (query.length > 0) {
              // Rechercher dans les applications disponibles
              const CONFIG = this.portfolioOS?.config || window.CONFIG;
              if (CONFIG?.windows?.startMenuApps && CONFIG?.macos?.dockApps) {
                const allApps = [...CONFIG.windows.startMenuApps, ...CONFIG.macos.dockApps];

                // Supprimer les doublons
                const uniqueApps = allApps.filter((app, index, self) =>
                  index === self.findIndex((a) => a.app === app.app)
                );

                // Filtrer les applications par requête
                const matchingApps = uniqueApps.filter((app) =>
                  app.name.toLowerCase().includes(query)
                );

                // Afficher les résultats
                matchingApps.forEach((app) => {
                  const resultItem = document.createElement("div");
                  resultItem.className = "spotlight-result-item";
                  resultItem.innerHTML = `
                    <img src="${app.icon}" alt="${app.name}">
                    <span>${app.name}</span>
                  `;

                  // Lancer l'application au clic
                  resultItem.addEventListener("click", () => {
                    if (this.portfolioOS?.launcher) {
                      this.portfolioOS.launcher.launchApp(app.app);
                    }
                    spotlight.classList.remove("active");
                  });

                  spotlightResults.appendChild(resultItem);
                });
              }
            }
          });

          // Gérer les raccourcis clavier
          document.addEventListener("keydown", (e) => {
            // Command+Space (macOS) ou Windows+S (Windows)
            if ((e.metaKey && e.key === " ") || (e.key === "s" && e.ctrlKey)) {
              e.preventDefault();
              spotlight.classList.toggle("active");
              if (spotlight.classList.contains("active")) {
                spotlightInput.focus();
              }
            }

            // Échap pour fermer
            if (e.key === "Escape" && spotlight.classList.contains("active")) {
              spotlight.classList.remove("active");
            }
          });
        }
      }
    } catch (error) {
      console.error('Erreur lors de l\'initialisation de Spotlight:', error);
    }
  }

  /**
   * Ajuste les éléments d'interface pour la taille d'écran actuelle
   */
  adjustUIForScreenSize() {
    try {
      const isMobile = window.innerWidth < 768;

      // Ajuster les icônes du bureau
      const desktopIcons = document.querySelector(".desktop-icons");
      if (desktopIcons) {
        if (isMobile) {
          desktopIcons.style.gridTemplateColumns = "repeat(4, 1fr)";
        } else {
          desktopIcons.style.gridTemplateColumns = "repeat(auto-fill, 90px)";
        }
      }

      // Ajuster la taille du dock
      const dock = document.getElementById("dock");
      if (dock) {
        if (isMobile) {
          dock.style.width = "90%";
        } else {
          dock.style.width = "auto";
        }
      }

      // Ajuster le menu démarrer
      const startMenu = document.getElementById("startMenu");
      if (startMenu) {
        if (isMobile) {
          startMenu.style.width = "90%";
          startMenu.style.left = "5%";
        } else {
          startMenu.style.width = "400px";
          startMenu.style.left = "0";
        }
      }
    } catch (error) {
      console.error('Erreur lors de l\'ajustement de l\'interface pour la taille d\'écran:', error);
    }
  }

  /**
   * Obtient le thème actuel
   * @returns {string} Le thème actuel ('windows' ou 'macos')
   */
  getCurrentTheme() {
    return this.currentTheme;
  }

  /**
   * Vérifie si l'interface utilisateur est initialisée
   * @returns {boolean} True si initialisée, false sinon
   */
  isUIInitialized() {
    return this.isInitialized;
  }

  /**
   * Nettoie les ressources utilisées par le gestionnaire d'interface
   */
  destroy() {
    try {
      if (this.clockInterval) {
        clearInterval(this.clockInterval);
        this.clockInterval = null;
      }
      this.isInitialized = false;
    } catch (error) {
      console.error('Erreur lors de la destruction du gestionnaire d\'interface:', error);
    }
  }
}
