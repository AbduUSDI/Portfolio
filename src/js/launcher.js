/**
 * App Launcher for the Portfolio OS
 * Handles launching and managing applications
 */
class AppLauncher {
  constructor() {
    this.apps = {};

    // Register built-in apps
    this.registerApp("about", this.launchAbout.bind(this));
    this.registerApp("projects", this.launchProjects.bind(this));
    this.registerApp("cv", this.launchCV.bind(this));
    this.registerApp("calculator", this.launchCalculator.bind(this));
    this.registerApp("chrome", this.launchChrome.bind(this));

    // Bind methods
    this.setupEventListeners = this.setupEventListeners.bind(this);
    this.launchApp = this.launchApp.bind(this);
  }

  /**
   * Register an app
   * @param {string} appId - The app ID
   * @param {Function} launchFunction - Function to launch the app
   */
  registerApp(appId, launchFunction) {
    this.apps[appId] = launchFunction;
  }

  /**
   * Setup event listeners for desktop icons and dock items
   */
  setupEventListeners() {
    // Desktop icons
    const desktopIcons = document.querySelectorAll(".icon");
    desktopIcons.forEach((icon) => {
      icon.addEventListener("click", () => {
        const appId = icon.dataset.app;
        this.launchApp(appId);
      });

      // Double click for Windows
      icon.addEventListener("dblclick", () => {
        const appId = icon.dataset.app;
        this.launchApp(appId);
      });
    });

    // Dock items
    const dockItems = document.querySelectorAll(".dock-item");
    dockItems.forEach((item) => {
      item.addEventListener("click", () => {
        const appId = item.dataset.app;
        this.launchApp(appId);
      });
    });

    // Start menu items
    const startMenuItems = document.querySelectorAll(".app-item");
    startMenuItems.forEach((item) => {
      item.addEventListener("click", () => {
        const appId = item.dataset.app;
        this.launchApp(appId);

        // Close start menu
        document.getElementById("start-menu").classList.remove("active");
      });
    });
  }

  /**
   * Launch an app
   * @param {string} appId - The app ID
   */
  launchApp(appId) {
    if (this.apps[appId]) {
      this.apps[appId]();
    } else {
      console.error(`App ${appId} not found`);
    }
  }

  /**
   * Launch About app
   */
  launchAbout() {
    const contentGenerator = () => {
      const container = document.createElement("div");
      container.className = "about-container";

      // Header with avatar and name
      const header = document.createElement("div");
      header.className = "about-header";

      const avatar = document.createElement("img");
      avatar.className = "about-avatar";
      avatar.src = CONFIG.user.avatar;
      avatar.alt = CONFIG.user.name;

      const titleDiv = document.createElement("div");
      titleDiv.className = "about-title";

      const name = document.createElement("h1");
      name.textContent = CONFIG.user.name;

      const title = document.createElement("h2");
      title.textContent = CONFIG.user.title;

      titleDiv.appendChild(name);
      titleDiv.appendChild(title);

      header.appendChild(avatar);
      header.appendChild(titleDiv);

      // Bio section
      const bioSection = document.createElement("div");
      bioSection.className = "about-section";

      const bioTitle = document.createElement("h3");
      bioTitle.textContent = "À propos de moi";

      const bioText = document.createElement("p");
      bioText.textContent = CONFIG.about.bio;

      bioSection.appendChild(bioTitle);
      bioSection.appendChild(bioText);

      // Skills section
      const skillsSection = document.createElement("div");
      skillsSection.className = "about-section";

      const skillsTitle = document.createElement("h3");
      skillsTitle.textContent = "Compétences";

      const skillsContainer = document.createElement("div");
      skillsContainer.className = "skills-container";

      CONFIG.about.skills.forEach((skill) => {
        const skillTag = document.createElement("div");
        skillTag.className = "skill-tag";
        skillTag.textContent = skill;
        skillsContainer.appendChild(skillTag);
      });

      skillsSection.appendChild(skillsTitle);
      skillsSection.appendChild(skillsContainer);

      // Experience section
      const expSection = document.createElement("div");
      expSection.className = "about-section";

      const expTitle = document.createElement("h3");
      expTitle.textContent = "Expérience professionnelle";

      expSection.appendChild(expTitle);

      CONFIG.about.experience.forEach((exp) => {
        const expItem = document.createElement("div");
        expItem.className = "exp-item";

        const expItemTitle = document.createElement("h4");
        expItemTitle.textContent = `${exp.title} - ${exp.company}`;

        const expItemPeriod = document.createElement("p");
        expItemPeriod.className = "exp-period";
        expItemPeriod.textContent = exp.period;

        const expItemDesc = document.createElement("p");
        expItemDesc.textContent = exp.description;

        expItem.appendChild(expItemTitle);
        expItem.appendChild(expItemPeriod);
        expItem.appendChild(expItemDesc);

        expSection.appendChild(expItem);
      });

      // Education section
      const eduSection = document.createElement("div");
      eduSection.className = "about-section";

      const eduTitle = document.createElement("h3");
      eduTitle.textContent = "Formation";

      eduSection.appendChild(eduTitle);

      CONFIG.about.education.forEach((edu) => {
        const eduItem = document.createElement("div");
        eduItem.className = "edu-item";

        const eduItemTitle = document.createElement("h4");
        eduItemTitle.textContent = edu.degree;

        const eduItemSchool = document.createElement("p");
        eduItemSchool.textContent = `${edu.school}, ${edu.year}`;

        eduItem.appendChild(eduItemTitle);
        eduItem.appendChild(eduItemSchool);

        eduSection.appendChild(eduItem);
      });

      // Contact section
      const contactSection = document.createElement("div");
      contactSection.className = "about-section";

      const contactTitle = document.createElement("h3");
      contactTitle.textContent = "Contact";

      const contactEmail = document.createElement("p");
      contactEmail.innerHTML = `<strong>Email:</strong> ${CONFIG.user.email}`;

      const contactLinks = document.createElement("p");
      contactLinks.innerHTML = `
        <strong>GitHub:</strong> <a href="${CONFIG.user.github}" target="_blank">${CONFIG.user.github}</a><br>
        <strong>LinkedIn:</strong> <a href="${CONFIG.user.linkedin}" target="_blank">${CONFIG.user.linkedin}</a>
      `;

      contactSection.appendChild(contactTitle);
      contactSection.appendChild(contactEmail);
      contactSection.appendChild(contactLinks);

      // Add all sections to container
      container.appendChild(header);
      container.appendChild(bioSection);
      container.appendChild(skillsSection);
      container.appendChild(expSection);
      container.appendChild(eduSection);
      container.appendChild(contactSection);

      return container;
    };

    windowManager.createWindow(
      "about",
      "À propos de " + CONFIG.user.name,
      contentGenerator
    );
  }

