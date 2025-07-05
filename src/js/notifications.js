/**
 * Système de notifications intelligent pour le Portfolio OS
 * Gère les notifications système, alertes, rappels et messages d'applications
 */
export default class NotificationSystem {
  constructor() {
    this.notifications = [];
    this.maxNotifications = 10;
    this.defaultDuration = 5000; // 5 secondes
    this.notificationId = 0;
    this.container = null;
    this.sounds = {
      info: "data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmAaATWH0fPTgjMGHm7A7+OZSA0PVqzn77BdGAg+ltryxnkpBSl+zPLaizsIGGS57+OdTgwNUarm7bliFQU7k9n1unEiBC13yO/gkz4LElyx6OyrWBUIQ5zd8sFuIAM2jdXzzn0vBSF1xe7dmEILDlOq5e2zYBoGPJPY88p9KwUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgU=",
      success: "data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmAaATWH0fPTgjMGHm7A7+OZSA0PVqzn77BdGAg+ltryxnkpBSl+zPLaizsIGGS57+OdTgwNUarm7bliFQU7k9n1unEiBC13yO/gkz4LElyx6OyrWBUIQ5zd8sFuIAM2jdXzzn0vBSF1xe7dmEILDlOq5e2zYBoGPJPY88p9KwUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgU=",
      warning: "data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmAaATWH0fPTgjMGHm7A7+OZSA0PVqzn77BdGAg+ltryxnkpBSl+zPLaizsIGGS57+OdTgwNUarm7bliFQU7k9n1unEiBC13yO/gkz4LElyx6OyrWBUIQ5zd8sFuIAM2jdXzzn0vBSF1xe7dmEILDlOq5e2zYBoGPJPY88p9KwUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgU=",
      error: "data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmAaATWH0fPTgjMGHm7A7+OZSA0PVqzn77BdGAg+ltryxnkpBSl+zPLaizsIGGS57+OdTgwNUarm7bliFQU7k9n1unEiBC13yO/gkz4LElyx6OyrWBUIQ5zd8sFuIAM2jdXzzn0vBSF1xe7dmEILDlOq5e2zYBoGPJPY88p9KwUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgUme8rx3I4+CRZiturqpVITC0ml4u6wXRgIOZPY8sR7KgU="
    };

    this.init();
  }

  /**
   * Initialiser le système de notifications
   */
  init() {
    this.createContainer();
    this.loadNotificationPreferences();
    this.setupEventListeners();

    // Afficher une notification de bienvenue
    setTimeout(() => {
      this.show({
        title: "Portfolio OS",
        message: "Système initialisé avec succès",
        type: "success",
        duration: 3000
      });
    }, 1000);
  }

