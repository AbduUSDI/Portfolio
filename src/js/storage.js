/**
 * Storage utility for the Portfolio OS
 * Handles saving and loading user preferences and window states
 */
class Storage {
  constructor() {
    this.storageKey = "portfolio-os-state";
  }

  /**
   * Save state to localStorage
   * @param {Object} state - The state to save
   */
  saveState(state) {
    try {
      const serializedState = JSON.stringify(state);
      localStorage.setItem(this.storageKey, serializedState);
    } catch (error) {
      console.error("Error saving state to localStorage:", error);
    }
  }

  /**
   * Load state from localStorage
   * @returns {Object|null} The loaded state or null if not found
   */
  loadState() {
    try {
      const serializedState = localStorage.getItem(this.storageKey);
      if (serializedState === null) {
        return null;
      }
      return JSON.parse(serializedState);
    } catch (error) {
      console.error("Error loading state from localStorage:", error);
      return null;
    }
  }

  /**
   * Save window position and size
   * @param {string} appId - The app ID
   * @param {Object} position - The window position {top, left}
   * @param {Object} size - The window size {width, height}
   */
  saveWindowState(appId, position, size) {
    const state = this.loadState() || {};
    const windows = state.windows || {};

    windows[appId] = {
      position,
      size,
      isOpen: true
    };

    state.windows = windows;
    this.saveState(state);
  }

  /**
   * Load window position and size
   * @param {string} appId - The app ID
   * @returns {Object|null} The window state or null if not found
   */
  loadWindowState(appId) {
    const state = this.loadState();
    if (!state || !state.windows || !state.windows[appId]) {
      return null;
    }
    return state.windows[appId];
  }

  /**
   * Save OS theme preference
   * @param {string} theme - The theme name ('windows' or 'macos')
   */
  saveTheme(theme) {
    const state = this.loadState() || {};
    state.theme = theme;
    this.saveState(state);
  }

  /**
   * Load OS theme preference
   * @returns {string} The theme name ('windows' or 'macos')
   */
  loadTheme() {
    const state = this.loadState();
    return state && state.theme ? state.theme : "windows";
  }

  /**
   * Save open apps
   * @param {Array} apps - Array of open app IDs
   */
  saveOpenApps(apps) {
    const state = this.loadState() || {};
    state.openApps = apps;
    this.saveState(state);
  }

  /**
   * Load open apps
   * @returns {Array} Array of open app IDs
   */
  loadOpenApps() {
    const state = this.loadState();
    return state && state.openApps ? state.openApps : [];
  }

  /**
   * Clear all stored data
   */
  clearAll() {
    localStorage.removeItem(this.storageKey);
  }
}

// Create a singleton instance
const storage = new Storage();