  /**
   * Launch Projects app
   */
  launchProjects() {
    const contentGenerator = () => {
      const container = document.createElement("div");
      container.className = "projects-container";

      const projectsGrid = document.createElement("div");
      projectsGrid.className = "projects-grid";

      CONFIG.projects.forEach((project) => {
        const projectCard = document.createElement("div");
        projectCard.className = "project-card";

        const projectImage = document.createElement("img");
        projectImage.className = "project-image";
        projectImage.src = project.image;
        projectImage.alt = project.title;

        const projectInfo = document.createElement("div");
        projectInfo.className = "project-info";

        const projectTitle = document.createElement("h3");
        projectTitle.textContent = project.title;

        const projectDesc = document.createElement("p");
        projectDesc.textContent = project.description;

        const projectTags = document.createElement("div");
        projectTags.className = "project-tags";

        project.tags.forEach((tag) => {
          const projectTag = document.createElement("div");
          projectTag.className = "project-tag";
          projectTag.textContent = tag;
          projectTags.appendChild(projectTag);
        });

        const projectLinks = document.createElement("div");
        projectLinks.className = "project-links";

        if (project.github) {
          const githubLink = document.createElement("a");
          githubLink.className = "project-link";
          githubLink.href = project.github;
          githubLink.target = "_blank";
          githubLink.textContent = "GitHub";
          projectLinks.appendChild(githubLink);
        }

        if (project.demo) {
          const demoLink = document.createElement("a");
          demoLink.className = "project-link";
          demoLink.href = project.demo;
          demoLink.target = "_blank";
          demoLink.textContent = "Demo";
          projectLinks.appendChild(demoLink);
        }

        projectInfo.appendChild(projectTitle);
        projectInfo.appendChild(projectDesc);
        projectInfo.appendChild(projectTags);
        projectInfo.appendChild(projectLinks);

        projectCard.appendChild(projectImage);
        projectCard.appendChild(projectInfo);

        projectsGrid.appendChild(projectCard);
      });

      container.appendChild(projectsGrid);

      return container;
    };

    windowManager.createWindow("projects", "Mes projets", contentGenerator);
  }

