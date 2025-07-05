/**
 * Gestionnaire de stockage avancé pour le Portfolio OS
 * Gère la sauvegarde et le chargement des préférences utilisateur, états des fenêtres,
 * historique, favoris, paramètres système et données d'applications
 */
class Storage {
  constructor() {
    this.storageKey = "portfolio-os-state";
    this.historyKey = "portfolio-os-history";
    this.preferencesKey = "portfolio-os-preferences";
    this.appsDataKey = "portfolio-os-apps-data";
    this.sessionsKey = "portfolio-os-sessions";

    // Initialiser les données par défaut si elles n'existent pas
    this.initializeDefaultData();
  }

  /**
   * Sauvegarder l'état global du système avec compression et validation
   * @param {Object} state - L'état à sauvegarder
   */
  saveState(state) {
    try {
      // Valider l'état avant la sauvegarde
      if (!this.validateState(state)) {
        throw new Error("État invalide, impossible de sauvegarder");
      }

      // Ajouter un timestamp et une version
      const enhancedState = {
        ...state,
        lastModified: new Date().toISOString(),
        version: "2.0.0",
        checksum: this.generateChecksum(JSON.stringify(state))
      };

      const serializedState = JSON.stringify(enhancedState);
      localStorage.setItem(this.storageKey, serializedState);

      // Créer une sauvegarde de sécurité
      this.createBackup(enhancedState);

    } catch (error) {
      console.error("Erreur lors de la sauvegarde de l'état:", error);
      throw error;
    }
  }

  /**
   * Charger l'état du système avec validation et récupération automatique
   * @returns {Object|null} L'état chargé ou null si non trouvé
   */
  loadState() {
    try {
      const serializedState = localStorage.getItem(this.storageKey);
      if (serializedState === null) {
        return this.loadBackup(); // Essayer de charger une sauvegarde
      }

      const state = JSON.parse(serializedState);

      // Valider l'intégrité des données
      if (!this.validateStateIntegrity(state)) {
        console.warn("Données corrompues détectées, tentative de récupération...");
        return this.loadBackup();
      }

      return state;
    } catch (error) {
      console.error("Erreur lors du chargement de l'état:", error);
      return this.loadBackup();
    }
  }

  /**
   * Valider l'état avant sauvegarde
   * @param {Object} state - L'état à valider
   * @returns {boolean} True si valide
   */
  validateState(state) {
    if (!state || typeof state !== 'object') return false;
    // Ajouter d'autres validations selon les besoins
    return true;
  }

  /**
   * Valider l'intégrité de l'état chargé
   * @param {Object} state - L'état à valider
   * @returns {boolean} True si intègre
   */
  validateStateIntegrity(state) {
    if (!state || !state.checksum) return false;

    const stateWithoutChecksum = { ...state };
    delete stateWithoutChecksum.checksum;
    delete stateWithoutChecksum.lastModified;
    delete stateWithoutChecksum.version;

    const expectedChecksum = this.generateChecksum(JSON.stringify(stateWithoutChecksum));
    return state.checksum === expectedChecksum;
  }

  /**
   * Générer une somme de contrôle simple
   * @param {string} data - Les données pour générer la somme
   * @returns {string} La somme de contrôle
   */
  generateChecksum(data) {
    let hash = 0;
    for (let i = 0; i < data.length; i++) {
      const char = data.charCodeAt(i);
      hash = ((hash << 5) - hash) + char;
      hash = hash & hash; // Convertir en 32bit
    }
    return hash.toString(36);
  }

  /**
   * Créer une sauvegarde de sécurité
   * @param {Object} state - L'état à sauvegarder
   */
  createBackup(state) {
    try {
      const backupKey = this.storageKey + "_backup";
      localStorage.setItem(backupKey, JSON.stringify(state));
    } catch (error) {
      console.error("Erreur lors de la création de la sauvegarde:", error);
    }
  }

  /**
   * Charger la sauvegarde de sécurité
   * @returns {Object|null} La sauvegarde ou null
   */
  loadBackup() {
    try {
      const backupKey = this.storageKey + "_backup";
      const backup = localStorage.getItem(backupKey);
      return backup ? JSON.parse(backup) : null;
    } catch (error) {
      console.error("Erreur lors du chargement de la sauvegarde:", error);
      return null;
    }
  }

