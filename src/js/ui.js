/**
 * UI management for Portfolio OS
 * Handles UI elements, themes, and interactions
 */

import { CONFIG } from "./config.js"
import { STORAGE } from "./storage.js"
import { WINDOWS } from "./windows.js"
import { LAUNCHER } from "./launcher.js"

const UI = {
  /**
   * Initialize UI elements and event listeners
   */
  init: function () {
    this.initTheme()
    this.initClock()
    this.initStartMenu()
    this.initContextMenu()
    this.initDesktopIcons()
    this.initThemeSwitcher()
    this.initDock()
    this.initSpotlight()

    // Window resize event
    window.addEventListener("resize", () => {
      this.adjustUIForScreenSize()
    })

    // Initial UI adjustment
    this.adjustUIForScreenSize()
  },

  /**
   * Initialize theme based on saved preference
   */
  initTheme: function () {
    const savedTheme = STORAGE.loadTheme()
    this.setTheme(savedTheme)
  },

  /**
   * Set theme (windows or macos)
   * @param {string} theme - The theme to set
   */
  setTheme: function (theme) {
    if (theme === "windows") {
      document.body.classList.remove("macos-theme")
      document.body.classList.add("windows-theme")
      document.body.style.backgroundImage = `url('${CONFIG.windows.wallpaper}')`
      document.documentElement.style.setProperty("--primary-color", CONFIG.windows.accentColor)

      // Show Windows UI, hide macOS UI
      document.getElementById("windows-ui").style.display = "block"
      document.getElementById("macos-ui").style.display = "none"

      // Update theme switcher
      const windowsOption = document.querySelector('.theme-option[data-theme="windows"]')
      const macosOption = document.querySelector('.theme-option[data-theme="macos"]')
      windowsOption.classList.add("active")
      macosOption.classList.remove("active")
    } else if (theme === "macos") {
      document.body.classList.remove("windows-theme")
      document.body.classList.add("macos-theme")
      document.body.style.backgroundImage = `url('${CONFIG.macos.wallpaper}')`
      document.documentElement.style.setProperty("--primary-color", CONFIG.macos.accentColor)

      // Show macOS UI, hide Windows UI
      document.getElementById("windows-ui").style.display = "none"
      document.getElementById("macos-ui").style.display = "block"

      // Update theme switcher
      const windowsOption = document.querySelector('.theme-option[data-theme="windows"]')
      const macosOption = document.querySelector('.theme-option[data-theme="macos"]')
      windowsOption.classList.remove("active")
      macosOption.classList.add("active")

      // Initialize dock if it's not already initialized
      this.initDock()
    }

    // Update windows for new theme
    WINDOWS.updateWindowsForTheme()

    // Save theme preference
    STORAGE.saveTheme(theme)
  },

  /**
   * Initialize clock display
   */
  initClock: () => {
    const updateClock = () => {
      const now = new Date()
      const timeString = now.toLocaleTimeString("fr-FR", { hour: "2-digit", minute: "2-digit" })

      // Update Windows taskbar clock
      const winClock = document.getElementById("clock")
      if (winClock) {
        winClock.textContent = timeString
      }

      // Update macOS menu bar clock
      const macClock = document.getElementById("menuBarClock")
      if (macClock) {
        macClock.textContent = timeString
      }
    }

    // Update clock immediately and then every second
    updateClock()
    setInterval(updateClock, 1000)
  },

  /**
   * Initialize Windows start menu
   */
  initStartMenu: () => {
    const startButton = document.getElementById("startButton")
    const startMenu = document.getElementById("startMenu")

    if (startButton && startMenu) {
      // Toggle start menu on button click
      startButton.addEventListener("click", (e) => {
        e.stopPropagation()
        startMenu.classList.toggle("active")
      })

      // Close start menu when clicking elsewhere
      document.addEventListener("click", (e) => {
        if (!startMenu.contains(e.target) && !startButton.contains(e.target)) {
          startMenu.classList.remove("active")
        }
      })

      // Add click events to start menu items
      const startMenuItems = startMenu.querySelectorAll(".start-menu-item")
      startMenuItems.forEach((item) => {
        item.addEventListener("click", () => {
          const app = item.dataset.app
          if (app) {
            LAUNCHER.launchApp(app)
            startMenu.classList.remove("active")
          }
        })
      })
    }
  },

  /**
   * Initialize desktop context menu
   */
  initContextMenu: function () {
    const desktop = document.getElementById("desktop")
    const contextMenu = document.getElementById("contextMenu")

    if (desktop && contextMenu) {
      // Show context menu on right-click
      desktop.addEventListener("contextmenu", (e) => {
        e.preventDefault()

        // Position menu at cursor
        contextMenu.style.display = "block"

        // Adjust position to keep menu in viewport
        let leftPos = e.clientX
        let topPos = e.clientY

        if (leftPos + contextMenu.offsetWidth > window.innerWidth) {
          leftPos = window.innerWidth - contextMenu.offsetWidth
        }

        if (topPos + contextMenu.offsetHeight > window.innerHeight) {
          topPos = window.innerHeight - contextMenu.offsetHeight
        }

        contextMenu.style.left = `${leftPos}px`
        contextMenu.style.top = `${topPos}px`
      })

      // Hide context menu on click
      document.addEventListener("click", () => {
        contextMenu.style.display = "none"
      })

      // Add click events to context menu items
      const contextMenuItems = contextMenu.querySelectorAll(".context-menu-item")
      contextMenuItems.forEach((item) => {
        item.addEventListener("click", () => {
          const action = item.dataset.action

          switch (action) {
            case "refresh":
              window.location.reload()
              break
            case "theme":
              const currentTheme = document.body.classList.contains("macos-theme") ? "macos" : "windows"
              const newTheme = currentTheme === "windows" ? "macos" : "windows"
              this.setTheme(newTheme)
              break
            // Add more actions as needed
          }
        })
      })
    }
  },

  /**
   * Initialize desktop icons
   */
  initDesktopIcons: () => {
    const desktopIcons = document.querySelectorAll(".desktop-icon")

    desktopIcons.forEach((icon) => {
      // Launch app on double-click
      icon.addEventListener("dblclick", () => {
        const app = icon.dataset.app
        if (app) {
          LAUNCHER.launchApp(app)
        }
      })

      // Add selection effect on click
      icon.addEventListener("click", (e) => {
        // Deselect all icons
        desktopIcons.forEach((i) => i.classList.remove("selected"))

        // Select clicked icon
        icon.classList.add("selected")

        // Prevent event from reaching desktop
        e.stopPropagation()
      })
    })

    // Deselect all icons when clicking on desktop
    document.getElementById("desktop").addEventListener("click", () => {
      desktopIcons.forEach((icon) => icon.classList.remove("selected"))
    })
  },

  /**
   * Initialize theme switcher
   */
  initThemeSwitcher: function () {
    const themeOptions = document.querySelectorAll(".theme-option")

    themeOptions.forEach((option) => {
      option.addEventListener("click", () => {
        const theme = option.dataset.theme
        if (theme) {
          this.setTheme(theme)
        }
      })
    })
  },

  /**
   * Initialize macOS dock
   */
  initDock: () => {
    const dock = document.getElementById("dockItems")

    if (dock) {
      // Clear existing dock items
      dock.innerHTML = ""

      // Add dock items from config
      CONFIG.macos.dockApps.forEach((app) => {
        const dockItem = document.createElement("div")
        dockItem.className = "dock-item"
        dockItem.dataset.app = app.app
        dockItem.innerHTML = `<img src="${app.icon}" alt="${app.name}">`

        // Launch app on click
        dockItem.addEventListener("click", () => {
          LAUNCHER.launchApp(app.app)
        })

        dock.appendChild(dockItem)
      })

      // Add dock hover effect
      const dockItems = dock.querySelectorAll(".dock-item")
      dockItems.forEach((item) => {
        item.addEventListener("mouseover", () => {
          item.style.transform = "scale(1.2)"
        })

        item.addEventListener("mouseout", () => {
          item.style.transform = "scale(1)"
        })
      })
    }
  },

  /**
   * Initialize macOS Spotlight search
   */
  initSpotlight: () => {
    const spotlight = document.getElementById("spotlight")
    const appleMenu = document.getElementById("appleMenu")
    const searchIcon = document.querySelector('.menu-bar-icon img[alt="Search"]')

    if (spotlight && (appleMenu || searchIcon)) {
      // Toggle spotlight on search icon click
      if (searchIcon) {
        searchIcon.parentElement.addEventListener("click", () => {
          spotlight.classList.toggle("active")
          if (spotlight.classList.contains("active")) {
            spotlight.querySelector("input").focus()
          }
        })
      }

      // Close spotlight when clicking outside
      document.addEventListener("click", (e) => {
        if (
          spotlight.classList.contains("active") &&
          !spotlight.contains(e.target) &&
          (!searchIcon || !searchIcon.parentElement.contains(e.target))
        ) {
          spotlight.classList.remove("active")
        }
      })

      // Spotlight search functionality
      const spotlightInput = spotlight.querySelector("input")
      const spotlightResults = spotlight.querySelector(".spotlight-results")

      if (spotlightInput && spotlightResults) {
        spotlightInput.addEventListener("input", () => {
          const query = spotlightInput.value.toLowerCase()

          // Clear previous results
          spotlightResults.innerHTML = ""

          if (query.length > 0) {
            // Search through available apps
            const allApps = [...CONFIG.windows.startMenuApps, ...CONFIG.macos.dockApps]

            // Remove duplicates
            const uniqueApps = allApps.filter((app, index, self) => index === self.findIndex((a) => a.app === app.app))

            // Filter apps by query
            const matchingApps = uniqueApps.filter((app) => app.name.toLowerCase().includes(query))

            // Display results
            matchingApps.forEach((app) => {
              const resultItem = document.createElement("div")
              resultItem.className = "spotlight-result-item"
              resultItem.innerHTML = `
                <img src="${app.icon}" alt="${app.name}">
                <span>${app.name}</span>
              `

              // Launch app on click
              resultItem.addEventListener("click", () => {
                LAUNCHER.launchApp(app.app)
                spotlight.classList.remove("active")
              })

              spotlightResults.appendChild(resultItem)
            })
          }
        })

        // Handle keyboard shortcuts
        document.addEventListener("keydown", (e) => {
          // Command+Space (macOS) or Windows+S (Windows)
          if ((e.metaKey && e.key === " ") || (e.key === "s" && e.ctrlKey)) {
            e.preventDefault()
            spotlight.classList.toggle("active")
            if (spotlight.classList.contains("active")) {
              spotlightInput.focus()
            }
          }

          // Escape to close
          if (e.key === "Escape" && spotlight.classList.contains("active")) {
            spotlight.classList.remove("active")
          }
        })
      }
    }
  },

  /**
   * Adjust UI elements for current screen size
   */
  adjustUIForScreenSize: () => {
    const isMobile = window.innerWidth < 768

    // Adjust desktop icons
    const desktopIcons = document.querySelector(".desktop-icons")
    if (desktopIcons) {
      if (isMobile) {
        desktopIcons.style.gridTemplateColumns = "repeat(4, 1fr)"
      } else {
        desktopIcons.style.gridTemplateColumns = "repeat(auto-fill, 90px)"
      }
    }

    // Adjust dock size
    const dock = document.getElementById("dock")
    if (dock) {
      if (isMobile) {
        dock.style.width = "90%"
      } else {
        dock.style.width = "auto"
      }
    }

    // Adjust start menu
    const startMenu = document.getElementById("startMenu")
    if (startMenu) {
      if (isMobile) {
        startMenu.style.width = "90%"
        startMenu.style.left = "5%"
      } else {
        startMenu.style.width = "400px"
        startMenu.style.left = "0"
      }
    }
  },
}

export { UI }