  /**
   * Launch CV app
   */
  launchCV() {
    const contentGenerator = () => {
      const container = document.createElement("div");
      container.className = "cv-container";

      // Toolbar
      const toolbar = document.createElement("div");
      toolbar.className = "cv-toolbar";

      const downloadBtn = document.createElement("button");
      downloadBtn.textContent = "Télécharger";
      downloadBtn.addEventListener("click", () => {
        // Simulate download
        alert("Téléchargement du CV...");
      });

      const printBtn = document.createElement("button");
      printBtn.textContent = "Imprimer";
      printBtn.addEventListener("click", () => {
        // Simulate print
        alert("Impression du CV...");
      });

      toolbar.appendChild(downloadBtn);
      toolbar.appendChild(printBtn);

      // CV content
      const content = document.createElement("div");
      content.className = "cv-content";

      const cvPage = document.createElement("div");
      cvPage.className = "cv-page";

      // CV content is generated by the PDF viewer app
      // This is just a placeholder
      cvPage.innerHTML = `
        <h1>${CONFIG.user.name}</h1>
        <h2>${CONFIG.user.title}</h2>
        <p>Email: ${CONFIG.user.email}</p>
        <p>GitHub: ${CONFIG.user.github}</p>
        <p>LinkedIn: ${CONFIG.user.linkedin}</p>
        
        <h3>Compétences</h3>
        <p>${CONFIG.about.skills.join(", ")}</p>
        
        <h3>Expérience professionnelle</h3>
        <ul>
          ${CONFIG.about.experience
            .map(
              (exp) => `
            <li>
              <strong>${exp.title} - ${exp.company}</strong> (${exp.period})<br>
              ${exp.description}
            </li>
          `
            )
            .join("")}
        </ul>
        
        <h3>Formation</h3>
        <ul>
          ${CONFIG.about.education
            .map(
              (edu) => `
            <li>
              <strong>${edu.degree}</strong><br>
              ${edu.school}, ${edu.year}
            </li>
          `
            )
            .join("")}
        </ul>
      `;

      content.appendChild(cvPage);

      container.appendChild(toolbar);
      container.appendChild(content);

      // Initialize PDF viewer
      setTimeout(() => {
        initPDFViewer(container);
      }, 0);

      return container;
    };

    windowManager.createWindow("cv", "Mon CV", contentGenerator);
  }

  /**
   * Launch Calculator app
   */
  launchCalculator() {
    const contentGenerator = () => {
      const container = document.createElement("div");
      container.className = "calculator-container";

      // Display
      const display = document.createElement("div");
      display.className = "calculator-display";
      display.textContent = "0";

      // Buttons
      const buttons = document.createElement("div");
      buttons.className = "calculator-buttons";

      // Button layout
      const buttonLayout = [
        ["C", "±", "%", "÷"],
        ["7", "8", "9", "×"],
        ["4", "5", "6", "-"],
        ["1", "2", "3", "+"],
        ["0", ".", "="]
      ];

      // Create buttons
      buttonLayout.forEach((row) => {
        row.forEach((btn) => {
          const button = document.createElement("button");
          button.className = "calculator-button";
          button.textContent = btn;

          // Add special classes
          if (["+", "-", "×", "÷"].includes(btn)) {
            button.classList.add("operator");
          } else if (btn === "=") {
            button.classList.add("equals");
          }

          // Special width for zero
          if (btn === "0") {
            button.style.gridColumn = "span 2";
          }

          // Add to buttons container
          buttons.appendChild(button);
        });
      });

      container.appendChild(display);
      container.appendChild(buttons);

      // Initialize calculator functionality
      setTimeout(() => {
        initCalculator(container);
      }, 0);

      return container;
    };

    windowManager.createWindow("calculator", "Calculatrice", contentGenerator);
  }

  /**
   * Launch Chrome app
   */
  launchChrome() {
    const contentGenerator = () => {
      const container = document.createElement("div");
      container.className = "chrome-container";

      // Toolbar
      const toolbar = document.createElement("div");
      toolbar.className = "chrome-toolbar";

      // Tabs
      const tabs = document.createElement("div");
      tabs.className = "chrome-tabs";

      const tab = document.createElement("div");
      tab.className = "chrome-tab active";
      tab.textContent = "Nouvel onglet";

      const tabClose = document.createElement("div");
      tabClose.className = "chrome-tab-close";
      tabClose.textContent = "×";

      tab.appendChild(tabClose);
      tabs.appendChild(tab);

      // Address bar
      const addressBar = document.createElement("div");
      addressBar.className = "chrome-address-bar";

      const addressInput = document.createElement("input");
      addressInput.type = "text";
      addressInput.value = "https://www.google.com";

      addressBar.appendChild(addressInput);

      // Buttons
      const buttons = document.createElement("div");
      buttons.className = "chrome-buttons";

      const refreshButton = document.createElement("div");
      refreshButton.className = "chrome-button";
      refreshButton.textContent = "↻";

      buttons.appendChild(refreshButton);

      toolbar.appendChild(tabs);
      toolbar.appendChild(addressBar);
      toolbar.appendChild(buttons);

      // Content
      const content = document.createElement("div");
      content.className = "chrome-content";

      // Iframe for content
      const iframe = document.createElement("iframe");
      iframe.className = "chrome-iframe";
      iframe.src = "about:blank";

      content.appendChild(iframe);

      container.appendChild(toolbar);
      container.appendChild(content);

      // Initialize Chrome functionality
      setTimeout(() => {
        initChrome(container);
      }, 0);

      return container;
    };

    windowManager.createWindow("chrome", "Google Chrome", contentGenerator);
  }

  /**
   * Restore previously open apps
   */
  restoreOpenApps() {
    const storage = window.localStorage; // Use localStorage directly

    const openApps = JSON.parse(storage.getItem("openApps")) || [];

    if (openApps && openApps.length > 0) {
      openApps.forEach((appId) => {
        this.launchApp(appId);
      });
    }
  }
}

// Create a singleton instance
const appLauncher = new AppLauncher();
