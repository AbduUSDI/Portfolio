/**
 * Core System - Initiateur principal du Portfolio OS
 * Gère l'initialisation et la coordination de tous les modules du système
 */

import Storage from './storage.js';
import NotificationSystem from './notifications.js';
import WindowManager from './windows.js';
import AppLauncher from './launcher.js';
import UIManager from './ui.js';
import { CONFIG } from './config.js';

/**
 * Classe principale du système Portfolio OS
 * Permet d'accéder à tous les modules via this.storage, this.notifications, etc.
 */
export default class PortfolioOS {
  constructor() {
    // États du système
    this.isInitialized = false;
    this.currentTheme = 'windows';
    this.modules = new Map();

    // Initialiser les modules principaux
    this.initializeModules();

    // Configurer les événements globaux
    this.setupGlobalEvents();

    console.log('🚀 Portfolio OS - Système initialisé');
  }

  /**
   * Initialiser tous les modules du système
   */
  initializeModules() {
    try {
      // Storage - doit être initialisé en premier
      this.storage = new Storage();
      this.modules.set('storage', this.storage);

      // Notifications - système de notifications intelligent
      this.notifications = new NotificationSystem();
      this.modules.set('notifications', this.notifications);

      // Window Manager - gestionnaire de fenêtres
      this.windows = new WindowManager(this);
      this.modules.set('windows', this.windows);

      // App Launcher - lanceur d'applications
      this.launcher = new AppLauncher(this);
      this.modules.set('launcher', this.launcher);

      // UI Manager - gestionnaire d'interface
      this.ui = new UIManager(this);
      this.modules.set('ui', this.ui);

      // Configuration globale
      this.config = CONFIG;

      console.log('✅ Tous les modules initialisés avec succès');
    } catch (error) {
      console.error('❌ Erreur lors de l\'initialisation des modules:', error);
      this.handleInitializationError(error);
    }
  }