  /**
   * Sauvegarder la position et taille d'une fenêtre avec historique
   * @param {string} appId - L'ID de l'application
   * @param {Object} position - La position de la fenêtre {top, left}
   * @param {Object} size - La taille de la fenêtre {width, height}
   */
  saveWindowState(appId, position, size) {
    try {
      const state = this.loadState() || {};
      const windows = state.windows || {};

      // Sauvegarder l'ancien état dans l'historique
      if (windows[appId]) {
        const history = windows[appId].history || [];
        history.push({
          position: windows[appId].position,
          size: windows[appId].size,
          timestamp: new Date().toISOString()
        });

        // Garder seulement les 10 derniers états
        if (history.length > 10) {
          history.shift();
        }

        windows[appId].history = history;
      }

      windows[appId] = {
        ...windows[appId],
        position,
        size,
        isOpen: true,
        lastModified: new Date().toISOString()
      };

      state.windows = windows;
      this.saveState(state);
    } catch (error) {
      console.error("Erreur lors de la sauvegarde de l'état de la fenêtre:", error);
    }
  }

  /**
   * Charger la position et taille d'une fenêtre
   * @param {string} appId - L'ID de l'application
   * @returns {Object|null} L'état de la fenêtre ou null si non trouvé
   */
  loadWindowState(appId) {
    try {
      const state = this.loadState();
      if (!state || !state.windows || !state.windows[appId]) {
        return null;
      }
      return state.windows[appId];
    } catch (error) {
      console.error("Erreur lors du chargement de l'état de la fenêtre:", error);
      return null;
    }
  }

  /**
   * Restaurer un état précédent d'une fenêtre
   * @param {string} appId - L'ID de l'application
   * @param {number} historyIndex - Index dans l'historique (0 = plus récent)
   * @returns {Object|null} L'état restauré ou null
   */
  restoreWindowState(appId, historyIndex = 0) {
    try {
      const windowState = this.loadWindowState(appId);
      if (!windowState || !windowState.history || windowState.history.length === 0) {
        return null;
      }

      const historyItem = windowState.history[windowState.history.length - 1 - historyIndex];
      if (!historyItem) return null;

      // Restaurer l'état
      this.saveWindowState(appId, historyItem.position, historyItem.size);
      return historyItem;
    } catch (error) {
      console.error("Erreur lors de la restauration de l'état de la fenêtre:", error);
      return null;
    }
  }

  /**
   * Sauvegarder les préférences du thème OS avec options avancées
   * @param {string} theme - Le nom du thème ('windows' ou 'macos')
   * @param {Object} options - Options supplémentaires (wallpaper, accent, etc.)
   */
  saveTheme(theme, options = {}) {
    try {
      const preferences = this.loadPreferences() || {};
      preferences.theme = theme;
      preferences.themeOptions = {
        ...preferences.themeOptions,
        ...options,
        lastChanged: new Date().toISOString()
      };

      this.savePreferences(preferences);

      // Ajouter à l'historique des thèmes
      this.addToHistory('theme_change', {
        theme,
        options,
        timestamp: new Date().toISOString()
      });
    } catch (error) {
      console.error("Erreur lors de la sauvegarde du thème:", error);
    }
  }

  /**
   * Charger la préférence de thème OS
   * @returns {string} Le nom du thème ('windows' ou 'macos')
   */
  loadTheme() {
    try {
      const preferences = this.loadPreferences();
      return preferences && preferences.theme ? preferences.theme : "windows";
    } catch (error) {
      console.error("Erreur lors du chargement du thème:", error);
      return "windows";
    }
  }

  /**
   * Sauvegarder les préférences utilisateur complètes
   * @param {Object} preferences - Les préférences à sauvegarder
   */
  savePreferences(preferences) {
    try {
      const enhancedPreferences = {
        ...preferences,
        lastModified: new Date().toISOString(),
        version: "2.0.0"
      };

      localStorage.setItem(this.preferencesKey, JSON.stringify(enhancedPreferences));
    } catch (error) {
      console.error("Erreur lors de la sauvegarde des préférences:", error);
    }
  }

