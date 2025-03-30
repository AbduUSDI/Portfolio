document.addEventListener("DOMContentLoaded", () => {
  const clock = document.getElementById("clock")

  function updateClock() {
    const now = new Date()
    clock.innerText = now.toLocaleTimeString("fr-FR", { hour: "2-digit", minute: "2-digit" })
  }

  setInterval(updateClock, 1000)
  updateClock()

  // Make windows draggable
  function makeDraggable(element) {
    let pos1 = 0,
      pos2 = 0,
      pos3 = 0,
      pos4 = 0

    const header = element.querySelector(".window-header")
    if (header) {
      header.onmousedown = dragMouseDown
    }

    function dragMouseDown(e) {
      e.preventDefault()
      pos3 = e.clientX
      pos4 = e.clientY
      document.onmouseup = closeDragElement
      document.onmousemove = elementDrag
    }

    function elementDrag(e) {
      e.preventDefault()
      pos1 = pos3 - e.clientX
      pos2 = pos4 - e.clientY
      pos3 = e.clientX
      pos4 = e.clientY

      // Calculate new position
      let newTop = element.offsetTop - pos2
      let newLeft = element.offsetLeft - pos1

      // Apply boundaries
      const maxTop = window.innerHeight - element.offsetHeight
      const maxLeft = window.innerWidth - element.offsetWidth

      newTop = Math.max(0, Math.min(newTop, maxTop))
      newLeft = Math.max(0, Math.min(newLeft, maxLeft))

      element.style.top = newTop + "px"
      element.style.left = newLeft + "px"
    }

    function closeDragElement() {
      document.onmouseup = null
      document.onmousemove = null
    }
  }

  // Create window function
  function createWindow(title, content) {
    // Check if window already exists
    const existingWindow = document.querySelector(`.window[data-title="${title}"]`)
    if (existingWindow) {
      // Bring to front
      const windows = document.querySelectorAll(".window")
      windows.forEach((win) => (win.style.zIndex = "10"))
      existingWindow.style.zIndex = "11"
      return
    }

    const windowEl = document.createElement("div")
    windowEl.className = "window"
    windowEl.dataset.title = title

    // Position window in the center
    const width = Math.min(800, window.innerWidth * 0.8)
    const height = Math.min(600, window.innerHeight * 0.8)

    windowEl.style.width = `${width}px`
    windowEl.style.height = `${height}px`
    windowEl.style.left = `${(window.innerWidth - width) / 2}px`
    windowEl.style.top = `${(window.innerHeight - height) / 2}px`
    windowEl.style.zIndex = "11"

    windowEl.innerHTML = `
      <div class="window-header">
        <div class="window-title">${title}</div>
        <div class="window-controls">
          <div class="window-control window-minimize"></div>
          <div class="window-control window-maximize"></div>
          <div class="window-control window-close"></div>
        </div>
      </div>
      <div class="window-content">${content}</div>
    `

    document.body.appendChild(windowEl)
    makeDraggable(windowEl)

    // Add event listeners for window controls
    const closeBtn = windowEl.querySelector(".window-close")
    closeBtn.addEventListener("click", () => {
      windowEl.remove()
    })

    const minimizeBtn = windowEl.querySelector(".window-minimize")
    minimizeBtn.addEventListener("click", () => {
      windowEl.style.transform = "scale(0.1)"
      windowEl.style.opacity = "0"
      windowEl.style.bottom = "0"
      windowEl.style.right = "0"

      // Create a minimized indicator
      const indicator = document.createElement("div")
      indicator.className = "minimized-indicator"
      indicator.textContent = title
      document.body.appendChild(indicator)

      indicator.addEventListener("click", () => {
        windowEl.style.transform = "scale(1)"
        windowEl.style.opacity = "1"
        indicator.remove()
      })
    })

    const maximizeBtn = windowEl.querySelector(".window-maximize")
    maximizeBtn.addEventListener("click", () => {
      if (windowEl.classList.contains("maximized")) {
        windowEl.classList.remove("maximized")
        windowEl.style.width = `${width}px`
        windowEl.style.height = `${height}px`
        windowEl.style.left = `${(window.innerWidth - width) / 2}px`
        windowEl.style.top = `${(window.innerHeight - height) / 2}px`
      } else {
        windowEl.classList.add("maximized")
        windowEl.style.width = "100%"
        windowEl.style.height = "100%"
        windowEl.style.left = "0"
        windowEl.style.top = "0"
      }
    })
  }

  // Make createWindow available globally
  window.createWindow = createWindow

  document.querySelectorAll(".icon").forEach((icon) => {
    icon.addEventListener("dblclick", () => {
      const app = icon.dataset.app

      if (app === "about") {
        createWindow(
          "À propos",
          `
          <div class="about-container">
            <div class="about-header">
              <img src="assets/profile.jpg" alt="Abdurrahman USDI" class="profile-image">
              <div>
                <h2 class="about-title">Abdurrahman USDI</h2>
                <p class="about-subtitle">Développeur Web Full-Stack</p>
              </div>
            </div>
            
            <div class="about-description">
              <p>Passionné par le développement web depuis plus de 5 ans, je crée des applications web modernes, 
              performantes et accessibles. Mon expertise couvre à la fois le front-end et le back-end, 
              me permettant de concevoir des solutions complètes et cohérentes.</p>
              
              <p>J'aime relever de nouveaux défis techniques et rester à jour avec les dernières technologies 
              et bonnes pratiques du développement web.</p>
            </div>
            
            <div>
              <h3>Compétences techniques</h3>
              <div class="skills-container">
                <span class="skill-tag">HTML5</span>
                <span class="skill-tag">CSS3</span>
                <span class="skill-tag">JavaScript</span>
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">MySQL</span>
                <span class="skill-tag">React</span>
                <span class="skill-tag">Node.js</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Responsive Design</span>
                <span class="skill-tag">API REST</span>
              </div>
            </div>
            
            <div>
              <h3>Formation</h3>
              <p><strong>Diplôme de Développeur Web</strong> - École de développement web, 2020-2022</p>
              <p><strong>Formation continue</strong> - Certifications en ligne (Udemy, OpenClassrooms)</p>
            </div>
            
            <div>
              <h3>Langues</h3>
              <p>Français (natif), Anglais (professionnel), Arabe (notions)</p>
            </div>
            
            <div class="social-links">
              <a href="https://github.com" target="_blank" class="social-link">
                <img src="assets/github.svg" alt="GitHub">
                GitHub
              </a>
              <a href="https://www.linkedin.com/in/abdu-usdi-553877268/" target="_blank" class="social-link">
                <img src="assets/linkedin.svg" alt="LinkedIn">
                LinkedIn
              </a>
              <a href="mailto:abdu.usdi@gmail.com" class="social-link">
                <img src="assets/email.svg" alt="Email">
                abdu.usdi@gmail.com
              </a>
            </div>
          </div>
        `,
        )
      } else if (app === "projects") {
        createWindow(
          "Mes projets",
          `
          <div class="projects-container">
            <div class="project-card">
              <img src="assets/zoo-arcadia.jpg" alt="Zoo Arcadia" class="project-image">
              <div class="project-info">
                <h3 class="project-title">Zoo Arcadia</h3>
                <p class="project-description">Application web de gestion de zoo développée avec une architecture SOLID en PHP. 
                Permet la gestion des animaux, des enclos, des employés et des visites.</p>
                <div class="project-tags">
                  <span class="project-tag">PHP</span>
                  <span class="project-tag">MySQL</span>
                  <span class="project-tag">SOLID</span>
                  <span class="project-tag">JavaScript</span>
                </div>
                <a href="/Portfolio/Zoo-Arcadia-New/home" target="_blank" class="project-link">Voir le projet</a>
              </div>
            </div>
            
            <div class="project-card">
              <img src="assets/nouveau-ne.jpg" alt="Tout pour un nouveau-né" class="project-image">
              <div class="project-info">
                <h3 class="project-title">Tout pour un nouveau-né</h3>
                <p class="project-description">Site d'accompagnement parental offrant des conseils, des ressources et un forum 
                pour les jeunes parents. Inclut un système de suivi de croissance et un calendrier de vaccination.</p>
                <div class="project-tags">
                  <span class="project-tag">PHP</span>
                  <span class="project-tag">MySQL</span>
                  <span class="project-tag">JavaScript</span>
                  <span class="project-tag">AJAX</span>
                </div>
                <a href="/Portfolio/toutpourunnouveaune/home" target="_blank" class="project-link">Voir le projet</a>
              </div>
            </div>
            
            <div class="project-card">
              <img src="assets/e-learning.jpg" alt="E-learning" class="project-image">
              <div class="project-info">
                <h3 class="project-title">E-learning</h3>
                <p class="project-description">Plateforme de formation en ligne avec des cours interactifs, des quiz, 
                un système de progression et des certificats. Supporte différents formats de contenu.</p>
                <div class="project-tags">
                  <span class="project-tag">PHP</span>
                  <span class="project-tag">MySQL</span>
                  <span class="project-tag">JavaScript</span>
                  <span class="project-tag">HTML5/CSS3</span>
                </div>
                <a href="/Portfolio/e_learning/home" target="_blank" class="project-link">Voir le projet</a>
              </div>
            </div>
            
            <div class="project-card">
              <img src="assets/cours.jpg" alt="Plateforme de cours" class="project-image">
              <div class="project-info">
                <h3 class="project-title">Plateforme de cours</h3>
                <p class="project-description">Interface d'apprentissage avec gestion des cours, des étudiants et des enseignants. 
                Inclut un tableau de bord pour suivre les progrès et les performances.</p>
                <div class="project-tags">
                  <span class="project-tag">PHP</span>
                  <span class="project-tag">MySQL</span>
                  <span class="project-tag">Bootstrap</span>
                  <span class="project-tag">jQuery</span>
                </div>
                <a href="cours/index.php?page=home" target="_blank" class="project-link">Voir le projet</a>
              </div>
            </div>
            
            <div class="project-card">
              <img src="assets/abduclip.jpg" alt="Abduclip" class="project-image">
              <div class="project-info">
                <h3 class="project-title">Abduclip</h3>
                <p class="project-description">Plateforme de mini-jeux en cours de développement. Propose différents jeux 
                interactifs avec un système de classement et de récompenses.</p>
                <div class="project-tags">
                  <span class="project-tag">PHP</span>
                  <span class="project-tag">JavaScript</span>
                  <span class="project-tag">Canvas</span>
                  <span class="project-tag">WebSockets</span>
                </div>
                <a href="abduclip/src/public/index.php" target="_blank" class="project-link">Voir le projet</a>
              </div>
            </div>
            
            <div class="project-card">
              <img src="assets/portfolio.jpg" alt="Portfolio OS" class="project-image">
              <div class="project-info">
                <h3 class="project-title">Portfolio OS</h3>
                <p class="project-description">Ce portfolio que vous consultez actuellement, conçu comme un système d'exploitation 
                avec des fenêtres interactives et une interface utilisateur intuitive.</p>
                <div class="project-tags">
                  <span class="project-tag">HTML5</span>
                  <span class="project-tag">CSS3</span>
                  <span class="project-tag">JavaScript</span>
                  <span class="project-tag">UI/UX</span>
                </div>
                <a href="#" class="project-link">Vous y êtes !</a>
              </div>
            </div>
          </div>
        `,
        )
      } else if (app === "cv") {
        createWindow("Mon CV", "<iframe src='data/cv.pdf' style='width:100%;height:100%;border:none;'></iframe>")
      }
    })
  })
})

