/**
 * PDF Viewer App for Portfolio OS
 * Used for displaying the CV
 */
function initPDFViewer(container) {
    const toolbar = container.querySelector(".cv-toolbar")
    const content = container.querySelector(".cv-content")
    const cvPage = container.querySelector(".cv-page")
  
    // Add zoom controls to toolbar
    const zoomControls = document.createElement("div")
    zoomControls.className = "zoom-controls"
  
    const zoomOutBtn = document.createElement("button")
    zoomOutBtn.textContent = "−"
    zoomOutBtn.title = "Zoom out"
  
    const zoomInBtn = document.createElement("button")
    zoomInBtn.textContent = "+"
    zoomInBtn.title = "Zoom in"
  
    const zoomResetBtn = document.createElement("button")
    zoomResetBtn.textContent = "100%"
    zoomResetBtn.title = "Reset zoom"
  
    zoomControls.appendChild(zoomOutBtn)
    zoomControls.appendChild(zoomResetBtn)
    zoomControls.appendChild(zoomInBtn)
  
    toolbar.appendChild(zoomControls)
  
    // Current zoom level
    let zoomLevel = 1
  
    // Zoom functions
    function zoomIn() {
      zoomLevel = Math.min(zoomLevel + 0.1, 2)
      applyZoom()
    }
  
    function zoomOut() {
      zoomLevel = Math.max(zoomLevel - 0.1, 0.5)
      applyZoom()
    }
  
    function resetZoom() {
      zoomLevel = 1
      applyZoom()
    }
  
    function applyZoom() {
      cvPage.style.transform = `scale(${zoomLevel})`
      cvPage.style.transformOrigin = "top center"
      zoomResetBtn.textContent = `${Math.round(zoomLevel * 100)}%`
    }
  
    // Add event listeners
    zoomInBtn.addEventListener("click", zoomIn)
    zoomOutBtn.addEventListener("click", zoomOut)
    zoomResetBtn.addEventListener("click", resetZoom)
  
    // Add keyboard shortcuts
    container.addEventListener("keydown", (e) => {
      if (e.ctrlKey) {
        if (e.key === "+" || e.key === "=") {
          e.preventDefault()
          zoomIn()
        } else if (e.key === "-") {
          e.preventDefault()
          zoomOut()
        } else if (e.key === "0") {
          e.preventDefault()
          resetZoom()
        }
      }
    })
  
    // Add mouse wheel zoom
    content.addEventListener("wheel", (e) => {
      if (e.ctrlKey) {
        e.preventDefault()
        if (e.deltaY < 0) {
          zoomIn()
        } else {
          zoomOut()
        }
      }
    })
  
    // Initialize
    resetZoom()
  }
  