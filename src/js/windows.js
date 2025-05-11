/**
 * Window Manager for the Portfolio OS
 * Handles creating, moving, resizing, and managing windows
 */

class WindowManager {
  constructor() {
    this.windows = {};
    this.activeWindow = null;
    this.zIndex = 100;
    this.windowsContainer = document.getElementById("windows-container");

    // Bind methods
    this.createWindow = this.createWindow.bind(this);
    this.closeWindow = this.closeWindow.bind(this);
    this.minimizeWindow = this.minimizeWindow.bind(this);
    this.maximizeWindow = this.maximizeWindow.bind(this);
    this.activateWindow = this.activateWindow.bind(this);
    this.startDrag = this.startDrag.bind(this);
    this.startResize = this.startResize.bind(this);

    // Initialize event listeners
    document.addEventListener("mousedown", (e) => {
      // Check if clicked outside any window to deactivate all
      if (!e.target.closest(".window")) {
        this.deactivateAllWindows();
      }
    });
  }

  /**
   * Create a new window
   * @param {string} appId - The app ID
   * @param {string} title - The window title
   * @param {Function} contentGenerator - Function that returns the window content
   * @returns {HTMLElement} The created window element
   */
  createWindow(appId, title, contentGenerator) {
    // Check if window already exists
    if (this.windows[appId]) {
      this.activateWindow(appId);
      return this.windows[appId].element;
    }

    // Get the current OS theme
    const currentTheme = document.body.classList.contains("macos-theme")
      ? "macos"
      : "windows";

    // Get the appropriate window template
    const templateId =
      currentTheme === "macos" ? "macos-window-template" : "window-template";
    const template = document.getElementById(templateId);
    const windowElement = template.content
      .cloneNode(true)
      .querySelector(".window");

    // Set window properties
    windowElement.dataset.app = appId;
    windowElement.querySelector(".window-title").textContent = title;

    // Generate content
    const contentElement = windowElement.querySelector(".window-content");
    contentElement.innerHTML = "";
    contentElement.appendChild(contentGenerator());

    // Add to DOM
    this.windowsContainer.appendChild(windowElement);

    // Set initial position and size
    let position = CONFIG.defaultWindowPositions[appId] || {
      top: 50,
      left: 50
    };
    let size = CONFIG.defaultWindowSizes[appId] || { width: 600, height: 400 };

    // Try to load saved position and size
    const savedState = storage.loadWindowState(appId);
    if (savedState) {
      position = savedState.position;
      size = savedState.size;
    }

    windowElement.style.top = `${position.top}px`;
    windowElement.style.left = `${position.left}px`;
    windowElement.style.width = `${size.width}px`;
    windowElement.style.height = `${size.height}px`;

    // Setup event listeners
    this.setupWindowEvents(windowElement, appId);

    // Store window reference
    this.windows[appId] = {
      element: windowElement,
      title,
      isMinimized: false,
      isMaximized: false,
      position: { ...position },
      size: { ...size },
      originalPosition: { ...position },
      originalSize: { ...size }
    };

    // Activate the window
    this.activateWindow(appId);

    // Add to taskbar or dock
    if (currentTheme === "windows") {
      this.addToTaskbar(appId);
    } else {
      this.activateDockItem(appId);
    }

    return windowElement;
  }

  /**
   * Setup event listeners for a window
   * @param {HTMLElement} windowElement - The window element
   * @param {string} appId - The app ID
   */
  setupWindowEvents(windowElement, appId) {
    // Window header for dragging
    const header = windowElement.querySelector(".window-header");
    header.addEventListener("mousedown", (e) => {
      if (e.target === header || e.target.classList.contains("window-title")) {
        this.startDrag(e, windowElement, appId);
      }
    });

    // Window controls
    const closeBtn = windowElement.querySelector(".window-control.close");
    closeBtn.addEventListener("click", () => this.closeWindow(appId));

    const minimizeBtn = windowElement.querySelector(".window-control.minimize");
    minimizeBtn.addEventListener("click", () => this.minimizeWindow(appId));

    const maximizeBtn = windowElement.querySelector(".window-control.maximize");
    maximizeBtn.addEventListener("click", () => this.maximizeWindow(appId));

    // Resize handle
    const resizeHandle = windowElement.querySelector(".window-resize-handle");
    resizeHandle.addEventListener("mousedown", (e) =>
      this.startResize(e, windowElement, appId)
    );

    // Activate on click
    windowElement.addEventListener("mousedown", () =>
      this.activateWindow(appId)
    );
  }