  /**
   * Créer le conteneur de notifications
   */
  createContainer() {
    this.container = document.createElement('div');
    this.container.id = 'notification-container';
    this.container.className = 'notification-container';
    this.container.innerHTML = `
      <style>
        .notification-container {
          position: fixed;
          top: 60px;
          right: 20px;
          width: 350px;
          z-index: 10000;
          pointer-events: none;
        }

        .notification {
          background: rgba(255, 255, 255, 0.95);
          backdrop-filter: blur(20px);
          border-radius: 12px;
          padding: 16px;
          margin-bottom: 12px;
          box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
          border: 1px solid rgba(255, 255, 255, 0.2);
          transform: translateX(400px);
          transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
          pointer-events: auto;
          position: relative;
          overflow: hidden;
        }

        .notification.show {
          transform: translateX(0);
        }

        .notification.hide {
          transform: translateX(400px);
          opacity: 0;
        }

        .notification::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          height: 4px;
          background: linear-gradient(90deg, #4f46e5, #7c3aed);
          animation: notification-progress var(--duration) linear forwards;
        }

        .notification.success::before {
          background: linear-gradient(90deg, #10b981, #059669);
        }

        .notification.warning::before {
          background: linear-gradient(90deg, #f59e0b, #d97706);
        }

        .notification.error::before {
          background: linear-gradient(90deg, #ef4444, #dc2626);
        }

        @keyframes notification-progress {
          from { width: 100%; }
          to { width: 0%; }
        }

        .notification-header {
          display: flex;
          align-items: center;
          justify-content: space-between;
          margin-bottom: 8px;
        }

        .notification-icon {
          width: 24px;
          height: 24px;
          margin-right: 8px;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          color: white;
          font-weight: bold;
          font-size: 14px;
        }

        .notification.info .notification-icon {
          background: #4f46e5;
        }

        .notification.success .notification-icon {
          background: #10b981;
        }

        .notification.warning .notification-icon {
          background: #f59e0b;
        }

        .notification.error .notification-icon {
          background: #ef4444;
        }

        .notification-title {
          font-weight: 600;
          color: #1f2937;
          flex: 1;
        }

        .notification-close {
          background: none;
          border: none;
          font-size: 18px;
          cursor: pointer;
          color: #6b7280;
          padding: 0;
          margin-left: 8px;
          transition: color 0.2s;
        }

        .notification-close:hover {
          color: #374151;
        }

        .notification-message {
          color: #4b5563;
          line-height: 1.4;
          margin-bottom: 8px;
        }

        .notification-actions {
          display: flex;
          gap: 8px;
          margin-top: 12px;
        }

        .notification-action {
          padding: 6px 12px;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          font-size: 12px;
          font-weight: 500;
          transition: all 0.2s;
        }

        .notification-action.primary {
          background: #4f46e5;
          color: white;
        }

        .notification-action.primary:hover {
          background: #4338ca;
        }

        .notification-action.secondary {
          background: #f3f4f6;
          color: #374151;
        }

        .notification-action.secondary:hover {
          background: #e5e7eb;
        }

        .notification-timestamp {
          font-size: 11px;
          color: #9ca3af;
          margin-top: 4px;
        }

        /* Styles pour les thèmes */
        body.macos-theme .notification {
          background: rgba(246, 246, 246, 0.8);
          backdrop-filter: blur(40px);
          border: 1px solid rgba(0, 0, 0, 0.1);
        }

        body.windows-theme .notification {
          background: rgba(255, 255, 255, 0.9);
          backdrop-filter: blur(20px);
          border: 1px solid rgba(0, 0, 0, 0.1);
        }

        /* Animations d'entrée */
        @keyframes slideInRight {
          from {
            transform: translateX(400px);
            opacity: 0;
          }
          to {
            transform: translateX(0);
            opacity: 1;
          }
        }

        @keyframes slideOutRight {
          from {
            transform: translateX(0);
            opacity: 1;
          }
          to {
            transform: translateX(400px);
            opacity: 0;
          }
        }

        .notification.animate-in {
          animation: slideInRight 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .notification.animate-out {
          animation: slideOutRight 0.3s cubic-bezier(0.55, 0.06, 0.68, 0.19);
        }
      </style>
    `;

    document.body.appendChild(this.container);
  }

  /**
   * Charger les préférences de notifications
   */
  loadNotificationPreferences() {
    const storage = window.storage || new Storage();
    const preferences = storage.loadPreferences() || {};

    this.preferences = {
      enabled: preferences.notifications !== false,
      sounds: preferences.sounds !== false,
      duration: preferences.notificationDuration || this.defaultDuration,
      position: preferences.notificationPosition || 'top-right'
    };
  }

  /**
   * Configurer les écouteurs d'événements
   */
  setupEventListeners() {
    // Écouter les changements de thème
    document.addEventListener('theme-change', (e) => {
      this.updateTheme(e.detail.theme);
    });

    // Écouter les événements système
    window.addEventListener('beforeunload', () => {
      this.show({
        title: "Session terminée",
        message: "À bientôt!",
        type: "info",
        duration: 1000
      });
    });
  }

  /**
   * Afficher une notification
   * @param {Object} options - Options de la notification
   * @returns {string} ID de la notification
   */
  show(options = {}) {
    if (!this.preferences.enabled) return null;

    const notification = this.createNotification(options);
    this.notifications.push(notification);

    // Limiter le nombre de notifications
    if (this.notifications.length > this.maxNotifications) {
      this.hide(this.notifications[0].id);
    }

    // Afficher la notification
    this.displayNotification(notification);

    // Programmer la suppression automatique
    if (notification.duration > 0) {
      setTimeout(() => {
        this.hide(notification.id);
      }, notification.duration);
    }

    // Jouer le son si activé
    if (this.preferences.sounds) {
      this.playSound(notification.type);
    }

    // Enregistrer dans l'historique
    this.logNotification(notification);

    return notification.id;
  }