  /**
   * Configurer les événements globaux du système
   */
  setupGlobalEvents() {
    // Événements de cycle de vie
    window.addEventListener('beforeunload', () => {
      this.beforeUnload();
    });

    window.addEventListener('unload', () => {
      this.onUnload();
    });

    // Événements de visibilité
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) {
        this.onHidden();
      } else {
        this.onVisible();
      }
    });

    // Événements de redimensionnement
    window.addEventListener('resize', () => {
      this.onResize();
    });

    // Événements de réseau
    window.addEventListener('online', () => {
      this.onOnline();
    });

    window.addEventListener('offline', () => {
      this.onOffline();
    });

    // Événements de thème
    this.addEventListener('theme-change', (event) => {
      this.onThemeChange(event.detail);
    });
  }

  /**
   * Initialiser complètement le système
   */
  async init() {
    if (this.isInitialized) {
      console.warn('⚠️ Le système est déjà initialisé');
      return;
    }

    try {
      // Charger les préférences utilisateur
      await this.loadUserPreferences();

      // Initialiser l'interface utilisateur
      await this.ui.init();

      // Initialiser le système de notifications
      await this.notifications.init();

      // Restaurer la session précédente
      await this.restoreSession();

      // Marquer comme initialisé
      this.isInitialized = true;

      // Notification de bienvenue
      this.notifications.show({
        title: 'Portfolio OS',
        message: 'Système démarré avec succès!',
        type: 'success',
        duration: 3000
      });

      // Enregistrer l'événement de démarrage
      this.storage.addToHistory('system_startup', {
        timestamp: new Date().toISOString(),
        theme: this.currentTheme,
        modules: Array.from(this.modules.keys())
      });

      console.log('🎉 Portfolio OS complètement initialisé');
    } catch (error) {
      console.error('❌ Erreur lors de l\'initialisation complète:', error);
      this.handleInitializationError(error);
    }
  }

  /**
   * Charger les préférences utilisateur
   */
  async loadUserPreferences() {
    const preferences = this.storage.loadPreferences();

    if (preferences) {
      this.currentTheme = preferences.theme || 'windows';

      // Appliquer le thème
      this.setTheme(this.currentTheme);

      console.log('📋 Préférences utilisateur chargées:', preferences);
    }
  }

  /**
   * Restaurer la session précédente
   */
  async restoreSession() {
    const openApps = this.storage.loadOpenApps();

    if (openApps && openApps.length > 0) {
      console.log('🔄 Restauration de la session précédente...');

      // Attendre un peu pour que l'interface soit prête
      setTimeout(() => {
        openApps.forEach(appId => {
          this.launcher.launchApp(appId);
        });
      }, 1000);
    }
  }

  /**
   * Changer le thème du système
   * @param {string} theme - Le thème à appliquer ('windows' ou 'macos')
   */
  setTheme(theme) {
    if (theme !== 'windows' && theme !== 'macos') {
      console.error('❌ Thème invalide:', theme);
      return;
    }

    const oldTheme = this.currentTheme;
    this.currentTheme = theme;

    // Appliquer le thème à l'interface
    this.ui.setTheme(theme);

    // Sauvegarder le thème
    this.storage.saveTheme(theme);

    // Notifier tous les modules du changement
    this.dispatchEvent('theme-change', {
      oldTheme,
      newTheme: theme
    });

    // Notification
    this.notifications.show({
      title: 'Thème modifié',
      message: `Basculé vers ${theme === 'windows' ? 'Windows 11' : 'macOS'}`,
      type: 'info',
      duration: 2000
    });

    console.log(`🎨 Thème changé: ${oldTheme} → ${theme}`);
  }

  /**
   * Obtenir un module spécifique
   * @param {string} moduleName - Nom du module
   * @returns {Object|null} Le module ou null si non trouvé
   */
  getModule(moduleName) {
    return this.modules.get(moduleName) || null;
  }

  /**
   * Vérifier si un module est disponible
   * @param {string} moduleName - Nom du module
   * @returns {boolean} True si le module est disponible
   */
  hasModule(moduleName) {
    return this.modules.has(moduleName);
  }

  /**
   * Redémarrer un module spécifique
   * @param {string} moduleName - Nom du module à redémarrer
   */
  async restartModule(moduleName) {
    const moduleClass = this.modules.get(moduleName);
    if (!moduleClass) {
      console.error(`❌ Module '${moduleName}' non trouvé`);
      return;
    }

    try {
      console.log(`🔄 Redémarrage du module '${moduleName}'...`);

      // Réinitialiser le module
      if (typeof moduleClass.restart === 'function') {
        await moduleClass.restart();
      } else {
        // Méthode par défaut: recréer l'instance
        switch (moduleName) {
          case 'notifications':
            this.notifications = new NotificationSystem();
            await this.notifications.init();
            break;
          case 'windows':
            this.windows = new WindowManager(this);
            break;
          case 'launcher':
            this.launcher = new AppLauncher(this);
            break;
          case 'ui':
            this.ui = new UIManager(this);
            await this.ui.init();
            break;
          default:
            console.warn(`⚠️ Pas de méthode de redémarrage pour '${moduleName}'`);
        }
      }

      console.log(`✅ Module '${moduleName}' redémarré avec succès`);
    } catch (error) {
      console.error(`❌ Erreur lors du redémarrage du module '${moduleName}':`, error);
    }
  }

  /**
   * Obtenir les statistiques du système
   * @returns {Object} Statistiques complètes
   */
  getSystemStats() {
    return {
      uptime: this.getUptime(),
      theme: this.currentTheme,
      modules: Array.from(this.modules.keys()),
      storage: this.storage.getUsageStats(),
      notifications: this.notifications.getStats(),
      windows: this.windows.getStats(),
      memory: this.getMemoryStats()
    };
  }

  /**
   * Obtenir le temps de fonctionnement
   * @returns {number} Temps en millisecondes
   */
  getUptime() {
    return Date.now() - this.startTime;
  }

  /**
   * Obtenir les statistiques de mémoire
   * @returns {Object} Statistiques mémoire
   */
  getMemoryStats() {
    if ('memory' in performance) {
      return {
        used: performance.memory.usedJSHeapSize,
        total: performance.memory.totalJSHeapSize,
        limit: performance.memory.jsHeapSizeLimit
      };
    }
    return { available: false };
  }

  /**
   * Exporter toutes les données du système
   * @returns {Object} Données exportées
   */
  exportSystemData() {
    return {
      version: '2.0.0',
      exportedAt: new Date().toISOString(),
      theme: this.currentTheme,
      data: this.storage.exportData(),
      stats: this.getSystemStats()
    };
  }

  /**
   * Importer des données système
   * @param {Object} data - Données à importer
   * @returns {boolean} Succès de l'importation
   */
  async importSystemData(data) {
    try {
      if (!data || !data.version) {
        throw new Error('Données d\'importation invalides');
      }

      // Importer les données de stockage
      if (data.data) {
        this.storage.importData(data.data);
      }

      // Appliquer le thème
      if (data.theme) {
        this.setTheme(data.theme);
      }

      this.notifications.show({
        title: 'Import réussi',
        message: 'Les données ont été importées avec succès',
        type: 'success',
        duration: 4000
      });

      return true;
    } catch (error) {
      console.error('❌ Erreur lors de l\'importation:', error);

      this.notifications.show({
        title: 'Erreur d\'import',
        message: 'Impossible d\'importer les données',
        type: 'error',
        duration: 5000
      });

      return false;
    }
  }

  // === Événements de cycle de vie ===

  /**
   * Avant déchargement de la page
   */
  beforeUnload() {
    // Sauvegarder l'état des applications ouvertes
    const openApps = this.windows.getOpenWindows();
    this.storage.saveOpenApps(openApps);

    // Enregistrer la fin de session
    this.storage.addToHistory('system_shutdown', {
      timestamp: new Date().toISOString(),
      uptime: this.getUptime(),
      openApps: openApps.length
    });
  }

  /**
   * Lors du déchargement de la page
   */
  onUnload() {
    console.log('👋 Portfolio OS - Arrêt du système');
  }

  /**
   * Quand la page devient cachée
   */
  onHidden() {
    this.storage.addToHistory('system_hidden', {
      timestamp: new Date().toISOString()
    });
  }

  /**
   * Quand la page redevient visible
   */
  onVisible() {
    this.storage.addToHistory('system_visible', {
      timestamp: new Date().toISOString()
    });
  }

  /**
   * Lors du redimensionnement de la fenêtre
   */
  onResize() {
    this.ui.adjustUIForScreenSize();
  }

  /**
   * Quand la connexion internet est rétablie
   */
  onOnline() {
    this.notifications.show({
      title: 'Connexion rétablie',
      message: 'Vous êtes de nouveau en ligne',
      type: 'success',
      duration: 3000
    });
  }

  /**
   * Quand la connexion internet est perdue
   */
  onOffline() {
    this.notifications.show({
      title: 'Connexion perdue',
      message: 'Vous êtes hors ligne',
      type: 'warning',
      duration: 5000
    });
  }

  /**
   * Lors du changement de thème
   * @param {Object} detail - Détails du changement
   */
  onThemeChange(detail) {
    // Mettre à jour tous les modules
    this.modules.forEach((module, name) => {
      if (typeof module.onThemeChange === 'function') {
        module.onThemeChange(detail.newTheme);
      }
    });
  }

  /**
   * Gérer les erreurs d'initialisation
   * @param {Error} error - L'erreur survenue
   */
  handleInitializationError(error) {
    console.error('💥 Erreur critique lors de l\'initialisation:', error);

    // Afficher une notification d'erreur
    if (this.notifications) {
      this.notifications.show({
        title: 'Erreur système',
        message: 'Une erreur est survenue lors de l\'initialisation',
        type: 'error',
        persistent: true,
        actions: [
          {
            id: 'reload',
            label: 'Recharger',
            type: 'primary',
            callback: () => window.location.reload()
          }
        ]
      });
    }
  }

  // === Méthodes utilitaires ===

  /**
   * Ajouter un écouteur d'événement personnalisé
   * @param {string} eventName - Nom de l'événement
   * @param {Function} callback - Fonction de rappel
   */
  addEventListener(eventName, callback) {
    document.addEventListener(`portfolioos-${eventName}`, callback);
  }

  /**
   * Supprimer un écouteur d'événement personnalisé
   * @param {string} eventName - Nom de l'événement
   * @param {Function} callback - Fonction de rappel
   */
  removeEventListener(eventName, callback) {
    document.removeEventListener(`portfolioos-${eventName}`, callback);
  }

  /**
   * Déclencher un événement personnalisé
   * @param {string} eventName - Nom de l'événement
   * @param {Object} detail - Données de l'événement
   */
  dispatchEvent(eventName, detail = {}) {
    document.dispatchEvent(new CustomEvent(`portfolioos-${eventName}`, {
      detail,
      bubbles: true
    }));
  }

  /**
   * Créer une nouvelle instance de classe qui étend PortfolioOS
   * Permet d'accéder aux modules via this.storage, this.notifications, etc.
   */
  static createExtendedClass() {
    return class extends PortfolioOS {
      constructor() {
        super();
      }
    };
  }
}

// Créer et exporter l'instance globale
const portfolioOS = new PortfolioOS();

// Exposer globalement pour faciliter le débogage
window.portfolioOS = portfolioOS;

export { portfolioOS };
