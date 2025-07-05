/**
 * App Launcher for the Portfolio OS
 * Handles launching and managing applications
 */

/* NE MET PLUS JAMAIS D'IMPORT */

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

        const eduItemDesc = document.createElement("p");
        eduItemDesc.textContent = edu.description;
        eduItemDesc.style.marginTop = "5px";
        eduItemDesc.style.fontSize = "14px";
        eduItemDesc.style.color = "#666";

        eduItem.appendChild(eduItemTitle);
        eduItem.appendChild(eduItemSchool);
        eduItem.appendChild(eduItemDesc);

        eduSection.appendChild(eduItem);
      });

      // Social Media section
      const socialSection = document.createElement("div");
      socialSection.className = "about-section";

      const socialTitle = document.createElement("h3");
      socialTitle.textContent = "Réseaux sociaux";

      const socialLinks = document.createElement("div");
      socialLinks.className = "social-links";
      socialLinks.style.display = "flex";
      socialLinks.style.gap = "15px";
      socialLinks.style.marginTop = "10px";

      const socialMedia = CONFIG.about.socialMedia;

      if (socialMedia.github) {
        const githubLink = document.createElement("a");
        githubLink.href = socialMedia.github;
        githubLink.target = "_blank";
        githubLink.style.textDecoration = "none";
        githubLink.style.color = "#333";
        githubLink.style.display = "flex";
        githubLink.style.alignItems = "center";
        githubLink.style.gap = "5px";

        const githubIcon = document.createElement("img");
        githubIcon.src = "assets/icons/github.png";
        githubIcon.alt = "GitHub";
        githubIcon.style.width = "24px";
        githubIcon.style.height = "24px";

        const githubText = document.createElement("span");
        githubText.textContent = "GitHub";

        githubLink.appendChild(githubIcon);
        githubLink.appendChild(githubText);
        socialLinks.appendChild(githubLink);
      }

      if (socialMedia.linkedin) {
        const linkedinLink = document.createElement("a");
        linkedinLink.href = socialMedia.linkedin;
        linkedinLink.target = "_blank";
        linkedinLink.style.textDecoration = "none";
        linkedinLink.style.color = "#0077b5";
        linkedinLink.style.display = "flex";
        linkedinLink.style.alignItems = "center";
        linkedinLink.style.gap = "5px";

        const linkedinIcon = document.createElement("img");
        linkedinIcon.src = "assets/icons/linkedin.png";
        linkedinIcon.alt = "LinkedIn";
        linkedinIcon.style.width = "24px";
        linkedinIcon.style.height = "24px";

        const linkedinText = document.createElement("span");
        linkedinText.textContent = "LinkedIn";

        linkedinLink.appendChild(linkedinIcon);
        linkedinLink.appendChild(linkedinText);
        socialLinks.appendChild(linkedinLink);
      }

      socialSection.appendChild(socialTitle);
      socialSection.appendChild(socialLinks);

      // Contact section
      const contactSection = document.createElement("div");
      contactSection.className = "about-section";

      const contactTitle = document.createElement("h3");
      contactTitle.textContent = "Contact";

      const contactEmail = document.createElement("p");
      contactEmail.innerHTML = `<strong>Email:</strong> ${CONFIG.user.email}`;

      const contactPhone = document.createElement("p");
      contactPhone.innerHTML = `<strong>Téléphone:</strong> ${CONFIG.user.phone}`;

      contactSection.appendChild(contactTitle);
      contactSection.appendChild(contactEmail);
      contactSection.appendChild(contactPhone);

      // Add all sections to container
      container.appendChild(header);
      container.appendChild(bioSection);
      container.appendChild(skillsSection);
      container.appendChild(expSection);
      container.appendChild(eduSection);
      container.appendChild(socialSection);
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

      // CV content with updated information
      cvPage.innerHTML = `
        <div style="text-align: center; margin-bottom: 20px;">
          <h1 style="margin-bottom: 5px;">${CONFIG.user.name}</h1>
          <h2 style="font-weight: normal; color: #666; margin-bottom: 10px;">${
            CONFIG.user.title
          }</h2>
          <p>Email: ${CONFIG.user.email} | Téléphone: ${CONFIG.user.phone}</p>
          <p><a href="${
            CONFIG.about.socialMedia.github
          }" target="_blank">GitHub</a> | <a href="${
        CONFIG.about.socialMedia.linkedin
      }" target="_blank">LinkedIn</a></p>
        </div>

        <div style="margin-bottom: 20px;">
          <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">À propos de moi</h3>
          <p>${CONFIG.about.bio}</p>
        </div>

        <div style="margin-bottom: 20px;">
          <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">Compétences</h3>
          <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
            ${CONFIG.about.skills
              .map(
                (skill) =>
                  `<span style="background-color: #f0f0f0; padding: 5px 10px; border-radius: 15px; font-size: 14px;">${skill}</span>`
              )
              .join("")}
          </div>
        </div>

        <div style="margin-bottom: 20px;">
          <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">Expérience professionnelle</h3>
          <ul style="list-style-type: none; padding-left: 0;">
            ${CONFIG.about.experience
              .map(
                (exp) => `
              <li style="margin-bottom: 15px;">
                <h4 style="margin-bottom: 5px;">${exp.title}</h4>
                <p style="margin: 0; color: #666;"><strong>${exp.company}</strong> | ${exp.period}</p>
                <p style="margin-top: 5px;">${exp.description}</p>
              </li>
            `
              )
              .join("")}
          </ul>
        </div>

        <div style="margin-bottom: 20px;">
          <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">Formation</h3>
          <ul style="list-style-type: none; padding-left: 0;">
            ${CONFIG.about.education
              .map(
                (edu) => `
              <li style="margin-bottom: 15px;">
                <h4 style="margin-bottom: 5px;">${edu.degree}</h4>
                <p style="margin: 0; color: #666;"><strong>${edu.school}</strong> | ${edu.year}</p>
                <p style="margin-top: 5px;">${edu.description}</p>
              </li>
            `
              )
              .join("")}
          </ul>
        </div>

        <div>
          <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px;">Projets</h3>
          <ul>
            ${CONFIG.projects
              .slice(0, 3)
              .map(
                (project) => `
              <li>
                <strong>${project.title}</strong> - ${project.description}
              </li>
            `
              )
              .join("")}
          </ul>
          <p>Pour voir tous mes projets, visitez mon portfolio ou mon GitHub.</p>
        </div>
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
    const openApps = storage.loadOpenApps();

    if (openApps && openApps.length > 0) {
      openApps.forEach((appId) => {
        this.launchApp(appId);
      });
    }
  }
}

// Create a singleton instance
const appLauncher = new AppLauncher();