  /**
   * Créer une notification
   * @param {Object} options - Options de la notification
   * @returns {Object} Objet notification
   */
  createNotification(options) {
    const id = ++this.notificationId;
    const timestamp = new Date();

    const notification = {
      id,
      title: options.title || "Notification",
      message: options.message || "",
      type: options.type || "info",
      duration: options.duration !== undefined ? options.duration : this.preferences.duration,
      actions: options.actions || [],
      icon: options.icon || this.getDefaultIcon(options.type),
      timestamp,
      persistent: options.persistent || false,
      data: options.data || {}
    };

    return notification;
  }

  /**
   * Afficher une notification dans le DOM
   * @param {Object} notification - Notification à afficher
   */
  displayNotification(notification) {
    const element = document.createElement('div');
    element.className = `notification ${notification.type}`;
    element.style.setProperty('--duration', `${notification.duration}ms`);
    element.dataset.notificationId = notification.id;

    const iconSymbol = this.getIconSymbol(notification.type);
    const timeString = notification.timestamp.toLocaleTimeString('fr-FR', {
      hour: '2-digit',
      minute: '2-digit'
    });

    element.innerHTML = `
      <div class="notification-header">
        <div class="notification-icon">${iconSymbol}</div>
        <div class="notification-title">${notification.title}</div>
        <button class="notification-close" onclick="notificationSystem.hide(${notification.id})">×</button>
      </div>
      <div class="notification-message">${notification.message}</div>
      ${this.createActionsHTML(notification.actions, notification.id)}
      <div class="notification-timestamp">${timeString}</div>
    `;

    this.container.appendChild(element);

    // Animation d'entrée
    setTimeout(() => {
      element.classList.add('show');
    }, 50);

    notification.element = element;
  }

  /**
   * Créer le HTML des actions
   * @param {Array} actions - Actions de la notification
   * @param {number} notificationId - ID de la notification
   * @returns {string} HTML des actions
   */
  createActionsHTML(actions, notificationId) {
    if (!actions || actions.length === 0) return '';

    const actionsHTML = actions.map(action => `
      <button class="notification-action ${action.type || 'secondary'}"
              onclick="notificationSystem.handleAction(${notificationId}, '${action.id}')">
        ${action.label}
      </button>
    `).join('');

    return `<div class="notification-actions">${actionsHTML}</div>`;
  }

  /**
   * Gérer les actions des notifications
   * @param {number} notificationId - ID de la notification
   * @param {string} actionId - ID de l'action
   */
  handleAction(notificationId, actionId) {
    const notification = this.notifications.find(n => n.id === notificationId);
    if (!notification) return;

    const action = notification.actions.find(a => a.id === actionId);
    if (!action) return;

    // Exécuter la fonction de callback si elle existe
    if (action.callback && typeof action.callback === 'function') {
      action.callback(notification);
    }

    // Fermer la notification si spécifié
    if (action.closeOnClick !== false) {
      this.hide(notificationId);
    }

    // Déclencher un événement personnalisé
    document.dispatchEvent(new CustomEvent('notification-action', {
      detail: { notification, action }
    }));
  }

  /**
   * Masquer une notification
   * @param {number} id - ID de la notification
   */
  hide(id) {
    const notification = this.notifications.find(n => n.id === id);
    if (!notification || !notification.element) return;

    notification.element.classList.add('hide');

    setTimeout(() => {
      if (notification.element && notification.element.parentNode) {
        notification.element.parentNode.removeChild(notification.element);
      }
      this.notifications = this.notifications.filter(n => n.id !== id);
    }, 300);
  }

  /**
   * Masquer toutes les notifications
   */
  hideAll() {
    this.notifications.forEach(notification => {
      this.hide(notification.id);
    });
  }

  /**
   * Obtenir l'icône par défaut selon le type
   * @param {string} type - Type de notification
   * @returns {string} Symbole de l'icône
   */
  getIconSymbol(type) {
    const icons = {
      info: 'ℹ',
      success: '✓',
      warning: '⚠',
      error: '✗'
    };
    return icons[type] || icons.info;
  }

