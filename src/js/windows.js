// windows.js - gestion des fenêtres de style Windows

let windowCount = 0;

function createWindow(appName, contentHTML = "") {
  windowCount++;
  const windowId = `window-${windowCount}`;

  const win = document.createElement("div");
  win.classList.add("window");
  win.setAttribute("id", windowId);

  win.innerHTML = `
    <div class="window-header">
      <span class="window-title">${appName}</span>
      <div class="window-controls">
        <button class="minimize">🗕</button>
        <button class="maximize">🗖</button>
        <button class="close">✖</button>
      </div>
    </div>
    <div class="window-content">
      ${contentHTML}
    </div>
  `;

  document.body.appendChild(win);
  makeDraggable(win);
  attachWindowEvents(win);
  bringToFront(win);

  return win;
}

function attachWindowEvents(win) {
  const closeBtn = win.querySelector(".close");
  const maximizeBtn = win.querySelector(".maximize");
  const minimizeBtn = win.querySelector(".minimize");

  closeBtn.onclick = () => win.remove();

  maximizeBtn.onclick = () => {
    win.classList.toggle("maximized");
  };

  minimizeBtn.onclick = () => {
    win.classList.toggle("minimized");
  };

  win.addEventListener("mousedown", () => bringToFront(win));
}

function makeDraggable(win) {
  const header = win.querySelector(".window-header");
  let offsetX, offsetY, isDragging = false;

  header.onmousedown = (e) => {
    isDragging = true;
    offsetX = e.clientX - win.offsetLeft;
    offsetY = e.clientY - win.offsetTop;
    document.onmousemove = drag;
    document.onmouseup = () => {
      isDragging = false;
      document.onmousemove = null;
    };
  };

  function drag(e) {
    if (!isDragging) return;
    win.style.left = `${e.clientX - offsetX}px`;
    win.style.top = `${e.clientY - offsetY}px`;
  }
}

function bringToFront(win) {
  const windows = document.querySelectorAll(".window");
  windows.forEach((w) => (w.style.zIndex = 0));
  win.style.zIndex = 10;
}

// Rendre accessible globalement
window.createWindow = createWindow;