  /**
   * Charger les préférences utilisateur
   * @returns {Object|null} Les préférences ou null
   */
  loadPreferences() {
    try {
      const preferences = localStorage.getItem(this.preferencesKey);
      return preferences ? JSON.parse(preferences) : null;
    } catch (error) {
      console.error("Erreur lors du chargement des préférences:", error);
      return null;
    }
  }

  /**
   * Mettre à jour une préférence spécifique
   * @param {string} key - La clé de la préférence
   * @param {*} value - La nouvelle valeur
   */
  updatePreference(key, value) {
    try {
      const preferences = this.loadPreferences() || {};
      preferences[key] = value;
      this.savePreferences(preferences);
    } catch (error) {
      console.error("Erreur lors de la mise à jour de la préférence:", error);
    }
  }

  /**
   * Sauvegarder les applications ouvertes avec métadonnées
   * @param {Array} apps - Tableau des IDs d'applications ouvertes
   */
  saveOpenApps(apps) {
    try {
      const state = this.loadState() || {};
      state.openApps = apps.map(appId => ({
        id: appId,
        openedAt: new Date().toISOString(),
        sessionId: this.generateSessionId()
      }));
      this.saveState(state);
    } catch (error) {
      console.error("Erreur lors de la sauvegarde des applications ouvertes:", error);
    }
  }

  /**
   * Charger les applications ouvertes
   * @returns {Array} Tableau des IDs d'applications ouvertes
   */
  loadOpenApps() {
    try {
      const state = this.loadState();
      if (!state || !state.openApps) return [];

      // Retourner seulement les IDs pour la compatibilité
      return state.openApps.map(app => typeof app === 'string' ? app : app.id);
    } catch (error) {
      console.error("Erreur lors du chargement des applications ouvertes:", error);
      return [];
    }
  }

  /**
   * Ajouter une entrée à l'historique du système
   * @param {string} action - Type d'action
   * @param {Object} data - Données associées
   */
  addToHistory(action, data) {
    try {
      const history = this.loadHistory() || [];
      history.push({
        action,
        data,
        timestamp: new Date().toISOString(),
        sessionId: this.generateSessionId()
      });

      // Garder seulement les 1000 dernières entrées
      if (history.length > 1000) {
        history.splice(0, history.length - 1000);
      }

      this.saveHistory(history);
    } catch (error) {
      console.error("Erreur lors de l'ajout à l'historique:", error);
    }
  }

  /**
   * Sauvegarder l'historique complet
   * @param {Array} history - L'historique à sauvegarder
   */
  saveHistory(history) {
    try {
      localStorage.setItem(this.historyKey, JSON.stringify(history));
    } catch (error) {
      console.error("Erreur lors de la sauvegarde de l'historique:", error);
    }
  }

  /**
   * Charger l'historique complet
   * @returns {Array} L'historique ou tableau vide
   */
  loadHistory() {
    try {
      const history = localStorage.getItem(this.historyKey);
      return history ? JSON.parse(history) : [];
    } catch (error) {
      console.error("Erreur lors du chargement de l'historique:", error);
      return [];
    }
  }

  /**
   * Rechercher dans l'historique
   * @param {string} action - Type d'action à rechercher
   * @param {number} limit - Limite de résultats
   * @returns {Array} Résultats de la recherche
   */
  searchHistory(action, limit = 50) {
    try {
      const history = this.loadHistory();
      return history
        .filter(entry => entry.action === action)
        .slice(-limit)
        .reverse();
    } catch (error) {
      console.error("Erreur lors de la recherche dans l'historique:", error);
      return [];
    }
  }

  /**
   * Sauvegarder les données spécifiques d'une application
   * @param {string} appId - ID de l'application
   * @param {Object} data - Données à sauvegarder
   */
  saveAppData(appId, data) {
    try {
      const appsData = this.loadAppsData() || {};
      appsData[appId] = {
        ...appsData[appId],
        ...data,
        lastModified: new Date().toISOString()
      };
      this.saveAppsData(appsData);
    } catch (error) {
      console.error("Erreur lors de la sauvegarde des données d'application:", error);
    }
  }