  /**
   * Obtenir l'icône par défaut
   * @param {string} type - Type de notification
   * @returns {string} URL de l'icône
   */
  getDefaultIcon(type) {
    return `assets/icons/notification-${type}.png`;
  }

  /**
   * Jouer un son de notification
   * @param {string} type - Type de notification
   */
  playSound(type) {
    try {
      const audio = new Audio(this.sounds[type] || this.sounds.info);
      audio.volume = 0.3;
      audio.play().catch(e => {
        console.warn('Impossible de jouer le son de notification:', e);
      });
    } catch (error) {
      console.warn('Erreur lors de la lecture du son:', error);
    }
  }

  /**
   * Enregistrer la notification dans l'historique
   * @param {Object} notification - Notification à enregistrer
   */
  logNotification(notification) {
    const storage = window.storage || new Storage();
    storage.addToHistory('notification_shown', {
      id: notification.id,
      title: notification.title,
      message: notification.message,
      type: notification.type,
      timestamp: notification.timestamp.toISOString()
    });
  }

  /**
   * Mettre à jour le thème des notifications
   * @param {string} theme - Nouveau thème
   */
  updateTheme(theme) {
    // Le CSS se charge automatiquement du thème via les classes body
    // Ici on pourrait ajouter des modifications spécifiques si nécessaire
  }

  /**
   * Obtenir les statistiques des notifications
   * @returns {Object} Statistiques
   */
  getStats() {
    const storage = window.storage || new Storage();
    const history = storage.searchHistory('notification_shown', 100);

    const stats = {
      total: history.length,
      byType: {},
      recent: history.slice(0, 10)
    };

    history.forEach(entry => {
      const type = entry.data.type;
      stats.byType[type] = (stats.byType[type] || 0) + 1;
    });

    return stats;
  }

  /**
   * Créer des notifications prédéfinies pour différents événements système
   */
  static createSystemNotifications() {
    return {
      // Notifications d'applications
      appLaunched: (appName) => ({
        title: "Application lancée",
        message: `${appName} a été ouvert`,
        type: "success",
        duration: 2000
      }),

      appClosed: (appName) => ({
        title: "Application fermée",
        message: `${appName} a été fermé`,
        type: "info",
        duration: 2000
      }),

      // Notifications système
      themeChanged: (theme) => ({
        title: "Thème modifié",
        message: `Basculé vers ${theme === 'windows' ? 'Windows 11' : 'macOS'}`,
        type: "info",
        duration: 3000
      }),

      dataExported: () => ({
        title: "Export réussi",
        message: "Vos données ont été exportées avec succès",
        type: "success",
        duration: 4000,
        actions: [
          {
            id: 'download',
            label: 'Télécharger',
            type: 'primary',
            callback: () => {
              // Logique de téléchargement
            }
          }
        ]
      }),

      updateAvailable: () => ({
        title: "Mise à jour disponible",
        message: "Une nouvelle version du Portfolio OS est disponible",
        type: "info",
        persistent: true,
        actions: [
          {
            id: 'update',
            label: 'Mettre à jour',
            type: 'primary',
            callback: () => {
              window.location.reload();
            }
          },
          {
            id: 'later',
            label: 'Plus tard',
            type: 'secondary'
          }
        ]
      }),

      // Notifications d'erreur
      networkError: () => ({
        title: "Erreur réseau",
        message: "Impossible de se connecter au serveur",
        type: "error",
        duration: 6000,
        actions: [
          {
            id: 'retry',
            label: 'Réessayer',
            type: 'primary',
            callback: () => {
              window.location.reload();
            }
          }
        ]
      }),

      storageQuotaExceeded: () => ({
        title: "Espace de stockage insuffisant",
        message: "Le stockage local est plein. Certaines fonctionnalités peuvent être limitées.",
        type: "warning",
        persistent: true,
        actions: [
          {
            id: 'cleanup',
            label: 'Nettoyer',
            type: 'primary',
            callback: () => {
              const storage = window.storage || new Storage();
              storage.cleanupOldData(7); // Nettoyer les données de plus de 7 jours
            }
          }
        ]
      })
    };
  }
}
