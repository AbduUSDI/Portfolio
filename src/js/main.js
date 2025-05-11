/**
 * Main JavaScript for the Portfolio OS
 * Initializes the OS and handles global events
 */

document.addEventListener("DOMContentLoaded", () => {
  // Initialize storage
  const storedTheme = storage.loadTheme();

  // Set initial theme
  if (storedTheme === "macos") {
    document.body.classList.remove("windows-theme");
    document.body.classList.add("macos-theme");
  } else {
    document.body.classList.add("windows-theme");
    document.body.classList.remove("macos-theme");
  }

  // Initialize clock
  updateClock();
  setInterval(updateClock, 1000);

  // Initialize app launcher
  appLauncher.setupEventListeners();

  // Setup OS switcher
  const windowsSwitch = document.getElementById("windows-switch");
  const macosSwitch = document.getElementById("macos-switch");

  windowsSwitch.addEventListener("click", () => {
    switchToWindows();
  });

  macosSwitch.addEventListener("click", () => {
    switchToMacOS();
  });

  // Setup Windows start menu
  const startBtn = document.getElementById("windows-start-btn");
  const startMenu = document.getElementById("start-menu");

  startBtn.addEventListener("click", () => {
    startMenu.classList.toggle("active");
  });

  // Close start menu when clicking outside
  document.addEventListener("click", (e) => {
    if (
      !e.target.closest("#start-menu") &&
      !e.target.closest("#windows-start-btn")
    ) {
      startMenu.classList.remove("active");
    }
  });

  // Setup macOS Apple menu
  const appleMenu = document.querySelector(".apple-menu");
  const appleMenuDropdown = document.getElementById("apple-menu");

  appleMenu.addEventListener("click", () => {
    appleMenuDropdown.classList.toggle("active");
  });

  // Close Apple menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!e.target.closest("#apple-menu") && !e.target.closest(".apple-menu")) {
      appleMenuDropdown.classList.remove("active");
    }
  });

  // Restore open apps
  appLauncher.restoreOpenApps();
});

/**
 * Update the clock display
 */
function updateClock() {
  const now = new Date();

  // Format time
  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");

  // Windows clock
  const windowsClock = document.getElementById("windows-clock");
  if (windowsClock) {
    windowsClock.textContent = `${hours}:${minutes}`;
  }

  // macOS clock
  const macosClock = document.getElementById("macos-clock");
  if (macosClock) {
    macosClock.textContent = `${hours}:${minutes}`;
  }
}

/**
 * Switch to Windows theme
 */
function switchToWindows() {
  // Update body class
  document.body.classList.add("windows-theme");
  document.body.classList.remove("macos-theme");

  // Update switcher buttons
  document.getElementById("windows-switch").classList.add("active");
  document.getElementById("macos-switch").classList.remove("active");

  // Show Windows desktop and taskbar
  document.getElementById("windows-desktop").classList.add("active");
  document.getElementById("windows-taskbar").classList.add("active");

  // Hide macOS desktop, dock and menubar
  document.getElementById("macos-desktop").classList.remove("active");
  document.getElementById("macos-dock").style.display = "none";
  document.getElementById("macos-menubar").style.display = "none";

  // Save theme preference
  storage.saveTheme("windows");

  // Close all windows and reopen them with Windows style
  reopenAllWindows();
}

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