  /**
   * Charger les données d'une application
   * @param {string} appId - ID de l'application
   * @returns {Object|null} Les données ou null
   */
  loadAppData(appId) {
    try {
      const appsData = this.loadAppsData();
      return appsData && appsData[appId] ? appsData[appId] : null;
    } catch (error) {
      console.error("Erreur lors du chargement des données d'application:", error);
      return null;
    }
  }

  /**
   * Sauvegarder toutes les données d'applications
   * @param {Object} appsData - Données de toutes les applications
   */
  saveAppsData(appsData) {
    try {
      localStorage.setItem(this.appsDataKey, JSON.stringify(appsData));
    } catch (error) {
      console.error("Erreur lors de la sauvegarde des données d'applications:", error);
    }
  }

  /**
   * Charger toutes les données d'applications
   * @returns {Object|null} Les données ou null
   */
  loadAppsData() {
    try {
      const appsData = localStorage.getItem(this.appsDataKey);
      return appsData ? JSON.parse(appsData) : null;
    } catch (error) {
      console.error("Erreur lors du chargement des données d'applications:", error);
      return null;
    }
  }

  /**
   * Charger les sessions précédentes
   * @returns {Array} Tableau des sessions
   */
  loadSessions() {
    try {
      const sessions = localStorage.getItem(this.sessionsKey);
      return sessions ? JSON.parse(sessions) : [];
    } catch (error) {
      console.error("Erreur lors du chargement des sessions:", error);
      return [];
    }
  }

  /**
   * Obtenir des statistiques d'utilisation
   * @returns {Object} Statistiques
   */
  getUsageStats() {
    try {
      const history = this.loadHistory();
      const sessions = this.loadSessions();
      const appsData = this.loadAppsData() || {};

      return {
        totalSessions: sessions.length,
        totalActions: history.length,
        mostUsedApps: this.getMostUsedApps(history),
        avgSessionTime: this.calculateAvgSessionTime(sessions),
        lastAccess: sessions.length > 0 ? sessions[sessions.length - 1].startTime : null,
        appsWithData: Object.keys(appsData).length
      };
    } catch (error) {
      console.error("Erreur lors du calcul des statistiques:", error);
      return {};
    }
  }

  /**
   * Obtenir les applications les plus utilisées
   * @param {Array} history - Historique des actions
   * @returns {Array} Applications triées par utilisation
   */
  getMostUsedApps(history) {
    try {
      const appCounts = {};
      history.forEach(entry => {
        if (entry.action === 'app_launch' && entry.data && entry.data.appId) {
          appCounts[entry.data.appId] = (appCounts[entry.data.appId] || 0) + 1;
        }
      });

      return Object.entries(appCounts)
        .sort((a, b) => b[1] - a[1])
        .slice(0, 10)
        .map(([appId, count]) => ({ appId, count }));
    } catch (error) {
      console.error("Erreur lors du calcul des applications les plus utilisées:", error);
      return [];
    }
  }

  /**
   * Calculer le temps de session moyen
   * @param {Array} sessions - Sessions
   * @returns {number} Temps moyen en minutes
   */
  calculateAvgSessionTime(sessions) {
    if (sessions.length === 0) return 0;

    // Pour l'instant, retourner une estimation basée sur le nombre de sessions
    // Dans une vraie implémentation, on pourrait tracker l'heure de fin de session
    return sessions.length * 15; // Estimation de 15 minutes par session
  }

  /**
   * Exporter toutes les données utilisateur
   * @returns {Object} Données exportées
   */
  exportData() {
    try {
      return {
        state: this.loadState(),
        preferences: this.loadPreferences(),
        history: this.loadHistory(),
        appsData: this.loadAppsData(),
        sessions: this.loadSessions(),
        exportedAt: new Date().toISOString(),
        version: "2.0.0"
      };
    } catch (error) {
      console.error("Erreur lors de l'exportation des données:", error);
      return null;
    }
  }

