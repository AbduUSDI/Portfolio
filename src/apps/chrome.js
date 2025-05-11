/**
 * Chrome Browser App for Portfolio OS
 */
function initChrome(container) {
  const addressInput = container.querySelector(".chrome-address-bar input");
  const refreshButton = container.querySelector(".chrome-button");
  const iframe = container.querySelector(".chrome-iframe");
  const tabClose = container.querySelector(".chrome-tab-close");
  const tab = container.querySelector(".chrome-tab");

  // Load URL in iframe
  function loadURL(url) {
    // Validate URL
    if (!url.startsWith("http://") && !url.startsWith("https://")) {
      url = "https://" + url;
    }

    // Update address bar
    addressInput.value = url;

    // Try to load URL in iframe
    try {
      iframe.src = url;

      // Update tab title (simplified - in a real browser this would come from the page)
      const domain = new URL(url).hostname;
      tab.textContent = domain;
      tabClose.textContent = "×";
      tab.appendChild(tabClose);
    } catch (error) {
      console.error("Error loading URL:", error);
      iframe.src = "about:blank";
      iframe.contentDocument.body.innerHTML = `
        <div style="padding: 20px; font-family: Arial, sans-serif;">
          <h2>Impossible de charger la page</h2>
          <p>L'URL "${url}" n'a pas pu être chargée.</p>
          <p>Erreur: ${error.message}</p>
        </div>
      `;
    }
  }

  // Handle address bar input
  addressInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      loadURL(addressInput.value);
    }
  });

  // Handle refresh button
  refreshButton.addEventListener("click", () => {
    loadURL(addressInput.value);
  });

  // Handle tab close
  tabClose.addEventListener("click", (e) => {
    e.stopPropagation();
    // In a real browser, this would close the tab
    // Here we'll just navigate to a blank page
    iframe.src = "about:blank";
    addressInput.value = "";
    tab.textContent = "Nouvel onglet";
    tabClose.textContent = "×";
    tab.appendChild(tabClose);
  });

  // Load initial URL (Google)
  loadURL("https://www.google.com");
}
