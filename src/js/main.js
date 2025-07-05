/**
 * Point d'entrée principal pour le Portfolio OS
 * Initialise le système modulaire et démarre l'OS
 */

import PortfolioOS from './core.js';

// Variable globale pour accéder au système depuis la console
let portfolioOS = null;

/**
 * Initialiser le Portfolio OS au chargement de la page
 */
document.addEventListener("DOMContentLoaded", async () => {
  try {
    console.log('🔄 Démarrage du Portfolio OS...');

    // Créer une instance du système principal
    portfolioOS = new PortfolioOS();

    // Initialiser complètement le système
    await portfolioOS.init();

    // Rendre le système accessible globalement pour les tests et le debug
    window.portfolioOS = portfolioOS;

    console.log('✅ Portfolio OS démarré avec succès!');
    console.log('💡 Utilisez window.portfolioOS pour accéder au système dans la console');

  } catch (error) {
    console.error('❌ Erreur lors du démarrage du Portfolio OS:', error);

    // Afficher un message d'erreur à l'utilisateur
    const errorDiv = document.createElement('div');
    errorDiv.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: #ff4444;
      color: white;
      padding: 15px;
      border-radius: 8px;
      font-family: Arial, sans-serif;
      z-index: 10000;
      max-width: 300px;
    `;
    errorDiv.innerHTML = `
      <strong>Erreur de démarrage</strong><br>
      Impossible d'initialiser le Portfolio OS.<br>
      <small>Consultez la console pour plus de détails.</small>
    `;
    document.body.appendChild(errorDiv);

    // Supprimer le message d'erreur après 10 secondes
    setTimeout(() => {
      errorDiv.remove();
    }, 10000);
  }
});

/**
 * Gestion propre de la fermeture de la page
 */
window.addEventListener('beforeunload', () => {
  if (portfolioOS) {
    portfolioOS.beforeUnload();
  }
});

/**
 * Gestion des erreurs non capturées
 */
window.addEventListener('error', (event) => {
  console.error('Erreur JavaScript non capturée:', event.error);
  if (portfolioOS && portfolioOS.notifications) {
    portfolioOS.notifications.show({
      title: 'Erreur système',
      message: 'Une erreur inattendue s\'est produite',
      type: 'error',
      duration: 5000
    });
  }
});

/**
 * Gestion des promesses rejetées non capturées
 */
window.addEventListener('unhandledrejection', (event) => {
  console.error('Promesse rejetée non capturée:', event.reason);
  if (portfolioOS && portfolioOS.notifications) {
    portfolioOS.notifications.show({
      title: 'Erreur système',
      message: 'Une erreur asynchrone s\'est produite',
      type: 'error',
      duration: 5000
    });
  }
});

// Exporter l'instance pour pouvoir l'utiliser ailleurs si nécessaire
export default portfolioOS;

  // Close all windows and reopen them with Windows style
  reopenAllWindows();

/**
 * Switch to macOS theme
 */
function switchToMacOS() {
  // Update body class
  document.body.classList.add("macos-theme");
  document.body.classList.remove("windows-theme");

  // Update switcher buttons
  document.getElementById("macos-switch").classList.add("active");
  document.getElementById("windows-switch").classList.remove("active");

  // Show macOS desktop, dock and menubar
  document.getElementById("macos-desktop").classList.add("active");
  document.getElementById("macos-dock").style.display = "flex";
  document.getElementById("macos-menubar").style.display = "flex";

  // Hide Windows desktop and taskbar
  document.getElementById("windows-desktop").classList.remove("active");
  document.getElementById("windows-taskbar").classList.remove("active");

  // Save theme preference
  storage.saveTheme("macos");

  // Close all windows and reopen them with macOS style
  reopenAllWindows();
}

/**
 * Reopen all windows with the current theme style
 */
function reopenAllWindows() {
  // Get all open windows
  const openWindows = windowManager.getOpenWindows();

  // Close all windows
  openWindows.forEach((appId) => {
    windowManager.closeWindow(appId);
  });

  // Reopen windows
  openWindows.forEach((appId) => {
    appLauncher.launchApp(appId);
  });
}