  /**
   * Importer des données utilisateur
   * @param {Object} data - Données à importer
   * @returns {boolean} Succès de l'importation
   */
  importData(data) {
    try {
      if (!data || !data.version) {
        throw new Error("Données d'importation invalides");
      }

      if (data.state) this.saveState(data.state);
      if (data.preferences) this.savePreferences(data.preferences);
      if (data.history) this.saveHistory(data.history);
      if (data.appsData) this.saveAppsData(data.appsData);

      this.addToHistory('data_import', {
        importedAt: new Date().toISOString(),
        sourceVersion: data.version
      });

      return true;
    } catch (error) {
      console.error("Erreur lors de l'importation des données:", error);
      return false;
    }
  }

  /**
   * Nettoyer les données anciennes
   * @param {number} daysToKeep - Nombre de jours à conserver
   */
  cleanupOldData(daysToKeep = 30) {
    try {
      const cutoffDate = new Date();
      cutoffDate.setDate(cutoffDate.getDate() - daysToKeep);

      // Nettoyer l'historique
      const history = this.loadHistory();
      const cleanHistory = history.filter(entry => {
        const entryDate = new Date(entry.timestamp);
        return entryDate > cutoffDate;
      });
      this.saveHistory(cleanHistory);

      // Nettoyer les sessions
      const sessions = this.loadSessions();
      const cleanSessions = sessions.filter(session => {
        const sessionDate = new Date(session.startTime);
        return sessionDate > cutoffDate;
      });
      localStorage.setItem(this.sessionsKey, JSON.stringify(cleanSessions));

      console.log(`Nettoyage effectué: ${history.length - cleanHistory.length} entrées d'historique supprimées`);
    } catch (error) {
      console.error("Erreur lors du nettoyage des données:", error);
    }
  }

  /**
   * Effacer toutes les données stockées avec confirmation
   * @param {boolean} keepPreferences - Garder les préférences utilisateur
   */
  clearAll(keepPreferences = false) {
    try {
      const preferences = keepPreferences ? this.loadPreferences() : null;

      localStorage.removeItem(this.storageKey);
      localStorage.removeItem(this.historyKey);
      localStorage.removeItem(this.appsDataKey);
      localStorage.removeItem(this.sessionsKey);
      localStorage.removeItem(this.storageKey + "_backup");

      if (!keepPreferences) {
        localStorage.removeItem(this.preferencesKey);
      }

      // Réinitialiser avec les préférences sauvegardées si demandé
      if (keepPreferences && preferences) {
        this.savePreferences(preferences);
      }

      // Ajouter à l'historique après nettoyage
      this.addToHistory('system_reset', {
        keptPreferences: keepPreferences,
        timestamp: new Date().toISOString()
      });

      console.log("Données système effacées avec succès");
    } catch (error) {
      console.error("Erreur lors de l'effacement des données:", error);
    }
  }
}

/**
 * Classe principale du Portfolio OS
 * Gère l'initialisation, le chargement des modules, et le cycle de vie de l'application
 */
class PortfolioOS {
  constructor() {
    this.storage = new Storage();

    // Initialiser l'application
    this.initializeApp();
  }

  /**
   * Initialiser l'application
   */
  initializeApp() {
    // Charger l'état précédent
    const state = this.storage.loadState();

    // Appliquer les préférences utilisateur
    this.applyUserPreferences(state.preferences);

    // Restaurer les fenêtres et applications ouvertes
    this.restoreOpenWindows(state.windows);
    this.restoreOpenApps(state.openApps);
  }

  /**
   * Appliquer les préférences utilisateur
   * @param {Object} preferences - Les préférences à appliquer
   */
  applyUserPreferences(preferences) {
    if (!preferences) return;

    // Appliquer le thème
    this.applyTheme(preferences.theme, preferences.themeOptions);

    // Appliquer les paramètres de langue, son, notifications, etc.
    this.setLanguage(preferences.language);
    this.setNotifications(preferences.notifications);
    this.setSounds(preferences.sounds);
    this.setAnimations(preferences.animations);
    this.setAutoSave(preferences.autoSave);
    this.setDarkMode(preferences.darkMode);
    this.setDesktopBackground(preferences.desktopBackground);
    this.setFontSize(preferences.fontSize);
    this.setAccessibilityOptions(preferences.accessibility);
  }