  /**
   * Start dragging a window
   * @param {MouseEvent} e - The mouse event
   * @param {HTMLElement} windowElement - The window element
   * @param {string} appId - The app ID
   */
  startDrag(e, windowElement, appId) {
    e.preventDefault();

    // Activate the window
    this.activateWindow(appId);

    // If window is maximized, restore it first
    if (this.windows[appId].isMaximized) {
      this.maximizeWindow(appId);
      return;
    }

    const startX = e.clientX;
    const startY = e.clientY;
    const startLeft = Number.parseInt(windowElement.style.left);
    const startTop = Number.parseInt(windowElement.style.top);

    const moveHandler = (moveEvent) => {
      const dx = moveEvent.clientX - startX;
      const dy = moveEvent.clientY - startY;

      windowElement.style.left = `${startLeft + dx}px`;
      windowElement.style.top = `${startTop + dy}px`;

      // Update position in state
      this.windows[appId].position = {
        left: startLeft + dx,
        top: startTop + dy
      };
    };

    const upHandler = () => {
      document.removeEventListener("mousemove", moveHandler);
      document.removeEventListener("mouseup", upHandler);

      // Save window state
      this.saveWindowState(appId);
    };

    document.addEventListener("mousemove", moveHandler);
    document.addEventListener("mouseup", upHandler);
  }

  /**
   * Start resizing a window
   * @param {MouseEvent} e - The mouse event
   * @param {HTMLElement} windowElement - The window element
   * @param {string} appId - The app ID
   */
  startResize(e, windowElement, appId) {
    e.preventDefault();

    // Activate the window
    this.activateWindow(appId);

    const startX = e.clientX;
    const startY = e.clientY;
    const startWidth = Number.parseInt(windowElement.style.width);
    const startHeight = Number.parseInt(windowElement.style.height);

    const moveHandler = (moveEvent) => {
      const dx = moveEvent.clientX - startX;
      const dy = moveEvent.clientY - startY;

      const newWidth = Math.max(300, startWidth + dx);
      const newHeight = Math.max(200, startHeight + dy);

      windowElement.style.width = `${newWidth}px`;
      windowElement.style.height = `${newHeight}px`;

      // Update size in state
      this.windows[appId].size = {
        width: newWidth,
        height: newHeight
      };
    };

    const upHandler = () => {
      document.removeEventListener("mousemove", moveHandler);
      document.removeEventListener("mouseup", upHandler);

      // Save window state
      this.saveWindowState(appId);
    };

    document.addEventListener("mousemove", moveHandler);
    document.addEventListener("mouseup", upHandler);
  }

  /**
   * Close a window
   * @param {string} appId - The app ID
   */
  closeWindow(appId) {
    if (!this.windows[appId]) return;

    // Remove from DOM
    this.windowsContainer.removeChild(this.windows[appId].element);

    // Remove from taskbar or dock
    const currentTheme = document.body.classList.contains("macos-theme")
      ? "macos"
      : "windows";
    if (currentTheme === "windows") {
      this.removeFromTaskbar(appId);
    } else {
      this.deactivateDockItem(appId);
    }

    // Delete reference
    delete this.windows[appId];

    // Update active window
    if (this.activeWindow === appId) {
      this.activeWindow = null;

      // Find the topmost window and activate it
      let highestZ = 0;
      let topmostWindow = null;

      for (const id in this.windows) {
        const zIndex = Number.parseInt(
          this.windows[id].element.style.zIndex || 0
        );
        if (zIndex > highestZ) {
          highestZ = zIndex;
          topmostWindow = id;
        }
      }

      if (topmostWindow) {
        this.activateWindow(topmostWindow);
      }
    }

    // Update storage
    storage.saveOpenApps(Object.keys(this.windows));
  }

  /**
   * Minimize a window
   * @param {string} appId - The app ID
   */
  minimizeWindow(appId) {
    if (!this.windows[appId]) return;

    const windowElement = this.windows[appId].element;

    if (!this.windows[appId].isMinimized) {
      // Minimize
      windowElement.style.display = "none";
      this.windows[appId].isMinimized = true;

      // Deactivate
      if (this.activeWindow === appId) {
        this.activeWindow = null;
      }
    } else {
      // Restore
      windowElement.style.display = "flex";
      this.windows[appId].isMinimized = false;
      this.activateWindow(appId);
    }
  }

  /**
   * Maximize or restore a window
   * @param {string} appId - The app ID
   */
  maximizeWindow(appId) {
    if (!this.windows[appId]) return;

    const windowElement = this.windows[appId].element;
    const windowState = this.windows[appId];

    if (!windowState.isMaximized) {
      // Save current position and size
      windowState.originalPosition = { ...windowState.position };
      windowState.originalSize = { ...windowState.size };

      // Maximize
      windowElement.style.top = "0";
      windowElement.style.left = "0";

      // Adjust for macOS menubar or Windows taskbar
      const currentTheme = document.body.classList.contains("macos-theme")
        ? "macos"
        : "windows";

      if (currentTheme === "macos") {
        windowElement.style.top = "25px"; // Account for menubar height
        windowElement.style.height = `calc(100vh - 25px)`;
      } else {
        windowElement.style.height = `calc(100vh - 48px)`; // Account for taskbar height
      }

      windowElement.style.width = "100vw";

      windowState.isMaximized = true;
    } else {
      // Restore
      windowElement.style.top = `${windowState.originalPosition.top}px`;
      windowElement.style.left = `${windowState.originalPosition.left}px`;
      windowElement.style.width = `${windowState.originalSize.width}px`;
      windowElement.style.height = `${windowState.originalSize.height}px`;

      // Update current position and size
      windowState.position = { ...windowState.originalPosition };
      windowState.size = { ...windowState.originalSize };

      windowState.isMaximized = false;
    }

    // Save window state
    this.saveWindowState(appId);
  }

  /**
   * Activate a window (bring to front)
   * @param {string} appId - The app ID
   */
  activateWindow(appId) {
    if (!this.windows[appId]) return;

    // Deactivate all windows
    this.deactivateAllWindows();

    // Activate this window
    const windowElement = this.windows[appId].element;
    windowElement.classList.add("active");
    windowElement.style.zIndex = ++this.zIndex;

    this.activeWindow = appId;

    // If minimized, restore
    if (this.windows[appId].isMinimized) {
      windowElement.style.display = "flex";
      this.windows[appId].isMinimized = false;
    }

    // Update taskbar or dock
    const currentTheme = document.body.classList.contains("macos-theme")
      ? "macos"
      : "windows";
    if (currentTheme === "windows") {
      this.activateTaskbarApp(appId);
    } else {
      this.activateDockItem(appId);
    }
  }

  /**
   * Deactivate all windows
   */
  deactivateAllWindows() {
    for (const id in this.windows) {
      this.windows[id].element.classList.remove("active");
    }

    // Deactivate taskbar apps
    const taskbarApps = document.querySelectorAll(".taskbar-app");
    taskbarApps.forEach((app) => app.classList.remove("active"));

    // Deactivate dock items
    const dockItems = document.querySelectorAll(".dock-item");
    dockItems.forEach((item) => item.classList.remove("active"));
  }

  /**
   * Add app to Windows taskbar
   * @param {string} appId - The app ID
   */
  addToTaskbar(appId) {
    const taskbarApps = document.querySelector(".taskbar-apps");

    // Check if already in taskbar
    if (document.querySelector(`.taskbar-app[data-app="${appId}"]`)) {
      this.activateTaskbarApp(appId);
      return;
    }

    // Create taskbar app
    const taskbarApp = document.createElement("div");
    taskbarApp.className = "taskbar-app";
    taskbarApp.dataset.app = appId;

    // Add icon
    const icon = document.createElement("img");
    icon.src = `public/assets/windows/${appId}.png`;
    icon.alt = appId;
    taskbarApp.appendChild(icon);

    // Add click event
    taskbarApp.addEventListener("click", () => {
      if (this.windows[appId]) {
        if (this.windows[appId].isMinimized || this.activeWindow !== appId) {
          this.activateWindow(appId);
        } else {
          this.minimizeWindow(appId);
        }
      }
    });

    // Add to taskbar
    taskbarApps.appendChild(taskbarApp);

    // Activate
    this.activateTaskbarApp(appId);
  }

  /**
   * Remove app from Windows taskbar
   * @param {string} appId - The app ID
   */
  removeFromTaskbar(appId) {
    const taskbarApp = document.querySelector(
      `.taskbar-app[data-app="${appId}"]`
    );
    if (taskbarApp) {
      taskbarApp.remove();
    }
  }

  /**
   * Activate app in Windows taskbar
   * @param {string} appId - The app ID
   */
  activateTaskbarApp(appId) {
    // Deactivate all
    const taskbarApps = document.querySelectorAll(".taskbar-app");
    taskbarApps.forEach((app) => app.classList.remove("active"));

    // Activate this one
    const taskbarApp = document.querySelector(
      `.taskbar-app[data-app="${appId}"]`
    );
    if (taskbarApp) {
      taskbarApp.classList.add("active");
    }
  }

  /**
   * Activate item in macOS dock
   * @param {string} appId - The app ID
   */
  activateDockItem(appId) {
    // Deactivate all
    const dockItems = document.querySelectorAll(".dock-item");
    dockItems.forEach((item) => item.classList.remove("active"));

    // Activate this one
    const dockItem = document.querySelector(`.dock-item[data-app="${appId}"]`);
    if (dockItem) {
      dockItem.classList.add("active");
    }
  }

  /**
   * Deactivate item in macOS dock
   * @param {string} appId - The app ID
   */
  deactivateDockItem(appId) {
    const dockItem = document.querySelector(`.dock-item[data-app="${appId}"]`);
    if (dockItem) {
      dockItem.classList.remove("active");
    }
  }

  /**
   * Save window state to storage
   * @param {string} appId - The app ID
   */
  saveWindowState(appId) {
    if (!this.windows[appId]) return;

    const windowState = this.windows[appId];
    storage.saveWindowState(appId, windowState.position, windowState.size);
  }

  /**
   * Get all open windows
   * @returns {Array} Array of app IDs
   */
  getOpenWindows() {
    return Object.keys(this.windows);
  }
}

// Create a singleton instance
const windowManager = new WindowManager();