  /**
   * Appliquer le thème
   * @param {string} theme - Le nom du thème ('windows' ou 'macos')
   * @param {Object} options - Options du thème (wallpaper, accent, etc.)
   */
  applyTheme(theme, options) {
    // Charger le module de thème approprié
    import(`./themes/${theme}.js`)
      .then(module => {
        const themeClass = module.default;

        // Appliquer le thème
        const themeInstance = new themeClass(options);
        themeInstance.apply();
      })
      .catch(error => {
        console.error("Erreur lors du chargement du module de thème:", error);
      });
  }

  /**
   * Restaurer les fenêtres ouvertes
   * @param {Object} windowsState - L'état des fenêtres à restaurer
   */
  restoreOpenWindows(windowsState) {
    if (!windowsState) return;

    Object.keys(windowsState).forEach(appId => {
      const winState = windowsState[appId];
      this.storage.restoreWindowState(appId);
    });
  }

  /**
   * Restaurer les applications ouvertes
   * @param {Array} openApps - Tableau des IDs d'applications ouvertes
   */
  restoreOpenApps(openApps) {
    if (!openApps || openApps.length === 0) return;

    openApps.forEach(appId => {
      // Logique pour restaurer chaque application
      this.openApp(appId);
    });
  }

  /**
   * Ouvrir une application par son ID
   * @param {string} appId - L'ID de l'application à ouvrir
   */
  openApp(appId) {
    // Logique pour ouvrir l'application (ex: créer une instance, l'ajouter à l'interface, etc.)
    console.log(`Ouverture de l'application: ${appId}`);
  }

  /**
   * Définir la langue de l'interface
   * @param {string} language - Le code de la langue (ex: 'fr', 'en')
   */
  setLanguage(language) {
    // Logique pour changer la langue de l'interface
    console.log(`Changement de la langue en: ${language}`);
  }

  /**
   * Activer ou désactiver les notifications
   * @param {boolean} enabled - True pour activer, false pour désactiver
   */
  setNotifications(enabled) {
    // Logique pour activer/désactiver les notifications
    console.log(`Notifications ${enabled ? 'activées' : 'désactivées'}`);
  }

  /**
   * Activer ou désactiver les sons
   * @param {boolean} enabled - True pour activer, false pour désactiver
   */
  setSounds(enabled) {
    // Logique pour activer/désactiver les sons
    console.log(`Sons ${enabled ? 'activés' : 'désactivés'}`);
  }

  /**
   * Activer ou désactiver les animations
   * @param {boolean} enabled - True pour activer, false pour désactiver
   */
  setAnimations(enabled) {
    // Logique pour activer/désactiver les animations
    console.log(`Animations ${enabled ? 'activées' : 'désactivées'}`);
  }

  /**
   * Activer ou désactiver la sauvegarde automatique
   * @param {boolean} enabled - True pour activer, false pour désactiver
   */
  setAutoSave(enabled) {
    // Logique pour activer/désactiver la sauvegarde automatique
    console.log(`Sauvegarde automatique ${enabled ? 'activée' : 'désactivée'}`);
  }

  /**
   * Activer ou désactiver le mode sombre
   * @param {boolean} enabled - True pour activer, false pour désactiver
   */
  setDarkMode(enabled) {
    // Logique pour activer/désactiver le mode sombre
    console.log(`Mode sombre ${enabled ? 'activé' : 'désactivé'}`);
  }

  /**
   * Définir le fond d'écran du bureau
   * @param {string} wallpaper - Le chemin de l'image du fond d'écran
   */
  setDesktopBackground(wallpaper) {
    // Logique pour changer le fond d'écran du bureau
    console.log(`Changement du fond d'écran du bureau en: ${wallpaper}`);
  }

  /**
   * Définir la taille de la police
   * @param {string} size - La taille de la police (ex: 'small', 'medium', 'large')
   */
  setFontSize(size) {
    // Logique pour changer la taille de la police
    console.log(`Changement de la taille de la police en: ${size}`);
  }

  /**
   * Définir les options d'accessibilité
   * @param {Object} options - Les options d'accessibilité
   */
  setAccessibilityOptions(options) {
    // Logique pour appliquer les options d'accessibilité
    console.log("Application des options d'accessibilité:", options);
  }
}

// Démarrer l'application
const portfolioOS = new PortfolioOS();
